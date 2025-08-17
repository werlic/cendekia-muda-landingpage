@extends('layouts.landingpage')

@section('title', 'Publikasi - Cendekia Muda')

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
                <span class="text-gray-900 font-medium">Publikasi</span>
            </nav>
        </div>
    </div>

    <!-- Header Section -->
    <div class="bg-gradient-to-r from-primary-600 to-primary-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Publikasi Ilmiah</h1>
                <p class="text-xl text-primary-100 max-w-3xl mx-auto">
                    Kumpulan karya ilmiah, penelitian, dan publikasi dari SMA Islam Cendekia Muda
                </p>
            </div>
        </div>
    </div>

    <!-- Filter Tabs -->
    <div class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex space-x-8 py-4">
                <button class="text-primary-600 border-b-2 border-primary-600 pb-2 font-medium">Semua</button>
                <button class="text-gray-500 hover:text-primary-600 pb-2 font-medium">Jurnal</button>
                <button class="text-gray-500 hover:text-primary-600 pb-2 font-medium">Penelitian</button>
                <button class="text-gray-500 hover:text-primary-600 pb-2 font-medium">Buku Panduan</button>
            </div>
        </div>
    </div>

    <!-- Publications Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($publications as $publication)
            <article class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                <!-- Publication Image -->
                <div class="aspect-video bg-gray-200 relative overflow-hidden">
                    <img src="{{ asset($publication['image']) }}" 
                         alt="{{ $publication['title'] }}" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    <div class="absolute top-4 left-4">
                        <span class="bg-primary-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                            {{ $publication['category'] }}
                        </span>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="bg-white bg-opacity-90 text-gray-700 px-2 py-1 rounded text-xs">
                            <i class="fas fa-download mr-1"></i>PDF
                        </span>
                    </div>
                </div>

                <!-- Publication Content -->
                <div class="p-6">
                    <!-- Meta Info -->
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <div class="flex items-center mr-4">
                            <i class="far fa-user mr-1"></i>
                            {{ $publication['author'] }}
                        </div>
                        <div class="flex items-center">
                            <i class="far fa-calendar mr-1"></i>
                            {{ $publication['date'] }}
                        </div>
                    </div>

                    <!-- Title -->
                    <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2">
                        <a href="{{ route('publication', $publication['slug']) }}" 
                           class="hover:text-primary-600 transition-colors">
                            {{ $publication['title'] }}
                        </a>
                    </h3>

                    <!-- Excerpt -->
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        {{ $publication['excerpt'] }}
                    </p>

                    <!-- Actions -->
                    <div class="flex justify-between items-center pt-4 border-t">
                        <a href="{{ route('publication', $publication['slug']) }}" 
                           class="text-primary-600 hover:text-primary-700 font-medium text-sm">
                            Baca Selengkapnya →
                        </a>
                        <a href="{{ $publication['download_url'] }}" 
                           class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                            <i class="fas fa-download mr-1"></i>
                            Download
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>

        @if(count($publications) === 0)
        <div class="text-center py-12">
            <div class="text-gray-400 mb-4">
                <i class="fas fa-file-alt text-6xl"></i>
            </div>
            <h3 class="text-xl font-medium text-gray-900 mb-2">Belum Ada Publikasi</h3>
            <p class="text-gray-500">Publikasi akan segera tersedia. Silakan kembali lagi nanti.</p>
        </div>
        @endif
    </div>

    <!-- CTA Section -->
    <div class="bg-primary-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Ingin Berkontribusi?</h2>
            <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                Kami terbuka untuk kolaborasi penelitian dan publikasi ilmiah. Hubungi tim akademik kami untuk informasi lebih lanjut.
            </p>
            <a href="{{ route('kontak') }}" 
               class="inline-flex items-center px-8 py-4 bg-primary-600 hover:bg-primary-700 text-white font-semibold rounded-xl transition-colors">
                <i class="far fa-envelope mr-2"></i>
                Hubungi Kami
            </a>
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
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endpush
