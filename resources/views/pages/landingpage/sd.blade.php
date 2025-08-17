@extends('layouts.landingpage')

@section('title', 'SD - Cendekia Muda')

@section('content')
  <!-- Hero Section -->
  <section class="bg-blue-600 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-8 items-center">
        <div class="text-white">
          <h1 class="text-4xl md:text-5xl font-bold mb-6">SD Cendekia Muda</h1>
          <p class="text-xl text-blue-100">Sekolah Dasar Unggulan dengan Pendidikan Holistik untuk Membentuk Karakter Unggul</p>
        </div>
        <div>
          <img src="{{ asset('assets/images/sd-hero.jpg') }}" alt="SD Cendekia Muda" class="w-full rounded-lg shadow-xl">
        </div>
      </div>
    </div>
  </section>

  <!-- About SD Section -->
  <section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Tentang SD Cendekia Muda</h2>
        <p class="text-xl text-gray-600">Memberikan pendidikan dasar yang berkualitas dengan pendekatan pembelajaran yang inovatif dan berbasis karakter</p>
      </div>
      <div class="grid lg:grid-cols-2 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-8 h-full">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Visi Kami</h3>
          <p class="text-gray-600">Menjadi sekolah dasar yang unggul dalam prestasi akademik dan non-akademik, serta berperan aktif dalam membentuk generasi yang beriman, bertaqwa, cerdas, dan berakhlak mulia.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 h-full">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Misi Kami</h3>
          <p class="text-gray-600">Menyelenggarakan pendidikan yang berkualitas, mengintegrasikan nilai-nilai Islam dalam pembelajaran, mengembangkan potensi siswa secara optimal, dan menciptakan lingkungan sekolah yang kondusif untuk belajar.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Curriculum Section -->
  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Kurikulum & Program Unggulan</h2>
        <p class="text-xl text-gray-600">Kurikulum terintegrasi yang menggabungkan kurikulum nasional dengan nilai-nilai Islam</p>
      </div>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <i class="fas fa-book text-blue-600 text-5xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Kurikulum Merdeka</h3>
          <p class="text-gray-600">Implementasi kurikulum merdeka yang memberikan fleksibilitas dalam pembelajaran dan mengembangkan kreativitas siswa.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <i class="fas fa-pray text-blue-600 text-5xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Pendidikan Agama</h3>
          <p class="text-gray-600">Program tahfidz Al-Qur'an, pendidikan akhlak, dan praktik ibadah yang terintegrasi dalam kehidupan sehari-hari.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <i class="fas fa-language text-blue-600 text-5xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Bahasa Internasional</h3>
          <p class="text-gray-600">Program bilingual dengan penguatan bahasa Inggris dan bahasa Arab sebagai bahasa pengantar dalam beberapa mata pelajaran.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Activities Section -->
  <section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Kegiatan Ekstrakurikuler</h2>
        <p class="text-xl text-gray-600">Berbagai kegiatan untuk mengembangkan bakat dan minat siswa</p>
      </div>
      <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="{{ asset('assets/images/sd-robotics.jpg') }}" class="w-full h-48 object-cover" alt="Robotik">
          <div class="p-6">
            <h5 class="text-lg font-bold text-gray-900 mb-2">Robotik</h5>
            <p class="text-gray-600">Mengembangkan kemampuan STEM dan logika pemrograman.</p>
          </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="{{ asset('assets/images/sd-arts.jpg') }}" class="w-full h-48 object-cover" alt="Seni & Musik">
          <div class="p-6">
            <h5 class="text-lg font-bold text-gray-900 mb-2">Seni & Musik</h5>
            <p class="text-gray-600">Mengasah kreativitas melalui seni rupa dan musik.</p>
          </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="{{ asset('assets/images/sd-sports.jpg') }}" class="w-full h-48 object-cover" alt="Olahraga">
          <div class="p-6">
            <h5 class="text-lg font-bold text-gray-900 mb-2">Olahraga</h5>
            <p class="text-gray-600">Mengembangkan fisik dan sportivitas siswa.</p>
          </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="{{ asset('assets/images/sd-quran.jpg') }}" class="w-full h-48 object-cover" alt="Tahfidz">
          <div class="p-6">
            <h5 class="text-lg font-bold text-gray-900 mb-2">Tahfidz Al-Qur'an</h5>
            <p class="text-gray-600">Program menghafal Al-Qur'an dengan metode yang menyenangkan.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Teachers Section -->
  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Tenaga Pendidik</h2>
        <p class="text-xl text-gray-600">Guru-guru profesional dan berpengalaman</p>
      </div>
      <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="w-32 h-32 rounded-full overflow-hidden mx-auto mb-6">
            <img src="{{ asset('assets/images/sd-teacher1.jpg') }}" class="w-full h-full object-cover" alt="Kepala SD">
          </div>
          <h4 class="text-xl font-bold text-gray-900 mb-2">Pak Ahmad Fauzi, S.Pd., M.Ed</h4>
          <p class="text-gray-500 mb-4">Kepala SD</p>
          <p class="text-gray-600">Berpengalaman 20 tahun dalam pendidikan dasar dengan spesialisasi manajemen pendidikan.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="w-32 h-32 rounded-full overflow-hidden mx-auto mb-6">
            <img src="{{ asset('assets/images/sd-teacher2.jpg') }}" class="w-full h-full object-cover" alt="Guru Kelas">
          </div>
          <h4 class="text-xl font-bold text-gray-900 mb-2">Ibu Sari Indah, S.Pd</h4>
          <p class="text-gray-500 mb-4">Wali Kelas 1</p>
          <p class="text-gray-600">Spesialis pendidikan kelas rendah dengan pendekatan pembelajaran yang menyenangkan.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="w-32 h-32 rounded-full overflow-hidden mx-auto mb-6">
            <img src="{{ asset('assets/images/sd-teacher3.jpg') }}" class="w-full h-full object-cover" alt="Guru Agama">
          </div>
          <h4 class="text-xl font-bold text-gray-900 mb-2">Ustadz Bayu Santoso, Lc</h4>
          <p class="text-gray-500 mb-4">Guru Agama Islam</p>
          <p class="text-gray-600">Alumni Al-Azhar dengan keahlian dalam pendidikan agama dan tahfidz Al-Qur'an.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Achievement Section -->
  <section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Prestasi Siswa</h2>
        <p class="text-xl text-gray-600">Berbagai prestasi yang diraih siswa SD Cendekia Muda</p>
      </div>
      <div class="grid md:grid-cols-4 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <i class="fas fa-trophy text-yellow-500 text-5xl"></i>
          </div>
          <h4 class="text-xl font-bold text-blue-600 mb-2">Juara 1</h4>
          <p class="font-semibold text-gray-900 mb-1">Olimpiade Matematika</p>
          <small class="text-gray-500">Tingkat Provinsi 2023</small>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <i class="fas fa-medal text-yellow-500 text-5xl"></i>
          </div>
          <h4 class="text-xl font-bold text-blue-600 mb-2">Juara 2</h4>
          <p class="font-semibold text-gray-900 mb-1">Lomba Robotik</p>
          <small class="text-gray-500">Tingkat Nasional 2023</small>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <i class="fas fa-award text-yellow-500 text-5xl"></i>
          </div>
          <h4 class="text-xl font-bold text-blue-600 mb-2">Juara 1</h4>
          <p class="font-semibold text-gray-900 mb-1">Festival Tahfidz</p>
          <small class="text-gray-500">Tingkat Kota 2023</small>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <i class="fas fa-star text-yellow-500 text-5xl"></i>
          </div>
          <h4 class="text-xl font-bold text-blue-600 mb-2">Juara 3</h4>
          <p class="font-semibold text-gray-900 mb-1">English Speech Contest</p>
          <small class="text-gray-500">Tingkat Regional 2023</small>
        </div>
      </div>
    </div>
  </section>

  <!-- Registration Section -->
  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Daftarkan Putra-Putri Anda di SD Cendekia Muda</h2>
          <p class="text-xl text-gray-600 mb-8">Berikan mereka pendidikan berkualitas untuk masa depan yang gemilang</p>
          <ul class="space-y-4 mb-8">
            <li class="flex items-center"><i class="fas fa-check-circle text-blue-600 mr-3"></i> <span>Kurikulum Merdeka terintegrasi</span></li>
            <li class="flex items-center"><i class="fas fa-check-circle text-blue-600 mr-3"></i> <span>Program tahfidz Al-Qur'an</span></li>
            <li class="flex items-center"><i class="fas fa-check-circle text-blue-600 mr-3"></i> <span>Pembelajaran bilingual</span></li>
            <li class="flex items-center"><i class="fas fa-check-circle text-blue-600 mr-3"></i> <span>Ekstrakurikuler yang beragam</span></li>
          </ul>
          <a href="#" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">Daftar Sekarang</a>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8">
          <h3 class="text-2xl font-bold text-gray-900 mb-6">Informasi Pendaftaran SD</h3>
          <div class="space-y-6">
            <div>
              <h5 class="flex items-center text-lg font-semibold text-gray-900 mb-2">
                <i class="fas fa-users text-blue-600 mr-3"></i>Usia
              </h5>
              <p class="text-gray-600">6-12 tahun (Kelas 1-6)</p>
            </div>
            <div>
              <h5 class="flex items-center text-lg font-semibold text-gray-900 mb-2">
                <i class="fas fa-clock text-blue-600 mr-3"></i>Jadwal
              </h5>
              <p class="text-gray-600">Senin - Jumat: 07.30 - 15.00 WIB</p>
            </div>
            <div>
              <h5 class="flex items-center text-lg font-semibold text-gray-900 mb-2">
                <i class="fas fa-calendar-alt text-blue-600 mr-3"></i>Tahun Ajaran
              </h5>
              <p class="text-gray-600">Pendaftaran dibuka untuk tahun ajaran 2024/2025</p>
            </div>
            <div>
              <h5 class="flex items-center text-lg font-semibold text-gray-900 mb-2">
                <i class="fas fa-phone-alt text-blue-600 mr-3"></i>Kontak
              </h5>
              <p class="text-gray-600">Telepon: (021) 1234-5679<br>Email: sd@cendekiamuda.ac.id</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Pertanyaan yang Sering Diajukan</h2>
        <p class="text-xl text-gray-600">Informasi lebih lanjut tentang SD Cendekia Muda</p>
      </div>
      <div class="space-y-4">
        <div class="bg-white rounded-lg shadow-lg border">
          <button class="w-full text-left p-6 focus:outline-none" onclick="toggleAccordion('faq1')">
            <div class="flex justify-between items-center">
              <h3 class="text-lg font-semibold text-gray-900">Bagaimana sistem pembelajaran di SD Cendekia Muda?</h3>
              <i class="fas fa-chevron-down text-gray-500"></i>
            </div>
          </button>
          <div id="faq1" class="hidden p-6 pt-0">
            <p class="text-gray-600">Kami menerapkan Kurikulum Merdeka yang diintegrasikan dengan nilai-nilai Islam. Pembelajaran dilakukan dengan pendekatan student-centered learning, menggunakan metode yang variatif dan teknologi pendidikan modern.</p>
          </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-lg border">
          <button class="w-full text-left p-6 focus:outline-none" onclick="toggleAccordion('faq2')">
            <div class="flex justify-between items-center">
              <h3 class="text-lg font-semibold text-gray-900">Apakah ada program tahfidz Al-Qur'an?</h3>
              <i class="fas fa-chevron-down text-gray-500"></i>
            </div>
          </button>
          <div id="faq2" class="hidden p-6 pt-0">
            <p class="text-gray-600">Ya, program tahfidz Al-Qur'an adalah bagian integral dari kurikulum kami. Siswa mendapat bimbingan khusus untuk menghafal Al-Qur'an dengan metode yang menyenangkan dan sesuai dengan kemampuan masing-masing.</p>
          </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-lg border">
          <button class="w-full text-left p-6 focus:outline-none" onclick="toggleAccordion('faq3')">
            <div class="flex justify-between items-center">
              <h3 class="text-lg font-semibold text-gray-900">Bagaimana dengan pembelajaran bahasa asing?</h3>
              <i class="fas fa-chevron-down text-gray-500"></i>
            </div>
          </button>
          <div id="faq3" class="hidden p-6 pt-0">
            <p class="text-gray-600">SD Cendekia Muda menerapkan program bilingual dengan bahasa Inggris dan bahasa Arab. Beberapa mata pelajaran diajarkan menggunakan bahasa Inggris, dan siswa juga mendapat pelajaran bahasa Arab untuk memahami Al-Qur'an dan hadits.</p>
          </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-lg border">
          <button class="w-full text-left p-6 focus:outline-none" onclick="toggleAccordion('faq4')">
            <div class="flex justify-between items-center">
              <h3 class="text-lg font-semibold text-gray-900">Apa saja ekstrakurikuler yang tersedia?</h3>
              <i class="fas fa-chevron-down text-gray-500"></i>
            </div>
          </button>
          <div id="faq4" class="hidden p-6 pt-0">
            <p class="text-gray-600">Kami menyediakan berbagai ekstrakurikuler seperti robotik, seni dan musik, olahraga (sepak bola, basket, renang), pramuka, English club, Arabic club, dan masih banyak lagi untuk mengembangkan bakat dan minat siswa.</p>
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
