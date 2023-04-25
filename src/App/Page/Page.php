<?php

namespace App\Page;

class Page
{
	public string $name_page;
	public string $file_name;
	public string $path;
	
	public function __construct($name_page, $path, $pl)
	{
		$this->name_page = $name_page;
		$this->file_name = $name_page . ".php";
		$this->path = $path;
		$this->add_page_in_list($pl);
	}
	
	public function page_include($connect_type = "include_once"): void
	{
		switch ($connect_type) {
			case "require_once":
				require_once "$this->path";
				break;
			default:
				include_once "$this->path";
				break;
		}
	}
	
	
	private function add_page_in_list($page_list): void
	{
		$page_list->add_page($this->name_page, $this);
	}
}