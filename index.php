<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Modern developer portfolio website with dark mode, smooth animations, and interactive features built with pure HTML, CSS, and JavaScript">
    <meta name="keywords" content="developer, portfolio, web development, coding, HTML, CSS, JavaScript, dark mode">
    <meta name="author" content="Developer Team">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="Developer Portfolio - Modern Web Experience">
    <meta property="og:description" content="A fully responsive, modern website with dark mode and smooth animations">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/img/og-image.jpg">
    
    <title>Web Tim findteamY</title>
    <link rel="icon" type="image/svg+xml" href="assets/icons/favicon.svg">
    <link rel="alternate icon" type="image/x-icon" href="assets/icons/favicon.ico">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Preloader -->
    <div id="preloader" class="preloader">
        <div class="preloader-spinner"></div>
    </div>

    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="#home" aria-label="Home">find<span>teamY</span></a>
            </div>
            <ul class="nav-menu" id="nav-menu">
                <li><a href="#home" class="nav-link" aria-label="Home section">Home</a></li>
                <li><a href="#about" class="nav-link" aria-label="About section">About</a></li>
                <li><a href="#team" class="nav-link" aria-label="Team section">Team</a></li>
                <li><a href="#contact" class="nav-link" aria-label="Contact section">Contact</a></li>
                <li><a href="#isi-data" class="nav-link" aria-label="Input Data section">Isi Data</a></li>
            </ul>
            <button class="theme-toggle" id="theme-toggle" aria-label="Toggle dark mode">
                <span class="theme-icon" id="theme-icon">☽</span>
            </button>
            <button class="nav-toggle" id="nav-toggle" aria-label="Toggle navigation menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <canvas id="particles-canvas"></canvas>
        <div class="hero-content">
            <h1 class="hero-title">
                <span class="typewriter-text" id="typewriter"></span>
                <span class="cursor">|</span>
            </h1>
            <p class="hero-subtitle">Ini adalah web sederhana yang kami buat sebagai tugas kelompok, sekalian latihan bikin tampilan yang rapi, enak dilihat, dan pastinya responsif. Di sini kamu bisa lihat info tentang tim kami, siapa aja anggotanya, sampai penjelasan singkat cara kerja websitenya.</p>
            <div class="hero-buttons">
                <a href="#about" class="btn btn-primary ripple">Jelajahi</a>
                <a href="#contact" class="btn btn-secondary ripple">Hubungi Kami</a>
            </div>
        </div>
        <div class="scroll-indicator">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">Tentang Website Ini</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>
                        Website ini dibuat sebagai tugas kelompok untuk mengenalkan tim kami sekaligus latihan bikin web pakai HTML, CSS, dan JavaScript tanpa framework apa pun dan library. Jadi semua animasi, dark mode, dan transisi kami bikin manual dari nol.
                    </p>
                    <p>
                        Tujuan utama web ini sederhana : 
                        <br>
                        1. Biar paham struktur dasar HTML
                        <br>
                        2. Bisa styling pakai CSS yang rapi & modern
                        <br>
                        3. Belajar bikin interaksi kecil pakai JavaScript
                        <br>
                        4. Dan pastinya biar tampilannya nggak ngebosenin 😁
                    </p>
                    <p>
                        Kami juga berusaha bikin websitenya responsif, jadi entah dibuka di HP, laptop, atau layar gede, tampilannya tetap enak di mata.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="team">
        <div class="container">
            <h2 class="section-title">Anggota Tim</h2>
            <div class="team-grid">
                <div class="team-card" data-tilt>
                    <div class="team-card-inner">
                        <div class="team-image">
                            <img src="assets/img/icon.jpg" alt="gambar orang" loading="lazy">
                        </div>
                        <div class="team-info">
                            <h3>NEYLA AZ-ZAHRINE NATAYUKHE</h3>
                            <h4>5241011032</h4>
                            <p class="team-role">Desain Konsep</p>
                            <p class="team-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quisquam.</p>
                        </div>
                    </div>
                </div>
                <div class="team-card" data-tilt>
                    <div class="team-card-inner">
                        <div class="team-image">
                            <img src="assets/img/icon.jpg" alt="gambar orang" loading="lazy">
                        </div>
                        <div class="team-info">
                            <h3>PRISKE ADITTIA</h3>
                            <h4>5241011025</h4>
                            <p class="team-role">Desain Konten</p>
                            <p class="team-description">Expert in building scalable server-side applications and robust APIs.</p>
                        </div>
                    </div>
                </div>
                <div class="team-card" data-tilt>
                    <div class="team-card-inner">
                        <div class="team-image">
                            <img src="assets/img/hero-2.JPG" alt="gambar orang" loading="lazy">
                        </div>
                        <div class="team-info">
                            <h3>AHMAD NUR FATKHUROHMAN</h3>
                            <h4>5241011050</h4>
                            <p class="team-role">HTML Styling</p>
                            <p class="team-description">Hanya orang biasa yang terus berusaha.</p>
                        </div>
                    </div>
                </div>
                <div class="team-card" data-tilt>
                    <div class="team-card-inner">
                        <div class="team-image">
                            <img src="assets/img/hero-1.jpg" alt="orang" loading="lazy">
                        </div>
                        <div class="team-info">
                            <h3>FAJRI MAULANA YUSUF</h3>
                            <h4 class="npm">5241011005</h4>
                            <p class="team-role">CSS Styling</p>
                            <p class="team-description">Sedikit malas tapi ya sudahlah😁.</p>
                        </div>
                    </div>
                </div>
                <div class="team-card" data-tilt>
                    <div class="team-card-inner">
                        <div class="team-image">
                            <img src="assets/img/icon.jpg" alt="gambar orang" loading="lazy">
                        </div>
                        <div class="team-info">
                            <h3>MUHAMMAD FITRIANTO</h3>
                            <h4>5241011035</h4>
                            <p class="team-role">Dokumentasi</p>
                            <p class="team-description">Ensuring smooth deployments and optimal performance across all platforms.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Hubungi Kami</h2>
            <form id="contact-form" class="contact-form" novalidate>
                <div class="form-group">
                    <label for="name">Nama <span class="required">*</span></label>
                    <input type="text" id="name" name="name" required aria-required="true" aria-describedby="name-error">
                    <span class="error-message" id="name-error" role="alert"></span>
                </div>
                <div class="form-group">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" id="email" name="email" required aria-required="true" aria-describedby="email-error">
                    <span class="error-message" id="email-error" role="alert"></span>
                </div>
                <div class="form-group">
                    <label for="subject">Subject <span class="required">*</span></label>
                    <input type="text" id="subject" name="subject" required aria-required="true" aria-describedby="subject-error">
                    <span class="error-message" id="subject-error" role="alert"></span>
                </div>
                <div class="form-group">
                    <label for="message">Pesan <span class="required">*</span></label>
                    <textarea id="message" name="message" rows="5" required aria-required="true" aria-describedby="message-error"></textarea>
                    <span class="error-message" id="message-error" role="alert"></span>
                </div>
                <button type="submit" class="btn btn-primary ripple">Kirim Pesan</button>
            </form>
        </div>
    </section>
    
    <!-- Isi Data Section -->
     </section>

    <section id="isi-data" class="isi-data">
        <div class="container">
            <h2 class="section-title">Isi Data Mahasiswa</h2>
            
            <div class="contact-form"> <?php 
                // Sertakan koneksi database
                include "koneksi.php"; 

                // Logika Simpan Data
                if (isset($_POST['simpan_data'])) {
                    $nama = htmlspecialchars($_POST['nama_mhs']); // Pakai htmlspecialchars biar aman
                    $npm  = htmlspecialchars($_POST['npm_mhs']);

                    $query = "INSERT INTO mahasiswa (nama, npm) VALUES ('$nama', '$npm')";
                    
                    if(mysqli_query($koneksi, $query)) {
                        echo "<div style='background: #d1fae5; color: #065f46; padding: 10px; border-radius: 8px; margin-bottom: 20px; text-align: center;'>Data Berhasil Disimpan!</div>";
                    } else {
                        echo "<div style='background: #fee2e2; color: #991b1b; padding: 10px; border-radius: 8px; margin-bottom: 20px; text-align: center;'>Gagal: " . mysqli_error($koneksi) . "</div>";
                    }
                }
                ?>

                <form action="#isi-data" method="post">
                    <div class="form-group">
                        <label for="nama_mhs">Nama Mahasiswa <span class="required">*</span></label>
                        <input type="text" id="nama_mhs" name="nama_mhs" required placeholder="Masukkan Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="npm_mhs">NPM <span class="required">*</span></label>
                        <input type="number" id="npm_mhs" name="npm_mhs" required placeholder="Masukkan NPM">
                    </div>
                    <button type="submit" name="simpan_data" class="btn btn-primary ripple" style="width:100%">Simpan Data</button>
                </form>
            </div>

            <div style="margin-top: 50px; overflow-x: auto;">
                <h3 style="text-align: center; margin-bottom: 20px; color: var(--text-primary);">Daftar Data Tersimpan</h3>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NPM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM mahasiswa ORDER BY id DESC"; // Urutkan dari yang terbaru
                        $result = mysqli_query($koneksi, $sql);
                        $no = 1;
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $no++ . "</td>";
                            echo "<td>" . $row['nama'] . "</td>";
                            echo "<td>" . $row['npm'] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>findteamY</h3>
                    <p>Membangun pengalaman web sederhana.</p>
                </div>
                <div class="footer-section">
                    <h4>Fast Link</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Media Sosial</h4>
                    <ul>
                        <li><a href="#" aria-label="GitHub">GitHub</a></li>
                        <li><a href="#" aria-label="LinkedIn">LinkedIn</a></li>
                        <li><a href="#" aria-label="Twitter">Twitter</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 findteamY. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="back-to-top" aria-label="Back to top">
        <span>↑</span>
    </button>

    <script src="assets/js/script.js"></script>
</body>
</html>

