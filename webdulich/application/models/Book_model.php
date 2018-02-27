<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Book_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertByID($cus_id,$tour_id,$payment_id,$address,$phone_number,$adult_quan,$chirld_quan,$total_price,$quantity_total,$note,$date_start)
	{
		$dl = array(
			'cus_id' =>$cus_id , 
			'tour_id' =>$tour_id , 
			'payment_id' =>$payment_id , 
			'address' =>$address , 
			'phone_number' =>$phone_number , 
			'adult_quan' =>$adult_quan , 
			'chirld_quan' =>$chirld_quan , 
			'total_price' =>$total_price , 
			'quantity_total' =>$quantity_total , 
			'note' =>$note,
			'created' => $date_start
		);
		$this->db->insert('book', $dl);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}
	public function book_room($book_id,$room_id)
	{
		$book_room = array("book_id" => $book_id,"room_id" => $room_id);
		$this->db->insert('book_room', $book_room);
	}
	public function status_room($room_id)
	{
		$room = array("status" => 0);
		$this->db->where('room_id', $room_id);
		$this->db->update('rooms', $room);
	}
	public function lay_gia($value)
	{
		$this->db->select('price');
		$this->db->where('room_id', $value);
		$gia = $this->db->get('rooms');
		$gia = $gia->result_array();
		// echo '<pre>';
		// var_dump($gia[0]);
		// echo '</pre>';
		return $gia[0];
	}
}

/* End of file Book_model.php */
/* Location: ./application/models/Book_model.php */