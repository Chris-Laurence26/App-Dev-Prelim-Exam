<x-app-layout>
    <div class="flex flex-wrap w-full justify-center gap-6 p-6">
        
        {{-- Product Details Section --}}
        <div class="flex-1 max-w-2xl bg-white p-6 rounded-lg shadow-md">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold text-gray-800">HomeOwner Details</h1>
                <a href="{{ route('homeowner.index') }}" 
                   class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                    Back
                </a>
            </div>

            <div class="space-y-3">
                <p><strong>First Name:</strong> <span class="text-gray-700">{{ $homeOwner->first_name }}</span></p>
                <p><strong>Middle Name:</strong> <span class="text-gray-700">{{ $homeOwner->middle_name }}</span></p>
                <p><strong>Last Name:</strong> <span class="text-gray-700">{{ $homeOwner->last_name }}</span></p>
                <p><strong>Email:</strong> <span class="text-gray-700">{{ $homeOwner->email }}</span></p>
                <p><strong>Phone:</strong> <span class="text-gray-700">{{ $homeOwner->phone }}</span></p>
                <p><strong>Address:</strong> <span class="text-gray-600">{{ $homeOwner->address }}</span></p>
                <p><strong>Posted On:</strong> <span class="text-gray-600">{{ $homeOwner->created_at }}</span></p>
            </div>
        </div>

        {{-- Product Reviews Section --}}
        <div class="flex-1 max-w-2xl bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Product Reviews</h2>
            
            {{-- Reviews List Placeholder --}}
            <div class="border p-4 rounded-md bg-gray-50">
                <p class="text-gray-600">No reviews yet. Be the first to leave a comment.</p>
            </div>

            {{-- Review Form Placeholder --}}
            <form action="#" method="POST" class="mt-4">
                @csrf
                <textarea class="w-full p-2 border rounded-md focus:ring focus:ring-blue-200" 
                          rows="3" placeholder="Write a review..."></textarea>
                <button type="submit" 
                        class="mt-2 bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition">
                    Submit Review
                </button>
            </form>
        </div>

    </div>
</x-app-layout>