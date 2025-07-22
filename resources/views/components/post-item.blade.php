<div class="flex bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mb-8">
    <div class="p-5 flex-1">
        <a href="{{ route('post.show', [
            'username' => $post->user->username,
            'post' => $post->slug
        ]) }}">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $post->title }}
            </h5>
        </a>
        <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            {{ Str::words($post->content, 20) }}
        </div>
        <div class="text-sm text-gray-400 flex gap-4">
            <div class="">
                by
                <a href="" class="text-gray-600 hover:underline">
                    {{ $post->user->name }}
                </a>
                at
                {{ $post->created_at->format('M d, Y') }}
            </div>

        </div>
    </div>
    <a href="/test">
        <img class="w-48 h-full max-h-64 object-cover rounded-r-lg"
             src="https://fakeimg.pl/400x300/" alt="" />
    </a>
</div>
