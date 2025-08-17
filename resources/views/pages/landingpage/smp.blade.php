@extends('layouts.landingpage')

@section('title', 'SMP - Cendekia Muda')

@section('content')
  <!-- Hero Section -->
  <section class="bg-blue-600 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-8 items-center">
        <div class="text-white">
          <h1 class="text-4xl md:text-5xl font-bold mb-6">SMP Cendekia Muda</h1>
          <p class="text-xl text-blue-100">Sekolah Menengah Pertama dengan Standar Internasional dan Nilai-Nilai Islam</p>
        </div>
        <div>
          <img src="{{ asset('images/smp.png') }}" alt="SMP Cendekia Muda" class="w-full rounded-lg shadow-xl">
        </div>
      </div>
    </div>
  </section>

  <!-- About SMP Section -->
  <section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Tentang SMP Cendekia Muda</h2>
        <p class="text-xl text-gray-600">Mempersiapkan generasi muda yang siap menghadapi tantangan global dengan tetap berpegang teguh pada nilai-nilai keislaman</p>
      </div>
      <div class="grid lg:grid-cols-2 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-8 h-full">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Visi Kami</h3>
          <p class="text-gray-600">Menjadi sekolah menengah pertama yang unggul dalam prestasi akademik dan karakter, mampu bersaing di tingkat nasional dan internasional dengan landasan iman dan taqwa.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 h-full">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Misi Kami</h3>
          <p class="text-gray-600">Menyelenggarakan pendidikan berkualitas tinggi, mengembangkan potensi akademik dan non-akademik siswa, membentuk karakter Islami, dan mempersiapkan siswa untuk melanjutkan ke jenjang pendidikan yang lebih tinggi.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Academic Programs Section -->
  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Program Akademik</h2>
        <p class="text-xl text-gray-600">Kurikulum komprehensif yang memadukan kurikulum nasional dengan standar internasional</p>
      </div>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <i class="fas fa-microscope text-blue-600 text-5xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">STEM Education</h3>
          <p class="text-gray-600">Program Science, Technology, Engineering, dan Mathematics dengan laboratorium lengkap dan praktikum intensif.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <i class="fas fa-globe text-blue-600 text-5xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">International Curriculum</h3>
          <p class="text-gray-600">Kurikulum berstandar internasional dengan pembelajaran berbasis Cambridge dan persiapan ujian internasional.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <i class="fas fa-quran text-blue-600 text-5xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Islamic Studies</h3>
          <p class="text-gray-600">Program studi Islam yang komprehensif meliputi Al-Qur'an, hadits, fiqh, akhlaq, dan sejarah Islam.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Facilities Section -->
  <section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Fasilitas Modern</h2>
        <p class="text-xl text-gray-600">Fasilitas lengkap untuk mendukung pembelajaran yang optimal</p>
      </div>
      <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="{{ asset('assets/images/smp-lab.jpg') }}" class="w-full h-48 object-cover" alt="Laboratorium">
          <div class="p-6">
            <h5 class="text-lg font-bold text-gray-900 mb-2">Laboratorium</h5>
            <p class="text-gray-600">Lab IPA, Bahasa, dan Komputer dengan peralatan modern.</p>
          </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="{{ asset('assets/images/smp-library.jpg') }}" class="w-full h-48 object-cover" alt="Perpustakaan">
          <div class="p-6">
            <h5 class="text-lg font-bold text-gray-900 mb-2">Perpustakaan Digital</h5>
            <p class="text-gray-600">Koleksi buku fisik dan digital dengan sistem otomasi.</p>
          </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="{{ asset('assets/images/smp-sports.jpg') }}" class="w-full h-48 object-cover" alt="Fasilitas Olahraga">
          <div class="p-6">
            <h5 class="text-lg font-bold text-gray-900 mb-2">Fasilitas Olahraga</h5>
            <p class="text-gray-600">Lapangan basket, voli, badminton, dan kolam renang.</p>
          </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="{{ asset('assets/images/smp-mosque.jpg') }}" class="w-full h-48 object-cover" alt="Masjid">
          <div class="p-6">
            <h5 class="text-lg font-bold text-gray-900 mb-2">Masjid</h5>
            <p class="text-gray-600">Masjid dengan kapasitas besar untuk kegiatan keagamaan.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Extracurricular Section -->
  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Program Pengembangan Diri</h2>
        <p class="text-xl text-gray-600">Berbagai kegiatan untuk mengembangkan potensi dan bakat siswa</p>
      </div>
      <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-8 h-full">
          <h3 class="text-xl font-bold text-gray-900 mb-4">
            <i class="fas fa-flask text-blue-600 mr-3"></i>Science Club
          </h3>
          <p class="text-gray-600">Olimpiade Sains, Penelitian Ilmiah, dan Kompetisi Robotik untuk mengasah kemampuan sains dan teknologi.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 h-full">
          <h3 class="text-xl font-bold text-gray-900 mb-4">
            <i class="fas fa-comments text-blue-600 mr-3"></i>Language Club
          </h3>
          <p class="text-gray-600">English Debate, Arabic Conversation, dan persiapan tes internasional seperti TOEFL dan IELTS.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 h-full">
          <h3 class="text-xl font-bold text-gray-900 mb-4">
            <i class="fas fa-palette text-blue-600 mr-3"></i>Arts & Culture
          </h3>
          <p class="text-gray-600">Seni musik, teater, tari tradisional, dan kaligrafi Arab untuk mengembangkan kreativitas.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 h-full">
          <h3 class="text-xl font-bold text-gray-900 mb-4">
            <i class="fas fa-running text-blue-600 mr-3"></i>Sports
          </h3>
          <p class="text-gray-600">Basket, voli, badminton, sepak bola, renang, dan martial arts untuk kebugaran fisik.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Teachers Section -->
  <section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Tenaga Pendidik Profesional</h2>
        <p class="text-xl text-gray-600">Guru-guru berkualitas dengan pengalaman mengajar yang luas</p>
      </div>
      <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="w-32 h-32 rounded-full overflow-hidden mx-auto mb-6">
            <img src="{{ asset('assets/images/smp-principal.jpg') }}" class="w-full h-full object-cover" alt="Kepala SMP">
          </div>
          <h4 class="text-xl font-bold text-gray-900 mb-2">Dr. Hj. Fatimah, M.Pd</h4>
          <p class="text-gray-500 mb-4">Kepala SMP</p>
          <p class="text-gray-600">Doktor Pendidikan dengan pengalaman 25 tahun dalam manajemen sekolah menengah.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="w-32 h-32 rounded-full overflow-hidden mx-auto mb-6">
            <img src="{{ asset('assets/images/smp-teacher1.jpg') }}" class="w-full h-full object-cover" alt="Guru IPA">
          </div>
          <h4 class="text-xl font-bold text-gray-900 mb-2">Pak Dr. Rahman, M.Si</h4>
          <p class="text-gray-500 mb-4">Koordinator STEM</p>
          <p class="text-gray-600">Ahli dalam bidang sains dan teknologi dengan publikasi internasional.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="w-32 h-32 rounded-full overflow-hidden mx-auto mb-6">
            <img src="{{ asset('assets/images/smp-teacher2.jpg') }}" class="w-full h-full object-cover" alt="Guru Bahasa">
          </div>
          <h4 class="text-xl font-bold text-gray-900 mb-2">Mrs. Sarah Johnson, M.Ed</h4>
          <p class="text-gray-500 mb-4">Native Speaker - English Teacher</p>
          <p class="text-gray-600">Guru native speaker dari Amerika dengan sertifikasi TESOL internasional.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Achievements Section -->
  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Prestasi Gemilang</h2>
        <p class="text-xl text-gray-600">Pencapaian luar biasa siswa SMP Cendekia Muda</p>
      </div>
      <div class="grid md:grid-cols-4 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <i class="fas fa-trophy text-yellow-500 text-5xl"></i>
          </div>
          <h4 class="text-xl font-bold text-blue-600 mb-2">Medali Emas</h4>
          <p class="font-semibold text-gray-900 mb-1">Olimpiade Sains Nasional</p>
          <small class="text-gray-500">Bidang Matematika 2023</small>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <i class="fas fa-medal text-yellow-500 text-5xl"></i>
          </div>
          <h4 class="text-xl font-bold text-blue-600 mb-2">Juara 1</h4>
          <p class="font-semibold text-gray-900 mb-1">Kompetisi Robotik</p>
          <small class="text-gray-500">Tingkat Asia Tenggara 2023</small>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <i class="fas fa-star text-yellow-500 text-5xl"></i>
          </div>
          <h4 class="text-xl font-bold text-blue-600 mb-2">Best Speaker</h4>
          <p class="font-semibold text-gray-900 mb-1">International Debate</p>
          <small class="text-gray-500">Cambridge Competition 2023</small>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <i class="fas fa-award text-yellow-500 text-5xl"></i>
          </div>
          <h4 class="text-xl font-bold text-blue-600 mb-2">Gold Medal</h4>
          <p class="font-semibold text-gray-900 mb-1">Science Fair</p>
          <small class="text-gray-500">International Level 2023</small>
        </div>
      </div>
    </div>
  </section>

  <!-- Registration Section -->
  <section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Bergabunglah dengan SMP Cendekia Muda</h2>
          <p class="text-xl text-gray-600 mb-8">Wujudkan impian pendidikan berkualitas tinggi dengan nuansa Islami</p>
          <ul class="space-y-4 mb-8">
            <li class="flex items-center"><i class="fas fa-check-circle text-blue-600 mr-3"></i> <span>Kurikulum internasional terintegrasi</span></li>
            <li class="flex items-center"><i class="fas fa-check-circle text-blue-600 mr-3"></i> <span>Program STEM unggulan</span></li>
            <li class="flex items-center"><i class="fas fa-check-circle text-blue-600 mr-3"></i> <span>Pembelajaran trilingual</span></li>
            <li class="flex items-center"><i class="fas fa-check-circle text-blue-600 mr-3"></i> <span>Fasilitas modern dan lengkap</span></li>
          </ul>
          <a href="" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">Daftar Sekarang</a>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8">
          <h3 class="text-2xl font-bold text-gray-900 mb-6">Informasi Pendaftaran SMP</h3>
          <div class="space-y-6">
            <div>
              <h5 class="flex items-center text-lg font-semibold text-gray-900 mb-2">
                <i class="fas fa-graduation-cap text-blue-600 mr-3"></i>Jenjang
              </h5>
              <p class="text-gray-600">Kelas 7, 8, dan 9 (usia 12-15 tahun)</p>
            </div>
            <div>
              <h5 class="flex items-center text-lg font-semibold text-gray-900 mb-2">
                <i class="fas fa-clock text-blue-600 mr-3"></i>Jadwal
              </h5>
              <p class="text-gray-600">Senin - Jumat: 07.00 - 15.30 WIB</p>
            </div>
            <div>
              <h5 class="flex items-center text-lg font-semibold text-gray-900 mb-2">
                <i class="fas fa-calendar-alt text-blue-600 mr-3"></i>Pendaftaran
              </h5>
              <p class="text-gray-600">Gelombang 1: Oktober - Desember 2023<br>Gelombang 2: Januari - Maret 2024</p>
            </div>
            <div>
              <h5 class="flex items-center text-lg font-semibold text-gray-900 mb-2">
                <i class="fas fa-phone-alt text-blue-600 mr-3"></i>Kontak
              </h5>
              <p class="text-gray-600">Telepon: (021) 1234-5680<br>Email: smp@cendekiamuda.ac.id</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Pertanyaan yang Sering Diajukan</h2>
        <p class="text-xl text-gray-600">Informasi lebih lanjut tentang SMP Cendekia Muda</p>
      </div>
      <div class="space-y-4">
        <div class="bg-white rounded-lg shadow-lg border">
          <button class="w-full text-left p-6 focus:outline-none" onclick="toggleAccordion('faq1')">
            <div class="flex justify-between items-center">
              <h3 class="text-lg font-semibold text-gray-900">Apa keunggulan kurikulum di SMP Cendekia Muda?</h3>
              <i class="fas fa-chevron-down text-gray-500"></i>
            </div>
          </button>
          <div id="faq1" class="hidden p-6 pt-0">
            <p class="text-gray-600">SMP Cendekia Muda menggunakan kurikulum nasional yang diperkaya dengan standar internasional Cambridge. Kami juga mengintegrasikan program STEM, pembelajaran trilingual (Indonesia, Inggris, Arab), dan pendidikan karakter Islami.</p>
          </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-lg border">
          <button class="w-full text-left p-6 focus:outline-none" onclick="toggleAccordion('faq2')">
            <div class="flex justify-between items-center">
              <h3 class="text-lg font-semibold text-gray-900">Bagaimana persiapan siswa untuk melanjutkan ke SMA?</h3>
              <i class="fas fa-chevron-down text-gray-500"></i>
            </div>
          </button>
          <div id="faq2" class="hidden p-6 pt-0">
            <p class="text-gray-600">Kami mempersiapkan siswa dengan program intensif untuk ujian masuk SMA unggulan, termasuk bimbingan khusus, try out berkala, dan konseling akademik. Lulusan kami banyak yang diterima di SMA favorit nasional dan internasional.</p>
          </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-lg border">
          <button class="w-full text-left p-6 focus:outline-none" onclick="toggleAccordion('faq3')">
            <div class="flex justify-between items-center">
              <h3 class="text-lg font-semibold text-gray-900">Apakah ada program beasiswa?</h3>
              <i class="fas fa-chevron-down text-gray-500"></i>
            </div>
          </button>
          <div id="faq3" class="hidden p-6 pt-0">
            <p class="text-gray-600">Ya, kami menyediakan program beasiswa prestasi akademik, beasiswa atlet berprestasi, dan beasiswa untuk siswa kurang mampu. Seleksi beasiswa dilakukan melalui tes akademik dan wawancara.</p>
          </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-lg border">
          <button class="w-full text-left p-6 focus:outline-none" onclick="toggleAccordion('faq4')">
            <div class="flex justify-between items-center">
              <h3 class="text-lg font-semibold text-gray-900">Bagaimana sistem evaluasi dan penilaian?</h3>
              <i class="fas fa-chevron-down text-gray-500"></i>
            </div>
          </button>
          <div id="faq4" class="hidden p-6 pt-0">
            <p class="text-gray-600">Kami menerapkan sistem penilaian holistik yang mencakup aspek kognitif, afektif, dan psikomotorik. Evaluasi dilakukan melalui ujian tertulis, praktikum, proyek, presentasi, dan portfolio dengan menggunakan sistem digital untuk monitoring perkembangan siswa.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    function toggleAccordion(id) {
      const element = document.getElementById(id);
      element.classList.toggle('hidden');
    }
  </script>
@endsection
