@extends('layout')

@section('content')
    <form method="POST" action="{{route('grades.show', $grade->id)}}">
        @csrf
        @method('PUT')
        <p><label for="course_name">Blok</label><br>
            <input class="@error('course_name') is-danger @enderror" type="text" id="question" name="question" value="{{old('course_name')}}"><br></p>

        @error('question')
        <p class="help is-danger">{{ $errors->first('course_name') }}</p>
        @enderror

        <p><label for="test_name">Cursus</label><br>
            <input class="@error('test_name') is-danger @enderror" type="text" id="answer" name="answer" value="{{old('test_name')}}"><br></p>
        @error('test_name')
        <p class="help is-danger">{{ $errors->first('test_name') }}</p>
        @enderror

        <p><label for="ec">Hoeveel EC</label><br>
            <input class="@error('ec') is-danger @enderror" type="text" id="link" name="link" value="{{old('ec')}}"><br><br></p>
        @error('ec')
        <p class="help is-danger">{{ $errors->first('ec') }}</p>
        @enderror

        <p><label for="best_grade">Cijfer</label><br>
            <input class="@error('best_grade') is-danger @enderror" type="text" id="link" name="link" value="{{old('best_grade')}}"><br><br></p>
        @error('best_grade')
        <p class="help is-danger">{{ $errors->first('best_grade') }}</p>
        @enderror

        <p><input type="submit" value="Submit"></p>
    </form>
    <form method="POST" action="{{route('grades.show', $grade->id)}}">
        @csrf
        @method('DELETE')
        <p><button type="submit">Delete</button></p>
    </form>
@endsection
