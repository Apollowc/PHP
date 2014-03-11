<?php	
require_once("valid_user.php");
db_sd_record();
?>


<?php function db_sd_record(){
	try{
		//session_start();
		$connect=db_connect();

		if($_POST["sendID_isnewsave"]){
			$sd_name=$_POST['sd_lastname']." ".$_POST['sd_firstname'];
			$query="INSERT into sender (cid,sendername,senderaddress,phonenumber,zip) values ('".$_SESSION['cid']."','".$sd_name."','".$_POST['sd_address']."','".$_POST['sd_tel']."','".$_POST['sd_code']."')";
			$result=mysqli_query($connect,$query);
			if(!$result){
				throw new Exception("Could not excute query when inserting sender to database!");
			}
				
			//add check form complete code
			else{
				//do_html_header("发件人已被录入，正在处理中。。。");
				//echo "<script type=\"text/javascript\"> alert(\"发件人已被录入，正在处理中。。。\")</script>";
				//display_member_init();
				echo "<script language='javascript'>window.close()</script> ";
			}
		}
	}catch(Exception $e){
		do_html_header('Problem in writing to db');
		echo $e->getMessage();
		exit();
	}
}
?>