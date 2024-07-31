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
	//$smarty->assign('USER_Name', $_SESSION['BKUSERNAME']);

    //取得權限
 	//$sqlstr0 = "Select rights FROM `admin` WHERE serno = '".$_SESSION['USERID']."'";
	//$RRights = $g_db->getOne($sqlstr0);  
    //$RightList = json_decode($RRights,true);  
    //$smarty->assign('AllRights',      $RightList);

    // ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
    // error_reporting(E_ALL & ~E_NOTICE); 	

	//初始值設定
	$_Table_Main   = "carmodel";		    //本檔案主資料庫
	$_File_Name    = basename(__FILE__);          //目前檔名
		
	$twig->addGlobal('function_title', "租車車型" );
	$twig->addGlobal('document_path', "租車車型" );	
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
	if ( $data["showseries"]=="" ) { $data["showseries"] = 100; }	
	$twig->addGlobal('data', $data );
    	   
	//消息內容
    $initialValue = $data["content"];
    $inputName = 'content';
    $CKEditor = new CKEditor();
    $CKEditor->basePath = 'includes/ckeditor/';
    $CKEditor->returnOutput = true;
    $neweditor=$CKEditor->editor($inputName, $initialValue);
    $twig->addGlobal('FCK_msg', $neweditor);
	
	$template = $twig->load('carsedit');
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
     $data["title"]= str_replace("'","\'",$_POST["title"]);
     $data["subtitle"]= str_replace("'","\'",$_POST["subtitle"]);	 
	 $data["content"]= str_replace("'","\'",$_POST["content"]);
     $data["showup"]= $_POST["showup"];		 
     $data["showseries"]= $_POST["showseries"];	
	 
	 if ($_FILES["iconpic"]["name"] != "" ){
	    $data['iconpic'] = "cars-".date("Ymdhis").substr($_FILES["iconpic"]["name"],strrpos($_FILES["iconpic"]["name"],'.'));
	    copy( $_FILES["iconpic"]['tmp_name'], Upload_Path."/cars/".$data['iconpic'] );
	 }
	 
	 
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
	$_SESSION["SendMessageMsg"] = "紀錄 :".$getinfo["title"]."已刪除";
	header("Location: ".$_File_Name);

}


/*------------------------------------------------------------------------------------------------------------*/
//-- 查看
/*------------------------------------------------------------------------------------------------------------*/
elseif ($_REQUEST['flag'] == 'view')
{
	$id = $_GET["id"];
	$sqlstr = "select * from member where serno=:serno ";
	$sqlary = array();
	$sqlary[":serno"] = $id;
	$membinfo = $g_db->getRow($sqlstr,$sqlary);
	$twig->addGlobal('membinfo', $membinfo );
	
	$template = $twig->load('memberview');
	$displayary = array();
	echo $template->render( $displayary );
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
	
	$template = $twig->load('carslist');
	$displayary = array();
	echo $template->render( $displayary );
}
?>