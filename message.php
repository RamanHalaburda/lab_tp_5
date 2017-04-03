<?php
	error_reporting(0); 
	session_start();
	include 'class.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
</head>
<body>
<center><form method="post">
	Message: <br><textarea cols="50" rows="5" name="text1"></textarea><br>
	<input type="submit" name="zap">
	<input type="submit" name="open" value="View messages"><br><br>
	<input type="text" name="logdel">
	<input type="submit" name="del" value="Delete by login">
</form></center>
<br>
<?php
	$saveUser = new saveUser();
	if(isset($_POST['zap']))
	{
 		$text11 = $_POST['text1'];

        $conn = @mysqli_connect("127.0.0.1:3306", "root", "1656") or die("Database tp5 connection failed: " . mysqli_error());
        if (!$conn)
        {
            echo("<p>Error access to database</p>");
            exit();
        }

 		$my_zap = "UPDATE tp5.user SET message = '".$text11."' WHERE login = '".$_SESSION['login']."'";
		mysqli_query($conn, $my_zap);
		if ($my_zap) echo "Added with success!"; else echo "Error, isn't added!";
 	}
 	if(isset($_POST['open'])){
 		$saveUser->returnDataBase("fname,sname,telephone,login,pass,message");
 	}
 	if(isset($_POST['del'])){
 		$saveUser->DeleteName($_POST['logdel']);
 	}
?>
</body>
</html>

