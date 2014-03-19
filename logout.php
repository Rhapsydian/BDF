<?php

require_once "models/db.php";
require_once "models/MainModel.php";
require_once "controllers/SessionController.php";

$model = new MainModel(DB_HOST,DB_USER,DB_PASS);
$control = new SessionController();

$control->logout();

?>