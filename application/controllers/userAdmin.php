<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserAdmin extends CI_Controller {

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
		
		$this->Model_session->userArea(2);
		$user = $this->Model_session->getUser();
		
		$this->load->view('header', array(
			'pageTitle' => 'Your Community Garden',
			'user' => $user,
		));
		$this->load->view('userList',array(
			'users' => $this->Model_main->getUsersAll(),
		));
		$this->load->view('footer');
	}
	
	public function add()
	{
		$this->load->model('Model_main');
		$this->load->model('Model_session');
		
		$this->Model_session->userArea(2);
		$user = $this->Model_session->getUser();
		
		if(isset($_POST['firstname']) and isset($_POST['lastname']) and isset($_POST['username']) and isset($_POST['password']) and isset($_POST['dob']) and isset($_POST['userStatusID']) and isset($_POST['userTypeId'])) {
			$this->Model_main->userAdd($_POST);
			$this->Model_session->redirect('/userAdmin');
		}
		
		$this->load->view('header', array(
			'pageTitle' => 'Your Community Garden',
			'user' => $user,
		));
		$this->load->view('userAdd');
		$this->load->view('footer');
	}
	
	public function remove()
	{
		$this->load->model('Model_main');
		$this->load->model('Model_session');
		
		$this->Model_session->userArea(2);
		
		$this->Model_main->userRemove($_GET['id']);
		$this->Model_session->redirect("/userAdmin");
	}
	
	public function edit()
	{
		$this->load->model('Model_main');
		$this->load->model('Model_session');
		
		$this->Model_session->userArea(2);
		$user = $this->Model_session->getUser();
		
		if(isset($_POST['userid']) and isset($_POST['firstname']) and isset($_POST['lastname']) and isset($_POST['username']) and isset($_POST['password']) and !empty($_POST['password']) and isset($_POST['dob']) and isset($_POST['userStatusID']) and isset($_POST['userTypeId'])) {
			$this->Model_main->userUpdate($_POST);
			$this->Model_session->redirect('/userAdmin');
		}
		
		$this->load->view('header', array(
			'pageTitle' => 'Your Community Garden',
			'user' => $user,
		));
		$this->load->view('userEdit',array(
			'user' => $this->Model_main->getUserById($_GET['id'])
		));
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */