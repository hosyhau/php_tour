<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class coment extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('coment_model');
		$coment = $this->coment_model->load_tin_theo_trang(1);
		$sotrang = CEIL($this->coment_model->so_dong_du_lieu()/5);
		$coment = array("binhluan" => $coment,"sotrang" => $sotrang);
		$this->load->view('admin_coment_view',$coment);
	}
	public function page($trang)
	{
		$this->load->model('coment_model');
		$coment = $this->coment_model->load_tin_theo_trang($trang);
		$sotrang = CEIL($this->coment_model->so_dong_du_lieu()/5);
		$coment = array("binhluan" => $coment,"sotrang" => $sotrang);
		$this->load->view('admin_coment_view',$coment);
	}
	public function xoa_coment()
	{
		$id = $this->input->post('id');
		$this->load->model('coment_model');
		$this->coment_model->xoa_coment_model($id);
	}
}

/* End of file coment.php */
/* Location: ./application/controllers/coment.php */