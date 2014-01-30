<?php
	require_once ('bookmark_fns.php');
	
	$email=$_POST['email'];
	$username=$_POST['username'];
	$passwd1=$_POST['password1'];
	$passwd2=$_POST['password2'];
	
	try{
		if(!filled_out($_POST)){
			throw new Exception('The form has not been filled correctly!');
		};
		
		if(!valid_email($email)){
			throw new Exception('The email format is not valid!');
		};
		
		if($passwd1!=$passwd2){
			throw new Exception("The password you enter doesn't match!");
		};
		
		if(strlen($passwd1)<6 || strlen($passwd2)>16){
			throw new Exception("The password length should be between 6 and 16");
		};
		
		register($username,$email,$passwd1);
		
		do_html_url("member.php", "Go to member page!");
		
		
	}
	catch(Exception $e){
		do_html_header('Problem');
		echo $e->getMessage();
		exit();
	}
	?>