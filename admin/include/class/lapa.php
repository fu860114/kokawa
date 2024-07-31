<?php

	class Lapa{

		//產生拉霸卡
		function create($_mid){

			global $g_db;

			if($_mid == "")
				return false;

			//搜尋拉霸獎品
			$sqlstr = "SELECT * FROM `".Lapa_Prize."` WHERE `default` = 'Y' ORDER BY `serno`";
			$PrizeList = $g_db->getAll($sqlstr);

			//計算機率總數
			$Probability = 0;
			for($i = 0; $i < sizeof($PrizeList); $i++)
				$Probability += $PrizeList[$i]['probability'];

			//中獎結果
			if($Probability > 0){

				$PrizeResult = $this->draw($PrizeList);

				//卡片序號
				$sqlstr = "SELECT `sn` FROM `".Lapa_List."` ORDER BY `serno` desc";
				$LastSN = $g_db->getOne($sqlstr);

				//卡片編號
				$CardNOArray = array("A","B","C","D","E","F","G","H","I","J","K","L","M","O","P","Q","R","S","T","U","V","W","X","Y","Z","1","2","3","4","5","6","7","8","9");
				do{

					$CardNO = "";
					for($i = 0; $i <= 10; $i++)
						$CardNO .= $CardNOArray [ (rand(0,sizeof($CardNOArray))) ];
						
					$sqlstr = "SELECT 1 FROM `".Lapa_List."` WHERE `cardno` = '".$CardNO."'";

				}while($g_db->numRows($g_db->query($sqlstr)) > 0);

				$sqlstr = "SELECT `sn` FROM `".Lapa_List."` ORDER BY `serno` desc";
				$LastSN = $g_db->getOne($sqlstr);


				$lapadata['owner']     = $_mid;
				$lapadata['sn']        = "A".sprintf("%06d",substr($LastSN,-6)+1);
				$lapadata['cardno']    = $CardNO;
				$lapadata['prize']     = $PrizeList[$PrizeResult]['serno'];
				$lapadata['ori_prize'] = 0;
				$lapadata['result']    = 0;
				$lapadata['changer']   = 0;
				$lapadata['creator']   = 0;
				$lapadata['bdate']     = date("Y-m-d H:i:s");

				$LapaID = $g_db->create(Lapa_List,$lapadata);

				return $LapaID;

			}else{

				return false;

			}

		}

		//TOP贈與拉霸卡
		function topcreate($_mid,$_aid){

			global $g_db;

			if($_mid == "")
				return false;

			//搜尋拉霸獎品
			$sqlstr = "SELECT * FROM `".Lapa_Prize."` WHERE `default` = 'Y' ORDER BY `serno`";
			$PrizeList = $g_db->getAll($sqlstr);

			//計算機率總數
			$Probability = 0;
			for($i = 0; $i < sizeof($PrizeList); $i++)
				$Probability += $PrizeList[$i]['probability'];

			//中獎結果
			if($Probability > 0){

				$PrizeResult = $this->draw($PrizeList);

				//卡片序號
				$sqlstr = "SELECT `sn` FROM `".Lapa_List."` ORDER BY `serno` desc";
				$LastSN = $g_db->getOne($sqlstr);

				//卡片編號
				$CardNOArray = array("A","B","C","D","E","F","G","H","I","J","K","L","M","O","P","Q","R","S","T","U","V","W","X","Y","Z","1","2","3","4","5","6","7","8","9");
				do{

					$CardNO = "";
					for($i = 0; $i <= 10; $i++)
						$CardNO .= $CardNOArray [ (rand(0,sizeof($CardNOArray))) ];
						
					$sqlstr = "SELECT 1 FROM `".Lapa_List."` WHERE `cardno` = '".$CardNO."'";

				}while($g_db->numRows($g_db->query($sqlstr)) > 0);

				$sqlstr = "SELECT `sn` FROM `".Lapa_List."` ORDER BY `serno` desc";
				$LastSN = $g_db->getOne($sqlstr);


				$lapadata['owner']     = $_mid;
				$lapadata['sn']        = "A".sprintf("%06d",substr($LastSN,-6)+1);
				$lapadata['cardno']    = $CardNO;
				$lapadata['prize']     = $PrizeList[$PrizeResult]['serno'];
				$lapadata['ori_prize'] = 0;
				$lapadata['result']    = 0;
				$lapadata['changer']   = 0;
				$lapadata['creator']   = $_aid;
				$lapadata['bdate']     = date("Y-m-d H:i:s");

				$LapaID = $g_db->create(Lapa_List,$lapadata);

				return $LapaID;

			}else{

				return false;

			}

		}

		//搜尋拉霸卡數量
		function cardnum($_mid){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Lapa_List."` WHERE `owner` = '".$_mid."' and `result` = '0'";

			return ($g_db->numRows( $g_db->query($sqlstr) ));

		}

		//使用拉霸卡
		function usecard($_mid,$_price,$_suppprice,$_equla = false){

			global $g_db;

			//拉霸設定
			$sqlstr = "SELECT * FROM `".Lapa_Config."` ORDER BY `serno`";
			$ConfigTemp = $g_db->getAll( $sqlstr );
			foreach($ConfigTemp as $ConfigData)
				$Config[ $ConfigData['serno'] ] = $ConfigData;

			$sqlstr = "SELECT * FROM `".Lapa_List."` WHERE `owner` = '".$_mid."' and `result` = '0' ORDER BY `serno`";

			if($g_db->numRows( $g_db->query($sqlstr) ) > 0){

				$LapaData = $g_db->getRow($sqlstr);

				$Prize = $LapaData['prize'];

				//歆宇商品有機率轉成贈品
				$Random = rand(1,100);
				$sqlstr = "SELECT SUM(`storage`) storage_total FROM `".Lapa_Gift."`";
				if($g_db->getOne($sqlstr) > 0 && $_equla && $Random < $Config[1]['value']){

					$sqlstr = "SELECT * FROM (SELECT *,(SELECT `storage` FROM  `".Lapa_Gift."` WHERE  `serno` =  `".Lapa_Prize."`.`value`) storage FROM `".Lapa_Prize."` WHERE  `type` =  'gift')lapalist WHERE `storage` > 0";
					if($g_db->numRows($g_db->query($sqlstr)) > 0){

						$GiftList = $g_db->getAll($sqlstr);

						$DrawGift = $this->draw($GiftList);

						if($DrawGift !== false)
							$Prize = $GiftList[$DrawGift]['serno'];

					}

				}

				//原本獎品資料
				$sqlstr = "SELECT * FROM `".Lapa_Prize."` WHERE `serno` = '".$Prize."'";
				$PrizeData = $g_db->getRow($sqlstr);

				//如果原本為現金折扣，而結帳金額大預實際結帳金額時
				if($PrizeData['type'] == "discash"){

					if($PrizeData['value'] > $_price){

						$PercentChance[0] = $Config[2]['value'];
						$PercentChance[1] = $Config[4]['value'];
						$PercentChance[2] = $Config[6]['value'];
						$PercentChance[3] = $Config[7]['value'];

						$Probability = 0;
						foreach($PercentChance as $value)
							$Probability += $value;

						$PrizeRand = rand(1, $Probability);
						$count = 0;
						foreach($PercentChance as $key => $value){

							$count += $value;
							if($count >= $PrizeRand){
								$PrizeResult = $key;
								break;
							}

						}

						switch($key){

							case 0:
								$Prize = $Config[3]['value'];
								break;
							case 1:
								$Prize = $Config[5]['value'];
								break;
							case 2:
								$Prize = $Config[7]['value'];
								break;
							case 3:
								$Prize = $Config[9]['value'];
								break;
							default:
								$Prize = $Config[3]['value'];
								break;

						}

					}

				}

				//原始結帳金額大於10000
				if($PrizeData['type'] == "dispersent"){

					if($_price > $Config[10]['value']){

						//如果超過折抵金額超過1000
						if( ($_price - $_suppprice) > $Config[15]['value']){

							$PercentChance[0] = $Config[16]['value'];
							$PercentChance[1] = $Config[18]['value'];
							$PercentChance[2] = $Config[20]['value'];
							$PercentChance[3] = $Config[22]['value'];

							$Probability = 0;
							foreach($PercentChance as $value)
								$Probability += $value;

							$PrizeRand = rand(1, $Probability);
							$count = 0;
							foreach($PercentChance as $key => $value){

								$count += $value;
								if($count >= $PrizeRand){
									$PrizeResult = $key;
									break;
								}

							}

							switch($key){

								case 0:
									$Prize = $Config[17]['value'];
									break;
								case 1:
									$Prize = $Config[19]['value'];
									break;
								case 2:
									$Prize = $Config[21]['value'];
									break;
								case 3:
									$Prize = $Config[23]['value'];
									break;
								default:
									$Prize = $Config[17]['value'];
									break;

							}

						}else{

							$PercentChance[0] = $Config[11]['value'];
							$PercentChance[1] = $Config[13]['value'];

							$Probability = 0;
							foreach($PercentChance as $value)
								$Probability += $value;

							$PrizeRand = rand(1, $Probability);
							$count = 0;
							foreach($PercentChance as $key => $value){

								$count += $value;
								if($count >= $PrizeRand){
									$PrizeResult = $key;
									break;
								}

							}

							switch($key){

								case 0:
									$Prize = $Config[12]['value'];
									break;
								case 1:
									$Prize = $Config[14]['value'];
									break;
								default:
									$Prize = $Config[12]['value'];
									break;

							}

						}

					}

				}

				$data['result']   = $Prize;
				$data['use_date'] = date("Y-m-d H:i:s");

				$g_db->update(Lapa_List,$data,"serno",$LapaData['serno']);

				return $data['result'];

			}else{

				return false;

			}

		}

		function draw($_prizelist){

			//計算機率總數
			$Probability = 0;
			for($i = 0; $i < sizeof($_prizelist); $i++)
				$Probability += $_prizelist[$i]['probability'];

			//中獎結果
			if($Probability > 0){

				$PrizeRand = rand(1, $Probability);
				$count = 0;
				for($i = 0; $i < sizeof($_prizelist); $i++){

					$count += $_prizelist[$i]['probability'];
					if($count >= $PrizeRand){
						$PrizeResult = $i;
						break;
					}

				}

				return $i;

			}else{

				return false;

			}

		}

		function reload($_id,$_aid){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Lapa_List."` WHERE `serno` = '".$_id."'";
			$LapaData = $g_db->getRow($sqlstr);

			if($LapaData['result'] == 0){

				//搜尋拉霸獎品
				$sqlstr = "SELECT * FROM `".Lapa_Prize."` WHERE `default` = 'Y' ORDER BY `serno`";
				$PrizeList = $g_db->getAll($sqlstr);

				//計算機率總數
				$Probability = 0;
				for($i = 0; $i < sizeof($PrizeList); $i++)
					$Probability += $PrizeList[$i]['probability'];

				//中獎結果
				if($Probability > 0){

					$PrizeResult = $this->draw($PrizeList);

					$lapadata = "";
					$lapadata['prize']     = $PrizeList[$PrizeResult]['serno'];
					$lapadata['changer']   = $_aid;
					if($LapaData['ori_prize'] == 0)
						$lapadata['ori_prize'] = $LapaData['prize'];

					$LapaID = $g_db->update(Lapa_List,$lapadata,"serno",$_id);

					return $LapaID;

				}else{

					return false;

				}

			}else{

				return false;

			}

		}

	}

?>