<?php
class Database{

public $host = DB_HOST;
public $user = DB_USER;
public $pass = DB_PASS;
public $name = DB_NAME;

public $link;
public $error;

private function connectDB()
{
	$this->link = new mysqli($this->host,$this->user,$this->pass,$this->name);

	if (!$this->link) {
		$this->error ="Connection failed".$this->link->connect_error;
	}
}
}
?>