<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Trang chủ</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href={{ asset('assets/css/main.css') }} />
    <script src="{{ asset('assets/js/core/tailwind.min.js') }}"></script>
</head>

<body>
    <div class="wrapper">

        <div class="main-panel">
            @include('layouts.header')

            <div class="page-inner">
                @yield('content')
            </div>

            @include('layouts.footer')
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src={{ asset('assets/js/core/jquery-3.7.1.min.js') }}></script>
    <script src={{ asset('assets/js/core/popper.min.js') }}></script>
    <script src={{ asset('assets/js/core/bootstrap.min.js') }}></script>

    <script src={{ asset('assets/js/main.js') }}></script>

    @yield('scripts')
</body>

</html>
