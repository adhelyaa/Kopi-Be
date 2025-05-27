<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$folder = "../images/";

move_uploaded_file($tmp, $folder . $gambar);

mysqli_query($koneksi, "INSERT INTO menu (nama, deskripsi, kategori, harga, gambar) 
VALUES ('$nama', '$deskripsi', '$kategori', '$harga', '$gambar')");

echo "<script>alert('Menu berhasil ditambahkan!'); window.location.href='../menu.html';</script>";
?>
