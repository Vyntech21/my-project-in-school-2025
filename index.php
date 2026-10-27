<?php
include 'koneksi.php';
 
// Ambil data hero (cuma 1 baris)
$query = "SELECT * FROM hero LIMIT 1";
$result = mysqli_query($koneksi, $query);

if (!$result) {
  die("Query error: " . mysqli_error($koneksi));
}

$hero = mysqli_fetch_assoc($result);

if (!$hero) {
  die("Tabel 'hero' kosong atau belum ada datanya. Silakan isi data lewat phpMyAdmin dulu.");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <title>Belajar HTML - Website Saya</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <style>
    body {
      background-color: #ffffff;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
 
    .hero {
      background-color: #177737;
      padding: 40px;
    }
 .hero p {
  color: #ffffff;
}
    footer {
      background-color: #f0f0f0;
      text-align: center;
      padding: 15px;
    }
  </style>
 
  <header class="navbar">
    <div class="logo">Belajar HTML</div>
    <nav class="nav-links">
      <a href="#" class="active">Beranda</a>
      <a href="edit_hero.php">Edit</a>
      <a href="#">Materi</a>
      <a href="#">Galeri</a>
      <a href="#">Kontak</a>
    </nav>
  </header>
 
  <section class="hero">
    <div class="hero-text">
      <h1><?php echo nl2br(htmlspecialchars($hero['judul'])); ?></h1>
      <p>
        <?php echo nl2br(htmlspecialchars($hero['paragraf'])); ?>
      </p>
      <a href="#" class="link-arrow"><?php echo htmlspecialchars($hero['teks_tombol']); ?> &rarr;</a>
    </div>
 
    <div class="hero-image">
     <img src="uploads/<?php echo htmlspecialchars($hero['gambar']); ?>" width="900" alt="">
    </div>
  </section>
 
  <section class="columns">
    <div class="column">
      <h2>filosofi suaminya hutao and furina</h2>
      <p>filosofi suami both</p>
      <img src="meandfurinahutao.png" width="300" alt="">
      <li></li>
      <ol>

      <img src="" alt="">
      </ol>
      <a href="#" class="link-arrow">Lihat Semua Materi &rarr;</a>
    </div>
 
    <div class="column">
      <h2>Hutao</h2>
      <p>Filosofi Hu Tao</p>
      <ul>
        <li>Siklus Alami: Hu Tao memandang kematian bukan sebagai akhir yang menakutkan, melainkan bagian dari hukum alam yang tak terhindarkan.</li>
        <li>Keseimbangan Dunia: Baginya, hidup dan mati menjaga keseimbangan Teyvat. Seseorang tidak boleh memperpanjang hidup secara tidak alami</li>
      </ul>
      <img src="hutaomybini.gif" width="400" alt="">
    </div>
 
    <div class="column">
      <h2>Furina</h2>
      <p>Filosofi karakter Furina de Fontaine</p>
      <li>Makna: Furina tidak memiliki kekuatan dewa, namun dipaksa mengemban tugas dewa. Filosofinya menunjukkan bahwa kepahlawanan sejati tidak lahir dari kekuatan supernatural, melainkan dari pilihan sadar seorang manusia biasa yang bertahan menghadapi beban demi keselamatan orang banyak</li>
      <img src="furinaa.gif" width="400" alt="">

    </div>
  </section>
  <section class="favorites">
    <h2>Link Favorit</h2>
    <div class="favorites-grid">
      <div class="favorite-item">
        <img src="https://marketplace.canva.com/8E-ss/MAElfd8E-ss/1/tl/canva-logo-youtube-MAElfd8E-ss.png" width="35" alt="">
        <div>
          <a href="#">YouTube</a>
          <p>Jangan lupa subskreb</p>
        </div>
      </div>
      <div class="favorite-item">
        <span class="icon icon-w3">
          <svg viewBox="0 0 24 24" width="22" height="22"><circle cx="12" cy="12" r="11" fill="none" stroke="#1E88E5" stroke-width="1.6"/><ellipse cx="12" cy="12" rx="5" ry="11" fill="none" stroke="#1E88E5" stroke-width="1.4"/><line x1="1" y1="12" x2="23" y2="12" stroke="#1E88E5" stroke-width="1.4"/></svg>
        </span>
        <div>
          <a href="#">W3Schools</a>
          <p>Tutorial HTML di W3Schools</p>
        </div>
      </div>
      <div class="favorite-item">
        <img src="https://img.magnific.com/vektor-premium/logo-tik-tok_578229-290.jpg?semt=ais_hybrid&w=740&q=80"  width="35" alt="">
        <div>
          <a href="https://www.tiktok.com/@alwaysrimuru8">TikTok</a>
          <p>Jangan lupa follow</p>
        </div>
      </div>
      <div class="favorite-item">
        <span class="icon icon-github">
          <svg viewBox="0 0 24 24" width="22" height="22"><circle cx="12" cy="12" r="12" fill="#111827"/><path fill="#fff" d="M12 5.5a6.5 6.5 0 00-2.05 12.67c.33.06.45-.14.45-.32v-1.13c-1.81.4-2.19-.86-2.19-.86-.3-.75-.72-.96-.72-.96-.6-.4.04-.39.04-.39.65.05 1 .67 1 .67.58 1 1.53.71 1.9.54.06-.42.23-.71.41-.88-1.45-.16-2.97-.72-2.97-3.22 0-.71.25-1.29.67-1.75-.07-.16-.29-.83.06-1.72 0 0 .55-.18 1.8.67a6.2 6.2 0 013.28 0c1.25-.85 1.8-.67 1.8-.67.35.89.13 1.56.06 1.72.42.46.67 1.04.67 1.75 0 2.51-1.53 3.06-2.98 3.22.24.2.45.6.45 1.21v1.79c0 .18.12.39.46.32A6.5 6.5 0 0012 5.5z"/></svg>
        </span>
        <div>
          <a href="#">GitHub</a>
          <p>Simpan proyek HTML di GitHub</p>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2067 Belajar HTML. Semua hak cipta dilindungi.</p>
  </footer>
 
</body>
</html>