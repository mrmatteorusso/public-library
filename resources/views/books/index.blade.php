<x-layout>

    <nav class="bg-gray-800 p-4">
        <div class="flex justify-between items-center">
          <!-- Logo or Library Name -->
          <div class="flex items-center">
            <img src="https://via.placeholder.com/40" alt="Library Logo" class="rounded-full mr-2">
            <span class="text-white text-xl font-bold">Your Library Name</span>
          </div>

          <!-- Navigation Links -->
          <div class="space-x-4">
            <a href="#" class="text-gray-300 hover:text-white">Home</a>
            <a href="#" class="text-gray-300 hover:text-white">Catalog</a>
            <a href="#" class="text-gray-300 hover:text-white">About Us</a>
            <a href="#" class="text-gray-300 hover:text-white">Events</a>
            <a href="#" class="text-gray-300 hover:text-white">Contact</a>
            <a href="#" class="text-gray-300 hover:text-white">Help</a>
          </div>

          <!-- Add Book Button -->
          <div>
            <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Add Book</a>
          </div>
        </div>
      </nav>

    <div class="mb-4">
        <!-- Search Input -->
        <input
          type="text"
          placeholder="Search for a book..."
          class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500"
        />
      </div>

      <table class="min-w-full divide-y divide-gray-200">
        <!-- Header -->
        <thead>
          <tr class="text-gray-400 text-sm">
            <th class="py-2 text-left">Cover</th>
            <th class="py-2 text-left">Title</th>
            <th class="py-2 text-left">Author</th>
            <th class="py-2 text-left">Pages</th>
            <th class="py-2 text-left">Tags</th>
            <th class="py-2 text-left">Status</th>
            <th class="py-2 text-left">Details</th>
          </tr>
        </thead>



        <!-- Book Card Row -->
        <tbody class="divide-y divide-gray-200">
          <tr class="py-5">
            <!-- Book Cover -->
            <td class="w-1/6 text-center">
              <img class="h-16 w-16 rounded bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Book Cover">
            </td>

            <!-- Book Title -->
            <td class="text-lg text-white">
              <a href="#" class="font-bold hover:underline">The Odyssey</a>
            </td>

            <!-- Author -->
            <td class="text-white">Homer</td>

            <!-- Pages -->
            <td class="text-white">475</td>

            <!-- Tags -->
            <td>
              <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Adventure</span>
              <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Classic</span>
            </td>

            <!-- Availability Status -->
            <td class="text-right text-white">
              <p class="font-semibold">Available</p>
            </td>

            <!-- Details Arrow -->
            <td class="text-right">
              <a href="#" class="text-gray-400 hover:text-white transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </a>
            </td>
          </tr>
        </tbody>
        <tbody class="divide-y divide-gray-200">
            <tr class="py-5">
              <!-- Book Cover -->
              <td class="w-1/6 text-center">
                <img class="h-16 w-16 rounded bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Book Cover">
              </td>

              <!-- Book Title -->
              <td class="text-lg text-white">
                <a href="#" class="font-bold hover:underline">The Odyssey</a>
              </td>

              <!-- Author -->
              <td class="text-white">Homer</td>

              <!-- Pages -->
              <td class="text-white">475</td>

              <!-- Tags -->
              <td>
                <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Adventure</span>
                <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Classic</span>
              </td>

              <!-- Availability Status -->
              <td class="text-right text-white">
                <p class="font-semibold">Available</p>
              </td>

              <!-- Details Arrow -->
              <td class="text-right">
                <a href="#" class="text-gray-400 hover:text-white transition duration-200">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                  </svg>
                </a>
              </td>
            </tr>
          </tbody>
          <tbody class="divide-y divide-gray-200">
            <tr class="py-5">
              <!-- Book Cover -->
              <td class="w-1/6 text-center">
                <img class="h-16 w-16 rounded bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Book Cover">
              </td>

              <!-- Book Title -->
              <td class="text-lg text-white">
                <a href="#" class="font-bold hover:underline">The Odyssey</a>
              </td>

              <!-- Author -->
              <td class="text-white">Homer</td>

              <!-- Pages -->
              <td class="text-white">475</td>

              <!-- Tags -->
              <td>
                <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Adventure</span>
                <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Classic</span>
              </td>

              <!-- Availability Status -->
              <td class="text-right text-white">
                <p class="font-semibold">Available</p>
              </td>

              <!-- Details Arrow -->
              <td class="text-right">
                <a href="#" class="text-gray-400 hover:text-white transition duration-200">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                  </svg>
                </a>
              </td>
            </tr>
          </tbody>
      </table>

</x-layout>
