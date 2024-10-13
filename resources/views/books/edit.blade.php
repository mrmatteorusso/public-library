<x-layout>
    <x-nav></x-nav>

    <form action="/books/{{$book->id}}" method="POST" class="max-w-lg mx-auto p-6 bg-gray-800 rounded-lg shadow-md">
        @csrf
        @method('PATCH')

        <!-- Title -->
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium leading-6 text-gray-200">Title</label>
            <input id="title" name="title" type="text" value="{{$book->title}}" class="mt-1 block w-full px-3 py-2 bg-gray-700 text-gray-100 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
        </div>

        <!-- Author -->
        <div class="mb-4">
            <label for="author" class="block text-sm font-medium leading-6 text-gray-200">Author</label>
            <input id="author" name="author" type="text" value="{{$book->author->name}}" class="mt-1 block w-full px-3 py-2 bg-gray-700 text-gray-100 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
        </div>

        <!-- Pages -->
        <div class="mb-4">
            <label for="pages" class="block text-sm font-medium leading-6 text-gray-200">Pages</label>
            <input id="pages" name="pages" type="number" value="{{$book->pages}}" class="mt-1 block w-full px-3 py-2 bg-gray-700 text-gray-100 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
        </div>

          <!-- Cover -->
          <div class="mb-4">
            <label for="cover" class="block text-sm font-medium leading-6 text-gray-200">Cover</label>
            <input id="cover" name="cover" type="text" value="{{$book->cover}}" class="mt-1 block w-full px-3 py-2 bg-gray-700 text-gray-100 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
        </div>

        <!-- Tags -->
        <div class="mb-4">
            <label for="tags" class="block text-sm font-medium leading-6 text-gray-200">Tags</label>
            <input id="tags" name="tags" type="text" value="{{ $book->tags->pluck('tag')->implode(', ') }}" class="mt-1 block w-full px-3 py-2 bg-gray-700 text-gray-100 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
        </div>

        <!-- Available -->
        <div class="mb-4">
            <input id="is_available" name="is_available" type="checkbox" value="{{$book->is_available}}" class="h-4 w-4 text-blue-600 bg-gray-700 rounded focus:ring-blue-500" placeholder="Enter tags followed by comma">
            <label for="is_available" class="ml-2 text-sm font-medium leading-6 text-gray-200">Available</label>
        </div>

        <!-- Location -->
        <div class="mb-4">
            <label for="location" class="block text-sm font-medium leading-6 text-gray-200">Location</label>
            <input id="location" name="location"  type="text" value="{{$book->location}}" class="mt-1 block w-full px-3 py-2 bg-gray-700 text-gray-100 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
        </div>

        <!-- Blurb -->
        <div class="mb-4">
            <label for="blurb" class="block text-sm font-medium leading-6 text-gray-200">Blurb</label>
            <input id="blurb" name="blurb" type="text" value="{{$book->blurb}}" class="mt-1 block w-full px-3 py-2 bg-gray-700 text-gray-100 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
        </div>
        <!-- Submit Button -->
        <div>
            <button class="w-full px-4 py-2 bg-blue-600 text-white font-bold rounded hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-500">
                SAVE
            </button>
        </div>
    </form>
</x-layout>
