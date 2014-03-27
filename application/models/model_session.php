<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_session extends CI_Model {

    function __construct()
    {
        parent::__construct();
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
	
	public function userArea($level = 0) {
		if(!isset($_SESSION['userData'])) {
			header('Location: /');
			exit;
		}
		else
		{
			if((int)$_SESSION['userData']->userTypeId < $level)
			{
				header('Location: /');
				exit;
			}
		}
	}
	
	public function logout() {
		unset($_SESSION['userData']);
		session_regenerate_id(true);
		header('Location: /');
		exit;
	}

	public function redirect($where) {
		header('Location: ' . $where);
		exit;
	}
	
}

?>