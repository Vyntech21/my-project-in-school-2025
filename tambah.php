<?php include 'koneksi.php'; ?>

<form method="POST" action="simpan.php" enctype="multipart/form-data">
  <label>Judul Artikel</label>
  <input type="text" name="judul" required>

  <label>Penulis</label>
  <input type="text" name="penulis" required>

  <label>Tanggal</label>
  <input type="date" name="tanggal" required>

  <label>Hashtag</label>
  <input type="text" name="hashtag" placeholder="Contoh: CSS">

  <label>Isi Artikel</label>
  <textarea name="isi" rows="5"></textarea>

  <label>Gambar</label>
  <input type="file" name="gambar">

  <button type="submit">+ Tambah Artikel</button>
</form>