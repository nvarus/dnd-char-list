<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Лист персонажа D&D</title>
	  <script defer type="text/javascript" src="./src/js/script.js"></script>
	  
	  <style>
			
	  </style>
  </head>
  <body>
      <h1>Character Sheet</h1>
    <div class="content">
    <?php
    // таблица персонажей с table.php
      include_once "./src/php/table.php";
    
		include_once "./src/php/create/create-char-form.php";
    ?>
    </div>
  </body>
</html>