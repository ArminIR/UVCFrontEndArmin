@extends('layout')

@section('content')
    <h1>New Faq</h1>

    <form method="POST" action="{{route('faqs.index')}}">
        @csrf
        <p><label for="question">What is your question</label><br>
            <input class="@error('question') is-danger @enderror" type="text" id="question" name="question" value="{{old('question')}}"><br></p>
        @error('question')
        <p class="help is-danger">{{ $errors->first('question') }}</p>
        @enderror

            <p><label for="answer">What is the answer</label><br>
                <input class="@error('answer') is-danger @enderror" type="text" id="answer" name="answer" value="{{old('answer')}}"><br></p>
        @error('answer')
        <p class="help is-danger">{{ $errors->first('answer') }}</p>
        @enderror

            <p><label for="link">put the link here</label><br>
                <input class="@error('link') is-danger @enderror" type="text" id="link" name="link" value="{{old('link')}}"><br><br></p>
        @error('link')
        <p class="help is-danger">{{ $errors->first('link') }}</p>
        @enderror

            <p><input type="submit" value="Submit"></p>
    </form>

@endsection
