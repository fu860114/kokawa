<?php

    //ini_set('display_errors', 'On');

	define('Usable', true);

	//Define DIRECTORY_SEPARATOR
	if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
	}

	include_once('include' . DS . 'backendinit.php');

	$template = $twig->load('dashboard');
	$displayary = array();
	echo $template->render( $displayary );
	
?>