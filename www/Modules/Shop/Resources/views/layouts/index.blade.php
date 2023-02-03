<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bluebox Free Bootstrap Admin Template</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    <link href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.js') }}"></script>

</head>

<body>
    <div id="wrapper">
        @yield('main-content')
    </div>

    <script src="/admin/js/jquery-1.10.2.js"></script>
    <script src="/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="/admin/js/jquery.metisMenu.js"></script>


    <script>
        function deleteRecord(href) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = href;
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            });
        }
    </script>
</body>

</html>
