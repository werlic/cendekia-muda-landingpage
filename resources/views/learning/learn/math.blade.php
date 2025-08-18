@extends('learning.layouts.app')

@section('title', 'Mathematics Course')

@section('sidebar')
    <x-learning-sidebar active="learn" />
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
                <a href="{{ route('learning.learn') }}" class="hover:text-gray-700">Learn</a>
                <svg class="mx-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="text-blue-600 font-medium">Math Course</span>
            </div>
        </div>

        <!-- Course Header -->
        <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl p-8 text-white mb-8">
            <h1 class="text-3xl font-bold mb-2">Mathematic's Course</h1>
            <div class="flex items-center mb-4">
                <div class="w-16 h-16 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <p class="text-blue-100">Mathematics Course</p>
                </div>
            </div>
        </div>

        <!-- Progress Section -->
        <div class="bg-purple-600 rounded-xl p-6 text-white mb-8">
            <div class="flex justify-between items-center mb-4">
                <span class="text-lg font-semibold">Progress 44.4%</span>
                <div class="flex items-center space-x-4">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <span>10 000</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z" />
                        </svg>
                        <span>10 000</span>
                    </div>
                </div>
            </div>

            <!-- Progress Bar -->
            <div class="w-full bg-purple-400 rounded-full h-2 mb-6">
                <div class="bg-white h-2 rounded-full" style="width: 44.4%"></div>
            </div>

            <!-- Topics Progress -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Truth-Tellers and Liars -->
                <div class="bg-purple-700 rounded-lg p-3">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium">Truth-Tellers and Liars</span>
                        <span class="text-sm">36%</span>
                    </div>
                    <div class="w-full bg-purple-500 rounded-full h-1">
                        <div class="bg-white h-1 rounded-full" style="width: 36%"></div>
                    </div>
                </div>

                <!-- Syllogistic Logic -->
                <div class="bg-purple-700 rounded-lg p-3">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium">Syllogistic Logic</span>
                        <span class="text-sm">12%</span>
                    </div>
                    <div class="w-full bg-purple-500 rounded-full h-1">
                        <div class="bg-white h-1 rounded-full" style="width: 12%"></div>
                    </div>
                </div>

                <!-- Propositional Logic -->
                <div class="bg-purple-700 rounded-lg p-3">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium">Propositional Logic</span>
                        <span class="text-sm">67%</span>
                    </div>
                    <div class="w-full bg-purple-500 rounded-full h-1">
                        <div class="bg-white h-1 rounded-full" style="width: 67%"></div>
                    </div>
                </div>

                <!-- And more topics... -->
                <div class="bg-purple-700 rounded-lg p-3">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium">Infinitesimal Paradoxes</span>
                        <span class="text-sm">87%</span>
                    </div>
                    <div class="w-full bg-purple-500 rounded-full h-1">
                        <div class="bg-white h-1 rounded-full" style="width: 87%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Course Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <!-- Current Topic -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold text-gray-900">Propositional Logic</h3>
                        <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">
                            Solved: 140 ua 160
                        </span>
                    </div>
                    
                    <!-- Lesson Items -->
                    <div class="space-y-4">
                        <!-- Lesson 1 -->
                        <div class="flex items-center p-4 bg-green-50 border border-green-200 rounded-lg">
                            <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
                                1
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Paradoxes in Probability</h4>
                                        <p class="text-sm text-gray-600">Tasks: 6</p>
                                    </div>
                                    <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Lesson 2 -->
                        <div class="flex items-center p-4 bg-green-50 border border-green-200 rounded-lg">
                            <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
                                2
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Math of Voting</h4>
                                        <p class="text-sm text-gray-600">Tasks: 12</p>
                                    </div>
                                    <div class="flex space-x-2">
                                        <div class="w-6 h-6 bg-blue-500 rounded flex items-center justify-center">
                                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                        </div>
                                        <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Lesson 3 -->
                        <div class="flex items-center p-4 bg-white border border-gray-200 rounded-lg">
                            <div class="w-8 h-8 bg-gray-400 rounded-full flex items-center justify-center text-white font-bold mr-4">
                                3
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Operator Search</h4>
                                        <p class="text-sm text-gray-600">Tasks: 2 of 8</p>
                                    </div>
                                    <button class="px-4 py-2 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700">
                                        Start
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Lesson 4 & 5 (Locked) -->
                        <div class="flex items-center p-4 bg-gray-50 border border-gray-200 rounded-lg opacity-50">
                            <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center text-white font-bold mr-4">
                                4
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-600">Logical Reasoning</h4>
                                <p class="text-sm text-gray-500">Locked</p>
                            </div>
                        </div>

                        <div class="flex items-center p-4 bg-gray-50 border border-gray-200 rounded-lg opacity-50">
                            <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center text-white font-bold mr-4">
                                5
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-600">Infinitesimal Paradoxes</h4>
                                <p class="text-sm text-gray-500">Locked</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
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
