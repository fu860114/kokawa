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
    include("inc/rightinfo.php");

    // ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
    // error_reporting(E_ALL & ~E_NOTICE); 	

	//初始值設定
	$_Table_Main   = "homecarousel";		    //本檔案主資料庫
	$_File_Name    = basename(__FILE__);          //目前檔名
		
	$twig->addGlobal('function_title', "主頁" );
	$twig->addGlobal('document_path', "主頁" );	
	$twig->addGlobal('cur_file', basename(__file__) );

/*------------------------------------------------------------------------------------------------------------*/
//-- 儲存編輯
/*------------------------------------------------------------------------------------------------------------*/
if ($_REQUEST['flag'] == 'editsave')
{

    $data = array();
	$data["title1"]   = str_replace("'","\'",$_POST["title1"]);
	$data["minidesc1"]   = str_replace("'","\'",$_POST["minidesc1"]);
	$data["title2"]   = str_replace("'","\'",$_POST["title2"]);
	$data["minidesc2"]   = str_replace("'","\'",$_POST["minidesc2"]);
	// $data["title3"]   = str_replace("'","\'",$_POST["title3"]);
	// $data["minidesc3"]   = str_replace("'","\'",$_POST["minidesc3"]);

	if ($_FILES["iconpic1"]["name"] != "") {
		$data['iconpic1'] = "home-" . date("Ymdhis") . substr($_FILES["iconpic1"]["name"], strrpos($_FILES["iconpic1"]["name"], '.'));
		copy($_FILES["iconpic1"]['tmp_name'], Upload_Path . $data['iconpic1']);
	}
	if($_FILES["iconpic2"]["name"] != "") {
		$data['iconpic2'] = "home-" . date("Ymdhis") . substr($_FILES["iconpic2"]["name"], strrpos($_FILES["iconpic2"]["name"], '.'));
		copy($_FILES["iconpic2"]['tmp_name'], Upload_Path . $data['iconpic2']);
	}
	// if($_FILES["iconpic3"]["name"] != "") {
	// 	$data['iconpic3'] = "home-" . date("Ymdhis") . substr($_FILES["iconpic3"]["name"], strrpos($_FILES["iconpic3"]["name"], '.'));
	// 	copy($_FILES["iconpic3"]['tmp_name'], Upload_Path . $data['iconpic3']);
	// }
	 
	 $sqlstr = "SELECT * FROM `".$_Table_Main."` WHERE `serno` = 1 ";
     $sqlary = array();
     if ( $g_db->numRows( $g_db->query($sqlstr,$sqlary) ) > 0) {
	     $_SESSION["SendMessageTitle"] = "資料更新完成！";
	     $_SESSION["SendMessageMsg"] = "紀錄 : 已更新";		 
		 $g_db->update( $_Table_Main, $data, "serno", 1 );  
	 }
     else {
	     $_SESSION["SendMessageTitle"] = "資料新增完成！";
	     $_SESSION["SendMessageMsg"] = "紀錄 : 已新增";
		 $g_db->create( $_Table_Main, $data, ""); 
	 }

	 header("Location: ".$_File_Name);

}

/*------------------------------------------------------------------------------------------------------------*/
//-- 編輯
/*------------------------------------------------------------------------------------------------------------*/
else {
	
    $sqlstr = "select * from {$_Table_Main} where serno=1 ";	
    $sqlary = array();
	$data = $g_db->getRow($sqlstr,$sqlary);
	$twig->addGlobal('data', $data );    

	// 探索裕唐
    $initialValue = $data["content"];
    $inputName = 'content';
    $CKEditor = new CKEditor();
    $CKEditor->basePath = 'includes/ckeditor/';
    $CKEditor->returnOutput = true;
    $neweditor=$CKEditor->editor($inputName, $initialValue);
    $twig->addGlobal('FCK_content', $neweditor);

	
	$template = $twig->load('newsedit');
	$displayary = array();
	echo $template->render( $displayary );	
}


?>