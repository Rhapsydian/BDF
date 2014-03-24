<?php
require_once "views/MainView.php";
require_once "models/db.php";
require_once "models/MainModel.php";
require_once "controllers/SessionController.php";

$view = new MainView();
$model = new MainModel(DB_HOST,DB_USER,DB_PASS);
$control = new SessionController();

$control->userArea(2); //must be a super user or higher
$user = $control->getUser();

if(isset($_POST['firstname']) and isset($_POST['lastname']) and isset($_POST['username']) and isset($_POST['password']) and isset($_POST['dob']) and isset($_POST['userStatusID']) and isset($_POST['userTypeId'])) {
	$model->userAdd($_POST);
	$control->redirect('userAdmin.php');
}


$view->show("header",array(
	'pageTitle' => 'Your Community Garden',
	'user' => $user,
));

$view->show("userAdd");


$view->show("footer");

?>