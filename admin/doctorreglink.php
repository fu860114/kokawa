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
	$_Table_Main   = "doctorreglink";		    //本檔案主資料庫
	$_File_Name    = basename(__FILE__);    //目前檔名	
	//$_SESSION['BKCKEDITORPATH'] = "doctor";       // ckfinder 圖片路徑
		
	$twig->addGlobal('function_title', "醫師掛號網址" );
	$twig->addGlobal('document_path', "醫師掛號網址" );	
	$twig->addGlobal('cur_file', basename(__file__) );

	
/*------------------------------------------------------------------------------------------------------------*/
//-- 編輯
/*------------------------------------------------------------------------------------------------------------*/
if ($_REQUEST['flag'] == 'edit')
{
	$id = $_GET["id"];
	$twig->addGlobal('id', $id );
	
	if ( !isset($_GET["id"]) ) {
	   $data = array();
       $data["showup"] = "Y";
	   $twig->addGlobal('data', $data );
	}
	else {
	   $sqlstr = "select * from {$_Table_Main} where serno=:serno ";	
	   $sqlary = array();
	   $sqlary[":serno"] = $id;
	   $data = $g_db->getRow($sqlstr,$sqlary);
	   $twig->addGlobal('data', $data );
    }

	// 準備科部資料
	$sqlstr = "SELECT * FROM `depcode` ";	
	$sqlary = array();
	$dlist = $g_db->getAll($sqlstr,$sqlary);
    $twig->addGlobal('dlist', $dlist );
	
	$template = $twig->load('doctorreglinkedit');
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
     $data["doc_code"]     = str_replace("'","\'",$_POST["doc_code"]);
	 $data["doc_name"]     = str_replace("'","\'",$_POST["doc_name"]);
	 $data["url"]          = str_replace("'","\'",$_POST["url"]);

	 $sqlstr = "SELECT * FROM `depcode` where code=:code ";	
	 $sqlary = array();
	 $sqlary[":code"] = $_POST["dep_no"];
	 $ddata = $g_db->getRow($sqlstr,$sqlary);

     $data["dep_name"]     = $ddata["name"];
	 $data["dep_no"]     = $ddata["code"];

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
//-- 瀏覽
/*------------------------------------------------------------------------------------------------------------*/
else
{
	
	$sqlstr = "select * from {$_Table_Main} ";
	$sqlary = array();	
	$list = $g_db->getAll($sqlstr,$sqlary);
    $twig->addGlobal('list', $list );

	// 準備科部資料
	//$dcode = array();
	//$sqlstr = "SELECT * FROM `depcode` ";	
	//$sqlary = array();
	
	//$dlist = $g_db->getAll($sqlstr,$sqlary);
	//for ($i=0; $i<sizeof($dlist); $i++) {
	//	$code = $dlist[$i]["code"];
	//	$dcode[$code] = $dlist[$i]["name"];
	//}
	
	//補名稱
	//for ($i=0; $i<sizeof($list); $i++) {
	//	$dep_no = $list[$i]["dep_no"];
	//	$list[$i]["depname"] = $dcode[$dep_no];
	//}	
	
	if ( $_SESSION["SendMessageTitle"]!="" ) {
	   $twig->addGlobal('SendMessageTitle', $_SESSION["SendMessageTitle"] );
	   $twig->addGlobal('SendMessageMsg', $_SESSION["SendMessageMsg"] );
	   unset( $_SESSION["SendMessageTitle"] );
	   unset( $_SESSION["SendMessageMsg"] );
	}
	
	$template = $twig->load('doctorreglinklist');
	$displayary = array();
	echo $template->render( $displayary );
}
?>