<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amallan.id - Membangun Pesantren Mandiri</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/amallan.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-50 dark:bg-gray-900 transition-all duration-300 font-body">

    <header>
        <a href="#hero">
             <img src="{{ asset('assets/Salinan dari Salinan dari Tambahkan judul (3).png') }}" alt="Logo Amallan" class="header-logo-new">
        </a>
        <nav class="main-nav">
            <ul>
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li><a href="{{ url('/') }}#about-amallan">Tentang</a></li>
                <li><a href="{{ url('/') }}#program-utama">Program</a></li>
                <li><a href="{{ url('/') }}#dampak-nyata">Dampak</a></li>
                <li><a href="{{ url('/') }}#bergabung-gerakan">Bergabung</a></li>
                <li><a href="{{ route('berita.index') }}">Berita</a></li>
                <li><a href="{{ url('/') }}#contact">Kontak</a></li>
            </ul>
        </nav>
        <a href="https://donasi.amallan.id" class="button-hubungi" target="_blank">Donasi Sekarang</a>
        <button class="mobile-menu-toggle" aria-label="Toggle mobile menu" onclick="toggleMobileMenu()">
            <i class="fas fa-bars"></i>
        </button>
    </header>

    <div class="mobile-menu" id="mobile-menu">
        <button class="close-btn" onclick="toggleMobileMenu()">&times;</button>
        <ul>
            <li><a href="{{ url('/') }}" onclick="toggleMobileMenu()">Beranda</a></li>
            <li><a href="{{ url('/') }}#about-amallan" onclick="toggleMobileMenu()">Tentang</a></li>
            <li><a href="{{ url('/') }}#program-utama" onclick="toggleMobileMenu()">Program</a></li>
            <li><a href="{{ url('/') }}#how-it-works" onclick="toggleMobileMenu()">Cara Kerja</a></li>
            <li><a href="{{ url('/') }}#dampak-nyata" onclick="toggleMobileMenu()">Dampak Nyata</a></li>
            <li><a href="{{ route('berita.index') }}" onclick="toggleMobileMenu()">Berita</a></li>
            <li><a href="{{ url('/') }}#contact" onclick="toggleMobileMenu()">Kontak</a></li>
            <li><a href="https://donasi.amallan.id" class="button-hubungi" style="display: block; text-align: center; margin: 20px auto; width: calc(100% - 50px);" target="_blank">Donasi Sekarang</a></li>
        </ul>
    </div>

    @yield('content')

    <footer id="footer">
        <div class="footer-grid">
            <div class="footer-col footer-logo-col">
                <img src="{{ asset('assets/Salinan dari Salinan dari Tambahkan judul (3).png') }}" alt="Logo Amallan" class="footer-logo-new">
                <p>Gerakan Digitalisasi dan Kemandirian Pesantren.</p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/amallan.id" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
                    <a href="https://wa.me/6285198835192" target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h3>Kontak Kami</h3>
                <div class="footer-contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Jl. HM Suwignyo Gg. Margodadirejo 1 No.12A, Kota Pontianak, Kalbar</p>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <p>0821 5939 2448</p>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:amallanindonesia@gmail.com">amallanindonesia@gmail.com</a>
                </div>
            </div>

            <div class="footer-col">
                <h3>Jam Operasional</h3>
                <div class="jam-operasional-item">
                    <p>Senin - Jumat : 08:00 - 17:00</p>
                </div>
                <div class="jam-operasional-item">
                    <p>Sabtu : 09:00 - 15:00</p>
                </div>
                <div class="jam-operasional-item">
                    <p>Minggu : Tutup</p>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 | amallan.id Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <script type="module" src="{{ asset('assets/js/amallan.js') }}"></script>
</body>
</html>