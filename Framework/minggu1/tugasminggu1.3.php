<?php

//Autor Rofina Aulia Noviati

//pendeklarasian class
	class kendaraan {
		var $jumlahRoda;//properties
		var $warna;//properties
		var $bahanBakar;//properties
		var $harga;//properties
		var $merek;//properties
		var $tahunPembuatan;//properties
		
		function dapatSubsidi() {
			if ($this -> bahanBakar = 'Premium' && $this -> tahunPembuatan < 2005) {

			$subsidi = 'Dapat';
			} else {  
				$subsidi = 'Tidak Dapat';
				return $subsidi;
			}
		}
		
		function hargaSecond() {
			if ($this -> tahunPembuatan > 2005){
				$second = $this -> harga * 20/100;
			}
			else if ($this-> tahunPembuatan >= 2005){
				$second = $this -> harga * 30/100;
			}
			else if ($this-> tahunPembuatan <= 2000) {
				$second = $this -> harga * 40/100;

			}
				return $second;		

		}
		
	}
?>