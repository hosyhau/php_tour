<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class wishlist extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('wishlist_view');
	}
	public function xoa()
	{
		unset($_SESSION['wishlist']);
		header('Location: http://localhost:8080/webdulich/wishlist');
	}

}

/* End of file wishlist.php */
/* Location: ./application/controllers/wishlist.php */