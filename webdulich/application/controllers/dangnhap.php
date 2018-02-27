<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dangnhap extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('login');
	}
	public function dang_nhap()
	{
		$ur_name = $this->input->post('ur_name');
		$password = $this->input->post('password');
		$this->load->model('dangnhap_model');
		$ketqua = $this->dangnhap_model->kiem_tra_user($ur_name,$password);
		if($ketqua==false)
		{
			echo 'Tên tài khoản hoặc mật khẩu không chính xác';
			return false;
		}
		else{
			$dl= $this->session->set_userdata(array(
				'ad_name'=> $ketqua[0]['ad_name'],
				'ad_id' =>$ketqua[0]['ad_id'],
				'address' => $ketqua[0]['address']
			));
			return $dl;
		}
	}
	public function out()
	{
		$this->session->unset_userdata('ad_name');
	}
}

/* End of file dangnhap.php */
/* Location: ./application/controllers/dangnhap.php */