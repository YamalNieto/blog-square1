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
    </div>
</article>
