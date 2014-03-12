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
<script type="text/javascript" src="javascript/order.js"></script>
<script type="text/javascript">
 //为了节省代码暂时把通过class获得对象弄成一个方法
 function $(eve){
 return document.getElementsByClassName(eve);
 }
 //打开下拉菜单
 function openlist(i){
 var objdiv=$("li");
 objdiv[i].style.display="";
 }
 //关闭下拉菜单
 function closelist(i){
 var objdiv=$("li");
 objdiv[i].style.display="none";
 }

</script>
</head>
<?php 
}
?>

<?php function display_comman_header($form){

	?>
<body topmargin="0" leftmargin="0">

	<form name="form1" method="post" action=<?php echo $form?> id="form1">

		<div>
			<table cellspacing="0" cellpadding="0" width="100%" border="0"
				bgcolor="#ffffff">
				<tbody>

					<tr>
						<td valign="top" width="*">
							<table cellspacing="0" cellpadding="0" width="100%" border="0">


								<tbody>

									<tr>
										<td height="44" colspan="2"  valign="middle">

											<div id="header" style="padding: 0; margin: 0; width: 100%;">
												<div
													style="width: 100%; height: 25; float: left; background-color: white"></div>
												<div
													style="width: 400; height: 100; float: left; background-color: green">
													<a href="test.php"><img alt="" src="img/logo.jpg"> </a>
												</div>
												<div
													style="width: 200; height: 100; float: left; background-color: yellow">
													<a href="index/index.html"><img alt="" src="img/shouye.jpg"> </a>
												</div>
												<div
													style="width: 200; height: 100; float: left; background-color: blue">
													<a href="http://www.google.com"><img alt=""
														src="img/aboutus.jpg"> </a>
												</div>
												<div
													style="width: 200; height: 100; float: left; background-color: pink">
													<a href="http://www.google.com"><img alt=""
														src="img/fahuo.jpg"> </a>
												</div>
												<div
													style="width: 200; height: 100; float: left; background-color: black">
													<a href="http://www.google.com"><img alt=""
														src="img/contact.jpg"> </a>
												</div>
											</div>
										</td>
									</tr>
									<tr  style="background-color: #6495ed">
										<td>
											<div>
												<ul class="list">
													<li onmouseover="openlist(0)" class="ul"
														onmouseout="closelist(0)"><label>包裹中心</label>
														<ul class="li" style="display: none">
															<li><a href="pack_record_form.php">自助录入包裹</a></li>
															<li><a href="pkg_check.php">包裹信息</a></li>
														</ul>
													</li>
													<li onmouseover="openlist(1)" class="ul"
														onmouseout="closelist(1)"><label>业务-运单-管理</label>
														<ul class="li" style="display: none">
															<li><a href="order.php">创建普通业务</a></li>
														</ul>
													</li>
													<li onmouseover="openlist(2)" class="ul"
														onmouseout="closelist(2)"><label>账户信息</label>
														<ul class="li" style="display: none">
															<li><a href="myinfo.php">我的信息</a></li>
															<li><a href="order.php">修改密码</a></li>
														</ul>
													</li>
													<li onmouseover="openlist(3)" class="ul"
														onmouseout="closelist(3)"><label>财务管理</label>
														<ul class="li" style="display: none">
															<li>余额充值</li>
														</ul>
													</li>
												</ul>
											</div>
										</td>
									</tr>
									<?php 
}?>