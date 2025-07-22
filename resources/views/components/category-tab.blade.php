
<div
    class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700r">

    <ul class="flex flex-wrap -mb-px justify-center">
        <li class="me-2">
            <a class="text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500' rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300'}}"
               {{ $attributes }} aria-current="{{ $active ? 'page': 'false' }}">All</a>
        </li>
        @foreach($categories as $category)

            <li class="me-2">
                <a class="inline-block p-4 border-b-2 {{ $active ? 'text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500' : 'border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300'}}"
                   {{ $attributes }} aria-current="{{ $active ? 'page': 'false' }}">{{ $category->name }}</a>
            </li>

        @endforeach

    </ul>
</div>
