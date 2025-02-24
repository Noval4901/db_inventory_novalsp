<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data Jenis</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <h1>Tambah Data Jenis</h1>
    <form action="proses_tambah.php" method="post">
        <label for="exampleInputEmail1">ID Jenis</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_jenis">
        <br>
        <label for="exampleInputEmail1">Nama Jenis</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_jenis">
        <br>
        <button type="submit">Simpan</button>
    </form>
    </div>
</body>
</html>