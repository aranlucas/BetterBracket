<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landing extends CI_Controller {

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
		//check session data if not logged in the show: 

		$this->load->view('landing_page');

		//else 
			//show main page
		$this->load->view('main/index');
	}	
	public function login()
	{

		echo "Proccess User Login Info: \n";
		var_dump($_POST);
		//$this->load->view('auth/login');
	}
	public function register()
	{
		$this->load->view('auth/register');
	}

	private function _check_user($user, $pass) {
		$result = $db->query("select * from users Where email=$user AND password = $pass limit 1");
		if($result) {
			//
			$_SESSION['logged'] = true;
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */