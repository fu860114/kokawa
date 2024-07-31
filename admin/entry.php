<?php
    
	ini_set('display_errors', 'On'); 

	define('Usable', true);
	
	//Define DIRECTORY_SEPARATOR
	if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
	}
	
	include_once('include' . DS . 'init.php');

	// $workflag = $_POST["chc"];
	$s_id = $_POST["account"];
	$s_pwd = $_POST["passwd"];
	$workflag = $_POST["workflag"];

	$checkcode = $_POST['code'];
	$num = $_SESSION["Checknum"];
	
	// 檢查碼功能暫關閉
	$checkcode = $num;
	

	if($checkcode == $num){
		if ($workflag=="first") {
		
			$sqlary = array();
			$sql = "SELECT * FROM `admin` WHERE uid=:uid and passwd=:passwd ";
			$sqlary[":uid"] = $s_id;
			$sqlary[":passwd"] = $s_pwd;
            $num = $g_db->numRows( $g_db->query($sql,$sqlary) );

			if($num > 0){
				$userdata = $g_db->getRow($sql,$sqlary);
				$_SESSION['BKUSERID'] = $userdata["serno"];
				$_SESSION['BKUSERNAME'] = $userdata["name"];
				
				$now = date("Y-m-d H:m:s");
				$sqlstr = "update admin set logintime=? where serno=?";
				$sqlary = array( $now, $userdata["serno"]);
				$g_db->query($sqlstr ,$sqlary );
				
				header("Location: dashboard.php");
			}else{ 
				echo "<script>alert('您的帳號密碼不符.');</script>";
				echo "<script>window.open('index.php','_self');</script>";
			}	
		}
		else { header("Location: index.php"); }
	}else{
		echo "<script>  alert(' 驗證碼輸入錯誤，請重新輸入') ;  history.back();</script> ";
	}

?>