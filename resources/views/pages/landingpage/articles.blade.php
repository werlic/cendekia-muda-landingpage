@extends('layouts.landingpage')

@section('title', 'Articles - Cendekia Muda')
@section('meta_description', 'Read the latest news and articles from Cendekia Muda - A Universal Islamic School')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-primary-600 to-primary-800 py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Publication & Articles</h1>
            <p class="text-xl text-primary-100 mb-8">Temukan berita terbaru dan artikel inspiratif dari Sekolah Islam Cendekia Muda</p>
        </div>
    </section>

    <!-- Articles Grid -->
    <section class="py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($articles as $article)
                <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="relative">
                        <img 
                            src="{{ asset($article['image']) }}" 
                            alt="{{ $article['title'] }}"
                            class="w-full h-48 object-cover"
                        >
                        <div class="absolute top-4 left-4">
                            <span class="
                                @if($article['category'] === 'Prestasi') bg-green-100 text-green-800
                                @elseif($article['category'] === 'Olahraga') bg-blue-100 text-blue-800
                                @elseif($article['category'] === 'Kegiatan') bg-purple-100 text-purple-800
                                @else bg-gray-100 text-gray-800
                                @endif
                                text-xs font-medium px-2.5 py-0.5 rounded-full
                            ">
                                {{ $article['category'] }}
                            </span>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-900 mb-3 line-clamp-2">
                            <a href="{{ route('article', $article['slug']) }}" class="hover:text-primary-600 transition-colors">
                                {{ $article['title'] }}
                            </a>
                        </h2>
                        
                        <p class="text-gray-600 mb-4 line-clamp-3">{{ $article['excerpt'] }}</p>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <div class="w-6 h-6 bg-primary-600 rounded-full flex items-center justify-center">
                                    <span class="text-white text-xs font-semibold">
                                        {{ substr($article['author'], 0, 1) }}
                                    </span>
                                </div>
                                <span class="text-sm text-gray-600">{{ $article['author'] }}</span>
                            </div>
                            <span class="text-sm text-gray-500">{{ $article['date'] }}</span>
                        </div>
                        
                        <div class="mt-4">
                            <a 
                                href="{{ route('article', $article['slug']) }}" 
                                class="text-primary-600 hover:text-primary-800 font-medium text-sm inline-flex items-center"
                            >
                                Baca selengkapnya
                                <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>

            <!-- Pagination (if needed) -->
            <div class="mt-12 flex justify-center">
                <nav class="flex items-center space-x-2">
                    <button class="px-3 py-2 text-sm text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-50">
                        Previous
                    </button>
                    <button class="px-3 py-2 text-sm text-white bg-primary-600 border border-primary-600 rounded-md">
                        1
                    </button>
                    <button class="px-3 py-2 text-sm text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-50">
                        2
                    </button>
                    <button class="px-3 py-2 text-sm text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-50">
                        3
                    </button>
                    <button class="px-3 py-2 text-sm text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-50">
                        Next
                    </button>
                </nav>
            </div>
        </div>
    </section>
</div>

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
@endsection
