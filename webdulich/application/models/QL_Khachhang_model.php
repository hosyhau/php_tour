<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class QL_Khachhang_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function so_dong_du_lieu()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('customer');
		return $ketqua->num_rows();
	}
	public function load_tin_theo_trang($trang)
	{
		$offset = ($trang-1)*5;
		$this->db->select('*');
		$ketqua = $this->db->get('customer', 5, $offset);
		return $ketqua->result_array();
	}
	public function xoa_cus_model($id)
	{
		$this->db->where('cus_id', $id);
		$this->db->delete('customer');
	}
	public function sua_cus_model($id,$status)
	{
		$this->db->where('cus_id', $id);
		$status = array("status" => $status);
		$this->db->update('customer', $status);
	}
}

/* End of file custumer_model.php */
/* Location: ./application/models/custumer_model.php */