@extends('learning.layouts.app')

@section('title', 'Learn')

@section('sidebar')
    <x-learning-sidebar active="learn" />
@endsection

@section('header')
    <x-learning-header user="Iman Ahmad Gymnastiar" showSearch="true" />
@endsection

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <!-- Page Header -->
        <div class="mb-8">
            <div class="flex items-center text-sm text-gray-500 mb-2">
                <a href="{{ route('learning.dashboard') }}" class="hover:text-gray-700">Dashboard</a>
                <svg class="mx-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="text-blue-600 font-medium">Learn</span>
            </div>
            <h1 class="text-2xl font-bold text-gray-900 mb-2">Your Courses</h1>
            <p class="text-gray-600">Iman Ahmad Gymnastiar</p>
            <p class="text-sm text-gray-500">X Ikhwan - IPS</p>
        </div>

        <!-- Your Courses Section -->
        <div class="mb-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Course 1 - Gaya Gravitasi -->
                <div class="bg-gradient-to-br from-green-400 to-blue-500 rounded-xl p-6 text-white cursor-pointer hover:shadow-lg transition-shadow">
                    <div class="h-16 mb-4 flex items-center">
                        <svg class="w-12 h-12 text-white opacity-80" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-1">Gaya Gravitasi</h3>
                    <p class="text-sm text-white text-opacity-90 mb-2">Nabila Haifa, M.Si</p>
                    <p class="text-xs text-white text-opacity-70">© last opened 3 minutes ago</p>
                </div>

                <!-- Course 2 - Kalkulus II -->
                <div class="bg-gradient-to-br from-teal-500 to-green-600 rounded-xl p-6 text-white cursor-pointer hover:shadow-lg transition-shadow">
                    <div class="h-16 mb-4 flex items-center">
                        <svg class="w-12 h-12 text-white opacity-80" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-1">Kalkulus II</h3>
                    <p class="text-sm text-white text-opacity-90 mb-2">M. Agung Prayogo, M.Si</p>
                    <p class="text-xs text-white text-opacity-70">© last opened 3 minutes ago</p>
                </div>

                <!-- Course 3 - Sejarah Indonesia II -->
                <div class="bg-gradient-to-br from-orange-400 to-red-500 rounded-xl p-6 text-white cursor-pointer hover:shadow-lg transition-shadow">
                    <div class="h-16 mb-4 flex items-center">
                        <svg class="w-12 h-12 text-white opacity-80" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-1">Sejarah Indonesia II</h3>
                    <p class="text-sm text-white text-opacity-90 mb-2">Yudi Karyanto, S.Ag, M.Pd</p>
                    <p class="text-xs text-white text-opacity-70">© last opened 3 minutes ago</p>
                </div>

                <!-- Course 4 - Fotosintesis Tumbuhan -->
                <div class="bg-gradient-to-br from-blue-400 to-indigo-600 rounded-xl p-6 text-white cursor-pointer hover:shadow-lg transition-shadow">
                    <div class="h-16 mb-4 flex items-center">
                        <svg class="w-12 h-12 text-white opacity-80" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-1">Fotosintesis Tumbuhan</h3>
                    <p class="text-sm text-white text-opacity-90 mb-2">Hilda Hidayat, M.Si</p>
                    <p class="text-xs text-white text-opacity-70">© last opened 3 minutes ago</p>
                </div>
            </div>
        </div>

        <!-- All Courses Section -->
        <div class="mb-8">
            <h2 class="text-xl font-bold text-gray-900 mb-6">Courses</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Course 1 - Islam dan Buya Hamka -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden cursor-pointer hover:shadow-md transition-shadow">
                    <div class="h-32 bg-gradient-to-r from-yellow-400 to-orange-500"></div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 mb-1">Islam dan Buya Hamka</h3>
                        <p class="text-sm text-gray-600 mb-2">Firman Albar, M.Sos</p>
                        <p class="text-xs text-gray-400">© recommend for you</p>
                    </div>
                </div>

                <!-- Course 2 - Bangun Ruang Geometri -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden cursor-pointer hover:shadow-md transition-shadow">
                    <div class="h-32 bg-gradient-to-r from-teal-400 to-blue-500"></div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 mb-1">Bangun Ruang Geometri</h3>
                        <p class="text-sm text-gray-600 mb-2">Emy Febrianti, M.Si</p>
                        <p class="text-xs text-gray-400">© recommend for you</p>
                    </div>
                </div>

                <!-- Course 3 - Tangga Nada Modern -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden cursor-pointer hover:shadow-md transition-shadow">
                    <div class="h-32 bg-gradient-to-r from-red-400 to-pink-500"></div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 mb-1">Tangga Nada Modern</h3>
                        <p class="text-sm text-gray-600 mb-2">Umaroz Alamhudi, M.Si</p>
                        <p class="text-xs text-gray-400">© recommend for you</p>
                    </div>
                </div>

                <!-- Course 4 - Simple Past Tense -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden cursor-pointer hover:shadow-md transition-shadow">
                    <div class="h-32 bg-gradient-to-r from-blue-500 to-indigo-600"></div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 mb-1">Simple Past Tense</h3>
                        <p class="text-sm text-gray-600 mb-2">Dr. Agung Abiasa, M.Hum</p>
                        <p class="text-xs text-gray-400">© recommend for you</p>
                    </div>
                </div>

                <!-- Duplicate courses for second row -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden cursor-pointer hover:shadow-md transition-shadow">
                    <div class="h-32 bg-gradient-to-r from-yellow-400 to-orange-500"></div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 mb-1">Islam dan Buya Hamka</h3>
                        <p class="text-sm text-gray-600 mb-2">Firman Albar, M.Sos</p>
                        <p class="text-xs text-gray-400">© recommend for you</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden cursor-pointer hover:shadow-md transition-shadow">
                    <div class="h-32 bg-gradient-to-r from-teal-400 to-blue-500"></div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 mb-1">Bangun Ruang Geometri</h3>
                        <p class="text-sm text-gray-600 mb-2">Emy Febrianti, M.Si</p>
                        <p class="text-xs text-gray-400">© recommend for you</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden cursor-pointer hover:shadow-md transition-shadow">
                    <div class="h-32 bg-gradient-to-r from-red-400 to-pink-500"></div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 mb-1">Tangga Nada Modern</h3>
                        <p class="text-sm text-gray-600 mb-2">Umaroz Alamhudi, M.Si</p>
                        <p class="text-xs text-gray-400">© recommend for you</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden cursor-pointer hover:shadow-md transition-shadow">
                    <div class="h-32 bg-gradient-to-r from-blue-500 to-indigo-600"></div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 mb-1">Simple Past Tense</h3>
                        <p class="text-sm text-gray-600 mb-2">Dr. Agung Abiasa, M.Hum</p>
                        <p class="text-xs text-gray-400">© recommend for you</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar with Course Information -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <div class="lg:col-span-3">
                <!-- Additional content can go here -->
            </div>
            
            <div class="lg:col-span-1">
                <!-- Monthly Challenges Card -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-6">
                    <h3 class="font-semibold text-gray-900 mb-2">Monthly Challenges</h3>
                    <h4 class="font-semibold text-gray-900 mb-2">Unlock Soon!</h4>
                    <p class="text-sm text-gray-600 mb-4">Complete each month's challenge to earn exclusive lesson and badges</p>
                    
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                    </div>
                </div>

                <!-- Start a Courses Card -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <h3 class="font-semibold text-gray-900 mb-4">Start a Courses</h3>
                    
                    <div class="space-y-2 text-sm text-gray-500">
                        <a href="#" class="block hover:text-gray-700">About</a>
                        <a href="#" class="block hover:text-gray-700">Article</a>
                        <a href="#" class="block hover:text-gray-700">Publications</a>
                        <a href="#" class="block hover:text-gray-700">Career</a>
                        <a href="#" class="block hover:text-gray-700">Terms</a>
                        <a href="#" class="block hover:text-gray-700">Privacy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
