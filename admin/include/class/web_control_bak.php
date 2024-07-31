<?php

	class web_control{

		var $shopconfig;
		var $shopid;
		var $block;
		var $pageshownum;
		var $pagenoshownum;
		var $backendmode;

		function web_control($_shopconfig,$_shopid,$_pageshownum = 10,$_pagenoshownum = 10){

			$this->shopconfig    = $_shopconfig;
			$this->shopid        = $_shopid;
			$this->pageshownum   = $_pageshownum;
			$this->pagenoshownum = $_pagenoshownum;
			$this->backendmode   = false;

		}

		function SelectBlock($_block){

			$this->block = $_block;

		}

		function BackendMode(){

			$this->backendmode = true;

		}

		function ListPage($_url,$_tag){

			if($this->shopconfig[$this->block] == "ACTIVITY")
				return $this->ListPage_ACTIVITY($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "ACTIVITYS")
				return $this->ListPage_ACTIVITYS($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "TEXT")
				return $this->ListPage_TEXT($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "SUBBANNER") //**
				return $this->ListPage_SUBBANNER($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "LOGO")
				return $this->ListPage_LOGO($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "FUN_ACTION")
				return $this->ListPage_FUN_ACTION($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "MAINSHOW") // **
				return $this->ListPage_MAINSHOW($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "MAINSHOW3") // **
				return $this->ListPage_MAINSHOW3($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "HOTSALE1")
				return $this->ListPage_HOTSALE1($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "HOTSALE2")  // **
				return $this->ListPage_HOTSALE2($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "ADVERTISING") // **
				return $this->ListPage_ADVERTISING($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "ADVERTISING2")
				return $this->ListPage_ADVERTISING2($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "UNIQUE")
				return $this->ListPage_UNIQUE($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "POP") // **
				return $this->ListPage_POP($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "SUBSHOW") // **
				return $this->ListPage_SUBSHOW($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "BANNER") // **
				return $this->ListPage_BANNER($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "BANNERS")
				return $this->ListPage_BANNERS($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "BANNERB")
				return $this->ListPage_BANNERB($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "SUBBANNERB")
				return $this->ListPage_SUBBANNERB($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "PC_SHOW")
				return $this->ListPage_PC_SHOW($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "PC_SHOW2") // **
				return $this->ListPage_PC_SHOW2($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "PC_SHOW3")
				return $this->ListPage_PC_SHOW3($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "BEAUTY_SHOW")
				return $this->ListPage_BEAUTY_SHOW($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "BEAUTY_SHOW2")
				return $this->ListPage_BEAUTY_SHOW2($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "CLOTH_SHOW")
				return $this->ListPage_CLOTH_SHOW($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "PROD_SHOW")
				return $this->ListPage_PROD_SHOW($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "PROD_SHOW_L")
				return $this->ListPage_PROD_SHOW_L($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "FLASH_SHOW")
				return $this->ListPage_FLASH_SHOW($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "TEXT_SHOW")
				return $this->ListPage_TEXT_SHOW($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "FUN_SHOW")
				return $this->ListPage_FUN_SHOW($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "FUN_SHOW2")
				return $this->ListPage_FUN_SHOW2($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "STORE")
				return $this->ListPage_STORE($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "INDEX_CLASS")
				return $this->ListPage_INDEX_CLASS($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "SHOP_CLASS")
				return $this->ListPage_SHOP_CLASS($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "BANNER_BRANCH")
				return $this->ListPage_BANNER_BRANCH($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "PRODSHOW_BRANCH")
				return $this->ListPage_PRODSHOW_BRANCH($_url,$_tag);

		}

		function EditPage($_url,$_tag){

			if($this->shopconfig[$this->block] == "ACTIVITY")
				return $this->EditPage_ACTIVITY($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "ACTIVITYS")
				return $this->EditPage_ACTIVITYS($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "TEXT")
				return $this->EditPage_TEXT($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "SUBBANNER")
				return $this->EditPage_SUBBANNER($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "LOGO")
				return $this->EditPage_LOGO($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "FUN_ACTION")
				return $this->EditPage_FUN_ACTION($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "MAINSHOW")
				return $this->EditPage_MAINSHOW($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "MAINSHOW3")
				return $this->EditPage_MAINSHOW3($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "HOTSALE1")
				return $this->EditPage_HOTSALE1($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "HOTSALE2")
				return $this->EditPage_HOTSALE2($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "ADVERTISING")
				return $this->EditPage_ADVERTISING($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "ADVERTISING2")
				return $this->EditPage_ADVERTISING2($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "UNIQUE")
				return $this->EditPage_UNIQUE($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "POP")
				return $this->EditPage_POP($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "SUBSHOW")
				return $this->EditPage_SUBSHOW($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "BANNER")
				return $this->EditPage_BANNER($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "BANNERS")
				return $this->EditPage_BANNERS($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "BANNERB")
				return $this->EditPage_BANNERB($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "SUBBANNERB")
				return $this->EditPage_SUBBANNERB($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "PC_SHOW")
				return $this->EditPage_PC_SHOW($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "PC_SHOW2")
				return $this->EditPage_PC_SHOW2($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "PC_SHOW3")
				return $this->EditPage_PC_SHOW3($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "BEAUTY_SHOW")
				return $this->EditPage_BEAUTY_SHOW($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "BEAUTY_SHOW2")
				return $this->EditPage_BEAUTY_SHOW2($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "CLOTH_SHOW")
				return $this->EditPage_CLOTH_SHOW($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "PROD_SHOW")
				return $this->EditPage_PROD_SHOW($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "PROD_SHOW_L")
				return $this->EditPage_PROD_SHOW_L($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "FLASH_SHOW")
				return $this->EditPage_FLASH_SHOW($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "TEXT_SHOW")
				return $this->EditPage_TEXT_SHOW($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "FUN_SHOW")
				return $this->EditPage_FUN_SHOW($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "FUN_SHOW2")
				return $this->EditPage_FUN_SHOW2($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "STORE")
				return $this->EditPage_STORE($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "INDEX_CLASS")
				return $this->EditPage_INDEX_CLASS($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "SHOP_CLASS")
				return $this->EditPage_SHOP_CLASS($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "BANNER_BRANCH")
				return $this->EditPage_BANNER_BRANCH($_url,$_tag);
			elseif($this->shopconfig[$this->block] == "PRODSHOW_BRANCH")
				return $this->EditPage_PRODSHOW_BRANCH($_url,$_tag);


		}

		function ConfigPage($_url){

			if($this->shopconfig[$this->block] == "MAINSHOW")
				return $this->ConfigPage_MAINSHOW($_url);
			elseif($this->shopconfig[$this->block] == "MAINSHOW3")
				return $this->ConfigPage_MAINSHOW3($_url);
			elseif($this->shopconfig[$this->block] == "SUBSHOW")
				return $this->ConfigPage_SUBSHOW($_url);
			elseif($this->shopconfig[$this->block] == "SHOP_CLASS")
				return $this->ConfigPage_SHOP_CLASS($_url);


		}

		function ConfigSave(){

			if($this->shopconfig[$this->block] == "MAINSHOW")
				$this->ConfigSave_MAINSHOW();
			elseif($this->shopconfig[$this->block] == "MAINSHOW3")
				return $this->ConfigSave_SMAINSHOW3($_url);
			elseif($this->shopconfig[$this->block] == "SUBSHOW")
				return $this->ConfigSave_SUBSHOW($_url);
			elseif($this->shopconfig[$this->block] == "SHOP_CLASS")
				return $this->ConfigSave_SHOP_CLASS($_url);

		}

		function EditSave(){

			if($this->shopconfig[$this->block] == "ACTIVITY")
				$this->EditSave_ACTIVITY();
			elseif($this->shopconfig[$this->block] == "ACTIVITYS")
				$this->EditSave_ACTIVITYS();
			elseif($this->shopconfig[$this->block] == "TEXT")
				$this->EditSave_TEXT();
			elseif($this->shopconfig[$this->block] == "SUBBANNER")
				$this->EditSave_SUBBANNER();
			elseif($this->shopconfig[$this->block] == "LOGO")
				$this->EditSave_LOGO();
			elseif($this->shopconfig[$this->block] == "FUN_ACTION")
				$this->EditSave_FUN_ACTION();
			elseif($this->shopconfig[$this->block] == "MAINSHOW")
				$this->EditSave_MAINSHOW();
			elseif($this->shopconfig[$this->block] == "MAINSHOW3")
				$this->EditSave_MAINSHOW3();
			elseif($this->shopconfig[$this->block] == "HOTSALE1")
				$this->EditSave_HOTSALE1();
			elseif($this->shopconfig[$this->block] == "HOTSALE2")
				$this->EditSave_HOTSALE2();
			elseif($this->shopconfig[$this->block] == "ADVERTISING")
				$this->EditSave_ADVERTISING();
			elseif($this->shopconfig[$this->block] == "ADVERTISING2")
				$this->EditSave_ADVERTISING2();
			elseif($this->shopconfig[$this->block] == "UNIQUE")
				$this->EditSave_UNIQUE();
			elseif($this->shopconfig[$this->block] == "POP")
				$this->EditSave_POP();
			elseif($this->shopconfig[$this->block] == "SUBSHOW")
				$this->EditSave_SUBSHOW();
			elseif($this->shopconfig[$this->block] == "BANNER")
				$this->EditSave_BANNER();
			elseif($this->shopconfig[$this->block] == "BANNERS")
				$this->EditSave_BANNERS();
			elseif($this->shopconfig[$this->block] == "BANNERB")
				$this->EditSave_BANNERB();
			elseif($this->shopconfig[$this->block] == "SUBBANNERB")
				$this->EditSave_SUBBANNERB();
			elseif($this->shopconfig[$this->block] == "PC_SHOW")
				$this->EditSave_PC_SHOW();
			elseif($this->shopconfig[$this->block] == "PC_SHOW2")
				$this->EditSave_PC_SHOW2();
			elseif($this->shopconfig[$this->block] == "PC_SHOW3")
				$this->EditSave_PC_SHOW3();
			elseif($this->shopconfig[$this->block] == "BEAUTY_SHOW")
				$this->EditSave_BEAUTY_SHOW();
			elseif($this->shopconfig[$this->block] == "BEAUTY_SHOW2")
				$this->EditSave_BEAUTY_SHOW2();
			elseif($this->shopconfig[$this->block] == "CLOTH_SHOW")
				$this->EditSave_CLOTH_SHOW();
			elseif($this->shopconfig[$this->block] == "PROD_SHOW")
				$this->EditSave_PROD_SHOW();
			elseif($this->shopconfig[$this->block] == "PROD_SHOW_L")
				$this->EditSave_PROD_SHOW_L();
			elseif($this->shopconfig[$this->block] == "FLASH_SHOW")
				$this->EditSave_FLASH_SHOW();
			elseif($this->shopconfig[$this->block] == "TEXT_SHOW")
				$this->EditSave_TEXT_SHOW();
			elseif($this->shopconfig[$this->block] == "FUN_SHOW")
				$this->EditSave_FUN_SHOW();
			elseif($this->shopconfig[$this->block] == "FUN_SHOW2")
				$this->EditSave_FUN_SHOW2();
			elseif($this->shopconfig[$this->block] == "STORE")
				$this->EditSave_STORE();
			elseif($this->shopconfig[$this->block] == "INDEX_CLASS")
				$this->EditSave_INDEX_CLASS();
			elseif($this->shopconfig[$this->block] == "SHOP_CLASS")
				$this->EditSave_SHOP_CLASS();
			elseif($this->shopconfig[$this->block] == "BANNER_BRANCH")
				$this->EditSave_BANNER_BRANCH();
			elseif($this->shopconfig[$this->block] == "PRODSHOW_BRANCH")
				$this->EditSave_PRODSHOW_BRANCH();

		}

		function Delete(){

			if($this->shopconfig[$this->block] == "SHOP_CLASS"){
				$this->Delete_SHOP_CLASS();
			}else{
				$this->Delete_Default();
			}

		}

		function CreateHtml($_date){

			if($this->shopconfig[$this->block] == "ACTIVITY")
				$this->CreateHtml_ACTIVITY($_date);
			elseif($this->shopconfig[$this->block] == "ACTIVITYS")
				$this->CreateHtml_ACTIVITYS($_date);
			elseif($this->shopconfig[$this->block] == "TEXT")
				$this->CreateHtml_TEXT($_date);
			elseif($this->shopconfig[$this->block] == "SUBBANNER")
				$this->CreateHtml_SUBBANNER($_date);
			elseif($this->shopconfig[$this->block] == "LOGO")
				$this->CreateHtml_LOGO($_date);
			elseif($this->shopconfig[$this->block] == "FUN_ACTION")
				$this->CreateHtml_FUN_ACTION($_date);
			elseif($this->shopconfig[$this->block] == "MAINSHOW")
				$this->CreateHtml_MAINSHOW($_date);
			elseif($this->shopconfig[$this->block] == "MAINSHOW3")
				$this->CreateHtml_MAINSHOW3($_date);
			elseif($this->shopconfig[$this->block] == "HOTSALE1")
				$this->CreateHtml_HOTSALE1($_date);
			elseif($this->shopconfig[$this->block] == "HOTSALE2")
				$this->CreateHtml_HOTSALE2($_date);
			elseif($this->shopconfig[$this->block] == "ADVERTISING")
				$this->CreateHtml_ADVERTISING($_date);
			elseif($this->shopconfig[$this->block] == "ADVERTISING2")
				$this->CreateHtml_ADVERTISING2($_date);
			elseif($this->shopconfig[$this->block] == "UNIQUE")
				$this->CreateHtml_UNIQUE($_date);
			elseif($this->shopconfig[$this->block] == "POP")
				$this->CreateHtml_POP($_date);
			elseif($this->shopconfig[$this->block] == "SUBSHOW")
				$this->CreateHtml_SUBSHOW($_date);
			elseif($this->shopconfig[$this->block] == "BANNER")
				$this->CreateHtml_BANNER($_date);
			elseif($this->shopconfig[$this->block] == "BANNERS")
				$this->CreateHtml_BANNERS($_date);
			elseif($this->shopconfig[$this->block] == "BANNERB")
				$this->CreateHtml_BANNERB($_date);
			elseif($this->shopconfig[$this->block] == "SUBBANNERB")
				$this->CreateHtml_SUBBANNERB($_date);
			elseif($this->shopconfig[$this->block] == "PC_SHOW")
				$this->CreateHtml_PC_SHOW($_date);
			elseif($this->shopconfig[$this->block] == "PC_SHOW2")
				$this->CreateHtml_PC_SHOW2($_date);
			elseif($this->shopconfig[$this->block] == "PC_SHOW3")
				$this->CreateHtml_PC_SHOW3($_date);
			elseif($this->shopconfig[$this->block] == "BEAUTY_SHOW")
				$this->CreateHtml_BEAUTY_SHOW($_date);
			elseif($this->shopconfig[$this->block] == "BEAUTY_SHOW2")
				$this->CreateHtml_BEAUTY_SHOW2($_date);
			elseif($this->shopconfig[$this->block] == "CLOTH_SHOW")
				$this->CreateHtml_CLOTH_SHOW($_date);
			elseif($this->shopconfig[$this->block] == "PROD_SHOW")
				$this->CreateHtml_PROD_SHOW($_date);
			elseif($this->shopconfig[$this->block] == "PROD_SHOW_L")
				$this->CreateHtml_PROD_SHOW_L($_date);
			elseif($this->shopconfig[$this->block] == "FLASH_SHOW")
				$this->CreateHtml_FLASH_SHOW($_date);
			elseif($this->shopconfig[$this->block] == "TEXT_SHOW")
				$this->CreateHtml_TEXT_SHOW($_date);
			elseif($this->shopconfig[$this->block] == "FUN_SHOW")
				$this->CreateHtml_FUN_SHOW($_date);
			elseif($this->shopconfig[$this->block] == "FUN_SHOW2")
				$this->CreateHtml_FUN_SHOW2($_date);
			elseif($this->shopconfig[$this->block] == "STORE")
				$this->CreateHtml_STORE($_date);
			elseif($this->shopconfig[$this->block] == "INDEX_CLASS")
				$this->CreateHtml_INDEX_CLASS($_date);
			elseif($this->shopconfig[$this->block] == "SHOP_CLASS")
				$this->CreateHtml_SHOP_CLASS($_date);
			elseif($this->shopconfig[$this->block] == "BANNER_BRANCH")
				$this->CreateHtml_BANNER_BRANCH($_date);
			elseif($this->shopconfig[$this->block] == "PRODSHOW_BRANCH")
				$this->CreateHtml_PRODSHOW_BRANCH($_date);
			elseif($this->shopconfig[$this->block] == "CHILDSHOW_BRANCH")
				$this->CreateHtml_ChildClass_BRANCH($_date);

		}

		function CreateHtml_MainClass($_date){

			if($this->shopconfig[$this->block] == "SHOP_CLASS")
				$this->CreateHtml_MainClass_SHOP_CLASS($_date);
			if($this->shopconfig[$this->block] == "BANNER_BRANCH")
				$this->CreateHtml_MainClass_BANNER_BRANCH($_date);
			elseif($this->shopconfig[$this->block] == "PRODSHOW_BRANCH")
				$this->CreateHtml_MainClass_PRODSHOW_BRANCH($_date);

		}

		function Delete_Default(){

			global $g_db;

			$ids = $_POST['ids'];

			for($i = 0; $i < sizeof($ids); $i++){

				$g_db->delete(Top_ShopConfig,"serno",$ids[$i]);

			}

		}
		
		function Check_block($_date,$_tag=NULL){
			global $g_db;
			
			if($_tag != NULL)
				$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' ORDER BY `serno` desc LIMIT 1";
			else
				$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' ORDER BY `serno` desc LIMIT 1";
			$ConfigData = $g_db->getRow( $sqlstr );

			if( $ConfigData && sizeof($ConfigData)>0 )
				return true;
			else 
				return false;
			
		}

		function Select_Product($_url,$_field){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//搜尋分類
			$SearchWhereStr = "";
			if($_SESSION['WebProdSearch'] != "")
				$SearchWhereStr .= " and `name` like '%".$_SESSION['WebProdSearch']."%'";

			//此館資料
			$sqlstr = "SELECT `shopid`,`parentid`,`shopname` FROM `".Web_Shop."` WHERE `serno` = '".$this->shopid."'";
			$NowShopData = $g_db->getRow( $sqlstr );
			$ShopName = $NowShopData['shopname'];

			if($this->shopid == 1){

				//列表資料
				$sqlstr = "Select * FROM `".Front_Product."` WHERE `DelFlag` = '' and `to_index` = 'Y' and `status` = '".FProduct_Status_Up."' and `price` > '0'".$SearchWhereStr;
				$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );

				//列表資料
				$startuprow = $pageno * $this->pageshownum;
				$sqlstr = "Select * FROM `".Front_Product."` WHERE `DelFlag` = '' and `to_index` = 'Y' and `status` = '".FProduct_Status_Up."' and `price` > '0'".$SearchWhereStr."ORDER BY `serno` desc Limit ".$startuprow.",".$this->pageshownum."";
				$DataList = $g_db->getAll( $sqlstr );

			}elseif($this->shopid == 12){

				//列表資料
				$sqlstr = "Select * FROM `".Front_Product."` WHERE `DelFlag` = '' and `to_premium` = 'Y' and `status` = '".FProduct_Status_Up."' and `price` > '0'".$SearchWhereStr;
				$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );

				//列表資料
				$startuprow = $pageno * $this->pageshownum;
				$sqlstr = "Select * FROM `".Front_Product."` WHERE `DelFlag` = '' and `to_premium` = 'Y' and `status` = '".FProduct_Status_Up."' and `price` > '0'".$SearchWhereStr."ORDER BY `serno` desc Limit ".$startuprow.",".$this->pageshownum."";
				$DataList = $g_db->getAll( $sqlstr );

			}elseif($NowShopData['shopid'] == 0){

				if($_GET['sid'] != ""){

					$SearchWhereStr .= " and (`classcode` like '%\"".$_GET['sid']."\"%'";

					$sqlstr = "SELECT `serno`,`parentid` FROM `".Web_Shop."` WHERE `DelFlag` = '' and `parentid` = '".$_GET['sid']."'";
					$ShopList1 = $g_db->getAll( $sqlstr );
					for($i = 0; $i < sizeof($ShopList1); $i++){

						$SearchWhereStr .= " or `classcode` like '%\"".$ShopList1[$i]['serno']."\"%'";

						$sqlstr = "SELECT `serno`,`parentid` FROM `".Web_Shop."` WHERE `DelFlag` = '' and `parentid` = '".$ShopList1[$i]['serno']."'";
						$ShopList2 = $g_db->getAll( $sqlstr );
						for($j = 0; $j < sizeof($ShopList2); $j++)
							$SearchWhereStr .= " or `classcode` like '%\"".$ShopList2[$j]['serno']."\"%'";

					}

					$SearchWhereStr .= ")";

				}

				//列表資料
				$sqlstr = "Select * FROM `".Front_Product."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `classcode` != '' and `status` = '".FProduct_Status_Up."' and `price` > '0'".$SearchWhereStr;
				$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );

				//列表資料
				$startuprow = $pageno * $this->pageshownum;
				$sqlstr = "Select * FROM `".Front_Product."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `classcode` != '' and `status` = '".FProduct_Status_Up."' and `price` > '0'".$SearchWhereStr."ORDER BY `serno` desc Limit ".$startuprow.",".$this->pageshownum."";
				$DataList = $g_db->getAll( $sqlstr );
			
			}else{
				
				if($_GET['sid'] != ""){

					$SearchWhereStr .= " and `classcode` like '%\"".$_GET['sid']."\"%'";

				}else{

					$SearchWhereStr .= " and (`classcode` like '%\"".$this->shopid."\"%'";

					$sqlstr = "SELECT `serno`,`parentid` FROM `".Web_Shop."` WHERE `DelFlag` = '' and `parentid` = '".$this->shopid."'";
					$ShopList1 = $g_db->getAll( $sqlstr );
					for($i = 0; $i < sizeof($ShopList1); $i++){

						$SearchWhereStr .= " or `classcode` like '%\"".$ShopList1[$i]['serno']."\"%'";

						$sqlstr = "SELECT `serno`,`parentid` FROM `".Web_Shop."` WHERE `DelFlag` = '' and `parentid` = '".$ShopList1[$i]['serno']."'";
						$ShopList2 = $g_db->getAll( $sqlstr );
						for($j = 0; $j < sizeof($ShopList2); $j++)
							$SearchWhereStr .= " or `classcode` like '%\"".$ShopList2[$j]['serno']."\"%'";

					}

					$SearchWhereStr .= ")";

				}

				//列表資料
				$sqlstr = "Select * FROM `".Front_Product."` WHERE `DelFlag` = '' and `shopid` = '".$NowShopData['shopid']."' and `classcode` != '' and `status` = '".FProduct_Status_Up."' and `price` > '0'".$SearchWhereStr;
				$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );

				//列表資料
				$startuprow = $pageno * $this->pageshownum;
				$sqlstr = "Select * FROM `".Front_Product."` WHERE `DelFlag` = '' and `shopid` = '".$NowShopData['shopid']."' and `classcode` != '' and `status` = '".FProduct_Status_Up."' and `price` > '0'".$SearchWhereStr."ORDER BY `serno` desc Limit ".$startuprow.",".$this->pageshownum."";
				$DataList = $g_db->getAll( $sqlstr );

			}

			//Menu
			if($NowShopData['shopid'] = 0){
				//搜尋主分類
				$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `showup` = 'Y' and `shopid` = '".$this->shopid."' and `parentid` = '0' ORDER BY `order`,`serno`";
				$ShopList = $g_db->getAll( $sqlstr );
				for($j = 0; $j < sizeof($ShopList); $j++){
					//搜尋次分類
					$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `showup` = 'Y' and `shopid` = '".$this->shopid."' and `parentid` = '".$ShopList[$j]['serno']."' ORDER BY `order`,`serno`";
					$ShopList[$j]['SubClass'] = $g_db->getAll( $sqlstr );
					for($k = 0; $k < sizeof($ShopList[$j]['SubClass']); $k++){
						//搜尋子分類
						$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `showup` = 'Y' and `shopid` = '".$this->shopid."' and `parentid` = '".$ShopList[$j]['SubClass'][$k]['serno']."' ORDER BY `order`,`serno`";
						$ShopList[$j]['SubClass'][$k]['ChildClass'] = $g_db->getAll( $sqlstr );
					}
				}
			}else{
				//搜尋子分類
				$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `showup` = 'Y' and `parentid` = '".$this->shopid."' ORDER BY `order`,`serno`";
				$ShopList = $g_db->getAll( $sqlstr );
			}

			for($i = 0; $i < sizeof($ShopList); $i++){
				for($j = 0; $j < sizeof($ShopList[$i]['SubClass']); $j++){
					$ShopList[$i]['SubClass'][$j]['shopname'] = (mb_strlen($ShopList[$i]['SubClass'][$j]['shopname'],'UTF-8') > 13 ? mb_substr($ShopList[$i]['SubClass'][$j]['shopname'],0,13,'UTF-8')."..." : $ShopList[$i]['SubClass'][$j]['shopname']);
					for($k = 0; $k < sizeof($ShopList[$i]['SubClass'][$j]['ChildClass']); $k++){
							$ShopList[$i]['SubClass'][$j]['ChildClass'][$k]['shopname'] = (mb_strlen($ShopList[$i]['SubClass'][$j]['ChildClass'][$k]['shopname'],'UTF-8') > 13 ? mb_substr($ShopList[$i]['SubClass'][$j]['ChildClass'][$k]['shopname'],0,13,'UTF-8')."..." : $ShopList[$i]['SubClass'][$j]['ChildClass'][$k]['shopname']);
					}
				}
			}

			$ListCotent = "";

			$ListCotent .=  "    <div id=\"primary\">\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>".($NowShopName != "" ? $NowShopName : $ShopName)." 商品列表</h3>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <br>\n";
			$ListCotent .=  "      <form name=\"SearchForm\" method=\"POST\" action=\"".$_url."&search=y\" >\n";
			$ListCotent .=  "      商品名稱 : <input type=\"text\" name=\"searchword\" value=\"".htmlspecialchars($_SESSION['WebProdSearch'])."\"> <input type=\"button\" value=\"搜尋\" class=\"gray_btn\" onclick=\"this.form.submit();\">\n";
			$ListCotent .=  "      </form>\n";
			$ListCotent .=  "      <br>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$ListCotent .=  "          <th scope=\"col\">價格</th>\n";
			$ListCotent .=  "          <th scope=\"col\">供應價</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">選擇</th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				if($DataList[$i]['open_sale_time'] > date("Y-m-d H:i:s"))
					$ListCotent .=  "          <td align=\"left\" class=\"main\"><span style=\"color:#ff0000;\">".$DataList[$i]['name']."</span></td>\n";
				else
					$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['name']."</td>\n";
				$ListCotent .=  "          <td align=\"left\">".$DataList[$i]['price']."</td>\n";
				$ListCotent .=  "          <td align=\"left\">".$DataList[$i]['supp_price']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"選擇\" class=\"gray_btn\" onclick=\"Dialog.getInstance('Diag1').innerWin.set_prod('".$_field."',".$DataList[$i]['serno'].",'".htmlspecialchars($DataList[$i]['name'])."');\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "    </div>\n";

			$ListCotent .=  "    <div id=\"secondary\">\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" id=\"catalog\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" class=\"secondary_title\">功能選單</th>\n";
			$ListCotent .=  "        </tr>\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <td>\n";
			$ListCotent .=  "            <div id=\"menu\">﻿\n";
			$ListCotent .=  "    			    <div class=\"dtree\">\n";
			$ListCotent .=  "    			      <p class=\"ctrlbtn\"><a href=\"javascript: Web.openAll();\">全部展開</a> | <a href=\"javascript: Web.closeAll();\">全部關閉</a></p>\n";
			$ListCotent .=  "    		   		  <script type=\"text/javascript\">\n";
			$ListCotent .=  "		      			<!--\n";

			$ListCotent .=  "					         Web = new dTree('Web');\n";
			$ListCotent .=  "					         Web.add( ".$this->shopid.",-1,'".$ShopName."','".$_url."');\n";

			for($i = 0; $i < sizeof($ShopList); $i++){
				$ListCotent .=  "					         Web.add( ".$ShopList[$i]['serno'].",".$this->shopid.",'".$ShopList[$i]['shopname']."','".$_url."&sid=".$ShopList[$i]['serno']."');\n";
				for($j = 0; $j < sizeof($ShopList[$i]['SubClass']); $j++){
					$ListCotent .=  "					         Web.add( ".$ShopList[$i]['SubClass'][$j]['serno'].",".$ShopList[$i]['serno'].",'".$ShopList[$i]['SubClass'][$j]['shopname']."','".$_url."&sid=".$ShopList[$i]['SubClass'][$j]['serno']."');\n";
					for($k = 0; $k < sizeof($ShopList[$i]['SubClass'][$j]['ChildClass']); $k++){
						$ListCotent .=  "					         Web.add( ".$ShopList[$i]['SubClass'][$j]['ChildClass'][$k]['serno'].",".$ShopList[$i]['SubClass'][$j]['serno'].",'".$ShopList[$i]['SubClass'][$j]['ChildClass'][$k]['shopname']."','".$_url."&sid=".$ShopList[$i]['SubClass'][$j]['ChildClass'][$k]['serno']."');\n";
					}
				}
			}

			$ListCotent .=  "					         document.write(Web);\n";

			$ListCotent .=  "					      //-->\n";
			$ListCotent .=  "				        </script>\n";

			$ListCotent .=  "              </div>\n";
			$ListCotent .=  "            </div>\n";
			$ListCotent .=  "          </td>\n";
			$ListCotent .=  "        </tr>\n";
			$ListCotent .=  "      </table><!--End of catalog-->\n";
			$ListCotent .=  "    </div><!--End of secondary-->\n";

			return $ListCotent;

		}

		/////ACTIVITY/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_ACTIVITY($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' ORDER BY `startdate` desc,`serno` desc Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";
			
			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_ACTIVITY($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];

			$Data = "";

			if($id != ""){

				//列表資料
				$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">顯示類型</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"radio\" name=\"type\" value=\"normal\" onclick=\"document.getElementById('block1').style.display='';document.getElementById('block2').style.display='none';\" ".($Data['type'] == "normal" || $Data['type'] == "" ? "checked" : "").">一般 <input type=\"radio\" name=\"type\" value=\"expand\" onclick=\"document.getElementById('block1').style.display='none';document.getElementById('block2').style.display='';\" ".($Data['type'] == "expand" ? "checked" : "").">展開</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr id=\"block1\" ".($Data['type'] != "normal" && $Data['type'] != "" ? "style=\"display:none;\"" : "").">\n";
			$EditCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic1'] != "" ? "<a href=\"".Upload_Url.$Data['pic1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"325\"></a><br>" : "")."<input name=\"pic1\" type=\"file\" size=\"20\" />".($Data['pic1'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 寬975px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr id=\"block2\" ".($Data['type'] != "expand" ? "style=\"display:none;\"" : "").">\n";
			$EditCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic2'] != "" ? "<a href=\"".Upload_Url.$Data['pic2']."\" target=\"_blank\"><img " . ( $Data['slogan2'] ? 'alt="' . $Data['slogan2'] . '" title="' . $Data['slogan2'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic2']."\" width=\"325\" height=\"90\"></a><br>" : "")."<input name=\"pic2\" type=\"file\" size=\"20\" />".($Data['pic2'] != "" ? " <input type=\"checkbox\" name=\"del_pic2\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 975px × 270px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";

			return $EditCotent;

		}

		function EditSave_ACTIVITY(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['type']      = $_POST['type'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "indexpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				if($_POST['del_pic2'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic2"]["name"] != "" ){
					$data['pic2'] = "indexpic2-".date("ymdHis").substr($_FILES["pic2"]["name"],strrpos($_FILES["pic2"]["name"],'.'));
					copy( $_FILES["pic2"]['tmp_name'], Upload_Path.$data['pic2'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['type']      = $_POST['type'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "indexpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				if($_FILES["pic2"]["name"] != "" ){
					$data['pic2'] = "indexpic2-".date("ymdHis").substr($_FILES["pic2"]["name"],strrpos($_FILES["pic2"]["name"],'.'));
					copy( $_FILES["pic2"]['tmp_name'], Upload_Path.$data['pic2'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_ACTIVITY($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND()";

			if( $g_db->numRows( $g_db->query($sqlstr) ) > 0 ){

				$Data = $g_db->getRow( $sqlstr );

				if($Data['type'] == "expand"){

					echo "      <div id=\"banner_open\">\n";
					echo "        <div id=\"box\" class=\"xx\" ><a href=\"".($Data['url'] != "" ? $Data['url'] : "#")."\" target=\"".$Data['target']."\"><img " . ( $Data['slogan2'] ? 'alt="' . $Data['slogan2'] . '" title="' . $Data['slogan2'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic2']."\" width=\"975\" height=\"270\" /></a><a href=\"#\" onclick=\"toggle(document.getElementById('box')); clearTimeout(showad); return false;\" class=\"box_open_btn\">開合</a></div>\n";
					echo "        <script>showad = setTimeout(\"autohidden(document.getElementById('box'))\",4500);</script>\n";
					echo "      </div><!--End of banner_open-->\n";

				}else{

					echo "      <div id=\"banner_open\">\n";
					echo "        <div id=\"box\" class=\"xx\" ><a href=\"".($Data['url'] != "" ? $Data['url'] : "#")."\" target=\"".$Data['target']."\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"975\" /></a></div>\n";
					echo "      </div><!--End of banner_open-->\n";

				}

			}elseif( $this->backendmode ){

				echo "      <div id=\"banner_open\">\n";
				echo "        <div id=\"box\" class=\"xx\" ><a href=\"".($Data['url'] != "" ? $Data['url'] : "#")."\" target=\"".$Data['target']."\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url."default/default_975_50.jpg"."\" width=\"975\" height=\"72\" /></a></div>\n";
				echo "      </div><!--End of banner_open-->\n";

			}

		}

		/////ACTIVITYS/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_ACTIVITYS($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' ORDER BY `startdate` desc,`serno` desc Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"70\">活動圖片</th>\n";
			$ListCotent .=  "          <th scope=\"col\">活動標籤</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";
			
			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				$ListCotent .=  "          <td><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$DataList[$i]['pic1']."\" width=\"65\" height=\"65\"></td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['slogan1']."<br>".$DataList[$i]['name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_ACTIVITYS($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select *,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid1`) pid1name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid2`) pid2name FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">活動標籤</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan1\" type=\"text\" value=\"".$Data['slogan1']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">活動簡述</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">主圖片</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic1'] != "" ? "<a href=\"".Upload_Url.$Data['pic1']."\" target=\"_blank\"><img " . ( $Data['pid1name'] ? 'alt="' . $Data['pid1name'] . '" title="' . $Data['pid1name'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"65\" height=\"65\"></a><br>" : "")."<input name=\"pic1\" type=\"file\" size=\"20\" />".($Data['pic1'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 65px × 65px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_ACTIVITYS(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "sshowpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = 1;
				$data['slogan1']   = $_POST['slogan1'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "mshowpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_ACTIVITYS($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `block` = '".($this->block)."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() LIMIT 4";
			$DataList = $g_db->getAll( $sqlstr );

			if(sizeof($DataList) > 0){

				echo "            <ol class=\"activity_list\">\n";

				for($i = 0; $i < sizeof($DataList); $i++){

					echo "              <li class=\"activity_info\">\n";
					echo "                <table cellspacing=\"0\" cellpadding=\"0\" class=\"activity_table\">\n";
					echo "                  <tr>\n";
					echo "                    <td rowspan=\"2\" class=\"activity_img\"><a href=\"".($DataList[$i]['url'] != "" ? $DataList[$i]['url'] : "#")."\" target=\"".($DataList[$i]['target'] != "" ? $DataList[$i]['target'] : "_blank")."\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.($DataList[$i]['pic1'] != "" ? $DataList[$i]['pic1'] : "default/default_60_60.jpg")."\" width=\"65\" height=\"65\" /></a></td>\n";
					echo "                    <td class=\"activity_pro_title\"><a href=\"".($DataList[$i]['url'] != "" ? $DataList[$i]['url'] : "#")."\" class=\"gray_bg_txt\">".$DataList[$i]['slogan1']."</a></td>\n";
					echo "                  </tr>\n";
					echo "                  <tr>\n";
					echo "                    <td class=\"activity_pro_cont\"><a href=\"".($DataList[$i]['url'] != "" ? $DataList[$i]['url'] : "#")."\">".$DataList[$i]['name']."</a></td>\n";
					echo "                  </tr>\n";
					echo "                </table>\n";
					echo "              </li>\n";
	
				}

				echo "            </ol>\n";
				echo "          <div class=\"more_div\">&nbsp;</div>\n";

			}

		}

		/////TEXT/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_TEXT($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' ORDER BY `startdate` desc,`serno` desc Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <br><center>\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置一\" onclick=\"location.href='".$_url."?flag=settag&tag=1';\" ".($_tag == 1 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置二\" onclick=\"location.href='".$_url."?flag=settag&tag=2';\" ".($_tag == 2 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置三\" onclick=\"location.href='".$_url."?flag=settag&tag=3';\" ".($_tag == 3 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置四\" onclick=\"location.href='".$_url."?flag=settag&tag=4';\" ".($_tag == 4 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置五\" onclick=\"location.href='".$_url."?flag=settag&tag=5';\" ".($_tag == 5 ? "disabled" : "").">\n";
			$ListCotent .=  "      </center>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"60\">位置</th>\n";
			$ListCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";
			
			for($i = 0; $i < sizeof($DataList); $i++){

				switch($DataList[$i]['tag']){
					case 1:
						$TagName = "位置一";
						break;
					case 2:
						$TagName = "位置二";
						break;
					case 3:
						$TagName = "位置三";
						break;
					case 4:
						$TagName = "位置四";
						break;
					case 5:
						$TagName = "位置五";
						break;
					default:
						$TagName = "位置一";
						break;						
				}

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				$ListCotent .=  "          <td>".$TagName."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_TEXT($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">位置</th>\n";
			$EditCotent .=  "          <td align=\"left\">\n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"1\" ".($Data['tag'] == 1 || ($Data == "" && $_tag == 1) ? "checked" : "" )." />位置一 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"2\" ".($Data['tag'] == 2 || ($Data == "" && $_tag == 2) ? "checked" : "" )." />位置二 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"3\" ".($Data['tag'] == 3 || ($Data == "" && $_tag == 3) ? "checked" : "" )." />位置三 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"4\" ".($Data['tag'] == 4 || ($Data == "" && $_tag == 4) ? "checked" : "" )." />位置四 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"5\" ".($Data['tag'] == 5 || ($Data == "" && $_tag == 5) ? "checked" : "" )." />位置五 &nbsp; \n";
			$EditCotent .=  "          </td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_TEXT(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);
				
			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_TEXT($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '1' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND()";
			$TextData1 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '2' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND()";
			$TextData2 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '3' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND()";
			$TextData3 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '4' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND()";
			$TextData4 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '5' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND()";
			$TextData5 = $g_db->getRow( $sqlstr );

			echo "          <td width=\"20%\" height=\"15\"><a href=\"".($TextData1['url'] != "" ? $TextData1['url'] : "#")."\" target=\"".$TextData1['target']."\">".$TextData1['name']."</a></td>\n";
			echo "          <td width=\"20%\" height=\"15\"><a href=\"".($TextData2['url'] != "" ? $TextData2['url'] : "#")."\" target=\"".$TextData2['target']."\">".$TextData2['name']."</a></td>\n";
			echo "          <td width=\"20%\" height=\"15\"><a href=\"".($TextData3['url'] != "" ? $TextData3['url'] : "#")."\" target=\"".$TextData3['target']."\">".$TextData3['name']."</a></td>\n";
			echo "          <td width=\"20%\" height=\"15\"><a href=\"".($TextData4['url'] != "" ? $TextData4['url'] : "#")."\" target=\"".$TextData4['target']."\">".$TextData4['name']."</a></td>\n";
			echo "          <td width=\"20%\" height=\"15\"><a href=\"".($TextData5['url'] != "" ? $TextData5['url'] : "#")."\" target=\"".$TextData5['target']."\">".$TextData5['name']."</a></td>\n";

		}

		/////SUBBANNER/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_SUBBANNER($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' ORDER BY `startdate` desc,`serno` desc Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <br><center>\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置一\" onclick=\"location.href='".$_url."?flag=settag&tag=1';\" ".($_tag == 1 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置二\" onclick=\"location.href='".$_url."?flag=settag&tag=2';\" ".($_tag == 2 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置三\" onclick=\"location.href='".$_url."?flag=settag&tag=3';\" ".($_tag == 3 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置四\" onclick=\"location.href='".$_url."?flag=settag&tag=4';\" ".($_tag == 4 ? "disabled" : "").">\n";
			$ListCotent .=  "      </center>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"60\">位置</th>\n";
			$ListCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";
			
			for($i = 0; $i < sizeof($DataList); $i++){

				switch($DataList[$i]['tag']){
					case 1:
						$TagName = "位置一";
						break;
					case 2:
						$TagName = "位置二";
						break;
					case 3:
						$TagName = "位置三";
						break;
					case 4:
						$TagName = "位置四";
						break;
					default:
						$TagName = "位置一";
						break;						
				}

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				$ListCotent .=  "          <td>".$TagName."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_SUBBANNER($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">位置</th>\n";
			$EditCotent .=  "          <td align=\"left\">\n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"1\" ".($Data['tag'] == 1 || ($Data == "" && $_tag == 1) ? "checked" : "" )." />位置一 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"2\" ".($Data['tag'] == 2 || ($Data == "" && $_tag == 2) ? "checked" : "" )." />位置二 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"3\" ".($Data['tag'] == 3 || ($Data == "" && $_tag == 3) ? "checked" : "" )." />位置三 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"4\" ".($Data['tag'] == 4 || ($Data == "" && $_tag == 4) ? "checked" : "" )." />位置四 &nbsp; \n";
			$EditCotent .=  "          </td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic1'] != "" ? "<a href=\"".Upload_Url.$Data['pic1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"550\" height=\"200\"></a><br>" : "")."<input name=\"pic1\" type=\"file\" size=\"20\" />".($Data['pic1'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 558px × 278px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_SUBBANNER(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "indexpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "indexpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_SUBBANNER($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '1' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND()";
			$TextData1 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '2' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND()";
			$TextData2 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '3' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND()";
			$TextData3 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '4' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND()";
			$TextData4 = $g_db->getRow( $sqlstr );

			echo "                  <div class=\"autoshow1_pic\">\n";
			echo "                    <ul class=\"autoshow1_pic_box\">\n";
			echo "                      <li><a href=\"".($TextData1['url'] != "" ? $TextData1['url'] : "#")."\" target=\"".$TextData1['target']."\"><img " . ( $TextData1['slogan1'] ? 'alt="' . $TextData1['slogan1'] . '" title="' . $TextData1['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.($TextData1['pic1'] != '' ? $TextData1['pic1'] : 'default/560X280.jpg')."\" width=\"558\" height=\"278\" /></a></li>\n";
			echo "                      <li><a href=\"".($TextData2['url'] != "" ? $TextData2['url'] : "#")."\" target=\"".$TextData2['target']."\"><img " . ( $TextData2['slogan1'] ? 'alt="' . $TextData2['slogan1'] . '" title="' . $TextData2['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.($TextData2['pic1'] != '' ? $TextData2['pic1'] : 'default/560X280.jpg')."\" width=\"558\" height=\"278\" /></a></li>\n";
			echo "                      <li><a href=\"".($TextData3['url'] != "" ? $TextData3['url'] : "#")."\" target=\"".$TextData3['target']."\"><img " . ( $TextData3['slogan1'] ? 'alt="' . $TextData3['slogan1'] . '" title="' . $TextData3['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.($TextData3['pic1'] != '' ? $TextData3['pic1'] : 'default/560X280.jpg')."\" width=\"558\" height=\"278\" /></a></li>\n";
			echo "                      <li><a href=\"".($TextData4['url'] != "" ? $TextData4['url'] : "#")."\" target=\"".$TextData4['target']."\"><img " . ( $TextData4['slogan1'] ? 'alt="' . $TextData4['slogan1'] . '" title="' . $TextData4['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.($TextData4['pic1'] != '' ? $TextData4['pic1'] : 'default/560X280.jpg')."\" width=\"558\" height=\"278\" /></a></li>\n";
			echo "                    </ul><!--End of autoshow1_pic_box-->\n";
			echo "                  </div><!--End of autoshow1_pic-->\n";
            
			echo "                  <div class=\"autoshow1_btn\">\n";
			echo "                    <ul class=\"autoshow1_btn_box\">\n";
			echo "                      <li class=\"autoshow1_btn_boder\"><a href=\"#\">".$TextData1['name']."</a></li>\n";
			echo "                      <li class=\"autoshow1_btn_boder\"><a>".$TextData2['name']."</a></li>\n";
			echo "                      <li class=\"autoshow1_btn_boder\"><a>".$TextData3['name']."</a></li>\n";
			echo "                      <li><a class=\"autoshow1_btn_width\">".$TextData4['name']."</a></li>\n";
			echo "                    </ul><!--End of autoshow1_pic_box-->\n";
			echo "                  </div><!--End of autoshow1_pic-->\n";

		}

		/////LOGO/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_LOGO($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' ORDER BY `order`,`startdate` desc,`serno` Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );
			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"100\">圖片</th>\n";
			$ListCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">排序</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($pageno * $this->pageshownum + $i + 1)."</td>\n";
				$ListCotent .=  "          <td>".($DataList[$i]['pic1'] != "" ? "<a href=\"".Upload_Url.$DataList[$i]['pic1']."\" target=\"_blank\"><img " . ( $DataList['slogan1'] ? 'alt="' . $DataList['slogan1'] . '" title="' . $DataList['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$DataList[$i]['pic1']."\" width=\"85\" height=\"45\"></a>" : "")."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['order']."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_LOGO($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic1'] != "" ? "<a href=\"".Upload_Url.$Data['pic1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"85\" height=\"45\"></a><br>" : "")."<input name=\"pic1\" type=\"file\" size=\"20\" />".($Data['pic1'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 85px × 45px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">排序</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"order\" type=\"text\" value=\"".($Data != "" ? $Data['order'] : 99)."\" size=\"1\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_LOGO(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['order']     = $_POST['order'];
				$data['showup']    = $_POST['showup'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "logo-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['order']     = $_POST['order'];
				$data['showup']    = $_POST['showup'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "logo-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_LOGO($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY `order`,`serno`";
			$DataList = $g_db->getAll( $sqlstr );

			echo "                  <ul class=\"kutu_ul clearfix\">\n";

			if(sizeof($DataList) > 0){

				for($i = 0; $i < sizeof($DataList); $i++){

					echo "                    <li><a href=\"".($DataList[$i]['url'] != "" ? $DataList[$i]['url'] : "#" )."\" target=\"".$DataList[$i]['target']."\" alt=\"".$DataList[$i]['name']."\"><img " . ( $DataList['slogan1'] ? 'alt="' . $DataList['slogan1'] . '" title="' . $DataList['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$DataList[$i]['pic1']."\" width=\"85\" height=\"45\"></a></li>\n";

				}

			}else{

				for($i = 0; $i < 8; $i++){
	
					echo "                    <li><a href=\"#\"><img src=\"".Upload_Url."default/default_85_45.jpg\" width=\"85\" height=\"45\"></a></li>\n";
	
				}

			}

			echo "                  </ul>\n";

		}

		/////FUN_ACTION/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_FUN_ACTION($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' ORDER BY `order`,`startdate` desc,`serno` Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );
			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\">活動名稱</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">排序</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($pageno * $this->pageshownum + $i + 1)."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['order']."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_FUN_ACTION($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">排序</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"order\" type=\"text\" value=\"".($Data != "" ? $Data['order'] : 99)."\" size=\"1\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_FUN_ACTION(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['order']     = $_POST['order'];
				$data['showup']    = $_POST['showup'];

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['order']     = $_POST['order'];
				$data['showup']    = $_POST['showup'];

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_FUN_ACTION($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY `order`,`serno` LIMIT 6";
			$DataList = $g_db->getAll( $sqlstr );

			echo "            <ul class=\"act_list\">\n";

			if(sizeof($DataList) > 0){

				for($i = 0; $i < sizeof($DataList); $i++){

					echo "              <li class=\"act_info\"><a href=\"".($DataList[$i]['url'] != "" ? $DataList[$i]['url'] : "#" )."\" target=\"".$DataList[$i]['target']."\" alt=\"".$DataList[$i]['name']."\"><span>".$DataList[$i]['name']."</span></a></li>\n";

				}

			}

			echo "            </ul>\n";

		}

		/////MAINSHOW/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_MAINSHOW($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' ORDER BY `startdate` desc,`serno` desc Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"設定\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=config';\" /><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <br><center>\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置一\" onclick=\"location.href='".$_url."?flag=settag&tag=1';\" ".($_tag == 1 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置二\" onclick=\"location.href='".$_url."?flag=settag&tag=2';\" ".($_tag == 2 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置三\" onclick=\"location.href='".$_url."?flag=settag&tag=3';\" ".($_tag == 3 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置四\" onclick=\"location.href='".$_url."?flag=settag&tag=4';\" ".($_tag == 4 ? "disabled" : "").">\n";
			$ListCotent .=  "      </center>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"60\">位置</th>\n";
			$ListCotent .=  "          <th scope=\"col\">商品名稱</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				switch($DataList[$i]['tag']){
					case 1:
						$TagName = "位置一";
						break;
					case 2:
						$TagName = "位置二";
						break;
					case 3:
						$TagName = "位置三";
						break;
					case 4:
						$TagName = "位置四";
						break;
					default:
						$TagName = "位置一";
						break;						
				}

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				$ListCotent .=  "          <td>".$TagName."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";

			return $ListCotent;

		}

		function EditPage_MAINSHOW($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select *,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid1`) pid1name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid2`) pid2name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid3`) pid3name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid4`) pid4name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid5`) pid5name FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">位置</th>\n";
			$EditCotent .=  "          <td align=\"left\">\n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"1\" ".($Data['tag'] == 1 || ($Data == "" && $_tag == 1) ? "checked" : "" )." />位置一 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"2\" ".($Data['tag'] == 2 || ($Data == "" && $_tag == 2) ? "checked" : "" )." />位置二 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"3\" ".($Data['tag'] == 3 || ($Data == "" && $_tag == 3) ? "checked" : "" )." />位置三 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"4\" ".($Data['tag'] == 4 || ($Data == "" && $_tag == 4) ? "checked" : "" )." />位置四 &nbsp; \n";
			$EditCotent .=  "          </td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標籤名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid1\" id=\"pid1\" value=\"".$Data['pid1']."\"><input name=\"pid1name\" id=\"pid1name\" type=\"text\" value=\"".htmlspecialchars($Data['pid1name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid1');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid1').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid1').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan1\" type=\"text\" value=\"".$Data['slogan1']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"50\" /> 開啟方式：<select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid2\" id=\"pid2\" value=\"".$Data['pid2']."\"><input name=\"pid2name\" id=\"pid2name\" type=\"text\" value=\"".htmlspecialchars($Data['pid2name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid2');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid2').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid2').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan2\" type=\"text\" value=\"".$Data['slogan2']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url2\" type=\"text\" value=\"".$Data['url2']."\" size=\"50\" /> 開啟方式：<select name=\"target2\"><option value=\"_self\" ".($Data['target2'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target2'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid3\" id=\"pid3\" value=\"".$Data['pid3']."\"><input name=\"pid3name\" id=\"pid3name\" type=\"text\" value=\"".htmlspecialchars($Data['pid3name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid3');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid3').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid3').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan3\" type=\"text\" value=\"".$Data['slogan3']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url3\" type=\"text\" value=\"".$Data['url3']."\" size=\"50\" /> 開啟方式：<select name=\"target3\"><option value=\"_self\" ".($Data['target3'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target3'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid4\" id=\"pid4\" value=\"".$Data['pid4']."\"><input name=\"pid4name\" id=\"pid4name\" type=\"text\" value=\"".htmlspecialchars($Data['pid4name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid4');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid4').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid4').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan4\" type=\"text\" value=\"".$Data['slogan4']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url4\" type=\"text\" value=\"".$Data['url4']."\" size=\"50\" /> 開啟方式：<select name=\"target4\"><option value=\"_self\" ".($Data['target4'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target4'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品5</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid5\" id=\"pid5\" value=\"".$Data['pid5']."\"><input name=\"pid5name\" id=\"pid5name\" type=\"text\" value=\"".htmlspecialchars($Data['pid5name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid5');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid5').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid5').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語5</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan5\" type=\"text\" value=\"".$Data['slogan5']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址5</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url5\" type=\"text\" value=\"".$Data['url5']."\" size=\"50\" /> 開啟方式：<select name=\"target5\"><option value=\"_self\" ".($Data['target5'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target5'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_MAINSHOW(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['pid1']      = $_POST['pid1'];
				$data['pid2']      = $_POST['pid2'];
				$data['pid3']      = $_POST['pid3'];
				$data['pid4']      = $_POST['pid4'];
				$data['pid5']      = $_POST['pid5'];
				$data['name']      = $_POST['name'];
				$data['showup']    = $_POST['showup'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['slogan2']   = $_POST['slogan2'];
				$data['slogan3']   = $_POST['slogan3'];
				$data['slogan4']   = $_POST['slogan4'];
				$data['slogan5']   = $_POST['slogan5'];
				$data['url']       = $_POST['url'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['url4']      = $_POST['url4'];
				$data['url5']      = $_POST['url5'];
				$data['target']    = $_POST['target'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];
				$data['target4']   = $_POST['target4'];
				$data['target5']   = $_POST['target5'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "mshowpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				if($_POST['del_pic2'] == "Y")
					$data['pic2'] = '';

				if($_FILES["pic2"]["name"] != "" ){
					$data['pic2'] = "mshowpic2-".date("ymdHis").substr($_FILES["pic2"]["name"],strrpos($_FILES["pic2"]["name"],'.'));
					copy( $_FILES["pic2"]['tmp_name'], Upload_Path.$data['pic2'] );
				}

				if($_POST['del_pic3'] == "Y")
					$data['pic3'] = '';

				if($_FILES["pic3"]["name"] != "" ){
					$data['pic3'] = "mshowpic3-".date("ymdHis").substr($_FILES["pic3"]["name"],strrpos($_FILES["pic3"]["name"],'.'));
					copy( $_FILES["pic3"]['tmp_name'], Upload_Path.$data['pic3'] );
				}

				if($_POST['del_pic4'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic4"]["name"] != "" ){
					$data['pic4'] = "mshowpic4-".date("ymdHis").substr($_FILES["pic4"]["name"],strrpos($_FILES["pic4"]["name"],'.'));
					copy( $_FILES["pic4"]['tmp_name'], Upload_Path.$data['pic4'] );
				}

				if($_POST['del_pic5'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic5"]["name"] != "" ){
					$data['pic5'] = "mshowpic5-".date("ymdHis").substr($_FILES["pic5"]["name"],strrpos($_FILES["pic5"]["name"],'.'));
					copy( $_FILES["pic5"]['tmp_name'], Upload_Path.$data['pic5'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['pid1']      = $_POST['pid1'];
				$data['pid2']      = $_POST['pid2'];
				$data['pid3']      = $_POST['pid3'];
				$data['pid4']      = $_POST['pid4'];
				$data['pid5']      = $_POST['pid5'];
				$data['name']      = $_POST['name'];
				$data['showup']    = $_POST['showup'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['slogan2']   = $_POST['slogan2'];
				$data['slogan3']   = $_POST['slogan3'];
				$data['slogan4']   = $_POST['slogan4'];
				$data['slogan5']   = $_POST['slogan5'];
				$data['url']       = $_POST['url'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['url4']      = $_POST['url4'];
				$data['url5']      = $_POST['url5'];
				$data['target']    = $_POST['target'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];
				$data['target4']   = $_POST['target4'];
				$data['target5']   = $_POST['target5'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "mshowpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				if($_FILES["pic2"]["name"] != "" ){
					$data['pic2'] = "mshowpic2-".date("ymdHis").substr($_FILES["pic2"]["name"],strrpos($_FILES["pic2"]["name"],'.'));
					copy( $_FILES["pic2"]['tmp_name'], Upload_Path.$data['pic2'] );
				}

				if($_FILES["pic3"]["name"] != "" ){
					$data['pic3'] = "mshowpic3-".date("ymdHis").substr($_FILES["pic3"]["name"],strrpos($_FILES["pic3"]["name"],'.'));
					copy( $_FILES["pic3"]['tmp_name'], Upload_Path.$data['pic3'] );
				}

				if($_FILES["pic4"]["name"] != "" ){
					$data['pic4'] = "mshowpic4-".date("ymdHis").substr($_FILES["pic4"]["name"],strrpos($_FILES["pic4"]["name"],'.'));
					copy( $_FILES["pic4"]['tmp_name'], Upload_Path.$data['pic4'] );
				}

				if($_FILES["pic5"]["name"] != "" ){
					$data['pic5'] = "mshowpic5-".date("ymdHis").substr($_FILES["pic5"]["name"],strrpos($_FILES["pic5"]["name"],'.'));
					copy( $_FILES["pic5"]['tmp_name'], Upload_Path.$data['pic5'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function ConfigPage_MAINSHOW($_url){

			global $g_db;
		
			$Data = "";

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' and `config` = 'Y' ORDER BY `serno` desc LIMIT 1";
			if( $g_db->numRows( $g_db->query( $sqlstr ) ) > 0 )
				$Data = $g_db->getRow( $sqlstr );

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=configsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"config_attr1\" type=\"text\" value=\"".$Data['config_attr1']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">顏色</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"config_attr2\"><option value=\"normal_slide_red\" ".($Data['config_attr2'] == "normal_slide_red" ? "selected" : "").">紅色</option><option value=\"normal_slide_green\" ".($Data['config_attr2'] == "normal_slide_green" ? "selected" : "").">綠色</option><option value=\"normal_slide_deepblue\" ".($Data['config_attr2'] == "normal_slide_deepblue" ? "selected" : "").">藍色</option><option value=\"normal_slide_purple\" ".($Data['config_attr2'] == "normal_slide_purple" ? "selected" : "").">紫色</option><option value=\"normal_slide_yellow\" ".($Data['config_attr2'] == "normal_slide_yellow" ? "selected" : "").">黃色</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function ConfigSave_MAINSHOW(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['config_attr1'] = $_POST['config_attr1'];
				$data['config_attr2'] = $_POST['config_attr2'];

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']       = $this->shopid;
				$data['block']        = $this->block;
				$data['config']       = 'Y';
				$data['config_attr1'] = $_POST['config_attr1'];
				$data['config_attr2'] = $_POST['config_attr2'];

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_MAINSHOW($_date){

			global $g_db;

			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' and `config` = 'Y' ORDER BY `serno` desc LIMIT 1";
			$ConfigData = $g_db->getRow( $sqlstr );

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '1' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data1 = $g_db->numRows( $g_db->query($sqlstr) ) > 0 ? $g_db->getRow( $sqlstr ) : "";
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '2' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data2 =  $g_db->numRows( $g_db->query($sqlstr) ) > 0 ? $g_db->getRow( $sqlstr ) : "";
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '3' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data3 =  $g_db->numRows( $g_db->query($sqlstr) ) > 0 ? $g_db->getRow( $sqlstr ) : "";
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '4' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data4 =  $g_db->numRows( $g_db->query($sqlstr) ) > 0 ? $g_db->getRow( $sqlstr ) : "";

			echo "			<div class=\"product_list_title\">\n";
			echo "				<div class=\"product_list_title_text text_16px text_color text_style\">超級精選</div>\n";
			echo "				<ul class=\"product_list_tab\">\n";
			if($Data1 != "" || ($Data2 == "" && $Data3 == "" && $Data4 == ""))
 				echo "				<li class=\"product_list_tab_style\"><p class=\"color_white\">".$Data1['name']."</p></li>\n";
			if($Data2 != "")
 				echo "				<li class=\"product_list_tab_style\"><p class=\"color_white\">".$Data2['name']."</p></li>\n";
			if($Data3 != "")
				echo "				<li class=\"product_list_tab_style\"><p class=\"color_white\">".$Data3['name']."</p></li>\n";
			if($Data4 != "")
				echo "				<li class=\"product_list_tab_style\"><p class=\"color_white\">".$Data4['name']."</p></li>\n";
			echo "				</ul>\n";
			echo "			</div>\n";
			
			echo "			<div class=\"product_list_cont\">\n";
			echo "				<ul class=\"product_list_cont_block\">\n";
			
			for($i = 1; $i <= 2; $i++){

				$NowData = "Data".$i;

				if($$NowData != "" || ($i == 1 && ($Data2 == "" && $Data3 == "" && $Data4 == ""))){

					//抓取商品資料
					$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid1']."'";
					$ProdData1 = $g_db->getRow($sqlstr);
					$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid2']."'";
					$ProdData2 = $g_db->getRow($sqlstr);
					$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid3']."'";
					$ProdData3 = $g_db->getRow($sqlstr);
					$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid4']."'";
					$ProdData4 = $g_db->getRow($sqlstr);
					$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid5']."'";
					$ProdData5 = $g_db->getRow($sqlstr);
					echo "					<li class=\"product_list_cont_area\">\n";
					if( ${$NowData}['pid1'] ){
						echo "					<ul class=\"product_list_cont_box\">\n";		
						echo "						<li class=\"product_list_cont_pictitle\">\n";
						echo "							<a href=\"".(${$NowData}['url'] != '' ? ${$NowData}['url'] : "product_info.php?id=".${$NowData}['pid1'])."\"><img src=\"".Upload_Url.($ProdData1['prod_pic'] != "" ? $ProdData1['prod_pic'] : "../../web/images/pro_rc_pic01.jpg")."\" width=\"120\" height=\"120\" /></a>\n";
						echo "						</li><!--End of product_list_cont_pictitle-->\n";
						echo "						<li class=\"product_list_cont_title_text text_black_title14px\"><a href=\"".(${$NowData}['url'] != '' ? ${$NowData}['url'] : "product_info.php?id=".${$NowData}['pid1'])."\">".$ProdData1['name']."</a></li>\n";
						echo "						<li class=\"product_list_cont_info_text text_12px color_gray\">\n";	
						echo "						<a href=\"".(${$NowData}['url'] != '' ? ${$NowData}['url'] : "product_info.php?id=".${$NowData}['pid1'])."\">\n";
						echo 							${$NowData}['slogan1'];	
						echo "						</a>\n";
						echo "						</li><!--End of product_list_cont_info_text-->\n";
						echo "						<li class=\"product_list_cont_price text_14px color_red\">\n";	
						echo "							$".$ProdData1['price']."元<div class=\"sub_shop_car\"></div>";	
						echo "						</li><!--End of product_list_cont_price-->\n";
						echo "					</ul>\n";
					}
					if( ${$NowData}['pid2'] ){
						echo "					<ul class=\"product_list_cont_box\">\n";		
						echo "						<li class=\"product_list_cont_pictitle\">\n";
						echo "							<a href=\"".(${$NowData}['url2'] != '' ? ${$NowData}['url2'] : "product_info.php?id=".${$NowData}['pid2'])."\"><img src=\"".Upload_Url.($ProdData2['prod_pic'] != "" ? $ProdData2['prod_pic'] : "../../web/images/pro_rc_pic01.jpg")."\" width=\"120\" height=\"120\" /></a>\n";
						echo "						</li><!--End of product_list_cont_pictitle-->\n";
						echo "						<li class=\"product_list_cont_title_text text_black_title14px\"><a href=\"".(${$NowData}['url2'] != '' ? ${$NowData}['url2'] : "product_info.php?id=".${$NowData}['pid2'])."\">".$ProdData2['name']."</a></li>\n";
						echo "						<li class=\"product_list_cont_info_text text_12px color_gray\">\n";	
						echo "						<a href=\"".(${$NowData}['url2'] != '' ? ${$NowData}['url2'] : "product_info.php?id=".${$NowData}['pid2'])."\">\n";
						echo 							${$NowData}['slogan2'];	
						echo "						</a>\n";
						echo "						</li><!--End of product_list_cont_info_text-->\n";
						echo "						<li class=\"product_list_cont_price text_14px color_red\">\n";	
						echo "							$".$ProdData2['price']."元<div class=\"sub_shop_car\"></div>";	
						echo "						</li><!--End of product_list_cont_price-->\n";
						echo "					</ul>\n";
					}			
					if( ${$NowData}['pid3'] ){
						echo "					<ul class=\"product_list_cont_box\">\n";		
						echo "						<li class=\"product_list_cont_pictitle\">\n";
						echo "							<a href=\"".(${$NowData}['url3'] != '' ? ${$NowData}['url3'] : "product_info.php?id=".${$NowData}['pid3'])."\"><img src=\"".Upload_Url.($ProdData3['prod_pic'] != "" ? $ProdData3['prod_pic'] : "../../web/images/pro_rc_pic01.jpg")."\" width=\"120\" height=\"120\" /></a>\n";
						echo "						</li><!--End of product_list_cont_pictitle-->\n";
						echo "						<li class=\"product_list_cont_title_text text_black_title14px\"><a href=\"".(${$NowData}['url3'] != '' ? ${$NowData}['url3'] : "product_info.php?id=".${$NowData}['pid3'])."\">".$ProdData3['name']."</a></li>\n";
						echo "						<li class=\"product_list_cont_info_text text_12px color_gray\">\n";	
						echo "						<a href=\"".(${$NowData}['url3'] != '' ? ${$NowData}['url3'] : "product_info.php?id=".${$NowData}['pid3'])."\">\n";
						echo 							${$NowData}['slogan3'];	
						echo "						</a>\n";
						echo "						</li><!--End of product_list_cont_info_text-->\n";
						echo "						<li class=\"product_list_cont_price text_14px color_red\">\n";	
						echo "							$".$ProdData3['price']."元<div class=\"sub_shop_car\"></div>";	
						echo "						</li><!--End of product_list_cont_price-->\n";
						echo "					</ul>\n";
					}	
					if( ${$NowData}['pid4'] ){
						echo "					<ul class=\"product_list_cont_box\">\n";		
						echo "						<li class=\"product_list_cont_pictitle\">\n";
						echo "							<a href=\"".(${$NowData}['url4'] != '' ? ${$NowData}['url4'] : "product_info.php?id=".${$NowData}['pid4'])."\"><img src=\"".Upload_Url.($ProdData4['prod_pic'] != "" ? $ProdData4['prod_pic'] : "../../web/images/pro_rc_pic01.jpg")."\" width=\"120\" height=\"120\" /></a>\n";
						echo "						</li><!--End of product_list_cont_pictitle-->\n";
						echo "						<li class=\"product_list_cont_title_text text_black_title14px\"><a href=\"".(${$NowData}['url4'] != '' ? ${$NowData}['url4'] : "product_info.php?id=".${$NowData}['pid4'])."\">".$ProdData4['name']."</a></li>\n";
						echo "						<li class=\"product_list_cont_info_text text_12px color_gray\">\n";	
						echo "						<a href=\"".(${$NowData}['url4'] != '' ? ${$NowData}['url4'] : "product_info.php?id=".${$NowData}['pid4'])."\">\n";
						echo 							${$NowData}['slogan4'];	
						echo "						</a>\n";
						echo "						</li><!--End of product_list_cont_info_text-->\n";
						echo "						<li class=\"product_list_cont_price text_14px color_red\">\n";	
						echo "							$".$ProdData4['price']."元<div class=\"sub_shop_car\"></div>";	
						echo "						</li><!--End of product_list_cont_price-->\n";
						echo "					</ul>\n";
					}
					if( ${$NowData}['pid5'] ){
						echo "					<ul class=\"product_list_cont_box\">\n";		
						echo "						<li class=\"product_list_cont_pictitle\">\n";
						echo "							<a href=\"".(${$NowData}['url5'] != '' ? ${$NowData}['url5'] : "product_info.php?id=".${$NowData}['pid5'])."\"><img src=\"".Upload_Url.($ProdData5['prod_pic'] != "" ? $ProdData5['prod_pic'] : "../../web/images/pro_rc_pic01.jpg")."\" width=\"120\" height=\"120\" /></a>\n";
						echo "						</li><!--End of product_list_cont_pictitle-->\n";
						echo "						<li class=\"product_list_cont_title_text text_black_title14px\"><a href=\"".(${$NowData}['url5'] != '' ? ${$NowData}['url5'] : "product_info.php?id=".${$NowData}['pid5'])."\">".$ProdData5['name']."</a></li>\n";
						echo "						<li class=\"product_list_cont_info_text text_12px color_gray\">\n";	
						echo "						<a href=\"".(${$NowData}['url5'] != '' ? ${$NowData}['url5'] : "product_info.php?id=".${$NowData}['pid5'])."\">\n";
						echo 							${$NowData}['slogan5'];	
						echo "						</a>\n";
						echo "						</li><!--End of product_list_cont_info_text-->\n";
						echo "						<li class=\"product_list_cont_price text_14px color_red\">\n";	
						echo "							$".$ProdData5['price']."元<div class=\"sub_shop_car\"></div>";	
						echo "						</li><!--End of product_list_cont_price-->\n";
						echo "					</ul>\n";
					}
					echo "					</li><!--End of product_list_cont_area-->\n";
				}

 			}
			
 			echo "           	 </ul><!--End of product_list_cont_block-->\n";
 			echo "            </div><!--End of product_list_cont-->\n";

		}
		
		/////MAINSHOW3/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_MAINSHOW3($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' ORDER BY `startdate` desc,`serno` desc Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <br><center>\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置一\" onclick=\"location.href='".$_url."?flag=settag&tag=1';\" ".($_tag == 1 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置二\" onclick=\"location.href='".$_url."?flag=settag&tag=2';\" ".($_tag == 2 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置三\" onclick=\"location.href='".$_url."?flag=settag&tag=3';\" ".($_tag == 3 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置四\" onclick=\"location.href='".$_url."?flag=settag&tag=4';\" ".($_tag == 4 ? "disabled" : "").">\n";
			$ListCotent .=  "      </center>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"60\">位置</th>\n";
			$ListCotent .=  "          <th scope=\"col\">商品名稱</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				switch($DataList[$i]['tag']){
					case 1:
						$TagName = "位置一";
						break;
					case 2:
						$TagName = "位置二";
						break;
					case 3:
						$TagName = "位置三";
						break;
					case 4:
						$TagName = "位置四";
						break;
					default:
						$TagName = "位置一";
						break;						
				}

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				$ListCotent .=  "          <td>".$TagName."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";

			return $ListCotent;

		}
		
		function EditPage_MAINSHOW3($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select *,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid1`) pid1name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid2`) pid2name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid3`) pid3name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid4`) pid4name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid5`) pid5name FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">位置</th>\n";
			$EditCotent .=  "          <td align=\"left\">\n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"1\" ".($Data['tag'] == 1 || ($Data == "" && $_tag == 1) ? "checked" : "" )." />位置一 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"2\" ".($Data['tag'] == 2 || ($Data == "" && $_tag == 2) ? "checked" : "" )." />位置二 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"3\" ".($Data['tag'] == 3 || ($Data == "" && $_tag == 3) ? "checked" : "" )." />位置三 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"4\" ".($Data['tag'] == 4 || ($Data == "" && $_tag == 4) ? "checked" : "" )." />位置四 &nbsp; \n";
			$EditCotent .=  "          </td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標籤名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid1\" id=\"pid1\" value=\"".$Data['pid1']."\"><input name=\"pid1name\" id=\"pid1name\" type=\"text\" value=\"".htmlspecialchars($Data['pid1name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid1');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid1').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid1').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan1\" type=\"text\" value=\"".$Data['slogan1']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"50\" /> 開啟方式：<select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid2\" id=\"pid2\" value=\"".$Data['pid2']."\"><input name=\"pid2name\" id=\"pid2name\" type=\"text\" value=\"".htmlspecialchars($Data['pid2name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid2');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid2').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid2').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan2\" type=\"text\" value=\"".$Data['slogan2']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url2\" type=\"text\" value=\"".$Data['url2']."\" size=\"50\" /> 開啟方式：<select name=\"target2\"><option value=\"_self\" ".($Data['target2'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target2'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid3\" id=\"pid3\" value=\"".$Data['pid3']."\"><input name=\"pid3name\" id=\"pid3name\" type=\"text\" value=\"".htmlspecialchars($Data['pid3name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid3');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid3').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid3').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan3\" type=\"text\" value=\"".$Data['slogan3']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url3\" type=\"text\" value=\"".$Data['url3']."\" size=\"50\" /> 開啟方式：<select name=\"target3\"><option value=\"_self\" ".($Data['target3'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target3'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid4\" id=\"pid4\" value=\"".$Data['pid4']."\"><input name=\"pid4name\" id=\"pid4name\" type=\"text\" value=\"".htmlspecialchars($Data['pid4name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid4');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid4').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid4').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan4\" type=\"text\" value=\"".$Data['slogan4']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url4\" type=\"text\" value=\"".$Data['url4']."\" size=\"50\" /> 開啟方式：<select name=\"target4\"><option value=\"_self\" ".($Data['target4'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target4'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品5</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid5\" id=\"pid5\" value=\"".$Data['pid5']."\"><input name=\"pid5name\" id=\"pid5name\" type=\"text\" value=\"".htmlspecialchars($Data['pid5name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid5');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid5').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid5').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語5</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan5\" type=\"text\" value=\"".$Data['slogan5']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址5</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url5\" type=\"text\" value=\"".$Data['url5']."\" size=\"50\" /> 開啟方式：<select name=\"target5\"><option value=\"_self\" ".($Data['target5'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target5'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_MAINSHOW3(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['pid1']      = $_POST['pid1'];
				$data['pid2']      = $_POST['pid2'];
				$data['pid3']      = $_POST['pid3'];
				$data['pid4']      = $_POST['pid4'];
				$data['pid5']      = $_POST['pid5'];
				$data['name']      = $_POST['name'];
				$data['showup']    = $_POST['showup'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['slogan2']   = $_POST['slogan2'];
				$data['slogan3']   = $_POST['slogan3'];
				$data['slogan4']   = $_POST['slogan4'];
				$data['slogan5']   = $_POST['slogan5'];
				$data['url']       = $_POST['url'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['url4']      = $_POST['url4'];
				$data['url5']      = $_POST['url5'];
				$data['target']    = $_POST['target'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];
				$data['target4']   = $_POST['target4'];
				$data['target5']   = $_POST['target5'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "mshowpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				if($_POST['del_pic2'] == "Y")
					$data['pic2'] = '';

				if($_FILES["pic2"]["name"] != "" ){
					$data['pic2'] = "mshowpic2-".date("ymdHis").substr($_FILES["pic2"]["name"],strrpos($_FILES["pic2"]["name"],'.'));
					copy( $_FILES["pic2"]['tmp_name'], Upload_Path.$data['pic2'] );
				}

				if($_POST['del_pic3'] == "Y")
					$data['pic3'] = '';

				if($_FILES["pic3"]["name"] != "" ){
					$data['pic3'] = "mshowpic3-".date("ymdHis").substr($_FILES["pic3"]["name"],strrpos($_FILES["pic3"]["name"],'.'));
					copy( $_FILES["pic3"]['tmp_name'], Upload_Path.$data['pic3'] );
				}

				if($_POST['del_pic4'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic4"]["name"] != "" ){
					$data['pic4'] = "mshowpic4-".date("ymdHis").substr($_FILES["pic4"]["name"],strrpos($_FILES["pic4"]["name"],'.'));
					copy( $_FILES["pic4"]['tmp_name'], Upload_Path.$data['pic4'] );
				}

				if($_POST['del_pic5'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic5"]["name"] != "" ){
					$data['pic5'] = "mshowpic5-".date("ymdHis").substr($_FILES["pic5"]["name"],strrpos($_FILES["pic5"]["name"],'.'));
					copy( $_FILES["pic5"]['tmp_name'], Upload_Path.$data['pic5'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['pid1']      = $_POST['pid1'];
				$data['pid2']      = $_POST['pid2'];
				$data['pid3']      = $_POST['pid3'];
				$data['pid4']      = $_POST['pid4'];
				$data['pid5']      = $_POST['pid5'];
				$data['name']      = $_POST['name'];
				$data['showup']    = $_POST['showup'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['slogan2']   = $_POST['slogan2'];
				$data['slogan3']   = $_POST['slogan3'];
				$data['slogan4']   = $_POST['slogan4'];
				$data['slogan5']   = $_POST['slogan5'];
				$data['url']       = $_POST['url'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['url4']      = $_POST['url4'];
				$data['url5']      = $_POST['url5'];
				$data['target']    = $_POST['target'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];
				$data['target4']   = $_POST['target4'];
				$data['target5']   = $_POST['target5'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "mshowpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				if($_FILES["pic2"]["name"] != "" ){
					$data['pic2'] = "mshowpic2-".date("ymdHis").substr($_FILES["pic2"]["name"],strrpos($_FILES["pic2"]["name"],'.'));
					copy( $_FILES["pic2"]['tmp_name'], Upload_Path.$data['pic2'] );
				}

				if($_FILES["pic3"]["name"] != "" ){
					$data['pic3'] = "mshowpic3-".date("ymdHis").substr($_FILES["pic3"]["name"],strrpos($_FILES["pic3"]["name"],'.'));
					copy( $_FILES["pic3"]['tmp_name'], Upload_Path.$data['pic3'] );
				}

				if($_FILES["pic4"]["name"] != "" ){
					$data['pic4'] = "mshowpic4-".date("ymdHis").substr($_FILES["pic4"]["name"],strrpos($_FILES["pic4"]["name"],'.'));
					copy( $_FILES["pic4"]['tmp_name'], Upload_Path.$data['pic4'] );
				}

				if($_FILES["pic5"]["name"] != "" ){
					$data['pic5'] = "mshowpic5-".date("ymdHis").substr($_FILES["pic5"]["name"],strrpos($_FILES["pic5"]["name"],'.'));
					copy( $_FILES["pic5"]['tmp_name'], Upload_Path.$data['pic5'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function ConfigPage_MAINSHOW3($_url){

			global $g_db;
		
			$Data = "";

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' and `config` = 'Y' ORDER BY `serno` desc LIMIT 1";
			if( $g_db->numRows( $g_db->query( $sqlstr ) ) > 0 )
				$Data = $g_db->getRow( $sqlstr );

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=configsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"config_attr1\" type=\"text\" value=\"".$Data['config_attr1']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">顏色</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"config_attr2\"><option value=\"normal_slide_red\" ".($Data['config_attr2'] == "normal_slide_red" ? "selected" : "").">紅色</option><option value=\"normal_slide_green\" ".($Data['config_attr2'] == "normal_slide_green" ? "selected" : "").">綠色</option><option value=\"normal_slide_deepblue\" ".($Data['config_attr2'] == "normal_slide_deepblue" ? "selected" : "").">藍色</option><option value=\"normal_slide_purple\" ".($Data['config_attr2'] == "normal_slide_purple" ? "selected" : "").">紫色</option><option value=\"normal_slide_yellow\" ".($Data['config_attr2'] == "normal_slide_yellow" ? "selected" : "").">黃色</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function ConfigSave_MAINSHOW3(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['config_attr1'] = $_POST['config_attr1'];
				$data['config_attr2'] = $_POST['config_attr2'];

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']       = $this->shopid;
				$data['block']        = $this->block;
				$data['config']       = 'Y';
				$data['config_attr1'] = $_POST['config_attr1'];
				$data['config_attr2'] = $_POST['config_attr2'];

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_MAINSHOW3($_date){

			global $g_db;

			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' and `config` = 'Y' ORDER BY `serno` desc LIMIT 1";
			$ConfigData = $g_db->getRow( $sqlstr );

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '1' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data1 = $g_db->numRows( $g_db->query($sqlstr) ) > 0 ? $g_db->getRow( $sqlstr ) : "";
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '2' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data2 =  $g_db->numRows( $g_db->query($sqlstr) ) > 0 ? $g_db->getRow( $sqlstr ) : "";
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '3' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data3 =  $g_db->numRows( $g_db->query($sqlstr) ) > 0 ? $g_db->getRow( $sqlstr ) : "";
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '4' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data4 =  $g_db->numRows( $g_db->query($sqlstr) ) > 0 ? $g_db->getRow( $sqlstr ) : "";

			for($i = 1; $i <= 4; $i++){

				$NowData = "Data".$i;

				if($$NowData != "" || ($i == 1 && ($Data2 == "" && $Data3 == "" && $Data4 == ""))){

					//抓取商品資料
					$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid1']."'";
					$ProdData1 = $g_db->getRow($sqlstr);
					$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid2']."'";
					$ProdData2 = $g_db->getRow($sqlstr);
					$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid3']."'";
					$ProdData3 = $g_db->getRow($sqlstr);
					$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid4']."'";
					$ProdData4 = $g_db->getRow($sqlstr);
					$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid5']."'";
					$ProdData5 = $g_db->getRow($sqlstr);
					
					if($Data.$i != '')
					echo "					<li>\n";
					
					if( ${$NowData}['pid1'] ){
						echo "					<table class=\"autoshow_pro_pic_box\" cellspacing=\"0\" cellpadding=\"0\">\n";		
						echo "						<tr>\n";
						echo "							<td><a href=\"".(${$NowData}['url'] != '' ? ${$NowData}['url'] : "product_info.php?id=".${$NowData}['pid1'])."\"><img src=\"".Upload_Url.($ProdData1['prod_pic'] != "" ? $ProdData1['prod_pic'] : "images/autoshow_pro_pic1.png")."\" width=\"115\" height=\"115\" /></a></td>\n";
						echo "						</tr>\n";
						echo "						<tr>\n";
						echo "							<td class=\"text_black_title14px\"><a href=\"".(${$NowData}['url'] != '' ? ${$NowData}['url'] : "product_info.php?id=".${$NowData}['pid1'])."\">".$ProdData1['name']."</a></td>\n";
						echo "						<tr>\n";
						echo "						<tr>\n";
						echo "							<td class=\"text_12px\"><span class=\"color_red text_16px\">".$ProdData1['price']."</span></td>\n";
						echo "						<tr>\n";
						echo "					</table>\n";
					}
					if( ${$NowData}['pid2'] ){
						echo "					<table class=\"autoshow_pro_pic_box\" cellspacing=\"0\" cellpadding=\"0\">\n";		
						echo "						<tr>\n";
						echo "							<td><a href=\"".(${$NowData}['url2'] != '' ? ${$NowData}['url2'] : "product_info.php?id=".${$NowData}['pid2'])."\"><img src=\"".Upload_Url.($ProdData2['prod_pic'] != "" ? $ProdData2['prod_pic'] : "images/autoshow_pro_pic1.png")."\" width=\"115\" height=\"115\" /></a></td>\n";
						echo "						</tr>\n";
						echo "						<tr>\n";
						echo "							<td class=\"text_black_title14px\"><a href=\"".(${$NowData}['url2'] != '' ? ${$NowData}['url2'] : "product_info.php?id=".${$NowData}['pid2'])."\">".$ProdData2['name']."</a></td>\n";
						echo "						<tr>\n";
						echo "						<tr>\n";
						echo "							<td class=\"text_12px\"><span class=\"color_red text_16px\">".$ProdData2['price']."</span></td>\n";
						echo "						<tr>\n";
						echo "					</table>\n";
					}			
					if( ${$NowData}['pid3'] ){
						echo "					<table class=\"autoshow_pro_pic_box\" cellspacing=\"0\" cellpadding=\"0\">\n";		
						echo "						<tr>\n";
						echo "							<td><a href=\"".(${$NowData}['url3'] != '' ? ${$NowData}['url3'] : "product_info.php?id=".${$NowData}['pid3'])."\"><img src=\"".Upload_Url.($ProdData3['prod_pic'] != "" ? $ProdData3['prod_pic'] : "images/autoshow_pro_pic1.png")."\" width=\"115\" height=\"115\" /></a></td>\n";
						echo "						</tr>\n";
						echo "						<tr>\n";
						echo "							<td class=\"text_black_title14px\"><a href=\"".(${$NowData}['url3'] != '' ? ${$NowData}['url3'] : "product_info.php?id=".${$NowData}['pid3'])."\">".$ProdData3['name']."</a></td>\n";
						echo "						<tr>\n";
						echo "						<tr>\n";
						echo "							<td class=\"text_12px\"><span class=\"color_red text_16px\">".$ProdData3['price']."</span></td>\n";
						echo "						<tr>\n";
						echo "					</table>\n";
					}	
					if( ${$NowData}['pid4'] ){
						echo "					<table class=\"autoshow_pro_pic_box\" cellspacing=\"0\" cellpadding=\"0\">\n";		
						echo "						<tr>\n";
						echo "							<td><a href=\"".(${$NowData}['url4'] != '' ? ${$NowData}['url4'] : "product_info.php?id=".${$NowData}['pid4'])."\"><img src=\"".Upload_Url.($ProdData4['prod_pic'] != "" ? $ProdData4['prod_pic'] : "images/autoshow_pro_pic1.png")."\" width=\"115\" height=\"115\" /></a></td>\n";
						echo "						</tr>\n";
						echo "						<tr>\n";
						echo "							<td class=\"text_black_title14px\"><a href=\"".(${$NowData}['url4'] != '' ? ${$NowData}['url4'] : "product_info.php?id=".${$NowData}['pid4'])."\">".$ProdData4['name']."</a></td>\n";
						echo "						<tr>\n";
						echo "						<tr>\n";
						echo "							<td class=\"text_12px\"><span class=\"color_red text_16px\">".$ProdData4['price']."</span></td>\n";
						echo "						<tr>\n";
						echo "					</table>\n";
					}
					if($Data.$i != '')
					echo "					</li>\n";
				}

 			}

		}

		/////SUBSHOW/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_SUBSHOW($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' ORDER BY `startdate` desc,`serno` desc Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"設定\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=config';\" /><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <br><center>\n";
			$ListCotent .=  "      </center>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\">標籤</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";
			
			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_SUBSHOW($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select *,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid1`) pid1name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid2`) pid2name FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標籤</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid1\" id=\"pid1\" value=\"".$Data['pid1']."\"><input name=\"pid1name\" id=\"pid1name\" type=\"text\" value=\"".htmlspecialchars($Data['pid1name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid1');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid1').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid1').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan1\" type=\"text\" value=\"".$Data['slogan1']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"50\" /> 開啟方式：<select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid2\" id=\"pid2\" value=\"".$Data['pid2']."\"><input name=\"pid2name\" id=\"pid2name\" type=\"text\" value=\"".htmlspecialchars($Data['pid2name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid2');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid2').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid2').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan2\" type=\"text\" value=\"".$Data['slogan2']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url2\" type=\"text\" value=\"".$Data['url2']."\" size=\"50\" /> 開啟方式：<select name=\"target2\"><option value=\"_self\" ".($Data['target2'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target2'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid3\" id=\"pid3\" value=\"".$Data['pid3']."\"><input name=\"pid3name\" id=\"pid3name\" type=\"text\" value=\"".htmlspecialchars($Data['pid3name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid3');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid3').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid3').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan3\" type=\"text\" value=\"".$Data['slogan3']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url3\" type=\"text\" value=\"".$Data['url3']."\" size=\"50\" /> 開啟方式：<select name=\"target3\"><option value=\"_self\" ".($Data['target3'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target3'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_SUBSHOW(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['pid1']      = $_POST['pid1'];
				$data['pid2']      = $_POST['pid2'];
				$data['pid3']      = $_POST['pid3'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['slogan2']   = $_POST['slogan2'];
				$data['slogan3']   = $_POST['slogan3'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];
				$data['showup']    = $_POST['showup'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "sshowpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{
				
				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['pid1']      = $_POST['pid1'];
				$data['pid2']      = $_POST['pid2'];
				$data['pid3']      = $_POST['pid3'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['slogan2']   = $_POST['slogan2'];
				$data['slogan3']   = $_POST['slogan3'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];
				$data['showup']    = $_POST['showup'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "mshowpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function ConfigPage_SUBSHOW($_url){

			global $g_db;

			$Data = "";

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `config` = 'Y' ORDER BY `serno` desc LIMIT 1";
			if( $g_db->numRows( $g_db->query( $sqlstr ) ) > 0 )
				$Data = $g_db->getRow( $sqlstr );

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=configsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"text\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">館名</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['config_attr1'] != "" ? "<a href=\"".Upload_Url.$Data['config_attr1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['config_attr1']."\" height=\"35\"></a><br>" : "")."<input name=\"config_attr1\" type=\"file\" size=\"20\" />".($Data['config_attr1'] != "" ? " <input type=\"checkbox\" name=\"del_config_attr1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 高35px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">顏色</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"config_attr2\"><option value=\"green_prolist_stitle\" ".($Data['config_attr2'] == "green_prolist_stitle" ? "selected" : "").">綠色</option><option value=\"blue_prolist_stitle\" ".($Data['config_attr2'] == "blue_prolist_stitle" ? "selected" : "").">藍色</option><option value=\"pink_prolist_stitle\" ".($Data['config_attr2'] == "pink_prolist_stitle" ? "selected" : "").">粉紅色</option><option value=\"purple_prolist_stitle\" ".($Data['config_attr2'] == "purple_prolist_stitle" ? "selected" : "").">紫色</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function ConfigSave_SUBSHOW(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['config_attr2'] = $_POST['config_attr2'];

				if($_POST['del_config_attr1'] == "Y")
					$data['config_attr1'] = '';

				if($_FILES["config_attr1"]["name"] != "" ){
					$data['config_attr1'] = "sshowpic1-".date("ymdHis").substr($_FILES["config_attr1"]["name"],strrpos($_FILES["config_attr1"]["name"],'.'));
					copy( $_FILES["config_attr1"]['tmp_name'], Upload_Path.$data['config_attr1'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']       = $this->shopid;
				$data['block']        = $this->block;
				$data['config']       = 'Y';
				$data['config_attr2'] = $_POST['config_attr2'];

				if($_FILES["config_attr1"]["name"] != "" ){
					$data['config_attr1'] = "sshowpic1-".date("ymdHis").substr($_FILES["config_attr1"]["name"],strrpos($_FILES["config_attr1"]["name"],'.'));
					copy( $_FILES["config_attr1"]['tmp_name'], Upload_Path.$data['config_attr1'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_SUBSHOW($_date){

			global $g_db;

			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' and `config` = 'Y' ORDER BY `serno` desc LIMIT 1";
			$ConfigData = $g_db->getRow( $sqlstr );

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND()";
			$Data = $g_db->getRow( $sqlstr );


			//抓取商品資料
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data['pid1']."'";
			$ProdData1 = $g_db->numRows( $g_db->query($sqlstr) ) > 0 ? $g_db->getRow( $sqlstr ) : "";
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data['pid2']."'";
			$ProdData2 = $g_db->numRows( $g_db->query($sqlstr) ) > 0 ? $g_db->getRow( $sqlstr ) : "";
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data['pid3']."'";
			$ProdData3 = $g_db->numRows( $g_db->query($sqlstr) ) > 0 ? $g_db->getRow( $sqlstr ) : "";
			
			if($Data && sizeof($Data)>0){
			echo "			<div class=\"".($ConfigData['config_attr2'] != "" ? $ConfigData['config_attr2'] : "blue_prolist_stitle")."\">\n";
			echo "				<div class=\"small_prolist_title_txt\">".$Data['name']."</div>\n";
			echo "				<div class=\"small_prolist_more\"><a href=\"#\"><img class=\"pngbg\" src=\"images/more_btn.png\" width=\"52\" height=\"16\" /></a></div>\n";
			echo "			</div>\n";
			echo "			<div class=\"small_prolist_cont\">\n";
			echo "				<ul>";
			if($ProdData1 && sizeof($ProdData1)>0){
				echo "				<li class=\"pro1\">\n";
				echo "					<ul>\n";
				echo "						<li><a class=\"propic_style\" href=\"".($Data['url'] != '' ? $Data['url'] : "product_info.php?id=".$Data['pid1'])."\" target=\"".$Data['target1']."\"><img src=\"".Upload_Url.($ProdData1['prod_pic'] != "" ? $ProdData1['prod_pic'] : "../../web/images/pro_pic02.jpg")."\" width=\"130\" height=\"130\" /></a></li>\n";
				echo "						<li><a class=\"pro_info_txt\" href=\"".($Data['url'] != '' ? $Data['url'] : "product_info.php?id=".$Data['pid1'])."\" target=\"".$Data['target1']."\"><span class=\"pro_info_title\">".$ProdData1['name']."</span><br />".$Data['slogan1']."</a></li>\n";
				echo "						<li>\n";
				echo "							<span class=\"pro_info_price\"><span class=\"pro_info_money\">$".$ProdData1['price']."</span>元</span>\n";
				echo "							<a class=\"pro_info_cart\" href=\"#\"><img src=\"images/por_shop_car.png\" width=\"59\" height=\"24\" /></a>\n";
				echo "						</li>\n";
				echo "					</ul>\n";
				echo "				</li>\n";
			}
			if($ProdData2 && sizeof($ProdData2)>0){
				echo "				<li class=\"pro2\">\n";
				echo "					<table cellspacing=\"0\">\n";
				echo "						<tr>\n";
				echo "							<th rowspan=\"2\"><a class=\"spropic_style\" href=\"".($Data['url2'] != '' ? $Data['url2'] : "product_info.php?id=".$Data['pid2'])."\" target=\"".$Data['target2']."\"><img src=\"".Upload_Url.($ProdData2['prod_pic'] != "" ? $ProdData2['prod_pic'] : "../../web/images/pro_pic02.jpg")."\" width=\"90\" height=\"90\" /></a></th>\n";
				echo "							<td><a class=\"pro_info_txt\" href=\"".($Data['url2'] != '' ? $Data['url2'] : "product_info.php?id=".$Data['pid2'])."\" target=\"".$Data['target2']."\"><span class=\"pro_info_title\">".$ProdData2['name']."</span><br />".$Data['slogan2']."</a><br /><span class=\"pro_info_money\">$".$ProdData2['price']."</span>元</td>\n";
				echo "						</tr>\n";
				echo "						<tr>\n";
				echo "							<td align=\"right\" class=\"pro_info_cart\"><a href=\"#\"><img src=\"images/por_shop_car.png\" width=\"59\" height=\"24\" /></a></td>\n";
				echo "						</tr>\n";
				echo "					</table>\n";
				echo "				</li>\n";
			}
			if($ProdData3 && sizeof($ProdData3)>0){
				echo "				<li class=\"pro3\">\n";
				echo "					<table cellspacing=\"0\">\n";
				echo "						<tr>\n";
				echo "							<th rowspan=\"2\"><a class=\"spropic_style\" href=\"".($Data['url3'] != '' ? $Data['url3'] : "product_info.php?id=".$Data['pid3'])."\" target=\"".$Data['target3']."\"><img src=\"".Upload_Url.($ProdData3['prod_pic'] != "" ? $ProdData3['prod_pic'] : "../../web/images/pro_pic01.jpg")."\" width=\"90\" height=\"90\" /></a></th>\n";
				echo "							<td><a class=\"pro_info_txt\" href=\"".($Data['url3'] != '' ? $Data['url3'] : "product_info.php?id=".$Data['pid3'])."\" target=\"".$Data['target3']."\"><span class=\"pro_info_title\">".$ProdData3['name']."</span><br />".$Data['slogan3']."</a><br /><span class=\"pro_info_money\">$".$ProdData3['price']."</span>元</td>\n";
				echo "						</tr>\n";
				echo "						<tr>\n";
				echo "							<td align=\"right\" class=\"pro_info_cart\"><a href=\"#\"><img src=\"images/por_shop_car.png\" width=\"59\" height=\"24\" /></a></td>\n";
				echo "						</tr>\n";
				echo "					</table>\n";
				echo "				</li>\n";
			}
			echo "				</ul>\n";
			echo "			</div>\n";
			}

		}

		///// HOTSALE1 /////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_HOTSALE1($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' ";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' ORDER BY `startdate` desc,`serno` desc Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\">標語文字</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">1:".$DataList[$i]['slogan1']."; 2.".$DataList[$i]['slogan2']."; 3.".$DataList[$i]['slogan3']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";

			return $ListCotent;

		}

		function EditPage_HOTSALE1($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select *,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid1`) pid1name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid2`) pid2name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid3`) pid3name FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan1\" type=\"text\" value=\"".$Data['slogan1']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid1\" id=\"pid1\" value=\"".$Data['pid1']."\"><input name=\"pid1name\" id=\"pid1name\" type=\"text\" value=\"".htmlspecialchars($Data['pid1name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid1');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid1').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid1').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"50\" />";
			$EditCotent .=  "                             開啟方式：<select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan2\" type=\"text\" value=\"".$Data['slogan2']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid2\" id=\"pid2\" value=\"".$Data['pid2']."\"><input name=\"pid2name\" id=\"pid2name\" type=\"text\" value=\"".htmlspecialchars($Data['pid2name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid2');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid2').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid2').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url2\" type=\"text\" value=\"".$Data['url2']."\" size=\"50\" />";
			$EditCotent .=  "                             開啟方式：<select name=\"target2\"><option value=\"_self\" ".($Data['target2'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target2'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan3\" type=\"text\" value=\"".$Data['slogan3']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid3\" id=\"pid3\" value=\"".$Data['pid3']."\"><input name=\"pid3name\" id=\"pid3name\" type=\"text\" value=\"".htmlspecialchars($Data['pid3name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid3');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid3').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid3').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url3\" type=\"text\" value=\"".$Data['url3']."\" size=\"50\" />";
			$EditCotent .=  "                             開啟方式：<select name=\"target3\"><option value=\"_self\" ".($Data['target3'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target2'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_HOTSALE1(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['pid1']      = $_POST['pid1'];
				$data['pid2']      = $_POST['pid2'];
				$data['pid3']      = $_POST['pid3'];
				$data['name']      = $_POST['name'];
				$data['showup']    = $_POST['showup'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['slogan2']   = $_POST['slogan2'];
				$data['slogan3']   = $_POST['slogan3'];
				$data['url']       = $_POST['url'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['target']    = $_POST['target'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "mshowpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['pid1']      = $_POST['pid1'];
				$data['pid2']      = $_POST['pid2'];
				$data['pid3']      = $_POST['pid3'];
				$data['name']      = $_POST['name'];
				$data['showup']    = $_POST['showup'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['slogan2']   = $_POST['slogan2'];
				$data['slogan3']   = $_POST['slogan3'];
				$data['url']       = $_POST['url'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['target']    = $_POST['target'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "mshowpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function ConfigSave_HOTSALE1(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['config_attr1'] = $_POST['config_attr1'];
				$data['config_attr2'] = $_POST['config_attr2'];

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']       = $this->shopid;
				$data['block']        = $this->block;
				$data['config']       = 'Y';
				$data['config_attr1'] = $_POST['config_attr1'];
				$data['config_attr2'] = $_POST['config_attr2'];

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_HOTSALE1($_date){

			global $g_db;

			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY `serno` desc LIMIT 1";
			$Data = $g_db->getRow( $sqlstr );

			echo "          <ol class='banner_01_list'>";

			//抓取商品資料
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data['pid1']."'";
			$ProdData1 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data['pid2']."'";
			$ProdData2 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data['pid3']."'";
			$ProdData3 = $g_db->getRow($sqlstr);

			echo "            <li class='banner_01_info'>";
			echo "              <table cellspacing=2 cellpadding=0 class='banner_01_table'>";
			echo "                <tr>";
			echo "                  <td align='right' class='slogan_orange'><a href=\"".($Data['url']!=""?$Data['url']:"#")."\" target=\"".$Data['target']."\">".$Data["slogan1"]."</a></td>";
			echo "                  <td rowspan='3' class='banner_01_img'><a href=\"".($Data['url']!=""?$Data['url']:"#")."\" target=\"".$Data['target']."\"><img alt=\"" . $ProdData1['name'] . "\" title=\"" . $ProdData1['name'] . "\" src='".(Upload_Url.($ProdData1['prod_pic'] != "" ? $ProdData1['prod_pic'] : "default/default_60_60.jpg"))."' width=\"65\" height=\"65\" /></a></td>";
			echo "                 </tr>";
			echo "                <tr>";
			echo "                  <td align='right' class='banner_01_cont'><a href=\"".($Data['url']!=""?$Data['url']:"#")."\" target=\"".$Data['target']."\"></a></td>";
			echo "                </tr>";
			echo "                <tr>";
			echo "                  <td align='right' class='banner_01_cont'>$<a href=\"".($Data['url']!=""?$Data['url']:"#")."\" target=\"".$Data['target']."\"><strong class='price_num'>".$ProdData1['price']."</strong></a>元</td>";
			echo "                </tr>";
			echo "              </table>";
			echo "            </li>";
			echo "            <li class='banner_01_info'>";
			echo "              <table cellspacing=2 cellpadding=0 class='banner_01_table'>";
			echo "                <tr>";
			echo "                  <td align='right' class='slogan_orange'><a href=\"".($Data['url2']!=""?$Data['url2']:"#")."\" target=\"".$Data['target2']."\">".$Data["slogan2"]."</a></td>";
			echo "                  <td rowspan='3' class='banner_01_img'><a href=\"".($Data['url2']!=""?$Data['url2']:"#")."\" target=\"".$Data['target2']."\"><img alt=\"" . $ProdData2['name'] . "\" title=\"" . $ProdData2['name'] . "\" src='".(Upload_Url.($ProdData2['prod_pic'] != "" ? $ProdData2['prod_pic'] : "default/default_60_60.jpg"))."' width=\"65\" height=\"65\" /></a></td>";
			echo "                 </tr>";
			echo "                <tr>";
			echo "                  <td align='right' class='banner_01_cont'><a href=\"".($Data['url2']!=""?$Data['url2']:"#")."\" target=\"".$Data['target2']."\"></a></td>";
			echo "                </tr>";
			echo "                <tr>";
			echo "                  <td align='right' class='banner_01_cont'>$<a href=\"".($Data['url2']!=""?$Data['url2']:"#")."\" target=\"".$Data['target2']."\"><strong class='price_num'>".$ProdData2['price']."</strong></a>元</td>";
			echo "                </tr>";
			echo "              </table>";
			echo "            </li>";
			echo "            <li class='banner_01_info'>";
			echo "              <table cellspacing=2 cellpadding=0 class='banner_01_table'>";
			echo "                <tr>";
			echo "                  <td align='right' class='slogan_orange'><a href=\"".($Data['url3']!=""?$Data['url3']:"#")."\" target=\"".$Data['target3']."\">".$Data["slogan3"]."</a></td>";
			echo "                  <td rowspan='3' class='banner_01_img'><a href=\"".($Data['url3']!=""?$Data['url3']:"#")."\" target=\"".$Data['target3']."\"><img alt=\"" . $ProdData3['name'] . "\" title=\"" . $ProdData3['name'] . "\" src='".(Upload_Url.($ProdData3['prod_pic'] != "" ? $ProdData3['prod_pic'] : "default/default_60_60.jpg"))."' width=\"65\" height=\"65\" /></a></td>";
			echo "                 </tr>";
			echo "                <tr>";
			echo "                  <td align='right' class='banner_01_cont'><a href=\"".($Data['url3']!=""?$Data['url3']:"#")."\" target=\"".$Data['target3']."\"></a></td>";
			echo "                </tr>";
			echo "                <tr>";
			echo "                  <td align='right' class='banner_01_cont'>$<a href=\"".($Data['url3']!=""?$Data['url3']:"#")."\" target=\"".$Data['target3']."\"><strong class='price_num'>".$ProdData3['price']."</strong></a>元</td>";
			echo "                </tr>";
			echo "              </table>";
			echo "            </li>";

			echo "          </ol>";

		}  // End of CreateHtml_HOTSALE1

		///// HOTSALE2 /////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_HOTSALE2($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' ";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' ORDER BY `startdate` desc,`serno` desc Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\">標語文字</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">1:".$DataList[$i]['slogan1']."; 2.".$DataList[$i]['slogan2']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";

			return $ListCotent;

		}

		function EditPage_HOTSALE2($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select *,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid1`) pid1name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid2`) pid2name FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic1'] != "" ? "<a href=\"".Upload_Url.$Data['pic1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"147\" height=\"147\"></a><br>" : "")."<input name=\"pic1\" type=\"file\" size=\"20\" />".($Data['pic1'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 173px × 173px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan1\" type=\"text\" value=\"".$Data['slogan1']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid1\" id=\"pid1\" value=\"".$Data['pid1']."\"><input name=\"pid1name\" id=\"pid1name\" type=\"text\" value=\"".htmlspecialchars($Data['pid1name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid1');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid1').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid1').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"50\" />";
			$EditCotent .=  "                             開啟方式：<select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_HOTSALE2(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['pid1']      = $_POST['pid1'];
				$data['name']      = $_POST['name'];
				$data['showup']    = $_POST['showup'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				
				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "indexpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}
				
				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['pid1']      = $_POST['pid1'];
				$data['name']      = $_POST['name'];
				$data['showup']    = $_POST['showup'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				
				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "indexpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function ConfigSave_HOTSALE2(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['config_attr1'] = $_POST['config_attr1'];
				$data['config_attr2'] = $_POST['config_attr2'];

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']       = $this->shopid;
				$data['block']        = $this->block;
				$data['config']       = 'Y';
				$data['config_attr1'] = $_POST['config_attr1'];
				$data['config_attr2'] = $_POST['config_attr2'];

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_HOTSALE2($_date){

			global $g_db;

			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY `serno` desc LIMIT 1";
			$Data = $g_db->getRow( $sqlstr );

			//抓取商品資料
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data['pid1']."'";
			$ProdData = $g_db->getRow($sqlstr);
			
			if($Data && sizeof($Data)>0){
				echo "			<div class=\"sec_hot_title\">\n";
				echo "				<p class=\"text_color text_16px\">整點下殺</p>\n";
			//	echo "				<div></div>\n";
				echo "			</div>\n";
				echo "			<ul id=\"sec_hot_box\">\n";
			//	echo "				<li class=\"sec_hot_discount\">\n";
			//	echo "					<p id=\"sec_hot_discount_up\" class=\"color_white text_12px\">限時優惠</p>\n";
			//	echo "					<p id=\"sec_hot_discount_down\" class=\"color_white text_12px\"><span class=\"text_24px color_white\">3</span>折</p>";
			//	echo "				</li><!--End of sec_hot_discount-->\n";
				echo "				<li class=\"sec_hot_pic\"><img src=\"".Upload_Url.($Data['pic1'] != '' ? $Data['pic1'] : 'default/150X150.jpg')."\" width=\"147\" height=\"147\" /></li>\n";
				echo "				<li class=\"sec_hot_txt\">\n";
				echo "					<p class=\"text_black_title16px\">".$ProdData['name']."</p>\n";
				echo "					<p class=\"text_12px color_gray\">".$Data['slogan1']."</p>\n";
				echo "				</li><!--End of sec_hot_pic-->\n";
				echo "				<li class=\"sec_hot_price\">";
				echo "					<div class=\"price_box\">";
				echo "						<p class=\"text_12px price_info\"><span class=\"color_red text_16px\">".$ProdData['price']."</span>元</p><div class=\"por_shop_car\"></div>";
				echo "					</div>";
				echo "				</li><!--End of sec_hot_price-->";
				echo "			</ul><!--End of sec_hot_box-->";
			}
			


		}  // End of CreateHtml_HOTSALE2

		/////ADVERTISING/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_ADVERTISING($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' ORDER BY `order`,`startdate` desc,`serno` Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );
			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">排序</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($pageno * $this->pageshownum + $i + 1)."</td>\n";
				$ListCotent .=  "          <td>".($DataList[$i]['pic1'] != "" ? "<a href=\"".Upload_Url.$DataList[$i]['pic1']."\" target=\"_blank\"><img " . ( $DataList['slogan1'] ? 'alt="' . $DataList['slogan1'] . '" title="' . $DataList['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$DataList[$i]['pic1']."\" width=\"160\"></a>" : "")."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['order']."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_ADVERTISING($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic1'] != "" ? "<a href=\"".Upload_Url.$Data['pic1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"160\"></a><br>" : "")."<input name=\"pic1\" type=\"file\" size=\"20\" />".($Data['pic1'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 寬1000px 高280px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">排序</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"order\" type=\"text\" value=\"".($Data != "" ? $Data['order'] : 99)."\" size=\"1\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_ADVERTISING(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['order']     = $_POST['order'];
				$data['showup']    = $_POST['showup'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "advpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['order']     = $_POST['order'];
				$data['showup']    = $_POST['showup'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "advpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_ADVERTISING($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND()";
			$DataList = $g_db->getRow( $sqlstr );
			
			if($DataList && sizeof($DataList)>0 ){
				echo "	<div class=\"close_ad_box\">\n";
				echo "		<div id=\"close_ad_pic\">\n";
				echo "			<img " . ( $DataList['slogan1'] ? 'alt="' . $DataList['slogan1'] . '" title="' . $DataList['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.($DataList['pic1'])."\" width=\"1000\" height=\"280\" />";
				echo "		</div>\n";
				echo "		<div id=\"close_ad_toggle_icon\" class=\"ad_icon_close\"></div>\n";
				echo "	</div><!--End of close_ad_box-->\n";
			}

		}

		/////ADVERTISING2/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_ADVERTISING2($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' ORDER BY `order`,`startdate` desc,`serno` Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );
			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">排序</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($pageno * $this->pageshownum + $i + 1)."</td>\n";
				$ListCotent .=  "          <td>".($DataList[$i]['pic1'] != "" ? "<a href=\"".Upload_Url.$DataList[$i]['pic1']."\" target=\"_blank\"><img " . ( $DataList['slogan1'] ? 'alt="' . $DataList['slogan1'] . '" title="' . $DataList['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$DataList[$i]['pic1']."\" width=\"220\"></a>" : "")."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['order']."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_ADVERTISING2($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic1'] != "" ? "<a href=\"".Upload_Url.$Data['pic1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"220\"></a><br>" : "")."<input name=\"pic1\" type=\"file\" size=\"20\" />".($Data['pic1'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 寬220px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">排序</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"order\" type=\"text\" value=\"".($Data != "" ? $Data['order'] : 99)."\" size=\"1\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_ADVERTISING2(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['order']     = $_POST['order'];
				$data['showup']    = $_POST['showup'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "advpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['order']     = $_POST['order'];
				$data['showup']    = $_POST['showup'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "advpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_ADVERTISING2($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY `order`,`serno`";
			$DataList = $g_db->getAll( $sqlstr );


	 		echo "            <ul>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				echo "              <li><a href=\"".($DataList[$i]['url'] != "" ? $DataList[$i]['url'] : "#" )."\" target=\"".$DataList[$i]['target']."\" alt=\"".$DataList[$i]['name']."\"><img " . ( $DataList['slogan1'] ? 'alt="' . $DataList['slogan1'] . '" title="' . $DataList['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$DataList[$i]['pic1']."\" width=\"220\" /></a></li>\n";

			}

	 		echo "            </ul>\n";
			

		}

		/////UNIQUE/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_UNIQUE($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' ORDER BY `order`,`startdate` desc,`serno` Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );
			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($pageno * $this->pageshownum + $i + 1)."</td>\n";
				$ListCotent .=  "          <td>".($DataList[$i]['pic1'] != "" ? "<a href=\"".Upload_Url.$DataList[$i]['pic1']."\" target=\"_blank\"><img " . ( $DataList['slogan1'] ? 'alt="' . $DataList['slogan1'] . '" title="' . $DataList['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$DataList[$i]['pic1']."\" width=\"210\" height=\"185\"></a>" : "")."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_UNIQUE($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic1'] != "" ? "<a href=\"".Upload_Url.$Data['pic1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"210\" height=\"185\"></a><br>" : "")."<input name=\"pic1\" type=\"file\" size=\"20\" />".($Data['pic1'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 210px x 185px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_UNIQUE(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "advpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "advpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_UNIQUE($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() LIMIT 1";
			$Data = $g_db->getRow( $sqlstr );

			echo "            	<a href=\"".($Data['url'] != "" ? $Data['url'] : "#" )."\" target=\"".$Data['target']."\" alt=\"".$Data['name']."\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.($Data['pic1'] != "" ? $Data['pic1'] : "default/default_210_185.jpg")."\" width=\"210\" height=\"185\" /></a>\n";

		}

		/////POP/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_POP($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );

			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' ORDER BY `startdate` desc,`serno` desc Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <br><center>\n";
			$ListCotent .=  "      </center>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\">標籤</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";
			
			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_POP($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select *,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid1`) pid1name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid2`) pid2name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid3`) pid3name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid4`) pid4name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid5`) pid5name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid6`) pid6name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid7`) pid7name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid8`) pid8name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid9`) pid9name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid10`) pid10name FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標籤</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">BEST1</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid1\" id=\"pid1\" value=\"".$Data['pid1']."\"><input name=\"pid1name\" id=\"pid1name\" type=\"text\" value=\"".htmlspecialchars($Data['pid1name'])."\" size=\"60\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid1');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid1').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid1').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"60\" /> 開啟方式：<select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">BEST2</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid2\" id=\"pid2\" value=\"".$Data['pid2']."\"><input name=\"pid2name\" id=\"pid2name\" type=\"text\" value=\"".htmlspecialchars($Data['pid2name'])."\" size=\"60\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid2');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid2').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid2').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url2\" type=\"text\" value=\"".$Data['url2']."\" size=\"60\"/> 開啟方式：<select name=\"target2\"><option value=\"_self\" ".($Data['target2'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target2'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">BEST3</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid3\" id=\"pid3\" value=\"".$Data['pid3']."\"><input name=\"pid3name\" id=\"pid3name\" type=\"text\" value=\"".htmlspecialchars($Data['pid3name'])."\" size=\"60\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid3');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid3').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid3').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url3\" type=\"text\" value=\"".$Data['url3']."\" size=\"60\"/> 開啟方式：<select name=\"target3\"><option value=\"_self\" ".($Data['target3'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target3'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">BEST4</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid4\" id=\"pid4\" value=\"".$Data['pid4']."\"><input name=\"pid4name\" id=\"pid4name\" type=\"text\" value=\"".htmlspecialchars($Data['pid4name'])."\" size=\"60\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid4');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid4').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid4').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url4\" type=\"text\" value=\"".$Data['url4']."\" size=\"60\"/> 開啟方式：<select name=\"target4\"><option value=\"_self\" ".($Data['target4'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target4'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">BEST5</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid5\" id=\"pid5\" value=\"".$Data['pid5']."\"><input name=\"pid5name\" id=\"pid5name\" type=\"text\" value=\"".htmlspecialchars($Data['pid5name'])."\" size=\"60\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid5');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid5').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid5').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url5\" type=\"text\" value=\"".$Data['url5']."\" size=\"60\"/> 開啟方式：<select name=\"target5\"><option value=\"_self\" ".($Data['target5'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target5'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
		//	$EditCotent .=  "        <tr>\n";
		//	$EditCotent .=  "          <th scope=\"col\">BEST6</th>\n";
		//	$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
		//	$EditCotent .=  "        </tr>\n";
		//	$EditCotent .=  "        <tr>\n";
		//	$EditCotent .=  "          <th scope=\"col\">商品</th>\n";
		//	$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid6\" id=\"pid6\" value=\"".$Data['pid6']."\"><input name=\"pid6name\" id=\"pid6name\" type=\"text\" value=\"".htmlspecialchars($Data['pid6name'])."\" size=\"60\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid6');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid6').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid6').val()),'_blank','')}\"></td>\n";
		//	$EditCotent .=  "        </tr>\n";
		//	$EditCotent .=  "        <tr>\n";
		//	$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
		//	$EditCotent .=  "          <td align=\"left\"><input name=\"url6\" type=\"text\" value=\"".$Data['url6']."\" size=\"60\"/> 開啟方式：<select name=\"target6\"><option value=\"_self\" ".($Data['target6'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target6'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
		//	$EditCotent .=  "        </tr>\n";
		//	$EditCotent .=  "        <tr>\n";
		//	$EditCotent .=  "          <th scope=\"col\">BEST7</th>\n";
		//	$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
		//	$EditCotent .=  "        </tr>\n";
		//	$EditCotent .=  "        <tr>\n";
		//	$EditCotent .=  "          <th scope=\"col\">商品</th>\n";
		//	$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid7\" id=\"pid7\" value=\"".$Data['pid7']."\"><input name=\"pid7name\" id=\"pid7name\" type=\"text\" value=\"".htmlspecialchars($Data['pid7name'])."\" size=\"60\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid7');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid7').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid7').val()),'_blank','')}\"></td>\n";
		//	$EditCotent .=  "        </tr>\n";
		//	$EditCotent .=  "        <tr>\n";
		//	$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
		//	$EditCotent .=  "          <td align=\"left\"><input name=\"url7\" type=\"text\" value=\"".$Data['url7']."\" size=\"60\"/> 開啟方式：<select name=\"target7\"><option value=\"_self\" ".($Data['target7'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target7'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
		//	$EditCotent .=  "        </tr>\n";
		//	$EditCotent .=  "        <tr>\n";
		//	$EditCotent .=  "          <th scope=\"col\">BEST8</th>\n";
		//	$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
		//	$EditCotent .=  "        </tr>\n";
		//	$EditCotent .=  "        <tr>\n";
		//	$EditCotent .=  "          <th scope=\"col\">商品</th>\n";
		//	$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid8\" id=\"pid8\" value=\"".$Data['pid8']."\"><input name=\"pid8name\" id=\"pid8name\" type=\"text\" value=\"".htmlspecialchars($Data['pid8name'])."\" size=\"60\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid8');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid8').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid8').val()),'_blank','')}\"></td>\n";
		//	$EditCotent .=  "        </tr>\n";
		//	$EditCotent .=  "        <tr>\n";
		//	$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
		//	$EditCotent .=  "          <td align=\"left\"><input name=\"url8\" type=\"text\" value=\"".$Data['url8']."\" size=\"60\"/> 開啟方式：<select name=\"target8\"><option value=\"_self\" ".($Data['target8'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target8'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
		//	$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_POP(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['pid1']      = $_POST['pid1'];
				$data['pid2']      = $_POST['pid2'];
				$data['pid3']      = $_POST['pid3'];
				$data['pid4']      = $_POST['pid4'];
				$data['pid5']      = $_POST['pid5'];
				$data['pid6']      = $_POST['pid6'];
				$data['pid7']      = $_POST['pid7'];
				$data['pid8']      = $_POST['pid8'];
				$data['name']      = $_POST['name'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['url']       = $_POST['url'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['url4']      = $_POST['url4'];
				$data['url5']      = $_POST['url5'];
				$data['url6']      = $_POST['url6'];
				$data['url7']      = $_POST['url7'];
				$data['url8']      = $_POST['url8'];
				$data['url9']      = $_POST['url9'];
				$data['url10']     = $_POST['url10'];
				$data['target']    = $_POST['target'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];
				$data['target4']   = $_POST['target4'];
				$data['target5']   = $_POST['target5'];
				$data['target6']   = $_POST['target6'];
				$data['target7']   = $_POST['target7'];
				$data['target8']   = $_POST['target8'];
				$data['target9']   = $_POST['target9'];
				$data['target10']  = $_POST['target10'];
				$data['showup']    = $_POST['showup'];
				

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['pid1']      = $_POST['pid1'];
				$data['pid2']      = $_POST['pid2'];
				$data['pid3']      = $_POST['pid3'];
				$data['pid4']      = $_POST['pid4'];
				$data['pid5']      = $_POST['pid5'];
				$data['pid6']      = $_POST['pid6'];
				$data['pid7']      = $_POST['pid7'];
				$data['pid8']      = $_POST['pid8'];
				$data['pid9']      = $_POST['pid9'];
				$data['pid10']     = $_POST['pid10'];
				$data['name']      = $_POST['name'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['url']       = $_POST['url'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['url4']      = $_POST['url4'];
				$data['url5']      = $_POST['url5'];
				$data['url6']      = $_POST['url6'];
				$data['url7']      = $_POST['url7'];
				$data['url8']      = $_POST['url8'];
				$data['url9']      = $_POST['url9'];
				$data['url10']     = $_POST['url10'];
				$data['target']    = $_POST['target'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];
				$data['target4']   = $_POST['target4'];
				$data['target5']   = $_POST['target5'];
				$data['target6']   = $_POST['target6'];
				$data['target7']   = $_POST['target7'];
				$data['target8']   = $_POST['target8'];
				$data['target9']   = $_POST['target9'];
				$data['target10']  = $_POST['target10'];
				$data['showup']    = $_POST['showup'];

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_POP($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND()";
			$Data = $g_db->numRows( $g_db->query($sqlstr) ) > 0 ? $g_db->getRow( $sqlstr ) : "";

			if($Data != "" ){
				for($i = 1; $i <= 5; $i++){
					
					//抓取商品資料
					$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data['pid'.$i]."'";
					$ProdData = $g_db->getRow($sqlstr);
					
					if( $ProdData && sizeof($ProdData)>0 ){
		
					echo "		<li class=\"sec_best_box\">\n";
					echo "			<table class=\"sec_best_orig\" cellspacing=\"0\" cellpadding=\"0\">\n";
					echo "				<tr>\n";
					echo "					<td class=\"sec_best_orig_pic_box\" rowspan=\"2\">\n";
					echo "						<div class=\"sec_best_orig_pic\"><img src=\"images/best_namber".$i.".png\" width=\"40\" height=\"42\" /></div>\n";
					echo "					</td><!--End of sec_best_orig_pic_box-->\n";
					echo "					<td class=\"sec_best_orig_txt text_black_title14px\">".$ProdData['name']."</td>\n";
					echo "				</tr>\n";
					echo "				<tr>\n";
					echo "					<td class=\"sec_best_orig_price text_12px\"><span class=\"text_14px color_red\">".$ProdData['price']."</span> 元</td>\n";
					echo "				</tr>\n";
					echo "			</table>\n";
					echo "			<table class=\"sec_best_hover\" cellspacing=\"0\" cellpadding=\"0\">\n";
					echo "				<tr>\n";
					echo "					<td class=\"sec_best_hover_title text_16px color_white\" colspan=\"2\">BEST 0".$i."</td>\n";
					echo "				</tr>\n";
					echo "				<tr>\n";
					echo "					<td class=\"sec_best_hover_pic_box\" rowspan=\"2\">\n";
					echo "						<div class=\"sec_best_hover_pic\"><a href=\"".($Data['url'.$i] != '' ? $Data['url'.$i] : "product_info.php?id=".$Data['pid'.$i])."\"><img src=\"".Upload_Url.$ProdData['prod_pic']."\" width=\"63\" height=\"63\" /></a></div>\n";
					echo "					</td><!--End of sec_best_orig_pic_box-->\n";
					echo "					<td class=\"sec_best_hover_txt color_white text_14px\"><a href=\"".($Data['url'.$i] != '' ? $Data['url'.$i] : "product_info.php?id=".$Data['pid'.$i])."\">".$ProdData['name']."</a></td>\n";
					echo "				</tr>\n";
					echo "				<tr>\n";
					echo "					<td class=\"sec_best_hover_txt color_white text_12px\"><span class=\"text_14px color_white\">".$ProdData['price']."</span> 元</td>\n";
					echo "				</tr>\n";
					echo "			</table>\n";
					echo "		</li><!--End of sec_best_box-->\n";
					}
				}
			}

		}

		/////BANNERS/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_BANNERS($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' ORDER BY `startdate` desc,`serno` desc Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";
			
			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".($DataList[$i]['pic1'] != "" ? "<a href=\"".Upload_Url.$DataList[$i]['pic1']."\" target=\"_blank\"><img " . ( $DataList['slogan1'] ? 'alt="' . $DataList['slogan1'] . '" title="' . $DataList['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$DataList[$i]['pic1']."\" width=\"245\" height=\"25\"></a>" : "")."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_BANNERS($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];

			$Data = "";

			if($id != ""){

				//列表資料
				$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic1'] != "" ? "<a href=\"".Upload_Url.$Data['pic1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"490\" height=\"50\"></a><br>" : "")."<input name=\"pic1\" type=\"file\" size=\"20\" />".($Data['pic1'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 490px × 50px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";

			return $EditCotent;

		}

		function EditSave_BANNERS(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "indexpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "indexpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_BANNERS($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND()";

			if( $g_db->numRows( $g_db->query($sqlstr) ) > 0 ){

				$Data = $g_db->getRow( $sqlstr );

				echo "          <div class=\"banner_small\">\n";
				echo "          	<a href=\"".($Data['url'] != "" ? $Data['url'] : "#")."\" target=\"".$Data['target']."\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"490\" height=\"50\" /></a>\n";
				echo "          </div>\n";

			}else{

				echo "          <div class=\"banner_small\">\n";
				echo "          	<a href=\"#\"><img src=\"".Upload_Url."default/default_490_50.jpg\" width=\"490\" height=\"50\" /></a>\n";
				echo "          </div>\n";

			}

		}

		/////BANNERB/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_BANNERB($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' ORDER BY `order` asc Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">排序</th>\n";
			$ListCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";
			
			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['order']."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".($DataList[$i]['pic1'] != "" ? "<a href=\"".Upload_Url.$DataList[$i]['pic1']."\" target=\"_blank\"><img " . ( $DataList['slogan1'] ? 'alt="' . $DataList['slogan1'] . '" title="' . $DataList['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$DataList[$i]['pic1']."\" width=\"100\"></a>" : "")."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_BANNERB($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];

			$Data = "";

			if($id != ""){

				//列表資料
				$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic1'] != "" ? "<a href=\"".Upload_Url.$Data['pic1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"300\"></a><br>" : "")."<input name=\"pic1\" type=\"file\" size=\"20\" />".($Data['pic1'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸寬度為 200px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">排序</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"order\" type=\"text\" value=\"".($Data != "" ? $Data['order'] : 99)."\" size=\"1\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";

			return $EditCotent;

		}

		function EditSave_BANNERB(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['order']     = $_POST['order'];
				$data['showup']    = $_POST['showup'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "indexpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['order']     = $_POST['order'];
				$data['showup']    = $_POST['showup'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "indexpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_BANNERB($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY `order` asc ";
			$Data = $g_db->getAll( $sqlstr );
			
			for($i = 0; $i < sizeof($Data); $i++){
				
				if($Data[$i]['pic1'] && sizeof($Data[$i]['pic1'])>0){
					echo "		<li>\n";
	 				echo "			<a href=\"".($Data[$i]['url'] != "" ? $Data[$i]['url'] : "#")."\" target=\"".$Data[$i]['target']."\"><img src=\"".Upload_Url.$Data[$i]['pic1']."\" width=\"200\" /></a>\n";
	 				echo "		</li>\n";
				}
			}
			
		}

		/////SUBBANNERB/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_SUBBANNERB($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' ORDER BY `order`,`startdate` desc,`serno` Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );
			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <br><center>\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置一\" onclick=\"location.href='".$_url."?flag=settag&tag=1';\" ".($_tag == 1 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置二\" onclick=\"location.href='".$_url."?flag=settag&tag=2';\" ".($_tag == 2 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置三\" onclick=\"location.href='".$_url."?flag=settag&tag=3';\" ".($_tag == 3 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置四\" onclick=\"location.href='".$_url."?flag=settag&tag=4';\" ".($_tag == 4 ? "disabled" : "").">\n";
			$ListCotent .=  "      </center>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"60\">位置</th>\n";
			$ListCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				switch($DataList[$i]['tag']){
					case 1:
						$TagName = "位置一";
						break;
					case 2:
						$TagName = "位置二";
						break;
					case 3:
						$TagName = "位置三";
						break;
					case 4:
						$TagName = "位置四";
						break;
					default:
						$TagName = "位置一";
						break;						
				}

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($pageno * $this->pageshownum + $i + 1)."</td>\n";
				$ListCotent .=  "          <td>".$TagName."</td>\n";
				$ListCotent .=  "          <td>".($DataList[$i]['pic1'] != "" ? "<a href=\"".Upload_Url.$DataList[$i]['pic1']."\" target=\"_blank\"><img " . ( $DataList['slogan1'] ? 'alt="' . $DataList['slogan1'] . '" title="' . $DataList['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$DataList[$i]['pic1']."\" width=\"220\" height=\"105\"></a>" : "")."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_SUBBANNERB($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">位置</th>\n";
			$EditCotent .=  "          <td align=\"left\">\n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"1\" ".($Data['tag'] == 1 || ($Data == "" && $_tag == 1) ? "checked" : "" )." />位置一 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"2\" ".($Data['tag'] == 2 || ($Data == "" && $_tag == 2) ? "checked" : "" )." />位置二 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"3\" ".($Data['tag'] == 3 || ($Data == "" && $_tag == 3) ? "checked" : "" )." />位置三 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"4\" ".($Data['tag'] == 4 || ($Data == "" && $_tag == 4) ? "checked" : "" )." />位置四 &nbsp; \n";
			$EditCotent .=  "          </td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic1'] != "" ? "<a href=\"".Upload_Url.$Data['pic1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"240\" height=\"110\"></a><br>" : "")."<input name=\"pic1\" type=\"file\" size=\"20\" />".($Data['pic1'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 240px × 110px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_SUBBANNERB(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "pdshow-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "pdshow-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_SUBBANNERB($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '1' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data1 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '2' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data2 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '3' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data3 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '4' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data4 = $g_db->getRow( $sqlstr );

	 		echo "          <tr>\n";
	 		echo "            <td><a href=\"".($Data1['url'] != "" ? $Data1['url'] : "#" )."\" target=\"".$Data1['target']."\" alt=\"".$Data1['name']."\"><img " . ( $Data1['slogan1'] ? 'alt="' . $Data1['slogan1'] . '" title="' . $Data1['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.($Data1['pic1'] != "" ? $Data1['pic1'] : "default/default_240_210.jpg")."\" width=\"240\" height=\"110\" /></a></td>\n";
	 		echo "            <td><a href=\"".($Data2['url'] != "" ? $Data2['url'] : "#" )."\" target=\"".$Data2['target']."\" alt=\"".$Data2['name']."\"><img " . ( $Data2['slogan1'] ? 'alt="' . $Data2['slogan1'] . '" title="' . $Data2['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.($Data2['pic1'] != "" ? $Data2['pic1'] : "default/default_240_210.jpg")."\" width=\"240\" height=\"110\" /></a></td>\n";
	 		echo "            <td><a href=\"".($Data3['url'] != "" ? $Data3['url'] : "#" )."\" target=\"".$Data3['target']."\" alt=\"".$Data3['name']."\"><img " . ( $Data3['slogan1'] ? 'alt="' . $Data3['slogan1'] . '" title="' . $Data3['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.($Data3['pic1'] != "" ? $Data3['pic1'] : "default/default_240_210.jpg")."\" width=\"240\" height=\"110\" /></a></td>\n";
	 		echo "            <td><a href=\"".($Data4['url'] != "" ? $Data4['url'] : "#" )."\" target=\"".$Data4['target']."\" alt=\"".$Data4['name']."\"><img " . ( $Data4['slogan1'] ? 'alt="' . $Data4['slogan1'] . '" title="' . $Data4['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.($Data4['pic1'] != "" ? $Data4['pic1'] : "default/default_240_210.jpg")."\" width=\"240\" height=\"110\" /></a></td>\n";
	 		echo "          </tr>\n";

		}

		/////PC_SHOW/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_PC_SHOW($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' ORDER BY `startdate` desc,`serno` desc Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <br><center>\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置一\" onclick=\"location.href='".$_url."?flag=settag&tag=1';\" ".($_tag == 1 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置二\" onclick=\"location.href='".$_url."?flag=settag&tag=2';\" ".($_tag == 2 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置三\" onclick=\"location.href='".$_url."?flag=settag&tag=3';\" ".($_tag == 3 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置四\" onclick=\"location.href='".$_url."?flag=settag&tag=4';\" ".($_tag == 4 ? "disabled" : "").">\n";
			$ListCotent .=  "      </center>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"60\">位置</th>\n";
			$ListCotent .=  "          <th scope=\"col\">標籤名稱</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				switch($DataList[$i]['tag']){
					case 1:
						$TagName = "位置一";
						break;
					case 2:
						$TagName = "位置二";
						break;
					case 3:
						$TagName = "位置三";
						break;
					case 4:
						$TagName = "位置四";
						break;
					default:
						$TagName = "位置一";
						break;						
				}

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				$ListCotent .=  "          <td>".$TagName."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";

			return $ListCotent;

		}

		function EditPage_PC_SHOW($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select *,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid1`) pid1name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid2`) pid2name FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">位置</th>\n";
			$EditCotent .=  "          <td align=\"left\">\n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"1\" ".($Data['tag'] == 1 || ($Data == "" && $_tag == 1) ? "checked" : "" )." />位置一 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"2\" ".($Data['tag'] == 2 || ($Data == "" && $_tag == 2) ? "checked" : "" )." />位置二 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"3\" ".($Data['tag'] == 3 || ($Data == "" && $_tag == 3) ? "checked" : "" )." />位置三 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"4\" ".($Data['tag'] == 4 || ($Data == "" && $_tag == 4) ? "checked" : "" )." />位置四 &nbsp; \n";
			$EditCotent .=  "          </td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標籤名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">主圖片</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic1'] != "" ? "<a href=\"".Upload_Url.$Data['pic1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"280\" height=\"220\"></a><br>" : "")."<input name=\"pic1\" type=\"file\" size=\"20\" />".($Data['pic1'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 280px × 220px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan1\" type=\"text\" value=\"".$Data['slogan1']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">簡述</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan2\" type=\"text\" value=\"".$Data['slogan2']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid1\" id=\"pid1\" value=\"".$Data['pid1']."\"><input name=\"pid1name\" id=\"pid1name\" type=\"text\" value=\"".htmlspecialchars($Data['pid1name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid1');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid1').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid1').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan3\" type=\"text\" value=\"".$Data['slogan3']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url2\" type=\"text\" value=\"".$Data['url2']."\" size=\"50\" /> 開啟方式：<select name=\"target2\"><option value=\"_self\" ".($Data['target2'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target2'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid2\" id=\"pid2\" value=\"".$Data['pid2']."\"><input name=\"pid2name\" id=\"pid2name\" type=\"text\" value=\"".htmlspecialchars($Data['pid2name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid2');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid2').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid2').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan4\" type=\"text\" value=\"".$Data['slogan4']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url3\" type=\"text\" value=\"".$Data['url3']."\" size=\"50\" /> 開啟方式：<select name=\"target3\"><option value=\"_self\" ".($Data['target3'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target3'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_PC_SHOW(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['pid1']      = $_POST['pid1'];
				$data['pid2']      = $_POST['pid2'];
				$data['showup']    = $_POST['showup'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['slogan2']   = $_POST['slogan2'];
				$data['slogan3']   = $_POST['slogan3'];
				$data['slogan4']   = $_POST['slogan4'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "pc1pic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['pid1']      = $_POST['pid1'];
				$data['pid2']      = $_POST['pid2'];
				$data['showup']    = $_POST['showup'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['slogan2']   = $_POST['slogan2'];
				$data['slogan3']   = $_POST['slogan3'];
				$data['slogan4']   = $_POST['slogan4'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];


				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "pc1pic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_PC_SHOW($_date){

			global $g_db;

			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' and `config` = 'Y' ORDER BY `serno` desc LIMIT 1";
			$ConfigData = $g_db->getRow( $sqlstr );

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '1' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data1 = $g_db->numRows( $g_db->query($sqlstr) ) > 0 ? $g_db->getRow( $sqlstr ) : "";
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '2' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data2 = $g_db->numRows( $g_db->query($sqlstr) ) > 0 ? $g_db->getRow( $sqlstr ) : "";
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '3' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data3 = $g_db->numRows( $g_db->query($sqlstr) ) > 0 ? $g_db->getRow( $sqlstr ) : "";
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '4' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data4 = $g_db->numRows( $g_db->query($sqlstr) ) > 0 ? $g_db->getRow( $sqlstr ) : "";

 			echo "            <div class=\"tabs\">\n";
			if($Data1 != "" || ($Data2 == "" && $Data3 == "" && $Data4 == ""))
 				echo "              <h3 onmouseover=\"changTab(this)\">".$Data1['name']."</h3>\n";
			if($Data2 != "")
 				echo "              <h3 onmouseover=\"changTab(this)\">".$Data2['name']."</h3>\n";
			if($Data3 != "")
 				echo "              <h3 onmouseover=\"changTab(this)\">".$Data3['name']."</h3>\n";
			if($Data4 != "")
 				echo "              <h3 onmouseover=\"changTab(this)\">".$Data4['name']."</h3>\n";

			for($i = 1; $i <= 4; $i++){

				$NowData = "Data".$i;

				if($$NowData != "" || ($i == 1 && ($Data2 == "" && $Data3 == "" && $Data4 == ""))){

					//抓取商品資料
					$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid1']."'";
					$ProdData1 = $g_db->getRow($sqlstr);
					$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid2']."'";
					$ProdData2 = $g_db->getRow($sqlstr);

	 				echo "              <div>\n";
	 				echo "                <table cellspacing=\"0\" cellpadding=\"0\" class=\"mall_main_slide\">\n";
	 				echo "                  <tr>\n";
	 				echo "                    <td rowspan=\"2\" class=\"mall_main_slide_bigimg\"><a href=\"".${$NowData}['url']."\" target=\"".${$NowData}['target']."\"><img src=\"".Upload_Url.(${$NowData}['pic1'] != "" ? ${$NowData}['pic1'] : "default/default_280_220.jpg")."\" width=\"280\" height=\"220\" /></a></td>\n";
	 				echo "                    <td colspan=\"2\" class=\"mall_main_slide_bigimg_txt\">\n";
	 				echo "                      <dl>\n";
	 				echo "                        <dt><a href=\"".${$NowData}['url']."\" target=\"".${$NowData}['target']."\" class=\"blue_big\">".${$NowData}['slogan1']."</a></dt>\n";
	 				echo "                        <dd class=\"gray_small\">".${$NowData}['slogan2']."<a href=\"".${$NowData}['url']."\" target=\"".${$NowData}['target']."\">詳情</a></dd>\n";
	 				echo "                      </dl>\n";
	 				echo "                    </td>\n";
	 				echo "                  </tr>\n";
	 				echo "                  <tr>\n";
	 				echo "                    <td class=\"mall_main_slide_small\">\n";
	 				echo "                      <dl>\n";
	 				echo "                        <dd><a href=\"".(${$NowData}['url2']!=""?${$NowData}['url2']:"#")."\" target=\"".${$NowData}['target2']."\"><img alt=\"" . $ProdData1['name'] . "\" title=\"" . $ProdData1['name'] . "\" src=\"".(Upload_Url.($ProdData1['prod_pic'] != "" ? $ProdData1['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"85\" height=\"85\" /></a></dd>\n";
	 				echo "                        <dt class=\"blue_small\"><a href=\"".(${$NowData}['url2']!=""?${$NowData}['url2']:"#")."\" target=\"".${$NowData}['target2']."\">".(${$NowData} != "" ? ${$NowData}['slogan3'] : "名稱")."</a></dt>\n";
	 				echo "                      </dl>\n";
	 				echo "                    </td>\n";
	 				echo "                    <td class=\"mall_main_slide_small\">\n";
	 				echo "                      <dl>\n";
	 				echo "                        <dd><a href=\"".(${$NowData}['url3']!=""?${$NowData}['url3']:"#")."\" target=\"".${$NowData}['target3']."\"><img alt=\"" . $ProdData2['name'] . "\" title=\"" . $ProdData2['name'] . "\" src=\"".(Upload_Url.($ProdData2['prod_pic'] != "" ? $ProdData2['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"85\" height=\"85\" /></a></dd>\n";
	 				echo "                        <dt class=\"blue_small\"><a href=\"".(${$NowData}['url3']!=""?${$NowData}['url3']:"#")."\" target=\"".${$NowData}['target3']."\">".(${$NowData} != "" ? ${$NowData}['slogan4'] : "名稱")."</a></dt>\n";
	 				echo "                      </dl>\n";
	 				echo "                    </td>\n";
	 				echo "                  </tr>\n";
	 				echo "                </table>\n";
	 				echo "              </div>\n";

				}

 			}

 			echo "            </div>\n";

		}

		/////PC_SHOW2/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_PC_SHOW2($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select *,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid1`) pid1name FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' ORDER BY `order`,`startdate` desc,`serno` Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );
			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">排序</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($pageno * $this->pageshownum + $i + 1)."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['pid1name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['order']."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      <div class=\"whitebox\">\n";
			$ListCotent .=  "        <p class=\"center_pos\">\n";
			$ListCotent .=  "          <input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" />\n";
			$ListCotent .=  "        </p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_PC_SHOW2($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select *,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid1`) pid1name FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan1\" type=\"text\" value=\"".$Data['slogan1']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid1\" id=\"pid1\" value=\"".$Data['pid1']."\"><input name=\"pid1name\" id=\"pid1name\" type=\"text\" value=\"".htmlspecialchars($Data['pid1name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid1');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid1').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid1').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"50\" /> 開啟方式：<select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">排序</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"order\" type=\"text\" value=\"".($Data != "" ? $Data['order'] : 99)."\" size=\"1\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_PC_SHOW2(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['pid1']      = $_POST['pid1'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['order']     = $_POST['order'];
				$data['showup']    = $_POST['showup'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['pid1']      = $_POST['pid1'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['order']     = $_POST['order'];
				$data['showup']    = $_POST['showup'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_PC_SHOW2($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY `order`,`serno` LIMIT 13";
			$DataList = $g_db->getAll( $sqlstr );

			if(sizeof($DataList) > 0){

				for($i = 0; $i < sizeof($DataList); $i++){

					//抓取商品資料
					$sqlstr = "SELECT `name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$DataList[$i]['pid1']."'";
					$ProdData = $g_db->getRow($sqlstr);

					echo "		<li class=\"sub_proautoshow_box\">\n";
					echo "			<ul>\n";
					echo "				<li class=\"sub_proautoshow_pictitle\">\n";
					echo "					<a href=\"product_info.php?id=".$DataList[$i]['pid1']."\"><img src=\"".Upload_Url.($ProdData['prod_pic'])."\" width=\"120\" height=\"120\" /></a>\n";
				//	echo "					<div class=\"color_white text_12px\">\n";
				//	echo "						<span class=\"color_white text_14px\">5</span>折\n";					
				//	echo "					</div>\n";
					echo "				</li><!--End of sub_proautoshow_pictitle-->\n";
					echo "				<li class=\"sub_proautoshow_title_text text_black_title14px\"><a href=\"product_info.php?id=".$DataList[$i]['pid1']."\">".$ProdData['name']."</a></li>\n";
					echo "				<li class=\"sub_proautoshow_info_text text_12px color_gray\">\n";
					echo "					".$DataList[$i]['slogan1']."\n";
					echo "				</li><!--End of sub_proautoshow_info_text-->\n";
					echo "				<li class=\"sub_proautoshow_price text_14px color_red\">\n";
					echo "					$".$ProdData['price']."元<div class=\"sub_shop_car\"></div>\n";
					echo "				</li><!--End of sub_proautoshow_price-->\n";
					echo "			</ul>\n";
					echo "		</li><!--End of sub_proautoshow_box-->\n";
/*
					if(sizeof($DataList) > 4){

						echo "		<script>\n";
						echo "		var pro2_img = 0\n";
						echo "		$('#sub_proautoshow_next').click(function(){ if( pro2_img < ".(sizeof($DataList)-4)." ){ pro2_img = pro2_img+1; $('#sub_proautoshow_block').stop().animate({ left : pro2_img*150*-1 }); } });\n";
						echo "		$('#sub_proautoshow_pre').click(function(){ if( pro2_img > 0){ pro2_img = pro2_img-1; $('#sub_proautoshow_block').stop().animate({ left : pro2_img*150*-1 }); } });\n";
						echo "		</script>\n";

					}
*/
				}
			}
		}

		/////PC_SHOW3/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_PC_SHOW3($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );

			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' ORDER BY `startdate` desc,`serno` desc Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <br><center>\n";
			$ListCotent .=  "      </center>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\">標籤名稱</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";

			return $ListCotent;

		}

		function EditPage_PC_SHOW3($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select *,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid1`) pid1name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid2`) pid2name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid3`) pid3name FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標籤名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan1\" type=\"text\" value=\"".$Data['slogan1']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">圖片1</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic1'] != "" ? "<a href=\"".Upload_Url.$Data['pic1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"173\" height=\"138\"></a><br>" : "")."<input name=\"pic1\" type=\"file\" size=\"20\" />".($Data['pic1'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 173px × 138px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"50\" /> 開啟方式：<select name=\"target2\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan2\" type=\"text\" value=\"".$Data['slogan2']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">圖片2</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic2'] != "" ? "<a href=\"".Upload_Url.$Data['pic2']."\" target=\"_blank\"><img " . ( $Data['slogan2'] ? 'alt="' . $Data['slogan2'] . '" title="' . $Data['slogan2'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic2']."\" width=\"173\" height=\"78\"></a><br>" : "")."<input name=\"pic2\" type=\"file\" size=\"20\" />".($Data['pic2'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 173 × 18 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"'url2'\" type=\"text\" value=\"".$Data['url2']."\" size=\"50\" /> 開啟方式：<select name=\"target3\"><option value=\"_self\" ".($Data['target2'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target2'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan3\" type=\"text\" value=\"".$Data['slogan3']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">圖片3</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic3'] != "" ? "<a href=\"".Upload_Url.$Data['pic3']."\" target=\"_blank\"><img " . ( $Data['slogan3'] ? 'alt="' . $Data['slogan3'] . '" title="' . $Data['slogan3'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic3']."\" width=\"173\" height=\"78\"></a><br>" : "")."<input name=\"pic3\" type=\"file\" size=\"20\" />".($Data['pic3'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 173 × 18 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url3\" type=\"text\" value=\"".$Data['url3']."\" size=\"50\" /> 開啟方式：<select name=\"target4\"><option value=\"_self\" ".($Data['target3'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target3'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_PC_SHOW3(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['name']      = $_POST['name'];		
				$data['showup']    = $_POST['showup'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['slogan2']   = $_POST['slogan2'];
				$data['slogan3']   = $_POST['slogan3'];
				$data['url']       = $_POST['url'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['target']    = $_POST['target'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];
				
				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "pc3pic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}
				
				if($_POST['del_pic2'] == "Y")
					$data['pic2'] = '';

				if($_FILES["pic2"]["name"] != "" ){
					$data['pic2'] = "mshowpic2-".date("ymdHis").substr($_FILES["pic2"]["name"],strrpos($_FILES["pic2"]["name"],'.'));
					copy( $_FILES["pic2"]['tmp_name'], Upload_Path.$data['pic2'] );
				}

				if($_POST['del_pic3'] == "Y")
					$data['pic3'] = '';

				if($_FILES["pic3"]["name"] != "" ){
					$data['pic3'] = "mshowpic3-".date("ymdHis").substr($_FILES["pic3"]["name"],strrpos($_FILES["pic3"]["name"],'.'));
					copy( $_FILES["pic3"]['tmp_name'], Upload_Path.$data['pic3'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['name']      = $_POST['name'];		
				$data['showup']    = $_POST['showup'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['slogan2']   = $_POST['slogan2'];
				$data['slogan3']   = $_POST['slogan3'];
				$data['url']       = $_POST['url'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['target']    = $_POST['target'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "pc3pic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}
				if($_FILES["pic2"]["name"] != "" ){
					$data['pic2'] = "mshowpic2-".date("ymdHis").substr($_FILES["pic2"]["name"],strrpos($_FILES["pic2"]["name"],'.'));
					copy( $_FILES["pic2"]['tmp_name'], Upload_Path.$data['pic2'] );
				}

				if($_FILES["pic3"]["name"] != "" ){
					$data['pic3'] = "mshowpic3-".date("ymdHis").substr($_FILES["pic3"]["name"],strrpos($_FILES["pic3"]["name"],'.'));
					copy( $_FILES["pic3"]['tmp_name'], Upload_Path.$data['pic3'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_PC_SHOW3($_date){

			global $g_db;

			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `config` = 'Y' ORDER BY `serno` desc LIMIT 1";
			$ConfigData = $g_db->getRow( $sqlstr );

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data = $g_db->numRows( $g_db->query($sqlstr) ) > 0 ? $g_db->getRow( $sqlstr ) : "";
			
			if($Data != "" ){
				echo "		<p><a href=\"".($Data['url'] != "" ? $Data['url'] : "#")."\" target=\"".$Data['target']."\"><img src=\"".Upload_Url.($Data['pic1'] != '' ? $Data['pic1'] : 'default/175X140.jpg')."\" width=\"173\" height=\"138\" /></a></p>\n";
				echo "		<p><a href=\"".($Data['url2'] != "" ? $Data['url2'] : "#")."\" target=\"".$Data['target2']."\"><img src=\"".Upload_Url.($Data['pic2'] != '' ? $Data['pic2'] : 'default/175X80.jpg')."\" width=\"173\" height=\"78\" /></a></p>\n";
				echo "		<p><a href=\"".($Data['url3'] != "" ? $Data['url3'] : "#")."\" target=\"".$Data['target3']."\"><img src=\"".Upload_Url.($Data['pic3'] != '' ? $Data['pic3'] : 'default/175X80.jpg')."\" width=\"173\" height=\"78\" /></a></p>\n";

			}
 			

 		}

		/////BANNER/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_BANNER($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' ORDER BY `startdate` desc,`serno` desc Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <br><center>\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置一\" onclick=\"location.href='".$_url."?flag=settag&tag=1';\" ".($_tag == 1 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置二\" onclick=\"location.href='".$_url."?flag=settag&tag=2';\" ".($_tag == 2 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置三\" onclick=\"location.href='".$_url."?flag=settag&tag=3';\" ".($_tag == 3 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置四\" onclick=\"location.href='".$_url."?flag=settag&tag=4';\" ".($_tag == 4 ? "disabled" : "").">\n";
			$ListCotent .=  "      </center>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"60\">位置</th>\n";
			$ListCotent .=  "          <th scope=\"col\">標題</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";
			
			for($i = 0; $i < sizeof($DataList); $i++){

				switch($DataList[$i]['tag']){
					case 1:
						$TagName = "位置一";
						break;
					case 2:
						$TagName = "位置二";
						break;
					case 3:
						$TagName = "位置三";
						break;
					case 4:
						$TagName = "位置四";
						break;
					default:
						$TagName = "位置一";
						break;						
				}

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				$ListCotent .=  "          <td>".$TagName."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_BANNER($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">位置</th>\n";
			$EditCotent .=  "          <td align=\"left\">\n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"1\" ".($Data['tag'] == 1 || ($Data == "" && $_tag == 1) ? "checked" : "" )." />位置一 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"2\" ".($Data['tag'] == 2 || ($Data == "" && $_tag == 2) ? "checked" : "" )." />位置二 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"3\" ".($Data['tag'] == 3 || ($Data == "" && $_tag == 3) ? "checked" : "" )." />位置三 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"4\" ".($Data['tag'] == 4 || ($Data == "" && $_tag == 4) ? "checked" : "" )." />位置四 &nbsp; \n";
			$EditCotent .=  "          </td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標題</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">內容</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan1\" type=\"text\" value=\"".$Data['slogan1']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic1'] != "" ? "<a href=\"".Upload_Url.$Data['pic1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"615\" height=\"280\"></a><br>" : "")."<input name=\"pic1\" type=\"file\" size=\"20\" />".($Data['pic1'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 615px × 280px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_BANNER(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['name']      = $_POST['name'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "indexpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['name']      = $_POST['name'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "indexpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}
		}

		function CreateHtml_BANNER($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '1' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data1 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '2' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data2 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '3' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data3 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '4' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data4 = $g_db->getRow( $sqlstr );

	 		echo "		<div id=\"sub_autoshow_pic_box\">\n";
	 		echo "			<ul id=\"sub_autoshow_pic\">\n";
	 		echo "				<li><img src=\"".Upload_Url.($Data1['pic1'] != '' ? $Data1['pic1'] : 'default/615X280.jpg')."\" width=\"615\" height=\"280\" /></li>\n";
	 		echo "				<li><img src=\"".Upload_Url.($Data2['pic1'] != '' ? $Data2['pic1'] : 'default/615X280.jpg')."\" width=\"615\" height=\"280\" /></li>\n";
	 		echo "				<li><img src=\"".Upload_Url.($Data3['pic1'] != '' ? $Data3['pic1'] : 'default/615X280.jpg')."\" width=\"615\" height=\"280\" /></li>\n";
	 		echo "				<li><img src=\"".Upload_Url.($Data4['pic1'] != '' ? $Data4['pic1'] : 'default/615X280.jpg')."\" width=\"615\" height=\"280\" /></li>\n";
	 		echo "			</ul><!--End of sub_autoshow_pic-->\n";
	 		echo "		</div><!--End of sub_autoshow_pic_box-->\n";
	 		echo "		<div id=\"sub_autoshow_btn_box\">\n";
	 		echo "          <ul id=\"sub_autoshow_btn_cont\">\n";
	 		echo "				<div id=\"sub_autoshow_hover_btn\"></div>\n";
	 		echo "				<li>\n";
	 		echo "					<div>\n";
	 		echo "						<p class=\"text_14px color_yellow\">".$Data1['name']."</p>\n";
	 		echo "						<p class=\"sub_autoshow_btn_cont_text\"><a class=\"text_12px color_white\">".$Data1['slogan1']."</a></p>\n";
	 		echo "					</div>\n";
	 		echo "				</li>\n";
	 		echo "				<li>\n";
	 		echo "					<div>\n";
	 		echo "						<p class=\"text_14px text_color\">".$Data2['name']."</p>\n";
	 		echo "						<p class=\"sub_autoshow_btn_cont_text\"><a class=\"text_12px color_gray\">".$Data2['slogan1']."</a></p>\n";
	 		echo "					</div>\n";
	 		echo "				</li>\n";
	 		echo "				<li>\n";
	 		echo "					<div>\n";
	 		echo "						<p class=\"text_14px text_color\">".$Data3['name']."</p>\n";
	 		echo "						<p class=\"sub_autoshow_btn_cont_text\"><a class=\"text_12px color_gray\">".$Data3['slogan1']."</a></p>\n";
	 		echo "					</div>\n";
	 		echo "				</li>\n";
	 		echo "				<li>\n";
	 		echo "					<div>\n";
	 		echo "						<p class=\"text_14px text_color\">".$Data4['name']."</p>\n";
	 		echo "						<p class=\"sub_autoshow_btn_cont_text\"><a class=\"text_12px color_gray\">".$Data4['slogan1']."</a></p>\n";
	 		echo "					</div>\n";
	 		echo "				</li>\n";
	 		echo "			</ul><!--End of sub_autoshow_btn_cont-->\n";
	 		echo "		 </div><!--End of sub_autoshow_btn_box-->\n";


		}

		/////BEAUTY_SHOW/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_BEAUTY_SHOW($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' ORDER BY `startdate` desc,`serno` desc Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <br><center>\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置一\" onclick=\"location.href='".$_url."?flag=settag&tag=1';\" ".($_tag == 1 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置二\" onclick=\"location.href='".$_url."?flag=settag&tag=2';\" ".($_tag == 2 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置三\" onclick=\"location.href='".$_url."?flag=settag&tag=3';\" ".($_tag == 3 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置四\" onclick=\"location.href='".$_url."?flag=settag&tag=4';\" ".($_tag == 4 ? "disabled" : "").">\n";
			$ListCotent .=  "      </center>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"60\">位置</th>\n";
			$ListCotent .=  "          <th scope=\"col\">標籤名稱</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				switch($DataList[$i]['tag']){
					case 1:
						$TagName = "位置一";
						break;
					case 2:
						$TagName = "位置二";
						break;
					case 3:
						$TagName = "位置三";
						break;
					case 4:
						$TagName = "位置四";
						break;
					default:
						$TagName = "位置一";
						break;						
				}

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				$ListCotent .=  "          <td>".$TagName."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";

			return $ListCotent;

		}

		function EditPage_BEAUTY_SHOW($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select *,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid1`) pid1name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid2`) pid2name FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">位置</th>\n";
			$EditCotent .=  "          <td align=\"left\">\n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"1\" ".($Data['tag'] == 1 || ($Data == "" && $_tag == 1) ? "checked" : "" )." />位置一 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"2\" ".($Data['tag'] == 2 || ($Data == "" && $_tag == 2) ? "checked" : "" )." />位置二 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"3\" ".($Data['tag'] == 3 || ($Data == "" && $_tag == 3) ? "checked" : "" )." />位置三 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"4\" ".($Data['tag'] == 4 || ($Data == "" && $_tag == 4) ? "checked" : "" )." />位置四 &nbsp; \n";
			$EditCotent .=  "          </td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標籤名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">主圖片</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic1'] != "" ? "<a href=\"".Upload_Url.$Data['pic1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"300\" height=\"190\"></a><br>" : "")."<input name=\"pic1\" type=\"file\" size=\"20\" />".($Data['pic1'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 300px × 190px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan1\" type=\"text\" value=\"".$Data['slogan1']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">簡述</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan2\" type=\"text\" value=\"".$Data['slogan2']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid1\" id=\"pid1\" value=\"".$Data['pid1']."\"><input name=\"pid1name\" id=\"pid1name\" type=\"text\" value=\"".htmlspecialchars($Data['pid1name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid1');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid1').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid1').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan3\" type=\"text\" value=\"".$Data['slogan3']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url2\" type=\"text\" value=\"".$Data['url2']."\" size=\"50\" /> 開啟方式：<select name=\"target2\"><option value=\"_self\" ".($Data['target2'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target2'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid2\" id=\"pid2\" value=\"".$Data['pid2']."\"><input name=\"pid2name\" id=\"pid2name\" type=\"text\" value=\"".htmlspecialchars($Data['pid2name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid2');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid2').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid2').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan4\" type=\"text\" value=\"".$Data['slogan4']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url3\" type=\"text\" value=\"".$Data['url3']."\" size=\"50\" /> 開啟方式：<select name=\"target3\"><option value=\"_self\" ".($Data['target3'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target3'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_BEAUTY_SHOW(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['slogan2']   = $_POST['slogan2'];
				$data['slogan3']   = $_POST['slogan3'];
				$data['slogan4']   = $_POST['slogan4'];
				$data['pid1']      = $_POST['pid1'];
				$data['pid2']      = $_POST['pid2'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "bspic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['slogan2']   = $_POST['slogan2'];
				$data['slogan3']   = $_POST['slogan3'];
				$data['slogan4']   = $_POST['slogan4'];
				$data['pid1']      = $_POST['pid1'];
				$data['pid2']      = $_POST['pid2'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "bspic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_BEAUTY_SHOW($_date){

			global $g_db;

			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' and `config` = 'Y' ORDER BY `serno` desc LIMIT 1";
			$ConfigData = $g_db->getRow( $sqlstr );

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '1' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data1 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '2' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data2 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '3' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data3 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '4' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data4 = $g_db->getRow( $sqlstr );

 			echo "            <div class=\"tabs\">\n";
 			echo "              <h3 onmouseover=\"changTab(this)\">".$Data1['name']."</h3>\n";
 			echo "              <h3 onmouseover=\"changTab(this)\">".$Data2['name']."</h3>\n";
 			echo "              <h3 onmouseover=\"changTab(this)\">".$Data3['name']."</h3>\n";
 			echo "              <h3 onmouseover=\"changTab(this)\">".$Data4['name']."</h3>\n";

			for($i = 1; $i <= 4; $i++){

				$NowData = "Data".$i;

				//抓取商品資料
				$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid1']."'";
				$ProdData1 = $g_db->getRow($sqlstr);
				$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid2']."'";
				$ProdData2 = $g_db->getRow($sqlstr);

 				echo "              <div>\n";
 				echo "                <table cellspacing=\"0\" cellpadding=\"0\" class=\"mall_main_slide\">\n";
 				echo "                  <tr>\n";
 				echo "                    <td rowspan=\"2\" class=\"mall_main_slide_bigimg\"><a href=\"".${$NowData}['url']."\" target=\"".${$NowData}['target']."\"><img src=\"".Upload_Url.(${$NowData}['pic1'] != "" ? ${$NowData}['pic1'] : "default/default_300_190.jpg")."\" width=\"300\" height=\"190\" /></a></td>\n";
 				echo "                    <td colspan=\"2\" class=\"mall_main_slide_bigimg_txt\">\n";
 				echo "                      <dl>\n";
 				echo "                        <dt><a href=\"".${$NowData}['url']."\" target=\"".${$NowData}['target']."\" class=\"blue_big\">".${$NowData}['slogan1']."</a></dt>\n";
 				echo "                        <dd class=\"gray_small\">".${$NowData}['slogan2']."<a href=\"".${$NowData}['url']."\" target=\"".${$NowData}['target']."\">詳情</a></dd>\n";
 				echo "                      </dl>\n";
 				echo "                    </td>\n";
 				echo "                  </tr>\n";
 				echo "                  <tr>\n";
 				echo "                    <td class=\"mall_main_slide_small\">\n";
 				echo "                      <dl>\n";
 				echo "                        <dd><a href=\"".(${$NowData}['url2']!=""?${$NowData}['url2']:"#")."\" target=\"".${$NowData}['target2']."\"><img alt=\"" . $ProdData1['name'] . "\" title=\"" . $ProdData1['name'] . "\" src=\"".(Upload_Url.($ProdData1['prod_pic'] != "" ? $ProdData1['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"85\" height=\"85\" /></a></dd>\n";
 				echo "                        <dt class=\"blue_small\"><a href=\"".(${$NowData}['url2']!=""?${$NowData}['url2']:"#")."\" target=\"".${$NowData}['target2']."\">".${$NowData}['slogan3']."</a></dt>\n";
 				echo "                      </dl>\n";
 				echo "                    </td>\n";
 				echo "                    <td class=\"mall_main_slide_small\">\n";
 				echo "                      <dl>\n";
 				echo "                        <dd><a href=\"".(${$NowData}['url3']!=""?${$NowData}['url3']:"#")."\" target=\"".${$NowData}['target3']."\"><img alt=\"" . $ProdData2['name'] . "\" title=\"" . $ProdData2['name'] . "\" src=\"".(Upload_Url.($ProdData2['prod_pic'] != "" ? $ProdData2['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"85\" height=\"85\" /></a></dd>\n";
 				echo "                        <dt class=\"blue_small\"><a href=\"".(${$NowData}['url3']!=""?${$NowData}['url3']:"#")."\" target=\"".${$NowData}['target3']."\">".${$NowData}['slogan4']."</a></dt>\n";
 				echo "                      </dl>\n";
 				echo "                    </td>\n";
 				echo "                  </tr>\n";
 				echo "                </table>\n";
 				echo "              </div>\n";

 			}

 			echo "            </div>\n";

		}

		/////PROD_SHOW/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_PROD_SHOW($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select *,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid1`) pid1name FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' ORDER BY `order`,`startdate` desc,`serno` Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );
			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <br><center>\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置一\" onclick=\"location.href='".$_url."?flag=settag&tag=1';\" ".($_tag == 1 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置二\" onclick=\"location.href='".$_url."?flag=settag&tag=2';\" ".($_tag == 2 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置三\" onclick=\"location.href='".$_url."?flag=settag&tag=3';\" ".($_tag == 3 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置四\" onclick=\"location.href='".$_url."?flag=settag&tag=4';\" ".($_tag == 4 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置五\" onclick=\"location.href='".$_url."?flag=settag&tag=5';\" ".($_tag == 5 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置六\" onclick=\"location.href='".$_url."?flag=settag&tag=6';\" ".($_tag == 6 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置七\" onclick=\"location.href='".$_url."?flag=settag&tag=7';\" ".($_tag == 7 ? "disabled" : "").">\n";
			$ListCotent .=  "      </center>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"60\">位置</th>\n";
			$ListCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				switch($DataList[$i]['tag']){
					case 1:
						$TagName = "位置一";
						break;
					case 2:
						$TagName = "位置二";
						break;
					case 3:
						$TagName = "位置三";
						break;
					case 4:
						$TagName = "位置四";
						break;
					case 5:
						$TagName = "位置五";
						break;
					case 6:
						$TagName = "位置六";
						break;
					case 7:
						$TagName = "位置七";
						break;
					default:
						$TagName = "位置一";
						break;						
				}

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($pageno * $this->pageshownum + $i + 1)."</td>\n";
				$ListCotent .=  "          <td>".$TagName."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['pid1name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_PROD_SHOW($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select *,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid1`) pid1name FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">位置</th>\n";
			$EditCotent .=  "          <td align=\"left\">\n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"1\" ".($Data['tag'] == 1 || ($Data == "" && $_tag == 1) ? "checked" : "" )." />位置一 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"2\" ".($Data['tag'] == 2 || ($Data == "" && $_tag == 2) ? "checked" : "" )." />位置二 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"3\" ".($Data['tag'] == 3 || ($Data == "" && $_tag == 3) ? "checked" : "" )." />位置三 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"4\" ".($Data['tag'] == 4 || ($Data == "" && $_tag == 4) ? "checked" : "" )." />位置四 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"5\" ".($Data['tag'] == 5 || ($Data == "" && $_tag == 5) ? "checked" : "" )." />位置五 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"6\" ".($Data['tag'] == 6 || ($Data == "" && $_tag == 6) ? "checked" : "" )." />位置六 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"7\" ".($Data['tag'] == 7 || ($Data == "" && $_tag == 7) ? "checked" : "" )." />位置七 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"8\" ".($Data['tag'] == 8 || ($Data == "" && $_tag == 8) ? "checked" : "" )." />位置八 &nbsp; \n";
			$EditCotent .=  "          </td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid1\" id=\"pid1\" value=\"".$Data['pid1']."\"><input name=\"pid1name\" id=\"pid1name\" type=\"text\" value=\"".htmlspecialchars($Data['pid1name'])."\" size=\"60\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid1');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid1').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid1').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"text\" name=\"slogan1\" id=\"slogan1\" value=\"".$Data['slogan1']."\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"50\" /> 開啟方式：<select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_PROD_SHOW(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['pid1']      = $_POST['pid1'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['showup']    = $_POST['showup'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['pid1']      = $_POST['pid1'];
				$data['slogan1']      = $_POST['slogan1'];
				$data['showup']    = $_POST['showup'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_PROD_SHOW($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '1' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data1 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '2' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data2 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '3' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data3 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '4' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data4 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '5' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data5 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '6' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data6 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '7' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data7 = $g_db->getRow( $sqlstr );

			//抓取商品資料
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data1['pid1']."'";
			$ProdData1 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data2['pid1']."'";
			$ProdData2 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data3['pid1']."'";
			$ProdData3 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data4['pid1']."'";
			$ProdData4 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data5['pid1']."'";
			$ProdData5 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data6['pid1']."'";
			$ProdData6 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data7['pid1']."'";
			$ProdData7 = $g_db->getRow($sqlstr);

	 		echo "          <table cellspacing=\"5\" cellpadding=\"0\" id=\"beauty_pro_table\">\n";
	 		echo "            <tr>\n";

	 		if($Data1['serno'] != ""){

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"".($Data1['url']!=""?$Data1['url']:"#")."\" target=\"".$Data1['target']."\" alt=\"".$ProdData1['name']."\"><img alt=\"" . $ProdData1['name'] . "\" title=\"" . $ProdData1['name'] . "\" src=\"".(Upload_Url.($ProdData1['prod_pic'] != "" ? $ProdData1['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"".($Data1['url']!=""?$Data1['url']:"#")."\" target=\"".$Data1['target']."\" alt=\"".$ProdData1['name']."\">".$Data1['slogan1']."</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}else{

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"#\"><img src=\"".Upload_Url."default/default_80_80.jpg\" width=\"80\" height=\"80\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"#\">名稱</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}

	 		if($Data2['serno'] != ""){

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"".($Data2['url']!=""?$Data2['url']:"#")."\" target=\"".$Data2['target']."\" alt=\"".$ProdData2['name']."\"><img alt=\"" . $ProdData2['name'] . "\" title=\"" . $ProdData2['name'] . "\" src=\"".(Upload_Url.($ProdData2['prod_pic'] != "" ? $ProdData2['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"".($Data2['url']!=""?$Data2['url']:"#")."\" target=\"".$Data2['target']."\" alt=\"".$ProdData2['name']."\">".$Data2['slogan1']."</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}else{

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"#\"><img src=\"".Upload_Url."default/default_80_80.jpg\" width=\"80\" height=\"80\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"#\">名稱</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}

	 		if($Data3['serno'] != ""){

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"".($Data3['url']!=""?$Data3['url']:"#")."\" target=\"".$Data3['target']."\" alt=\"".$ProdData3['name']."\"><img alt=\"" . $ProdData3['name'] . "\" title=\"" . $ProdData3['name'] . "\" src=\"".(Upload_Url.($ProdData3['prod_pic'] != "" ? $ProdData3['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"".($Data3['url']!=""?$Data3['url']:"#")."\" target=\"".$Data3['target']."\" alt=\"".$ProdData3['name']."\">".$Data3['slogan1']."</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}else{

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"#\"><img src=\"".Upload_Url."default/default_80_80.jpg\" width=\"80\" height=\"80\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"#\">名稱</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}

	 		if($Data4['serno'] != ""){

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"".($Data4['url']!=""?$Data4['url']:"#")."\" target=\"".$Data4['target']."\" alt=\"".$ProdData4['name']."\"><img alt=\"" . $ProdData4['name'] . "\" title=\"" . $ProdData4['name'] . "\" src=\"".(Upload_Url.($ProdData4['prod_pic'] != "" ? $ProdData4['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"".($Data4['url']!=""?$Data4['url']:"#")."\" target=\"".$Data4['target']."\" alt=\"".$ProdData4['name']."\">".$Data4['slogan1']."</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}else{

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"#\"><img src=\"".Upload_Url."default/default_80_80.jpg\" width=\"80\" height=\"80\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"#\">名稱</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}

	 		if($Data5['serno'] != ""){

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"".($Data5['url']!=""?$Data5['url']:"#")."\" target=\"".$Data5['target']."\" alt=\"".$ProdData5['name']."\"><img alt=\"" . $ProdData5['name'] . "\" title=\"" . $ProdData5['name'] . "\" src=\"".(Upload_Url.($ProdData5['prod_pic'] != "" ? $ProdData5['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"".($Data5['url']!=""?$Data5['url']:"#")."\" target=\"".$Data5['target']."\" alt=\"".$ProdData5['name']."\">".$Data5['slogan1']."</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}else{

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"#\"><img src=\"".Upload_Url."default/default_80_80.jpg\" width=\"80\" height=\"80\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"#\">名稱</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}

	 		if($Data6['serno'] != ""){

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"pro_info.php?id=".$Data6['pid1']."\" alt=\"".$ProdData6['name']."\"><img alt=\"" . $ProdData6['name'] . "\" title=\"" . $ProdData6['name'] . "\" src=\"".(Upload_Url.($ProdData6['prod_pic'] != "" ? $ProdData6['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"pro_info.php?id=".$Data6['pid1']."\" alt=\"".$ProdData6['name']."\">".$Data6['slogan1']."</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}else{

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"#\"><img src=\"".Upload_Url."default/default_80_80.jpg\" width=\"80\" height=\"80\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"#\">名稱</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}

	 		if($Data7['serno'] != ""){

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"".($Data7['url']!=""?$Data7['url']:"#")."\" target=\"".$Data7['target']."\" alt=\"".$ProdData7['name']."\"><img alt=\"" . $ProdData7['name'] . "\" title=\"" . $ProdData7['name'] . "\" src=\"".(Upload_Url.($ProdData7['prod_pic'] != "" ? $ProdData7['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"".($Data7['url']!=""?$Data7['url']:"#")."\" target=\"".$Data7['target']."\" alt=\"".$ProdData7['name']."\">".$Data7['slogan1']."</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}else{

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"#\"><img src=\"".Upload_Url."default/default_80_80.jpg\" width=\"80\" height=\"80\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"#\">名稱</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}

	 		echo "            </tr>\n";
	 		echo "          </table>\n";

		}

		/////PROD_SHOW_L/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_PROD_SHOW_L($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select *,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid1`) pid1name FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' ORDER BY `order`,`startdate` desc,`serno` Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );
			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <br><center>\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置一\" onclick=\"location.href='".$_url."?flag=settag&tag=1';\" ".($_tag == 1 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置二\" onclick=\"location.href='".$_url."?flag=settag&tag=2';\" ".($_tag == 2 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置三\" onclick=\"location.href='".$_url."?flag=settag&tag=3';\" ".($_tag == 3 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置四\" onclick=\"location.href='".$_url."?flag=settag&tag=4';\" ".($_tag == 4 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置五\" onclick=\"location.href='".$_url."?flag=settag&tag=5';\" ".($_tag == 5 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置六\" onclick=\"location.href='".$_url."?flag=settag&tag=6';\" ".($_tag == 6 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置七\" onclick=\"location.href='".$_url."?flag=settag&tag=7';\" ".($_tag == 7 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置八\" onclick=\"location.href='".$_url."?flag=settag&tag=8';\" ".($_tag == 8 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置九\" onclick=\"location.href='".$_url."?flag=settag&tag=9';\" ".($_tag == 9 ? "disabled" : "").">\n";
			$ListCotent .=  "      </center>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"60\">位置</th>\n";
			$ListCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				switch($DataList[$i]['tag']){
					case 1:
						$TagName = "位置一";
						break;
					case 2:
						$TagName = "位置二";
						break;
					case 3:
						$TagName = "位置三";
						break;
					case 4:
						$TagName = "位置四";
						break;
					case 5:
						$TagName = "位置五";
						break;
					case 6:
						$TagName = "位置六";
						break;
					case 7:
						$TagName = "位置七";
						break;
					case 8:
						$TagName = "位置八";
						break;
					case 9:
						$TagName = "位置九";
						break;
					default:
						$TagName = "位置一";
						break;						
				}

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($pageno * $this->pageshownum + $i + 1)."</td>\n";
				$ListCotent .=  "          <td>".$TagName."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['pid1name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_PROD_SHOW_L($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select *,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid1`) pid1name FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">位置</th>\n";
			$EditCotent .=  "          <td align=\"left\">\n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"1\" ".($Data['tag'] == 1 || ($Data == "" && $_tag == 1) ? "checked" : "" )." />位置一 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"2\" ".($Data['tag'] == 2 || ($Data == "" && $_tag == 2) ? "checked" : "" )." />位置二 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"3\" ".($Data['tag'] == 3 || ($Data == "" && $_tag == 3) ? "checked" : "" )." />位置三 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"4\" ".($Data['tag'] == 4 || ($Data == "" && $_tag == 4) ? "checked" : "" )." />位置四 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"5\" ".($Data['tag'] == 5 || ($Data == "" && $_tag == 5) ? "checked" : "" )." />位置五 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"6\" ".($Data['tag'] == 6 || ($Data == "" && $_tag == 6) ? "checked" : "" )." />位置六 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"7\" ".($Data['tag'] == 7 || ($Data == "" && $_tag == 7) ? "checked" : "" )." />位置七 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"8\" ".($Data['tag'] == 8 || ($Data == "" && $_tag == 8) ? "checked" : "" )." />位置八 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"9\" ".($Data['tag'] == 9 || ($Data == "" && $_tag == 9) ? "checked" : "" )." />位置九 &nbsp; \n";
			$EditCotent .=  "          </td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid1\" id=\"pid1\" value=\"".$Data['pid1']."\"><input name=\"pid1name\" id=\"pid1name\" type=\"text\" value=\"".htmlspecialchars($Data['pid1name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid1');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid1').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid1').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"text\" name=\"slogan1\" id=\"slogan1\" value=\"".$Data['slogan1']."\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"50\" /> 開啟方式：<select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_PROD_SHOW_L(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['pid1']      = $_POST['pid1'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['showup']    = $_POST['showup'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['pid1']      = $_POST['pid1'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['showup']    = $_POST['showup'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_PROD_SHOW_L($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '1' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data1 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '2' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data2 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '3' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data3 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '4' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data4 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '5' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data5 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '6' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data6 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '7' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data7 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '8' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data8 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '9' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data9 = $g_db->getRow( $sqlstr );

			//抓取商品資料
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data1['pid1']."'";
			$ProdData1 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data2['pid1']."'";
			$ProdData2 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data3['pid1']."'";
			$ProdData3 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data4['pid1']."'";
			$ProdData4 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data5['pid1']."'";
			$ProdData5 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data6['pid1']."'";
			$ProdData6 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data7['pid1']."'";
			$ProdData7 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data8['pid1']."'";
			$ProdData8 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data9['pid1']."'";
			$ProdData9 = $g_db->getRow($sqlstr);

	 		echo "          <table cellspacing=\"0\" cellpadding=\"0\" id=\"beauty_pro_table\">\n";
	 		echo "            <tr>\n";

	 		if($Data1['serno'] != ""){

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"".($Data1['url']!=""?$Data1['url']:"#")."\" target=\"".$Data1['target']."\" alt=\"".$ProdData1['name']."\"><img alt=\"" . $ProdData1['name'] . "\" title=\"" . $ProdData1['name'] . "\" src=\"".(Upload_Url.($ProdData1['prod_pic'] != "" ? $ProdData1['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"85\" height=\"85\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"".($Data1['url']!=""?$Data1['url']:"#")."\" target=\"".$Data1['target']."\" alt=\"".$ProdData1['name']."\">".$Data1['slogan1']."</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}else{

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"#\"><img src=\"".Upload_Url."default/default_80_80.jpg\" width=\"85\" height=\"85\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"#\">名稱</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}

	 		if($Data2['serno'] != ""){

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"".($Data2['url']!=""?$Data2['url']:"#")."\" target=\"".$Data2['target']."\" alt=\"".$ProdData2['name']."\"><img alt=\"" . $ProdData2['name'] . "\" title=\"" . $ProdData2['name'] . "\" src=\"".(Upload_Url.($ProdData2['prod_pic'] != "" ? $ProdData2['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"85\" height=\"85\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"".($Data2['url']!=""?$Data2['url']:"#")."\" target=\"".$Data2['target']."\" alt=\"".$ProdData2['name']."\">".$Data2['slogan1']."</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}else{

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"#\"><img src=\"".Upload_Url."default/default_80_80.jpg\" width=\"85\" height=\"85\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"#\">名稱</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}

	 		if($Data3['serno'] != ""){

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"".($Data3['url']!=""?$Data3['url']:"#")."\" target=\"".$Data3['target']."\" alt=\"".$ProdData3['name']."\"><img alt=\"" . $ProdData3['name'] . "\" title=\"" . $ProdData3['name'] . "\" src=\"".(Upload_Url.($ProdData3['prod_pic'] != "" ? $ProdData3['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"".($Data3['url']!=""?$Data3['url']:"#")."\" target=\"".$Data3['target']."\" alt=\"".$ProdData3['name']."\">".$Data3['slogan1']."</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}else{

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"#\"><img src=\"".Upload_Url."default/default_80_80.jpg\" width=\"85\" height=\"85\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"#\">名稱</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}

	 		if($Data4['serno'] != ""){

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"".($Data4['url']!=""?$Data4['url']:"#")."\" target=\"".$Data4['target']."\" alt=\"".$ProdData4['name']."\"><img alt=\"" . $ProdData4['name'] . "\" title=\"" . $ProdData4['name'] . "\" src=\"".(Upload_Url.($ProdData4['prod_pic'] != "" ? $ProdData4['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"".($Data4['url']!=""?$Data4['url']:"#")."\" target=\"".$Data4['target']."\" alt=\"".$ProdData4['name']."\">".$Data4['slogan1']."</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}else{

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"#\"><img src=\"".Upload_Url."default/default_80_80.jpg\" width=\"85\" height=\"85\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"#\">名稱</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}

	 		if($Data5['serno'] != ""){

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"".($Data5['url']!=""?$Data5['url']:"#")."\" target=\"".$Data5['target']."\" alt=\"".$ProdData5['name']."\"><img alt=\"" . $ProdData5['name'] . "\" title=\"" . $ProdData5['name'] . "\" src=\"".(Upload_Url.($ProdData5['prod_pic'] != "" ? $ProdData5['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"".($Data5['url']!=""?$Data5['url']:"#")."\" target=\"".$Data5['target']."\" alt=\"".$ProdData5['name']."\">".$Data5['slogan1']."</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}else{

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"#\"><img src=\"".Upload_Url."default/default_80_80.jpg\" width=\"85\" height=\"85\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"#\">名稱</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}

	 		if($Data6['serno'] != ""){

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"".($Data6['url']!=""?$Data6['url']:"#")."\" target=\"".$Data6['target']."\" alt=\"".$ProdData6['name']."\"><img alt=\"" . $ProdData6['name'] . "\" title=\"" . $ProdData6['name'] . "\" src=\"".(Upload_Url.($ProdData6['prod_pic'] != "" ? $ProdData6['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"".($Data6['url']!=""?$Data6['url']:"#")."\" target=\"".$Data6['target']."\" alt=\"".$ProdData6['name']."\">".$Data6['slogan1']."</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}else{

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"#\"><img src=\"".Upload_Url."default/default_80_80.jpg\" width=\"85\" height=\"85\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"#\">名稱</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}

	 		if($Data7['serno'] != ""){

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"".($Data7['url']!=""?$Data7['url']:"#")."\" target=\"".$Data7['target']."\" alt=\"".$ProdData7['name']."\"><img alt=\"" . $ProdData7['name'] . "\" title=\"" . $ProdData7['name'] . "\" src=\"".(Upload_Url.($ProdData7['prod_pic'] != "" ? $ProdData7['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"".($Data7['url']!=""?$Data7['url']:"#")."\" target=\"".$Data7['target']."\" alt=\"".$ProdData7['name']."\">".$Data7['slogan1']."</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}else{

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"#\"><img src=\"".Upload_Url."default/default_80_80.jpg\" width=\"85\" height=\"85\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"#\">名稱</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}

	 		if($Data8['serno'] != ""){

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"".($Data8['url']!=""?$Data8['url']:"#")."\" target=\"".$Data8['target']."\" alt=\"".$ProdData8['name']."\"><img alt=\"" . $ProdData8['name'] . "\" title=\"" . $ProdData8['name'] . "\" src=\"".(Upload_Url.($ProdData8['prod_pic'] != "" ? $ProdData8['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"".($Data8['url']!=""?$Data8['url']:"#")."\" target=\"".$Data8['target']."\" alt=\"".$ProdData8['name']."\">".$Data8['slogan1']."</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}else{

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"#\"><img src=\"".Upload_Url."default/default_80_80.jpg\" width=\"85\" height=\"85\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"#\">名稱</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}

	 		if($Data9['serno'] != ""){

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"".($Data9['url']!=""?$Data9['url']:"#")."\" target=\"".$Data9['target']."\" alt=\"".$ProdData9['name']."\"><img alt=\"" . $ProdData9['name'] . "\" title=\"" . $ProdData9['name'] . "\" src=\"".(Upload_Url.($ProdData9['prod_pic'] != "" ? $ProdData9['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"".($Data9['url']!=""?$Data9['url']:"#")."\" target=\"".$Data9['target']."\" alt=\"".$ProdData9['name']."\">".$Data9['slogan1']."</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}else{

	 			echo "              <td>\n";
	 			echo "                <dl class=\"beauty_pro_info\">\n";
	 			echo "                  <dd class=\"beauty_pro_img pngbg\"><a href=\"#\"><img src=\"".Upload_Url."default/default_80_80.jpg\" width=\"85\" height=\"85\" /></a></dd>\n";
	 			echo "                  <dt class=\"beauty_pro_txt\"><a href=\"#\">名稱</a></dt>\n";
	 			echo "                </dl>\n";
	 			echo "              </td>\n";

	 		}

	 		echo "            </tr>\n";
	 		echo "          </table>\n";

		}

		/////BEAUTY_SHOW2/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_BEAUTY_SHOW2($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' ORDER BY `startdate` desc,`serno` desc Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <br><center>\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置一\" onclick=\"location.href='".$_url."?flag=settag&tag=1';\" ".($_tag == 1 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置二\" onclick=\"location.href='".$_url."?flag=settag&tag=2';\" ".($_tag == 2 ? "disabled" : "").">\n";
			$ListCotent .=  "      </center>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"60\">位置</th>\n";
			$ListCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				switch($DataList[$i]['tag']){
					case 1:
						$TagName = "位置一";
						break;
					case 2:
						$TagName = "位置二";
						break;
					default:
						$TagName = "位置一";
						break;						
				}

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				$ListCotent .=  "          <td>".$TagName."</td>\n";
				$ListCotent .=  "          <td align=\"center\" class=\"main\">".($DataList[$i]['pic1'] != "" ? "<a href=\"".Upload_Url.$DataList[$i]['pic1']."\" target=\"_blank\"><img " . ( $DataList['slogan1'] ? 'alt="' . $DataList['slogan1'] . '" title="' . $DataList['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$DataList[$i]['pic1']."\" width=\"200\" height=\"50\"></a><br>" : "")."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";

			return $ListCotent;

		}

		function EditPage_BEAUTY_SHOW2($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select *,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid1`) pid1name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid2`) pid2name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid3`) pid3name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid4`) pid4name FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">位置</th>\n";
			$EditCotent .=  "          <td align=\"left\">\n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"1\" ".($Data['tag'] == 1 || ($Data == "" && $_tag == 1) ? "checked" : "" )." />位置一 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"2\" ".($Data['tag'] == 2 || ($Data == "" && $_tag == 2) ? "checked" : "" )." />位置二 &nbsp; \n";
			$EditCotent .=  "          </td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">主圖片</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic1'] != "" ? "<a href=\"".Upload_Url.$Data['pic1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"370\" height=\"80\"></a><br>" : "")."<input name=\"pic1\" type=\"file\" size=\"20\" />".($Data['pic1'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 370px × 80px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan1\" type=\"text\" value=\"".$Data['slogan1']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid1\" id=\"pid1\" value=\"".$Data['pid1']."\"><input name=\"pid1name\" id=\"pid1name\" type=\"text\" value=\"".htmlspecialchars($Data['pid1name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid1');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid1').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid1').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url2\" type=\"text\" value=\"".$Data['url2']."\" size=\"50\" /> 開啟方式：<select name=\"target2\"><option value=\"_self\" ".($Data['target2'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target2'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan2\" type=\"text\" value=\"".$Data['slogan2']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid2\" id=\"pid2\" value=\"".$Data['pid2']."\"><input name=\"pid2name\" id=\"pid2name\" type=\"text\" value=\"".htmlspecialchars($Data['pid2name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid2');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid2').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid2').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url3\" type=\"text\" value=\"".$Data['url3']."\" size=\"50\" /> 開啟方式：<select name=\"target3\"><option value=\"_self\" ".($Data['target3'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target3'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan3\" type=\"text\" value=\"".$Data['slogan3']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid3\" id=\"pid3\" value=\"".$Data['pid3']."\"><input name=\"pid3name\" id=\"pid3name\" type=\"text\" value=\"".htmlspecialchars($Data['pid3name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid3');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid3').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid3').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url4\" type=\"text\" value=\"".$Data['url4']."\" size=\"50\" /> 開啟方式：<select name=\"target4\"><option value=\"_self\" ".($Data['target4'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target4'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan4\" type=\"text\" value=\"".$Data['slogan4']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid4\" id=\"pid4\" value=\"".$Data['pid4']."\"><input name=\"pid4name\" id=\"pid4name\" type=\"text\" value=\"".htmlspecialchars($Data['pid4name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid4');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid4').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid4').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url5\" type=\"text\" value=\"".$Data['url5']."\" size=\"50\" /> 開啟方式：<select name=\"target5\"><option value=\"_self\" ".($Data['target5'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target5'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_BEAUTY_SHOW2(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['slogan2']   = $_POST['slogan2'];
				$data['slogan3']   = $_POST['slogan3'];
				$data['slogan4']   = $_POST['slogan4'];
				$data['pid1']      = $_POST['pid1'];
				$data['pid2']      = $_POST['pid2'];
				$data['pid3']      = $_POST['pid3'];
				$data['pid4']      = $_POST['pid4'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['url4']      = $_POST['url4'];
				$data['url5']      = $_POST['url5'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];
				$data['target4']   = $_POST['target4'];
				$data['target5']   = $_POST['target5'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "bspic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['slogan2']   = $_POST['slogan2'];
				$data['slogan3']   = $_POST['slogan3'];
				$data['slogan4']   = $_POST['slogan4'];
				$data['pid1']      = $_POST['pid1'];
				$data['pid2']      = $_POST['pid2'];
				$data['pid3']      = $_POST['pid3'];
				$data['pid4']      = $_POST['pid4'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['url4']      = $_POST['url4'];
				$data['url5']      = $_POST['url5'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];
				$data['target4']   = $_POST['target4'];
				$data['target5']   = $_POST['target5'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "bspic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_BEAUTY_SHOW2($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '1' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data1 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '2' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data2 = $g_db->getRow( $sqlstr );

			//抓取商品資料
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data1['pid1']."'";
			$ProdData1 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data1['pid2']."'";
			$ProdData2 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data1['pid3']."'";
			$ProdData3 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data1['pid4']."'";
			$ProdData4 = $g_db->getRow($sqlstr);

			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data2['pid1']."'";
			$ProdData5 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data2['pid2']."'";
			$ProdData6 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data2['pid3']."'";
			$ProdData7 = $g_db->getRow($sqlstr);
			$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$Data2['pid4']."'";
			$ProdData8 = $g_db->getRow($sqlstr);

	 		echo "            <table cellspacing=\"4\" cellpadding=\"0\">\n";
	 		echo "              <tr>\n";
	 		echo "                <td><a href=\"".($Data1['url'] != "" ? $Data1['url'] : "#" )."\" target=\"".$Data1['target']."\"><img " . ( $Data1['slogan1'] ? 'alt="' . $Data1['slogan1'] . '" title="' . $Data1['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.($Data1['pic1'] ? $Data1['pic1'] : "default/default_370_80.jpg")."\" width=\"370\" height=\"80\" /></a></td>\n";
	 		echo "                <td><a href=\"".($Data2['url'] != "" ? $Data2['url'] : "#" )."\" target=\"".$Data2['target']."\"><img " . ( $Data2['slogan1'] ? 'alt="' . $Data2['slogan1'] . '" title="' . $Data2['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.($Data2['pic1'] ? $Data2['pic1'] : "default/default_370_80.jpg")."\" width=\"370\" height=\"80\" /></a></td>\n";
	 		echo "              </tr>\n";
	 		echo "              <tr>\n";
	 		echo "                <td>\n";
	 		echo "                  <table cellspacing=\"6\" cellpadding=\"0\">\n";
	 		echo "                    <tr>\n";
 			echo "                      <td><a href=\"".($Data1['url2']!=""?$Data1['url2']:"#")."\" target=\"".$Data1['target2']."\"><img alt=\"" . $ProdData1['name'] . "\" title=\"" . $ProdData1['name'] . "\" src=\"".(Upload_Url.($ProdData1['prod_pic'] != "" ? $ProdData1['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></td>\n";
 			echo "                      <td><a href=\"".($Data1['url3']!=""?$Data1['url3']:"#")."\" target=\"".$Data1['target3']."\"><img alt=\"" . $ProdData2['name'] . "\" title=\"" . $ProdData2['name'] . "\" src=\"".(Upload_Url.($ProdData2['prod_pic'] != "" ? $ProdData2['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></td>\n";
 			echo "                      <td><a href=\"".($Data1['url4']!=""?$Data1['url4']:"#")."\" target=\"".$Data1['target4']."\"><img alt=\"" . $ProdData3['name'] . "\" title=\"" . $ProdData3['name'] . "\" src=\"".(Upload_Url.($ProdData3['prod_pic'] != "" ? $ProdData3['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></td>\n";
 			echo "                      <td><a href=\"".($Data1['url5']!=""?$Data1['url5']:"#")."\" target=\"".$Data1['target5']."\"><img alt=\"" . $ProdData4['name'] . "\" title=\"" . $ProdData4['name'] . "\" src=\"".(Upload_Url.($ProdData4['prod_pic'] != "" ? $ProdData4['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></td>\n";
	 		echo "                    </tr>\n";
	 		echo "                    <tr>\n";
			echo "                      <td><a href=\"".($Data1['url2']!=""?$Data1['url2']:"#")."\" target=\"".$Data1['target2']."\">".$Data1['slogan1']."</a></td>\n";
	 		echo "                      <td><a href=\"".($Data1['url3']!=""?$Data1['url3']:"#")."\" target=\"".$Data1['target3']."\">".$Data1['slogan2']."</a></td>\n";
	 		echo "                      <td><a href=\"".($Data1['url4']!=""?$Data1['url4']:"#")."\" target=\"".$Data1['target4']."\">".$Data1['slogan3']."</a></td>\n";
	 		echo "                      <td><a href=\"".($Data1['url5']!=""?$Data1['url5']:"#")."\" target=\"".$Data1['target5']."\">".$Data1['slogan4']."</a></td>\n";
	 		echo "                    </tr>\n";
	 		echo "                  </table>\n";
	 		echo "                </td>\n";
	 		echo "                <td>\n";
	 		echo "                  <table cellspacing=\"6\" cellpadding=\"0\">\n";
	 		echo "                    <tr>\n";
 			echo "                      <td><a href=\"".($Data2['url2']!=""?$Data2['url2']:"#")."\" target=\"".$Data2['target2']."\"><img alt=\"" . $ProdData5['name'] . "\" title=\"" . $ProdData5['name'] . "\" src=\"".(Upload_Url.($ProdData5['prod_pic'] != "" ? $ProdData5['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></td>\n";
 			echo "                      <td><a href=\"".($Data2['url3']!=""?$Data2['url3']:"#")."\" target=\"".$Data2['target3']."\"><img alt=\"" . $ProdData6['name'] . "\" title=\"" . $ProdData6['name'] . "\" src=\"".(Upload_Url.($ProdData6['prod_pic'] != "" ? $ProdData6['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></td>\n";
 			echo "                      <td><a href=\"".($Data2['url4']!=""?$Data2['url4']:"#")."\" target=\"".$Data2['target4']."\"><img alt=\"" . $ProdData7['name'] . "\" title=\"" . $ProdData7['name'] . "\" src=\"".(Upload_Url.($ProdData7['prod_pic'] != "" ? $ProdData7['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></td>\n";
 			echo "                      <td><a href=\"".($Data2['url5']!=""?$Data2['url5']:"#")."\" target=\"".$Data2['target5']."\"><img alt=\"" . $ProdData8['name'] . "\" title=\"" . $ProdData8['name'] . "\" src=\"".(Upload_Url.($ProdData8['prod_pic'] != "" ? $ProdData8['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></td>\n";
	 		echo "                    </tr>\n";
	 		echo "                    <tr>\n";
			echo "                      <td><a href=\"".($Data2['url2']!=""?$Data2['url2']:"#")."\" target=\"".$Data2['target2']."\">".$Data2['slogan1']."</a></td>\n";
	 		echo "                      <td><a href=\"".($Data2['url3']!=""?$Data2['url3']:"#")."\" target=\"".$Data2['target3']."\">".$Data2['slogan2']."</a></td>\n";
	 		echo "                      <td><a href=\"".($Data2['url4']!=""?$Data2['url4']:"#")."\" target=\"".$Data2['target4']."\">".$Data2['slogan3']."</a></td>\n";
	 		echo "                      <td><a href=\"".($Data2['url5']!=""?$Data2['url5']:"#")."\" target=\"".$Data2['target5']."\">".$Data2['slogan4']."</a></td>\n";
	 		echo "                    </tr>\n";
	 		echo "                  </table>\n";
	 		echo "                </td>\n";
	 		echo "              </tr>\n";
	 		echo "            </table>\n";

		}

		/////CLOTH_SHOW/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_CLOTH_SHOW($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' ORDER BY `startdate` desc,`serno` desc Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <br><center>\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置一\" onclick=\"location.href='".$_url."?flag=settag&tag=1';\" ".($_tag == 1 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置二\" onclick=\"location.href='".$_url."?flag=settag&tag=2';\" ".($_tag == 2 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置三\" onclick=\"location.href='".$_url."?flag=settag&tag=3';\" ".($_tag == 3 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置四\" onclick=\"location.href='".$_url."?flag=settag&tag=4';\" ".($_tag == 4 ? "disabled" : "").">\n";
			$ListCotent .=  "      </center>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"60\">位置</th>\n";
			$ListCotent .=  "          <th scope=\"col\">標籤名稱</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				switch($DataList[$i]['tag']){
					case 1:
						$TagName = "位置一";
						break;
					case 2:
						$TagName = "位置二";
						break;
					case 3:
						$TagName = "位置三";
						break;
					case 4:
						$TagName = "位置四";
						break;
					default:
						$TagName = "位置一";
						break;						
				}

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				$ListCotent .=  "          <td>".$TagName."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";

			return $ListCotent;

		}

		function EditPage_CLOTH_SHOW($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select *,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid1`) pid1name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid2`) pid2name FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">位置</th>\n";
			$EditCotent .=  "          <td align=\"left\">\n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"1\" ".($Data['tag'] == 1 || ($Data == "" && $_tag == 1) ? "checked" : "" )." />位置一 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"2\" ".($Data['tag'] == 2 || ($Data == "" && $_tag == 2) ? "checked" : "" )." />位置二 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"3\" ".($Data['tag'] == 3 || ($Data == "" && $_tag == 3) ? "checked" : "" )." />位置三 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"4\" ".($Data['tag'] == 4 || ($Data == "" && $_tag == 4) ? "checked" : "" )." />位置四 &nbsp; \n";
			$EditCotent .=  "          </td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標籤名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">類型</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"radio\" name=\"type\" value=\"normal\" onclick=\"document.getElementById('block1').style.display='';document.getElementById('block2').style.display='none';\" ".($Data['type'] == "normal" || $Data['type'] == "" ? "checked" : "").">一大圖二小圖 <input type=\"radio\" name=\"type\" value=\"week\" onclick=\"document.getElementById('block1').style.display='none';document.getElementById('block2').style.display='';\" ".($Data['type'] == "week" ? "checked" : "").">一個星期</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\" id=\"block1\" ".($Data['type'] != "normal" && $Data['type'] != "" ? "style=\"display:none;\"" : "").">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">主圖片</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic1'] != "" ? "<a href=\"".Upload_Url.$Data['pic1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"300\" height=\"190\"></a><br>" : "")."<input name=\"pic1\" type=\"file\" size=\"20\" />".($Data['pic1'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 300px × 190px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan1\" type=\"text\" value=\"".$Data['slogan1']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">簡述</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan2\" type=\"text\" value=\"".$Data['slogan2']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid1\" id=\"pid1\" value=\"".$Data['pid1']."\"><input name=\"pid1name\" id=\"pid1name\" type=\"text\" value=\"".htmlspecialchars($Data['pid1name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid1');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid1').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid1').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標籤名稱1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan3\" type=\"text\" value=\"".$Data['slogan3']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid2\" id=\"pid2\" value=\"".$Data['pid2']."\"><input name=\"pid2name\" id=\"pid2name\" type=\"text\" value=\"".htmlspecialchars($Data['pid2name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid2');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid2').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid2').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標籤名稱2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan4\" type=\"text\" value=\"".$Data['slogan4']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\" id=\"block2\" ".($Data['type'] != "week" ? "style=\"display:none;\"" : "").">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" colspan=\"2\">星期一</th>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片1</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic4'] != "" ? "<a href=\"".Upload_Url.$Data['pic4']."\" target=\"_blank\"><img " . ( $Data['slogan4'] ? 'alt="' . $Data['slogan4'] . '" title="' . $Data['slogan4'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic4']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic4\" type=\"file\" size=\"20\" />".($Data['pic4'] != "" ? " <input type=\"checkbox\" name=\"del_pic4\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url4\" type=\"text\" value=\"".$Data['url4']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target4\"><option value=\"_self\" ".($Data['target4'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target4'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片2</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic5'] != "" ? "<a href=\"".Upload_Url.$Data['pic5']."\" target=\"_blank\"><img " . ( $Data['slogan5'] ? 'alt="' . $Data['slogan5'] . '" title="' . $Data['slogan5'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic5']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic5\" type=\"file\" size=\"20\" />".($Data['pic5'] != "" ? " <input type=\"checkbox\" name=\"del_pic5\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url5\" type=\"text\" value=\"".$Data['url5']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target5\"><option value=\"_self\" ".($Data['target5'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target5'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片3</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic6'] != "" ? "<a href=\"".Upload_Url.$Data['pic6']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic6']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic6\" type=\"file\" size=\"20\" />".($Data['pic6'] != "" ? " <input type=\"checkbox\" name=\"del_pic6\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url6\" type=\"text\" value=\"".$Data['url6']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target6\"><option value=\"_self\" ".($Data['target6'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target6'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片4</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic7'] != "" ? "<a href=\"".Upload_Url.$Data['pic7']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic7']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic7\" type=\"file\" size=\"20\" />".($Data['pic7'] != "" ? " <input type=\"checkbox\" name=\"del_pic7\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url7\" type=\"text\" value=\"".$Data['url7']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target7\"><option value=\"_self\" ".($Data['target7'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target7'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" colspan=\"2\">星期二</th>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片1</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic8'] != "" ? "<a href=\"".Upload_Url.$Data['pic8']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic8']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic8\" type=\"file\" size=\"20\" />".($Data['pic8'] != "" ? " <input type=\"checkbox\" name=\"del_pic8\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url8\" type=\"text\" value=\"".$Data['url8']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target8\"><option value=\"_self\" ".($Data['target8'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target8'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片2</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic9'] != "" ? "<a href=\"".Upload_Url.$Data['pic9']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic9']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic9\" type=\"file\" size=\"20\" />".($Data['pic9'] != "" ? " <input type=\"checkbox\" name=\"del_pic9\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url9\" type=\"text\" value=\"".$Data['url9']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target9\"><option value=\"_self\" ".($Data['target9'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target9'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片3</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic10'] != "" ? "<a href=\"".Upload_Url.$Data['pic10']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic10']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic10\" type=\"file\" size=\"20\" />".($Data['pic10'] != "" ? " <input type=\"checkbox\" name=\"del_pic10\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url10\" type=\"text\" value=\"".$Data['url10']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target10\"><option value=\"_self\" ".($Data['target10'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target10'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片4</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic11'] != "" ? "<a href=\"".Upload_Url.$Data['pic11']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic11']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic11\" type=\"file\" size=\"20\" />".($Data['pic11'] != "" ? " <input type=\"checkbox\" name=\"del_pic11\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url11\" type=\"text\" value=\"".$Data['url11']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target11\"><option value=\"_self\" ".($Data['target11'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target11'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" colspan=\"2\">星期三</th>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片1</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic12'] != "" ? "<a href=\"".Upload_Url.$Data['pic12']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic12']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic12\" type=\"file\" size=\"20\" />".($Data['pic12'] != "" ? " <input type=\"checkbox\" name=\"del_pic12\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url12\" type=\"text\" value=\"".$Data['url12']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target12\"><option value=\"_self\" ".($Data['target12'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target12'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片2</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic13'] != "" ? "<a href=\"".Upload_Url.$Data['pic13']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic13']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic13\" type=\"file\" size=\"20\" />".($Data['pic13'] != "" ? " <input type=\"checkbox\" name=\"del_pic13\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url13\" type=\"text\" value=\"".$Data['url13']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target13\"><option value=\"_self\" ".($Data['target13'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target13'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片3</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic14'] != "" ? "<a href=\"".Upload_Url.$Data['pic14']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic14']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic14\" type=\"file\" size=\"20\" />".($Data['pic14'] != "" ? " <input type=\"checkbox\" name=\"del_pic14\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url14\" type=\"text\" value=\"".$Data['url14']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target14\"><option value=\"_self\" ".($Data['target14'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target14'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片4</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic15'] != "" ? "<a href=\"".Upload_Url.$Data['pic15']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic15']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic15\" type=\"file\" size=\"20\" />".($Data['pic15'] != "" ? " <input type=\"checkbox\" name=\"del_pic15\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url15\" type=\"text\" value=\"".$Data['url15']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target15\"><option value=\"_self\" ".($Data['target15'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target15'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" colspan=\"2\">星期四</th>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片1</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic16'] != "" ? "<a href=\"".Upload_Url.$Data['pic16']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic16']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic16\" type=\"file\" size=\"20\" />".($Data['pic16'] != "" ? " <input type=\"checkbox\" name=\"del_pic16\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url16\" type=\"text\" value=\"".$Data['url16']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target16\"><option value=\"_self\" ".($Data['target16'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target16'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片2</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic17'] != "" ? "<a href=\"".Upload_Url.$Data['pic17']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic17']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic17\" type=\"file\" size=\"20\" />".($Data['pic17'] != "" ? " <input type=\"checkbox\" name=\"del_pic17\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url17\" type=\"text\" value=\"".$Data['url17']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target17\"><option value=\"_self\" ".($Data['target17'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target17'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片3</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic18'] != "" ? "<a href=\"".Upload_Url.$Data['pic18']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic18']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic18\" type=\"file\" size=\"20\" />".($Data['pic18'] != "" ? " <input type=\"checkbox\" name=\"del_pic18\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url18\" type=\"text\" value=\"".$Data['url18']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target18\"><option value=\"_self\" ".($Data['target18'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target18'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片4</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic19'] != "" ? "<a href=\"".Upload_Url.$Data['pic19']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic19']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic19\" type=\"file\" size=\"20\" />".($Data['pic19'] != "" ? " <input type=\"checkbox\" name=\"del_pic19\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url19\" type=\"text\" value=\"".$Data['url19']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target19\"><option value=\"_self\" ".($Data['target19'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target19'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" colspan=\"2\">星期五</th>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片1</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic20'] != "" ? "<a href=\"".Upload_Url.$Data['pic20']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic20']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic20\" type=\"file\" size=\"20\" />".($Data['pic20'] != "" ? " <input type=\"checkbox\" name=\"del_pic20\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url20\" type=\"text\" value=\"".$Data['url20']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target20\"><option value=\"_self\" ".($Data['target20'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target20'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片2</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic21'] != "" ? "<a href=\"".Upload_Url.$Data['pic21']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic21']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic21\" type=\"file\" size=\"20\" />".($Data['pic21'] != "" ? " <input type=\"checkbox\" name=\"del_pic21\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url21\" type=\"text\" value=\"".$Data['url21']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target21\"><option value=\"_self\" ".($Data['target21'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target21'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片3</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic22'] != "" ? "<a href=\"".Upload_Url.$Data['pic22']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic22']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic22\" type=\"file\" size=\"20\" />".($Data['pic22'] != "" ? " <input type=\"checkbox\" name=\"del_pic22\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url22\" type=\"text\" value=\"".$Data['url22']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target22\"><option value=\"_self\" ".($Data['target22'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target22'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片4</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic23'] != "" ? "<a href=\"".Upload_Url.$Data['pic23']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic23']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic23\" type=\"file\" size=\"20\" />".($Data['pic23'] != "" ? " <input type=\"checkbox\" name=\"del_pic23\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url23\" type=\"text\" value=\"".$Data['url23']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target23\"><option value=\"_self\" ".($Data['target23'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target23'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" colspan=\"2\">星期六</th>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片1</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic24'] != "" ? "<a href=\"".Upload_Url.$Data['pic24']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic24']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic24\" type=\"file\" size=\"20\" />".($Data['pic24'] != "" ? " <input type=\"checkbox\" name=\"del_pic24\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url24\" type=\"text\" value=\"".$Data['url24']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target24\"><option value=\"_self\" ".($Data['target24'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target24'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片2</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic25'] != "" ? "<a href=\"".Upload_Url.$Data['pic25']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic25']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic25\" type=\"file\" size=\"20\" />".($Data['pic25'] != "" ? " <input type=\"checkbox\" name=\"del_pic25\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url25\" type=\"text\" value=\"".$Data['url25']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target25\"><option value=\"_self\" ".($Data['target25'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target25'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片3</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic26'] != "" ? "<a href=\"".Upload_Url.$Data['pic26']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic26']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic26\" type=\"file\" size=\"20\" />".($Data['pic26'] != "" ? " <input type=\"checkbox\" name=\"del_pic26\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url26\" type=\"text\" value=\"".$Data['url26']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target26\"><option value=\"_self\" ".($Data['target26'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target26'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片4</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic27'] != "" ? "<a href=\"".Upload_Url.$Data['pic27']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic27']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic27\" type=\"file\" size=\"20\" />".($Data['pic27'] != "" ? " <input type=\"checkbox\" name=\"del_pic27\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url27\" type=\"text\" value=\"".$Data['url27']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target27\"><option value=\"_self\" ".($Data['target27'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target27'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" colspan=\"2\">星期日</th>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片1</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic28'] != "" ? "<a href=\"".Upload_Url.$Data['pic28']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic28']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic28\" type=\"file\" size=\"20\" />".($Data['pic28'] != "" ? " <input type=\"checkbox\" name=\"del_pic28\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url28\" type=\"text\" value=\"".$Data['url28']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target28\"><option value=\"_self\" ".($Data['target28'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target28'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片2</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic29'] != "" ? "<a href=\"".Upload_Url.$Data['pic29']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic29']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic29\" type=\"file\" size=\"20\" />".($Data['pic29'] != "" ? " <input type=\"checkbox\" name=\"del_pic29\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url29\" type=\"text\" value=\"".$Data['url29']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target29\"><option value=\"_self\" ".($Data['target29'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target29'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片3</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic30'] != "" ? "<a href=\"".Upload_Url.$Data['pic30']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic30']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic30\" type=\"file\" size=\"20\" />".($Data['pic30'] != "" ? " <input type=\"checkbox\" name=\"del_pic30\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url30\" type=\"text\" value=\"".$Data['url30']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target30\"><option value=\"_self\" ".($Data['target30'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target30'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"80\">圖片4</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic31'] != "" ? "<a href=\"".Upload_Url.$Data['pic31']."\" target=\"_blank\"><img src=\"".Upload_Url.$Data['pic31']."\" width=\"135\" height=\"150\"></a><br>" : "")."<input name=\"pic31\" type=\"file\" size=\"20\" />".($Data['pic31'] != "" ? " <input type=\"checkbox\" name=\"del_pic31\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 135px × 150px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url31\" type=\"text\" value=\"".$Data['url31']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target31\"><option value=\"_self\" ".($Data['target31'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target31'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_CLOTH_SHOW(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['type']      = $_POST['type'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['url4']      = $_POST['url4'];
				$data['url5']      = $_POST['url5'];
				$data['url6']      = $_POST['url6'];
				$data['url7']      = $_POST['url7'];
				$data['url8']      = $_POST['url8'];
				$data['url9']      = $_POST['url9'];
				$data['url10']      = $_POST['url10'];
				$data['url11']      = $_POST['url11'];
				$data['url12']      = $_POST['url12'];
				$data['url13']      = $_POST['url13'];
				$data['url14']      = $_POST['url14'];
				$data['url15']      = $_POST['url15'];
				$data['url16']      = $_POST['url16'];
				$data['url17']      = $_POST['url17'];
				$data['url18']      = $_POST['url18'];
				$data['url19']      = $_POST['url19'];
				$data['url20']      = $_POST['url20'];
				$data['url21']      = $_POST['url21'];
				$data['url22']      = $_POST['url22'];
				$data['url23']      = $_POST['url23'];
				$data['url24']      = $_POST['url24'];
				$data['url25']      = $_POST['url25'];
				$data['url26']      = $_POST['url26'];
				$data['url27']      = $_POST['url27'];
				$data['url28']      = $_POST['url28'];
				$data['url29']      = $_POST['url29'];
				$data['url30']      = $_POST['url30'];
				$data['url31']      = $_POST['url31'];
				$data['target']    = $_POST['target'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];
				$data['target4']   = $_POST['target4'];
				$data['target5']   = $_POST['target5'];
				$data['target6']   = $_POST['target6'];
				$data['target7']   = $_POST['target7'];
				$data['target8']   = $_POST['target8'];
				$data['target9']   = $_POST['target9'];
				$data['target10']   = $_POST['target10'];
				$data['target11']   = $_POST['target11'];
				$data['target12']   = $_POST['target12'];
				$data['target13']   = $_POST['target13'];
				$data['target14']   = $_POST['target14'];
				$data['target15']   = $_POST['target15'];
				$data['target16']   = $_POST['target16'];
				$data['target17']   = $_POST['target17'];
				$data['target18']   = $_POST['target18'];
				$data['target19']   = $_POST['target19'];
				$data['target20']   = $_POST['target20'];
				$data['target21']   = $_POST['target21'];
				$data['target22']   = $_POST['target22'];
				$data['target23']   = $_POST['target23'];
				$data['target24']   = $_POST['target24'];
				$data['target25']   = $_POST['target25'];
				$data['target26']   = $_POST['target26'];
				$data['target27']   = $_POST['target27'];
				$data['target28']   = $_POST['target28'];
				$data['target29']   = $_POST['target29'];
				$data['target30']   = $_POST['target30'];
				$data['target31']   = $_POST['target31'];
				$data['showup']    = $_POST['showup'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['slogan2']   = $_POST['slogan2'];
				$data['slogan3']   = $_POST['slogan3'];
				$data['slogan4']   = $_POST['slogan4'];
				$data['pid1']      = $_POST['pid1'];
				$data['pid2']      = $_POST['pid2'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "clothpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				if($_POST['del_pic2'] == "Y")
					$data['pic2'] = '';

				if($_FILES["pic2"]["name"] != "" ){
					$data['pic2'] = "clothpic2-".date("ymdHis").substr($_FILES["pic2"]["name"],strrpos($_FILES["pic2"]["name"],'.'));
					copy( $_FILES["pic2"]['tmp_name'], Upload_Path.$data['pic2'] );
				}

				if($_POST['del_pic3'] == "Y")
					$data['pic3'] = '';

				if($_FILES["pic3"]["name"] != "" ){
					$data['pic3'] = "clothpic3-".date("ymdHis").substr($_FILES["pic3"]["name"],strrpos($_FILES["pic3"]["name"],'.'));
					copy( $_FILES["pic3"]['tmp_name'], Upload_Path.$data['pic3'] );
				}

				if($_POST['del_pic4'] == "Y")
					$data['pic4'] = '';

				if($_FILES["pic4"]["name"] != "" ){
					$data['pic4'] = "clothpic4-".date("ymdHis").substr($_FILES["pic4"]["name"],strrpos($_FILES["pic4"]["name"],'.'));
					copy( $_FILES["pic4"]['tmp_name'], Upload_Path.$data['pic4'] );
				}

				if($_POST['del_pic5'] == "Y")
					$data['pic5'] = '';

				if($_FILES["pic5"]["name"] != "" ){
					$data['pic5'] = "clothpic5-".date("ymdHis").substr($_FILES["pic5"]["name"],strrpos($_FILES["pic5"]["name"],'.'));
					copy( $_FILES["pic5"]['tmp_name'], Upload_Path.$data['pic5'] );
				}

				if($_POST['del_pic6'] == "Y")
					$data['pic6'] = '';

				if($_FILES["pic6"]["name"] != "" ){
					$data['pic6'] = "clothpic6-".date("ymdHis").substr($_FILES["pic6"]["name"],strrpos($_FILES["pic6"]["name"],'.'));
					copy( $_FILES["pic6"]['tmp_name'], Upload_Path.$data['pic6'] );
				}

				if($_POST['del_pic7'] == "Y")
					$data['pic7'] = '';

				if($_FILES["pic7"]["name"] != "" ){
					$data['pic7'] = "clothpic7-".date("ymdHis").substr($_FILES["pic7"]["name"],strrpos($_FILES["pic7"]["name"],'.'));
					copy( $_FILES["pic7"]['tmp_name'], Upload_Path.$data['pic7'] );
				}

				if($_POST['del_pic8'] == "Y")
					$data['pic8'] = '';

				if($_FILES["pic8"]["name"] != "" ){
					$data['pic8'] = "clothpic8-".date("ymdHis").substr($_FILES["pic8"]["name"],strrpos($_FILES["pic8"]["name"],'.'));
					copy( $_FILES["pic8"]['tmp_name'], Upload_Path.$data['pic8'] );
				}

				if($_POST['del_pic9'] == "Y")
					$data['pic9'] = '';

				if($_FILES["pic9"]["name"] != "" ){
					$data['pic9'] = "clothpic9-".date("ymdHis").substr($_FILES["pic9"]["name"],strrpos($_FILES["pic9"]["name"],'.'));
					copy( $_FILES["pic9"]['tmp_name'], Upload_Path.$data['pic9'] );
				}

				if($_POST['del_pic10'] == "Y")
					$data['pic10'] = '';

				if($_FILES["pic10"]["name"] != "" ){
					$data['pic10'] = "clothpic10-".date("ymdHis").substr($_FILES["pic10"]["name"],strrpos($_FILES["pic10"]["name"],'.'));
					copy( $_FILES["pic10"]['tmp_name'], Upload_Path.$data['pic10'] );
				}

				if($_POST['del_pic11'] == "Y")
					$data['pic11'] = '';

				if($_FILES["pic11"]["name"] != "" ){
					$data['pic11'] = "clothpic11-".date("ymdHis").substr($_FILES["pic11"]["name"],strrpos($_FILES["pic11"]["name"],'.'));
					copy( $_FILES["pic11"]['tmp_name'], Upload_Path.$data['pic11'] );
				}

				if($_POST['del_pic12'] == "Y")
					$data['pic12'] = '';

				if($_FILES["pic12"]["name"] != "" ){
					$data['pic12'] = "clothpic12-".date("ymdHis").substr($_FILES["pic12"]["name"],strrpos($_FILES["pic12"]["name"],'.'));
					copy( $_FILES["pic12"]['tmp_name'], Upload_Path.$data['pic12'] );
				}

				if($_POST['del_pic13'] == "Y")
					$data['pic13'] = '';

				if($_FILES["pic13"]["name"] != "" ){
					$data['pic13'] = "clothpic13-".date("ymdHis").substr($_FILES["pic13"]["name"],strrpos($_FILES["pic13"]["name"],'.'));
					copy( $_FILES["pic13"]['tmp_name'], Upload_Path.$data['pic13'] );
				}

				if($_POST['del_pic14'] == "Y")
					$data['pic14'] = '';

				if($_FILES["pic14"]["name"] != "" ){
					$data['pic14'] = "clothpic14-".date("ymdHis").substr($_FILES["pic14"]["name"],strrpos($_FILES["pic14"]["name"],'.'));
					copy( $_FILES["pic14"]['tmp_name'], Upload_Path.$data['pic14'] );
				}

				if($_POST['del_pic15'] == "Y")
					$data['pic15'] = '';

				if($_FILES["pic15"]["name"] != "" ){
					$data['pic15'] = "clothpic15-".date("ymdHis").substr($_FILES["pic15"]["name"],strrpos($_FILES["pic15"]["name"],'.'));
					copy( $_FILES["pic15"]['tmp_name'], Upload_Path.$data['pic15'] );
				}

				if($_POST['del_pic16'] == "Y")
					$data['pic16'] = '';

				if($_FILES["pic16"]["name"] != "" ){
					$data['pic16'] = "clothpic16-".date("ymdHis").substr($_FILES["pic16"]["name"],strrpos($_FILES["pic16"]["name"],'.'));
					copy( $_FILES["pic16"]['tmp_name'], Upload_Path.$data['pic16'] );
				}

				if($_POST['del_pic17'] == "Y")
					$data['pic17'] = '';

				if($_FILES["pic17"]["name"] != "" ){
					$data['pic17'] = "clothpic17-".date("ymdHis").substr($_FILES["pic17"]["name"],strrpos($_FILES["pic17"]["name"],'.'));
					copy( $_FILES["pic17"]['tmp_name'], Upload_Path.$data['pic17'] );
				}

				if($_POST['del_pic18'] == "Y")
					$data['pic18'] = '';

				if($_FILES["pic18"]["name"] != "" ){
					$data['pic18'] = "clothpic18-".date("ymdHis").substr($_FILES["pic18"]["name"],strrpos($_FILES["pic18"]["name"],'.'));
					copy( $_FILES["pic18"]['tmp_name'], Upload_Path.$data['pic18'] );
				}

				if($_POST['del_pic19'] == "Y")
					$data['pic19'] = '';

				if($_FILES["pic19"]["name"] != "" ){
					$data['pic19'] = "clothpic19-".date("ymdHis").substr($_FILES["pic19"]["name"],strrpos($_FILES["pic19"]["name"],'.'));
					copy( $_FILES["pic19"]['tmp_name'], Upload_Path.$data['pic19'] );
				}

				if($_POST['del_pic20'] == "Y")
					$data['pic20'] = '';

				if($_FILES["pic20"]["name"] != "" ){
					$data['pic20'] = "clothpic20-".date("ymdHis").substr($_FILES["pic20"]["name"],strrpos($_FILES["pic20"]["name"],'.'));
					copy( $_FILES["pic20"]['tmp_name'], Upload_Path.$data['pic20'] );
				}

				if($_POST['del_pic21'] == "Y")
					$data['pic21'] = '';

				if($_FILES["pic21"]["name"] != "" ){
					$data['pic21'] = "clothpic21-".date("ymdHis").substr($_FILES["pic21"]["name"],strrpos($_FILES["pic21"]["name"],'.'));
					copy( $_FILES["pic21"]['tmp_name'], Upload_Path.$data['pic21'] );
				}

				if($_POST['del_pic22'] == "Y")
					$data['pic22'] = '';

				if($_FILES["pic22"]["name"] != "" ){
					$data['pic22'] = "clothpic22-".date("ymdHis").substr($_FILES["pic22"]["name"],strrpos($_FILES["pic22"]["name"],'.'));
					copy( $_FILES["pic22"]['tmp_name'], Upload_Path.$data['pic22'] );
				}

				if($_POST['del_pic23'] == "Y")
					$data['pic23'] = '';

				if($_FILES["pic23"]["name"] != "" ){
					$data['pic23'] = "clothpic23-".date("ymdHis").substr($_FILES["pic23"]["name"],strrpos($_FILES["pic23"]["name"],'.'));
					copy( $_FILES["pic23"]['tmp_name'], Upload_Path.$data['pic23'] );
				}

				if($_POST['del_pic24'] == "Y")
					$data['pic24'] = '';

				if($_FILES["pic24"]["name"] != "" ){
					$data['pic24'] = "clothpic24-".date("ymdHis").substr($_FILES["pic24"]["name"],strrpos($_FILES["pic24"]["name"],'.'));
					copy( $_FILES["pic24"]['tmp_name'], Upload_Path.$data['pic24'] );
				}

				if($_POST['del_pic25'] == "Y")
					$data['pic25'] = '';

				if($_FILES["pic25"]["name"] != "" ){
					$data['pic25'] = "clothpic25-".date("ymdHis").substr($_FILES["pic25"]["name"],strrpos($_FILES["pic25"]["name"],'.'));
					copy( $_FILES["pic25"]['tmp_name'], Upload_Path.$data['pic25'] );
				}

				if($_POST['del_pic26'] == "Y")
					$data['pic26'] = '';

				if($_FILES["pic26"]["name"] != "" ){
					$data['pic26'] = "clothpic26-".date("ymdHis").substr($_FILES["pic26"]["name"],strrpos($_FILES["pic26"]["name"],'.'));
					copy( $_FILES["pic26"]['tmp_name'], Upload_Path.$data['pic26'] );
				}

				if($_POST['del_pic27'] == "Y")
					$data['pic27'] = '';

				if($_FILES["pic27"]["name"] != "" ){
					$data['pic27'] = "clothpic27-".date("ymdHis").substr($_FILES["pic27"]["name"],strrpos($_FILES["pic27"]["name"],'.'));
					copy( $_FILES["pic27"]['tmp_name'], Upload_Path.$data['pic27'] );
				}

				if($_POST['del_pic28'] == "Y")
					$data['pic28'] = '';

				if($_FILES["pic28"]["name"] != "" ){
					$data['pic28'] = "clothpic28-".date("ymdHis").substr($_FILES["pic28"]["name"],strrpos($_FILES["pic28"]["name"],'.'));
					copy( $_FILES["pic28"]['tmp_name'], Upload_Path.$data['pic28'] );
				}

				if($_POST['del_pic29'] == "Y")
					$data['pic29'] = '';

				if($_FILES["pic29"]["name"] != "" ){
					$data['pic29'] = "clothpic29-".date("ymdHis").substr($_FILES["pic29"]["name"],strrpos($_FILES["pic29"]["name"],'.'));
					copy( $_FILES["pic29"]['tmp_name'], Upload_Path.$data['pic29'] );
				}

				if($_POST['del_pic30'] == "Y")
					$data['pic30'] = '';

				if($_FILES["pic30"]["name"] != "" ){
					$data['pic30'] = "clothpic30-".date("ymdHis").substr($_FILES["pic30"]["name"],strrpos($_FILES["pic30"]["name"],'.'));
					copy( $_FILES["pic30"]['tmp_name'], Upload_Path.$data['pic30'] );
				}

				if($_POST['del_pic31'] == "Y")
					$data['pic31'] = '';

				if($_FILES["pic31"]["name"] != "" ){
					$data['pic31'] = "clothpic31-".date("ymdHis").substr($_FILES["pic31"]["name"],strrpos($_FILES["pic31"]["name"],'.'));
					copy( $_FILES["pic31"]['tmp_name'], Upload_Path.$data['pic31'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['type']      = $_POST['type'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['url4']      = $_POST['url4'];
				$data['url5']      = $_POST['url5'];
				$data['url6']      = $_POST['url6'];
				$data['url7']      = $_POST['url7'];
				$data['url8']      = $_POST['url8'];
				$data['url9']      = $_POST['url9'];
				$data['url10']      = $_POST['url10'];
				$data['url11']      = $_POST['url11'];
				$data['url12']      = $_POST['url12'];
				$data['url13']      = $_POST['url13'];
				$data['url14']      = $_POST['url14'];
				$data['url15']      = $_POST['url15'];
				$data['url16']      = $_POST['url16'];
				$data['url17']      = $_POST['url17'];
				$data['url18']      = $_POST['url18'];
				$data['url19']      = $_POST['url19'];
				$data['url20']      = $_POST['url20'];
				$data['url21']      = $_POST['url21'];
				$data['url22']      = $_POST['url22'];
				$data['url23']      = $_POST['url23'];
				$data['url24']      = $_POST['url24'];
				$data['url25']      = $_POST['url25'];
				$data['url26']      = $_POST['url26'];
				$data['url27']      = $_POST['url27'];
				$data['url28']      = $_POST['url28'];
				$data['url29']      = $_POST['url29'];
				$data['url30']      = $_POST['url30'];
				$data['url31']      = $_POST['url31'];
				$data['target']    = $_POST['target'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];
				$data['target4']   = $_POST['target4'];
				$data['target5']   = $_POST['target5'];
				$data['target6']   = $_POST['target6'];
				$data['target7']   = $_POST['target7'];
				$data['target8']   = $_POST['target8'];
				$data['target9']   = $_POST['target9'];
				$data['target10']   = $_POST['target10'];
				$data['target11']   = $_POST['target11'];
				$data['target12']   = $_POST['target12'];
				$data['target13']   = $_POST['target13'];
				$data['target14']   = $_POST['target14'];
				$data['target15']   = $_POST['target15'];
				$data['target16']   = $_POST['target16'];
				$data['target17']   = $_POST['target17'];
				$data['target18']   = $_POST['target18'];
				$data['target19']   = $_POST['target19'];
				$data['target20']   = $_POST['target20'];
				$data['target21']   = $_POST['target21'];
				$data['target22']   = $_POST['target22'];
				$data['target23']   = $_POST['target23'];
				$data['target24']   = $_POST['target24'];
				$data['target25']   = $_POST['target25'];
				$data['target26']   = $_POST['target26'];
				$data['target27']   = $_POST['target27'];
				$data['target28']   = $_POST['target28'];
				$data['target29']   = $_POST['target29'];
				$data['target30']   = $_POST['target30'];
				$data['target31']   = $_POST['target31'];
				$data['showup']    = $_POST['showup'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['slogan2']   = $_POST['slogan2'];
				$data['slogan3']   = $_POST['slogan3'];
				$data['slogan4']   = $_POST['slogan4'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "clothpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				if($_FILES["pic2"]["name"] != "" ){
					$data['pic2'] = "clothpic2-".date("ymdHis").substr($_FILES["pic2"]["name"],strrpos($_FILES["pic2"]["name"],'.'));
					copy( $_FILES["pic2"]['tmp_name'], Upload_Path.$data['pic2'] );
				}

				if($_FILES["pic3"]["name"] != "" ){
					$data['pic3'] = "clothpic3-".date("ymdHis").substr($_FILES["pic3"]["name"],strrpos($_FILES["pic3"]["name"],'.'));
					copy( $_FILES["pic3"]['tmp_name'], Upload_Path.$data['pic3'] );
				}

				if($_FILES["pic4"]["name"] != "" ){
					$data['pic4'] = "clothpic4-".date("ymdHis").substr($_FILES["pic4"]["name"],strrpos($_FILES["pic4"]["name"],'.'));
					copy( $_FILES["pic4"]['tmp_name'], Upload_Path.$data['pic4'] );
				}

				if($_FILES["pic5"]["name"] != "" ){
					$data['pic5'] = "clothpic5-".date("ymdHis").substr($_FILES["pic5"]["name"],strrpos($_FILES["pic5"]["name"],'.'));
					copy( $_FILES["pic5"]['tmp_name'], Upload_Path.$data['pic5'] );
				}

				if($_FILES["pic6"]["name"] != "" ){
					$data['pic6'] = "clothpic6-".date("ymdHis").substr($_FILES["pic6"]["name"],strrpos($_FILES["pic6"]["name"],'.'));
					copy( $_FILES["pic6"]['tmp_name'], Upload_Path.$data['pic6'] );
				}

				if($_FILES["pic7"]["name"] != "" ){
					$data['pic7'] = "clothpic7-".date("ymdHis").substr($_FILES["pic7"]["name"],strrpos($_FILES["pic7"]["name"],'.'));
					copy( $_FILES["pic7"]['tmp_name'], Upload_Path.$data['pic7'] );
				}

				if($_FILES["pic8"]["name"] != "" ){
					$data['pic8'] = "clothpic8-".date("ymdHis").substr($_FILES["pic8"]["name"],strrpos($_FILES["pic8"]["name"],'.'));
					copy( $_FILES["pic8"]['tmp_name'], Upload_Path.$data['pic8'] );
				}

				if($_FILES["pic9"]["name"] != "" ){
					$data['pic9'] = "clothpic9-".date("ymdHis").substr($_FILES["pic9"]["name"],strrpos($_FILES["pic9"]["name"],'.'));
					copy( $_FILES["pic9"]['tmp_name'], Upload_Path.$data['pic9'] );
				}

				if($_FILES["pic10"]["name"] != "" ){
					$data['pic10'] = "clothpic10-".date("ymdHis").substr($_FILES["pic10"]["name"],strrpos($_FILES["pic10"]["name"],'.'));
					copy( $_FILES["pic10"]['tmp_name'], Upload_Path.$data['pic10'] );
				}

				if($_FILES["pic11"]["name"] != "" ){
					$data['pic11'] = "clothpic11-".date("ymdHis").substr($_FILES["pic11"]["name"],strrpos($_FILES["pic11"]["name"],'.'));
					copy( $_FILES["pic11"]['tmp_name'], Upload_Path.$data['pic11'] );
				}

				if($_FILES["pic12"]["name"] != "" ){
					$data['pic12'] = "clothpic12-".date("ymdHis").substr($_FILES["pic12"]["name"],strrpos($_FILES["pic12"]["name"],'.'));
					copy( $_FILES["pic12"]['tmp_name'], Upload_Path.$data['pic12'] );
				}

				if($_FILES["pic13"]["name"] != "" ){
					$data['pic13'] = "clothpic13-".date("ymdHis").substr($_FILES["pic13"]["name"],strrpos($_FILES["pic13"]["name"],'.'));
					copy( $_FILES["pic13"]['tmp_name'], Upload_Path.$data['pic13'] );
				}

				if($_FILES["pic14"]["name"] != "" ){
					$data['pic14'] = "clothpic14-".date("ymdHis").substr($_FILES["pic14"]["name"],strrpos($_FILES["pic14"]["name"],'.'));
					copy( $_FILES["pic14"]['tmp_name'], Upload_Path.$data['pic14'] );
				}

				if($_FILES["pic15"]["name"] != "" ){
					$data['pic15'] = "clothpic15-".date("ymdHis").substr($_FILES["pic15"]["name"],strrpos($_FILES["pic15"]["name"],'.'));
					copy( $_FILES["pic15"]['tmp_name'], Upload_Path.$data['pic15'] );
				}

				if($_FILES["pic16"]["name"] != "" ){
					$data['pic16'] = "clothpic16-".date("ymdHis").substr($_FILES["pic16"]["name"],strrpos($_FILES["pic16"]["name"],'.'));
					copy( $_FILES["pic16"]['tmp_name'], Upload_Path.$data['pic16'] );
				}

				if($_FILES["pic17"]["name"] != "" ){
					$data['pic17'] = "clothpic17-".date("ymdHis").substr($_FILES["pic17"]["name"],strrpos($_FILES["pic17"]["name"],'.'));
					copy( $_FILES["pic17"]['tmp_name'], Upload_Path.$data['pic17'] );
				}

				if($_FILES["pic18"]["name"] != "" ){
					$data['pic18'] = "clothpic18-".date("ymdHis").substr($_FILES["pic18"]["name"],strrpos($_FILES["pic18"]["name"],'.'));
					copy( $_FILES["pic18"]['tmp_name'], Upload_Path.$data['pic18'] );
				}

				if($_FILES["pic19"]["name"] != "" ){
					$data['pic19'] = "clothpic19-".date("ymdHis").substr($_FILES["pic19"]["name"],strrpos($_FILES["pic19"]["name"],'.'));
					copy( $_FILES["pic19"]['tmp_name'], Upload_Path.$data['pic19'] );
				}

				if($_FILES["pic20"]["name"] != "" ){
					$data['pic20'] = "clothpic20-".date("ymdHis").substr($_FILES["pic20"]["name"],strrpos($_FILES["pic20"]["name"],'.'));
					copy( $_FILES["pic20"]['tmp_name'], Upload_Path.$data['pic20'] );
				}

				if($_FILES["pic21"]["name"] != "" ){
					$data['pic21'] = "clothpic21-".date("ymdHis").substr($_FILES["pic21"]["name"],strrpos($_FILES["pic21"]["name"],'.'));
					copy( $_FILES["pic21"]['tmp_name'], Upload_Path.$data['pic21'] );
				}

				if($_FILES["pic22"]["name"] != "" ){
					$data['pic22'] = "clothpic22-".date("ymdHis").substr($_FILES["pic22"]["name"],strrpos($_FILES["pic22"]["name"],'.'));
					copy( $_FILES["pic22"]['tmp_name'], Upload_Path.$data['pic22'] );
				}

				if($_FILES["pic23"]["name"] != "" ){
					$data['pic23'] = "clothpic23-".date("ymdHis").substr($_FILES["pic23"]["name"],strrpos($_FILES["pic23"]["name"],'.'));
					copy( $_FILES["pic23"]['tmp_name'], Upload_Path.$data['pic23'] );
				}

				if($_FILES["pic24"]["name"] != "" ){
					$data['pic24'] = "clothpic24-".date("ymdHis").substr($_FILES["pic24"]["name"],strrpos($_FILES["pic24"]["name"],'.'));
					copy( $_FILES["pic24"]['tmp_name'], Upload_Path.$data['pic24'] );
				}

				if($_FILES["pic25"]["name"] != "" ){
					$data['pic25'] = "clothpic25-".date("ymdHis").substr($_FILES["pic25"]["name"],strrpos($_FILES["pic25"]["name"],'.'));
					copy( $_FILES["pic25"]['tmp_name'], Upload_Path.$data['pic25'] );
				}

				if($_FILES["pic26"]["name"] != "" ){
					$data['pic26'] = "clothpic26-".date("ymdHis").substr($_FILES["pic26"]["name"],strrpos($_FILES["pic26"]["name"],'.'));
					copy( $_FILES["pic26"]['tmp_name'], Upload_Path.$data['pic26'] );
				}

				if($_FILES["pic27"]["name"] != "" ){
					$data['pic27'] = "clothpic27-".date("ymdHis").substr($_FILES["pic27"]["name"],strrpos($_FILES["pic27"]["name"],'.'));
					copy( $_FILES["pic27"]['tmp_name'], Upload_Path.$data['pic27'] );
				}

				if($_FILES["pic28"]["name"] != "" ){
					$data['pic28'] = "clothpic28-".date("ymdHis").substr($_FILES["pic28"]["name"],strrpos($_FILES["pic28"]["name"],'.'));
					copy( $_FILES["pic28"]['tmp_name'], Upload_Path.$data['pic28'] );
				}

				if($_FILES["pic29"]["name"] != "" ){
					$data['pic29'] = "clothpic29-".date("ymdHis").substr($_FILES["pic29"]["name"],strrpos($_FILES["pic29"]["name"],'.'));
					copy( $_FILES["pic29"]['tmp_name'], Upload_Path.$data['pic29'] );
				}

				if($_FILES["pic30"]["name"] != "" ){
					$data['pic30'] = "clothpic30-".date("ymdHis").substr($_FILES["pic30"]["name"],strrpos($_FILES["pic30"]["name"],'.'));
					copy( $_FILES["pic30"]['tmp_name'], Upload_Path.$data['pic30'] );
				}

				if($_FILES["pic31"]["name"] != "" ){
					$data['pic31'] = "clothpic31-".date("ymdHis").substr($_FILES["pic31"]["name"],strrpos($_FILES["pic31"]["name"],'.'));
					copy( $_FILES["pic31"]['tmp_name'], Upload_Path.$data['pic31'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_CLOTH_SHOW($_date){

			global $g_db;

			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' and `config` = 'Y' ORDER BY `serno` desc LIMIT 1";
			$ConfigData = $g_db->getRow( $sqlstr );

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '1' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data1 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '2' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data2 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '3' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data3 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '4' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data4 = $g_db->getRow( $sqlstr );

 			echo "            <div class=\"tabs\">\n";
 			echo "              <h3 onmouseover=\"changTab(this)\">".$Data1['name']."</h3>\n";
 			echo "              <h3 onmouseover=\"changTab(this)\">".$Data2['name']."</h3>\n";
 			echo "              <h3 onmouseover=\"changTab(this)\">".$Data3['name']."</h3>\n";
 			echo "              <h3 onmouseover=\"changTab(this)\">".$Data4['name']."</h3>\n";

			for($i = 1; $i <= 4; $i++){

				$NowData = "Data".$i;

				if(${$NowData}['type'] == "week"){

		 			echo "              <div>\n";
		 			echo "                <div class=\"white_slide\">\n";
		 			echo "                  <div class=\"tabs\">\n";
		 			echo "                    <h3 onmouseover=\"changTab(this)\">週一</h3>\n";
		 			echo "                    <h3 onmouseover=\"changTab(this)\">週二</h3>\n";
		 			echo "                    <h3 onmouseover=\"changTab(this)\">週三</h3>\n";
		 			echo "                    <h3 onmouseover=\"changTab(this)\">週四</h3>\n";
		 			echo "                    <h3 onmouseover=\"changTab(this)\">週五</h3>\n";
		 			echo "                    <h3 onmouseover=\"changTab(this)\">週六</h3>\n";
		 			echo "                    <h3 onmouseover=\"changTab(this)\">週日</h3>\n";
		 			echo "                    <div>\n";
		 			echo "                      <table cellspacing=\"2\" cellpadding=\"0\" width=\"100%\">\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic4'] != "" ? ${$NowData}['pic4'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic5'] != "" ? ${$NowData}['pic5'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic6'] != "" ? ${$NowData}['pic6'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic7'] != "" ? ${$NowData}['pic7'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                        </tr>\n";
		 			echo "                      </table>\n";
		 			echo "                    </div>\n";
		 			echo "                    <div>\n";
		 			echo "                      <table cellspacing=\"2\" cellpadding=\"0\" width=\"100%\">\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic8'] != "" ? ${$NowData}['pic8'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic9'] != "" ? ${$NowData}['pic9'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic10'] != "" ? ${$NowData}['pic10'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic11'] != "" ? ${$NowData}['pic11'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                        </tr>\n";
		 			echo "                      </table>\n";
		 			echo "                    </div>\n";
		 			echo "                    <div>\n";
		 			echo "                      <table cellspacing=\"2\" cellpadding=\"0\" width=\"100%\">\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic12'] != "" ? ${$NowData}['pic12'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic13'] != "" ? ${$NowData}['pic13'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic14'] != "" ? ${$NowData}['pic14'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic15'] != "" ? ${$NowData}['pic15'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                        </tr>\n";
		 			echo "                      </table>\n";
		 			echo "                    </div>\n";
		 			echo "                    <div>\n";
		 			echo "                      <table cellspacing=\"2\" cellpadding=\"0\" width=\"100%\">\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic16'] != "" ? ${$NowData}['pic16'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic17'] != "" ? ${$NowData}['pic17'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic18'] != "" ? ${$NowData}['pic18'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic19'] != "" ? ${$NowData}['pic19'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                        </tr>\n";
		 			echo "                      </table>\n";
		 			echo "                    </div>\n";
		 			echo "                    <div>\n";
		 			echo "                      <table cellspacing=\"2\" cellpadding=\"0\" width=\"100%\">\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic20'] != "" ? ${$NowData}['pic20'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic21'] != "" ? ${$NowData}['pic21'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic22'] != "" ? ${$NowData}['pic22'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic23'] != "" ? ${$NowData}['pic23'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                        </tr>\n";
		 			echo "                      </table>\n";
		 			echo "                    </div>\n";
		 			echo "                    <div>\n";
		 			echo "                      <table cellspacing=\"2\" cellpadding=\"0\" width=\"100%\">\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic24'] != "" ? ${$NowData}['pic24'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic25'] != "" ? ${$NowData}['pic25'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic26'] != "" ? ${$NowData}['pic26'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic27'] != "" ? ${$NowData}['pic27'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                        </tr>\n";
		 			echo "                      </table>\n";
		 			echo "                    </div>\n";
		 			echo "                    <div>\n";
		 			echo "                      <table cellspacing=\"2\" cellpadding=\"0\" width=\"100%\">\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic28'] != "" ? ${$NowData}['pic28'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic29'] != "" ? ${$NowData}['pic29'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic30'] != "" ? ${$NowData}['pic30'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                          <td><a href=\"#\"><img src=\"".Upload_Url.(${$NowData}['pic31'] != "" ? ${$NowData}['pic31'] : "default/default_145_175.jpg")."\" width=\"135\" height=\"150\" /></a></td>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                          <td><a href=\"#\">產品名</a></td>\n";
		 			echo "                        </tr>\n";
		 			echo "                      </table>\n";
		 			echo "                    </div>\n";
		 			echo "                  </div>\n";
		 			echo "                </div>\n";
		 			echo "              </div>\n";




				}else{


					//抓取商品資料
					$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid1']."'";
					$ProdData1 = $g_db->getRow($sqlstr);
					$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid2']."'";
					$ProdData2 = $g_db->getRow($sqlstr);

	 				echo "              <div>\n";
	 				echo "                <table cellspacing=\"0\" cellpadding=\"0\" class=\"mall_main_slide\">\n";
	 				echo "                  <tr>\n";
	 				echo "                    <td rowspan=\"2\" class=\"mall_main_slide_bigimg\"><a href=\"".${$NowData}['url']."\" target=\"".${$NowData}['target']."\"><img src=\"".Upload_Url.(${$NowData}['pic1'] != "" ? ${$NowData}['pic1'] : "default/default_300_190.jpg")."\" width=\"300\" height=\"190\" /></a></td>\n";
	 				echo "                    <td colspan=\"2\" class=\"mall_main_slide_bigimg_txt\">\n";
	 				echo "                      <dl>\n";
	 				echo "                        <dt><a href=\"".${$NowData}['url']."\" target=\"".${$NowData}['target']."\" class=\"blue_big\">".${$NowData}['slogan1']."</a></dt>\n";
	 				echo "                        <dd class=\"gray_small\">".${$NowData}['slogan2']."<a href=\"".${$NowData}['url']."\" target=\"".${$NowData}['target']."\">詳情</a></dd>\n";
	 				echo "                      </dl>\n";
	 				echo "                    </td>\n";
	 				echo "                  </tr>\n";
	 				echo "                  <tr>\n";
	 				echo "                    <td class=\"mall_main_slide_small\">\n";
	 				echo "                      <dl>\n";
	 				echo "                        <dd><a href=\"pro_info.php?id=".${$NowData}['pid1']."\"><img alt=\"" . $ProdData1['name'] . "\" title=\"" . $ProdData1['name'] . "\" src=\"".(Upload_Url.($ProdData1['prod_pic'] != "" ? $ProdData1['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"85\" height=\"85\" /></a></dd>\n";
	 				echo "                        <dt class=\"blue_small\"><a href=\"pro_info.php?id=".${$NowData}['pid1']."\">".${$NowData}['slogan3']."</a></dt>\n";
	 				echo "                      </dl>\n";
	 				echo "                    </td>\n";
	 				echo "                    <td class=\"mall_main_slide_small\">\n";
	 				echo "                      <dl>\n";
	 				echo "                        <dd><a href=\"pro_info.php?id=".${$NowData}['pid2']."\"><img alt=\"" . $ProdData2['name'] . "\" title=\"" . $ProdData2['name'] . "\" src=\"".(Upload_Url.($ProdData2['prod_pic'] != "" ? $ProdData2['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"85\" height=\"85\" /></a></dd>\n";
	 				echo "                        <dt class=\"blue_small\"><a href=\"pro_info.php?id=".${$NowData}['pid2']."\">".${$NowData}['slogan4']."</a></dt>\n";
	 				echo "                      </dl>\n";
	 				echo "                    </td>\n";
	 				echo "                  </tr>\n";
	 				echo "                </table>\n";
	 				echo "              </div>\n";

				}

 			}

 			echo "            </div>\n";

		}

		/////FLASH_SHOW/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_FLASH_SHOW($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' ORDER BY `order`,`startdate` desc,`serno` Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );
			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <br><center>\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置一\" onclick=\"location.href='".$_url."?flag=settag&tag=1';\" ".($_tag == 1 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置二\" onclick=\"location.href='".$_url."?flag=settag&tag=2';\" ".($_tag == 2 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置三\" onclick=\"location.href='".$_url."?flag=settag&tag=3';\" ".($_tag == 3 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置四\" onclick=\"location.href='".$_url."?flag=settag&tag=4';\" ".($_tag == 4 ? "disabled" : "").">\n";
			$ListCotent .=  "      </center>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"60\">位置</th>\n";
			$ListCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				switch($DataList[$i]['tag']){
					case 1:
						$TagName = "位置一";
						break;
					case 2:
						$TagName = "位置二";
						break;
					case 3:
						$TagName = "位置三";
						break;
					case 4:
						$TagName = "位置四";
						break;
					default:
						$TagName = "位置一";
						break;						
				}

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($pageno * $this->pageshownum + $i + 1)."</td>\n";
				$ListCotent .=  "          <td>".$TagName."</td>\n";
				$ListCotent .=  "          <td>".($DataList[$i]['pic1'] != "" ? "<a href=\"".Upload_Url.$DataList[$i]['pic1']."\" target=\"_blank\"><img " . ( $DataList['slogan1'] ? 'alt="' . $DataList['slogan1'] . '" title="' . $DataList['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$DataList[$i]['pic1']."\" width=\"240\" height=\"100\"></a>" : "")."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_FLASH_SHOW($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">位置</th>\n";
			$EditCotent .=  "          <td align=\"left\">\n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"1\" ".($Data['tag'] == 1 || ($Data == "" && $_tag == 1) ? "checked" : "" )." />位置一 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"2\" ".($Data['tag'] == 2 || ($Data == "" && $_tag == 2) ? "checked" : "" )." />位置二 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"3\" ".($Data['tag'] == 3 || ($Data == "" && $_tag == 3) ? "checked" : "" )." />位置三 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"4\" ".($Data['tag'] == 4 || ($Data == "" && $_tag == 4) ? "checked" : "" )." />位置四 &nbsp; \n";
			$EditCotent .=  "          </td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">主標題</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">次標題</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan1\" type=\"text\" value=\"".$Data['slogan1']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic1'] != "" ? "<a href=\"".Upload_Url.$Data['pic1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"300\" height=\"120\"></a><br>" : "")."<input name=\"pic1\" type=\"file\" size=\"20\" />".($Data['pic1'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 600px × 240px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";

			return $EditCotent;

		}

		function EditSave_FLASH_SHOW(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['name']      = $_POST['name'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "pdshow-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['name']      = $_POST['name'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "pdshow-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_FLASH_SHOW($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '1' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data1 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '2' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data2 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '3' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data3 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '4' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data4 = $g_db->getRow( $sqlstr );

	 		echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
	 		echo "<main delay_time = \"6\">\n";

			if($Data1['serno'] != ""){

	 			echo "	<slideshow>\n";
	 			echo "		<imgurl>".Upload_Url.$Data1['pic1']."</imgurl>\n";
	 			echo "    	<linkurl>".($Data1['url'] != "" ? $Data1['url'] : "#" )."</linkurl>\n";
	 			echo "    	<title>".$Data1['name']."</title>\n";
	 			echo "    	<urltarget>_top</urltarget>\n";
	 			echo "    	<word>\n";
	 			echo "			<![CDATA[".$Data1['slogan1']."]]>\n";
	 			echo "		</word>        \n";
	 			echo "	</slideshow>\n";

	 		}

			if($Data2['serno'] != ""){

	 			echo "	<slideshow>\n";
	 			echo "		<imgurl>".Upload_Url.$Data2['pic1']."</imgurl>\n";
	 			echo "    	<linkurl>".($Data2['url'] != "" ? $Data2['url'] : "#" )."</linkurl>\n";
	 			echo "    	<title>".$Data2['name']."</title>\n";
	 			echo "    	<urltarget>_top</urltarget>\n";
	 			echo "    	<word>\n";
	 			echo "			<![CDATA[".$Data2['slogan1']."]]>\n";
	 			echo "		</word>        \n";
	 			echo "	</slideshow>\n";

	 		}

			if($Data3['serno'] != ""){

	 			echo "	<slideshow>\n";
	 			echo "		<imgurl>".Upload_Url.$Data3['pic1']."</imgurl>\n";
	 			echo "    	<linkurl>".($Data3['url'] != "" ? $Data3['url'] : "#" )."</linkurl>\n";
	 			echo "    	<title>".$Data3['name']."</title>\n";
	 			echo "    	<urltarget>_top</urltarget>\n";
	 			echo "    	<word>\n";
	 			echo "			<![CDATA[".$Data3['slogan1']."]]>\n";
	 			echo "		</word>        \n";
	 			echo "	</slideshow>\n";

	 		}

			if($Data4['serno'] != ""){

	 			echo "	<slideshow>\n";
	 			echo "		<imgurl>".Upload_Url.$Data4['pic1']."</imgurl>\n";
	 			echo "    	<linkurl>".($Data4['url'] != "" ? $Data4['url'] : "#" )."</linkurl>\n";
	 			echo "    	<title>".$Data4['name']."</title>\n";
	 			echo "    	<urltarget>_top</urltarget>\n";
	 			echo "    	<word>\n";
	 			echo "			<![CDATA[".$Data4['slogan1']."]]>\n";
	 			echo "		</word>        \n";
	 			echo "	</slideshow>\n";

	 		}

	 		echo "</main>\n";

		}

		/////TEXT_SHOW/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_TEXT_SHOW($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' ORDER BY `order`,`startdate` desc,`serno` Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );
			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\">內容</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($pageno * $this->pageshownum + $i + 1)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_TEXT_SHOW($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_TEXT_SHOW(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_TEXT_SHOW($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() LIMIT 1";
			$Data = $g_db->getRow( $sqlstr );

			echo "          	<a href=\"".($Data['url'] != "" ? $Data['url'] : "#" )."\" target=\"".$Data['target']."\">".$Data['name']."</a>\n";

		}

		/////FUN_SHOW/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_FUN_SHOW($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select *,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid1`) pid1name FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' ORDER BY `order`,`startdate` desc,`serno` Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );
			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">排序</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($pageno * $this->pageshownum + $i + 1)."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['pid1name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['order']."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_FUN_SHOW($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan1\" type=\"text\" value=\"".$Data['slogan1']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid1\" id=\"pid1\" value=\"".$Data['pid1']."\"><input name=\"pid1name\" id=\"pid1name\" type=\"text\" value=\"".htmlspecialchars($Data['pid1name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid1');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid1').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid1').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"50\" /> 開啟方式：<select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">排序</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"order\" type=\"text\" value=\"".($Data != "" ? $Data['order'] : 99)."\" size=\"1\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_FUN_SHOW(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['pid1']      = $_POST['pid1'];
				$data['order']     = $_POST['order'];
				$data['showup']    = $_POST['showup'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['pid1']      = $_POST['pid1'];
				$data['order']     = $_POST['order'];
				$data['showup']    = $_POST['showup'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_FUN_SHOW($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY `order`,`serno`";
			$DataList = $g_db->getAll( $sqlstr );

			echo "                  <ul class=\"kutu_ul clearfix\">\n";

			if(sizeof($DataList) < 1){

	 			echo "                    <li>\n";
	 			echo "                      <table cellspacing=\"0\" cellpadding=\"0\" class=\"pro_slide_show_table\">\n";
	 			echo "                        <tr>\n";
	 			echo "                          <th scope=\"col\" class=\"pro_slide_show_img\"><a href=\"#\"><img src=\"".Upload_Url."default/default_80_80.jpg"."\" width=\"80\" height=\"80\" /></a></th>\n";
	 			echo "                        </tr>\n";
	 			echo "                        <tr>\n";
	 			echo "                          <td><span class=\"slogan_orange\"><a href=\"#\">標語</a></span></td>\n";
	 			echo "                        </tr>\n";
	 			echo "                        <tr>\n";
	 			echo "                          <td class=\"pro_slide_show_title\"><a href=\"#\">商品名稱</a></td>\n";
	 			echo "                        </tr>\n";
	 			echo "                        <tr>\n";
	 			echo "                          <td class=\"pro_slide_show_price\">$<strong class=\"price_num\"><a href=\"#\">價格</a></strong><span class=\"slogan_buynow\"><a href=\"#\">搶購</a></span></td>\n";
	 			echo "                        </tr>\n";
	 			echo "                      </table>\n";
	 			echo "                    </li>\n";

			}else{

				for($i = 0; $i < sizeof($DataList); $i++){

					//抓取商品資料
					$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".$DataList[$i]['pid1']."'";
					$ProdData = $g_db->getRow($sqlstr);

		 			echo "                    <li>\n";
		 			echo "                      <table cellspacing=\"0\" cellpadding=\"0\" class=\"pro_slide_show_table\">\n";
		 			echo "                        <tr>\n";
		 			echo "                          <th scope=\"col\" class=\"pro_slide_show_img\"><a href=\"".($DataList[$i]['url']!=""?$DataList[$i]['url']:"#")."\" target=\"".$DataList[$i]['target']."\"><img alt=\"" . $ProdData['name'] . "\" title=\"" . $ProdData['name'] . "\" src=\"".(Upload_Url.($ProdData['prod_pic'] != "" ? $ProdData['prod_pic'] : "default/default_80_80.jpg"))."\" width=\"80\" height=\"80\" /></a></th>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td><span class=\"slogan_orange\"><a href=\"".($DataList[$i]['url']!=""?$DataList[$i]['url']:"#")."\" target=\"".$DataList[$i]['target']."\">".$DataList[$i]['slogan1']."</a></span></td>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td class=\"pro_slide_show_title\"><a href=\"".($DataList[$i]['url']!=""?$DataList[$i]['url']:"#")."\" target=\"".$DataList[$i]['target']."\">".$ProdData['name']."</a></td>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td class=\"pro_slide_show_price\">$<strong class=\"price_num_16px\"><a href=\"".($DataList[$i]['url']!=""?$DataList[$i]['url']:"#")."\" target=\"".$DataList[$i]['target']."\">".$ProdData['price']."</a></strong><span class=\"slogan_buynow\"><a href=\"".($DataList[$i]['url']!=""?$DataList[$i]['url']:"#")."\" target=\"".$DataList[$i]['target']."\">搶購</a></span></td>\n";
		 			echo "                        </tr>\n";
		 			echo "                      </table>\n";
		 			echo "                    </li>\n";

				}

			}

			echo "                  </ul>\n";

		}

		/////FUN_SHOW2/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_FUN_SHOW2($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' ORDER BY `startdate` desc,`serno` desc Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <br><center>\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置一\" onclick=\"location.href='".$_url."?flag=settag&tag=1';\" ".($_tag == 1 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置二\" onclick=\"location.href='".$_url."?flag=settag&tag=2';\" ".($_tag == 2 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置三\" onclick=\"location.href='".$_url."?flag=settag&tag=3';\" ".($_tag == 3 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置四\" onclick=\"location.href='".$_url."?flag=settag&tag=4';\" ".($_tag == 4 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置五\" onclick=\"location.href='".$_url."?flag=settag&tag=5';\" ".($_tag == 5 ? "disabled" : "").">\n";
			$ListCotent .=  "      </center>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"60\">位置</th>\n";
			$ListCotent .=  "          <th scope=\"col\">標籤名稱</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				switch($DataList[$i]['tag']){
					case 1:
						$TagName = "位置一";
						break;
					case 2:
						$TagName = "位置二";
						break;
					case 3:
						$TagName = "位置三";
						break;
					case 4:
						$TagName = "位置四";
						break;
					case 5:
						$TagName = "位置五";
						break;
					default:
						$TagName = "位置一";
						break;						
				}

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				$ListCotent .=  "          <td>".$TagName."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";

			return $ListCotent;

		}

		function EditPage_FUN_SHOW2($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select *,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid1`) pid1name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid2`) pid2name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid3`) pid3name FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">位置</th>\n";
			$EditCotent .=  "          <td align=\"left\">\n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"1\" ".($Data['tag'] == 1 || ($Data == "" && $_tag == 1) ? "checked" : "" )." />位置一 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"2\" ".($Data['tag'] == 2 || ($Data == "" && $_tag == 2) ? "checked" : "" )." />位置二 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"3\" ".($Data['tag'] == 3 || ($Data == "" && $_tag == 3) ? "checked" : "" )." />位置三 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"4\" ".($Data['tag'] == 4 || ($Data == "" && $_tag == 4) ? "checked" : "" )." />位置四 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"5\" ".($Data['tag'] == 5 || ($Data == "" && $_tag == 5) ? "checked" : "" )." />位置五 &nbsp; \n";
			$EditCotent .=  "          </td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標籤名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <td colspan=\"2\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" colspan=\"2\">上層</th>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">圖片(左)</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic1'] != "" ? "<a href=\"".Upload_Url.$Data['pic1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"240\" height=\"210\"></a><br>" : "")."<input name=\"pic1\" type=\"file\" size=\"20\" />".($Data['pic1'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 240px × 210px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址(左)</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式(左)</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <td colspan=\"2\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">圖片(中)</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic2'] != "" ? "<a href=\"".Upload_Url.$Data['pic2']."\" target=\"_blank\"><img " . ( $Data['slogan2'] ? 'alt="' . $Data['slogan2'] . '" title="' . $Data['slogan2'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic2']."\" width=\"240\" height=\"210\"></a><br>" : "")."<input name=\"pic2\" type=\"file\" size=\"20\" />".($Data['pic2'] != "" ? " <input type=\"checkbox\" name=\"del_pic2\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 240px × 210px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址(中)</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url2\" type=\"text\" value=\"".$Data['url2']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式(中)</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target2\"><option value=\"_self\" ".($Data['target2'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target2'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <td colspan=\"2\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">圖片(右)</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic3'] != "" ? "<a href=\"".Upload_Url.$Data['pic3']."\" target=\"_blank\"><img " . ( $Data['slogan3'] ? 'alt="' . $Data['slogan3'] . '" title="' . $Data['slogan3'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic3']."\" width=\"240\" height=\"210\"></a><br>" : "")."<input name=\"pic3\" type=\"file\" size=\"20\" />".($Data['pic3'] != "" ? " <input type=\"checkbox\" name=\"del_pic3\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 240px × 210px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址(右)</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url3\" type=\"text\" value=\"".$Data['url3']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式(右)</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target3\"><option value=\"_self\" ".($Data['target3'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target3'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <td colspan=\"2\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" colspan=\"2\">下層</th>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語(左)</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan1\" type=\"text\" value=\"".$Data['slogan1']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品(左)</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid1\" id=\"pid1\" value=\"".$Data['pid1']."\"><input name=\"pid1name\" id=\"pid1name\" type=\"text\" value=\"".htmlspecialchars($Data['pid1name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid1');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid1').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid1').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址(左)</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url4\" type=\"text\" value=\"".$Data['url4']."\" size=\"50\" /> 開啟方式：<select name=\"target4\"><option value=\"_self\" ".($Data['target4'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target4'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <td colspan=\"2\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語(中)</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan2\" type=\"text\" value=\"".$Data['slogan2']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品(中)</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid2\" id=\"pid2\" value=\"".$Data['pid2']."\"><input name=\"pid2name\" id=\"pid2name\" type=\"text\" value=\"".htmlspecialchars($Data['pid2name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid2');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid2').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid2').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址(中)</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url5\" type=\"text\" value=\"".$Data['url5']."\" size=\"50\" /> 開啟方式：<select name=\"target5\"><option value=\"_self\" ".($Data['target5'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target5'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <td colspan=\"2\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標語(右)</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"slogan3\" type=\"text\" value=\"".$Data['slogan3']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品(右)</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid3\" id=\"pid3\" value=\"".$Data['pid3']."\"><input name=\"pid3name\" id=\"pid3name\" type=\"text\" value=\"".htmlspecialchars($Data['pid3name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid3');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid3').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid3').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址(右)</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url6\" type=\"text\" value=\"".$Data['url6']."\" size=\"50\" /> 開啟方式：<select name=\"target6\"><option value=\"_self\" ".($Data['target6'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target6'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_FUN_SHOW2(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['target']    = $_POST['target'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];
				$data['showup']    = $_POST['showup'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['slogan2']   = $_POST['slogan2'];
				$data['slogan3']   = $_POST['slogan3'];
				$data['pid1']      = $_POST['pid1'];
				$data['pid2']      = $_POST['pid2'];
				$data['pid3']      = $_POST['pid3'];
				$data['url4']      = $_POST['url4'];
				$data['url5']      = $_POST['url5'];
				$data['url6']      = $_POST['url6'];
				$data['target4']   = $_POST['target4'];
				$data['target5']   = $_POST['target5'];
				$data['target6']   = $_POST['target6'];
				
				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "funpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				if($_POST['del_pic2'] == "Y")
					$data['pic2'] = '';

				if($_FILES["pic2"]["name"] != "" ){
					$data['pic2'] = "funpic2-".date("ymdHis").substr($_FILES["pic2"]["name"],strrpos($_FILES["pic2"]["name"],'.'));
					copy( $_FILES["pic2"]['tmp_name'], Upload_Path.$data['pic2'] );
				}

				if($_POST['del_pic3'] == "Y")
					$data['pic3'] = '';

				if($_FILES["pic3"]["name"] != "" ){
					$data['pic3'] = "funpic3-".date("ymdHis").substr($_FILES["pic3"]["name"],strrpos($_FILES["pic3"]["name"],'.'));
					copy( $_FILES["pic3"]['tmp_name'], Upload_Path.$data['pic3'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['url2']      = $_POST['url2'];
				$data['url3']      = $_POST['url3'];
				$data['target']    = $_POST['target'];
				$data['target2']   = $_POST['target2'];
				$data['target3']   = $_POST['target3'];
				$data['showup']    = $_POST['showup'];
				$data['slogan1']   = $_POST['slogan1'];
				$data['slogan2']   = $_POST['slogan2'];
				$data['slogan3']   = $_POST['slogan3'];
				$data['pid1']      = $_POST['pid1'];
				$data['pid2']      = $_POST['pid2'];
				$data['pid3']      = $_POST['pid3'];
				$data['url4']      = $_POST['url4'];
				$data['url5']      = $_POST['url5'];
				$data['url6']      = $_POST['url6'];
				$data['target4']   = $_POST['target4'];
				$data['target5']   = $_POST['target5'];
				$data['target6']   = $_POST['target6'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "funpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				if($_FILES["pic2"]["name"] != "" ){
					$data['pic2'] = "funpic2-".date("ymdHis").substr($_FILES["pic2"]["name"],strrpos($_FILES["pic2"]["name"],'.'));
					copy( $_FILES["pic2"]['tmp_name'], Upload_Path.$data['pic2'] );
				}

				if($_FILES["pic3"]["name"] != "" ){
					$data['pic3'] = "funpic3-".date("ymdHis").substr($_FILES["pic3"]["name"],strrpos($_FILES["pic3"]["name"],'.'));
					copy( $_FILES["pic3"]['tmp_name'], Upload_Path.$data['pic3'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_FUN_SHOW2($_date){

			global $g_db;

			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' and `config` = 'Y' ORDER BY `serno` desc LIMIT 1";
			$ConfigData = $g_db->getRow( $sqlstr );

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '1' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data1 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '2' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data2 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '3' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data3 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '4' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data4 = $g_db->getRow( $sqlstr );
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '5' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			$Data5 = $g_db->getRow( $sqlstr );

	 		echo "          <div id=\"main_slide\">\n";
	 		echo "            <div class=\"tabs\">\n";
	 		echo "              <h3 onmouseover=\"changTab(this)\">".$Data1['name']."</h3>\n";
	 		echo "              <h3 onmouseover=\"changTab(this)\">".$Data2['name']."</h3>\n";
	 		echo "              <h3 onmouseover=\"changTab(this)\">".$Data3['name']."</h3>\n";
	 		echo "              <h3 onmouseover=\"changTab(this)\">".$Data4['name']."</h3>\n";
	 		echo "              <h3 onmouseover=\"changTab(this)\">".$Data5['name']."</h3>\n";

			for($i = 1; $i <= 5; $i++){

				$NowData = "Data".$i;

				//抓取商品資料
				$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid1']."'";
				$ProdData1 = $g_db->getRow($sqlstr);
				$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid2']."'";
				$ProdData2 = $g_db->getRow($sqlstr);
				$sqlstr = "SELECT `prodserno`,`name`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid3']."'";
				$ProdData3 = $g_db->getRow($sqlstr);

	 			echo "              <div>\n";
	 			echo "                <table cellspacing=\"0\" cellpadding=\"0\">\n";
	 			echo "                  <tr>\n";
	 			echo "                    <td>\n";
	 			echo "                      <table cellspacing=\"0\" cellpadding=\"0\" id=\"banner3_table\">\n";
	 			echo "                        <tr>\n";
	 			echo "                          <td colspan=\"2\" class=\"banner3_img_big\"><a href=\"".${$NowData}['url']."\" target=\"".${$NowData}['target']."\"><img src=\"".Upload_Url.(${$NowData}['pic1'] != "" ? ${$NowData}['pic1'] : "default/default_240_210.jpg")."\" width=\"240\" height=\"210\" /></a></td>\n";
	 			echo "                        </tr>\n";
	 			echo "                        <tr>\n";
	 			echo "                          <td class=\"banner3_img_small\"><a href=\"".(${$NowData}['url4']!=""?${$NowData}['url4']:"#")."\" target=\"".${$NowData}['target4']."\"><img alt=\"" . $ProdData1['name'] . "\" title=\"" . $ProdData1['name'] . "\" src=\"".(Upload_Url.($ProdData1['prod_pic'] != "" ? $ProdData1['prod_pic'] : "default/default_90_90.jpg"))."\" width=\"90\" height=\"90\" /></a></td>\n";
	 			echo "                          <td class=\"banner3_txt\">\n";
	 			echo "                            <p class=\"slogan_orange\"><a href=\"".(${$NowData}['url4']!=""?${$NowData}['url4']:"#")."\" target=\"".${$NowData}['target4']."\">".${$NowData}['slogan1']."</a></p>\n";
	 			echo "                            <p class=\"slide_5_pro_title\"><a href=\"".(${$NowData}['url4']!=""?${$NowData}['url4']:"#")."\" target=\"".${$NowData}['target4']."\">".$ProdData1['name']."</a></p>\n";
	 			echo "                            <p class=\"slide_5_pro_price\">$<strong class=\"price_num\"><a href=\"".(${$NowData}['url4']!=""?${$NowData}['url4']:"#")."\" target=\"".${$NowData}['target4']."\">".$ProdData1['price']."</a></strong><span class=\"slogan_buynow\"><a href=\"".(${$NowData}['url4']!=""?${$NowData}['url4']:"#")."\" target=\"".${$NowData}['target4']."\">搶購</a></span></p>\n";
	 			echo "                          </td>\n";
	 			echo "                        </tr>\n";
	 			echo "                      </table>\n";
	 			echo "                    </td>\n";
	 			echo "                    <td>\n";
	 			echo "                      <table cellspacing=\"0\" cellpadding=\"0\" id=\"banner3_table\">\n";
	 			echo "                        <tr>\n";
	 			echo "                          <td colspan=\"2\" class=\"banner3_img_big\"><a href=\"".${$NowData}['url2']."\" target=\"".${$NowData}['target2']."\"><img src=\"".Upload_Url.(${$NowData}['pic2'] != "" ? ${$NowData}['pic2'] : "default/default_240_210.jpg")."\" width=\"240\" height=\"210\" /></a></td>\n";
	 			echo "                        </tr>\n";
	 			echo "                        <tr>\n";
	 			echo "                          <td class=\"banner3_img_small\"><a href=\"pro_info.php?id=".${$NowData}['pid2']."\"><img alt=\"" . $ProdData2['name'] . "\" title=\"" . $ProdData2['name'] . "\" src=\"".(Upload_Url.($ProdData2['prod_pic'] != "" ? $ProdData2['prod_pic'] : "default/default_90_90.jpg"))."\" width=\"90\" height=\"90\" /></a></td>\n";
	 			echo "                          <td class=\"banner3_txt\">\n";
	 			echo "                            <p class=\"slogan_orange\"><a href=\"".(${$NowData}['url5']!=""?${$NowData}['url5']:"#")."\" target=\"".${$NowData}['target5']."\">".${$NowData}['slogan2']."</a></p>\n";
	 			echo "                            <p class=\"slide_5_pro_title\"><a href=\"".(${$NowData}['url5']!=""?${$NowData}['url5']:"#")."\" target=\"".${$NowData}['target5']."\">".$ProdData2['name']."</a></p>\n";
	 			echo "                            <p class=\"slide_5_pro_price\">$<strong class=\"price_num\"><a href=\"".(${$NowData}['url5']!=""?${$NowData}['url5']:"#")."\" target=\"".${$NowData}['target5']."\">".$ProdData2['price']."</a></strong><span class=\"slogan_buynow\"><a href=\"".(${$NowData}['url5']!=""?${$NowData}['url5']:"#")."\" target=\"".${$NowData}['target5']."\">搶購</a></span></p>\n";
	 			echo "                          </td>\n";
	 			echo "                        </tr>\n";
	 			echo "                      </table>\n";
	 			echo "                    </td>\n";
	 			echo "                    <td>\n";
	 			echo "                      <table cellspacing=\"0\" cellpadding=\"0\" id=\"banner3_table\">\n";
	 			echo "                        <tr>\n";
	 			echo "                          <td colspan=\"2\" class=\"banner3_img_big\"><a href=\"".${$NowData}['url3']."\" target=\"".${$NowData}['target3']."\"><img src=\"".Upload_Url.(${$NowData}['pic3'] != "" ? ${$NowData}['pic3'] : "default/default_240_210.jpg")."\" width=\"240\" height=\"210\" /></a></td>\n";
	 			echo "                        </tr>\n";
	 			echo "                        <tr>\n";
	 			echo "                          <td class=\"banner3_img_small\"><a href=\"".(${$NowData}['url6']!=""?${$NowData}['url6']:"#")."\" target=\"".${$NowData}['target6']."\"><img alt=\"" . $ProdData3['name'] . "\" title=\"" . $ProdData3['name'] . "\" src=\"".(Upload_Url.($ProdData3['prod_pic'] != "" ? $ProdData3['prod_pic'] : "default/default_90_90.jpg"))."\" width=\"90\" height=\"90\" /></a></td>\n";
	 			echo "                          <td class=\"banner3_txt\">\n";
	 			echo "                            <p class=\"slogan_orange\"><a href=\"".(${$NowData}['url6']!=""?${$NowData}['url6']:"#")."\" target=\"".${$NowData}['target6']."\">".${$NowData}['slogan3']."</a></p>\n";
	 			echo "                            <p class=\"slide_5_pro_title\"><a href=\"".(${$NowData}['url6']!=""?${$NowData}['url6']:"#")."\" target=\"".${$NowData}['target6']."\">".$ProdData3['name']."</a></p>\n";
	 			echo "                            <p class=\"slide_5_pro_price\">$<strong class=\"price_num\"><a href=\"".(${$NowData}['url6']!=""?${$NowData}['url6']:"#")."\" target=\"".${$NowData}['target6']."\">".$ProdData3['price']."</a></strong><span class=\"slogan_buynow\"><a href=\"".(${$NowData}['url6']!=""?${$NowData}['url6']:"#")."\" target=\"".${$NowData}['target6']."\">搶購</a></span></p>\n";
	 			echo "                          </td>\n";
	 			echo "                        </tr>\n";
	 			echo "                      </table>\n";
	 			echo "                    </td>\n";
	 			echo "                  </tr>\n";
	 			echo "                </table>\n";
	 			echo "              </div>\n";

			}

	 		echo "            </div>\n";
	 		echo "          </div><!--End of main_slide-->\n";

 		}

		/////STORE/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_STORE($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' ORDER BY `order`,`startdate` desc,`serno` Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );
			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"100\">圖片</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">排序</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($pageno * $this->pageshownum + $i + 1)."</td>\n";
				$ListCotent .=  "          <td>".($DataList[$i]['pic1'] != "" ? "<a href=\"".Upload_Url.$DataList[$i]['pic1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$DataList[$i]['pic1']."\" width=\"220\" height=\"70\"></a>" : "")."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['order']."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_STORE($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic1'] != "" ? "<a href=\"".Upload_Url.$Data['pic1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"325\" height=\"100\"></a><br>" : "")."<input name=\"pic1\" type=\"file\" size=\"20\" />".($Data['pic1'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 650px × 200px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">排序</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"order\" type=\"text\" value=\"".($Data != "" ? $Data['order'] : 99)."\" size=\"1\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_STORE(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['order']     = $_POST['order'];
				$data['showup']    = $_POST['showup'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "store-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['order']     = $_POST['order'];
				$data['showup']    = $_POST['showup'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "store-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_STORE($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY `order`,`serno`";
			$DataList = $g_db->getAll( $sqlstr );

	 		echo "              <ul class=\"store_list\">\n";

			for($i = 0; $i < sizeof($DataList); $i++){

	 			echo "                <li class=\"store_info\"><a href=\"".($DataList[$i]['url'] != "" ? $DataList[$i]['url'] : "#" )."\" target=\"".$DataList[$i]['target']."\" alt=\"".$DataList[$i]['name']."\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$DataList[$i]['pic1']."\" width=\"650\" height=\"200\"></a></li>\n";

			}

	 		echo "              </ul>\n";
		}

		/////INDEX_CLASS/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_INDEX_CLASS($_url,$_tag){

			global $g_db;

			$ShopsID  = array(2,3,4,5);  //可選擇的館
			$DataList = array();
			$count    = 0;


			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' ORDER BY `order`,`serno` Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <br><center>\n";
			$ListCotent .=  "      <table border=\"0\">\n";

			for($i = 0; $i < sizeof($ShopsID); $i++){

				if($i % 5 == 0)
					$ListCotent .=  "      	<tr>\n";

				$sqlstr = "Select * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `serno` = '".$ShopsID[$i]."'";
				$ShopData = $g_db->getRow( $sqlstr );

				$ListCotent .=  "      <td align=\"center\"><input type=\"button\" value=\"".$ShopData['shopname']."\" onclick=\"location.href='".$_url."?flag=settag&tag=".$ShopsID[$i]."';\" ".($_tag == $ShopsID[$i] ? "disabled" : "")."></td>\n";

				if($i % 5 == 4)
					$ListCotent .=  "      	</tr>\n";

				$ShopName[ $ShopData['serno'] ] = $ShopData['shopname'];

			}

			$ListCotent .=  "      </table>\n";
			$ListCotent .=  "      </center>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"100\">館名</th>\n";
			$ListCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">排序</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";
			
			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($i + 1)."</td>\n";
				$ListCotent .=  "          <td>".$ShopName[ $DataList[$i]['tag'] ]."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['order']."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_INDEX_CLASS($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$sqlstr = "Select `shopname` FROM `".Web_Shop."` WHERE `DelFlag` = '' and `serno` = '".($_tag != "" ? $_tag : 2)."'";
			$ShopData = $g_db->getRow( $sqlstr );

			$sqlstr = "Select `serno`,`shopname` FROM `".Web_Shop."` WHERE `DelFlag` = '' and `showup` = 'Y' and `shopid` = '".($_tag != "" ? $_tag : 2)."' and `parentid` = '0' order by `order`,`serno`";
			$MainClassList = $g_db->getAll( $sqlstr );

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <input name=\"tag\" type=\"hidden\" value=\"".$_tag."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">館名</th>\n";
			$EditCotent .=  "          <td align=\"left\">".$ShopData['shopname']."</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">主類別</th>\n";
			$EditCotent .=  "          <td align=\"left\">\n";
			$EditCotent .=  "          	<select name=\"type\">\n";

			for($i = 0; $i < sizeof($MainClassList); $i++){

				if($Data['type'] == $MainClassList[$i]['serno'])
					$EditCotent .=  "          		<option value=\"".$MainClassList[$i]['serno']."\" selected>".$MainClassList[$i]['shopname']."</option>\n";
				else
					$EditCotent .=  "          		<option value=\"".$MainClassList[$i]['serno']."\">".$MainClassList[$i]['shopname']."</option>\n";

			}
			
			$targetB = ($Data['target']=='_blank')?"checked":"";
      $targetS = ($Data['target']=='_self' || $Data['target']=='')?"checked":"";
			
			$EditCotent .=  "          	</select>\n";
			$EditCotent .=  "          </td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" size=\"6\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "           <th scope=\"col\">連結</th>\n";
			$EditCotent .=  "           <td align=\"left\">";
			$EditCotent .=  "               <input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"50\" />";
			$EditCotent .=  "               <input name=\"target\" type=\"radio\" value=\"_self\" ".$targetS." />本頁開啟";
			$EditCotent .=  "               <input name=\"target\" type=\"radio\" value=\"_blank\" ".$targetB." />另開網頁";
			$EditCotent .=  "           </td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">排序</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"order\" type=\"text\" value=\"".($Data != "" ? $Data['order'] : 99)."\" size=\"1\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_INDEX_CLASS(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['type']      = $_POST['type'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['order']     = $_POST['order'];
				$data['showup']    = $_POST['showup'];

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['type']      = $_POST['type'];
				$data['name']      = $_POST['name'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['order']     = $_POST['order'];
				$data['showup']    = $_POST['showup'];

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_INDEX_CLASS($_date){

			global $g_db;

			//$ShopsID    = array(2,3,4,5,6,7,8,9,10,11);  //可選擇的館
			//$ShopsUrl   = array("pc","component","3c","beauty","fashion","good","life","furniture","fun","leisure");  //館的連結
			//$ShopsClass = array("catalog_02","catalog_03","catalog_04","catalog_05","catalog_06","catalog_07","catalog_08","catalog_09","catalog_10","catalog_11");  //館的LOGO

			$ShopsID    = array(2,3,4,5,6);  //可選擇的館
			$ShopsUrl   = array("shop2","shop3","shop4","shop5","shop6");  //館的連結
			//$ShopsClass = array("catalog_02","catalog_03","catalog_05","catalog_06","catalog_07","catalog_08","catalog_10","catalog_11");  //館的LOGO

			$MainClass = array();
			$SubClass  = array();

			for($i = 0; $i < sizeof($ShopsID); $i++){

				$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `serno` = '".$ShopsID[$i]."'";
				$ShopData = $g_db->getRow($sqlstr);

				$MainClass[$i] = $ShopData;

			}

			//取出所有的主分類
			if( sizeof($MainClass) > 0 ){

				echo "		<div class=\"sec_pro_title\"><p class=\"text_color text_16px\">商品總覽</p></div>\n";
				echo "			<ul class=\"sec_pro_cont\">\n";

				for($i = 0; $i < sizeof($MainClass); $i++){

					echo "			<li	class=\"sec_son\">\n";
					echo "				<div class=\"sec_son_title\"><p class=\"text_color text_16px\">".$MainClass[$i]['shopname']."</p><div class=\"sec_son_down\"></div></div>\n";
					echo "				<ul	class=\"sec_son_cont\">\n";
					echo "					<img src=\"images/sec_pro_granbg.jpg\" width=\"200\" height=\"4\" />\n";

					$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '".$MainClass[$i]['serno']."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY `order`,`serno` LIMIT 0,6";
					$SubClass = $g_db->getAll( $sqlstr );

					if(sizeof($SubClass) > 0)
						echo "				<li class=\"sec_pro_left_cont\">\n";

					for($j = 0; $j < sizeof($SubClass); $j+=2){
						if($SubClass[$j]['url'] && sizeof($SubClass[$j]['serno'])>0)
							echo "				<p><a href=\"".$SubClass[$j]['url']."\" target=\"".$SubClass[$j]['target']."\">‧".$SubClass[$j]['name']."</a></p>\n";
						else
							echo "				<p><a href=\"../shop".($ShopsID[$i])."/product_list.php?sid=".$SubClass[$j]['serno']."\">‧".$SubClass[$j]['name']."</a></p>\n";
					}
					
					if(sizeof($SubClass) > 0){
						echo "				</li><!--End of sec_pro_left_cont--> \n";
                        echo "				<li class=\"sec_pro_right_cont\">\n";		
					}
	
					for($k = 1; $k < sizeof($SubClass); $k+=2){
						if($SubClass[$k]['url'] && sizeof($SubClass[$k]['serno'])>0)
							echo "				<p><a href=\"".$SubClass[$k]['url']."\" target=\"".$SubClass[$k]['target']."\">‧".$SubClass[$k]['name']."</a></p>\n";
						else
							echo "				<p><a href=\"../shop".($ShopsID[$i])."/product_list.php?sid=".$SubClass[$k]['serno']."\">‧".$SubClass[$k]['name']."</a></p>\n";
					}
					
					if(sizeof($SubClass) > 0)
						echo "				</li><!--End of sec_pro_right_cont-->\n";
					
					echo "				</ul><!--End of sec_son_cont-->\n";
					echo "			</li><!--End of sec_son-->\n";
				}
				
				echo "			</ul><!--End of sec_pro_cont-->\n";
			}
		}

		/////SHOP_CLASS/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_SHOP_CLASS($_url,$_tag){

			global $g_db;

			$MainClass = array();
			$SubClass  = array();
			$DataList  = array();
			$count     = 0;

			//取出所有的主分類
			$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `parentid` = '0' ORDER BY `order`,`serno`";
			if( $g_db->numRows( $g_db->query($sqlstr) ) > 0 ){

				$MainClass = $g_db->getAll( $sqlstr );

				for($i = 0; $i < sizeof($MainClass); $i++){

					$DataList[$count] = $MainClass[$i];
					$DataList[$count]['name'] = "".$MainClass[$i]['shopname']."";
					$count++;

					$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `parentid` = '".$MainClass[$i]['serno']."' ORDER BY `order`,`serno`";
					$SubClass = $g_db->getAll( $sqlstr );

					for($j = 0; $j < sizeof($SubClass); $j++){

						$DataList[$count] = $SubClass[$j];
						$DataList[$count]['name'] = $SubClass[$j+1] != "" ? "├─<span class=\"sblue_tag\">".$DataList[$count]['shopname']."</span>" : "└─<span class=\"sblue_tag\">".$DataList[$count]['shopname']."</span>";
						$count++;

						$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `parentid` = '".$SubClass[$j]['serno']."' ORDER BY `order`,`serno`";
						$ChildClass = $g_db->getAll( $sqlstr );

						for($k = 0; $k < sizeof($ChildClass); $k++){

							$DataList[$count] = $ChildClass[$k];
							$DataList[$count]['name'] = $ChildClass[$k+1] != "" ? ($SubClass[$j+1] != "" ? "&nbsp;&nbsp;" : "&nbsp;&nbsp;")." ├─<span class=\"slogan_gray\">".$DataList[$count]['shopname']."</span>" : ($SubClass[$j+1] != "" ? "&nbsp;&nbsp;" : "&nbsp;&nbsp;")." └─<span class=\"slogan_gray\">".$DataList[$count]['shopname']."</span>";
							$count++;

						}

					}

				}

			}

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"設定\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=config';\" /><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\">分類名稱</th>\n";
			$ListCotent .=  "          <th scope=\"col\">成人</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">排序</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr ".($DataList[$i]['parentid'] == 0 ? "class=\"main_class\"" : "").">\n";
				$ListCotent .=  "          <td>".($pageno * $this->pageshownum + $i + 1)."</td>\n";
				$ListCotent .=  "          <td ".($DataList[$i]['parentid'] == 0 ? "class=\"blue_tag\"" : "")." align=\"left\">".$DataList[$i]['name']."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['flag_adult']."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['order']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_SHOP_CLASS($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];

			$Data = "";
			$MainID = "";
			$DefaultType = "main";

			if($id != ""){

				$sqlstr = "Select * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );
				if( $Data['parentid'] > 0 ){
					$MainID = $Data['parentid'];
					$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `serno` = '".$Data['parentid']."'";
					$Class = $g_db->getRow($sqlstr);
					if( $Class['parentid'] > 0 ){
						$SubID = $Class['serno'];
						$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `serno` = '".$Class['parentid']."'";
						$Class = $g_db->getRow($sqlstr);
						$MainID = $Class['serno'];
						$DefaultType = "child";
					}else{
						$DefaultType = "sub";
					}
				}

				if($MainID != ""){
					$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `parentid` = '0' ORDER BY `order`,`serno`";
					$MainClassList = $g_db->getAll($sqlstr);
				}

				if($SubID != ""){
					$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `parentid` = '".$MainID."' ORDER BY `order`,`serno`";
					$SubClassList = $g_db->getAll($sqlstr);
				}

			}

			$EditCotent = "";

			$EditCotent .=  "      <script>\n";
			$EditCotent .=  "      function change_class(type){\n";
			$EditCotent .=  "        if(type == 'main'){\n";
			$EditCotent .=  "          $('#class_sub').removeOption(/./);\n";
			$EditCotent .=  "          $('#class_child').removeOption(/./);\n";
			$EditCotent .=  "          $('#class_sub').addOption('','請選擇主分類',false);\n";
			$EditCotent .=  "          $('#class_child').addOption('','請選擇次分類',false);\n";
			$EditCotent .=  "          $('#class_sub').attr('disabled','disabled');\n";
			$EditCotent .=  "          $('#class_child').attr('disabled','disabled');\n";
			$EditCotent .=  "          $('#class_sub').selectOptions('');\n";
			$EditCotent .=  "          $('#class_child').selectOptions('');\n";
			$EditCotent .=  "        }else if(type == 'sub'){\n";
			$EditCotent .=  "          $('#class_child').removeOption(/./);\n";
			$EditCotent .=  "          $('#class_child').addOption('','請選擇主分類',false);\n";
			$EditCotent .=  "          $('#class_sub').attr('disabled','');\n";
			$EditCotent .=  "          $('#class_child').attr('disabled','disabled');\n";
			$EditCotent .=  "          $('#class_sub').ajaxAddOption('webedit.php?flag=mainclass&id=".$id."','',false);\n";
			$EditCotent .=  "          $('#class_sub').selectOptions('');\n";
			$EditCotent .=  "          $('#class_child').selectOptions('');\n";
			$EditCotent .=  "        }else{\n";
			$EditCotent .=  "          $('#class_sub').attr('disabled','');\n";
			$EditCotent .=  "          $('#class_child').attr('disabled','');\n";
			$EditCotent .=  "          $('#class_sub').ajaxAddOption('webedit.php?flag=mainclass&id=".$id."','',false);\n";
			$EditCotent .=  "          $('#class_sub').selectOptions('');\n";
			$EditCotent .=  "          $('#class_child').selectOptions('');\n";
			$EditCotent .=  "        }\n";
			$EditCotent .=  "      }\n";
			$EditCotent .=  "      function change_sub(sid){\n";
			$EditCotent .=  "        $('#class_child').removeOption(/./);\n";
			$EditCotent .=  "        $('#class_child').ajaxAddOption('webedit.php?flag=subclass&id=".$id."&sid='+sid,'',false);\n";
			$EditCotent .=  "      }\n";
			$EditCotent .=  "      </script>\n";
			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\" width=\"180\">分類層級</th>\n";
			$EditCotent .=  "          <td align=\"left\">\n";
			$EditCotent .=  "            <select name=\"class\" id=\"class\" onchange=\"change_class(this.value);\">\n";
			$EditCotent .=  "              <option value=\"main\" ".($DefaultType == "main" ? "selected" : "").">主分類</option>\n";
			$EditCotent .=  "              <option value=\"sub\" ".($DefaultType == "sub" ? "selected" : "").">次分類</option>\n";
			$EditCotent .=  "              <option value=\"child\" ".($DefaultType == "child" ? "selected" : "").">子分類</option>\n";
			$EditCotent .=  "            </select>\n";
			$EditCotent .=  "            <select name=\"class_sub\" id=\"class_sub\" onchange=\"change_sub(this.value);\" ".($MainID != "" ? "" : "disabled").">\n";
			$EditCotent .=  "              <option value=\"\" >請選擇主分類</option>\n";

			for($i = 0; $i < sizeof($MainClassList); $i++){
				if($MainClassList[$i]['serno'] == $MainID)
					$EditCotent .=  "              <option value=\"".$MainClassList[$i]['serno']."\" selected>".$MainClassList[$i]['shopname']."</option>\n";
				else
					$EditCotent .=  "              <option value=\"".$MainClassList[$i]['serno']."\" >".$MainClassList[$i]['shopname']."</option>\n";
			}

			$EditCotent .=  "            </select>\n";
			$EditCotent .=  "            <select name=\"class_child\" id=\"class_child\" ".($SubID != "" ? "" : "disabled").">\n";
			$EditCotent .=  "              <option value=\"\" >請選擇次分類</option>\n";
			
			for($i = 0; $i < sizeof($SubClassList); $i++){
				if($SubClassList[$i]['serno'] == $SubID)
					$EditCotent .=  "              <option value=\"".$SubClassList[$i]['serno']."\" selected>".$SubClassList[$i]['shopname']."</option>\n";
				else
					$EditCotent .=  "              <option value=\"".$SubClassList[$i]['serno']."\" >".$SubClassList[$i]['shopname']."</option>\n";
			}
			
			$flag_adult = ($Data['flag_adult']=='Y')?"checked":"";
			$EditCotent .=  "            </select>\n";
			$EditCotent .=  "          </td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">分類名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\">\n";
			$EditCotent .=  "              <input name=\"shopname\" type=\"text\" value=\"".$Data['shopname']."\" size=\"15\" />\n";
	        $EditCotent .=  "              <input name=\"flag_adult\" type=\"checkbox\" value=\"Y\" ".$flag_adult." />成人\n";
			$EditCotent .=  "          </td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">排序</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"order\" type=\"text\" value=\"".($Data != "" ? $Data['order'] : 99)."\" size=\"1\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_SHOP_CLASS(){

			global $g_db;

			if($_POST['id'] != ""){

				if($_POST['class'] == "sub"){
					$data['level']    = 2;
					$data['parentid'] = $_POST['class_sub'] != "" ? $_POST['class_sub'] : 0;
				}elseif($_POST['class'] == "child"){
					$data['level']    = 3;
					if($_POST['class_child'] != "")
						$data['parentid'] = $_POST['class_child'];
					elseif($_POST['class_sub'] != "")
						$data['parentid'] = $_POST['class_sub'];
					else
						$data['parentid'] = 0;
				}else{
					$data['level']    = 1;
					$data['parentid'] = 0;
				}

				$data['shopname']  = $_POST['shopname'];
				$data['order']     = $_POST['order'];
				$data['flag_adult']  = ($_POST['flag_adult']!='')?$_POST['flag_adult']:"";

				$g_db->update(Web_Shop,$data,"serno",$_POST['id']);

			}else{

				if($_POST['class'] == "sub"){
					$data['level']    = 2;
					$data['parentid'] = $_POST['class_sub'] != "" ? $_POST['class_sub'] : 0;
				}elseif($_POST['class'] == "child"){
					$data['level']    = 3;
					if($_POST['class_child'] != "")
						$data['parentid'] = $_POST['class_child'];
					elseif($_POST['class_sub'] != "")
						$data['parentid'] = $_POST['class_sub'];
					else
						$data['parentid'] = 0;
				}else{
					$data['level']    = 1;
					$data['parentid'] = 0;
				}

				$data['shopid']    = $this->shopid;
				$data['shopname']  = $_POST['shopname'];
				$data['order']     = $_POST['order'];
				$data['showup']    = "Y";
				$data['flag_adult']  = ($_POST['flag_adult']!='')?$_POST['flag_adult']:"";

				$g_db->create(Web_Shop,$data);

			}

		}
		
		function ConfigPage_SHOP_CLASS($_url){

			global $g_db;

			$Data = "";

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `config` = 'Y' ORDER BY `serno` desc LIMIT 1";
			if( $g_db->numRows( $g_db->query( $sqlstr ) ) > 0 )
				$Data = $g_db->getRow( $sqlstr );

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=configsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"text\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標籤名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['config_attr1'] != "" ? "<a href=\"".Upload_Url.$Data['config_attr1']."\" target=\"_blank\"><img " . ( $Data['name'] ? 'alt="' . $Data['name'] . '" title="' . $Data['name'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['config_attr1']."\" height=\"35\"></a><br>" : "")."<input name=\"config_attr1\" type=\"file\" size=\"20\" />".($Data['config_attr1'] != "" ? " <input type=\"checkbox\" name=\"del_config_attr1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 276px × 168 px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"50\" /> 開啟方式：<select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function ConfigSave_SHOP_CLASS(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['name'] = $_POST['name'];
				$data['url'] = $_POST['url'];

				if($_POST['del_config_attr1'] == "Y")
					$data['config_attr1'] = '';

				if($_FILES["config_attr1"]["name"] != "" ){
					$data['config_attr1'] = "sshowpic1-".date("ymdHis").substr($_FILES["config_attr1"]["name"],strrpos($_FILES["config_attr1"]["name"],'.'));
					copy( $_FILES["config_attr1"]['tmp_name'], Upload_Path.$data['config_attr1'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']       = $this->shopid;
				$data['block']        = $this->block;
				$data['config']       = 'Y';
				$data['name']		  = $_POST['name'];
				$data['url'] 	 	  = $_POST['url'];

				if($_FILES["config_attr1"]["name"] != "" ){
					$data['config_attr1'] = "sshowpic1-".date("ymdHis").substr($_FILES["config_attr1"]["name"],strrpos($_FILES["config_attr1"]["name"],'.'));
					copy( $_FILES["config_attr1"]['tmp_name'], Upload_Path.$data['config_attr1'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_SHOP_CLASS($_date){

			global $g_db;

			$MainClass = array();
			$SubClass  = array();
			$DataList  = array();
			$count     = 0;

			$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `serno` = '".$this->shopid."'";
			$ShopData = $g_db->getRow($sqlstr);

			if($ShopData['shopid'] == 0){        //此Shopid為館首頁
				$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `shopid` = '".$ShopData['serno']."' and `parentid` = '0' ORDER BY `order`,`serno`";
				$ShopTitle = $ShopData['shopname'];
				$ShopID = $ShopData['serno'];
				$ShopLevel = 0;
			}else{ //此Shopid為主分類
				$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `shopid` = '".$ShopData['shopid']."' and `parentid` = '0' ORDER BY `order`,`serno`";
				$ShopTitle = $ShopData['shopname'];
				$ShopID = $ShopData['shopid'];
				$ShopLevel = 0;
			}

			//取出所有的主分類
			if( $g_db->numRows( $g_db->query($sqlstr) ) > 0 ){

				$ClassPos = false;

				$MainClass = $g_db->getAll( $sqlstr );

				for($i = 0; $i < sizeof($MainClass); $i++){

					if($MainClass[$i]['serno'] == $this->shopid)
						$ClassPos = $i;

					echo "		<li	class=\"sec_son\">\n";
					echo "			<div class=\"sec_son_title\"><p class=\"text_color text_16px\">".$MainClass[$i]['shopname']."</p><div class=\"sec_son_down\"></div></div>\n";
					echo "			<ul	class=\"sec_son_cont\">\n";
					echo "				<img src=\"images/sec_pro_granbg.jpg\" width=\"200\" height=\"4\" />\n";
					echo "				<li class=\"sec_pro_left_cont\">\n";

					$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `shopid` = '".$ShopID."' and `parentid` = '".$MainClass[$i]['serno']."' ORDER BY `order`,`serno`";
					$SubClass = $g_db->getAll( $sqlstr );

					for($j = 0; $j < sizeof($SubClass); $j++){

						if($SubClass[$j]['serno'] == $this->shopid)
							$ClassPos = $i;

						echo "				<p><a href=\"product_list.php?sid=".$SubClass[$j]['serno']."\"> ‧ ".$SubClass[$j]['shopname']."</a></p>\n";

					}

					echo "				</li>\n";
					echo "			</ul>\n";
					echo "		</li>\n";

				}

				echo '	<script type="text/javascript">'."\n";
				echo '	$(function(){'."\n";
				echo '	var $sec_son_title = $(\'.sec_son_title\');'."\n";
				echo '	$sec_son_title.click(function(){'."\n";
				echo '		var $this = $(this)'."\n";
				echo '		$this.next().stop(true, true).slideToggle(400);'."\n";
				echo '		$this.find(\'div\').toggleClass(\'sec_son_down sec_son_up\')'."\n";
				echo '	});'."\n";
				echo '	$sec_son_title.eq('.($ClassPos*1).').click();'."\n";

				echo '	var $sec_best_orig = $(\'.sec_best_orig\')'."\n";
				echo '	$(\'.sec_best_hover\').hide();'."\n";
				echo '	$sec_best_orig.mouseover(function(){'."\n";
				echo '		var $this = $(this)'."\n";
				echo '		$this.hide().next().show();'."\n";
				echo '		$this.parent().siblings().find(\'.sec_best_orig\').show().next().hide()'."\n";
				echo '	});'."\n";
				echo '	$sec_best_orig.eq(0).mouseover();'."\n";
				echo '	});'."\n";
				echo '	</script>'."\n";

			}

		}

		function CreateHtml_MainClass_SHOP_CLASS($_date){

			global $g_db;

			$MainClass = array();
			$SubClass  = array();
			$DataList  = array();
			$count     = 0;

			$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `serno` = '".$this->shopid."'";
			$ShopData = $g_db->getRow($sqlstr);

			if($ShopData['shopid'] == 0){        //此Shopid為館首頁
				$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `shopid` = '".$ShopData['serno']."' and `parentid` = '0' ORDER BY `order`,`serno`";
				$ShopTitle = $ShopData['shopname'];
				$ShopID = $ShopData['serno'];
			}elseif($ShopData['parentid'] == 0){ //此Shopid為主分類
				$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `shopid` = '".$ShopData['shopid']."' and `parentid` = '".$ShopData['serno']."' ORDER BY `order`,`serno`";
				$ShopTitle = $ShopData['shopname'];
				$ShopID = $ShopData['shopid'];
			}else{
				$sqlstr = "SELECT `serno`,`parentid`,`shopname` FROM `".Web_Shop."` WHERE `DelFlag` = '' and `serno` = '".$ShopData['parentid']."'";
				$ParentData = $g_db->getRow($sqlstr);

				if($ParentData['parentid'] == 0){  //此Shopid為次分類
					$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `shopid` = '".$ShopData['shopid']."' and `parentid` = '".$ParentData['serno']."' ORDER BY `order`,`serno`";
					$ShopTitle = $ParentData['shopname'];
				}else{                             //此Shopid為子分類
					$sqlstr = "SELECT `serno`,`parentid`,`shopname` FROM `".Web_Shop."` WHERE `DelFlag` = '' and `serno` = '".$ParentData['parentid']."'";
					$ParentData = $g_db->getRow($sqlstr);
					$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `shopid` = '".$ShopData['shopid']."' and `parentid` = '".$ParentData['serno']."' ORDER BY `order`,`serno`";
					$ShopTitle = $ParentData['shopname'];
				}
				$ShopID = $ShopData['shopid'];
			}
			
			$MainUrl = "../../review.php";
			$SubUrl  = "../../review.php";

			//取出所有的主分類
			if( $g_db->numRows( $g_db->query($sqlstr) ) > 0 ){

				echo "        <h3 class=\"catalog_title\">".$ShopTitle."</h3>\n";
				echo "          <div id=\"Accordion1\" class=\"Accordion\">\n";

				$MainClass = $g_db->getAll( $sqlstr );

				for($i = 0; $i < sizeof($MainClass); $i++){

					echo "            <div class=\"AccordionPanel\">\n";
					echo "              <div class=\"AccordionPanelTab catalog_01\" title=\"點擊展開\" alt=\"點擊展開\"><span><a href=\"".$MainUrl."?sid=".$MainClass[$i]['serno']."\" target=\"_top\">".$MainClass[$i]['shopname']."</a></span></div>\n";
					echo "              <div class=\"AccordionPanelContent\">\n";
					echo "                <table cellspacing=\"0\" cellpadding=\"0\" id=\"catalog_table\">\n";

					$sqlstr = "SELECT * FROM `".Web_Shop."` WHERE `DelFlag` = '' and `shopid` = '".$ShopID."' and `parentid` = '".$MainClass[$i]['serno']."' ORDER BY `order`,`serno`";
					$SubClass = $g_db->getAll( $sqlstr );

					for($j = 0; $j < sizeof($SubClass); $j++){

						echo "                  <tr>\n";
						echo "                    <td class=\"".($SubClass[$j]['serno'] == $this->shopid ? "catalog_main_subtitle_over" : "catalog_main_subtitle")."\"><a href=\"".$SubUrl."?sid=".$SubClass[$j]['serno']."\" target=\"_top\">".$SubClass[$j]['shopname']."</a></td>\n";
						echo "                  </tr>\n";

					}

					echo "                </table>\n";
					echo "              </div>\n";
					echo "            </div>\n";

				}

				echo "          </div><!--End of Accordion1-->\n";
				
					//上為開合banner


				//是否開起展開目錄功能
				if($ShopLevel == 2 || $ShopLevel == 3){

					echo "		<script type=\"text/javascript\">\n";
					echo "			var $sec_son_title = $('.sec_son_title');\n";
					echo "			$sec_son_title.click(function(){\n";
					echo "				$this.next().stop(true, true).slideToggle(400);\n";
					echo "				$this.find('div').toggleClass('sec_son_down sec_son_up');\n";
					echo "			});\n";
					echo "			$sec_son_title.eq(0).click();\n";
					echo "		</script>\n";

				}


			}
			
		
		}

		function Delete_SHOP_CLASS(){

			global $g_db;

			$ids = $_POST['ids'];

			for($i = 0; $i < sizeof($ids); $i++){

				$sqlstr = "SELECT count(*) FROM `".Web_Shop."` WHERE `DelFlag` = '' and `parentid` = '".$ids[$i]."'";
				$ClassNum = $g_db->getOne($sqlstr);

				$sqlstr = "SELECT count(*) FROM `".Front_Product."` WHERE `classcode` like '%\"".$ids[$i]."\"%' and `status` = '".FProduct_Status_Up."'";
				$ClassProdNum = $g_db->getOne($sqlstr);

				if($ClassNum == 0 && $ClassProdNum == 0)
					$g_db->delete(Web_Shop,"serno",$ids[$i]);

			}

		}

		/////BANNER_BRANCH/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_BANNER_BRANCH($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' ORDER BY `startdate` desc,`serno` desc Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";
			
			for($i = 0; $i < sizeof($DataList); $i++){

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".($DataList[$i]['pic1'] != "" ? "<a href=\"".Upload_Url.$DataList[$i]['pic1']."\" target=\"_blank\"><img " . ( $DataList['slogan1'] ? 'alt="' . $DataList['slogan1'] . '" title="' . $DataList['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$DataList[$i]['pic1']."\" width=\"270\" height=\"25\"></a>" : "")."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";
			
			return $ListCotent;

		}

		function EditPage_BANNER_BRANCH($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];

			$Data = "";

			if($id != ""){

				//列表資料
				$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">圖片</th>\n";
			$EditCotent .=  "          <td align=\"left\">".($Data['pic1'] != "" ? "<a href=\"".Upload_Url.$Data['pic1']."\" target=\"_blank\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"300\" height=\"30\"></a><br>" : "")."<input name=\"pic1\" type=\"file\" size=\"20\" />".($Data['pic1'] != "" ? " <input type=\"checkbox\" name=\"del_pic1\" value=\"Y\">刪除圖片" : "")."<br><span style=\"color: rgb(255, 0, 0);\">圖片尺寸為 988px × 50px 模式為RGB 請避免使用CMYK 解析度為72dpi</span></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">網址</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"url\" type=\"text\" value=\"".$Data['url']."\" size=\"80\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開啟方式</th>\n";
			$EditCotent .=  "          <td align=\"left\"><select name=\"target\"><option value=\"_self\" ".($Data['target'] == "_self" ? "selected" : "").">本頁開啟</option><option value=\"_blank\" ".($Data['target'] == "_blank" ? "selected" : "").">開新視窗</option></select></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";

			return $EditCotent;

		}

		function EditSave_BANNER_BRANCH(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				if($_POST['del_pic1'] == "Y")
					$data['pic1'] = '';

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "indexpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['url']       = $_POST['url'];
				$data['target']    = $_POST['target'];
				$data['showup']    = $_POST['showup'];

				if($_FILES["pic1"]["name"] != "" ){
					$data['pic1'] = "indexpic1-".date("ymdHis").substr($_FILES["pic1"]["name"],strrpos($_FILES["pic1"]["name"],'.'));
					copy( $_FILES["pic1"]['tmp_name'], Upload_Path.$data['pic1'] );
				}

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_BANNER_BRANCH($_date){

			global $g_db;

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND()";

			if( $g_db->numRows( $g_db->query($sqlstr) ) > 0 ){

				$Data = $g_db->getRow( $sqlstr );


	 			echo "          <tr>\n";
	 			echo "            <td colspan=\"4\"><a href=\"".($Data['url'] != "" ? $Data['url'] : "#")."\" target=\"".$Data['target']."\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"988\" /></a></td>\n";
	 			echo "          </tr>\n";

			}elseif($this->backendmode){

	 			echo "          <tr>\n";
	 			echo "            <td colspan=\"4\"><a href=\"#\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.($Data['pic1'] != "" ? $Data['pic1'] : "default/default_975_50.jpg")."\" width=\"988\" height=\"50\" /></a></td>\n";
	 			echo "          </tr>\n";

			}

		}

		function CreateHtml_MainClass_BANNER_BRANCH($_date){

			global $g_db;

			$sqlstr = "SELECT `serno`,`shopname` FROM `".Web_Shop."` WHERE `DelFlag` = '' and `parentid` = '".$this->shopid."'";
			$MainClassList = $g_db->getAll($sqlstr);

			$MainClassArray = "";
			for($i = 0; $i < sizeof($MainClassList); $i++)
				$MainClassArray .= $MainClassList[$i]['serno'].",";
			$MainClassArray = substr($MainClassArray,0,strlen($MainClassArray)-1);

			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` in (".$MainClassArray.") and `block` = '".($this->block)."' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() LIMIT 1";

			if( $MainClassArray != "" && $g_db->numRows( $g_db->query($sqlstr) ) > 0 ){

				$Data = $g_db->getRow( $sqlstr );


	 			echo "          <tr>\n";
	 			echo "            <td colspan=\"4\"><a href=\"".($Data['url'] != "" ? $Data['url'] : "#")."\" target=\"".$Data['target']."\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.$Data['pic1']."\" width=\"988\" /></a></td>\n";
	 			echo "          </tr>\n";

			}elseif($this->backendmode){

	 			echo "          <tr>\n";
	 			echo "            <td colspan=\"4\"><a href=\"#\"><img " . ( $Data['slogan1'] ? 'alt="' . $Data['slogan1'] . '" title="' . $Data['slogan1'] . '" ' : '' ) . "src=\"".Upload_Url.($Data['pic1'] != "" ? $Data['pic1'] : "default/default_975_50.jpg")."\" width=\"988\" height=\"50\" /></a></td>\n";
	 			echo "          </tr>\n";

			}

		}

		/////PRODSHOW_BRANCH/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function ListPage_PRODSHOW_BRANCH($_url,$_tag){

			global $g_db;

			//分頁
			if($_GET['pageno'] != "")
				$pageno = $_GET['pageno'];
			else
				$pageno = 0;

			//列表資料
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."'";
			$DataNum = $g_db->numRows( $g_db->query( $sqlstr ) );
		
			//列表資料
			$startuprow = $pageno * $this->pageshownum;
			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' ORDER BY `startdate` desc,`serno` desc Limit ".$startuprow.",".$this->pageshownum."";
			$DataList = $g_db->getAll( $sqlstr );

			$ListCotent = "";

			$ListCotent .=  "      <form name=\"ListForm\" method=\"POST\" action=\"".$_url."?flag=delete\" >\n";
			$ListCotent .=  "      <div class=\"graybox\">\n";
			$ListCotent .=  "        <h3>列表</h3>\n";
			$ListCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"新增\" class=\"green_btn\" onclick=\"location.href='".$_url."?flag=edit';\" /></p>\n";
			$ListCotent .=  "      </div>\n";
			$ListCotent .=  "      <br><center>\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置一\" onclick=\"location.href='".$_url."?flag=settag&tag=1';\" ".($_tag == 1 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置二\" onclick=\"location.href='".$_url."?flag=settag&tag=2';\" ".($_tag == 2 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置三\" onclick=\"location.href='".$_url."?flag=settag&tag=3';\" ".($_tag == 3 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置四\" onclick=\"location.href='".$_url."?flag=settag&tag=4';\" ".($_tag == 4 ? "disabled" : "").">\n";
			$ListCotent .=  "      <input type=\"button\" value=\"位置五\" onclick=\"location.href='".$_url."?flag=settag&tag=5';\" ".($_tag == 5 ? "disabled" : "").">\n";
			$ListCotent .=  "      </center>\n";
			$ListCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$ListCotent .=  "        <tr>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"40\">項次</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"60\">位置</th>\n";
			$ListCotent .=  "          <th scope=\"col\">標籤名稱</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">開始時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"75\">結束時間</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"30\">上架</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\">編輯</th>\n";
			$ListCotent .=  "          <th scope=\"col\" width=\"85\"><input type=\"button\" value=\"刪除\" class=\"red_btn\" onclick=\"if(confirm('請問是否確定刪除?')) document.ListForm.submit();\" /></th>\n";
			$ListCotent .=  "        </tr>\n";

			for($i = 0; $i < sizeof($DataList); $i++){

				switch($DataList[$i]['tag']){
					case 1:
						$TagName = "位置一";
						break;
					case 2:
						$TagName = "位置二";
						break;
					case 3:
						$TagName = "位置三";
						break;
					case 4:
						$TagName = "位置四";
						break;
					case 5:
						$TagName = "位置五";
						break;
					default:
						$TagName = "位置一";
						break;						
				}

				$ListCotent .=  "        <tr>\n";
				$ListCotent .=  "          <td>".($DataNum - $pageno * $this->pageshownum - $i)."</td>\n";
				$ListCotent .=  "          <td>".$TagName."</td>\n";
				$ListCotent .=  "          <td align=\"left\" class=\"main\">".$DataList[$i]['name']."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['startdate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".substr($DataList[$i]['enddate'],0,10)."</td>\n";
				$ListCotent .=  "          <td>".$DataList[$i]['showup']."</td>\n";
				$ListCotent .=  "          <td><input type=\"button\" value=\"編輯\" class=\"gray_btn\" onclick=\"location.href='".$_url."?flag=edit&id=".$DataList[$i]['serno']."'\" /></td>\n";
				$ListCotent .=  "          <td><input name=\"ids[]\" type=\"checkbox\" value=\"".$DataList[$i]['serno']."\" /></td>\n";
				$ListCotent .=  "        </tr>\n";

			}

			$ListCotent .=  "      </table><!--End of table_style-->\n";
			$ListCotent .=  "      <div class=\"quotes\">\n";

			$ListCotent .=  "      ".PageList($DataNum, $this->pageshownum, $this->pagenoshownum, $pageno, $_url);

			$ListCotent .=  "      </div><!--End of quotes-->\n";
			$ListCotent .=  "      </form>\n";

			return $ListCotent;

		}

		function EditPage_PRODSHOW_BRANCH($_url,$_tag){

			global $g_db;

			$id = $_GET['id'];
		
			$Data = "";
		
			if($id != ""){

				//列表資料
				$sqlstr = "Select *,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid1`) pid1name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid2`) pid2name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid3`) pid3name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid4`) pid4name,(SELECT `name` FROM `".Front_Product."` WHERE `serno` = `".Top_ShopConfig."`.`pid5`) pid5name FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `serno` = '".$id."'";
				$Data = $g_db->getRow( $sqlstr );

			}

			$EditCotent = "";

			$EditCotent .=  "      <div class=\"graybox\">\n";
			$EditCotent .=  "        <h3>編輯</h3>\n";
			$EditCotent .=  "        <p class=\"right_pos\"><input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" /></p>\n";
			$EditCotent .=  "      </div>\n";
			$EditCotent .=  "      <form name=\"EditForm\" method=\"POST\" action=\"".$_url."?flag=editsave\"  enctype=\"multipart/form-data\">\n";
			$EditCotent .=  "      <input name=\"id\" type=\"hidden\" value=\"".$Data['serno']."\" />\n";
			$EditCotent .=  "      <table cellspacing=\"0\" cellpadding=\"0\" class=\"table_style\">\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">上架</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"showup\" type=\"checkbox\" value=\"Y\" ".($Data['showup'] == "Y" || $Data == "" ? "checked" : "")." /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">位置</th>\n";
			$EditCotent .=  "          <td align=\"left\">\n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"1\" ".($Data['tag'] == 1 || ($Data == "" && $_tag == 1) ? "checked" : "" )." />位置一 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"2\" ".($Data['tag'] == 2 || ($Data == "" && $_tag == 2) ? "checked" : "" )." />位置二 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"3\" ".($Data['tag'] == 3 || ($Data == "" && $_tag == 3) ? "checked" : "" )." />位置三 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"4\" ".($Data['tag'] == 4 || ($Data == "" && $_tag == 4) ? "checked" : "" )." />位置四 &nbsp; \n";
			$EditCotent .=  "            <input name=\"tag\" type=\"radio\" value=\"5\" ".($Data['tag'] == 5 || ($Data == "" && $_tag == 5) ? "checked" : "" )." />位置五 &nbsp; \n";
			$EditCotent .=  "          </td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">標籤名稱</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"name\" type=\"text\" value=\"".$Data['name']."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品1</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid1\" id=\"pid1\" value=\"".$Data['pid1']."\"><input name=\"pid1name\" id=\"pid1name\" type=\"text\" value=\"".htmlspecialchars($Data['pid1name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid1');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid1').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid1').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品2</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid2\" id=\"pid2\" value=\"".$Data['pid2']."\"><input name=\"pid2name\" id=\"pid2name\" type=\"text\" value=\"".htmlspecialchars($Data['pid2name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid2');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid2').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid2').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品3</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid3\" id=\"pid3\" value=\"".$Data['pid3']."\"><input name=\"pid3name\" id=\"pid3name\" type=\"text\" value=\"".htmlspecialchars($Data['pid3name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid3');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid3').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid3').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品4</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid4\" id=\"pid4\" value=\"".$Data['pid4']."\"><input name=\"pid4name\" id=\"pid4name\" type=\"text\" value=\"".htmlspecialchars($Data['pid4name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid4');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid4').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid4').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">商品5</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input type=\"hidden\" name=\"pid5\" id=\"pid5\" value=\"".$Data['pid5']."\"><input name=\"pid5name\" id=\"pid5name\" type=\"text\" value=\"".htmlspecialchars($Data['pid5name'])."\" size=\"50\" ReadOnly /> <input type=\"button\" class=\"gray_btn\" value=\"選擇商品\" onclick=\"sel_prod('pid5');\"> <input type=\"button\" class=\"green_btn\" value=\"預覽商品\" onclick=\"if(($('#pid5').val()) > 0){window.open('display/prodinfo/pro_info.php?fpid='+($('#pid5').val()),'_blank','')}\"></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">&nbsp;</th>\n";
			$EditCotent .=  "          <td align=\"left\">&nbsp;</td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">開始時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"startdate\" type=\"text\" value=\"".($Data != "" ? $Data['startdate'] : date("Y-m-d")." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "        <tr>\n";
			$EditCotent .=  "          <th scope=\"col\">結束時間</th>\n";
			$EditCotent .=  "          <td align=\"left\"><input name=\"enddate\" type=\"text\" value=\"".($Data != "" ? $Data['enddate'] : date("Y-m-d",mktime(0,0,0,date("m"),date("d")+7,date("Y")))." 00:00:00" )."\" /></td>\n";
			$EditCotent .=  "        </tr>\n";
			$EditCotent .=  "      </table><!--End of table_style-->\n";
			$EditCotent .=  "      </form>\n";
			$EditCotent .=  "      <div class=\"whitebox\">\n";
			$EditCotent .=  "        <p class=\"center_pos\">\n";
			$EditCotent .=  "          <input type=\"button\" value=\"確定\" class=\"green_btn\" onclick=\"document.EditForm.submit();\" />\n";
			$EditCotent .=  "          <input type=\"button\" value=\"返回\" class=\"gray_btn\" onclick=\"location.href='".$_url."';\" />\n";
			$EditCotent .=  "        </p>\n";
			$EditCotent .=  "      </div>\n";
			
			return $EditCotent;

		}

		function EditSave_PRODSHOW_BRANCH(){

			global $g_db;

			if($_POST['id'] != ""){

				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['name']      = $_POST['name'];
				$data['showup']    = $_POST['showup'];
				$data['pid1']      = $_POST['pid1'];
				$data['pid2']      = $_POST['pid2'];
				$data['pid3']      = $_POST['pid3'];
				$data['pid4']      = $_POST['pid4'];
				$data['pid5']      = $_POST['pid5'];

				$g_db->update(Top_ShopConfig,$data,"serno",$_POST['id']);

			}else{

				$data['shopid']    = $this->shopid;
				$data['block']     = $this->block;
				$data['startdate'] = $_POST['startdate'];
				$data['enddate']   = $_POST['enddate'];
				$data['tag']       = $_POST['tag'];
				$data['name']      = $_POST['name'];
				$data['showup']    = $_POST['showup'];
				$data['pid1']      = $_POST['pid1'];
				$data['pid2']      = $_POST['pid2'];
				$data['pid3']      = $_POST['pid3'];
				$data['pid4']      = $_POST['pid4'];
				$data['pid5']      = $_POST['pid5'];

				$g_db->create(Top_ShopConfig,$data);

			}

		}

		function CreateHtml_PRODSHOW_BRANCH($_date){

			global $g_db;

			$sqlstr = "Select `level` FROM `".Web_Shop."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."'";
			$ShopLevel = $g_db->getOne( $sqlstr );

			$sqlstr = "SELECT `serno` FROM `".Web_Shop."` WHERE `DelFlag` = '' and `parentid` = '".$this->shopid."'";
			$ClassList = $g_db->getAll($sqlstr);
			$SearchWhereStr = "";
			for($i = 0; $i < sizeof($ClassList); $i++)
				$SearchWhereStr .= " or `classcode` like '%\"".$ClassList[$i]['serno']."\"%'";

			$sqlstr = "Select * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".$this->shopid."' and `block` = '".$this->block."' and `tag` = '".$_tag."' and `config` = 'Y' ORDER BY `serno` desc LIMIT 1";
			$ConfigData = $g_db->getRow( $sqlstr );

			//位置一
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '1' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			if( $g_db->numRows( $g_db->query( $sqlstr ) ) > 0 ){

				$Data1 = $g_db->getRow( $sqlstr );

			}else{

				$sqlstr = "SELECT `serno` FROM `".Front_Product."` WHERE `DelFlag` = '' and `status` = '".FProduct_Status_Up."' and `price` > '0' and `open_sale_time` <= '".$_date."' and `sale_down_time` > '".$_date."' and (`classcode` like '%\"".$this->shopid."\"%' ".$SearchWhereStr.") ORDER BY `show_time` DESC LIMIT 5";
				$ProductList = $g_db->getAll($sqlstr);

				$Data1['name'] = "最新到貨";
				$Data1['pid1'] = $ProductList[0]['serno'] != "" ? $ProductList[0]['serno'] : "";
				$Data1['pid2'] = $ProductList[1]['serno'] != "" ? $ProductList[1]['serno'] : "";
				$Data1['pid3'] = $ProductList[2]['serno'] != "" ? $ProductList[2]['serno'] : "";
				$Data1['pid4'] = $ProductList[3]['serno'] != "" ? $ProductList[3]['serno'] : "";
				$Data1['pid5'] = $ProductList[4]['serno'] != "" ? $ProductList[4]['serno'] : "";

			}

			//位置二
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '2' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			if( $g_db->numRows( $g_db->query( $sqlstr ) ) > 0 ){

				$Data2 = $g_db->getRow( $sqlstr );

			}else{

				$sqlstr = "SELECT `serno` FROM `".Front_Product."` WHERE `DelFlag` = '' and `status` = '".FProduct_Status_Up."' and `price` > '0' and `open_sale_time` <= '".$_date."' and `sale_down_time` > '".$_date."' and (`classcode` like '%\"".$this->shopid."\"%' ".$SearchWhereStr.") ORDER BY RAND() LIMIT 5";
				$ProductList = $g_db->getAll($sqlstr);

				$Data2['name'] = "熱銷商品";
				$Data2['pid1'] = $ProductList[0]['serno'] != "" ? $ProductList[0]['serno'] : "";
				$Data2['pid2'] = $ProductList[1]['serno'] != "" ? $ProductList[1]['serno'] : "";
				$Data2['pid3'] = $ProductList[2]['serno'] != "" ? $ProductList[2]['serno'] : "";
				$Data2['pid4'] = $ProductList[3]['serno'] != "" ? $ProductList[3]['serno'] : "";
				$Data2['pid5'] = $ProductList[4]['serno'] != "" ? $ProductList[4]['serno'] : "";

			}

			//位置三
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '3' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			if( $g_db->numRows( $g_db->query( $sqlstr ) ) > 0 ){

				$Data3 = $g_db->getRow( $sqlstr );

			}else{

				$sqlstr = "SELECT `serno` FROM `".Front_Product."` WHERE `DelFlag` = '' and `status` = '".FProduct_Status_Up."' and `price` > '0' and `open_sale_time` <= '".$_date."' and `sale_down_time` > '".$_date."' and (`classcode` like '%\"".$this->shopid."\"%' ".$SearchWhereStr.") ORDER BY `sector_open_sale_time`,RAND() LIMIT 5";
				$ProductList = $g_db->getAll($sqlstr);

				$Data3['name'] = "促銷特賣";
				$Data3['pid1'] = $ProductList[0]['serno'] != "" ? $ProductList[0]['serno'] : "";
				$Data3['pid2'] = $ProductList[1]['serno'] != "" ? $ProductList[1]['serno'] : "";
				$Data3['pid3'] = $ProductList[2]['serno'] != "" ? $ProductList[2]['serno'] : "";
				$Data3['pid4'] = $ProductList[3]['serno'] != "" ? $ProductList[3]['serno'] : "";
				$Data3['pid5'] = $ProductList[4]['serno'] != "" ? $ProductList[4]['serno'] : "";

			}

			//位置四
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '4' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			if( $g_db->numRows( $g_db->query( $sqlstr ) ) > 0 )
				$Data4 = $g_db->getRow( $sqlstr );

			//位置五
			$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($this->shopid)."' and `block` = '".($this->block)."' and `tag` = '5' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
			if( $g_db->numRows( $g_db->query( $sqlstr ) ) > 0 )
				$Data5 = $g_db->getRow( $sqlstr );

 			echo "        <div id=\"main_pro_slide_deepblue\">\n";
 			echo "          <div class=\"tabs\">\n";

 			if($Data1 != "")
 				echo "            <h3 onmouseover=\"changTab(this)\">".$Data1['name']."</h3>\n";
 			if($Data2 != "")
 				echo "            <h3 onmouseover=\"changTab(this)\">".$Data2['name']."</h3>\n";
 			if($Data3 != "")
 				echo "            <h3 onmouseover=\"changTab(this)\">".$Data3['name']."</h3>\n";
 			if($Data4 != "")
 				echo "            <h3 onmouseover=\"changTab(this)\">".$Data4['name']."</h3>\n";
 			if($Data5 != "")
 				echo "            <h3 onmouseover=\"changTab(this)\">".$Data5['name']."</h3>\n";
 			
			for($i = 1; $i <= 5; $i++){

				$NowData = "Data".$i;

				if($$NowData != "" || ($i == 1 && $Data1 == "" && $Data2 == "" && $Data3 == "" && $Data4 == "" && $Data5 == "")){

					//抓取商品資料
					$sqlstr = "SELECT `prodserno`,`name`,`solgen`,`price`,`prod_pic`,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid1']."'";
					$ProdData1 = $g_db->getRow($sqlstr);
					$sqlstr = "SELECT `prodserno`,`name`,`solgen`,`price`,`prod_pic`,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid2']."'";
					$ProdData2 = $g_db->getRow($sqlstr);
					$sqlstr = "SELECT `prodserno`,`name`,`solgen`,`price`,`prod_pic`,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid3']."'";
					$ProdData3 = $g_db->getRow($sqlstr);
					$sqlstr = "SELECT `prodserno`,`name`,`solgen`,`price`,`prod_pic`,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid4']."'";
					$ProdData4 = $g_db->getRow($sqlstr);
					$sqlstr = "SELECT `prodserno`,`name`,`solgen`,`price`,`prod_pic`,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid5']."'";
					$ProdData5 = $g_db->getRow($sqlstr);


	 				echo "              <div>\n";
	 				echo "                <table cellspacing=\"0\" cellpadding=\"0\" class=\"slide_5_pro_list\">\n";
	 				echo "                  <tr>\n";
		 			echo "                    <td scope=\"col\">\n";
		 			echo "                      <table cellspacing=\"0\" cellpadding=\"0\" class=\"slide_5_pro\">\n";
		 			echo "                        <tr>\n";
		 			echo "                          <th scope=\"col\" class=\"slide_5_pro_img\">";
					
					if( ${$NowData}['pid1'] )
						echo "<a href=\"pro_info.php?id=".${$NowData}['pid1']."&sid=".$this->shopid."\"><img alt=\"" . $ProdData1['name'] . "\" title=\"" . $ProdData1['name'] . "\" src=\"".(Upload_Url.($ProdData1['prod_pic'] != "" ? $ProdData1['prod_pic'] : "default/default_140_140.jpg"))."\" width=\"140\" height=\"140\" /></a>";
					
					echo "</th>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td>";
					
					if( ${$NowData}['pid1'] )
						echo "<span class=\"slogan_orange\"><a href=\"pro_info.php?id=".${$NowData}['pid1']."&sid=".$this->shopid."\">".(mb_strlen($ProdData1['solgen'],'UTF-8') > 10 ? mb_substr($ProdData1['solgen'],0,10,'UTF-8')."..." : $ProdData1['solgen'])."</a></span>";
					
					echo "</td>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td class=\"slide_5_pro_title\">";
					
					if( ${$NowData}['pid1'] )
						echo "<a href=\"pro_info.php?id=".${$NowData}['pid1']."&sid=".$this->shopid."\">".(mb_strlen($ProdData1['name'],'UTF-8') > 30 ? mb_substr($ProdData1['name'],0,30,'UTF-8')."..." : $ProdData1['name'])."</a>";
					
					echo "</td>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td class=\"slide_5_pro_price\">";
					
					if( ${$NowData}['pid1'] )
						echo("$<strong class=\"price_num\"><a href=\"pro_info.php?id=".${$NowData}['pid1']."&sid=".$this->shopid."\">".$ProdData1['price']."</a></strong><span class=\"slogan_buynow\"><a href=\"pro_info.php?id=".${$NowData}['pid1']."\">搶購</a></span>");
					
					echo "</td>\n";
		 			echo "                        </tr>\n";
		 			echo "                      </table>\n";
		 			echo "                    </td>\n";

		 			echo "                    <td scope=\"col\">\n";
		 			echo "                      <table cellspacing=\"0\" cellpadding=\"0\" class=\"slide_5_pro\">\n";
		 			echo "                        <tr>\n";
		 			echo "                          <th scope=\"col\" class=\"slide_5_pro_img\">";
					
					if( ${$NowData}['pid2'] )
						echo "<a href=\"pro_info.php?id=".${$NowData}['pid2']."&sid=".$this->shopid."\"><img alt=\"" . $ProdData2['name'] . "\" title=\"" . $ProdData2['name'] . "\" src=\"".(Upload_Url.($ProdData2['prod_pic'] != "" ? $ProdData2['prod_pic'] : "default/default_140_140.jpg"))."\" width=\"140\" height=\"140\" /></a>";
					
					echo "</th>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td>";
					
					if( ${$NowData}['pid2'] )
						echo "<span class=\"slogan_orange\"><a href=\"pro_info.php?id=".${$NowData}['pid2']."&sid=".$this->shopid."\">".(mb_strlen($ProdData2['solgen'],'UTF-8') > 10 ? mb_substr($ProdData2['solgen'],0,10,'UTF-8')."..." : $ProdData2['solgen'])."</a></span>";
					
					echo "</td>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td class=\"slide_5_pro_title\">";
					
					if( ${$NowData}['pid2'] )
						echo "<a href=\"pro_info.php?id=".${$NowData}['pid2']."&sid=".$this->shopid."\">".(mb_strlen($ProdData2['name'],'UTF-8') > 30 ? mb_substr($ProdData2['name'],0,30,'UTF-8')."..." : $ProdData2['name'])."</a>";
					
					echo "</td>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td class=\"slide_5_pro_price\">";
					
					if( ${$NowData}['pid2'] )
						echo("$<strong class=\"price_num\"><a href=\"pro_info.php?id=".${$NowData}['pid2']."&sid=".$this->shopid."\">".$ProdData2['price']."</a></strong><span class=\"slogan_buynow\"><a href=\"pro_info.php?id=".${$NowData}['pid2']."\">搶購</a></span>");
					
					echo "</td>\n";
		 			echo "                        </tr>\n";
		 			echo "                      </table>\n";
		 			echo "                    </td>\n";

		 			echo "                    <td scope=\"col\">\n";
		 			echo "                      <table cellspacing=\"0\" cellpadding=\"0\" class=\"slide_5_pro\">\n";
		 			echo "                        <tr>\n";
		 			echo "                          <th scope=\"col\" class=\"slide_5_pro_img\">";
					
					if( ${$NowData}['pid3'] )
						echo "<a href=\"pro_info.php?id=".${$NowData}['pid3']."&sid=".$this->shopid."\"><img alt=\"" . $ProdData3['name'] . "\" title=\"" . $ProdData3['name'] . "\" src=\"".(Upload_Url.($ProdData3['prod_pic'] != "" ? $ProdData3['prod_pic'] : "default/default_140_140.jpg"))."\" width=\"140\" height=\"140\" /></a>";
					
					echo "</th>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td>";
					
					if( ${$NowData}['pid3'] )
						echo "<span class=\"slogan_orange\"><a href=\"pro_info.php?id=".${$NowData}['pid3']."&sid=".$this->shopid."\">".(mb_strlen($ProdData3['solgen'],'UTF-8') > 10 ? mb_substr($ProdData3['solgen'],0,10,'UTF-8')."..." : $ProdData3['solgen'])."</a></span>";
					
					echo "</td>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td class=\"slide_5_pro_title\">";
					
					if( ${$NowData}['pid3'] )
						echo "<a href=\"pro_info.php?id=".${$NowData}['pid3']."&sid=".$this->shopid."\">".(mb_strlen($ProdData3['name'],'UTF-8') > 30 ? mb_substr($ProdData3['name'],0,30,'UTF-8')."..." : $ProdData3['name'])."</a>";
					
					echo "</td>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td class=\"slide_5_pro_price\">";
					
					if( ${$NowData}['pid3'] )
						echo("$<strong class=\"price_num\"><a href=\"pro_info.php?id=".${$NowData}['pid3']."&sid=".$this->shopid."\">".$ProdData3['price']."</a></strong><span class=\"slogan_buynow\"><a href=\"pro_info.php?id=".${$NowData}['pid3']."\">搶購</a></span>");
					
					echo "</td>\n";
		 			echo "                        </tr>\n";
		 			echo "                      </table>\n";
		 			echo "                    </td>\n";

		 			echo "                    <td scope=\"col\">\n";
		 			echo "                      <table cellspacing=\"0\" cellpadding=\"0\" class=\"slide_5_pro\">\n";
		 			echo "                        <tr>\n";
		 			echo "                          <th scope=\"col\" class=\"slide_5_pro_img\">";
					
					if( ${$NowData}['pid4'] )
						echo "<a href=\"pro_info.php?id=".${$NowData}['pid4']."&sid=".$this->shopid."\"><img alt=\"" . $ProdData4['name'] . "\" title=\"" . $ProdData4['name'] . "\" src=\"".(Upload_Url.($ProdData4['prod_pic'] != "" ? $ProdData4['prod_pic'] : "default/default_140_140.jpg"))."\" width=\"140\" height=\"140\" /></a>";
					
					echo "</th>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td>";
					
					if( ${$NowData}['pid4'] )
						echo "<span class=\"slogan_orange\"><a href=\"pro_info.php?id=".${$NowData}['pid4']."&sid=".$this->shopid."\">".(mb_strlen($ProdData4['solgen'],'UTF-8') > 10 ? mb_substr($ProdData4['solgen'],0,10,'UTF-8')."..." : $ProdData4['solgen'])."</a></span>";
					
					echo "</td>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td class=\"slide_5_pro_title\">";
					
					if( ${$NowData}['pid4'] )
						echo "<a href=\"pro_info.php?id=".${$NowData}['pid4']."&sid=".$this->shopid."\">".(mb_strlen($ProdData4['name'],'UTF-8') > 30 ? mb_substr($ProdData4['name'],0,30,'UTF-8')."..." : $ProdData4['name'])."</a>";
					
					echo "</td>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td class=\"slide_5_pro_price\">";
					
					if( ${$NowData}['pid4'] )
						echo("$<strong class=\"price_num\"><a href=\"pro_info.php?id=".${$NowData}['pid4']."&sid=".$this->shopid."\">".$ProdData4['price']."</a></strong><span class=\"slogan_buynow\"><a href=\"pro_info.php?id=".${$NowData}['pid4']."\">搶購</a></span>");
					
					echo "</td>\n";
		 			echo "                        </tr>\n";
		 			echo "                      </table>\n";
		 			echo "                    </td>\n";

		 			echo "                    <td scope=\"col\">\n";
		 			echo "                      <table cellspacing=\"0\" cellpadding=\"0\" class=\"slide_5_pro\">\n";
		 			echo "                        <tr>\n";
		 			echo "                          <th scope=\"col\" class=\"slide_5_pro_img\">";
					
					if( ${$NowData}['pid5'] )
						echo "<a href=\"pro_info.php?id=".${$NowData}['pid5']."&sid=".$this->shopid."\"><img alt=\"" . $ProdData5['name'] . "\" title=\"" . $ProdData5['name'] . "\" src=\"".(Upload_Url.($ProdData5['prod_pic'] != "" ? $ProdData5['prod_pic'] : "default/default_140_140.jpg"))."\" width=\"140\" height=\"140\" /></a>";
					
					echo "</th>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td>";
					
					if( ${$NowData}['pid5'] )
						echo "<span class=\"slogan_orange\"><a href=\"pro_info.php?id=".${$NowData}['pid5']."&sid=".$this->shopid."\">".(mb_strlen($ProdData5['solgen'],'UTF-8') > 10 ? mb_substr($ProdData5['solgen'],0,10,'UTF-8')."..." : $ProdData5['solgen'])."</a></span>";
					
					echo "</td>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td class=\"slide_5_pro_title\">";
					
					if( ${$NowData}['pid5'] )
						echo "<a href=\"pro_info.php?id=".${$NowData}['pid5']."&sid=".$this->shopid."\">".(mb_strlen($ProdData5['name'],'UTF-8') > 30 ? mb_substr($ProdData5['name'],0,30,'UTF-8')."..." : $ProdData5['name'])."</a>";
					
					echo "</td>\n";
		 			echo "                        </tr>\n";
		 			echo "                        <tr>\n";
		 			echo "                          <td class=\"slide_5_pro_price\">";
					
					if( ${$NowData}['pid5'] )
						echo("$<strong class=\"price_num\"><a href=\"pro_info.php?id=".${$NowData}['pid5']."&sid=".$this->shopid."\">".$ProdData5['price']."</a></strong><span class=\"slogan_buynow\"><a href=\"pro_info.php?id=".${$NowData}['pid5']."\">搶購</a></span>");
					
					echo "</td>\n";
		 			echo "                        </tr>\n";
		 			echo "                      </table>\n";
		 			echo "                    </td>\n";
	 				echo "                  </tr>\n";
	 				echo "                </table>\n";
	 				echo "              </div>\n";

	 			}

	 		}
 			echo "          </div><!--End of tabs-->\n";
 			echo "        </div><!--End of main_pro_slide_deepblue-->\n";

 		}

		function CreateHtml_ChildClass_BRANCH($_date){

			global $g_db;

			$sqlstr = "Select `shopid` FROM `".Web_Shop."` WHERE `DelFlag` = '' and `serno` = '".$this->shopid."'";
			$ShopID = $g_db->getOne( $sqlstr );

			switch($ShopID){
				case 1:
					$HeaderClass = "main_sort_title_orange";
					break;
				case 2: case 3: case 4:
					$HeaderClass = "main_sort_title_blue";
					break;
				case 5:
					$HeaderClass = "main_sort_title_pink";
					break;
				case 6: case 7:
					$HeaderClass = "main_sort_title_purple";
					break;
				case 8: case 9:
					$HeaderClass = "main_sort_title_yellow";
					break;
				case 10: case 11:
					$HeaderClass = "main_sort_title_green";
					break;
				case 12:
					$HeaderClass = "main_sort_title_red";
					break;
				default:
					$HeaderClass = "main_sort_title_black";
					break;

			}

			$sqlstr = "SELECT `serno`,`name`,`price`,`prod_pic`,`flag_adult` FROM `".Front_Product."` WHERE `DelFlag` = '' and `status` = '".FProduct_Status_Up."' and `price` > '0' and `open_sale_time` <= '".$_date."' and `sale_down_time` > '".$_date."' and `classcode` like '%\"".$this->shopid."\"%' ORDER BY `show_time` DESC LIMIT 4";
			$ProductList = $g_db->getAll($sqlstr);

			echo "        <div class=\"".$HeaderClass." pngbg\">\n";
			echo "          <h3 class=\"main_sort_title_name\">AUTOBUY 館長推薦</h3>\n";
			echo "        </div>\n";
			echo "        <table cellspacing=\"0\" cellpadding=\"0\" class=\"sort_hot_pro_table\">\n";
			echo "          <tr>\n";
			echo "            <td class=\"sort_hot_pro_info\">\n";
			echo "              <table cellspacing=\"0\" cellpadding=\"0\" class=\"slide_5_pro_detail\">\n";
			echo "                <tr>\n";
			echo "                  <th class=\"slide_5_pro_img\" scope=\"col\">";
			
			if( $ProductList[0]['serno'] )
				echo("<a href=\"pro_info.php?id=".$ProductList[0]['serno']."&sid=".$this->shopid."\"><img alt=\"" . $ProductList[0]['name'] . "\" title=\"" . $ProductList[0]['name'] . "\" src=\"".(Upload_Url.($ProductList[0]['prod_pic'] != "" ? $ProductList[0]['prod_pic'] : "default/default_140_140.jpg"))."\" width=\"140\" height=\"140\" /></a>");
			
			echo "</th>\n";
			echo "                </tr>\n";
			echo "                <tr>\n";
			echo "                  <td><span class=\"slogan_orange\">";
			
			if( $ProductList[0]['serno'] )
				echo("<a href=\"pro_info.php?id=".$ProductList[0]['serno']."&sid=".$this->shopid."\">".(mb_strlen($ProductList[0]['solgen'],'UTF-8') > 10 ? mb_substr($ProductList[0]['solgen'],0,10,'UTF-8')."..." : $ProductList[0]['solgen'])."</a></span>");
			
			echo "</td>\n";
			echo "                </tr>\n";
			echo "                <tr>\n";
			echo "                  <td class=\"slide_5_pro_title\">";
			
			if( $ProductList[0]['serno'] )
				echo("<a href=\"pro_info.php?id=".$ProductList[0]['serno']."&sid=".$this->shopid."\" class=\"blue_big\">".(mb_strlen($ProductList[0]['name'],'UTF-8') > 30 ? mb_substr($ProductList[0]['name'],0,30,'UTF-8')."..." : $ProductList[0]['name'])."</a>");
			
			echo "</td>\n";
			echo "                </tr>\n";
			echo "                <tr>\n";
			echo "                  <td class=\"slide_5_pro_price\">";
			
			if( $ProductList[0]['serno'] )
				echo("特價$<strong class=\"price_num\"><a href=\"pro_info.php?id=".$ProductList[0]['serno']."&sid=".$this->shopid."\">".$ProductList[0]['price']."</a></strong><span class=\"slogan_buynow\"><a href=\"pro_info.php?id=".$ProductList[0]['serno']."\">搶購</a></span>");
			
			echo "</td>\n";
			echo "                </tr>\n";
			echo "               </table>\n";
			echo "            </td>\n";
			echo "            <td class=\"sort_hot_pro_info\">\n";
			echo "              <table cellspacing=\"0\" cellpadding=\"0\" class=\"slide_5_pro_detail\">\n";
			echo "                <tr>\n";
			echo "                  <th class=\"slide_5_pro_img\" scope=\"col\">";
			
			if( $ProductList[1]['serno'] )
				echo("<a href=\"pro_info.php?id=".$ProductList[1]['serno']."&sid=".$this->shopid."\"><img alt=\"" . $ProductList[1]['name'] . "\" title=\"" . $ProductList[1]['name'] . "\" src=\"".(Upload_Url.($ProductList[1]['prod_pic'] != "" ? $ProductList[1]['prod_pic'] : "default/default_140_140.jpg"))."\" width=\"140\" height=\"140\" /></a>");
			
			echo "</th>\n";
			echo "                </tr>\n";
			echo "                <tr>\n";
			echo "                  <td><span class=\"slogan_orange\">";
			
			if( $ProductList[1]['serno'] )
				echo("<a href=\"pro_info.php?id=".$ProductList[1]['serno']."&sid=".$this->shopid."\">".(mb_strlen($ProductList[1]['solgen'],'UTF-8') > 10 ? mb_substr($ProductList[1]['solgen'],0,10,'UTF-8')."..." : $ProductList[1]['solgen'])."</a></span>");
			
			echo "</td>\n";
			echo "                </tr>\n";
			echo "                <tr>\n";
			echo "                  <td class=\"slide_5_pro_title\">";
			
			if( $ProductList[1]['serno'] )
				echo("<a href=\"pro_info.php?id=".$ProductList[1]['serno']."&sid=".$this->shopid."\" class=\"blue_big\">".(mb_strlen($ProductList[1]['name'],'UTF-8') > 30 ? mb_substr($ProductList[1]['name'],0,30,'UTF-8')."..." : $ProductList[1]['name'])."</a>");
			
			echo "</td>\n";
			echo "                </tr>\n";
			echo "                <tr>\n";
			echo "                  <td class=\"slide_5_pro_price\">";
			
			if( $ProductList[1]['serno'] )
				echo("特價$<strong class=\"price_num\"><a href=\"pro_info.php?id=".$ProductList[1]['serno']."&sid=".$this->shopid."\">".$ProductList[1]['price']."</a></strong><span class=\"slogan_buynow\"><a href=\"pro_info.php?id=".$ProductList[1]['serno']."\">搶購</a></span>");
			
			echo "</td>\n";
			echo "                </tr>\n";
			echo "               </table>\n";
			echo "            </td>\n";
			echo "            <td class=\"sort_hot_pro_info\">\n";
			echo "              <table cellspacing=\"0\" cellpadding=\"0\" class=\"slide_5_pro_detail\">\n";
			echo "                <tr>\n";
			echo "                  <th class=\"slide_5_pro_img\" scope=\"col\">";
			
			if( $ProductList[2]['serno'] )
				echo("<a href=\"pro_info.php?id=".$ProductList[2]['serno']."&sid=".$this->shopid."\"><img alt=\"" . $ProductList[2]['name'] . "\" title=\"" . $ProductList[2]['name'] . "\" src=\"".(Upload_Url.($ProductList[2]['prod_pic'] != "" ? $ProductList[2]['prod_pic'] : "default/default_140_140.jpg"))."\" width=\"140\" height=\"140\" /></a>");
			
			echo "</th>\n";
			echo "                </tr>\n";
			echo "                <tr>\n";
			echo "                  <td><span class=\"slogan_orange\">";
			
			if( $ProductList[2]['serno'] )
				echo("<a href=\"pro_info.php?id=".$ProductList[2]['serno']."&sid=".$this->shopid."\">".(mb_strlen($ProductList[2]['solgen'],'UTF-8') > 10 ? mb_substr($ProductList[2]['solgen'],0,10,'UTF-8')."..." : $ProductList[2]['solgen'])."</a></span>");
			
			echo "</td>\n";
			echo "                </tr>\n";
			echo "                <tr>\n";
			echo "                  <td class=\"slide_5_pro_title\">";
			
			if( $ProductList[2]['serno'] )
				echo("<a href=\"pro_info.php?id=".$ProductList[2]['serno']."&sid=".$this->shopid."\" class=\"blue_big\">".(mb_strlen($ProductList[2]['name'],'UTF-8') > 30 ? mb_substr($ProductList[2]['name'],0,30,'UTF-8')."..." : $ProductList[2]['name'])."</a>");
			
			echo "</td>\n";
			echo "                </tr>\n";
			echo "                <tr>\n";
			echo "                  <td class=\"slide_5_pro_price\">";
			
			if( $ProductList[2]['serno'] )
				echo("特價$<strong class=\"price_num\"><a href=\"pro_info.php?id=".$ProductList[2]['serno']."&sid=".$this->shopid."\">".$ProductList[2]['price']."</a></strong><span class=\"slogan_buynow\"><a href=\"pro_info.php?id=".$ProductList[2]['serno']."\">搶購</a></span>");
			
			echo "</td>\n";
			echo "                </tr>\n";
			echo "               </table>\n";
			echo "            </td>\n";
			echo "            <td class=\"sort_hot_pro_info\">\n";
			echo "              <table cellspacing=\"0\" cellpadding=\"0\" class=\"slide_5_pro_detail\">\n";
			echo "                <tr>\n";
			echo "                  <th class=\"slide_5_pro_img\" scope=\"col\">";
			
			if( $ProductList[3]['serno'] )
				echo("<a href=\"pro_info.php?id=".$ProductList[3]['serno']."&sid=".$this->shopid."\"><img alt=\"" . $ProductList[3]['name'] . "\" title=\"" . $ProductList[3]['name'] . "\" src=\"".(Upload_Url.($ProductList[3]['prod_pic'] != "" ? $ProductList[3]['prod_pic'] : "default/default_140_140.jpg"))."\" width=\"140\" height=\"140\" /></a>");
			
			echo "</th>\n";
			echo "                </tr>\n";
			echo "                <tr>\n";
			echo "                  <td><span class=\"slogan_orange\">";
			
			if( $ProductList[3]['serno'] )
				echo("<a href=\"pro_info.php?id=".$ProductList[3]['serno']."&sid=".$this->shopid."\">".(mb_strlen($ProductList[3]['solgen'],'UTF-8') > 10 ? mb_substr($ProductList[3]['solgen'],0,10,'UTF-8')."..." : $ProductList[3]['solgen'])."</a></span>");
			
			echo "</td>\n";
			echo "                </tr>\n";
			echo "                <tr>\n";
			echo "                  <td class=\"slide_5_pro_title\">";
			
			if( $ProductList[3]['serno'] )
				echo("<a href=\"pro_info.php?id=".$ProductList[3]['serno']."&sid=".$this->shopid."\" class=\"blue_big\">".(mb_strlen($ProductList[3]['name'],'UTF-8') > 30 ? mb_substr($ProductList[3]['name'],0,30,'UTF-8')."..." : $ProductList[3]['name'])."</a>");
			
			echo "</td>\n";
			echo "                </tr>\n";
			echo "                <tr>\n";
			echo "                  <td class=\"slide_5_pro_price\">";
			
			if( $ProductList[3]['serno'] )
				echo("特價$<strong class=\"price_num\"><a href=\"pro_info.php?id=".$ProductList[3]['serno']."&sid=".$this->shopid."\">".$ProductList[3]['price']."</a></strong><span class=\"slogan_buynow\"><a href=\"pro_info.php?id=".$ProductList[3]['serno']."\">搶購</a></span>");
			
			echo "</td>\n";
			echo "                </tr>\n";
			echo "               </table>\n";
			echo "            </td>\n";
			echo "          </tr>\n";
			echo "        </table>\n";

 		}

		function CreateHtml_MainClass_PRODSHOW_BRANCH($_date){

			global $g_db;

			$sqlstr = "SELECT `serno`,`shopid`,`shopname` FROM `".Web_Shop."` WHERE `DelFlag` = '' and `parentid` = '".$this->shopid."' ORDER BY `order`,`serno`";
			$MainClassData = $g_db->getAll($sqlstr);

			for($mno = 0; $mno < sizeof($MainClassData); $mno++){

				switch($MainClassData[$mno]['shopid']){
					case 1:
						$HeaderClass = "main_sort_title_orange";
						break;
					case 2: case 3: case 4:
						$HeaderClass = "main_sort_title_blue";
						break;
					case 5:
						$HeaderClass = "main_sort_title_pink";
						break;
					case 6: case 7:
						$HeaderClass = "main_sort_title_purple";
						break;
					case 8: case 9:
						$HeaderClass = "main_sort_title_yellow";
						break;
					case 10: case 11:
						$HeaderClass = "main_sort_title_green";
						break;
					case 12:
						$HeaderClass = "main_sort_title_red";
						break;
					default:
						$HeaderClass = "main_sort_title_black";
						break;

				}


				//搜尋分類
				$sqlstr = "SELECT `serno` FROM `".Web_Shop."` WHERE `DelFlag` = '' and `parentid` = '".$MainClassData[$mno]['serno']."'";
				$ClassList = $g_db->getAll($sqlstr);
				$SearchWhereStr = "";
				for($i = 0; $i < sizeof($ClassList); $i++)
					$SearchWhereStr .= " or `classcode` like '%\"".$ClassList[$i]['serno']."\"%'";


				$Data1 = "";
				$Data2 = "";
				$Data3 = "";
				$Data4 = "";
				$Data5 = "";

				$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($MainClassData[$mno]['serno'])."' and `block` = '".($this->block)."' and `tag` = '1' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
				if( $g_db->numRows( $g_db->query( $sqlstr ) ) > 0 ){

					$Data1 = $g_db->getRow( $sqlstr );

				}else{

					$sqlstr = "SELECT `serno` FROM `".Front_Product."` WHERE `DelFlag` = '' and `status` = '".FProduct_Status_Up."' and `price` > '0' and `open_sale_time` <= '".$_date."' and `sale_down_time` > '".$_date."' and (`classcode` like '%\"".$MainClassData[$mno]['serno']."\"%' ".$SearchWhereStr.") ORDER BY `show_time` DESC LIMIT 5";
					$ProductList = $g_db->getAll($sqlstr);

					$Data1['name'] = "最新到貨";
					$Data1['pid1'] = $ProductList[0]['serno'] != "" ? $ProductList[0]['serno'] : "";
					$Data1['pid2'] = $ProductList[1]['serno'] != "" ? $ProductList[1]['serno'] : "";
					$Data1['pid3'] = $ProductList[2]['serno'] != "" ? $ProductList[2]['serno'] : "";
					$Data1['pid4'] = $ProductList[3]['serno'] != "" ? $ProductList[3]['serno'] : "";
					$Data1['pid5'] = $ProductList[4]['serno'] != "" ? $ProductList[4]['serno'] : "";

				}

				$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($MainClassData[$mno]['serno'])."' and `block` = '".($this->block)."' and `tag` = '2' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
				if( $g_db->numRows( $g_db->query( $sqlstr ) ) > 0 ){

					$Data2 = $g_db->getRow( $sqlstr );

				}else{

					$sqlstr = "SELECT `serno` FROM `".Front_Product."` WHERE `DelFlag` = '' and `status` = '".FProduct_Status_Up."' and `price` > '0' and `open_sale_time` <= '".$_date."' and `sale_down_time` > '".$_date."' and (`classcode` like '%\"".$MainClassData[$mno]['serno']."\"%' ".$SearchWhereStr.") ORDER BY RAND() LIMIT 5";
					$ProductList = $g_db->getAll($sqlstr);

					$Data2['name'] = "熱銷商品";
					$Data2['pid1'] = $ProductList[0]['serno'] != "" ? $ProductList[0]['serno'] : "";
					$Data2['pid2'] = $ProductList[1]['serno'] != "" ? $ProductList[1]['serno'] : "";
					$Data2['pid3'] = $ProductList[2]['serno'] != "" ? $ProductList[2]['serno'] : "";
					$Data2['pid4'] = $ProductList[3]['serno'] != "" ? $ProductList[3]['serno'] : "";
					$Data2['pid5'] = $ProductList[4]['serno'] != "" ? $ProductList[4]['serno'] : "";

				}

				$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($MainClassData[$mno]['serno'])."' and `block` = '".($this->block)."' and `tag` = '3' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
				if( $g_db->numRows( $g_db->query( $sqlstr ) ) > 0 ){

					$Data3 = $g_db->getRow( $sqlstr );

				}else{

					$sqlstr = "SELECT `serno` FROM `".Front_Product."` WHERE `DelFlag` = '' and `status` = '".FProduct_Status_Up."' and `price` > '0' and `open_sale_time` <= '".$_date."' and `sale_down_time` > '".$_date."' and (`classcode` like '%\"".$MainClassData[$mno]['serno']."\"%' ".$SearchWhereStr.") ORDER BY `sector_open_sale_time`,RAND() LIMIT 5";
					$ProductList = $g_db->getAll($sqlstr);

					$Data3['name'] = "促銷特賣";
					$Data3['pid1'] = $ProductList[0]['serno'] != "" ? $ProductList[0]['serno'] : "";
					$Data3['pid2'] = $ProductList[1]['serno'] != "" ? $ProductList[1]['serno'] : "";
					$Data3['pid3'] = $ProductList[2]['serno'] != "" ? $ProductList[2]['serno'] : "";
					$Data3['pid4'] = $ProductList[3]['serno'] != "" ? $ProductList[3]['serno'] : "";
					$Data3['pid5'] = $ProductList[4]['serno'] != "" ? $ProductList[4]['serno'] : "";

				}

				$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($MainClassData[$mno]['serno'])."' and `block` = '".($this->block)."' and `tag` = '4' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
				if( $g_db->numRows( $g_db->query( $sqlstr ) ) > 0 )
					$Data4 = $g_db->getRow( $sqlstr );

				$sqlstr = "SELECT * FROM `".Top_ShopConfig."` WHERE `DelFlag` = '' and `shopid` = '".($MainClassData[$mno]['serno'])."' and `block` = '".($this->block)."' and `tag` = '5' and `startdate` <= '".$_date."' and `enddate` > '".$_date."' and`showup` = 'Y' ORDER BY RAND() Limit 1";
				if( $g_db->numRows( $g_db->query( $sqlstr ) ) > 0 )
					$Data5 = $g_db->getRow( $sqlstr );

				if($Data1 != "" || ($Data1 == "" && $Data2 == "" && $Data3 == "" && $Data4 == "" && $Data5 == "")){

					echo "        <div class=\"".$HeaderClass." pngbg\">\n";
					echo "          <h3 class=\"main_sort_title_name\">".$MainClassData[$mno]['shopname']."</h3>\n";
					echo "          <span class=\"main_sort_title_allpro\"><a href=\"sort.php?sid=".$MainClassData[$mno]['serno']."\">全部商品</a></span>\n";
					echo "        </div>\n";

				}

	 			echo "        <div id=\"main_pro_slide_deepblue\">\n";
	 			echo "          <div class=\"tabs\">\n";

	 			if($Data1 != "" || ($Data1 == "" && $Data2 == "" && $Data3 == "" && $Data4 == "" && $Data5 == ""))
	 				echo "            <h3 onmouseover=\"changTab(this)\">".$Data1['name']."</h3>\n";
	 			if($Data2 != "")
	 				echo "            <h3 onmouseover=\"changTab(this)\">".$Data2['name']."</h3>\n";
	 			if($Data3 != "")
	 				echo "            <h3 onmouseover=\"changTab(this)\">".$Data3['name']."</h3>\n";
	 			if($Data4 != "")
	 				echo "            <h3 onmouseover=\"changTab(this)\">".$Data4['name']."</h3>\n";
	 			if($Data5 != "")
	 				echo "            <h3 onmouseover=\"changTab(this)\">".$Data5['name']."</h3>\n";

				for($i = 1; $i <= 5; $i++){

					$NowData = "Data".$i;

					if($$NowData != "" || ($i == 1 && $Data1 == "" && $Data2 == "" && $Data3 == "" && $Data4 == "" && $Data5 == "")){

						//抓取商品資料
						$sqlstr = "SELECT `prodserno`,`name`,`solgen`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid1']."'";
						$ProdData1 = $g_db->getRow($sqlstr);
						$sqlstr = "SELECT `prodserno`,`name`,`solgen`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid2']."'";
						$ProdData2 = $g_db->getRow($sqlstr);
						$sqlstr = "SELECT `prodserno`,`name`,`solgen`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid3']."'";
						$ProdData3 = $g_db->getRow($sqlstr);
						$sqlstr = "SELECT `prodserno`,`name`,`solgen`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid4']."'";
						$ProdData4 = $g_db->getRow($sqlstr);
						$sqlstr = "SELECT `prodserno`,`name`,`solgen`,`price`,prod_pic,flag_adult FROM `".Front_Product."` WHERE `DelFlag` = '' and `serno` = '".${$NowData}['pid5']."'";
						$ProdData5 = $g_db->getRow($sqlstr);
	
	
		 				echo "              <div>\n";
		 				echo "                <table cellspacing=\"0\" cellpadding=\"0\" class=\"slide_5_pro_list\">\n";
		 				echo "                  <tr>\n";
			 			echo "                    <td scope=\"col\">\n";
			 			echo "                      <table cellspacing=\"0\" cellpadding=\"0\" class=\"slide_5_pro\">\n";
			 			echo "                        <tr>\n";
			 			echo "                          <th scope=\"col\" class=\"slide_5_pro_img\">";
						
						if( ${$NowData}['pid1'] )
							echo "<a href=\"pro_info.php?id=".${$NowData}['pid1']."\"><img alt=\"" . $ProdData1['name'] . "\" title=\"" . $ProdData1['name'] . "\" src=\"".(Upload_Url.($ProdData1['prod_pic'] != "" ? $ProdData1['prod_pic'] : "default/default_140_140.jpg"))."\" width=\"140\" height=\"140\" /></a>";
						
						echo "</th>\n";
			 			echo "                        </tr>\n";
			 			echo "                        <tr>\n";
			 			echo "                          <td>";
						
						if( ${$NowData}['pid1'] )
							echo "<span class=\"slogan_orange\"><a href=\"pro_info.php?id=".${$NowData}['pid1']."\">".(mb_strlen($ProdData1['solgen'],'UTF-8') > 10 ? mb_substr($ProdData1['solgen'],0,10,'UTF-8')."..." : $ProdData1['solgen'])."</a></span>";
						
						echo "</td>\n";
			 			echo "                        </tr>\n";
			 			echo "                        <tr>\n";
			 			echo "                          <td class=\"slide_5_pro_title\">";
						
						if( ${$NowData}['pid1'] )
							echo "<a href=\"pro_info.php?id=".${$NowData}['pid1']."\">".(mb_strlen($ProdData1['name'],'UTF-8') > 30 ? mb_substr($ProdData1['name'],0,30,'UTF-8')."..." : $ProdData1['name'])."</a>";
						
						echo "</td>\n";
			 			echo "                        </tr>\n";
			 			echo "                        <tr>\n";
			 			echo "                          <td class=\"slide_5_pro_price\">";
						
						if( ${$NowData}['pid1'] )
							echo "$<strong class=\"price_num\"><a href=\"pro_info.php?id=".${$NowData}['pid1']."\">".$ProdData1['price']."</a></strong><span class=\"slogan_buynow\"><a href=\"pro_info.php?id=".${$NowData}['pid1']."\">搶購</a></span>";
						
						echo "</td>\n";
			 			echo "                        </tr>\n";
			 			echo "                      </table>\n";
			 			echo "                    </td>\n";
	
			 			echo "                    <td scope=\"col\">\n";
			 			echo "                      <table cellspacing=\"0\" cellpadding=\"0\" class=\"slide_5_pro\">\n";
			 			echo "                        <tr>\n";
			 			echo "                          <th scope=\"col\" class=\"slide_5_pro_img\">";
						
						if( ${$NowData}['pid2'] )
							echo "<a href=\"pro_info.php?id=".${$NowData}['pid2']."\"><img alt=\"" . $ProdData2['name'] . "\" title=\"" . $ProdData2['name'] . "\" src=\"".(Upload_Url.($ProdData2['prod_pic'] != "" ? $ProdData2['prod_pic'] : "default/default_140_140.jpg"))."\" width=\"140\" height=\"140\" /></a>";
						
						echo "</th>\n";
			 			echo "                        </tr>\n";
			 			echo "                        <tr>\n";
			 			echo "                          <td>";
						
						if( ${$NowData}['pid2'] )
							echo "<span class=\"slogan_orange\"><a href=\"pro_info.php?id=".${$NowData}['pid2']."\">".(mb_strlen($ProdData2['solgen'],'UTF-8') > 10 ? mb_substr($ProdData2['solgen'],0,10,'UTF-8')."..." : $ProdData2['solgen'])."</a></span>";
						
						echo "</td>\n";
			 			echo "                        </tr>\n";
			 			echo "                        <tr>\n";
			 			echo "                          <td class=\"slide_5_pro_title\">";
						
						if( ${$NowData}['pid2'] )
							echo "<a href=\"pro_info.php?id=".${$NowData}['pid2']."\">".(mb_strlen($ProdData2['name'],'UTF-8') > 30 ? mb_substr($ProdData2['name'],0,30,'UTF-8')."..." : $ProdData2['name'])."</a>";
						
						echo "</td>\n";
			 			echo "                        </tr>\n";
			 			echo "                        <tr>\n";
			 			echo "                          <td class=\"slide_5_pro_price\">";
						
						if( ${$NowData}['pid2'] )
							echo "$<strong class=\"price_num\"><a href=\"pro_info.php?id=".${$NowData}['pid2']."\">".$ProdData2['price']."</a></strong><span class=\"slogan_buynow\"><a href=\"pro_info.php?id=".${$NowData}['pid2']."\">搶購</a></span>";
						
						echo "</td>\n";
			 			echo "                        </tr>\n";
			 			echo "                      </table>\n";
			 			echo "                    </td>\n";
	
			 			echo "                    <td scope=\"col\">\n";
			 			echo "                      <table cellspacing=\"0\" cellpadding=\"0\" class=\"slide_5_pro\">\n";
			 			echo "                        <tr>\n";
			 			echo "                          <th scope=\"col\" class=\"slide_5_pro_img\">";
						
						if( ${$NowData}['pid3'] )
							echo "<a href=\"pro_info.php?id=".${$NowData}['pid3']."\"><img alt=\"" . $ProdData3['name'] . "\" title=\"" . $ProdData3['name'] . "\" src=\"".(Upload_Url.($ProdData3['prod_pic'] != "" ? $ProdData3['prod_pic'] : "default/default_140_140.jpg"))."\" width=\"140\" height=\"140\" /></a>";
						
						echo "</th>\n";
			 			echo "                        </tr>\n";
			 			echo "                        <tr>\n";
			 			echo "                          <td>";
						
						if( ${$NowData}['pid3'] )
							echo "<span class=\"slogan_orange\"><a href=\"pro_info.php?id=".${$NowData}['pid3']."\">".(mb_strlen($ProdData3['solgen'],'UTF-8') > 10 ? mb_substr($ProdData3['solgen'],0,10,'UTF-8')."..." : $ProdData3['solgen'])."</a></span>";
						
						echo "</td>\n";
			 			echo "                        </tr>\n";
			 			echo "                        <tr>\n";
			 			echo "                          <td class=\"slide_5_pro_title\">";
						
						if( ${$NowData}['pid3'] )
							echo "<a href=\"pro_info.php?id=".${$NowData}['pid3']."\">".(mb_strlen($ProdData3['name'],'UTF-8') > 30 ? mb_substr($ProdData3['name'],0,30,'UTF-8')."..." : $ProdData3['name'])."</a>";
						
						echo "</td>\n";
			 			echo "                        </tr>\n";
			 			echo "                        <tr>\n";
			 			echo "                          <td class=\"slide_5_pro_price\">";
						
						if( ${$NowData}['pid3'] )
							echo "$<strong class=\"price_num\"><a href=\"pro_info.php?id=".${$NowData}['pid3']."\">".$ProdData3['price']."</a></strong><span class=\"slogan_buynow\"><a href=\"pro_info.php?id=".${$NowData}['pid3']."\">搶購</a></span>";
						
						echo "</td>\n";
			 			echo "                        </tr>\n";
			 			echo "                      </table>\n";
			 			echo "                    </td>\n";
	
			 			echo "                    <td scope=\"col\">\n";
			 			echo "                      <table cellspacing=\"0\" cellpadding=\"0\" class=\"slide_5_pro\">\n";
			 			echo "                        <tr>\n";
			 			echo "                          <th scope=\"col\" class=\"slide_5_pro_img\">";
						
						if( ${$NowData}['pid4'] )
							echo "<a href=\"pro_info.php?id=".${$NowData}['pid4']."\"><img alt=\"" . $ProdData4['name'] . "\" title=\"" . $ProdData4['name'] . "\" src=\"".(Upload_Url.($ProdData4['prod_pic'] != "" ? $ProdData4['prod_pic'] : "default/default_140_140.jpg"))."\" width=\"140\" height=\"140\" /></a>";
						
						echo "</th>\n";
			 			echo "                        </tr>\n";
			 			echo "                        <tr>\n";
			 			echo "                          <td>";
						
						if( ${$NowData}['pid4'] )
							echo "<span class=\"slogan_orange\"><a href=\"pro_info.php?id=".${$NowData}['pid4']."\">".(mb_strlen($ProdData4['solgen'],'UTF-8') > 10 ? mb_substr($ProdData4['solgen'],0,10,'UTF-8')."..." : $ProdData4['solgen'])."</a></span>";
						
						echo "</td>\n";
			 			echo "                        </tr>\n";
			 			echo "                        <tr>\n";
			 			echo "                          <td class=\"slide_5_pro_title\">";
						
						if( ${$NowData}['pid4'] )
							echo "<a href=\"pro_info.php?id=".${$NowData}['pid4']."\">".(mb_strlen($ProdData4['name'],'UTF-8') > 30 ? mb_substr($ProdData4['name'],0,30,'UTF-8')."..." : $ProdData4['name'])."</a>";
						
						echo "</td>\n";
			 			echo "                        </tr>\n";
			 			echo "                        <tr>\n";
			 			echo "                          <td class=\"slide_5_pro_price\">";
						
						if( ${$NowData}['pid4'] )
							echo "$<strong class=\"price_num\"><a href=\"pro_info.php?id=".${$NowData}['pid4']."\">".$ProdData4['price']."</a></strong><span class=\"slogan_buynow\"><a href=\"pro_info.php?id=".${$NowData}['pid4']."\">搶購</a></span>";
						
						echo "</td>\n";
			 			echo "                        </tr>\n";
			 			echo "                      </table>\n";
			 			echo "                    </td>\n";
	
			 			echo "                    <td scope=\"col\">\n";
			 			echo "                      <table cellspacing=\"0\" cellpadding=\"0\" class=\"slide_5_pro\">\n";
			 			echo "                        <tr>\n";
			 			echo "                          <th scope=\"col\" class=\"slide_5_pro_img\">";
						
						if( ${$NowData}['pid5'] )
							echo "<a href=\"pro_info.php?id=".${$NowData}['pid5']."\"><img alt=\"" . $ProdData5['name'] . "\" title=\"" . $ProdData5['name'] . "\" src=\"".(Upload_Url.($ProdData5['prod_pic'] != "" ? $ProdData5['prod_pic'] : "default/default_140_140.jpg"))."\" width=\"140\" height=\"140\" /></a>";
						
						echo "</th>\n";
			 			echo "                        </tr>\n";
			 			echo "                        <tr>\n";
			 			echo "                          <td>";
						
						if( ${$NowData}['pid5'] )
							echo "<span class=\"slogan_orange\"><a href=\"pro_info.php?id=".${$NowData}['pid5']."\">".(mb_strlen($ProdData5['solgen'],'UTF-8') > 10 ? mb_substr($ProdData5['solgen'],0,10,'UTF-8')."..." : $ProdData5['solgen'])."</a></span>";
						
						echo "</td>\n";
			 			echo "                        </tr>\n";
			 			echo "                        <tr>\n";
			 			echo "                          <td class=\"slide_5_pro_title\">";
						
						if( ${$NowData}['pid5'] )
							echo "<a href=\"pro_info.php?id=".${$NowData}['pid5']."\">".(mb_strlen($ProdData5['name'],'UTF-8') > 30 ? mb_substr($ProdData5['name'],0,30,'UTF-8')."..." : $ProdData5['name'])."</a>";
						
						echo "</td>\n";
			 			echo "                        </tr>\n";
			 			echo "                        <tr>\n";
			 			echo "                          <td class=\"slide_5_pro_price\">";
						
						if( ${$NowData}['pid5'] )
							echo "$<strong class=\"price_num\"><a href=\"pro_info.php?id=".${$NowData}['pid5']."\">".$ProdData5['price']."</a></strong><span class=\"slogan_buynow\"><a href=\"pro_info.php?id=".${$NowData}['pid5']."\">搶購</a></span>";
						
						echo "</td>\n";
			 			echo "                        </tr>\n";
			 			echo "                      </table>\n";
			 			echo "                    </td>\n";
		 				echo "                  </tr>\n";
		 				echo "                </table>\n";
		 				echo "              </div>\n";

		 			}

		 		}

	 			echo "          </div><!--End of tabs-->\n";
	 			echo "        </div><!--End of main_pro_slide_deepblue-->\n";

	 		}
 		
 		}

	}

?>
