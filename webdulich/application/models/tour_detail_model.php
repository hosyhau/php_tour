<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tour_detail_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function lay_du_lieu()
	{
		$this->db->select('*');
		$this->db->from('tour_detail');
		$this->db->join('tours', 'tour_detail.tour_id = tours.tour_id', 'inner');
		$this->db->join('rooms', 'tour_detail.room_id = rooms.room_id', 'inner');
		$ketqua = $this->db->get();
		$ketqua = $ketqua->result_array();
		return $ketqua; 
	}
	public function lay_tour()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('tours');
		$ketqua = $ketqua->result_array();
		return $ketqua;
	}
	public function lay_room()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('rooms');
		$ketqua = $ketqua->result_array();
		return $ketqua;
	}

	public function them_chitiet_tour_model($tour_id,$room_id,$date,$time,$status)
	{
		$chitiettour = array("tour_id" => $tour_id,"room_id" => $room_id,"date_start" => $date,"Time_start" => $time,"status" => $status);
		$this->db->insert('tour_detail', $chitiettour);
	}
	public function xoa_chitiet_tour_model($tour_id,$room_id,$date,$time)
	{
		$this->db->where('tour_id', $tour_id);
		$this->db->where('room_id', $room_id);
		$this->db->where('date_start', $date);
		$this->db->where('Time_start', $time);
		$this->db->delete('tour_detail');
	}
	public function sua_chitiet_tour_model($tour_id_sua,$room_id_sua,$date_sua,$time_sua,$tour_id,$room_id,$date,$time,$status)
	{

		$chitiettour = array("tour_id" => $tour_id,"room_id" => $room_id,"date_start" => $date,"Time_start" => $time,"status" => $status);
		$this->db->where('tour_id', $tour_id_sua);
		$this->db->where('room_id', $room_id_sua);
		$this->db->where('date_start', $date_sua);
		$this->db->where('Time_start', $time_sua);
		$this->db->update('tour_detail', $chitiettour);
	}
	public function so_dong_du_lieu()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('tour_detail');
		return $ketqua->num_rows();
	}
	public function load_tin_theo_trang($trang)
	{
		$offset = ($trang-1)*5;
		$this->db->select('*');
		$this->db->from('tour_detail');
		$this->db->join('tours', 'tour_detail.tour_id = tours.tour_id', 'inner');
		$this->db->join('rooms', 'tour_detail.room_id = rooms.room_id', 'inner');
		$this->db->limit(5);
		$this->db->offset($offset);
		$ketqua = $this->db->get();
		return $ketqua->result_array(); 
	}
}

/* End of file tour_detail_model.php */
/* Location: ./application/models/tour_detail_model.php */