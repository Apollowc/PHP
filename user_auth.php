<?php

require_once 'db.php';
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
?>