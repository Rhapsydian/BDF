<?php
require_once "views/MainView.php";
require_once "models/db.php";
require_once "models/MainModel.php";
require_once "controllers/SessionController.php";

$view = new MainView();
$model = new MainModel(DB_HOST,DB_USER,DB_PASS);
$control = new SessionController();

$control->userArea(2); //must be a super user or higher

$model->userRemove($_GET['id']);

$control->redirect("userAdmin.php");

?>