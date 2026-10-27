<?php
include 'koneksi.php';
 
$id = $_GET['id'];
 
$query = "DELETE FROM artikel WHERE id = '$id'";
mysqli_query($koneksi, $query);
 
header("Location: admin.php");
exit;
?>