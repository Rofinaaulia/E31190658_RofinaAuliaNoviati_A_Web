<?php
 
//Autor Rofina Aulia Noviati
 
// buat class laptop
class laptop {
 
   // buat public property
   public $pemilik;
   public $merk;
 
   // buat public method
   public function hidupkan_laptop() {
     return "Hidupkan Laptop";
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();
  
// set property
$laptop_anto->pemilik="Anto";
$laptop_anto->merk = "ASUS";
// tampilkan property
echo $laptop_anto->pemilik; // Anto
  
// tampilkan method
echo $laptop_anto -> hidupkan_laptop(); // "Hidupkan Laptop"
echo $laptop_anto->merk;
?>