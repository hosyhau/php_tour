<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class room_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}
	public function lay_info_phong()
	{
		$this->db->select('*');
		$dulieu = $this->db->get('rooms');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	public function them_phong_model($room_name,$price,$type,$status)
	{
		$phong = array("room_name" => $room_name,"price" => $price,"type" => $type,"status" => $status);
		$this->db->insert('rooms', $phong);
	}
	public function xoa_phong_model($id)
	{
		$this->db->where('room_id', $id);
		$this->db->delete('rooms');
	}
	public function sua_phong_model($id,$name,$price,$type,$status)
	{
		$phong = array("room_name" => $name,"price" => $price,"type"=> $type,"status" => $status);
		$this->db->where('room_id', $id);
		$this->db->update('rooms', $phong);
	}
	public function tim_kiem_model($search)
	{
		$this->db->select('*');
		$this->db->like('room_name', $search, 'BOTH');
		$dulieu = $this->db->get('rooms');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	public function so_dong_du_lieu()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('rooms');
		return $ketqua->num_rows();
	}
	public function load_tin_theo_trang($trang)
	{
		$offset = ($trang-1)*5;
		$this->db->select('*');
		$ketqua = $this->db->get('rooms', 5, $offset);
		return $ketqua->result_array();
	}
}

/* End of file room_model.php */
/* Location: ./application/models/room_model.php */