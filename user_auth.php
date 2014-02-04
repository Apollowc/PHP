<?php

require_once 'db.php';

//register fail, throw Exception
//register successfully, return true;
function register($username,$email,$password){
	$connect=db_connect();
	
	$result=mysqli_query($connect,"select * from user where username='".$username."'");
	
	if(!$result){
		throw new Exception("Could not excute query!");
	};
	
	if($result->num_rows>0){
		throw new Exception("The username has been used!");
	};
	
	//INSERT INTO `user`(`username`, `passwd`, `email`) VALUES ([value-1],[value-2],[value-3])
	if(!mysqli_query($connect,"insert into user values"." ('".$username."','".sha1($password)."','".$email."')")){
		throw new Exception("insert error!");
	};
	
	return true;
}


//cannot login throw Exception
//login in valid user, return true
function login($username,$password){
	$connect=db_connect();
	
	$result=mysqli_query($connect,"select * from user where username='".$username."'"." and passwd='".sha1($password)."'");
	
	if(!$result){
		throw new Exception("Could not excute query!");
	}elseif($result->num_rows==1){
		return true;
	}
}
?>