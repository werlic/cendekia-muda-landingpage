@extends('layouts.landingpage')

@section('title', $publication['title'] . ' - Cendekia Muda')

@section('content')
<main class="min-h-screen bg-gray-50">
    <!-- Breadcrumb -->
    <div class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="flex items-center space-x-2 text-sm text-gray-500">
                <a href="{{ route('home') }}" class="hover:text-primary-600">Beranda</a>
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <a href="{{ route('publications') }}" class="hover:text-primary-600">Publikasi</a>
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-900 font-medium">{{ $publication['category'] }}</span>
            </nav>
        </div>
    </div>

    <!-- Publication Header -->
    <div class="bg-white py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Category Badge -->
            <div class="mb-4">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-primary-100 text-primary-800">
                    <i class="fas fa-file-alt mr-2"></i>
                    {{ $publication['category'] }}
                </span>
            </div>

            <!-- Title -->
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                {{ $publication['title'] }}
            </h1>

            <!-- Meta Information -->
            <div class="flex flex-wrap items-center text-gray-600 mb-6 space-x-6">
                <div class="flex items-center">
                    <i class="far fa-user mr-2"></i>
                    <span class="font-medium">{{ $publication['author'] }}</span>
                </div>
                <div class="flex items-center">
                    <i class="far fa-calendar mr-2"></i>
                    <span>{{ $publication['date'] }}</span>
                </div>
                <div class="flex items-center">
                    <i class="far fa-clock mr-2"></i>
                    <span>5 menit baca</span>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 mb-8">
                <a href="{{ $publication['download_url'] }}" 
                   class="inline-flex items-center px-6 py-3 bg-primary-600 hover:bg-primary-700 text-white font-semibold rounded-lg transition-colors">
                    <i class="fas fa-download mr-2"></i>
                    Download PDF
                </a>
                <button class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-colors">
                    <i class="fas fa-share-alt mr-2"></i>
                    Share
                </button>
                <button class="inline-flex items-center px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold rounded-lg transition-colors">
                    <i class="far fa-bookmark mr-2"></i>
                    Simpan
                </button>
            </div>
        </div>
    </div>

    <!-- Publication Image -->
    <div class="bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="aspect-video bg-gray-200 rounded-xl overflow-hidden mb-8">
                <img src="{{ asset($publication['image']) }}" 
                     alt="{{ $publication['title'] }}" 
                     class="w-full h-full object-cover">
            </div>
        </div>
    </div>

    <!-- Publication Content -->
    <div class="bg-white pb-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Abstract/Excerpt -->
            <div class="bg-gray-50 rounded-xl p-6 mb-8">
                <h2 class="text-xl font-bold text-gray-900 mb-3">Abstract</h2>
                <p class="text-gray-700 leading-relaxed">
                    {{ $publication['excerpt'] }}
                </p>
            </div>

            <!-- Main Content -->
            <div class="prose prose-lg max-w-none">
                {!! $publication['content'] !!}
            </div>

            <!-- Publication Info -->
            <div class="mt-12 p-6 bg-gradient-to-r from-primary-50 to-blue-50 rounded-xl">
                <h3 class="text-lg font-bold text-gray-900 mb-4">Informasi Publikasi</h3>
                <div class="grid md:grid-cols-2 gap-4 text-sm">
                    <div>
                        <span class="font-medium text-gray-700">Penulis:</span>
                        <span class="text-gray-600 ml-2">{{ $publication['author'] }}</span>
                    </div>
                    <div>
                        <span class="font-medium text-gray-700">Tanggal Publikasi:</span>
                        <span class="text-gray-600 ml-2">{{ $publication['date'] }}</span>
                    </div>
                    <div>
                        <span class="font-medium text-gray-700">Kategori:</span>
                        <span class="text-gray-600 ml-2">{{ $publication['category'] }}</span>
                    </div>
                    <div>
                        <span class="font-medium text-gray-700">Format:</span>
                        <span class="text-gray-600 ml-2">PDF</span>
                    </div>
                </div>
            </div>

            <!-- Citation -->
            <div class="mt-8 p-6 bg-gray-100 rounded-xl">
                <h3 class="text-lg font-bold text-gray-900 mb-3">
                    <i class="fas fa-quote-left mr-2"></i>
                    Cara Mengutip
                </h3>
                <div class="bg-white p-4 rounded-lg font-mono text-sm text-gray-700">
                    {{ $publication['author'] }}. (2025). {{ $publication['title'] }}. SMA Islam Cendekia Muda.
                </div>
                <button class="mt-3 text-primary-600 hover:text-primary-700 text-sm font-medium" onclick="navigator.clipboard.writeText('{{ $publication['author'] }}. (2025). {{ $publication['title'] }}. SMA Islam Cendekia Muda.')">
                    <i class="far fa-copy mr-1"></i>
                    Salin Citasi
                </button>
            </div>
        </div>
    </div>

    <!-- Related Publications -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl md:text-3xl font-bold text-center text-gray-900 mb-12">Publikasi Terkait</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Sample related publications -->
                <article class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-video bg-gray-200 relative overflow-hidden">
                        <img src="{{ asset('images/Journal1.png') }}" alt="Related Publication" 
                             class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="bg-primary-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                                Penelitian
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-2">
                            Efektivitas Pembelajaran Blended Learning
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                            Analisis mendalam tentang efektivitas pembelajaran campuran...
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-gray-500">Dr. Siti Aminah</span>
                            <a href="#" class="text-primary-600 hover:text-primary-700 text-sm font-medium">
                                Baca →
                            </a>
                        </div>
                    </div>
                </article>

                <article class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-video bg-gray-200 relative overflow-hidden">
                        <img src="{{ asset('images/Journal2.png') }}" alt="Related Publication" 
                             class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="bg-primary-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                                Buku Panduan
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-2">
                            Panduan Pembelajaran Tahfidz
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                            Metodologi pembelajaran tahfidz yang efektif untuk sekolah...
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-gray-500">Ustadz Ahmad</span>
                            <a href="#" class="text-primary-600 hover:text-primary-700 text-sm font-medium">
                                Baca →
                            </a>
                        </div>
                    </div>
                </article>

                <article class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="aspect-video bg-gray-200 relative overflow-hidden">
                        <img src="{{ asset('images/Journal3.png') }}" alt="Related Publication" 
                             class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="bg-primary-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                                Jurnal
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-2">
                            Integrasi Nilai Islam dalam Pendidikan
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                            Penelitian tentang implementasi nilai-nilai Islam...
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-gray-500">Tim Peneliti</span>
                            <a href="#" class="text-primary-600 hover:text-primary-700 text-sm font-medium">
                                Baca →
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('publications') }}" 
                   class="inline-flex items-center px-8 py-4 bg-primary-600 hover:bg-primary-700 text-white font-semibold rounded-xl transition-colors">
                    Lihat Semua Publikasi
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</main>
@endsection

@push('styles')
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .prose {
        max-width: none;
    }
    .prose p {
        margin-bottom: 1.5rem;
        line-height: 1.8;
    }
    .prose h2 {
        margin-top: 2rem;
        margin-bottom: 1rem;
        font-size: 1.5rem;
        font-weight: 700;
        color: #1f2937;
    }
    .prose h3 {
        margin-top: 1.5rem;
        margin-bottom: 0.75rem;
        font-size: 1.25rem;
        font-weight: 600;
        color: #1f2937;
    }
</style>
@endpush
