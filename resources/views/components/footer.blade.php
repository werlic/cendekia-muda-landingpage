<!-- Footer Component -->
<footer class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="lg:col-span-2">
                <div class="grid grid-rows-2 gap-1 auto-rows-max">
                    <div class="row-span-1">
                        <div class="flex items-center mb-4">
                            {{-- <div class="bg-primary-600 p-2 rounded-lg mr-3">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2L2 7v10c0 5.55 3.84 9.74 8.9 10.95L12 28l1.1-.05C18.16 26.74 22 22.55 22 17V7L12 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold">Cendekia Muda</h3>
                                <p class="text-sm text-gray-300">A Universal Islamic School</p>
                            </div> --}}
                            <img class="w-32" src="{{ asset('images/cendekia-muda.png') }}" alt="Cendekia Muda Logo">
                        </div>
                        <p class="text-gray-300 mb-4 max-w-md">
                            Membentuk generasi cendekia yang berkarakter Islami, berakhlak mulia, dan siap menghadapi tantangan zaman dengan ilmu pengetahuan dan teknologi terkini.
                        </p>
                    </div>
                    <div class="row-span-1">
                        <!-- Contact Info -->
                        <h4 class="text-lg font-semibold mb-4">Kontak Kami</h4>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-primary-400 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                </svg>
                                <div>
                                    <p class="text-gray-300 text-sm">
                                        Jl. Puri Ayu Pratama No. 17 Arcamanik<br>
                                        Bandung, Jawa Barat, Indonesia
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-primary-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                </svg>
                                <p class="text-gray-300 text-sm">+62 821 3456 7890</p>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-primary-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                </svg>
                                <p class="text-gray-300 text-sm">info@cendekiamuda.sch.id</p>
                            </div>
                        </div>
                        <div class="flex mt-3 space-x-4">
                            <a href="#" class="text-gray-300 hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-300 hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.097.118.112.221.082.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.748-1.378 0 0-.599 2.282-.744 2.840-.282 1.084-1.064 2.456-1.549 3.235C9.584 23.815 10.77 24.001 12.017 24.001c6.624 0 11.99-5.367 11.99-12.014C24.007 5.367 18.641.001 12.017.001z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-300 hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.036 6.24c-3.315 0-6 2.685-6 6s2.685 6 6 6 6-2.685 6-6-2.685-6-6-6zm0 9.9c-2.148 0-3.9-1.752-3.9-3.9s1.752-3.9 3.9-3.9 3.9 1.752 3.9 3.9-1.752 3.9-3.9 3.9zm7.68-10.08c0 .774-.63 1.404-1.404 1.404-.774 0-1.404-.63-1.404-1.404s.63-1.404 1.404-1.404 1.404.63 1.404 1.404zm3.99 1.424c-.089-1.884-.518-3.555-1.89-4.926-1.371-1.371-3.042-1.801-4.926-1.89C15.015.564 12.985.564 11.1.648c-1.884.089-3.555.518-4.926 1.89C4.803 3.909 4.373 5.58 4.284 7.464c-.084 1.884-.084 3.914 0 5.798.089 1.884.518 3.555 1.89 4.926 1.371 1.371 3.042 1.801 4.926 1.89 1.884.084 3.914.084 5.798 0 1.884-.089 3.555-.518 4.926-1.89 1.371-1.371 1.801-3.042 1.89-4.926.084-1.884.084-3.914 0-5.798z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="lg:col-span-2">
                <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Tentang Kami</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Curriculum</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Open Admission</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Kegiatan</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Program Pendidikan</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Fasilitas</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Madinah Immersion</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Singapore Adventure in Race</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Germany Abrod Program</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="border-t border-gray-700 mt-6 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">
                    © {{ date('Y') }} Cendekia Muda. All rights reserved.
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Sitemap</a>
                </div>
            </div>
        </div>
    </div>
</footer>
