<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Account_model');
		//$this->load->view('Customer_view');
	}

	public function index()
	{
		
	}
	public function Out()
	{
		$dangnhap = array(
				'cus_id',
				'cus_name',
				'email',
				'phone',
				'address',
				'password',
				'status',
				'Birthday'
			);
		$this->session->unset_userdata($dangnhap);
	}
	public function login()
	{
		$email=$this->input->post('tendangnhap');
		$password=md5($this->input->post('matkhau'));
		$kq=$this->Account_model->checkAccount($email,$password);
		if($kq){
			$dangnhap = array(
				'cus_id'=>$kq[0]['cus_id'],
				'cus_name'=>$kq[0]['cus_name'],
				'email'=>$kq[0]['email'],
				'phone'=>$kq[0]['phone'],
				'address'=>$kq[0]['address'],
				'password'=>$kq[0]['password'],
				'status'=>$kq[0]['status'],
				'Birthday'=>$kq[0]['Birthday']
			);
			$this->session->set_userdata($dangnhap);
			
		}else{
			echo 'Tài khoản hoặc mật khẩu không đúng';
		}
	}
}

/* End of file Account.php */
/* Location: ./application/controllers/Account.php */