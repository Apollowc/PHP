<?php

require_once "valid_user.php";

try{
	$connect=db_connect();

	$pack_all=$_POST['pack_all'];
	
	$end=0;
	$start=0;
	$num=0;
	$track_num=$_SESSION['cid']."XXX".date("Hmydis");
	$str_len=strlen($pack_all);
	
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
		$query1="insert into orders (cid,pack_id,trackingnumber,orderstatus) values ('".$_SESSION['cid']."','".$sep_pack[$i]."','".$track_num."','"."处理中"."')";
		//UPDATE `package` SET `pack_id`=[value-1],`cid`=[value-2],`recipientid`=[value-3],`senderid`=[value-4],`pack_date`=[value-5],`storage`=[value-6],`delivermethod`=[value-7],`tracknumber`=[value-8],`note`=[value-9],`pack_weight`=[value-10],`item1_name`=[value-11],`item1_num`=[value-12],`item1_price`=[value-13],`item2_name`=[value-14],`item2_num`=[value-15],`item2_price`=[value-16],`item3_name`=[value-17],`item3_num`=[value-18],`item3_price`=[value-19],`item4_name`=[value-20],`item4_num`=[value-21],`item4_price`=[value-22],`item5_name`=[value-23],`item5_num`=[value-24],`item5_price`=[value-25],`packagestatus`=[value-26] WHERE 1
		$query2="update package set packagestatus='处理中',bus_number='".$track_num."' where pack_id=".$pack_all[$i++];
		$result1=mysqli_query($connect,$query1);
		$result2=mysqli_query($connect,$query2);
		
		if((!$result1)||(!$result2)){
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