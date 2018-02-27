<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class location extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form','url');
        $this->load->library('form_validation');
        $this->lang->load('form_validation_lang', 'vietnamese');
	}

	public function index()
	{
		$this->load->model('location_model');
		$getdanhmuc = $this->location_model->hien_danh_muc();
		$diadiem = $this->location_model->load_tin_theo_trang(1);
		$sotrang = CEIL($this->location_model->so_dong_du_lieu()/5);
		$info = array('diadiem' => $diadiem,"sotrang" =>$sotrang,'danhmuc' =>$getdanhmuc);
		$this->load->view('admin_location_view',$info);
	}
	public function them_dia_diem()
	{
		$name = $this->input->post('name');
		$status = $this->input->post('status');
		$cate_id = $this->input->post('cate_id');
		$this->form_validation->set_message('required', $this->lang->line('required'));
		$this->form_validation->set_message('is_unique', $this->lang->line('is_unique'));
		$this->form_validation->set_message('numeric', $this->lang->line('numeric'));
		$this->form_validation->set_rules('name', 'Tên Địa điểm', 'required|is_unique[locations.local_name]');
		$this->form_validation->set_rules('cate_id', 'Danh mục', 'required|numeric');
		if($this->form_validation->run() == TRUE){
            $this->load->model('location_model');
			$this->location_model->them_dia_diem($name,$status,$cate_id);
            echo '1';
        }
        else{
            $loi = array();
            $loi[0] = form_error('name');
            $loi[1] = form_error('cate_id');
            echo json_encode($loi);
        }
		
	}
	public function xoa_dia_diem()
	{
		$id = $this->input->post('id');
		$this->load->model('location_model');
		$this->location_model->xoa_dia_diem($id);
	}
	public function sua_dia_diem()
	{
		$local_id = $this->input->post('id_local');
		$local_name = $this->input->post('name_local');
		$cate_id = $this->input->post('cate_id');
		$local_status = $this->input->post('status');
		$this->load->model('location_model');
		$this->location_model->sua_dia_diem($local_id,$local_name,$cate_id,$local_status);
	}
	public function page($trang)
	{
		$this->load->model('location_model');
		$getdanhmuc = $this->location_model->hien_danh_muc();
		$diadiem = $this->location_model->load_tin_theo_trang($trang);
		$sotrang = CEIL($this->location_model->so_dong_du_lieu()/5);
		$info = array('diadiem' => $diadiem,"sotrang" =>$sotrang,'danhmuc' =>$getdanhmuc);
		$this->load->view('admin_location_view',$info);
	}
}

/* End of file location.php */
/* Location: ./application/controllers/location.php */