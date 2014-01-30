<?php

	require_once 'bookmark_fns.php';
	
	$username=$_POST["username"];
	$passwd=$_POST["password"];
	try{
	
	
	if(!filled_out($_POST)){
		throw new Exception("The login form has not been filled out!");
	}
	
	if(strlen($passwd)<6 || strlen($passwd)>16){
		throw new Exception("Your password should be between 6 and 16");
	}
	
	login($username,$passwd);
	
	do_html_header("Welcome, ".$username);
	}catch(Exception $e){
		do_html_header('Problem');
		echo $e->getMessage();
		exit();
	}
?>