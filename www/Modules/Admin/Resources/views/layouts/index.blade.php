<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nevermore</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('admin/css/notifier.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body>
    @yield('main-content')

    @yield('script')

    <script src="{{ asset('admin/js/notifier.js') }}"></script>

    @include('admin::components.notifier')

    <script>
        const notification = setTimeout(removeNotification, 2000);

        function removeNotification() {
            var notifi = document.getElementById("notifier-0");
            notifi.classList.remove("shown");
        }

        $(document).ready(function() {
            $('.select-custom').select2();
        });
    </script>
</body>

</html>
