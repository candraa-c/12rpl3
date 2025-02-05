<?php
session_start();

class Koneksi
{
    private $host = "localhost";
    private $uname = "root";
    private $pass = "";
    private $db = "kepolisian";
    public $koneksi;

    function __construct()
    {
        $this->koneksi = new mysqli($this->host, $this->uname, $this->pass, $this->db);

        if ($this->koneksi->connect_error) {
            die("Koneksi database MySQL dan PHP GAGAL: " . $this->koneksi->connect_error);
        }
    }

    public function getKoneksi()
    {
        return $this->koneksi;
    }
}

$database = new Koneksi();
$conn = $database->getKoneksi();
?>