function pack_sel(pid, weight) {
	var weightstr = 0;
	var idstr="";
	if (document.getElementById("pack_" + pid).checked) {
		// document.getElementById("pack_weight").value=weight;
		weightstr = document.getElementById("pack_weight").value;
		document.getElementById("pack_weight").value = parseFloat(weightstr)
				+ parseFloat(weight);
		document.getElementById("pack_all").value = document
				.getElementById("pack_all").value
				+ pid + ",";
	}
	else {
		// document.getElementById("pack_weight").value=weight;
		weightstr = document.getElementById("pack_weight").value;
		idstr=document.getElementById("pack_all").value;
		document.getElementById("pack_weight").value = parseFloat(weightstr)
				- parseFloat(weight);
		idstr=idstr.replace(pid+",","");
		document.getElementById("pack_all").value=idstr;
		
	}
}

function setbillshow(boxnumstr) {
	for (box_i = 0; box_i < 10; box_i++) {
		if (document.getElementById('trbill_' + box_i) != null) {
			document.getElementById('trbill_' + box_i).style.display = "none";
			// document.getElementById('bl_billdel_' + box_i).value = "1";

			document.getElementById('tr_tip_' + box_i).style.display = "none";
		}
	}

	for (box_i = 0; box_i < boxnumstr; box_i++) {
		document.getElementById('trbill_' + box_i).style.display = "";
		// document.getElementById('bl_billdel_' + box_i).value = "0";

		document.getElementById('tr_tip_' + box_i).style.display = "";
	}
}

function setboxtype(temp) {
	if (document.getElementById('pack_all').value != "") {
		if (temp == "1"
				&& document.getElementById('pack_all').value.split(",").length < 3) {
			alert("至少选择两个箱子");

			// var temp_type_radio =
			// document.getElementsByName("bx_type_radio");
			//            
			// for (temp_i=0;temp_i<temp_type_radio.length ;temp_i++ )
			// {
			// if(temp_type_radio[temp_i].value ==
			// document.getElementById('bx_type').value)
			// {
			// temp_type_radio[temp_i].checked = true;
			// break;
			// }
			// }
			return false;
		}

		if (temp == "0"
				&& document.getElementById('pack_all').value.split(",").length > 2) {
			alert("只能选择一个箱子");

			// var temp_type_radio = document.getElementsByName("type_radio");
			//            
			// for (temp_i=0;temp_i<temp_type_radio.length ;temp_i++ )
			// {
			// if(temp_type_radio[temp_i].value ==
			// document.getElementById('type').value)
			// {
			// temp_type_radio[temp_i].checked = true;
			// break;
			// }
			// }
			return false;
		}

		document.getElementById('bx_type').value = temp;

		/*
		 * if(temp=="2") { document.getElementById('boxnum').disabled = false;
		 * 
		 * if(parseInt(document.getElementById('boxnum').value)<2) {
		 * document.getElementById('boxnum').value="2"; } } else {
		 * document.getElementById('boxnum').disabled = true;
		 * 
		 * document.getElementById('boxnum').value="1"; }
		 */
		// setbillshow(document.getElementById('boxnum').value);
		setbillshow("1");
		document.getElementById('text').style.display = "";

		// setfeepage();

		document.getElementById('top').style.display = "";

		// document.getElementById('trbill_0').style.display="";
		// order_form_init();
		// document.getElementById("sendaddress_name_0").innerHTML="test";
		test();
	} else {

		alert("���������������������");
		return false;
	}
}

