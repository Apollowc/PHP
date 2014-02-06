<?php
require_once 'include.php';
try{
display_package_record();
}
catch(Exception $e){
	do_html_header('pacakge_record_error!');
	echo $e->getMessage();
	exit();
}
?>