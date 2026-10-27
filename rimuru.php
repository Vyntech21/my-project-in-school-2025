<!DOCTYPE html>
<html lang="id">
<head>
  <title>Belajar HTML - Website Saya</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <style>
    body {
      background-color: #ffffff; /* biru muda lembut */
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .hero {
      background-color: #177737; /* section hero tetap putih biar kontras */
      padding: 40px;
    }

    footer {
      background-color: #f0f0f0; /* footer sedikit abu-abu */
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
      <h1>Belajar HTML<br>Mudah dan Menyenangkan <br>dengan hutaomybini</h1>
      <p>
        HTML adalah bahasa dasar untuk membuat halaman web. Dengan
        HTML, kita bisa membuat teks, menambahkan gambar, membuat link,
        dan membuat list.
      </p>
      <a href="#" class="link-arrow ">Mulai Belajar Sekarang &rarr; </a>
    </div>

    <div class="hero-image">
      <img src="hutaomybini.gif"  width="800" alt="">
    </div>
  </section>

  <section class="columns">
    <div class="column">
      <h2>Materi Dasar</h2>
      <p>Berikut materi dasar yang harus dipahami pemula dalam belajar HTML.</p>
      <ol>
        <li>Teks pada HTML</li>
        <li>Hyperlink</li>
        <li>Gambar</li>
        <li>List (Daftar)</li>
      </ol>
      <a href="#" class="link-arrow">Lihat Semua Materi &rarr;</a>
    </div>

    <div class="column">
      <h2>Mengapa Belajar HTML?</h2>
      <p>HTML adalah langkah pertama untuk menjadi web developer. Keuntungan belajar HTML:</p>
      <ul>
        <li>Mudah dipelajari oleh pemula</li>
        <li>Dasar dari semua halaman web</li>
        <li>Banyak digunakan di dunia kerja</li>
        <li>Langkah awal sebelum belajar CSS &amp; JS</li>
      </ul>
    </div>

    <div class="column">
      <h2>Contoh Gambar</h2>
      <p>Berikut contoh gambar yang dapat digunakan pada halaman web.</p>
      <img src="https://www.kanakomputer.com/wp-content/uploads/2024/10/Kekurangan-ASUS-TUF-Gaming-A15.png" width="300" alt="">
    </div>
  </section>

  <section class="favorites">
    <h2>Link Favorit</h2>
    <div class="favorites-grid">
      <div class="favorite-item">
        <span class="icon icon-youtube">
          <svg viewBox="0 0 24 24" width="22" height="22"><rect width="24" height="24" rx="6" fill="#FF0000"/><path d="M10 8l6 4-6 4V8z" fill="#fff"/></svg>
        </span>
        <div>
          <a href="#">YouTube</a>
          <p>Belajar HTML di YouTube</p>
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
        <span class="icon icon-mdn">
          <svg viewBox="0 0 24 24" width="22" height="22"><rect width="24" height="24" rx="5" fill="#1E293B"/><text x="12" y="16" font-size="9" font-family="Arial" font-weight="700" fill="#fff" text-anchor="middle">MDN</text></svg>
        </span>
        <div>
          <a href="#">MDN Web Docs</a>
          <p>Dokumentasi HTML di MDN</p>
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