<?
  session_start();
  if (!defined('Usable')) {
	 die('');
  }

  //Tome Zone
  if (version_compare(phpversion(), '5.1.0', '>=')) {
	 date_default_timezone_set('Asia/Taipei'); //PHP5
  } else {
	 putenv("TZ=Asia/Taipei"); //PHP4
  }

  if (!defined('DS')) {
	 define('DS', DIRECTORY_SEPARATOR);
  }

//Path
define('Root_Path',         '/home/kokawaco/public_html/admin/');
define('Upload_Path',       '/home/kokawaco/public_html/img/');
define('UploadDoc_Path',    '/home/kokawaco/public_html/upload/');
define('Root_Url',          'https://kokawa.com.tw/');
define('Upload_Url',        'https://kokawa.com.tw/upload/');
define('Https_Url',         'https://kokawa.com.tw/');

//Vars	
//include_once(Root_Path . 'include' . DS . 'var.php');  david 2021/12/29 取消

//Include Tools

//Include Class
include_once(Root_Path . 'include' . DS . 'class' . DS . 'mysql.php');           //MySQL
include_once(Root_Path . 'include' . DS . 'class' . DS . 'class.phpmailer.php'); //GoogleMail	

//Database
include_once(Root_Path . 'include' . DS . 'db.php');

