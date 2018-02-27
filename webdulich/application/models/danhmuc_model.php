<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Danhmuc_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function hien_danh_muc()
	{
		$this->db->select('*');
		$this->db->order_by('cate_id');
		$getdanhmuc = $this->db->get('category');
		$getdanhmuc = $getdanhmuc->result_array();
		return $getdanhmuc;
	}
	public function them_danh_muc($name,$content,$status)
	{
		$adddanhmuc = array('cate_name' => $name,'contents' => $content,'status' => $status);
		$this->db->insert('category', $adddanhmuc);
	}
	public function xoa_danh_muc_byid($id)
	{
		$this->db->where('cate_id', $id);
		$this->db->delete('category');
	}
	public function sua_danh_muc($id,$name,$content,$status)
	{
		$suadanhmuc = array('cate_id' => $id,'cate_name' => $name,'contents' => $content,'status' => $status);
		$this->db->where('cate_id', $id);
		$this->db->update('category', $suadanhmuc);
	}
	public function so_dong_du_lieu()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('category');
		return $ketqua->num_rows();
	}
	public function load_tin_theo_trang($trang)
	{
		$offset = ($trang-1)*5;
		$this->db->select('*');
		$ketqua = $this->db->get('category', 5, $offset);
		return $ketqua->result_array();
	}
}

/* End of file danhmuc_model.php */
/* Location: ./application/models/danhmuc_model.php */