<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Serli Anggraeni | Personal Portfolio</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        :root {
            --pink-light: #fff5f8;
            --pink-soft: #fbd6e5;
            --pink-medium: #ed91b9;
            --pink-dark: #c64f87;
            --pink-text: #70445a;
            --white: #ffffff;
        }

        body {
            font-family: Arial, sans-serif;
            background: var(--pink-light);
            color: var(--pink-text);
            line-height: 1.7;
        }

        a {
            text-decoration: none;
        }

        /* NAVBAR */
        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 8%;
            background: rgba(255, 255, 255, 0.96);
            position: sticky;
            top: 0;
            z-index: 10;
            box-shadow: 0 3px 15px #c64f8710;
        }

        .logo {
            color: var(--pink-dark);
            font-size: 21px;
            font-weight: bold;
        }

        .logo span {
            color: var(--pink-medium);
        }

        .nav-menu {
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
        }

        .nav-menu a {
            color: var(--pink-text);
            font-size: 13px;
            font-weight: bold;
            transition: 0.3s;
        }

        .nav-menu a:hover {
            color: var(--pink-dark);
        }

        /* HERO */
        #home {
            min-height: 590px;
            padding: 80px 12%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 55px;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg,
                    #ffe9f1,
                    #fbd6e5,
                    #fff5f8);
        }

        .hero-text {
            max-width: 650px;
            position: relative;
            z-index: 1;
        }

        .hello {
            display: inline-block;
            background: white;
            color: var(--pink-dark);
            border: 1px solid #f5c3d8;
            border-radius: 30px;
            padding: 7px 16px;
            margin-bottom: 22px;
            font-size: 13px;
        }

        .hero-text h1 {
            font-size: 53px;
            line-height: 1.2;
            margin-bottom: 18px;
            color: var(--pink-text);
        }

        .hero-text h1 span {
            color: var(--pink-dark);
        }

        .hero-text h2 {
            font-size: 22px;
            line-height: 1.5;
            margin-bottom: 18px;
        }

        .hero-text p {
            max-width: 580px;
            margin-bottom: 27px;
            color: #805d70;
        }

        .hero-buttons {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .button {
            display: inline-block;
            padding: 12px 23px;
            border-radius: 30px;
            background: var(--pink-dark);
            color: white;
            font-weight: bold;
            font-size: 14px;
            box-shadow: 0 5px 14px #c64f872b;
            transition: 0.3s;
        }

        .button:hover {
            background: #a83c70;
            transform: translateY(-2px);
        }

        .button-outline {
            background: white;
            color: var(--pink-dark);
            border: 1px solid #ed91b9;
            box-shadow: none;
        }

        .button-outline:hover {
            color: white;
        }

        /* FOTO */
        .hero-photo {
            position: relative;
            flex-shrink: 0;
        }

        .profile {
            width: 260px;
            height: 260px;
            object-fit: cover;
            border-radius: 50%;
            border: 7px solid white;
            outline: 3px solid var(--pink-medium);
            box-shadow: 0 12px 35px #c64f8725;
            position: relative;
            z-index: 1;
        }

        .flower {
            position: absolute;
            color: var(--pink-dark);
            font-size: 37px;
            z-index: 2;
        }

        .flower-one {
            top: -25px;
            right: 0;
            transform: rotate(15deg);
        }

        .flower-two {
            bottom: 5px;
            left: -28px;
            font-size: 32px;
        }

        .sparkle {
            position: absolute;
            color: #d878a4;
            font-size: 25px;
        }

        .sparkle-one {
            top: 35px;
            left: -35px;
        }

        .sparkle-two {
            right: -25px;
            bottom: 55px;
        }

        .decor {
            position: absolute;
            color: #e9a4c2;
            opacity: 0.55;
            pointer-events: none;
        }

        .decor-one {
            top: 25px;
            right: 35%;
            font-size: 45px;
        }

        .decor-two {
            bottom: 20px;
            left: 5%;
            font-size: 55px;
        }

        /* BAGIAN UMUM */
        section.content {
            padding: 75px 12%;
            scroll-margin-top: 70px;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 35px;
        }

        .section-heading .eyebrow {
            font-size: 12px;
            font-weight: bold;
            color: var(--pink-dark);
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .section-heading h2 {
            font-size: 32px;
            margin-top: 5px;
            color: var(--pink-text);
        }

        .section-heading p {
            margin-top: 8px;
            color: #98778a;
            font-size: 14px;
        }

        .heading-flower {
            color: var(--pink-medium);
        }

        /* ABOUT */
        #about {
            background: white;
        }

        .about-box {
            max-width: 850px;
            margin: auto;
            padding: 32px;
            background: #fff7fa;
            border: 1px solid #f7d8e5;
            border-radius: 20px;
            position: relative;
        }

        .about-box p {
            margin-bottom: 15px;
            color: #79566a;
        }

        .about-box p:last-child {
            margin-bottom: 0;
        }

        .about-note {
            margin-top: 22px;
            padding: 15px 18px;
            background: white;
            border-left: 4px solid var(--pink-medium);
            border-radius: 8px;
            color: var(--pink-text);
            font-size: 14px;
        }

        /* SKILLS */
        #skills {
            background: var(--pink-light);
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .skill-card {
            background: white;
            padding: 25px 20px;
            border: 1px solid #f5d5e2;
            border-radius: 16px;
            text-align: center;
            transition: 0.3s;
        }

        .skill-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 22px #c64f8715;
        }

        .skill-icon {
            display: inline-block;
            font-size: 30px;
            margin-bottom: 10px;
        }

        .skill-card h3 {
            color: var(--pink-dark);
            font-size: 16px;
            margin-bottom: 8px;
        }

        .skill-card p {
            font-size: 13px;
            color: #8b6a7c;
        }

        /* PROJECT */
        #project {
            background: white;
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .project-card {
            padding: 25px;
            border-radius: 16px;
            border: 1px solid #f3cfdf;
            background: linear-gradient(145deg, #fff7fa, #ffffff);
            transition: 0.3s;
        }

        .project-card:hover {
            border-color: var(--pink-medium);
            box-shadow: 0 8px 22px #c64f8712;
        }

        .project-number {
            color: var(--pink-medium);
            font-size: 13px;
            font-weight: bold;
        }

        .project-card h3 {
            color: var(--pink-dark);
            margin: 10px 0;
            font-size: 18px;
        }

        .project-card p {
            font-size: 14px;
            color: #79566a;
        }

        .project-tag {
            display: inline-block;
            margin-top: 15px;
            padding: 5px 11px;
            border-radius: 20px;
            background: #fce4ee;
            color: #a94373;
            font-size: 11px;
            font-weight: bold;
        }

        /* SERTIFIKAT */
        .certificates {
            background: var(--pink-light);
        }

        .certificate-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
        }

        .certificate-card {
            padding: 18px;
            background: white;
            border: 1px solid #f6d5e5;
            border-radius: 22px;
            text-align: center;
            box-shadow: 0 8px 24px rgba(214, 105, 157, 0.08);
            transition: transform 0.25s;
        }

        .certificate-card:hover {
            transform: translateY(-5px);
        }

        .certificate-image-link {
            display: block;
            overflow: hidden;
            border-radius: 13px;
            background: #fff8fb;
        }

        .certificate-card img {
            display: block;
            width: 100%;
            height: 210px;
            object-fit: contain;
            background: white;
            transition: transform 0.3s;
        }

        .certificate-image-link:hover img {
            transform: scale(1.03);
        }

        .certificate-card h3 {
            color: var(--pink-dark);
            font-size: 18px;
            margin: 17px 0 6px;
        }

        .certificate-card p {
            color: #806777;
            font-size: 13px;
            margin-bottom: 12px;
        }

        .certificate-link {
            display: inline-block;
            padding: 9px 17px;
            border-radius: 24px;
            background: var(--pink);
            color: white;
            font-size: 13px;
            font-weight: 700;
            transition: background 0.2s;
        }

        .certificate-link:hover {
            background: var(--pink-dark);
        }

        /* CONTACT */
        #contact {
            background: white;
        }

        .contact-box {
            max-width: 750px;
            margin: auto;
            padding: 32px;
            border-radius: 20px;
            text-align: center;
            background: #fff5f8;
            border: 1px solid #f5d5e2;
        }

        .contact-box>p {
            margin-bottom: 23px;
        }

        .contact-item {
            padding: 12px;
            margin: 10px 0;
            background: white;
            border-radius: 10px;
            font-size: 14px;
        }

        .contact-item strong {
            color: var(--pink-dark);
        }

        .contact-item a {
            color: var(--pink-text);
            overflow-wrap: anywhere;
        }

        /* FOOTER */
        footer {
            padding: 28px 15px;
            text-align: center;
            background: #f8c8dc;
            color: var(--pink-text);
            font-size: 13px;
        }

        footer .footer-flower {
            font-size: 24px;
            margin-bottom: 5px;
        }

        footer p+p {
            margin-top: 5px;
        }

        /* TAMPILAN HP */
        @media (max-width: 800px) {
            nav {
                flex-direction: column;
                gap: 14px;
                padding: 17px 12px;
            }

            .nav-menu {
                justify-content: center;
                gap: 13px;
            }

            .nav-menu a {
                font-size: 12px;
            }

            #home {
                flex-direction: column-reverse;
                text-align: center;
                padding: 55px 7%;
                gap: 35px;
            }

            .hero-text h1 {
                font-size: 38px;
            }

            .hero-text h2 {
                font-size: 19px;
            }

            .hero-buttons {
                justify-content: center;
            }

            .profile {
                width: 205px;
                height: 205px;
            }

            .decor-one {
                right: 10%;
            }

            section.content {
                padding: 55px 7%;
            }

            .skills-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .project-grid {
                grid-template-columns: 1fr;
            }

            .section-heading h2 {
                font-size: 27px;
            }
        }

        @media (max-width: 420px) {
            .skills-grid {
                grid-template-columns: 1fr;
            }

            .about-box,
            .contact-box {
                padding: 22px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVIGASI -->
    <nav>
        <a href="#home" class="logo">Portofolio Saya<span></span></a>

        <div class="nav-menu">
            <a href="#home">Beranda</a>
            <a href="#about">Tentang Saya</a>
            <a href="#education">Pendidikan</a>
            <a href="#experience">Pengalaman</a>
            <a href="#skills">Keahlian</a>
            <a href="#project">Proyek</a>
            <a href="#certificates">Sertifikat</a>
            <a href="#contact">Kontak</a>
        </div>
    </nav>

    <!-- HALAMAN PEMBUKA -->
    <section id="home">

        <span class="decor decor-one">✿</span>
        <span class="decor decor-two">♡</span>

        <div class="hero-text">
            <div class="hello">
                🌷 Sedikit tentang diri saya
            </div>

            <h1>
                Halo, Saya <span>Serli Anggraeni Rahman</span>!
            </h1>

            <h2>
                Turning Curiosity Into Creativity,
                One Step at a Time.
            </h2>

            <p>
                Saya mahasiswa Sistem Informasi yang tertarik pada desain UI/UX,
                analisis sistem, dan dunia kreatif. Saya senang mengeksplorasi ide,
                mempelajari hal baru, dan mengembangkan kemampuan melalui
                setiap proses yang saya jalani.
            </p>

            <div class="hero-buttons">
                <a href="#about" class="button">
                    Kenali Saya♡
                </a>

                <a href="#project" class="button button-outline">
                    Lihat Portofolio
                </a>
            </div>
        </div>

        <div class="hero-photo">
            <span class="flower flower-one">✿</span>
            <span class="flower flower-two">❀</span>
            <span class="sparkle sparkle-one">✧</span>
            <span class="sparkle sparkle-two">✦</span>

            <img
                src="/images/foto-profil.jpg"
                alt="Foto Serli Anggraeni"
                class="profile">
        </div>

    </section>

    <!-- TENTANG SAYA -->
    <section id="about" class="content">

        <div class="section-heading">
            <div class="eyebrow">Sekilas tentang Saya</div>
            <h2>Mari Mengenal Saya <span class="heading-flower">❀</span></h2>
            <p>Pribadi yang tenang dengan dunia untuk dijelajahi.</p>
        </div>

        <div class="about-box">
            <p>
                Hai! Aku Serli Anggraeni Rahman, mahasiswa Sistem Informasi
                di Universitas Bina Sarana Informatika yang menyukai desain, seni,
                dan hal-hal kreatif. Aku senang mencoba hal baru, mulai dari mengedit
                desain hingga melukis, sambil terus belajar dan mengembangkan kemampuanku.
            </p>

            <p>
                Aku adalah seorang introvert dengan keinginan besar untuk
                mengeksplorasi dunia lebih jauh, menikmati alam, dan menemukan
                tempat-tempat menarik. Bagiku, berkembang bukan tentang menjadi
                sempurna, tetapi tentang berani mencoba dan menikmati setiap prosesnya. 🌿
            </p>

            <div class="about-note">
                🎀 <strong>Pengingat Kecil:</strong>
                Berkembanglah dengan kecepatanmu sendiri. Setiap langkah kecil adalah bagian dari proses pertumbuhanmu.
            </div>
        </div>

    </section>

    <!-- PENDIDIKAN -->
    <section id="education" class="content">

        <div class="section-heading">
            <div class="eyebrow">Pendidikan Saya</div>
            <h2>
                Pendidikan
                <span class="heading-flower">🎓</span>
            </h2>
            <p>Satu langkah kecil menuju masa depan Saya.</p>
        </div>

        <div class="about-box">
            <p>
                🎓 <strong>Universitas Bina Sarana Informatika</strong>
            </p>

            <p>
                Program Studi Sistem Informasi
            </p>

            <p>
                Saat ini sedang menempuh pendidikan di bidang Sistem
                Informasi.
            </p>
        </div>

    </section>

    <!-- PENGALAMAN -->
    <section id="experience" class="content">

        <div class="section-heading">
            <div class="eyebrow">Pengalaman Profesional</div>
            <h2>
                Pengalaman Magang
                <span class="heading-flower">🌷</span>
            </h2>
            <p>Pengalaman belajar dan mengenal dunia kerja.</p>
        </div>
        <div class="about-box">

            <p>
                <strong>Praktik Kerja Lapangan (PKL)</strong>
            </p>

            <p>
                PT Nusa Halmahera Minerals (NHM)
                <br>
                Pluit, Jakarta Utara
            </p>

            <p>
                <strong>Periode:</strong> September 2026 – Sekarang
            </p>

            <p>
                <strong>Status:</strong>
                <span class="project-tag">Sedang Berlangsung</span>
            </p>

            <p>
                Sedang menjalani Praktik Kerja Lapangan dengan fokus
                pada sistem pemeliharaan inventaris kantor sebagai
                bagian dari proses pembelajaran dan pengenalan alur
                kerja di lingkungan perusahaan.
            </p>
        </div>
    </section>

    <!-- KEAHLIAN -->
    <section id="skills" class="content">

        <div class="section-heading">
            <div class="eyebrow">Hal yang telah Saya pelajari</div>
            <h2>Kumpulan keahlian Saya <span class="heading-flower">✿</span></h2>
            <p>Beberapa tools dan kemampuan yang aku pelajari.</p>
        </div>

        <div class="skills-grid">

            <div class="skill-card">
                <span class="skill-icon">🎨</span>
                <h3>UI/UX Design</h3>
                <p>Merancang antarmuka yang menarik dan mudah dipahami.</p>
            </div>

            <div class="skill-card">
                <span class="skill-icon">🖌️</span>
                <h3>Figma & Canva</h3>
                <p>Membuat desain visual dan merancang tampilan antarmuka.</p>
            </div>

            <div class="skill-card">
                <span class="skill-icon">📊</span>
                <h3>Microsoft Excel</h3>
                <p>Mengelola dan menyusun data agar lebih terstruktur.</p>
            </div>

            <div class="skill-card">
                <span class="skill-icon">📝</span>
                <h3>Microsoft Word</h3>
                <p>Menyusun dokumen dan laporan akademik.</p>
            </div>

            <div class="skill-card">
                <span class="skill-icon">🔍</span>
                <h3>System Analysis</h3>
                <p>Menganalisis kebutuhan dan alur proses suatu sistem.</p>
            </div>

            <div class="skill-card">
                <span class="skill-icon">🗂️</span>
                <h3>Database Design</h3>
                <p>Merancang struktur tabel dan hubungan antar-data.</p>
            </div>
        </div>
    </section>

    <!-- PROYEK -->
    <section id="project" class="content">

        <div class="section-heading">
            <div class="eyebrow">Beberapa Proyek yang telah Saya Kerjakan</div>
            <h2>Ruang Kreativitas Saya <span class="heading-flower">🌸</span></h2>
            <p>Beberapa proyek kolaboratif yang menjadi bagian dari perjalanan belajar saya.</p>
        </div>

        <div class="project-grid">

            <div class="project-card">
                <div class="project-number">PROYEK 01 · SERKOM</div>
                <h3>Sistem Penggajian</h3>
                <p>
                    Proyek sistem informasi penggajian berbasis web untuk mengelola data
                    karyawan dan perhitungan gaji menggunakan
                    PHP dan MySQL.
                </p>
                <span class="project-tag">PHP · MySQL · Proyek Kompetensi</span>
            </div>

            <div class="project-card">
                <div class="project-number">PROYEK 02 · MOBILE APP</div>
                <h3>Aplikasi Ranking Santri Iqra</h3>
                <p>
                    Proyek akademik pengembangan aplikasi mobile untuk membantu proses
                    penentuan ranking kelulusan santri Iqra
                    menggunakan metode AHP dan Weighted Score.
                </p>
                <span class="project-tag">AHP · Weighted Score · Proyek Akademik</span>
            </div>

            <div class="project-card">
                <div class="project-number">PROYEK 03 · UI/UX Desain</div>
                <h3>Perancangan Antarmuka</h3>
                <p>
                    Eksplorasi desain antarmuka dengan memperhatikan
                    kebutuhan pengguna, tata letak, dan kemudahan
                    penggunaan.
                </p>
                <span class="project-tag">Figma · UI/UX · Proyek Akademik</span>
            </div>

            <div class="project-card">
                <div class="project-number">PROYEK 04 · SISTEM ANALISIS</div>
                <h3>Analisis Sistem Informasi</h3>
                <p>
                    Proyek menganalisis proses bisnis, memahami
                    permasalahan, dan menyusun kebutuhan sistem
                    sebagai bagian dari proyek akademik.
                </p>
                <span class="project-tag">Analisis · Dokumentasi · Proyek Akademik</span>
            </div>

        </div>
    </section>

    <!-- CERTIFICATES -->
    <section class="certificates" id="certificates">
        <div class="section-heading">
            <p class="section-subtitle">Bukti Perjalanan Belajar Saya</p>
            <h2>Sertifikat Saya 🏅</h2>
            <p>
                Setiap sertifikat menjadi bagian kecil yang berarti dalam perjalanan belajar Saya.
            </p>
        </div>

        <div class="certificate-grid">

            <!-- CERTIFICATE 1 -->
            <div class="certificate-card">
                <a
                    class="certificate-image-link"
                    href="{{ asset('certificates/sertifikat-1.jpg') }}"
                    target="_blank"
                    rel="noopener noreferrer">
                    <img
                        src="{{ asset('certificates/sertifikat-1.jpg') }}"
                        alt="Sertifikat pertama Serli"
                        loading="lazy">
                </a>

                <h3>Sertifikat Kompetensi Database Administrator</h3>
                <p>Badan Nasional Sertifikasi Profesi (BNSP) · 2026</p>

                <a
                    class="certificate-link"
                    href="{{ asset('certificates/sertifikat-1.jpg') }}"
                    target="_blank"
                    rel="noopener noreferrer">
                    View Certificate ↗
                </a>
            </div>

            <!-- CERTIFICATE 2 -->
            <div class="certificate-card">
                <a
                    class="certificate-image-link"
                    href="{{ asset('certificates/sertifikat-2.jpg') }}"
                    target="_blank"
                    rel="noopener noreferrer">
                    <img
                        src="{{ asset('certificates/sertifikat-2.jpg') }}"
                        alt="Sertifikat kedua aku"
                        loading="lazy">
                </a>

                <h3>Belum Keluar Sertifikat keduanya</h3>
                <p>Nama penyelenggara · Tahun</p>

                <a
                    class="certificate-link"
                    href="{{ asset('certificates/sertifikat-2.png') }}"
                    target="_blank"
                    rel="noopener noreferrer">
                    View Certificate ↗
                </a>
            </div>

        </div>
    </section>>

    <!-- KONTAK -->
    <section id="contact" class="content">

        <div class="section-heading">
            <div class="eyebrow">Mari tetap terhubung</div>
            <h2>Say Hello! <span class="heading-flower">♡</span></h2>
            <p>Punya kesempatan atau ingin berkenalan? Hubungi aku!</p>
        </div>

        <div class="contact-box">

            <p>
                Aku terbuka untuk belajar, berbagi ide,
                dan mengenal pengalaman baru.
            </p>

            <div class="contact-item">
                <strong>✉ Surel:</strong>
                <a href="mailto:serlianggraenirhmn@gmail.com">
                    serlianggraenirhmn@gmail.com
                </a>
            </div>

            <div class="contact-item">
                <strong>♡ LinkedIn:</strong>
                <a href="https://www.linkedin.com/" target="_blank">
                www.linkedin.com/in/serlianggraeni
                </a>
            </div>

            <div class="contact-item">
                <strong>📍 Lokasi:</strong>
                Depok, Indonesia
            </div>

        </div>

    </section>

    <!-- FOOTER -->
    <footer>
        <div class="footer-flower">🌸 ♡ 🌸</div>
        <p>Made with Ceyy.</p>
        <p>&copy; 2026 Serli Anggraeni · Portfolio</p>
    </footer>

</body>

</html>