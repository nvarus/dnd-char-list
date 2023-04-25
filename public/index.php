<?php
namespace App;
require_once "../vendor/autoload.php";

// Classes
use App\Crud\Crud;
use App\Page\Page;
use App\Page\Page_manage;

$db_Char_List = new Crud('root', '', 'Char_List');
$page_list = new Page_manage();
$main_menu = new Page("main_menu", "../src/pages/main_menu.php", $page_list);
$table = new Page("table", "../src/pages/table.php", $page_list);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Лист персонажа D&D</title>
	<style>
		html {
			--main-color: SteelBlue;
		}
	</style>
	<script defer type="text/javascript" src="../src/js/script.js"></script>
</head>

<body>
<div class="content">
	<nav class="nav-menu">
		<?php
			$main_menu->page_include();
		?>
	</nav>
</div>
<div class="content">
	<?php
		$page_list->switcher();
	?>
</div>
</body>
</html>