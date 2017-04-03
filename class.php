<?php
include 'connectionMySQL.php';
class MyUser
{
	var $fname;
	var $sname;
	var $telephone;
	var $login;
	var $pass;

	function construct($fname, $sname, $telephone, $login, $pass)
	{
		$this->name = $fname;
		$this->firstname = $sname;
		$this->telefon = $telephone;
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
		Connectsql();
		add_Lines($this->$fname, $this->$sname, $this->$telephone, $this->$login, $this->$pass);
	}

	function returnDataBase($str)
	{
		Connectsql();
		View_Lines($str);
	}
}

class saveUser extends MyUser
{
	function ZapBase($fname, $sname, $telephone, $login, $pass)
	{
		Connectsql();
		add_Lines($fname, $sname, $telephone, $login, $pass);
	}

	function authorization($LOGIN, $PASSWORD)
	{
		Connectsql();
		FunctionName($LOGIN, $PASSWORD);
	}

	function DeleteName($value)
	{
		deleteName($value);
	}
}
?>

