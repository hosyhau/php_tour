<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cus_tour_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function hien_danh_muc()
	{
		$this->db->select('cate_id, cate_name');
		$this->db->where('status',1);
		$ketqua = $this->db->get('category');
		return $ketqua->result_array();
	}
	public function hien_dia_diem()
	{
		$this->db->select('local_id,local_name');
		$this->db->where('local_status', 1);
		$ketqua = $this->db->get('locations');
		return $ketqua->result_array();
	}
	public function dem_so_dong()
	{
		$this->db->select('*');
		$this->db->from('tours');
		$this->db->where('status', 1);
		$ketqua = $this->db->get();
		return $ketqua->num_rows();
	}
	public function lay_slider()
	{
		$this->db->select('images');
		$this->db->order_by('id', 'desc');
		$ketqua = $this->db->get('slider', 3);
		return $ketqua->result_array();
	}
	public function hien_tour_theo_trang($trang,$bien,$loai)
	{
		$offset = ($trang-1)*6;
		$this->db->select('*');
		if($bien == 1 && $loai == 0)
		{
			$this->db->order_by('tour_id', 'desc');
		}
		elseif ($bien == 1 && $loai == 1) {
			$this->db->order_by('tour_id', 'ASC');
		}
		elseif ($bien == 2 && $loai == 0) {
			$this->db->order_by('price_adult', 'desc');
		}
		else{
			$this->db->order_by('price_adult', 'ASC');
		}
		$this->db->from('tours');
		$this->db->limit(6);
		$this->db->offset($offset);
		$ketqua = $this->db->get();
		return $ketqua->result_array();
	}
	public function gettour_theo_local($local)
	{
		$this->db->select('*');
		$this->db->where('local_id', $local);
		$ketqua = $this->db->get('tours');
		if($ketqua->num_rows()==0)
		{
			echo '<p class="text-center" ><b>Rất tiếc ! không tìm thấy kết quả nào</b><p>';
		}
		else{
			return $ketqua->result_array();
		}
	}
	public function tim_kiem_cate_price_model($cate_id,$price)
	{
		$this->db->select('*');
		$this->db->from('tours');
		if($cate_id != 0)
		{
			$this->db->join('locations', 'locations.local_id = tours.local_id', 'inner');
			$this->db->join('category', 'locations.cate_id = category.cate_id', 'inner');
			$this->db->where('category.cate_id', $cate_id);
		}
		if($price == 1)
		{
			$this->db->where('price_adult <', 3000000);
		}
		elseif($price == 2)
		{
			$this->db->where('price_adult >', 3000000);
			$this->db->where('price_adult <', 5000000);
		}
		elseif($price == 3)
		{
			$this->db->where('price_adult >', 5000000);
			$this->db->where('price_adult <', 10000000);
		}
		elseif($price == 4)
		{
			$this->db->where('price_adult >', 10000000);
			$this->db->where('price_adult <', 20000000);
		}
		elseif($price == 5)
		{
			$this->db->where('price_adult >', 20000000);
		}
		$ketqua = $this->db->get();
		if($ketqua->num_rows() == 0)
		{
			echo '<p class="text-center" ><b>Rất tiếc ! không tìm thấy kết quả nào</b><p>';
		}
		else{
			return $ketqua->result_array();
		}
	}
}

/* End of file danhmuc_model.php */
/* Location: ./application/models/danhmuc_model.php */