function test() {
	var page_sd_default_name = document.getElementById('user_firstname').value
			+ "&nbsp" + document.getElementById('user_lastname').value;
	var page_sd_default_tel = document.getElementById('phone').value;
	var page_sd_default_address = "2936 S.UNION.AVE";
	var page_sd_default_code = "60616";

	var page_ad_default_name = "";
	var page_ad_default_code = "";
	var page_ad_default_tel = "";
	var page_ad_default_tel2 = "";
	var page_ad_default_province = "";
	var page_ad_default_area = "";
	var page_ad_default_address = "";

	var page_idc_text = "";
	var page_idc_id = "";
	if (document.getElementById('action').value == "add") {
		for (tr_send = 0; tr_send < 10; tr_send++) {
			document.getElementById("sendaddress_name_" + tr_send).innerHTML = page_sd_default_name;
			document.getElementById("sendaddress_tel_" + tr_send).innerHTML = page_sd_default_tel;
			document.getElementById("sendaddress_address_" + tr_send).innerHTML = page_sd_default_address;
			document.getElementById("sendaddress_code_" + tr_send).innerHTML = page_sd_default_code;

			document.getElementById("address_name_" + tr_send).innerHTML = page_ad_default_name;
			document.getElementById("address_code_" + tr_send).innerHTML = page_ad_default_code;
			document.getElementById("address_tel_" + tr_send).innerHTML = page_ad_default_tel;
			document.getElementById("address_tel2_" + tr_send).innerHTML = page_ad_default_tel2;
			document.getElementById("address_province_" + tr_send).innerHTML = page_ad_default_province;
			document.getElementById("address_area_" + tr_send).innerHTML = page_ad_default_area;
			document.getElementById("address_address_" + tr_send).innerHTML = page_ad_default_address;

			document.getElementById("yd_idccardID_text_" + tr_send).innerHTML = page_idc_text;
			document.getElementById("yd_idccardID_" + tr_send).value = page_idc_id;

		}
	}
}

// function order_form_init(){
// if(document.getElementById('bs_type').value!="")
// {
// var bs_type_radio_array=document.getElementsByName('bs_type_radio');
//                                
// for(var temp_i=0;temp_i<bs_type_radio_array.length;temp_i++)
// {
// if(bs_type_radio_array[temp_i].value==document.getElementById('bs_type').value)
// {
// bs_type_radio_array[temp_i].checked = true;
// break;
// }
// }
//                                
// if(document.getElementById('bs_type').value=="2")
// {
// document.getElementById('bs_boxnum').disabled = false;
// }
// setbillshow(document.getElementById('bs_boxnum').value);
//                                    
// document.getElementById('trbill_top').style.display = "";
// }
//                         
//                         
// //���������������
// for (tr_j=0;tr_j<10 ;tr_j++ )
// {
//    
// if(document.getElementById('bl_deliveryway_'+tr_j).value!="")
// {
// document.getElementById('bl_deliverywaysel_'+tr_j).value =
// document.getElementById('bl_deliveryway_'+tr_j).value;
// }
//    
//    
// var temp_bl_service_value =
// document.getElementById('bl_service_'+tr_j).value;
//    
// if(temp_bl_service_value!="")
// {
//        
// var temp_bl_service_array =
// document.getElementsByName("bl_service_sel_"+tr_j);
//        
// if(temp_bl_service_value.indexOf(",")>0)
// {
// for (var i=0;i<temp_bl_service_value.split(",").length ;i++ )
// {
// for(var temp_i = 0; temp_i < temp_bl_service_array.length; temp_i++)
// {
// if(temp_bl_service_array[temp_i].value ==
// temp_bl_service_value.split(",")[i])
// {
// temp_bl_service_array[temp_i].checked = true;
// break;
// }
// }
// }
// }
// else
// {
// for(var temp_i = 0; temp_i < temp_bl_service_array.length; temp_i++)
// {
// if(temp_bl_service_array[temp_i].value == temp_bl_service_value)
// {
// temp_bl_service_array[temp_i].checked = true;
// break;
// }
// }
// }
// }
//    
// if(document.getElementById('bl_remarkred_'+tr_j).checked)
// {
// bl_remark_fuc(tr_j);
// }
//    
// }

// ���������������������������������

