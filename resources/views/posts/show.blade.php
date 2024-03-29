<x-layout>
    <x-slot name="id">
        {{ $post->id }} Laravelmix-Tutorial
    </x-slot>

    <div class="back-link">
        &laquo; <a href="{{ route('posts.index') }}">Back</a>
    </div>
    <h1>登録名簿</h1>
    <th>{{ $post->id }}</th>
    <th>{{ $post->name }}</th>
    <th>{{ $post->prefecture }}</th>
    <th>{{ $post->gender }}</th>
    <th>{{ $post->employmentstatus }}</th>
    <th>{{ $post->company }}</th>
    <th>{{ $post->jyob }}</th>
    <th>{{ $post->stay }}</th>
    <th>{{ $post->affiliation }}</th>
    <th>{{ $post->postion }}</th>
    <th>{{ $post->annual }}</th>
    <th>{{ $post->lastyear }}</th>
   
    <h2><a href="{{ route('posts.edit', $post) }}">[編集]</h2></a>
        <form method="post" action="">
    <h3><button class="btn">[削除]</button></h3></a>

    <form method="post" action="{{ route('posts.destroy', $post) }}" id="delete_post">
            @method('DELETE')
            @csrf
         <button class="btn">[x]</button>
     </form>
     <script>
        'use strict';

        {
            document.getElementById('delete_post').addEventListener('submit', e => {
                e.preventDefault();

                if (!confirm('Sure to delete?')) {
                    return;
                }

                e.target.submit();
            });
        }
    </script>

</x-layout>

