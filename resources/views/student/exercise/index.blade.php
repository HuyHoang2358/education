@extends('layouts.web')

@section('content')
    <div class="max-w-7xl mx-auto p-4">
        <nav class="text-sm mb-4" aria-label="breadcrumb">
            <ol class="list-reset flex text-gray-600">
                <li><a href="/" class="text-[#0B8493] font-bold">Trang chủ</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="" class="mx-2">Đề thi</a></li>
            </ol>
        </nav>
        <h1 class="text-[28px] font-bold text-center">Đề thi thử tốt nghiệp THPT Quốc Gia</h1>
        <p class="text-[24px] text-center text-gray-600">Tổng hợp các đề thi thử tốt nghiệp THPT qua các năm của các trường
            THPT trên
            toàn quốc.</p>

        <!-- Danh sách môn học -->
        <div class=" bg-white rounded-2xl px-8 pb-6 mt-16">
            <p class="text-center py-7 text-2xl font-semibold">Môn học</p>
            @php
                $subjects = [
                    [
                        'name' => 'Toán',
                        'img' => 'toan',
                    ],
                    [
                        'name' => 'Vật Lý',
                        'img' => 'vat-ly',
                    ],
                    [
                        'name' => 'Hóa Học',
                        'img' => 'hoa-hoc',
                    ],
                    [
                        'name' => 'Ngữ Văn',
                        'img' => 'ngu-van',
                    ],
                    [
                        'name' => 'Lịch Sử',
                        'img' => 'toan',
                    ],
                    [
                        'name' => 'Địa lý',
                        'img' => 'hoa-hoc',
                    ],
                    [
                        'name' => 'Sinh học',
                        'img' => 'ngu-van',
                    ],
                ];
            @endphp
            <div class="relative mx-20">
                <div class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        @foreach ($subjects as $subject)
                            <div class="swiper-slide group">
                                <div class="bg-white rounded-lg shadow-md hover:shadow-orange-300 transform duration-300">
                                    <a class="group" href="">
                                        <div class="overflow-hidden	rounded-md">
                                            <img src="{{ asset('/assets/img/home/' . $subject['img'] . '.png') }}"
                                                 alt="{{ $subject['name'] }}"
                                                 class="w-[100%] transform transition-transform duration-300 group-hover:scale-110">
                                        </div>
                                        <h3 class="font-semibold text-lg py-3 text-center group-hover:text-orange-300">{{ $subject['name'] }}</h3>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination-2 flex justify-center p-5"></div>
                </div>
                <div class="inset-y-1/3 -right-16 absolute">
                    <div
                        class="swiper-button-next-unique w-100 h-100 z-50 text-orange-400 px-4 py-2 rounded-full">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
                <div class="inset-y-1/3 -left-16 absolute">
                    <div
                        class="swiper-button-prev-unique w-100 h-100 z-50 text-orange-400 px-4 py-2 rounded-full">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                </div>
            </div>

            <div class="flex gap-5 pt-5">
                <div class="grid grid-cols-3 gap-5 basis-4/5">
                    <form class="w-full">
                        <select id="countries" class="bg-gray-50 border-2 border-[#0B8493] text-[#0B8493] rounded-full focus:ring-blue-500 focus:border-[#0B8493] block w-full px-4 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Năm ra đề</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </form>

                    <form class="w-full">
                        <select id="countries" class="bg-gray-50 border-2 border-[#0B8493] text-[#0B8493] rounded-full focus:ring-blue-500 focus:border-[#0B8493] block w-full px-4 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Loại đề thi</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </form>

                    <form class="w-full">
                        <select id="countries" class="bg-gray-50 border-2 border-[#0B8493] text-[#0B8493] rounded-full focus:ring-blue-500 focus:border-[#0B8493] block w-full px-4 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Tỉnh/Thành phố</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </form>
                </div>

                <button class="group text-xl font-semibold rounded-full w-fit relative inline-flex py-2 items-center justify-center overflow-hidden px-5 bg-[#0B8493] basis-1/5">
                    <div
                        class="inline-flex translate-y-0 items-center justify-center px-6 text-neutral-50 transition duration-500 group-hover:-translate-y-[150%]">
                        Tiến hành lọc</div>
                    <div
                        class="absolute inline-flex py-5 w-full translate-y-[100%] items-center justify-center text-neutral-50 transition duration-500 group-hover:translate-y-0">
                            <span
                                class="absolute h-full w-full translate-y-full skew-y-6 scale-y-0 bg-orange-400 transition duration-500 group-hover:translate-y-0 group-hover:scale-150"></span><span
                            class="z-10">Tiến hành lọc</span></div>
                </button>
            </div>
        </div>

        <!-- Danh sách đề thi -->
        <div class="bg-white p-8 mt-10 rounded-2xl">
            <p class="text-center font-semibold text-gray-500 mb-5 text-xl"> Đề thi thử tốt nghiệp THPT Quốc Gia môn Tiếng Anh</p>

            <div class="p-8 my-8 rounded-2xl border-gray-300 border-2">
                <div class="flex justify-between">
                    <h2 class="text-2xl font-bold">Đề thi thử tốt nghiệp THPT Quốc Gia 2024 môn Tiếng Anh</h2>
                    <span class="bg-[#E2E8F0] px-3 py-1 rounded-full font-semibold">20 đề</span>
                </div>

                <div class="grid grid-cols-3 gap-8 mt-4 p-5">
                    <a href="#" class="group hover:scale-[1.05] duration-300 ease-in-out">
                        <div class="p-6 border border-long-dashed rounded-xl bg-white relative">
                            <span class="text-sm text-[#0B8493] font-bold">Tiếng Anh</span>
                            <div>
                                <h3 class="font-medium py-8">Đề thi THPT 2024 môn Tiếng Anh trường THPT Lam Sơn</h3>
                                <div class="flex justify-center">
                                    <button class="font-semibold rounded-full w-fit px-16 relative flex py-2 items-center justify-center overflow-hidden bg-[#0B8493]">
                                        <div class="inline-flex translate-y-0 items-center justify-center px-6 text-neutral-50 transition duration-500 group-hover:-translate-y-[150%]">Làm bài</div>
                                        <div class="absolute inline-flex py-5 w-full translate-y-[100%] items-center justify-center text-neutral-50 transition duration-500 group-hover:translate-y-0">
                                            <span class="absolute h-full w-full translate-y-full skew-y-6 scale-y-0 bg-orange-400 transition duration-500 group-hover:translate-y-0 group-hover:scale-150"></span>
                                            <span class="z-10">Làm bài</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <img class="h-[56px] w-[56px] absolute right-[-1px] top-[-1px] " src="/assets/img/cap.jpg" alt="">
                        </div>
                    </a>
                    <a href="#" class="group hover:scale-[1.05] duration-300 ease-in-out">
                        <div class="p-6 border border-long-dashed rounded-xl bg-white relative">
                            <span class="text-sm text-[#0B8493] font-bold">Tiếng Anh</span>
                            <div>
                                <h3 class="font-medium py-8">Đề thi THPT 2024 môn Tiếng Anh trường THPT Lam Sơn</h3>
                                <div class="flex justify-center">
                                    <button class="font-semibold rounded-full w-fit px-16 relative flex py-2 items-center justify-center overflow-hidden bg-[#0B8493]">
                                        <div class="inline-flex translate-y-0 items-center justify-center px-6 text-neutral-50 transition duration-500 group-hover:-translate-y-[150%]">Làm bài</div>
                                        <div class="absolute inline-flex py-5 w-full translate-y-[100%] items-center justify-center text-neutral-50 transition duration-500 group-hover:translate-y-0">
                                            <span class="absolute h-full w-full translate-y-full skew-y-6 scale-y-0 bg-orange-400 transition duration-500 group-hover:translate-y-0 group-hover:scale-150"></span>
                                            <span class="z-10">Làm bài</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <img class="h-[56px] w-[56px] absolute right-[-1px] top-[-1px] " src="/assets/img/cap.jpg" alt="">
                        </div>
                    </a>
                    <a href="#" class="group hover:scale-[1.05] duration-300 ease-in-out">
                        <div class="p-6 border border-long-dashed rounded-xl bg-white relative">
                            <span class="text-sm text-[#0B8493] font-bold">Tiếng Anh</span>
                            <div>
                                <h3 class="font-medium py-8">Đề thi THPT 2024 môn Tiếng Anh trường THPT Lam Sơn</h3>
                                <div class="flex justify-center">
                                    <button class="font-semibold rounded-full w-fit px-16 relative flex py-2 items-center justify-center overflow-hidden bg-[#0B8493]">
                                        <div class="inline-flex translate-y-0 items-center justify-center px-6 text-neutral-50 transition duration-500 group-hover:-translate-y-[150%]">Làm bài</div>
                                        <div class="absolute inline-flex py-5 w-full translate-y-[100%] items-center justify-center text-neutral-50 transition duration-500 group-hover:translate-y-0">
                                            <span class="absolute h-full w-full translate-y-full skew-y-6 scale-y-0 bg-orange-400 transition duration-500 group-hover:translate-y-0 group-hover:scale-150"></span>
                                            <span class="z-10">Làm bài</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <img class="h-[56px] w-[56px] absolute right-[-1px] top-[-1px] " src="/assets/img/cap.jpg" alt="">
                        </div>
                    </a>
                </div>

                <p class="mt-4 text-center text-[#0B8493] text-lg font-bold cursor-pointer">Xem thêm 17 đề ▼</p>
            </div>

            <div class="p-8 my-8 rounded-2xl border-gray-300 border-2">
                <div class="flex justify-between">
                    <h2 class="text-2xl font-bold">Đề thi thử tốt nghiệp THPT Quốc Gia 2024 môn Tiếng Anh</h2>
                    <span class="bg-[#E2E8F0] px-3 py-1 rounded-full font-semibold">20 đề</span>
                </div>

                <div class="grid grid-cols-3 gap-8 mt-4 p-5">
                    <a href="#" class="group hover:scale-[1.05] duration-300 ease-in-out">
                        <div class="p-6 border border-long-dashed rounded-xl bg-white relative">
                            <span class="text-sm text-[#0B8493] font-bold">Tiếng Anh</span>
                            <div>
                                <h3 class="font-medium py-8">Đề thi THPT 2024 môn Tiếng Anh trường THPT Lam Sơn</h3>
                                <div class="flex justify-center">
                                    <button class="font-semibold rounded-full w-fit px-16 relative flex py-2 items-center justify-center overflow-hidden bg-[#0B8493]">
                                        <div class="inline-flex translate-y-0 items-center justify-center px-6 text-neutral-50 transition duration-500 group-hover:-translate-y-[150%]">Làm bài</div>
                                        <div class="absolute inline-flex py-5 w-full translate-y-[100%] items-center justify-center text-neutral-50 transition duration-500 group-hover:translate-y-0">
                                            <span class="absolute h-full w-full translate-y-full skew-y-6 scale-y-0 bg-orange-400 transition duration-500 group-hover:translate-y-0 group-hover:scale-150"></span>
                                            <span class="z-10">Làm bài</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <img class="h-[56px] w-[56px] absolute right-[-1px] top-[-1px] " src="/assets/img/cap.jpg" alt="">
                        </div>
                    </a>
                    <a href="#" class="group hover:scale-[1.05] duration-300 ease-in-out">
                        <div class="p-6 border border-long-dashed rounded-xl bg-white relative">
                            <span class="text-sm text-[#0B8493] font-bold">Tiếng Anh</span>
                            <div>
                                <h3 class="font-medium py-8">Đề thi THPT 2024 môn Tiếng Anh trường THPT Lam Sơn</h3>
                                <div class="flex justify-center">
                                    <button class="font-semibold rounded-full w-fit px-16 relative flex py-2 items-center justify-center overflow-hidden bg-[#0B8493]">
                                        <div class="inline-flex translate-y-0 items-center justify-center px-6 text-neutral-50 transition duration-500 group-hover:-translate-y-[150%]">Làm bài</div>
                                        <div class="absolute inline-flex py-5 w-full translate-y-[100%] items-center justify-center text-neutral-50 transition duration-500 group-hover:translate-y-0">
                                            <span class="absolute h-full w-full translate-y-full skew-y-6 scale-y-0 bg-orange-400 transition duration-500 group-hover:translate-y-0 group-hover:scale-150"></span>
                                            <span class="z-10">Làm bài</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <img class="h-[56px] w-[56px] absolute right-[-1px] top-[-1px] " src="/assets/img/cap.jpg" alt="">
                        </div>
                    </a>
                    <a href="#" class="group hover:scale-[1.05] duration-300 ease-in-out">
                        <div class="p-6 border border-long-dashed rounded-xl bg-white relative">
                            <span class="text-sm text-[#0B8493] font-bold">Tiếng Anh</span>
                            <div>
                                <h3 class="font-medium py-8">Đề thi THPT 2024 môn Tiếng Anh trường THPT Lam Sơn</h3>
                                <div class="flex justify-center">
                                    <button class="font-semibold rounded-full w-fit px-16 relative flex py-2 items-center justify-center overflow-hidden bg-[#0B8493]">
                                        <div class="inline-flex translate-y-0 items-center justify-center px-6 text-neutral-50 transition duration-500 group-hover:-translate-y-[150%]">Làm bài</div>
                                        <div class="absolute inline-flex py-5 w-full translate-y-[100%] items-center justify-center text-neutral-50 transition duration-500 group-hover:translate-y-0">
                                            <span class="absolute h-full w-full translate-y-full skew-y-6 scale-y-0 bg-orange-400 transition duration-500 group-hover:translate-y-0 group-hover:scale-150"></span>
                                            <span class="z-10">Làm bài</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <img class="h-[56px] w-[56px] absolute right-[-1px] top-[-1px] " src="/assets/img/cap.jpg" alt="">
                        </div>
                    </a>
                </div>

                <p class="mt-4 text-center text-[#0B8493] text-lg font-bold cursor-pointer">Xem thêm 17 đề ▼</p>
            </div>
        </div>
    </div>


    <div class="h-10 w-10">
        <img src="/public/assets/img/cap.jpg" alt="">
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var swiper = new Swiper(".mySwiper", {
                loop: true,
                // autoplay: {
                //     delay: 5000, // Tự động chuyển sau 3s
                //     disableOnInteraction: false,
                // },
                // navigation: {
                //     nextEl: ".swiper-button-next",
                //     prevEl: ".swiper-button-prev",
                // },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });

            var swiper = new Swiper(".mySwiper2", {
                slidesPerView: 1,
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next-unique",
                    prevEl: ".swiper-button-prev-unique",
                },
                pagination: {
                    el: ".swiper-pagination-2",
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 40,
                    },
                    1049: {
                        slidesPerView: 6,
                        spaceBetween: 40,
                    },
                },
            });

            var swiper = new Swiper(".mySwiper3", {
                slidesPerView: 1,
                spaceBetween: 20,
                navigation: {
                    nextEl: ".swiper-button-next-unique-2",
                    prevEl: ".swiper-button-prev-unique-2",
                },
                pagination: {
                    el: ".swiper-pagination-3",
                    clickable: true,
                },
                breakpoints: {
                    1049: {
                        slidesPerView: 3,
                        spaceBetween: 50,
                    },
                },
            });


        });
    </script>
@endsection

