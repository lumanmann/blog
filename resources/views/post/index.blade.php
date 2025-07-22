<x-app-layout>
{{--    <x-category-tab />--}}
    <section class="flex flex-col -mb-px justify-center my-6">
        @foreach($posts as $p)
            <x-post-item :post="$p"></x-post-item>
        @endforeach
        {{ $posts->links() }}
    </section>

</x-app-layout>
