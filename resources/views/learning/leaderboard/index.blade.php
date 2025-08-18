@extends('learning.layouts.app')

@section('title', 'Leaderboard')

@section('sidebar')
    <x-learning-sidebar active="leaderboard" />
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
                <span class="text-yellow-600 font-medium">Leaderboards</span>
            </div>
        </div>

        <!-- Leaderboard Header -->
        <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl p-8 text-white mb-8 relative overflow-hidden">
            <div class="relative z-10">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-bold mb-2">Leaderboard</h1>
                        <p class="text-blue-100">SMA Islam Cendekia Muda</p>
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

        <!-- Ranking Filters -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-4 mb-6">
            <div class="flex flex-wrap gap-2">
                <button class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg font-medium">
                    world campus rank 🌍
                </button>
                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg font-medium">
                    course completed 📚
                </button>
                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg font-medium">
                    average grade 📊
                </button>
            </div>
        </div>

        <!-- Leaderboard Rankings -->
        <div class="space-y-4 mb-8">
            <!-- Rank 1 - Ahmad Mingyu A. -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="text-3xl font-bold text-blue-600 mr-6">01</div>
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&h=150&fit=crop&crop=face" 
                                 alt="Ahmad Mingyu A." class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Ahmad Mingyu A.</h3>
                            <p class="text-gray-600 text-sm">Massachusetts Institute of Technology</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-8">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-gray-900">865</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-gray-900">100%</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rank 2 - David Goh W. -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="text-3xl font-bold text-blue-600 mr-6">02</div>
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop&crop=face" 
                                 alt="David Goh W." class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">David Goh W.</h3>
                            <p class="text-gray-600 text-sm">Imperial College London</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-8">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-gray-900">855</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-gray-900">99%</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rank 5 - Ronaldo Senior -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="text-3xl font-bold text-blue-600 mr-6">05</div>
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=150&h=150&fit=crop&crop=face" 
                                 alt="Ronaldo Senior" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Ronaldo Senior</h3>
                            <p class="text-gray-600 text-sm">Stanford University</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-8">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-gray-900">832</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-gray-900">97%</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Current User Position -->
            <div class="bg-gradient-to-r from-blue-400 to-blue-500 rounded-xl p-6 text-white">
                <div class="text-center mb-4">
                    <div class="text-6xl font-bold mb-2">55</div>
                    <div class="text-xl font-semibold mb-1">Your result is higher than 60% of users</div>
                    <div class="text-blue-100">Keep Fighting and Sill Hamasah!</div>
                </div>
            </div>

            <!-- Rank 10 - Son Heung Min -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="text-3xl font-bold text-blue-600 mr-6">10</div>
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=150&h=150&fit=crop&crop=face" 
                                 alt="Son Heung Min" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Son Heung Min</h3>
                            <p class="text-gray-600 text-sm">Korea Advanced Institute of Science and Technology</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-8">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-gray-900">789</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-gray-900">85%</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rank 254 - Joko Widodo -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="text-3xl font-bold text-blue-600 mr-6">254</div>
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=150&h=150&fit=crop&crop=face" 
                                 alt="Joko Widodo" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Joko Widodo</h3>
                            <p class="text-gray-600 text-sm">Universitas Gadjah Mada</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-8">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-gray-900">789</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-gray-900">85%</div>
                        </div>
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

                    <button class="btn rounded-2xl px-6 py-4 border-2 border-gray-600 bg-transparent text-gray-900 hover:bg-gray-600 hover:text-gray-100">
                      <span class="font-semibold">Start a Courses</span>
                    </button>
                </div>

                <!-- Course Links -->
                <div class="p-4">
                    <div class="space-y-2 text-sm text-gray-500 grid grid-cols-3 gap-2">
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
