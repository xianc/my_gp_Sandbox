<?php
	define('RES_PATH', 'projects');
	$page = 'index';
	if(isset($_GET['id'])) $page = $_GET['id'];

	session_start();
	// $titleUpdated = False;

	require('inc/header.php');
	require('inc/jQuery.php');
	require('library/'.$page.'.php');
	require('inc/footer.php');
?>
