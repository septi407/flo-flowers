<?php
include "koneksi.php";
$id = $_GET['ID'];

$hapus = mysqli_query($koneksi, "DELETE FROM tb_ktg WHERE id_ktg = '$id'");

if($hapus){
    echo "<script>alert('Data berhasil dihapus!')</script>";
    header("refresh:0, kategori.php");
}else{
    echo "<script>alert('Data gagal dihapus!')</script>";
    header("refresh:0, kategori.php");
}
?>