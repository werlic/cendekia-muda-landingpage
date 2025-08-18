@extends('learning.layouts.app')

@section('title', 'Quests')

@section('sidebar')
    <x-learning-sidebar active="quests" />
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
                <span class="text-blue-600 font-medium">Quests</span>
            </div>
        </div>

        <!-- Quest Header with Rewards -->
        <div class="bg-gradient-to-r from-blue-500 to-teal-600 rounded-xl p-8 text-white mb-8 relative overflow-hidden">
            <div class="relative z-10">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-bold mb-2">Earn rewards with quests!</h1>
                        <h2 class="text-xl mb-2">You've completed</h2>
                        <h3 class="text-2xl font-bold">1 out of 3 quests <span class="text-teal-200">today</span></h3>
                    </div>
                    <div class="flex items-center">
                        <!-- Pirate Character Illustration -->
                        <div class="relative">
                            <div class="w-32 h-32 bg-orange-400 rounded-full flex items-center justify-center mr-8">
                                <div class="text-6xl">🏴‍☠️</div>
                            </div>
                            <!-- Treasure chest -->
                            <div class="absolute -bottom-2 -right-4 w-16 h-12 bg-yellow-500 rounded-lg flex items-center justify-center">
                                <div class="text-2xl">💰</div>
                            </div>
                        </div>
                        <!-- Palm tree -->
                        <div class="text-6xl opacity-70">🌴</div>
                    </div>
                </div>
            </div>
            <!-- Decorative clouds -->
            <div class="absolute top-4 right-1/4 text-4xl opacity-30">☁️</div>
            <div class="absolute top-8 right-1/3 text-3xl opacity-20">☁️</div>
        </div>

        <!-- Time Remaining -->
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-bold text-gray-900">Daily Quests</h2>
            <div class="flex items-center text-blue-600">
                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                </svg>
                <span class="font-semibold">2 Hours</span>
            </div>
        </div>

        <!-- Daily Quests List -->
        <div class="space-y-6">
            <!-- Quest 1 - Learn 10 Minutes -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                            <div class="w-8 h-8 bg-purple-500 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Learn 10 Minutes</h3>
                            <div class="flex items-center">
                                <div class="w-32 bg-gray-200 rounded-full h-2 mr-3">
                                    <div class="bg-blue-500 h-2 rounded-full" style="width: 0%"></div>
                                </div>
                                <span class="text-sm text-gray-500">0 / 10</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center">
                        <div class="text-2xl">📚</div>
                    </div>
                </div>
            </div>

            <!-- Quest 2 - Tilawah 5 Page -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                            <div class="w-8 h-8 bg-purple-500 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Tilawah 5 Page</h3>
                            <div class="flex items-center">
                                <div class="w-32 bg-gray-200 rounded-full h-2 mr-3">
                                    <div class="bg-blue-500 h-2 rounded-full" style="width: 0%"></div>
                                </div>
                                <span class="text-sm text-gray-500">0 / 5</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center">
                        <div class="text-2xl">📚</div>
                    </div>
                </div>
            </div>

            <!-- Quest 3 - Completed 1 Lessons -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                            <div class="w-8 h-8 bg-purple-500 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Completed 1 Lessons</h3>
                            <div class="flex items-center">
                                <div class="w-32 bg-gray-200 rounded-full h-2 mr-3">
                                    <div class="bg-blue-500 h-2 rounded-full" style="width: 0%"></div>
                                </div>
                                <span class="text-sm text-gray-500">0 / 1</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center">
                        <div class="text-2xl">📚</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar with Course Information -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 mt-8">
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
