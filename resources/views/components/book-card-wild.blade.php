@props(['book'])

<div class="max-w-xl mx-auto my-10 p-6 bg-gray-800 rounded-lg shadow-md">
    <!-- Book Cover -->
    <div class="text-center mb-6">
        <img class="h-48 w-48 rounded bg-gray-50 mx-auto" src="{{ $book->cover }}" alt="Book Cover">
    </div>

    <!-- Book Title -->
    <h1 class="text-2xl text-white font-bold text-center mb-4">{{ $book->title }}</h1>

    <!-- Author -->
    <p class="text-white text-center mb-2"><strong>Author:</strong> {{ $book->author->name }}</p>

    <!-- Blurb -->
    <p class="text-white text-center mb-2"><strong>Blurb:</strong> {{ $book->blurb }}</p>

    <!-- Pages -->
    <p class="text-white text-center mb-2"><strong>Pages:</strong> {{ $book->pages }}</p>

    <!-- Tags -->
    <div class="text-center mb-4">
        <strong class="text-white">Tags:</strong>
        @foreach ($book->tags as $tag)
            <span
                class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">{{ $tag->tag }}</span>
        @endforeach
    </div>

    <!-- Availability Status -->
    <p class="text-white text-center font-semibold mb-4">
        <strong>Status:</strong> {{ $book->is_available ? 'Available' : 'Booked' }}
    </p>

    <!-- Location -->
    <p class="text-white text-center font-semibold mb-4">
        <strong>Location:</strong> {{ $book->location }}
    </p>
    <div class="border-t-2 border-gray-300 my-6"></div>

    <div class="flex justify-between">
        <a href="/books/{{$book->id}}/edit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Edit</a>
        <a href="/books" class="text-blue-400 hover:underline">Back to list</a>
        <!-- Delete Form -->
        {{-- <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this book?');"> --}}
        {{-- <form action="{{ route('books.destroy', $book->id) }}" method="POST"> --}}
        <form action="/books/{{$book->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Delete</button>
        </form>

    </div>

</div>