// var page_sd_default_name = <%Session["firstname"];%>
// var page_sd_default_tel = "13124935854";
// var page_sd_default_address = "2936 S.UNION.AVE";
// var page_sd_default_code = "60616";
//
// var page_ad_default_name = "";
// var page_ad_default_code = "";
// var page_ad_default_tel = "";
// var page_ad_default_tel2 = "";
// var page_ad_default_province = "";
// var page_ad_default_area = "";
// var page_ad_default_address = "";
//
// var page_idc_text = "";
// var page_idc_id = "";
//
// //if(document.getElementById('action').value=="add"){
// document.getElementById("sendaddress_name_0").innerHTML=page_sd_default_name;
// //}
// }
/*
 * if(document.getElementById('action').value=="add") { for (tr_send=0;tr_send<10
 * ;tr_send++ ) {
 * document.getElementById("sendaddress_name_"+tr_send).innerHTML=page_sd_default_name;
 * document.getElementById("sendaddress_tel_"+tr_send).innerHTML=page_sd_default_tel;
 * document.getElementById("sendaddress_address_"+tr_send).innerHTML=page_sd_default_address;
 * document.getElementById("sendaddress_code_"+tr_send).innerHTML=page_sd_default_code;
 * 
 * document.getElementById("address_name_"+tr_send).innerHTML=page_ad_default_name;
 * document.getElementById("address_code_"+tr_send).innerHTML=page_ad_default_code;
 * document.getElementById("address_tel_"+tr_send).innerHTML=page_ad_default_tel;
 * document.getElementById("address_tel2_"+tr_send).innerHTML=page_ad_default_tel2;
 * document.getElementById("address_province_"+tr_send).innerHTML=page_ad_default_province;
 * document.getElementById("address_area_"+tr_send).innerHTML=page_ad_default_area;
 * document.getElementById("address_address_"+tr_send).innerHTML=page_ad_default_address;
 * 
 * document.getElementById("yd_idccardID_text_"+tr_send).innerHTML=page_idc_text;
 * document.getElementById("yd_idccardID_"+tr_send).value=page_idc_id;
 *  } }
 * 
 * else {// ������������������ var page_full_servicefee = 0; var
 * page_full_expressfee = 0;
 * 
 * for (tr_send=0;tr_send<10 ;tr_send++ ) {
 * if(!document.getElementById("bl_isservicefee_"+tr_send).checked) {
 * if(parseFloat(document.getElementById("bl_servicefee_"+tr_send).value)>0) {
 * page_full_servicefee = parseFloat(page_full_servicefee) +
 * parseFloat(document.getElementById("bl_servicefee_"+tr_send).value); } }
 * 
 * if(document.getElementById("bl_issetbox_"+tr_send).checked) {
 * if(parseFloat(document.getElementById("bl_issetboxfee_"+tr_send).value)>0) {
 * page_full_servicefee = parseFloat(page_full_servicefee) +
 * parseFloat(document.getElementById("bl_issetboxfee_"+tr_send).value); } }
 * 
 * if(parseFloat(document.getElementById("bl_fee_"+tr_send).value)>0) {
 * page_full_expressfee = parseFloat(page_full_expressfee) +
 * parseFloat(document.getElementById("bl_fee_"+tr_send).value); } }
 * 
 * if(parseFloat(page_full_expressfee)>0) {
 * document.getElementById("bs_fee_lab").innerHTML = "<font color=red><b>������������������������������������"+
 * (parseFloat(page_full_expressfee) + parseFloat(page_full_servicefee))
 * +"������</b></font>"; }
 */


function select_SendAddress(tempbillnum) {

	var sFeatures = "dialogHeight:350px;dialogWidth:950px;dialogTop:10px;dialogLeft:10px;help:no;status:no;scroll:auto;resizable:yes;dialogHide:1 ";
	var returnsendaddress = window.showModalDialog("sel_sd_address.php"," ",sFeatures);

	if (returnsendaddress != null) {
		document.getElementById("sendaddress_name_" + tempbillnum).innerHTML = returnsendaddress[0];
		document.getElementById("sendaddress_tel_" + tempbillnum).innerHTML = returnsendaddress[1];
		document.getElementById("sendaddress_address_" + tempbillnum).innerHTML = returnsendaddress[2];
		document.getElementById("sendaddress_code_" + tempbillnum).innerHTML = returnsendaddress[3];
		document.getElementById("yd_sendaddressID_" + tempbillnum).value = returnsendaddress[4];
	}

}

