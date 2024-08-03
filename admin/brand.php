<?php

ini_set('display_errors', 'On');

define('Usable', true);

//Define DIRECTORY_SEPARATOR
if (!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}

include_once('include' . DS . 'backendinit.php');

// 權限檢查
if ($_SESSION['BKUSERID'] == "") {
	header("Location: index.php");
}

//取得權限
include("inc/rightinfo.php");

//初始值設定
$_Table_Main   = "brand";		    //本檔案主資料庫
$_File_Name    = basename(__FILE__);          //目前檔名

$twig->addGlobal('function_title', "作品分類");
$twig->addGlobal('document_path', "作品分類");
$twig->addGlobal('cur_file', basename(__file__));


/*------------------------------------------------------------------------------------------------------------*/
//-- 編輯
/*------------------------------------------------------------------------------------------------------------*/
if ($_REQUEST['flag'] == 'edit') {
	$id = $_GET["id"];
	$twig->addGlobal('id', $id);

	$sqlstr = "select * from {$_Table_Main} order by showseries";
	$sqlary = array();
	$sqlary[":serno"] = $id;
	$data = $g_db->getRow($sqlstr, $sqlary);
	if ($data["showseries"] == "") {
		$data["showseries"] = 100;
	}
	$twig->addGlobal('data', $data);


	$template = $twig->load('brandedit');
	$displayary = array();
	echo $template->render($displayary);
}


/*------------------------------------------------------------------------------------------------------------*/
//-- 儲存編輯
/*------------------------------------------------------------------------------------------------------------*/ elseif ($_REQUEST['flag'] == 'editsave') {

	$serno = $_POST["serno"];

	$data = array();

	$data["brand"] = str_replace("'", "\'", $_POST["brand"]);
	$data["brandchinese"] = str_replace("'", "\'", $_POST["brandchinese"]);
	$data["showseries"]  = $_POST["showseries"];

	//  $data["mappingprod"] = $_POST["mappingprod"];	

	$sqlstr = "SELECT * FROM `" . $_Table_Main . "` WHERE `serno` = :serno ";
	$sqlary = array();
	$sqlary[":serno"] = $serno;
	if ($serno != "" && $g_db->numRows($g_db->query($sqlstr, $sqlary)) > 0) {
		$_SESSION["SendMessageTitle"] = "資料更新完成！";
		$_SESSION["SendMessageMsg"] = "紀錄 :" . $data["title"] . "已更新";
		$g_db->update($_Table_Main, $data, "serno", $serno);
	} else {
		$_SESSION["SendMessageTitle"] = "資料新增完成！";
		$_SESSION["SendMessageMsg"] = "紀錄 :" . $data["title"] . "已新增";
		$serno = $g_db->create($_Table_Main, $data, "");
	}

	//  if ( $_POST["mappingprod"] !="0" ) {
	// 	 // 要同時強制更新 prodtype
	// 	 $sqlstr = "update prodtype set topid=:topid where serno=:serno ";
	// 	 $sqlary = array();
	// 	 $sqlary[":topid"] = $serno;
	// 	 $sqlary[":serno"] = $_POST["mappingprod"];
	// 	 $g_db->query( $sqlstr, $sqlary );
	//  }

	header("Location: " . $_File_Name);
}

/*------------------------------------------------------------------------------------------------------------*/
//-- 刪除單筆
/*------------------------------------------------------------------------------------------------------------*/ elseif ($_REQUEST['flag'] == 'delete') {

	$id = $_GET['id'];
	$sqlary = array();
	$sqlary[":serno"] = $id;

	$sqlstr = " select * from `" . $_Table_Main . "` where serno=:serno ";
	$getinfo = $g_db->getRow($sqlstr, $sqlary);

	$sqlstr = " delete from `" . $_Table_Main . "` where serno=:serno ";
	$g_db->query($sqlstr, $sqlary);

	$_SESSION["SendMessageTitle"] = "資料刪除完成！";
	$_SESSION["SendMessageMsg"] = "紀錄 :" . $getinfo["name"] . "已刪除";
	header("Location: " . $_File_Name);
}

/*------------------------------------------------------------------------------------------------------------*/
//-- 瀏覽
/*------------------------------------------------------------------------------------------------------------*/ else {

	$sqlstr = "select * from {$_Table_Main} order by showseries ";
	$list = $g_db->getAll($sqlstr);
	$twig->addGlobal('list', $list);

	if ($_SESSION["SendMessageTitle"] != "") {
		$twig->addGlobal('SendMessageTitle', $_SESSION["SendMessageTitle"]);
		$twig->addGlobal('SendMessageMsg', $_SESSION["SendMessageMsg"]);
		unset($_SESSION["SendMessageTitle"]);
		unset($_SESSION["SendMessageMsg"]);
	}

	$template = $twig->load('brandlist');
	$displayary = array();
	echo $template->render($displayary);
}
