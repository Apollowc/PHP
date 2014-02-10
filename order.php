<?php
require_once 'include.php';


try{
	session_start();
	display_order_form();
}catch(Exception $e){
	do_html_header('login error!');
	echo $e->getMessage();
	exit();
}
?>