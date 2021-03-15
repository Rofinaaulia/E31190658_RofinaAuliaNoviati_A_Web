<?php  

//Autor Rofina Aulia Noviati

//membuat class mobil
class mobillengkap {

	public function nonton_tv()
	{
		return "Tv di hidupkan. mencari channel<br>Tv menampilkan gambar. ";
	}
}
 class mobilBMW extends mobillengkap{

 	public function hidupkanmobil()
 	{
 		$pesan = "nyalakan mobil<br>";
 		return $pesan . $this -> nonton_tv();
 	}
 	public function matikanmobil()
 	{
 		return "matikan mobil";
 	}
 	public function ubahgigi()
 	{
 		return "ubah gigi";
 	}
 }

 $bmw = new mobilbmw();
 echo $bmw -> hidupkanmobil();
?>