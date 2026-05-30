<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Posts</h2>
            <a href="{{ route('posts.create') }}" class="px-4 py-2 bg-black text-white rounded">
                New Post
            </a>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow sm:rounded-lg">
                <div class="p-6 space-y-4">
                    @foreach ($posts as $post)
                        <div class="border-b pb-4">
                            <h3 class="text-lg font-bold">
                                <a class="underline" href="{{ route('posts.show', $post) }}">
                                    {{ $post->title }}
                                </a>
                            </h3>

                            <p class="text-sm text-gray-600">
                                By {{ $post->user->name }} • {{ $post->created_at->diffForHumans() }}
                            </p>

                            <p class="mt-2 text-gray-800">
                                {{ \Illuminate\Support\Str::limit($post->body, 160) }}
                            </p>

                            @can('update', $post)
                                <div class="mt-3 flex gap-3">
                                    <a class="underline" href="{{ route('posts.edit', $post) }}">Edit</a>

                                    <form method="POST" action="{{ route('posts.destroy', $post) }}"
                                          onsubmit="return confirm('Delete this post?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="underline text-red-600" type="submit">Delete</button>
                                    </form>
                                </div>
                            @endcan
                        </div>
                    @endforeach

                    <div>
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
