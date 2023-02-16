@extends ('layout')

@section ('content')
<h1 class="dashtitle">Welkom op mijn studiemonitor!</h1>
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
        <td> {{ $grade -> EC }} </td>
        <td> {{ $grade -> best_grade }} </td>
            </tr>
        @endforeach




    <table class="tabel">
        <tr>
            <th>Blok </th>
            <th>Cursus</th>
            <th>EC</th>
            <th>Toets</th>
            <th>Cijfer</th>
        </tr>
        <tr>
            <td rowspan="3">1</td>
            <td>1e cursus</td>
            <td>5</td>
            <td>Geschreven Tentamen</td>
            <td>...</td>
        </tr>
        <tr>
            <td rowspan="2"> 2e curses</th>
            <td>5</th>
            <td>Geschreven Tentamen</th>
            <td>...</td>
        </tr>
        <tr>
            <td>2,5</td>
            <td>assesment</td>
            <td>...</td>
        </tr>
        <tr>
            <td rowspan="2">2</td>
            <td rowspan="2">Object Oriented Programming</td>
            <td rowspan="2">10</td>
            <td>Case Study (50%)</td>
            <td>...</td>
        </tr>
        <tr>
            <td>Project (50%)</td>
            <td>...</td>
        </tr>
        <tr>
            <td rowspan="4">3</td>
            <td>Framework Development 1</td>
            <td> 5</td>
            <td>Case study</td>
            <td>...</td>
        </tr>
        <tr>
            <td rowspan="3">Framework Project 1</td>
            <td rowspan="3">7,5</td>
            <td>Project (33%)</td>
            <td>...</td>
        </tr>
        <tr>
            <td>Study (33%)</td>
            <td>...</td>
        </tr>
        <tr>
            <td>Report (33%)</td>
            <td>...</td>
        </tr>
        <tr>
            <td rowspan="4">4</td>
            <td rowspan="4">Framework Project 2</td>
            <td rowspan="4">10</td>
            <td>portofolio (50%)</td>
            <td>...</td>
        </tr>
        <tr>
            <td>Project (25%)</td>
            <td>...</td>
        </tr>
        <tr>
            <td>Assesment (25%)</td>
            <td>...</td>
        </tr>
    </table>
</div>
<h3 id="h3">NBSA boundary</h3>
<div>
    <img src="./image/MicrosoftTeams-image.png" alt="NBSA" class="center">
</div>
<div class="center">
    <h3>NBSA</h3>
    <progress value = "{{ $grade -> EC }}" max = "60">
</div>
@endsection
