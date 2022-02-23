<x-app-layout>
    <section class="px-6 pt-2 pb-10">
        <main class="max-w-6xl mx-auto mt-6 lg:mt-8 space-y-6">
            <div class="flex justify-end max-w-4xl">
                <div>
                    <a href="/?sort=likes&{{ http_build_query(request()) }}">
                        <button>Sort by likes</button>
                    </a>
                    <a href="/">
                        <button>Sort by publication</button>
                    </a>

                </div>
            </div>
            @if($posts->count())
                @foreach($posts as $post)
                    @include('components.post')
                @endforeach

                <div class="max-w-4xl mx-auto">
                    {{ $posts->links() }}
                </div>
            @else
                <p class="text-center">No posts yet. Please check back later</p>
            @endif
        </main>
    </section>
</x-app-layout>
