<?php

	require_once 'include.php';
	
	session_start();
	try{

	
	display_member_init();
	
	}catch(Exception $e){
		do_html_header('Problem');
		echo $e->getMessage();
		exit();
	}
?>