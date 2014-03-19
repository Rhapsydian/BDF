<?php
require_once "views/MainView.php";
require_once "models/db.php";
require_once "models/MainModel.php";
	
$view = new MainView();
$model = new MainModel(DB_HOST,DB_USER,DB_PASS);

$view->showHeader("Your Community Garden");

$view->showPlants($model->getPlantsAll());

$view->showFooter();
?>