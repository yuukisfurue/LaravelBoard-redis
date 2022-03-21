<x-layout>
    <x-slot name="title">
        Edit  Laravelmix-Tutorial
    </x-slot>

    <div class="back-link">
        &laquo; <a href="{{ route('posts.show', $post) }}">Back</a>
    </div>

    <h1>Edit Post</h1>

    <form method="post" action="{{ route('posts.update', $post) }}">
        @method('PATCH')
        @csrf

        <div class="form-group">
            <label>
            氏名
                <input type="text" name="name" value="{{ old('name', $post->name) }}">
            </label>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>
            性別
                <textarea name="gender">{{ old('gender', $post->gender) }}</textarea>
            </label>
            @error('gender')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>
            出身地
                <textarea name="pref">{{ old('pref', $post->pref) }}</textarea>
            </label>
            @error('pref')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>
            職業
                <textarea name="jyob">{{ old('jyob', $post->jyob) }}</textarea>
            </label>
            @error('jyob')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>
              雇用
                <textarea name="employmentstatus">{{ old('jyob', $post->employmentstatus) }}</textarea>
            </label>
            @error('employmentstatus')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>        <div class="form-button">
            <button>Update</button>
        </div>
    </form>
</x-layout>