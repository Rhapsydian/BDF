<?php
require_once "views/MainView.php";
require_once "models/MainModel.php";
	
$view = new MainView();
$model =  new MainModel("mysql:host=localhost;dbname=bdf1403;","root","");

$view->showHeader("Your Community Garden");

$view->showIndexPlants($model->getPlantsAll());

$view->showFooter();
?>