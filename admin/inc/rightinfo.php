<?
 	$sqlstr0 = "Select * FROM `admin` WHERE serno = '".$_SESSION['BKUSERID']."'";
	$rightinfo = $g_db->getRow($sqlstr0); 
    $RRights = $rightinfo["rights"];
    $RightList = json_decode($RRights,true);  
	$twig->addGlobal('RightList', $RightList );
	$twig->addGlobal('UserName', $rightinfo["name"] );
	$twig->addGlobal('DepName', $rightinfo["depname"] );
	
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) { $myip = $_SERVER['HTTP_CLIENT_IP']; }
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { $myip = $_SERVER['HTTP_X_FORWARDED_FOR']; }
	else{ $myip= $_SERVER['REMOTE_ADDR']; }	
	$twig->addGlobal('LocalIP', $myip );
?>