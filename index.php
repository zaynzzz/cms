<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyewaan GPS Tracking untuk Kendaraan | GPS GO</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Favicon -->
    <link rel="icon" href="icons.png" type="image/png">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 text-gray-900">
    <!-- Header Section -->
    <header class="bg-blue-600 p-4 md:p-8 shadow-lg">
        <div class="container mx-auto flex flex-wrap justify-between items-center">
            <h1 class="text-white text-2xl md:text-4xl font-extrabold flex items-center">
                
                <img src="icons.png" alt="GPS GO Icon" class="w-8 h-8 mr-2 object-contain">
                GPS GO
            </h1>
            <nav class="flex flex-wrap space-x-4 md:space-x-6 text-lg md:text-xl">
                <a href="#features" class="text-white hover:text-yellow-300 transition">Fitur</a>
                <a href="#pricing" class="text-white hover:text-yellow-300 transition">Harga</a>
                <a href="#contact" class="text-white hover:text-yellow-300 transition">Kontak</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section style="background-color: #ffdf36f2;" class="text-blue-600 py-12 md:py-24 text-center">
        <div class="container mx-auto px-4">
            <!-- Logo Container dengan Latar Belakang Putih dan Sudut Melengkung -->
            <div class="bg-white p-1 rounded-lg inline-block shadow-lg">
                <img src="icons.png" alt="Hero Icon" class="mx-auto mb-4 w-16 h-16 object-contain">
            </div>
            
            <!-- Judul -->
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Lacak Kendaraan Anda dengan Mudah!</h2>
            
            <!-- Deskripsi -->
            <p class="text-lg md:text-2xl mb-10">Penyewaan alat GPS Tracking untuk mobil, motor, dan kendaraan lainnya dengan fitur modern dan harga terjangkau.</p>
            
            <!-- Tombol CTA -->
            <button class="bg-blue-600 text-white px-6 md:px-8 py-2 md:py-4 rounded-md font-bold text-lg md:text-xl hover:bg-blue-700 transition duration-300 ease-in-out">Mulai Sewa Sekarang</button>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-12 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <h3 class="text-4xl md:text-5xl font-bold text-center mb-12 text-blue-600">Fitur Unggulan</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-10">
                <div class="bg-gray-100 p-6 md:p-10 rounded-lg shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition duration-300 ease-in-out">
                    <!-- Icon Section -->
                    <div class="flex items-center mb-6">
                        <i class="fas fa-map-marker-alt text-blue-600 text-4xl mr-4"></i>
                        <h4 class="text-xl md:text-2xl font-bold text-gray-800">Pelacakan Real-Time</h4>
                    </div>
                    <p class="text-lg md:text-xl text-gray-700">Periksa lokasi kendaraan secara langsung melalui aplikasi kami, kapanpun dan dimanapun Anda berada.</p>
                </div>
                <div class="bg-gray-100 p-6 md:p-10 rounded-lg shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition duration-300 ease-in-out">
                    <div class="flex items-center mb-6">
                        <i class="fas fa-route text-yellow-500 text-4xl mr-4"></i>
                        <h4 class="text-xl md:text-2xl font-bold text-gray-800">Rute dan Riwayat</h4>
                    </div>
                    <p class="text-lg md:text-xl text-gray-700">Catat semua rute yang telah dilalui kendaraan Anda, cocok untuk keperluan bisnis ataupun personal.</p>
                </div>
                <div class="bg-gray-100 p-6 md:p-10 rounded-lg shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition duration-300 ease-in-out">
                    <div class="flex items-center mb-6">
                        <i class="fas fa-bell text-yellow-500 text-4xl mr-4"></i>
                        <h4 class="text-xl md:text-2xl font-bold text-gray-800">Geofence Alerts</h4>
                    </div>
                    <p class="text-lg md:text-xl text-gray-700">Terima pemberitahuan ketika kendaraan masuk atau keluar dari area yang telah ditentukan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="bg-yellow-300 py-12 md:py-24">
        <div class="container mx-auto px-4">
            <h3 class="text-4xl md:text-5xl font-bold text-center mb-12 text-blue-600">Paket Harga</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-10">
                <div class="bg-white p-6 md:p-12 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 ease-in-out">
                    <div class="flex items-center mb-6">
                        <i class="fas fa-car text-yellow-500 text-4xl mr-4"></i>
                        <h4 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Paket Dasar</h4>
                    </div>
                    <p class="text-lg md:text-xl mb-6 text-gray-700">Mulai dari Rp 200.000/bulan</p>
                    <ul class="text-lg md:text-xl mb-6 space-y-2 text-left list-disc list-inside text-gray-700">
                        <li>Pelacakan real-time</li>
                        <li>Notifikasi dasar</li>
                    </ul>
                    <button class="bg-blue-600 text-white px-6 md:px-8 py-2 md:py-4 rounded-md text-lg md:text-xl hover:bg-blue-700 transition duration-300 ease-in-out">Pesan Sekarang</button>
                </div>
                <div class="bg-white p-6 md:p-12 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 ease-in-out">
                    <div class="flex items-center mb-6">
                        <i class="fas fa-car-side text-yellow-500 text-4xl mr-4"></i>
                        <h4 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Paket Premium</h4>
                    </div>
                    <p class="text-lg md:text-xl mb-6 text-gray-700">Mulai dari Rp 350.000/bulan</p>
                    <ul class="text-lg md:text-xl mb-6 space-y-2 text-left list-disc list-inside text-gray-700">
                        <li>Semua fitur Paket Dasar</li>
                        <li>Riwayat perjalanan 30 hari</li>
                        <li>Geofence alerts</li>
                    </ul>
                    <button class="bg-blue-600 text-white px-6 md:px-8 py-2 md:py-4 rounded-md text-lg md:text-xl hover:bg-blue-700 transition duration-300 ease-in-out">Pesan Sekarang</button>
                </div>
                <div class="bg-white p-6 md:p-12 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 ease-in-out">
                    <div class="flex items-center mb-6">
                        <i class="fas fa-truck text-yellow-500 text-4xl mr-4"></i>
                        <h4 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Paket Bisnis</h4>
                    </div>
                    <p class="text-lg md:text-xl mb-6 text-gray-700">Mulai dari Rp 500.000/bulan</p>
                    <ul class="text-lg md:text-xl mb-6 space-y-2 text-left list-disc list-inside text-gray-700">
                        <li>Semua fitur Paket Premium</li>
                        <li>Multiple vehicles tracking</li>
                        <li>Laporan khusus bisnis</li>
                    </ul>
                    <button class="bg-blue-600 text-white px-6 md:px-8 py-2 md:py-4 rounded-md text-lg md:text-xl hover:bg-blue-700 transition duration-300 ease-in-out">Pesan Sekarang</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Best Investment Section -->
    <section class="py-12 md:py-24 bg-white">
        <div class="container mx-auto text-center px-4">
            <div class="bg-blue-600 p-6 md:p-8 rounded-lg shadow-lg hover:shadow-2xl transition mb-4">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 flex items-center justify-center">
                    <i class="fa-solid fa-map text-yellow-500 mr-2"></i>
                    Investasi Harga Terbaik Asset Anda
                </h2>
                <p class="text-lg md:text-2xl mb-10 text-white">
                    GPS GO memberikan pilihan harga GPS server sesuai dengan kebutuhan Anda. Server GPS GPS GO FREE Trial yang kami berikan sudah termasuk Google Maps Premium, Software GPS Tracker dengan Fasilitas Location Update 24 Non Stop, Google Maps Navigation, dan Google Street View. Kami Memastikan 1 Akun Bisa untuk Banyak Kendaraan.
                </p>
                <p class="text-lg font-semibold text-white">Trial Server GPS Gratis Tanpa Syarat dan Ketentuan Apapun.</p>
            </div>
            <!-- Pricing Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <!-- Free Trial Package -->
                <div class="bg-white p-6 md:p-8 rounded-lg shadow-lg hover:shadow-2xl transition">
                    <h3 class="text-3xl font-bold text-blue-600 mb-4">FREE</h3>
                    <p class="text-lg text-gray-700 mb-4">Paket 3 Bulan Murah Banget Paket 3 Bulan Active. FREE Akses Semua Fitur Lengkap. 1 Akun Banyak Kendaraan</p>
                    <p class="text-xl font-bold text-blue-600">PAKET 3 BULAN</p>
                    <p class="text-xl text-gray-700 mt-4">15 rb / bln</p>
                    <p class="text-lg text-gray-500">Bayar 3 Bln Hanya 45rb</p>
                </div>

                <!-- 6 Month Package -->
                <div class="bg-white p-6 md:p-8 rounded-lg shadow-lg hover:shadow-2xl transition">
                    <h3 class="text-3xl font-bold text-blue-600 mb-4">Paket 6 Bulan</h3>
                    <p class="text-lg text-gray-700 mb-4">Murah Banget Paket 6 Bulan Active. FREE Akses Semua Fitur Lengkap. 1 Akun Banyak Kendaraan</p>
                    <p class="text-xl font-bold text-blue-600">PAKET 6 BULAN</p>
                    <p class="text-xl text-gray-700 mt-4">14 rb / bln</p>
                    <p class="text-lg text-gray-500">Bayar 6 Bln Hanya 84 rb</p>
                </div>

                <!-- Super Package -->
                <div class="bg-white p-6 md:p-8 rounded-lg shadow-lg hover:shadow-2xl transition">
                    <h3 class="text-3xl font-bold text-blue-600 mb-4">Paket Super</h3>
                    <p class="text-lg text-gray-700 mb-4">Nikmati Paket 12 Bulan Active. FREE Akses Semua Fitur Lengkap. 1 Akun Banyak Kendaraan</p>
                    <p class="text-xl font-bold text-blue-600">PAKET 12 BULAN</p>
                    <p class="text-xl text-gray-700 mt-4">11.750 / bln</p>
                    <p class="text-lg text-gray-500">Bayar Setahun Hanya 141 rb</p>
                </div>

                <!-- Gokil Package -->
                <div class="bg-white p-6 md:p-8 rounded-lg shadow-lg hover:shadow-2xl transition">
                    <h3 class="text-3xl font-bold text-blue-600 mb-4">Paket Gokil</h3>
                    <p class="text-lg text-gray-700 mb-4">Gokil Banget Paket 24 Bulan Active. FREE Akses Semua Fitur Lengkap. 1 Akun Banyak Kendaraan</p>
                    <p class="text-xl font-bold text-blue-600">PAKET 2 TAHUN</p>
                    <p class="text-xl text-gray-700 mt-4">10.459 / bln</p>
                    <p class="text-lg text-gray-500">Bayar 2 Tahun Hanya 252 rb</p>
                </div>

                <!-- Reseller Package -->
                <div class="bg-white p-6 md:p-8 rounded-lg shadow-lg hover:shadow-2xl transition col-span-1 md:col-span-2 lg:col-span-1">
                    <h3 class="text-3xl font-bold text-blue-600 mb-4">Paket Reseller</h3>
                    <p class="text-lg text-gray-700 mb-4">CALL US</p>
                    <p class="text-lg text-gray-500">Layanan Coorporate untuk Reseller Server GPS khusus untuk Pedagang, Penjual, Distributor GPS Tracker. FREE Hak Akses Penuh Administrator. Kelola User dan Unit Sendiri.</p>
                </div>
            </div>
        </section>

    <!-- Testimonial Section -->
    <section class="bg-yellow-300 py-12 md:py-24">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-blue-600 mb-4">Ratusan Review Positif Server GPS Google PlayStore</h2>
            <p class="text-4xl text-yellow-400 mb-8">★★★★★ 5/5</p>
            
            <!-- Testimonial Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 overflow-hidden rounded-full">
                            <img src="https://plus.unsplash.com/premium_photo-1689530775582-83b8abdb5020?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cmFuZG9tJTIwcGVyc29ufGVufDB8fDB8fHww" alt="Reviewer Abdul Rohim" class="w-full h-full object-cover">
                        </div>
                        <p class="text-lg font-semibold text-gray-800 ml-4">Abdul Rohim</p>
                    </div>
                    <p class="text-sm text-gray-600">Bagus sangat membantu</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 overflow-hidden rounded-full">
                            <img src="https://cdn.prod.website-files.com/624ac40503a527cf47af4192/655c6883100932e9fcc96f7a_11.jpeg" alt="Reviewer Indra Pratitis" class="w-full h-full object-cover">
                        </div>
                        <p class="text-lg font-semibold text-gray-800 ml-4">Mahfud Eleonóra</p>
                    </div>
                    <p class="text-sm text-gray-600">Tingkat lagi performa dan pelayanan keluhan</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 overflow-hidden rounded-full">
                            <img src="https://static.vecteezy.com/system/resources/thumbnails/032/389/136/small/asian-man-is-sad-on-a-minimalist-neutral-background-ai-generative-photo.jpg" alt="Reviewer Adek Hafidz" class="w-full h-full object-cover">
                        </div>
                        <p class="text-lg font-semibold text-gray-800 ml-4">Valeriano Hafidz</p>
                    </div>
                    <p class="text-sm text-gray-600">Mantap aplikasinya, banyak membantu</p>
                </div>

                <!-- Testimonial 4 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 overflow-hidden rounded-full">
                            <img src="https://images.ladbible.com/resize?type=webp&quality=70&width=3840&fit=contain&gravity=auto&url=https://images.ladbiblegroup.com/v3/assets/bltcd74acc1d0a99f3a/blt7dc715fcd9324509/64b1609273ef23488c840278/exeter-ai.png" alt="Reviewer RFC Rental Mobil" class="w-full h-full object-cover">
                        </div>
                        <p class="text-lg font-semibold text-gray-800 ml-4">Juan Manuel Siswoyo</p>
                    </div>
                    <p class="text-sm text-gray-600">Sangat baik buat nglacak</p>
                </div>

                <!-- Testimonial 5 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 overflow-hidden rounded-full">
                            <img src="https://cdn.pixabay.com/photo/2023/04/28/23/32/ai-generated-7957457_1280.png" alt="Reviewer Abdul Azis" class="w-full h-full object-cover">
                        </div>
                        <p class="text-lg font-semibold text-gray-800 ml-4">Abdul Asterios</p>
                    </div>
                    <p class="text-sm text-gray-600">Aplikasi rekomendasi dan bagus</p>
                </div>

                <!-- Testimonial 6 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 overflow-hidden rounded-full">
                            <img src="https://cdn.lucidpic.com/cdn-cgi/image/w=600,format=auto,metadata=none/66e2e5fbe0cca.png" alt="Reviewer Kasturi" class="w-full h-full object-cover">
                        </div>
                        <p class="text-lg font-semibold text-gray-800 ml-4">Kasturi Skyler</p>
                    </div>
                    <p class="text-sm text-gray-600">Aplikasi sangat bagus.</p>
                </div>

                <!-- Testimonial 7 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 overflow-hidden rounded-full">
                            <img src="https://www.gradwerk.com/upload/img/wanderlust-frau-sonnenuntergang-feld-sommerreise.png?w=970&h=1016&zx=1000&zy=571&ti=1725000424&code=1e5cbb4dd87c2ee9d54584a10de05f4ab08f82ebc82c3edf43922884d6e63724" alt="Reviewer Setia Darma" class="w-full h-full object-cover">
                        </div>
                        <p class="text-lg font-semibold text-gray-800 ml-4">Setia Blakely</p>
                    </div>
                    <p class="text-sm text-gray-600">Mantaps Tingkatkan terus gan</p>
                </div>

                <!-- Testimonial 8 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 overflow-hidden rounded-full">
                            <img src="https://www.zmo.ai/wp-content/uploads/2024/03/Activity-options-for-AI-face-generator.webp" alt="Reviewer LaserCNC KSA​" class="w-full h-full object-cover">
                        </div>
                        <p class="text-lg font-semibold text-gray-800 ml-4">Linnaea Hayden</p>
                    </div>
                    <p class="text-sm text-gray-600">Sejauh ini Sangat OK</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Cards Section -->
    <section class="py-12 md:py-24 bg-white">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-blue-600 mb-8">Disukai Semua Pemakai GPS</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <!-- Card 1 -->
                <div class="bg-gray-100 p-6 md:p-8 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:scale-105 duration-300">
                    <i class="fas fa-bolt text-yellow-500 text-4xl mb-4"></i>
                    <h3 class="text-xl md:text-2xl font-bold text-blue-600 mb-4">Cepat Online!</h3>
                    <p class="text-lg text-gray-700">HANYA 2,9 Menit GPS Tracker Bisa Langsung Online! Hemat WAKTU dan TENAGA Tak Perlu Repot Bikin Server Sendiri!</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-gray-100 p-6 md:p-8 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:scale-105 duration-300">
                    <i class="fas fa-headset text-yellow-500 text-4xl mb-4"></i>
                    <h3 class="text-xl md:text-2xl font-bold text-blue-600 mb-4">Bantuan 24 Jam</h3>
                    <p class="text-lg text-gray-700">Semua Kesulitan Setting dan Layanan Kami BANTU 24 Jam. Hanya Yang Terbaik di Indonesia</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-gray-100 p-6 md:p-8 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:scale-105 duration-300">
                    <i class="fas fa-server text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl md:text-2xl font-bold text-blue-600 mb-4">Fitur Server GPS</h3>
                    <p class="text-lg text-gray-700">GPS GO Menyediakan Semua Fitur Server GPS Tracker, 1000% ASLI Indonesia. Ingin MIGRASI SERVER atau dilayani 24 Jam Non STOP? COBA GRATIS SEKARANG.</p>
                    <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Lihat Fitur Lengkap</button>
                    <button class="mt-4 bg-yellow-500 text-black px-4 py-2 rounded-lg hover:bg-yellow-600 transition">Lihat Demo Live GPS GO</button>
                </div>

                <!-- Card 4 -->
                <div class="bg-gray-100 p-6 md:p-8 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:scale-105 duration-300">
                    <i class="fas fa-satellite-dish text-yellow-500 text-4xl mb-4"></i>
                    <h3 class="text-xl md:text-2xl font-bold text-blue-600 mb-4">Support Device</h3>
                    <p class="text-lg text-gray-700">Lebih Dari 3401+ GPS Device Support:</p>
                    <ul class="text-gray-700 mt-4 text-left list-disc list-inside">
                        <li>GPS Concox GT06N</li>
                        <li>GPS ET200 / WELITE</li>
                        <li>GPS TRACKER OBD</li>
                        <li>GPS TK905</li>
                        <li>GPS TKSTAR</li>
                        <li>GPS PORTABLE</li>
                    </ul>
                    <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">[ LIST SUPPORT GPS DEVICE ]</button>
                </div>

                <!-- Card 5 -->
                <div class="bg-gray-100 p-6 md:p-8 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:scale-105 duration-300">
                    <i class="fas fa-clock text-yellow-500 text-4xl mb-4"></i>
                    <h3 class="text-xl md:text-2xl font-bold text-blue-600 mb-4">Realtime Tracking</h3>
                    <p class="text-lg text-gray-700">Server GPS Indonesia memberikan tracking dengan kualitas terbaik. Data GPS Realtime dengan interval data hingga 5-10 detik.</p>
                </div>

                <!-- Card 6 -->
                <div class="bg-gray-100 p-6 md:p-8 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:scale-105 duration-300">
                    <i class="fas fa-map-marked-alt text-yellow-500 text-4xl mb-4"></i>
                    <h3 class="text-xl md:text-2xl font-bold text-blue-600 mb-4">Google Maps API</h3>
                    <p class="text-lg text-gray-700">Integrasi MAPS penting dalam server GPS, sudah terhubung dengan GOOGLE MAP + Live Traffic.</p>
                </div>

                <!-- Card 7 -->
                <div class="bg-gray-100 p-6 md:p-8 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:scale-105 duration-300">
                    <i class="fas fa-history text-yellow-500 text-4xl mb-4"></i>
                    <h3 class="text-xl md:text-2xl font-bold text-blue-600 mb-4">PlayBack</h3>
                    <p class="text-lg text-gray-700">Data yang dapat diunduh dalam bentuk Excel dan grafik untuk melihat laporan perjalanan atau memutar kembali perjalanan.</p>
                </div>

                <!-- Card 8 -->
                <div class="bg-gray-100 p-6 md:p-8 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:scale-105 duration-300">
                    <i class="fas fa-map-pin text-yellow-500 text-4xl mb-4"></i>
                    <h3 class="text-xl md:text-2xl font-bold text-blue-600 mb-4">Penanda Lokasi</h3>
                    <p class="text-lg text-gray-700">Menentukan titik lokasi yang sering dikunjungi untuk memudahkan dalam laporan perjalanan.</p>
                </div>

                <!-- Card 9 -->
                <div class="bg-gray-100 p-6 md:p-8 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:scale-105 duration-300">
                    <i class="fas fa-directions text-yellow-500 text-4xl mb-4"></i>
                    <h3 class="text-xl md:text-2xl font-bold text-blue-600 mb-4">Petunjuk Arah</h3>
                    <p class="text-lg text-gray-700">Navigasi mudah dalam aplikasi Android dan iPhone dengan Tombol Navigasi.</p>
                </div>

                <!-- Card 10 -->
                <div class="bg-gray-100 p-6 md:p-8 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:scale-105 duration-300">
                    <i class="fas fa-file-alt text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl md:text-2xl font-bold text-blue-600 mb-4">Report History</h3>
                    <p class="text-lg text-gray-700">Laporan 100 hari: perjalanan, parkir, jarak tempuh, waktu kerja, BBM, geofence, dan lainnya.</p>
                </div>

                <!-- Card 11 -->
                <div class="bg-gray-100 p-6 md:p-8 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:scale-105 duration-300">
                    <i class="fas fa-power-off text-yellow-500 text-4xl mb-4"></i> 
                    <h3 class="text-xl md:text-2xl font-bold text-blue-600 mb-4">Cut Engine</h3>
                    <p class="text-lg text-gray-700">Fitur Cut Engine memungkinkan mematikan mesin dari jarak jauh melalui aplikasi untuk keamanan.</p>
                </div>

                <!-- Card 12 -->
                <div class="bg-gray-100 p-6 md:p-8 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:scale-105 duration-300">
                    <i class="fas fa-border-all text-yellow-500 text-4xl mb-4"></i>
                    <h3 class="text-xl md:text-2xl font-bold text-blue-600 mb-4">Batas Area</h3>
                    <p class="text-lg text-gray-700">Pengaturan batas area kendaraan dengan fitur geofence untuk setiap kendaraan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-12 md:py-24 bg-yellow-300">
        <div class="container mx-auto text-center px-4">
            <h3 class="text-4xl md:text-5xl font-bold mb-6 text-blue-600">Hubungi Kami</h3>
            <p class="text-lg md:text-2xl mb-12 text-gray-700">Ada pertanyaan? Kami siap membantu Anda!</p>
            <form class="max-w-lg mx-auto">
                <div class="flex items-center mb-6">
                    <i class="fas fa-user text-blue-600 text-xl mr-4"></i>
                    <input type="text" placeholder="Nama Anda" class="w-full p-4 text-lg border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <div class="flex items-center mb-6">
                    <i class="fas fa-envelope text-blue-600 text-xl mr-4"></i>
                    <input type="email" placeholder="Email Anda" class="w-full p-4 text-lg border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <div class="flex items-start mb-6">
                    <i class="fas fa-comment text-blue-600 text-xl mr-4 mt-2"></i>
                    <textarea placeholder="Pesan Anda" class="w-full p-4 text-lg border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"></textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-6 md:px-10 py-2 md:py-4 rounded-md text-lg md:text-xl hover:bg-blue-700 transition">Kirim Pesan</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-6">
        <div class="container mx-auto text-center">
            <p class="text-sm md:text-s">&copy; 2024 GPS GO. Semua hak cipta dilindungi.</p>
        </div>
    </footer>
</body>
</html>
