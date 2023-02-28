@extends('layout')

@section('content')
    <h1>{{$article->title}}</h1>
    <p class="break">{{ $article->body }}</p>
    <form method="GET" action="{{route('blogs.edit', $article->id)}}">
        @csrf
        <p><input type="submit" value="Edit Blog"></p>
    </form>
@endsection
