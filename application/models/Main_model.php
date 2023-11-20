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

	public function login($username, $password)
	{
	   $this -> db -> select('*');
	   $this -> db -> from('users');
	   $this -> db -> where('user_email', $username);
	   $this -> db -> where('user_password', $password);
	   $this -> db -> where('is_ban', 0);
	   $this -> db -> where('user_approve', 1);
	   $this -> db -> limit(1);
	 
	   $query = $this -> db -> get();
	 
	   if($query -> num_rows() == 1)
	   {
		 return $query->result();
	   }
	   else
	   {
		 return false;
	   }
	}
}