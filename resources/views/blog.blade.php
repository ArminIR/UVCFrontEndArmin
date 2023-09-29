@extends('layout')

@section('content')
    <h1>Blogs</h1>
    @foreach($articles as $article)
        <h4>{{$article->title}}</h4>
        <p><a href="{{route('blogs.show', $article->id)}}" class="white-link">{{$article->excerpt}}</a></p>
    @endforeach

    <form method="GET" action="{{route('blogs.create',  $article->id)}}">
        @csrf
        <p><input type="submit" value="Add blog"></p>
    </form>
    <p><a class="white-link"
       href="https://werkenbijdefensie.nl/inspiratiegebieden/verover-het-digitale-domein?gclid=Cj0KCQjwy5maBhDdARIsAMxrkw0M5-TMvxRVqO6L-G1drz7aHXCudv9t-fhA0gy1pVl63OejVnH7fKcaAuSHEALw_wcB">ICT
        field of work</a></p>
@endsection
