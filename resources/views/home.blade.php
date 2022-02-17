<x-app-layout>
    <section class="px-6 pt-2 pb-10">
        <main class="max-w-6xl mx-auto mt-6 lg:mt-8 space-y-6">
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
