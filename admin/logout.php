<?

	session_start();

	unset($_SESSION['BKUSERID']);
    unset($_SESSION['BKUSERNAME']);
	
	session_destroy();

	$theURL = $_SERVER['HTTP_HOST'];

	header("location: index.php");
			
?>