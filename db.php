<?php
function db_connect(){
	$connect=mysqli_connect('localhost','root','123','bookmarks');
	if (mysqli_connect_errno($connect))
  	{
  		throw new Exception("could not connect the database!");
  	}
	else return $connect;
}

function db_connect1(){
	$connect=mysqli_connect('localhost','em_user','passwd','expressmail');
	if (mysqli_connect_errno($connect))
	{
		throw new Exception("could not connect the database!");
	}
	else return $connect;
}

?>