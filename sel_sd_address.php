<?php 
require_once 'include.php';
function show_sd_record(){
	try{
		session_start();
		$cid=$_SESSION['cid'];
		$connect=db_connect();

		//SELECT * FROM `sender` WHERE 1
		$query="SELECT * FROM sender where cid='".$cid."'";
		$result=mysqli_query($connect,$query);
		if(!$result){
			throw new Exception("Could not excute query when searching sender list!");
		}

		else{
			if($result->num_rows!=0)
			while($row=mysqli_fetch_array($result)){
				echo "<tr bgcolor=\"#ffffff\">";
				echo "<TD noWrap align=center height=26><a href=\"\"><font color=red><b>选定</b> </font> </a></TD>";
				echo "<td noWrap align=center height=26>".$row['sendername']."</td>";
				echo "<td noWrap align=center height=26>".$row['phonenumber']."</td>";
				echo "<td noWrap align=center height=26>".$row['zip']."</td>";
				echo "<td noWrap align=center height=26>".$row['senderaddress']."</td>";
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
		do_html_header('Problem in sender select!');
		echo $e->getMessage();
		exit();
	}
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
<title>选择发件人</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" />
<meta name="Description" />
<meta name="robots" content="none" />
<meta HTTP-EQUIV="Pragma" content="no-cache" />
<meta HTTP-EQUIV="Cache-Control" content="no-cache" />
<meta HTTP-EQUIV="Expires" content="0" />
<link href="css/default.css" rel="stylesheet" type="text/css" />
</head>
<body topmargin="0" leftmargin="0">

	<form name="form1" method="post" action="" id="form1">
		<div>
			<table cellSpacing="0" cellPadding="0" width="100%" border="0">

				<tr>
					<td class="da" width="700" colSpan="3" height="30">
						<table cellSpacing="0" cellPadding="0" width="100%" border="0">
							<tr>
								<td width="400" class="da">&nbsp;&nbsp;选择发件人地址
									&nbsp;&nbsp;&nbsp;&nbsp;<input name="skey" type="text"
									id="skey" size="15" class="pic_border" />&nbsp;&nbsp;<input
									type=button id="bt01"
									onclick="window.location.href='Us_YundanSelSendAddress.aspx?cursendaddressselid='+ document.getElementById('cursendaddressselid').value +'&seluserno='+document.getElementById('seluser').value+'&isuser='+document.getElementById('isuser').value+'&skey='+document.getElementById('skey').value;"
									value="搜索" /><input name="seluser" type="hidden" id="seluser"
									value="02089" /><input name="cursendaddressselid" type="hidden"
									id="cursendaddressselid" /><input name="blno" type="hidden"
									id="blno" value="锟斤拷锟斤拷锟斤拷" /><input name="isuser"
									type="hidden" id="isuser" value="1" />
								</td>
								<td width="*" align=right></td>
							</tr>
						</table>

					</td>
				</tr>

				<tr>

					<td width="100%" class="hei" align=left valign="top">

						<table class="hei" cellSpacing="1" cellPadding="2" width="100%"
							bgColor="#3b75c3" border="0" valign="middle">
							<tr bgColor="#ebf2fc" height="25">
								<td class="hei" vAlign="middle" align="center" width="40"><b></b>
								</td>

								<td class="hei" vAlign="middle" align="center" width="110"><b>姓名</b>
								</td>

								<td class="hei" vAlign="middle" align="center" width="100"><b>电话</b>
								</td>
								<td class="hei" vAlign="middle" align="center" width="50"><b>邮编</b>
								</td>
								<td class="hei" vAlign="middle" align="center" width="*"><b>发货地址</b>
								</td>
							</tr>
							<span>
							<?php show_sd_record(); ?>
							</span>
							<tr height="25" bgColor="#ebf2fc">
								<td class="hei" vAlign="middle" align="right" colSpan="9"><span
									id="txtShowBar"><TABLE>
											<TR>
												<TD width='100%'>&nbsp;<a
													href='Us_YundanSelSendAddress.aspx?CurrentPage=1&seluserno=02089'><b>1</b>
												</a>&nbsp;
												</TD>
											</TR>
										</TABLE> </span>
								</td>
							</tr>
						</table>

					</td>
				</tr>

			</table>

		</div>
	</form>
</body>
</html>
