<?php
require_once("include.php");
try{
	session_start();
	display_client_info();
}catch(Exception $e){
	do_html_header('client info error!');
	echo $e->getMessage();
	exit();
}
?>


<!-- display order form -->
<?php function display_client_info(){

	$title="我的信息";
	do_html_header($title);
	if($title){
		$form="db_clientInfo_record.php";
		display_comman_header($form);
		//connect the package table to retrive package info
		//db_user_infor_get();
		display_clientInfo_body();
	}
}?>



<?php 
function display_clientInfo_body(){
	?>
<tr>
	<td height="199">
		<table cellspacing="0" cellpadding="0" width="738" border="0">
			<tbody>
				<tr>
					<td colspan="3" height="10"></td>
				</tr>
				<tr>
					<td height="13"></td>
				</tr>
				<tr>
					<td width="10" height="30">&nbsp;</td>
					<td width="16" height="150">&nbsp;</td>
					<td width="712" class="hei" align="left">

						<table width="100%" border="0" cellspacing="0" cellpadding="0"
							class="hei">
							<tbody>

								<tr height="30">
									<td class="hei" valign="middle"><b>您的邮件：</b></td>
									<td class="hei"><b><span id="txtUserName"><?php echo $_SESSION['email']?>&nbsp;&nbsp;&nbsp;&nbsp;您的会员号：<?php echo $_SESSION['cid']?></span>
									</b></td>
								</tr>

								<tr height="30">
									<td class="hei" valign="middle">英文名(First Name)：</td>
									<td class="hei"><input name="firstname" type="text"
										value=<?php echo $_SESSION['firstname']?> maxlength="50" id="txtCoName" tabindex="1"
										class="pic_border" size="18"
										onblur="if(!/^([a-z]|[A-Z]){0,20}$/.test(this.value)){alert(&#39;请输入英文&#39;);this.focus();return false;}">&nbsp;<font
										color="red">*</font> &nbsp; &nbsp; &nbsp; 英文姓(Last Name)：<input
										name="lastname" type="text" value=<?php echo $_SESSION['lastname']?> maxlength="20"
										id="txtReceiverName" tabindex="2" class="pic_border" size="18"
										onblur="if(!/^([a-z]|[A-Z]){0,20}$/.test(this.value)){alert(&#39;请输入英文&#39;);this.focus();return false;}">&nbsp;<font
										color="red">* &nbsp;&nbsp;</font>
									</td>
								</tr>

								<tr height="30">
									<td></td>
									<td class="hei" valign="middle"><font color="red">提示：只能输入英文姓名</font>
									</td>
								</tr>






								<tr height="30">
									<td class="hei" valign="middle">所属省份：</td>
									<td><select name="state" id="txtCoWebSite" tabindex="3">
											<option selected="selected" value="美国">美国</option>
											<option value="中国">中国</option>
											<option value="北京">北京</option>
											<option value="上海">上海</option>
											<option value="天津">天津</option>
											<option value="重庆">重庆</option>
											<option value="安徽">安徽</option>
											<option value="澳门">澳门</option>
											<option value="福建">福建</option>
											<option value="甘肃">甘肃</option>
											<option value="广东">广东</option>
											<option value="广西">广西</option>
											<option value="贵州">贵州</option>
											<option value="海南">海南</option>
											<option value="河北">河北</option>
											<option value="河南">河南</option>
											<option value="黑龙江">黑龙江</option>
											<option value="湖北">湖北</option>
											<option value="湖南">湖南</option>
											<option value="吉林">吉林</option>
											<option value="江苏">江苏</option>
											<option value="江西">江西</option>
											<option value="辽宁">辽宁</option>
											<option value="内蒙">内蒙</option>
											<option value="宁夏">宁夏</option>
											<option value="青海">青海</option>
											<option value="山东">山东</option>
											<option value="山西">山西</option>
											<option value="陕西">陕西</option>
											<option value="四川">四川</option>
											<option value="台湾">台湾</option>
											<option value="西藏">西藏</option>
											<option value="香港">香港</option>
											<option value="新疆">新疆</option>
											<option value="云南">云南</option>
											<option value="浙江">浙江</option>
									</select> 城市：<input name="city" type="text"
										maxlength="50" id="txtCoIndustry" tabindex="4"
										class="pic_border" size="14">&nbsp;<font color="red">*</font>
									</td>
								</tr>

								<tr height="30">
									<td>中文姓名：</td>
									<td class="hei" valign="middle"><input name="chinesename"
										type="text" value=<?php echo $_SESSION['chinesename']?> maxlength="50" id="hz_realname"
										tabindex="6" class="pic_border" size="20">&nbsp;<font
										color="red">*</font></td>
								</tr>


								<!--
				                       <tr height="90">
	<td class="hei" valign="bottom">身份证扫描件(正面)：</td>
	<td>
					                        <table width="500" border="0" cellspacing="0" cellpadding="0" class="hei">
					                           <tr>
					                            <td valign=bottom width="234"><input name="jn_idcodeimg" type="file" id="jn_idcodeimg" class="pic_border" onchange="prvimages3();" /></td>
					                            <td width="80" valign=bottom><img src="../UploadFile/Sysfiles/zm.jpg" id="previewImage3" height="70" name="previewImage3" widht="120" valing="bottom" /></td>
					                            <td width="80"><div id="pic_div_03" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale);width:100px;height:100px;"></div></td>
					                           </tr>
					                        </table>
                    					 
					                     </td>
