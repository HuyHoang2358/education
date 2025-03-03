<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Trang chủ</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href={{ asset('assets/css/main.css') }} />
    <script src="{{ asset('assets/js/core/tailwind.min.js') }}"></script>
    <style>
        .swiper-pagination-bullet-active{
            background-color: rgb(251 146 60 / var(--tw-bg-opacity, 1));
        }

        .title{
            -webkit-text-stroke: 2.5px #124D59;
        }

        .title-2{
            -webkit-text-stroke: 3px #E57300;
        }

    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="wrapper">

        <div class="main-panel">
            @include('layouts.header')

            <div class="page-inner bg-slate-100">
                @yield('content')
            </div>

            @include('layouts.footer')
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src={{ asset('assets/js/core/jquery-3.7.1.min.js') }}></script>
    <script src={{ asset('assets/js/core/popper.min.js') }}></script>
    <script src={{ asset('assets/js/core/bootstrap.min.js') }}></script>
    <script src="https://kit.fontawesome.com/bf7b127d49.js" crossorigin="anonymous"></script>
    {{-- <script src={{ asset('assets/js/core/preline.js') }}></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script> --}}

    <script src={{ asset('assets/js/main.js') }}></script>
    @yield('scripts')
</body>

</html>
