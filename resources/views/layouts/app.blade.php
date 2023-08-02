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
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('apex-charts/apex-charts.css') }}" rel="stylesheet">
    @livewireStyles
    @yield('style')


</head>

<body>
    @guest
        @yield('content')
    @else
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                @if (isset($showMenu) && $showMenu)
                    @include('partials.menu')
                @endif
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
    <script src="{{ asset('js/jquery-3.7.0.js') }}" data-turbolinks-eval="false"></script>

        <script src="{{ asset('js/helpers.js') }}" defer></script>

        @if (isset($showMenu) && $showMenu)
        <script src="{{ mix('js/menu.js') }}" defer></script>
        @endif
        <script src="{{ asset('js/main.js') }}" defer></script>
        <script src="{{ asset('js/config.js') }}" defer></script>
        <script src="{{ asset('apex-charts/apexcharts.js') }}" defer></script>
        <script src="{{ asset('js/dashboards-analytics.js') }}" defer></script>
        {{-- <script src="{{ asset('js/button.js') }}" defer></script> --}}
        @livewireScripts
        <script src="{{ mix('js/scripts_auth.js') }}" defer></script>

    @yield('scripts')
    <script src="{{ mix('js/scripts.js') }}" defer></script>
    <script>
        window.addEventListener('alert', event => {
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "preventDuplicates": true // Tùy chọn duy nhất
            };
            toastr[event.detail.type](event.detail.message,
                event.detail.title ?? '');

        });
    </script>

</body>

</html>
