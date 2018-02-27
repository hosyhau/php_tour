<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tour_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function hien_tour()
	{	
		$this->db->select('*');
		$this->db->from('locations');
		$this->db->join('tours', 'locations.local_id = tours.local_id', 'inner');
		$gettour = $this->db->get();
		$gettour = $gettour->result_array();
		return $gettour;
	}
	public function hien_1tour($tour_id)
	{	
		
		$this->db->select('*');
		$this->db->where('tour_id', $tour_id);
		$this->db->from('locations');
		$this->db->join('tours', 'locations.local_id = tours.local_id', 'inner');
		$gettour = $this->db->get();
		$gettour = $gettour->result_array();
		return $gettour;
	}
	public function hien_dia_diem()
	{
		$this->db->select('local_id,local_name');
		$getdiadiem = $this->db->get('locations');
		$getdiadiem = $getdiadiem->result_array();
		return $getdiadiem;
	}
	public function them_tour_model($name,$id_local,$content,$disscont,$price_adult,$price_child,$days,$link,$anh_avatar,$anh_mota1,$anh_mota2,$status)
	{
		$tour = array("tour_name" => $name, "local_id" => $id_local, "description" => $content, "discount" => $disscont,"price_adult" => $price_adult, "price_chil" => $price_child,"days" =>$days,
			"links" => $link,"avatar" =>$anh_avatar,"image1" => $anh_mota1,"image2" => $anh_mota2,"status" =>$status);
		$this->db->insert('tours', $tour);
	}
	public function xoa_tour_model($id)
	{
		$this->db->where('tour_id', $id);
		$this->db->delete('tours');
	}
	public function sua_tour_model($id,$name,$id_local,$content,$disscont,$price_adult,$price_child,$days,$link,$anh_avatar,$anh_mota1,$anh_mota2,$status)
	{
		$this->db->where('tour_id', $id);
		$tour = array("tour_name" => $name, "local_id" => $id_local, "description" => $content, "discount" => $disscont,"price_adult" => $price_adult, "price_chil" => $price_child,"days" =>$days,
			"links" => $link,"avatar" =>$anh_avatar,"image1" => $anh_mota1,"image2" => $anh_mota2,"status" =>$status);
		$this->db->update('tours', $tour);
	}

	public function so_dong_du_lieu()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('tours');
		return $ketqua->num_rows();
	}
	public function load_tin_theo_trang($trang)
	{
		$offset = ($trang-1)*5;
		$this->db->select('*');
		$this->db->from('locations');
		$this->db->join('tours', 'locations.local_id = tours.local_id', 'inner');
		$this->db->limit(5);
		$this->db->offset($offset);
		$gettour = $this->db->get();
		return $gettour->result_array();
	}
}

/* End of file tour_model.php */
/* Location: ./application/models/tour_model.php */