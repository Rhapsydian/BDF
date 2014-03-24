<?php
require_once "views/MainView.php";
require_once "models/db.php";
require_once "models/MainModel.php";
require_once "controllers/SessionController.php";

$view = new MainView();
$model = new MainModel(DB_HOST,DB_USER,DB_PASS);
$control = new SessionController();

$user = $control->getUser();
$errorMessage = '';

if($user) {
	header('Location: plants.php');
	exit;
}
else
{
	if(!empty($_POST['username']) && !empty($_POST['password'])) {
		$user = $model->getUser(trim($_POST['username']),trim('password'));
		if($user) {
			$control->setUser($user);
			header('Location: plants.php');
			exit;
		}
		else {
			$errorMessage = "Incorrect username or password.";
		}
	}
}

#$view->showHeader("Your Community Garden");
$view->show("header",array(
	'pageTitle' => 'Your Community Garden',
));
$view->show("login",array(
	'errorMessage' => $errorMessage,
));
$view->show("footer");

?>