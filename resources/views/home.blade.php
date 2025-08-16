@extends('layouts.landingpage')

@section('title', 'Cendekia Muda - Sekolah Terbaik Sejagad Raya')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-50 to-indigo-100 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-white bg-opacity-70">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23e0e7ff" fill-opacity="0.4"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">
                        <span class="text-primary-600">Sekolah Terbaik</span><br>
                        Sejagad Raya
                    </h1>
                    <p class="text-xl lg:text-2xl text-gray-600 mb-8 leading-relaxed">
                        Bukan Sekadar Belajar, Tapi <span class="font-semibold text-gray-900">Bertumbuh</span><br>
                        Bersama Allah dan Rasul-Nya
                    </p>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#daftar" class="btn-primary inline-flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Daftar Sekarang!
                        </a>
                        <a href="#konsultasi" class="btn-secondary inline-flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/>
                            </svg>
                            Konsultasi Dahulu!
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 mt-12 pt-8 border-t border-gray-200">
                        <div class="text-center">
                            <div class="text-2xl lg:text-3xl font-bold text-primary-600">25+</div>
                            <div class="text-sm text-gray-600 mt-1">Tahun Pengalaman</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl lg:text-3xl font-bold text-primary-600">1000+</div>
                            <div class="text-sm text-gray-600 mt-1">Alumni Terbaik</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl lg:text-3xl font-bold text-primary-600">95%</div>
                            <div class="text-sm text-gray-600 mt-1">Lulus PTN Terbaik</div>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Student Image -->
                <div class="relative">
                    <div class="relative z-10">
                        <!-- Placeholder for student image similar to the design -->
                        <div class="w-full aspect-square max-w-md mx-auto bg-gradient-to-br from-primary-200 to-primary-300 rounded-3xl flex items-center justify-center shadow-2xl">
                            <div class="text-center text-primary-700">
                                <svg class="w-24 h-24 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                </svg>
                                <p class="text-lg font-semibold">Foto Siswa</p>
                                <p class="text-sm opacity-75">Cendekia Muda</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Decorative Elements -->
                    <div class="absolute -top-4 -right-4 w-72 h-72 bg-yellow-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
                    <div class="absolute -bottom-8 -left-4 w-72 h-72 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse delay-1000"></div>
                </div>
            </div>
        </div>

        <!-- Wave divider -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg class="w-full h-24 fill-white" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"></path>
            </svg>
        </div>
    </section>

    <!-- News & Articles Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center mb-12">
                <div class="bg-green-500 text-white px-4 py-2 rounded-lg font-semibold mr-4">
                    🔴 Berita Utama
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Main News Card -->
                <div class="lg:col-span-2 bg-gradient-to-r from-red-500 to-orange-500 text-white p-8 rounded-3xl relative overflow-hidden">
                    <div class="relative z-10">
                        <h3 class="text-2xl lg:text-3xl font-bold mb-4">
                            SD Islam Cendekia Muda Masuk 10 Terbaik Sejagad Raya Dunia!
                        </h3>
                        <p class="text-red-100 mb-6">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                    <div class="absolute -right-8 -bottom-8 opacity-20">
                        <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                </div>

                <!-- News Card 1 -->
                <div class="bg-gradient-to-br from-teal-400 to-blue-500 text-white p-6 rounded-3xl">
                    <div class="mb-4">
                        <div class="w-12 h-12 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            🧒
                        </div>
                        <h4 class="text-lg font-bold mb-2">
                            Fatih Terpilih Menjadi Koordinator Anak Daycare QDC 2025-2026
                        </h4>
                        <p class="text-sm text-blue-100">24 Juli 2025</p>
                    </div>
                </div>

                <!-- News Card 2 -->
                <div class="bg-gradient-to-br from-blue-500 to-purple-600 text-white p-6 rounded-3xl">
                    <div class="mb-4">
                        <div class="w-12 h-12 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            ⚽
                        </div>
                        <h4 class="text-lg font-bold mb-2">
                            SMA Islam Cendekia Muda Terima Kunjungan dari Ronaldo Al Nassr FC
                        </h4>
                        <p class="text-sm text-purple-100">24 Juli 2025</p>
                    </div>
                </div>

                <!-- News Card 3 -->
                <div class="bg-gradient-to-br from-green-400 to-blue-500 text-white p-6 rounded-3xl">
                    <div class="mb-4">
                        <div class="w-12 h-12 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            📚
                        </div>
                        <h4 class="text-lg font-bold mb-2">
                            Hafal 30 Juz! Siswi SMP Merubah Dunia Pendidikan
                        </h4>
                        <p class="text-sm text-blue-100">24 Juli 2025</p>
                    </div>
                </div>

                <!-- News Card 4 -->
                <div class="bg-gradient-to-br from-orange-400 to-red-500 text-white p-6 rounded-3xl">
                    <div class="mb-4">
                        <div class="w-12 h-12 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            🏊
                        </div>
                        <h4 class="text-lg font-bold mb-2">
                            Juara Renang Kelas Dunia! Cendekia Muda Solusinya
                        </h4>
                        <p class="text-sm text-orange-100">24 Juli 2025</p>
                    </div>
                </div>

                <!-- News Card 5 -->
                <div class="bg-gradient-to-br from-gray-600 to-gray-800 text-white p-6 rounded-3xl">
                    <div class="mb-4">
                        <div class="w-12 h-12 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            🧠
                        </div>
                        <h4 class="text-lg font-bold mb-2">
                            Pengajian Bulanan YLP Merubah Mindset Guru!
                        </h4>
                        <p class="text-sm text-gray-300">24 Juli 2025</p>
                    </div>
                </div>

                <!-- News Card 6 -->
                <div class="bg-gradient-to-br from-lime-400 to-green-500 text-white p-6 rounded-3xl">
                    <div class="mb-4">
                        <div class="w-12 h-12 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            💡
                        </div>
                        <h4 class="text-lg font-bold mb-2">
                            LuminoED Tantang Google Mengenai Smartboard!
                        </h4>
                        <p class="text-sm text-green-100">24 Juli 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SDG Goals Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                        Bersama Menuju Masa Depan Berkelanjutan
                    </h2>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Dengan inovasi dan kolaborasi serta pengaplikasiannya dalam Program STEM, Sekolah Islam Cendekia Muda berkontribusi dalam mendorong inovasi dan keberlanjutan, demi lingkungan yang lebih baik dan masa depan yang lebih cerah.
                    </p>
                </div>
                <!-- Left Content -->
                <div>
                    <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold">
                        Selengkapnya tentang Tujuan Program STEM SMA Islam Cendekia Muda →
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-1 items-center">
                <div>
                    {{-- <div class="mb-8">
                        <img src="/api/placeholder/200/80" alt="Unsustainable Development Goals" class="h-20 mb-6">
                    </div> --}}
                    
                    <div class="grid grid-cols-3 lg:grid-cols-6 gap-4">
                        <div class="card text-center">
                            <div class="text-red-500 text-4xl font-bold mb-2"></div>
                            <div class="text-xs font-semibold text-red-500">Unsustainable Development Goals</div>
                        </div>
                        <div class="card text-center">
                            <div class="text-red-500 text-4xl font-bold mb-2">1</div>
                            <div class="text-xs font-semibold text-red-500">NO POVERTY</div>
                        </div>
                        <div class="card text-center">
                            <div class="text-yellow-500 text-4xl font-bold mb-2">2</div>
                            <div class="text-xs font-semibold text-yellow-600">ZERO HUNGER</div>
                        </div>
                        <div class="card text-center">
                            <div class="text-green-500 text-4xl font-bold mb-2">3</div>
                            <div class="text-xs font-semibold text-green-600">GOOD HEALTH AND WELL-BEING</div>
                        </div>
                        <div class="card text-center">
                            <div class="text-red-600 text-4xl font-bold mb-2">4</div>
                            <div class="text-xs font-semibold text-red-600">QUALITY EDUCATION</div>
                        </div>
                        <div class="card text-center">
                            <div class="text-orange-500 text-4xl font-bold mb-2">5</div>
                            <div class="text-xs font-semibold text-orange-600">GENDER EQUALITY</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Research Excellence Cards -->
            <div class="mt-16">
                <div class="bg-blue-600 text-white p-6 rounded-2xl mb-8">
                    <div class="flex items-center mb-4">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-lg text-sm font-semibold mr-4">
                            ✦ Riset Unggulan
                        </span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">
                        Riset Unggulan Sekolah Islam Cendekia Muda adalah kontribusi kami dalam perkembangan Ilmiah dan Akademik
                    </h3>
                    <a href="#" class="text-blue-200 hover:text-white">
                        Riset Unggulan Lainnya →
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-gradient-to-br from-teal-400 to-blue-500 text-white p-6 rounded-2xl">
                        <h4 class="font-bold mb-2">Minyak dari Air Dapat Jadi Solusi Masak Masa Kini!</h4>
                        <p class="text-sm text-blue-100">Iman A. Gymnastiar & Agung Prayoto</p>
                    </div>
                    <div class="bg-gradient-to-br from-gray-600 to-gray-800 text-white p-6 rounded-2xl">
                        <h4 class="font-bold mb-2">Berolahraga 5 Menit Perhari Dapat Menurunkan Stress!</h4>
                        <p class="text-sm text-gray-300">Hilal Laclyar & Dodo Sukma Suhrajat</p>
                    </div>
                    <div class="bg-gradient-to-br from-blue-500 to-teal-400 text-white p-6 rounded-2xl">
                        <h4 class="font-bold mb-2">Baygon Meningkatkan Kekebalan Tubuh Manusia!</h4>
                        <p class="text-sm text-blue-100">Nabila Hafiz</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- School Profile Section -->
    <section class="py-20 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 card bg-gradient-to-br from-blue-500 to-teal-400 text-white">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-center">
                <!-- Left Content -->
                <div class="lg:col-span-2">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-6">
                        Sekolah Islam Cendekia Muda
                    </h2>
                    <p class="text-blue-100 mb-6 leading-relaxed">
                        Sekolah Islam Cendekia Muda (CM) adalah Sekolah yang terletak di Bandung, Jawa Barat, Indonesia. Menggunakan Kurikulum God-Centered Education dan Shirah Nabawiyah Based-Learning dan Kurikulum Pemerintah yang dipadukan dengan mengintegrasikan ilmu pengetahuan dengan konsep ketuhanan.
                    </p>
                    <a href="#" class="text-white hover:text-blue-200 font-semibold">
                        Selengkapnya tentang CM →
                    </a>
                </div>

                <!-- Right Content - Statistics -->
                <div class="lg:col-span-1">
                    <div class="mb-8">
                        <p class="text-center text-blue-100 mb-2">
                            Sekolah Islam Cendekia Muda didirikan pada 14 Februari 2000 dan sudah Berusia 23 Tahun
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="card grid grid-cols-3 lg:grid-cols-6 gap-12 items-center mt-3">
                <!-- Left Content -->
                <div class="col-span-1 lg:col-span-2 h-full flex items-center">
                    <div class="text-gray-900">
                        <h1 class="text-4xl font-bold mb-8">Sekolah<br>Inklusi</h1>
                        <p class="text-gray-600 mb-8">God Centered Education<br>Shirah Nabawiyah Based-Learning</p>
                    </div>
                </div>

                <!-- Right Content - Statistics -->
                <div class="col-span-2 lg:col-span-4">
                    <div class="bg-white bg-opacity-10 p-8 rounded-2xl text-gray-900">
                        
                        <div class="grid grid-cols-2 gap-6">
                            <!-- Students Stats -->
                            <div>
                                <div class="bg-white bg-opacity-20 p-4 rounded-lg mb-3 flex items-center">
                                    <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                                        👥
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold">50.000.000</div>
                                        <div class="text-sm text-gray-600">Siswa</div>
                                    </div>
                                </div>
                                <div class="bg-white bg-opacity-20 p-4 rounded-lg mb-3 flex items-center">
                                    <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                                        🎓
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold">1.000.000</div>
                                        <div class="text-sm text-gray-600">Alumni</div>
                                    </div>
                                </div>
                                <div class="bg-white bg-opacity-20 p-4 rounded-lg mb-3 flex items-center">
                                    <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                                        👨‍🎓
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold">5.000.000</div>
                                        <div class="text-sm text-gray-600">Siswa TK Reguler</div>
                                    </div>
                                </div>
                                <div class="bg-white bg-opacity-20 p-4 rounded-lg flex items-center">
                                    <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                                        🏫
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold">5.000.000</div>
                                        <div class="text-sm text-gray-600">Siswa SMP Reguler</div>
                                    </div>
                                </div>
                            </div>

                            <!-- International Stats -->
                            <div>
                                <div class="bg-white bg-opacity-20 p-4 rounded-lg mb-3 flex items-center">
                                    <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                                        🌍
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold">50.000.000</div>
                                        <div class="text-sm text-gray-600">Siswa Internasional</div>
                                    </div>
                                </div>
                                <div class="bg-white bg-opacity-20 p-4 rounded-lg mb-3 flex items-center">
                                    <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                                        🎓
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold">1.000.000</div>
                                        <div class="text-sm text-gray-600">Alumni</div>
                                    </div>
                                </div>
                                <div class="bg-white bg-opacity-20 p-4 rounded-lg mb-3 flex items-center">
                                    <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                                        🏫
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold">5.000.000</div>
                                        <div class="text-sm text-gray-600">Siswa SD Reguler</div>
                                    </div>
                                </div>
                                <div class="bg-white bg-opacity-20 p-4 rounded-lg flex items-center">
                                    <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                                        🎓
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold">5.000.000</div>
                                        <div class="text-sm text-gray-600">Siswa SMA Reguler</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Teachers Stats -->
                        <div class="grid grid-cols-3 gap-4 mt-8">
                            <div class="bg-white bg-opacity-20 p-4 rounded-lg text-center">
                                <div class="text-3xl font-bold">512</div>
                                <div class="text-sm text-gray-600">Guru S3</div>
                            </div>
                            <div class="bg-white bg-opacity-20 p-4 rounded-lg text-center">
                                <div class="text-3xl font-bold">256</div>
                                <div class="text-sm text-gray-600">Guru S2</div>
                            </div>
                            <div class="bg-white bg-opacity-20 p-4 rounded-lg text-center">
                                <div class="text-3xl font-bold">128</div>
                                <div class="text-sm text-gray-600">Guru S1</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- School Profile Video Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="bg-blue-600 text-white px-6 py-3 rounded-lg inline-flex items-center font-semibold mb-8">
                    ✦ Profil Sekolah Islam Cendekia Muda
                </div>
            </div>
            
            <div class="relative max-w-4xl mx-auto">
                <div class="aspect-video bg-gradient-to-br from-orange-200 via-yellow-200 to-green-200 rounded-2xl relative overflow-hidden shadow-2xl">
                    <!-- Video Placeholder with Play Button -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition-transform duration-300 cursor-pointer">
                            <svg class="w-8 h-8 text-blue-600 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/>
                            </svg>
                        </div>
                    </div>
                    <!-- Blurred background overlay -->
                    <div class="absolute inset-0 bg-black bg-opacity-20 backdrop-blur-sm"></div>
                </div>
                
                <!-- Video Description -->
                <div class="text-center mt-8">
                    <p class="text-gray-600 max-w-2xl mx-auto">
                        Tonton video profil lengkap Sekolah Islam Cendekia Muda dan temukan bagaimana kami memadukan pendidikan berkualitas dengan nilai-nilai Islam yang kuat.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- School Units Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="bg-blue-600 text-white px-6 py-3 rounded-lg inline-flex items-center font-semibold mb-8">
                    ✦ Unit Sekolah Islam Cendekia Muda
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- PG-TK -->
                <div class="bg-gradient-to-br from-orange-400 to-red-500 text-white p-8 rounded-3xl text-center relative overflow-hidden">
                    <div class="relative z-10">
                        <div class="w-24 h-24 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-3xl">👶</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">PG-TK Islam Cendekia Muda</h3>
                        <p class="text-orange-100 text-sm mb-4">Jl. Layar No 14 Arcamanik Kota Bandung</p>
                    </div>
                    <div class="absolute -bottom-4 -right-4 opacity-10">
                        <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2L3 7v11a1 1 0 001 1h3v-8h6v8h3a1 1 0 001-1V7l-7-5z"/>
                        </svg>
                    </div>
                </div>

                <!-- SD -->
                <div class="bg-gradient-to-br from-red-400 to-pink-500 text-white p-8 rounded-3xl text-center relative overflow-hidden">
                    <div class="relative z-10">
                        <div class="w-24 h-24 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-3xl">👧</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">SD Islam Cendekia Muda</h3>
                        <p class="text-red-100 text-sm mb-4">Jl. Antasari Kodam IX/UDY Sukamiskin</p>
                    </div>
                    <div class="absolute -bottom-4 -right-4 opacity-10">
                        <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                        </svg>
                    </div>
                </div>

                <!-- SMP -->
                <div class="bg-gradient-to-br from-green-400 to-teal-500 text-white p-8 rounded-3xl text-center relative overflow-hidden">
                    <div class="relative z-10">
                        <div class="w-24 h-24 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-3xl">👦</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">SMP Islam Cendekia Muda</h3>
                        <p class="text-green-100 text-sm mb-4">Jl. Puri Ayu Pratama no. 7, Bandung</p>
                    </div>
                    <div class="absolute -bottom-4 -right-4 opacity-10">
                        <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                            <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>
                        </svg>
                    </div>
                </div>

                <!-- SMA -->
                <div class="bg-gradient-to-br from-blue-500 to-purple-600 text-white p-8 rounded-3xl text-center relative overflow-hidden">
                    <div class="relative z-10">
                        <div class="w-24 h-24 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-3xl">👩‍🎓</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">SMA Islam Cendekia Muda</h3>
                        <p class="text-blue-100 text-sm mb-4">Jl. Pahlawan no 33, Sukamiskin, Bandung</p>
                    </div>
                    <div class="absolute -bottom-4 -right-4 opacity-10">
                        <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="daftar" class="py-20 bg-primary">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-5xl font-bold text-white mb-6">
                Siap Bergabung dengan Keluarga Besar Cendekia Muda?
            </h2>
            <p class="text-xl text-primary-100 mb-8 max-w-2xl mx-auto">
                Jadilah bagian dari komunitas pelajar yang unggul dalam akademik dan berakhlak mulia
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="bg-white text-primary-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200">
                    Daftar Online Sekarang
                </a>
                <a href="#konsultasi" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-primary transition-colors duration-200">
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </section>
@endsection
