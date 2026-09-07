<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - SATGAS Karhutla</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Tailwind CSS (via CDN) -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Inter', 'sans-serif'],
                        },
                        colors: {
                            brand: {
                                50: '#fff1f2',
                                100: '#ffe4e6',
                                500: '#f43f5e',
                                600: '#e11d48',
                                700: '#be123c',
                                900: '#881337',
                            }
                        }
                    }
                }
            }
        </script>
        <style>
            .glass-card {
                background: rgba(255, 255, 255, 0.9);
                backdrop-filter: blur(16px);
                -webkit-backdrop-filter: blur(16px);
                border: 1px solid rgba(255, 255, 255, 0.4);
            }
            .bg-animate {
                background-size: 200% 200%;
                animation: gradient 15s ease infinite;
            }
            @keyframes gradient {
                0% { background-position: 0% 50%; }
                50% { background-position: 100% 50%; }
                100% { background-position: 0% 50%; }
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased bg-slate-50 min-h-screen flex flex-col sm:justify-center items-center pt-6 pb-12 sm:pt-0 relative">
        
        <!-- Decorative background subtle pattern -->
        <div class="absolute inset-0 z-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5"></div>

        <div class="w-full sm:max-w-md mt-6 px-8 py-10 glass-card shadow-2xl overflow-hidden sm:rounded-2xl transform transition-all hover:scale-[1.01] duration-500 relative z-10">
            <div class="flex justify-center mb-6">
                <h1 class="text-3xl font-extrabold text-slate-800 tracking-tight">SATGAS <span class="text-red-600">Karhutla</span></h1>
            </div>

            {{ $slot }}
            
        </div>
        <p class="mt-8 text-slate-500 text-sm font-medium tracking-wider relative z-10">Portal Resmi SATGAS Karhutla</p>
    </body>
</html>
