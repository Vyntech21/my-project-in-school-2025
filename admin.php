<?php
include 'koneksi.php';

// Ambil semua data artikel dari database, urut dari yang terbaru
$query = "SELECT * FROM artikel ORDER BY id DESC";
$result = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Admin - Nova</title>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Arial, sans-serif;
  }

  body {
    background-color: #eef2f3;
    min-height: 100vh;
  }

  /* Navbar */
  .navbar {
    background-color: #17957f;
    padding: 14px 40px;
    display: flex;
    align-items: center;
    gap: 40px;
  }

  .navbar .brand {
    color: #ffffff;
    font-weight: 700;
    font-size: 18px;
    margin-right: auto;
  }

  .navbar a {
    color: #eafff9;
    text-decoration: none;
    font-size: 14px;
  }

  .navbar a:hover {
    text-decoration: underline;
  }

  /* Container */
  .container {
    max-width: 900px;
    margin: 40px auto;
    padding: 0 20px;
  }

  /* Card */
  .card {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    padding: 30px;
    margin-bottom: 30px;
  }

  .card h2 {
    color: #1e293b;
    font-size: 20px;
    margin-bottom: 20px;
  }

  /* Form */
  form label {
    display: block;
    color: #17957f;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 6px;
    margin-top: 16px;
  }

  form input[type="text"],
  form input[type="date"],
  form input[type="file"],
  form textarea {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #d1d9dc;
    border-radius: 6px;
    font-size: 14px;
    color: #333;
  }

  form textarea {
    resize: vertical;
    min-height: 100px;
  }

  form input::placeholder {
    color: #c0392b;
    opacity: 0.6;
  }

  .btn-submit {
    margin-top: 22px;
    background-color: #17957f;
    color: #fff;
    border: none;
    padding: 10px 22px;
    border-radius: 6px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
  }

  .btn-submit:hover {
    background-color: #127a68;
  }

  /* Table */
  table {
    width: 100%;
    border-collapse: collapse;
    overflow: hidden;
    border-radius: 8px;
  }

  thead tr {
    background-color: #17957f;
  }

  thead th {
    color: #ffffff;
    text-align: left;
    padding: 12px 14px;
    font-size: 13px;
  }

  tbody td {
    padding: 12px 14px;
    font-size: 14px;
    border-bottom: 1px solid #eef2f3;
    color: #333;
  }

  tbody tr:hover {
    background-color: #f8fafa;
  }

  tbody a {
    text-decoration: none;
    font-weight: 600;
    font-size: 13px;
  }

  .edit-link {
    color: #2563eb;
  }

  .hapus-link {
    color: #dc2626;
  }

  .no-data {
    text-align: center;
    padding: 20px;
    color: #999;
  }
</style>
</head>
<body>

  <div class="navbar">
    <div class="brand">Nova</div>
    <a href="admin.php">Data Artikel</a>
    <a href="edit_hero.php">Edit Halaman Utama</a>
  </div>

  <div class="container">

    <!-- Form Tambah Artikel -->
    <div class="card">
      <h2>Tambah Artikel</h2>
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
        <textarea name="isi"></textarea>

        <label>Gambar</label>
        <input type="file" name="gambar">

        <button type="submit" class="btn-submit">+ Tambah Artikel</button>
      </form>
    </div>

    <!-- Tabel Data Artikel -->
    <div class="card">
      <h2>Data Artikel</h2>
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Hashtag</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if ($result && mysqli_num_rows($result) > 0) {
              $no = 1;
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$no}</td>";
                echo "<td>{$row['judul']}</td>";
                echo "<td>{$row['penulis']}</td>";
                echo "<td>#{$row['hashtag']}</td>";
                echo "<td>
                        <a class='edit-link' href='edit_hero.php?id={$row['id']}'>Edit</a> |
                        <a class='hapus-link' href='hapus.php?id={$row['id']}' onclick=\"return confirm('Yakin hapus artikel ini?')\">Hapus</a>
                      </td>";
                echo "</tr>";
                $no++;
              }
            } else {
              echo "<tr><td colspan='5' class='no-data'>Belum ada data artikel</td></tr>";
            }
          ?>
        </tbody>
      </table>
    </div>

  </div>

</body>
</html>