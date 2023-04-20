<?php

class Connect
{
	private $connect;
	private $database;
	
	
	function __construct($username, $password, $database) {
		$this->database = $database;
		$this->connect = mysqli_connect("hostname", $username, $password, $database);
	}
	
	function create($table, $fields, $values) {
		mysqli_query($this->connect,
		"INSERT INTO $table (...$fields)
				VALUES (...$values)"
		);
	}
	function read($table) {
		$data = mysqli_query($this->connect, "SELECT * FROM $table");
		$data = mysqli_fetch_all($data);
		return $data;
	}
	
	
}

$connect = new Connect("root", "", "Char_List");