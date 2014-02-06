<?php
require_once 'include.php';


do_html_header("login");

try{
	display_login_form();
}catch(Exception $e){
	do_html_header('login error!');
	echo $e->getMessage();
	exit();
}
?>

