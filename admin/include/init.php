<?
//echo "進入 init.php "."<BR>" ;  // 此行除錯用
session_start();
// echo "<script> alert('in init_david.php' )</script>";
if (!defined('Usable')) {
	// echo "沒有定義 Usable ,程式中斷 die " ;  // 此行除錯用
	die('');
}

//Tome Zone
if (version_compare(phpversion(), '5.1.0', '>=')) {
	date_default_timezone_set('Asia/Taipei'); //PHP5
} else {
	putenv("TZ=Asia/Taipei"); //PHP4
}


//  設定執行時的網站 ,gc_wbst 測試模式時設成 TETS ,正常機時 設成 RUN  
// define('gc_wbst', "TEST" );  //  內部測試主機時 設成 TETS 
define('gc_wbst', "RUN");   //  正常對外主機時 設成 RUN  

// echo "gc_wbst=".gc_wbst ;
// if(gc_wbst == "TEST") {
// echo "TEST 模式" ;
// } else {
// echo "RUN 模式" ;
// }		
// die();
//Define DIRECTORY_SEPARATOR    // 定義 目錄 的分隔符號
if (!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}
//Path  正式機環境 跟 開發測試環境不同 路徑要設對

//Path
define('Root_Path',         '/home/kokawaco/public_html/admin/');
define('Upload_Path',       '/home/kokawaco/public_html/img/');
define('UploadDoc_Path',    '/home/kokawaco/public_html/upload/');
define('Root_Url',          'https://rental.yfmotor.com.tw/new2/');
define('Upload_Url',        'https://rental.yfmotor.com.tw/new2/upload/');
define('Https_Url',         'https://rental.yfmotor.com.tw/new2');


//Vars	
//include_once(Root_Path . 'include' . DS . 'var.php');  david 2021/12/29 取消

//Include Tools

//Include Class
include_once(Root_Path . 'include' . DS . 'class' . DS . 'mysql_david.php');           //MySQL
include_once(Root_Path . 'include' . DS . 'class' . DS . 'class.phpmailer.php'); //GoogleMail	

//Database
include_once(Root_Path . 'include' . DS . 'db.php');
