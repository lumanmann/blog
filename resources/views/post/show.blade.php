<x-app-layout>
    <div class="py-4">
        <div class="flex gap-4">
            <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                          clip-rule="evenodd"></path>
                </svg>
            </div>

            <h3>{{ $post->user->name }}</h3>

            <a href="#" class="mx-2 text-emerald-500">Follow</a>
            <div class="flex gap-2 text-sm text-gray-500">
                3 min read
                &middot;
                <span>
                     @if($post->published_at)
                        Published on {{ $post->published_at->format('M d, Y') }}
                    @else
                        Not published
                    @endif
                </span>

            </div>
        </div>
        {{--Edit or Delete--}}
        @if ($post->user_id === Auth::id())
            <div class="py-4 mt-8 border-t border-b border-gray-200">
                <x-primary-button href="{{ route('post.edit', ['username' => $post->user->username, 'post' => $post->slug]) }}">
                    Edit Post
                </x-primary-button>

                <form class="inline-block" action="{{ route('post.delete', $post) }}" method="post">
                    @csrf
                    @method('delete')
                    <x-primary-button>
                        Delete Post
                    </x-primary-button>
                </form>
            </div>
        @endif

        <!-- Content Section -->
        <div class="mt-8">
            <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full">

            <div class="mt-4">
                {{ $post->content }}
            </div>
        </div>

        <div class="mt-8">
                    <span class="px-4 py-2 bg-gray-200 rounded-2xl">
                        {{ $post->category->name }}
                    </span>
        </div>


    </div>

</x-app-layout>
