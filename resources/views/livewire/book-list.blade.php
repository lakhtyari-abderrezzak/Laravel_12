<div class="flex flex-col min-h-screen">

    <!-- Main Content -->
    <div class="container mx-auto mt-8 p-6 bg-gray-900 shadow-lg rounded-lg flex-grow">
        <h2 class="text-2xl font-semibold text-gray-400 mb-4">Book List</h2>
        
        <div class="w-full flex flex-col sm:flex-row justify-between items-center text-gray-300 my-3 gap-4">
            <div>
                <h3 class="text-lg sm:text-xl lg:text-2xl font-semibold">Hi! {{ $name }}</h3>
            </div>
            <div class="w-full sm:w-auto">
                <form wire:submit.prevent class="flex items-center gap-3 bg-gray-800 p-2 rounded-lg">
                    <span class="text-gray-400">Search:</span>
                    <input type="text" wire:model.live.debounce.500ms="search" 
                           class="bg-gray-700 text-white p-2 rounded w-full sm:w-60 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </form>
            </div>
        </div>

        <!-- Card Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($books as $book)
            <div class="bg-gray-800 p-4 rounded-lg shadow-lg text-gray-300">
                <img src="{{ $book->image_url }}" alt="{{ $book->title }}" 
                     class="w-full h-40 object-cover rounded-md mb-3">
                <h3 class="text-lg sm:text-xl font-semibold text-white">{{ $book->title }}</h3>
                <p class="text-gray-400 mt-1">Author: {{ $book->author }}</p>
                <p class="text-gray-500">Edition: {{ $book->edition }}</p>
            </div>
            @endforeach
        </div>
    </div>

</div>
