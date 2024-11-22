<x-app-layout>
    @if (session('success'))
    <div 
        id="alert-box" 
        class="bg-green-100 border border-green-400 text-green-800 px-4 py-3 rounded relative shadow-md transition-opacity duration-500" 
        role="alert"
    >
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
        <button 
            type="button" 
            class="absolute top-0 bottom-0 right-0 px-4 py-3 text-green-800" 
            onclick="document.getElementById('alert-box').remove()"
        >
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <script>
        // Automatically hide the alert after 5 seconds
        setTimeout(() => {
            const alertBox = document.getElementById('alert-box');
            if (alertBox) {
                alertBox.classList.add('opacity-0'); // Fade out
                setTimeout(() => alertBox.remove(), 500); // Remove after transition
            }
        }, 5000);
    </script>
@endif


    <div class="bg-black">
        <div class="bg-black relative">
            <div class="bg-black relative">
                <img class="w-full opacity-60 h-screen" src="https://wallpapercave.com/wp/wp11235083.jpg"
                    alt="Beautiful landscape">
                <div class="absolute top-40 left-16">
                    <h1 class=" text-white font-black text-7xl py-1">You'll Never Be <br> Ready Just <br> <span
                            class="text-yellow-400">Ready.</span> </h1>
                    <p class="text-gray-400 pb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Unde sit
                        eum nam dicta exercitationem illo.</p>
                    <button aria-label="Start Game"
                        class="px-8 py-2 text-white font-bold text-lg rounded-full shadow-lg transition-transform transform bg-transparent border-2 border-yellow-500 hover:scale-105 hover:border-yellow-400 hover:shadow-yellow-400/50 hover:shadow-2xl focus:outline-none"
                        id="startButton">
                        <a href="/dashboard">dashboard</a>
                    </button>
                </div>
            </div>

            <div class="container mt- absolute right-20 top-20 bg-white w-[500px] p-4 rounded-lg">
                <!-- Adjusted position -->

            



                <form action="{{ route('sessions.store') }}" method="POST"
                    class="bg-white p-6 rounded-lg shadow-lg max-w-lg mx-auto mt-">
                    @csrf
                    <div class="flex justify-between items-center pb-7">
                        <h1 class="pb-6 text-xl text-black font-bold">Create a New Session</h1>
                        <img width="60px" class=" right-6 bottom-[390px] bg-yellow-400 rounded-lg h-17"
                            src="https://images-platform.99static.com/MZXWaRAM0hdFsoiV5rl9WUctJq0=/500x500/top/smart/99designs-contests-attachments/57/57274/attachment_57274394"
                            alt="">
                    </div>

                    <div class="form-group mb-4">
                        <label for="name" class="font-bold text-black">Session Name:</label>
                        <input type="text" name="name" id="name"
                            class="form-control rounded-md w-full p-2 mt-1 bg-white border border-gray-200 text-black placeholder-gray-400 focus:outline-none focus:ring focus:ring-yellow-500"
                            placeholder="Enter session name" value="{{ old('name') }}">
                        @error('name')
                            <small class="text-red-400">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="start_time" class="font-bold text-black">Start Time:</label>
                        <input type="datetime-local" name="start_time" id="start"
                            class="form-control rounded-md w-full p-2 mt-1 bg-white border border-gray-200 text-gray-500 placeholder-gray-400 focus:outline-none focus:ring focus:ring-yellow-500"
                            value="{{ old('start_time') }}">
                        @error('start_time')
                            <small class="text-red-400">{{ $message }}</small>
                        @enderror
                    </div>
                    <input type="hidden" value="{{ Auth::user()->id }}">
                    <div class="form-group mb-4">
                        <label for="end_time" class="font-bold text-black">End Time:</label>
                        <input type="datetime-local" name="end_time" id="end"
                            class="form-control rounded-md w-full p-2 mt-1 bg-white border border-gray-200 text-gray-500 placeholder-gray-400 focus:outline-none focus:ring focus:ring-yellow-500"
                            value="{{ old('end_time') }}">
                        @error('end_time')
                            <small class="text-red-400">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-8">
                        <label for="capacity" class="font-bold text-black">Capacity:</label>
                        <input type="number" name="capacity" id="capacity"
                            class="form-control rounded-md w-full p-2 mt-1 bg-white border border-gray-200 text-black placeholder-gray-400 focus:outline-none focus:ring focus:ring-yellow-500"
                            value="{{ Auth::user()->name }}" placeholder="Enter capacity">
                        @error('capacity')
                            <small class="text-red-400">{{ $message }}</small>
                        @enderror
                    </div>

                    <button aria-label="Create Session"
                        class="w-full px-4 py-2 bg-yellow-400 hover:bg-yellow-300 text-black font-bold rounded-full shadow-lg transition duration-200 transform hover:scale-105 focus:outline-none focus:ring focus:ring-yellow-300"
                        id="startButton" type="submit">
                        <a href="/dashboard">Create Session</a>
                    </button>
                </form>

            </div>
        </div>
    </div>
    <div id="secondcalendar">
        <h1 class="text-center pt-4 text-2xl font-bold">Calender</h1>
      </div>

      <form method="post" action="{{ route("calendar.store") }}">
        @csrf
        <input name="start" id="start" type="datetime-local">
        <input name="end" id="end" type="datetime-local">
        <button id="submitEvent">submit</button>
    </form>

