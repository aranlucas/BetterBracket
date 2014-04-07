<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {


	public function index()
	{
		//check session data if not logged in the show:
		$this->load->model('User_model');
		if(!$this->User_model->logged()) {
			$this->load->view('profile/main');
		}
		else   {
			//show main page
			$this->load->view('profile/main');
		}
	}

}