<x-layout>
    <x-slot name="title">
    Laravelmix-Tutorial
    </x-slot>

    <h1>
        <span>Laravelmix-Tutorial</span>
        <a href="{{ route('posts.create') }}">[Add]</a>
    </h1>
    @forelse ($posts as $post)
    <table border="3">
    <tr>
    <th>番号</th>
    <th>氏名</th>
    <th>性別</th>
    <th>出身地</th>
    <th>職業</th>
    <th>雇用</th>
  </tr>   
  <tr>
    <td>{{ $post->id }}</td>
    <td>{{ $post->name }}</td>
    <td>{{ $post->gender }}</td>
    <td>{{ $post->pref }}</td>
    <td>{{ $post->jyob }}</td>
    <td>{{ $post->employmentstatus }}</td>
  </tr>
  <tr>

    </table>
        @empty
            <li>No posts</li>
        @endforelse
</x-layout>