<?php

class SessionController {

	public function __construct() {
		session_start();
	}
	
	public function getUser() {
		if(isset($_SESSION['userData'])) {
			return $_SESSION['userData'];
		}
		else {
			return false;
		}
	}
	
	public function setUser($user) {
		$_SESSION['userData'] = $user;
	}
	
	public function userArea() {
		if(!isset($_SESSION['userData'])) {
			header('Location: index.php');
			exit;
		}
	}
	
	public function logout() {
		unset($_SESSION['userData']);
		session_regenerate_id(true);
		header('Location: index.php');
		exit;
	}

}

?>