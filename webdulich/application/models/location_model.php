<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class location_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function hien_dia_diem()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('locations', 'category.cate_id = locations.cate_id');
		$this->db->order_by('local_id');
		$diadiem = $this->db->get();
		$diadiem = $diadiem->result_array();
		return $diadiem;
	}
	public function hien_danh_muc()
	{
		$this->db->select('cate_id,cate_name');
		$getdanhmuc = $this->db->get('category');
		$getdanhmuc = $getdanhmuc->result_array();
		return $getdanhmuc;
	}
	public function them_dia_diem($name,$status,$cate_id)
	{
		$diadiem = array('local_name' => $name,'cate_id' =>$cate_id,'local_status' =>$status);
		$this->db->insert('locations', $diadiem);
	}
	public function xoa_dia_diem($id)
	{
		$this->db->where('local_id', $id);
		$this->db->delete('locations');
	}
	public function sua_dia_diem($local_id,$local_name,$cate_id,$local_status)
	{	
		$info = array('local_id' => $local_id,'local_name' => $local_name,'cate_id' => $cate_id,
			'local_status' => $local_status);
		$this->db->where('local_id', $local_id);
		$this->db->update('locations',$info);
	}
	public function so_dong_du_lieu()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('locations');
		return $ketqua->num_rows();
	}
	public function load_tin_theo_trang($trang)
	{
		$offset = ($trang-1)*5;
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('locations', 'category.cate_id = locations.cate_id');
		$this->db->limit(5);
		$this->db->offset($offset);
		$this->db->order_by('local_id');
		$ketqua = $this->db->get();
		return $ketqua->result_array();
	}
}

/* End of file location_model.php */
/* Location: ./application/models/location_model.php */