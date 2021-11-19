<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $site->title() }} | {{ $page->title() }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="stylesheet" href="/css/animate.css">
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
