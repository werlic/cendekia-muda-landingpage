@extends('learning.layouts.app')

@section('title', 'Ahsanu Amala')

@section('sidebar')
    <x-learning-sidebar active="ahsanu-amala" />
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
                <span class="text-blue-600 font-medium">Ahsanu Amala</span>
            </div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-3">
                <!-- Ahsanu Amala Header -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-8">
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h1 class="text-2xl font-bold text-gray-900">Ahsanu Amala</h1>
                            <p class="text-gray-600">Support Your Vision to get Jannah!</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-gray-600 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                </svg>
                                Lokasi anda sekarang
                            </p>
                            <p class="font-semibold text-gray-900">Kota Jakarta</p>
                        </div>
                    </div>

                    <!-- Search Bar -->
                    <div class="relative mb-6">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" placeholder="Cari Nama Surah" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Surah List -->
                    <div class="space-y-4">
                        <!-- Al-Fatihah -->
                        <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer transition-colors">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-blue-600 font-semibold">1</span>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Al-Fatihah</h3>
                                    <p class="text-sm text-gray-600">Pembukaan (7 Ayat)</p>
                                </div>
                            </div>
                            <div class="text-2xl text-gray-400">
                                ﷽
                            </div>
                        </div>

                        <!-- Al-Baqarah -->
                        <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer transition-colors">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-blue-600 font-semibold">2</span>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Al-Baqarah</h3>
                                    <p class="text-sm text-gray-600">Sapi (286 Ayat)</p>
                                </div>
                            </div>
                            <div class="text-2xl text-gray-400">
                                ﷽
                            </div>
                        </div>

                        <!-- Ali 'Imran -->
                        <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer transition-colors">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-blue-600 font-semibold">3</span>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Ali 'Imran</h3>
                                    <p class="text-sm text-gray-600">Keluarga Imran (200 Ayat)</p>
                                </div>
                            </div>
                            <div class="text-2xl text-gray-400">
                                ﷽
                            </div>
                        </div>

                        <!-- An-Nisa' -->
                        <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer transition-colors">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-blue-600 font-semibold">4</span>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">An-Nisa'</h3>
                                    <p class="text-sm text-gray-600">Wanita (176 Ayat)</p>
                                </div>
                            </div>
                            <div class="text-2xl text-gray-400">
                                ﷽
                            </div>
                        </div>

                        <!-- Al-Ma'idah -->
                        <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer transition-colors">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-blue-600 font-semibold">5</span>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Al-Ma'idah</h3>
                                    <p class="text-sm text-gray-600">Hidangan (120 Ayat)</p>
                                </div>
                            </div>
                            <div class="text-2xl text-gray-400">
                                ﷽
                            </div>
                        </div>

                        <!-- Al-An'am -->
                        <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer transition-colors">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-blue-600 font-semibold">6</span>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Al-An'am</h3>
                                    <p class="text-sm text-gray-600">Binatang Ternak (165 Ayat)</p>
                                </div>
                            </div>
                            <div class="text-2xl text-gray-400">
                                ﷽
                            </div>
                        </div>

                        <!-- Al-A'raf -->
                        <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer transition-colors">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-blue-600 font-semibold">7</span>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Al-A'raf</h3>
                                    <p class="text-sm text-gray-600">Tempat Tertinggi (206 Ayat)</p>
                                </div>
                            </div>
                            <div class="text-2xl text-gray-400">
                                ﷽
                            </div>
                        </div>

                        <!-- Al-Anfal -->
                        <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer transition-colors">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-blue-600 font-semibold">8</span>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Al-Anfal</h3>
                                    <p class="text-sm text-gray-600">Rampasan Perang (75 Ayat)</p>
                                </div>
                            </div>
                            <div class="text-2xl text-gray-400">
                                ﷽
                            </div>
                        </div>

                        <!-- At-Taubah -->
                        <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer transition-colors">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-blue-600 font-semibold">9</span>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">At-Taubah</h3>
                                    <p class="text-sm text-gray-600">Pengampunan (129 Ayat)</p>
                                </div>
                            </div>
                            <div class="text-2xl text-gray-400">
                                ﷽
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="lg:col-span-1">
                <!-- Calendar Widget -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-6">
                    <div class="flex items-center justify-between mb-4">
                        <button class="p-1 rounded-full hover:bg-gray-100">
                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <h3 class="font-semibold text-gray-900">April 2021</h3>
                        <button class="p-1 rounded-full hover:bg-gray-100">
                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    
                    <!-- Calendar Grid -->
                    <div class="grid grid-cols-7 gap-1 mb-4">
                        <div class="text-center text-xs font-medium text-gray-400 py-1">Se</div>
                        <div class="text-center text-xs font-medium text-gray-400 py-1">Se</div>
                        <div class="text-center text-xs font-medium text-gray-400 py-1">Ra</div>
                        <div class="text-center text-xs font-medium text-gray-400 py-1">Ka</div>
                        <div class="text-center text-xs font-medium text-gray-400 py-1">Ju</div>
                        <div class="text-center text-xs font-medium text-gray-400 py-1">Sa</div>
                        <div class="text-center text-xs font-medium text-gray-400 py-1">Mi</div>
                    </div>
                    
                    <div class="grid grid-cols-7 gap-1">
                        <!-- Calendar dates -->
                        @for($i = 1; $i <= 30; $i++)
                            <div class="text-center py-2 text-sm {{ $i === 16 ? 'bg-teal-500 text-white rounded-lg' : ($i === 13 || $i === 14 || $i === 15 || $i === 17 || $i === 18 || $i === 19 ? 'text-gray-900 hover:bg-gray-100 rounded-lg cursor-pointer' : 'text-gray-500') }}">
                                {{ $i }}
                            </div>
                        @endfor
                    </div>
                </div>

                <!-- Prayer Times -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-6">
                    <div class="bg-teal-500 text-white px-4 py-2 rounded-lg mb-4">
                        <div class="text-center">
                            <div class="text-sm">Imsak</div>
                            <div class="text-lg font-bold">04:36</div>
                        </div>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-gray-100 rounded-full flex items-center justify-center mr-3">
                                    <svg class="w-3 h-3 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <span class="text-sm font-medium text-gray-900">Subuh</span>
                            </div>
                            <span class="text-sm text-gray-600">04:48</span>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-gray-100 rounded-full flex items-center justify-center mr-3">
                                    <svg class="w-3 h-3 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 2L3 9l7 7 7-7-7-7zM10 6a2 2 0 100 4 2 2 0 000-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <span class="text-sm font-medium text-gray-900">Dzuhur</span>
                            </div>
                            <span class="text-sm text-gray-600">12:09</span>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-gray-100 rounded-full flex items-center justify-center mr-3">
                                    <svg class="w-3 h-3 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 2L3 9l7 7 7-7-7-7zM10 6a2 2 0 100 4 2 2 0 000-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <span class="text-sm font-medium text-gray-900">Ashar</span>
                            </div>
                            <span class="text-sm text-gray-600">15:24</span>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-gray-100 rounded-full flex items-center justify-center mr-3">
                                    <svg class="w-3 h-3 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 2L3 9l7 7 7-7-7-7zM10 6a2 2 0 100 4 2 2 0 000-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <span class="text-sm font-medium text-gray-900">Magrib</span>
                            </div>
                            <span class="text-sm text-gray-600">18:11</span>
                        </div>
                    </div>
                </div>

                <!-- Amaliah Quests -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-semibold text-gray-900">Amaliah Quests</h3>
                        <a href="#" class="text-blue-600 text-sm font-medium hover:text-blue-800">View All</a>
                    </div>
                    
                    <div class="space-y-4">
                        <!-- Quest 1 -->
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Dzikr "Allahu Akbar" 33 times</p>
                                    <p class="text-sm text-gray-500">0 / 33</p>
                                </div>
                            </div>
                        </div>

                        <!-- Quest 2 -->
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Tilawah 5 Page</p>
                                    <p class="text-sm text-gray-500">0 / 5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
