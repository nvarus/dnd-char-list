<?php
include_once "../Character.php";

if(isset($_POST['char-name'])) {
	$char_db->create('Hero_prop',
	['NULL', $_POST['char-name'], $_POST['char-race'], $_POST['char-class'], $_POST['level'], $_POST['armor-class'],
				$_POST['speed'], $_POST['initiative'], $_POST['curr-hit-point'],  $_POST['curr-hit-point'], $_POST['age']],
	
	['id', 'name', 'race', 'class', 'level', 'armor_class', 'speed', 'initiative', 'current_hp', 'max_hp', 'age']);
}

header('location: /');

