
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	public function __constuct()
	{
		parent::__constuct();
	}

	function create_user($username, $password, $email, $full_name, $activation_code, $created_date)	
	{
		$data = array(
				'username'=>$username,
				'password'=>sha1($password),
				'full_name'=>$full_name,
				'activation_code'=>$activation_code,
				'created_at'=> $created_date
			);
		$this->db->insert('users',$data);
	}

	function check_username($username, $dbtable)
	{
		$this->db->select('1', FALSE);
		$this->db->where('LOWER(username)=',strtolower($username));
		return $this->db->get($dbtable);
	}

	function check_email($email,$dbtable)
	{
		$this->db->select('1',FALSE);
		$this->db->where('LOWER(email)=',strtolower($email));
		return $this->db->get($dbtable);
	}
	
}

