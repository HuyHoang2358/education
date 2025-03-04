@extends('layouts.web')

@section('content')
    <!-- Hero Section -->
    <section class="text-white text-center relative">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @for ($i = 0; $i < 3; $i++)
                    <div class="swiper-slide">
                        @include('component.banner_card')
                    </div>
                @endfor
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Mô tả khóa học -->
    <section class="container mx-auto px-6 py-12 bg-slate-100 w-full">
        <h2 class="text-center text-[28px] font-bold">Để thi thử tốt nghiệp THPT Quốc Gia các môn</h2>
        <p class="text-center text-gray-600 mt-2 mb-5 text-[24px]">Hàng ngàn câu hỏi thử nghiệm giúp bạn làm quen với cấu
            trúc và
            nội dung
            thi chính thức.</p>

        @php
            $subjects = [
                [
                    'name' => 'Toán',
                    'img' => 'toan',
                    'desc' =>
                        'Luyện thi THPT Quốc Gia môn Toán với các đề thi được tổng hợp từ các trường và các năm thi trước đó.',
                ],
                [
                    'name' => 'Vật Lý',
                    'img' => 'vat-ly',
                    'desc' =>
                        'Luyện thi THPT Quốc Gia môn Toán với các đề thi được tổng hợp từ các trường và các năm thi trước đó.',
                ],
                [
                    'name' => 'Hóa Học',
                    'img' => 'hoa-hoc',
                    'desc' =>
                        'Luyện thi THPT Quốc Gia môn Toán với các đề thi được tổng hợp từ các trường và các năm thi trước đó.',
                ],
                [
                    'name' => 'Ngữ Văn',
                    'img' => 'ngu-van',
                    'desc' =>
                        'Luyện thi THPT Quốc Gia môn Toán với các đề thi được tổng hợp từ các trường và các năm thi trước đó.',
                ],
                [
                    'name' => 'Tiếng Anh',
                    'img' => 'ngu-van',
                    'desc' =>
                        'Luyện thi THPT Quốc Gia môn Toán với các đề thi được tổng hợp từ các trường và các năm thi trước đó.',
                ],
            ];
        @endphp
        <div class="relative">
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    @foreach ($subjects as $subject)
                        <div class="swiper-slide">
                            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-orange-300 transform duration-300">
                                <a class="group" href="">
                                    <div class="overflow-hidden	rounded-md">
                                        <img src="{{ asset('/assets/img/home/' . $subject['img'] . '.png') }}"
                                            alt="{{ $subject['name'] }}"
                                            class="w-[100%] transform transition-transform duration-300 group-hover:scale-110">
                                    </div>
                                    <h3 class="font-semibold text-[24px] mt-2">{{ $subject['name'] }}</h3>
                                    <p class="text-gray-500 text-lg mt-1">{{ $subject['desc'] }}</p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination-2 flex justify-center p-5"></div>
            </div>
            <div class="inset-y-1/3 -right-20 absolute pt-5">
                <div
                    class="hover:scale-125 duration-300 swiper-button-next-unique w-100 h-100 text-3xl z-50 bg-white text-orange-400 px-4 py-2 rounded-full">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
            <div class="inset-y-1/3 -left-20 absolute pt-5">
                <div
                    class="hover:scale-125 duration-300  swiper-button-prev-unique w-100 h-100 text-3xl z-50 bg-white text-orange-400 px-4 py-2 rounded-full">
                    <i class="fa-solid fa-chevron-left"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Thống kê -->
    <section class="bg-fixed bg-center bg-cover flex justify-center py-20"
        style="background-image: url('{{ asset('/assets/img/home/banner_blank.jpg') }}')">
        <div class="container flex flex-col gap-10 px-12">
            <div class="text-center text-[28px] font-medium text-[#124D59]">
                Nền tảng luyện thi của chúng tôi có gì?
            </div>
            <div class="grid-cols-3	grid gap-10">
                <div class="text-center flex flex-col gap-5 p-4 rounded-lg bg-opacity-60 bg-white">
                    <div class="text-6xl font-bold text-[#124D59]">
                        100K+
                    </div>
                    <div class="text-3xl text-[#124D59]">
                        Học viên đang theo học định kỳ trên nền tảng
                    </div>
                </div>

                <div class="text-center flex flex-col gap-5 p-4 rounded-lg bg-opacity-60 bg-white">
                    <div class="text-6xl font-bold text-[#124D59]">
                        120K+
                    </div>
                    <div class="text-3xl text-[#124D59]">
                        Câu hỏi trắc nhiệm cho bạn thỏa sức học tập
                    </div>
                </div>

                <div class="text-center flex flex-col gap-5 p-4 rounded-lg bg-opacity-60 bg-white">
                    <div class="text-6xl font-bold text-[#124D59]">
                        3000+
                    </div>
                    <div class="text-3xl text-[#124D59]">
                        Đề luyện thi giúp bạn kiểm tra mà không lo trùng lặp
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Lợi ích khi ôn luyện -->
    @php

        $benefits = [
            [
                'name' => 'Lập kế hoạch học tập',
                'img' => 'RANK BADGES',
                'desc' =>
                    'Chủ động lập kế hoạch học tập hợp lý khi biết điểm mạnh yếu qua từng bài thi thử và bài luyện.',
            ],
            [
                'name' => 'Mục tiêu rõ ràng',
                'img' => 'RANK BADGES 1',
                'desc' => 'Mục tiêu học tập rõ ràng với các chủ đề đã được tổng hợp sẵn từ chương trình học mới nhất.',
            ],
            [
                'name' => 'Theo sát kết quả',
                'img' => 'RANK BADGES 2',
                'desc' => 'Học từ những sai lầm với những gợi ý thống kê quá trình học chi tiết.',
            ],
            [
                'name' => 'Theo sát kết quả',
                'img' => 'RANK BADGES 2',
                'desc' => 'Học từ những sai lầm với những gợi ý thống kê quá trình học chi tiết.',
            ],
        ];

    @endphp
    <section class="container mx-auto py-12">
        <div class="text-center">
            <h2 class="text-center text-[28px] font-bold">Lợi ích khi luyện thi cùng chúng tôi</h2>
            <p class="text-[24px] mt-2 mb-5 text-gray-600">Vô vàn đề thi thử với đa dạng cấp độ từ dễ đến khó đáp ứng trình
                độ hiện tại của bạn.</p>
        </div>
        <div class="relative">
            <div class="swiper mySwiper3">
                <div class="swiper-wrapper">
                    @foreach ($benefits as $benefit)
                        <div class="swiper-slide h-[350px]">
                            <div class="group-shake hover:cursor-pointer bg-white p-6 rounded-lg shadow-lg text-center h-full">
                                <div class="hover-move-up-shake">
                                    <img class="shimmer" src="{{ asset('/assets/img/home/' . $benefit['img'] . '.png') }}"
                                    alt="{{ $benefit['name'] }}" class="mx-auto">
                                </div>
                                <h3 class="font-bold mt-2 text-[26px] text-[#0F1726]">{{ $benefit['name'] }}</h3>
                                <p class="pt-2 text-[#525266] text-[22px]">{{ $benefit['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination-3 flex justify-center p-5"></div>
            </div>
            <div class="inset-y-1/3 -right-20 absolute pt-5">
                <div
                    class="hover:scale-125 duration-300  swiper-button-next-unique-2 w-100 h-100 text-3xl z-50 bg-white text-orange-400 px-4 py-2 rounded-full">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
            <div class="inset-y-1/3 -left-20 absolute pt-5">
                <div
                    class="hover:scale-125 duration-300  swiper-button-prev-unique-2 w-100 h-100 text-3xl z-50 bg-white text-orange-400 px-4 py-2 rounded-full">
                    <i class="fa-solid fa-chevron-left"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Đăng ký tài khoản -->
    <section class="py-12">
        <div class="bg-white rounded-lg container mx-auto" style="box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.1);">
            <div class="grid grid-cols-2 gap-4 place-items-center py-24">
                <div class="h-full flex flex-col justify-between">
                    <div>
                        <div class="text-5xl font-semibold text-[#124D59] uppercase">Đăng ký tài khoản</div>
                        <span class="shimmer text-9xl font-black uppercase text-[#FBFFCC] title-2">Free</span>
                    </div>
                    <div class="ml-14">
                        <ul class="list-disc text-[#525266] font-medium text-2xl flex flex-col gap-3">
                            <li>Xem giải thích miễn phí</li>
                            <li>Biết điểm mạnh / yếu sau mỗi bài thi</li>
                            <li>Kho tài nguyên đa dạng</li>
                            <li>Cộng đồng lớn hỗ trợ nhiệt tình</li>
                        </ul>
                    </div>
                    <button
                        class="group text-xl font-semibold rounded-full w-fit relative inline-flex h-14 items-center justify-center overflow-hidden px-5 bg-[#0B8493]">
                        <div
                            class="inline-flex h-14 translate-y-0 items-center justify-center px-6 text-neutral-50 transition duration-500 group-hover:-translate-y-[150%]">
                            Đăng ký tài khoản ngay</div>
                        <div
                            class="absolute inline-flex h-14 w-full translate-y-[100%] items-center justify-center text-neutral-50 transition duration-500 group-hover:translate-y-0">
                            <span
                                class="absolute h-full w-full translate-y-full skew-y-6 scale-y-0 bg-orange-400 transition duration-500 group-hover:translate-y-0 group-hover:scale-150"></span><span
                                class="z-10">Đăng ký tài khoản ngay</span></div>
                    </button>
                </div>
                <div class="relative pr-20">
                    <img class="absolute top-0 left-0 animate-asyncfloat" src="{{ asset('/assets/img/home/item1.png') }}" alt="">
                    <img class="absolute bottom-0 right-10 animate-asyncfloat" src="{{ asset('/assets/img/home/item3.png') }}" alt="">
                    <img class="absolute top-0 right-0 animate-asyncfloat" src="{{ asset('/assets/img/home/item2.png') }}" alt="">
                    <img class="animate-float" src="{{ asset('/assets/img/home/tech_guy.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
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
                        slidesPerView: 3,
                        spaceBetween: 40,
                    },
                    1049: {
                        slidesPerView: 4,
                        spaceBetween: 50,
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
