<?php

class Mahasiswa_model
{
    // private $mhs = [
    //     [
    //         "nama" => "Darul Annas",
    //         "nim" => "111680",
    //         "email" => "darulannas7@gmail.com",
    //         "jurusan" => "Sistem Informasi"
    //     ],
    //     [
    //         "nama" => "Darul Annas",
    //         "nim" => "111680",
    //         "email" => "darulannas7@gmail.com",
    //         "jurusan" => "Sistem Informasi"
    //     ],
    //     [
    //         "nama" => "Darul Annas",
    //         "nim" => "111680",
    //         "email" => "darulannas7@gmail.com",
    //         "jurusan" => "Sistem Informasi"
    //     ]
    // ];

    private $table = "mahasiswa";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllMahasiswa()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }
}
