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
<body class="static">

    <header id="header" class="main_header">
        <div class="page_container">
            <a href="/" class="logo"></a>
            <div class="header_nav pull-right">
                <a href="{{ route('page.blog') }}">Blog</a>
            </div>
        </div>
    </header>

    @yield('content')



    <script type="text/javascript" src="/assets/frontend/js/frontend.min.js"></script>

    @yield('js')



</body>
</html>
