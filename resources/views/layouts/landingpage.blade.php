<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title', 'Cendekia Muda - Sekolah Terbaik Sejagad Raya')</title>
    <meta name="description" content="@yield('meta_description', 'Cendekia Muda - A Universal Islamic School yang mengutamakan kualitas pendidikan dan pembentukan karakter Islami.')">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            'inter': ['Inter', 'sans-serif'],
                        },
                        colors: {
                            primary: {
                                50: '#f0f9ff',
                                100: '#e0f2fe',
                                200: '#bae6fd',
                                300: '#7dd3fc',
                                400: '#38bdf8',
                                500: '#0ea5e9',
                                600: '#0284c7',
                                700: '#0369a1',
                                800: '#075985',
                                900: '#0c4a6e',
                            }
                        }
                    }
                }
            }
        </script>
        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
            
            .btn-primary {
                background-color: #0284c7;
                color: white;
                padding: 0.75rem 1.5rem;
                border-radius: 0.5rem;
                font-weight: 600;
                transition: background-color 0.2s;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
                display: inline-flex;
                align-items: center;
                justify-content: center;
            }
            
            .btn-primary:hover {
                background-color: #0369a1;
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            }
            
            .btn-secondary {
                background-color: white;
                color: #0284c7;
                border: 1px solid #0284c7;
                padding: 0.75rem 1.5rem;
                border-radius: 0.5rem;
                font-weight: 600;
                transition: all 0.2s;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
                display: inline-flex;
                align-items: center;
                justify-content: center;
            }
            
            .btn-secondary:hover {
                background-color: #f9fafb;
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            }
            
            .nav-link {
                color: #374151;
                padding: 0.5rem 1rem;
                border-radius: 0.375rem;
                font-weight: 500;
                transition: all 0.2s;
            }
            
            .nav-link:hover {
                color: #0284c7;
            }
            
            .nav-link.active {
                color: #0284c7;
                background-color: #f0f9ff;
            }
        </style>
    @endif
    
    @stack('styles')
</head>
<body class="font-inter bg-gray-50 text-gray-900 min-h-screen">
    
    <!-- Header Component -->
    @include('components.header')
    
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    
    <!-- Footer Component -->
    @include('components.footer')
    
    @stack('scripts')
</body>
</html>
