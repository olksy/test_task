<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <script src="https://kit.fontawesome.com/acfdf5d0a2.js" crossorigin="anonymous"></script>
    <title>@yield('title', 'Editorial')</title>
</head>

<body>
    <div id="wrapper">
        <div id="main">
            <div class="inner">
                @include('includes.header')
                @yield('content')
            </div>
        </div>
        @include('includes.sidebar')
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{asset('js/browser.min.js')}}"></script>
    <script src="{{ asset('js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('js/util.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>