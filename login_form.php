<?php
require_once 'include.php';



try{
	display_login_form();
}catch(Exception $e){
	do_html_header('login error!');
	echo $e->getMessage();
	exit();
}
?>

