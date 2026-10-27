<?php
include 'koneksi.php';

$query = "SELECT * FROM hero LIMIT 1";
$result = mysqli_query($koneksi, $query);
$hero = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Halaman Utama - Nova</title>
<style>
  * { margin:0; padding:0; box-sizing:border-box; font-family:'Segoe UI', Arial, sans-serif; }
  body { background-color:#eef2f3; min-height:100vh; }
  .navbar { background-color:#17957f; padding:14px 40px; display:flex; align-items:center; gap:40px; }
  .navbar .brand { color:#fff; font-weight:700; font-size:18px; margin-right:auto; }
  .navbar a { color:#eafff9; text-decoration:none; font-size:14px; }
  .navbar a:hover { text-decoration:underline; }
  .container { max-width:900px; margin:40px auto; padding:0 20px; }
  .card { background-color:#fff; border-radius:10px; box-shadow:0 2px 10px rgba(0,0,0,0.08); padding:30px; }
  .card h2 { color:#1e293b; font-size:20px; margin-bottom:10px; }
  form label { display:block; color:#17957f; font-size:14px; font-weight:600; margin-bottom:6px; margin-top:16px; }
  form input[type="text"], form textarea {
    width:100%; padding:10px 12px; border:1px solid #d1d9dc; border-radius:6px; font-size:14px; color:#333;
  }
  form textarea { resize:vertical; min-height:100px; }
  .btn-submit { margin-top:22px; background-color:#17957f; color:#fff; border:none; padding:10px 22px; border-radius:6px; font-size:14px; font-weight:600; cursor:pointer; }
  .btn-submit:hover { background-color:#127a68; }
  .current-img { margin-top:10px; max-width:280px; border-radius:6px; display:block; }
</style>
</head>
<body>

  <div class="navbar">
    <div class="brand">Jura</div>
    <a href="admin.php">Data Artikel</a>
    <a href="edit_hero.php">Edit Halaman Utama</a>
  </div>

  <div class="container">
    <div class="card">
      <h2>Edit Halaman Utama (Hero)</h2>
    <form method="POST" action="update_hero.php" enctype="multipart/form-data">">
        <input type="hidden" name="id" value="<?php echo $hero['id']; ?>">

        <label>Judul</label>
        <textarea name="judul" required><?php echo htmlspecialchars($hero['judul']); ?></textarea>

        <label>Paragraf</label>
        <textarea name="paragraf"><?php echo htmlspecialchars($hero['paragraf']); ?></textarea>

        <label>Teks Tombol</label>
        <input type="text" name="teks_tombol" value="<?php echo htmlspecialchars($hero['teks_tombol']); ?>">

        <label>Gambar (kosongkan jika tidak diganti)</label>
        <input type="file" name="gambar">
        <?php if (!empty($hero['gambar'])): ?>
          <img class="current-img" src="uploads/<?php echo $hero['gambar']; ?>" alt="Gambar saat ini">
        <?php endif; ?>

        <button type="submit" class="btn-submit">Simpan Perubahan</button>
      </form>
    </div>
  </div>

</body>
</html>