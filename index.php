<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Daily Journal</title>
  <link rel="icon" href="fotoku/profil.jpg" />

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <style>
    * {
      transition: background-color 0.3s ease, color 0.3s ease,
        filter 0.3s ease;
    }

    /*  MODE TERANG  */
    #hero {
      background: linear-gradient(135deg, #ff6f61, #ffc371);
      color: white;
    }

    #article {
      background: linear-gradient(135deg, #ffe259, #ffa751);
    }

    #gallery {
      background: linear-gradient(135deg, #6dd5ed, #2193b0);
    }

    #schedule {
      background: linear-gradient(135deg, #a8e6cf, #dcedc1);
    }

    #profile {
      background: linear-gradient(135deg, #b3cde0, #decbe4);
    }

    /*  MODE GELAP  */
    body.dark-mode {
      background-color: #121212;
      color: #f8f9fa;
    }

    body.dark-mode #hero {
      background: linear-gradient(135deg, #3a0ca3, #7209b7);
    }

    body.dark-mode #article {
      background: linear-gradient(135deg, #2b5876, #4e4376);
      color: #f8f9fa;
    }

    body.dark-mode #gallery {
      background: linear-gradient(135deg, #000428, #004e92);
      color: white;
    }

    body.dark-mode #schedule {
      background: linear-gradient(135deg, #184e77, #1e6091);
    }

    body.dark-mode #profile {
      background: linear-gradient(135deg, #3a0ca3, #7209b7);
    }

    /*  NAVBAR  */
    .navbar {
      transition: background-color 0.3s ease;
    }

    body.dark-mode .navbar {
      background-color: #1f1f1f !important;
    }

    body.dark-mode .nav-link,
    body.dark-mode .navbar-brand {
      color: #f8f9fa !important;
    }

    .theme-toggle-group {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .theme-toggle-btn {
      border: none;
      background: none;
      font-size: 1.5rem;
      cursor: pointer;
      color: inherit;
      opacity: 0.6;
      transition: opacity 0.2s ease, color 0.2s ease;
    }

    .theme-toggle-btn.active {
      opacity: 1;
      color: #ffc107;
    }

    /*  FOOTER  */
    footer {
      background-color: #f8f9fa;
    }

    body.dark-mode footer {
      background-color: #1f1f1f;
      color: #f8f9fa;
    }

    footer i {
      color: #212529;
      transition: color 0.3s ease;
    }

    footer i:hover {
      color: #0d6efd;
    }

    body.dark-mode footer i {
      color: #f8f9fa;
    }

    body.dark-mode footer i:hover {
      color: #ffc107;
    }

    table {
      margin: 0 auto;
    }

    .card {
      border-radius: 15px;
    }

    body.dark-mode .schedule-card {
      background-color: #1e1e1e !important;
      color: #f8f9fa !important;
    }

    body.dark-mode .schedule-card .text-muted {
      color: #bbb !important;
    }

    body.dark-mode #article .card {
      background-color: #1e1e1e !important;
      color: #f8f9fa !important;
      border: 1px solid #333;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
    }

    body.dark-mode #article .card-title {
      color: #ffc107 !important;
    }

    body.dark-mode #article .card-text {
      color: #ddd !important;
    }

    /* Efek pada gambar biar gak terlalu terang */
    body.dark-mode #article img {
      filter: brightness(0, 85);
      border-radius: 10px;
      transition: filter 0.3s ease;
    }

    body.dark-mode #article img:hover {
      filter: brightness(1);
    }
  </style>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container">
      <a class="navbar-brand fw-semibold" href="#">Website Saya</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div
        class="collapse navbar-collapse justify-content-between"
        id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
          <li class="nav-item"><a class="nav-link" href="#hero">Home</a></li>
          <li class="nav-item">
            <a class="nav-link" href="#article">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#schedule">Schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php" target="_blank">Login</a>
          </li>
        </ul>

        <div class="theme-toggle-group ms-3">
          <button
            class="theme-toggle-btn"
            id="lightModeBtn"
            title="Tema Terang">
            <i class="bi bi-sun"></i>
          </button>
          <button
            class="theme-toggle-btn"
            id="darkModeBtn"
            title="Tema Gelap">
            <i class="bi bi-moon"></i>
          </button>
        </div>
      </div>
    </div>
  </nav>

  <!-- HOME -->
  <section id="hero" class="text-center p-5">
    <div class="container">
      <div class="d-sm-flex flex-sm-row-reverse align-items-center">
        <img src="fotoku/buku.png" class="img-fluid" width="300" />
        <div>
          <h1 class="fw-bold display-4">
            If plan A doesn't work, I have 25 more letters
          </h1>
          <h4 class="lead display-6">
            Jika rencana A gagal, aku masih punya 25 huruf lainnya
          </h4>
        </div>
      </div>
    </div>
  </section>

  <!-- article begin -->
  <section id="article" class="text-center p-5">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">article</h1>
      <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <?php
        $sql = "SELECT * FROM article ORDER BY tanggal DESC";
        $hasil = $conn->query($sql);

        while ($row = $hasil->fetch_assoc()) {
        ?>
          <div class="col">
            <div class="card h-100">
              <img src="img/<?= $row["gambar"] ?>" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title"><?= $row["judul"] ?></h5>
                <p class="card-text">
                  <?= $row["isi"] ?>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">
                  <?= $row["tanggal"] ?>
                </small>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
  <!-- article end -->

  <!-- GALLERY -->
  <section id="gallery" class="text-center p-5">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">Gallery</h1>
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="fotoku/p.jpg" class="d-block w-100" />
          </div>
          <div class="carousel-item">
            <img src="fotoku/fotoi.jpg" class="d-block w-100" />
          </div>
          <div class="carousel-item">
            <img src="fotoku/fotoku4.jpg" class="d-block w-100" />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExample"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExample"
          data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
  </section>

  <!-- SCHEDULE -->
  <section id="schedule" class="py-5">
    <div class="container text-center">
      <h1 class="fw-bold mb-5 display-5">📅 Jadwal Kuliah & Kegiatan</h1>

      <div class="row g-4 justify-content-start">
        <!-- Senin -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card schedule-card shadow-sm border-0 h-100">
            <div
              class="card-header bg-gradient bg-primary text-white fw-bold d-flex align-items-center justify-content-center gap-2">
              <i class="bi bi-laptop"></i> Senin
            </div>
            <div class="card-body">
              <p class="mb-1 text-primary">09:30 - 12:00</p>
              <p class="mb-1">Sistem Operasi</p>
              <p class="text-muted small">Ruang H.5.9</p>
              <p class="mb-1 text-primary">12:30 - 15:00</p>
              <p class="mb-1">Sistem Informasi</p>
              <p class="text-muted small">Ruang H.4.7</p>
            </div>
          </div>
        </div>

        <!-- Selasa -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card schedule-card shadow-sm border-0 h-100">
            <div
              class="card-header bg-gradient bg-success text-white fw-bold d-flex align-items-center justify-content-center gap-2">
              <i class="bi bi-database"></i> Selasa
            </div>
            <div class="card-body">
              <p class="mb-1 fw-semibold text-success">07:00 - 08:40</p>
              <p class="mb-1">Basis Data</p>
              <p class="text-muted small">Ruang H.5.6</p>
              <p class="mb-1 fw-semibold text-success">12:30 - 14:10</p>
              <p class="mb-1">Pendidikan Kewarganegaraan</p>
              <p class="text-muted small">Kulino</p>
            </div>
          </div>
        </div>

        <!-- Rabu -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card schedule-card shadow-sm border-0 h-100">
            <div
              class="card-header bg-gradient bg-warning text-white fw-bold d-flex align-items-center justify-content-center gap-2">
              <i class="bi bi-gear"></i> Rabu
            </div>
            <div class="card-body">
              <p class="mb-1 fw-semibold text-warning">07:00 - 09:30</p>
              <p class="mb-1">Probabilitas & Statistik</p>
              <p class="text-muted small">Ruang H.4.4</p>
              <p class="mb-1 fw-semibold text-warning">10:20 - 12:00</p>
              <p class="mb-1">Pemrogaman Berbasis Web</p>
              <p class="text-muted small">Ruang D.2.J</p>
            </div>
          </div>
        </div>

        <!-- Kamis -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card schedule-card shadow-sm border-0 h-100">
            <div
              class="card-header bg-gradient bg-danger text-white fw-bold d-flex align-items-center justify-content-center gap-2">
              <i class="bi bi-code-slash"></i> Kamis
            </div>
            <div class="card-body">
              <p class="mb-1 fw-semibold text-danger">07.00 - 09:30</p>
              <p class="mb-1">Rekayasa Perangkat Lunak</p>
              <p class="text-muted small">Ruang H.4.11</p>
              <p class="mb-1 fw-semibold text-danger">12.30 - 15:00</p>
              <p class="mb-1">Logika Informatika</p>
              <p class="text-muted small">Ruang H.3.8</p>
            </div>
          </div>
        </div>

        <!-- Jumat -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card schedule-card shadow-sm border-0 h-100">
            <div
              class="card-header bg-gradient bg-info text-white fw-bold d-flex align-items-center justify-content-center gap-2">
              <i class="bi bi-people"></i> Jumat
            </div>
            <div class="card-body">
              <p class="mb-1 fw-semibold text-info">07:00 - 08:40</p>
              <p class="mb-1">Basis Data</p>
              <p class="text-muted small">Ruang D.2.K</p>
            </div>
          </div>
        </div>

        <!-- Sabtu -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card schedule-card shadow-sm border-0 h-100">
            <div
              class="card-header bg-gradient bg-secondary text-white fw-bold d-flex align-items-center justify-content-center gap-2">
              <i class="bi bi-book"></i> Sabtu
            </div>
            <div class="card-body">
              <p class="mb-4">Tidak ada jadwal</p>
            </div>
          </div>
        </div>

        <!-- Minggu -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card schedule-card shadow-sm border-0 h-100">
            <div
              class="card-header bg-gradient bg-dark text-white fw-bold d-flex align-items-center justify-content-center gap-2">
              <i class="bi bi-cup-hot"></i> Minggu
            </div>
            <div class="card-body">
              <p class="mb-4">Tidak ada jadwal</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PROFILE -->
  <section id="profile" class="py-5">
    <div class="container">
      <h2 class="text-center fw-bold mb-5">Profil Mahasiswa</h2>
      <div
        class="row align-items-center justify-content-center text-center text-md-start">
        <div class="col-12 col-md-4 text-center mb-4 mb-md-0">
          <img
            src="fotoku/fotoformal.jpg"
            alt="Foto Profil"
            class="rounded-circle shadow"
            width="200"
            height="200"
            style="object-fit: cover" />
        </div>

        <div class="col-12 col-md-6">
          <div class="card shadow border-0 text-center">
            <div class="card-body">
              <h5 class="card-title fw-bold mb-3">Anza Ali Syahbani</h5>
              <div class="table-responsive">
                <table
                  class="table table-borderless mb-0 align-middle text-center">
                  <tbody>
                    <tr>
                      <th class="text-end pe-3">NIM</th>
                      <td class="text-start">: A11.2024.12345</td>
                    </tr>
                    <tr>
                      <th class="text-end pe-3">Program Studi</th>
                      <td class="text-start">: Teknik Informatika</td>
                    </tr>
                    <tr>
                      <th class="text-end pe-3">Email</th>
                      <td class="text-start">
                        :111202415791@mhs.dinus.ac.id
                      </td>
                    </tr>
                    <tr>
                      <th class="text-end pe-3">Telepon</th>
                      <td class="text-start">: +62 823 3421 5139</td>
                    </tr>
                    <tr>
                      <th class="text-end pe-3">Alamat</th>
                      <td class="text-start">
                        : Malangsari rt03/rw02, Pandeyan, Jatisrono, Wonnogiri
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="text-center p-4">
    <div>
      <a href="https://www.instagram.com/_anzasyahbani">
        <i class="bi bi-instagram h2 p-2"></i>
      </a>
      <a href="https://www.tiktok.com/@zaaaan50">
        <i class="bi bi-tiktok h2 p-2"></i>
      </a>
      <a href="https://wa.me/6282334215139">
        <i class="bi bi-whatsapp h2 p-2"></i>
      </a>
    </div>
    <div>Anza Ali Syahbani &copy; 2025</div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    const lightBtn = document.getElementById("lightModeBtn");
    const darkBtn = document.getElementById("darkModeBtn");

    function setTheme(mode) {
      const sections = ["hero", "article", "gallery", "schedule", "profile"];
      const navbar = document.querySelector(".navbar");

      if (mode === "dark") {
        document.body.classList.add("dark-mode");
        darkBtn.classList.add("active");
        lightBtn.classList.remove("active");

        // ubah navbar ke mode dark
        navbar.classList.remove("navbar-light", "bg-body-tertiary");
        navbar.classList.add("navbar-dark", "bg-dark");

        sections.forEach((id) => {
          document.getElementById(id).classList.remove("text-dark");
          document.getElementById(id).classList.add("text-light");
        });
      } else {
        document.body.classList.remove("dark-mode");
        lightBtn.classList.add("active");
        darkBtn.classList.remove("active");

        // ubah navbar ke mode light
        navbar.classList.remove("navbar-dark", "bg-dark");
        navbar.classList.add("navbar-light", "bg-body-tertiary");

        sections.forEach((id) => {
          document.getElementById(id).classList.remove("text-light");
          document.getElementById(id).classList.add("text-dark");
        });
      }
    }

    lightBtn.addEventListener("click", () => setTheme("light"));
    darkBtn.addEventListener("click", () => setTheme("dark"));
  </script>
</body>

</html>