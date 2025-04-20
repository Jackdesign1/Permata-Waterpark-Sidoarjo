<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permata Waterpark - Destinasi Keluarga Terbaik</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- FontAwesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .hero-bg { 
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.pexels.com/photos/863926/pexels-photo-863926.jpeg?auto=compress&cs=tinysrgb&w=1350');
            background-size: cover; 
            background-position: center;
            background-repeat: no-repeat;
        }
        .section { scroll-margin-top: 80px; }
        .fade-in { opacity: 0; transform: translateY(20px); transition: all 0.6s ease-out; }
        .fade-in.visible { opacity: 1; transform: translateY(0); }
        .cta-button { transition: transform 0.3s ease; }
        .cta-button:hover { transform: scale(1.05); }
        /* Fallback untuk background gagal dimuat */
        .hero-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #1e90ff;
            z-index: -1;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-blue-600 text-white fixed w-full top-0 z-50 shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold">Permata Waterpark</a>
            <div class="space-x-4">
                <a href="#home" class="hover:text-yellow-300">Home</a>
                <a href="#about" class="hover:text-yellow-300">About</a>
                <a href="#attractions" class="hover:text-yellow-300">Attractions</a>
                <a href="#facilities" class="hover:text-yellow-300">Facilities</a>
                <a href="#gallery" class="hover:text-yellow-300">Gallery</a>
                <a href="#pricing" class="hover:text-yellow-300">Pricing</a>
                <a href="#testimonials" class="hover:text-yellow-300">Testimonials</a>
                <a href="#contact" class="hover:text-yellow-300">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section (Diperbaiki) -->
    <section id="home" class="hero-bg h-screen flex items-center justify-center text-white text-center section relative">
        <div class="container mx-auto px-4 fade-in">
            <h1 class="text-5xl font-bold mb-4 drop-shadow-lg">Selamat Datang di Permata Waterpark</h1>
            <p class="text-xl mb-6 drop-shadow-md">Destinasi keluarga terbaik dengan wahana air seru dan fasilitas lengkap!</p>
            <a href="#pricing" class="bg-yellow-400 text-blue-800 font-semibold py-3 px-6 rounded-lg hover:bg-yellow-500 cta-button">Beli Tiket Sekarang</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white section">
        <div class="container mx-auto px-4 fade-in">
            <h2 class="text-3xl font-bold text-center text-blue-600 mb-8">Tentang Kami</h2>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-6 md:mb-0">
                    <img src="https://images.pexels.com/photos/863926/pexels-photo-863926.jpeg?auto=compress&cs=tinysrgb&w=600" alt="About Permata Waterpark" class="rounded-lg shadow-lg w-full">
                </div>
                <div class="md:w-1/2 md:pl-8">
                    <p class="text-gray-700 mb-4">Permata Waterpark berdiri sejak 2010, menjadi destinasi wisata air terbesar di wilayah kami. Dengan luas 10 hektar, kami menawarkan pengalaman bermain air yang tak terlupakan untuk semua usia.</p>
                    <p class="text-gray-700 mb-4"><strong>Visi:</strong> Menjadi waterpark nomor satu di Indonesia yang mengutamakan kesenangan dan keselamatan.</p>
                    <p class="text-gray-700"><strong>Misi:</strong> Menyediakan wahana berkualitas, fasilitas modern, dan pelayanan ramah untuk keluarga Indonesia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Attractions Section -->
    <section id="attractions" class="py-16 bg-gray-100 section">
        <div class="container mx-auto px-4 fade-in">
            <h2 class="text-3xl font-bold text-center text-blue-600 mb-8">Wahana Seru Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <img src="https://images.unsplash.com/photo-1595436149296-7b6e1e0a8f73?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Seluncuran Raksasa" class="rounded-lg mb-4 mx-auto w-full h-48 object-cover">
                    <h3 class="text-xl font-semibold text-blue-600 mb-2">Seluncuran Raksasa</h3>
                    <p class="text-gray-700">Seluncuran setinggi 20 meter dengan tikungan ekstrem untuk pecinta adrenalin.</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <img src="https://images.pexels.com/photos/1684187/pexels-photo-1684187.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Kolam Ombak" class="rounded-lg mb-4 mx-auto w-full h-48 object-cover">
                    <h3 class="text-xl font-semibold text-blue-600 mb-2">Kolam Ombak</h3>
                    <p class="text-gray-700">Nikmati ombak buatan setiap 30 menit, cocok untuk semua usia.</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <img src="https://images.pexels.com/photos/462162/pexels-photo-462162.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Area Anak" class="rounded-lg mb-4 mx-auto w-full h-48 object-cover">
                    <h3 class="text-xl font-semibold text-blue-600 mb-2">Area Anak</h3>
                    <p class="text-gray-700">Kolam dangkal dengan permainan air interaktif untuk si kecil.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section id="facilities" class="py-16 bg-white section">
        <div class="container mx-auto px-4 fade-in">
            <h2 class="text-3xl font-bold text-center text-blue-600 mb-8">Fasilitas Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="text-center">
                    <i class="fas fa-utensils text-4xl text-green-500 mb-4"></i>
                    <h3 class="text-lg font-semibold text-blue-600">Restoran</h3>
                    <p class="text-gray-700">Beragam pilihan makanan lokal dan internasional.</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-lock text-4xl text-green-500 mb-4"></i>
                    <h3 class="text-lg font-semibold text-blue-600">Loker</h3>
                    <p class="text-gray-700">Simpan barang Anda dengan aman.</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-car text-4xl text-green-500 mb-4"></i>
                    <h3 class="text-lg font-semibold text-blue-600">Parkir Luas</h3>
                    <p class="text-gray-700">Area parkir untuk ratusan kendaraan.</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-first-aid text-4xl text-green-500 mb-4"></i>
                    <h3 class="text-lg font-semibold text-blue-600">Pos Kesehatan</h3>
                    <p class="text-gray-700">Layanan medis untuk keadaan darurat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-16 bg-gray-100 section">
        <div class="container mx-auto px-4 fade-in">
            <h2 class="text-3xl font-bold text-center text-blue-600 mb-8">Galeri</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                <img src="https://images.unsplash.com/photo-1516426122075-c23e9d783ed0?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Gallery 1" class="rounded-lg shadow-lg w-full h-48 object-cover">
                <img src="https://images.pexels.com/photos/863926/pexels-photo-863926.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Gallery 2" class="rounded-lg shadow-lg w-full h-48 object-cover">
                <img src="https://images.pexels.com/photos/1684187/pexels-photo-1684187.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Gallery 3" class="rounded-lg shadow-lg w-full h-48 object-cover">
                <img src="https://images.pexels.com/photos/462162/pexels-photo-462162.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Gallery 4" class="rounded-lg shadow-lg w-full h-48 object-cover">
                <img src="https://images.unsplash.com/photo-1508514177221-188b645fd5af?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Gallery 5" class="rounded-lg shadow-lg w-full h-48 object-cover">
                <img src="https://images.pexels.com/photos/1174732/pexels-photo-1174732.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Gallery 6" class="rounded-lg shadow-lg w-full h-48 object-cover">
                <img src="https://images.unsplash.com/photo-1595436149296-7b6e1e0a8f73?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Gallery 7" class="rounded-lg shadow-lg w-full h-48 object-cover">
                <img src="https://images.pexels.com/photos/221294/pexels-photo-221294.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Gallery 8" class="rounded-lg shadow-lg w-full h-48 object-cover">
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-16 bg-white section">
        <div class="container mx-auto px-4 fade-in">
            <h2 class="text-3xl font-bold text-center text-blue-600 mb-8">Harga Tiket</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-100 rounded-lg shadow-lg p-6 text-center">
                    <h3 class="text-xl font-semibold text-blue-600 mb-2">Dewasa</h3>
                    <p class="text-2xl font-bold text-green-500 mb-4">Rp 100.000</p>
                    <p class="text-gray-700">Akses semua wahana untuk usia 12+.</p>
                </div>
                <div class="bg-gray-100 rounded-lg shadow-lg p-6 text-center">
                    <h3 class="text-xl font-semibold text-blue-600 mb-2">Anak</h3>
                    <p class="text-2xl font-bold text-green-500 mb-4">Rp 75.000</p>
                    <p class="text-gray-700">Untuk anak usia 3-11 tahun.</p>
                </div>
                <div class="bg-gray-100 rounded-lg shadow-lg p-6 text-center">
                    <h3 class="text-xl font-semibold text-blue-600 mb-2">Grup (min. 20 orang)</h3>
                    <p class="text-2xl font-bold text-green-500 mb-4">Rp 80.000/orang</p>
                    <p class="text-gray-700">Diskon khusus untuk rombongan sekolah atau perusahaan.</p>
                </div>
            </div>
            <p class="text-center text-gray-700 mt-6">*Promo Spesial: Beli 5 tiket, gratis 1 tiket! Berlaku hingga Desember 2025.</p>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 bg-gray-100 section">
        <div class="container mx-auto px-4 fade-in">
            <h2 class="text-3xl font-bold text-center text-blue-600 mb-8">Apa Kata Pengunjung</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <p class="text-gray-700 mb-4">"Tempatnya seru banget! Anak-anak senang main di area khusus anak."</p>
                    <p class="text-blue-600 font-semibold">- Siti, Ibu Rumah Tangga</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <p class="text-gray-700 mb-4">"Seluncuran raksasanya bikin deg-degan tapi asyik!"</p>
                    <p class="text-blue-600 font-semibold">- Budi, Mahasiswa</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <p class="text-gray-700 mb-4">"Fasilitas lengkap, makanan enak, pasti balik lagi!"</p>
                    <p class="text-blue-600 font-semibold">- Rina, Karyawan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-white section">
        <div class="container mx-auto px-4 fade-in">
            <h2 class="text-3xl font-bold text-center text-blue-600 mb-8">Hubungi Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <form id="contactForm" action="/api/contact" method="POST">
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700">Nama</label>
                            <input type="text" id="name" name="name" class="w-full p-2 border rounded-lg" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700">Email</label>
                            <input type="email" id="email" name="email" class="w-full p-2 border rounded-lg" required>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700">Pesan</label>
                            <textarea id="message" name="message" class="w-full p-2 border rounded-lg" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Kirim</button>
                    </form>
                </div>
                <div>
                    <iframe class="w-full h-64 rounded-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.123456789!2d106.823456789!3d-6.178123456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjbCsDEwJzQwLjUiUyAxMDbCsDQ5JzI0LjUiRQ!5e0!3m2!1sid!2sid!4v1634567890123" allowfullscreen="" loading="lazy"></iframe>
                    <p class="mt-4 text-gray-700"><i class="fas fa-map-marker-alt mr-2"></i>Jl. Permata No. 123, Jakarta</p>
                    <p class="text-gray-700"><i class="fas fa-phone mr-2"></i>+62 812-3456-7890</p>
                    <p class="text-gray-700"><i class="fas fa-envelope mr-2"></i>info@permatawaterpark.com</p>
                    <div class="mt-4 flex space-x-4">
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-facebook-f text-2xl"></i></a>
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-instagram text-2xl"></i></a>
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-twitter text-2xl"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-6">
        <div class="container mx-auto px-4 text-center">
            <p>© 2025 Permata Waterpark. All Rights Reserved.</p>
            <div class="mt-2">
                <a href="#about" class="text-yellow-300 hover:text-yellow-400 mx-2">About</a>
                <a href="#pricing" class="text-yellow-300 hover:text-yellow-400 mx-2">Pricing</a>
                <a href="#contact" class="text-yellow-300 hover:text-yellow-400 mx-2">Contact</a>
            </div>
        </div>
    </footer>

    <!-- JavaScript untuk Interaktivitas -->
    <script>
        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
            });
        });

        // Fade-in Animation
        const faders = document.querySelectorAll('.fade-in');
        const appearOptions = { threshold: 0.2 };
        const appearOnScroll = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            });
        }, appearOptions);
        faders.forEach(fader => appearOnScroll.observe(fader));

        // Form Submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            alert('Pesan Anda telah dikirim!\nNama: ' + formData.get('name') + '\nEmail: ' + formData.get('email'));
            this.reset();
        });

        // Cek apakah background hero dimuat
        const heroSection = document.querySelector('.hero-bg');
        const bgImage = new Image();
        bgImage.src = 'https://images.pexels.com/photos/863926/pexels-photo-863926.jpeg?auto=compress&cs=tinysrgb&w=1350';
        bgImage.onerror = () => {
            console.log('Gambar hero gagal dimuat');
            heroSection.style.backgroundImage = 'linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("https://via.placeholder.com/1350x900?text=Hero+Image+Failed")';
        };
    </script>
</body>
</html>