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
		<th>hp тек/макс</th>
		<th>Возраст</th>
	</tr>
	<?php
	require_once "./src/php/Connect.php";
	$char_list = mysqli_query($connect, "SELECT * FROM `Hero_prop`");
	$char_list = mysqli_fetch_all($char_list);
	
	
	foreach ($char_list as $item) { ?>
		<tr>
			<td> <?= $item[0] ?></td>
			<td> <?= $item[1] ?></td>
			<td> <?= $item[2] ?></td>
			<td> <?= $item[3] ?></td>
			<td> <?= $item[4] ?></td>
			<td> <?= $item[5] ?></td>
			<td> <?= $item[6] ?></td>
			<td> <?= $item[7] ?></td>
			<td> <?= $item[8]. ' / '.$item[9] ?></td>
			<td> <?= $item[10] ?></td>
			<td> <button><a href='../src/php/edit_form.php?id=<?=$item[0]?>'>edit</a></button></td>
			<td> <button><a href='../src/php/edit_form.php?id=<?=$item[0]?>'>del</a></button></td>
		</tr>
	<?php } ?>
</table>
