<!DOCTYPE html>
<html>
<head>
	<title>Log On</title>
</head>
<body>
<center><h2>Log On</h2>
	<form method="post" name="form">
		First Name: <input name="fname"><br>
		Second Name: <input name="sname"><br>
		Telephone: <input name="telephone"><br>
		Login: <input name="login"><br>
		Password:	<input name="pass" type="password"><br>
		<input name="sub" type="submit">
		<a href="authorization.php">Log In</a><br>
    </form>
    </center>
<?php
	include 'class.php';
	$guest = new Guest();
	$ser = new User();
	if(isset($_POST['sub']))
	{
		$User->ZapBase($_POST['fname'], $_POST['sname'], $_POST['telephone'], $_POST['login'],$_POST['pass']);
	}
?>
</body>
</html>
