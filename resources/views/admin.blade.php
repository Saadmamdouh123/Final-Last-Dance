<x-app-layout>
    @if (Auth::user()->role == 'admin')
        <div class="container mx-auto px-4 py-8">

            <h1 class="text-2xl font-bold mb-6">Trainers Dashboard:</h1>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <table class="min-w-full">
                    <thead>
                        <tr class="bg-yellow-400 text-left">
                            <th class="px-6 py-3 text-xs font-medium text-black uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-xs font-medium text-black uppercase tracking-wider">Last Name</th>
                            <th class="px-6 py-3 text-xs font-medium text-black uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-xs font-medium text-black uppercase tracking-wider">Phone</th>
                            <th class="px-6 py-3 text-xs font-medium text-black uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody id="userTableBody">
                        @foreach ($trainers as $trainer)
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-900">{{ $trainer->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900">{{ $trainer->lastName }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900">{{ $trainer->email }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900">{{ $trainer->phone }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900 font-semibold">
                                    <form action="{{ route('admin.destroy' , $trainer->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>                    
                </table>
            </div>

        </div>

        <div class="container mx-auto px-4 py-8">

            <h1 class="text-2xl font-bold mb-6">User Dashboard:</h1>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <table class="min-w-full">
                    <thead>
                        <tr class="bg-yellow-400 text-left">
                            <th class="px-6 py-3 text-xs font-medium text-black uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-xs font-medium text-black uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-xs font-medium text-black uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody id="userTableBody">
                        @foreach ($users as $user)
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-900">{{ $user->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900">{{ $user->email }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900 font-semibold">
                                    <form action="{{ route("trainer.destroy", $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>                    
                </table>
            </div>

        </div>



    @endif
</x-app-layout>
