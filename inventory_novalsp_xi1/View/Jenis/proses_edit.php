<?php 

$id_jenis = $_GET['id_jenis'];
$nama_jenis = $_POST['nama_jenis'];

include '../../Config/Koneksi.php';

$query = mysqli_query($conn,
"UPDATE jenis SET nama_jenis='$nama_jenis' WHERE id_jenis='$id_jenis'");

if($query){
    echo "<script>alert('Data Berhasil di Edit')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('Data Gagal di Edit')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}