<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class danhmuc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form','url');
        $this->load->library('form_validation');
        $this->lang->load('form_validation_lang', 'vietnamese');
	}

	public function index()
	{	
		$this->load->model('danhmuc_model');
		$getdanhmuc = $this->danhmuc_model->load_tin_theo_trang(1);
		$sotrang = CEIL($this->danhmuc_model->so_dong_du_lieu()/5);
		$getdanhmuc = array('dulieu' => $getdanhmuc,"sotrang" => $sotrang);
		$this->load->view('admin_danhmuc_view',$getdanhmuc, FALSE);
	}
	public function them_danh_muc()
	{
		$name = $this->input->post('name');
		$content = $this->input->post('content');
		$status = $this->input->post('status');
		$this->form_validation->set_message('required', $this->lang->line('required'));
		$this->form_validation->set_message('is_unique', $this->lang->line('is_unique'));
		$this->form_validation->set_rules('name', 'Tên danh mục', 'required|is_unique[category.cate_name]');
		$this->form_validation->set_rules('content', 'Mô tả', 'required');
		if($this->form_validation->run() == TRUE){
            $this->load->model('danhmuc_model');
			$this->danhmuc_model->them_danh_muc($name,$content,$status);
            echo '1';
        }
        else{
        	$loi = array();
            $loi[0] = form_error('name');
            $loi[1] = form_error('content');
            echo json_encode($loi);
        }
	}
	public function xoa_danh_muc()
	{
		$id= $this->input->post('id');
		$this->load->model('danhmuc_model');
		$this->danhmuc_model->xoa_danh_muc_byid($id);
	}
	public function sua_danh_muc()
	{	
		$id= $this->input->post('id');
		$name = $this->input->post('name');
		$content = $this->input->post('content');
		$status = $this->input->post('status');
		$this->load->model('danhmuc_model');
		$this->danhmuc_model->sua_danh_muc($id,$name,$content,$status);
	}

	public function page($trang)
	{
		$this->load->model('danhmuc_model');
		$getdanhmuc = $this->danhmuc_model->load_tin_theo_trang($trang);
		$sotrang = CEIL($this->danhmuc_model->so_dong_du_lieu()/5);
		$getdanhmuc = array('dulieu' => $getdanhmuc,"sotrang" => $sotrang);
		$this->load->view('admin_danhmuc_view', $getdanhmuc);
	}
}

/* End of file danhmuc.php */
/* Location: ./application/controllers/danhmuc.php */