<?php
class Mahasiswa_model extends CI_Model
{
    public function getDataMahasiswa()
    {
        $data_mahasiswa = [
            ["nama" => "Jihan Farhatul", "prodi" => "MIF"],
            ["nama" => "Ageng Wijaya", "prodi" => "TKK"],
            ["nama" => "Inggrid Amalia", "prodi" => "TIF"]
        ];
        return $data_mahasiswa;
    }

    public function getDataProdi()
    {
        $data_prodi = [
            ["prodi" => "MIF", "keterangan" => "Manajemen Informatika"],
            ["prodi" => "TKK", "keterangan" => "Teknik Komputer"],
            ["prodi" => "TIF", "keterangan" => "Teknik Informatika"]
        ];
        return $data_prodi;
    }

    public function getDataAngkatan()
    {
        $data_angkatan = [
            ["tahun" => "2016"],
            ["tahun" => "2017"],
            ["tahun" => "2018"]
        ];
        return $data_angkatan;
    }
}
