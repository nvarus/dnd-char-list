<?php
class Character
{
	private string $username;
	private string $password;
	private string $database;
	private object $connect;
	
	function __construct($username, $password, $database) {
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
		$this->openConnection();
	}
	// метод для подключения к бд
	function openConnection(): void {
		$this->connect = mysqli_connect(
			'localhost', $this->username, $this->password, $this->database);
		
		if (!$this->connect) {
			die("Не получилось подключиться к базе данных");
		}
	}
	// получение данных их таблицы
	function select($what, $from):array {
		$fetched = []; // массив для хранения списка персонажей
		$sql = 'SELECT '. $what. ' FROM '.$from; // текст SQL запроса
		
		// todo тут добавить WHERE
		// todo тут добавить ORDER BY
		
		$query = mysqli_query($this->connect, $sql);
		return mysqli_fetch_all($query);
	}
}
// подключаемся к БД
$char_db = new Character('root', '', 'Char_List');



