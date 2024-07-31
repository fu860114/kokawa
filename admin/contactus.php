<?php

    //ini_set('display_errors', 'On');

	define('Usable', true);

	//Define DIRECTORY_SEPARATOR
	if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
	}

	include_once('include' . DS . 'backendinit.php');

	// 權限檢查
	if ( $_SESSION['BKUSERID']=="" ) { header("Location: index.php"); }

    //取得權限
    include("inc/rightinfo.php");
	
	//初始值設定
	$_Table_Main   = "contact";		    //本檔案主資料庫
	$_File_Name    = basename(__FILE__);          //目前檔名
		
	$twig->addGlobal('function_title', "聯絡我們" );
	$twig->addGlobal('document_path', "聯絡我們" );	
	$twig->addGlobal('cur_file', basename(__file__) );

	
/*------------------------------------------------------------------------------------------------------------*/
//-- 編輯
/*------------------------------------------------------------------------------------------------------------*/
if ($_REQUEST['flag'] == 'edit')
{
	$id = $_GET["id"];
	$twig->addGlobal('id', $id );
	
	$sqlstr = "select * from {$_Table_Main} where serno=:serno ";	
	$sqlary = array();
	$sqlary[":serno"] = $id;
	$data = $g_db->getRow($sqlstr,$sqlary);
	$twig->addGlobal('data', $data );
	
	$template = $twig->load('contactedit');
	$displayary = array();
	echo $template->render( $displayary );	
}


/*------------------------------------------------------------------------------------------------------------*/
//-- 儲存編輯
/*------------------------------------------------------------------------------------------------------------*/
elseif ($_REQUEST['flag'] == 'editsave')
{

  	 $serno = $_POST["serno"];

     $data = array();

     $data["name"] = str_replace("'","\'",$_POST["name"]);	
	 $data["ename"] = str_replace("'","\'",$_POST["ename"]);
	 $data["gmap"] = str_replace("'", "\'", $_POST["gmap"]);

	 $sqlstr = "SELECT * FROM `".$_Table_Main."` WHERE `serno` = :serno ";
     $sqlary = array();
     $sqlary[":serno"] = $serno;	 
     if ($serno != "" && $g_db->numRows( $g_db->query($sqlstr,$sqlary) ) > 0) {
	     $_SESSION["SendMessageTitle"] = "資料更新完成！";
	     $_SESSION["SendMessageMsg"] = "紀錄 :".$data["title"]."已更新";		 
		 $g_db->update( $_Table_Main, $data, "serno", $serno );  
	 }
     else {
	     $_SESSION["SendMessageTitle"] = "資料新增完成！";
	     $_SESSION["SendMessageMsg"] = "紀錄 :".$data["title"]."已新增";			 
		 $g_db->create( $_Table_Main, $data, ""); 
	 }

	 header("Location: ".$_File_Name);

}

/*------------------------------------------------------------------------------------------------------------*/
//-- 刪除單筆
/*------------------------------------------------------------------------------------------------------------*/
elseif ($_REQUEST['flag'] == 'delete')
{

	$id = $_GET['id'];
	$sqlary = array();
	$sqlary[":serno"] = $id;

	$sqlstr = " select * from `".$_Table_Main."` where serno=:serno ";
	$getinfo = $g_db->getRow($sqlstr ,$sqlary);
	
	$sqlstr = " delete from `".$_Table_Main."` where serno=:serno ";
	$g_db->query($sqlstr,$sqlary);

	$_SESSION["SendMessageTitle"] = "資料刪除完成！";
	$_SESSION["SendMessageMsg"] = "紀錄 :".$getinfo["name"]."已刪除";
	header("Location: ".$_File_Name);

}

/*------------------------------------------------------------------------------------------------------------*/
//-- 瀏覽
/*------------------------------------------------------------------------------------------------------------*/
else
{
	
	$sqlstr = "select * from {$_Table_Main} ";
	$list = $g_db->getAll($sqlstr);
	$twig->addGlobal('list', $list );
	
	if ( $_SESSION["SendMessageTitle"]!="" ) {
	   $twig->addGlobal('SendMessageTitle', $_SESSION["SendMessageTitle"] );
	   $twig->addGlobal('SendMessageMsg', $_SESSION["SendMessageMsg"] );
	   unset( $_SESSION["SendMessageTitle"] );
	   unset( $_SESSION["SendMessageMsg"] );
	}
	
	$template = $twig->load('contactlist');
	$displayary = array();
	echo $template->render( $displayary );
}
?>