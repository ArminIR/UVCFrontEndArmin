@extends ('layout')
@section ('content')
    <main>
        <div>
            <p>FAQ</p>
            <div>
                @foreach($faqs as $faq)
                    <details>
                    <summary>
                        {{ $faq->question }}</summary> <p>{{$faq->answer }}<br> <a href="{{$faq->link}}" class="white-link">{{$faq->link}}</a></p>
                        </details>
                    @endforeach

            </div>
        </div>
        <img id="hzmiddelburg" src="./image/hzmiddelburg.jpg" alt="hzmiddelburg">
    </main>
@endsection
