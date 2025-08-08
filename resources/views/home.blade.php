@extends('layouts.main')

@section('content')
<section id="hero">
    <div class="hero-content">
        <h1>Membangun Pesantren Mandiri Bersama Amallan</h1>
        <p>Mendampingi pondok pesantren di Indonesia menuju kemandirian melalui digitalisasi, pelatihan SDM, dan pendampingan unit usaha produktif.</p>
        <div class="hero-buttons">
            <a href="#contact" class="button white">Gabung Menjadi Sahabat Amal</a>
            <a href="#contact" class="button green">Hubungi Kami</a>
        </div>
    </div>
    <div class="hero-image-container">
        <img src="{{ asset('assets/maskot_amallan.png') }}" alt="Ilustrasi Amallan">
    </div>
</section>

<section id="about-amallan" class="section-padding">
    <div class="about-content">
        <div class="about-image-container">
            <img src="{{ asset('assets/maskot_amallan_about.png') }}" alt="Maskot Amallan dan Santri">
        </div>
        <div class="about-text-content">
            <h2>Tentang Amallan</h2>
            <p>Amallan adalah inisiatif sosial yang berfokus pada pendampingan pondok pesantren di Indonesia agar mandiri melalui digitalisasi, pelatihan SDM, dan pendampingan unit usaha produktif. Kami percaya bahwa pesantren adalah aset berharga bangsa yang perlu didukung dengan teknologi dan inovasi.</p>
            <p>Dengan semangat #TemanBeramal, kami mengajak seluruh elemen masyarakat untuk berkolaborasi membangun ekosistem pesantren yang mandiri, modern, namun tetap menjaga nilai-nilai keislaman yang luhur.</p>

            <div class="info-box">
                <div class="info-icon">
                    <i class="fas fa-info"></i>
                </div>
                <p><strong>Temal, Teman Beramal</strong> <br>Maskot kami yang mewakili semangat berbagi dan kolaborasi</p>
            </div>
        </div>
    </div>
</section>
<section id="program-utama" class="section-padding">
    <h2 class="section-heading">Program Utama</h2>
    <p class="section-description">Empat pilar program kami untuk mendukung kemandirian pesantren di era digital</p>
    <div class="program-card-grid">
        <div class="program-card">
            <div class="icon-circle">
                <img src="{{ asset('assets/icon3.png') }}" alt="Digitalisasi Manajemen Pesantren Icon Komputer">
            </div>
            <h3>Digitalisasi Manajemen Pesantren</h3>
            <p>Sistem manajemen digital untuk administrasi, keuangan, dan akademik pesantren yang terintegrasi.</p>
        </div>
        <div class="program-card">
            <div class="icon-circle">
                <img src="{{ asset('assets/icon2.png') }}" alt="Pendampingan Unit Usaha Produktif Icon Dollar">
            </div>
            <h3>Pendampingan Unit Usaha Produktif</h3>
            <p>Membantu pesantren mengembangkan unit usaha yang berkelanjutan untuk mendukung kemandirian ekonomi.</p>
        </div>
        <div class="program-card">
            <div class="icon-circle">
                <img src="{{ asset('assets/icon 4.png') }}" alt="Pelatihan SDM Pesantren Icon Buku">
            </div>
            <h3>Pelatihan SDM Pesantren</h3>
            <p>Program peningkatan kapasitas ustadz, santri, dan pengelola pesantren dalam bidang teknologi dan kewirausahaan.</p>
        </div>
        <div class="program-card">
            <div class="icon-circle">
                <img src="{{ asset('assets/icon 1.png') }}" alt="Platform Donasi & Crowdfunding Icon Hati">
            </div>
            <h3>Platform Donasi & Crowdfunding</h3>
            <p>Menghubungkan pesantren dengan donatur dan pendukung melalui platform digital yang transparan dan akuntabel.</p>
        </div>
    </div>
