<x-layout>
    <x-slot name="id">
        {{ $post->id }} Laravelmix-Tutorial
    </x-slot>

    <div class="back-link">
        &laquo; <a href="{{ route('posts.index') }}">Back</a>
    </div>

    <h1>BOARD</h1>
    <p>{{ $post->id }}</p>
    <p>{{ $post->name }}</p>
    <p>{{ $post->gender }}</p>
    <p>{{ $post->pref }}</p>
    <p>{{ $post->jyob }}</p>
    <p>{{ $post->employmentstatus }}</p>
    <h2>
        <span>{{ $post->id }}</span>
        <a href="{{ route('posts.edit', $post) }}">[Edit]</a>
    </h2>
</x-layout>

