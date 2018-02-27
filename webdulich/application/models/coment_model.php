<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class coment_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function so_dong_du_lieu()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('coment');
		return $ketqua->num_rows();
	}
	public function load_tin_theo_trang($trang)
	{
		$offset = ($trang-1)*5;
		$this->db->select('*');
		$this->db->from('coment');
		$this->db->join('customer', 'coment.cus_id = customer.cus_id', 'inner');
		$this->db->join('tours', 'coment.tour_id = tours.tour_id', 'inner');
		$this->db->limit(5);
		$this->db->offset($offset);
		$ketqua = $this->db->get();
		return $ketqua->result_array();
	}
	public function xoa_coment_model($id)
	{
		$this->db->where('coment_id', $id);
		$this->db->delete('coment');
	}
}

/* End of file coment_model.php */
/* Location: ./application/models/coment_model.php */