</tr>

				                       
				                       <tr height="90">
	<td class="hei" valign="bottom">身份证扫描件(背面)：</td>
	<td>
					                        <table width="500" border="0" cellspacing="0" cellpadding="0" class="hei">
					                           <tr>
					                            <td valign=bottom width="234"><input name="jn_idcodeimg0" type="file" id="jn_idcodeimg0" class="pic_border" onchange="prvimages2();" /></td>
					                            <td width="80" valign=bottom><img src="../UploadFile/Sysfiles/fm.jpg" id="previewImage2" height="70" name="previewImage2" widht="120" valing="bottom" /></td>
					                            <td width="80"><div id="pic_div_02" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale);width:100px;height:100px;"></div></td>
					                           </tr>
					                        </table>
                    					 
					                     </td>
</tr>

				                       
				                       <tr height="30">
					                     <td class="hei" vAlign="middle" colspan="2"><font color=red>照片格式限制为.jpg .gif .pdf ；体积不要超过2M。上传身份证后，在提交运单时，若不使用当前的证件，可另外指定</font></td>
				                       </tr>-->


								<tr height="30">
									<td class="hei" valign="middle">常用电话：</td>
									<td><input name="txtCofmPhone" type="text" value=<?php echo $_SESSION['phonenumber']?> maxlength="50"
										id="txtCofmPhone" tabindex="6" class="pic_border" size="20">&nbsp;<font
										color="red">*</font></td>
								</tr>


								<tr height="30">
									<td class="hei" valign="middle">手机短信：</td>
									<td><input name="txtTelPhone" type="text" 
										maxlength="50" id="txtTelPhone" tabindex="7"
										class="pic_border" size="20"></td>
								</tr>



								<tr height="30">
									<td class="hei" valign="middle">联系地址：</td>
									<td><input name="senderAddress" type="text" maxlength="200"
										id="txtUserAddress" tabindex="8" class="pic_border" size="60">&nbsp;<font
										color="red">*</font></td>
								</tr>

								<tr height="30">
									<td class="hei" valign="middle">邮政编码：</td>
									<td><input name="zip" type="text" maxlength="6"
										id="txtCoPostCode" tabindex="9" class="pic_border" size="20">&nbsp;<font
										color="red">*</font> &nbsp;<a
										href="http://www.ip138.com/post/" target="_blank">查询邮政编码</a></td>
								</tr>

								<tr height="30" style="display: none">
									<td class="hei" valign="middle" colspan="2" bgcolor="#f7f7f7"><font
										color="red">请输入在线联系方式以便客服和您联系</font></td>
								</tr>



								<tr height="30" style="display: none">
									<td class="hei" valign="middle">淘宝旺旺：</td>
									<td><input name="txtCoCharacter" type="text" maxlength="50"
										id="txtCoCharacter" tabindex="10" class="pic_border" size="20">
									</td>
								</tr>



								<tr height="30" style="display: none">
									<td class="hei" valign="middle">腾讯ＱＱ：</td>
									<td><input name="txtCoBank" type="text" maxlength="50"
										id="txtCoBank" tabindex="11" class="pic_border" size="20"></td>
								</tr>

								<tr height="30" style="display: none">
									<td class="hei" valign="middle">Ｍ Ｓ Ｎ：</td>
									<td><input name="txtCoBankCode" type="text" maxlength="50"
										id="txtCoBankCode" tabindex="12" class="pic_border" size="20">
									</td>
								</tr>


								<tr height="30" style="display: none">
									<td class="hei" valign="middle">商品配送地址:</td>
									<td><input name="co_receiveraddress" type="text"
										id="co_receiveraddress" class="pic_border" maxlength="210"
										size="50"></td>
								</tr>



								<tr height="30" style="display: none">
									<td class="hei" valign="middle">收货人性别:</td>
									<td><input
										onclick="document.all.co_receiversex.value=this.value"
										type="radio" checked="" value="1" name="co_receiversex_sel"> 男
										<input onclick="document.all.co_receiversex.value=this.value"
										type="radio" value="0" name="co_receiversex_sel"> 女 <input
										name="co_receiversex" type="hidden" id="co_receiversex"></td>
								</tr>
								<script language="javascript" type="text/javascript">
                    // <!CDATA[

                    var   obj   =   document.getElementsByName('user_type_sel');  
                    if(document.all.user_type.value=="0")
                    {
                    for   (i=0;i<obj.length;i++)
                    {      
                        if(obj[i].value=="0")
                        {
                           obj[i].checked = true;
                        }      
                    }     
                    }

                    obj   =   document.getElementsByName('co_receiversex_sel');  
                    if(document.all.co_receiversex.value=="0")
                    {
                    for   (i=0;i<obj.length;i++)
                    {      
                        if(obj[i].value=="0")
                        {
                           obj[i].checked = true;
                        }      
                    }     
                    }


                    // ]]>
                    </script>



								<tr height="30" style="display: none">
									<td class="hei" valign="middle">传真:</td>
									<td><input name="txtCoFax" type="text" maxlength="100"
										id="txtCoFax" class="pic_border" size="20"></td>
								</tr>





								<tr height="30" style="display: none">
									<td class="hei" valign="middle">E-Mail:</td>
									<td><input name="txtCoE_Mail" type="text"
										value="wangchen666_4@hotmail.com" maxlength="50"
										id="txtCoE_Mail" class="pic_border" size="40"></td>
								</tr>




								<tr height="30">
									<td class="hei" valign="middle">备注信息：</td>
									<td><textarea name="txtCoRemark" id="txtCoRemark"
											class="pic_border" maxlength="500" tabindex="13" rows="10"
											cols="60"></textarea></td>
								</tr>
								<tr height="30">
									<td class="hei" valign="top"></td>
									<td class="hei"><input class="input_bot" tabindex="15"
										type="reset" value="取 消" name="reset">&nbsp;<input
										type="submit" name="SendDate" value="确 定" id="SendDate"
										tabindex="14" class="input_bot"></td>
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
						<div align="center" class="hui">王大锤快递&nbsp;&nbsp; Copyright 2014, All Rights Reserved</div>
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


<script
	type="text/javascript" async="" src="./会员服务系统_files/cnzz.js"></script>
<script
	type="text/javascript" async="" src="./会员服务系统_files/cnzz.js"></script>
<script type="text/javascript">var vglnk = {api_url: '//api.viglink.com/api', key: '084c74521c465af0d8f08b63422103cc'};</script>
<script
	type="text/javascript" async="" src="./会员服务系统_files/vglnk.js"></script>
<script type="text/javascript">var vglnk = {api_url: '//api.viglink.com/api', key: '084c74521c465af0d8f08b63422103cc'};</script>
<script
	type="text/javascript" async="" src="./会员服务系统_files/vglnk.js"></script>
</body>
</html>
<?php 
}
?>


