@extends('layout')

@section('content')
    <h1>New Faq</h1>

    <form method="POST" action="/faq">
        @csrf
        <p><label for="question">What is your question</label><br>
            <input type="text" id="question" name="question" value=""><br>
            <label for="answer">What is the answer</label><br>
            <input type="text" id="answer" name="answer" value=""><br>
            <label for="link">put the link here</label><br>
            <input type="text" id="link" name="link" value=""><br><br>
            <input type="submit" value="Submit"></p>
    </form>

@endsection
