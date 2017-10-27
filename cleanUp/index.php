<?php
	define('RES_PATH', 'projects');
	$page = 'index';
	if(isset($_GET['id'])) $page = $_GET['id'];

	session_start();
	// $titleUpdated = False;

	require('../cleanUp/inc/header.php');
	require('../cleanUp/inc/jQuery.php');
	require('library/'.$page.'.php');
	require('../cleanUp/inc/footer.php');
?>
