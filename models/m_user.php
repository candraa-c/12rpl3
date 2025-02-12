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
}

?>