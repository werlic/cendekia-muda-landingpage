@extends('layouts.landingpage')

@section('title', 'Kontak - Cendekia Muda')
@section('meta_description', 'Hubungi kami di Cendekia Muda - A Universal Islamic School. Temukan informasi kontak, lokasi, dan hubungi kami melalui WhatsApp.')

@push('styles')
<style>
    .contact-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    }
    
    .map-container {
        height: 400px;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }
    
    .whatsapp-btn {
        background: linear-gradient(135deg, #25D366, #128C7E);
        transition: all 0.3s ease;
    }
    
    .whatsapp-btn:hover {
        background: linear-gradient(135deg, #128C7E, #075E54);
        transform: scale(1.05);
    }
    
    .section-divider {
        background: linear-gradient(90deg, transparent, #e5e7eb, transparent);
        height: 1px;
    }
</style>
@endpush

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-primary-600 to-primary-800 text-white py-20">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Hubungi Kami</h1>
            <p class="text-xl text-primary-100 max-w-3xl mx-auto">
                Kami siap membantu Anda dengan segala pertanyaan tentang pendidikan di Cendekia Muda. 
                Jangan ragu untuk menghubungi kami kapan saja.
            </p>
        </div>
    </div>
</section>

<!-- Contact Information Section -->
<section id="kontak" class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Informasi Kontak</h2>
            <div class="section-divider mb-8"></div>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Beragam cara untuk menghubungi kami. Pilih yang paling nyaman untuk Anda.
            </p>
        </div>

        <!-- Contact Cards -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <!-- Phone Contact -->
            <div class="contact-card bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <svg class="w-8 h-8 text-primary-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">Telepon</h3>
                <div class="space-y-2">
                    <p class="text-gray-600 text-center">
                        <span class="font-medium">Kantor Pusat:</span><br>
                        <a href="tel:+62214567890" class="text-primary-600 hover:text-primary-700">(021) 4567-890</a>
                    </p>
                    <p class="text-gray-600 text-center">
                        <span class="font-medium">Admisi:</span><br>
                        <a href="tel:+62214567891" class="text-primary-600 hover:text-primary-700">(021) 4567-891</a>
                    </p>
                </div>
            </div>

            <!-- Email Contact -->
            <div class="contact-card bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <svg class="w-8 h-8 text-primary-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">Email</h3>
                <div class="space-y-2">
                    <p class="text-gray-600 text-center">
                        <span class="font-medium">Info Umum:</span><br>
                        <a href="mailto:info@cendekiamuda.sch.id" class="text-primary-600 hover:text-primary-700">info@cendekiamuda.sch.id</a>
                    </p>
                    <p class="text-gray-600 text-center">
                        <span class="font-medium">Admisi:</span><br>
                        <a href="mailto:admisi@cendekiamuda.sch.id" class="text-primary-600 hover:text-primary-700">admisi@cendekiamuda.sch.id</a>
                    </p>
                </div>
            </div>

            <!-- Office Hours -->
            <div class="contact-card bg-white p-8 rounded-xl shadow-lg border border-gray-100 md:col-span-2 lg:col-span-1">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <svg class="w-8 h-8 text-primary-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                        <path d="m12.5 7-1 0v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">Jam Operasional</h3>
                <div class="space-y-2">
                    <p class="text-gray-600 text-center">
                        <span class="font-medium">Senin - Jumat:</span><br>
                        07:00 - 16:00 WIB
                    </p>
                    <p class="text-gray-600 text-center">
                        <span class="font-medium">Sabtu:</span><br>
                        08:00 - 12:00 WIB
                    </p>
                    <p class="text-gray-600 text-center text-sm">
                        <em>Minggu & Hari Libur Tutup</em>
                    </p>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="bg-gray-50 rounded-2xl p-8">
            <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Kirim Pesan</h3>
            <form class="max-w-2xl mx-auto space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Nomor Telepon</label>
                        <input type="tel" id="phone" name="phone" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subjek</label>
                        <select id="subject" name="subject" required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                            <option value="">Pilih Subjek</option>
                            <option value="admisi">Informasi Admisi</option>
                            <option value="fasilitas">Fasilitas Sekolah</option>
                            <option value="kurikulum">Kurikulum</option>
                            <option value="biaya">Informasi Biaya</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                    <textarea id="message" name="message" rows="6" required 
                              placeholder="Tuliskan pesan Anda di sini..."
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors resize-none"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn-primary text-lg px-8 py-4 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                        </svg>
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Location Section -->
<section id="lokasi" class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Lokasi Kami</h2>
            <div class="section-divider mb-8"></div>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Cendekia Muda berlokasi strategis dan mudah diakses dari berbagai arah kota.
            </p>
        </div>

        <!-- Location Details -->
        <div class="grid lg:grid-cols-2 gap-12 items-center mb-12">
            <!-- Address Information -->
            <div class="space-y-8">
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Alamat Lengkap</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Jl. Puri Ayu Pratama No. 17 Arcamanik<br>
                                Bandung, Jawa Barat, Indonesia
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Akses Transportasi</h3>
                            <ul class="text-gray-600 space-y-2">
                                <li>• 5 menit dari Stasiun Cendekia</li>
                                <li>• 10 menit dari Halte TransJakarta Pendidikan</li>
                                <li>• Akses mudah via Tol Dalam Kota</li>
                                <li>• Area parkir luas tersedia</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Fasilitas Sekitar</h3>
                            <ul class="text-gray-600 space-y-2">
                                <li>• Mall Cendekia Plaza (3 menit)</li>
                                <li>• Rumah Sakit Muda Sehat (5 menit)</li>
                                <li>• Bank dan ATM Center (2 menit)</li>
                                <li>• Food Court & Restoran (walking distance)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map -->
            <div>
                <div class="map-container">
                    <!-- Google Maps Embed -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d3960.7429655700553!2d107.6756!3d-6.9213!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwNTUnMTYuNyJTIDEwN8KwNDAnMzIuMiJF!5e0!3m2!1sen!2sus!4v1755433895932!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="mt-6 text-center">
                    <a href="https://goo.gl/maps/example" target="_blank" rel="noopener noreferrer" 
                       class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                        Lihat di Google Maps
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WhatsApp Section -->
<section id="whatsapp" class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Hubungi via WhatsApp</h2>
            <div class="section-divider mb-8"></div>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Dapatkan respon cepat melalui WhatsApp. Tim kami siap membantu Anda 24/7.
            </p>
        </div>

        <!-- WhatsApp Contact Options -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- General WhatsApp -->
            <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-xl border border-green-200">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Informasi Umum</h3>
                    <p class="text-gray-600 mb-6">Pertanyaan seputar sekolah dan program pendidikan</p>
                </div>
                <div class="text-center">
                    <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20bertanya%20tentang%20Cendekia%20Muda" 
                       target="_blank" rel="noopener noreferrer"
                       class="whatsapp-btn text-white px-6 py-3 rounded-lg font-semibold inline-flex items-center justify-center w-full">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                        </svg>
                        Chat Sekarang
                    </a>
                    <p class="text-sm text-gray-500 mt-2">+62 812-3456-7890</p>
                </div>
            </div>

            <!-- Admissions WhatsApp -->
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-xl border border-blue-200">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Penerimaan Siswa</h3>
                    <p class="text-gray-600 mb-6">Konsultasi pendaftaran dan persyaratan masuk</p>
                </div>
                <div class="text-center">
                    <a href="https://wa.me/6281234567891?text=Halo,%20saya%20ingin%20bertanya%20tentang%20pendaftaran%20siswa%20baru" 
                       target="_blank" rel="noopener noreferrer"
                       class="whatsapp-btn text-white px-6 py-3 rounded-lg font-semibold inline-flex items-center justify-center w-full">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                        </svg>
                        Chat Admisi
                    </a>
                    <p class="text-sm text-gray-500 mt-2">+62 812-3456-7891</p>
                </div>
            </div>

            <!-- Emergency WhatsApp -->
            <div class="bg-gradient-to-br from-red-50 to-red-100 p-8 rounded-xl border border-red-200 md:col-span-2 lg:col-span-1">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-red-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Darurat</h3>
                    <p class="text-gray-600 mb-6">Kontak darurat untuk orang tua dan siswa</p>
                </div>
                <div class="text-center">
                    <a href="https://wa.me/6281234567892?text=Ini%20adalah%20panggilan%20darurat" 
                       target="_blank" rel="noopener noreferrer"
                       class="whatsapp-btn text-white px-6 py-3 rounded-lg font-semibold inline-flex items-center justify-center w-full">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                        </svg>
                        Hubungi Darurat
                    </a>
                    <p class="text-sm text-gray-500 mt-2">+62 812-3456-7892</p>
                </div>
            </div>
        </div>

        <!-- WhatsApp Usage Tips -->
        <div class="mt-12 bg-green-50 rounded-xl p-8 border border-green-200">
            <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">Tips Menggunakan WhatsApp</h3>
            <div class="grid md:grid-cols-3 gap-6 text-sm text-gray-600">
                <div class="text-center">
                    <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-3">
                        <span class="text-white font-bold">1</span>
                    </div>
                    <p><strong>Perkenalkan diri</strong> dan sebutkan keperluan Anda dengan jelas</p>
                </div>
                <div class="text-center">
                    <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-3">
                        <span class="text-white font-bold">2</span>
                    </div>
                    <p><strong>Pilih nomor yang tepat</strong> sesuai dengan jenis pertanyaan Anda</p>
                </div>
                <div class="text-center">
                    <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-3">
                        <span class="text-white font-bold">3</span>
                    </div>
                    <p><strong>Tunggu respon</strong> dari tim kami dalam 1x24 jam</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Contact CTA -->
<section class="py-12 bg-primary-600">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">
            Masih Ada Pertanyaan?
        </h2>
        <p class="text-primary-100 mb-8">
            Tim kami siap membantu Anda 24/7. Jangan ragu untuk menghubungi kami.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:+62214567890" class="btn-secondary flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                </svg>
                Telepon Sekarang
            </a>
            <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20bertanya%20tentang%20Cendekia%20Muda" 
               target="_blank" rel="noopener noreferrer"
               class="whatsapp-btn text-white px-6 py-3 rounded-lg font-semibold inline-flex items-center justify-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                </svg>
                WhatsApp
            </a>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Form submission handling
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Show loading state
        const submitBtn = document.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<svg class="w-5 h-5 mr-2 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>Mengirim...';
        submitBtn.disabled = true;
        
        // Simulate form submission
        setTimeout(() => {
            alert('Pesan Anda telah terkirim! Kami akan menghubungi Anda segera.');
            this.reset();
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        }, 2000);
    });
</script>
@endpush
