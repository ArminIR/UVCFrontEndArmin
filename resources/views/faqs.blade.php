@extends ('layout')

@section ('content')

    <main>

        <div>
            <p>FAQ testing</p>
            <div>

                <details>
                    <summary>
                        {{ $faq-> question }}</summary> <p>{{$faq-> answer }}<br>
                        <a href="{{$faq->link}}" class="white-link">{{$faq->link}}</a></p>
                </details>
            </div>

        </div>

    </main>
@endsection

