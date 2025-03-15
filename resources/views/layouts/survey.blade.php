<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title'){{-- {{" | ".config('app.name', 'Learning') }} --}}</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href={{ asset('assets/css/main.css') }} />
    <link rel="stylesheet" href={{ asset('assets/css/custom.css') }} />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

<div class="wrapper">
    <div class="main-panel">

        <div class="page-inner bg-slate-100">
            @yield('content')
        </div>

    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src={{ asset('assets/js/core/jquery-3.7.1.min.js') }}></script>
<script src={{ asset('assets/js/core/popper.min.js') }}></script>
<script src={{ asset('assets/js/core/bootstrap.min.js') }}></script>
<script src="https://kit.fontawesome.com/bf7b127d49.js" crossorigin="anonymous"></script>

</body>

</html>
