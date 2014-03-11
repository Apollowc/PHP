<?php	
require_once("valid_user.php");
db_rec_record();
?>


<?php function db_rec_record(){
	try{
		//session_start();
		$connect=db_connect();

		if($_POST["recipientID_isnewsave"]){
			$query="INSERT into recipient (cid,recipientname,recipientaddress,phonenumber,zip,city,state) values ('".$_SESSION['cid']."','".$_POST['rec_name']."','".$_POST['rec_address']."','".$_POST['rec_tel']."','".$_POST['rec_code']."','".$_POST['rec_city']."','".$_POST['rec_province']."')";
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
		do_html_header('Problem in writing receipent to db');
		echo $e->getMessage();
		exit();
	}
}
?>