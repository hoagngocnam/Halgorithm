<!DOCTYPE html>

<html lang="vi-VN">

<head>
    <title>Tiêu đề website</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="INDEX,FOLLOW" name="robots">

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/axios/axios.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('users/css/common.css') }}">
    @yield('styles')

</head>

<body class="dmx-site">

    @include('users::layouts.advertisement')

    @include('users::layouts.header')

    @yield('banner')

    @yield('main-content')

    @include('users::layouts.footer')

    <div id="loadding" class="loading hide">
        <span class="cswrap">
            <span class="csdot"></span>
            <span class="csdot"></span>
            <span class="csdot"></span>
        </span>
    </div>

    @yield('script')
</body>

</html>
