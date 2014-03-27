<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index() {
	
		$this->load->model('Model_main');
		
		var_dump($this->Model_main->getUsersAll());
	
	}

}

?>