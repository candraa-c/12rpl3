<?php
    include '../models/m_koneksi.php';

    $sql = "SELECT id_polisi, nama_polisi, nrp, pangkat, id_satuan, tanggal_lahir, jk FROM anggota_polisi";
$result = $conn->query($sql);

if (!$result) {
    die("Query Error: " . $conn->error);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
          <a class="nav-link" href="#">Tambah anggota</a>
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
           <?php if ($result->num_rows > 0): ?>
               <?php $no = 1; while ($row = $result->fetch_assoc()): ?>
                   <tr>
                       <td><?= $no++; ?></td>
                       <td><?= $row['nama_polisi']; ?></td>
                       <td><?= $row['nrp']; ?></td>
                       <td><?= htmlspecialchars($row['pangkat']); ?></td>
                       <td><?= htmlspecialchars($row['id_satuan']); ?></td>
                       <td><?= htmlspecialchars($row['tanggal_lahir']); ?></td>
                       <td><?= htmlspecialchars($row['jk']); ?></td>
                       <td>
                           <a href="edit.php?id=<?= $row['id_polisi']; ?>" class="btn btn-primary btn-sm">Edit</a>
                           <a href="delete.php?id=<?= $row['id_polisi']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                       </td>
                   </tr>
               <?php endwhile; ?>
           <?php else: ?>
               <tr><td colspan="6" class="text-center">Tidak ada data</td></tr>
           <?php endif; ?>
       </tbody>
   </table>
</div>
</body>
</html>

<?php
$conn->close();
?>

</body>
</html>