<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ql_book_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function dem_so_ketqua()
	{
		$this->db->select('*');
		$sodong = $this->db->get('book');
		return $sodong->num_rows();
	}
	public function load_theo_trang($page)
	{
		$offset = ($page-1)*5;
		$this->db->select('book.*,customer.cus_name,tours.tour_name');
		$this->db->from('book');
		$this->db->join('customer', 'customer.cus_id = book.cus_id', 'inner');
		$this->db->join('tours', 'tours.tour_id = book.tour_id', 'inner');
		$this->db->limit(5);
		$this->db->offset($offset);
		$ketqua = $this->db->get();
		return $ketqua->result_array();
	}
	public function sua_trang_thai($book_id,$status)
	{
		$this->db->where('book_id', $book_id);
		$status = array("status" => $status);
		$this->db->update('book', $status);
	}
}

/* End of file ql_book_model.php */
/* Location: ./application/models/ql_book_model.php */