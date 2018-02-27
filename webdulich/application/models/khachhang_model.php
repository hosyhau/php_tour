<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Khachhang_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	// Đơn đặt của khách
	public function Show_Tour($cus_id)
	{
		$this->db->select('*');
		$this->db->from('book');
		$this->db->join('customer', 'customer.cus_id = book.cus_id', 'inner');
		$this->db->join('tours', 'tours.tour_id = book.tour_id', 'inner');
		$this->db->join('payment', 'payment.pay_id = book.payment_id', 'inner');
		$this->db->where('customer.cus_id', $cus_id);
		$ketqua = $this->db->get();
		return $ketqua->result_array();
	}
	// Thông Tin cá nhân khách hàng.

	public function Editdata($cus_id,$cus_name,$phone,$Birthday)
	{	
		$dl = array( 
			'cus_name' => $cus_name, 
			'phone' => $phone, 
			'Birthday' => $Birthday,
		);
		$this->db->where('cus_id', $cus_id);
		return $this->db->update('customer', $dl);
	}
	public function check_mk($cus_id,$old_pass)
	{
		$this->db->select('password');
		$this->db->where('cus_id', $cus_id);
		$this->db->where('password', $old_pass);
		$dl=$this->db->get('customer');
		$dl=$dl->result_array();
		if($dl){

			return $dl[0]['password'];
		}else{
			return false;
		}
	}
	public function Edit_password($cus_id,$rep_pass)
	{
		$dl = array('password' => $rep_pass );
		$this->db->where('cus_id', $cus_id);
		return $this->db->update('customer', $dl);
	}
	public function check_personal($id)
	{
		$this->db->select('*');
		$this->db->where('cus_id', $id);
		$dl=$this->db->get('customer');
		return $dl->result_array();
	}
	public function chi_tiet_tour($tour_id)
	{
		$this->db->select('*');
		$this->db->from('book_room');
		$this->db->join('book', 'book.book_id = book_room.book_id', 'inner');
		$this->db->join('rooms', 'rooms.room_id = book_room.room_id', 'inner');
		$this->db->where('book_room.book_id', $tour_id);
		$phong = $this->db->get();
		return $phong->result_array();
	}
}

/* End of file khachhang_model.php */
/* Location: ./application/models/khachhang_model.php */