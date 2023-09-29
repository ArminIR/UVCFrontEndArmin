@extends('layout')

@section('content')
    <h1>New FAQ</h1>

    <form method="POST" action="{{ route('faqs.index') }}">
        @csrf

        <p>
            <label for="question">What is your question</label><br>
            <input class="@error('question') is-danger @enderror" type="text" id="question" name="question" value="{{ old('question') }}">
            @error('question')
            <br><span class="help is-danger">{{ $message }}</span>
            @enderror
            <p class="error-message">You have to put a question heree</p>
        </p>

        <p>
            <label for="answer">What is the answer</label><br>
            <input class="@error('answer') is-danger @enderror" type="text" id="answer" name="answer" value="{{ old('answer') }}">
            @error('answer')
            <br><span class="help is-danger">{{ $message }}</span>
            @enderror^
            <p class="error-message">You have to put a answer here</p>
        </p>

        <p>
            <label for="link">Put the link here</label><br>
            <input class="@error('link') is-danger @enderror" type="text" id="link" name="link" value="{{ old('link') }}">
            @error('link')
            <br><span class="help is-danger">{{ $message }}</span>
            @enderror
            <p class="error-message">You have to put a link here</p>
        </p>

        <p>
            <input type="submit" value="Submit">
        </p>
    </form>

    <style>
        .help.is-danger {
            color: #ffffff;
            font-size: 0.9rem;
            background-color: #ff3860;
            padding: 5px;
            border-radius: 3px;
            margin-top: 5px;
            display: block;
        }

        .error-message-box {
            background-color: #ff3860;
            padding: 10px;
            border-radius: 5px;
            margin-top: 5px;
        }

        .error-message {
            color: #98fb98;
            margin: 0;
        }
    </style>
@endsection
