<?php
include 'connectionMySQL.php';
class Guest
{
	var $fname;
	var $sname;
	var $telephone;
	var $login;
	var $password;

	function construct($fname, $sname, $telephone, $login, $pass)
	{
		$this->fname = $fname;
		$this->sname = $sname;
		$this->telephone = $telephone;
		$this->login = $login;
		$this->password = $pass;
	}

	function GetUser()
	{
		echo $this->name." ".$this->firstname."
		 ".$this->telephone." ".$this->login." ".$this->pass;
	}

	function ZapBase($fname, $sname, $telephone, $login, $pass)
	{
		add_Lines($this->$fname, $this->$sname, $this->$telephone, $this->$login, $this->$pass);
	}

	function returnDataBase($str)
	{
		View_Lines($str);
	}
}

class User extends Guest
{
	function ZapBase($fname, $sname, $telephone, $login, $pass)
	{
		add_Lines($fname, $sname, $telephone, $login, $pass);
	}

	function authorization($LOGIN, $PASSWORD)
	{
		FunctionName($LOGIN, $PASSWORD);
	}

	function DeleteName($value)
	{
		deleteName($value);
	}
}

class Admin extends Guest
{
    function ZapBase($fname, $sname, $telephone, $login, $pass)
    {
        add_Lines($fname, $sname, $telephone, $login, $pass);
    }

    function authorization($LOGIN, $PASSWORD)
    {
        AdminLogIn($LOGIN, $PASSWORD);
    }

    function DeleteName($value)
    {
        deleteName($value);
    }
}
?>

