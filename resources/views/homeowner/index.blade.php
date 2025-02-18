<x-app-layout>
    <div class="max-w-7xl mx-auto p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-900">Home Owners</h1>
            <a href="{{ route('homeowner.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700 transition">
                <i class="fas fa-add mr-2"></i> <span>Add Homeowner</span>
            </a>
        </div>

        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-800 border-l-4 border-green-500 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($owners as $owner)
                <div class="relative bg-white shadow-lg rounded-xl overflow-hidden">
                    <a href="{{ route('homeowner.show', $owner) }}">
                        <div class="p-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h2 class="text-xl font-bold text-gray-800">{{ $owner->first_name }}</h2>
                                    <h2 class="text-xl font-bold text-gray-800">{{ $owner->middle_name }}</h2>
                                    <h2 class="text-xl font-bold text-gray-800">{{ $owner->last_name }}</h2>
                                    <p class="text-gray-600 text-lg font-semibold mb-2">{{ $owner->email }}</p>
                                </div>
                            </div>

                            <div class="flex justify-between items-center mt-3">
                                @if(auth()->id() === $owner->user_id)
                                    {{-- Show edit and delete buttons if the user owns the product --}}
                                    <div class="flex-1">
                                        <a href="{{ route('homeowner.edit', $owner) }}" class="bg-green-500 text-white py-1 px-2 rounded-lg">Edit</a>
                                    </div>
                                    <form action="{{ route('homeowner.destroy', $owner) }}" method="POST" onsubmit="return confirm('Are you sure you want to remove the Homeowner?')">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white py-1 px-2 rounded-lg">Delete</button>
                                    </form>
                                @else
                                    {{-- Show the owner's username and creation date instead --}}
                                    <p class="text-gray-700 text-sm">By: <span class="font-semibold">{{ $owner->user->name }}</span></p>
                                    <p class="text-gray-500 text-sm">On: {{ $owner->created_at->format('M d, Y') }}</p>
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="mt-6">
            {{ $owners->links('pagination::tailwind') }}
        </div>
    </div>
</x-app-layout>
