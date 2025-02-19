<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @section('title')
            Thi thử
        @endsection
    </title>
    <link href="{{ asset('bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @stack('styles')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            @include('admin.layouts.sidebar')
            <div class="col-9 offset-3 p-0 position-relative">
                @include('admin.layouts.header')

                @yield('content')


                @include('admin.layouts.footer')
            </div>
        </div>
    </div>


    <script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>
    @stack('scripts')
</body>

</html>
