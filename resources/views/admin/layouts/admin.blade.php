<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href={{ asset('adminassets/img/kaiadmin/favicon.ico') }} type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src={{ asset('adminassets/js/plugin/webfont/webfont.min.js') }}></script>
    <script src="https://cdn.tiny.cloud/1/lv5oojin0h0ecqgil46fxfb4zaao1huoaja72g51j3p9nkxn/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script>
        tinymce.init({
            selector: '#content',
            plugins: 'table textcolor',
            toolbar: 'undo redo | formatselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | table',
            content_style: 'body { font-family: Arial, sans-serif; font-size: 14px; }',
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href={{ asset('adminassets/css/bootstrap.min.css') }} />
    <link rel="stylesheet" href={{ asset('adminassets/css/plugins.min.css') }} />
    <link rel="stylesheet" href={{ asset('adminassets/css/kaiadmin.min.css') }} />
    <link rel="stylesheet" href={{ asset('adminassets/css/fonts.min.css') }} />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href={{ asset('adminassets/css/demo.css') }} />
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')
        <!-- End Sidebar -->

        <div class="main-panel">
            @include('admin.layouts.header')

            <div class="container">
                <div class="page-inner">
                    @yield('content')
                </div>
            </div>

            @include('admin.layouts.footer')
        </div>

    </div>
    <!--   Core JS Files   -->
    <script src={{ asset('adminassets/js/core/jquery-3.7.1.min.js') }}></script>
    <script src={{ asset('adminassets/js/core/popper.min.js') }}></script>
    <script src={{ asset('adminassets/js/core/bootstrap.min.js') }}></script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- jQuery Scrollbar -->
    <script src={{ asset('adminassets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}></script>
    <!-- Moment JS -->
    <script src={{ asset('adminassets/js/plugin/moment/moment.min.js') }}></script>

    <!-- Chart JS -->
    <script src={{ asset('adminassets/js/plugin/chart.js/chart.min.js') }}></script>

    <!-- jQuery Sparkline -->
    <script src={{ asset('adminassets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}></script>

    <!-- Chart Circle -->
    <script src={{ asset('adminassets/js/plugin/chart-circle/circles.min.js') }}></script>

    <!-- Datatables -->
    <script src={{ asset('adminassets/js/plugin/datatables/datatables.min.js') }}></script>

    <!-- Bootstrap Notify -->
    <script src={{ asset('adminassets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}></script>

    <!-- jQuery Vector Maps -->
    <script src={{ asset('adminassets/js/plugin/jsvectormap/jsvectormap.min.js') }}></script>
    <script src={{ asset('adminassets/js/plugin/jsvectormap/world.js') }}></script>

    <!-- Sweet Alert -->
    <script src={{ asset('adminassets/js/plugin/sweetalert/sweetalert.min.js') }}></script>

    <!-- Kaiadmin JS -->
    <script src={{ asset('adminassets/js/kaiadmin.min.js') }}></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src={{ asset('adminassets/js/setting-demo2.js') }}></script>

    @yield('scripts')
</body>

</html>
