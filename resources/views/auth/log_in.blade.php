<!doctype html>
<html lang="en">

<head>
    <title>Đăng nhập</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            background-repeat: no-repeat !important;
            background-size: cover !important;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body style="background-image: url('{{ asset('/assets/img/home/Decor.png') }}')">

    <div class="flex justify-center items-center">

        <div class="bg-white rounded-xl p-5 text-center font-semibold flex flex-col gap-3 w-fit shadow-xl">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div id="instruction-title" class="font-bold text-xl mb-3">
                    <p>Đăng nhập</p>
                </div>
                <div id="sign-on" class="relative flex flex-col gap-5 text-start w-full">
                    <div class="w-full">
                        <label class="peer-focus:text-[#FF8040] block text-base font-bold text-[#063140]">
                            Email
                        </label>
                        <input id="email" name="email" type="email"
                            class="peer w-full bg-transparent placeholder:text-slate-400 text-slate-700 border-b-2 border-[#124D59] py-2 transition duration-300 ease focus:outline-none focus:border-[#FF8040]"
                            placeholder="Nhập email" required value="{{ old('email') }}"/>
                    </div>
                    <div class="w-full">
                        <div class="relative">
                            <label class="block text-base font-bold text-[#063140]">
                                Mật khẩu
                            </label>
                            <input type="password" name="password"
                                class="focus:border-[#FF8040] w-full bg-transparent placeholder:text-slate-400 text-slate-700 border-b-2 border-[#124D59] py-2 transition duration-300 ease focus:outline-none"
                                placeholder="Nhập mật khẩu" required />
                            <div
                                class="hover:cursor-pointer hover:text-orange-primary transition-colors toggle-password absolute right-0 bottom-3 flex items-center">
                                <!-- Default Eye SVG -->
                                <i class="fa-solid fa-eye"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-1 font-medium justify-between">
                        <a class="hover:underline transition-all hover:cursor-pointer text-light-gray hover:text-[#1877F2]">Bạn quên mật khẩu?</a>
                        <p class="transition-all text-light-gray">Chưa có tài khoản? 
                            <a href="{{ route('signon') }}" class="hover:cursor-pointer text-[#1877F2] hover:underline">Đăng ký ngay</a>
                        </p>
                    </div>
                    <!-- Submit button -->
                    <div>
                        <button type="submit"
                            class="group text-md text-neutral-50 font-semibold rounded-full py-2 items-center justify-center px-5 bg-[#0B8493] hover:bg-orange-primary duration-200 hover:scale-105 hover:shadow-md w-full uppercase">
                            Đăng nhập
                        </button>
                    </div>
                    <div class="flex w-full items-center gap-2 text-light-gray">
                        <div class="w-full h-[1px] bg-[#D9D9D9]"></div>
                        <p>Hoặc</p>
                        <div class="w-full h-[1px] bg-[#D9D9D9]"></div>
                    </div>
                </div>
            </form>
            <!-- Sign on with another method-->
            <div id="social-login-form" class="flex gap-3 text-light-gray">
                <form id="sign-on-google" method="GET" action="{{ route('social.redirect', 'google') }}">
                    <input class="role" name="role" type="text" hidden>
                    <button type="submit"
                        class="flex gap-1 hover:scale-105 transition-transform shadow-[0px_1px_5.3px_rgba(0,0,0,0.3)] py-2 px-10 rounded-lg items-center">
                        <img class="scale-75 mt-0.5" src="{{ asset('/assets/img/home/Google Logo.png') }}"
                            alt="">
                        Đăng nhập bằng Google
                    </button>
                </form>

                <a href="{{ route('social.redirect', 'facebook') }}"
                    class="flex gap-1 hover:scale-105 transition-transform bg-[#1877F2] text-white shadow-[0px_1px_5.3px_rgba(0,0,0,0.3)] py-2 px-10 rounded-lg items-center">
                    <img class="scale-75 mt-0.5" src="{{ asset('/assets/img/home/Facebook Logo.png') }}"
                        alt="">
                    Đăng nhập bằng Facebook
                </a>
            </div>
        </div>

    </div>

    <script src="{{ asset('loginassets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('loginassets/js/popper.js') }}"></script>
    <script src="{{ asset('loginassets/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="{{ asset('assets/js/components/authen.js') }}"></script>

    <script>
        @if (session('error'))
            toastr.error("{{ session('error') }}", "Lỗi đăng nhập");
        @endif
        @if (session('success'))
            toastr.success('{{ session('success') }}');
        @endif
    </script>
</body>

</html>
