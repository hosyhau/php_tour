<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tour_detail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form','url');
        $this->load->library('form_validation');
        $this->lang->load('form_validation_lang', 'vietnamese');
	}

	public function index()
	{
		$this->load->model('tour_detail_model');
		$chitiettour = $this->tour_detail_model->load_tin_theo_trang(1);
		$tour = $this->tour_detail_model->lay_tour();
		$rooms = $this->tour_detail_model->lay_room();
		$sotrang = CEIL($this->tour_detail_model->so_dong_du_lieu()/5);
		$dulieu = array("chitiettour" => $chitiettour,"sotrang" => $sotrang,"tour" => $tour,"rooms" => $rooms);
		$this->load->view('admin_tour_detail_view',$dulieu);
	}
	public function them_chitiet_tour()
	{
		$tour_id = $this->input->post('tour_id');
		$room_id = $this->input->post('room_id');
		$date = $this->input->post('date');
		$time = $this->input->post('time');
		$status = $this->input->post('status');
		$this->form_validation->set_message('required', $this->lang->line('required'));
		$this->form_validation->set_message('is_natural_no_zero', $this->lang->line('is_natural_no_zero'));
		$this->form_validation->set_rules('tour_id', 'Tour', 'required|is_natural_no_zero');
		$this->form_validation->set_rules('room_id', 'Phòng', 'required');
		$this->form_validation->set_rules('date', 'Ngày', 'required');
		$this->form_validation->set_rules('time', 'Ngày', 'required');
		if($this->form_validation->run() == TRUE){
            $this->load->model('tour_detail_model');
            $this->tour_detail_model->them_chitiet_tour_model($tour_id,$room_id,$date,$time,$status);
            echo '1';
        }
        else
        {
        	$loi = array();
            $loi[0] = form_error('tour_id');
            $loi[1] = form_error('room_id');
            $loi[2] = form_error('date');
            $loi[3] = form_error('time');
            echo json_encode($loi);
        }
	}
	public function xoa_chitiet_tour()
	{
		$tour_id = $this->input->post('tour_id');
		$room_id = $this->input->post('room_id');
		$date = $this->input->post('date');
		$time = $this->input->post('time');
		$this->load->model('tour_detail_model');
		$this->tour_detail_model->xoa_chitiet_tour_model($tour_id,$room_id,$date,$time);
	}
	public function sua_chitiet_tour()
	{
		$tour_id_sua = $this->input->post('tour_id_sua');
		$room_id_sua = $this->input->post('room_id_sua');
		$date_sua = $this->input->post('date_sua');
		$time_sua = $this->input->post('time_sua');
		$tour_id = $this->input->post('tour_id');
		$room_id = $this->input->post('room_id');
		$date = $this->input->post('date');
		$time = $this->input->post('time');
		$status = $this->input->post('status');
		$this->load->model('tour_detail_model');
        $this->tour_detail_model->sua_chitiet_tour_model($tour_id_sua,$room_id_sua,$date_sua,$time_sua,$tour_id,$room_id,$date,$time,$status);
	}
	public function page($trang)
	{
		$this->load->model('tour_detail_model');
		$chitiettour = $this->tour_detail_model->load_tin_theo_trang($trang);
		$tour = $this->tour_detail_model->lay_tour();
		$rooms = $this->tour_detail_model->lay_room();
		$sotrang = CEIL($this->tour_detail_model->so_dong_du_lieu()/5);
		$dulieu = array("chitiettour" => $chitiettour,'sotrang' => $sotrang,"tour" => $tour,"rooms" => $rooms);
		$this->load->view('admin_tour_detail_view',$dulieu);
	}
}

/* End of file tour_detail.php */
/* Location: ./application/controllers/tour_detail.php */