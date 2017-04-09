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
<center>
    <form method="post">
        <h1>Messages</h1> <br><textarea cols="50" rows="5" name="text1"></textarea><br>
	    <input type="submit" name="zap">
	    <input type="submit" name="open" value="View messages"><br><br>
    </form>    <hr>    <h1>Change profile</h1>
    <form method="post" name="form">
        First Name: <input name="fname"><br>
        Second Name: <input name="sname"><br>
        Telephone: <input name="telephone"><br>
        Password:	<input name="pass" type="password"><br>
        <input name="change" type="submit"><br>
    </form>    <hr>
</center>
<br>
<?php
	$user = new User();
	if(isset($_POST['zap']))
	{
 		$text11 = $_POST['text1'];
        $conn = @mysqli_connect("127.0.0.1:3306", "root", "1656") or die("Database tp5 connection failed: " . mysqli_error());
        if (!$conn)
        {
            echo("<p>Error access to database</p>");
            exit();
        }
        $my_zap = "INSERT INTO tp5.message (login,message) VALUES('".$_SESSION['login']."','$text11');";
		if (mysqli_query($conn, $my_zap)) echo "Added with success!"; else echo "Error, isn't added!";
 	}
 	if(isset($_POST['open']))
 	{
 		$user->returnDataBase("id,login,message");
 	}
    if(isset($_POST['change']))
    {
        $user->changeRecord($_POST['fname'], $_POST['sname'], $_POST['telephone'], $_SESSION['login'],$_POST['pass']);
    }
?>
</body>
</html>

