<?php
	error_reporting(0); 
	session_start();
	include 'class.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
</head>
<body>
<center><h3>Log In</h3>
<form method="post">
	Login: <input type="text" name="login"><br>
	Password: <input type="password" name="pass"><br>
	<input type="submit" name="inp" value="Log In">
	<a href="index.php">Log On </a>
</form></center>
<?php
	$LOGIN = $_POST['login'];
	$PASSWORD = $_POST['pass'];
	$saveUser = new saveUser();
	if(isset($_POST['inp']))
	{
		$saveUser->authorization($LOGIN, $PASS);
	}
?>
</body>
</html>
