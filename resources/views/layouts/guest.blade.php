<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="relative min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 dark:bg-gray-900">
            <!-- Video Background -->
            <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover z-0">
                <source src="https://videos.pexels.com/video-files/5319085/5319085-uhd_2560_1440_25fps.mp4" type="video/mp4">
                {{ __('Your browser does not support the video tag.') }}
            </video>
        
            <!-- Background Overlay for Contrast -->
            <div class="absolute inset-0 bg-gray-900 bg-opacity-50"></div>
        
            <!-- Content Section -->
            <div class="relative z-10">
                <div class="flex justify-center items-center">
                    <img 
                        width="100px" 
                        class="right-6 bottom-[390px] bg-yellow-400 rounded-lg text-center" 
                        src="https://images-platform.99static.com/MZXWaRAM0hdFsoiV5rl9WUctJq0=/500x500/top/smart/99designs-contests-attachments/57/57274/attachment_57274394" 
                        alt="Logo"
                    >
                </div>
        
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                    {{ $slot }}
                </div>
            </div>
        </div>
        
    </body>
</html>
