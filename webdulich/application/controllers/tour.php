<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include 'UploadHandler.php';
class tour extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form','url');
        $this->load->library('form_validation');
        $this->lang->load('form_validation_lang', 'vietnamese');
	}

	public function index()
	{	
		$this->load->model('tour_model');
		$getdiadiem = $this->tour_model->hien_dia_diem();
		$sotrang = CEIL($this->tour_model->so_dong_du_lieu()/5);
		$gettour = $this->tour_model->load_tin_theo_trang(1);
		$info = array('tour' => $gettour,'sotrang'=> $sotrang ,'diadiem' =>$getdiadiem);
		$this->load->view('admin_tour_view',$info);
	}
	public function uploadfile1()
	{
		$upload = new UploadHandler();
	}
	public function uploadfile2()
	{
		$upload = new UploadHandler();
	}
	public function uploadfile3()
	{
		$upload = new UploadHandler();
	}
	public function them_tour()
	{	
		$name = $this->input->post('name');
		$id_local = $this->input->post('id_local');
		$content = $this->input->post('content');
		$disscont = $this->input->post('disscont');
		$price_adult = $this->input->post('price_adult');
		$price_child = $this->input->post('price_child');
		$days = $this->input->post('days');
		$link = $this->input->post('link');
		$anh_avatar = $this->input->post('anh_avatar');
		$anh_mota1 = $this->input->post('anh_mota1');
		$anh_mota2 = $this->input->post('anh_mota2');
		$status = $this->input->post('status');
		$this->form_validation->set_message('required', $this->lang->line('required'));
		$this->form_validation->set_message('is_unique', $this->lang->line('is_unique'));
		$this->form_validation->set_message('is_natural_no_zero', $this->lang->line('is_natural_no_zero'));
		$this->form_validation->set_message('alpha_dash', $this->lang->line('alpha_dash'));
		$this->form_validation->set_rules('name', 'Tên Tour', 'required|is_unique[tours.tour_name]');
		$this->form_validation->set_rules('id_local', 'Địa điểm', 'required|is_natural_no_zero');
		$this->form_validation->set_rules('content', 'Mô tả', 'required');
		$this->form_validation->set_rules('disscont', 'Giảm giá', 'is_natural_no_zero');
		$this->form_validation->set_rules('price_adult', 'Giá người lớn', 'required|is_natural_no_zero');
		$this->form_validation->set_rules('price_child', 'Giảm trẻ em', 'required|is_natural_no_zero');
		$this->form_validation->set_rules('days', 'Số ngày', 'required|is_natural_no_zero');
		$this->form_validation->set_rules('link', 'Tên link', 'required|alpha_dash|is_unique[tours.links]');
		if($this->form_validation->run() == TRUE){
            $this->load->model('tour_model');
			$this->tour_model->them_tour_model($name,$id_local,$content,$disscont,$price_adult,$price_child,$days,$link,$anh_avatar,$anh_mota1,$anh_mota2,$status);
				
            echo '1';
        }
        else{
            $loi = array();
            $loi[0] = form_error('name');
            $loi[1] = form_error('id_local');
            $loi[2] = form_error('content');
            $loi[3] = form_error('disscont');
            $loi[4] = form_error('price_adult');
            $loi[5] = form_error('price_child');
            $loi[6] = form_error('days');
            $loi[7] = form_error('link');
            echo json_encode($loi);
        }
	}
	public function xoa_tour()
	{
		$tour_id = $this->input->post('id');
		$this->load->model('tour_model');
		$this->tour_model->xoa_tour_model($tour_id);
	}
	public function sua_tour($tour_id)
	{
		$this->load->model('tour_model');
		$tour1 = $this->tour_model->hien_1tour($tour_id);
		$getdiadiem = $this->tour_model->hien_dia_diem();
		$tour1 = array("tour" => $tour1,"diadiem" =>$getdiadiem);
		$this->load->view('admin_suatour_view', $tour1,false);
		// echo '<pre>';
		// var_dump($tour1);
		// echo '</pre>';
		// die();
	}
	public function sua_tour1()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$id_local = $this->input->post('id_local');
		$content = $this->input->post('content');
		$disscont = $this->input->post('disscont');
		$price_adult = $this->input->post('price_adult');
		$price_child = $this->input->post('price_child');
		$days = $this->input->post('days');
		$link = $this->input->post('link');
		$anh_avatar = $this->input->post('anh_avatar');
		$anh_mota1 = $this->input->post('anh_mota1');
		$anh_mota2 = $this->input->post('anh_mota2');
		$status = $this->input->post('status');
		$this->load->model('tour_model');
		$this->tour_model->sua_tour_model($id,$name,$id_local,$content,$disscont,$price_adult,$price_child,$days,$link,$anh_avatar,$anh_mota1,$anh_mota2,$status);
	}
	public function page($trang)
	{
		$this->load->model('tour_model');
		$getdiadiem = $this->tour_model->hien_dia_diem();
		$sotrang = CEIL($this->tour_model->so_dong_du_lieu()/5);
		$gettour = $this->tour_model->load_tin_theo_trang($trang);
		$info = array('tour' => $gettour,'sotrang'=> $sotrang ,'diadiem' =>$getdiadiem);
		$this->load->view('admin_tour_view',$info);
	
	}
}

/* End of file danhmuc.php */
/* Location: ./application/controllers/danhmuc.php */