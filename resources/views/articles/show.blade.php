@extends('layout')

@section('content')
    <h1>{{$article->title}}</h1>
    <p class="break">{{ $article->body }}</p>
    <form method="GET" action="/blog/{{$article->id}}/edit">
        @csrf
        <p><input type="submit" value="Edit Blog"></p>
    </form>
@endsection
