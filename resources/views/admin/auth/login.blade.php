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
        <!-- Teacher information card -->
        <form action="{{ route('login') }}" method="POST"
            class="bg-white rounded-xl p-5 text-center font-semibold flex flex-col items-center gap-3 w-fit shadow-xl">
            @csrf
            <div id="instruction-title" class="font-bold text-xl">
                <p>Bạn muốn đăng ký với tư cách là:</p>
            </div>
            <!-- Role select -->
            <div id="role-select" class="text-blue-secondary flex gap-3">
                <input id="role" name="role" type="text" hidden>
                <button type="button"
                    class="role-select-button border-2 text-nowrap w-full border-blue-secondary rounded-lg flex gap-2 py-2 px-6 justify-between items-center hover:bg-blue-secondary hover:text-white transition-colors"
                    value="student">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <p>Học sinh</p>
                </button>
                <button type="button"
                    class="role-select-button border-2 text-nowrap w-full border-blue-secondary rounded-lg flex gap-2 py-2 px-6 justify-between items-center hover:bg-blue-secondary hover:text-white transition-colors"
                    value="teacher">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    <p>Giáo viên</p>
                </button>
                <button type="button"
                    class="role-select-button border-2 text-nowrap w-full border-blue-secondary rounded-lg flex gap-2 py-2 px-6 justify-between items-center hover:bg-blue-secondary hover:text-white transition-colors"
                    value="parent">
                    <i class="fa-solid fa-user-group"></i>
                    <p>Phụ huynh</p>
                </button>
            </div>
            <div id="sign-on" class="relative flex flex-col gap-5 text-start w-full hidden">
                <button type="button" id="back-to-role"
                    class="absolute left-0 -top-[2.2rem] text-light-gray hover:text-orange-primary transition-colors hover:cursor-pointer">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <div class="w-full">
                    <label class="peer-focus:text-[#FF8040] block text-base font-bold text-[#063140]">
                        Họ và tên
                    </label>
                    <input name="name" type="text"
                        class="peer w-full bg-transparent placeholder:text-slate-400 text-slate-700 border-b-2 border-[#124D59] py-2 transition duration-300 ease focus:outline-none focus:border-[#FF8040]"
                        placeholder="Nhập họ và tên" />
                </div>
                <div class="w-full">
                    <label class="peer-focus:text-[#FF8040] block text-base font-bold text-[#063140]">
                        Tên tài khoản hoặc email
                    </label>
                    <input name="email" type="email"
                        class="peer w-full bg-transparent placeholder:text-slate-400 text-slate-700 border-b-2 border-[#124D59] py-2 transition duration-300 ease focus:outline-none focus:border-[#FF8040]"
                        placeholder="Nhập tên tài khoản hoặc email" />
                </div>
                <div class="w-full">
                    <div class="relative">
                        <label class="block text-base font-bold text-[#063140]">
                            Mật khẩu
                        </label>
                        <input type="password" name="password"
                            class="focus:border-[#FF8040] w-full bg-transparent placeholder:text-slate-400 text-slate-700 border-b-2 border-[#124D59] py-2 transition duration-300 ease focus:outline-none"
                            placeholder="Nhập mật khẩu" />
                        <div
                            class="hover:cursor-pointer hover:text-orange-primary transition-colors toggle-password absolute right-0 bottom-3 flex items-center">
                            <!-- Default Eye SVG -->
                            <i class="fa-solid fa-eye"></i>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="relative">
                        <label class="block text-base font-bold text-[#063140]">
                            Xác nhận mật khẩu
                        </label>
                        <input type="password" name="password-confirmation"
                            class="focus:border-[#FF8040] w-full bg-transparent placeholder:text-slate-400 text-slate-700 border-b-2 border-[#124D59] py-2 transition duration-300 ease focus:outline-none"
                            placeholder="Nhập mật khẩu" />
                        <div
                            class="hover:cursor-pointer hover:text-orange-primary transition-colors toggle-password absolute right-0 bottom-3 flex items-center">
                            <!-- Default Eye SVG -->
                            <i class="fa-solid fa-eye"></i>
                        </div>
                    </div>
                </div>
                <!--Terms and condition-->
                <div class="flex items-center gap-1 font-medium text-light-gray">
                    <input name="terms" type="checkbox" class="hover:cursor-pointer scale-110">
                    <p>Tôi đồng ý với các điều khoản <a href="" class="text-[#1877F2] underline">tại đây</a></p>
                </div>
                <!-- Submit button -->
                <div>
                    <button type="submit"
                        class="group text-md text-neutral-50 font-semibold rounded-full py-2 items-center justify-center px-5 bg-[#0B8493] hover:bg-orange-primary duration-200 hover:scale-105 hover:shadow-md w-full uppercase">
                        Đăng ký ngay!
                    </button>
                </div>
                <div class="flex w-full items-center gap-2 text-light-gray">
                    <div class="w-full h-[1px] bg-[#D9D9D9]"></div>
                    <p>Hoặc</p>
                    <div class="w-full h-[1px] bg-[#D9D9D9]"></div>
                </div>
                <!-- Sign on with another method-->
                <div class="flex gap-3 text-light-gray">
                    <button
                        class="flex gap-1 hover:scale-105 transition-transform shadow-[0px_1px_5.3px_rgba(0,0,0,0.3)] py-2 px-10 rounded-lg items-center">
                        <img class="scale-75 mt-0.5" src="{{ asset('/assets/img/home/Google Logo.png') }}"
                            alt="">
                        Đăng ký bằng Google
                    </button>
                    <button
                        class="flex gap-1 hover:scale-105 transition-transform bg-[#1877F2] text-white shadow-[0px_1px_5.3px_rgba(0,0,0,0.3)] py-2 px-10 rounded-lg items-center">
                        <img class="scale-75 mt-0.5" src="{{ asset('/assets/img/home/Facebook Logo.png') }}"
                            alt="">
                        Đăng ký bằng Facebook
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script src="{{ asset('loginassets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('loginassets/js/popper.js') }}"></script>
    <script src="{{ asset('loginassets/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            initSelectRole();
            initTogglePassword();
            initBackToRole();
        });

        /**
         * Initializes role selection functionality.
         */
        function initSelectRole() {
            const roleButtons = document.querySelectorAll('.role-select-button');
            const roleInput = document.getElementById('role');

            roleButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const role = button.getAttribute("value");
                    roleInput.value = role;
                    toggleSignOnForm(role);
                });
            });
        }

        /**
         * Initializes password toggle functionality.
         */
        function initTogglePassword() {
            document.querySelectorAll(".toggle-password").forEach(button => {
                const input = button.previousElementSibling;

                button.addEventListener("click", () => togglePassword(input, button));
            });
        }

        /**
         * Toggles password visibility and updates the icon.
         */
        function togglePassword(input, button) {
            if (!input) return;

            const eyeIcon = `<i class="fa-solid fa-eye"></i>`;
            const eyeSlashIcon = `<i class="fa-solid fa-eye-slash"></i>`;

            const isPassword = input.type === "password";
            input.type = isPassword ? "text" : "password";
            button.innerHTML = isPassword ? eyeSlashIcon : eyeIcon;
        }

        /**
         * Initializes back-to-role functionality.
         */
        function initBackToRole() {
            document.getElementById("back-to-role").addEventListener("click", () => {
                toggleSignOnForm();
            });
        }

        /**
         * Toggles between role selection and sign-on form.
         * @param {string} [role] - The selected role (optional).
         */
        function toggleSignOnForm(role) {
            const roleMap = {
                student: "Học sinh",
                teacher: "Giáo viên",
                parent: "Phụ huynh"
            };

            const titleBox = document.getElementById('instruction-title');
            const roleForm = document.getElementById('role-select');
            const signOnForm = document.getElementById('sign-on');

            titleBox.innerHTML = role ?
                `<p> Đăng ký để trở thành <span class="text-orange-primary">${roleMap[role]}</span> trên <span class="text-blue-secondary">Onthi360</span> </p>` :
                `<p>Bạn muốn đăng ký với tư cách là:</p>`;

            roleForm.classList.toggle("hidden");
            signOnForm.classList.toggle("hidden");
        }

    </script>

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
