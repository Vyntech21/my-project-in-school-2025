<?php
include 'koneksi.php';
 
$id          = $_POST['id'];
$judul       = mysqli_real_escape_string($koneksi, $_POST['judul']);
$paragraf    = mysqli_real_escape_string($koneksi, $_POST['paragraf']);
$teks_tombol = mysqli_real_escape_string($koneksi, $_POST['teks_tombol']);
 
// Cek apakah ada gambar baru diupload
$gambarQuery = "";
if (isset($_FILES['gambar']) && $_FILES['gambar']['name'] != "") {
  $namaFile = time() . "_" . basename($_FILES['gambar']['name']);
  $tujuan   = "uploads/" . $namaFile;
 
  if (!is_dir("uploads")) {
    mkdir("uploads", 0777, true);
  }
 
  if (move_uploaded_file($_FILES['gambar']['tmp_name'], $tujuan)) {
    $gambarQuery = ", gambar = '$namaFile'";
  }
}
 
$query = "UPDATE hero SET
            judul = '$judul',
            paragraf = '$paragraf',
            teks_tombol = '$teks_tombol'
            $gambarQuery
          WHERE id = '$id'";
 
if (mysqli_query($koneksi, $query)) {
  header("Location:index.php");
  exit;
} else {
  echo "Gagal update data: " . mysqli_error($koneksi);
}
?>