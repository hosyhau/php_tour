<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dangki_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function kiem_tra_mail($email)
	{
		$this->db->select('email');
		$this->db->where('email', $email);
		$ketqua= $this->db->get('customer', 1);
		$ketqua = $ketqua->result_array();
		if($ketqua){
			return false;
		}
		else
		{
			return true;
		}
	}
	public function dang_ki($email,$password)
	{
		$dangki = array('email' => $email, 'password' => $password);
		$this->db->insert('customer', $dangki);
	}
	public function Dangkyngay($cus_name,$phone,$email,$password)
	{
		$dl = array(
			'cus_name' =>$cus_name , 
			'phone' =>$phone , 
			'email' =>$email , 
			'password' =>$password 
		);
		return $this->db->insert('customer', $dl);
	}
}

/* End of file dangki_model.php */
/* Location: ./application/models/dangki_model.php */