<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $site->title() }} | {{ $page->title() }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="stylesheet" href="/css/animate.css">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/images/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    @stack('styles')
    <script src="/js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
    <style>
        .swiper-button-prev, .swiper-button-next  {
    color: white;
}
    </style>
</head>
<body>
@include('partials.nav')
@yield('content')
@include('partials.footer')
@stack('scripts')
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
