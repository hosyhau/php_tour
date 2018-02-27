<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dulich_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function selectByName($links)
	{
		$this->db->select('*');
		$this->db->from('tours');
		$this->db->join('locations', 'locations.local_id = tours.local_id', 'inner');
		$this->db->where('tours.links', $links);
		$this->db->limit(1);
		$dl=$this->db->get();
		$dl= $dl->result_array();
		return $dl;
	}
	public function load_coment($links)
	{
		$this->db->select('*');
		$this->db->from('coment');
		$this->db->join('tours', 'tours.tour_id = coment.tour_id', 'inner');
		$this->db->join('customer', 'customer.cus_id = coment.cus_id', 'inner');
		$this->db->where('tours.links', $links);
		$ketqua = $this->db->get();
		return $ketqua->result_array();
	}
	public function them_binhluan($cus_id,$tour_id,$content,$time)
	{
		$coment = array("cus_id" => $cus_id,"tour_id" => $tour_id,"content" =>$content);
		$this->db->insert('coment', $coment);
	}
	public function xoa_binhluan($coment_id)
	{
		$this->db->where('coment_id', $coment_id);
		$this->db->delete('coment');
	}
	public function sua_binhluan($coment_id,$content)
	{
		$coment = array("coment_id" => $coment_id, "content" => $content);
		$this->db->where('coment_id', $coment_id);
		$this->db->update('coment', $coment);
	}
	public function select_room($links)
	{
		$this->db->select('*');
		$this->db->from('rooms');
		$this->db->join('tour_detail', 'tour_detail.room_id = rooms.room_id', 'inner');
		$this->db->join('tours', 'tours.tour_id = tour_detail.tour_id', 'inner');
		$this->db->where('links', $links);
		$this->db->where('rooms.status', 1);
		$ketqua = $this->db->get();
		return $ketqua->result_array();
	}
	public function search_tour_model($tour_name)
	{
		$this->db->select('links,tour_name');
		$this->db->like('tour_name', $tour_name, 'BOTH');
		$this->db->limit(7);
		$ketqua = $this->db->get('tours');
		return $ketqua->result_array();
	}
	public function dem_so_ket_qua($tour_name)
	{
		$this->db->select('links,tour_name');
		$this->db->like('tour_name', $tour_name, 'BOTH');
		$ketqua = $this->db->get('tours');
		$sodong = $ketqua->num_rows();
		return $sodong;
	}
	public function ngay_di($links)
	{
		$this->db->select('date_start,Time_start');
		$this->db->from('tour_detail');
		$this->db->join('tours', 'tours.tour_id = tour_detail.tour_id', 'inner');
		$this->db->where('links', $links);
		$this->db->where('date_start >', date("y-m-d"));
		$this->db->order_by('date_start', 'desc');
		$this->db->limit(1);
		$ngay = $this->db->get();
		return $ngay->result_array();
	}
	public function tang_view($tour_id,$view)
	{
		$view = array('view_of' => $view);
		$this->db->where('tour_id', $tour_id);
		$this->db->update('tours', $view);
	}
}

/* End of file Dulich_model.php */
/* Location: ./application/models/Dulich_model.php */