<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield ('title', 'leaya BBS') - {{ setting('site_name', '移居者，移民海外指南') }}</title>
    <meta name="description" content="@yield('description', setting('seo_description', '移居者， 移民海外的社区'))">
    <meta name="keyword" content="@yield('keyword', setting('seo_keyword', 'LaraBBS,社区,论坛,开发者论坛'))" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
    <script>
        window.Laravel = {
            csrfToken: '{{ csrf_token() }}'
        }
    </script>
</head>
<body>
    <div id="app" class="{{ route_class() }}-page">
        @include('layouts._header')
        <div class="container">
            @include('layouts._message')
            @yield('content')
        </div>
        @include('layouts._footer')
    </div>

    @if (config('app.debug'))
        @include('sudosu::user-selector')
    @endif

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>