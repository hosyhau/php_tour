<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trangchu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Trangchu_model');

	}

	public function index()
	{
		$LoadTourByNew=$this->Trangchu_model->LoadTourByNew();
		$LoadTourHOT=$this->Trangchu_model->LoadTourHOT();
		$LoadTourSapKhoiHanh=$this->Trangchu_model->LoadTourSapKhoiHanh();
		$Loadslider=$this->Trangchu_model->Loadslider();
		$dl =array(
			'LoadTourByNew' => $LoadTourByNew,
			'LoadTourHOT' => $LoadTourHOT,
			'LoadTourSapKhoiHanh' => $LoadTourSapKhoiHanh,
			'Loadslider' => $Loadslider
		);
		$this->load->view('trangchu_View',$dl,false);
	}

}

/* End of file Trangchu.php */
/* Location: ./application/controllers/Trangchu.php */