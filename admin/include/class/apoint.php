<?php

	class APoint{

		//新增點數
		function add_point($_member_id, $_get_apoint, $_startdate, $_enddate, $_type, $_creator = 0){

			global $g_db;

			if($_member_id == "" || ($_get_apoint * 1) <= 0)
				return false;

			$data_history['member_id']   = $_member_id;
			$data_history['history_ids'] = "";
			$data_history['apoint']      = $_get_apoint * 1;
			$data_history['type']        = $_type;
			$data_history['creator']     = $_creator;
			$data_history['bdate']       = date("Y-m-d H:i:s");

			$APointHistoryID = $g_db->create(APoint_History, $data_history);

			$data_apointlist['member_id']   = $_member_id;
			$data_apointlist['history_id']  = $APointHistoryID;
			$data_apointlist['apoint_ori']  = $_get_apoint;
			$data_apointlist['apoint_last'] = $_get_apoint;
			$data_apointlist['start_date']  = $_startdate;
			$data_apointlist['end_date']    = $_enddate;
			$data_apointlist['useable']     = "Y";
			$data_apointlist['bdate']       = date("Y-m-d H:i:s");

			$g_db->create(APoint_List, $data_apointlist);

			return true;

		}

		//使用點數
		function use_point($_member_id, $_use_apoint, $_type, $_orderno = ""){

			global $g_db;;

			if($_member_id == "" || $_use_apoint <= 0)
				return false;

			//檢查A幣是否足夠
			$sqlstr = "SELECT sum(`apoint_last`) FROM `".APoint_List."` WHERE `member_id` = '".$_member_id."' and `useable` = 'Y' and `start_date` <= '".date("Y-m-d H:i:s")."' and `end_date` > '".date("Y-m-d H:i:s")."' ORDER BY `serno`";
			$APointSum = $g_db->getOne($sqlstr);
			if($APointSum < $_use_apoint)
				return false;

			//取得AP列表
			$sqlstr = "SELECT `serno`,`apoint_last` FROM `".APoint_List."` WHERE `member_id` = '".$_member_id."' and `useable` = 'Y' and `start_date` <= '".date("Y-m-d H:i:s")."' and `end_date` > '".date("Y-m-d H:i:s")."' ORDER BY `end_date`,`serno`";
			$APointDataList = $g_db->getAll($sqlstr);

			$APointList = "";
			foreach($APointDataList as $value){
				$APointList[ ($value['serno']) ]['apoint']     = $value['apoint_last'];
				$APointList[ ($value['serno']) ]['apoint_use'] = 0;
			}

			//計算扣除AP
			$APointLast = $_use_apoint;
			foreach($APointList as $APointID => $value){
				if($APointLast > 0){
					if($APointLast > $APointList[$APointID]['apoint']){
						$APointList[$APointID]['apoint_use'] = $APointList[$APointID]['apoint'];
						$APointLast -= $APointList[$APointID]['apoint'];
					}else{
						$APointList[$APointID]['apoint_use'] = $APointLast;
						$APointLast = 0;
						break;
					}
				}
			}

			$APointUseList = array();
			foreach($APointList as $APointID => $value){

				if($value['apoint_use'] > 0){

					$data_last = "";
					$data_last['apoint_last'] = $value['apoint'] - $value['apoint_use'];
					$data_last['use_date']    = date("Y-m-d H:i:s");

					$g_db->update(APoint_List,$data_last,"serno",$APointID);

					array_push($APointUseList,$APointID);

				}

			}

			$data_apointuse = "";
			$data_apointuse['member_id']   = $_member_id;
			$data_apointuse['history_ids'] = json_encode($APointUseList);
			$data_apointuse['apoint']      = $_use_apoint * -1;
			$data_apointuse['type']        = $_type;
			$data_apointuse['creator']     = 0;
			if($_orderno != "") $data_apointuse['order_no']    = $_orderno;
			$data_apointuse['bdate']       = date("Y-m-d H:i:s");

			$g_db->create(APoint_History,$data_apointuse);

			return true;

		}

		//搜尋現有點數
		function search_point($_member_id){

			global $g_db;

			if($_member_id == "")
				return 0;

			$sqlstr = "SELECT sum(`apoint_last`) FROM `".APoint_List."` WHERE `member_id` = '".$_member_id."' and `useable` = 'Y' and `start_date` <= '".date("Y-m-d H:i:s")."' and `end_date` > '".date("Y-m-d H:i:s")."'";
			$APointSum = $g_db->getOne($sqlstr);

			return $APointSum * 1;

		}

		//搜尋未進帳點數
		function search_point_wait($_member_id){

			global $g_db;

			if($_member_id == "")
				return 0;

			$sqlstr = "SELECT sum(`apoint_last`) FROM `".APoint_List."` WHERE `member_id` = '".$_member_id."' and `useable` = 'Y' and `start_date` > '".date("Y-m-d H:i:s")."'";
			$APointSum = $g_db->getOne($sqlstr);

			return $APointSum * 1;

		}

		//搜尋天數內即將過期的點數
		function search_expire_in_day($_member_id, $_day){

			global $g_db;

			if($_member_id == "" || $_member_id <= 0)
				return 0;

			$sqlstr = "SELECT `end_date`,`apoint_last` FROM `".APoint_List."` WHERE `member_id` = '".$_member_id."' and `useable` = 'Y' and `apoint_last` > 0 and `end_date` < '".date("Y-m-d H:i:s",mktime(0,0,0,date("m"),date("d")+$_day,date("Y")))."' ORDER BY `end_date`";
			if($g_db->numRows($g_db->query($sqlstr)) > 0){

				$APointDataTemp = $g_db->getRow($sqlstr);

				$sqlstr = "SELECT SUM(`apoint_last`) FROM `".APoint_List."` WHERE `member_id` = '".$_member_id."' and `useable` = 'Y' and `apoint_last` > 0 and `end_date` like '".substr($APointDataTemp['end_date'],0,10)."%'";
				$APointLast = $g_db->getOne($sqlstr);

				$APointData['apoint'] = $APointLast * 1;
				$APointData['date']   = $APointDataTemp['end_date'];

				return $APointData;

			}else{

				return false;

			}

		}

	}

?>