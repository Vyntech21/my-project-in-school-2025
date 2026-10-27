<?php
include 'koneksi.php';
 
$judul   = mysqli_real_escape_string($koneksi, $_POST['judul']);
$penulis = mysqli_real_escape_string($koneksi, $_POST['penulis']);
$tanggal = $_POST['tanggal'];
$hashtag = mysqli_real_escape_string($koneksi, $_POST['hashtag']);
$isi     = mysqli_real_escape_string($koneksi, $_POST['isi']);
 
// Upload gambar (opsional)
$gambar = "";
if (isset($_FILES['gambar']) && $_FILES['gambar']['name'] != "") {
  $namaFile   = time() . "_" . basename($_FILES['gambar']['name']);
  $tujuan     = "uploads/" . $namaFile;
 
  if (!is_dir("uploads")) {
    mkdir("uploads", 0777, true);
  }
 
  if (move_uploaded_file($_FILES['gambar']['tmp_name'], $tujuan)) {
    $gambar = $namaFile;
  }
}
 
$query = "INSERT INTO artikel (judul, penulis, tanggal, hashtag, isi, gambar)
          VALUES ('$judul', '$penulis', '$tanggal', '$hashtag', '$isi', '$gambar')";
 
if (mysqli_query($koneksi, $query)) {
  header("Location: admin.php");
  exit;
} else {
  echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}
?>