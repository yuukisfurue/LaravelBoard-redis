<x-layout>
    <x-slot name="title">
    Laravelmix-Tutorial
    </x-slot>

    <h1>
        <span>Laravelmix-Tutorial</span>
        <a href="{{ route('posts.create') }}">[登録へ]</a>
    </h1>
    <h2>
        <span>Laravelmix-Tutorial</span>
    </h2>
    <table border="1">
    <tr>
    <td>NO</td>
    <td>名前</td>
    <td>性別</td>
    <td>都道府県</td>
    <td>職種</td>
    <td>役職</td>
  </tr>   
  </table>

  @forelse ($posts as $post)
  <table border="1">
  <tr>
    <th>{{ $post->id }}</th>
    <th>{{ $post->name }}</th>
    <th>{{ $post->gender }}</th>
    <th>{{ $post->prefecture }}</th>
    <th>{{ $post->jyob }}</th>
    <th>{{ $post->position }}</th>
  </tr>
    </table>
        @empty
            <li>post->links();</li>
        @endforelse
        <p class="mt-5">{{ $posts->links() }}</p>

   </x-layout>