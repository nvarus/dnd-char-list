<?php
/**
 * Обработчик базы данных */
class DatabaseHandler
{
	private string $username;
	private string $password;
	private string $database;
	private mysqli $connect;
	
	function __construct($username, $password, $database)
	{
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
		$this->openConnection();
	}
	
	// метод для подключения к бд
	public function openConnection(): void
	{
		$this->connect = mysqli_connect(
			'localhost', $this->username, $this->password, $this->database);
		
		if (!$this->connect) {
			die("Не получилось подключиться к базе данных");
		}
	}
	
	/**
	 * Получение данных их SQL таблицы
	 * @param string $what Выбрать поля таблицы (* - все)
	 * @param string $from Имя таблицы
	 * @return array
	 */
	public function select(string $what, string $from): array
	{
		$sql = 'SELECT ' . $what . ' FROM ' . $from; // текст SQL запроса
		
		// todo тут добавить WHERE
		// todo тут добавить ORDER BY
		
		$query = mysqli_query($this->connect, $sql);
		return mysqli_fetch_all($query);
	}
	
	/**
	 * Внесение записи в таблицу
	 * @param string $table Имя таблицы
	 * @param array $values Список вносимых значений
	 * @param array|null $columns Список полей таблицы ('NULL' - для ввода null)
	 * @return bool
	 */
	function create(string $table, array $values, array $columns = null): bool
	{
		$insert = 'INSERT INTO ' . $table;
		if ($columns <> null) {
			$insert .= ' (' . join(',', $columns) . ')';
		}
		for ($i = 0; $i < count($values); $i++) {
			if (is_string($values[$i]) && strtolower($values[$i]) <> strtolower("NULL")) {
				// все значения string заключаем в кавычки
				$values[$i] = '"' . $values[$i] . '"';
			}
		}
		$insert .= ' VALUES (' . join(',', $values) . ')'; // разворачиваем массив в строку
		$ins = mysqli_query($this->connect, $insert);
		return (bool)$ins;
	}
}

// подключаемся к БД
$db_Char_List = new DatabaseHandler('root', '', 'Char_List');


