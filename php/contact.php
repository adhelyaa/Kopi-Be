<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = htmlspecialchars($_POST['nama']);
  $email = htmlspecialchars($_POST['email']);
  $pesan = htmlspecialchars($_POST['pesan']);

  $to = "kopibe@emailkamu.com"; // GANTI DENGAN EMAIL TUJUANMU
  $subject = "Pesan dari $nama";
  $message = "Nama: $nama\nEmail: $email\nPesan:\n$pesan";
  $headers = "From: $email";

  if (mail($to, $subject, $message, $headers)) {
    echo "<script>alert('Pesan berhasil dikirim!'); window.location.href='../contact.html';</script>";
  } else {
    echo "<script>alert('Pesan gagal dikirim!'); window.location.href='../contact.html';</script>";
  }
}
?>
