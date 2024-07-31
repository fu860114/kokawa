 <?php

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
	//$smarty->assign('USER_Name', $_SESSION['BKUSERNAME']);

	//取得權限
	include("inc/rightinfo.php");

	ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
	error_reporting(E_ALL & ~E_NOTICE);

	//初始值設定
	$_Table_Main   = "about";		    //本檔案主資料庫
	$_File_Name    = basename(__FILE__);          //目前檔名

	$twig->addGlobal('function_title', "關於我們");
	$twig->addGlobal('document_path', "關於我們");
	$twig->addGlobal('cur_file', basename(__file__));





	/*------------------------------------------------------------------------------------------------------------*/
	//-- 儲存編輯
	/*------------------------------------------------------------------------------------------------------------*/
	if ($_REQUEST['flag'] == 'editsave') {

		$serno = 1;

		$data = array();

		$data["title"] = str_replace("'", "\'", $_POST["title"]);
		$data["content"] = str_replace("'", "\'", $_POST["content"]);
		$data["freeshipping"] = str_replace("'", "\'", $_POST["freeshipping"]);
		$data["support"] = str_replace("'", "\'", $_POST["support"]);
		$data["freerefund"] = str_replace("'", "\'", $_POST["freerefund"]);
		$data["contactus"] = str_replace("'", "\'", $_POST["contactus"]);
		$data["freeshippingtitle"] = str_replace("'", "\'", $_POST["freeshippingtitle"]);
		$data["supporttitle"] = str_replace("'", "\'", $_POST["supporttitle"]);
		$data["freerefundtitle"] = str_replace("'", "\'", $_POST["freerefundtitle"]);
		$data["contactustitle"] = str_replace("'", "\'", $_POST["contactustitle"]);
		

		if ($_FILES["iconpic1"]["name"] != "") {
			$data['iconpic1'] = "about-" . date("Ymdhis") . substr($_FILES["iconpic1"]["name"], strrpos($_FILES["iconpic1"]["name"], '.'));
			copy($_FILES["iconpic1"]['tmp_name'], Upload_Path . $data['iconpic1']);
		}

		if ($_FILES["iconpic2"]["name"] != "") {
			$data['iconpic2'] = "about-" . date("Ymdhis") . substr($_FILES["iconpic2"]["name"], strrpos($_FILES["iconpic2"]["name"], '.'));
			copy($_FILES["iconpic2"]['tmp_name'], Upload_Path . $data['iconpic2']);
		}
		if ($_FILES["iconpic3"]["name"] != "") {
			$data['iconpic3'] = "about-" . date("Ymdhis") . substr($_FILES["iconpic3"]["name"], strrpos($_FILES["iconpic3"]["name"], '.'));
			copy($_FILES["iconpic3"]['tmp_name'], Upload_Path . $data['iconpic3']);
		}
		if ($_FILES["iconpic4"]["name"] != "") {
			$data['iconpic4'] = "about-" . date("Ymdhis") . substr($_FILES["iconpic4"]["name"], strrpos($_FILES["iconpic4"]["name"], '.'));
			copy($_FILES["iconpic4"]['tmp_name'], Upload_Path . $data['iconpic4']);
		}

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
			$g_db->create($_Table_Main, $data, "");
		}

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
		$_SESSION["SendMessageMsg"] = "紀錄 :" . $getinfo["title"] . "已刪除";
		header("Location: " . $_File_Name);
	}


	/*------------------------------------------------------------------------------------------------------------*/
	//-- 查看
	/*------------------------------------------------------------------------------------------------------------*/ elseif ($_REQUEST['flag'] == 'view') {
		$id = $_GET["id"];
		$sqlstr = "select * from member where serno=:serno ";
		$sqlary = array();
		$sqlary[":serno"] = $id;
		$membinfo = $g_db->getRow($sqlstr, $sqlary);
		$twig->addGlobal('membinfo', $membinfo);

		$template = $twig->load('memberview');
		$displayary = array();
		echo $template->render($displayary);
	}
	/*------------------------------------------------------------------------------------------------------------*/
	//-- 編輯
	/*------------------------------------------------------------------------------------------------------------*/ 
	else {
		$id = 1;
		$_GET["id"] = 1;

		$twig->addGlobal('id', $id);

		// 如果是新增的
		if (!isset($_GET["id"])) { 
			$data = array();
			$data["showup"] = "Y";
			$twig->addGlobal('data', $data);
		} else {
			$sqlstr = "select * from {$_Table_Main} where serno=:serno ";
			$sqlary = array();
			$sqlary[":serno"] = $id;
			$data = $g_db->getRow($sqlstr, $sqlary);
			$twig->addGlobal('data', $data);
		}

		//內容
		$initialValue = $data["content"];
		$inputName = 'content';
		$CKEditor = new CKEditor();
		$CKEditor->basePath = 'includes/ckeditor/';
		$CKEditor->returnOutput = true;
		$neweditor = $CKEditor->editor($inputName, $initialValue);
		$twig->addGlobal('FCK_msg', $neweditor);

		$template = $twig->load('webpageaboutedit');
		$displayary = array();
		echo $template->render($displayary);
	}
	/*------------------------------------------------------------------------------------------------------------*/
	//-- 瀏覽
	/*------------------------------------------------------------------------------------------------------------*/
	// else {
	// 	$sqlstr = "select * from {$_Table_Main} ";
	// 	$list = $g_db->getAll($sqlstr);
	// 	$twig->addGlobal('list', $list);

	// 	if ($_SESSION["SendMessageTitle"] != "") {
	// 		$twig->addGlobal('SendMessageTitle', $_SESSION["SendMessageTitle"]);
	// 		$twig->addGlobal('SendMessageMsg', $_SESSION["SendMessageMsg"]);
	// 		unset($_SESSION["SendMessageTitle"]);
	// 		unset($_SESSION["SendMessageMsg"]);
	// 	}

	// 	$template = $twig->load('webpageaboutlist');
	// 	$displayary = array();
	// 	echo $template->render($displayary);
	// }
	?>