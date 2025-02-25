<?php 

$id_jenis = $_GET['id_jenis'];

include '../../Config/Koneksi.php';
$query = mysqli_query($conn, 
"DELETE FROM jenis WHERE id_jenis='$id_jenis'");

if($query){
    echo "<script>alert('Data Berhasil Di Hapus')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('Data Gagal Di Hapus')</script>";
    echo "<script>window.location.href='index.php'</script>";
}