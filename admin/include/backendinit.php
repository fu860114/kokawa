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

//Debug Mode
if (!defined('DebugMode')) {
	define('DebugMode', false);
}

//Define DIRECTORY_SEPARATOR
if (!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}

//Path
define('Root_Path',         '/home/kokawaco/public_html/admin/');
define('Upload_Path',       '/home/kokawaco/public_html/img/');
define('UploadDoc_Path',    '/home/kokawaco/public_html/upload/');
define('Root_Url',          'https://rental.yfmotor.com.tw/new2/');
define('Upload_Url',        'https://rental.yfmotor.com.tw/new2/upload/');
define('Https_Url',         'https://rental.yfmotor.com.tw/new2');


//Vars	
include_once(Root_Path . 'include' . DS . 'var.php');

//Include Tools
include_once(Root_Path . 'include' . DS . '/twig/lib/Twig/Autoloader.php');
include_once(Root_Path . 'include' . DS . 'ckeditor' . DS . 'ckeditor.php');   //fckeditor
// include_once(Root_Path . 'include' . DS . 'phpexcel' . DS . 'PHPExcel.php');     //phpexcel
include_once(Root_Path . 'include' . DS . 'thumb' . DS . 'ThumbLib.inc.php');    //ThumbLib

//Include Class
include_once(Root_Path . 'include' . DS . 'class' . DS . 'mysql.php');           //MySQL
//include_once(Root_Path . 'include' . DS . 'class' . DS . 'sms.php');             //SMS
include_once(Root_Path . 'include' . DS . 'class' . DS . 'page.php');            //Page Function
//include_once(Root_Path . 'include' . DS . 'class' . DS . 'class.phpmailer.php'); //GoogleMail
include_once(Root_Path . 'include' . DS . 'class' . DS . 'PageShow.php');        //New Page Class 

//Database
include_once(Root_Path . 'include' . DS . 'db.php');

// Twig
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem(Root_Path . DS . 'templates');
//$twig = new Twig_Environment($loader, array('cache' => Root_Path . DS . 'templates_c' ,));	
$twig = new Twig_Environment($loader, array('cache' => false,));

//Smarty
//$smarty = new Smarty();
//$smarty->template_dir = Root_Path . DS . "templates";
//$smarty->compile_dir  = Root_Path . DS . "templates_c";
//$smarty->cache_dir    = Root_Path . DS . "cache";
//$smarty->config_dir   = Root_Path . DS . "configs";
