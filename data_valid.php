<?php

//the form valid check
function filled_out($form){
	foreach ($form as $key => $value){
		if((!isset($key) || ($value == ''))){
			return false;
		}
	}
	return true;	
}

//check the email format
function valid_email($email){
  if(ereg('^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9]+\.[a-zA-Z0-9\-]+$',$email)){
  	return true;
  }
  else 
  	return false;
}

?>