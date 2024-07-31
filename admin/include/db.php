<?php

	if (!defined('Usable'))
	{
	    die('');
	}

	//��Ʈw�]�w
	$mysql_server   = "localhost";
	$mysql_user     = "asiauibu_spa";
	$mysql_password = "Kevin03141966";
	$mysql_table    = "asiauibu_foody_spa";  // ���եθ�Ʈw 
	//$mysql_db       = "rentcar";     // ���վ��θ�Ʈw 

	if (!defined('DB_Ignore'))
	{

		//DB connect
		$g_db = new Mysql( $mysql_server,$mysql_table,$mysql_user,$mysql_password,true );
		$g_db->connectDB();

	}

?>