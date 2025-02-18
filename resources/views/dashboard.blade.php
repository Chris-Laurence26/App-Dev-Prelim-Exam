<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Homeowners List</h3>
                
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 border-b">#</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 border-b">First Name</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 border-b">Middle Name</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 border-b">Last Name</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 border-b">Email</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 border-b">Phone</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 border-b">Address</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 border-b">Registered On</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($owners as $owner)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="px-6 py-3 text-sm text-gray-700">{{ $owner->id }}</td>
                                    <td class="px-6 py-3 text-sm text-gray-700">{{ $owner->first_name }}</td>
                                    <td class="px-6 py-3 text-sm text-gray-700">{{ $owner->middle_name }}</td>
                                    <td class="px-6 py-3 text-sm text-gray-700">{{ $owner->last_name }}</td>
                                    <td class="px-6 py-3 text-sm text-gray-700">{{ $owner->email }}</td>
                                    <td class="px-6 py-3 text-sm text-gray-700">{{ $owner->phone }}</td>
                                    <td class="px-6 py-3 text-sm text-gray-700">{{ $owner->address }}</td>
                                    <td class="px-6 py-3 text-sm text-gray-700">{{ $owner->created_at->format('M d, Y') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="px-6 py-4 text-center text-gray-500">No homeowners found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>