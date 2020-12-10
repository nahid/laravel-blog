@extends('web.layouts.master')

@section('title', 'All Posts')

@section('heading', 'All Posts')

@section('contents')
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
@endsection
