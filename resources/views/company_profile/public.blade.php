<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teman Fitness - Fitness Partner Gen-Z</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --black: #000000;
            --white: #ffffff;
            --gray: #f5f5f5;
            --dark-gray: #222222;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--black);
            background: var(--white);
        }
        
        /* Navbar Minimalis */
        .navbar {
            background: var(--white) !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 15px 0;
        }
        .navbar-brand img {
            height: 40px;
        }
        
        /* Slider Fix */
        .hero-slider-container {
            max-height: 500px;
            overflow: hidden;
            margin-top: -80px;
        }
        .hero-slider {
            height: 500px;
        }
        .carousel-item {
            height: 100%;
        }
        .carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
            opacity: 0.7;
        }
        .carousel-caption {
            bottom: 30%;
            background: rgba(0,0,0,0.5);
            padding: 20px;
            border-radius: 10px;
        }
        .carousel-caption h1 {
            font-size: 2.5rem;
            font-weight: 800;
        }
        
        /* Fitur Fix */
        .feature-section {
            padding: 80px 0;
            position: relative;
            z-index: 2;
        }
        .feature-card {
            border: none;
            border-radius: 10px;
            background: var(--white);
            transition: all 0.3s;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            padding: 25px;
            margin-bottom: 30px;
        }
        .feature-icon {
            font-size: 1.75rem;
            margin-bottom: 1rem;
            color: var(--black);
        }
        .phone-mockup {
            max-width: 150px;
            margin: 20px auto 0;
            display: block;
            border-radius: 10px;
        }
        
        /* Responsive Fix */
        @media (max-width: 768px) {
            .hero-slider {
                height: 400px;
            }
            .carousel-caption h1 {
                font-size: 1.8rem;
            }
            .phone-mockup {
                max-width: 120px;
            }
        }
    
        .btn-slider {
            background: var(--white);
            color: var(--black);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            letter-spacing: 1px;
        }
        
        /* Section Style */
        .section-padding {
            padding: 100px 0;
        }
        .bg-gray {
            background: var(--gray);
        }
        
        /* Fitur Cards */
        .feature-card {
            border: none;
            border-radius: 0;
            background: var(--white);
            transition: all 0.3s;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        .feature-icon {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: var(--black);
        }
        .phone-mockup {
            max-width: 200px;
            margin: 30px auto 0;
            display: block;
        }
        
        /* Testimoni */
        .testimonial-card {
            background: var(--white);
            border: 1px solid #eee;
            padding: 30px;
        }
        .testimonial-img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 50%;
        }
        
        /* Footer */
        footer {
            background: var(--black);
            color: var(--white);
            padding: 60px 0 20px;
        }
        .footer-logo {
            filter: invert(100%);
            height: 40px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#fitur">Fitur</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimoni">Testimoni</a></li>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a class="btn btn-outline-black" href="#download">Download</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Slider dengan Container Pembatas -->
    <div class="hero-slider-container">
        <section class="hero-slider" id="home">
            <div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                             class="d-block w-100" 
                             alt="Fitness">
                        <div class="carousel-caption text-center">
                            <h1 class="mb-3">RAIH TUBUH INDAHMU</h1>
                            <p class="lead mb-4">Dengan Teman Fitness</p>
                            <a href="#" class="btn btn-light">AYO DAFTAR SEKARANG</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1538805060514-97d9cc17730c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                             class="d-block w-100" 
                             alt="Workout">
                        <div class="carousel-caption text-center">
                            <h1 class="mb-3">START YOUR JOURNEY</h1>
                            <p class="lead mb-4">Bersama Komunitas Kami</p>
                            <a href="#" class="btn btn-light">GABUNG SEKARANG</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    

   

    <!-- Tentang -->
    <section class="section-padding bg-gray" id="tentang">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                         alt="Tentang Kami" 
                         class="img-fluid shadow">
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">TENTANG KAMI</h2>
                    <p class="lead mb-4">Teman Fitness adalah platform fitness generasi baru</p>
                    <p>Kami menghubungkan pecinta fitness dengan gym terbaik, pelatih profesional, dan komunitas yang mendukung. Dengan teknologi terkini, kami membuat perjalanan fitnessmu lebih mudah dan menyenangkan.</p>
                    <a href="#" class="btn btn-outline-dark mt-3">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
    <div class="row align-items-center">
        <!-- Kolom Gambar -->
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="gym-facility.jpg" alt="Fasilitas Gym" class="img-fluid rounded shadow-lg">
        </div>

        <!-- Kolom Konten -->
        <div class="col-md-6">
            <div class="ps-md-4"> <!-- Tambahkan padding kiri di desktop -->
                <div class="mt-4">
                    <h3 class="text-primary mb-3">Membership mulai dari Rp249.000/bulan</h3>
                    <p class="text-muted mb-4">
                        Bebas olahraga di semua klub dengan fasilitas premium dan akses kelas FIT HUB sepuasnya
                    </p>
                    <a href="#" class="btn btn-primary btn-lg px-4 py-3">
                        Lihat Paket Membership →
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

  <div class="container my-5">
    <div class="row align-items-center">
        

<div class="container-fluid bg-secondary py-5"> <!-- Background abu-abu -->
    <div class="container">
        <div class="row justify-content-center"> <!-- Pusatkan konten -->
            <div class="col-md-8 text-center"> <!-- Lebar konten dan teks tengah -->
                <div class="p-4"> <!-- Padding internal -->
                    <h3 class="text-primary fw-bold mb-3">Promo Kelas Pilates Hanya Rp65.900/sesi</h3>
                    <h2 class="display-4 mb-4 text-white">Tunggu Apa Lagi? Ayo Daftar!</h2>
                    <p class="lead mb-4 text-light">Untuk raih postur tubuh idaman</p>
                    <a href="#" class="btn btn-danger btn-lg px-5 py-3">
                        Daftar Sekarang!
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

     <!-- Fitur (Tampilan Grid Fix) -->
    <section class="feature-section" id="fitur">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">FITUR UNGGULAN</h2>
                <p class="text-muted">Yang bikin kamu makin semangat workout</p>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-dumbbell"></i>
                        </div>
                        <h4 class="mb-3">Workout Planner</h4>
                        <p class="text-muted">Rencana latihan personal berdasarkan goalmu</p>
                        <img src="{{ asset('iphone.png') }}"  class="phone-mockup" alt="Workout Planner">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4 class="mb-3">Crowd Meter</h4>
                        <p class="text-muted">Pantau kepadatan gym real-time</p>
                        <img src="{{ asset('iphone.png') }}"  class="phone-mockup" alt="Workout Planner"> 
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4 class="mb-3">Progress Tracker</h4>
                        <p class="text-muted">Pantau perkembangan tubuhmu</p>
                        <img src="{{ asset('iphone.png') }}"  class="phone-mockup" alt="Workout Planner">
                    </div>
                </div>
            </div>
        </div>
    </section>


        <!-- CTA Download -->
    <section class="py-5 bg-black text-white" id="download">
        <div class="container text-center py-5">
            <h2 class="fw-bold mb-4">DOWNLOAD APLIKASI KAMI</h2>
            <p class="lead mb-5">Mulai perjalanan fitnessmu sekarang</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#" class="btn btn-light btn-lg px-4">
                    <i class="fab fa-apple me-2"></i> App Store
                </a>
                <a href="#" class="btn btn-light btn-lg px-4">
                    <i class="fab fa-google-play me-2"></i> Play Store
                </a>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section class="section-padding" id="testimoni">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">APA KATA MEREKA</h2>
                <p class="text-muted">Testimoni dari member kami</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card h-100">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" class="testimonial-img me-3" alt="Sarah">
                            <div>
                                <h5 class="mb-0">Sarah</h5>
                                <p class="text-muted mb-0">Member sejak 2023</p>
                            </div>
                        </div>
                        <p>"Aplikasinya sangat membantu untuk tracking progress latihan. Fitur Crowd Meter favoritku!"</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="testimonial-card h-100">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" class="testimonial-img me-3" alt="Rizky">
                            <div>
                                <h5 class="mb-0">Rizky</h5>
                                <p class="text-muted mb-0">Member sejak 2022</p>
                            </div>
                        </div>
                        <p>"Komunitasnya sangat supportive. Sekarang workout jadi lebih konsisten!"</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="testimonial-card h-100">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/women/63.jpg" class="testimonial-img me-3" alt="Dewi">
                            <div>
                                <h5 class="mb-0">Dewi</h5>
                                <p class="text-muted mb-0">Member sejak 2024</p>
                            </div>
                        </div>
                        <p>"Workout Planner-nya sangat personalized. Cocok untuk pemula seperti saya."</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <img src="{{ asset('Logo_Teman_Fitness.png') }}" 
 class="footer-logo" alt="Teman Fitness">
                    <p>Platform fitness terbaik untuk generasi muda Indonesia.</p>
                    <div class="mt-4">
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-tiktok fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-youtube fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5 class="mb-4">Perusahaan</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Tentang</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Lokasi</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5 class="mb-4">Produk</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Fitur</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Harga</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">FAQ</a></li>
                    </ul>
                </div>
                
            </div>
            <hr class="my-5 bg-light">
            <div class="text-center">
                <p class="mb-0">&copy; 2024 Teman Fitness. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scroll dengan offset untuk navbar
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                window.scrollTo({
                    top: target.offsetTop - 80,
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>