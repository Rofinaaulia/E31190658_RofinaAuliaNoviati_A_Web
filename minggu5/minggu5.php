<?php 

//Autor Rofina Aulia Noviati

  abstract class BangunDatar{
    abstract protected function hitungLuas();
  }

  class Persegi extends BangunDatar{
    protected $sisi = 4;

    public function hitungLuas(){
      return pow($this->sisi,2);
    }
  }

  class Segitiga extends BangunDatar{
    protected $alas = 4;
    protected $tinggi = 3;

    public function hitungLuas(){
      return (0.5 * $this->alas * $this->tinggi);
    }
  }

  class Lingkaran extends BangunDatar{
    protected $jarijari = 7;
    
    public function hitungLuas(){
      return (3.14 * pow($this->jarijari,2));
    }
  }

  $persegi = new Persegi();
  echo 'Luas Persegi = '. $persegi->hitungLuas() . "<br>";

  $segitiga = new Segitiga();
  echo 'Luas Segitiga = '.$segitiga->hitungLuas() . "<br>";

  $lingkaran = new Lingkaran();
  echo 'Luas Lingkaran = '.$lingkaran->hitungLuas() . "<br>";

?>