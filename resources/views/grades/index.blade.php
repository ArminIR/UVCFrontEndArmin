@extends('layout')

@section('content')

    <div id="tabelMidden">

        <table class="tabel">
            <tr>
                <th>Blok </th>
                <th>Cursus</th>
                <th>EC</th>
                <th>Cijfer</th>
            </tr>
@foreach($grades as $grade)
    <tr>
        <td> {{ $grade -> course_name }} </td>
        <td> {{ $grade -> test_name }} </td>
        <td> {{ $grade -> ec }} </td>
        <td> {{ $grade -> best_grade }} </td>
    </tr>
@endforeach
@endsection
