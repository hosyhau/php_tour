<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function selectPayment()
	{
		$this->db->select('*');
		$dl=$this->db->get('payment');
		return $dl->result_array();
	}

}

/* End of file Payment_model.php */
/* Location: ./application/models/Payment_model.php */
