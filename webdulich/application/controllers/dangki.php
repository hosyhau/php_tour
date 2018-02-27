<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dangki extends CI_Controller {

	public function __construct()
	{
		//	$this->load->helper(array('form', 'url'));
		
		parent::__construct();
        $this->load->helper('form','url');
        $this->load->library('form_validation');
        $this->lang->load('form_validation_lang', 'vietnamese');
        $this->load->model('dangki_model');
	}

	public function index()
	{
		$this->load->view('dangki_view');

	}
	public function dang_ki()
    {
    	
    	$email = $this->input->post('email');
    	$password = md5($this->input->post('password'));
    	
    	$check = $this->dangki_model->kiem_tra_mail($email);
    	if($check)
    	{
    		$this->dangki_model->dang_ki($email,$password);
    	}
    	else {
    		echo 'Email đã được đăng kí';
    	}
    }
    public function Dangkyngay()
    {
        $cus_name = $this->input->post('cus_name');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $rep_password = md5($this->input->post('rep_password'));
        $password = md5($this->input->post('password'));
        $check = $this->dangki_model->kiem_tra_mail($email);
        $this->form_validation->set_message('required', $this->lang->line('required'));
        $this->form_validation->set_message('valid_email', $this->lang->line('valid_email'));
        $this->form_validation->set_rules('cus_name', 'đầy đủ họ tên', 'required|required');
        $this->form_validation->set_rules('email', '@gmail.com', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'đầy đủ số điện thoại', 'required|required');
        $this->form_validation->set_rules('rep_password', 'nhập lại mật khẩu', 'required|required');
        $this->form_validation->set_rules('password', 'mật khẩu', 'required|required');
        if($this->form_validation->run() == TRUE){
            if($check){
                $this->dangki_model->Dangkyngay($cus_name,$phone,$email,$password);
                echo "1";
            }else if(strlen($rep_password)<=6 || strlen($password)<=6){
                echo "2";
            }else if($rep_password != $password){
                echo "3";
            }else{
                echo "4";
            } 
        }else{
            $dl = array();
            $dl[0] = form_error('cus_name');
            $dl[1] = form_error('email');
            $dl[2] = form_error('phone');
            $dl[3] = form_error('rep_password');
            $dl[4] = form_error('password');
            echo json_encode($dl);
        }

    }
        
            
}

/* End of file dangki.php */
/* Location: ./application/controllers/dangki.php */