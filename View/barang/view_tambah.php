<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Valls.Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">   
          <a class="nav-link active" aria-current="page" href="#">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Jenis</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</head>
<body>
<div class="container">
    <h1>Tambah Barang</h1>
    <form action="proses_tambah.php" method="post">
        <label for="exampleInputEmail1" class="form-label">ID Barang</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_barang">
        <br>
        <label for="exampleInputEmail1" class="form-label">ID Jenis</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_jenis">
        <br>
        <label for="exampleInputEmail1" class="form-label">Stok</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="stok">
        <br>
        <label for="exampleInputEmail1">Harga</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga">
        <br>
        <label for="exampleInputEmail1">Nama Barang</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_barang">
        <br>
        <button class="btn btn-primary" type="submit">Simpan</button>
    </form>
</div>
</body>
</html>