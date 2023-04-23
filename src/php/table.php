<style>
	table {
		border-top: 3px solid SteelBlue;
		border-bottom: 3px solid SteelBlue;
		border-collapse: collapse;
		width: 100%;

	}
	th {
		border-bottom: 3px solid SteelBlue;
		line-height: 32px;
	}
	td {
		border-bottom: 1px solid SteelBlue;
		padding: 5px;
		font-weight: 500;
		text-align: center;
	}
</style>

<table>
	<caption>Ваши персонажи</caption>
	<tr>
		<th>id</th>
		<th>Имя</th>
		<th>Раса</th>
		<th>Класс</th>
		<th>Уровень</th>
		<th>КД</th>
		<th>Скорость</th>
		<th>Инициатива</th>
		<th>hp тек</th>
		<th>hp макс</th>
		<th>Возраст</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php
	include_once "./src/php/DatabaseHandler.php";
	// получаем список персонажей
	$character_list = $db_Char_List->select('*', 'Hero_prop');
	foreach ($character_list as $row) {
		echo "<tr>";
		foreach ($row as $item) {
			echo "<td>$item</td>";
		}
		echo "<td><button><a href='../src/php/edit_form.php?id=$row[0]'>edit</a></button></td>";
		echo "<td><button><a href='../src/php/edit_form.php?id=$row[0]'>delete</a></button></td>";
		echo "</tr>";
	}
	echo "</table>";
	?>

