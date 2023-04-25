<?php

namespace App\Page;

class Page_manage
{
	public array $page_list;
	
	
	public function add_page($name, $object): void
	{
		$this->page_list[] = [$name => $object];
	}
	
	public function show_page_list(): void
	{
		echo "<pre>";
		print_r($this->page_list);
		echo "<pre/>";
	}
	public function switcher():void {
		if (isset($_GET["page"])) {
			switch ($_GET["page"]) {
				case 1:
					include_once "../src/pages/home.php";
					break;
				case 2:
					include_once "../src/pages/create-char-form.php";
					break;
				case 3:
					include_once "../src/pages/table.php";
					break;
			}
			
		} else include_once "../src/pages/home.php";
	}
	
}