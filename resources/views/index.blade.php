<x-layout>
    <x-slot name="title">
    Laravelmix-Tutorial
    </x-slot>

    <h1>
        <span>Laravelmix-Tutorial</span>
        <a href="{{ route('posts.create') }}">[追加]</a>
    </h1>
    <h2>
        <span>Laravelmix-Tutorial</span>
    </h2>
    <table border="1">
    <tr>
    <td>NO</td>
    <td>名前</td>
    <td>性別</td>
    <td>出身地</td>
    <td>所属</td>
    <td>雇用</td>
  </tr>   
  </table>

  @forelse ($posts as $post)
  <table border="1">
  <tr>
    <th>{{ $post->id }}</th>
    <th>{{ $post->name }}</th>
    <th>{{ $post->gender }}</th>
    <th>{{ $post->pref }}</th>
    <th>{{ $post->jyob }}</th>
    <th>{{ $post->employmentstatus }}</th>
  </tr>
    </table>
        @empty
            <li>No posts</li>
        @endforelse
</x-layout>