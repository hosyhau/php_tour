<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class khachhang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('khachhang_model');
		
	}

	public function index()
	{
	}
	// xem đơn đặt hàng
	public function Show($id)
	{
		$dl=$this->khachhang_model->Show_Tour($id);
		$dl = array('donhang' => $dl, );
		$this->load->view('customer_detail_view', $dl, FALSE);
	}
	// thong tin cá nhân khách hàng
	public function personal($id)
	{
		$dl=$this->khachhang_model->check_personal($id);
		$dl = array('hosocanhan' => $dl );
		$this->load->view('customer_view', $dl, FALSE);
	}
	public function Information()
	{
		$cus_id=$this->input->post('cus_id');
		$cus_name=$this->input->post('cus_name');
		$phone=$this->input->post('phone');
		$Birthday=$this->input->post('Birthday');
		if($this->khachhang_model->Editdata($cus_id,$cus_name,$phone,$Birthday)){
			echo 'Thanh Cong';
		}
		
	}
	public function Edit_mk()
	{
		$old_pass=md5($this->input->post('old_pass'));
		$new_pass=md5($this->input->post('new_pass'));
		$rep_pass=md5($this->input->post('rep_pass'));
		$cus_id=$this->input->post('cus_id');
		$check=($this->khachhang_model->check_mk($cus_id,$old_pass));
		if(($old_pass==$check)&&($new_pass==$rep_pass)&&($old_pass!=$new_pass)){
			$this->khachhang_model->Edit_password($cus_id,$rep_pass);
			echo 'Đổi mật khẩu thành công';
		}else if(strlen($new_pass)<=6){
			echo 'Yêu cầu bạn nhập mật khẩu an toàn hơn';
		}else if($old_pass==$check && $new_pass==$rep_pass && $old_pass=$new_pass){
			echo 'Không được trùng mới mật khẩu cũ';
		}else{
			echo 'Mật khẩu cũ hoặc mới không khớp';
		}
	}
	// thanh toán
	public function detail($tour_id)
	{
		$room_book =$this->khachhang_model->chi_tiet_tour($tour_id);
		$room = array("phong" => $room_book);
		$this->load->view('chi_tiet_room_view', $room, FALSE);
	}
	

}

/* End of file khachhang.php */
/* Location: ./application/controllers/khachhang.php */