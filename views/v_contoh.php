<?php
    // Menyertakan file koneksi ke database
    include '../models/m_koneksi.php';

    // Query untuk mengambil data dari tabel anggota_polisi
    $sql = "SELECT id_polisi, nama_polisi, nrp, pangkat, id_satuan, tanggal_lahir, jk FROM anggota_polisi";
    // Menjalankan query
    $result = $conn->query($sql);

    // Mengecek apakah query berhasil dijalankan atau tidak
    if (!$result) {
        die("Query Error: " . $conn->error);  // Jika gagal, tampilkan error
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Menyertakan CSS Bootstrap untuk tampilan yang lebih rapi -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="v_tambah.php">Tambah anggota</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-disabled="true">Latihan</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

   <div class="container mt-4">
   <h2 class="text-center">Daftar Anggota</h2>
   <table class="table table-striped">
       <thead>
           <tr>
               <th>ID</th>
               <th>Nama Lengkap</th>
               <th>NRP</th>
               <th>Pangkat</th>
               <th>ID Satuan</th>
               <th>Tanggal Lahir</th>
               <th>JK</th>
               <th>Action</th>
           </tr>
       </thead>
       <tbody>
       <?php
            $no = 1;  // Menambahkan nomor urut untuk setiap anggota
            // Melakukan perulangan untuk menampilkan setiap baris data yang diambil dari query
            while ($data = $result->fetch_assoc()) :
                // Format tanggal lahir menjadi format yang lebih mudah dibaca
                $formatted_date = date("d F Y", strtotime($data['tanggal_lahir']));
        ?>
            <tr>
                <!-- Menampilkan nomor urut -->
                <th scope="row"><?= $no++ ?></th>
                <!-- Menampilkan data anggota lainnya -->
                <td><?= $data['nama_polisi'] ?></td>
                <td><?= $data['nrp'] ?></td>
                <td><?= $data['pangkat'] ?></td>
                <td><?= $data['id_satuan'] ?></td>
                <td><?= $formatted_date ?></td>
                <td><?= $data['jk'] ?></td>
                <td>
                    <center>
                        <!-- Tombol untuk mengedit data anggota -->
                        <a href="v_edit.php?id=<?= $data['id_polisi'] ?>"><button type="button" class="btn btn-round btn-primary">Edit</button></a>

                        <!-- Tombol untuk menghapus data anggota, dengan konfirmasi terlebih dahulu -->
                        <a onclick="return confirm('Apakah yakin data akan di hapus?')" href="../controllers/c_user.php?id=<?= $data['id_polisi'] ?>&aksi=hapus"><button type="button" name="hapus" class="btn btn-round btn-danger">Hapus</button></a>
                    </center>
                </td>
            </tr>
        <?php endwhile; ?>
       </tbody>
   </table>
</div>
</body>
</html>
