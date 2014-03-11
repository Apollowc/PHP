<?php

require_once "valid_user.php";

try{
	$connect=db_connect();

	$pack_all=$_POST['pack_all'];
	
	echo $pack_all;
	$end=0;
	$start=0;
	$num=0;
	
	$str_len=strlen($pack_all);
	//echo $str_len;
	
 	while($end<$str_len){
		if($pack_all[$end]==','){
			$len=$end-$start;
			$sep_pack[$num++]=substr($pack_all,$start,$len);
			$start=$end+1;
		}
		$end++;
	}
	$i=0;
	while($i<$num){
		$query="insert into orders (pack_id) values ('".$sep_pack[$i++]."')";
		$result=mysqli_query($connect,$query);
		if(!$result){
			throw new Exception("when login the order, cannot connect database!");
		}else{
			echo "<script type='text/javascript'>alert('恭喜您！已经成功生成订单！')</script>";
		}
	}
	//$query="insert into orders (pack_id,orderstatus,ordertotal) values ('".$_SESSION['']."')";
	//$result=mysqli_query($connect,$query);


	
}catch(Exception $e){
	do_html_header('order log in error!');
	echo $e->getMessage();
	exit();
}
?>