<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ql_book extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ql_book_model');
	}

	public function index()
	{
		$sotrang = ceil($this->ql_book_model->dem_so_ketqua()/5);
		$book = $this->ql_book_model->load_theo_trang(1);
		$ketqua = array("sotrang" => $sotrang,"donhang" => $book);
		$this->load->view('admin_ql_book_view',$ketqua);
	}
	public function sua_trang_thai()
	{
		$book_id = $this->input->post('book_id');
		$status = $this->input->post('status');
		$this->ql_book_model->sua_trang_thai($book_id,$status);
	}
}

/* End of file ql_book.php */
/* Location: ./application/controllers/ql_book.php */