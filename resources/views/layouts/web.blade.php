<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title'){{--{{" | ".config('app.name', 'Learning') }}--}}</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" href={{ asset('assets/css/main.css') }} />
    <script src="{{ asset('assets/js/core/tailwind.min.js') }}"></script>
    <style>
        .swiper-pagination-bullet-active {
            background-color: rgb(251 146 60 / var(--tw-bg-opacity, 1));
        }

        .title {
            -webkit-text-stroke: 2.5px #124D59;
        }

        .title-2 {
            -webkit-text-stroke: 3px #E57300;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes asyncfloat {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(20px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .animate-asyncfloat {
            animation: asyncfloat 3s ease-in-out infinite;
        }

        .shimmer {
            color: grey;
            display: inline-block;
            -webkit-mask: linear-gradient(-60deg, #000 30%, #0005, #000 70%) right/300% 100%;
            background-repeat: no-repeat;
            animation: shimmer 2.5s infinite;
        }

        @keyframes shimmer {
            100% {
                -webkit-mask-position: left
            }
        }

        @keyframes openup {
            0% {
                opacity: 0;
                transform: translateY(100px) scaleX(0);
            }

            100% {
                opacity: 1;
                transform: translateY(0) scaleX(1);
            }
        }

        .animate-openup {
            animation: openup 0.25s ease-out forwards;
        }

        .animate-closeup {
            animation: openup 0.25s ease-out reverse;
        }

        @keyframes floatIn {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-float-in {
            animation: floatIn 0.75s ease-out forwards;
        }

        @keyframes moveUp {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-5px);
            }

            50% {
                transform: translateX(5px);
            }

            75% {
                transform: translateX(-5px);
            }
        }

        .group-shake:hover .hover-move-up-shake {
            animation: moveUp 0.3s ease-in-out, shake 0.5s ease-in-out 0.3s;
        }

    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="wrapper">
        @include('layouts.header')
        <div class="main-panel">

            <div class="page-inner bg-slate-100">
                @yield('content')
                @yield('contest')
                @yield('contest-detail')
                @yield('contest-rank')
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
