@extends('layout')

@section('content')
    <h1>New Article</h1>

    <form method="POST" action="/blog">
        @csrf
        <p><label for="title">Title</label><br>
            <input type="text" id="title" name="title" value=""><br>
            <label for="excerpt">Excerpt</label><br>
            <input type="text" id="excerpt" name="excerpt" value=""><br>
            <label for="body">Body</label><br>
            <input type="text" id="body" name="body" value=""><br><br>
            <input type="submit" value="Submit"></p>
    </form>

@endsection