</section>
<section id="how-it-works" class="section-padding">
    <h2 class="section-heading">Bagaimana Amallan Bekerja</h2>
    <p class="section-description">Proses kami dalam mendampingi pesantren menuju kemandirian</p>
    <div class="step-card-grid">
        <div class="step-card">
            <div class="step-number-circle">
                <img src="{{ asset('assets/num1.png') }}" alt="Langkah 1: Identifikasi Pesantren">
            </div>
            <h3>Identifikasi Pesantren</h3>
            <p>Memetakan kebutuhan dan potensi pesantren mitra untuk pengembangan program yang tepat sasaran.</p>
        </div>
        <div class="step-card">
            <div class="step-number-circle">
                <img src="{{ asset('assets/num2.png') }}" alt="Langkah 2: Digitalisasi Sistem">
            </div>
            <h3>Digitalisasi Sistem</h3>
            <p>Implementasi sistem digital untuk manajemen pesantren yang efektif dan efisien.</p>
        </div>
        <div class="step-card">
            <div class="step-number-circle">
                <img src="{{ asset('assets/num3.png') }}" alt="Langkah 3: Pemberdayaan Ekonomi">
            </div>
            <h3>Pemberdayaan Ekonomi</h3>
            <p>Pendampingan pengembangan unit usaha produktif dan pelatihan kewirausahaan.</p>
        </div>
        <div class="step-card">
            <div class="step-number-circle">
                <img src="{{ asset('assets/num4.png') }}" alt="Langkah 4: Penggalangan Dukungan">
            </div>
            <h3>Penggalangan Dukungan</h3>
            <p>Menghubungkan pesantren dengan jaringan donatur dan pendukung untuk keberlanjutan program.</p>
        </div>
    </div>
</section>
<section id="dampak-nyata" class="section-padding">
    <h2 class="section-heading">Dampak Nyata</h2>
    <p class="section-description">Kisah sukses pesantren yang telah bermitra dengan Amallan</p>
    <div class="dampak-content">
        <div class="dampak-gallery">
            <img src="{{ asset('assets/darulfikri1.png') }}" alt="Pondok Pesantren Darul Fikri - Gerbang Utama">
            <img src="{{ asset('assets/darulfikri2.png') }}" alt="Pondok Pesantren Darul Fikri - Area Persawahan">
            <img src="{{ asset('assets/darulfikri3.png') }}" alt="Pondok Pesantren Darul Fikri - Kebun Anggur">
            <img src="{{ asset('assets/darulfikri4.png') }}" alt="Pondok Pesantren Darul Fikri - Santri dan Bangunan">
        </div>
        <div class="dampak-info-card">
            <h3>Pondok Pesantren Darul Fikri</h3>
            <p>Sebelum bermitra dengan Amallan, Pondok Pesantren Darul Fikri menghadapi tantangan dalam manajemen administrasi dan keuangan yang masih manual. Selain itu, potensi ekonomi pesantren belum terkelola dengan optimal.</p>
            <p>Setelah 1 tahun bermitra dengan Amallan:</p>
            <ul>
                <li><i class="fas fa-check-circle"></i> Sistem administrasi dan keuangan terdigitalisasi, meningkatkan efisiensi 70%</li>
                <li><i class="fas fa-check-circle"></i> Unit usaha produksi makanan ringan berkembang dan memasarkan produk secara online</li>
                <li><i class="fas fa-check-circle"></i> 25 santri terlatih dalam keterampilan digital dan kewirausahaan</li>
                <li><i class="fas fa-check-circle"></i> Pendapatan pesantren meningkat 40% dari unit usaha produktif</li>
            </ul>
        </div>
    </div>
</section>

<section id="kenalan-temal" class="section-padding">
    <h2 class="section-heading">Kenalan dengan Temal</h2>
    <p class="section-description">Maskot Amallan yang selalu siap menemani perjalanan kebaikan</p>
    <div class="temal-container">
        <div class="temal-text-content">
            <h3>Temal, Teman Beramal</h3>
            <p>Temal adalah maskot Amallan yang mewakili semangat berbagi dan kolaborasi. Dengan senyum ramah dan tangan terbuka, Temal selalu siap mengajak semua kalangan untuk bergabung dalam gerakan kebaikan.</p>
            <p>Temal hadir sebagai simbol bahwa beramal dan berbuat baik itu menyenangkan, terutama ketika dilakukan bersama-sama sebagai sebuah komunitas.</p>
            <div class="temal-tags">
                <div class="temal-tag">
                    <i class="fas fa-check-circle"></i> Ramah
                </div>
                <div class="temal-tag">
                    <i class="fas fa-check-circle"></i> Inspiratif
                </div>
                <div class="temal-tag">
                    <i class="fas fa-check-circle"></i> Kolaboratif
                </div>
            </div>
        </div>
        <div class="temal-image-container">
            <img src="{{ asset('assets/kenalan_temal_maskot.png') }}" alt="Maskot Amallan bernama Temal">
        </div>
    </div>
