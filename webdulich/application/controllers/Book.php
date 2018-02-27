<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Book extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form','url');
        $this->load->library('form_validation');
        $this->lang->load('form_validation_lang', 'vietnamese');
        $this->load->model('Book_model');
	}

	public function index()
	{
		
	}
	public function InsertDatabase()
	{
		$cus_id=$this->input->post('cus_id');
		$adult_quan=$this->input->post('adult_quan');
		$chirld_quan=$this->input->post('chirld_quan');
		$quantity_total=$chirld_quan+$adult_quan;
		$name=$this->input->post('name');
		$phone_number=$this->input->post('phone');
		$address=$this->input->post('address');
		$note=$this->input->post('request');
		$payment_id=$this->input->post('pay_id');
		$giatreem=$this->input->post('giatreem');
		$gianguoilon=$this->input->post('gianguoilon');
		$tour_id=$this->input->post('tour_id');
		$room = $this->input->post('room');
		$so_ngay = $this->input->post('so_ngay');
		$date_start = $this->input->post('date_start');
		$this->form_validation->set_message('required', $this->lang->line('required'));
		$this->form_validation->set_message('is_unique', $this->lang->line('is_unique'));
		$this->form_validation->set_message('is_natural_no_zero', $this->lang->line('is_natural_no_zero'));
		$this->form_validation->set_rules('chirld_quan', 'số lượng trẻ em', 'required|is_natural_no_zero');
		$this->form_validation->set_rules('adult_quan', 'số lượng người lớn', 'required|is_natural_no_zero');
		$this->form_validation->set_rules('address', 'đầy đủ thông tin địa chỉ', 'required');
		$this->form_validation->set_rules('phone', 'đầy đủ số điện thoại', 'required');
		$this->form_validation->set_rules('name', 'đầy đủ họ tên', 'required');
		if($this->form_validation->run() == TRUE){
			$tong_room=0;
			foreach ($room as $value) {
				$gia = $this->Book_model->lay_gia($value);
				$tong_room = $tong_room + (int)$gia*(int)$so_ngay;
			}
			$total_price=$gianguoilon*$adult_quan+$giatreem*$chirld_quan+$tong_room;
			$id_book=$this->Book_model->insertByID($cus_id,$tour_id,$payment_id,$address,$phone_number,$adult_quan,$chirld_quan,$total_price,$quantity_total,$note,$date_start);
			foreach ($room as $value) {
				$this->Book_model->book_room($id_book,$value);
				$this->Book_model->status_room($value);
			}
			echo '1';
        }
        else
        {
        	$dl = array();
            $dl[0] = form_error('adult_quan');
            $dl[1] = form_error('chirld_quan');
            $dl[2] = form_error('address');
            $dl[3] = form_error('phone');
            $dl[4] = form_error('name');
            echo json_encode($dl);
        }
	}

}

/* End of file Book.php */
/* Location: ./application/controllers/Book.php */