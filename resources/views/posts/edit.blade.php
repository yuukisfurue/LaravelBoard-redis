<x-layout>
    <x-slot name="title">
        Edit Post - My BBS
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
                <input type="string" name="name" value="{{ old('name') }}">
            </label>
    </div>
        <div class="form-group">
        <tr><th>性別</th><td>
        <select type="text" class="form-control" name="gender">                 
        @foreach(config('gender') as $key => $score)
        <option value="{{ $score }}">{{ $score }}</option>
        @endforeach
        </select>         </div>
        <div class="form-group">
         <tr><th>出身地</th><td>
         <select type="text" class="form-control" name="pref">                          
        @foreach(config('pref') as $key => $score)
        <option value="{{ $score }}">{{ $score }}</option>
        @endforeach
       </select>
        </div>
        <div class="form-group">
         <tr><th>所属</th><td>
         <select id="select-jyob" class="select-jyob" name="jyob">
         @foreach (config('consts.jyobs') as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
        </select>
        </div>
        <div class="form-group">
        <tr><th>雇用</th><td>
        <select type="text" class="form-control" name="employmentstatus">                 
        @foreach(config('employmentstatus') as $key => $score)
        <option value="{{ $score }}">{{ $score }}</option>
        @endforeach
        </select>
     </div>
         <div class="form-button">
                <button>Update</button>
         </div>
    </form>
</x-layout>