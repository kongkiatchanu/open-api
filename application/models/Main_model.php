<?php 
class Main_model extends CI_Model{
	public function __contruct()
	{
		parent::__contruct();
	}

    public function ckRegisterEmail($user_email){
		$query = $this->db->get_where('users', array('user_email' => $user_email));
		$rs = $query->result();
	}
}