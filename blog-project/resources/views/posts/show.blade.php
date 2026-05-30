<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow sm:rounded-lg p-6">
                <p class="text-sm text-gray-600">
                    By {{ $post->user->name }} • {{ $post->created_at->toDayDateTimeString() }}
                </p>

                <div class="mt-4 whitespace-pre-line text-gray-800">
                    {{ $post->body }}
                </div>

                <div class="mt-6">
                    <a class="underline" href="{{ route('posts.index') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
