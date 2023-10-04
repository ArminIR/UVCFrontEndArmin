@extends ('layout')
@section ('content')
    <main>
        <div>
            <p>FAQQ</p>
            <div>
                @foreach($faqs as $faq)
                    <details>
                        <summary>
                            {{ $faq->question }}</summary> <p>{{$faq->answer }}<br> <a href="{{$faq->link}}" class="white-link">{{$faq->link}}</a></p>
                        <form method="GET" action="/faqs/{{$faq->id}}/edit">
                            @csrf
                            <p><input type="submit" value="Edit Faq"></p>
                        </form>
                    </details>
                @endforeach
                <form method="GET" action="/faqs/create">
                    @csrf
                    <p><input type="submit" value="Add Faq"></p>
                </form>
            </div>
        </div>
        <img id="hzmiddelburg" src="./image/hzmiddelburg.jpg" alt="hzmiddelburg">
    </main>
@endsection
