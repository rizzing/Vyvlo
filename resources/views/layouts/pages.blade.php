<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/assets/frontend/css/frontend.min.css">

    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
    </script>
</head>
<body>

    <header id="header" class="white_header">
        <div class="page_container">
            <a href="/" class="logo"></a>
            <div class="header_nav pull-right">
                <a href="{{ route('page.blog') }}">Blog</a>
            </div>
        </div>
    </header>

    @yield('content')

    <footer id="footer">
        <div class="page_container">
            <div class="row">
                <div class="col-xs-100 col-md-30">
                    <a href="/" class="logo"></a>
                </div>
                <div class="col-xs-100 col-md-40">
                    <ul class="footer_nav">
                        <li><a href="{{ route('page.help') }}">Help</a></li>
                        <li><a href="{{ route('page.terms') }}">Terms of Use</a></li>
                        <li><a href="{{ route('page.about') }}">About Us</a></li>
                    </ul>
                </div>
                <div class="col-xs-100 col-md-30">
                    <div class="soc_links">
                        <a class="icon_tw" href="#"></a>
                        <a class="icon_fb" href="#"></a>
                    </div>
                </div>
            </div>
            <div class="copy_text">
                By using this site, you agree to the <a href="{{ route('page.policy') }}"><span class="b">Privacy Policy</span></a><br /> and <a href="{{ route('page.terms') }}"><span class="b">Terms of Use</span></a>.<br />
                © 2018 Vyvlo All rights reserved
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="/assets/frontend/js/frontend.min.js"></script>

    @yield('js')


</body>
</html>
