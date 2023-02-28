@extends('layout')

@section('content')
    <h1>New Article</h1>

    <form method="POST" action="{{route('blogs.index')}}">
        @csrf
        <p><label for="title">Title</label><br>
            <input class="@error('title') is-danger @enderror" type="text" id="title" name="title" value="{{old('title')}}"><br>

        @error('title')
        <p class="help is-danger">{{ $errors->first('title') }}</p>
        @enderror

            <p><label for="excerpt">Excerpt</label><br>
            <input class="@error('excerpt') is-danger @enderror" type="text" id="excerpt" name="excerpt" value="{{old('excerpt')}}"><br>

            @error('excerpt')
                <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
            @enderror

            <p><label for="body">Body</label><br>
            <input class="@error('body') is-danger @enderror" type="text" id="body" name="body" value="{{old('body')}}"><br><br>

            @error('body')
                <p class="help is-danger">{{ $errors->first('body') }}</p>
            @enderror

            <p><input type="submit" value="Submit"></p>
    </form>

@endsection
