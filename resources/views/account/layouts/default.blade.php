<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style type="text/css"> 

</style>
<body>
    <div id="app">
        @include('layouts.partials.nav')

        <main class="py-4">
            <div class="container">
                @if(session()->has('success') || session()->has('error'))
                    @include('layouts.partials.alerts')
                @endif
                <div class="row">
                    <div class="col-md-3">
                        @include('account.layouts.partials.nav')
                    </div>
                    <div class="col-md-9">
                        @yield('content')
                    </div>
                </div>
            </div>            
        </main>
    </div>
</body>
</html>
