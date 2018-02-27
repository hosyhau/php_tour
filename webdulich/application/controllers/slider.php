<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include 'UploadHandler.php';
class slider extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form','url');
        $this->load->library('form_validation');
        $this->lang->load('form_validation_lang', 'vietnamese');
	}

	public function index()
	{
		$this->load->model('slider_model');
		$slide = $this->slider_model->load_tin_theo_trang(1);
		$sotrang = CEIL($this->slider_model->so_dong_du_lieu()/5);
		$slider = array("slide" => $slide,"sotrang" => $sotrang);
		$this->load->view('admin_slider_view', $slider, FALSE);
	}
	public function sua_anh($id)
	{
		$this->load->model('slider_model');
		$anh = $this->slider_model->load_link_anh($id);
		$link = array('anh'=>$anh);
		// echo '<pre>';
		// var_dump($link);
		// die;
		$this->load->view('admin_sua_anh_slider',$link);
	}
	public function uploadfile1()
	{
		$upload = new UploadHandler();
	}
	public function uploadfile2()
	{
		$upload = new UploadHandler();
	}
	public function them_slider()
	{
		$name = $this->input->post('name');
		$description = $this->input->post('description');
		$link_button = $this->input->post('link_button');
		$images = $this->input->post('images');
		$status = $this->input->post('status');
		$this->form_validation->set_message('required', $this->lang->line('required'));
		$this->form_validation->set_message('is_unique', $this->lang->line('is_unique'));
		$this->form_validation->set_rules('name', 'Tên Slide', 'required|is_unique[slider.name]');
		$this->form_validation->set_rules('description', 'Mô tả', 'required');
		$this->form_validation->set_rules('link_button', 'Link bài viết', 'required');
		$this->form_validation->set_rules('images', 'Ảnh slide', 'required');
		if($this->form_validation->run() == TRUE){
			$this->load->model('slider_model');
			$this->slider_model->them_slider_model($name,$description,$link_button,$images,$status);
            echo '1';
        }
        else{
            $loi = array();
            $loi[0] = form_error('name');
            $loi[1] = form_error('description');
            $loi[2] = form_error('link_button');
            $loi[3] = form_error('images');
            echo json_encode($loi);
        }
	}
	public function xoa_slider()
	{
		$id = $this->input->post('id');
		$this->load->model('slider_model');
		if($this->slider_model->xoa_slider_model($id)){
			echo 'thanh cong r';
		}
	}
	public function sua_slider()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$content = $this->input->post('content');
		$link_button = $this->input->post('link_button');
		$status = $this->input->post('status');
		$this->load->model('slider_model');
		$this->slider_model->sua_slider_model($id,$name,$content,$link_button,$status);
	}
	public function page($trang)
	{
		$this->load->model('slider_model');
		$slide = $this->slider_model->load_tin_theo_trang($trang);
		$sotrang = CEIL($this->slider_model->so_dong_du_lieu()/5);
		$slider = array("slide" => $slide,"sotrang" => $sotrang);
		$this->load->view('admin_slider_view', $slider, FALSE);
	}
	public function sua_anh_slider()
	{
		$id = $this->input->post('id');
		$images = $this->input->post('images');
		$this->load->model('slider_model');
		$this->slider_model->sua_anh($id,$images);
	}
}

/* End of file slider.php */
/* Location: ./application/controllers/slider.php */