<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
    <style>
        .specifications{
            width: 350px;
        }
        .specWrap{
            display: flex;
            border: 1px solid brown;
            margin: 5px;
        }
        .skills{
            display: flex;
            flex-direction: column;
            margin-left: 5px;
            padding: 5px;
        }
        .spec{
            width: 130px;
            height: 130px;
            text-align: center;
            font-size: 60px;
            
        }

    </style>
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

    <div class="specifications">
        <h4>Сила</h4>
        <div class="specWrap">
            <div>
                <input class="spec" type="number" id="strength">
            </div>
            <div class="skills">
                <div>
                    <input type="checkbox" id="strSaveThrow">Спасбросок
                </div>
                <div>
                    <input type="checkbox" id="athletics">Атлетика
                </div>
                <div>
                    <input type="checkbox" id="intimidation">Запугивание
                </div>
            </div>
        </div>
        <h4>Ловкость</h4>
        <div class="specWrap">
            <div>
                <input class="spec" type="number" id="agility">
            </div>
            <div class="skills">
                <div>
                    <input type="checkbox" id="aglSaveThrow">Спасбросок
                </div>
                <div>
                    <input type="checkbox" id="acrobatics">Акробатика
                </div>
                <div>
                    <input type="checkbox" id="dexterity">Ловкость рук
                </div>
                <div>
                    <input type="checkbox" id="stealth">Скрытность
                </div>
            </div>
        </div>
        <h4>Телосложение</h4>
        <div class="specWrap">
            <div>
                <input class="spec" type="number" id="stamina">
            </div>
            <div class="skills">
                <div>
                    <input type="checkbox" id="stmSaveThrow">Спасбросок
                </div>
            </div>
        </div>
        <h4>Интеллект</h4>
        <div class="specWrap">
            <div>
                <input class="spec" type="number" id="intelligence">
            </div>
            <div class="skills">
                <div>
                    <input type="checkbox" id="intSaveThrow">Спасбросок
                </div>
                <div>
                    <input type="checkbox" id="magic">Магия
                </div>
                <div>
                    <input type="checkbox" id="history">История
                </div>
                <div>
                    <input type="checkbox" id="analysis">Анализ
                </div>
                <div>
                    <input type="checkbox" id="nature">Природа
                </div>
                <div>
                    <input type="checkbox" id="religion">Религия
                </div>
            </div>
        </div>
        <h4>Мудрость</h4>
        <div class="specWrap">
            <div>
                <input class="spec" type="number" id="wisdom">
            </div>
            <div class="skills">
                <div>
                    <input type="checkbox" id="wisSaveThrow">Спасбросок
                </div>
                <div>
                    <input type="checkbox" id="animalCare">Уход за животными
                </div>
                <div>
                    <input type="checkbox" id="insight">Проницательность
                </div>
                <div>
                    <input type="checkbox" id="medicine">Медицина
                </div>
                <div>
                    <input type="checkbox" id="attentiveness">Внимательность
                </div>
                <div>
                    <input type="checkbox" id="survival">Выживание
                </div>
            </div>
        </div>
        <h4>Харизма</h4>
        <div class="specWrap">
            <div>
                <input class="spec" type="number" id="charisma">
            </div>
            <div class="skills">
                <div>
                    <input type="checkbox" id="chrSaveThrow">Спасбросок
                </div>
                <div>
                    <input type="checkbox" id="fraud">Обман
                </div>
                <div>
                    <input type="checkbox" id="intimidation">Запугивание
                </div>
                <div>
                    <input type="checkbox" id="performance">Выступление
                </div>
                <div>
                    <input type="checkbox" id="Conviction">Убеждение
                </div>
            </div>
        </div>

    </div>


	<div class="btn">
		<button id="basic-prop-submit" type="submit">Создать персонажа</button>
	</div>
</form>

</body>
</html>
