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


<!-- display member init login page -->
<?php 
function display_member_init(){

	$title="会员服务系统";
	do_html_header($title);
	if($title){
		display_member_heading();
		display_member_body();
	}

}
?>
<!-- display member init login page -->

<!-- display order form -->
<?php function display_order_form(){

	$title="订单";
	do_html_header($title);
	if($title){
		display_order_heading();
		display_order_body();
	}
}?>
<!-- display order form -->
<?php  
function display_order_heading(){
	$form="Us_Index.aspx";
	display_comman_header($form);
}
?>

<?php 
function display_order_body(){

?>
							<tr>
								<td height="199" valign="top">
									<table cellspacing="0" cellpadding="0" width="100%" border="0">
									    
										<tbody><tr>
											<td height="23" colspan="2"></td>
										</tr>
										<tr>
											
											<td class="da" width="593" colspan="2" height="30" style="text-indent:26px"><img height="15" src="image/tip_arrow3.jpg" width="15">&nbsp;&nbsp;创建新业务</td>
										</tr>
										<tr>
											<td width="20" height="30">&nbsp;</td>
											
											<td width="*" class="hei" align="left" valign="top">
											
											
											    <table width="100%" border="0" cellspacing="0" cellpadding="5" class="hei">
                                                    <tbody>
                                                        
                                                        
                                                        <tr height="30">
                                                            <td class="da" height="30" colspan="2">
                                                            业务号：<font color="green"><b><span id="bs_no">待创建</span></b></font>  &nbsp;&nbsp;<span id="bs_state_lab"></span>
                                                            </td>
                                                        </tr>
                                                        
                                                        
                                                        
                                                        <tr height="30">
                                                            <td class="da" height="30" colspan="2" bgcolor="#ebf2fc">
                                                                第一步：选择已入库的美国包裹（若包裹尚未到达仓库可预先虚拟录入包裹信息）&nbsp;&nbsp;&nbsp;</td>
                                                        </tr>
                                                        
                                                        <tr height="30">
                                                            <td class="da" height="50" style="border:solid 2px #1e93e3" background="image/bg.jpg">
                                                            
                                                                <table width="100%" border="0" cellspacing="0" class="allborder" cellpadding="5">
                                                                  <tbody><tr>
                                                                    <td width="45%" valign="top" style="display:none">
                                                                    <div id="selpackageshow">暂无已选包裹</div>
                                                                    <input name="yw_packagesel" type="hidden" id="yw_packagesel">
                                                                    <input name="yw_packagesel_edit" type="hidden" id="yw_packagesel_edit">
                                                                    
                                                                    </td>
                                                                    <td width="90%" bgcolor="#f7f7f7" valign="top">
                                                                        <iframe name="kuaidi100" id="kuaidi100" frameborder="no" src="Us_YundanSelPackage.aspx?bs_isedit=add&amp;pk_areaid=5&amp;seluser=02089&amp;bsno=" height="150" border="0" width="100%" scrolling="auto"> </iframe>
                                                                    </td>
                                                                  </tr>
                                                                                                    
                                                                  <tr><td height="10" class="da3" colspan="2"><b>已选包裹总重: </b>
                                                                  
                                                                         <input type="text" id="yw_packagefullweight" name="yw_packagefullweight" size="6" value="0.00" style="color:red;font-weight:bold" class="input_none" readonly="" onkeyup="if(isNaN(value))execCommand('undo')" onafterpaste="if(isNaN(value))execCommand('undo')">磅
                                                                         
                                                                         &nbsp;&nbsp;<span id="tw_package_willprice"><font color="red">本业务总费用预估 0 美元，为不影响发货速度，请确保账户余额充足。</font></span><br><br>
                                                                         
                                                                         
                                                                         <input name="user_yw_fee" type="hidden" id="user_yw_fee" value="0"> <input name="bs_real_fee" type="hidden" id="bs_real_fee" value="0">
                                                                         
                                                                  </td></tr>     
                                                                  <tr style="display:none;"><td>
                                                                  是否使用积分：<select name="bs_isusedot" id="bs_isusedot" disabled="disabled">
	<option selected="selected" value="0">不使用</option>
	<option value="1">使用</option>
</select>&nbsp;&nbsp;您当前可用积分：<font color="red"><span id="hz_mydot">0 分</span></font>&nbsp;&nbsp;<a href="Us_Recommend.aspx">如何获得积分？</a>
                                                                  
                                                                  </td></tr>                   
                                                                  <script>
                                                                  
                                                                  </script>
                                                               </tbody></table>
                                                            
                                                            
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr><td colspan="2" height="5"></td></tr>
                                                        
                                                         <tr height="30">
                                                            <td class="da" height="30" colspan="2" bgcolor="#ebf2fc">
                                                                第二步：请选择业务要求，然后填写运单信息&nbsp;&nbsp;&nbsp;</td>
                                                        </tr>
                                                        <tr height="30">
                                                            <td class="da" height="50">
                                                                 <table width="100%" border="0" cellspacing="0" class="allborder" cellpadding="0">
                                                                    <tbody><tr height="35">
                                                                      
                                                                      <td nowrap="" align="left" width="100%">
                                                                        <input type="radio" name="bs_type_radio" value="0" onclick="return setydtype('0')">原箱转运&nbsp;&nbsp;
                                                                        
                                                                        <input type="radio" name="bs_type_radio" value="1" onclick="return setydtype('1')">合箱转运&nbsp;&nbsp;
                                                                        
                                                                        <input type="radio" name="bs_type_radio" value="2" onclick="return setydtype('2')">分箱转运&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        
                                                                        创建运单数量：<select name="bs_boxnum" id="bs_boxnum" disabled="disabled" onchange="setydtype(document.getElementById('bs_type').value);">
	<option selected="selected" value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>&nbsp;&nbsp;一个运单对应一个箱子
                                                                        
                                                                        <input name="bs_type" type="hidden" id="bs_type">
                                                                        
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;<font color="red"><label id="bs_fee_lab"></label></font>
                                                                       </td></tr>
                                                                       
                                                                       <tr height="35" style="display:none;" id="tr_text">
                                                                        <td nowrap="" align="left" width="100%" class="da" style="border: solid 1px #5f5f5f;"><br>
                                                                        &nbsp;&nbsp;&nbsp;<font color="red">运单物品名称填写规则必读：</font><br><br>
                                                                        1、物品名称必须写详细。比如：不能笼统地写：衣服，鞋子，保健品，等等。必须写出具体名称：外套，裤子，皮鞋，皮靴，维生素等等。<br><br>
                                                                        
                                                                        2、如果有多样商品，请在第一栏按以下格式写：外套2，皮鞋2，维生素5….,  后面数量栏写整个包裹的总数量，价值写总价值。忽略多余的物品栏。<br><br>
                                                                        
                                                                        </td>
                                                                       </tr>
                                                                       
                                                                       
                                                                       
                                                                       <tr height="35" id="trbill_top" style="display:none">
                                                                          
                                                                          <td nowrap="" align="left" width="100%">
                                                                            <table width="965" border="0" cellspacing="10" class="allborder" cellpadding="0">
                                                                            
                                                                              <tbody><tr id="trbill_0" style="display:none;">
	<td width="945" height="460" valign="top" background="image/bg_blue.jpg">
                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="5" class="tablebill">
                                                                                        <tbody><tr>
                                                                                            <td height="34" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="90"><img src="image/0.jpg"></td>
                                                                                                        <td width="305" align="left" height="34">
                                                                                                            <input class="input_button" type="button" name="bt_sendaddress_0" value="新建发件人" onclick="input_SendAddress('0')">
                                                                                                            <input class="input_button" type="button" name="bt_sendaddress_sel_0" value="选择发件人" onclick="select_SendAddress('0');">    
                                                                                                        </td>
                                                                                                        <td width="*">
                                                                                                            <input class="input_button" type="button" name="bt_address_0" value="新建收货地址" onclick="input_Address('0');">
                                                                                                            <input class="input_button" type="button" name="bt_address_sel_0" value="选择收货地址" onclick="select_Address_Idc('0');">
                                                                                                            <input class="input_button" type="button" name="bt_idcard_sel_0" value="选择身份证" onclick="selIDC('0');">
                                                                                                            
                                                                                                            <label id="yd_idccardID_text_0" name="yd_idccardID_text_0"></label>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293"><label id="sendaddress_name_0">Chen&nbsp;Wang</label>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="285"><label id="address_name_0"></label></td>
                                                                                                        <td width="84"> </td>
                                                                                                        <td width="*"><label id="address_code_0"></label></td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293"><label id="sendaddress_tel_0">13124935854</label>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="*"><label id="address_tel_0"></label>&nbsp;<label id="address_tel2_0"></label></td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="60" class="tablebill_line" valign="top" style="word-wrap: break-word; word-break:break-all;"><label id="sendaddress_address_0">8888 LEE AVE.SOUTH EL</label></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td height="30"><label id="sendaddress_code_0">888</label></td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="*">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="30" colspan="2"><label id="address_province_0"></label>&nbsp;<label id="address_area_0"></label></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td height="60" class="tablebill_line" valign="top" style="word-wrap: break-word; word-break:break-all;"><label id="address_address_0"></label></td>
                                                                                                                    
                                                                                                                    <td width="2"></td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="38" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="7"></td>
                                                                                                        <td width="170">
                                                                                                            <select name="bl_billdel_0" id="bl_billdel_0" onchange="bl_billdel_fuc('0',this.value); ">
		<option value="0">本运单正常</option>
		<option selected="selected" value="1">本运单删除</option>
	</select>
                                                                                                            
                                                                                                            <input name="yd_sendaddressID_0" type="hidden" id="yd_sendaddressID_0">
                                                                                                            
                                                                                                            <input name="yd_addressID_0" type="hidden" id="yd_addressID_0">
                                                                                                            
                                                                                                            <input name="yd_idccardID_0" type="hidden" id="yd_idccardID_0" value="">
                                                                                                            
                                                                                                        </td>
                                                                                                        <td width="208"><font style="font-size:15px;"><span id="bl_no_0">待创建</span></font><span id="bl_state_show_0"></span>
                                                                                                        </td>
                                                                                                        <td width="100"> </td>
                                                                                                        <td width="*">
                                                                                                            <select name="bl_deliverywaysel_0" id="bl_deliverywaysel_0" onchange="deliverywaysel_fuc('0',this.value);setfeebyweight('0');willprice_fuc();">
                                                                                                                  <option value="">请选择</option>
                                                                                                                  <option value="4">ID发货新张特价</option><option value="10">非ID普通类</option><option value="11">非ID特殊类</option>
                                                                                                              </select>
                                                                                                            <input name="bl_deliveryway_0" type="hidden" id="bl_deliveryway_0"><span id="bl_koufei_show_0"></span>&nbsp; 免服务费<input name="bl_isservicefee_0" type="checkbox" id="bl_isservicefee_0" disabled="disabled"><input name="bl_servicefee_0" type="text" id="bl_servicefee_0" onkeyup="if(isNaN(value))execCommand('undo');" value="0.00" maxlength="8" class="input_none" onafterpaste="if(isNaN(value))execCommand('undo')" style="color:green;font-weight:bold;" size="4" readonly="">美元
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td height="38" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabletext">
                                                                                                    <tbody><tr>
                                                                                                        <td height="24"></td>
                                                                                                        <td></td>
                                                                                                        <td><input type="checkbox" name="bl_service_sel_0" value="0" onclick="getservice_fuc('0');"><b>取出发票</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_0" value="1" onclick="getservice_fuc('0');"><b>加固物品</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_0" value="2" onclick="getservice_fuc('0');"><b>去除广告杂志</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_0" value="3" onclick="getservice_fuc('0');"><b>丢弃鞋盒</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_0" value="4" onclick="getservice_fuc('0');"><b>加套外箱</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input name="bl_service_0" type="hidden" id="bl_service_0">
                                                                                                         </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td width="8"></td>
                                                                                                        <td width="391" valign="top">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr><td colspan="4" height="4"> </td></tr>
                                                                                                                <tr height="25">
                                                                                                                    <td width="206" align="center" valign="bottom"><input type="text" id="bl_pro_name_0_0" onkeyup="get_bl_proname_value('0');" name="bl_pro_name_0_0" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td width="38" align="center" valign="bottom"><input type="text" id="bl_pro_num_0_0" name="bl_pro_num_0_0" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('0');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="134" align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_0_0" name="bl_pro_dvalue_0_0" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('0');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                                <tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_0_1" onkeyup="get_bl_proname_value('0');" name="bl_pro_name_0_1" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_0_1" name="bl_pro_num_0_1" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('0');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_0_1" name="bl_pro_dvalue_0_1" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('0');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                                <tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_0_2" onkeyup="get_bl_proname_value('0');" name="bl_pro_name_0_2" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_0_2" name="bl_pro_num_0_2" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('0');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_0_2" name="bl_pro_dvalue_0_2" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('0');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>


																												<tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_0_3" onkeyup="get_bl_proname_value('0');" name="bl_pro_name_0_3" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_0_3" name="bl_pro_num_0_3" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('0');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_0_3" name="bl_pro_dvalue_0_3" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('0');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>


																												<tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_0_4" onkeyup="get_bl_proname_value('0');" name="bl_pro_name_0_4" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_0_4" name="bl_pro_num_0_4" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('0');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_0_4" name="bl_pro_dvalue_0_4" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('0');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        
                                                                                                            <textarea name="bl_proname_0" id="bl_proname_0" style="width:377px;height:131px;border:0px;overflow-y:auto;display:none;"></textarea>
                                                                                                            
                                                                                                        </td>
                                                                                                        
                                                                                                        <td width="*" valign="top">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="87" valign="top">
                                                                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                            <tbody><tr><td height="8"></td></tr>
                                                                                                                            <tr height="25">
                                                                                                                                <td width="115">申报价值(美元)</td>
                                                                                                                                <td width="100">总保额(美元)</td>
                                                                                                                                <td width="100">保险费(美元)</td>
                                                                                                                                <td width="100">运单重量(磅)</td>
                                                                                                                                <td width="*">快递费(美元) </td>
                                                                                                                            </tr>
                                                                                                                            <tr height="30">
                                                                                                                                <td><input name="bl_declarevalue_0" type="text" id="bl_declarevalue_0" readonly="" class="input_none" maxlength="10" style="color:green;font-weight:bold;width:97px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_insurancesum_0" type="text" id="bl_insurancesum_0" class="input_bottom" maxlength="8" style="width:81px;" value="0.00" onkeyup="if(isNaN(value))execCommand('undo');setinsurance('0');setfeebyweight('0');willprice_fuc();" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_insurance_0" type="text" id="bl_insurance_0" readonly="" class="input_none" maxlength="8" value="0.00" style="color:green;font-weight:bold;width:81px;" onkeyup="if(isNaN(value))execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_weight_0" type="text" id="bl_weight_0" class="input_none" readonly="" maxlength="8" style="width:81px;" value="0.00" onkeyup="if(isNaN(value))execCommand('undo');setfeebyweight('0');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_fee_0" type="text" id="bl_fee_0" class="input_none" readonly="" maxlength="8" value="0.00" style="color:Red;font-weight:bold;width:81px;" onkeyup="if(isNaN(value))execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                            </tr>
                                                                                                                            
                                                                                                                            <tr height="23">
                                                                                                                                <td colspan="5">
                                                                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                                        <tbody><tr>
                                                                                                                                            <td width="85"></td>
                                                                                                                                            <td bgcolor="#daff80" width="102"></td>
                                                                                                                                            <td bgcolor="#daff80" align="right"><input name="bl_issetbox_0" type="checkbox" id="bl_issetbox_0"><font color="green">是否需要有偿打包</font></td>
                                                                                                                                            <td width="5"></td>
                                                                                                                                            <td bgcolor="#daff80">有偿打包费：<input name="bl_issetboxfee_0" type="text" id="bl_issetboxfee_0" onkeyup="if(isNaN(value))execCommand('undo');" value="0.00" maxlength="8" class="input_none" onafterpaste="if(isNaN(value))execCommand('undo')" style="color:green;font-weight:bold;" size="7" readonly="">美元</td>
                                                                                                                                            <td width="10"></td>
                                                                                                                                        </tr>
                                                                                                                                    </tbody></table>
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                        </tbody></table>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td>
                                                                                                                        <textarea name="bl_remark_0" id="bl_remark_0" style="width:524px;height:44px;border:0px;overflow-y:auto;"></textarea><input name="bl_remarkred_0" type="checkbox" id="bl_remarkred_0" style="display:none" onclick="bl_remark_fuc('0');">
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td colspan="3">
                                                                                                             <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr><td height="18"></td></tr>
                                                                                                                <tr>
                                                                                                                    <td width="100"></td>
                                                                                                                    <td><textarea name="bl_remark_co_0" id="bl_remark_co_0" style="width:820px;height:22px;border:0px;overflow-y:auto;" readonly=""></textarea></td>
                                                                                                                </tr>
                                                                                                             </tbody></table>
                                                                                                        
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </td>
</tr>

                                                                              
                                                                              <tr id="tr_tip_0"><td height="5"></td></tr>
                                                                              
                                                                              <tr id="trbill_1" style="display:none;">
	<td width="945" height="460" valign="top" background="image/bg_yellow.jpg">
                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="5" class="tablebill">
                                                                                        <tbody><tr>
                                                                                            <td height="34" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="90"><img src="image/1.jpg"></td>
                                                                                                        <td width="305" align="left" height="34">
                                                                                                            <input class="input_button" type="button" name="bt_sendaddress_1" value="新建发件人" onclick="input_SendAddress('1')">
                                                                                                            <input class="input_button" type="button" name="bt_sendaddress_sel_1" value="选择发件人" onclick="select_SendAddress('1');">    
                                                                                                        </td>
                                                                                                        <td width="*">
                                                                                                            <input class="input_button" type="button" name="bt_address_1" value="新建收货地址" onclick="input_Address('1');">
                                                                                                            <input class="input_button" type="button" name="bt_address_sel_1" value="选择收货地址" onclick="select_Address_Idc('1');">
                                                                                                            
                                                                                                            <input class="input_button" type="button" name="bt_idcard_sel_1" value="选择身份证" onclick="selIDC('1');">
                                                                                                            
                                                                                                            <label id="yd_idccardID_text_1" name="yd_idccardID_text_1"></label>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293"><label id="sendaddress_name_1">Chen&nbsp;Wang</label>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="285"><label id="address_name_1"></label></td>
                                                                                                        <td width="84"> </td>
                                                                                                        <td width="*"><label id="address_code_1"></label></td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293"><label id="sendaddress_tel_1">13124935854</label>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="*"><label id="address_tel_1"></label>&nbsp;<label id="address_tel2_1"></label></td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="60" class="tablebill_line" valign="top" style="word-wrap: break-word; word-break:break-all;"><label id="sendaddress_address_1">8888 LEE AVE.SOUTH EL</label></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td height="30"><label id="sendaddress_code_1">888</label></td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="*">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="30" colspan="2"><label id="address_province_1"></label>&nbsp;<label id="address_area_1"></label></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td height="60" class="tablebill_line" valign="top" style="word-wrap: break-word; word-break:break-all;"><label id="address_address_1"></label></td>
                                                                                                                    
                                                                                                                    <td width="2"></td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="38" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="7"></td>
                                                                                                        <td width="170">
                                                                                                            <select name="bl_billdel_1" id="bl_billdel_1" onchange="bl_billdel_fuc('1',this.value); ">
		<option value="0">本运单正常</option>
		<option selected="selected" value="1">本运单删除</option>
	</select>
                                                                                                            
                                                                                                            <input name="yd_sendaddressID_1" type="hidden" id="yd_sendaddressID_1">
                                                                                                            
                                                                                                            <input name="yd_addressID_1" type="hidden" id="yd_addressID_1">
                                                                                                            
                                                                                                            <input name="yd_idccardID_1" type="hidden" id="yd_idccardID_1" value="">
                                                                                                            
                                                                                                        </td>
                                                                                                        <td width="208"><font style="font-size:15px;"><span id="bl_no_1">待创建</span></font><span id="bl_state_show_1"></span>
                                                                                                        </td>
                                                                                                        <td width="100"> </td>
                                                                                                        <td width="*">
                                                                                                            <select name="bl_deliverywaysel_1" id="bl_deliverywaysel_1" onchange="deliverywaysel_fuc('1',this.value);setfeebyweight('1');willprice_fuc();">
                                                                                                                  <option value="">请选择</option>
                                                                                                                  <option value="4">ID发货新张特价</option><option value="10">非ID普通类</option><option value="11">非ID特殊类</option>
                                                                                                              </select>
                                                                                                            <input name="bl_deliveryway_1" type="hidden" id="bl_deliveryway_1"><span id="bl_koufei_show_1"></span>&nbsp; 免服务费<input name="bl_isservicefee_1" type="checkbox" id="bl_isservicefee_1" disabled="disabled"><input name="bl_servicefee_1" type="text" id="bl_servicefee_1" onkeyup="if(isNaN(value))execCommand('undo');" value="0.00" maxlength="8" class="input_none" onafterpaste="if(isNaN(value))execCommand('undo')" style="color:green;font-weight:bold;" size="4" readonly="">美元
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td height="38" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabletext">
                                                                                                    <tbody><tr>
                                                                                                        <td height="24"></td>
                                                                                                        <td></td>
                                                                                                        <td><input type="checkbox" name="bl_service_sel_1" value="0" onclick="getservice_fuc('1');"><b>取出发票</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_1" value="1" onclick="getservice_fuc('1');"><b>加固物品</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_1" value="2" onclick="getservice_fuc('1');"><b>去除广告杂志</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_1" value="3" onclick="getservice_fuc('1');"><b>丢弃鞋盒</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_1" value="4" onclick="getservice_fuc('1');"><b>加套外箱</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input name="bl_service_1" type="hidden" id="bl_service_1">
                                                                                                         </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td width="8"></td>
                                                                                                        <td width="391">
                                                                                                            
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr><td colspan="4" height="4"> </td></tr>
                                                                                                                <tr height="25">
                                                                                                                    <td width="206" align="center" valign="bottom"><input type="text" id="bl_pro_name_1_0" onkeyup="get_bl_proname_value('1');" name="bl_pro_name_1_0" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td width="38" align="center" valign="bottom"><input type="text" id="bl_pro_num_1_0" name="bl_pro_num_1_0" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('1');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="134" align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_1_0" name="bl_pro_dvalue_1_0" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('1');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                                <tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_1_1" onkeyup="get_bl_proname_value('1');" name="bl_pro_name_1_1" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_1_1" name="bl_pro_num_1_1" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('1');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_1_1" name="bl_pro_dvalue_1_1" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('1');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                                <tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_1_2" onkeyup="get_bl_proname_value('1');" name="bl_pro_name_1_2" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_1_2" name="bl_pro_num_1_2" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('1');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_1_2" name="bl_pro_dvalue_1_2" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('1');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>


																												<tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_1_3" onkeyup="get_bl_proname_value('1');" name="bl_pro_name_1_3" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_1_3" name="bl_pro_num_1_3" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('1');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_1_3" name="bl_pro_dvalue_1_3" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('1');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>


																												<tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_1_4" onkeyup="get_bl_proname_value('1');" name="bl_pro_name_1_4" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_1_4" name="bl_pro_num_1_4" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('1');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_1_4" name="bl_pro_dvalue_1_4" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('1');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                            
                                                                                                            <textarea name="bl_proname_1" id="bl_proname_1" style="width:377px;height:131px;border:0px;overflow-y:auto;display:none;"></textarea>
                                                                                                        </td>
                                                                                                        
                                                                                                        <td width="*" valign="top">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="87" valign="top">
                                                                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                            <tbody><tr><td height="8"></td></tr>
                                                                                                                            <tr height="25">
                                                                                                                                <td width="115">申报价值(美元)</td>
                                                                                                                                <td width="100">总保额(美元)</td>
                                                                                                                                <td width="100">保险费(美元)</td>
                                                                                                                                <td width="100">运单重量(磅)</td>
                                                                                                                                <td width="*">快递费(美元) </td>
                                                                                                                            </tr>
                                                                                                                            <tr height="30">
                                                                                                                                <td><input name="bl_declarevalue_1" type="text" id="bl_declarevalue_1" readonly="" class="input_none" maxlength="10" style="color:green;font-weight:bold;width:97px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_insurancesum_1" type="text" id="bl_insurancesum_1" class="input_bottom" maxlength="8" style="width:81px;" value="0.00" onkeyup="if(isNaN(value))execCommand('undo');setinsurance('1');setfeebyweight('1');willprice_fuc();" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_insurance_1" type="text" id="bl_insurance_1" readonly="" class="input_none" maxlength="8" value="0.00" style="color:green;font-weight:bold;width:81px;" onkeyup="if(isNaN(value))execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_weight_1" type="text" id="bl_weight_1" class="input_none" readonly="" maxlength="8" style="width:81px;" value="0.00" onkeyup="if(isNaN(value))execCommand('undo');setfeebyweight('1');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_fee_1" type="text" id="bl_fee_1" class="input_none" readonly="" maxlength="8" value="0.00" style="color:Red;font-weight:bold;width:81px;" onkeyup="if(isNaN(value))execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                            </tr>
                                                                                                                            
                                                                                                                            <tr height="23">
                                                                                                                                <td colspan="5">
                                                                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                                        <tbody><tr>
                                                                                                                                            <td width="85"></td>
                                                                                                                                            <td bgcolor="#daff80" width="102"></td>
                                                                                                                                            <td bgcolor="#daff80" align="right"><input name="bl_issetbox_1" type="checkbox" id="bl_issetbox_1"><font color="green">是否需要有偿打包</font></td>
                                                                                                                                            <td width="5"></td>
                                                                                                                                            <td bgcolor="#daff80">有偿打包费：<input name="bl_issetboxfee_1" type="text" id="bl_issetboxfee_1" onkeyup="if(isNaN(value))execCommand('undo');" value="0.00" maxlength="8" class="input_none" onafterpaste="if(isNaN(value))execCommand('undo')" style="color:green;font-weight:bold;" size="7" readonly="">美元</td>
                                                                                                                                            <td width="10"></td>
                                                                                                                                        </tr>
                                                                                                                                    </tbody></table>
                                                                                                                                </td>
                                                                                                                            </tr>

                                                                                                                        </tbody></table>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td>
                                                                                                                        <textarea name="bl_remark_1" id="bl_remark_1" style="width:524px;height:44px;border:0px;overflow-y:auto;"></textarea><input name="bl_remarkred_1" type="checkbox" id="bl_remarkred_1" style="display:none" onclick="bl_remark_fuc('1');">
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    
                                                                                                    <tr>
                                                                                                        <td colspan="3">
                                                                                                             <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr><td height="18"></td></tr>
                                                                                                                <tr>
                                                                                                                    <td width="100"></td>
                                                                                                                    <td><textarea name="bl_remark_co_1" id="bl_remark_co_1" style="width:820px;height:22px;border:0px;overflow-y:auto;" readonly=""></textarea></td>
                                                                                                                </tr>
                                                                                                             </tbody></table>
                                                                                                        
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </td>
</tr>

                                                                              
                                                                              <tr id="tr_tip_1"><td height="5"></td></tr>
                                                                              
                                                                              <tr id="trbill_2" style="display:none;">
	<td width="945" height="460" valign="top" background="image/bg_blue.jpg">
                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="5" class="tablebill">
                                                                                        <tbody><tr>
                                                                                            <td height="34" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="90"><img src="image/2.jpg"></td>
                                                                                                        <td width="305" align="left" height="34">
                                                                                                            <input class="input_button" type="button" name="bt_sendaddress_2" value="新建发件人" onclick="input_SendAddress('2')">
                                                                                                            <input class="input_button" type="button" name="bt_sendaddress_sel_2" value="选择发件人" onclick="select_SendAddress('2');">    
                                                                                                        </td>
                                                                                                        <td width="*">
                                                                                                            <input class="input_button" type="button" name="bt_address_2" value="新建收货地址" onclick="input_Address('2');">
                                                                                                            <input class="input_button" type="button" name="bt_address_sel_2" value="选择收货地址" onclick="select_Address_Idc('2');">
                                                                                                            
                                                                                                            <input class="input_button" type="button" name="bt_idcard_sel_2" value="选择身份证" onclick="selIDC('2');">
                                                                                                            
                                                                                                            <label id="yd_idccardID_text_2" name="yd_idccardID_text_2"></label> 
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293"><label id="sendaddress_name_2">Chen&nbsp;Wang</label>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="285"><label id="address_name_2"></label></td>
                                                                                                        <td width="84"> </td>
                                                                                                        <td width="*"><label id="address_code_2"></label></td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293"><label id="sendaddress_tel_2">13124935854</label>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="*"><label id="address_tel_2"></label>&nbsp;<label id="address_tel2_2"></label></td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="60" class="tablebill_line" valign="top" style="word-wrap: break-word; word-break:break-all;"><label id="sendaddress_address_2">8888 LEE AVE.SOUTH EL</label></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td height="30"><label id="sendaddress_code_2">888</label></td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="*">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="30" colspan="2"><label id="address_province_2"></label>&nbsp;<label id="address_area_2"></label></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td height="60" class="tablebill_line" valign="top" style="word-wrap: break-word; word-break:break-all;"><label id="address_address_2"></label></td>
                                                                                                                    
                                                                                                                    <td width="2"></td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="38" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="7"></td>
                                                                                                        <td width="170">
                                                                                                            <select name="bl_billdel_2" id="bl_billdel_2" onchange="bl_billdel_fuc('2',this.value); ">
		<option value="0">本运单正常</option>
		<option selected="selected" value="1">本运单删除</option>
	</select>
                                                                                                            
                                                                                                            <input name="yd_sendaddressID_2" type="hidden" id="yd_sendaddressID_2">
                                                                                                            
                                                                                                            <input name="yd_addressID_2" type="hidden" id="yd_addressID_2">
                                                                                                            
                                                                                                            <input name="yd_idccardID_2" type="hidden" id="yd_idccardID_2" value="">
                                                                                                            
                                                                                                        </td>
                                                                                                        <td width="208"><font style="font-size:15px;"><span id="bl_no_2">待创建</span></font><span id="bl_state_show_2"></span>
                                                                                                        </td>
                                                                                                        <td width="100"> </td>
                                                                                                        <td width="*">
                                                                                                            <select name="bl_deliverywaysel_2" id="bl_deliverywaysel_2" onchange="deliverywaysel_fuc('2',this.value);setfeebyweight('2');willprice_fuc();">
                                                                                                                  <option value="">请选择</option>
                                                                                                                  <option value="4">ID发货新张特价</option><option value="10">非ID普通类</option><option value="11">非ID特殊类</option>
                                                                                                              </select>
                                                                                                            <input name="bl_deliveryway_2" type="hidden" id="bl_deliveryway_2"><span id="bl_koufei_show_2"></span>&nbsp; 免服务费<input name="bl_isservicefee_2" type="checkbox" id="bl_isservicefee_2" disabled="disabled"><input name="bl_servicefee_2" type="text" id="bl_servicefee_2" onkeyup="if(isNaN(value))execCommand('undo');" value="0.00" maxlength="8" class="input_none" onafterpaste="if(isNaN(value))execCommand('undo')" style="color:green;font-weight:bold;" size="4" readonly="">美元
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td height="38" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabletext">
                                                                                                    <tbody><tr>
                                                                                                        <td height="24"></td>
                                                                                                        <td></td>
                                                                                                        <td><input type="checkbox" name="bl_service_sel_2" value="0" onclick="getservice_fuc('2');"><b>取出发票</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_2" value="1" onclick="getservice_fuc('2');"><b>加固物品</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_2" value="2" onclick="getservice_fuc('2');"><b>去除广告杂志</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_2" value="3" onclick="getservice_fuc('2');"><b>丢弃鞋盒</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_2" value="4" onclick="getservice_fuc('2');"><b>加套外箱</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input name="bl_service_2" type="hidden" id="bl_service_2">
                                                                                                         </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td width="8"></td>
                                                                                                        <td width="391">
                                                                                                        
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr><td colspan="4" height="4"> </td></tr>
                                                                                                                <tr height="25">
                                                                                                                    <td width="206" align="center" valign="bottom"><input type="text" id="bl_pro_name_2_0" onkeyup="get_bl_proname_value('2');" name="bl_pro_name_2_0" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td width="38" align="center" valign="bottom"><input type="text" id="bl_pro_num_2_0" name="bl_pro_num_2_0" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('2');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="134" align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_2_0" name="bl_pro_dvalue_2_0" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('2');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                                <tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_2_1" onkeyup="get_bl_proname_value('2');" name="bl_pro_name_2_1" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_2_1" name="bl_pro_num_2_1" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('2');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_2_1" name="bl_pro_dvalue_2_1" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('2');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                                <tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_2_2" onkeyup="get_bl_proname_value('2');" name="bl_pro_name_2_2" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_2_2" name="bl_pro_num_2_2" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('2');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_2_2" name="bl_pro_dvalue_2_2" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('2');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>


																												<tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_2_3" onkeyup="get_bl_proname_value('2');" name="bl_pro_name_2_3" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_2_3" name="bl_pro_num_2_3" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('2');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_2_3" name="bl_pro_dvalue_2_3" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('2');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>


																												<tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_2_4" onkeyup="get_bl_proname_value('2');" name="bl_pro_name_2_4" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_2_4" name="bl_pro_num_2_4" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('2');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_2_4" name="bl_pro_dvalue_2_4" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('2');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                            <textarea name="bl_proname_2" id="bl_proname_2" style="width:377px;height:131px;border:0px;overflow-y:auto;display:none;"></textarea>
                                                                                                        </td>
                                                                                                        
                                                                                                        <td width="*" valign="top">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="87" valign="top">
                                                                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                            <tbody><tr><td height="8"></td></tr>
                                                                                                                            <tr height="25">
                                                                                                                                <td width="115">申报价值(美元)</td>
                                                                                                                                <td width="100">总保额(美元)</td>
                                                                                                                                <td width="100">保险费(美元)</td>
                                                                                                                                <td width="100">运单重量(磅)</td>
                                                                                                                                <td width="*">快递费(美元) </td>
                                                                                                                            </tr>
                                                                                                                            <tr height="30">
                                                                                                                                <td><input name="bl_declarevalue_2" type="text" id="bl_declarevalue_2" readonly="" class="input_none" maxlength="10" style="color:green;font-weight:bold;width:97px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_insurancesum_2" type="text" id="bl_insurancesum_2" class="input_bottom" maxlength="8" style="width:81px;" value="0.00" onkeyup="if(isNaN(value))execCommand('undo');setinsurance('2');setfeebyweight('2');willprice_fuc();" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_insurance_2" type="text" id="bl_insurance_2" readonly="" class="input_none" maxlength="8" value="0.00" style="color:green;font-weight:bold;width:81px;" onkeyup="if(isNaN(value))execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_weight_2" type="text" id="bl_weight_2" class="input_none" readonly="" maxlength="8" style="width:81px;" value="0.00" onkeyup="if(isNaN(value))execCommand('undo');setfeebyweight('2');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_fee_2" type="text" id="bl_fee_2" class="input_none" readonly="" maxlength="8" value="0.00" style="color:Red;font-weight:bold;width:81px;" onkeyup="if(isNaN(value))execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                            </tr>
                                                                                                                            
                                                                                                                            <tr height="23">
                                                                                                                                <td colspan="5">
                                                                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                                        <tbody><tr>
                                                                                                                                            <td width="85"></td>
                                                                                                                                            <td bgcolor="#daff80" width="102"></td>
                                                                                                                                            <td bgcolor="#daff80" align="right"><input name="bl_issetbox_2" type="checkbox" id="bl_issetbox_2"><font color="green">是否需要有偿打包</font></td>
                                                                                                                                            <td width="5"></td>
                                                                                                                                            <td bgcolor="#daff80">有偿打包费：<input name="bl_issetboxfee_2" type="text" id="bl_issetboxfee_2" onkeyup="if(isNaN(value))execCommand('undo');" value="0.00" maxlength="8" class="input_none" onafterpaste="if(isNaN(value))execCommand('undo')" style="color:green;font-weight:bold;" size="7" readonly="">美元</td>
                                                                                                                                            <td width="10"></td>
                                                                                                                                        </tr>
                                                                                                                                    </tbody></table>
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                        </tbody></table>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td>
                                                                                                                        <textarea name="bl_remark_2" id="bl_remark_2" style="width:524px;height:44px;border:0px;overflow-y:auto;"></textarea><input name="bl_remarkred_2" type="checkbox" id="bl_remarkred_2" style="display:none" onclick="bl_remark_fuc('2');">
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td colspan="3">
                                                                                                             <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr><td height="18"></td></tr>
                                                                                                                <tr>
                                                                                                                    <td width="100"></td>
                                                                                                                    <td><textarea name="bl_remark_co_2" id="bl_remark_co_2" style="width:820px;height:22px;border:0px;overflow-y:auto;" readonly=""></textarea></td>
                                                                                                                </tr>
                                                                                                             </tbody></table>
                                                                                                        
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </td>
</tr>

                                                                              
                                                                              <tr id="tr_tip_2"><td height="5"></td></tr>
                                                                              
                                                                              <tr id="trbill_3" style="display:none;">
	<td width="945" height="460" valign="top" background="image/bg_yellow.jpg">
                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="5" class="tablebill">
                                                                                        <tbody><tr>
                                                                                            <td height="34" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="90"><img src="image/3.jpg"></td>
                                                                                                        <td width="305" align="left" height="34">
                                                                                                            <input class="input_button" type="button" name="bt_sendaddress_3" value="新建发件人" onclick="input_SendAddress('3')">
                                                                                                            <input class="input_button" type="button" name="bt_sendaddress_sel_3" value="选择发件人" onclick="select_SendAddress('3');">    
                                                                                                        </td>
                                                                                                        <td width="*">
                                                                                                            <input class="input_button" type="button" name="bt_address_3" value="新建收货地址" onclick="input_Address('3');">
                                                                                                            <input class="input_button" type="button" name="bt_address_sel_3" value="选择收货地址" onclick="select_Address_Idc('3');">
                                                                                                            
                                                                                                            <input class="input_button" type="button" name="bt_idcard_sel_3" value="选择身份证" onclick="selIDC('3');">
                                                                                                            
                                                                                                            <label id="yd_idccardID_text_3" name="yd_idccardID_text_3"></label>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293"><label id="sendaddress_name_3">Chen&nbsp;Wang</label>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="285"><label id="address_name_3"></label></td>
                                                                                                        <td width="84"> </td>
                                                                                                        <td width="*"><label id="address_code_3"></label></td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293"><label id="sendaddress_tel_3">13124935854</label>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="*"><label id="address_tel_3"></label>&nbsp;<label id="address_tel2_3"></label></td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="60" class="tablebill_line" valign="top" style="word-wrap: break-word; word-break:break-all;"><label id="sendaddress_address_3">8888 LEE AVE.SOUTH EL</label></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td height="30"><label id="sendaddress_code_3">888</label></td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="*">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="30" colspan="2"><label id="address_province_3"></label>&nbsp;<label id="address_area_3"></label></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td height="60" class="tablebill_line" valign="top" style="word-wrap: break-word; word-break:break-all;"><label id="address_address_3"></label></td>
                                                                                                                    
                                                                                                                    <td width="2"></td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="38" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="7"></td>
                                                                                                        <td width="170">
                                                                                                            <select name="bl_billdel_3" id="bl_billdel_3" onchange="bl_billdel_fuc('3',this.value); ">
		<option value="0">本运单正常</option>
		<option selected="selected" value="1">本运单删除</option>
	</select>
                                                                                                            
                                                                                                            <input name="yd_sendaddressID_3" type="hidden" id="yd_sendaddressID_3">
                                                                                                            
                                                                                                            <input name="yd_addressID_3" type="hidden" id="yd_addressID_3">
                                                                                                            
                                                                                                            <input name="yd_idccardID_3" type="hidden" id="yd_idccardID_3" value="">
                                                                                                            
                                                                                                        </td>
                                                                                                        <td width="208"><font style="font-size:15px;"><span id="bl_no_3">待创建</span></font><span id="bl_state_show_3"></span>
                                                                                                        </td>
                                                                                                        <td width="100"> </td>
                                                                                                        <td width="*">
                                                                                                            <select name="bl_deliverywaysel_3" id="bl_deliverywaysel_3" onchange="deliverywaysel_fuc('3',this.value);setfeebyweight('3');willprice_fuc();">
                                                                                                                  <option value="">请选择</option>
                                                                                                                  <option value="4">ID发货新张特价</option><option value="10">非ID普通类</option><option value="11">非ID特殊类</option>
                                                                                                              </select>
                                                                                                            <input name="bl_deliveryway_3" type="hidden" id="bl_deliveryway_3"><span id="bl_koufei_show_3"></span>&nbsp; 免服务费<input name="bl_isservicefee_3" type="checkbox" id="bl_isservicefee_3" disabled="disabled"><input name="bl_servicefee_3" type="text" id="bl_servicefee_3" onkeyup="if(isNaN(value))execCommand('undo');" value="0.00" maxlength="8" class="input_none" onafterpaste="if(isNaN(value))execCommand('undo')" style="color:green;font-weight:bold;" size="4" readonly="">美元
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td height="38" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabletext">
                                                                                                    <tbody><tr>
                                                                                                        <td height="24"></td>
                                                                                                        <td></td>
                                                                                                        <td><input type="checkbox" name="bl_service_sel_3" value="0" onclick="getservice_fuc('3');"><b>取出发票</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_3" value="1" onclick="getservice_fuc('3');"><b>加固物品</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_3" value="2" onclick="getservice_fuc('3');"><b>去除广告杂志</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_3" value="3" onclick="getservice_fuc('3');"><b>丢弃鞋盒</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_3" value="4" onclick="getservice_fuc('3');"><b>加套外箱</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input name="bl_service_3" type="hidden" id="bl_service_3">
                                                                                                         </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td width="8"></td>
                                                                                                        <td width="391">
                                                                                                        
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr><td colspan="4" height="4"> </td></tr>
                                                                                                                <tr height="25">
                                                                                                                    <td width="206" align="center" valign="bottom"><input type="text" id="bl_pro_name_3_0" onkeyup="get_bl_proname_value('3');" name="bl_pro_name_3_0" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td width="38" align="center" valign="bottom"><input type="text" id="bl_pro_num_3_0" name="bl_pro_num_3_0" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('3');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="134" align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_3_0" name="bl_pro_dvalue_3_0" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('3');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                                <tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_3_1" onkeyup="get_bl_proname_value('3');" name="bl_pro_name_3_1" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_3_1" name="bl_pro_num_3_1" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('3');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_3_1" name="bl_pro_dvalue_3_1" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('3');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                                <tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_3_2" onkeyup="get_bl_proname_value('3');" name="bl_pro_name_3_2" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_3_2" name="bl_pro_num_3_2" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('3');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_3_2" name="bl_pro_dvalue_3_2" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('3');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>


																												<tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_3_3" onkeyup="get_bl_proname_value('3');" name="bl_pro_name_3_3" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_3_3" name="bl_pro_num_3_3" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('3');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_3_3" name="bl_pro_dvalue_3_3" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('3');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>


																												<tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_3_4" onkeyup="get_bl_proname_value('3');" name="bl_pro_name_3_4" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_3_4" name="bl_pro_num_3_4" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('3');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_3_4" name="bl_pro_dvalue_3_4" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('3');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                            <textarea name="bl_proname_3" id="bl_proname_3" style="width:377px;height:131px;border:0px;overflow-y:auto;display:none;"></textarea>
                                                                                                        </td>
                                                                                                        
                                                                                                        <td width="*" valign="top">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="87" valign="top">
                                                                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                            <tbody><tr><td height="8"></td></tr>
                                                                                                                            <tr height="25">
                                                                                                                                <td width="115">申报价值(美元)</td>
                                                                                                                                <td width="100">总保额(美元)</td>
                                                                                                                                <td width="100">保险费(美元)</td>
                                                                                                                                <td width="100">运单重量(磅)</td>
                                                                                                                                <td width="*">快递费(美元) </td>
                                                                                                                            </tr>
                                                                                                                            <tr height="30">
                                                                                                                                <td><input name="bl_declarevalue_3" type="text" id="bl_declarevalue_3" readonly="" class="input_none" maxlength="10" style="color:green;font-weight:bold;width:97px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_insurancesum_3" type="text" id="bl_insurancesum_3" class="input_bottom" maxlength="8" style="width:81px;" value="0.00" onkeyup="if(isNaN(value))execCommand('undo');setinsurance('3');setfeebyweight('3');willprice_fuc();" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_insurance_3" type="text" id="bl_insurance_3" readonly="" class="input_none" maxlength="8" value="0.00" style="color:green;font-weight:bold;width:81px;" onkeyup="if(isNaN(value))execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_weight_3" type="text" id="bl_weight_3" class="input_none" readonly="" maxlength="8" style="width:81px;" value="0.00" onkeyup="if(isNaN(value))execCommand('undo');setfeebyweight('3');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_fee_3" type="text" id="bl_fee_3" class="input_none" readonly="" maxlength="8" value="0.00" style="color:Red;font-weight:bold;width:81px;" onkeyup="if(isNaN(value))execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                            </tr>
                                                                                                                            
                                                                                                                            <tr height="23">
                                                                                                                                <td colspan="5">
                                                                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                                        <tbody><tr>
                                                                                                                                            <td width="85"></td>
                                                                                                                                            <td bgcolor="#daff80" width="102"></td>
                                                                                                                                            <td bgcolor="#daff80" align="right"><input name="bl_issetbox_3" type="checkbox" id="bl_issetbox_3"><font color="green">是否需要有偿打包</font></td>
                                                                                                                                            <td width="5"></td>
                                                                                                                                            <td bgcolor="#daff80">有偿打包费：<input name="bl_issetboxfee_3" type="text" id="bl_issetboxfee_3" onkeyup="if(isNaN(value))execCommand('undo');" value="0.00" maxlength="8" class="input_none" onafterpaste="if(isNaN(value))execCommand('undo')" style="color:green;font-weight:bold;" size="7" readonly="">美元</td>
                                                                                                                                            <td width="10"></td>
                                                                                                                                        </tr>
                                                                                                                                    </tbody></table>
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                        </tbody></table>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td>
                                                                                                                        <textarea name="bl_remark_3" id="bl_remark_3" style="width:524px;height:44px;border:0px;overflow-y:auto;"></textarea><input name="bl_remarkred_3" type="checkbox" id="bl_remarkred_3" style="display:none" onclick="bl_remark_fuc('3');">
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td colspan="3">
                                                                                                             <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr><td height="18"></td></tr>
                                                                                                                <tr>
                                                                                                                    <td width="100"></td>
                                                                                                                    <td><textarea name="bl_remark_co_3" id="bl_remark_co_3" style="width:820px;height:22px;border:0px;overflow-y:auto;" readonly=""></textarea></td>
                                                                                                                </tr>
                                                                                                             </tbody></table>
                                                                                                        
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </td>
</tr>

                                                                              
                                                                              <tr id="tr_tip_3"><td height="5"></td></tr>
                                                                              
                                                                              <tr id="trbill_4" style="display:none;">
	<td width="945" height="460" valign="top" background="image/bg_blue.jpg">
                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="5" class="tablebill">
                                                                                        <tbody><tr>
                                                                                            <td height="34" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="90"><img src="image/4.jpg"></td>
                                                                                                        <td width="305" align="left" height="34">
                                                                                                            <input class="input_button" type="button" name="bt_sendaddress_4" value="新建发件人" onclick="input_SendAddress('4')">
                                                                                                            <input class="input_button" type="button" name="bt_sendaddress_sel_4" value="选择发件人" onclick="select_SendAddress('4');">    
                                                                                                        </td>
                                                                                                        <td width="*">
                                                                                                            <input class="input_button" type="button" name="bt_address_4" value="新建收货地址" onclick="input_Address('4');">
                                                                                                            <input class="input_button" type="button" name="bt_address_sel_4" value="选择收货地址" onclick="select_Address_Idc('4');">
                                                                                                            <input class="input_button" type="button" name="bt_idcard_sel_4" value="选择身份证" onclick="selIDC('4');">
                                                                                                            
                                                                                                            <label id="yd_idccardID_text_4" name="yd_idccardID_text_4"></label>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293"><label id="sendaddress_name_4">Chen&nbsp;Wang</label>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="285"><label id="address_name_4"></label></td>
                                                                                                        <td width="84"> </td>
                                                                                                        <td width="*"><label id="address_code_4"></label></td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293"><label id="sendaddress_tel_4">13124935854</label>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="*"><label id="address_tel_4"></label>&nbsp;<label id="address_tel2_4"></label></td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="60" class="tablebill_line" valign="top" style="word-wrap: break-word; word-break:break-all;"><label id="sendaddress_address_4">8888 LEE AVE.SOUTH EL</label></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td height="30"><label id="sendaddress_code_4">888</label></td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="*">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="30" colspan="2"><label id="address_province_4"></label>&nbsp;<label id="address_area_4"></label></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td height="60" class="tablebill_line" valign="top" style="word-wrap: break-word; word-break:break-all;"><label id="address_address_4"></label></td>
                                                                                                                    
                                                                                                                    <td width="2"></td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="38" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="7"></td>
                                                                                                        <td width="170">
                                                                                                            <select name="bl_billdel_4" id="bl_billdel_4" onchange="bl_billdel_fuc('4',this.value); ">
		<option value="0">本运单正常</option>
		<option selected="selected" value="1">本运单删除</option>
	</select>
                                                                                                            
                                                                                                            <input name="yd_sendaddressID_4" type="hidden" id="yd_sendaddressID_4">
                                                                                                            
                                                                                                            <input name="yd_addressID_4" type="hidden" id="yd_addressID_4">
                                                                                                            
                                                                                                            <input name="yd_idccardID_4" type="hidden" id="yd_idccardID_4" value="">
                                                                                                            
                                                                                                        </td>
                                                                                                        <td width="208"><font style="font-size:15px;"><span id="bl_no_4">待创建</span></font><span id="bl_state_show_4"></span>
                                                                                                        </td>
                                                                                                        <td width="100"> </td>
                                                                                                        <td width="*">
                                                                                                            <select name="bl_deliverywaysel_4" id="bl_deliverywaysel_4" onchange="deliverywaysel_fuc('4',this.value);setfeebyweight('4');willprice_fuc();">
                                                                                                                  <option value="">请选择</option>
                                                                                                                  <option value="4">ID发货新张特价</option><option value="10">非ID普通类</option><option value="11">非ID特殊类</option>
                                                                                                              </select>
                                                                                                            <input name="bl_deliveryway_4" type="hidden" id="bl_deliveryway_4"><span id="bl_koufei_show_4"></span>&nbsp; 免服务费<input name="bl_isservicefee_4" type="checkbox" id="bl_isservicefee_4" disabled="disabled"><input name="bl_servicefee_4" type="text" id="bl_servicefee_4" onkeyup="if(isNaN(value))execCommand('undo');" value="0.00" maxlength="8" class="input_none" onafterpaste="if(isNaN(value))execCommand('undo')" style="color:green;font-weight:bold;" size="4" readonly="">美元
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td height="38" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabletext">
                                                                                                    <tbody><tr>
                                                                                                        <td height="24"></td>
                                                                                                        <td></td>
                                                                                                        <td><input type="checkbox" name="bl_service_sel_4" value="0" onclick="getservice_fuc('4');"><b>取出发票</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_4" value="1" onclick="getservice_fuc('4');"><b>加固物品</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_4" value="2" onclick="getservice_fuc('4');"><b>去除广告杂志</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_4" value="3" onclick="getservice_fuc('4');"><b>丢弃鞋盒</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_4" value="4" onclick="getservice_fuc('4');"><b>加套外箱</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input name="bl_service_4" type="hidden" id="bl_service_4">
                                                                                                         </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td width="8"></td>
                                                                                                        <td width="391">
                                                                                                            
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr><td colspan="4" height="4"> </td></tr>
                                                                                                                <tr height="25">
                                                                                                                    <td width="206" align="center" valign="bottom"><input type="text" id="bl_pro_name_4_0" onkeyup="get_bl_proname_value('4');" name="bl_pro_name_4_0" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td width="38" align="center" valign="bottom"><input type="text" id="bl_pro_num_4_0" name="bl_pro_num_4_0" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('4');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="134" align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_4_0" name="bl_pro_dvalue_4_0" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('4');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                                <tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_4_1" onkeyup="get_bl_proname_value('4');" name="bl_pro_name_4_1" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_4_1" name="bl_pro_num_4_1" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('4');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_4_1" name="bl_pro_dvalue_4_1" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('4');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                                <tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_4_2" onkeyup="get_bl_proname_value('4');" name="bl_pro_name_4_2" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_4_2" name="bl_pro_num_4_2" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('4');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_4_2" name="bl_pro_dvalue_4_2" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('4');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>


																												<tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_4_3" onkeyup="get_bl_proname_value('4');" name="bl_pro_name_4_3" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_4_3" name="bl_pro_num_4_3" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('4');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_4_3" name="bl_pro_dvalue_4_3" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('4');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>


																												<tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_4_4" onkeyup="get_bl_proname_value('4');" name="bl_pro_name_4_4" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_4_4" name="bl_pro_num_4_4" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('4');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_4_4" name="bl_pro_dvalue_4_4" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('4');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                            <textarea name="bl_proname_4" id="bl_proname_4" style="width:377px;height:131px;border:0px;overflow-y:auto;display:none;"></textarea>
                                                                                                        </td>
                                                                                                        
                                                                                                        <td width="*" valign="top">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="87" valign="top">
                                                                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                            <tbody><tr><td height="8"></td></tr>
                                                                                                                            <tr height="25">
                                                                                                                                <td width="115">申报价值(美元)</td>
                                                                                                                                <td width="100">总保额(美元)</td>
                                                                                                                                <td width="100">保险费(美元)</td>
                                                                                                                                <td width="100">运单重量(磅)</td>
                                                                                                                                <td width="*">快递费(美元) </td>
                                                                                                                            </tr>
                                                                                                                            <tr height="30">
                                                                                                                                <td><input name="bl_declarevalue_4" type="text" id="bl_declarevalue_4" readonly="" class="input_none" maxlength="10" style="color:green;font-weight:bold;width:97px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_insurancesum_4" type="text" id="bl_insurancesum_4" class="input_bottom" maxlength="8" style="width:81px;" value="0.00" onkeyup="if(isNaN(value))execCommand('undo');setinsurance('4');setfeebyweight('4');willprice_fuc();" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_insurance_4" type="text" id="bl_insurance_4" readonly="" class="input_none" maxlength="8" value="0.00" style="color:green;font-weight:bold;width:81px;" onkeyup="if(isNaN(value))execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_weight_4" type="text" id="bl_weight_4" class="input_none" readonly="" maxlength="8" style="width:81px;" value="0.00" onkeyup="if(isNaN(value))execCommand('undo');setfeebyweight('4');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_fee_4" type="text" id="bl_fee_4" class="input_none" readonly="" maxlength="8" value="0.00" style="color:Red;font-weight:bold;width:81px;" onkeyup="if(isNaN(value))execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                            </tr>
                                                                                                                            
                                                                                                                            <tr height="23">
                                                                                                                                <td colspan="5">
                                                                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                                        <tbody><tr>
                                                                                                                                            <td width="85"></td>
                                                                                                                                            <td bgcolor="#daff80" width="102"></td>
                                                                                                                                            <td bgcolor="#daff80" align="right"><input name="bl_issetbox_4" type="checkbox" id="bl_issetbox_4"><font color="green">是否需要有偿打包</font></td>
                                                                                                                                            <td width="5"></td>
                                                                                                                                            <td bgcolor="#daff80">有偿打包费：<input name="bl_issetboxfee_4" type="text" id="bl_issetboxfee_4" onkeyup="if(isNaN(value))execCommand('undo');" value="0.00" maxlength="8" class="input_none" onafterpaste="if(isNaN(value))execCommand('undo')" style="color:green;font-weight:bold;" size="7" readonly="">美元</td>
                                                                                                                                            <td width="10"></td>
                                                                                                                                        </tr>
                                                                                                                                    </tbody></table>
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                        </tbody></table>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td>
                                                                                                                        <textarea name="bl_remark_4" id="bl_remark_4" style="width:524px;height:44px;border:0px;overflow-y:auto;"></textarea><input name="bl_remarkred_4" type="checkbox" id="bl_remarkred_4" style="display:none" onclick="bl_remark_fuc('4');">
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td colspan="3">
                                                                                                             <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr><td height="18"></td></tr>
                                                                                                                <tr>
                                                                                                                    <td width="100"></td>
                                                                                                                    <td><textarea name="bl_remark_co_4" id="bl_remark_co_4" style="width:820px;height:22px;border:0px;overflow-y:auto;" readonly=""></textarea></td>
                                                                                                                </tr>
                                                                                                             </tbody></table>
                                                                                                        
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </td>
</tr>

                                                                              
                                                                              <tr id="tr_tip_4"><td height="5"></td></tr>
                                                                              
                                                                              <tr id="trbill_5" style="display:none;">
	<td width="945" height="460" valign="top" background="image/bg_yellow.jpg">
                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="5" class="tablebill">
                                                                                        <tbody><tr>
                                                                                            <td height="34" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="90"><img src="image/5.jpg"></td>
                                                                                                        <td width="305" align="left" height="34">
                                                                                                            <input class="input_button" type="button" name="bt_sendaddress_5" value="新建发件人" onclick="input_SendAddress('5')">
                                                                                                            <input class="input_button" type="button" name="bt_sendaddress_sel_5" value="选择发件人" onclick="select_SendAddress('5');">    
                                                                                                        </td>
                                                                                                        <td width="*">
                                                                                                            <input class="input_button" type="button" name="bt_address_5" value="新建收货地址" onclick="input_Address('5');">
                                                                                                            <input class="input_button" type="button" name="bt_address_sel_5" value="选择收货地址" onclick="select_Address_Idc('5');">
                                                                                                            
                                                                                                            <input class="input_button" type="button" name="bt_idcard_sel_5" value="选择身份证" onclick="selIDC('5');">
                                                                                                            
                                                                                                            <label id="yd_idccardID_text_5" name="yd_idccardID_text_5"></label> 
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293"><label id="sendaddress_name_5">Chen&nbsp;Wang</label>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="285"><label id="address_name_5"></label></td>
                                                                                                        <td width="84"> </td>
                                                                                                        <td width="*"><label id="address_code_5"></label></td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293"><label id="sendaddress_tel_5">13124935854</label>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="*"><label id="address_tel_5"></label>&nbsp;<label id="address_tel2_5"></label></td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="60" class="tablebill_line" valign="top" style="word-wrap: break-word; word-break:break-all;"><label id="sendaddress_address_5">8888 LEE AVE.SOUTH EL</label></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td height="30"><label id="sendaddress_code_5">888</label></td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="*">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="30" colspan="2"><label id="address_province_5"></label>&nbsp;<label id="address_area_5"></label></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td height="60" class="tablebill_line" valign="top" style="word-wrap: break-word; word-break:break-all;"><label id="address_address_5"></label></td>
                                                                                                                    
                                                                                                                    <td width="2"></td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="38" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="7"></td>
                                                                                                        <td width="170">
                                                                                                            <select name="bl_billdel_5" id="bl_billdel_5" onchange="bl_billdel_fuc('5',this.value); ">
		<option value="0">本运单正常</option>
		<option selected="selected" value="1">本运单删除</option>
	</select>
                                                                                                            
                                                                                                            <input name="yd_sendaddressID_5" type="hidden" id="yd_sendaddressID_5">
                                                                                                            
                                                                                                            <input name="yd_addressID_5" type="hidden" id="yd_addressID_5">
                                                                                                            
                                                                                                            <input name="yd_idccardID_5" type="hidden" id="yd_idccardID_5" value="">
                                                                                                            
                                                                                                        </td>
                                                                                                        <td width="208"><font style="font-size:15px;"><span id="bl_no_5">待创建</span></font><span id="bl_state_show_5"></span>
                                                                                                        </td>
                                                                                                        <td width="100"> </td>
                                                                                                        <td width="*">
                                                                                                            <select name="bl_deliverywaysel_5" id="bl_deliverywaysel_5" onchange="deliverywaysel_fuc('5',this.value);setfeebyweight('5');willprice_fuc();">
                                                                                                                  <option value="">请选择</option>
                                                                                                                  <option value="4">ID发货新张特价</option><option value="10">非ID普通类</option><option value="11">非ID特殊类</option>
                                                                                                              </select>
                                                                                                            <input name="bl_deliveryway_5" type="hidden" id="bl_deliveryway_5"><span id="bl_koufei_show_5"></span>&nbsp; 免服务费<input name="bl_isservicefee_5" type="checkbox" id="bl_isservicefee_5" disabled="disabled"><input name="bl_servicefee_5" type="text" id="bl_servicefee_5" onkeyup="if(isNaN(value))execCommand('undo');" value="0.00" maxlength="8" class="input_none" onafterpaste="if(isNaN(value))execCommand('undo')" style="color:green;font-weight:bold;" size="4" readonly="">美元
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td height="38" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabletext">
                                                                                                    <tbody><tr>
                                                                                                        <td height="24"></td>
                                                                                                        <td></td>
                                                                                                        <td><input type="checkbox" name="bl_service_sel_5" value="0" onclick="getservice_fuc('5');"><b>取出发票</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_5" value="1" onclick="getservice_fuc('5');"><b>加固物品</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_5" value="2" onclick="getservice_fuc('5');"><b>去除广告杂志</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_5" value="3" onclick="getservice_fuc('5');"><b>丢弃鞋盒</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_5" value="4" onclick="getservice_fuc('5');"><b>加套外箱</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input name="bl_service_5" type="hidden" id="bl_service_5">
                                                                                                         </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td width="8"></td>
                                                                                                        <td width="391">
                                                                                                            
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr><td colspan="4" height="4"> </td></tr>
                                                                                                                <tr height="25">
                                                                                                                    <td width="206" align="center" valign="bottom"><input type="text" id="bl_pro_name_5_0" onkeyup="get_bl_proname_value('5');" name="bl_pro_name_5_0" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td width="38" align="center" valign="bottom"><input type="text" id="bl_pro_num_5_0" name="bl_pro_num_5_0" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('5');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="134" align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_5_0" name="bl_pro_dvalue_5_0" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('5');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                                <tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_5_1" onkeyup="get_bl_proname_value('5');" name="bl_pro_name_5_1" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_5_1" name="bl_pro_num_5_1" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('5');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_5_1" name="bl_pro_dvalue_5_1" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('5');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                                <tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_5_2" onkeyup="get_bl_proname_value('5');" name="bl_pro_name_5_2" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_5_2" name="bl_pro_num_5_2" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('5');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_5_2" name="bl_pro_dvalue_5_2" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('5');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>


																												<tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_5_3" onkeyup="get_bl_proname_value('5');" name="bl_pro_name_5_3" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_5_3" name="bl_pro_num_5_3" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('5');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_5_3" name="bl_pro_dvalue_5_3" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('5');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>


																												<tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_5_4" onkeyup="get_bl_proname_value('5');" name="bl_pro_name_5_4" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_5_4" name="bl_pro_num_5_4" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('5');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_5_4" name="bl_pro_dvalue_5_4" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('5');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                            <textarea name="bl_proname_5" id="bl_proname_5" style="width:377px;height:131px;border:0px;overflow-y:auto;display:none;"></textarea>
                                                                                                        </td>
                                                                                                        
                                                                                                        <td width="*" valign="top">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="87" valign="top">
                                                                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                            <tbody><tr><td height="8"></td></tr>
                                                                                                                            <tr height="25">
                                                                                                                                <td width="115">申报价值(美元)</td>
                                                                                                                                <td width="100">总保额(美元)</td>
                                                                                                                                <td width="100">保险费(美元)</td>
                                                                                                                                <td width="100">运单重量(磅)</td>
                                                                                                                                <td width="*">快递费(美元) </td>
                                                                                                                            </tr>
                                                                                                                            <tr height="30">
                                                                                                                                <td><input name="bl_declarevalue_5" type="text" id="bl_declarevalue_5" readonly="" class="input_none" maxlength="10" style="color:green;font-weight:bold;width:97px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_insurancesum_5" type="text" id="bl_insurancesum_5" class="input_bottom" maxlength="8" style="width:81px;" value="0.00" onkeyup="if(isNaN(value))execCommand('undo');setinsurance('5');setfeebyweight('5');willprice_fuc();" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_insurance_5" type="text" id="bl_insurance_5" readonly="" class="input_none" maxlength="8" value="0.00" style="color:green;font-weight:bold;width:81px;" onkeyup="if(isNaN(value))execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_weight_5" type="text" id="bl_weight_5" class="input_none" readonly="" maxlength="8" style="width:81px;" value="0.00" onkeyup="if(isNaN(value))execCommand('undo');setfeebyweight('5');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_fee_5" type="text" id="bl_fee_5" class="input_none" readonly="" maxlength="8" value="0.00" style="color:Red;font-weight:bold;width:81px;" onkeyup="if(isNaN(value))execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                            </tr>
                                                                                                                            
                                                                                                                            <tr height="23">
                                                                                                                                <td colspan="5">
                                                                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                                        <tbody><tr>
                                                                                                                                            <td width="85"></td>
                                                                                                                                            <td bgcolor="#daff80" width="102"></td>
                                                                                                                                            <td bgcolor="#daff80" align="right"><input name="bl_issetbox_5" type="checkbox" id="bl_issetbox_5"><font color="green">是否需要有偿打包</font></td>
                                                                                                                                            <td width="5"></td>
                                                                                                                                            <td bgcolor="#daff80">有偿打包费：<input name="bl_issetboxfee_5" type="text" id="bl_issetboxfee_5" onkeyup="if(isNaN(value))execCommand('undo');" value="0.00" maxlength="8" class="input_none" onafterpaste="if(isNaN(value))execCommand('undo')" style="color:green;font-weight:bold;" size="7" readonly="">美元</td>
                                                                                                                                            <td width="10"></td>
                                                                                                                                        </tr>
                                                                                                                                    </tbody></table>
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                        </tbody></table>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td>
                                                                                                                        <textarea name="bl_remark_5" id="bl_remark_5" style="width:524px;height:44px;border:0px;overflow-y:auto;"></textarea><input name="bl_remarkred_5" type="checkbox" id="bl_remarkred_5" style="display:none" onclick="bl_remark_fuc('5');">
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td colspan="3">
                                                                                                             <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr><td height="18"></td></tr>
                                                                                                                <tr>
                                                                                                                    <td width="100"></td>
                                                                                                                    <td><textarea name="bl_remark_co_5" id="bl_remark_co_5" style="width:820px;height:22px;border:0px;overflow-y:auto;" readonly=""></textarea></td>
                                                                                                                </tr>
                                                                                                             </tbody></table>
                                                                                                        
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </td>
</tr>

                                                                              
                                                                              <tr id="tr_tip_5"><td height="5"></td></tr>
                                                                              
                                                                              <tr id="trbill_6" style="display:none;">
	<td width="945" height="460" valign="top" background="image/bg_blue.jpg">
                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="5" class="tablebill">
                                                                                        <tbody><tr>
                                                                                            <td height="34" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="90"><img src="image/6.jpg"></td>
                                                                                                        <td width="305" align="left" height="34">
                                                                                                            <input class="input_button" type="button" name="bt_sendaddress_6" value="新建发件人" onclick="input_SendAddress('6')">
                                                                                                            <input class="input_button" type="button" name="bt_sendaddress_sel_6" value="选择发件人" onclick="select_SendAddress('6');">    
                                                                                                        </td>
                                                                                                        <td width="*">
                                                                                                            <input class="input_button" type="button" name="bt_address_6" value="新建收货地址" onclick="input_Address('6');">
                                                                                                            <input class="input_button" type="button" name="bt_address_sel_6" value="选择收货地址" onclick="select_Address_Idc('6');">
                                                                                                            <input class="input_button" type="button" name="bt_idcard_sel_6" value="选择身份证" onclick="selIDC('6');">
                                                                                                            
                                                                                                            <label id="yd_idccardID_text_6" name="yd_idccardID_text_6"></label>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293"><label id="sendaddress_name_6">Chen&nbsp;Wang</label>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="285"><label id="address_name_6"></label></td>
                                                                                                        <td width="84"> </td>
                                                                                                        <td width="*"><label id="address_code_6"></label></td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293"><label id="sendaddress_tel_6">13124935854</label>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="*"><label id="address_tel_6"></label>&nbsp;<label id="address_tel2_6"></label></td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="60" class="tablebill_line" valign="top" style="word-wrap: break-word; word-break:break-all;"><label id="sendaddress_address_6">8888 LEE AVE.SOUTH EL</label></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td height="30"><label id="sendaddress_code_6">888</label></td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="*">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="30" colspan="2"><label id="address_province_6"></label>&nbsp;<label id="address_area_6"></label></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td height="60" class="tablebill_line" valign="top" style="word-wrap: break-word; word-break:break-all;"><label id="address_address_6"></label></td>
                                                                                                                    
                                                                                                                    <td width="2"></td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="38" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="7"></td>
                                                                                                        <td width="170">
                                                                                                            <select name="bl_billdel_6" id="bl_billdel_6" onchange="bl_billdel_fuc('6',this.value); ">
		<option value="0">本运单正常</option>
		<option selected="selected" value="1">本运单删除</option>
	</select>
                                                                                                            
                                                                                                            <input name="yd_sendaddressID_6" type="hidden" id="yd_sendaddressID_6">
                                                                                                            
                                                                                                            <input name="yd_addressID_6" type="hidden" id="yd_addressID_6">
                                                                                                            
                                                                                                            <input name="yd_idccardID_6" type="hidden" id="yd_idccardID_6" value="">
                                                                                                            
                                                                                                        </td>
                                                                                                        <td width="208"><font style="font-size:15px;"><span id="bl_no_6">待创建</span></font><span id="bl_state_show_6"></span>
                                                                                                        </td>
                                                                                                        <td width="100"> </td>
                                                                                                        <td width="*">
                                                                                                            <select name="bl_deliverywaysel_6" id="bl_deliverywaysel_6" onchange="deliverywaysel_fuc('6',this.value);setfeebyweight('6');willprice_fuc();">
                                                                                                                  <option value="">请选择</option>
                                                                                                                  <option value="4">ID发货新张特价</option><option value="10">非ID普通类</option><option value="11">非ID特殊类</option>
                                                                                                              </select>
                                                                                                            <input name="bl_deliveryway_6" type="hidden" id="bl_deliveryway_6"><span id="bl_koufei_show_6"></span>&nbsp; 免服务费<input name="bl_isservicefee_6" type="checkbox" id="bl_isservicefee_6" disabled="disabled"><input name="bl_servicefee_6" type="text" id="bl_servicefee_6" onkeyup="if(isNaN(value))execCommand('undo');" value="0.00" maxlength="8" class="input_none" onafterpaste="if(isNaN(value))execCommand('undo')" style="color:green;font-weight:bold;" size="4" readonly="">美元
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td height="38" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabletext">
                                                                                                    <tbody><tr>
                                                                                                        <td height="24"></td>
                                                                                                        <td></td>
                                                                                                        <td><input type="checkbox" name="bl_service_sel_6" value="0" onclick="getservice_fuc('6');"><b>取出发票</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_6" value="1" onclick="getservice_fuc('6');"><b>加固物品</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_6" value="2" onclick="getservice_fuc('6');"><b>去除广告杂志</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_6" value="3" onclick="getservice_fuc('6');"><b>丢弃鞋盒</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_6" value="4" onclick="getservice_fuc('6');"><b>加套外箱</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input name="bl_service_6" type="hidden" id="bl_service_6">
                                                                                                         </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td width="8"></td>
                                                                                                        <td width="391">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr><td colspan="4" height="4"> </td></tr>
                                                                                                                <tr height="25">
                                                                                                                    <td width="206" align="center" valign="bottom"><input type="text" id="bl_pro_name_6_0" onkeyup="get_bl_proname_value('6');" name="bl_pro_name_6_0" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td width="38" align="center" valign="bottom"><input type="text" id="bl_pro_num_6_0" name="bl_pro_num_6_0" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('6');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="134" align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_6_0" name="bl_pro_dvalue_6_0" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('6');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                                <tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_6_1" onkeyup="get_bl_proname_value('6');" name="bl_pro_name_6_1" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_6_1" name="bl_pro_num_6_1" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('6');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_6_1" name="bl_pro_dvalue_6_1" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('6');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                                <tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_6_2" onkeyup="get_bl_proname_value('6');" name="bl_pro_name_6_2" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_6_2" name="bl_pro_num_6_2" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('6');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_6_2" name="bl_pro_dvalue_6_2" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('6');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>


																												<tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_6_3" onkeyup="get_bl_proname_value('6');" name="bl_pro_name_6_3" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_6_3" name="bl_pro_num_6_3" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('6');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_6_3" name="bl_pro_dvalue_6_3" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('6');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>


																												<tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_6_4" onkeyup="get_bl_proname_value('6');" name="bl_pro_name_6_4" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_6_4" name="bl_pro_num_6_4" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('6');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_6_4" name="bl_pro_dvalue_6_4" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('6');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                            <textarea name="bl_proname_6" id="bl_proname_6" style="width:377px;height:131px;border:0px;overflow-y:auto;display:none;"></textarea>
                                                                                                        </td>
                                                                                                        
                                                                                                        <td width="*" valign="top">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="87" valign="top">
                                                                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                            <tbody><tr><td height="8"></td></tr>
                                                                                                                            <tr height="25">
                                                                                                                                <td width="115">申报价值(美元)</td>
                                                                                                                                <td width="100">总保额(美元)</td>
                                                                                                                                <td width="100">保险费(美元)</td>
                                                                                                                                <td width="100">运单重量(磅)</td>
                                                                                                                                <td width="*">快递费(美元) </td>
                                                                                                                            </tr>
                                                                                                                            <tr height="30">
                                                                                                                                <td><input name="bl_declarevalue_6" type="text" id="bl_declarevalue_6" readonly="" class="input_none" maxlength="10" style="color:green;font-weight:bold;width:97px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_insurancesum_6" type="text" id="bl_insurancesum_6" class="input_bottom" maxlength="8" style="width:81px;" value="0.00" onkeyup="if(isNaN(value))execCommand('undo');setinsurance('6');setfeebyweight('6');willprice_fuc();" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_insurance_6" type="text" id="bl_insurance_6" readonly="" class="input_none" maxlength="8" value="0.00" style="color:green;font-weight:bold;width:81px;" onkeyup="if(isNaN(value))execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_weight_6" type="text" id="bl_weight_6" class="input_none" readonly="" maxlength="8" style="width:81px;" value="0.00" onkeyup="if(isNaN(value))execCommand('undo');setfeebyweight('6');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_fee_6" type="text" id="bl_fee_6" class="input_none" readonly="" maxlength="8" value="0.00" style="color:Red;font-weight:bold;width:81px;" onkeyup="if(isNaN(value))execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                            </tr>
                                                                                                                            
                                                                                                                            <tr height="23">
                                                                                                                                <td colspan="5">
                                                                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                                        <tbody><tr>
                                                                                                                                            <td width="85"></td>
                                                                                                                                            <td bgcolor="#daff80" width="102"></td>
                                                                                                                                            <td bgcolor="#daff80" align="right"><input name="bl_issetbox_6" type="checkbox" id="bl_issetbox_6"><font color="green">是否需要有偿打包</font></td>
                                                                                                                                            <td width="5"></td>
                                                                                                                                            <td bgcolor="#daff80">有偿打包费：<input name="bl_issetboxfee_6" type="text" id="bl_issetboxfee_6" onkeyup="if(isNaN(value))execCommand('undo');" value="0.00" maxlength="8" class="input_none" onafterpaste="if(isNaN(value))execCommand('undo')" style="color:green;font-weight:bold;" size="7" readonly="">美元</td>
                                                                                                                                            <td width="10"></td>
                                                                                                                                        </tr>
                                                                                                                                    </tbody></table>
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                        </tbody></table>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td>
                                                                                                                        <textarea name="bl_remark_6" id="bl_remark_6" style="width:524px;height:44px;border:0px;overflow-y:auto;"></textarea><input name="bl_remarkred_6" type="checkbox" id="bl_remarkred_6" style="display:none" onclick="bl_remark_fuc('6');">
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td colspan="3">
                                                                                                             <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr><td height="18"></td></tr>
                                                                                                                <tr>
                                                                                                                    <td width="100"></td>
                                                                                                                    <td><textarea name="bl_remark_co_6" id="bl_remark_co_6" style="width:820px;height:22px;border:0px;overflow-y:auto;" readonly=""></textarea></td>
                                                                                                                </tr>
                                                                                                             </tbody></table>
                                                                                                        
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </td>
</tr>

                                                                              
                                                                              <tr id="tr_tip_6"><td height="5"></td></tr>
                                                                              
                                                                              <tr id="trbill_7" style="display:none;">
	<td width="945" height="460" valign="top" background="image/bg_yellow.jpg">
                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="5" class="tablebill">
                                                                                        <tbody><tr>
                                                                                            <td height="34" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="90"><img src="image/7.jpg"></td>
                                                                                                        <td width="305" align="left" height="34">
                                                                                                            <input class="input_button" type="button" name="bt_sendaddress_7" value="新建发件人" onclick="input_SendAddress('7')">
                                                                                                            <input class="input_button" type="button" name="bt_sendaddress_sel_7" value="选择发件人" onclick="select_SendAddress('7');">    
                                                                                                        </td>
                                                                                                        <td width="*">
                                                                                                            <input class="input_button" type="button" name="bt_address_7" value="新建收货地址" onclick="input_Address('7');">
                                                                                                            <input class="input_button" type="button" name="bt_address_sel_7" value="选择收货地址" onclick="select_Address_Idc('7');">
                                                                                                            <input class="input_button" type="button" name="bt_idcard_sel_7" value="选择身份证" onclick="selIDC('7');">
                                                                                                            
                                                                                                            <label id="yd_idccardID_text_7" name="yd_idccardID_text_7"></label>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293"><label id="sendaddress_name_7">Chen&nbsp;Wang</label>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="285"><label id="address_name_7"></label></td>
                                                                                                        <td width="84"> </td>
                                                                                                        <td width="*"><label id="address_code_7"></label></td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293"><label id="sendaddress_tel_7">13124935854</label>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="*"><label id="address_tel_7"></label>&nbsp;<label id="address_tel2_7"></label></td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="60" class="tablebill_line" valign="top" style="word-wrap: break-word; word-break:break-all;"><label id="sendaddress_address_7">8888 LEE AVE.SOUTH EL</label></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td height="30"><label id="sendaddress_code_7">888</label></td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="*">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="30" colspan="2"><label id="address_province_7"></label>&nbsp;<label id="address_area_7"></label></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td height="60" class="tablebill_line" valign="top" style="word-wrap: break-word; word-break:break-all;"><label id="address_address_7"></label></td>
                                                                                                                    
                                                                                                                    <td width="2"></td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="38" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="7"></td>
                                                                                                        <td width="170">
                                                                                                            <select name="bl_billdel_7" id="bl_billdel_7" onchange="bl_billdel_fuc('7',this.value); ">
		<option value="0">本运单正常</option>
		<option selected="selected" value="1">本运单删除</option>
	</select>
                                                                                                            
                                                                                                            <input name="yd_sendaddressID_7" type="hidden" id="yd_sendaddressID_7">
                                                                                                            
                                                                                                            <input name="yd_addressID_7" type="hidden" id="yd_addressID_7">
                                                                                                            
                                                                                                            <input name="yd_idccardID_7" type="hidden" id="yd_idccardID_7" value="">
                                                                                                            
                                                                                                        </td>
                                                                                                        <td width="208"><font style="font-size:15px;"><span id="bl_no_7">待创建</span></font><span id="bl_state_show_7"></span>
                                                                                                        </td>
                                                                                                        <td width="100"> </td>
                                                                                                        <td width="*">
                                                                                                            <select name="bl_deliverywaysel_7" id="bl_deliverywaysel_7" onchange="deliverywaysel_fuc('7',this.value);setfeebyweight('7');willprice_fuc();">
                                                                                                                  <option value="">请选择</option>
                                                                                                                  <option value="4">ID发货新张特价</option><option value="10">非ID普通类</option><option value="11">非ID特殊类</option>
                                                                                                              </select>
                                                                                                            <input name="bl_deliveryway_7" type="hidden" id="bl_deliveryway_7"><span id="bl_koufei_show_7"></span>&nbsp; 免服务费<input name="bl_isservicefee_7" type="checkbox" id="bl_isservicefee_7" disabled="disabled"><input name="bl_servicefee_7" type="text" id="bl_servicefee_7" onkeyup="if(isNaN(value))execCommand('undo');" value="0.00" maxlength="8" class="input_none" onafterpaste="if(isNaN(value))execCommand('undo')" style="color:green;font-weight:bold;" size="4" readonly="">美元
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td height="38" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabletext">
                                                                                                    <tbody><tr>
                                                                                                        <td height="24"></td>
                                                                                                        <td></td>
                                                                                                        <td><input type="checkbox" name="bl_service_sel_7" value="0" onclick="getservice_fuc('7');"><b>取出发票</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_7" value="1" onclick="getservice_fuc('7');"><b>加固物品</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_7" value="2" onclick="getservice_fuc('7');"><b>去除广告杂志</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_7" value="3" onclick="getservice_fuc('7');"><b>丢弃鞋盒</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_7" value="4" onclick="getservice_fuc('7');"><b>加套外箱</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input name="bl_service_7" type="hidden" id="bl_service_7">
                                                                                                         </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td width="8"></td>
                                                                                                        <td width="391">
                                                                                                            
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr><td colspan="4" height="4"> </td></tr>
                                                                                                                <tr height="25">
                                                                                                                    <td width="206" align="center" valign="bottom"><input type="text" id="bl_pro_name_7_0" onkeyup="get_bl_proname_value('7');" name="bl_pro_name_7_0" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td width="38" align="center" valign="bottom"><input type="text" id="bl_pro_num_7_0" name="bl_pro_num_7_0" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('7');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="134" align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_7_0" name="bl_pro_dvalue_7_0" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('7');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                                <tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_7_1" onkeyup="get_bl_proname_value('7');" name="bl_pro_name_7_1" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_7_1" name="bl_pro_num_7_1" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('7');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_7_1" name="bl_pro_dvalue_7_1" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('7');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                                <tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_7_2" onkeyup="get_bl_proname_value('7');" name="bl_pro_name_7_2" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_7_2" name="bl_pro_num_7_2" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('7');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_7_2" name="bl_pro_dvalue_7_2" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('7');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>


																												<tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_7_3" onkeyup="get_bl_proname_value('7');" name="bl_pro_name_7_3" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_7_3" name="bl_pro_num_7_3" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('7');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_7_3" name="bl_pro_dvalue_7_3" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('7');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>


																												<tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_7_4" onkeyup="get_bl_proname_value('7');" name="bl_pro_name_7_4" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_7_4" name="bl_pro_num_7_4" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('7');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_7_4" name="bl_pro_dvalue_7_4" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('7');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                            <textarea name="bl_proname_7" id="bl_proname_7" style="width:377px;height:131px;border:0px;overflow-y:auto;display:none;"></textarea>
                                                                                                        </td>
                                                                                                        
                                                                                                        <td width="*" valign="top">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="87" valign="top">
                                                                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                            <tbody><tr><td height="8"></td></tr>
                                                                                                                            <tr height="25">
                                                                                                                                <td width="115">申报价值(美元)</td>
                                                                                                                                <td width="100">总保额(美元)</td>
                                                                                                                                <td width="100">保险费(美元)</td>
                                                                                                                                <td width="100">运单重量(磅)</td>
                                                                                                                                <td width="*">快递费(美元) </td>
                                                                                                                            </tr>
                                                                                                                            <tr height="30">
                                                                                                                                <td><input name="bl_declarevalue_7" type="text" id="bl_declarevalue_7" readonly="" class="input_none" maxlength="10" style="color:green;font-weight:bold;width:97px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_insurancesum_7" type="text" id="bl_insurancesum_7" class="input_bottom" maxlength="8" style="width:81px;" value="0.00" onkeyup="if(isNaN(value))execCommand('undo');setinsurance('7');setfeebyweight('7');willprice_fuc();" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_insurance_7" type="text" id="bl_insurance_7" readonly="" class="input_none" maxlength="8" value="0.00" style="color:green;font-weight:bold;width:81px;" onkeyup="if(isNaN(value))execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_weight_7" type="text" id="bl_weight_7" class="input_none" readonly="" maxlength="8" style="width:81px;" value="0.00" onkeyup="if(isNaN(value))execCommand('undo');setfeebyweight('7');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_fee_7" type="text" id="bl_fee_7" class="input_none" readonly="" maxlength="8" value="0.00" style="color:Red;font-weight:bold;width:81px;" onkeyup="if(isNaN(value))execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                            </tr>
                                                                                                                            
                                                                                                                            <tr height="23">
                                                                                                                                <td colspan="5">
                                                                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                                        <tbody><tr>
                                                                                                                                            <td width="85"></td>
                                                                                                                                            <td bgcolor="#daff80" width="102"></td>
                                                                                                                                            <td bgcolor="#daff80" align="right"><input name="bl_issetbox_7" type="checkbox" id="bl_issetbox_7"><font color="green">是否需要有偿打包</font></td>
                                                                                                                                            <td width="5"></td>
                                                                                                                                            <td bgcolor="#daff80">有偿打包费：<input name="bl_issetboxfee_7" type="text" id="bl_issetboxfee_7" onkeyup="if(isNaN(value))execCommand('undo');" value="0.00" maxlength="8" class="input_none" onafterpaste="if(isNaN(value))execCommand('undo')" style="color:green;font-weight:bold;" size="7" readonly="">美元</td>
                                                                                                                                            <td width="10"></td>
                                                                                                                                        </tr>
                                                                                                                                    </tbody></table>
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                        </tbody></table>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td>
                                                                                                                        <textarea name="bl_remark_7" id="bl_remark_7" style="width:524px;height:44px;border:0px;overflow-y:auto;"></textarea><input name="bl_remarkred_7" type="checkbox" id="bl_remarkred_7" style="display:none" onclick="bl_remark_fuc('7');">
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td colspan="3">
                                                                                                             <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr><td height="18"></td></tr>
                                                                                                                <tr>
                                                                                                                    <td width="100"></td>
                                                                                                                    <td><textarea name="bl_remark_co_7" id="bl_remark_co_7" style="width:820px;height:22px;border:0px;overflow-y:auto;" readonly=""></textarea></td>
                                                                                                                </tr>
                                                                                                             </tbody></table>
                                                                                                        
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </td>
</tr>

                                                                              
                                                                              <tr id="tr_tip_7"><td height="5"></td></tr>
                                                                              
                                                                              <tr id="trbill_8" style="display:none;">
	<td width="945" height="460" valign="top" background="image/bg_blue.jpg">
                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="5" class="tablebill">
                                                                                        <tbody><tr>
                                                                                            <td height="34" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="90"><img src="image/8.jpg"></td>
                                                                                                        <td width="305" align="left" height="34">
                                                                                                            <input class="input_button" type="button" name="bt_sendaddress_8" value="新建发件人" onclick="input_SendAddress('8')">
                                                                                                            <input class="input_button" type="button" name="bt_sendaddress_sel_8" value="选择发件人" onclick="select_SendAddress('8');">    
                                                                                                        </td>
                                                                                                        <td width="*">
                                                                                                            <input class="input_button" type="button" name="bt_address_8" value="新建收货地址" onclick="input_Address('8');">
                                                                                                            <input class="input_button" type="button" name="bt_address_sel_8" value="选择收货地址" onclick="select_Address_Idc('8');">
                                                                                                            
                                                                                                            <input class="input_button" type="button" name="bt_idcard_sel_8" value="选择身份证" onclick="selIDC('8');">
                                                                                                            
                                                                                                            <label id="yd_idccardID_text_8" name="yd_idccardID_text_8"></label>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293"><label id="sendaddress_name_8">Chen&nbsp;Wang</label>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="285"><label id="address_name_8"></label></td>
                                                                                                        <td width="84"> </td>
                                                                                                        <td width="*"><label id="address_code_8"></label></td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293"><label id="sendaddress_tel_8">13124935854</label>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="*"><label id="address_tel_8"></label>&nbsp;<label id="address_tel2_8"></label></td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="60" class="tablebill_line" valign="top" style="word-wrap: break-word; word-break:break-all;"><label id="sendaddress_address_8">8888 LEE AVE.SOUTH EL</label></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td height="30"><label id="sendaddress_code_8">888</label></td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="*">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="30" colspan="2"><label id="address_province_8"></label>&nbsp;<label id="address_area_8"></label></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td height="60" class="tablebill_line" valign="top" style="word-wrap: break-word; word-break:break-all;"><label id="address_address_8"></label></td>
                                                                                                                    
                                                                                                                    <td width="2"></td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="38" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="7"></td>
                                                                                                        <td width="170">
                                                                                                            <select name="bl_billdel_8" id="bl_billdel_8" onchange="bl_billdel_fuc('8',this.value); ">
		<option value="0">本运单正常</option>
		<option selected="selected" value="1">本运单删除</option>
	</select>
                                                                                                            
                                                                                                            <input name="yd_sendaddressID_8" type="hidden" id="yd_sendaddressID_8">
                                                                                                            
                                                                                                            <input name="yd_addressID_8" type="hidden" id="yd_addressID_8">
                                                                                                            
                                                                                                            <input name="yd_idccardID_8" type="hidden" id="yd_idccardID_8" value="">
                                                                                                            
                                                                                                        </td>
                                                                                                        <td width="208"><font style="font-size:15px;"><span id="bl_no_8">待创建</span></font><span id="bl_state_show_8"></span>
                                                                                                        </td>
                                                                                                        <td width="100"> </td>
                                                                                                        <td width="*">
                                                                                                            <select name="bl_deliverywaysel_8" id="bl_deliverywaysel_8" onchange="deliverywaysel_fuc('8',this.value);setfeebyweight('8');willprice_fuc();">
                                                                                                                  <option value="">请选择</option>
                                                                                                                  <option value="4">ID发货新张特价</option><option value="10">非ID普通类</option><option value="11">非ID特殊类</option>
                                                                                                              </select>
                                                                                                            <input name="bl_deliveryway_8" type="hidden" id="bl_deliveryway_8"><span id="bl_koufei_show_8"></span>&nbsp; 免服务费<input name="bl_isservicefee_8" type="checkbox" id="bl_isservicefee_8" disabled="disabled"><input name="bl_servicefee_8" type="text" id="bl_servicefee_8" onkeyup="if(isNaN(value))execCommand('undo');" value="0.00" maxlength="8" class="input_none" onafterpaste="if(isNaN(value))execCommand('undo')" style="color:green;font-weight:bold;" size="4" readonly="">美元
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td height="38" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabletext">
                                                                                                    <tbody><tr>
                                                                                                        <td height="24"></td>
                                                                                                        <td></td>
                                                                                                        <td><input type="checkbox" name="bl_service_sel_8" value="0" onclick="getservice_fuc('8');"><b>取出发票</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_8" value="1" onclick="getservice_fuc('8');"><b>加固物品</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_8" value="2" onclick="getservice_fuc('8');"><b>去除广告杂志</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_8" value="3" onclick="getservice_fuc('8');"><b>丢弃鞋盒</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_8" value="4" onclick="getservice_fuc('8');"><b>加套外箱</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input name="bl_service_8" type="hidden" id="bl_service_8">
                                                                                                         </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td width="8"></td>
                                                                                                        <td width="391">
                                                                                                            
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr><td colspan="4" height="4"> </td></tr>
                                                                                                                <tr height="25">
                                                                                                                    <td width="206" align="center" valign="bottom"><input type="text" id="bl_pro_name_8_0" onkeyup="get_bl_proname_value('8');" name="bl_pro_name_8_0" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td width="38" align="center" valign="bottom"><input type="text" id="bl_pro_num_8_0" name="bl_pro_num_8_0" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('8');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="134" align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_8_0" name="bl_pro_dvalue_8_0" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('8');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                                <tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_8_1" onkeyup="get_bl_proname_value('8');" name="bl_pro_name_8_1" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_8_1" name="bl_pro_num_8_1" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('8');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_8_1" name="bl_pro_dvalue_8_1" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('8');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                                <tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_8_2" onkeyup="get_bl_proname_value('8');" name="bl_pro_name_8_2" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_8_2" name="bl_pro_num_8_2" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('8');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_8_2" name="bl_pro_dvalue_8_2" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('8');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>


																												<tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_8_3" onkeyup="get_bl_proname_value('8');" name="bl_pro_name_8_3" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_8_3" name="bl_pro_num_8_3" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('8');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_8_3" name="bl_pro_dvalue_8_3" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('8');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>


																												<tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_8_4" onkeyup="get_bl_proname_value('8');" name="bl_pro_name_8_4" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_8_4" name="bl_pro_num_8_4" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('8');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_8_4" name="bl_pro_dvalue_8_4" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('8');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                            <textarea name="bl_proname_8" id="bl_proname_8" style="width:377px;height:131px;border:0px;overflow-y:auto;display:none;"></textarea>
                                                                                                        </td>
                                                                                                        
                                                                                                        <td width="*" valign="top">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="87" valign="top">
                                                                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                            <tbody><tr><td height="8"></td></tr>
                                                                                                                            <tr height="25">
                                                                                                                                <td width="115">申报价值(美元)</td>
                                                                                                                                <td width="100">总保额(美元)</td>
                                                                                                                                <td width="100">保险费(美元)</td>
                                                                                                                                <td width="100">运单重量(磅)</td>
                                                                                                                                <td width="*">快递费(美元) </td>
                                                                                                                            </tr>
                                                                                                                            <tr height="30">
                                                                                                                                <td><input name="bl_declarevalue_8" type="text" id="bl_declarevalue_8" readonly="" class="input_none" maxlength="10" style="color:green;font-weight:bold;width:97px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_insurancesum_8" type="text" id="bl_insurancesum_8" class="input_bottom" maxlength="8" style="width:81px;" value="0.00" onkeyup="if(isNaN(value))execCommand('undo');setinsurance('8');setfeebyweight('8');willprice_fuc();" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_insurance_8" type="text" id="bl_insurance_8" readonly="" class="input_none" maxlength="8" value="0.00" style="color:green;font-weight:bold;width:81px;" onkeyup="if(isNaN(value))execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_weight_8" type="text" id="bl_weight_8" class="input_none" readonly="" maxlength="8" style="width:81px;" value="0.00" onkeyup="if(isNaN(value))execCommand('undo');setfeebyweight('8');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_fee_8" type="text" id="bl_fee_8" class="input_none" readonly="" maxlength="8" value="0.00" style="color:Red;font-weight:bold;width:81px;" onkeyup="if(isNaN(value))execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                            </tr>
                                                                                                                            <tr height="23">
                                                                                                                                <td colspan="5">
                                                                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                                        <tbody><tr>
                                                                                                                                            <td width="85"></td>
                                                                                                                                            <td bgcolor="#daff80" width="102"></td>
                                                                                                                                            <td bgcolor="#daff80" align="right"><input name="bl_issetbox_8" type="checkbox" id="bl_issetbox_8"><font color="green">是否需要有偿打包</font></td>
                                                                                                                                            <td width="5"></td>
                                                                                                                                            <td bgcolor="#daff80">有偿打包费：<input name="bl_issetboxfee_8" type="text" id="bl_issetboxfee_8" onkeyup="if(isNaN(value))execCommand('undo');" value="0.00" maxlength="8" class="input_none" onafterpaste="if(isNaN(value))execCommand('undo')" style="color:green;font-weight:bold;" size="7" readonly="">美元</td>
                                                                                                                                            <td width="10"></td>
                                                                                                                                        </tr>
                                                                                                                                    </tbody></table>
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                        </tbody></table>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td>
                                                                                                                        <textarea name="bl_remark_8" id="bl_remark_8" style="width:524px;height:44px;border:0px;overflow-y:auto;"></textarea><input name="bl_remarkred_8" type="checkbox" id="bl_remarkred_8" style="display:none" onclick="bl_remark_fuc('8');">
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td colspan="3">
                                                                                                             <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr><td height="18"></td></tr>
                                                                                                                <tr>
                                                                                                                    <td width="100"></td>
                                                                                                                    <td><textarea name="bl_remark_co_8" id="bl_remark_co_8" style="width:820px;height:22px;border:0px;overflow-y:auto;" readonly=""></textarea></td>
                                                                                                                </tr>
                                                                                                             </tbody></table>
                                                                                                        
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </td>
</tr>

                                                                              
                                                                              <tr id="tr_tip_8"><td height="5"></td></tr>
                                                                              
                                                                              <tr id="trbill_9" style="display:none;">
	<td width="945" height="460" valign="top" background="image/bg_yellow.jpg">
                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="5" class="tablebill">
                                                                                        <tbody><tr>
                                                                                            <td height="34" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="90"><img src="image/9.jpg"></td>
                                                                                                        <td width="305" align="left" height="34">
                                                                                                            <input class="input_button" type="button" name="bt_sendaddress_9" value="新建发件人" onclick="input_SendAddress('9')">
                                                                                                            <input class="input_button" type="button" name="bt_sendaddress_sel_9" value="选择发件人" onclick="select_SendAddress('9');">    
                                                                                                        </td>
                                                                                                        <td width="*">
                                                                                                            <input class="input_button" type="button" name="bt_address_9" value="新建收货地址" onclick="input_Address('9');">
                                                                                                            <input class="input_button" type="button" name="bt_address_sel_9" value="选择收货地址" onclick="select_Address_Idc('9');">
                                                                                                            
                                                                                                            <input class="input_button" type="button" name="bt_idcard_sel_9" value="选择身份证" onclick="selIDC('9');">
                                                                                                            
                                                                                                            <label id="yd_idccardID_text_9" name="yd_idccardID_text_9"></label>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293"><label id="sendaddress_name_9">Chen&nbsp;Wang</label>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="285"><label id="address_name_9"></label></td>
                                                                                                        <td width="84"> </td>
                                                                                                        <td width="*"><label id="address_code_9"></label></td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293"><label id="sendaddress_tel_9">13124935854</label>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="*"><label id="address_tel_9"></label>&nbsp;<label id="address_tel2_9"></label></td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="30" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="92"></td>
                                                                                                        <td width="293">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="60" class="tablebill_line" valign="top" style="word-wrap: break-word; word-break:break-all;"><label id="sendaddress_address_9">8888 LEE AVE.SOUTH EL</label></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td height="30"><label id="sendaddress_code_9">888</label></td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>
                                                                                                        <td width="98"> </td>
                                                                                                        <td width="*">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="30" colspan="2"><label id="address_province_9"></label>&nbsp;<label id="address_area_9"></label></td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td height="60" class="tablebill_line" valign="top" style="word-wrap: break-word; word-break:break-all;"><label id="address_address_9"></label></td>
                                                                                                                    
                                                                                                                    <td width="2"></td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td height="38" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                    <tbody><tr>
                                                                                                        <td width="7"></td>
                                                                                                        <td width="170">
                                                                                                            <select name="bl_billdel_9" id="bl_billdel_9" onchange="bl_billdel_fuc('9',this.value); ">
		<option value="0">本运单正常</option>
		<option selected="selected" value="1">本运单删除</option>
	</select>
                                                                                                            
                                                                                                            <input name="yd_sendaddressID_9" type="hidden" id="yd_sendaddressID_9">
                                                                                                            
                                                                                                            <input name="yd_addressID_9" type="hidden" id="yd_addressID_9">
                                                                                                            
                                                                                                            <input name="yd_idccardID_9" type="hidden" id="yd_idccardID_9" value="">
                                                                                                            
                                                                                                        </td>
                                                                                                        <td width="208"><font style="font-size:15px;"><span id="bl_no_9">待创建</span></font><span id="bl_state_show_9"></span>
                                                                                                        </td>
                                                                                                        <td width="100"> </td>
                                                                                                        <td width="*">
                                                                                                            <select name="bl_deliverywaysel_9" id="bl_deliverywaysel_9" onchange="deliverywaysel_fuc('9',this.value);setfeebyweight('9');willprice_fuc();">
                                                                                                                  <option value="">请选择</option>
                                                                                                                  <option value="4">ID发货新张特价</option><option value="10">非ID普通类</option><option value="11">非ID特殊类</option>
                                                                                                              </select>
                                                                                                            <input name="bl_deliveryway_9" type="hidden" id="bl_deliveryway_9"><span id="bl_koufei_show_9"></span>&nbsp; 免服务费<input name="bl_isservicefee_9" type="checkbox" id="bl_isservicefee_9" disabled="disabled"><input name="bl_servicefee_9" type="text" id="bl_servicefee_9" onkeyup="if(isNaN(value))execCommand('undo');" value="0.00" maxlength="8" class="input_none" onafterpaste="if(isNaN(value))execCommand('undo')" style="color:green;font-weight:bold;" size="4" readonly="">美元
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td height="38" valign="bottom">
                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabletext">
                                                                                                    <tbody><tr>
                                                                                                        <td height="24"></td>
                                                                                                        <td></td>
                                                                                                        <td><input type="checkbox" name="bl_service_sel_9" value="0" onclick="getservice_fuc('9');"><b>取出发票</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_9" value="1" onclick="getservice_fuc('9');"><b>加固物品</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_9" value="2" onclick="getservice_fuc('9');"><b>去除广告杂志</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_9" value="3" onclick="getservice_fuc('9');"><b>丢弃鞋盒</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input type="checkbox" name="bl_service_sel_9" value="4" onclick="getservice_fuc('9');"><b>加套外箱</b>&nbsp;&nbsp;
                                                                                                                        
                                                                                                                        <input name="bl_service_9" type="hidden" id="bl_service_9">
                                                                                                         </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td width="8"></td>
                                                                                                        <td width="391">
                                                                                                            
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr><td colspan="4" height="4"> </td></tr>
                                                                                                                <tr height="25">
                                                                                                                    <td width="206" align="center" valign="bottom"><input type="text" id="bl_pro_name_9_0" onkeyup="get_bl_proname_value('9');" name="bl_pro_name_9_0" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td width="38" align="center" valign="bottom"><input type="text" id="bl_pro_num_9_0" name="bl_pro_num_9_0" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('9');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="134" align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_9_0" name="bl_pro_dvalue_9_0" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('9');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                                <tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_9_1" onkeyup="get_bl_proname_value('9');" name="bl_pro_name_9_1" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_9_1" name="bl_pro_num_9_1" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('9');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_9_1" name="bl_pro_dvalue_9_1" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('9');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                                <tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_9_2" onkeyup="get_bl_proname_value('9');" name="bl_pro_name_9_2" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_9_2" name="bl_pro_num_9_2" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('9');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_9_2" name="bl_pro_dvalue_9_2" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('9');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>


																												<tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_9_3" onkeyup="get_bl_proname_value('9');" name="bl_pro_name_9_3" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_9_3" name="bl_pro_num_9_3" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('9');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_9_3" name="bl_pro_dvalue_9_3" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('9');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>


																												<tr height="25">
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_name_9_4" onkeyup="get_bl_proname_value('9');" name="bl_pro_name_9_4" class="input_bottom" maxlength="100" style="width:200px;height:22px;" value=""></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_num_9_4" name="bl_pro_num_9_4" class="input_bottom" maxlength="5" style="width:35px;height:22px;" value="0" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('9');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td align="center" valign="bottom"><input type="text" id="bl_pro_dvalue_9_4" name="bl_pro_dvalue_9_4" class="input_bottom" maxlength="8" style="width:128px;height:22px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');get_bl_proname_value('9');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                    <td width="*"> </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                            <textarea name="bl_proname_9" id="bl_proname_9" style="width:377px;height:131px;border:0px;overflow-y:auto;display:none;"></textarea>
                                                                                                        </td>
                                                                                                        
                                                                                                        <td width="*" valign="top">
                                                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr>
                                                                                                                    <td height="87" valign="top">
                                                                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                            <tbody><tr><td height="8"></td></tr>
                                                                                                                            <tr height="25">
                                                                                                                                <td width="115">申报价值(美元)</td>
                                                                                                                                <td width="100">总保额(美元)</td>
                                                                                                                                <td width="100">保险费(美元)</td>
                                                                                                                                <td width="100">运单重量(磅)</td>
                                                                                                                                <td width="*">快递费(美元) </td>
                                                                                                                            </tr>
                                                                                                                            <tr height="30">
                                                                                                                                <td><input name="bl_declarevalue_9" type="text" id="bl_declarevalue_9" readonly="" class="input_none" maxlength="10" style="color:green;font-weight:bold;width:97px;" value="0.00" onkeyup="if(isNaN(value)) execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_insurancesum_9" type="text" id="bl_insurancesum_9" class="input_bottom" maxlength="8" style="width:81px;" value="0.00" onkeyup="if(isNaN(value))execCommand('undo');setinsurance('9');setfeebyweight('9');willprice_fuc();" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_insurance_9" type="text" id="bl_insurance_9" readonly="" class="input_none" maxlength="8" value="0.00" style="color:green;font-weight:bold;width:81px;" onkeyup="if(isNaN(value))execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_weight_9" type="text" id="bl_weight_9" class="input_none" readonly="" maxlength="8" style="width:81px;" value="0.00" onkeyup="if(isNaN(value))execCommand('undo');setfeebyweight('9');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                                <td><input name="bl_fee_9" type="text" id="bl_fee_9" class="input_none" readonly="" maxlength="8" value="0.00" style="color:Red;font-weight:bold;width:81px;" onkeyup="if(isNaN(value))execCommand('undo');" onafterpaste="if(isNaN(value))execCommand('undo')"></td>
                                                                                                                            </tr>
                                                                                                                            <tr height="23">
                                                                                                                                <td colspan="5">
                                                                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                                        <tbody><tr>
                                                                                                                                            <td width="85"></td>
                                                                                                                                            <td bgcolor="#daff80" width="102"></td>
                                                                                                                                            <td bgcolor="#daff80" align="right"><input name="bl_issetbox_9" type="checkbox" id="bl_issetbox_9"><font color="green">是否需要有偿打包</font></td>
                                                                                                                                            <td width="5"></td>
                                                                                                                                            <td bgcolor="#daff80">有偿打包费：<input name="bl_issetboxfee_9" type="text" id="bl_issetboxfee_9" onkeyup="if(isNaN(value))execCommand('undo');" value="0.00" maxlength="8" class="input_none" onafterpaste="if(isNaN(value))execCommand('undo')" style="color:green;font-weight:bold;" size="7" readonly="">美元</td>
                                                                                                                                            <td width="10"></td>
                                                                                                                                        </tr>
                                                                                                                                    </tbody></table>
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                        </tbody></table>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td>
                                                                                                                        <textarea name="bl_remark_9" id="bl_remark_9" style="width:524px;height:44px;border:0px;overflow-y:auto;"></textarea><input name="bl_remarkred_9" type="checkbox" id="bl_remarkred_9" style="display:none" onclick="bl_remark_fuc('9');">
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody></table>
                                                                                                        
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td colspan="3">
                                                                                                             <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                <tbody><tr><td height="18"></td></tr>
                                                                                                                <tr>
                                                                                                                    <td width="100"></td>
                                                                                                                    <td><textarea name="bl_remark_co_9" id="bl_remark_co_9" style="width:820px;height:22px;border:0px;overflow-y:auto;" readonly=""></textarea></td>
                                                                                                                </tr>
                                                                                                             </tbody></table>
                                                                                                        
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </td>
</tr>

                                                                              
                                                                              <tr id="tr_tip_9"><td height="0"></td></tr>
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              
                                                                            </tbody></table>
                                                                          </td>
                                                                       </tr>
                                                                       
                                                                       
                                                                       
                                                                       <tr height="20">
                                                                          <td nowrap="" align="left">
                                                                             <input type="submit" name="SendData" value="确 定 提 交" id="SendData" class="input_bot" style="width:100px;height:30px;font-size:14px;">
                                                                             <input name="action" type="hidden" id="action" value="add">
                                                                             <input name="cookieuser" type="hidden" id="cookieuser" value="0">
                                                                             
                                                                             
                                                                             <input name="delivery_isvip_hidden" type="hidden" id="delivery_isvip_hidden" value="0">
                                                                             
                                                                             <input name="init_default_sendaddress_id_hidden" type="hidden" id="init_default_sendaddress_id_hidden" value="4443">
                                            
                                                                             <input name="init_default_address_id_hidden" type="hidden" id="init_default_address_id_hidden">
                                                                             
                                                                             <input name="ja_isfreeservice_hidden" type="hidden" id="ja_isfreeservice_hidden" value="0">
                                                                          </td>
                                                                       </tr>
                                                                       
                                                                       
                                                                 
                                                                 </tbody></table>
                                                            </td>
                                                        </tr>
                                                    
                                                    
                                                    </tbody>
                                                </table>
											
											
											</td>
										</tr>
										
									</tbody></table>
								</td>
							</tr>
							
							
							
<tr>
    <td height="20" bgcolor="#ffffff"></td>
</tr>
<tr>
    
    <td bgcolor="#ffffff" valign="middle">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tbody><tr>
                <td width="10">&nbsp;</td>
                <td width="100%" height="70" bgcolor="#f4f4f4" valign="middle">
                    <div align="center" class="hui">
                      君安快递&nbsp;&nbsp;   Copyright 2012 www.junanex.com, All Rights Reserved
                    </div>
                </td>
                
            </tr>
        </tbody></table>
    </td>
</tr>

							   
							
							
							</tbody></table>
							
					</td>
				</tr>
			</tbody></table>
    </div>
    </form>





<script>
                                                                                                                
//编辑业务物品内容
for (proname_i=0;proname_i<10 ;proname_i++ )
{
    if(document.getElementById('bl_proname_'+proname_i)!=null)
    {
        if(document.getElementById('bl_proname_'+proname_i).value!="")
        {
            var line_Array = document.getElementById('bl_proname_'+proname_i).value.split("~");
            
            for(line_Array_i = 0;line_Array_i < line_Array.length-1;line_Array_i++)
            {   
                document.getElementById("bl_pro_name_"+proname_i+"_"+line_Array_i).value = line_Array[line_Array_i].split("^")[0];
                
                document.getElementById("bl_pro_num_"+proname_i+"_"+line_Array_i).value = line_Array[line_Array_i].split("^")[1];
                
                document.getElementById("bl_pro_dvalue_"+proname_i+"_"+line_Array_i).value = line_Array[line_Array_i].split("^")[2];
            }
        }
                      
    }
}              
                                                                                                                function replacevalue(tempstr)
                                                                                                                {
                                                                                                                    var returnvalue = tempstr;
                                                                                                                    
                                                                                                                    returnvalue =  returnvalue.replace(/\^/g,"");
                                                                                                                    
                                                                                                                    returnvalue =  returnvalue.replace(/~/g,"");
                                                                                                                    
                                                                                                                    return returnvalue;
                                                                                                                }
                                                                                                                
                                                                                                                
                                                                                                                //是否是大于0的数字
                                                                                                                function isVaildValue(tempstr)
                                                                                                                {
                                                                                                                    var returnvalue = true;
                                                                                                                    
                                                                                                                    if(!isNaN(tempstr))
                                                                                                                    {
                                                                                                                        returnvalue = true;
                                                                                                                    }
                                                                                                                    else
                                                                                                                    {
                                                                                                                        returnvalue = false;
                                                                                                                    }
                                                                                                                    
                                                                                                                    if(returnvalue)
                                                                                                                    {
                                                                                                                        if(parseFloat(tempstr)>0)
                                                                                                                        {
                                                                                                                            returnvalue = true;
                                                                                                                        }
                                                                                                                        else
                                                                                                                        {
                                                                                                                            returnvalue = false;
                                                                                                                        }
                                                                                                                    }
                                                                                                                    
                                                                                                                    return returnvalue;
                                                                                                                }
                                                                                                                
                                                                                                                function get_bl_proname_value(tempbillnum)
                                                                                                                {
                                                                                                                    var tempvalue = "";
                                                                                                                    
                                                                                                                    var temp_bl_declarevalue = 0;
                                                                                                                    
                                                                                                                    if(replacevalue(document.getElementById("bl_pro_name_"+tempbillnum+"_0").value)!="" && isVaildValue(replacevalue(document.getElementById("bl_pro_num_"+tempbillnum+"_0").value)) && isVaildValue(replacevalue(document.getElementById("bl_pro_dvalue_"+tempbillnum+"_0").value)))
                                                                                                                    {
                                                                                                                        tempvalue = tempvalue + replacevalue(document.getElementById("bl_pro_name_"+tempbillnum+"_0").value) + "^" + replacevalue(document.getElementById("bl_pro_num_"+tempbillnum+"_0").value) + "^" + replacevalue(document.getElementById("bl_pro_dvalue_"+tempbillnum+"_0").value) + "~";
                                                                                                                        
                                                                                                                        temp_bl_declarevalue = parseFloat(temp_bl_declarevalue) + parseFloat(replacevalue(document.getElementById("bl_pro_dvalue_"+tempbillnum+"_0").value));
                                                                                                                    }
                                                                                                                    
                                                                                                                    if(replacevalue(document.getElementById("bl_pro_name_"+tempbillnum+"_1").value)!="" && isVaildValue(replacevalue(document.getElementById("bl_pro_num_"+tempbillnum+"_1").value)) && isVaildValue(replacevalue(document.getElementById("bl_pro_dvalue_"+tempbillnum+"_1").value)))
                                                                                                                    {
                                                                                                                        tempvalue = tempvalue + replacevalue(document.getElementById("bl_pro_name_"+tempbillnum+"_1").value) + "^" + replacevalue(document.getElementById("bl_pro_num_"+tempbillnum+"_1").value) + "^" + replacevalue(document.getElementById("bl_pro_dvalue_"+tempbillnum+"_1").value) + "~";
                                                                                                                    
                                                                                                                        temp_bl_declarevalue = parseFloat(temp_bl_declarevalue) + parseFloat(replacevalue(document.getElementById("bl_pro_dvalue_"+tempbillnum+"_1").value));
                                                                                                                    }
                                                                                                                    
                                                                                                                    if(replacevalue(document.getElementById("bl_pro_name_"+tempbillnum+"_2").value)!="" && isVaildValue(replacevalue(document.getElementById("bl_pro_num_"+tempbillnum+"_2").value)) && isVaildValue(replacevalue(document.getElementById("bl_pro_dvalue_"+tempbillnum+"_2").value)))
                                                                                                                    {
                                                                                                                        tempvalue = tempvalue + replacevalue(document.getElementById("bl_pro_name_"+tempbillnum+"_2").value) + "^" + replacevalue(document.getElementById("bl_pro_num_"+tempbillnum+"_2").value) + "^" + replacevalue(document.getElementById("bl_pro_dvalue_"+tempbillnum+"_2").value) + "~";
                                                                                                                    
                                                                                                                        temp_bl_declarevalue = parseFloat(temp_bl_declarevalue) + parseFloat(replacevalue(document.getElementById("bl_pro_dvalue_"+tempbillnum+"_2").value));
                                                                                                                    }
                                                                                                                    
                                                                                                                    if(replacevalue(document.getElementById("bl_pro_name_"+tempbillnum+"_3").value)!="" && isVaildValue(replacevalue(document.getElementById("bl_pro_num_"+tempbillnum+"_3").value)) && isVaildValue(replacevalue(document.getElementById("bl_pro_dvalue_"+tempbillnum+"_3").value)))
                                                                                                                    {
                                                                                                                        tempvalue = tempvalue + replacevalue(document.getElementById("bl_pro_name_"+tempbillnum+"_3").value) + "^" + replacevalue(document.getElementById("bl_pro_num_"+tempbillnum+"_3").value) + "^" + replacevalue(document.getElementById("bl_pro_dvalue_"+tempbillnum+"_3").value) + "~";
                                                                                                                    
                                                                                                                        temp_bl_declarevalue = parseFloat(temp_bl_declarevalue) + parseFloat(replacevalue(document.getElementById("bl_pro_dvalue_"+tempbillnum+"_3").value));
                                                                                                                    }
                                                                                                                    
                                                                                                                    if(replacevalue(document.getElementById("bl_pro_name_"+tempbillnum+"_4").value)!="" && isVaildValue(replacevalue(document.getElementById("bl_pro_num_"+tempbillnum+"_4").value)) && isVaildValue(replacevalue(document.getElementById("bl_pro_dvalue_"+tempbillnum+"_4").value)))
                                                                                                                    {
                                                                                                                        tempvalue = tempvalue + replacevalue(document.getElementById("bl_pro_name_"+tempbillnum+"_4").value) + "^" + replacevalue(document.getElementById("bl_pro_num_"+tempbillnum+"_4").value) + "^" + replacevalue(document.getElementById("bl_pro_dvalue_"+tempbillnum+"_4").value) + "~";
                                                                                                                    
                                                                                                                        temp_bl_declarevalue = parseFloat(temp_bl_declarevalue) + parseFloat(replacevalue(document.getElementById("bl_pro_dvalue_"+tempbillnum+"_4").value));
                                                                                                                    }
                                                                                                                    
                                                                                                                    document.getElementById("bl_proname_"+tempbillnum).value = tempvalue;
                                                                                                                    
                                                                                                                     //计算本单总申报价值
                                                                                                                    //document.getElementById("bl_declarevalue_"+tempbillnum).value = changeTwoDecimal(temp_bl_declarevalue);
                                                                                                                    
                                                                                                                }


                                                                                                            </script>

<script>
function setinsurance(tempbillnum)
{
    var temp_bl_deliveryway = document.getElementById('bl_deliveryway_'+tempbillnum).value;
    
    var temp_bl_insurancesum = document.getElementById('bl_insurancesum_'+tempbillnum).value;
    
    var temp_sel_insurance = 2;
    
    if(temp_bl_deliveryway!="")
    {
        for (stype_i=0;stype_i<sendtype_Array.length ;stype_i++ )
        {
            if(sendtype_Array[stype_i][0]==temp_bl_deliveryway)
            {                  
                temp_sel_insurance = sendtype_Array[stype_i][5];                                                                      
                break;
            }
        }
        document.getElementById("bl_insurance_"+tempbillnum).value = changeTwoDecimal((parseFloat(temp_bl_insurancesum) * parseFloat(temp_sel_insurance))/100);
    
    }
    else
    {
        alert("请选择本运单发货方式！");
        return false;
    }
    return true;
}


                                                                        function bl_billdel_fuc(tempbillnum,temp_value)
                                                                        {
                                                                            if(document.getElementById('bl_koufei_show_'+tempbillnum).innerHTML=="" || document.getElementById('bl_koufei_show_'+tempbillnum).innerHTML=="<FONT color=red>已扣费：0 美元</FONT>")
                                                                            {
                                                                                if(temp_value=='1')
                                                                                {
                                                                                    if(confirm('您确定此行运单在本次最后操作中删除吗？')) 
                                                                                    {
                                                                                        return true;
                                                                                    } 
                                                                                    else 
                                                                                    {
                                                                                        document.getElementById('bl_billdel_'+tempbillnum).value='0';
                                                                                    } 
                                                                                } 
                                                                            }
                                                                            else
                                                                            {
                                                                                alert("已经扣费的运单无法删除！删除失败");
                                                                                document.getElementById('bl_billdel_'+tempbillnum).value='0';
                                                                                return false;
                                                                            }
                                                                        }
                                                                        </script>

<script>
                            
                            function setbillshow(boxnumstr)
                            {
                                for (box_i=0;box_i<10 ;box_i++ )
                                {
                                    if(document.getElementById('trbill_'+box_i)!=null)
                                    {
                                        document.getElementById('trbill_'+box_i).style.display = "none";
                                        document.getElementById('bl_billdel_'+box_i).value="1";
                                        
                                        document.getElementById('tr_tip_'+box_i).style.display = "none";
                                    }
                                }
                                
                                for (box_i=0;box_i<boxnumstr ;box_i++ )
                                {
                                    document.getElementById('trbill_'+box_i).style.display = "";
                                    document.getElementById('bl_billdel_'+box_i).value="0";
                                    
                                    document.getElementById('tr_tip_'+box_i).style.display = "";
                                }
                            }
                            function setydtype(tempvalue)
                            {
                                if(document.getElementById('yw_packagesel').value!="")
                                {
                                    if(tempvalue=="1" && document.getElementById('yw_packagesel').value.split(",").length<3)
                                    {
                                        alert("合箱至少需要选择二个包裹！");
                                        
                                        var temp_bs_type_radio = document.getElementsByName("bs_type_radio");
                                        
                                        for (temp_i=0;temp_i<temp_bs_type_radio.length ;temp_i++ )
                                        {
                                            if(temp_bs_type_radio[temp_i].value == document.getElementById('bs_type').value)
                                            {
                                                temp_bs_type_radio[temp_i].checked = true;
                                                break;
                                            }
                                        }
                                        return false;   
                                    }
                                    
                                    if(tempvalue=="0"&& document.getElementById('yw_packagesel').value.split(",").length>2)
                                    {
                                        alert("原箱转运只能选择一个包裹！");
                                        
                                        var temp_bs_type_radio = document.getElementsByName("bs_type_radio");
                                        
                                        for (temp_i=0;temp_i<temp_bs_type_radio.length ;temp_i++ )
                                        {
                                            if(temp_bs_type_radio[temp_i].value == document.getElementById('bs_type').value)
                                            {
                                                temp_bs_type_radio[temp_i].checked = true;
                                                break;
                                            }
                                        }
                                        return false;   
                                    }
                                    
                                    document.getElementById('bs_type').value = tempvalue;
                                    
                                    if(tempvalue=="2")
                                    {
                                        document.getElementById('bs_boxnum').disabled = false;
                                        
                                        if(parseInt(document.getElementById('bs_boxnum').value)<2)
                                        {
                                            document.getElementById('bs_boxnum').value="2";
                                        }
                                    }
                                    else
                                    {
                                        document.getElementById('bs_boxnum').disabled = true;
                                        
                                        document.getElementById('bs_boxnum').value="1";
                                    }
                                    
                                    setbillshow(document.getElementById('bs_boxnum').value);
                                    
                                    document.getElementById('trbill_top').style.display = "";
                                    
                                    setfeepage();
                                    
                                    document.getElementById('tr_text').style.display = "";
                                }
                                else
                                {
                                    alert("请先选择包裹！");
                                    return false;                           
                                }
                            }
                           </script>
                           
                           
                           
                           
                           
                           
                           <script>
                                                
                                                
                                                function deliverywaysel_fuc(tempselnum,tempvalue)
                                                {
                                                    document.getElementById('bl_deliveryway_'+tempselnum).value=tempvalue;
                                                }
                                                
                                                function getservice_fuc(tempselnum)
                                                {
                                                    var tempgetservice = document.getElementsByName("bl_service_sel_"+tempselnum);
                                                    
                                                    var tempstr = "";
                                                    for(var i = 0; i < tempgetservice.length; i++)
                                                    {
                                                        if(tempgetservice[i].checked == true)
                                                        {
                                                           tempstr += tempgetservice[i].value+",";
                                                        }
                                                    }
                                                                        
                                                    if(tempstr.length>0)
                                                    {
                                                        tempstr = tempstr.substring(0,tempstr.length-1);
                                                    }
                                                    
                                                    document.getElementById('bl_service_'+tempselnum).value = tempstr;
                                                    
                                                }
                                                
                                                
                                              </script> 
                                              
                                              <script>
                                                                   
                                                                   
                                                                   function input_SendAddress(tempbillnum) {
                                                                   
                                                                    var   sFeatures   = "dialogHeight:250px;dialogWidth:690px;dialogTop:10px;dialogLeft:10px;help:no;status:no;scroll:auto;resizable:yes;dialogHide:1 " ;
                                                                    var returnsendaddress=window.showModalDialog( "Us_Alert.asp?isuser=1&url=Us_YundanSelSendAddressAdd&seluserno=02089&blno="+ document.getElementById("bl_no_"+tempbillnum).innerHTML +"&cursendaddressselid="+document.getElementById("yd_sendaddressID_"+tempbillnum).value, " ",sFeatures);
                                                                    
                                                                        if(returnsendaddress!=null)
                                                                        {
                                                                            
                                                                            document.getElementById("sendaddress_name_"+tempbillnum).innerHTML=returnsendaddress[0];
                                                                            document.getElementById("sendaddress_tel_"+tempbillnum).innerHTML=returnsendaddress[1];
                                                                            document.getElementById("sendaddress_address_"+tempbillnum).innerHTML=returnsendaddress[2];
                                                                            document.getElementById("sendaddress_code_"+tempbillnum).innerHTML=returnsendaddress[3];
                                                                            
                                                                            document.getElementById("yd_sendaddressID_"+tempbillnum).value=returnsendaddress[4];
                                                                        }
                                                                       
                                                                    }
                                                                    
                                                                    function select_SendAddress(tempbillnum) {

                                                                    var   sFeatures   = "dialogHeight:350px;dialogWidth:950px;dialogTop:10px;dialogLeft:10px;help:no;status:no;scroll:auto;resizable:yes;dialogHide:1 " ;
                                                                    var returnsendaddress=window.showModalDialog( "Us_Alert.asp?isuser=1&url=Us_YundanSelSendAddress&seluserno=02089&blno="+ document.getElementById("bl_no_"+tempbillnum).innerHTML +"&cursendaddressselid="+document.getElementById("yd_sendaddressID_"+tempbillnum).value, " ",sFeatures);
                                                                    
                                                                        if(returnsendaddress!=null)
                                                                        {
                                                                            document.getElementById("sendaddress_name_"+tempbillnum).innerHTML=returnsendaddress[0];
                                                                            document.getElementById("sendaddress_tel_"+tempbillnum).innerHTML=returnsendaddress[1];
                                                                            document.getElementById("sendaddress_address_"+tempbillnum).innerHTML=returnsendaddress[2];
                                                                            document.getElementById("sendaddress_code_"+tempbillnum).innerHTML=returnsendaddress[3];
                                                                            document.getElementById("yd_sendaddressID_"+tempbillnum).value=returnsendaddress[4];
                                                                        }
                                                                       
                                                                    }
                                                                    
                                                                    function input_Address(tempbillnum) {

                                                                    var   sFeatures   = "dialogHeight:300px;dialogWidth:700px;dialogTop:10px;dialogLeft:10px;help:no;status:no;scroll:auto;resizable:yes;dialogHide:1 " ;
                                                                    var returnaddress=window.showModalDialog( "Us_Alert.asp?isuser=1&url=Us_YundanSelAddressAdd&seluserno=02089&blno="+ document.getElementById("bl_no_"+tempbillnum).innerHTML +"&curaddressselid="+document.getElementById("yd_addressID_"+tempbillnum).value, " ",sFeatures);
                                                                    
                                                                        if(returnaddress!=null)
                                                                        {
                                                                            document.getElementById("address_name_"+tempbillnum).innerHTML=returnaddress[0];
                                                                            document.getElementById("address_province_"+tempbillnum).innerHTML=returnaddress[1];
                                                                            document.getElementById("address_area_"+tempbillnum).innerHTML=returnaddress[2];
                                                                            document.getElementById("address_tel_"+tempbillnum).innerHTML=returnaddress[3];
                                                                            document.getElementById("address_tel2_"+tempbillnum).innerHTML=returnaddress[4];
                                                                            document.getElementById("address_address_"+tempbillnum).innerHTML=returnaddress[5];
                                                                            document.getElementById("address_code_"+tempbillnum).innerHTML=returnaddress[6];
                                                                            
                                                                            document.getElementById("yd_addressID_"+tempbillnum).value=returnaddress[7];
                                                                        }
                                                                       
                                                                    }
                                                                    
                                                                    function select_Address(tempbillnum) {

                                                                    var   sFeatures   = "dialogHeight:350px;dialogWidth:950px;dialogTop:10px;dialogLeft:10px;help:no;status:no;scroll:auto;resizable:yes;dialogHide:1 " ;
                                                                    var returnaddress=window.showModalDialog( "Us_Alert.asp?isuser=1&url=Us_YundanSelAddress&seluserno=02089&blno="+ document.getElementById("bl_no_"+tempbillnum).innerHTML +"&curaddressselid="+document.getElementById("yd_addressID_"+tempbillnum).value, " ",sFeatures);
                                                                    
                                                                        if(returnaddress!=null)
                                                                        {
                                                                            document.getElementById("address_name_"+tempbillnum).innerHTML=returnaddress[0];
                                                                            document.getElementById("address_province_"+tempbillnum).innerHTML=returnaddress[1];
                                                                            document.getElementById("address_area_"+tempbillnum).innerHTML=returnaddress[2];
                                                                            document.getElementById("address_tel_"+tempbillnum).innerHTML=returnaddress[3];
                                                                            document.getElementById("address_tel2_"+tempbillnum).innerHTML=returnaddress[4];
                                                                            document.getElementById("address_address_"+tempbillnum).innerHTML=returnaddress[5];
                                                                            document.getElementById("address_code_"+tempbillnum).innerHTML=returnaddress[6];
                                                                            
                                                                            document.getElementById("yd_addressID_"+tempbillnum).value=returnaddress[7];
                                                                        }
                                                                       
                                                                    }
                                                                    
                                                                    //地址和身份证联合选择
                                                                    function select_Address_Idc(tempbillnum) {

                                                                    var   sFeatures   = "dialogHeight:350px;dialogWidth:950px;dialogTop:10px;dialogLeft:10px;help:no;status:no;scroll:auto;resizable:yes;dialogHide:1 " ;
                                                                    var returnaddress=window.showModalDialog( "Us_Alert.asp?isuser=1&url=Us_YundanSelAddress&seluserno=02089&blno="+ document.getElementById("bl_no_"+tempbillnum).innerHTML +"&curaddressselid="+document.getElementById("yd_addressID_"+tempbillnum).value, " ",sFeatures);
                                                                    
                                                                        if(returnaddress!=null)
                                                                        {
                                                                            document.getElementById("address_name_"+tempbillnum).innerHTML=returnaddress[0];
                                                                            document.getElementById("address_province_"+tempbillnum).innerHTML=returnaddress[1];
                                                                            document.getElementById("address_area_"+tempbillnum).innerHTML=returnaddress[2];
                                                                            document.getElementById("address_tel_"+tempbillnum).innerHTML=returnaddress[3];
                                                                            document.getElementById("address_tel2_"+tempbillnum).innerHTML=returnaddress[4];
                                                                            document.getElementById("address_address_"+tempbillnum).innerHTML=returnaddress[5];
                                                                            document.getElementById("address_code_"+tempbillnum).innerHTML=returnaddress[6];
                                                                            
                                                                            document.getElementById("yd_addressID_"+tempbillnum).value=returnaddress[7];
                                                                            
                                                                            if(returnaddress[8]!="" && returnaddress[9]!="" && returnaddress[9]!="0")
                                                                            {
                                                                                document.getElementById("yd_idccardID_text_"+tempbillnum).innerHTML=returnaddress[8];
                                                                                            
                                                                                document.getElementById("yd_idccardID_"+tempbillnum).value=returnaddress[9];
                                                                            }
                                                                        }
                                                                       
                                                                    }
                                                                    
                                                                    
                                                                    function selIDC(tempbillnum) {
                                                                    
                                                                        var   sFeatures   = "dialogHeight:350px;dialogWidth:950px;dialogTop:10px;dialogLeft:10px;help:no;status:yes;scroll:auto;resizable:yes;dialogHide:1 " ;
                                                                        
                                                                        var returnIdcCard=window.showModalDialog( "Us_Alert.asp?isuser=1&url=Us_YundanSelIDCard&seluserno=02089&blno="+ document.getElementById("bl_no_"+tempbillnum).innerHTML +"&curidccardselid="+document.getElementById("yd_idccardID_"+tempbillnum).value, " ",sFeatures);
                                                                                    
                                                                        if(returnIdcCard!=null)
                                                                        {
                                                                            document.getElementById("yd_idccardID_text_"+tempbillnum).innerHTML=returnIdcCard[0];
                                                                                            
                                                                            document.getElementById("yd_idccardID_"+tempbillnum).value=returnIdcCard[1];
                                                                        }
                                                                    }
                                                                    
                                                                    
                                                                   
                                                                   function inputSendAddress(tempbillnum) {
                                                                   
                                                                    var   sFeatures   = "dialogHeight:250px;dialogWidth:690px;dialogTop:10px;dialogLeft:10px;help:no;status:no;scroll:auto;resizable:yes;dialogHide:1 " ;
                                                                    var returnsendaddress=window.showModalDialog( "Us_Alert.asp?url=Us_YundanSelSendAddressAdd&seluserno=02089&blno="+ document.getElementById("bl_no_"+tempbillnum).innerHTML +"&cursendaddressselid="+document.getElementById("yd_sendaddressID_"+tempbillnum).value, " ",sFeatures);
                                                                    
                                                                        if(returnsendaddress!=null)
                                                                        {
                                                                            document.getElementById("sendaddress_show_"+tempbillnum).innerHTML=returnsendaddress[0];
                                                                            document.getElementById("yd_sendaddressID_"+tempbillnum).value=returnsendaddress[1];
                                                                        }
                                                                       
                                                                    }
                                                                    
                                                                    function selectSendAddress(tempbillnum) {

                                                                    var   sFeatures   = "dialogHeight:350px;dialogWidth:950px;dialogTop:10px;dialogLeft:10px;help:no;status:no;scroll:auto;resizable:yes;dialogHide:1 " ;
                                                                    var returnsendaddress=window.showModalDialog( "Us_Alert.asp?url=Us_YundanSelSendAddress&seluserno=02089&blno="+ document.getElementById("bl_no_"+tempbillnum).innerHTML +"&cursendaddressselid="+document.getElementById("yd_sendaddressID_"+tempbillnum).value, " ",sFeatures);
                                                                    
                                                                        if(returnsendaddress!=null)
                                                                        {
                                                                            document.getElementById("sendaddress_show_"+tempbillnum).innerHTML=returnsendaddress[0];
                                                                            document.getElementById("yd_sendaddressID_"+tempbillnum).value=returnsendaddress[1];
                                                                        }
                                                                       
                                                                    }
                                                                    
                                                </script>
                                                
                                                <script>
                                                                   
                                                                   function inputAddress(tempbillnum) {

                                                                    var   sFeatures   = "dialogHeight:300px;dialogWidth:700px;dialogTop:10px;dialogLeft:10px;help:no;status:no;scroll:auto;resizable:yes;dialogHide:1 " ;
                                                                    var returnaddress=window.showModalDialog( "Us_Alert.asp?url=Us_YundanSelAddressAdd&seluserno=02089&blno="+ document.getElementById("bl_no_"+tempbillnum).innerHTML +"&curaddressselid="+document.getElementById("yd_addressID_"+tempbillnum).value, " ",sFeatures);
                                                                    
                                                                        if(returnaddress!=null)
                                                                        {
                                                                            document.getElementById("address_show_"+tempbillnum).innerHTML=returnaddress[0];
                                                                            document.getElementById("yd_addressID_"+tempbillnum).value=returnaddress[1];
                                                                        }
                                                                       
                                                                    }
                                                                    
                                                                    function selectAddress(tempbillnum) {

                                                                    var   sFeatures   = "dialogHeight:350px;dialogWidth:950px;dialogTop:10px;dialogLeft:10px;help:no;status:no;scroll:auto;resizable:yes;dialogHide:1 " ;
                                                                    var returnaddress=window.showModalDialog( "Us_Alert.asp?url=Us_YundanSelAddress&seluserno=02089&blno="+ document.getElementById("bl_no_"+tempbillnum).innerHTML +"&curaddressselid="+document.getElementById("yd_addressID_"+tempbillnum).value, " ",sFeatures);
                                                                    
                                                                        if(returnaddress!=null)
                                                                        {
                                                                            document.getElementById("address_show_"+tempbillnum).innerHTML=returnaddress[0];
                                                                            document.getElementById("yd_addressID_"+tempbillnum).value=returnaddress[1];
                                                                        }
                                                                       
                                                                    }
                                                                    
                                                                    
                                                                    
                                                                    
                                                </script>
                                                
                                                <script>
                                                    function bl_remark_fuc(tempbillnum)
                                                    {
                                                        if(document.getElementById('bl_remark_co_'+tempbillnum).style.color=="red")
                                                        {
                                                            document.getElementById('bl_remark_co_'+tempbillnum).style.color="#000000";
                                                            document.getElementById('bl_remark_co_'+tempbillnum).style.fontWeight="";
                                                        }
                                                        else
                                                        {
                                                            document.getElementById('bl_remark_co_'+tempbillnum).style.color="red";
                                                            document.getElementById('bl_remark_co_'+tempbillnum).style.fontWeight="bold";
                                                        }
                                                    }


function checkForm(){
    
    if(document.getElementById('yw_packagesel').value=="")
    {
        alert("请选择包裹！");
	    return false;
    }
    
    if(document.getElementById('bs_type').value=="")
    {
        alert("请选择业务要求！");
	    return false;
    }
    
    var realbillnum = 0;
    
    for (tr_i=0;tr_i<10 ;tr_i++ )
    {
         if(document.getElementById('trbill_'+tr_i)!=null)
         {
            if(document.getElementById('trbill_'+tr_i).style.display != "none" && document.getElementById('bl_billdel_'+tr_i).value=="0")
            {
                if(document.getElementById('bl_deliveryway_'+tr_i).value=="")
                {
                    alert("第"+ (parseInt(tr_i)+1) +"个运单：发货方式不能为空！");
                    document.getElementById('bl_deliverywaysel_'+tr_i).focus();
	                return false;
	                break;
                }
                
                if(document.getElementById('action').value=="edit")
                {
                    if(document.getElementById('yd_sendaddressID_'+tr_i).value=="" || document.getElementById('yd_sendaddressID_'+tr_i).value=="0")
                    {
                        alert("第"+ (parseInt(tr_i)+1) +"个运单：发件人地址不能为空！");
                        document.getElementById('bl_servicefee_'+tr_i).focus();
	                    return false;
                    }
                    
                    if(document.getElementById('yd_addressID_'+tr_i).value=="" || document.getElementById('yd_addressID_'+tr_i).value=="0")
                    {
                        alert("第"+ (parseInt(tr_i)+1) +"个运单：收货人地址不能为空！");
                        document.getElementById('bl_servicefee_'+tr_i).focus();
	                    return false;
                    }
                }
                else
                {
                    if(document.getElementById("sendaddress_name_"+tr_i).innerHTML=="")
                    {
                        alert("第"+ (parseInt(tr_i)+1) +"个运单：发件人不能为空！且您没有设置默认发件人");
                        document.getElementById('bt_sendaddress_sel_'+tr_i).focus();
	                    return false;
                    }
                    
                    if(document.getElementById("address_name_"+tr_i).innerHTML=="")
                    {
                        alert("第"+ (parseInt(tr_i)+1) +"个运单：收货地址不能为空！且您没有设置默认收获地址");
                        document.getElementById('bt_address_sel_'+tr_i).focus();
	                    return false;
                    }
                }
                
                //验证物品内容
                
                if(replacevalue(document.getElementById("bl_pro_name_"+tr_i+"_0").value)!="")
                {
                    if(!isVaildValue(replacevalue(document.getElementById("bl_pro_num_"+tr_i+"_0").value)) || !isVaildValue(replacevalue(document.getElementById("bl_pro_dvalue_"+tr_i+"_0").value)) )
                    {
                        alert("第"+ (parseInt(tr_i)+1) +"个运单：运单内物品数量和总价必须大于0！");
                        document.getElementById("bl_pro_name_"+tr_i+"_0").focus();
	                    return false;
                    }
                }
                
                if(replacevalue(document.getElementById("bl_pro_name_"+tr_i+"_1").value)!="")
                {
                    if(!isVaildValue(replacevalue(document.getElementById("bl_pro_num_"+tr_i+"_1").value)) || !isVaildValue(replacevalue(document.getElementById("bl_pro_dvalue_"+tr_i+"_1").value)) )
                    {
                        alert("第"+ (parseInt(tr_i)+1) +"个运单：运单内物品数量和总价必须大于0！");
                        document.getElementById("bl_pro_name_"+tr_i+"_1").focus();
	                    return false;
                    }
                }
                
                if(replacevalue(document.getElementById("bl_pro_name_"+tr_i+"_2").value)!="")
                {
                    if(!isVaildValue(replacevalue(document.getElementById("bl_pro_num_"+tr_i+"_2").value)) || !isVaildValue(replacevalue(document.getElementById("bl_pro_dvalue_"+tr_i+"_2").value)) )
                    {
                        alert("第"+ (parseInt(tr_i)+1) +"个运单：运单内物品数量和总价必须大于0！");
                        document.getElementById("bl_pro_name_"+tr_i+"_2").focus();
	                    return false;
                    }
                }
                
                if(replacevalue(document.getElementById("bl_pro_name_"+tr_i+"_3").value)!="")
                {
                    if(!isVaildValue(replacevalue(document.getElementById("bl_pro_num_"+tr_i+"_3").value)) || !isVaildValue(replacevalue(document.getElementById("bl_pro_dvalue_"+tr_i+"_3").value)) )
                    {
                        alert("第"+ (parseInt(tr_i)+1) +"个运单：运单内物品数量和总价必须大于0！");
                        document.getElementById("bl_pro_name_"+tr_i+"_3").focus();
	                    return false;
                    }
                }
                
                if(replacevalue(document.getElementById("bl_pro_name_"+tr_i+"_4").value)!="")
                {
                    if(!isVaildValue(replacevalue(document.getElementById("bl_pro_num_"+tr_i+"_4").value)) || !isVaildValue(replacevalue(document.getElementById("bl_pro_dvalue_"+tr_i+"_4").value)) )
                    {
                        alert("第"+ (parseInt(tr_i)+1) +"个运单：运单内物品数量和总价必须大于0！");
                        document.getElementById("bl_pro_name_"+tr_i+"_4").focus();
	                    return false;
                    }
                }
                
                
                if(document.getElementById('bl_proname_'+tr_i).value=="")
                {
                    alert("第"+ (parseInt(tr_i)+1) +"个运单：运单内物品名称不能为空！");
                    document.getElementById("bl_pro_name_"+tr_i+"_0").focus();
	                return false;
                }
                
                
                
                realbillnum++;
                
            }
         }
    }
    

    
    if(!parseInt(realbillnum)>0)
    {
        alert("本次业务最少需要产生一个运单！");
        return false;
    }
    else
    {
        if(parseInt(realbillnum)<2 && document.getElementById('bs_type').value=="2")
        {
            
            alert("分箱转运业务最少需要产生二个运单！");
            return false;
        }
    }
    
    document.getElementById('bs_boxnum').disabled = false;
    document.getElementById('bs_boxnum').value = realbillnum;//真正箱子数
    
    for (tr_i=0;tr_i<10 ;tr_i++ )
    {
         if(document.getElementById('trbill_'+tr_i)!=null)
         {
            if(document.getElementById('trbill_'+tr_i).style.display != "none" && document.getElementById('bl_billdel_'+tr_i).value=="0")
            {
                document.getElementById('bl_isservicefee_'+tr_i).disabled = false;
            }
         }
    }
    
    return true;
}
                                                </script>
                                                
                                                
<script>
//初始化业务
    if(document.getElementById('bs_type').value!="")
    {
        var bs_type_radio_array=document.getElementsByName('bs_type_radio');
                                
        for(var temp_i=0;temp_i<bs_type_radio_array.length;temp_i++)
        {
            if(bs_type_radio_array[temp_i].value==document.getElementById('bs_type').value)
            {
                bs_type_radio_array[temp_i].checked = true;
                break;
            }
        }
                                
        if(document.getElementById('bs_type').value=="2")
        {
            document.getElementById('bs_boxnum').disabled = false;
        }
        setbillshow(document.getElementById('bs_boxnum').value);
                                    
        document.getElementById('trbill_top').style.display = "";        
    }
                         
                         
//初始化运单
for (tr_j=0;tr_j<10 ;tr_j++ )
{
    
    if(document.getElementById('bl_deliveryway_'+tr_j).value!="")
    {
         document.getElementById('bl_deliverywaysel_'+tr_j).value = document.getElementById('bl_deliveryway_'+tr_j).value;
    }
    
    
    var temp_bl_service_value = document.getElementById('bl_service_'+tr_j).value;
    
    if(temp_bl_service_value!="")
    {
        
        var temp_bl_service_array = document.getElementsByName("bl_service_sel_"+tr_j);
        
        if(temp_bl_service_value.indexOf(",")>0)
        {                                                                       
            for (var i=0;i<temp_bl_service_value.split(",").length ;i++ )
            {
                for(var temp_i = 0; temp_i < temp_bl_service_array.length; temp_i++)
                {
                    if(temp_bl_service_array[temp_i].value == temp_bl_service_value.split(",")[i])
                    {
                        temp_bl_service_array[temp_i].checked = true;
                        break;
                    }
                }
            }    
        }
        else
        {
            for(var temp_i = 0; temp_i < temp_bl_service_array.length; temp_i++)
            {
                if(temp_bl_service_array[temp_i].value == temp_bl_service_value)
                {
                    temp_bl_service_array[temp_i].checked = true;
                    break;
                }
            }
        }
    }
    
    if(document.getElementById('bl_remarkred_'+tr_j).checked)
    {
         bl_remark_fuc(tr_j);
    }
    
}


//添加时候，默认发货地址

var page_sd_default_name = "Chen&nbsp;Wang";
var page_sd_default_tel = "13124935854";
var page_sd_default_address = "8888 LEE AVE.SOUTH EL";
var page_sd_default_code = "888";

var page_ad_default_name = "";
var page_ad_default_code = "";
var page_ad_default_tel = "";
var page_ad_default_tel2 = "";
var page_ad_default_province = "";
var page_ad_default_area = "";
var page_ad_default_address = "";

var page_idc_text = "";
var page_idc_id = "";

 
 if(document.getElementById('action').value=="add")
 {
    for (tr_send=0;tr_send<10 ;tr_send++ )
    {
        document.getElementById("sendaddress_name_"+tr_send).innerHTML=page_sd_default_name;
        document.getElementById("sendaddress_tel_"+tr_send).innerHTML=page_sd_default_tel;
        document.getElementById("sendaddress_address_"+tr_send).innerHTML=page_sd_default_address;
        document.getElementById("sendaddress_code_"+tr_send).innerHTML=page_sd_default_code;
        
        document.getElementById("address_name_"+tr_send).innerHTML=page_ad_default_name;
        document.getElementById("address_code_"+tr_send).innerHTML=page_ad_default_code;
        document.getElementById("address_tel_"+tr_send).innerHTML=page_ad_default_tel;
        document.getElementById("address_tel2_"+tr_send).innerHTML=page_ad_default_tel2;
        document.getElementById("address_province_"+tr_send).innerHTML=page_ad_default_province;
        document.getElementById("address_area_"+tr_send).innerHTML=page_ad_default_area;
        document.getElementById("address_address_"+tr_send).innerHTML=page_ad_default_address;
        
        document.getElementById("yd_idccardID_text_"+tr_send).innerHTML=page_idc_text;
        document.getElementById("yd_idccardID_"+tr_send).value=page_idc_id;
        
    }
 }
 else
 {//查看或者编辑
    var page_full_servicefee = 0;
    var page_full_expressfee = 0;
    
    for (tr_send=0;tr_send<10 ;tr_send++ )
    {
        if(!document.getElementById("bl_isservicefee_"+tr_send).checked)
        {
            if(parseFloat(document.getElementById("bl_servicefee_"+tr_send).value)>0)
            {
                page_full_servicefee = parseFloat(page_full_servicefee) + parseFloat(document.getElementById("bl_servicefee_"+tr_send).value);
            }
        }
        
        if(document.getElementById("bl_issetbox_"+tr_send).checked)
        {
            if(parseFloat(document.getElementById("bl_issetboxfee_"+tr_send).value)>0)
            {
                page_full_servicefee = parseFloat(page_full_servicefee) + parseFloat(document.getElementById("bl_issetboxfee_"+tr_send).value);
            }
        }
        
        if(parseFloat(document.getElementById("bl_fee_"+tr_send).value)>0)
        {
            page_full_expressfee = parseFloat(page_full_expressfee) + parseFloat(document.getElementById("bl_fee_"+tr_send).value);
        }
    }
    
    if(parseFloat(page_full_expressfee)>0)
    {
        document.getElementById("bs_fee_lab").innerHTML = "<font color=red><b>当前业务实际已出总费用："+ (parseFloat(page_full_expressfee) + parseFloat(page_full_servicefee)) +"美元</b></font>";
    }
 
 }
 

 
 function issigndata()
 {
    if(confirm("您确定签收本业务吗？"))
    {
        return true;
    }
    else
    {
        return false;
    }
 }
 
</script> <script type="text/javascript" async="" src="http://back.5ihaitao.com/cnzz.js"></script><script type="text/javascript" async="" src="http://back.5ihaitao.com/cnzz.js"></script><script type="text/javascript">var vglnk = {api_url: '//api.viglink.com/api', key: '084c74521c465af0d8f08b63422103cc'};</script><script type="text/javascript" async="" src="http://cdn.viglink.com/api/vglnk.js"></script><script type="text/javascript">var vglnk = {api_url: '//api.viglink.com/api', key: '084c74521c465af0d8f08b63422103cc'};</script><script type="text/javascript" async="" src="http://cdn.viglink.com/api/vglnk.js"></script></body>
<?php }?>

