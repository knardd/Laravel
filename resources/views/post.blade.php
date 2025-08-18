<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="text-white py-4 max-w-screen">
        <div>
            <a href="/authors/{{ $post->author->id }}">{{ $post->author->name }}</a> | {{ $post->created_at->format('l j F Y') }}
        </div>
        <p>{{ $post['body'] }}
        </p>
        <a href="/posts" class="hover: underline hover:text-blue-500">&laquo; Back to posts</a>
    </article>
</x-layout>