<?php 
function do_html_header($title){
	?>
<html>
<head>
<title><?php echo $title?>
</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="Keywords">
<meta name="Description">
<meta name="author" content="王大锤">
<link type="text/css" rel="stylesheet" href="./css/default.css"></link>
</head>
<?php 
}
?>

<?php
function do_html_url($url,$title) {

	?>
<a href="<?php echo $url?>"><?php echo $title?> </a>
<?php 
}
?>


<!--  diplay the login form-->
<?php 
function display_login_form() {
	?>
<html>
<body>
	Members Login here:
	<br>
	<form action="valid_user.php" method="post">
		Username: <input type="text" name="username"><br> Password: <input
			type="password" name="password" value="" /><br> <input type="submit"
			value="Login" /><br>
	</form>
	<a href="forgot_password.php">Forgot your password?</a>
</body>
</html>
<?php 
}
?>


<!--  display register form -->
<?php 
function display_registeration_form(){
	?>
<html>
<body>
	Register here:
	<br>
	<form action="register_new.php" method="post">
		Email address: <input type="text" name="email""><br> Preferred
		username: <input type="text" name="username"><br> (max 16 chars) <br>
		Password: <input type="password" name="password1" value=""><br>
		Confirm password: <input type="password" name="password2"><br> <input
			type="submit" value="Submit">
	</form>
</body>
</html>
<?php 
}
?>
<!--  display register form -->




<!-- display member init login page -->
<?php 
function display_member_init(){
	$connect=db_connect1();
	//select * from customers where customerid ='1';
	$query="SELECT * FROM  customers  WHERE customerid ='".$_SESSION['cid']."'";
	$result=mysqli_query($connect,$query);

	if(!$result){
		throw new Exception("Could not excute query!");
	};
	$row=mysqli_fetch_row($result);
	$_SESSION['email']=$row[1];

	$title="会员服务系统";
	do_html_header($title);
	if($title){
		display_member_heading();
		display_member_body();
	}

}
?>

