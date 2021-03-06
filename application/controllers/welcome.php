<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		
		$user = $this->Model_session->getUser();
		$errorMessage = '';
		
		if($user) {
			header('Location: plants');
			exit;
		}
		else
		{
			if(!empty($_POST['username']) && !empty($_POST['password'])) {
				$user = $this->Model_main->getUser(trim($_POST['username']),trim('password'));
				if($user) {
					$this->Model_session->setUser($user);
					header('Location: plants');
					exit;
				}
				else {
					$errorMessage = "Incorrect username or password.";
				}
			}
		}
		
		$this->load->view('header',array(
			'pageTitle' => 'Your Community Garden',
			'user' => $user,
		));
		$this->load->view('login',array(
			'errorMessage' => $errorMessage,
		));
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */