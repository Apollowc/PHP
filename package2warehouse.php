<?php
require_once('include.php');
$pk_areaid=$_POST["pk_areaid"];
$pk_express=$_POST["pk_express"];
$pk_expressno=$_POST["pk_expressno"];
$pk_weight=$_POST["pk_weight"];
$pk_remark_user=$_POST["pk_remark_user"];
session_start();
try{



	$connect=db_connect1();
	//INSERT INTO `package`(`customerid`, `storage`, `dilivermethod`, `note`) VALUES ([$_SESSION['cid']],[$pk_areaid],[$pk_express],[$pk_remark_user])
	$query="INSERT into package (customerid,storage,dilivermethod,note) values ("."'".$_SESSION['cid']."','".$pk_areaid."','".$pk_express."','".$pk_remark_user."')";
	$result=mysqli_query($connect,$query);
	
	if(!$result){
		throw new Exception("Could not excute query!");
	}
	
	//add check form complete code
	else{
		do_html_header("包裹已被录入，正在处理中。。。");
		echo "<script type=\"text/javascript\"> alert(\"包裹已被录入，正在处理中。。。\")</script>";
		display_member_init();
	}

}catch(Exception $e){
	do_html_header('Problem');
	echo $e->getMessage();
	exit();
}
?>