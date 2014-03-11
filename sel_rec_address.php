<?php 
require_once 'include.php';
function show_rec_record(){
	try{
		session_start();
		$cid=$_SESSION['cid'];
		$connect=db_connect();

		//SELECT * FROM `sender` WHERE 1
		$query="SELECT * FROM recipient where cid='".$cid."'";
		$result=mysqli_query($connect,$query);
		if(!$result){
			throw new Exception("Could not excute query when searching sender list!");
		}

		else{
			if($result->num_rows!=0)
			while($row=mysqli_fetch_array($result)){
				echo "<tr bgcolor=\"#ffffff\">";
				echo "<TD noWrap align=center height=26><a href=\"\"><font color=red><b>选定</b> </font> </a></TD>";
				echo "<td noWrap align=center height=26>".$row['recipientaddress']."</td>";
				echo "<td noWrap align=center height=26>".$row['phonenumber']."</td>";
				echo "<td noWrap align=center height=26>".$row['recipientaddress']."</td>";
				echo "<td noWrap align=center height=26>".$row['zip']."</td>";
				echo "</tr>";
			}
			else
			{
				echo "<tr class=\"row0\" bgcolor=\"#ffffff\">";
				echo "<td align=\"center\" width=\"100%\" height=\"2\" colspan=\"9\">暂无收货地址</td>";
				echo "</tr>";
			}

		}
	}catch(Exception $e){
		do_html_header('Problem in recipient select!');
		echo $e->getMessage();
		exit();
	}
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>选择收件人</title>
<meta name="Keywords">
<meta name="Description">
<meta name="robots" content="none">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Expires" content="0">
<link href="css/default.css" rel="stylesheet" type="text/css">
</head>
<body topmargin="0" leftmargin="0">

	<form name="form1" method="post" action="" id="form1">

		<div>
			<table cellspacing="0" cellpadding="0" width="100%" border="0">

				<tbody>
					<tr>
						<td class="da" width="700" colspan="3" height="30">
							<table cellspacing="0" cellpadding="0" width="100%" border="0">
								<tbody>
									<tr>
										<td width="400" class="da">&nbsp;&nbsp;选择收货地址
											&nbsp;&nbsp;&nbsp;&nbsp;<input name="skey" type="text"
											id="skey" size="15" class="pic_border">&nbsp;&nbsp;<input
											type="button" id="bt01"
											onclick="window.location.href=&#39;Us_YundanSelAddress.aspx?curaddressselid=&#39;+ document.getElementById(&#39;curaddressselid&#39;).value +&#39;&amp;seluserno=&#39;+document.getElementById(&#39;seluser&#39;).value+&#39;&amp;isuser=&#39;+document.getElementById(&#39;isuser&#39;).value+&#39;&amp;skey=&#39;+document.getElementById(&#39;skey&#39;).value;"
											value="搜索"><input name="seluser" type="hidden" id="seluser"
											value="02089"><input name="curaddressselid" type="hidden"
											id="curaddressselid"><input name="blno" type="hidden"
											id="blno" value="锟斤拷锟斤拷锟斤拷"><input name="isuser"
											type="hidden" id="isuser" value="1">
										</td>
										<td width="*" align="right"></td>
									</tr>
								</tbody>
							</table>

						</td>
					</tr>

					<tr>

						<td width="100%" class="hei" align="left" valign="top"><span
							id="txtShowContent"></span>
							<table class="hei" cellspacing="1" cellpadding="2" width="100%"
								bgcolor="#3b75c3" border="0" valign="middle">
								<tbody>
									<tr bgcolor="#ebf2fc" height="25">
										<td class="hei" valign="middle" align="center" width="40"><b></b>
										</td>

										<td class="hei" valign="middle" align="center" width="110"><b>收货人</b>
										</td>
										<td class="hei" valign="middle" align="center" width="100"><b>电话</b>
										</td>


										<td class="hei" valign="middle" align="center" width="*"><b>收货地址</b>
										</td>
										<td class="hei" valign="middle" align="center" width="50"><b>邮编</b>
										</td>

									</tr>
									<span> <?php show_rec_record(); ?>
									</span>

									<tr height="25" bgcolor="#ebf2fc">
										<td class="hei" valign="middle" align="right" colspan="9"><span
											id="txtShowBar"><table>
													<tbody>
														<tr>
															<td width="100%">&nbsp;</td>
														</tr>
													</tbody>
												</table> </span></td>
									</tr>

								</tbody>
							</table></td>
					</tr>

				</tbody>
			</table>

		</div>
	</form>


</body>
</html>
