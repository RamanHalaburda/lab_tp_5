<?php
	error_reporting(0);
	session_start();
	include 'class.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Administration</title>
</head>
<body>
<center>
    <hr><h1>Delete User</h1>
    <form method="post">
        Login:
        <input type="text" name="logdel">
        <input type="submit" name="userdel" value="Delete user by login">
    </form>
<br>
    <hr><h1>Delete Message</h1>
    <form method="post">
        ID:
        <input type="text" name="mesdel">
        <input type="submit" name="messagedel" value="Delete message by id">
    </form><hr></center>
<?php
$admin = new Admin();
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
if(isset($_POST['userdel'])){
    $admin->DeleteName($_POST['logdel']);
}
if(isset($_POST['messagedel'])){
    $admin->DeleteMessage($_POST['mesdel']);
}
?>
</body>
</html>