</x-app-layout>

<script>
    document.addEventListener('DOMContentLoaded', async function() {
        let response = await axios.get("/session/create")
        let events = response.data.events
  
        let nowDate = new Date()
        let day = nowDate.getDate()
        let month = nowDate.getMonth() + 1
        let hours = nowDate.getHours()
        let minutes = nowDate.getMinutes()
        let minTimeAllowed =
            `${nowDate.getFullYear()}-${month < 10 ? "0"+month : month}-${day < 10 ? "0"+day : day}T${hours < 10 ? "0"+hours : hours}:${minutes < 10 ? "0"+minutes : minutes}:00`
        start.min = minTimeAllowed;
  
  
        var myCalendar = document.getElementById('secondcalendar');
  
  
        var calendar = new FullCalendar.Calendar(myCalendar, {
  
            headerToolbar: {
                left: 'dayGridMonth,timeGridWeek,timeGridDay',
                center: 'title',
                right: 'listMonth,listWeek,listDay'
            },
  
  
            views: {
                listDay: { // Customize the name for listDay
                    buttonText: 'Day Events',
  
                },
                listWeek: { // Customize the name for listWeek
                    buttonText: 'Week Events'
                },
                listMonth: { // Customize the name for listMonth
                    buttonText: 'Month Events'
                },
                timeGridWeek: {
                    buttonText: 'Week', // Customize the button text
                },
                timeGridDay: {
                    buttonText: "Day",
                },
                dayGridMonth: {
                    buttonText: "Month",
                },
  
            },
  
  
            initialView: "timeGridWeek", // initial view  =   l view li kayban  mni kan7ol l  calendar
            slotMinTime: "09:00:00", // min  time  appear in the calendar
            slotMaxTime: "19:00:00", // max  time  appear in the calendar
            nowIndicator: true, //  indicator  li kaybyen  l wa9t daba   fin  fl calendar
            selectable: true, //   kankhali l user  i9ad  i selectioner  wast l calendar
            selectMirror: true, //  overlay   that show  the selected area  ( details  ... )
            selectOverlap: false, //  nkhali ktar mn event f  nfs  l wa9t  = e.g:   5 nas i reserviw nfs lblasa  f nfs l wa9t
            weekends: true, // n7ayed  l weekends    ola nkhalihom 
  
  
            // events  hya  property dyal full calendar
            //  kat9bel array dyal objects  khass  i kono jayin 3la chkl  object fih  start  o end  7it hya li kayfahloha
            events: events,
  
            selectAllow: (info) => {
  
                return info.start >= nowDate;
            },
  
            select: (info) => {
  
  
                if (info.end.getDate() - info.start.getDate() > 0 && !info.allDay ) {
                    return
                }
  
                console.log(info);
                if (info.allDay) {
                    start.value = info.startStr+" 09:00:00"
                    end.value = info.startStr+" 19:00:00"   
                    
                }else{     
                    start.value = info.startStr.slice(0, info.startStr.length - 6)
                    end.value = info.endStr.slice(0, info.endStr.length - 6)   
                }
  
                submitEvent.click()
            }
  
  
  
        });
  
        calendar.render();
    })
  </script>
