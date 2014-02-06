<?php

	require_once 'include.php';
	
	$username=$_POST["username"];
	$passwd=$_POST["password"];
	
	session_start();
	try{
	
	
	if(!filled_out($_POST)){
		throw new Exception("The login form has not been filled out!");
	}
	
	if(strlen($passwd)<6 || strlen($passwd)>16){
		throw new Exception("Your password should be between 6 and 16");
	}
	
	login($username,$passwd);
	
	//record the valid customer id
	$_SESSION['cid']=1;
	do_html_header("Welcome, ".$username);
	
	display_member_init();
	
	}catch(Exception $e){
		do_html_header('Problem');
		echo $e->getMessage();
		exit();
	}
?>