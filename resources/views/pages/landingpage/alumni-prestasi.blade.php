@extends('layouts.landingpage')

@section('title', 'Alumni & Prestasi - Cendekia Muda')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-blue-600 to-purple-700 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl lg:text-6xl font-bold mb-6">
                    Alumni & Prestasi
                </h1>
                <p class="text-xl lg:text-2xl text-blue-100 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Kebanggaan Cendekia Muda terletak pada pencapaian luar biasa dari alumni dan prestasi gemilang yang telah diraih
                </p>
            </div>
        </div>
        
        <!-- Wave divider -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg class="w-full h-24 fill-white" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"></path>
            </svg>
        </div>
    </section>

    <!-- Navigation Tabs -->
    <section class="py-8 bg-white sticky top-16 z-40 border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#alumni-terbaik" class="nav-tab active" data-target="alumni-terbaik">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                    </svg>
                    Alumni Terbaik
                </a>
                <a href="#prestasi-sekolah" class="nav-tab" data-target="prestasi-sekolah">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                    Prestasi Sekolah
                </a>
                <a href="#prestasi-siswa" class="nav-tab" data-target="prestasi-siswa">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                    Prestasi Siswa
                </a>
            </div>
        </div>
    </section>

    <!-- Alumni Terbaik Section -->
    <section id="alumni-terbaik" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-lg inline-flex items-center font-semibold mb-8">
                    🎓 Alumni Terbaik Cendekia Muda
                </div>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Para alumni Cendekia Muda telah membuktikan kualitas pendidikan kami dengan meraih kesuksesan di berbagai bidang dan berkarya untuk kemajuan bangsa.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Alumni Card 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                    <div class="text-center">
                        <div class="w-32 h-32 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Ahmad Fadli</h3>
                        <p class="text-blue-600 font-semibold mb-3">Alumni SMA 2018</p>
                        <p class="text-gray-600 mb-4">Dokter Spesialis Jantung di RS Jantung Harapan Kita</p>
                        <div class="bg-gradient-to-r from-green-100 to-blue-100 rounded-lg p-4">
                            <p class="text-sm text-gray-700 italic">
                                "Cendekia Muda memberikan fondasi kuat untuk mengintegrasikan ilmu kedokteran dengan nilai-nilai Islam."
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Alumni Card 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                    <div class="text-center">
                        <div class="w-32 h-32 bg-gradient-to-br from-green-400 to-teal-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Siti Nurhaliza, M.T</h3>
                        <p class="text-green-600 font-semibold mb-3">Alumni SMA 2019</p>
                        <p class="text-gray-600 mb-4">Software Engineer di Google Singapore</p>
                        <div class="bg-gradient-to-r from-green-100 to-blue-100 rounded-lg p-4">
                            <p class="text-sm text-gray-700 italic">
                                "Pendidikan di CM mengajarkan saya untuk selalu berinovasi dengan tetap berpegang pada akhlaq."
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Alumni Card 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                    <div class="text-center">
                        <div class="w-32 h-32 bg-gradient-to-br from-orange-400 to-red-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Muhammad Rizki</h3>
                        <p class="text-orange-600 font-semibold mb-3">Alumni SMA 2017</p>
                        <p class="text-gray-600 mb-4">Entrepreneur & CEO StartupTech Indonesia</p>
                        <div class="bg-gradient-to-r from-orange-100 to-yellow-100 rounded-lg p-4">
                            <p class="text-sm text-gray-700 italic">
                                "CM mengajarkan saya kepemimpinan yang berintegritas dan jiwa entrepreneurship yang Islami."
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Alumni Statistics -->
            <div class="bg-white rounded-2xl p-8 shadow-xl">
                <h3 class="text-2xl font-bold text-gray-900 text-center mb-8">Statistik Alumni Cendekia Muda</h3>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600 mb-2">500+</div>
                        <p class="text-gray-600">Total Alumni</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-600 mb-2">95%</div>
                        <p class="text-gray-600">Melanjutkan ke PTN</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-purple-600 mb-2">50+</div>
                        <p class="text-gray-600">Profesi Berbeda</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-orange-600 mb-2">25+</div>
                        <p class="text-gray-600">Negara Tersebar</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prestasi Sekolah Section -->
    <section id="prestasi-sekolah" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="bg-gradient-to-r from-green-600 to-teal-600 text-white px-6 py-3 rounded-lg inline-flex items-center font-semibold mb-8">
                    🏆 Prestasi Sekolah
                </div>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Cendekia Muda telah meraih berbagai penghargaan dan pengakuan atas komitmen dalam memberikan pendidikan berkualitas tinggi.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
                <!-- Achievement Card 1 -->
                <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8 border border-blue-100">
                    <div class="flex items-start">
                        <div class="bg-gradient-to-br from-blue-500 to-purple-600 text-white p-4 rounded-lg mr-6">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Sekolah Terakreditasi A</h3>
                            <p class="text-gray-600 mb-3">Akreditasi A dari Badan Akreditasi Nasional Sekolah/Madrasah (BAN-S/M) untuk semua jenjang pendidikan.</p>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">2023</span>
                        </div>
                    </div>
                </div>

                <!-- Achievement Card 2 -->
                <div class="bg-gradient-to-br from-green-50 to-teal-50 rounded-2xl p-8 border border-green-100">
                    <div class="flex items-start">
                        <div class="bg-gradient-to-br from-green-500 to-teal-600 text-white p-4 rounded-lg mr-6">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">ISO 9001:2015 Certified</h3>
                            <p class="text-gray-600 mb-3">Sertifikat ISO 9001:2015 untuk Sistem Manajemen Mutu dalam penyelenggaraan pendidikan.</p>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">2024</span>
                        </div>
                    </div>
                </div>

                <!-- Achievement Card 3 -->
                <div class="bg-gradient-to-br from-orange-50 to-yellow-50 rounded-2xl p-8 border border-orange-100">
                    <div class="flex items-start">
                        <div class="bg-gradient-to-br from-orange-500 to-yellow-600 text-white p-4 rounded-lg mr-6">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Green School Award</h3>
                            <p class="text-gray-600 mb-3">Penghargaan sebagai Sekolah Hijau dari Kementerian Lingkungan Hidup dan Kehutanan RI.</p>
                            <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm font-semibold">2023</span>
                        </div>
                    </div>
                </div>

                <!-- Achievement Card 4 -->
                <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 border border-purple-100">
                    <div class="flex items-start">
                        <div class="bg-gradient-to-br from-purple-500 to-pink-600 text-white p-4 rounded-lg mr-6">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Best Islamic School</h3>
                            <p class="text-gray-600 mb-3">Penghargaan sebagai Sekolah Islam Terbaik Jawa Barat dari Dinas Pendidikan Provinsi.</p>
                            <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-semibold">2024</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Institutional Partnerships -->
            <div class="bg-gradient-to-r from-gray-900 to-blue-900 text-white rounded-2xl p-8">
                <h3 class="text-2xl font-bold text-center mb-8">Kemitraan Institusional</h3>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="bg-white bg-opacity-10 p-4 rounded-lg mb-3">
                            <svg class="w-12 h-12 mx-auto text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <p class="font-semibold">ITB</p>
                        <p class="text-sm text-gray-300">Kemitraan Riset</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-white bg-opacity-10 p-4 rounded-lg mb-3">
                            <svg class="w-12 h-12 mx-auto text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <p class="font-semibold">UI</p>
                        <p class="text-sm text-gray-300">Program Beasiswa</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-white bg-opacity-10 p-4 rounded-lg mb-3">
                            <svg class="w-12 h-12 mx-auto text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                            </svg>
                        </div>
                        <p class="font-semibold">UGM</p>
                        <p class="text-sm text-gray-300">Exchange Program</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-white bg-opacity-10 p-4 rounded-lg mb-3">
                            <svg class="w-12 h-12 mx-auto text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <p class="font-semibold">Cambridge</p>
                        <p class="text-sm text-gray-300">Kurikulum International</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prestasi Siswa Section -->
    <section id="prestasi-siswa" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="bg-gradient-to-r from-orange-600 to-red-600 text-white px-6 py-3 rounded-lg inline-flex items-center font-semibold mb-8">
                    🏅 Prestasi Siswa
                </div>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Siswa-siswi Cendekia Muda telah membuktikan keunggulan mereka melalui berbagai prestasi di tingkat lokal, nasional, hingga internasional.
                </p>
            </div>

            <!-- Recent Achievements -->
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8 mb-16">
                <!-- Achievement 1 -->
                <div class="bg-white rounded-2xl p-6 shadow-xl border-t-4 border-gold hover:transform hover:scale-105 transition-all duration-300" style="border-top-color: #FFD700;">
                    <div class="flex items-center mb-4">
                        <div class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                        <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs font-semibold">EMAS</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">International Mathematics Olympiad</h3>
                    <p class="text-gray-600 text-sm mb-3">Ahmad Faiz - Kelas XI IPA</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Juli 2025
                    </div>
                </div>

                <!-- Achievement 2 -->
                <div class="bg-white rounded-2xl p-6 shadow-xl border-t-4 border-gray-400 hover:transform hover:scale-105 transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <div class="bg-gradient-to-r from-gray-400 to-gray-600 text-white p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-full text-xs font-semibold">PERAK</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">National Science Competition</h3>
                    <p class="text-gray-600 text-sm mb-3">Siti Aisyah - Kelas X MIPA</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Juni 2025
                    </div>
                </div>

                <!-- Achievement 3 -->
                <div class="bg-white rounded-2xl p-6 shadow-xl border-t-4 border-amber-600 hover:transform hover:scale-105 transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <div class="bg-gradient-to-r from-amber-500 to-orange-600 text-white p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                            </svg>
                        </div>
                        <span class="bg-amber-100 text-amber-800 px-2 py-1 rounded-full text-xs font-semibold">PERUNGGU</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Robotics World Championship</h3>
                    <p class="text-gray-600 text-sm mb-3">Tim Robotika CM - SMA</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Agustus 2025
                    </div>
                </div>

                <!-- Achievement 4 -->
                <div class="bg-white rounded-2xl p-6 shadow-xl border-t-4 border-green-500 hover:transform hover:scale-105 transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <div class="bg-gradient-to-r from-green-500 to-teal-600 text-white p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-semibold">JUARA 1</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Islamic Speech Competition</h3>
                    <p class="text-gray-600 text-sm mb-3">Fatimah Zahra - Kelas XII IPS</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Mei 2025
                    </div>
                </div>

                <!-- Achievement 5 -->
                <div class="bg-white rounded-2xl p-6 shadow-xl border-t-4 border-blue-500 hover:transform hover:scale-105 transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <div class="bg-gradient-to-r from-blue-500 to-purple-600 text-white p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs font-semibold">BEST PROJECT</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Indonesia Science Project Olympiad</h3>
                    <p class="text-gray-600 text-sm mb-3">Tim Sains CM - SMP</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        April 2025
                    </div>
                </div>

                <!-- Achievement 6 -->
                <div class="bg-white rounded-2xl p-6 shadow-xl border-t-4 border-purple-500 hover:transform hover:scale-105 transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <div class="bg-gradient-to-r from-purple-500 to-pink-600 text-white p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                            </svg>
                        </div>
                        <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded-full text-xs font-semibold">JUARA 2</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Creative Writing Competition</h3>
                    <p class="text-gray-600 text-sm mb-3">Muhammad Yusuf - Kelas XI IPS</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Maret 2025
                    </div>
                </div>
            </div>

            <!-- Achievement Summary -->
            <div class="bg-gradient-to-r from-indigo-600 to-purple-700 text-white rounded-2xl p-8">
                <h3 class="text-2xl font-bold text-center mb-8">Rekapitulasi Prestasi 2025</h3>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-4xl font-bold mb-2">45+</div>
                        <p class="text-indigo-100">Total Prestasi</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold mb-2">15</div>
                        <p class="text-indigo-100">Tingkat Internasional</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold mb-2">20</div>
                        <p class="text-indigo-100">Tingkat Nasional</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold mb-2">10</div>
                        <p class="text-indigo-100">Tingkat Regional</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-blue-600 to-purple-700 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-5xl font-bold mb-6">
                Bergabunglah dengan Keluarga Besar Cendekia Muda
            </h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Jadilah bagian dari tradisi prestasi dan keunggulan yang telah membanggakan nama Cendekia Muda
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200">
                    Daftar Sekarang
                </a>
                <a href="#" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors duration-200">
                    Info Lebih Lanjut
                </a>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    .nav-tab {
        @apply px-6 py-3 rounded-lg font-semibold text-gray-600 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300 flex items-center;
    }
    .nav-tab.active {
        @apply bg-blue-600 text-white shadow-lg;
    }
    
    /* Smooth scroll for anchor links */
    html {
        scroll-behavior: smooth;
    }
    
    /* Custom scrollbar for webkit browsers */
    ::-webkit-scrollbar {
        width: 8px;
    }
    
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }
    
    ::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 4px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scroll and tab switching
        const navTabs = document.querySelectorAll('.nav-tab');
        
        navTabs.forEach(tab => {
            tab.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all tabs
                navTabs.forEach(t => t.classList.remove('active'));
                
                // Add active class to clicked tab
                this.classList.add('active');
                
                // Get target section
                const targetId = this.getAttribute('href').substring(1);
                const targetSection = document.getElementById(targetId);
                
                if (targetSection) {
                    // Smooth scroll to section with offset for sticky header
                    const headerOffset = 120;
                    const elementPosition = targetSection.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                    
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Update active tab based on scroll position
        window.addEventListener('scroll', function() {
            const sections = ['alumni-terbaik', 'prestasi-sekolah', 'prestasi-siswa'];
            let currentSection = '';
            
            sections.forEach(sectionId => {
                const section = document.getElementById(sectionId);
                if (section) {
                    const rect = section.getBoundingClientRect();
                    if (rect.top <= 150 && rect.bottom >= 150) {
                        currentSection = sectionId;
                    }
                }
            });
            
            if (currentSection) {
                navTabs.forEach(tab => {
                    tab.classList.remove('active');
                    if (tab.getAttribute('href') === '#' + currentSection) {
                        tab.classList.add('active');
                    }
                });
            }
        });
        
        // Add animation on scroll for achievement cards
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, observerOptions);
        
        // Observe all achievement cards
        document.querySelectorAll('.bg-white.rounded-2xl').forEach(card => {
            observer.observe(card);
        });
    });
</script>
@endpush
