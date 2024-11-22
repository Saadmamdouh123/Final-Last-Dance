<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles for video background */
        .video-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
    </style>
</head>

<body class="bg-black text-white min-h-screen flex items-center justify-center relative">

    <!-- Video Background -->
    {{-- <video class="video-bg absolute top-0 left-0 w-full h-full object-cover" autoplay muted loop>
        <source src="https://videos.pexels.com/video-files/3483306/3483306-hd_1920_1080_30fps.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video> --}}

    <!-- Background Overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-black via-gray-900 to-black opacity-50"></div>

    <!-- Gym Logo Background -->
    <div class="absolute w-full flex justify-center">
        <img class="opacity-30" src="https://assets.awwwards.com/awards/element/2024/02/65bba1c728c39421623978.png" alt="">
    </div>

    <!-- Form Container -->
    <div class="relative z-10 flex justify-center items-center w-full">
        <div class="w-full max-w-md bg-yellow-400 opacity-90 p-8 rounded-xl shadow-xl transform hover:scale-105 transition-transform duration-300 border border-gray-800">
            <img src="https://images-platform.99static.com/MZXWaRAM0hdFsoiV5rl9WUctJq0=/500x500/top/smart/99designs-contests-attachments/57/57274/attachment_57274394"
                width="150px" alt="Gym Logo" class="mx-auto mb-6 rounded-full shadow-lg border-4 border-white">
            <h2 class="text-center text-black font-bold text-2xl mb-4">Join the Gym</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="hidden" name="role" value="client">
                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-semibold text-black">Name</label>
                    <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                        class="mt-1 w-full bg-black border border-gray-600 rounded-lg px-3 py-2 focus:ring focus:ring-white focus:outline-none" />
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
    
                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-semibold text-black">Email</label>
                    <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username"
                        class="mt-1 w-full bg-black border border-gray-600 rounded-lg px-3 py-2 focus:ring focus:ring-white focus:outline-none" />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
    
                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-semibold text-black">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password"
                        class="mt-1 w-full bg-black border-gray-600 rounded-lg px-3 py-2 focus:ring focus:ring-white focus:outline-none" />
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
    
                <!-- Confirm Password -->
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-semibold text-black">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        autocomplete="new-password"
                        class="mt-1 w-full bg-black border border-gray-600 rounded-lg px-3 py-2 focus:ring focus:ring-white focus:outline-none" />
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
    
                <!-- Actions -->
                <div class="flex items-center justify-between">
                    <a href="{{ route('login') }}" class="text-sm text-black hover:text-indigo-600 transition">
                        Already registered?
                    </a>
                    <button type="submit"
                        class="bg-black text-yellow-400 hover:bg-yellow-500 hover:text-black font-bold py-2 px-4 rounded-lg transition focus:outline-none focus:ring focus:ring-indigo-400">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>


</html>
