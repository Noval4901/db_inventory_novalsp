<?php 

$id_barang = $_GET['id_barang'];
$id_jenis = $_POST['id_jenis'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$nama_barang = $_POST['nama_barang'];

include '../../Config/Koneksi.php';

$query = mysqli_query($conn,
"UPDATE barang SET nama_barang='$nama_barang' WHERE id_barang='$id_barang'");

if($query){
    echo "<script>alert('Data Berhasil di Edit')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('Data Gagal di Edit')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}   