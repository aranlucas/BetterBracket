<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Groups extends CI_Controller {

	
	public function index()
	{
		//check session data if not logged in the show: 
		$this->load->model('User_model');
		if(!$this->User_model->logged()) {
			$this->load->view('landing_page');
		}
		else   {
			//show main page
			$this->viewAllGroups();
		}
	}	


	function viewAllGroups()
	{
		$this->load->model('User_model');
		$data = $this->User_model->getAllGroups();
		$this->load->view('view_all_groups', $data);
	}

    function addgroup() {
    	$email = $this->session->userdata('email');
    	if(isset($_POST['groupname']))//We have a group name to create a Group for
		{
			$sql = "insert into groups (name)values(?);";
			$this->db->query($sql,array($_POST['groupname']));
			$this->load->model('Group_model');
			$id = $this->Group_model->getGroupID($_POST['groupname']);//get id of group we just made
			//Fields to insert data into group_profile on web page form-> new post values
			$sql2 = "insert into groups_profile(group_id,description, caption)values(?,?,?);";
			$this->db->query($sql2,array($id,$_POST['description'],$_POST['caption'] ));

			$uid =$this->session->userdata('uid');//get id of current user
			$sql3 = "insert into user_groups(group_id,user_id)values(?, ?);";//store in table relating users and groups
			$this->db->query($sql3,array($id, $uid));
		}
		$this->viewAllGroups();
    }

    function addmember() {
		$id = $_GET['id'];
    	if(isset($_POST['memberemail']))//We have a group name to create a Group for
		{
			$this->load->model('User_model');
			$uid = $this->User_model->get_id($_POST['memberemail']);//id of user by email if exists
			if(!$uid)
			{
				echo '<b>Email not in the Database</b>';
			}
			else{
			$sql = "insert into user_groups(group_id,user_id)values(?, ?);";//store in table relating users and groups
			$query = $this->db->query($sql,array($id, $uid));//we now have a new user in our group
			}
		}
		$this->viewGroup();
    }

    function viewGroup()
    {
    	$id = $_GET['id'];
    	$data["gid"] = $id;
    	//Group information from groups table
    	$this->load->model('Group_model');
    	$data['ginfo'] = $this->Group_model->getGroupInfo($id);
    	//Group profile information 
    	$data['gprof'] = $this->Group_model->getProfile($id);
    	//Find all member of a given group
    	$data['gmemb'] = $this->Group_model->findAllUsers($id);
    	$this->load->view('view_group', $data);
    }
}

