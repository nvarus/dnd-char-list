<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<form action="./handler.php" method="post">
	<div class="first-prop">
		<input id="char-name" type="text" placeholder="Имя персонажа">
		<input id="char-race" type="text" placeholder="Раса">
		<input id="char-class" type="text" placeholder="Класс">
	</div>
	<div class="second-prop">
		<input id="level" type="number" placeholder="Уровень">
		<input id="armor-class" type="number" placeholder="КД">
		<input id="speed" type="number" placeholder="Скорость">
		<input id="initiative" type="number" placeholder="Инициатива">
		<input id="hit-point" type="number" placeholder="Здоровье">
		<input id="age" type="number" placeholder="Возраст">
	</div>
	<div class="btn">
		<button id="basic-prop-submit" type="submit">Создать персонажа</button>
	</div>
</form>

</body>
</html>
