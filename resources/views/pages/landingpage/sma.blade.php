@extends('layouts.landingpage')

@section('title', 'SMA - Cendekia Muda')

@section('content')
  <!-- Hero Section -->
  <section class="bg-purple-600 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-8 items-center">
        <div class="text-white">
          <h1 class="text-4xl md:text-5xl font-bold mb-6">SMA Cendekia Muda</h1>
          <p class="text-xl text-purple-100">Sekolah Menengah Atas Berkelas Dunia dengan Pendidikan Karakter Islami Terdepan</p>
        </div>
        <div>
          <img src="{{ asset('assets/images/sma-hero.jpg') }}" alt="SMA Cendekia Muda" class="w-full rounded-lg shadow-xl">
        </div>
      </div>
    </div>
  </section>

  <!-- About SMA Section -->
  <section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Tentang SMA Cendekia Muda</h2>
        <p class="text-xl text-gray-600">Mempersiapkan pemimpin masa depan yang berkarakter, berprestasi, dan siap bersaing di tingkat global</p>
      </div>
      <div class="grid lg:grid-cols-2 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-8 h-full">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Visi Kami</h3>
          <p class="text-gray-600">Menjadi sekolah menengah atas yang terdepan dalam menghasilkan lulusan berkarakter mulia, berprestasi akademik tinggi, dan siap berkontribusi untuk kemajuan bangsa dan umat.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 h-full">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Misi Kami</h3>
          <p class="text-gray-600">Menyelenggarakan pendidikan berstandar internasional, mengembangkan kepemimpinan dan jiwa kewirausahaan, mencetak lulusan yang diterima di universitas terbaik dunia, dan membentuk insan yang berakhlak mulia.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Academic Programs Section -->
  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Program Akademik Unggulan</h2>
        <p class="text-xl text-gray-600">Jurusan dan program khusus untuk mempersiapkan masa depan cemerlang</p>
      </div>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <i class="fas fa-atom text-purple-600 text-5xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">IPA (Science)</h3>
          <p class="text-gray-600">Program unggulan untuk calon dokter, insinyur, dan ilmuwan dengan kurikulum Cambridge dan persiapan olimpiade sains.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <i class="fas fa-balance-scale text-purple-600 text-5xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">IPS (Social)</h3>
          <p class="text-gray-600">Program untuk calon ekonom, diplomat, dan pemimpin dengan fokus pada studi sosial dan kepemimpinan global.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <i class="fas fa-language text-purple-600 text-5xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Bahasa (Language)</h3>
          <p class="text-gray-600">Program bahasa intensif dengan penguasaan 4 bahasa (Indonesia, Inggris, Arab, Mandarin) dan sastra dunia.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- International Programs Section -->
  <section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Program Internasional</h2>
        <p class="text-xl text-gray-600">Pathway menuju universitas terbaik dunia</p>
      </div>
      <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <i class="fas fa-graduation-cap text-purple-600 text-5xl"></i>
          </div>
          <h4 class="text-lg font-bold text-gray-900 mb-2">Cambridge A-Level</h4>
          <p class="text-gray-600">Sertifikasi internasional yang diakui universitas dunia.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <i class="fas fa-globe-americas text-purple-600 text-5xl"></i>
          </div>
          <h4 class="text-lg font-bold text-gray-900 mb-2">AP (Advanced Placement)</h4>
          <p class="text-gray-600">Program persiapan masuk universitas Amerika.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <i class="fas fa-certificate text-purple-600 text-5xl"></i>
          </div>
          <h4 class="text-lg font-bold text-gray-900 mb-2">IB Diploma</h4>
          <p class="text-gray-600">International Baccalaureate untuk standar global.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <i class="fas fa-award text-purple-600 text-5xl"></i>
          </div>
          <h4 class="text-lg font-bold text-gray-900 mb-2">SAT/ACT Prep</h4>
          <p class="text-gray-600">Persiapan tes masuk universitas Amerika.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- University Preparation Section -->
  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Persiapan Universitas</h2>
        <p class="text-xl text-gray-600">Bimbingan komprehensif menuju kampus impian</p>
      </div>
      <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-8 h-full">
          <h3 class="text-xl font-bold text-gray-900 mb-4">
            <i class="fas fa-university text-purple-600 mr-3"></i>University Counseling
          </h3>
          <p class="text-gray-600 mb-4">Konseling khusus untuk pemilihan universitas dan jurusan yang tepat sesuai minat dan bakat siswa.</p>
          <ul class="space-y-2 text-gray-600">
            <li class="flex items-center"><i class="fas fa-check text-purple-600 mr-2"></i>Pemetaan minat dan bakat</li>
            <li class="flex items-center"><i class="fas fa-check text-purple-600 mr-2"></i>Panduan aplikasi universitas</li>
            <li class="flex items-center"><i class="fas fa-check text-purple-600 mr-2"></i>Essay writing workshop</li>
          </ul>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 h-full">
          <h3 class="text-xl font-bold text-gray-900 mb-4">
            <i class="fas fa-trophy text-purple-600 mr-3"></i>Achievement Program
          </h3>
          <p class="text-gray-600 mb-4">Program pengembangan prestasi untuk memperkuat portofolio aplikasi universitas.</p>
          <ul class="space-y-2 text-gray-600">
            <li class="flex items-center"><i class="fas fa-check text-purple-600 mr-2"></i>Research projects</li>
            <li class="flex items-center"><i class="fas fa-check text-purple-600 mr-2"></i>Olimpiade internasional</li>
            <li class="flex items-center"><i class="fas fa-check text-purple-600 mr-2"></i>Leadership training</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Facilities Section -->
  <section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Fasilitas Kelas Dunia</h2>
        <p class="text-xl text-gray-600">Infrastruktur modern untuk pembelajaran optimal</p>
      </div>
      <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="{{ asset('assets/images/sma-science-lab.jpg') }}" class="w-full h-48 object-cover" alt="Science Lab">
          <div class="p-6">
            <h5 class="text-lg font-bold text-gray-900 mb-2">Advanced Science Labs</h5>
            <p class="text-gray-600">Laboratorium fisika, kimia, biologi dengan peralatan research-grade.</p>
          </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="{{ asset('assets/images/sma-library.jpg') }}" class="w-full h-48 object-cover" alt="Library">
          <div class="p-6">
            <h5 class="text-lg font-bold text-gray-900 mb-2">Digital Library</h5>
            <p class="text-gray-600">Perpustakaan digital dengan akses ke database internasional.</p>
          </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="{{ asset('assets/images/sma-auditorium.jpg') }}" class="w-full h-48 object-cover" alt="Auditorium">
          <div class="p-6">
            <h5 class="text-lg font-bold text-gray-900 mb-2">Auditorium</h5>
            <p class="text-gray-600">Auditorium berkapasitas 500 orang dengan sistem audio visual canggih.</p>
          </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="{{ asset('assets/images/sma-dormitory.jpg') }}" class="w-full h-48 object-cover" alt="Dormitory">
          <div class="p-6">
            <h5 class="text-lg font-bold text-gray-900 mb-2">Boarding School</h5>
            <p class="text-gray-600">Asrama modern dengan fasilitas lengkap dan pengawasan 24 jam.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Teachers Section -->
  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Tenaga Pendidik Berkelas Dunia</h2>
        <p class="text-xl text-gray-600">Guru-guru berpengalaman dengan kualifikasi internasional</p>
      </div>
      <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="w-32 h-32 rounded-full overflow-hidden mx-auto mb-6">
            <img src="{{ asset('assets/images/sma-principal.jpg') }}" class="w-full h-full object-cover" alt="Kepala SMA">
          </div>
          <h4 class="text-xl font-bold text-gray-900 mb-2">Prof. Dr. Ahmad Wijaya, M.Ed</h4>
          <p class="text-gray-500 mb-4">Kepala SMA</p>
          <p class="text-gray-600">Profesor dengan pengalaman 30 tahun dalam pendidikan internasional dan manajemen sekolah unggulan.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="w-32 h-32 rounded-full overflow-hidden mx-auto mb-6">
            <img src="{{ asset('assets/images/sma-teacher1.jpg') }}" class="w-full h-full object-cover" alt="Koordinator Akademik">
          </div>
          <h4 class="text-xl font-bold text-gray-900 mb-2">Dr. Lisa Chen, Ph.D</h4>
          <p class="text-gray-500 mb-4">Academic Director</p>
          <p class="text-gray-600">Doktor dari Harvard University dengan spesialisasi kurikulum internasional dan assessment.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="w-32 h-32 rounded-full overflow-hidden mx-auto mb-6">
            <img src="{{ asset('assets/images/sma-teacher2.jpg') }}" class="w-full h-full object-cover" alt="University Counselor">
          </div>
          <h4 class="text-xl font-bold text-gray-900 mb-2">Mr. David Thompson, M.A</h4>
          <p class="text-gray-500 mb-4">University Counselor</p>
          <p class="text-gray-600">Konselor universitas berpengalaman dengan track record 95% penerimaan di universitas top dunia.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Alumni Success Section -->
  <section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Kesuksesan Alumni</h2>
        <p class="text-xl text-gray-600">Lulusan yang berhasil masuk universitas terbaik dunia</p>
      </div>
      <div class="grid md:grid-cols-4 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <img src="{{ asset('assets/images/harvard-logo.png') }}" class="w-16 h-16 mx-auto" alt="Harvard">
          </div>
          <h4 class="text-xl font-bold text-purple-600 mb-2">Harvard University</h4>
          <p class="font-semibold text-gray-900 mb-1">Aisyah Rahman</p>
          <small class="text-gray-500">Medicine, Class of 2023</small>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <img src="{{ asset('assets/images/mit-logo.png') }}" class="w-16 h-16 mx-auto" alt="MIT">
          </div>
          <h4 class="text-xl font-bold text-purple-600 mb-2">MIT</h4>
          <p class="font-semibold text-gray-900 mb-1">Muhammad Hakim</p>
          <small class="text-gray-500">Computer Science, Class of 2023</small>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <img src="{{ asset('assets/images/stanford-logo.png') }}" class="w-16 h-16 mx-auto" alt="Stanford">
          </div>
          <h4 class="text-xl font-bold text-purple-600 mb-2">Stanford University</h4>
          <p class="font-semibold text-gray-900 mb-1">Fatimah Zahra</p>
          <small class="text-gray-500">Business, Class of 2023</small>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
          <div class="mb-6">
            <img src="{{ asset('assets/images/oxford-logo.png') }}" class="w-16 h-16 mx-auto" alt="Oxford">
          </div>
          <h4 class="text-xl font-bold text-purple-600 mb-2">Oxford University</h4>
          <p class="font-semibold text-gray-900 mb-1">Abdullah Malik</p>
          <small class="text-gray-500">Engineering, Class of 2023</small>
        </div>
      </div>
    </div>
  </section>

  <!-- Registration Section -->
  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Raih Masa Depan Cemerlang</h2>
          <p class="text-xl text-gray-600 mb-8">Bergabunglah dengan SMA Cendekia Muda dan wujudkan impian masuk universitas terbaik dunia</p>
          <ul class="space-y-4 mb-8">
            <li class="flex items-center"><i class="fas fa-check-circle text-purple-600 mr-3"></i> <span>Program A-Level & IB Diploma</span></li>
            <li class="flex items-center"><i class="fas fa-check-circle text-purple-600 mr-3"></i> <span>University counseling expert</span></li>
            <li class="flex items-center"><i class="fas fa-check-circle text-purple-600 mr-3"></i> <span>Boarding school facilities</span></li>
            <li class="flex items-center"><i class="fas fa-check-circle text-purple-600 mr-3"></i> <span>Track record 95% ke universitas top</span></li>
          </ul>
          <a href="#" class="bg-purple-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-purple-700 transition duration-300">Daftar Sekarang</a>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8">
          <h3 class="text-2xl font-bold text-gray-900 mb-6">Informasi Pendaftaran SMA</h3>
          <div class="space-y-6">
            <div>
              <h5 class="flex items-center text-lg font-semibold text-gray-900 mb-2">
                <i class="fas fa-graduation-cap text-purple-600 mr-3"></i>Jenjang
              </h5>
              <p class="text-gray-600">Kelas 10, 11, dan 12 (usia 15-18 tahun)</p>
            </div>
            <div>
              <h5 class="flex items-center text-lg font-semibold text-gray-900 mb-2">
                <i class="fas fa-clock text-purple-600 mr-3"></i>Jadwal
              </h5>
              <p class="text-gray-600">Senin - Jumat: 07.00 - 16.00 WIB<br>Boarding: Program 24 jam</p>
            </div>
            <div>
              <h5 class="flex items-center text-lg font-semibold text-gray-900 mb-2">
                <i class="fas fa-calendar-alt text-purple-600 mr-3"></i>Pendaftaran
              </h5>
              <p class="text-gray-600">Early Bird: September - November 2023<br>Regular: Desember 2023 - Februari 2024</p>
            </div>
            <div>
              <h5 class="flex items-center text-lg font-semibold text-gray-900 mb-2">
                <i class="fas fa-phone-alt text-purple-600 mr-3"></i>Kontak
              </h5>
              <p class="text-gray-600">Telephone: (021) 1234-5690<br>Email: sma@cendekiamuda.ac.id</p>
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
        <p class="text-xl text-gray-600">Informasi lebih lanjut tentang SMA Cendekia Muda</p>
      </div>
      <div class="space-y-4">
        <div class="bg-white rounded-lg shadow-lg border">
          <button class="w-full text-left p-6 focus:outline-none" onclick="toggleAccordion('faq1')">
            <div class="flex justify-between items-center">
              <h3 class="text-lg font-semibold text-gray-900">Apa perbedaan program A-Level, IB, dan AP?</h3>
              <i class="fas fa-chevron-down text-gray-500"></i>
            </div>
          </button>
          <div id="faq1" class="hidden p-6 pt-0">
            <p class="text-gray-600">A-Level (Cambridge) fokus pada spesialisasi mata pelajaran, IB Diploma memberikan pendidikan holistik dengan 6 mata pelajaran, sedangkan AP (Advanced Placement) adalah program lanjutan untuk persiapan universitas Amerika. Siswa dapat memilih program sesuai target universitas.</p>
          </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-lg border">
          <button class="w-full text-left p-6 focus:outline-none" onclick="toggleAccordion('faq2')">
            <div class="flex justify-between items-center">
              <h3 class="text-lg font-semibold text-gray-900">Bagaimana sistem boarding school di SMA Cendekia Muda?</h3>
              <i class="fas fa-chevron-down text-gray-500"></i>
            </div>
          </button>
          <div id="faq2" class="hidden p-6 pt-0">
            <p class="text-gray-600">Boarding school kami menyediakan lingkungan belajar yang kondusif dengan asrama terpisah putra-putri, supervisor 24 jam, jadwal belajar terstruktur, dan berbagai kegiatan pengembangan diri. Siswa mendapat pembinaan akademik dan karakter secara intensif.</p>
          </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-lg border">
          <button class="w-full text-left p-6 focus:outline-none" onclick="toggleAccordion('faq3')">
            <div class="flex justify-between items-center">
              <h3 class="text-lg font-semibold text-gray-900">Berapa tingkat keberhasilan masuk universitas luar negeri?</h3>
              <i class="fas fa-chevron-down text-gray-500"></i>
            </div>
          </button>
          <div id="faq3" class="hidden p-6 pt-0">
            <p class="text-gray-600">Alhamdulillah, 95% lulusan kami berhasil diterima di universitas pilihan pertama mereka, termasuk universitas top dunia seperti Harvard, MIT, Stanford, Oxford, dan Cambridge. Kami memiliki dedicated university counselor untuk membantu setiap siswa.</p>
          </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-lg border">
          <button class="w-full text-left p-6 focus:outline-none" onclick="toggleAccordion('faq4')">
            <div class="flex justify-between items-center">
              <h3 class="text-lg font-semibold text-gray-900">Apakah ada program beasiswa dan bantuan keuangan?</h3>
              <i class="fas fa-chevron-down text-gray-500"></i>
            </div>
          </button>
          <div id="faq4" class="hidden p-6 pt-0">
            <p class="text-gray-600">Ya, kami menyediakan berbagai program beasiswa: beasiswa prestasi akademik, beasiswa atlet, beasiswa hafiz Qur'an, dan beasiswa untuk keluarga kurang mampu. Ada juga program bantuan untuk aplikasi universitas luar negeri melalui scholarship hunting guidance.</p>
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
