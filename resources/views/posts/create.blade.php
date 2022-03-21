<x-layout>
    <x-slot name="title">
        Add New BOARD
    </x-slot>

    <div class="back-link">
        &laquo; <a href="{{ route('posts.index') }}">Back</a>
    </div>

    <h1>Add New Post</h1>

    <form method="post" action="{{ route('posts.store') }}">
        @csrf

        <div class="form-group">
            <label>
              氏名
                <input type="string" name="name" value="{{ old('name') }}">
            </label>
        </div>
        <div class="form-group">
            <label>
              性別
                <input type="string" name="gender" value="{{ old('gender') }}">
            </label>
         </div>
        <div class="form-group">
            <label>
              出身地
               <input type="string" name="pref" value="{{ old('pref') }}">
            </label>
        </div>
        <div class="form-group">
            <label>
            職業
                <input type="string" name="jyob" value="{{ old('jyob') }}">
            </label>
        </div>
        <div class="form-group">
            <label>
            雇用形態
                <input type="string" name="employmentstatus" value="{{ old('employmentstatus') }}">
            </label>
            </div>
        <div class="form-button">
            <button>Add</button>
        </div>
    </form>
</x-layout>