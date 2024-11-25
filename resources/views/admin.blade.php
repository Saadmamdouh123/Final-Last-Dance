<x-app-layout>
    @if (Auth::user()->role == 'admin')
        <div class="flex justify-center gap-8 mb-8">
            <div class="bg-gray-800 p-6 rounded-lg shadow-md w-1/3">
                <p class="text-lg text-white">Total Trainers:</p>
                <p class="text-4xl font-semibold text-yellow-400 mt-2">{{ $trainerCount }}</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-md w-1/3">
                <p class="text-lg text-white">Total Users:</p>
                <p class="text-4xl font-semibold text-yellow-400 mt-2">{{ $userCount }}</p>
            </div>
        </div>

        

        <div class="container mx-auto px-4 py-8 mt-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">User Dashboard</h1>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <table class="min-w-full text-sm text-gray-800">
                    <thead class="bg-yellow-400">
                        <tr>
                            <th class="px-6 py-3 text-left font-semibold text-white uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left font-semibold text-white uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left font-semibold text-white uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="hover:bg-gray-100">
                                <td class="px-6 py-4">{{ $user->name }}</td>
                                <td class="px-6 py-4">{{ $user->email }}</td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('trainer.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800 transition-all duration-200">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container mx-auto px-4 py-8 mt-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Trainer Requests</h1>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <table class="min-w-full text-sm text-gray-800">
                    <thead class="bg-yellow-400">
                        <tr>
                            <th class="px-6 py-3 text-left font-semibold text-white uppercase tracking-wider">User</th>
                            <th class="px-6 py-3 text-left font-semibold text-white uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left font-semibold text-white uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($requests as $request)
                            <tr class="hover:bg-gray-100">
                                <td class="px-6 py-4">{{ $request->user->name }}</td>
                                <td class="px-6 py-4 capitalize">{{ $request->status }}</td>
                                <td class="px-6 py-4 flex justify-end gap-2">
                                    <form method="POST" action="/admin/update/{{ $request->user->id }}">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="bg-green-500 text-white px-4 py-1 rounded hover:bg-green-600 transition-all duration-200">Approve</button>
                                    </form>
                                    <form method="POST" action="{{ route('admin.reject_request', $request->id) }}" class="inline">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-600 transition-all duration-200">Reject</button>
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
