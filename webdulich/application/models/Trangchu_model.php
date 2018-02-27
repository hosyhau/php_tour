<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trangchu_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function LoadTourByNew()
	{
		$this->db->select('*');
		$this->db->from('tours');
		$this->db->join('tour_detail', 'tour_detail.tour_id = tours.tour_id', 'left');
		$this->db->order_by('tour_detail.tour_id', 'desc');
		$this->db->limit(6);
		$dl=$this->db->get();
		return $dl->result_array();
	}
	public function LoadTourHOT()
	{
		$this->db->select('*');
		$this->db->from('tours');
		$this->db->join('tour_detail', 'tour_detail.tour_id = tours.tour_id', 'left');
		$this->db->order_by('tours.view_of', 'desc');
		$this->db->limit(4);
		$dl=$this->db->get();
		return $dl->result_array();
	}
	public function LoadTourSapKhoiHanh()
	{
		$date=date('Y/m/d');
		$this->db->select('*');
		$this->db->from('tours');
		$this->db->join('tour_detail', 'tour_detail.tour_id = tours.tour_id', 'inner');
		$this->db->where('tour_detail.date_start >',$date);
		$this->db->order_by('tour_detail.date_start', 'ASC');
		$this->db->limit(4);
		$dl=$this->db->get();
		$dl= $dl->result_array();
		return $dl;
	}
	public function Loadslider()
	{
		$this->db->select('*');
		$dl=$this->db->get('slider');
		$dl=$dl->result_array();
		return $dl;
	}
}

/* End of file Trangchu_model.php */
/* Location: ./application/models/Trangchu_model.php */