<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Landing Page - Sistem Pengelolaan Sampah Modern</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #d1fae5 0%, #10b981 100%);
            overflow-x: hidden;
        }
        .hero-bg {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.8), rgba(209, 250, 229, 0.8)), url('https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80'); /* Gambar sampah bersih dari Unsplash */
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Parallax effect */
        }
        .feature-card {
            transition: all 0.3s ease;
            border-radius: 20px;
        }
        .feature-card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        .counter {
            font-size: 3rem;
            font-weight: 700;
            color: #10b981;
        }
        .testimonial-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 15px;
        }
        .floating-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #10b981;
            color: white;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            transition: all 0.3s ease;
            z-index: 1000;
        }
        .floating-btn:hover {
            transform: scale(1.1);
        }
        .scroll-to-top {
            display: none;
        }
        .animate-fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="min-h-screen" onload="AOS.init();">

    <!-- Floating Button -->
    <a href="#home" class="floating-btn scroll-to-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Header -->
    <header class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-green-700 flex items-center">
                <i class="fas fa-recycle text-green-600 mr-2"></i>KelolaSampah
            </div>
            <nav class="space-x-6 hidden md:flex">
                <a href="#home" class="text-gray-700 hover:text-green-600 transition duration-300">Beranda</a>
                <a href="#features" class="text-gray-700 hover:text-green-600 transition duration-300">Fitur</a>
                <a href="#stats" class="text-gray-700 hover:text-green-600 transition duration-300">Statistik</a>
                <a href="#testimonials" class="text-gray-700 hover:text-green-600 transition duration-300">Testimoni</a>
                <a href="#about" class="text-gray-700 hover:text-green-600 transition duration-300">Tentang</a>
                <a href="#contact" class="text-gray-700 hover:text-green-600 transition duration-300">Kontak</a>
                <a href="login.php" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">Login</a>
            </nav>
            <button class="md:hidden text-gray-700" onclick="toggleMenu()">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <nav id="mobile-menu" class="hidden md:hidden bg-white shadow-md px-6 py-4 space-y-2">
            <a href="#home" class="block text-gray-700 hover:text-green-600">Beranda</a>
            <a href="#features" class="block text-gray-700 hover:text-green-600">Fitur</a>
            <a href="#stats" class="block text-gray-700 hover:text-green-600">Statistik</a>
            <a href="#testimonials" class="block text-gray-700 hover:text-green-600">Testimoni</a>
            <a href="#about" class="block text-gray-700 hover:text-green-600">Tentang</a>
            <a href="#contact" class="block text-gray-700 hover:text-green-600">Kontak</a>
            <a href="login.php" class="block bg-green-600 text-white px-4 py-2 rounded-lg text-center">Login</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero-bg text-white py-32 relative">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        <div class="container mx-auto px-6 text-center relative z-10 animate-fade-in">
            <h1 class="text-6xl font-bold mb-6 drop-shadow-lg" data-aos="fade-up">Kelola Sampah dengan Pintar</h1>
            <p class="text-xl mb-10 max-w-2xl mx-auto drop-shadow-md" data-aos="fade-up" data-aos-delay="200">Sistem pengelolaan sampah modern untuk lingkungan yang lebih bersih dan masa depan yang lebih hijau. Bergabunglah dalam revolusi keberlanjutan!</p>
            <div class="space-x-4" data-aos="fade-up" data-aos-delay="400">
                <a href="#features" class="bg-white text-green-600 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition duration-300 shadow-lg">Pelajari Lebih Lanjut</a>
                <a href="#contact" class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-green-600 transition duration-300">Hubungi Kami</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-green-700 mb-16" data-aos="fade-up">Fitur Utama Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="feature-card bg-gradient-to-br from-green-50 to-white p-8 rounded-2xl text-center shadow-lg" data-aos="zoom-in" data-aos-delay="100">
                    <div class="text-6xl mb-6 text-green-600"><i class="fas fa-map-marker-alt"></i></div>
                    <h3 class="text-2xl font-semibold mb-4">Pelacakan Sampah Real-Time</h3>
                    <p class="text-gray-600">Pantau jenis, jumlah, dan lokasi sampah secara real-time untuk pengelolaan yang efisien dan transparan.</p>
                </div>
                <div class="feature-card bg-gradient-to-br from-green-50 to-white p-8 rounded-2xl text-center shadow-lg" data-aos="zoom-in" data-aos-delay="200">
                    <div class="text-6xl mb-6 text-green-600"><i class="fas fa-chart-line"></i></div>
                    <h3 class="text-2xl font-semibold mb-4">Laporan & Analitik Canggih</h3>
                    <p class="text-gray-600">Dapatkan laporan mendalam, analitik data, dan wawasan AI untuk pengambilan keputusan yang lebih baik.</p>
                </div>
                <div class="feature-card bg-gradient-to-br from-green-50 to-white p-8 rounded-2xl text-center shadow-lg" data-aos="zoom-in" data-aos-delay="300">
                    <div class="text-6xl mb-6 text-green-600"><i class="fas fa-leaf"></i></div>
                    <h3 class="text-2xl font-semibold mb-4">Dampak Lingkungan Positif</h3>
                    <p class="text-gray-600">Kurangi dampak negatif sampah terhadap lingkungan dengan solusi berkelanjutan dan edukasi komunitas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="stats" class="py-20 bg-green-50">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-green-700 mb-16" data-aos="fade-up">Dampak Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="counter" id="counter1">100</div>
                    <p class="text-gray-700 font-semibold">Ton Sampah Dikelola</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="counter" id="counter2">1</div>
                    <p class="text-gray-700 font-semibold">Komunitas Terlibat</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <div class="counter" id="counter3">36%</div>
                    <p class="text-gray-700 font-semibold">Kota Bersih</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="400">
                    <div class="counter" id="counter4">2</div>
                    <p class="text-gray-700 font-semibold">Pengguna Aktif</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center text-green-700 mb-16" data-aos="fade-up">Apa Kata Pengguna Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div class="testimonial-card p-8 shadow-lg" data-aos="fade-right">
                <p class="text-gray-700 mb-4">"KelolaSampah telah mengubah cara kami mengelola sampah di kota. Sangat efisien dan ramah lingkungan!"</p>
                <div class="flex items-center">
                    <img src="IMG/bahlil.jpg" alt="User" class="w-16 h-16 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold">Bahlil</h4>
                        <p class="text-gray-500">Warga Kota Jakarta</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card p-5 shadow-lg" data-aos="fade-left">
                <p class="text-gray-700 mb-4">"Platform ini membantu pemerintah kami mengurangi sampah ilegal. Terima kasih KelolaSampah!"</p>
                <div class="flex items-center">
                    <img src="IMG/wawan.jpg" alt="User" class="w-16 h-16 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold">wawansmith</h4>
                        <p class="text-gray-500">Pemerintah Kota Garut</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- About Section -->
    <section id="about" class="py-20 bg-green-50">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-green-700 mb-12" data-aos="fade-up">Tentang Kami</h2>
            <p class="text-lg text-gray-700 max-w-3xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="200">
                KelolaSampah adalah platform inovatif yang membantu masyarakat dan pemerintah dalam mengelola sampah secara efektif. 
                Dengan teknologi AI dan IoT, kami berkomitmen untuk menciptakan dunia yang lebih bersih dan hijau. Bergabunglah dengan ribuan pengguna yang telah berkontribusi pada keberlanjutan planet kita.
            </p>
            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Tim KelolaSampah" class="mx-auto rounded-2xl shadow-2xl max-w-full" data-aos="zoom-in">
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-green-700 mb-12" data-aos="fade-up">Hubungi Kami</h2>
            <p class="text-lg text-gray-700 mb-12" data-aos="fade-up" data-aos-delay="200">Siap untuk bergabung? Hubungi kami untuk informasi lebih lanjut atau demo gratis.</p>
            <form class="max-w-lg mx-auto bg-gray-50 p-8 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="400">
                <input type="text" placeholder="Nama Anda" class="w-full p-4 mb-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600" required>
                <input type="email" placeholder="Email Anda" class="w-full p-4 mb-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600" required>
                <textarea placeholder="Pesan Anda" class="w-full p-4 mb-6 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600" rows="5" required></textarea>
                <button type="submit" class="bg-green-600 text-white px-8 py-4 rounded-lg font-semibold hover:bg-green-700 transition duration-300 w-full">Kirim Pesan</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-700 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">KelolaSampah</h3>
                    <p class="text-gray-300">Membangun masa depan yang lebih hijau, satu sampah pada satu waktu.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Navigasi</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="hover:text-gray-300">Beranda</a></li>
                        <li><a href="#features" class="hover:text-gray-300">Fitur</a></li>
                        <li><a href="#about" class="hover:text-gray-300">Tentang</a></li>
                        <li><a href="#contact" class="hover:text-gray-300">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Ikuti Kami</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Kontak</h4>
                    <p class="text-gray-300">Email: info@kelolasampah.com</p>
                    <p class="text-gray-300">Tel: +62 123 456 789</p>
                </div>
            </div>
            <div class="border-t border-gray-600 mt-8 pt-8 text-center">
                <p> 2025 KelolaSampah. Semua hak dilindungi.</p>
                <div class="mt-4 space-x-6">
                    <a href="#" class="hover:text-gray-300">Privacy Policy</a>
                    <a href="#" class="hover:text-gray-300">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Toggle mobile menu
        function toggleMenu() {
            const menu =
