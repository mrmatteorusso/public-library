<x-layout>

<x-nav></x-nav>

<x-forms.input-search />

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
        @foreach ( $books as $book )

        <x-book-card :book="$book" />


        @endforeach

      </table>

</x-layout>
