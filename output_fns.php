<?php
	function do_html_header($title) {
?>

	<html>
	<head>
		<title><?php echo $title?></title>
		<style>
		  body {font-family: Arial, Helvetica, sans-serif; font-size: 13px}
		  li, td {font-family: Arial, Helvetica, sans-serif; font-size: 13px}
		  hr {color: #3333cc; width: 300px; text-align: left}
		  a {color: #000000}
		</style>
	</head>
	<body>
		<img alt="PHPbookmark logo" src="bookmark.gif" border="0" align="left" height="55" width="57"/>
		<h1>PHPbookmark</h1>
		<hr />
	</body>
 	</html> 
<?php 
	if($title) {
// 		do_html_heading($title);
	}	
}
?>


<?php
	function do_html_url($url,$title) {
		
?>
  <a href="<?php echo $url?>"><?php echo $title?></a>
<?php 

	}	
?>


<!--  diplay the login form-->
<?php 
	function display_login_form() {
?>

	<html>
	<body>
		Members Login here: <br>
		<form action="valid_user.php" method="post">
			Username: <input type="text" name="username" ><br>
			Password: <input type="password" name="password" value="" /><br>
			<input type="submit" value="Login"/><br>
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
		Register here: <br>
		<form action="register_new.php" method="post">
			Email address: <input type="text" name="email" "><br>
			Preferred username: <input type="text" name="username" ><br>
			(max 16 chars) <br>
			Password: <input type="password" name="password1" value=""><br>
			Confirm password: <input type="password" name="password2"><br>
			<input type="submit" value="Submit">
		</form>
	</body>
	</html>
<?php 
	}
?>





