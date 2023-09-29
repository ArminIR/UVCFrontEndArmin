@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>404 Error: Page Not Found</h1>
                <p>The page you are looking for cannot be found.</p>
                <p>It seems that the page you are trying to access doesn't exist or has been moved.</p>
                    <div class="form-group">
                    </div>
                <a href="/"><button type="submit" class="btn btn-primary">Go back to the home page</button></a>
                <h4>or</h4>
                <button onclick="goBack()" class="btn btn-primary">Go back to the previous page</button>
            </div>
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endsection
