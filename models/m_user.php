<?php
include_once 'm_koneksi.php';
class m_user{




    function tampil_data() {

        $conn = new koneksi();

        $sql = "SELECT * FROM anggota_polisi";

        $query = mysqli_query($conn->koneksi, $sql);
        if ($query->num_rows > 0) {
            while ($data = mysqli_fetch_object
            ($query)) 
            { 
                $result[] = $data;
            }
            return $result;
        } else {
            echo "tidak ada tabel ";
        }
    }
    function tambah($id_polisi, $nama_polisi, $nrp, $pangkat, $id_satuan, $tanggal_lahir, $jk){

        $conn = new koneksi();

        $sql = "INSERT INTO anggota_polisi VALUES ('$id_polisi', '$nama_polisi', '$nrp', '$pangkat','$id_satuan', '$tanggal_lahir', '$jk','')";

        $query = mysqli_query($conn->koneksi, $sql);

        if($query) {
            echo "<script>alert('awokwok');window.location='../views/v_contoh.php'</script>";
            
        }
        else{
            echo "<script>alert('gagal awikwok');window.location='../views/v_tambah.php'</script>";
        }
        
    }
}

?>