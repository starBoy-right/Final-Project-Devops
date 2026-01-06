@extends('layouts.app')

@section('title', 'HIJO-4EVER')

@section('content')
    <section class="hero-section" id="home">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column align-items-center">
                    <div class="hero-content">
                        <h1 class="mb-4">Navigating the digital landscape for success</h1>
                        <img class="img-fluid d-block d-lg-none" src="{{ asset('assets/images/services-1.JPEG') }}"
                            alt="">
                        <p class="mb-5">Our digital marketing agency helps businesses grow and succeed online
                            through a range of services including SEO, PPC, social media marketing, and content
                            creation.</p>
                        <a class="button w-100 d-inline-block text-center d-lg-inline" href="#contact">Book a
                            Consultation</a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img class="img-float hero-img" src="{{ asset('assets/images/services-1.JPEG') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="logo-section my-5 pt-5 py-lg-5">
        <div class="container">
            <div class="logo-ticker-container">
                <div class="logo-ticker-track">
                    <div class="logo-item">
                        <img src="{{ asset('assets/images/Company-logo.png') }}" alt="Company Logo">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('assets/images/Company-logo-1.png') }}" alt="Company Logo 1">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('assets/images/Company-logo-2.png') }}" alt="Company Logo 2">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('assets/images/Company-logo-3.png') }}" alt="Company Logo 3">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('assets/images/Company-logo-4.png') }}" alt="Company Logo 4">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('assets/images/Company-logo-5.png') }}" alt="Company Logo 5">
                    </div>

                    <div class="logo-item">
                        <img src="{{ asset('assets/images/Company-logo.png') }}" alt="Company Logo">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('assets/images/Company-logo-1.png') }}" alt="Company Logo 1">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('assets/images/Company-logo-2.png') }}" alt="Company Logo 2">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('assets/images/Company-logo-3.png') }}" alt="Company Logo 3">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('assets/images/Company-logo-4.png') }}" alt="Company Logo 4">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('assets/images/Company-logo-5.png') }}" alt="Company Logo 5">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="container">
            <div class="row">
                <div class="heading d-block text-center text-lg-start d-lg-flex align-items-lg-center mb-5">
                    <h2 class="mb-0 d-inline-block mb-4 mb-lg-0">Services</h2>
                    <p class="ps-lg-4 ps-0 mb-0">
                        At our digital marketing agency, we offer a range of services to <br> help businesses grow
                        and succeed online. These services include:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="pelayanan-card pelayanan-card-one ">
                        <div class="row">
                            <div class="col-lg-6 d-flex flex-column justify-content-between">
                                <h2>Portal Inspirasi & Pencarian Travel</h2>
                                <a href="#" class="d-flex text-decoration-none">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid" src="{{ asset('assets/images/services-1.JPEG') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pelayanan-card pelayanan-card-two ">
                        <div class="row">
                            <div class="col-lg-6 d-flex flex-column justify-content-between">
                                <h2>Landing Page Jasa Taman & Landscape</h2>
                                <a href="#" class="d-flex text-decoration-none">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid" src="{{ asset('assets/images/services-2.JPEG') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pelayanan-card pelayanan-card-three ">
                        <div class="row">
                            <div class="col-lg-6 d-flex flex-column justify-content-between">
                                <h2>BaliDream Gateway</h2>
                                <a href="#" class="d-flex text-decoration-none">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid" src="{{ asset('assets/images/s_3.JPEG') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pelayanan-card pelayanan-card-four ">
                        <div class="row">
                            <div class="col-lg-6 d-flex flex-column justify-content-between">
                                <h2>Website Wisata Budaya & Eksplorasi Indonesia</h2>
                                <a href="#" class="d-flex text-decoration-none">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid" src="{{ asset('assets/images/s_4.JPEG') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pelayanan-card pelayanan-card-five ">
                        <div class="row">
                            <div class="col-lg-6 d-flex flex-column justify-content-between">
                                <h2>Landing Page Agen Travel Modern & Lengkap</h2>
                                <a href="#" class="d-flex text-decoration-none">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid" src="{{ asset('assets/images/s_5.JPEG') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pelayanan-card pelayanan-card-six ">
                        <div class="row">
                            <div class="col-lg-6 d-flex flex-column justify-content-between">
                                <h2>SignFlow Seamless</h2>
                                <a href="#" class="d-flex text-decoration-none">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid" src="{{ asset('assets/images/s_6.JPEG') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="proposal-banner border-0 p-5 mt-5">
                <h2>Let’s make things happen</h2>
                <p>Contact us today to learn more about how our digital marketing services can help your business
                    grow and succeed online.</p>
                <a class="bg-dark text-white w-100 d-inline-block py-3 rounded-4 text-center text-decoration-none"
                    href="#services">Get your proposal</a>
            </div>
        </div>
    </section>

    <section class="working-process my-5">
        <div class="container">
            <div class="row">
                <div class="row d-flex flex-nowrap flex-row">
                    <div class="heading d-block text-center text-lg-start d-lg-flex align-items-lg-center mb-5">
                        <h2 class="mb-0 d-inline-block mb-4 mb-lg-0">Our Working Process </h2>
                        <p class="ps-4 mb-0">Step-by-Step Guide to Achieving <br> Your Business Goals</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="accordion mt-2 mt-lg-5" id="accordionExample">
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="accordian-numbers">01</span> "Wanderlust Search Hub" – Portal Inspirasi & Pencarian Travel
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
"                               Lihat Dunia, Mulai dari Sini." Itulah pesan kuat dari Wanderlust Search Hub. Website ini saya desain untuk memicu rasa ingin tahu dan petualangan. Dengan fitur SEARCH yang prominent dan tombol ajakan "See the World" serta "Read More", pengunjung akan merasa dipandu untuk menjelajah lebih dalam.
Sangat cocok untuk blog traveler, direktori wisata, atau platform yang hidup dari konten inspiratif. Ini adalah homepage yang mengundang eksplorasi dan engagement. Jadikan website Anda gerbang pertama mereka sebelum memutuskan destinasi!"
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="accordian-numbers">02</span> "HavenCraft Pro" – Landing Page Jasa Taman & Landscape
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                "Transformasi ruang outdoor biasa menjadi oase pribadi yang memukau? Itulah yang akan HavenCraft Pro tawarkan kepada klien Anda. Saya menciptakan landing page yang tidak hanya cantik, tetapi juga high-converting.
                                Dengan headline yang kuat ('Transforming your outdoor spaces') dan penawaran 'Request a Free Consultation' yang strategis, website ini dirancang untuk menarik minat pemilik rumah dan pengembang komersial. Desainnya mencerminkan presisi, kreativitas, dan profesionalisme layanan Anda. Biarkan website ini yang menjadwalkan konsultasi gratis, sehingga Anda bisa fokus mengubah konsep menjadi kenyataan."
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="accordian-numbers">03</span> "BaliDream Gateway" – Website Paket Liburan Premium
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                               "Sudah siap membuka pintu surga bagi para traveler? BaliDream Gateway adalah website eksklusif yang saya rancang khusus untuk agen perjalanan seperti Anda. Tampilannya elegan dan langsung fokus pada destinasi impian: Bali, Indonesia!
                                Dengan fitur 'View Package' yang jelas, navigasi lengkap (Home, Package, Testimonials, Contact Us), plus rekomendasi destinasi global seperti Kyoto dan Vienna, website ini tidak hanya menjual, tapi juga menginspirasi. Bayangkan calon pelanggan Anda terpana melihat destinasi yang tertata rapi dan siap di-klik. Ini adalah mesin penjualan paket liburan Anda yang akan bekerja 24/7. Mari ubah klik mereka menjadi booking!"
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span class="accordian-numbers">04</span> "Nusantara Revealed" – Website Wisata Budaya & Eksplorasi Indonesia
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                               "Promosikan keindahan Indonesia dengan cara yang modern dan berkelas! Nusantara Revealed adalah website yang saya bangun dengan cinta untuk memamerkan kekayaan alam dan budaya Tanah Air, mulai dari Kawah Ijen hingga Gunung Bromo.
                                Dengan branding 'tra_vel' yang stylish, menu navigasi (about, explore, destinations) yang intuitif, dan penyajian konten yang visual, website ini cocok untuk Dinas Pariwisata, tour operator lokal, atau influencer travel yang ingin mengangkat destinasi super prioritas. Ajak dunia untuk mengenal Indonesia lebih dari sekadar Bali. Website ini adalah duta digital Anda."
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <span class="accordian-numbers">05</span> "Voyager Prime" – Landing Page Agen Travel Modern & Lengkap
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                "Explore and Travel the World — Inilah kesan pertama yang kuat yang akan diberikan Voyager Prime kepada setiap pengunjung. Sebagai landing page agen travel modern, website ini sudah dilengkapi semua elemen penting: logo, menu navigasi lengkap (About, Services, Contact), kolom search, dan area hero yang memukau.
                                Desainnya profesional, responsif, dan siap diisi dengan paket-paket tour menarik. Ini adalah wajah digital pertama bisnis travel Anda yang akan membangun kepercayaan dan mendorong tindakan. Dari melihat langsung memesan, biarkan Voyager Prime yang memandu perjalanan mereka."
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <span class="accordian-numbers">06</span> "SignFlow Seamless" – Halaman Pendaftaran Membership yang Efektif
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                "Tingkatkan konversi pendaftaran member dengan SignFlow Seamless! Halaman sign-up yang saya buat ini sederhana, clean, dan bebas gangguan. Formulirnya hanya meminta informasi penting: email dan password.
                                Dengan checkbox persetujuan terms yang jelas, Anda mengurangi risiko di kemudian hari. Desain minimalisnya fokus pada satu tujuan: membuat pengguna menyelesaikan pendaftaran. Cocok untuk platform kursus online, komunitas eksklusif, atau aplikasi premium Anda. Hilangkan semua friksi, dan sambut member baru dengan lebih mudah."
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section" id="team">
        <div class="team-header">
            <h2 class="team-title-badge">Team</h2>
            <p class="team-subtitle">Meet the skilled and experienced team <br> behind our successful digital
                marketing strategies</p>
        </div>

        <div class="team-grid">

            <div class="team-card">
                <a href="#" class="linkedin-icon" aria-label="LinkedIn Profile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.708-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.297 0-1.858.715-2.169 1.213v-1.043H6.645v7.225h2.408z" />
                    </svg>
                </a>
                <div class="card-header">
                    <div class="profile-image-container">
                        <img src="{{ asset('assets/member-images/nadya.png') }}" alt="Nadya Mutia Safira"
                            class="profile-pic">
                    </div>
                    <div class="profile-info">
                        <h3 class="member-name">Nadya Mutia Safira</h3>
                        <p class="member-role">Project Manager</p>
                    </div>
                </div>
                <hr class="card-divider">
                <div class="card-body">
                    <p class="member-description">
                        10+ years of experience in digital marketing. Expertise in SEO, PPC, and content strategy.
                    </p>
                </div>
            </div>

            <div class="team-card">
                <a href="#" class="linkedin-icon" aria-label="LinkedIn Profile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.708-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.297 0-1.858.715-2.169 1.213v-1.043H6.645v7.225h2.408z" />
                    </svg>
                </a>
                <div class="card-header">
                    <div class="profile-image-container">
                        <img src="{{ asset('assets/member-images/romi-image.jpeg') }}" alt="Romi Wahyudi H."
                            class="profile-pic">
                    </div>
                    <div class="profile-info">
                        <h3 class="member-name">Romi Wahyudi Hasibuan</h3>
                        <p class="member-role">Lead Ops</p>
                    </div>
                </div>
                <hr class="card-divider">
                <div class="card-body">
                    <p class="member-description">
                        8+ years of experience in project management and team leadership. Strong organizational and
                        communication skills.
                    </p>
                </div>
            </div>

            <div class="team-card">
                <a href="#" class="linkedin-icon" aria-label="LinkedIn Profile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.708-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.297 0-1.858.715-2.169 1.213v-1.043H6.645v7.225h2.408z" />
                    </svg>
                </a>
                <div class="card-header">
                    <div class="profile-image-container">
                        <img src="{{ asset('assets/member-images/hanif.jpeg') }}" alt="M. Shidqi Hanif Firdaus"
                            class="profile-pic">
                    </div>
                    <div class="profile-info">
                        <h3 class="member-name">M. Shidqi Hanif <br> Firdaus</h3>
                        <p class="member-role">Lead Dev</p>
                    </div>
                </div>
                <hr class="card-divider">
                <div class="card-body">
                    <p class="member-description">
                        5+ years of experience in SEO and content creation. Proficient in keyword research and
                        on-page optimization.
                    </p>
                </div>
            </div>

            <div class="team-card">
                <a href="#" class="linkedin-icon" aria-label="LinkedIn Profile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.708-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.297 0-1.858.715-2.169 1.213v-1.043H6.645v7.225h2.408z" />
                    </svg>
                </a>
                <div class="card-header">
                    <div class="profile-image-container">
                        <img src="{{ asset('assets/member-images/faiz.JPG') }}" alt="M. Hafiz Zalfa Al-Gifari"
                            class="profile-pic">
                    </div>
                    <div class="profile-info">
                        <h3 class="member-name">M. Hafiz Zalfa <br> Al-Gifari</h3>
                        <p class="member-role">Security</p>
                    </div>
                </div>
                <hr class="card-divider">
                <div class="card-body">
                    <p class="member-description">
                        4+ years of experience in social media marketing. Proficient in creating and scheduling
                        content, analyzing metrics, and building engagement.
                    </p>
                </div>
            </div>

            <div class="team-card">
                <a href="#" class="linkedin-icon" aria-label="LinkedIn Profile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.708-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.297 0-1.858.715-2.169 1.213v-1.043H6.645v7.225h2.408z" />
                    </svg>
                </a>
                <div class="card-header">
                    <div class="profile-image-container">
                        <img src="{{ asset('assets/member-images/Jiro.jpg') }}" alt="Harun yahya" class="profile-pic">
                    </div>
                    <div class="profile-info">
                        <h3 class="member-name">Harun yahya</h3>
                        <p class="member-role">Junior Dev</p>
                    </div>
                </div>
                <hr class="card-divider">
                <div class="card-body">
                    <p class="member-description">
                        2+ years of experience in writing and editing. Skilled in creating compelling, SEO-optimized
                        content for various industries.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us my-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="row d-flex flex-nowrap flex-row">
                    <div class="heading d-block text-center text-lg-start d-lg-flex align-items-lg-center mb-5">
                        <h2 class="mb-0 d-inline-block mb-4 mb-lg-0" id="contact">Contact Us</h2>
                        <p class="ps-4 mb-0">Hubungi tim kami untuk <br> memberikan informasi lebih lanjut serta
                            panduan pendaftaran.</p>
                    </div>
                </div>
            </div>
            <div class="contact-wrapper position-relative overflow-hidden" id="order">
                <div class="row">
                    <div class="col-lg-8">

                        {{-- SUCCESS --}}
                        @if (session('success'))
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    document.getElementById("order").scrollIntoView({
                                        behavior: "smooth"
                                    });
                                });
                            </script>
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        {{-- ERROR --}}
                        @if ($errors->any())
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    document.getElementById("order").scrollIntoView({
                                        behavior: "smooth"
                                    });
                                });
                            </script>
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('order.store') }}" method="POST">
                            @csrf

                            <div class="d-flex justify-content-around justify-content-lg-start">
                                <div class="d-flex align-items-center">
                                    <div class="radio-button-container">
                                        <input type="radio" id="say-hi" name="greeting" value="Say Hi" checked>
                                        <label class="d-flex align-items-center" for="say-hi">
                                            <span class="custom-radio"></span> Say Hi
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <label class="mt-3">Name</label>
                            <input class="form-control" type="text" name="nama" placeholder="Name"
                                value="{{ old('nama') }}" required>

                            <label class="mt-3">Email</label>
                            <input class="form-control" type="email" name="email" placeholder="Email"
                                value="{{ old('email') }}" required>

                            <label class="mt-3">Message</label>
                            <textarea class="form-control" name="message" placeholder="Message" value="{{ old('message') }}" required></textarea>

                            <input class="form-control mt-4 bg-dark text-white" type="submit" value="Send Message">
                        </form>

                    </div>
                    <img class="contact-bg d-none d-lg-block" src="{{ asset('assets/images/contact-bg.png') }}"
                        alt="">

                </div>
            </div>
        </div>
    </section>
@endsection
