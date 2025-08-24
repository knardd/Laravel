<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="text-white py-4 max-w-screen">
        <div>
            <a href="/authors/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a> 
            <a href="/category/{{ $post->category->slug }}" class="hover:underline">{{ $post->category->name }}</a> 
            
            | {{ $post->created_at->format('l j F Y') }}
        </div>
        <p>{{ $post['body'] }}
        </p>
        <a href="/posts" class="hover: underline hover:text-blue-500">&laquo; Back to posts</a>
    </article>
</x-layout>