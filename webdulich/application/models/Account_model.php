<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function checkAccount($email,$password)
	{
		$this->db->select('*');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$dl=$this->db->get('customer');
		$dl=$dl->result_array();
		if(count($dl)>0){
			return $dl;
		}else{
			return false;
		}

	}
}

/* End of file Account_model.php */
/* Location: ./application/models/Account_model.php */