<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-lg font-bold mb-8 border-b">Manage posts</h1>

            <div class="flex">
                @include('backoffice.partials.aside')

                <main class="flex-1">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200 space-y-6">
                            @foreach ($posts as $post)
                                @include('components.post')
                            @endforeach

                            <div class="max-w-4xl mx-auto">
                                {{ $posts->links() }}
                            </div>
                        </div>
                    </div>
                </main>
            </div>

        </div>
    </div>
</x-app-layout>
