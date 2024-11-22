<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('GYM') }}
        </h2>
    </x-slot> --}}


    <nav class="flex justify-between items-center px-32 py-4 shadow-lg shadow-white">
        <div class="flex justify-center items-center gap-3">
            {{-- <img width="60px" src="https://images-platform.99static.com/MZXWaRAM0hdFsoiV5rl9WUctJq0=/500x500/top/smart/99designs-contests-attachments/57/57274/attachment_57274394" alt=""> --}}
            <h1 class="font-semibold text-xl">Hello {{ Auth::user()->name }} <span
                    class="text-yellow-500 text-4xl">.</span></h1>
        </div>
        <ul class="flex gap-8 justify-center items-center">
            <li><a href="#liv2" class="text-black hover:border-b-2 border-yellow-500">Services</a></li>
            <li><a href="#liv1" class="text-black hover:border-b-2 border-yellow-500">Our Trainer</a></li>
            <li><a href="{{ route("showSession.store") }}" class="text-black hover:border-b-2 border-yellow-500">Show Session</a></li>
            @if (Auth::user()->role == 'admin')
                <li><a href="{{ route('admin.index') }}" class="text-black hover:border-b-2 border-yellow-500">Admin
                        Dashboard</a></li>
            @endif
        </ul>
        <div class="flex gap-2">
            <button class="bg-yellow-400 font-medium text-black">Join us</button>
            <button class="bg-yellow-400 font-medium text-black">Be Member</button>
        </div>
    </nav>


    <div class="flex justify-around pt-7 p-12 bg-black">
        <div class="flex flex-col gap-7 justify-center">
            <h1 class="text-white text-7xl font-medium shadow-white">Unleash Your <br> Inner Athlete <br> <span
                    class="text-yellow-400">{{ Auth::user()->name }}</span>.</h1>
            <p class="text-white opacity-65">We are dedicated to helping you transform your body <br> and mind through
                the power of fitness</p>
            <div class="flex gap-4">
                <button id="btnnn1"
                    class="bg-white text-black font-semibold hover:bg-yellow-400 hover:text-black">Join Now</button>
                <button id="btnnn2"
                    class="bg-white text-black font-semibold hover:bg-yellow-400 hover:text-black">49$/Month</button>
            </div>
        </div>
        <div class=" h">
            <img class="opacity-85" width="450px"
                src="https://i.pinimg.com/736x/d3/8f/05/d38f057f35b3f2aca2e53c7b6805caed.jpg" alt="">
        </div>
    </div>

    <div class="flex justify-around p-10 shadow-xl shadow-gray-100" id="liv2">
        <div>
            <img width="500px"
                src="https://img.freepik.com/premium-photo/athlete-running-wellness-isolated-white-background-professional-photography_660230-9454.jpg"
                alt="">
        </div>
        <div class="flex flex-col gap- p-5">
            <img width="100px"
                src="https://images-platform.99static.com/MZXWaRAM0hdFsoiV5rl9WUctJq0=/500x500/top/smart/99designs-contests-attachments/57/57274/attachment_57274394"
                alt="">
            <h1 class="text-6xl font-extrabold">Lose <span class="text-yellow-400">&</span> Gain <br>Muscle Mass</h1>
            <div>
                <p class="text-lg font-bold pb-3">Without fast and difficult plans or spending 8 hours in the gym!</p>
                <p class="text-gray-500"> - Completely customized Meal Planning as per your BMR and requirements
                </p>
                <p class="text-gray-500"> - Customized workout regimes (For the Gym, or from the comfort of your home)
                </p>
                <p class="text-gray-500"> - Daily Coach and Nutritionist support through dedicated WhatsApp Group
                </p>
                <p class="text-gray-500">
                    - Free Introductory call with the coaches to get you started <br>- Multiple revisions in the
                    plans,free of
                    charge!
                </p>

                <div class="flex gap-5 pt-3">
                    <div class="h-16 font-bold text-sm bg-yellow-400 flex justify-center items-center p-2 rounded-full">
                        Strength</div>
                    <div class="h-16 font-bold text-md bg-yellow-400 flex justify-center items-center p-6 rounded-full">
                        fit</div>
                    <div class="h-16 font-bold text-sm bg-yellow-400 flex justify-center items-center p-3 rounded-full">
                        Cardio</div>
                    <div class="h-16 font-bold text-sm bg-yellow-400 flex justify-center items-center p-6 rounded-full">
                        Hit</div>

                </div>
            </div>
        </div>
    </div>

    <div class="pt-10 p-24 bg-zinc-950" id="liv1">
        <h1 class="text-center text-4xl font-bold text-yellow-400">Meet Our Trainer</h1>
        <p class="text-center text-[18px] py-1 pt-3 text-white">We carefully hire and train our team of talented coaches
            at Structure Health & Fitness. Technical <br> expertise and experience matter, but so does a positive,
            empathetic and aspirational attitude.</p>
        <div class="text-center pt-4 flex gap-4 justify-center">
            <button class="font-semibold shadow-lg" onclick="openModal('modelConfirm')">Become Trainer</button>
            <button class="px-5 font-semibold shadow-lg">Book Session</button>
        </div>
        <div class="flex gap-4 justify-around p-12">
            <img class="opacity-90 rounded-xl shadow-gray-800 shadow-2xl" width="350px"
                src="https://i.pinimg.com/736x/f3/20/9f/f3209f5a7dd3194eee0ebf535ae039f1.jpg" alt="">
            <img class="opacity-90 rounded-xl shadow-gray-800 shadow-2xl" width="350px"
                src="https://i.pinimg.com/736x/9b/28/3c/9b283c0beabbb829da70b2be0b01b842.jpg" alt="">
            <img class="opacity-90 rounded-xl shadow-gray-800 shadow-2xl" width="350px"
                src="https://i.pinimg.com/736x/c6/87/47/c687472247b908c292955f26ce3f544b.jpg" alt="">
        </div>
    </div>

    <div id="modelConfirm"
        class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4 shadow-xl">
        <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-md">

            <div class="flex justify-end p-2">
                <button onclick="closeModal('modelConfirm')" type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="p-6 pt-0 text-center">

                <form action="{{ route('trainer.store') }}" method="post"
                    class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="payment">
                    <div class="flex justify-center items-center py-4">
                        <div class="flex justify-center items-center bg-yellow-400 rounded-full shadow-lg w-fit">
                            <img width="70px"
                                src="https://images-platform.99static.com/MZXWaRAM0hdFsoiV5rl9WUctJq0=/500x500/top/smart/99designs-contests-attachments/57/57274/attachment_57274394"
                                alt="">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-lg font-bold text-gray-800 mb-2">Name:</label>
                        <input type="text"
                            class="w-full px-4 py-2 border rounded-md text-gray-700 focus:ring-2 focus:ring-yellow-500 focus:outline-none"
                            name="name">
                    </div>
                    <div class="mb-4">
                        <label for="lastName" class="block text-lg font-bold text-gray-800 mb-2">Last Name:</label>
                        <input type="text"
                            class="w-full px-4 py-2 border rounded-md text-gray-700 focus:ring-2 focus:ring-yellow-500 focus:outline-none"
                            name="lastName">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-lg font-bold text-gray-800 mb-2">Email:</label>
                        <input type="text"
                            class="w-full px-4 py-2 border rounded-md text-gray-700 focus:ring-2 focus:ring-yellow-500 focus:outline-none"
                            name="email">
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-lg font-bold text-gray-800 mb-2">Phone Number:</label>
                        <input type="number"
                            class="w-full px-4 py-2 border rounded-md text-gray-700 focus:ring-2 focus:ring-yellow-500 focus:outline-none"
                            name="phone">
                    </div>
                    <button type="submit"
                        class="w-full bg-yellow-500 text-white font-bold py-2 rounded-md hover:bg-yellow-600 transition">
                        <a href="/checkout">Submit</a>
                    </button>
                </form>
            </div>


        </div>
    </div>


    <div class="p-12 bg-slate-100">
        <div class="flex justify-center items-center pb-6">
            <img width="100px" class="right-6 bottom-[390px] text-center bg-yellow-400 rounded-lg" src="https://images-platform.99static.com/MZXWaRAM0hdFsoiV5rl9WUctJq0=/500x500/top/smart/99designs-contests-attachments/57/57274/attachment_57274394" alt="">
        </div>
        <h1 class="text-4xl text-center font-black pb-3">Flexible Plans for Every <br> Budgets</h1>
        <p class="text-center text-lg text-gray-500">Choose a plan that suite with you.No long-term commitments required.</p>
        <div class="flex justify-center items-center gap-5 p-10">
            <div class="bg-white shadow-2xl p-10 rounded-xl relative">
                <h1 class="pb-6 font-black">Gym Subscription</h1>
                <img width="50px" class="absolute right-6 bottom-[390px] bg-yellow-400 rounded-lg" src="https://images-platform.99static.com/MZXWaRAM0hdFsoiV5rl9WUctJq0=/500x500/top/smart/99designs-contests-attachments/57/57274/attachment_57274394" alt="">
                <div>
                    <p class="text-4xl font-extrabold pb-3">$100</p>
                    <p>Per user/month,billed annually</p>
                </div>
                <div>
                    <div class="flex justify-end relative gap-6 p-4 w-80">
                        <div
                            class="bg-yellow-400 w-fit text-xs h-4 flex justify-end items-center p-1 rounded-full font-semibold absolute left-0 top-5">
                            &#x2713;</div>
                        <h1>Customized Home/Gym Workout plans</h1>
                    </div>
                    <div class="flex justify-end relative gap-6 p-4 w-80">
                        <div
                            class="bg-yellow-400 w-fit text-xs h-4 flex justify-end items-center p-1 rounded-full font-semibold absolute left-0 top-5">
                            &#x2713;</div>
                        <h1>Customized Home/Gym Workout plans</h1>
                    </div>
                    <div class="flex justify-end relative gap-6 p-4 w-80">
                        <div
                            class="bg-yellow-400 w-fit text-xs h-4 flex justify-end items-center p-1 rounded-full font-semibold absolute left-0 top-5">
                            &#x2713;</div>
                        <h1>Customized Home/Gym Workout plans</h1>
                    </div>
                    <div class="flex justify-end relative gap-6 p-4 w-80">
                        <div
                            class="bg-yellow-400 w-fit text-xs h-4 flex justify-end items-center p-1 rounded-full font-semibold absolute left-0 top-5">
                            &#x2713;</div>
                        <h1>Customized Home/Gym Workout plans</h1>
                    </div>

                    <button aria-label="Start Game"
                        class="px-8 py-2 text-black font-bold text-lg rounded-full shadow-lg transition-transform transform bg-transparent border-2 border-yellow-500 hover:scale-105 hover:border-yellow-400 hover:shadow-yellow-400/50 hover:shadow-2xl focus:outline-none"
                        id="startButton">
                        <a href="/checkout" class="text-black">Checkout</a>
                    </button>

                </div>
            </div>
            <div class="flex justify-center items-center gap-5 b">
                <div class="bg-black shadow-2xl p-10 rounded-xl relative">
                    <h1 class="pb-6 text-white">Gym Subscription</h1>
                    <img width="50px" class="absolute right-6 bottom-[390px] bg-yellow-400 rounded-lg h-17" src="https://images-platform.99static.com/MZXWaRAM0hdFsoiV5rl9WUctJq0=/500x500/top/smart/99designs-contests-attachments/57/57274/attachment_57274394" alt="">
                    <div>
                        <p class="text-5xl font-extrabold pb-3 text-white">$300</p>
                        <p class="text-white">Per user/month,billed annually</p>
                    </div>
                    <div>
                        <div class="flex justify-end relative gap-6 p-4 w-80">
                            <div
                                class="bg-yellow-400 w-fit text-xs h-4 flex justify-end items-center p-1 rounded-full font-semibold absolute left-0 top-5">
                                &#x2713;</div>
                            <h1 class="text-white">Customized Home/Gym Workout plans</h1>
                        </div>
                        <div class="flex justify-end relative gap-6 p-4 w-80">
                            <div
                                class="bg-yellow-400 w-fit text-xs h-4 flex justify-end items-center p-1 rounded-full font-semibold absolute left-0 top-5">
                                &#x2713;</div>
                            <h1 class="text-white">Customized Home/Gym Workout plans</h1>
                        </div>
                        <div class="flex justify-end relative gap-6 p-4 w-80">
                            <div
                                class="bg-yellow-400 w-fit text-xs h-4 flex justify-end items-center p-1 rounded-full font-semibold absolute left-0 top-5">
                                &#x2713;</div>
                            <h1 class="text-white">Customized Home/Gym Workout plans</h1>
                        </div>
                        <div class="flex justify-end relative gap-6 p-4 w-80">
                            <div
                                class="bg-yellow-400 w-fit text-xs h-4 flex justify-end items-center p-1 rounded-full font-semibold absolute left-0 top-5">
                                &#x2713;</div>
                            <h1 class="text-white">Customized Home/Gym Workout plans</h1>
                        </div>
                        <button aria-label="Start Game"
                        class="px-8 py-2 text-white font-bold text-lg rounded-full shadow-lg transition-transform transform bg-transparent border-2 border-yellow-500 hover:scale-105 hover:border-yellow-400 hover:shadow-yellow-400/50 hover:shadow-2xl focus:outline-none"
                        id="startButton">
                        <a href="/checkout">Checkout</a>
                    </button>
                    </div>
                </div>
                <div class="flex justify-center items-center gap-10">
                    <div class="bg-white shadow-2xl p-10 rounded-xl relative">
                        <h1 class="pb-6">Gym Subscription</h1>
                        <img width="50px" class="absolute right-6 bottom-[390px] bg-yellow-400 rounded-lg" src="https://images-platform.99static.com/MZXWaRAM0hdFsoiV5rl9WUctJq0=/500x500/top/smart/99designs-contests-attachments/57/57274/attachment_57274394" alt="">
                        <div>
                            <p class="text-4xl pb-3 font-extrabold">$200</p>
                            <p>Per user/month,billed annually</p>
                        </div>
                        <div>
                            <div class="flex justify-end relative gap-6 p-4 w-80">
                                <div
                                    class="bg-yellow-400 w-fit text-xs h-4 flex justify-end items-center p-1 rounded-full font-semibold absolute left-0 top-5">
                                    &#x2713;</div>
                                <h1>Customized Home/Gym Workout plans</h1>
                            </div>
                            <div class="flex justify-end relative gap-6 p-4 w-80">
                                <div
                                    class="bg-yellow-400 w-fit text-xs h-4 flex justify-end items-center p-1 rounded-full font-semibold absolute left-0 top-5">
                                    &#x2713;</div>
                                <h1>Customized Home/Gym Workout plans</h1>
                            </div>
                            <div class="flex justify-end relative gap-6 p-4 w-80">
                                <div
                                    class="bg-yellow-400 w-fit text-xs h-4 flex justify-end items-center p-1 rounded-full font-semibold absolute left-0 top-5">
                                    &#x2713;</div>
                                <h1>Customized Home/Gym Workout plans</h1>
                            </div>
                            <div class="flex justify-end relative gap-6 p-4 w-80">
                                <div
                                    class="bg-yellow-400 w-fit text-xs h-4 flex justify-end items-center p-1 rounded-full font-semibold absolute left-0 top-5">
                                    &#x2713;</div>
                                <h1>Customized Home/Gym Workout plans</h1>
                            </div>
                            <button aria-label="Start Game"
                            class="px-8 py-2 text-black font-bold text-lg rounded-full shadow-lg transition-transform transform bg-transparent border-2 border-yellow-500 hover:scale-105 hover:border-yellow-400 hover:shadow-yellow-400/50 hover:shadow-2xl focus:outline-none"
                            id="startButton">
                            <a href="/checkout" class="text-black">Checkout</a>
                        </button>
                        </div>
                    </div>


                </div>
            </div>





</x-app-layout>
<script type="text/javascript">
    window.openModal = function(modalId) {
        document.getElementById(modalId).style.display = 'block'
        document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden')
    }

    window.closeModal = function(modalId) {
        document.getElementById(modalId).style.display = 'none'
        document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
    }

    // Close all modals when press ESC
    document.onkeydown = function(event) {
        event = event || window.event;
        if (event.keyCode === 27) {
            document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
            let modals = document.getElementsByClassName('modal');
            Array.prototype.slice.call(modals).forEach(i => {
                i.style.display = 'none'
            })
        }
    };
</script>
