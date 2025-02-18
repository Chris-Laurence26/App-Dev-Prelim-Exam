<x-app-layout>
    {{-- Form Section --}}
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-lg mt-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Create HomeOwner</h1>

            <!-- Button to navigate to homeowner -->
            <div class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                <a href="{{ route('homeowner.index') }}">Back</a>
            </div>
        </div>
        
        <form action="{{ route('homeowner.store') }}" method="POST" class="space-y-4">
            @csrf
            
            <div>
                <label class="block font-semibold text-gray-700">First Name</label>
                <input type="text" name="first_name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
            </div>

            <div>
                <label class="block font-semibold text-gray-700">Middle Name</label>
                <input type="text" name="middle_name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
            </div>

            <div>
                <label class="block font-semibold text-gray-700">Last Name</label>
                <input type="text" name="last_name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
            </div>

            <div>
                <label class="block font-semibold text-gray-700">Email</label>
                <input type="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
            </div>

            <div>
                <label class="block font-semibold text-gray-700">Phone</label>
                <input type="tel" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
            </div>

            <div>
                <label class="block font-semibold text-gray-700">Address</label>
                <input type="text" name="address" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
            </div>

            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg shadow-md hover:bg-green-700 transition">
                Save Homeowner
            </button>
        </form>
    </div>
</x-app-layout>