<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dangnhap_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function kiem_tra_user($ur_name,$password)
	{
		$this->db->select('*');
		$this->db->where('ur_name', $ur_name);
		$this->db->where('password', $password);
		$user = $this->db->get('admins',1);
		$user = $user->result_array();
		if($user)
		{
			return $user;
		}
		else
		{
			return false;
		}
	}
}

/* End of file dangnhap_model.php */
/* Location: ./application/models/dangnhap_model.php */