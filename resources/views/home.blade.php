@extends('layouts.landingpage')

@section('title', 'Cendekia Muda - Sekolah Terbaik Sejagad Raya')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-50 to-indigo-100 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-white bg-opacity-70">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23e0e7ff" fill-opacity="0.4"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <div class="relative max-w-[90rem] mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32 flex justify-center">
            <!-- Carousel container -->
            <div id="heroCarousel" class="carousel-container relative">

                <!-- Slide 1 -->
                <div class="carousel-slide active min-w-6xl max-w-6xl">
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
                            <div class="absolute -top-4 -right-4 w-72 h-72 bg-yellow-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
                            <div class="absolute -bottom-8 -left-4 w-72 h-72 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse delay-1000"></div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-slide min-w-6xl max-w-6xl">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <!-- Left Content -->
                        <div class="text-center lg:text-left">
                            <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">
                                <span class="text-green-600">Pendidikan Islam</span><br>
                                Berkualitas Tinggi
                            </h1>
                            <p class="text-xl lg:text-2xl text-gray-600 mb-8 leading-relaxed">
                                Memadukan <span class="font-semibold text-gray-900">Ilmu dan Iman</span><br>
                                untuk Generasi Qurani
                            </p>
                            
                            <!-- CTA Buttons -->
                            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                                <a href="#program" class="btn-primary inline-flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z"/>
                                    </svg>
                                    Lihat Program Kami
                                </a>
                                <a href="#galeri" class="btn-secondary inline-flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                                    </svg>
                                    Galeri Sekolah
                                </a>
                            </div>

                            <!-- Stats -->
                            <div class="grid grid-cols-3 gap-6 mt-12 pt-8 border-t border-gray-200">
                                <div class="text-center">
                                    <div class="text-2xl lg:text-3xl font-bold text-green-600">100%</div>
                                    <div class="text-sm text-gray-600 mt-1">Hafal Al-Quran</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl lg:text-3xl font-bold text-green-600">50+</div>
                                    <div class="text-sm text-gray-600 mt-1">Program Unggulan</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl lg:text-3xl font-bold text-green-600">10+</div>
                                    <div class="text-sm text-gray-600 mt-1">Penghargaan</div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Content -->
                        <div class="relative">
                            <div class="relative z-10">
                                <div class="w-full aspect-square max-w-md mx-auto bg-gradient-to-br from-green-200 to-blue-300 rounded-3xl flex items-center justify-center shadow-2xl">
                                    <div class="text-center text-green-700">
                                        <svg class="w-24 h-24 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10.496 2.132a1 1 0 00-.992 0l-7 4A1 1 0 003 8v7a1 1 0 100 2h14a1 1 0 100-2V8a1 1 0 00.496-1.868l-7-4zM6 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm3 1a1 1 0 012 0v3a1 1 0 11-2 0v-3zm5-1a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        <p class="text-lg font-semibold">Fasilitas Sekolah</p>
                                        <p class="text-sm opacity-75">Modern & Islami</p>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute -top-4 -right-4 w-72 h-72 bg-green-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
                            <div class="absolute -bottom-8 -left-4 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse delay-1000"></div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-slide min-w-6xl max-w-6xl">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <!-- Left Content -->
                        <div class="text-center lg:text-left">
                            <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">
                                <span class="text-purple-600">Prestasi Siswa</span><br>
                                Tingkat Internasional
                            </h1>
                            <p class="text-xl lg:text-2xl text-gray-600 mb-8 leading-relaxed">
                                Mencetak <span class="font-semibold text-gray-900">Juara-Juara</span><br>
                                di Kancah Dunia
                            </p>
                            
                            <!-- CTA Buttons -->
                            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                                <a href="#prestasi" class="btn-primary inline-flex items-center justify-center" style="background-color: #8B5CF6;">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                    </svg>
                                    Jadwal Kompetisi
                                </a>
                                <a href="#alumni" class="btn-secondary inline-flex items-center justify-center border-purple-600 text-purple-600">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                                    </svg>
                                    Cerita Alumni
                                </a>
                            </div>

                            <!-- Stats -->
                            <div class="grid grid-cols-3 gap-6 mt-12 pt-8 border-t border-gray-200">
                                <div class="text-center">
                                    <div class="text-2xl lg:text-3xl font-bold text-purple-600">250+</div>
                                    <div class="text-sm text-gray-600 mt-1">Medali Olimpiade</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl lg:text-3xl font-bold text-purple-600">75+</div>
                                    <div class="text-sm text-gray-600 mt-1">Negara Tujuan</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl lg:text-3xl font-bold text-purple-600">30+</div>
                                    <div class="text-sm text-gray-600 mt-1">Beasiswa Luar Negeri</div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Content -->
                        <div class="relative">
                            <div class="relative z-10">
                                <div class="w-full aspect-square max-w-md mx-auto bg-gradient-to-br from-purple-200 to-pink-300 rounded-3xl flex items-center justify-center shadow-2xl">
                                    <div class="text-center text-purple-700">
                                        <svg class="w-24 h-24 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5 3a2 2 0 012-2h10a2 2 0 012 2v14a2 2 0 01-2 2H7a2 2 0 01-2-2V3zm2 0v14h10V3H7zm-5 7a1 1 0 011-1h4a1 1 0 110 2H3a1 1 0 01-1-1zm0 4a1 1 0 011-1h4a1 1 0 110 2H3a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        <p class="text-lg font-semibold">Trophy & Penghargaan</p>
                                        <p class="text-sm opacity-75">Prestasi Internasional</p>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute -top-4 -right-4 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
                            <div class="absolute -bottom-8 -left-4 w-72 h-72 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse delay-1000"></div>
                        </div>
                    </div>
                </div>
            
                <!-- Carousel Navigation -->
                <div class="absolute bottom-6 left-0 right-0 z-10 flex justify-center space-x-2 px-6">
                    <button class="carousel-dot active" data-slide="0"></button>
                    <button class="carousel-dot" data-slide="1"></button>
                    <button class="carousel-dot" data-slide="2"></button>
                </div>
                
                <!-- Carousel Controls -->
                <button class="carousel-control prev absolute top-1/2 left-4 transform -translate-y-1/2 bg-white bg-opacity-80 rounded-full p-2 shadow-md z-20">
                    <svg class="w-5 h-5 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button class="carousel-control next absolute top-1/2 right-4 transform -translate-y-1/2 bg-white bg-opacity-80 rounded-full p-2 shadow-md z-20">
                    <svg class="w-5 h-5 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
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
                <div class="lg:col-span-2 text-white rounded-3xl relative overflow-hidden min-h-96" 
                    style="background-image: url('{{ asset('assets/images/building.jpg') }}'); background-size: cover; background-position: center;">
                    <div class="h-full w-full flex flex-col items-end bg-gradient-to-t from-red-500 to-transparent p-8 rounded-3xl">
                        <div class="mt-auto">
                            <h3 class="text-2xl lg:text-3xl font-bold mb-4">
                                SD Islam Cendekia Muda Masuk 10 Terbaik Sejagad Raya Dunia!
                            </h3>
                            <p class="text-red-100 mb-6">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                    {{-- <div class="absolute -right-8 -bottom-8 opacity-20">
                        <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div> --}}
                </div>

                <!-- News Card 1 -->
                <div class="text-white rounded-3xl min-h-96"
                    style="background-image: url('{{ asset('assets/images/little-boy-camera.jpg') }}'); background-size: cover; background-position: center;">
                    <div class="h-full w-full flex flex-col items-end p-6 bg-gradient-to-t from-teal-400 to-transparent rounded-3xl">
                        <div class="mt-auto">
                            <h4 class="text-lg font-bold mb-2">
                                Fatih Terpilih Menjadi Koordinator Anak Daycare QDC 2025-2026
                            </h4>
                            <p class="text-sm text-blue-100">24 Juli 2025</p>
                        </div>
                    </div>
                </div>

                <!-- News Card 2 -->
                <div class="bg-cover bg-center text-white rounded-3xl"
                    style="background-image: url('{{ asset('assets/images/Cristiano Ronaldo - FootyRenders.png') }}');">
                    <div class="h-full w-full flex flex-col items-end p-6 bg-gradient-to-t from-blue-500 to-transparent rounded-3xl">
                        <div class="mt-auto">
                            <h4 class="text-lg font-bold mb-2">
                                SMA Islam Cendekia Muda Terima Kunjungan dari Ronaldo Al Nassr FC
                            </h4>
                            <p class="text-sm text-purple-100">24 Juli 2025</p>
                        </div>
                    </div>
                </div>

                <!-- News Card 3 -->
                <div class="bg-cover bg-center text-white rounded-3xl min-h-60"
                    style="background-image: url('{{ asset('assets/images/library.jpg') }}');">
                    <div class="h-full w-full flex flex-col items-end p-6 bg-gradient-to-t from-green-400 to-transparent rounded-3xl">
                        <div class="mt-auto">
                            <h4 class="text-lg font-bold mb-2">
                                Hafal 30 Juz! Siswi SMP Merubah Dunia Pendidikan
                            </h4>
                            <p class="text-sm text-blue-100">24 Juli 2025</p>
                        </div>
                    </div>
                </div>

                <!-- News Card 4 -->
                <div class="bg-cover bg-center text-white rounded-3xl"
                    style="background-image: url('{{ asset('assets/images/swimming.jpg') }}');">
                    <div class="h-full w-full flex flex-col items-end p-6 bg-gradient-to-t from-orange-400 to-transparent rounded-3xl">
                        <div class="mt-auto">
                            <h4 class="text-lg font-bold mb-2">
                                Juara Renang Kelas Dunia! Cendekia Muda Solusinya
                            </h4>
                            <p class="text-sm text-orange-100">24 Juli 2025</p>
                        </div>
                    </div>
                </div>

                <!-- News Card 5 -->
                <div class="bg-cover bg-center text-white rounded-3xl"
                    style="background-image: url('{{ asset('assets/images/library.jpg') }}');">
                    <div class="h-full w-full flex flex-col items-end p-6 bg-gradient-to-t from-gray-600 to-transparent rounded-3xl">
                        <div class="mt-auto">
                            <h4 class="text-lg font-bold mb-2">
                                Pengajian Bulanan YLP Merubah Mindset Guru!
                            </h4>
                            <p class="text-sm text-gray-300">24 Juli 2025</p>
                        </div>
                    </div>
                </div>

                <!-- News Card 6 -->
                <div class="bg-cover bg-center text-white rounded-3xl"
                    style="background-image: url('{{ asset('assets/images/lab.jpg') }}');">
                    <div class="h-full w-full flex flex-col items-end p-6 bg-gradient-to-t from-lime-400 to-transparent rounded-3xl">
                        <div class="mt-auto">
                            <h4 class="text-lg font-bold mb-2">
                                LuminoED Tantang Google Mengenai Smartboard!
                            </h4>
                            <p class="text-sm text-green-100">24 Juli 2025</p>
                        </div>
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
                        <div class="card text-center p-1">
                            <img src="{{ asset('images/LogoSDGs.png') }}" alt="Unsustainable Development Goals" class="h-full">
                        </div>
                        <div class="card text-center p-1">
                            <img src="{{ asset('/images/NoPoverty.png') }}" alt="No Poverty" class="h-full">
                        </div>
                        <div class="card text-center p-1">
                            <img src="{{ asset('/images/GoodHunger.png') }}" alt="Good Hunger" class="h-full">
                        </div>
                        <div class="card text-center p-1">
                            <img src="{{ asset('/images/GoodHealth.png') }}" alt="Good Health" class="h-full">
                        </div>
                        <div class="card text-center p-1">
                            <img src="{{ asset('/images/SDGs4-EducationQuality.png') }}" alt="Education Quality" class="h-full">
                        </div>
                        <div class="card text-center p-1">
                            <img src="{{ asset('/images/SDGs5-GenderEquality.png') }}" alt="Gender Equality" class="h-full">
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
                    {{-- <!-- Video Placeholder with Play Button -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition-transform duration-300 cursor-pointer">
                            <svg class="w-8 h-8 text-blue-600 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/>
                            </svg>
                        </div>
                    </div>
                    <!-- Blurred background overlay -->
                    <div class="absolute inset-0 bg-black bg-opacity-20 backdrop-blur-sm"></div> --}}
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/t8c9YG5FAsc?si=d8n_uDSrkm8dfp7D" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                <a href="#" class="bg-white px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200">
                    Daftar Online Sekarang
                </a>
                <a href="#konsultasi" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-gray-900 transition-colors duration-200">
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- Carousel JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.carousel-slide');
            const dots = document.querySelectorAll('.carousel-dot');
            const prevBtn = document.querySelector('.carousel-control.prev');
            const nextBtn = document.querySelector('.carousel-control.next');
            let currentSlide = 0;
            let interval;

            // Initialize carousel
            function initCarousel() {
                // Hide all slides initially
                slides.forEach(slide => {
                    slide.style.opacity = '0';
                    slide.style.display = 'none';
                });
                
                // Show the first slide
                slides[0].style.display = 'block';
                setTimeout(() => {
                    slides[0].style.opacity = '1';
                }, 10);
                
                // Start autoplay
                startAutoplay();
            }

            // Function to change slide
            function goToSlide(index) {
                // Hide current slide
                slides[currentSlide].style.opacity = '0';
                
                setTimeout(() => {
                    slides[currentSlide].style.display = 'none';
                    
                    // Update current slide index
                    currentSlide = index;
                    if (currentSlide < 0) currentSlide = slides.length - 1;
                    if (currentSlide >= slides.length) currentSlide = 0;
                    
                    // Show new slide
                    slides[currentSlide].style.display = 'block';
                    setTimeout(() => {
                        slides[currentSlide].style.opacity = '1';
                    }, 10);
                    
                    // Update dots
                    dots.forEach((dot, i) => {
                        dot.classList.toggle('active', i === currentSlide);
                    });
                }, 300); // Wait for fade out
            }

            // Previous slide
            function prevSlide() {
                goToSlide(currentSlide - 1);
            }

            // Next slide
            function nextSlide() {
                goToSlide(currentSlide + 1);
            }

            // Start autoplay
            function startAutoplay() {
                interval = setInterval(() => {
                    nextSlide();
                }, 5000); // Change slide every 5 seconds
            }

            // Stop autoplay
            function stopAutoplay() {
                clearInterval(interval);
            }

            // Event listeners
            prevBtn.addEventListener('click', () => {
                stopAutoplay();
                prevSlide();
            });

            nextBtn.addEventListener('click', () => {
                stopAutoplay();
                nextSlide();
            });

            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    stopAutoplay();
                    goToSlide(index);
                });
            });

            // Initialize carousel
            initCarousel();

            // Add styles for carousel
            // const style = document.createElement('style');
            // style.textContent = `
            //     .carousel-container {
            //         position: relative;
            //         overflow: hidden;
            //     }
            //     .carousel-slide {
            //         transition: opacity 0.3s ease;
            //     }
            //     .carousel-dot {
            //         width: 12px;
            //         height: 12px;
            //         border-radius: 50%;
            //         background-color: rgba(255, 255, 255, 0.5);
            //         border: 2px solid rgba(255, 255, 255, 0.7);
            //         cursor: pointer;
            //         transition: all 0.3s ease;
            //     }
            //     .carousel-dot.active {
            //         background-color: white;
            //         transform: scale(1.2);
            //     }
            //     .carousel-control {
            //         opacity: 0.7;
            //         transition: all 0.3s ease;
            //         cursor: pointer;
            //     }
            //     .carousel-control:hover {
            //         opacity: 1;
            //         transform: translateY(-50%) scale(1.1);
            //     }
            // `;
            // document.head.appendChild(style);
        });
    </script>
@endpush
