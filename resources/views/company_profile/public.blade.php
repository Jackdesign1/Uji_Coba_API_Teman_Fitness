<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teman Fitness - Fitness Partner Gen-Z</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans min-h-screen">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg sticky-top">
        <div class="max-w-6xl mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="#home" class="flex items-center">
                    <img src="{{ asset('Logo_Teman_Fitness.png') }}"  alt="Teman Fitness Logo" class="h-10">
                </a>
                <div class="flex space-x-4">
                    <a href="#home" class="px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md transition">Home</a>
                    <a href="#fitur" class="px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md transition">Fitur</a>
                    <a href="#tentang" class="px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md transition">Tentang</a>
                    <a href="#program" class="px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md transition">Program</a>
                    <a href="#testimoni" class="px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md transition">Testimoni</a>
                    <a href="#download" class="px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-900">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative bg-gray-800 text-white py-32">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Fitness" class="w-full h-full object-cover opacity-50">
        </div>
        <div class="relative max-w-4xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Bentuk Tubuh Ideal Bersama Teman Fitness</h1>
            <p class="text-lg md:text-xl mb-6">Platform fitness Gen-Z untuk gaya hidup sehat yang seru dan terjangkau!</p>
            <a href="#download" class="inline-block bg-white text-gray-800 px-6 py-3 rounded-md font-semibold hover:bg-gray-200 transition">Daftar Sekarang</a>
        </div>
    </section>

    <!-- Fitur Unggulan -->
    <section id="fitur" class="py-16 bg-gray-200">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Fitur Unggulan</h2>
            <p class="text-center text-gray-600 mb-12">Kenapa memilih Teman Fitness?</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition transform hover:-translate-y-2">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Mudah Dijangkau</h3>
                    <p class="text-gray-600">Dekat dengan pusat kota dan akses mudah dari segala arah.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition transform hover:-translate-y-2">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Konsultan Profesional</h3>
                    <p class="text-gray-600">Membantu memilih program latihan yang sesuai kebutuhanmu.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition transform hover:-translate-y-2">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Terakreditasi</h3>
                    <p class="text-gray-600">Fasilitas dan pelatih bersertifikasi dengan standar tinggi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section id="tentang" class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Tentang Teman Fitness</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Tentang Kami" class="w-full rounded-lg shadow-lg">
                <div>
                    <p class="text-lg text-gray-600 mb-4">Selamat datang di <strong>Teman Fitness</strong>, platform fitness terbaik untuk Gen-Z!</p>
                    <p class="text-gray-600">Kami berdedikasi untuk membantu setiap anggota mencapai tujuan kesehatan dan kebugaran melalui fasilitas lengkap, program latihan inovatif, dan bimbingan pelatih profesional. Dengan teknologi terkini, kami membuat perjalanan fitnessmu lebih mudah dan menyenangkan.</p>
                    <a href="#" class="inline-block mt-4 text-gray-800 font-semibold hover:underline">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Kenapa Teman Fitness (Timeline) -->
    <section class="py-16 bg-gray-200">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Kenapa Teman Fitness?</h2>
            <div class="relative">
                <div class="absolute left-1/2 w-1 bg-gray-400 h-full transform -translate-x-1/2"></div>
                <div class="space-y-12">
                    <div class="relative flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 p-4">
                            <p class="text-gray-600">Fasilitas lengkap dan modern, dari alat fitness berkualitas hingga ruang latihan nyaman. Didukung pelatih profesional untuk metode latihan efektif dan personal.</p>
                        </div>
                        <div class="md:w-1/2 p-4">
                            <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Gym" class="w-full rounded-lg shadow-lg">
                        </div>
                        <div class="absolute left-1/2 top-1/2 bg-gray-800 text-white w-10 h-10 flex items-center justify-center rounded-full transform -translate-x-1/2 -translate-y-1/2 border-2 border-white">1</div>
                    </div>
                    <div class="relative flex flex-col md:flex-row-reverse items-center">
                        <div class="md:w-1/2 p-4">
                            <p class="text-gray-600">Kombinasi fasilitas terbaik, pelatih bersertifikat, dan komunitas suportif. Jadi bagian dari komunitas yang saling menyemangati untuk hidup sehat.</p>
                        </div>
                        <div class="md:w-1/2 p-4">
                            <img src="https://images.unsplash.com/photo-1581009146145-b5ef050c2e1e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Gym" class="w-full rounded-lg shadow-lg">
                        </div>
                        <div class="absolute left-1/2 top-1/2 bg-gray-800 text-white w-10 h-10 flex items-center justify-center rounded-full transform -translate-x-1/2 -translate-y-1/2 border-2 border-white">2</div>
                    </div>
                    <div class="relative flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 p-4">
                            <p class="text-gray-600">Alat gym lengkap, program latihan variatif, dan pelatih profesional. Suasana nyaman bikin kamu semangat dan konsisten latihan.</p>
                        </div>
                        <div class="md:w-1/2 p-4">
                            <img src="https://images.unsplash.com/photo-1593079831268-3381b0db4a77?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Gym" class="w-full rounded-lg shadow-lg">
                        </div>
                        <div class="absolute left-1/2 top-1/2 bg-gray-800 text-white w-10 h-10 flex items-center justify-center rounded-full transform -translate-x-1/2 -translate-y-1/2 border-2 border-white">3</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program -->
    <section id="program" class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Kurikulum Program</h2>
            <div class="space-y-12">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Program Pemula" class="w-full rounded-lg shadow-lg">
                    <div class="relative pl-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Program Pemula (4 Minggu)</h3>
                        <p class="text-gray-600">Membangun kebiasaan, mengenal dasar latihan, dan memperbaiki postur.</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Program Menengah" class="w-full rounded-lg shadow-lg">
                    <div class="relative pl-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Program Menengah (6 Minggu)</h3>
                        <p class="text-gray-600">Meningkatkan kekuatan, massa otot, dan daya tahan tubuh.</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <img src="https://images.unsplash.com/photo-1581009146145-b5ef050c2e1e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Program Lanjutan" class="w-full rounded-lg shadow-lg">
                    <div class="relative pl-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Program Lanjutan (8 Minggu)</h3>
                        <p class="text-gray-600">Cutting, bulking, atau transformasi fisik intensif.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Membership -->
    <section class="py-16 bg-gray-200">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Daftar Sekarang</h2>
            <p class="text-lg text-gray-600 mb-6"><i>Jangan Tunggu Besok, <span class="text-gray-800 font-semibold">Mulai Perubahanmu Hari Ini!</span></i></p>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Akses 1 Bulan di Teman Fitness</h3>
                <ul class="text-left text-gray-600 space-y-2 mb-4">
                    <li class="flex items-center"><i class="fas fa-check-circle text-gray-800 mr-2"></i> Akses bebas ke seluruh fasilitas gym.</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-gray-800 mr-2"></i> Gratis konsultasi & program latihan personal.</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-gray-800 mr-2"></i> Pendampingan dari trainer profesional.</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-gray-800 mr-2"></i> Akses komunitas member Teman Fitness.</li>
                </ul>
                <div class="flex justify-between items-center mb-4">
                    <div>
                        <p class="text-gray-500 line-through">Rp250.000</p>
                        <p class="text-2xl font-bold text-gray-800">Rp150.000</p>
                    </div>
                    <img src="{{ asset('Logo_Teman_Fitness.png') }}"  alt="Logo" class="h-10">
                </div>
                <a href="#download" class="block bg-gray-800 text-white px-6 py-3 rounded-md font-semibold hover:bg-gray-900 transition">Join Now</a>
                <p class="text-gray-600 text-sm mt-2">Punya kode promo?</p>
            </div>
        </div>
    </section>

    <!-- Aplikasi -->
    <section id="download" class="py-16 bg-gradient-to-b from-gray-200 to-gray-100">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Aplikasi Eksklusif Member</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <p class="text-lg text-gray-600 mb-4">Dapatkan kemudahan akses video tutorial, modul, dan progres latihan dalam satu aplikasi.</p>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Hanya untuk Member, Download Sekarang</h3>
                    <a href="#" class="inline-block">
                        <img src="https://via.placeholder.com/150x50?text=Google+Play" alt="Google Play" class="h-12">
                    </a>
                </div>
                <img src="{{ asset('mockup.png') }}"  alt="App Mockup" class="mx-auto max-w-xs">
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section id="testimoni" class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Apa Kata Mereka</h2>
            <p class="text-center text-gray-600 mb-12">Testimoni dari member kami</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah" class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800">Sarah</h4>
                            <p class="text-gray-600 text-sm">Member sejak 2023</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"Aplikasi sangat membantu untuk tracking progress. Crowd Meter favoritku!"</p>
                    <div class="text-gray-800">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Rizky" class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800">Rizky</h4>
                            <p class="text-gray-600 text-sm">Member sejak 2022</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"Komunitasnya sangat suportif. Workout jadi lebih konsisten!"</p>
                    <div class="text-gray-800">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="Dewi" class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800">Dewi</h4>
                            <p class="text-gray-600 text-sm">Member sejak 2024</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"Workout Planner sangat personalized. Cocok untuk pemula!"</p>
                    <div class="text-gray-800">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lokasi -->
    <section class="py-16 bg-gray-200">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Lokasi</h2>
            <p class="text-lg text-gray-600 mb-4">Jalan Gajah Mada No 54 RT 34 RW 35, Sun City Mall Sidoarjo, Jawa Timur, Indonesia</p>
            <img src="https://via.placeholder.com/450x300?text=Map+Placeholder" alt="Peta Lokasi" class="mx-auto rounded-lg shadow-lg mb-4">
            <a href="https://www.google.com/maps" target="_blank" class="inline-block bg-gray-800 text-white px-6 py-3 rounded-md font-semibold hover:bg-gray-900 transition">Lihat di Google Maps</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <img src="{{ asset('Logo_Teman_Fitness.png') }}"  alt="Teman Fitness Logo" class="h-10 mb-4">
                    <p class="text-gray-400">Platform fitness terbaik untuk generasi muda Indonesia.</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-tiktok fa-lg"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube fa-lg"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-white mb-4">Perusahaan</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Tentang</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Lokasi</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-white mb-4">Produk</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Fitur</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Harga</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-white mb-4">Kontak</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">support@temanfitness.com</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">+62 812-3456-7890</a></li>
                    </ul>
                </div>
            </div>
            <hr class="border-gray-700 my-8">
            <p class="text-center text-gray-400">© 2025 Teman Fitness. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
