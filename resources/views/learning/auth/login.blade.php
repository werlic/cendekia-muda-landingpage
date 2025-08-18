<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - SMA Islam Cendekia Muda</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full">
    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-blue-100 flex">
        <!-- Left Panel - Login Form -->
        <div class="flex-1 flex flex-col justify-center px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <!-- Logo -->
                <div class="flex items-center mb-8">
                    <img class="h-12 w-auto" src="{{ asset('images/cendekia-muda.png') }}" alt="SMA Islam Cendekia Muda">
                    <div class="ml-3">
                        <p class="text-lg font-semibold text-blue-600">SMA Islam</p>
                        <p class="text-lg font-semibold text-blue-600">Cendekia Muda</p>
                    </div>
                </div>

                <!-- Welcome Text -->
                <div class="mb-8">
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">Selamat Datang</h1>
                    <p class="text-gray-600">Smart School SMA Islam Cendekia Muda</p>
                </div>

                <!-- Login Form -->
                <form class="space-y-6" action="{{ route('learning.dashboard') }}" method="GET">
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                        <input 
                            id="username" 
                            name="username" 
                            type="text" 
                            required 
                            class="w-full px-3 py-3 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Masukan NIS"
                        >
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <input 
                            id="password" 
                            name="password" 
                            type="password" 
                            required 
                            class="w-full px-3 py-3 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Masukan Password"
                        >
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input 
                                id="remember-me" 
                                name="remember-me" 
                                type="checkbox" 
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                            >
                            <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember Me</label>
                        </div>

                        <div class="text-sm">
                            <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Forgot Password</a>
                        </div>
                    </div>

                    <div>
                        <button 
                            type="submit" 
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200"
                        >
                            Sign In
                        </button>
                    </div>
                </form>

                <!-- Information Section -->
                <div class="mt-8">
                    <div class="border-t border-gray-200 pt-6">
                        <h3 class="text-sm font-semibold text-gray-900 mb-4 uppercase tracking-wide">INFORMASI</h3>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <div class="w-1.5 h-1.5 bg-blue-600 rounded-full mt-2 mr-2 flex-shrink-0"></div>
                                Siswa login menggunakan Akun Cendekia Belajar
                            </li>
                            <li class="flex items-start">
                                <div class="w-1.5 h-1.5 bg-blue-600 rounded-full mt-2 mr-2 flex-shrink-0"></div>
                                Guru login menggunakan Akun Cendekia Mengajar
                            </li>
                            <li class="flex items-start">
                                <div class="w-1.5 h-1.5 bg-blue-600 rounded-full mt-2 mr-2 flex-shrink-0"></div>
                                Download Panduan Belajar SMAI Cendekia Muda
                            </li>
                            <li class="flex items-start">
                                <div class="w-1.5 h-1.5 bg-blue-600 rounded-full mt-2 mr-2 flex-shrink-0"></div>
                                Bila terjadi Error/Bug dapat menghubungi Tim IT
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Panel - Student Showcase -->
        <div class="hidden lg:block relative w-0 flex-1">
            <div class="inset-0 h-full w-full object-cover bg-gradient-to-br from-blue-400 to-blue-600">
                <!-- Student Card -->
                <div class="w-full h-full flex items-center justify-center px-8 py-8 lg:py-16">
                    <div class="bg-cover bg-center rounded-2xl shadow-2xl w-full h-full"
                    style="background-image: url('{{ asset('assets/images/classroom.jpg') }}')">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
