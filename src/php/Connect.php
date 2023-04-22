<?php
$connect = mysqli_connect(
	'localhost',
	'root',
	'',
	'Char_List');

if (!$connect) {
	die("Не получилось подключиться к базе данных");
}
