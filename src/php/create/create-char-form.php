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

<form action="/src/php/create/create-char-handler.php" method="post">
	<div class="first-prop">
		<input name="char-name" type="text" placeholder="Имя персонажа">
		<input name="char-race" type="text" placeholder="Раса">
		<input name="char-class" type="text" placeholder="Класс">
	</div>
	<div class="second-prop">
		<input name="level" type="number" placeholder="Уровень">
		<input name="armor-class" type="number" placeholder="КД">
		<input name="speed" type="number" placeholder="Скорость">
		<input name="initiative" type="number" placeholder="Инициатива">
		<input name="curr-hit-point" type="number" placeholder="Здоровье тек">
		<input name="max-hit-point" type="number" placeholder="Здоровье макс">
		<input name="age" type="number" placeholder="Возраст">
	</div>
	<div class="btn">
		<button id="basic-prop-submit" type="submit">Создать персонажа</button>
	</div>
</form>

</body>
</html>
