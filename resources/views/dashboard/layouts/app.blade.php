<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <title>Admin Dashboard HTML Template</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--<link href="favicon.png" rel="shortcut icon">--}}
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    {{--main style--}}
    <link href="/assets/backend/css/backend.min.css" rel="stylesheet">
    @yield('css')
    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
    </script>
    <style>
        .cursor_pointer{
            cursor: pointer;
        }
        .top-menu-secondary .logo-w img{
            height: 25px;
        }
        .top-menu-secondary .logged-user-w .avatar-w{
            color: #ffffff;
        }
        .menu-mobile .mm-logo-buttons-w .mm-logo img {
            width: 85px;
        }
    </style>
</head>
<body>

<div class="all-wrapper menu-side solid-bg-all">
    @include('dashboard.layouts.top_menu')
    <div class="layout-w">
        @include('dashboard.layouts.menu')
        <div class="content-w">
            {{--content section start--}}
            @yield('content')
            {{--content section end--}}
        </div>
    </div>
    <div class="display-type"></div>
</div>
<script src="/assets/backend/js/backend.min.js?v=1"></script>
@yield('js')
</body>
</html>


