<?php
class Hello extends CI_Conntroller{
	public function index(){
		//c3 = memuat model 'Hello_model'
		$this->load->model('Hello_model');
		
		//Pengambilan objek dari kelas Hello_model dan dimuat di var $model
		$model = $this->Hello_model;
		
		//Mengambil data dari model
		$a = $model->txt;
		
		//memanggil file view
		$this->load->view('helloview', $data);//file view
	}
}
?>