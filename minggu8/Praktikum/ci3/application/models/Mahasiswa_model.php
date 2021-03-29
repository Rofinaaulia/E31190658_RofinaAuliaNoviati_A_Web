<?php
class Mahasiswa_model extends CI_Model
{
    public function get_data()
    {
        $data_mahasiswa = [
            ["nama" => "Jihan Farhatul", "prodi" => "MIF"],
            ["nama" => "Ageng Wijaya", "prodi" => "TKK"],
            ["nama" => "Inggrid Amalia", "prodi" => "TIF"]
        ];
        return $data_mahasiswa;
    }
}
