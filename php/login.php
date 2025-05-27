<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($query);

if ($cek > 0) {
  $_SESSION['username'] = $username;
  header("Location: ../admin.html");
} else {
  echo "<script>alert('Username atau password salah!'); window.location.href='../login.html';</script>";
}
?>
