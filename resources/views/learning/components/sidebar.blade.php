@props(['active' => null])

<div class="flex flex-col h-full">
    <!-- Logo -->
    <div class="flex items-center flex-shrink-0 px-4 py-6">
        <img class="h-10 w-auto" src="{{ asset('images/cendekia-muda.png') }}" alt="SMA Islam Cendekia Muda">
        <div class="ml-3">
            <p class="text-sm font-semibold text-blue-600">SMA Islam</p>
            <p class="text-sm font-semibold text-blue-600">Cendekia Muda</p>
        </div>
    </div>
    
    <!-- Navigation -->
    <nav class="flex-1 px-2 pb-4 space-y-1">
        <!-- Dashboard -->
        <a href="{{ route('learning.dashboard') }}" 
           class="group flex items-center px-2 py-2 text-sm font-medium rounded-md transition-colors duration-200 {{ $active === 'dashboard' ? 'bg-blue-100 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
            <svg class="mr-3 h-6 w-6 {{ $active === 'dashboard' ? 'text-blue-500' : 'text-gray-400' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v6a2 2 0 01-2 2H10a2 2 0 01-2-2V5z" />
            </svg>
            Dashboard
        </a>

        <!-- Learn -->
        <a href="{{ route('learning.learn') }}" 
           class="group flex items-center px-2 py-2 text-sm font-medium rounded-md transition-colors duration-200 {{ $active === 'learn' ? 'bg-blue-100 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
            <svg class="mr-3 h-6 w-6 {{ $active === 'learn' ? 'text-blue-500' : 'text-gray-400' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
            Learn
        </a>

        <!-- Practice -->
        <a href="{{ route('learning.practice') }}" 
           class="group flex items-center px-2 py-2 text-sm font-medium rounded-md transition-colors duration-200 {{ $active === 'practice' ? 'bg-orange-100 text-orange-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
            <svg class="mr-3 h-6 w-6 {{ $active === 'practice' ? 'text-orange-500' : 'text-gray-400' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
            </svg>
            Practice
        </a>

        <!-- Leaderboards -->
        <a href="{{ route('learning.leaderboard') }}" 
           class="group flex items-center px-2 py-2 text-sm font-medium rounded-md transition-colors duration-200 {{ $active === 'leaderboard' ? 'bg-yellow-100 text-yellow-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
            <svg class="mr-3 h-6 w-6 {{ $active === 'leaderboard' ? 'text-yellow-500' : 'text-gray-400' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
            </svg>
            Leaderboards
        </a>

        <!-- Quests -->
        <a href="{{ route('learning.quests') }}" 
           class="group flex items-center px-2 py-2 text-sm font-medium rounded-md transition-colors duration-200 {{ $active === 'quests' ? 'bg-blue-100 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
            <svg class="mr-3 h-6 w-6 {{ $active === 'quests' ? 'text-blue-500' : 'text-gray-400' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
            </svg>
            Quests
        </a>

        <!-- Ahsanu Amala -->
        <a href="{{ route('learning.ahsanu-amala') }}" 
           class="group flex items-center px-2 py-2 text-sm font-medium rounded-md transition-colors duration-200 {{ $active === 'ahsanu-amala' ? 'bg-blue-100 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
            <svg class="mr-3 h-6 w-6 {{ $active === 'ahsanu-amala' ? 'text-blue-500' : 'text-gray-400' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M10.5 3L12 2l1.5 1H21l-9 9-9-9h7.5z" />
            </svg>
            Ahsanu Amala
        </a>

        <!-- Profile -->
        <a href="{{ route('learning.profile') }}" 
           class="group flex items-center px-2 py-2 text-sm font-medium rounded-md transition-colors duration-200 {{ $active === 'profile' ? 'bg-blue-100 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
            <svg class="mr-3 h-6 w-6 {{ $active === 'profile' ? 'text-blue-500' : 'text-gray-400' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            Profile
        </a>

        <!-- Settings -->
        <a href="#" 
           class="group flex items-center px-2 py-2 text-sm font-medium rounded-md transition-colors duration-200 text-gray-600 hover:bg-gray-50 hover:text-gray-900">
            <svg class="mr-3 h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            Setting
        </a>
    </nav>
</div>
