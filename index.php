<!DOCTYPE html>
<html>
<head>
	<title>Log On</title>
</head>
<body>
<center><h2>Log On</h2>
	<form method="post" name="form">
		Имя: <input name="fname"><br>
		Фамилия: <input name="sname"><br>
		Телефон: <input name="telephone"><br>
		Логин: <input name="login"><br>
		Пароль:	<input name="pass" type="password"><br>
		<input name="sub" type="submit">
		<a href="authorization.php">Log In</a><br>
    </form>
    </center>
<?php
	include 'class.php';
	$user = new MyUser;
	$saveUser = new saveUser();
	if(isset($_POST['sub'])){
		$saveUser->ZapBase($_POST['fname'], $_POST['sname'], $_POST['telephone'], $_POST['login'],$_POST['pass']);
	}
?>
</body>
</html>
