<?php
include_once "../DatabaseHandler.php";
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$selectedRow = $db_Char_List->select(
		'*',
		'Hero_prop',
		"`id` = '$id'");
	
	print_r($selectedRow);
}
