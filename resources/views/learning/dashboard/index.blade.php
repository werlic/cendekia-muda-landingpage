@extends('learning.layouts.app')

@section('title', 'Dashboard')

@section('sidebar')
    <x-learning-sidebar active="dashboard" />
@endsection

@section('header')
    <x-learning-header user="Iman Ahmad Gymnastiar" />
@endsection

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <!-- Welcome Section -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-900 mb-2">Selamat Datang, Iman!</h1>
            <p class="text-gray-600 flex items-center">
                Mari Semangat Belajar & Dapatkan Ridho Allah 
                <span class="ml-1">💪</span>
            </p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Learning Times -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-500">Learning Times</p>
                        <p class="text-2xl font-bold text-gray-900">25 <span class="text-sm font-normal">minutes</span></p>
                    </div>
                </div>
            </div>

            <!-- Amalan Yaumiah -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-500">Amalan Yaumiah</p>
                        <p class="text-2xl font-bold text-gray-900">40%</p>
                    </div>
                </div>
            </div>

            <!-- Reading Qur'an -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-500">Reading Qur'an</p>
                        <p class="text-2xl font-bold text-gray-900">10% <span class="text-sm font-normal">/ 1 Juz</span></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Study Success Chart -->
            <div class="lg:col-span-2 bg-white overflow-hidden shadow-sm rounded-lg p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-semibold text-gray-900">Study Success</h3>
                    <button class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700">
                        Learn More
                    </button>
                </div>
                
                <!-- Chart Placeholder -->
                <div class="h-64 bg-gradient-to-r from-blue-50 to-blue-100 rounded-lg flex items-end justify-center space-x-2 p-4">
                    <!-- Chart bars -->
                    <div class="w-8 bg-blue-400 rounded-t" style="height: 60%"></div>
                    <div class="w-8 bg-blue-500 rounded-t" style="height: 45%"></div>
                    <div class="w-8 bg-blue-400 rounded-t" style="height: 70%"></div>
                    <div class="w-8 bg-blue-500 rounded-t" style="height: 55%"></div>
                    <div class="w-8 bg-blue-600 rounded-t" style="height: 85%"></div>
                    <div class="w-8 bg-blue-500 rounded-t" style="height: 90%"></div>
                    <div class="w-8 bg-blue-400 rounded-t" style="height: 75%"></div>
                    <div class="w-8 bg-blue-600 rounded-t" style="height: 65%"></div>
                    <div class="w-8 bg-blue-500 rounded-t" style="height: 80%"></div>
                    <div class="w-8 bg-blue-400 rounded-t" style="height: 70%"></div>
                    <div class="w-8 bg-blue-600 rounded-t" style="height: 95%"></div>
                    <div class="w-8 bg-blue-500 rounded-t" style="height: 85%"></div>
                </div>
                
                <!-- Chart Labels -->
                <div class="flex justify-between text-sm text-gray-500 mt-4">
                    <span>January</span>
                    <span>February</span>
                    <span>March</span>
                    <span>April</span>
                    <span>June</span>
                    <span>July</span>
                    <span>August</span>
                </div>
            </div>

            <!-- Pomodoro Timer & Daily Quests -->
            <div class="space-y-6">
                <!-- Pomodoro Timer -->
                <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Pomodoro Timer</h3>
                    <p class="text-sm text-gray-600 mb-4">dapat digunakan untuk mengatur waktu belajar dan istirahat dalam belajar</p>
                    
                    <!-- Timer Display -->
                    <div class="text-center mb-6">
                        <div class="w-32 h-32 mx-auto rounded-full bg-teal-500 flex items-center justify-center mb-4">
                            <div class="text-white">
                                <div class="text-2xl font-bold">11:00</div>
                            </div>
                        </div>
                        <div class="text-3xl font-bold text-gray-900">00.00.00</div>
                    </div>
                </div>

                <!-- Daily Quests -->
                <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold text-gray-900">Daily Quests</h3>
                        <a href="{{ route('learning.quests') }}" class="text-blue-600 text-sm font-medium hover:text-blue-800">View All</a>
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
                                    <p class="font-medium text-gray-900">Learn 10 Minutes</p>
                                    <p class="text-sm text-gray-500">0 / 10</p>
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

                        <!-- Quest 3 -->
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Completed 1 Lessons</p>
                                    <p class="text-sm text-gray-500">0 / 1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity Section -->
        <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Recent Image 1 -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <img class="w-full h-48 object-cover" src="{{ asset('images/education-back-to-school.png') }}" alt="Education">
                <div class="p-4">
                    <h4 class="font-medium text-gray-900">Back to School Preparation</h4>
                    <p class="text-sm text-gray-600 mt-1">Get ready for the new academic year</p>
                </div>
            </div>

            <!-- Recent Image 2 -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <img class="w-full h-48 object-cover" src="{{ asset('images/GoodHealth.png') }}" alt="Health">
                <div class="p-4">
                    <h4 class="font-medium text-gray-900">Maintain Good Health</h4>
                    <p class="text-sm text-gray-600 mt-1">Stay healthy while learning</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
