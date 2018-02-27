<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class slider_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function load_link_anh($id)
	{
		$this->db->select('images,id');
		$this->db->where('id', $id);
		$anh = $this->db->get('slider');
		return $anh->result_array();
	}
	public function lay_du_lieu()
	{
		$this->db->select('*');
		$slide = $this->db->get('slider');
		$slide = $slide->result_array();
		return $slide;
	}
	public function so_dong_du_lieu()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('slider');
		return $ketqua->num_rows();
	}
	public function them_slider_model($name,$description,$link_button,$images,$status)
	{
		$slider = array("name" => $name,"description" => $description,"link_button" => $link_button,"images"=> $images,"status" => $status);
		$this->db->insert('slider', $slider);
	}
	public function xoa_slider_model($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('slider');
	}
	public function sua_slider_model($id,$name,$content,$link_button,$status)
	{
		$slider = array("name" => $name,"description" => $content,"link_button" => $link_button,"status" => $status);
		$this->db->where('id', $id);
		$this->db->update('slider', $slider);	
	}

	public function load_tin_theo_trang($trang)
	{
		$offset = ($trang-1)*5;
		$this->db->select('*');
		$ketqua = $this->db->get('slider', 5, $offset);
		return $ketqua->result_array();
	}
	public function sua_anh($id,$images)
	{
		$cansua = array('images' => $images);
		$this->db->where('id', $id);
		$this->db->update('slider', $cansua);
	}
}


/* End of file slider_model.php */
/* Location: ./application/models/slider_model.php */