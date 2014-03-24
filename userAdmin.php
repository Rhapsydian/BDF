<?php
require_once "views/MainView.php";
require_once "models/db.php";
require_once "models/MainModel.php";
require_once "controllers/SessionController.php";

$view = new MainView();
$model = new MainModel(DB_HOST,DB_USER,DB_PASS);
$control = new SessionController();

$control->userArea(2);
$user = $control->getUser();


#$view->showHeader("Your Community Garden");
$view->show("header",array(
	'pageTitle' => 'Your Community Garden',
	'user' => $user,
));

var_dump($model->getUsersAll());

$view->show("footer");

?>