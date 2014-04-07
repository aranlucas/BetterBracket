<?php

class Group_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->table_name = "groups";
    }

     function getGroupID($name)
    {
    	$sql  = "select id from groups where name = ?;";
		if($result = $this->db->query($sql, array($name))) {
    		$row = $result->row();
    		return $row->id;
    	}
    	return false;
    }

    function findAllUsers($id)
    {
        $sql = " select * from ((select * from user_groups where group_id = ?) as a inner join (select * from users_profile) as b on a.user_id = b.user_id);";//Search for all members of a given group
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
    }

    function getProfile($id)
    {
        $sql = "select * from (select * from groups where groups.id = ?) as a inner join (select * from groups_profile where group_id = ?) as b on a.id = b.group_id;";
        $query = $this->db->query($sql,array($id, $id));
        return $query->result_array();
    }


    function getGroupInfo($id)
    {
        $sql = "select * from groups where groups.id = ?;";
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
    }

<<<<<<< HEAD
    function get_bracket() {

        $query = $this->db->query("select * from bracket_teams WHERE round = 1");
        return $query->result_array();
=======
    function checkMember($id, $email)//Check if member is already a part of the group
    {
        $this->load->model('User_model');
        $uid = $uid = $this->User_model->get_id($email);
        $sql = "select count(1) from user_groups where group_id = ? and user_id = ?;";
        $query = $this->db->query($sql,array($id, $uid));
        $data = $query->result_array();
        if(((int)$data[0]['count']) < 1)//not found in group, ok to add
        {
            return false;
        }
        return true;

>>>>>>> 2089f74eff9a1761303c0e4ab9e361373096e025
    }
}