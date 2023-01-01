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
    //database handler
    private $dbh;
    //statement
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = "mysql:host=localhost;dbname=phpmvc";

        try {
            $this->dbh = new PDO($dsn, "root", "");
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare("SELECT * FROM mahasiswa");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
