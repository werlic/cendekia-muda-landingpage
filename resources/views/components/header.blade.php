<!-- Header Component -->
<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex items-center">
                {{-- <div class="bg-primary-600 p-2 rounded-lg mr-3">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L2 7v10c0 5.55 3.84 9.74 8.9 10.95L12 28l1.1-.05C18.16 26.74 22 22.55 22 17V7L12 2z"/>
                    </svg>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-900">Cendekia Muda</h1>
                    <p class="text-xs text-gray-500">A Universal Islamic School</p>
                </div> --}}
                <img class="w-32" src="{{ asset('images/cendekia-muda.png') }}" alt="Cendekia Muda Logo">
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <div class="relative group">
                    <button class="nav-link flex items-center">
                        Tentang CM
                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <!-- Dropdown Menu -->
                    <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <div class="py-1">
                            <a href="{{ route('history') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sejarah</a>
                            <a href="{{ route('visi-misi') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Visi & Misi</a>
                            <a href="{{ route('facility') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Fasilitas</a>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <button class="nav-link flex items-center">
                        Unit/Departemen
                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <!-- Dropdown Menu -->
                    <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">PAUD</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">SD</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">SMP</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">SMA</a>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <button class="nav-link flex items-center">
                        Alumni/Prestasi
                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <!-- Dropdown Menu -->
                    <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Alumni Terbaik</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Prestasi Sekolah</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Prestasi Siswa</a>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <button class="nav-link flex items-center">
                        Publication/Article
                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <!-- Dropdown Menu -->
                    <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Berita</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Artikel</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Blog</a>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <button class="nav-link flex items-center">
                        Contact Us
                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <!-- Dropdown Menu -->
                    <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kontak</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Lokasi</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">WhatsApp</a>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- CTA Button -->
            <div class="hidden md:block">
                <a href="#daftar" class="btn-primary">
                    Daftar Sekarang!
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button type="button" class="text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700" onclick="toggleMobileMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 border-t border-gray-200">
                <div class="space-y-3">
                    <!-- Mobile Menu Items -->
                    <div>
                        <button class="text-gray-700 hover:text-primary-600 px-3 py-2 text-sm font-medium w-full text-left" onclick="toggleSubmenu('tentang')">
                            Tentang CM
                            <svg class="w-4 h-4 inline ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <div id="tentang-submenu" class="hidden pl-6 space-y-2">
                            <a href="#" class="block text-gray-600 hover:text-primary-600 px-3 py-1 text-sm">Sejarah</a>
                            <a href="#" class="block text-gray-600 hover:text-primary-600 px-3 py-1 text-sm">Visi & Misi</a>
                            <a href="#" class="block text-gray-600 hover:text-primary-600 px-3 py-1 text-sm">Fasilitas</a>
                        </div>
                    </div>

                    <div>
                        <button class="text-gray-700 hover:text-primary-600 px-3 py-2 text-sm font-medium w-full text-left" onclick="toggleSubmenu('unit')">
                            Unit/Departemen
                            <svg class="w-4 h-4 inline ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <div id="unit-submenu" class="hidden pl-6 space-y-2">
                            <a href="#" class="block text-gray-600 hover:text-primary-600 px-3 py-1 text-sm">PAUD</a>
                            <a href="#" class="block text-gray-600 hover:text-primary-600 px-3 py-1 text-sm">SD</a>
                            <a href="#" class="block text-gray-600 hover:text-primary-600 px-3 py-1 text-sm">SMP</a>
                            <a href="#" class="block text-gray-600 hover:text-primary-600 px-3 py-1 text-sm">SMA</a>
                        </div>
                    </div>

                    <div>
                        <button class="text-gray-700 hover:text-primary-600 px-3 py-2 text-sm font-medium w-full text-left" onclick="toggleSubmenu('alumni')">
                            Alumni/Prestasi
                            <svg class="w-4 h-4 inline ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <div id="alumni-submenu" class="hidden pl-6 space-y-2">
                            <a href="#" class="block text-gray-600 hover:text-primary-600 px-3 py-1 text-sm">Alumni Terbaik</a>
                            <a href="#" class="block text-gray-600 hover:text-primary-600 px-3 py-1 text-sm">Prestasi Sekolah</a>
                            <a href="#" class="block text-gray-600 hover:text-primary-600 px-3 py-1 text-sm">Prestasi Siswa</a>
                        </div>
                    </div>

                    <div>
                        <button class="text-gray-700 hover:text-primary-600 px-3 py-2 text-sm font-medium w-full text-left" onclick="toggleSubmenu('publication')">
                            Publication/Article
                            <svg class="w-4 h-4 inline ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <div id="publication-submenu" class="hidden pl-6 space-y-2">
                            <a href="#" class="block text-gray-600 hover:text-primary-600 px-3 py-1 text-sm">Berita</a>
                            <a href="#" class="block text-gray-600 hover:text-primary-600 px-3 py-1 text-sm">Artikel</a>
                            <a href="#" class="block text-gray-600 hover:text-primary-600 px-3 py-1 text-sm">Blog</a>
                        </div>
                    </div>

                    <div>
                        <button class="text-gray-700 hover:text-primary-600 px-3 py-2 text-sm font-medium w-full text-left" onclick="toggleSubmenu('contact')">
                            Contact Us
                            <svg class="w-4 h-4 inline ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <div id="contact-submenu" class="hidden pl-6 space-y-2">
                            <a href="#" class="block text-gray-600 hover:text-primary-600 px-3 py-1 text-sm">Kontak</a>
                            <a href="#" class="block text-gray-600 hover:text-primary-600 px-3 py-1 text-sm">Lokasi</a>
                            <a href="#" class="block text-gray-600 hover:text-primary-600 px-3 py-1 text-sm">WhatsApp</a>
                        </div>
                    </div>

                    <!-- Mobile CTA Button -->
                    <div class="pt-4">
                        <a href="#daftar" class="btn-primary block text-center">
                            Daftar Sekarang!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    }

    function toggleSubmenu(menuId) {
        const submenu = document.getElementById(menuId + '-submenu');
        submenu.classList.toggle('hidden');
    }
</script>
