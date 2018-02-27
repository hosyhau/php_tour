<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dulich extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dulich_model');
		$this->load->model('Payment_model');
		$this->load->model('Trangchu_model');
	}

	public function index()
	{	
		$this->load->model('cus_tour_model');
		$danhmuc = $this->cus_tour_model->hien_danh_muc();
		$tour = $this->cus_tour_model->hien_tour_theo_trang(1,1,1);
		$sotrang = ceil($this->cus_tour_model->dem_so_dong()/6);
		$diadiem = $this->cus_tour_model->hien_dia_diem();
		$slider = $this->cus_tour_model->lay_slider();
		$ketqua = array("danhmuc" => $danhmuc,"tour" => $tour,"diadiem" => $diadiem,"sotrang" => $sotrang,"slider" => $slider);
		$this->load->view('Book_tours_view',$ketqua);
	}
	public function Show($links)
	{

		$Show_tour = $this->Dulich_model->selectByName($links);
		$tour_id = $Show_tour[0]['tour_id'];
		if(($tour_id) == $Show_tour[0]['tour_id'])
		{
			$ketqua[$tour_id] =  $Show_tour[0];
		}
		$view = $Show_tour[0]['view_of'];
		$view = $view+1;
		$this->Dulich_model->tang_view($tour_id,$view);
		$_SESSION['wishlist'][$tour_id] = $ketqua[$tour_id];
		$ngaydi = $this->Dulich_model->ngay_di($links);
		$coment = $this->Dulich_model->load_coment($links);
		$Show_payment=$this->Payment_model->selectPayment();
		$room = $this->Dulich_model->select_room($links);
		$Loadslider=$this->Trangchu_model->Loadslider();
		$dl = array(
			'Show_tours' =>$Show_tour,
			'Show_payment' =>$Show_payment,
			'coment' => $coment,
			'room' => $room,
			'ngaydi' => $ngaydi,
			'Loadslider'=>$Loadslider
			 );
			
		$this->load->view('Show_tours_view', $dl, FALSE);
	}
	public function page($trang)
	{
		$this->load->model('cus_tour_model');
		$danhmuc = $this->cus_tour_model->hien_danh_muc();
		$tour = $this->cus_tour_model->hien_tour_theo_trang($trang,1,1);
		$sotrang = ceil($this->cus_tour_model->dem_so_dong()/6);
		$diadiem = $this->cus_tour_model->hien_dia_diem();
		$slider = $this->cus_tour_model->lay_slider();
		$ketqua = array("danhmuc" => $danhmuc,"tour" => $tour,"diadiem" => $diadiem,"sotrang" => $sotrang,"slider" => $slider);
		$this->load->view('Book_tours_view',$ketqua);
	}
	public function tim_theo_local()
	{
		$local_id = $this->input->post('id');
		$this->load->model('cus_tour_model');
		$tour_local = $this->cus_tour_model->gettour_theo_local($local_id);
		if($tour_local)
		{
			$ketqua = array("tour" => $tour_local);
			$this->load->view('Tour_tim_theo_local',$ketqua);
		}
	}
	
	public function sap_xep()
	{
		$type = 0;
		if($type = $this->input->post('type'))
		{
			$type = $this->input->post('type');
		}
		switch ($type) {
			case 0:
				$bien = 1;
				$loai = 1;
				break;
			case 1:
				$bien = 1;
				$loai = 0;
				break;
			case 2:
				$bien = 2;
				$loai = 0;
				break;
			case 3:
				$bien = 2;
				$loai = 1;
				break;
		}
		$this->load->model('cus_tour_model');
		$tour = $this->cus_tour_model->hien_tour_theo_trang(1,$bien,$loai);
		$sotrang = ceil($this->cus_tour_model->dem_so_dong()/6);
		$ketqua = array("tour" => $tour,"sotrang" => $sotrang);
		$this->load->view('Book_tours_view_sap_xep',$ketqua);
	}
	public function tim_kiem_cate_price()
	{
		$cate_id = $this->input->post('cate_id');
		$price = $this->input->post('price');
		$this->load->model('cus_tour_model');
		$tour_local = $this->cus_tour_model->tim_kiem_cate_price_model($cate_id,$price);
		if($tour_local)
		{
			$ketqua = array("tour" => $tour_local);
			$this->load->view('Tour_tim_theo_local',$ketqua);
		}
		
	}
	public function them_binhluan()
	{
		$cus_id = $this->input->post('cus_id');
		$content = $this->input->post('content');
		$tour_id = $this->input->post('tour_id');
		$time = date('Y-m-d H:i:s'); 
		$this->load->model('Dulich_model');
		$this->Dulich_model->them_binhluan($cus_id,$tour_id,$content,$time);
		echo '1';
	}
	public function xoa_binhluan()
	{
		$coment_id = $this->input->post('coment_id');
		$this->Dulich_model->xoa_binhluan($coment_id);
	}
	public function sua_binhluan()
	{
		$coment_id = $this->input->post('coment_id');
		$content = $this->input->post('content');
		$this->Dulich_model->sua_binhluan($coment_id,$content);
	}
	public function search_tour()
	{
		$tour_name = $this->input->post('tour_name');
		if($this->input->post('tour_name') && $this->input->post('tour_name') != '')
		{
			$this->load->model('Dulich_model');
			$tour = $this->Dulich_model->search_tour_model($tour_name);
			$sodong = $this->Dulich_model->dem_so_ket_qua($tour_name);
			$list = array("tour" => $tour,"sodong" => $sodong);
			$this->load->view('search_view_result', $list, FALSE);
		}
	}
}

/* End of file Book.php */
/* Location: ./application/controllers/Book.php */