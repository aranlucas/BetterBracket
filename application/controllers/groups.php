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

	public function create_bracket() {
		$this->load->model('Group_model');

		$regions = array("south"=>1,"west"=>2,"east"=>3, "midwest"=>4);
		$result = $this->Group_model->get_bracket();
		foreach($result as $row){
			$bracket[$regions[$row['region']]][$row['seed']] = $row;
		}
		$data['bracket'] = $bracket;
		$this->load->view('groups/create_bracket',$data);
	}

	function viewallgroups()
	{
		$this->load->model('User_model');
		$data = $this->User_model->getAllGroups();
		$this->load->view('groups/view_all_groups', $data);
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

	function addmember($id) {
		$this->load->model('Group_model');
		//var_dump((int)$this->Group_model->checkMember($id,$_POST['memberemail']));
		if(isset($_POST['memberemail']) && !($this->Group_model->checkMember($id,$_POST['memberemail'])))//We have a group name to create a Group for
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
		$this->viewGroup($id);
	}

	function viewgroup($id)
	{
		$data["gid"] = $id;
		//Group information from groups table
		$this->load->model('Group_model');
		$data['ginfo'] = $this->Group_model->getGroupInfo($id);
		//Group profile information
		$data['gprof'] = $this->Group_model->getProfile($id);
		//Find all member of a given group
		$data['gmemb'] = $this->Group_model->findAllUsers($id);
		$this->load->view('groups/view_group', $data);
	}
}
