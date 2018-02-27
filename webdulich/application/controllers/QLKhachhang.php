<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class QLKhachhang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('QL_Khachhang_model');
	}

	public function index()
	{
		$custumer = $this->QL_Khachhang_model->load_tin_theo_trang(1);
		$sotrang = CEIL($this->QL_Khachhang_model->so_dong_du_lieu()/5);
		$khachang = array("khach" => $custumer,"sotrang" => $sotrang);
		$this->load->view('admin_QL_Khachhang_view',$khachang);
	}
	public function page($trang)
	{
		$custumer = $this->QL_Khachhang_model->load_tin_theo_trang($trang);
		$sotrang = CEIL($this->QL_Khachhang_model->so_dong_du_lieu()/5);
		$khachang = array("khach" => $custumer,"sotrang" => $sotrang);
		$this->load->view('admin_QL_Khachhang_view',$khachang);
	}
	public function xoa_cus()
	{
		$id = $this->input->post('id');
		$this->QL_Khachhang_model->xoa_cus_model($id);
	}
	public function sua_cus()
	{
		$id = $this->input->post('id');
		$status = $this->input->post('status');
		$this->QL_Khachhang_model->sua_cus_model($id,$status);
	}
}

/* End of file customer.php */
/* Location: ./application/controllers/customer.php */