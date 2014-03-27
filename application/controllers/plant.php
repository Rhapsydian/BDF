<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Plant extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Model_main');
		$this->load->model('Model_session');
		
		$this->Model_session->userArea();
		$user = $this->Model_session->getUser();
		
		$this->load->view('header', array(
			'pageTitle' => 'Your Community Garden',
			'user' => $user,
		));
		
		$this->load->view('plantDetail',array(
			'plant' => $this->Model_main->getPlantsById(filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT)),
		));
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */