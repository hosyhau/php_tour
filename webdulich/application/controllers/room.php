<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class room extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form','url');
        $this->load->library('form_validation');
        $this->lang->load('form_validation_lang', 'vietnamese');
	}

	public function index()
	{	
		if($this->input->post('search') && $this->input->post('search')!='')
		{
			$tim=$this->input->post('search');
			$this->load->model('room_model');
			$room = $this->room_model->tim_kiem_model($tim);
			$sotrang = CEIL($this->room_model->so_dong_du_lieu()/5);
			$phong = array("phong" => $room,"sotrang" => $sotrang);
			$this->load->view('admin_room_view_search',$phong);
		}  else {
			$this->load->model('room_model');
			$room = $this->room_model->load_tin_theo_trang(1);
			$sotrang = CEIL($this->room_model->so_dong_du_lieu()/5);
			$phong = array("phong" => $room,"sotrang" => $sotrang);
			$this->load->view('admin_room_view',$phong);	
		}
	}
	public function them_phong()
	{
		$room_name = $this->input->post('name');
		$price = $this->input->post('price');
		$type = $this->input->post('type');
		$status = $this->input->post('status');
		$this->form_validation->set_message('required', $this->lang->line('required'));
		$this->form_validation->set_message('is_unique', $this->lang->line('is_unique'));
		$this->form_validation->set_message('is_natural_no_zero', $this->lang->line('is_natural_no_zero'));
		$this->form_validation->set_rules('name', 'Tên phòng', 'required|is_unique[rooms.room_name]');
		$this->form_validation->set_rules('price', 'Giá', 'required|is_natural_no_zero');
		$this->form_validation->set_rules('type', 'Loại phòng', 'required|is_natural_no_zero');
		if($this->form_validation->run() == TRUE){
            $this->load->model('room_model');
            $this->room_model->them_phong_model($room_name,$price,$type,$status);
            echo '1';
        }
        else
        {
        	$loi = array();
            $loi[0] = form_error('name');
            $loi[1] = form_error('price');
            $loi[2] = form_error('type');
            echo json_encode($loi);
        }
	}
	public function xoa_phong()
	{
		$id = $this->input->post('id');
		$this->load->model('room_model');
        $this->room_model->xoa_phong_model($id);
	}
	public function sua_phong()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$price = $this->input->post('price');
		$type = $this->input->post('type');
		$status = $this->input->post('status');
		$this->load->model('room_model');
        $this->room_model->sua_phong_model($id,$name,$price,$type,$status);
	}
	public function tim_kiem()
	{
		$search = $this->input->post('search');
		$this->load->model('room_model');
		$cantim = $this->room_model->tim_kiem_model($search);
		$ketqua = array("phong" => $cantim);

		echo json_encode($ketqua);
	}
	public function page($trang)
	{
		$this->load->model('room_model');
		$phong = $this->room_model->load_tin_theo_trang($trang);
		$sotrang = CEIL($this->room_model->so_dong_du_lieu()/5);
		$phong = array("phong" => $phong,"sotrang" =>$sotrang);
		$this->load->view('admin_room_view', $phong);
	}
}


/* End of file room.php */
/* Location: ./application/controllers/room.php */