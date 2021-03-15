<?php

//Rofina Aulia Noviati

//merupakan sintax PHP yg memastikan tidak ada script secara langsung
defined('BASEPATH') OR exit('No direct script access allowed');

//pendeklarasian kelas yang bernama welcome
class Helloworld extends CI_Controller {

//pendeklarasian function dalam class	
public function index(){

	//sebuah Associative Array dengan beberapa data
	$data = array(
		'nama' => "Rofina Aulia N",
        'NIM' => "E31190658",
        'Golongan' => "Mif_A");
        

//emungkinkan pengambilan data melewati Array atau Associative Array, 
//dan pada akhrinya ditampilkan melewati Controller sebagai perantara.
 $this->load->view('hello_ci',$data);

}
	//pendeklarasian function dalam class
	public function fungsi(){

	echo "Function fungsi dari Controller Helloworld";

}
	//pendeklarasian function dalam class
	public function parameter ($nama)
{
	echo "Selamat Datang" . $nama;
}

}
?>