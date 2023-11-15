<?php 
class Main_model extends CI_Model{
	public function __contruct()
	{
		parent::__contruct();
	}

    public function ckRegisterEmail($user_email){
		$query = $this->db->get_where('users', array('user_email' => $user_email));
		return $query->result();
	}

    public function insertNewMember($ar){
		$this->db->insert('users',$ar);
		return $this->db->insert_id();
	}
}