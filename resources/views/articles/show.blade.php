@extends('layout')

@section('content')
    <h1>{{$article->title}}</h1>
    <p class="break">{{ $article->body }}</p>
@endsection
