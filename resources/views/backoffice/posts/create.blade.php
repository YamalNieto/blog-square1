<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-lg font-bold mb-8 border-b">New post</h1>

            <div class="flex">
                @include('backoffice.partials.aside')

                <main class="flex-1">
                    <form action="{{ route('backoffice.posts.store') }}" method="POST">
                        @csrf

                        <div class="bg-white border border-gray-200 p-6 rounded-xl max-w-md mx-auto">
                            <div class="mb-6">
                                <label for="title"
                                       class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                    Title
                                </label>

                                <input type="text"
                                       class="border border-gray-200 p-2 w-full rounded"
                                       name="title"
                                       id="title"
                                       value="{{ old('title') }}"
                                       required>

                                @error('title')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="description"
                                       class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                    Description
                                </label>

                                <textarea class="border border-gray-200 p-2 w-full rounded"
                                          name="description"
                                          id="description"
                                          required
                                >{{ old('description') }}</textarea>

                                @error('description')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit"
                                    class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">
                                Publish
                            </button>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div>
</x-app-layout>
