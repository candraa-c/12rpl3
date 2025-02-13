<?php
include '../models/m_user.php';
    
//instasiasi objek/pembuatan objek
$user = new m_user();


$users = $user->tampil_data();
//untuk menangani eror pada program
try{
    $id_polisi= $_POST['id_polisi'];
    $nama_polisi = $_POST['nama_polisi']; 
    $nrp = $_POST['nrp'];
    $pangkat = $_POST['pangkat'];
    $id_satuan = $_POST['id_satuan'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jk = $_POST['jk'];

    if ($_GET['aksi'] == 'tambah'){     
        $user->tambah($id_polisi, $nama_polisi, $nrp, $pangkat, $id_satuan, $tanggal_lahir, $jk);
    }
}catch (Exception $e){
echo $e->getMessage();

}