<?php function display_comman_header($form){
	
	//session_start();
	?>
<body topmargin="0" leftmargin="0">
	<form name="form1" method="post" action=<?php echo $form?> id="form1">
		<div>
			<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
				value="/wEPDwUJNjA4ODQ0OTIxD2QWAgIDD2QWDmYPZBYOZg8PFgIeBFRleHQFHDIwMTTlubQwMuaciDA15pelICDmmJ/mnJ/kuIlkZAIBDw8WAh8ABRDnjovovrAg5oKo5aW977yBZGQCAg8WAh4HVmlzaWJsZWhkAgMPFgIfAWhkAgQPFgIfAWhkAgUPDxYCHwAFATBkZAIGDxYCHgZoZWlnaHQFATRkAgMPDxYCHwAFgwHlhYXlgLzmgLvpop3vvJo8Zm9udCBjb2xvcj1yZWQ+PGI+MC4wMDwvYj48L2ZvbnQ+IOe+juWFgyZuYnNwOyAmbmJzcDvlkI7lj7DlkZjlt6Xku6PlhYXvvJo8Zm9udCBjb2xvcj1yZWQ+PGI+MC4wMDwvYj48L2ZvbnQ+IOe+juWFg2RkAgQPDxYCHwAFxwHliLDlupPljIXoo7nvvJo8YSBocmVmPSdVc19QYWNrYWdlTGlzdC5hc3B4Jz48Yj48Zm9udCBjb2xvcj0nIzRhNGE0YSc+NCDkuKo8L2ZvbnQ+PC9iPjwvYT4mbmJzcDsgJm5ic3A75bey5Y+R5YyF6KO577yaPGEgaHJlZj0nVXNfUGFja2FnZUxpc3RVcGRhdGUuYXNweCc+PGI+PGZvbnQgY29sb3I9JyM0YTRhNGEnPjAg5LiqPC9mb250PjwvYj48L2E+ZGQCBQ8PFgIfAAXAAeaUr+S7mOWuneWFheWAvO+8mjxmb250IGNvbG9yPXJlZD48Yj4wLjAwPC9iPjwvZm9udD4g576O5YWDJm5ic3A7Jm5ic3A7UGF5cGFs5Zyo57q/77yaPGZvbnQgY29sb3I9cmVkPjxiPjAuMDA8L2I+PC9mb250PiDnvo7lhYMmbmJzcDsmbmJzcDvkv6HnlKjljaHvvJo8Zm9udCBjb2xvcj1yZWQ+PGI+MC4wMDwvYj48L2ZvbnQ+IOe+juWFg2RkAgYPDxYCHwAFxALlvoXlj43ppojkuJrliqHvvJo8YSBocmVmPSdVc19NeWJ1c2luZXNzX01hbmFnZS5hc3B4P2JzX3N0YXRlPTAnPjxiPjxmb250IGNvbG9yPScjNGE0YTRhJz4wIOS4qjwvZm9udD48L2I+PC9hPiZuYnNwOyAmbmJzcDvlhajpg6jkuJrliqHvvJo8YSBocmVmPSdVc19NeWJ1c2luZXNzX01hbmFnZS5hc3B4Jz48Yj48Zm9udCBjb2xvcj0nIzRhNGE0YSc+MCDkuKo8L2ZvbnQ+PC9iPjwvYT4mbmJzcDsgJm5ic3A75YWo6YOo6L+Q5Y2V77yaPGEgaHJlZj0nVXNfTXliaWxsX01hbmFnZS5hc3B4Jz48Yj48Zm9udCBjb2xvcj0nIzRhNGE0YSc+MCDkuKo8L2ZvbnQ+PC9iPjwvYT5kZAIHDw8WAh8ABacTPFA+PEZPTlQgc3R5bGU9IkZPTlQtU0laRTogMTRweDsgQ09MT1I6ICMwMDAwZmYiPjxTVFJPTkcgc3R5bGU9IkNPTE9SOiAiPuWQm+WuieacrOmDqOW6k+aIvzwvU1RST05HPjwvRk9OVD48L1A+DTxicj48UCBzdHlsZT0iTElORS1IRUlHSFQ6IDEiPjxGT05UIHN0eWxlPSJGT05ULVNJWkU6IDEzcHg7IENPTE9SOiAjMDAwMDAwIj48U1RST05HIHN0eWxlPSJDT0xPUjogIj48Rk9OVCBzdHlsZT0iRk9OVC1TSVpFOiAxM3B4OyBDT0xPUjogIzAwMDAwMCI+TmFtZTog5L2g55qE5ZCN5a2XIDxGT05UIHN0eWxlPSJGT05ULVNJWkU6IDEzcHg7IENPTE9SOiAjZmYwMDAwIj7vvIsg5LqU5L2N5pWw5a6i5oi357yW5Y+3PC9GT05UPjwvRk9OVD48L1NUUk9ORz48L0ZPTlQ+PC9QPg08YnI+PFAgc3R5bGU9IkxJTkUtSEVJR0hUOiAxIj48Rk9OVCBzdHlsZT0iRk9OVC1TSVpFOiAxM3B4OyBDT0xPUjogIzAwMDAwMCI+PFNUUk9ORyBzdHlsZT0iQ09MT1I6ICI+QWRkcmVzczogNDc5IFcuIEZ1bGxlcnRvbiBBdmU8L1NUUk9ORz48L0ZPTlQ+PC9QPg08YnI+PFAgc3R5bGU9IkxJTkUtSEVJR0hUOiAxIj48Rk9OVCBzdHlsZT0iRk9OVC1TSVpFOiAxM3B4OyBDT0xPUjogIzAwMDAwMCI+PFNUUk9ORyBzdHlsZT0iQ09MT1I6ICI+Q2l0eTogRWxtaHVyc3QsIDwvU1RST05HPjwvRk9OVD48L1A+DTxicj48UCBzdHlsZT0iTElORS1IRUlHSFQ6IDEiPjxGT05UIHN0eWxlPSJGT05ULVNJWkU6IDEzcHg7IENPTE9SOiAjMDAwMDAwIj48U1RST05HIHN0eWxlPSJDT0xPUjogIj5TdGF0ZTogSUw8L1NUUk9ORz48L0ZPTlQ+PC9QPg08YnI+PFAgc3R5bGU9IkxJTkUtSEVJR0hUOiAxIj48Rk9OVCBzdHlsZT0iRk9OVC1TSVpFOiAxM3B4OyBDT0xPUjogIzAwMDAwMCI+PFNUUk9ORyBzdHlsZT0iQ09MT1I6ICI+Wmlw77yaNjAxMjY8L1NUUk9ORz48L0ZPTlQ+PC9QPg08YnI+PFAgc3R5bGU9IkxJTkUtSEVJR0hUOiAxIj48Rk9OVCBzdHlsZT0iRk9OVC1TSVpFOiAxM3B4OyBDT0xPUjogIzAwMDAwMCI+PFNUUk9ORyBzdHlsZT0iQ09MT1I6ICI+VEVMOiA2MzAtNDQ1LTE1NTU8L1NUUk9ORz48L0ZPTlQ+PC9QPg08YnI+PFA+PEZPTlQgc3R5bGU9IkNPTE9SOiAjZmYwMDAwIj48U1RST05HPu+8iOS6lOS9jeaVsOWtl+eahOWuouaIt+e8luWPt+WPr+S7peWHuueOsOWcqOWQjeWtl+WQjumdouaIluiAheWcsOWdgOagj+esrOS6jOagj++8iTwvU1RST05HPjwvRk9OVD48L1A+DTxicj48UD48Rk9OVCBzdHlsZT0iRk9OVC1TSVpFOiAxNHB4OyBDT0xPUjogIzAwMDBmZiI+PFNUUk9ORyBzdHlsZT0iQ09MT1I6ICI+5YWN56iO5beeREXlupPmiL88L1NUUk9ORz48L0ZPTlQ+PC9QPg08YnI+PFAgc3R5bGU9IkxJTkUtSEVJR0hUOiAxIj48U1RST05HPjxGT05UIHN0eWxlPSJGT05ULVNJWkU6IDEzcHg7IENPTE9SOiAjMDAwMDAwIj5OYW1lOiDkvaDnmoTlkI3lrZcgPEZPTlQgc3R5bGU9IkZPTlQtU0laRTogMTNweDsgQ09MT1I6ICNmZjAwMDAiPu+8iyDkupTkvY3mlbDlrqLmiLfnvJblj7c8L0ZPTlQ+PC9GT05UPjwvU1RST05HPjwvUD4NPGJyPjxQIHN0eWxlPSJMSU5FLUhFSUdIVDogMSI+PFNUUk9ORz48Rk9OVCBzdHlsZT0iRk9OVC1TSVpFOiAxM3B4OyBDT0xPUjogIzAwMDAwMCI+QWRkcmVzczogMTIwMCBJbnRlcmNoYW5nZSBCTFZEPC9GT05UPjwvU1RST05HPjwvUD4NPGJyPjxQIHN0eWxlPSJMSU5FLUhFSUdIVDogMSI+PFNUUk9ORz48Rk9OVCBzdHlsZT0iRk9OVC1TSVpFOiAxM3B4OyBDT0xPUjogIzAwMDAwMCI+QWRkcmVzcyAy77yaIFN1aXRlIEEgPC9GT05UPjwvU1RST05HPjwvUD4NPGJyPjxQIHN0eWxlPSJMSU5FLUhFSUdIVDogMSI+PFNUUk9ORz48Rk9OVCBzdHlsZT0iRk9OVC1TSVpFOiAxM3B4OyBDT0xPUjogIzAwMDAwMCI+Q2l0eTogTmV3YXJrPC9GT05UPjwvU1RST05HPjwvUD4NPGJyPjxQIHN0eWxlPSJMSU5FLUhFSUdIVDogMSI+PFNUUk9ORz48Rk9OVCBzdHlsZT0iRk9OVC1TSVpFOiAxM3B4OyBDT0xPUjogIzAwMDAwMCI+U3RhdGXvvJpERTwvRk9OVD48L1NUUk9ORz48L1A+DTxicj48UCBzdHlsZT0iTElORS1IRUlHSFQ6IDEiPjxTVFJPTkc+PEZPTlQgc3R5bGU9IkZPTlQtU0laRTogMTNweDsgQ09MT1I6ICMwMDAwMDAiPlppcO+8mjE5NzExPC9GT05UPjwvU1RST05HPjwvUD4NPGJyPjxQIHN0eWxlPSJMSU5FLUhFSUdIVDogMSI+PFNUUk9ORz48Rk9OVCBzdHlsZT0iRk9OVC1TSVpFOiAxM3B4Ij48Rk9OVCBzdHlsZT0iRk9OVC1TSVpFOiAxM3B4OyBDT0xPUjogIzAwMDAwMCI+VEVMOjwvRk9OVD4gMzAyLTM2OTkzNjk8QlI+PC9QPjwvRk9OVD48L1NUUk9ORz4NPGJyPjxQPjxGT05UIHN0eWxlPSJDT0xPUjogI2ZmMDAwMCI+PFNUUk9ORyBzdHlsZT0iQ09MT1I6ICI+77yI5LqU5L2N5pWw5a2X55qE5a6i5oi357yW5Y+35Y+v5Lul5Ye6546w5Zyo5ZCN5a2X5ZCO6Z2i5oiW6ICF5Zyw5Z2A5qCP56ys5LqM5qCP77yJPC9TVFJPTkc+PC9GT05UPjwvUD5kZAIIDw8WAh8ABUDogZTns7vmlrnlvI/vvJp0ZWzvvJo2MzAtNDQ1LTE1NTUmbmJzcDsmbmJzcDsgICBRUe+8mjE3MTQxMTMxMjAgZGRk4KPUYVCG2EwWjXJyLstKXyzAfus=">
		</div>

		<div>
			<table cellspacing="0" cellpadding="0" width="100%" border="0"
				bgcolor="#ffffff">
				<tbody>
					<tr>
						<td valign="top" width="200">
							<table width="200" border="0" cellspacing="0" cellpadding="0">
								<tbody>
									<tr>
										<td>
											<table width="200" border="0" cellspacing="0" cellpadding="0"
												background="image/dll_0.jpg">
												<tbody>
													<tr>
														<td height="85" align="center" valign="bottom"><img
															src="../UploadFile/20121112121235078.jpg">
														</td>
													</tr>
													<tr>
														<td height="30"><div align="center">
																<span class="dan"><span id="Us_Left_ShowCurTime">2014年02月05日
																		星期三</span> </span>
															</div>
														</td>
													</tr>
													<tr>
														<td height="35" class="da">
															<table border="0" cellpadding="0" cellspacing="0">
																<tbody>
																	<tr>
																		<td height="10"></td>
																	</tr>
																	<tr>
																		<td height="45" width="100%" class="da" align="center"
																			style="text-indent: 25px;"><span
																			id="Us_Left_User_NameStr"><?php echo $_SESSION['email']?>
																				您好！</span>
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
													<tr>
														<td>
															<table border="0" cellpadding="0" cellspacing="0">

																<tbody>
																	<tr>
																		<td width="25"></td>
																		<td height="39" align="center" class="da"
																			valign="bottom"><a href="/users/Us_Index.aspx"
																			class="DefaultA"><font class="da">管理首页</font> </a>&nbsp;&nbsp;<a
																			href="/users/Us_LoginOut.aspx" class="DefaultA"><font
																				class="da">退出帐户</font> </a>
																		</td>
																	</tr>
																	<tr>
																		<td></td>
																		<td height="25" class="hei" valign="top"></td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
													<tr>
														<td height="31" class="da">
															<table border="0" cellpadding="0" cellspacing="0">
																<tbody>
																	<tr>
																		<td width="45"></td>
																		<td class="da" valign="bottom">包裹中心</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
													<tr>
														<td>
															<table border="0" cellpadding="0" cellspacing="0">
																<tbody>
																	<tr>
																		<td width="45"></td>
																		<td height="28" class="hei"><div align="left">
																				<a href="package_record.php" class="MainLeft">自助录入包裹</a>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td height="1" colspan="2"></td>
																	</tr>
																	<tr>
																		<td></td>
																		<td height="28" class="hei"><div align="left">
																				<a href="Us_PackageList.aspx" class="MainLeft">到库包裹</a>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td height="3" colspan="2"></td>
																	</tr>
																	<tr>
																		<td></td>
																		<td height="28" class="hei"><div align="left">
																				<a href="Us_PackageListUpdate.aspx" class="MainLeft">已发包裹</a>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td></td>
																		<td height="30" class="hei"><div align="left">
																				<a href="Us_PackageListReturn.aspx" class="MainLeft">退货管理</a>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td></td>
																		<td height="28" class="hei"><div align="left">
																				<a href="Us_PackageListPhoto.aspx" class="MainLeft">包裹拍照</a>
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>

													<tr>
														<td height="35" class="da">
															<table border="0" cellpadding="0" cellspacing="0">
																<tbody>
																	<tr>
																		<td height="10"></td>
																	</tr>
																	<tr>
																		<td width="45"></td>
																		<td class="da" valign="bottom">业务-运单-管理</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
													<tr>
														<td height="5"></td>
													</tr>
													<tr>
														<td>
															<table border="0" cellpadding="0" cellspacing="0">
																<tbody>
																	<tr>
																		<td width="45"></td>
																		<td height="30" class="hei"><div align="left">
																				<a href="Us_Mybusiness_Add.aspx" class="MainLeft">创建普通业务</a>
																			</div>
																		</td>
																	</tr>






																	<tr>
																		<td width="40"></td>
																		<td height="28" class="hei"><div align="left">
																				<a href="Us_Mybill_Manage.aspx" class="MainLeft"><b>全部运单管理</b>
																				</a>
																			</div>
																		</td>
																	</tr>

																	<tr>
																		<td width="40"></td>
																		<td height="28" class="hei"><div align="left">
																				<a href="Us_Mybusiness_Manage.aspx" class="MainLeft">全部业务管理</a>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td width="40"></td>
																		<td height="28" class="hei"><div align="left">
																				<a href="Us_Mybusiness_Manage.aspx?bs_state=0"
																					class="MainLeft">待反馈的业务</a>[<span
																					id="Us_Left_bs_num_lab">0</span>]
																			</div>
																		</td>
																	</tr>

																</tbody>
															</table>
														</td>
													</tr>

													<tr>
														<td id="Us_Left_td_middle" height="4"></td>

													</tr>

													<tr>
														<td height="35" class="da">
															<table border="0" cellpadding="0" cellspacing="0">
																<tbody>
																	<tr>
																		<td height="13"></td>
																	</tr>
																	<tr>
																		<td width="45"></td>
																		<td class="da" valign="bottom">账户信息</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
													<tr>
														<td height="5"></td>
													</tr>
													<tr>
														<td>
															<table border="0" cellpadding="0" cellspacing="0">

																<tbody>
																	<tr>
																		<td width="45"></td>
																		<td height="27" class="hei"><a
																			href="Us_EditMyInfo.aspx" class="MainLeft">我的信息</a>
																		</td>
																	</tr>
																	<tr>
																		<td></td>
																		<td height="24" class="hei"><a
																			href="Us_ModifyPwd.aspx" class="MainLeft">修改密码</a>
																		</td>
																	</tr>

																	<tr>
																		<td></td>
																		<td height="26" class="hei"><a
																			href="Us_ManageAddress.aspx" class="MainLeft">收货地址</a>
																		</td>
																	</tr>

																	<tr>
																		<td></td>
																		<td height="26" class="hei"><a href="Us_IDcards.aspx"
																			class="MainLeft">身份证管理</a>
																		</td>
																	</tr>

																	<tr style="display: none">
																		<td></td>
																		<td height="28" class="hei"><a
																			href="Us_ManageSendAddress.aspx" class="MainLeft">发件人地址</a>
																		</td>
																	</tr>

																	<tr style="display: none">
																		<td></td>
																		<td height="26" class="hei"><a
																			href="Us_ManageCreditcard.aspx" class="MainLeft">信用卡登记簿</a>
																		</td>
																	</tr>

																</tbody>
															</table>
														</td>
													</tr>
													<tr>
														<td height="3"></td>
													</tr>
													<tr>
														<td height="40" class="da">
															<table border="0" cellpadding="0" cellspacing="0">
																<tbody>
																	<tr>
																		<td height="15"></td>
																	</tr>
																	<tr>
																		<td width="45"></td>
																		<td class="da" valign="bottom">财务管理</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>

													<tr>
														<td>
															<table border="0" cellpadding="0" cellspacing="0">
																<tbody>
																	<tr>
																		<td height="3"></td>
																	</tr>
																	<tr>
																		<td width="45"></td>
																		<td height="28" class="hei"><a
																			href="Us_Balance_Index.aspx" class="MainLeft">余额充值</a>
																		</td>
																	</tr>
																	<tr>
																		<td></td>
																		<td height="30" class="hei"><a
																			href="Us_RechargeList.aspx" class="MainLeft">充值记录</a>
																		</td>
																	</tr>
																	<tr>
																		<td></td>
																		<td height="28" class="hei"><a
																			href="Us_DebitList.aspx" class="MainLeft">消费记录</a>
																		</td>
																	</tr>
																	<tr>
																		<td></td>
																		<td height="26" class="hei"><a
																			href="Us_Reconciliation.aspx" class="MainLeft">电子账单</a>
																		</td>
																	</tr>
																	<tr>
																		<td></td>
																		<td height="26" class="hei"><a
																			href="Us_MentionApply.aspx" class="MainLeft">申请提现</a>
																		</td>
																	</tr>

																	<tr>
																		<td></td>
																		<td height="26" class="hei"><a
																			href="Us_Compensation.aspx" class="MainLeft">申请赔偿</a>
																		</td>
																	</tr>



																	<tr>
																		<td></td>
																		<td height="26" class="hei"><a href="Us_Message.aspx"
																			class="MainLeft">站内提醒</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>

													<tr>
														<td height="12"></td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>

									<tr>
										<td height="24" width="252" background="image/hp1_1_r2.jpg"></td>
									</tr>
								</tbody>
							</table>
						</td>
						<td valign="top" width="*"><map name="top_images">
								<area shape="RECT" coords="28,14,81,32" class="DefaultA"
									href="javascript:window.external.AddFavorite('http://www.junanex.com','君安快递')"
									target="_self">
								<area shape="RECT" coords="108,14,162,32" class="DefaultA"
									onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.junanex.com');"
									href="#" target="_self">
							</map>
							<table cellspacing="0" cellpadding="0" width="100%" border="0">


								<tbody>
									<tr>
										<td height="2"></td>
									</tr>
									<tr>
										<td height="56" colspan="2">
											<table width="100%" border="0" cellspacing="0"
												cellpadding="0">
												<tbody>
													<tr>
														<td width="17" height="56"><img src="image/n0.png"
															width="17" height="56" border="0">
														</td>
														<td width="100%" background="image/n1.jpg"></td>
														<td width="200" height="56"><img src="image/n2.jpg"
															width="200" height="56" border="0" usemap="#top_images">
														</td>
													</tr>
												</tbody>
											</table>

										</td>
									</tr>

									<tr>
										<td height="44" colspan="2" bgcolor="#00aa4a" valign="middle">

											<table>
												<tbody>
													<tr>
														<td height="5"></td>
													</tr>
													<tr>
														<td width="10"></td>
														<td align="left" width="100"><a href="/index.html"
															class="title22_wenzi" target="_blank">首 页</a>
														</td>
														<td width="10"></td>
														<td align="left" width="100"><a href="/news/news_7_1.html"
															class="title22_wenzi" target="_blank">网站公告</a>
														</td>
														<td width="10"></td>
														<td align="left" width="100"><a href="/news/sitehelp.html"
															class="title22_wenzi" target="_blank">常见问题</a>
														</td>
														<td width="10"></td>
														<td align="left" width="100"><a href="/userguide.html"
															class="title22_wenzi" target="_blank">发货流程</a>
														</td>
														<td width="10"></td>
														<td align="left" width="100"><a href="/contact.html"
															class="title22_wenzi" target="_blank">联系我们</a>
														</td>
														<td width="20"></td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<?php 
}?>
									<?php function display_member_heading(){
										$form="Us_Index.aspx";
										display_comman_header($form)
										?>

									<?php 
}?>

									<!-- display member init login page -->


									<?php function display_member_body(){

										?>
									<tr>
										<td height="199">
											<table cellspacing="0" cellpadding="0" width="100%"
												border="0">
												<tbody>



													<tr>
														<td height="6"></td>
													</tr>
													<tr>
														<td width="22" height="36">&nbsp;</td>
														<td class="da" width="593" colspan="2"><img height="15"
															src="image/tip_arrow3.jpg" width="15">&nbsp;&nbsp;会员专区</td>
													</tr>
													<tr>
														<td width="20" height="30">&nbsp;</td>

														<td width="100%" class="hei" align="left" valign="top">
															<table cellspacing="0" cellpadding="10" width="100%"
																border="0" bgcolor="#e5ffbd" style="display: none">
																<tbody>



																	<tr>
																		<td class="da" width="100%" colspan="2"><font
																			color="red">新系统必读</font>
																		</td>
																	</tr>
																	<tr>
																		<td><a href="images/001.doc">新系统发货方式及运费说明</a>
																		</td>
																	</tr>

																</tbody>



															</table> <br>

															<table cellspacing="0" cellpadding="10" width="100%"
																border="0" bgcolor="#e5ffbd">

																<tbody>



																	<tr>
																		<td class="da" width="100%" colspan="2">会员信息</td>
																	</tr>

																	<tr>
																		<td width="50%">邮件地址：<?php echo $_SESSION['email']?>&nbsp;&nbsp;上次登录：2014/2/5
																			14:36:07
																		</td>
																		<td width="50%">客户编号：<b><?php echo $_SESSION['cid']?>
																		</b>&nbsp;&nbsp;<span id="service_qq"></span>
																		</td>
																	</tr>

																	<tr>
																		<td width="50%">账户余额：<font color="red"><b>0.00</b> 美元
																		</font>&nbsp; &nbsp;
																		</td>
																		<td width="50%"><span id="chongzhilab">充值总额：<font
																				color="red"><b>0.00</b> </font> 美元&nbsp;
																				&nbsp;后台员工代充：<font color="red"><b>0.00</b> </font>
																				美元
																		</span>
																		</td>
																	</tr>

																	<tr>
																		<td widt h="50%"><span id="packagelab">到库包裹：<a
																				href="Us_PackageList.aspx"><b><font color="#4a4a4a">4
																							个</font> </b> </a>&nbsp; &nbsp;已发包裹：<a
																				href="Us_PackageListUpdate.aspx"><b><font
																						color="#4a4a4a">0 个</font> </b> </a>



																		</span>
																		</td>
																		<td width="50%"><span id="chongzhilab0">支付宝充值：<font
																				color="red"><b>0.00</b> </font>
																				美元&nbsp;&nbsp;Paypal在线：<font color="red"><b>0.00</b>



																			</font> 美元&nbsp;&nbsp;信用卡：<font color="red"><b>0.00</b>



																			</font> 美元
																		</span>
																		</td>
																	</tr>

																	<tr>
																		<td width="50%"><span id="yundanlab">待反馈业务：<a
																				href="Us_Mybusiness_Manage.aspx?bs_state=0"><b><font
																						color="#4a4a4a">0 个</font> </b> </a>&nbsp;
																				&nbsp;全部业务：<a href="Us_Mybusiness_Manage.aspx"><b><font
																						color="#4a4a4a">0 个</font> </b> </a>&nbsp;
																				&nbsp;全部运单：<a href="Us_Mybill_Manage.aspx"><b><font
																						color="#4a4a4a">0 个</font> </b> </a>



																		</span>
																		</td>
																		<td width="50%">消费总额：<font color="green"><b>0.00</b> </font>
																			美元&nbsp;&nbsp;<img src="image/suggest_right.gif"><a
																			href="Us_Balance_Index.aspx">在线冲值</a>
																		</td>
																	</tr>

																</tbody>



															</table> <br>
															<table cellspacing="0" cellpadding="10" width="100%"
																border="0" bgcolor="#e5ffbd">

																<tbody>



																	<tr>
																		<td class="da" width="100%" colspan="2">美国收货地址</td>
																	</tr>

																	<tr>
																		<td class="da" width="100%" colspan="2"><span
																			id="shaddresslab"><p>



																					<font style="FONT-SIZE: 14px; COLOR: #0000ff"><strong
																						style="COLOR:">君安本部库房</strong> </font>



																				</p> <br>



																				<p style="LINE-HEIGHT: 1">



																					<font style="FONT-SIZE: 13px; COLOR: #000000"><strong
																						style="COLOR:"><font
																							style="FONT-SIZE: 13px; COLOR: #000000">Name:
																								你的名字 <font
																								style="FONT-SIZE: 13px; COLOR: #ff0000">＋
																									五位数客户编号</font>



																						</font> </strong> </font>



																				</p> <br>



																				<p style="LINE-HEIGHT: 1">



																					<font style="FONT-SIZE: 13px; COLOR: #000000"><strong
																						style="COLOR:">Address: 479 W. Fullerton Ave</strong>



																					</font>



																				</p> <br>



																				<p style="LINE-HEIGHT: 1">



																					<font style="FONT-SIZE: 13px; COLOR: #000000"><strong
																						style="COLOR:">City: Elmhurst, </strong> </font>



																				</p> <br>



																				<p style="LINE-HEIGHT: 1">



																					<font style="FONT-SIZE: 13px; COLOR: #000000"><strong
																						style="COLOR:">State: IL</strong> </font>



																				</p> <br>



																				<p style="LINE-HEIGHT: 1">



																					<font style="FONT-SIZE: 13px; COLOR: #000000"><strong
																						style="COLOR:">Zip：60126</strong> </font>



																				</p> <br>



																				<p style="LINE-HEIGHT: 1">



																					<font style="FONT-SIZE: 13px; COLOR: #000000"><strong
																						style="COLOR:">TEL: 630-445-1555</strong> </font>



																				</p> <br>



																				<p>



																					<font style="COLOR: #ff0000"><strong>（五位数字的客户编号可以出现在名字后面或者地址栏第二栏）</strong>



																					</font>



																				</p> <br>



																				<p>



																					<font style="FONT-SIZE: 14px; COLOR: #0000ff"><strong
																						style="COLOR:">免税州DE库房</strong> </font>



																				</p> <br>



																				<p style="LINE-HEIGHT: 1">



																					<strong><font
																						style="FONT-SIZE: 13px; COLOR: #000000">Name: 你的名字
																							<font style="FONT-SIZE: 13px; COLOR: #ff0000">＋
																								五位数客户编号</font>



																					</font> </strong>



																				</p> <br>



																				<p style="LINE-HEIGHT: 1">



																					<strong><font
																						style="FONT-SIZE: 13px; COLOR: #000000">Address:
																							1200 Interchange BLVD</font> </strong>



																				</p> <br>



																				<p style="LINE-HEIGHT: 1">



																					<strong><font
																						style="FONT-SIZE: 13px; COLOR: #000000">Address 2：
																							Suite A </font> </strong>



																				</p> <br>



																				<p style="LINE-HEIGHT: 1">



																					<strong><font
																						style="FONT-SIZE: 13px; COLOR: #000000">City:
																							Newark</font> </strong>



																				</p> <br>



																				<p style="LINE-HEIGHT: 1">



																					<strong><font
																						style="FONT-SIZE: 13px; COLOR: #000000">State：DE</font>



																					</strong>



																				</p> <br>



																				<p style="LINE-HEIGHT: 1">



																					<strong><font
																						style="FONT-SIZE: 13px; COLOR: #000000">Zip：19711</font>



																					</strong>



																				</p> <br>



																				<p style="LINE-HEIGHT: 1">



																					<strong><font style="FONT-SIZE: 13px"><font
																							style="FONT-SIZE: 13px; COLOR: #000000">TEL:</font>
																							302-3699369<br> </font> </strong>



																				</p> <br>



																				<p>



																					<font style="COLOR: #ff0000"><strong style="COLOR:">（五位数字的客户编号可以出现在名字后面或者地址栏第二栏）</strong>



																					</font>



																				</p> </span> <!--
											            <br /> <br />
  注: <font color=red>请在收件人姓名后，标注 <b>( 02089 )</b></font>，方便快速入库。 若收件人中不能填入您的会员数字标示，加在仓库地址后边也可以。-->

																		</td>
																	</tr>


																</tbody>



															</table> <br>
															<table cellspacing="0" cellpadding="10" width="100%"
																border="0" bgcolor="#eaf3ff" style="display: none;">

																<tbody>



																	<tr>
																		<td class="da" width="100%" colspan="2"><span
																			id="linker">联系方式：tel：630-445-1555&nbsp;&nbsp;
																				QQ：1714113120 </span>
																		</td>
																	</tr>
																</tbody>



															</table>

														</td>
													</tr>

												</tbody>



											</table>
										</td>
									</tr>



									<tr>
										<td height="20" bgcolor="#ffffff"></td>
									</tr>
									<tr>

										<td bgcolor="#ffffff" valign="middle">
											<table width="100%" border="0" align="center" cellpadding="0"
												cellspacing="0">
												<tbody>



													<tr>
														<td width="10">&nbsp;</td>
														<td width="100%" height="70" bgcolor="#f4f4f4"
															valign="middle">
															<div align="center" class="hui">君安快递&nbsp;&nbsp;
																Copyright 2012 www.junanex.com, All Rights Reserved</div>
														</td>

													</tr>
												</tbody>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</form>
</body>
<?php 
	}?>

