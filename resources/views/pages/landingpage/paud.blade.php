@extends('layouts.landingpage')

@section('title', 'PAUD - Cendekia Muda')

@section('content')
	<!-- Hero Section -->
	<section class="bg-green-600 py-20">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="grid lg:grid-cols-2 gap-8 items-center">
				<div class="text-white">
					<h1 class="text-4xl md:text-5xl font-bold mb-6">PAUD Cendekia Muda</h1>
					<p class="text-xl text-green-100">Pendidikan Anak Usia Dini yang Berkualitas untuk Masa Depan Cerah</p>
				</div>
				<div>
					<img src="{{ asset('images/BackgroundSchoolInfo.png') }}" alt="PAUD Cendekia Muda" class="w-full rounded-lg shadow-xl">
				</div>
			</div>
		</div>
	</section>

	<!-- About PAUD Section -->
	<section class="py-20">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="max-w-4xl mx-auto text-center mb-16">
				<h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Tentang PAUD Cendekia Muda</h2>
				<p class="text-xl text-gray-600">Memberikan pendidikan berkualitas dengan pendekatan holistik untuk anak usia dini</p>
			</div>
			<div class="grid lg:grid-cols-2 gap-8">
				<div class="bg-white rounded-lg shadow-lg p-8 h-full">
					<h3 class="text-2xl font-bold text-gray-900 mb-4">Visi Kami</h3>
					<p class="text-gray-600">Menjadi lembaga pendidikan anak usia dini yang unggul dan terdepan dalam membentuk generasi yang cerdas, kreatif, dan berakhlak mulia.</p>
				</div>
				<div class="bg-white rounded-lg shadow-lg p-8 h-full">
					<h3 class="text-2xl font-bold text-gray-900 mb-4">Misi Kami</h3>
					<p class="text-gray-600">Menyelenggarakan pendidikan yang holistik, menciptakan lingkungan belajar yang menyenangkan, dan mengembangkan potensi anak secara optimal sesuai dengan tahap perkembangannya.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Programs Section -->
	<section class="py-20 bg-gray-50">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center mb-16">
				<h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Program Pembelajaran</h2>
				<p class="text-xl text-gray-600">Kurikulum terintegrasi untuk mengembangkan semua aspek perkembangan anak</p>
			</div>
			<div class="grid md:grid-cols-3 gap-8">
				<div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
					<div class="mb-6">
						<i class="fas fa-brain text-green-600 text-5xl"></i>
					</div>
					<h3 class="text-xl font-bold text-gray-900 mb-4">Perkembangan Kognitif</h3>
					<p class="text-gray-600">Mengembangkan kemampuan berpikir, memecahkan masalah, dan keterampilan matematika dasar.</p>
				</div>
				<div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
					<div class="mb-6">
						<i class="fas fa-book-reader text-green-600 text-5xl"></i>
					</div>
					<h3 class="text-xl font-bold text-gray-900 mb-4">Literasi & Bahasa</h3>
					<p class="text-gray-600">Memperkenalkan keterampilan membaca, menulis, dan pengembangan kosa kata secara menyenangkan.</p>
				</div>
				<div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
					<div class="mb-6">
						<i class="fas fa-hands-helping text-green-600 text-5xl"></i>
					</div>
					<h3 class="text-xl font-bold text-gray-900 mb-4">Sosial & Emosional</h3>
					<p class="text-gray-600">Mengajarkan keterampilan sosial, pengendalian emosi, dan pembentukan karakter.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Facilities Section -->
	<section class="py-20">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center mb-16">
				<h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Fasilitas Kami</h2>
				<p class="text-xl text-gray-600">Lingkungan belajar yang aman, nyaman, dan mendukung perkembangan anak</p>
			</div>
			<div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
				<div class="bg-white rounded-lg shadow-lg overflow-hidden">
					<img src="{{ asset('assets/images/paud-classroom.jpg') }}" class="w-full h-48 object-cover" alt="Ruang Kelas">
					<div class="p-6">
						<h5 class="text-lg font-bold text-gray-900 mb-2">Ruang Kelas</h5>
						<p class="text-gray-600">Ruang kelas yang nyaman dengan peralatan belajar modern.</p>
					</div>
				</div>
				<div class="bg-white rounded-lg shadow-lg overflow-hidden">
					<img src="{{ asset('assets/images/paud-playground.jpg') }}" class="w-full h-48 object-cover" alt="Taman Bermain">
					<div class="p-6">
						<h5 class="text-lg font-bold text-gray-900 mb-2">Taman Bermain</h5>
						<p class="text-gray-600">Area bermain yang aman untuk aktivitas fisik dan sosial.</p>
					</div>
				</div>
				<div class="bg-white rounded-lg shadow-lg overflow-hidden">
					<img src="{{ asset('assets/images/paud-library.jpg') }}" class="w-full h-48 object-cover" alt="Perpustakaan">
					<div class="p-6">
						<h5 class="text-lg font-bold text-gray-900 mb-2">Perpustakaan</h5>
						<p class="text-gray-600">Koleksi buku yang beragam untuk menumbuhkan minat baca.</p>
					</div>
				</div>
				<div class="bg-white rounded-lg shadow-lg overflow-hidden">
					<img src="{{ asset('assets/images/paud-artroom.jpg') }}" class="w-full h-48 object-cover" alt="Ruang Seni">
					<div class="p-6">
						<h5 class="text-lg font-bold text-gray-900 mb-2">Ruang Seni</h5>
						<p class="text-gray-600">Ruang khusus untuk mengembangkan kreativitas dan ekspresi seni.</p>
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
				<p class="text-xl text-gray-600">Tim pengajar profesional dan berpengalaman</p>
			</div>
			<div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">
				<div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
					<div class="w-32 h-32 rounded-full mx-auto mb-6 flex items-center justify-center">
						<img src="{{ asset('assets/images/avatar.svg') }}" class="w-full h-full object-cover rounded-full text-primary" alt="Guru PAUD">
					</div>
					<h4 class="text-xl font-bold text-gray-900 mb-2">Ibu Siti Aminah</h4>
					<p class="text-gray-500 mb-4">Kepala PAUD</p>
					<p class="text-gray-600">Berpengalaman 15 tahun dalam pendidikan anak usia dini dengan latar belakang S2 Pendidikan.</p>
				</div>
				<div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
					<div class="w-32 h-32 rounded-full overflow-hidden mx-auto mb-6">
						<img src="{{ asset('assets/images/avatar.svg') }}" class="w-full h-full object-cover" alt="Guru PAUD">
					</div>
					<h4 class="text-xl font-bold text-gray-900 mb-2">Ibu Dewi Lestari</h4>
					<p class="text-gray-500 mb-4">Guru Kelas A</p>
					<p class="text-gray-600">Spesialis dalam pengembangan kognitif dan bahasa dengan pendekatan pembelajaran yang inovatif.</p>
				</div>
				<div class="bg-white rounded-lg shadow-lg p-8 text-center h-full">
					<div class="w-32 h-32 rounded-full overflow-hidden mx-auto mb-6">
						<img src="{{ asset('assets/images/avatar.svg') }}" class="w-full h-full object-cover" alt="Guru PAUD">
					</div>
					<h4 class="text-xl font-bold text-gray-900 mb-2">Pak Rudi Santoso</h4>
					<p class="text-gray-500 mb-4">Guru Kelas B</p>
					<p class="text-gray-600">Ahli dalam pembelajaran berbasis permainan dan pengembangan keterampilan motorik.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Registration Section -->
	<section class="py-20">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="grid lg:grid-cols-2 gap-12 items-center">
				<div>
					<h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Daftarkan Buah Hati Anda Sekarang</h2>
					<p class="text-xl text-gray-600 mb-8">Berikan mereka pendidikan berkualitas untuk masa depan cerah</p>
					<ul class="space-y-4 mb-8">
						<li class="flex items-center"><i class="fas fa-check-circle text-green-600 mr-3"></i> <span>Kurikulum terintegrasi</span></li>
						<li class="flex items-center"><i class="fas fa-check-circle text-green-600 mr-3"></i> <span>Fasilitas modern</span></li>
						<li class="flex items-center"><i class="fas fa-check-circle text-green-600 mr-3"></i> <span>Pengajar berpengalaman</span></li>
						<li class="flex items-center"><i class="fas fa-check-circle text-green-600 mr-3"></i> <span>Lingkungan belajar yang aman</span></li>
					</ul>
					<a href="" class="bg-green-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-green-700 transition duration-300">Daftar Sekarang</a>
				</div>
				<div class="bg-white rounded-lg shadow-lg p-8">
					<h3 class="text-2xl font-bold text-gray-900 mb-6">Informasi Pendaftaran</h3>
					<div class="space-y-6">
						<div>
							<h5 class="flex items-center text-lg font-semibold text-gray-900 mb-2">
								<i class="fas fa-calendar-alt text-green-600 mr-3"></i>Tahun Ajaran
							</h5>
							<p class="text-gray-600">Pendaftaran dibuka untuk tahun ajaran 2023/2024</p>
						</div>
						<div>
							<h5 class="flex items-center text-lg font-semibold text-gray-900 mb-2">
								<i class="fas fa-clock text-green-600 mr-3"></i>Jadwal
							</h5>
							<p class="text-gray-600">Senin - Jumat: 08.00 - 12.00 WIB</p>
						</div>
						<div>
							<h5 class="flex items-center text-lg font-semibold text-gray-900 mb-2">
								<i class="fas fa-map-marker-alt text-green-600 mr-3"></i>Lokasi
							</h5>
							<p class="text-gray-600">Jl. Pendidikan No. 123, Kota Maju, Indonesia</p>
						</div>
						<div>
							<h5 class="flex items-center text-lg font-semibold text-gray-900 mb-2">
								<i class="fas fa-phone-alt text-green-600 mr-3"></i>Kontak
							</h5>
							<p class="text-gray-600">Telepon: (021) 1234-5678<br>Email: paud@cendekiamuda.ac.id</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Testimonial Section -->
	<section class="py-20 bg-gray-50">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center mb-16">
				<h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Apa Kata Mereka</h2>
				<p class="text-xl text-gray-600">Testimoni dari orang tua siswa kami</p>
			</div>
			<div class="grid md:grid-cols-3 gap-8">
				<div class="bg-white rounded-lg shadow-lg p-8 h-full">
					<div class="mb-6 text-yellow-400">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<p class="text-gray-600 italic mb-6">"PAUD Cendekia Muda telah memberikan fondasi pendidikan yang luar biasa untuk anak saya. Dia sekarang lebih percaya diri dan bersemangat untuk belajar."</p>
					<div class="flex items-center">
						<div class="w-12 h-12 rounded-full overflow-hidden mr-4">
							<img src="{{ asset('assets/images/avatar.svg') }}" class="w-full h-full object-cover" alt="Testimoni Orang Tua">
						</div>
						<div>
							<h5 class="font-bold text-gray-900">Ibu Farida</h5>
							<small class="text-gray-500">Orang Tua Siswa</small>
						</div>
					</div>
				</div>
				<div class="bg-white rounded-lg shadow-lg p-8 h-full">
					<div class="mb-6 text-yellow-400">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<p class="text-gray-600 italic mb-6">"Para guru di PAUD Cendekia Muda sangat peduli dan profesional. Mereka memahami kebutuhan setiap anak dan membimbing mereka dengan penuh kasih sayang."</p>
					<div class="flex items-center">
						<div class="w-12 h-12 rounded-full overflow-hidden mr-4">
							<img src="{{ asset('assets/images/avatar.svg') }}" class="w-full h-full object-cover" alt="Testimoni Orang Tua">
						</div>
						<div>
							<h5 class="font-bold text-gray-900">Pak Ahmad</h5>
							<small class="text-gray-500">Orang Tua Siswa</small>
						</div>
					</div>
				</div>
				<div class="bg-white rounded-lg shadow-lg p-8 h-full">
					<div class="mb-6 text-yellow-400">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<p class="text-gray-600 italic mb-6">"Fasilitas yang lengkap dan kurikulum yang komprehensif membuat anak saya berkembang dengan pesat. Kami sangat puas dengan PAUD Cendekia Muda!"</p>
					<div class="flex items-center">
						<div class="w-12 h-12 rounded-full overflow-hidden mr-4">
							<img src="{{ asset('assets/images/avatar.svg') }}" class="w-full h-full object-cover" alt="Testimoni Orang Tua">
						</div>
						<div>
							<h5 class="font-bold text-gray-900">Ibu Sinta</h5>
							<small class="text-gray-500">Orang Tua Siswa</small>
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
				<p class="text-xl text-gray-600">Informasi lebih lanjut tentang PAUD Cendekia Muda</p>
			</div>
			<div class="space-y-4">
				<div class="bg-white rounded-lg shadow-lg border">
					<button class="w-full text-left p-6 focus:outline-none" onclick="toggleAccordion('faq1')">
						<div class="flex justify-between items-center">
							<h3 class="text-lg font-semibold text-gray-900">Apa saja persyaratan pendaftaran di PAUD Cendekia Muda?</h3>
							<i class="fas fa-chevron-down text-gray-500"></i>
						</div>
					</button>
					<div id="faq1" class="hidden p-6 pt-0">
						<p class="text-gray-600">Untuk mendaftar di PAUD kami, Anda memerlukan dokumen berikut: akte kelahiran anak, kartu keluarga, fotokopi KTP orang tua, pas foto anak, dan formulir pendaftaran yang telah diisi lengkap.</p>
					</div>
				</div>
				
				<div class="bg-white rounded-lg shadow-lg border">
					<button class="w-full text-left p-6 focus:outline-none" onclick="toggleAccordion('faq2')">
						<div class="flex justify-between items-center">
							<h3 class="text-lg font-semibold text-gray-900">Berapa biaya pendidikan di PAUD Cendekia Muda?</h3>
							<i class="fas fa-chevron-down text-gray-500"></i>
						</div>
					</button>
					<div id="faq2" class="hidden p-6 pt-0">
						<p class="text-gray-600">Biaya pendidikan bervariasi tergantung pada program yang dipilih. Silakan hubungi kantor administrasi kami untuk informasi biaya terbaru. Kami juga menyediakan program beasiswa untuk keluarga yang memenuhi syarat.</p>
					</div>
				</div>
				
				<div class="bg-white rounded-lg shadow-lg border">
					<button class="w-full text-left p-6 focus:outline-none" onclick="toggleAccordion('faq3')">
						<div class="flex justify-between items-center">
							<h3 class="text-lg font-semibold text-gray-900">Bagaimana kurikulum yang diterapkan di PAUD Cendekia Muda?</h3>
							<i class="fas fa-chevron-down text-gray-500"></i>
						</div>
					</button>
					<div id="faq3" class="hidden p-6 pt-0">
						<p class="text-gray-600">PAUD Cendekia Muda menerapkan kurikulum terintegrasi yang mencakup pengembangan kognitif, bahasa, sosial-emosional, fisik motorik, dan karakter. Kami menggunakan pendekatan pembelajaran berbasis permainan dan eksplorasi yang sesuai dengan tahap perkembangan anak.</p>
					</div>
				</div>
				
				<div class="bg-white rounded-lg shadow-lg border">
					<button class="w-full text-left p-6 focus:outline-none" onclick="toggleAccordion('faq4')">
						<div class="flex justify-between items-center">
							<h3 class="text-lg font-semibold text-gray-900">Apakah PAUD Cendekia Muda menyediakan layanan antar-jemput?</h3>
							<i class="fas fa-chevron-down text-gray-500"></i>
						</div>
					</button>
					<div id="faq4" class="hidden p-6 pt-0">
						<p class="text-gray-600">Ya, kami menyediakan layanan antar-jemput dengan biaya tambahan. Layanan ini mencakup area tertentu di sekitar lokasi sekolah. Silakan hubungi kantor administrasi untuk informasi lebih lanjut tentang rute dan biaya.</p>
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