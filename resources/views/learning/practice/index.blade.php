@extends('learning.layouts.app')

@section('title', 'Practice')

@section('sidebar')
    <x-learning-sidebar active="practice" />
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
                <span class="text-orange-600 font-medium">Practice</span>
            </div>
        </div>

        <!-- Featured Practice Section -->
        <div class="mb-8">
            <!-- Scrabble Text -->
            <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl p-8 text-white mb-8">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-bold mb-2">Scrabble Text</h1>
                        <p class="text-blue-100">Find the Right Text from Word</p>
                    </div>
                    <div class="w-16 h-16 bg-blue-600 rounded-lg flex items-center justify-center">
                        <svg class="h-6 w-6 text-gray-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Scrabble Game Board -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8 mb-8">
                <div class="text-center mb-8">
                    <div class="inline-block bg-blue-500 text-white px-6 py-2 rounded-lg font-bold text-xl mb-4">
                        STAIR <span class="text-sm">+6</span>
                    </div>
                </div>

                <!-- Scrabble Tiles Grid -->
                <div class="grid grid-cols-4 gap-2 max-w-md mx-auto mb-8">
                    <!-- Row 1 -->
                    <div class="w-16 h-16 bg-gray-200 rounded border-2 border-gray-300 flex items-center justify-center">
                        <span class="text-2xl font-bold text-gray-400">A</span>
                        <sub class="text-xs text-gray-400">1</sub>
                    </div>
                    <div class="w-16 h-16 bg-gray-200 rounded border-2 border-gray-300 flex items-center justify-center">
                        <span class="text-2xl font-bold text-gray-400">R</span>
                        <sub class="text-xs text-gray-400">1</sub>
                    </div>
                    <div class="w-16 h-16 bg-blue-500 rounded border-2 border-blue-600 flex items-center justify-center">
                        <span class="text-2xl font-bold text-white">E</span>
                        <sub class="text-xs text-white">1</sub>
                    </div>
                    <div class="w-16 h-16 bg-blue-500 rounded border-2 border-blue-600 flex items-center justify-center">
                        <span class="text-2xl font-bold text-white">C</span>
                        <sub class="text-xs text-white">3</sub>
                    </div>

                    <!-- Row 2 -->
                    <div class="w-16 h-16 bg-gray-200 rounded border-2 border-gray-300 flex items-center justify-center">
                        <span class="text-2xl font-bold text-gray-400">T</span>
                        <sub class="text-xs text-gray-400">1</sub>
                    </div>
                    <div class="w-16 h-16 bg-blue-500 rounded border-2 border-blue-600 flex items-center justify-center">
                        <span class="text-2xl font-bold text-white">U</span>
                        <sub class="text-xs text-white">2</sub>
                    </div>
                    <div class="w-16 h-16 bg-blue-500 rounded border-2 border-blue-600 flex items-center justify-center">
                        <span class="text-2xl font-bold text-white">B</span>
                        <sub class="text-xs text-white">3</sub>
                    </div>
                    <div class="w-16 h-16 bg-gray-200 rounded border-2 border-gray-300 flex items-center justify-center">
                        <span class="text-2xl font-bold text-gray-400">I</span>
                        <sub class="text-xs text-gray-400">1</sub>
                    </div>

                    <!-- Row 3 -->
                    <div class="w-16 h-16 bg-blue-500 rounded border-2 border-blue-600 flex items-center justify-center">
                        <span class="text-2xl font-bold text-white">P</span>
                        <sub class="text-xs text-white">3</sub>
                    </div>
                    <div class="w-16 h-16 bg-gray-200 rounded border-2 border-gray-300 flex items-center justify-center">
                        <span class="text-2xl font-bold text-gray-400">S</span>
                        <sub class="text-xs text-gray-400">1</sub>
                    </div>
                    <div class="w-16 h-16 bg-blue-500 rounded border-2 border-blue-600 flex items-center justify-center">
                        <span class="text-2xl font-bold text-white">N</span>
                        <sub class="text-xs text-white">1</sub>
                    </div>
                    <div class="w-16 h-16 bg-blue-500 rounded border-2 border-blue-600 flex items-center justify-center">
                        <span class="text-2xl font-bold text-white">D</span>
                        <sub class="text-xs text-white">2</sub>
                    </div>
                </div>

                <!-- Answer Options -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 max-w-2xl mx-auto">
                    <button class="px-8 py-4 bg-blue-500 text-white font-bold text-lg rounded-lg hover:bg-blue-600 transition-colors">
                        A
                    </button>
                    <button class="px-8 py-4 bg-green-500 text-white font-bold text-lg rounded-lg hover:bg-green-600 transition-colors">
                        B
                    </button>
                    <button class="px-8 py-4 bg-red-500 text-white font-bold text-lg rounded-lg hover:bg-red-600 transition-colors">
                        C
                    </button>
                    <button class="px-8 py-4 bg-pink-500 text-white font-bold text-lg rounded-lg hover:bg-pink-600 transition-colors">
                        D
                    </button>
                </div>
            </div>
        </div>

        <!-- Mathematics Practice Section -->
        <div class="mb-8">
            <!-- Mathematics Header -->
            <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl p-8 text-white mb-8">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-3xl font-bold mb-2">Mathematic's</h2>
                        <p class="text-blue-100">Mathernatic's Practice Test</p>
                    </div>
                    <div class="w-16 h-16 bg-blue-600 rounded-lg flex items-center justify-center">
                        <svg class="h-6 w-6 text-gray-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Mathematics Test -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">
                            1
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Find the Right Number</h3>
                            <p class="text-gray-600">Solve in 30 Minutes</p>
                        </div>
                    </div>
                </div>

                <!-- Number Puzzle Grid -->
                <div class="mb-8">
                    <div class="grid grid-cols-5 gap-2 max-w-lg mx-auto mb-8">
                        <!-- Row 1 -->
                        <div class="w-12 h-12 bg-yellow-400 rounded-lg flex items-center justify-center text-black font-bold">◊</div>
                        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center text-white font-bold">5</div>
                        <div class="w-12 h-12 bg-teal-500 rounded-lg flex items-center justify-center text-white font-bold">2</div>
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white font-bold">1</div>
                        <div class="w-12 h-12 bg-teal-500 rounded-lg flex items-center justify-center text-white font-bold">2</div>

                        <!-- Row 2 -->
                        <div class="w-12 h-12 bg-yellow-400 rounded-lg flex items-center justify-center text-black font-bold">◊</div>
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white font-bold">1</div>
                        <div class="w-12 h-12 bg-teal-500 rounded-lg flex items-center justify-center text-white font-bold">2</div>
                        <div class="w-12 h-12 bg-yellow-400 rounded-lg flex items-center justify-center text-black font-bold">◊</div>
                        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center text-white font-bold">5</div>

                        <!-- Additional rows for the pattern -->
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white font-bold">1</div>
                        <div class="w-12 h-12 bg-pink-500 rounded-lg flex items-center justify-center text-white font-bold">6</div>
                        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center text-white font-bold">5</div>
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white font-bold">1</div>
                        <div class="w-12 h-12 bg-pink-500 rounded-lg flex items-center justify-center text-white font-bold">6</div>

                        <div class="w-12 h-12 bg-orange-400 rounded-lg flex items-center justify-center text-white font-bold">8</div>
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white font-bold">1</div>
                        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center text-white font-bold">5</div>
                        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center text-white font-bold">5</div>
                        <div class="w-12 h-12 bg-orange-400 rounded-lg flex items-center justify-center text-white font-bold">8</div>

                        <div class="w-12 h-12 bg-pink-500 rounded-lg flex items-center justify-center text-white font-bold">6</div>
                        <div class="w-12 h-12 bg-pink-500 rounded-lg flex items-center justify-center text-white font-bold">6</div>
                        <div class="w-12 h-12 bg-teal-500 rounded-lg flex items-center justify-center text-white font-bold">2</div>
                        <div class="w-12 h-12 bg-pink-500 rounded-lg flex items-center justify-center text-white font-bold">6</div>
                        <div class="w-12 h-12 bg-pink-500 rounded-lg flex items-center justify-center text-white font-bold">6</div>

                        <div class="w-12 h-12 bg-orange-400 rounded-lg flex items-center justify-center text-white font-bold">8</div>
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white font-bold">1</div>
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white font-bold">1</div>
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white font-bold">1</div>
                        <div class="w-12 h-12 bg-orange-400 rounded-lg flex items-center justify-center text-white font-bold">8</div>
                    </div>

                    <!-- Duplicate pattern -->
                    <div class="grid grid-cols-5 gap-2 max-w-lg mx-auto">
                        <!-- Same pattern repeated -->
                        <div class="w-12 h-12 bg-yellow-400 rounded-lg flex items-center justify-center text-black font-bold">◊</div>
                        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center text-white font-bold">5</div>
                        <div class="w-12 h-12 bg-teal-500 rounded-lg flex items-center justify-center text-white font-bold">2</div>
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white font-bold">1</div>
                        <div class="w-12 h-12 bg-teal-500 rounded-lg flex items-center justify-center text-white font-bold">2</div>

                        <div class="w-12 h-12 bg-yellow-400 rounded-lg flex items-center justify-center text-black font-bold">◊</div>
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white font-bold">1</div>
                        <div class="w-12 h-12 bg-teal-500 rounded-lg flex items-center justify-center text-white font-bold">2</div>
                        <div class="w-12 h-12 bg-yellow-400 rounded-lg flex items-center justify-center text-black font-bold">◊</div>
                        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center text-white font-bold">5</div>

                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white font-bold">1</div>
                        <div class="w-12 h-12 bg-pink-500 rounded-lg flex items-center justify-center text-white font-bold">6</div>
                        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center text-white font-bold">5</div>
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white font-bold">1</div>
                        <div class="w-12 h-12 bg-pink-500 rounded-lg flex items-center justify-center text-white font-bold">6</div>

                        <div class="w-12 h-12 bg-orange-400 rounded-lg flex items-center justify-center text-white font-bold">8</div>
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white font-bold">1</div>
                        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center text-white font-bold">5</div>
                        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center text-white font-bold">5</div>
                        <div class="w-12 h-12 bg-orange-400 rounded-lg flex items-center justify-center text-white font-bold">8</div>

                        <div class="w-12 h-12 bg-pink-500 rounded-lg flex items-center justify-center text-white font-bold">6</div>
                        <div class="w-12 h-12 bg-pink-500 rounded-lg flex items-center justify-center text-white font-bold">6</div>
                        <div class="w-12 h-12 bg-teal-500 rounded-lg flex items-center justify-center text-white font-bold">2</div>
                        <div class="w-12 h-12 bg-pink-500 rounded-lg flex items-center justify-center text-white font-bold">6</div>
                        <div class="w-12 h-12 bg-pink-500 rounded-lg flex items-center justify-center text-white font-bold">6</div>

                        <div class="w-12 h-12 bg-orange-400 rounded-lg flex items-center justify-center text-white font-bold">8</div>
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white font-bold">1</div>
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white font-bold">1</div>
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white font-bold">1</div>
                        <div class="w-12 h-12 bg-orange-400 rounded-lg flex items-center justify-center text-white font-bold">8</div>
                    </div>
                </div>

                <!-- Answer Options -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 max-w-2xl mx-auto">
                    <button class="px-8 py-4 bg-blue-500 text-white font-bold text-lg rounded-lg hover:bg-blue-600 transition-colors">
                        A
                    </button>
                    <button class="px-8 py-4 bg-green-500 text-white font-bold text-lg rounded-lg hover:bg-green-600 transition-colors">
                        B
                    </button>
                    <button class="px-8 py-4 bg-red-500 text-white font-bold text-lg rounded-lg hover:bg-red-600 transition-colors">
                        C
                    </button>
                    <button class="px-8 py-4 bg-pink-500 text-white font-bold text-lg rounded-lg hover:bg-pink-600 transition-colors">
                        D
                    </button>
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
