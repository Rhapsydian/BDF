<?php
require "views/Mainview.php";
	
$view = new MainView();

$view->showHeader("Your Community Garden");

echo "Hello World";
	
$view->showFooter();
	
?>