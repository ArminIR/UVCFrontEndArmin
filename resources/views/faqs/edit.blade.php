@extends('layout')

@section('content')
    <h1>New Faq</h1>

    <form method="POST" action="{{route('faqs.show', $faq->id)}}">
        @csrf
        @method('PUT')
        <p><label for="question">What is your question</label><br>
            <input type="text" id="question" name="question" value="{{$faq->question}}"><br>
            <label for="answer">What is the answer</label><br>
            <input type="text" id="answer" name="answer" value="{{$faq->answer}}"><br>
            <label for="link">put the link here</label><br>
            <input type="text" id="link" name="link" value="{{$faq->link}}"><br><br>
            <input type="submit" value="Submit"></p>
    </form>
    <form method="POST" action="{{route('faqs.show', $faq->id)}}">
        @csrf
        @method('DELETE')
        <p><button type="submit">Delete</button></p>
    </form>

@endsection
