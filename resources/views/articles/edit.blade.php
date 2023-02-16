@extends('layout')

@section('content')
    <form method="POST" action="/blog/{{$article->id}}">
        @csrf
        @method('PUT')
        <p><label for="title">Title</label><br>
            <input type="text" id="title" name="title" value="{{$article->title}}"><br>
            <label for="excerpt">Excerpt</label><br>
            <input type="text" id="excerpt" name="excerpt" value="{{$article->excerpt}}"><br>
            <label for="body">Body</label><br>
            <input type="text" id="body" name="body" value="{{$article->body}}"><br><br>
            <input type="submit" value="Submit"></p>
    </form>
    <form method="POST" action="/blog/{{ $article->id }}">
        @csrf
        @method('DELETE')
        <p><button type="submit">Delete</button></p>
    </form>
@endsection
