<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Post</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow sm:rounded-lg p-6">

                @if ($errors->any())
                    <div class="mb-4 p-3 bg-red-100 text-red-800 rounded">
                        <ul class="list-disc ml-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('posts.update', $post) }}" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="block font-medium">Title</label>
                        <input name="title" value="{{ old('title', $post->title) }}"
                               class="w-full border rounded p-2" />
                    </div>

                    <div>
                        <label class="block font-medium">Body</label>
                        <textarea name="body" rows="6"
                                  class="w-full border rounded p-2">{{ old('body', $post->body) }}</textarea>
                    </div>

                    <button class="px-4 py-2 bg-black text-white rounded" type="submit">
                        Update
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
