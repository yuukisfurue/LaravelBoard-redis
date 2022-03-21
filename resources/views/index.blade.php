<x-layout>
    <x-slot name="title">
    Laravelmix-Tutorial
    </x-slot>

    <h1>
        <span>Laravelmix-Tutorial</span>
        <a href="{{ route('posts.create') }}">[Add]</a>
    </h1>
    <ul>
        @forelse ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->name }}
                    {{ $post->gender }}
                    {{ $post->pref }}
                    {{ $post->jyob }}
                    {{ $post->employmentstatus }}
                </a>
            </li>
        @empty
            <li>No posts</li>
        @endforelse
    </ul>
</x-layout>