<?php
// index.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kelola Sampah - Solusi Pengelolaan Sampah Modern dengan Fitur Jual Beli</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Animasi fade-in saat scroll */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        /* Animasi bergerak horizontal */
        @keyframes slide-left-right {
            0%, 100% { transform: translateX(0); }
            50% { transform: translateX(15px); }
        }
        .animate-slide {
            animation: slide-left-right 3s ease-in-out infinite;
        }
        /* Scroll smooth */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-green-100 to-green-300 font-poppins text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed w-full z-30 top-0">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="dasboard.php" class="text-2xl font-bold text-green-700 hover:text-green-900">KelolaSampah</a>
            <ul class="hidden md:flex space-x-8 text-green-700 font-semibold">
                <li><a href="#home" class="hover:text-green-900">Beranda</a></li>
                <li><a href="#masalah" class="hover:text-green-900">Masalah</a></li>
                <li><a href="#solusi" class="hover:text-green-900">Solusi</a></li>
                <li><a href="#jualbeli" class="hover:text-green-900">Jual Beli Sampah</a></li>
                <li><a href="#tentang" class="hover:text-green-900">Tentang Kami</a></li>
                <li><a href="#kontak" class="hover:text-green-900">Kontak</a></li>
                <li><a href="landingpage.php" class="hover:text-green-900">Logout</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex flex-col justify-center items-center text-center px-6 pt-24">
        <h1 class="text-5xl md:text-6xl font-extrabold text-green-800 mb-6 fade-in animate-slide">Welcome To kelolasampah</h1>
        <p class="max-w-3xl text-lg md:text-xl text-green-900 mb-8 fade-in">Solusi terintegrasi untuk pengelolaan sampah yang efisien, ramah lingkungan, dan bernilai ekonomi, termasuk fitur jual beli sampah per kilo.</p>
        <a href="#solusi" class="bg-green-700 hover:bg-green-900 text-white font-semibold px-8 py-3 rounded-lg shadow-lg transition fade-in">Pelajari Solusi Kami</a>
    </section>

    <!-- Masalah Section -->
    <section id="masalah" class="container mx-auto px-6 py-16">
        <h2 class="text-4xl font-bold text-green-800 mb-8 text-center fade-in">Masalah Pengelolaan Sampah di Indonesia</h2>
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <ul class="list-disc list-inside text-green-900 text-lg space-y-4 fade-in">
                <li>Indonesia menghasilkan lebih dari 67 juta ton sampah setiap tahun.</li>
                <li>Lebih dari 80% sampah belum dikelola secara optimal.</li>
                <li>Tempat pembuangan akhir (TPA) semakin penuh dan banyak sampah berakhir di sungai dan laut.</li>
                <li>Minimnya kesadaran masyarakat dalam memilah sampah dari sumbernya.</li>
                <li>Tingkat daur ulang yang masih sangat rendah, serta kurangnya nilai ekonomi dari sampah.</li>
            </ul>
            <img src="IMG/HIJAU (2).jpg" alt="Masalah sampah" class="rounded-lg shadow-lg fade-in" />
        </div>
    </section>

    <!-- Solusi Section -->
    <section id="solusi" class="bg-green-50 py-16 px-6">
        <div class="container mx-auto max-w-5xl">
            <h2 class="text-4xl font-bold text-green-800 mb-12 text-center fade-in">Solusi Kami</h2>
            <div class="grid md:grid-cols-3 gap-10">
                <div class="bg-white rounded-xl shadow-lg p-6 fade-in hover:shadow-2xl transition">
                    <h3 class="text-2xl font-semibold text-green-700 mb-3">Pemilahan Cerdas</h3>
                    <p>Tempat sampah pintar dengan sensor AI yang mengidentifikasi jenis sampah secara otomatis dan memberikan data real-time.</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 fade-in hover:shadow-2xl transition">
                    <h3 class="text-2xl font-semibold text-green-700 mb-3">Pengumpulan Efisien</h3>
                    <p>Sistem pengumpulan sampah dengan rute optimal dan vehicle tracking untuk mengurangi biaya operasional dan emisi karbon.</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 fade-in hover:shadow-2xl transition">
                    <h3 class="text-2xl font-semibold text-green-700 mb-3">Daur Ulang Modern</h3>
                    <p>Fasilitas daur ulang dengan teknologi terbaru yang mengubah sampah menjadi produk bernilai tinggi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Jual Beli Sampah Section -->
    <section id="jualbeli" class="container mx-auto px-6 py-16">
        <h2 class="text-4xl font-bold text-green-800 mb-8 text-center fade-in">Fitur Jual Beli Sampah Per Kilo</h2>
        <p class="max-w-3xl mx-auto text-green-900 text-lg leading-relaxed mb-12 text-center fade-in">
            Manfaatkan nilai ekonomi sampah Anda! Jual sampah per kilo melalui platform kami yang terintegrasi dengan sistem pengelolaan. Lihat harga pasar dan ajukan penjualan atau pembelian dengan mudah.
        </p>
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Tabel Harga Sampah -->
            <div class="bg-white rounded-xl shadow-lg p-6 fade-in">
                <h3 class="text-2xl font-semibold text-green-700 mb-4">Harga Sampah Per Kilo</h3>
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-green-100">
                            <th class="border border-gray-300 px-4 py-2">Jenis Sampah</th>
                            <th class="border border-gray-300 px-4 py-2">Harga (Rp/Kg)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">Plastik</td>
                            <td class="border border-gray-300 px-4 py-2">2,000</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">Kertas</td>
                            <td class="border border-gray-300 px-4 py-2">1,500</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">Logam</td>
                            <td class="border border-gray-300 px-4 py-2">5,000</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">Kaca</td>
                            <td class="border border-gray-300 px-4 py-2">1,000</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">Organik</td>
                            <td class="border border-gray-300 px-4 py-2">500</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Form Jual Beli -->
            <div class="bg-white rounded-xl shadow-lg p-6 fade-in">
                <h3 class="text-2xl font-semibold text-green-700 mb-4">Ajukan Jual/Beli Sampah</h3>
                <form id="tradeForm" action="generate_nota.php" method="POST">
                    <div class="mb-4">
                        <label for="jenis" class="block font-semibold text-green-700 mb-2">Jenis Sampah</label>
                        <select id="jenis" name="jenis" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
                            <option value="">Pilih Jenis</option>
                            <option value="Plastik">Plastik</option>
                            <option value="Kertas">Kertas</option>
                            <option value="Logam">Logam</option>
                            <option value="Kaca">Kaca</option>
                            <option value="Organik">Organik</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="berat" class="block font-semibold text-green-700 mb-2">Berat (Kg)</label>
                        <input type="number" id="berat" name="berat" min="0.1" step="0.1" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400" />
                    </div>
                    <div class="mb-4">
                        <label for="aksi" class="block font-semibold text-green-700 mb-2">Aksi</label>
                        <select id="aksi" name="aksi" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
                            <option value="Jual">Jual</option>
                            <option value="Beli">Beli</option>
                        </select>
                    </div>
                    <button type="submit" class="w-full bg-green-700 hover:bg-green-900 text-white font-semibold py-3 rounded-lg transition">Ajukan & Cetak Nota</button>
                </form>
                <p id="tradeMessage" class="mt-4 text-center text-green-800 font-semibold hidden"></p>
            </div>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section id="tentang" class="container mx-auto px-6 py-16">
        <h2 class="text-4xl font-bold text-green-800 mb-8 text-center fade-in">Tentang Kami</h2>
        <p class="max-w-3xl mx-auto text-green-900 text-lg leading-relaxed fade-in">
            KelolaSampah adalah perusahaan teknologi yang berfokus pada solusi pengelolaan sampah modern dan berkelanjutan, termasuk fitur jual beli sampah per kilo untuk memberikan nilai ekonomi tambahan. Kami berkomitmen membantu pemerintah, perusahaan, dan masyarakat dalam mengelola sampah secara efisien dan ramah lingkungan melalui inovasi teknologi.
        </p>
    </section>

    <!-- Kontak Section -->
    <section id="kontak" class="bg-green-50 py-16 px-6">
        <div class="container mx-auto max-w-lg">
            <h2 class="text-4xl font-bold text-green-800 mb-8 text-center fade-in">Hubungi Kami</h2>
            <form class="bg-white rounded-xl shadow-lg p-8 space-y-6 fade-in" id="contactForm" onsubmit="return submitForm(event)">
                <div>
                    <label for="nama" class="block font-semibold text-green-700 mb-2">Nama</label>
                    <input type="text" id="nama" name="nama" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400" />
                </div>
                <div>
                    <label for="email" class="block font-semibold text-green-700 mb-2">Email</label>
                    <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400" />
                </div>
                <div>
                    <label for="pesan" class="block font-semibold text-green-700 mb-2">Pesan</label>
                    <textarea id="pesan" name="pesan" rows="4" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400"></textarea>
                </div>
                <button type="submit" class="w-full bg-green-700 hover:bg-green-900 text-white font-semibold py-3 rounded-lg transition">Kirim Pesan</button>
            </form>
            <p id="formMessage" class="mt-4 text-center text-green-800 font-semibold hidden"></p>
        </div>
    </section>

    <footer class="text-center py-6 text-green-900 font-semibold">
        &copy; 2025 KelolaSampah. Semua hak dilindungi.
    </footer>

    <script>
        // Animasi fade-in saat scroll
        const faders = document.querySelectorAll('.fade-in');
        const appearOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px"
        };

        const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('visible');
                appearOnScroll.unobserve(entry.target);
            });
        }, appearOptions);

        faders.forEach(fader => {
            appearOnScroll.observe(fader);
        });

        // Form submit dummy (tanpa backend)
        function submitForm(event) {
            event.preventDefault();
            const message = document.getElementById('formMessage');
            message.textContent = "Terima kasih atas pesan Anda! Kami akan segera menghubungi Anda.";
            message.classList.remove('hidden');
            event.target.reset();
            return false;
        }
    </script>
</body>
</html>