<?php function display_comman_header($form){

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
																			id="Us_Left_User_NameStr"><?php 
																			$name=utf8_encode ($_SESSION['chinesename']);
																			echo $name;?> 您好！</span>
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
																				<a href="pack_record_form.php" class="MainLeft">自助录入包裹</a>
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
																				<a href="order.php" class="MainLeft">创建普通业务</a>
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
														<td align="left" width="100"><a href="index.html"
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
										display_comman_header($form);
									}
									?>

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
	$form="pack2store.php";
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
										磅&nbsp;&nbsp;此项可保持默认&nbsp;</td>

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

								<tr>
									<td>货物申报：</td>
									<td width="200" colspan="3">
										<table border="1" cellspacing="10" cellpadding="0"
											align="left">
											<tbody>
												<tr>
													<td>物品名称</td>
													<td>数量</td>
													<td>总价</td>
												</tr>
												<tr>
													<td><input name="item1_name" type="text" id="pk_item1"
														maxlength="200" tabindex="2" size="20" border="0"
														class="pic_border"></td>
													<td><input name="item1_num" type="text" id="pk_item1"
														maxlength="200" tabindex="2" size="20" border="0"
														class="pic_border"></td>
													<td><input name="item1_price" type="text" id="pk_item1"
														maxlength="50" tabindex="2" size="20" border="0"
														class="pic_border"></td>
												</tr>
												<tr>
													<td><input name="item2_name" type="text" id="pk_item2_name"
														maxlength="200" tabindex="2" size="20" border="0"
														class="pic_border"></td>
													<td><input name="item2_num" type="text" id="pk_item2_num"
														maxlength="200" tabindex="2" size="20" border="0"
														class="pic_border"></td>
													<td><input name="item2_price" type="text"
														id="pk_item2_price" maxlength="50" tabindex="2" size="20"
														border="0" class="pic_border"></td>
												</tr>
												<tr>
													<td><input name="item3_name" type="text" id="pk_item3_name"
														maxlength="200" tabindex="2" size="20" border="0"
														class="pic_border"></td>
													<td><input name="item3_num" type="text" id="pk_item3_num"
														maxlength="200" tabindex="2" size="20" border="0"
														class="pic_border"></td>
													<td><input name="item3_price" type="text"
														id="pk_item3_price" maxlength="50" tabindex="2" size="20"
														border="0" class="pic_border"></td>
												</tr>
												<tr>
													<td><input name="item4_name" type="text" id="pk_item4_name"
														maxlength="200" tabindex="2" size="20" border="0"
														class="pic_border"></td>
													<td><input name="item4_num" type="text" id="pk_item4_num"
														maxlength="200" tabindex="2" size="20" border="0"
														class="pic_border"></td>
													<td><input name="item4_price" type="text"
														id="pk_item4_price" maxlength="50" tabindex="2" size="20"
														border="0" class="pic_border"></td>
												</tr>
												<tr>
													<td><input name="item5_name" type="text" id="pk_item5_name"
														maxlength="200" tabindex="2" size="20" border="0"
														class="pic_border"></td>
													<td><input name="item5_num" type="text" id="pk_item5_num"
														maxlength="200" tabindex="2" size="20" border="0"
														class="pic_border"></td>
													<td><input name="item5_price" type="text"
														id="pk_item5_price" maxlength="50" tabindex="2" size="20"
														border="0" class="pic_border"></td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<tr height="10"></tr>
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