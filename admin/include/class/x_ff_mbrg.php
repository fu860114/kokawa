<?
    // david 注意 ajx 因為在後台執行, 沒法看到錯誤訊息.所以要先在網頁上,直接執行這個程式來除錯,變數直接先給常數去run 
    // session_start();
    echo "<script> alert('進入 ff_mbrg.ajax') </script>";  ///除錯用  ajs 


    ini_set('display_errors', 'On');  
	define('Usable', true);

	//Define DIRECTORY_SEPARATOR
	if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
	}

	 include_once('config.php');   // config.php 內有 設定當 程式 有error 時,網頁 會回到 index.php  , 在除錯時,可先把這行註解掉 
    echo "test" ;
	echo "<script>alert('進入 ff_mbrg.ajax') </script>";  ///除錯用  ajs 
   // $g_db="";

    $lc_d1id = "M14202827713263";
    //$lc_d1idt = $_POST["ic_id"];
    // $passwd = $_POST["passwd"];
    echo "lc_d1id=".$lc_d1id ;
    $sqlstr = " select * from cp_mbrg where c_d1id=:qc_d1id ";
	$sqlary = array();
	$sqlary[":qc_d1id"] = $lc_d1id;
	// $sqlary[":passwd"] = $passwd;

   //  $g_db->query($sqlstr,$sqlary,"DEBUG") ;
   // die();

    if ( $g_db->numRows( $g_db->query($sqlstr,$sqlary,"DEBUG")) > 0 ) {   
	   $result['status'] = false;
       $result['msg'] = urlencode("這個帳號已經註冊過了");		   

    }
    else {
       $data = array();
	   $data["c_d1id"] = $_POST["ic_d1id"];
	   $data["c_d1na"] = $_POST["ic_d1na"];	   
// /* 	   $data["account"] = $_POST["account"];
// 	   $data["passwd"] = $_POST["passwd"];
// 	   $data["period"] = $_POST["period"]; */
       $g_db->create( "cp_mbrg", $data, ""); 	    // 更新 cp_mbrg 檔案

       $result['status'] = true;
	   $result['msg'] = urlencode( "註冊成功" );
	}	

	// david mk  echo urldecode(json_encode($result)); 

?>	