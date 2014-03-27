<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index() {
	
		$this->load->model('Model_main');
		$this->load->model('Model_session');
		
		$this->Model_session->setUser($this->Model_main->getUser('JStephens','password'));
				
		var_dump($this->Model_session->getUser());
		
		$this->Model_session->logout();

	}
	

}

?>