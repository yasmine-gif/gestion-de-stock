<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('Css/bootstrap.min.css') }}" />
    <script src="{{ asset('Js/bootstrap.min.js') }}"></script>
    <title>@yield('title')</title>
</head>
<body>
    @include('notify::messages')
    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid bg-danger p-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    @yield('sous-title')
                    @yield('commentaire')
                    </div>
                    <div class="col-md-6">
                        @yield('image')
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                @yield('form')
            </div>
            <div class="col-md-6">
                @yield('table')
            </div>
        </div>
    </div>
    @notifyJs
</body>
</html>