</section>

<section id="bergabung-gerakan" class="section-padding">
    <h2 class="section-heading">Bergabung dengan Gerakan Kebaikan</h2>
    <p class="section-description">Ada banyak cara untuk berkontribusi dalam gerakan digitalisasi dan kemandirian pesantren</p>
    <div class="gerakan-card-grid">
        <div class="gerakan-card">
            <div class="gerakan-icon-container">
                <img src="{{ asset('assets/icon_donasi.png') }}" alt="Ikon Donasi">
            </div>
            <h3>Donasi</h3>
            <p>Dukung program-program Amallan melalui donasi untuk membantu lebih banyak pesantren mencapai kemandirian.</p>
            <a href="#donasi-page" class="gerakan-button">Donasi Sekarang</a>
        </div>
        <div class="gerakan-card">
            <div class="gerakan-icon-container">
                <img src="{{ asset('assets/icon_kolaborasi.png') }}" alt="Ikon Kolaborasi">
            </div>
            <h3>Kolaborasi</h3>
            <p>Ajak organisasi atau perusahaan Anda untuk berkolaborasi dalam program pemberdayaan pesantren.</p>
            <a href="#kolaborasi-page" class="gerakan-button">Ajukan Kolaborasi</a>
        </div>
        <div class="gerakan-card">
            <div class="gerakan-icon-container">
                <img src="{{ asset('assets/icon_relawan.png') }}" alt="Ikon Jadi Relawan">
            </div>
            <h3>Jadi Relawan</h3>
            <p>Kontribusikan waktu, tenaga, dan keahlian Anda untuk membantu pesantren berkembang.</p>
            <a href="#relawan-page" class="gerakan-button">Gabung Sekarang</a>
        </div>
    </div>
    <div class="hubungi-kami-container">
       <a href="#contact" class="button-hubungi-kami-putih">Hubungi Kami</a>
    </div>
</section>

<section id="contact" class="contact-section-padding">
    <h2 class="contact-heading">Kontak & Sosial Media</h2>
    <p class="contact-subheading">Hubungi kami untuk informasi lebih lanjut atau kolaborasi</p>

    <div class="contact-content-new">
        <div class="contact-info-new">
            <h3 class="contact-box-title">Hubungi Kami</h3>
            <div class="contact-item-new">
                <img src="{{ asset('assets/icon_email.png') }}" alt="Email Icon">
                <div class="text-content">
                    <strong>Email</strong>
                    <p>amallanindonesia@gmail.com</p>
                </div>
            </div>
            <div class="contact-item-new">
                <img src="{{ asset('assets/icon_whatsapp.png') }}" alt="WhatsApp Icon">
                <div class="text-content">
                    <strong>WhatsApp</strong>
                    <p>0821 5939 2448</p>
                </div>
            </div>
            <div class="contact-item-new">
                <img src="{{ asset('assets/icon_website.png') }}" alt="Website Icon">
                <div class="text-content">
                    <strong>Website</strong>
                    <p>www.amallan.id</p>
                </div>
            </div>
            <div class="contact-item-new">
                <img src="{{ asset('assets/icon_alamat.png') }}" alt="Alamat Icon">
                <div class="text-content">
                    <strong>Alamat</strong>
                    <p>Jl. HM Suwignyo Gg. Margodadirejo 1 No.12A, Kota Pontianak, Kalbar</p>
                </div>
            </div>
        </div>

        <div class="contact-form-new">
            <h3 class="contact-box-title">Kirim Pesan</h3>
            <form id="contact-form-new" action="https://formspree.io/f/mblyaozw" method="POST">
                <div class="form-group">
                    <label for="name-new">Nama</label>
                    <input type="text" id="name-new" name="Nama" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="email-new">Email</label>
                    <input type="email" id="email-new" name="Email" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="wa-new">WA</label>
                    <input type="tel" id="wa-new" name="WhatsApp" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="message-new">Pesan</label>
                    <textarea id="message-new" name="Pesan" rows="4" placeholder="" required></textarea>
                </div>
                <div class="form-group">
                     <button type="submit">Kirim Pesan</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection