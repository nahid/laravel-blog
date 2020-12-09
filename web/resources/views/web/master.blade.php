<!DOCTYPE html>
<html>
<head>
    <meta name="generator" content="Hugo 0.51">
    <meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nahid | The Alien</title>
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


        <div class="recent-posts section">
            <div class="posts">

                <x-posts.post title="Hello World" link="https://fb.me/to.nahid" time="2020-12-10">
                    Something new
                </x-posts.post>


                <div class="post">
                    <div class="post-header">
                        <div class="meta">
                            <div class="date">
                                <span class="day">11</span>
                                <span class="rest">Mar 2019</span>
                            </div>
                        </div>
                        <div class="matter">
                            <h4 class="title small">
                                <a href="post-8.html">Markdown Syntax Guide</a>
                            </h4>
                            <span class="description">

                                            Sample article showcasing basic Markdown syntax and formatting for HTML elements.

                                    </span>
                        </div>
                    </div>
                </div>

                <div class="post">
                    <div class="post-header">
                        <div class="meta">
                            <div class="date">
                                <span class="day">18</span>
                                <span class="rest">Mar 2018</span>
                            </div>
                        </div>
                        <div class="matter">
                            <h4 class="title small">
                                <a href="post-7.html">How to test dark mode?</a>
                            </h4>
                            <span class="description">

                                            Here is how you can setup dark mode for Ink and test on various OS like iOS, Android, macOS and Windows 10.

                                    </span>
                        </div>
                    </div>
                </div>

                <div class="post">
                    <div class="post-header">
                        <div class="meta">
                            <div class="date">
                                <span class="day">18</span>
                                <span class="rest">Mar 2018</span>
                            </div>
                        </div>
                        <div class="matter">
                            <h4 class="title small">
                                <a href="post-5.html">Typography</a>
                            </h4>
                            <span class="description">


    Lid est laborum et dolorum fuga. Et harum quidem rerum facilis est et expeditasi distinctio. Nam libero tempore, cum so...

                                    </span>
                        </div>
                    </div>
                </div>

                <div class="post">
                    <div class="post-header">
                        <div class="meta">
                            <div class="date">
                                <span class="day">18</span>
                                <span class="rest">Mar 2018</span>
                            </div>
                        </div>
                        <div class="matter">
                            <h4 class="title small">
                                <a href="post-6.html">Hugo shortcodes</a>
                            </h4>
                            <span class="description">

                                            Here is a demo of all shortcodes available in Hugo.

                                    </span>
                        </div>
                    </div>
                </div>

                <div class="post">
                    <div class="post-header">
                        <div class="meta">
                            <div class="date">
                                <span class="day">18</span>
                                <span class="rest">Mar 2018</span>
                            </div>
                        </div>
                        <div class="matter">
                            <h4 class="title small">
                                <a href="post-4.html">Getting Started with Traveling Ultralight</a>
                            </h4>
                            <span class="description">

                                            Start by getting a small backpack (less than 20 liters) and then just travel with what fits in that.

                                    </span>
                        </div>
                    </div>
                </div>

                <x-page.paginate next="http://localhost:8800/view?page=1" />
            </div>
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
