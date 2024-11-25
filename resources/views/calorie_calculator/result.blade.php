<x-app-layout>
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden">
        <img src="" alt="">
    </div>

    <!-- Content Section -->
    <div class="relative min-h-screen flex flex-col items-center justify-center bg-gradient-to-r bg-black">
        <div class="pb-7">
            <img width="80px" class=" bg-yellow-400 rounded-lg"
                src="https://images-platform.99static.com/MZXWaRAM0hdFsoiV5rl9WUctJq0=/500x500/top/smart/99designs-contests-attachments/57/57274/attachment_57274394"
                alt="">
        </div>
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-lg w-full text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Calorie Calculation Result</h1>
            <div class="space-y-4">
                <p class="text-xl font-medium text-gray-700">
                    <span class="font-semibold">Name:</span> {{ $calculation->name }}
                </p>
                <p class="text-xl font-medium text-gray-700">
                    <span class="font-semibold">Calories Needed:</span> {{ $calculation->calories_needed }} kcal/day
                </p>
            </div>
            <div class="mt-6">
                <a href="{{ route('dashboard') }}" class="bg-yellow-400 text-white px-6 py-2 rounded-full text-lg hover:bg-blue-700 transition-all duration-300">Go dashboard</a>
            </div>
        </div>
    </div>
    
</x-app-layout>