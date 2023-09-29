@extends('layout')

@section('content')
    <h1>{{$grade->course_name}}</h1>
    <p class="break">{{ $grade->test_name }}</p>
    <form method="GET" action="{{route('grades.edit', $grade->id)}}">
        @csrf
        <p><input type="submit" value="Edit Grade"></p>
    </form>
@endsection
