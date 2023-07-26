<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', '') - {{ config('app.name') }}</title>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    @routes()
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('apex-charts/apex-charts.css') }}" rel="stylesheet">
    @yield('style')


</head>

<body>
    @guest
        @yield('content')
    @else
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                @include('partials.menu')
                <div class="layout-page">
                    @include('partials.navbar')
                    <div class="content-wrapper">
                        @yield('content')
                        @include('partials.footer')
                    </div>
                </div>
            </div>
        </div>
    @endguest
    <div id='loading'></div>
    @guest
    @else
        <script src="{{ asset('js/helpers.js') }}" defer></script>
        <script src="{{ asset('js/menu.js') }}" defer></script>
        <script src="{{ asset('js/main.js') }}" defer></script>
        <script src="{{ asset('js/config.js') }}" defer></script>
        <script src="{{ asset('apex-charts/apexcharts.js') }}" defer></script>
        <script src="{{ asset('js/dashboards-analytics.js') }}" defer></script>
        {{-- <script src="{{ asset('js/button.js') }}" defer></script> --}}
    @endguest
    @yield('scripts')
    <script src="{{ mix('js/scripts.js') }}" defer></script>

</body>

</html>
