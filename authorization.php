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
	<input type="submit" name="inp" value="Log In"><br>
    <input type="submit" name="admin" value="I am administrator">
	<a href="index.php">Log On</a>
</form></center>
<?php
	$LOGIN = $_POST['login'];
	$PASS = $_POST['pass'];
	if(isset($_POST['inp']))
	{
        $user = new User();
		$user->authorization($LOGIN, $PASS);
	}
    if(isset($_POST['admin']))
    {
        $admin = new Admin();
        $admin->authorization($LOGIN, $PASS);
    }
?>
</body>
</html>
