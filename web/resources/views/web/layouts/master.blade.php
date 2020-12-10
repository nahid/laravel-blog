<!DOCTYPE html>
<html>
<head>
    <meta name="generator" content="Hugo 0.51">
    <meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nahid | @yield('title', 'The Alien')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" type="application/rss+xml" href="/index.xml" title="Ink">
    <meta itemprop="name" content="Ink">
    <meta itemprop="description" content="">
    <meta property="og:title" content="Ink">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/">
    <meta property="og:updated_time" content="2019-04-19T21:37:58+05:30">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Ink">
    <meta name="twitter:description" content="">

    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.ico') }}" />

@include('web.partials.styles')

</head>
<body>
    <div class="container wrapper">
        @include('web.partials.header')

        <div class="section">
            @hasSection('heading')
            <h3 style="text-decoration: underline;">@yield('heading')</h3>
            @endif
            @yield('contents')
        </div>


    </div>

@include('web.partials.footer')

@include('web.partials.scripts')

    <script type="application/javascript">
    var doNotTrack = false;
    if (!doNotTrack) {
        window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
        ga('create', 'UA-123-45', 'auto');

        ga('send', 'pageview');
    }
    </script><script async src="js/analytics.js"></script><script>feather.replace()</script>
</body>
</html>
