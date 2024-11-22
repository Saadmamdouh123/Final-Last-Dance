<x-app-layout>
    <div class="p-8">
        <div class="flex justify-center items-center pt-7">
            <img width="100px" class=" right-6 bottom-[390px] bg-yellow-400 rounded-lg" src="https://images-platform.99static.com/MZXWaRAM0hdFsoiV5rl9WUctJq0=/500x500/top/smart/99designs-contests-attachments/57/57274/attachment_57274394" alt="">
        </div>
        <div class="pt-5">
            <h1 class="text-center text-4xl font-bold">All Gym Sessions</h1>
        </div>
    </div>
    <div class="flex flex-wrap  p-10 gap-6 shadow-xl shadow-gray-300 rounded-xl w-fit">
        @foreach ($showSessions as $show)
        <div>
         <img width="400px" class="rounded-lg" src="https://i.pinimg.com/736x/fe/ac/95/feac95cb34ca3b9f5bad000a35896e48.jpg" alt="">
        </div>
        <div class="pb-6">
            <h1 class="text-2xl font-bold pb-1">Alex Morrison</h1>
            <h2 class="pb-2 text-gray-700 text-xl">Trainer</h2>
            <div class="bg-gray-200 rounded-lg flex gap-8 p-6">
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-xl font-bold">Article</h1>
                    <h1 class="text-2xl font-medium text-gray-500">34</h1>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-xl font-bold">Article</h1>
                    <h1 class="text-2xl font-medium text-gray-500">34</h1>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-xl font-bold">Article</h1>
                    <h1 class="text-2xl font-medium text-gray-500">34</h1>
                </div>
            </div>
            <div class="pt-4">
                <button aria-label="Start Game"
                            class="px-8 py-2 text-black bg-black font-bold text-lg rounded-full shadow-lg transition-transform transform bg-transparent border-2 border-yellow-500 hover:scale-105 hover:border-yellow-400 hover:shadow-yellow-400/50 hover:shadow-2xl focus:outline-none"
                            id="startButton">
                            Checkout
                        </button>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>
