<?php
//$conn = null;

function Connectsql()
{
    $conn = @mysqli_connect("127.0.0.1:3306", "root", "1656") or die("Database tp5 connection failed: " . mysqli_error());
    if (!$conn)
    {
        echo("<p>Error access to database</p>");
        exit();
    }
}

function add_Lines($fname, $sname, $telephone, $login, $pass)
{
    $conn = @mysqli_connect("127.0.0.1:3306", "root", "1656") or die("Database tp5 connection failed: " . mysqli_error());
    if (!$conn)
    {
        echo("<p>Error access to database</p>");
        exit();
    }

    $my_zap = "INSERT INTO tp5.user (fname, sname, telephone, login, pass) VALUES ('".$fname."','".$sname."','".$telephone."','".$login."','".$pass."')";
    mysqli_query($conn, $my_zap);
    if ($my_zap) echo "Added to database."; else echo "User with this login is exist now!";
}

function View_Lines($str)
{
    $conn = @mysqli_connect("127.0.0.1:3306", "root", "1656") or die("Database tp5 connection failed: " . mysqli_error());
    if (!$conn)
    {
        echo("<p>Error access to database</p>");
        exit();
    }

    $query = 'SELECT '.$str.' FROM tp5.user';
    $result = mysqli_query($conn, $query) or die('Query is not running: '.mysqli_error());
    echo "<table border = 1>\n";
    while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        echo "\t<tr>\n";
        foreach ($line as $col_value) echo "\t\t<td>$col_value</td>\n";    
        echo "\t</tr>\n";
    }
    echo "</table>\n";
    mysqli_free_result($result);
    mysqli_close();
}
function FunctionName($login, $password)
{
    $conn = @mysqli_connect("127.0.0.1:3306", "root", "1656") or die("Database tp5 connection failed: " . mysqli_error());
    if (!$conn)
    {
        echo("<p>Error access to database</p>");
        exit();
    }

    $s = 0;
    $query = 'SELECT fname, login, pass FROM tp5.user';
    $result = mysqli_query($conn, $query) or die('Query is not running: ' . mysqli_error());
        while ( $line = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            if($line['login'] == $login && $line['password'] == $password)
            {
                $_SESSION['name'] = $line['nam'];
                $_SESSION['login'] = $line['login'];
                echo '<html><head><title>Redirect</title><meta http-equiv="Refresh" content="1; URL=message.php"></head><body></body></html>';
                $s = 1;
                break;
            }
        }
        if($s==0) echo "User with this login doesn't exist!";
}
function deleteName($value='')
{
    $conn = @mysqli_connect("127.0.0.1:3306", "root", "1656") or die("Database tp5 connection failed: " . mysqli_error());
    if (!$conn)
    {
        echo("<p>Error access to database</p>");
        exit();
    }

    $my_zap = "DELETE FROM tp5.user WHERE login ='".$value."'";
    mysqli_query($conn, $my_zap);
}
?>
