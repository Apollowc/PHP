<?php
require_once 'valid_user.php';

try{
	db_client_infor_record();
}catch(Exception $e){
	do_html_header('login error!');
	echo $e->getMessage();
	exit();
}

function db_client_infor_record(){
	$connect=db_connect();
	
	$query1="update customers set firstname='".$_POST['firstname']."',lastname='".$_POST['lastname']."',chinesename='".$_POST['chinesename']."' where cid='".$_SESSION['cid']."'";
	$result1=mysqli_query($connect,$query1);
	$query2="update sender set senderaddress='".$_POST['senderAddress']."',zip='".$_POST['zip']."',state='".$_POST['state']."',city='".$_POST['city']."' where cid='".$_SESSION['cid']."'";
	$result2=mysqli_query($connect,$query2);	
	if((!$result1)||(!$result2)){
		throw new Exception("Could not excute query in the order step!");
	}

	else{
		echo "<script type='text/javascript'>alert('恭喜您！已经成功！')</script>"; 
	}
}
?>