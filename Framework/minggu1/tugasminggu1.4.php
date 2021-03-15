<?php 

//Autor Rofina Aulia Noviati

//pendeklarasian kelas
	class komputer{
		var $merek; //property
        var $warna; //property
        var $ram; //property
        var $harddisk; //property
        var $processor;

        function mengedit_foto()
        {
        	return "Edit Foto";
        }
         function mengedit_video()
        {
        	return "Edit Video";
        }
         function instal_aplikasi()
        {
        	return "Menginstall aplikasi";
        }
         function memutar_musik()
        {
        	return "memutar musik";
        }
         function memutar_video()
        {
        	return "memutar video";
        }
}

$komputer_a = new komputer();
$komputer_a ->merek = "ACER";
$komputer_a ->warna = "Hitam";
$komputer_a ->ram = "4 GB";
$komputer_a ->harddisk = "2 TB";
$komputer_a ->processor = "Core i7";
?>