function input_Address(tempbillnum) {

	var sFeatures = "dialogHeight:300px;dialogWidth:700px;dialogTop:10px;dialogLeft:10px;help:no;status:no;scroll:auto;resizable:yes;dialogHide:1 ";
	var retVal = window.showModalDialog("rec_address_fm.html"," ", sFeatures);

	if (retVal != null) {
		document.getElementById("address_name_" + tempbillnum).innerHTML = retVal.rec_name;
		document.getElementById("address_province_" + tempbillnum).innerHTML = retVal.prov
		document.getElementById("address_area_" + tempbillnum).innerHTML = retVal.city;
		document.getElementById("address_tel_" + tempbillnum).innerHTML = retVal.tel;
		document.getElementById("address_tel2_" + tempbillnum).innerHTML = retVal.tel2;
		document.getElementById("address_address_" + tempbillnum).innerHTML = retVal.address;
		document.getElementById("address_code_" + tempbillnum).innerHTML = retVal.zip;

		document.getElementById("yd_addressID_" + tempbillnum).value = retVal[7];
	}

}



function select_rec_address(tempbillnum) {

	var sFeatures = "dialogHeight:350px;dialogWidth:950px;dialogTop:10px;dialogLeft:10px;help:no;status:no;scroll:auto;resizable:yes;dialogHide:1 ";
	var returnaddress = window.showModalDialog("sel_rec_address.php"," ", sFeatures);

	if (returnaddress != null) {
		document.getElementById("address_name_" + tempbillnum).innerHTML = returnaddress[0];
		document.getElementById("address_province_" + tempbillnum).innerHTML = returnaddress[1];
		document.getElementById("address_area_" + tempbillnum).innerHTML = returnaddress[2];
		document.getElementById("address_tel_" + tempbillnum).innerHTML = returnaddress[3];
		document.getElementById("address_tel2_" + tempbillnum).innerHTML = returnaddress[4];
		document.getElementById("address_address_" + tempbillnum).innerHTML = returnaddress[5];
		document.getElementById("address_code_" + tempbillnum).innerHTML = returnaddress[6];

		document.getElementById("yd_addressID_" + tempbillnum).value = returnaddress[7];

		if (returnaddress[8] != "" && returnaddress[9] != ""
				&& returnaddress[9] != "0") {
			document.getElementById("yd_idccardID_text_" + tempbillnum).innerHTML = returnaddress[8];

			document.getElementById("yd_idccardID_" + tempbillnum).value = returnaddress[9];
		}
	}

}

function selIDC(tempbillnum) {

	var sFeatures = "dialogHeight:350px;dialogWidth:950px;dialogTop:10px;dialogLeft:10px;help:no;status:yes;scroll:auto;resizable:yes;dialogHide:1 ";

	var returnIdcCard = window
			.showModalDialog(
					"Us_Alert.asp?isuser=1&url=Us_YundanSelIDCard&seluserno=02089&blno="
							+ document.getElementById("bl_no_" + tempbillnum).innerHTML
							+ "&curidccardselid="
							+ document.getElementById("yd_idccardID_"
									+ tempbillnum).value, " ", sFeatures);

	if (returnIdcCard != null) {
		document.getElementById("yd_idccardID_text_" + tempbillnum).innerHTML = returnIdcCard[0];

		document.getElementById("yd_idccardID_" + tempbillnum).value = returnIdcCard[1];
	}
}


function input_SendAddress(tempbillnum) {
    
    var   sFeatures   = "dialogHeight:250px;dialogWidth:690px;dialogTop:10px;dialogLeft:10px;help:no;status:no;scroll:auto;resizable:yes;dialogHide:1 " ;
    var retVal=window.showModalDialog( "save_sd_fm.html","",sFeatures);
        if(retVal!=null)
        {          
            document.getElementById("sendaddress_name_"+tempbillnum).innerHTML=retVal.firstname+"&nbsp"+retVal.lastname;
            document.getElementById("sendaddress_tel_"+tempbillnum).innerHTML=retVal.tel;
            document.getElementById("sendaddress_address_"+tempbillnum).innerHTML=retVal.add;
            document.getElementById("sendaddress_code_"+tempbillnum).innerHTML=retValcode;           
            document.getElementById("yd_sendaddressID_"+tempbillnum).value=retVal[4];
        }
 
    }
