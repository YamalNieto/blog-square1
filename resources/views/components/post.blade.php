@php
    $like = $post->likeByUser(auth()->user());
@endphp

<article class="max-w-4xl mx-auto lg:grid gap-x-10">
    <div class="col-span-4 mb-2 text-indigo-600">
        <p class="mt-4 block text-indigo-600 text-xs">
            Published <time>{{ $post->publication_date->diffForHumans() }}</time>
        </p>
    </div>

    <div class="col-span-8">
        <h1 class="font-bold text-3xl lg:text-4xl mb-4">
            {{ $post->title }}
        </h1>
        <div class="space-y-4 lg:text-lg leading-loose text-gray-700">
            {{ $post->description }}
        </div>
        <div class="row mt-3">
            @auth
                <button id="likeButton"
                        data-like-action="{{ $like ? 'dislike' : 'like' }}"
                        data-post-id="{{ $post->id }}"
                        class="border-2 border-indigo-600 rounded-md py-1 p px-2 text-sm"
                >
                    {{ $like ? 'Dislike' : 'Like' }}
                </button>
                <span id="likes-count-{{ $post->id }}"
                      class="border-b-2 border-red-500 text-sm"
                >
                    {{ $post->likes }}
                </span>
            @else
                <span class="text-sm">Likes</span>
                <span id="likes-count-{{ $post->id }}"
                      class="border-b-2 border-red-500 text-sm">{{ $post->likes }}</span>
            @endauth

        </div>
    </div>
</article>
