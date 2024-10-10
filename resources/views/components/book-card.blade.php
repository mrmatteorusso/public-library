
        @props(['book'])


        <!-- Book Card Row -->
        <tbody class="divide-y divide-gray-200">
            <tr class="py-5">
              <!-- Book Cover -->
              <td class="w-1/6 text-center">
                  <img class="h-16 w-16 rounded bg-gray-50" src="{{ $book->cover}}" alt="Book Cover">
              </td>

              <!-- Book Title -->
              <td class="text-lg text-white">
                <a href="#" class="font-bold hover:underline">{{$book->title}}</a>
              </td>

              <!-- Author -->
              <td class="text-white">{{$book->author->name}}</td>

              <!-- Pages -->
              <td class="text-white">{{$book->pages}}</td>

              <!-- Tags -->
              <td>
                  @foreach ($book->tags as $tag )

                <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">{{$tag->tag}}</span>
                @endforeach
                {{-- <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">{{$book->tags}}</span> --}}
              </td>

              <!-- Availability Status -->
              <td class="text-right text-white">
                <p class="font-semibold text-left">{{$book->is_available? 'Available' : 'Booked'}}</p>
              </td>

              <!-- Details Arrow -->
              <td class="text-center">
                <a href="#" class="text-gray-400 hover:text-white transition duration-200">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                  </svg>
                </a>
              </td>
            </tr>
          </tbod
