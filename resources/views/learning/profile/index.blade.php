@extends('learning.layouts.app')

@section('title', 'Profile')

@section('sidebar')
    <x-learning-sidebar active="profile" />
@endsection

@section('header')
    <x-learning-header user="Iman Ahmad Gymnastiar" />
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
                <span class="text-blue-600 font-medium">Profile</span>
            </div>
        </div>

        <!-- Profile Header -->
        <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl p-8 text-white mb-8 relative overflow-hidden">
            <div class="relative z-10">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-bold mb-2">Selamat Datang</h1>
                        <p class="text-blue-100">Assalamu'alaikum, Iman Ahmad Gymnastiar</p>
                    </div>
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-2xl font-bold">🏆</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Decorative elements -->
            <div class="absolute top-4 right-4 text-6xl opacity-20">✨</div>
            <div class="absolute bottom-4 left-4 text-4xl opacity-20">⭐</div>
        </div>

        <!-- Profile Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column - Profile Info -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Statistics Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    <!-- Day Streak -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-gray-900">33</p>
                                <p class="text-sm text-gray-600">Day Streak</p>
                            </div>
                        </div>
                    </div>

                    <!-- Course Completed -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-gray-900">55</p>
                                <p class="text-sm text-gray-600">Course Completed</p>
                            </div>
                        </div>
                    </div>

                    <!-- Day Mumtaz -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-gray-900">33</p>
                                <p class="text-sm text-gray-600">Day Mumtaz</p>
                                <p class="text-xs text-gray-500">Ahsanu Amala</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Achievements Section -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-6">All achievements</h3>
                    
                    <div class="space-y-4">
                        <!-- Wildfire Achievement -->
                        <div class="flex items-center justify-between p-4 bg-orange-50 rounded-lg border border-orange-200">
                            <div class="flex items-center">
                                <div class="w-16 h-16 bg-gradient-to-br from-red-400 to-orange-500 rounded-lg flex items-center justify-center mr-4">
                                    <div class="text-2xl">🔥</div>
                                    <div class="absolute -bottom-1 -right-1 bg-red-600 text-white text-xs font-bold px-1 rounded">LEVEL 2</div>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Wildfire</h4>
                                    <p class="text-sm text-gray-600">Reach a 7 day streak</p>
                                    <div class="w-48 bg-orange-200 rounded-full h-2 mt-2">
                                        <div class="bg-orange-500 h-2 rounded-full" style="width: 57%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-sm text-gray-500">4/7</div>
                        </div>

                        <!-- Sage Achievement -->
                        <div class="flex items-center justify-between p-4 bg-green-50 rounded-lg border border-green-200">
                            <div class="flex items-center">
                                <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-blue-500 rounded-lg flex items-center justify-center mr-4 relative">
                                    <div class="text-2xl">🧠</div>
                                    <div class="absolute -bottom-1 -right-1 bg-green-600 text-white text-xs font-bold px-1 rounded">LEVEL 4</div>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Sage</h4>
                                    <p class="text-sm text-gray-600">Earn 1000 XP</p>
                                    <div class="w-48 bg-green-200 rounded-full h-2 mt-2">
                                        <div class="bg-green-500 h-2 rounded-full" style="width: 55%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-sm text-gray-500">550/1000</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Profile Details -->
            <div class="lg:col-span-1 space-y-6">
                <!-- Profile Card -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-white">IG</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Iman Ahmad Gymnastiar</h3>
                        <p class="text-sm text-gray-600 mb-2">25010001</p>
                        
                        <div class="border-t border-gray-200 pt-4 mt-4">
                            <div class="grid grid-cols-2 gap-4 text-sm">
                                <div>
                                    <p class="text-gray-500">Kelas</p>
                                    <p class="font-medium text-gray-900">X Ikhwan</p>
                                </div>
                                <div>
                                    <p class="text-gray-500">Jurusan</p>
                                    <p class="font-medium text-gray-900">IPA / Sains</p>
                                </div>
                                <div>
                                    <p class="text-gray-500">Angkatan</p>
                                    <p class="font-medium text-gray-900">2025</p>
                                </div>
                                <div>
                                    <p class="text-gray-500">Jenis Kelamin</p>
                                    <p class="font-medium text-gray-900">Laki-Laki</p>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex space-x-2 mt-6">
                            <button class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-700">
                                👤
                            </button>
                            <button class="flex-1 bg-gray-200 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-300">
                                ⚙️
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Monthly Challenges -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <h3 class="font-semibold text-gray-900 mb-2">Monthly Challenges</h3>
                    <h4 class="font-semibold text-gray-900 mb-2">Unlock Soon!</h4>
                    <p class="text-sm text-gray-600 mb-4">Complete each month's challenge to earn exclusive lesson and badges</p>
                    
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                    </div>
                </div>

                <!-- Start a Courses -->
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