<!-- display 自助录入包裹页面 -->
<?php 
function display_package_record(){
	$title="自助录入包裹";
	do_html_header($title);
	if($title){
		display_package_heading();
		display_package_body();
	}
}
?>
<!-- display 自助录入包裹页面 -->

<?php function display_package_heading(){
	$form="package2warehouse.php";
	display_comman_header($form);
	?>
<?php }?>
<?php function display_package_body(){

	?>


<tr>
	<td height="199">
		<table cellspacing="0" cellpadding="0" width="100%" border="0">

			<tbody>

				<tr>
					<td height="23" colspan="3"></td>
				</tr>
				<tr>

					<td class="da" width="593" colspan="3" height="30"
						style="text-indent: 26px"><img height="15"
						src="image/tip_arrow3.jpg" width="15">&nbsp;&nbsp;<span
						id="PageTitle_main">自助录入包裹</span>&nbsp;&nbsp;&nbsp;</td>
				</tr>
				<tr>
					<td width="15" height="30">&nbsp;</td>
					<td width="10" height="150">&nbsp;</td>
					<td width="*" class="hei" align="left">

						<table width="100%" border="0" cellspacing="0" cellpadding="0"
							class="hei">
							<tbody>
								<tr height="30">
									<td class="hei" height="30">仓库名称：</td>
									<td><select name="pk_areaid_sel" id="pk_areaid_sel"
										onchange="document.getElementById('pk_areaid').value=this.value;">
											<option value="">请选择仓库</option>
											<option value="1">君安仓库</option>

											<option value="2">免税州DE</option>

											<option value="3">免税州OR</option>
									</select> <input name="pk_areaid" type="hidden" id="pk_areaid">
									</td>
								</tr>
								<script>
                                                    if(document.getElementById("pk_areaid").value!="")
                                                    {
                                                        document.getElementById("pk_areaid_sel").value = document.getElementById("pk_areaid").value;
                                                    }
                                                  
                                                  </script>
								<tr height="30">
									<td class="hei" width="120" height="30">包裹送达方式：</td>
									<td><select id="pk_expresssel" name="pk_expresssel"
										tabindex="1"
										onchange="document.getElementById('pk_express').value=this.value;auotweight();">

											<option value="亲自送到库房">亲自送到库房</option>
											<option value="上门取货">上门取货</option>
											<option value="UPS">UPS</option>
											<option value="FEDEX">FEDEX</option>
											<option value="USPS">USPS</option>
											<option value="DHL">DHL</option>
											<option value="ESENDA">ESENDA</option>
											<option value="EMS">EMS</option>
											<option value="ONTRAC">ONTRAC</option>
											<option value="其他">其他</option>
									</select> <input name="pk_express" type="hidden"
										id="pk_express" value="亲自送到库房">
									</td>
								</tr>
								<script>
                                                        if(document.getElementById("pk_express").value!="")
                                                        {
                                                            document.getElementById("pk_expresssel").value = document.getElementById("pk_express").value;
                                                        }
                                                        
                                                        function auotweight()
                                                        {
                                                            if(document.getElementById("pk_express").value=="亲自送到库房"||document.getElementById("pk_express").value=="上门取货")
                                                            {
                                                                document.getElementById("pk_weight").value = "0.00";
                                                            }
                                                            else
                                                            {
                                                                document.getElementById("pk_weight").value = "1.00";
                                                            }
                                                        }
                                                    </script>


								<tr height="30">
									<td class="hei">美国快递单号：</td>
									<td><input name="pk_expressno" type="text" id="pk_expressno"
										maxlength="50" tabindex="2" size="20" class="pic_border">&nbsp;&nbsp;或自编包裹号&nbsp;&nbsp;<font
										color="red">请务必填写正确的美国快递单号</font>
									</td>
								</tr>



								<tr height="30">
									<td class="hei">包裹重量：</td>
									<td><input name="pk_weight" type="text" id="pk_weight"
										maxlength="8" size="10" tabindex="3" value="1.00"
										class="pic_border"
										onkeyup="if(isNaN(value))execCommand('undo')"
										onafterpaste="if(isNaN(value))execCommand('undo')">
										磅&nbsp;&nbsp;此项可保持默认</td>
								</tr>

								<tr height="30" style="display: none">
									<td class="hei">是否真实入库：</td>
									<td><input type="radio" name="pk_iscome_sel" value="1"
										disabled=""
										onclick="window.document.all.pk_iscome.value=this.value;selcometime();">是&nbsp;&nbsp;<input
										type="radio" name="pk_iscome_sel" value="0" disabled=""
										checked=""
										onclick="window.document.all.pk_iscome.value=this.value;selcometime();">否&nbsp;&nbsp;&nbsp;&nbsp;<input
										name="pk_iscome" type="hidden" id="pk_iscome" value="0">&nbsp;此项可保持默认</td>
								</tr>

								<tr height="30" id="tr_cometime" style="display: none">
									<td class="hei">入库日期：</td>
									<td><input name="pk_cometime" type="text" id="pk_cometime"
										class="pic_border"
										onclick="SelectDate(document.getElementById('pk_cometime'),'yyyy-MM-dd',0,0)"
										readonly="" maxlength="10" value="2014/2/5"> <img
										style="MARGIN: 1px; CURSOR: hand"
										onclick="SelectDate(document.getElementById('pk_cometime'),'yyyy-MM-dd',0,0)"
										height="15" src="image/calendar.gif" width="16"> &nbsp;<font
										color="red">无法预计可保持默认</font>
									</td>
								</tr>

								<script>
                                                        function selcometime()
                                                        {
                                                            if(document.getElementById('pk_iscome').value=="0")
                                                            {
                                                                document.getElementById('tr_cometime').style.display = "none";
                                                            }
                                                            else
                                                            {
                                                                document.getElementById('tr_cometime').style.display = "";
                                                            }
                                                        }
                                                        
                                                        if(document.getElementById('pk_iscome').value=="1")
                                                        {
                                                            document.getElementById('tr_cometime').style.display = "";
                                                            
                                                            obj   =   document.getElementsByName('pk_iscome_sel');  
                                                            for   (i=0;i<obj.length;i++)
                                                            {      
                                                                if(obj[i].value=="1")
                                                                {
                                                                   obj[i].checked = true;
                                                                }      
                                                            }     
                                                        }
                                                        
                                                    </script>


								<tr height="30">
									<td class="hei" valign="middle">我的包裹备注：</td>
									<td><textarea name="pk_remark_user" id="pk_remark_user"
											maxlength="500" class="pic_border" rows="10" cols="70"></textarea>
									</td>
								</tr>

								<tr height="30">
									<td width="80"></td>
									<td><input class="input_bot" type="reset" name="" value="取 消"
										onclick="window.history.go(-1);"> <input type="submit"
										name="SendData" value="保 存" id="SendData" class="input_bot"><input
										name="ID" type="hidden" id="ID"><input name="action"
										type="hidden" id="action" value="add">
									</td>
								</tr>
							</tbody>
						</table>


					</td>
				</tr>

			</tbody>

		</table>
	</td>
</tr>



<tr>
	<td height="20" bgcolor="#ffffff"></td>
</tr>
<tr>

	<td bgcolor="#ffffff" valign="middle">
		<table width="100%" border="0" align="center" cellpadding="0"
			cellspacing="0">
			<tbody>

				<tr>
					<td width="10">&nbsp;</td>
					<td width="100%" height="70" bgcolor="#f4f4f4" valign="middle">
						<div align="center" class="hui">君安快递&nbsp;&nbsp; Copyright 2012
							www.junanex.com, All Rights Reserved</div>
					</td>

				</tr>
			</tbody>

		</table>
	</td>
</tr>




</tbody>

</table>
</td>
</tr>
</tbody>

</table>
</div>
</form>
<?php 
}?>