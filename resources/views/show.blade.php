<x-layout>
    <x-slot name="id">
        {{ $post->id }} Laravelmix-Tutorial
    </x-slot>

    <div class="back-link">
        &laquo; <a href="{{ route('posts.index') }}">Back</a>
    </div>

    <h1>{{ $post->id }}</h1>
    <p>{{ $post->name }}</p>
    <p>{{ $post->pref }}</p>
    <p>{{ $post->jyob }}</p>
    <p>{{ $post->gender }}</p>
    
</x-layout>

