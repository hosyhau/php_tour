<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('user_view');
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */