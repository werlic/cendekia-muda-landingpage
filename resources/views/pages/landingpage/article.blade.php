@extends('layouts.landingpage')

@section('title', $article['title'] ?? 'Article - Cendekia Muda')
@section('meta_description', $article['excerpt'] ?? 'Read the latest news and articles from Cendekia Muda')

@push('styles')
<style>
    .article-content {
        line-height: 1.8;
    }
    
    .article-content p {
        margin-bottom: 1.5rem;
    }
    
    .article-content h1, .article-content h2, .article-content h3 {
        margin-top: 2rem;
        margin-bottom: 1rem;
        font-weight: 600;
    }
    
    .social-share-btn {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        transition: transform 0.2s;
    }
    
    .social-share-btn:hover {
        transform: scale(1.1);
    }
    
    .breadcrumb-arrow {
        margin: 0 0.5rem;
        color: #9CA3AF;
    }
</style>
@endpush

@section('content')
@if($article)
<div class="min-h-screen bg-gray-50">
    <!-- Breadcrumb -->
    <div class="bg-white border-b">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="flex items-center text-sm">
                <a href="{{ route('home') }}" class="text-primary-600 hover:text-primary-800">Home</a>
                <span class="breadcrumb-arrow">></span>
                <a href="{{ route('articles') }}" class="text-primary-600 hover:text-primary-800">Publication/Article</a>
                <span class="breadcrumb-arrow">></span>
                <span class="text-gray-500">{{ isset($article['category']) ? $article['category'] : 'Berita' }}</span>
                <span class="breadcrumb-arrow">></span>
                <span class="text-gray-900">{{ isset($article['title']) ? Str::limit($article['title'], 50) : 'Article' }}</span>
            </nav>
        </div>
    </div>

    <!-- Article Content -->
    <article class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Hero Image -->
        <div class="mb-8">
            <img 
                src="{{ isset($article['image']) ? asset($article['image']) : asset('images/education-back-to-school.png') }}" 
                alt="{{ $article['title'] ?? 'Article Image' }}"
                class="w-full h-64 md:h-96 object-cover rounded-lg shadow-lg"
            >
        </div>

        <!-- Article Header -->
        <header class="mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                {{ $article['title'] ?? 'Langkah Pertama Menuju Masa Depan: Freshmen Camp 2025 di SPN Polda Jabar' }}
            </h1>
            
            <!-- Author and Meta Information -->
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-primary-600 rounded-full flex items-center justify-center">
                            <span class="text-white text-sm font-semibold">
                                {{ substr(($article['author'] ?? 'HUMAS CM'), 0, 1) }}
                            </span>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">{{ $article['author'] ?? 'HUMAS CM' }}</p>
                        </div>
                    </div>
                    <span class="text-gray-300">-</span>
                    <p class="text-sm text-gray-600">{{ $article['date'] ?? '05 Agustus 2025' }}</p>
                </div>
                
                <!-- Social Share -->
                <div class="flex items-center space-x-2">
                    <button class="social-share-btn bg-blue-600" onclick="shareToFacebook()" title="Share to Facebook">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </button>
                    <button class="social-share-btn bg-sky-500" onclick="shareToTwitter()" title="Share to Twitter">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </button>
                    <button class="social-share-btn bg-green-600" onclick="shareToWhatsApp()" title="Share to WhatsApp">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.087z"/>
                        </svg>
                    </button>
                    <button class="social-share-btn bg-blue-700" onclick="copyToClipboard()" title="Copy Link">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        <!-- Article Content -->
        <div class="article-content text-gray-700 text-lg leading-relaxed">
            @if(isset($article['content']))
                {!! $article['content'] !!}
            @else
                <p class="text-justify">
                    Langkah-langkah kecil mereka hari ini bukan sekadar gerakan fisik tetapi awal dari sebuah perjalanan besar menuju kedewasaan, tanggung jawab, dan kepemimpinan.
                </p>
                
                <p class="text-justify">
                    Freshmen Camp 2025 dari SMA Islam Cendekia Muda, salah satu SMA terbaik yang mengintegrasikan kecerdasan intelektual, spiritual, dan emosional, resmi dimulai dan dilaksanakan di tempat yang luar biasa: Sekolah Polisi Negara (SPN) Polda Jawa Barat. Tempat ini menjadi simbol kedisiplinan dan pembentukan karakter, sejalan dengan misi besar sekolah dalam mencetak generasi unggul.
                </p>
                
                <p class="text-justify">
                    Kegiatan ini bukan hanya orientasi biasa. Di sinilah nilai-nilai ukhuwah, integritas, dan kedekatan mulai terbentuk. Para siswa dikenalkan pada budaya sekolah, nilai-nilai Islam, serta pentingnya menjadi pribadi yang bertanggung jawab dan berjiwa kepemimpinan sejak dini.
                </p>
                
                <p class="text-justify">
                    Sebagai salah satu lembaga pendidikan unggulaan, SMA Islam Cendekia Muda terus berkomitmen melahirkan insan berilmu, berakhlak, dan siap menjadi pemimpin masa depan yang membawa perubahan.
                </p>
                
                <p class="italic text-primary-700 font-medium">
                    "Setiap awal adalah ladang harapan. Semoga langkah ini menjadi awal dari kebaikkan dan keberukahan."
                </p>
                
                <p class="text-justify">
                    Selamat datang para penimba ilmu di rumah kedisiplinan dan pembentukan karakter. Mari tumbuh bersama menjadi generasi masa depan yang tangguh, dan berakhlak mulia — bersama SMA Islam Cendekia Muda, sekolah terbaik pilihan masa depan.
                </p>
            @endif
        </div>

        <!-- Article Footer -->
        <div class="mt-12 pt-8 border-t border-gray-200">
            <div class="text-sm text-gray-500">
                <p>{{ $article['date'] ?? '05 Agustus 2025' }} | Penulis: {{ $article['author'] ?? 'Hilal Ladjiyar (Author)' }}</p>
            </div>
        </div>
    </article>

    <!-- Related Articles Section -->
    <section class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Ikuti kabar dan keseruan terbaru di Sekolah Islam Cendekia Muda</h2>
                <p class="text-gray-600">Temukan pengalaman terbaik menjadi #SahabatCendekiaMuda</p>
            </div>
            
            <!-- Related Articles Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <!-- Article 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="relative">
                        <img src="{{ asset('images/Journal1.png') }}" alt="Hafal 30 Juz Siswi SMP" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Prestasi</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Hafal 30 Juz Siswi SMP Merubah Dunia Pendidikan</h3>
                        <p class="text-gray-600 text-sm mb-4">Mari bersama menjadi generasi Qur'ani yang unggul dalam pendidikan dan akhlak.</p>
                        <div class="text-xs text-gray-500">
                            <span>03 Apr 2025</span>
                        </div>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="relative">
                        <img src="{{ asset('images/Journal2.png') }}" alt="Juara Renang Kelas Dunia" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Olahraga</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Juara Renang Kelas Dunia! Cendekia Muda Solutanya</h3>
                        <p class="text-gray-600 text-sm mb-4">Prestasi membanggakan di kancah internasional dari siswa berprestasi.</p>
                        <div class="text-xs text-gray-500">
                            <span>08 Apr 2025</span>
                        </div>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="relative">
                        <img src="{{ asset('images/Journal3.png') }}" alt="Pengajian Bulanan YLP" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Kegiatan</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Pengajian Bulanan YLP Merubah Mindset Guru!</h3>
                        <p class="text-gray-600 text-sm mb-4">Program pengembangan spiritual dan profesional untuk tenaga pendidik.</p>
                        <div class="text-xs text-gray-500">
                            <span>12 Apr 2025</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Madinah Immersion Program -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-800 rounded-xl p-8 text-center">
                <div class="max-w-4xl mx-auto">
                    <h3 class="text-white text-2xl font-bold mb-4">#SahabatCendekiaMuda</h3>
                    <p class="text-blue-100 mb-8">Ikuti kabar dan keseruan terbaru di Sekolah Islam Cendekia Muda. Temukan pengalaman terbaik menjadi #SahabatCendekiaMuda</p>
                    
                    <!-- Madinah Immersion Cards -->
                    <div class="grid grid-cols-2 md:grid-cols-6 gap-4">
                        @for($i = 1; $i <= 6; $i++)
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg p-4 text-center">
                            <div class="w-16 h-16 mx-auto mb-3 bg-white bg-opacity-30 rounded-lg flex items-center justify-center">
                                <img src="{{ asset('images/smp.png') }}" alt="Madinah Immersion" class="w-10 h-10 object-contain">
                            </div>
                            <h4 class="text-white text-sm font-semibold mb-1">Madinah Immersion</h4>
                            <p class="text-blue-100 text-xs">SMA Islam Cendekia Muda</p>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@else
<div class="min-h-screen bg-gray-50 flex items-center justify-center">
    <div class="max-w-md mx-auto text-center px-4">
        <div class="mb-8">
            <svg class="mx-auto h-24 w-24 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
        </div>
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Article Not Found</h1>
        <p class="text-gray-600 mb-8">The article you're looking for doesn't exist or has been removed.</p>
        <a href="{{ route('articles') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 transition-colors duration-200">
            Back to Articles
        </a>
    </div>
</div>
@endif

@push('scripts')
<script>
function shareToFacebook() {
    const url = encodeURIComponent(window.location.href);
    const title = encodeURIComponent(document.title);
    window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}&t=${title}`, '_blank', 'width=600,height=400');
}

function shareToTwitter() {
    const url = encodeURIComponent(window.location.href);
    const title = encodeURIComponent(document.title);
    window.open(`https://twitter.com/intent/tweet?url=${url}&text=${title}`, '_blank', 'width=600,height=400');
}

function shareToWhatsApp() {
    const url = encodeURIComponent(window.location.href);
    const title = encodeURIComponent(document.title);
    window.open(`https://wa.me/?text=${title} ${url}`, '_blank');
}

function copyToClipboard() {
    navigator.clipboard.writeText(window.location.href).then(function() {
        alert('Link berhasil disalin!');
    });
}
</script>
@endpush

@endsection
