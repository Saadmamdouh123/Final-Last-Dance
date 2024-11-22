<!DOCTYPE html>
<html>
<script src="https://cdn.tailwindcss.com"></script>
<head>
    <title>Calorie Calculator</title>
</head>



<body class="bg-black min-h-screen flex gap-20 items-center justify-center text-white">

    <!-- Background Image with Quote -->
    <div class="relative w-[430px] rounded-lg overflow-hidden">
        <img class="w-full h-auto opacity-40" src="https://images.pexels.com/photos/4720760/pexels-photo-4720760.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Gym Motivation">
        <div class="absolute inset-0 flex flex-col items-center justify-center p-4 bg-gradient-to-t from-black via-transparent">
            <h1 class="text-center text-xl font-bold text-white tracking-wide animate-fade-in-scale font-mono">
                "Push yourself, because no one <br> else is going to do it <br> for you."
            </h1>
            {{-- <p class="mt-4 text-center text-xs text-white opacity-90">
                "Every drop of sweat is a step closer to greatness."
            </p> --}}
        </div>
    </div>

    <!-- Form Container -->
    <div class="w-full max-w-lg bg-gray-800 p-8 rounded-lg shadow-lg space-y-6 transform hover:scale-105 transition-transform duration-300 border border-gray-700">
        <form action="{{ route('calorie_calculator.calculate') }}" method="POST" class="space-y-4">
            @csrf
            <h1 class="text-center text-xl font-bold text-yellow-500 font-mono">Count Your Calories</h1>
            <div>
                <label for="user_name" class="block text-sm font-bold text-yellow-400 mb-1 font-mono">Name:</label>
                <input type="text" id="user_name" name="name" class="w-full bg-gray-900 text-white rounded-lg px-4 py-2 border border-gray-700 focus:ring-2 focus:ring-yellow-500 focus:outline-none" value="{{ Auth::user()->name }}" readonly>
                <input type="hidden" value="{{ Auth::id() }}" name="user_id">
            </div>

            <!-- Age -->
            <div>
                <label for="age" class="block text-sm font-bold text-yellow-400 mb-1 font-mono">Age:</label>
                <input type="number" id="age" name="age" class="w-full bg-gray-900 text-white rounded-lg px-4 py-2 border border-gray-700 focus:ring-2 focus:ring-yellow-500 focus:outline-none" required>
            </div>

            <!-- Gender -->
            <div>
                <label for="gender" class="block text-sm font-bold text-yellow-400 mb-1 font-mono">Gender:</label>
                <select id="gender" name="gender" class="w-full bg-gray-900 text-white rounded-lg px-4 py-2 border border-gray-700 focus:ring-2 focus:ring-yellow-500 focus:outline-none" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <!-- Weight -->
            <div>
                <label for="weight" class="block text-sm font-bold text-yellow-400 mb-1 font-mono">Weight (kg):</label>
                <input type="number" id="weight" name="weight" step="0.1" class="w-full bg-gray-900 text-white rounded-lg px-4 py-2 border border-gray-700 focus:ring-2 focus:ring-yellow-500 focus:outline-none" required>
            </div>

            <!-- Height -->
            <div>
                <label for="height" class="block text-sm font-bold text-yellow-400 mb-1 font-mono">Height (cm):</label>
                <input type="number" id="height" name="height" step="0.1" class="w-full bg-gray-900 text-white rounded-lg px-4 py-2 border border-gray-700 focus:ring-2 focus:ring-yellow-500 focus:outline-none" required>
            </div>

            <!-- Activity Level -->
            <div>
                <label for="activity_level" class="block text-sm font-bold text-yellow-400 mb-1 font-mono">Activity Level:</label>
                <select id="activity_level" name="activity_level" class="w-full bg-gray-900 text-white rounded-lg px-4 py-2 border border-gray-700 focus:ring-2 focus:ring-yellow-500 focus:outline-none" required>
                    <option value="sedentary">Sedentary</option>
                    <option value="light">Light</option>
                    <option value="moderate">Moderate</option>
                    <option value="active">Active</option>
                    <option value="very_active">Very Active</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit" class="bg-yellow-500 text-black font-bold py-2 px-6 rounded-lg hover:bg-yellow-400 transition-transform transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-yellow-300 font-mono">
                    Calculate
                </button>
            </div>
        </form>
    </div>
</body>
<style>
    @tailwind base;
    @tailwind components;
    @tailwind utilities;

    @keyframes fade-in-scale {
        0% {
            opacity: 0;
            transform: scale(0.2);
        }
        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    .animate-fade-in-scale {
        animation: fade-in-scale 2s ease-out;
    }
</style>

</html>
