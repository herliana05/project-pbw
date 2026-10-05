<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio Pribadi</title>
  <style>
    /* 1. Pengaturan Dasar Tampilan */
    * {
      box-sizing: border-box;
    }
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #eef2f3 0%, #8e9eab 100%);
      color: #333;
      margin: 0;
      padding: 40px 20px;
      min-height: 100vh;
    }

    /* 2. Kartu Utama */
    .card {
      max-width: 650px;
      margin: 0 auto;
      background: #ffffff;
      padding: 35px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    /* 3. Judul & Teks */
    h1 {
      text-align: center;
      margin-top: 0;
      color: #1a252f;
      font-size: 28px;
    }
    h2 {
      color: #2c3e50;
      font-size: 18px;
      border-bottom: 2px solid #eef2f3;
      padding-bottom: 8px;
      margin-top: 30px;
    }
    .subtitle {
      text-align: center;
      color: #666;
      font-size: 15px;
      margin-bottom: 25px;
    }
    blockquote {
      text-align: center;
      font-style: italic;
      color: #555;
      background: #f8f9fa;
      padding: 12px;
      border-radius: 8px;
      border-left: 4px solid #3498db;
      margin: 20px 0;
    }

    /* 4. Foto Profil Interaktif */
    .profile-wrapper {
      text-align: center;
      margin-bottom: 20px;
    }
    .profile-img {
      width: 140px;
      height: 140px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #ffffff;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      transition: transform 0.3s ease;
    }
    .profile-img:hover {
      transform: scale(1.05); /* Membesar sedikit saat disentuh kursor */
    }

    /* 5. Tabel Modern */
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
      font-size: 14px;
    }
    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #eee;
    }
    th {
      background-color: #f8f9fa;
      color: #2c3e50;
    }
    tr:hover {
      background-color: #f1f5f9; /* Efek sorot baris */
    }

    /* 6. Daftar Hobi */
    ul, ol {
      padding-left: 20px;
      line-height: 1.8;
    }

    /* 7. Media (Audio & Video) */
    .media-container {
      text-align: center;
      margin-top: 15px;
    }
    audio {
      width: 100%;
      max-width: 400px;
      outline: none;
    }
    iframe {
      width: 100%;
      height: 280px;
      border: none;
      border-radius: 10px;
    }

    /* 8. Tombol Sosial Media */
    .btn-container {
      text-align: center;
      margin-top: 20px;
    }
    .btn {
      display: inline-block;
      padding: 10px 20px;
      margin: 5px;
      color: white;
      background-color: #3498db;
      text-decoration: none;
      border-radius: 20px;
      font-size: 14px;
      font-weight: bold;
      transition: background-color 0.2s, transform 0.2s;
    }
    .btn:hover {
      background-color: #2980b9;
      transform: translateY(-2px); /* Tombol naik sedikit saat disentuh */
    }

    /* 9. Footer */
    footer {
      text-align: center;
      font-size: 12px;
      color: #888;
      margin-top: 30px;
    }
  </style>
</head>
<body>

  <div class="card">
    
    <!-- Header & Foto -->
    <h1>Portofolio Pribadi</h1>
    <div class="profile-wrapper">
      <img class="profile-img" src="https://i.pinimg.com/originals/a2/a5/71/a2a571e21ff3bb9b8537cabc889cb3d1.jpg" alt="Foto Profil">
    </div>

    <!-- Tentang Saya -->
    <p class="subtitle">Selamat datang! Saya adalah seorang Web Developer yang bersemangat dalam membangun web sederhana dan rapi.</p>
    <blockquote>"Kreativitas adalah intelijensi yang bersenang-senang."</blockquote>

    <!-- Pengalaman Kerja -->
    <h2>Pengalaman Kerja</h2>
    <table>
      <thead>
        <tr>
          <th>Posisi</th>
          <th>Perusahaan</th>
          <th>Tahun</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Web Developer</td>
          <td>PT. Teknologi</td>
          <td>2020 - 2023</td>
        </tr>
        <tr>
          <td>Junior Developer</td>
          <td>PT. Inovasi</td>
          <td>2018 - 2020</td>
        </tr>
      </tbody>
    </table>

    <!-- Hobi -->
    <h2>Hobi Saya</h2>
    <ul>
      <li>Membaca</li>
      <li>Olahraga</li>
      <li>Fotografi</li>
    </ul>

    <!-- Audio Favorit -->
    <h2>Lagu Favorit</h2>
    <div class="media-container">
      <audio controls>
        <source src="lagu.mp3" type="audio/mpeg">
        Browser Anda tidak mendukung pemutar audio.
      </audio>
    </div>

    <!-- Video Karya -->
    <h2>Video Karya</h2>
    <div class="media-container">
      <iframe src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
    </div>

    <!-- Media Sosial -->
    <h2>Ikuti Saya</h2>
    <div class="btn-container">
      <a href="https://www.instagram.com/username" target="_blank" class="btn">Instagram</a>
      <a href="https://www.linkedin.com/in/username" target="_blank" class="btn">LinkedIn</a>
    </div>

    <!-- Footer -->
    <footer>
      &copy; 2024 Portofolio Pribadi. Semua hak dilindungi.
    </footer>

  </div>

</body>
</html>