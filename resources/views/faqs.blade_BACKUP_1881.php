@extends ('layout')

@section ('content')

    <main>

        <div>
<<<<<<< HEAD
            <p>FAQ testing</p>
=======
            <p>FAQ jaaa</p>
>>>>>>> merge
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

