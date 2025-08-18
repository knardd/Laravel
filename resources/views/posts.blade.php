<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
    <article class="text-white py-4 max-w-screen">
        <h2 class="mb-1 text-2xl font-bold">{{ $post['title'] }}</h2>
        <div><a href="/authors/{{ $post->author->id }}"{{ $post->author->id }} class="hover:underline">{{ $post->author->name }}</a> | {{ $post->created_at->format('l j F Y') }}
        </div>
        <p>{{ Str::limit($post['body'], 100) }}
        </p>
        <a href="/posts/{{ $post['slug'] }}" class="hover:underline hover:text-blue-500">Readmore &raquo;</a>
    </article>
        @endforeach
</x-layout>