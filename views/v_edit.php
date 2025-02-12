

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Menyertakan CSS Bootstrap untuk tampilan form -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Edit Anggota</title>
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
          <a class="nav-link" href="#">Edit Anggota</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-disabled="true">Latihan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

   <div class="container mt-4">
   <h2 class="text-center">Edit Anggota</h2>
   <!-- Form untuk menambahkan data anggota -->
   <form method="POST" action="">
       <div class="mb-3">
           <label for="nama_polisi" class="form-label">Nama Lengkap</label>
           <input type="text" class="form-control" id="nama_polisi" name="nama_polisi" required>
       </div>
       <div class="mb-3">
           <label for="nrp" class="form-label">NRP</label>
           <input type="text" class="form-control" id="nrp" name="nrp" required>
       </div>
       <div class="mb-3">
           <label for="pangkat" class="form-label">Pangkat</label>
           <input type="text" class="form-control" id="pangkat" name="pangkat" required>
       </div>
       <div class="mb-3">
           <label for="id_satuan" class="form-label">ID Satuan</label>
           <input type="text" class="form-control" id="id_satuan" name="id_satuan" required>
       </div>
       <div class="mb-3">
           <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
           <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
       </div>
       <div class="mb-3">
           <label for="jk" class="form-label">Jenis Kelamin</label>
           <select class="form-control" id="jk" name="jk" required>
               <option value="L">Laki-Laki</option>
               <option value="P">Perempuan</option>
           </select>
       </div>
       <button type="submit" name="submit" class="btn btn-primary">Edit Anggota</button>
   </form>
</div>

<!-- Menyertakan Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
