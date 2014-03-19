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

}

?>