@extends('layouts.web')
@section('title', 'Luyện tập')
@section('content')
    <div class="max-w-7xl mx-auto p-4">
        <!-- Breadcrumb -->
        @include('component.breadcrumb', ['breadcrumbs' => [
            ['name' => 'Trang chủ', 'route' => route('home')],
            ['name' => 'Luyện tập', 'route' => route('practice.index')]
        ]])
        <h1 class="text-[28px] font-bold text-center">Khu vực luyện tập lớp 12</h1>
        <p class="text-[24px] text-center text-gray-600">Phân tách và tổng hợp thành các chuyên đề có phân chia mức độ từ dễ
            đến khó, giúp bạn dễ dàng học tập.</p>

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
                        <select id="countries" class="bg-gray-50 border-2 border-[#0B8493] text-[#0B8493] rounded-full focus:ring-blue-500 focus:border-[#0B8493] block w-full px-4 py-2">
                            <option selected>Năm ra đề</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </form>

                    <form class="w-full">
                        <select id="countries" class="bg-gray-50 border-2 border-[#0B8493] text-[#0B8493] rounded-full focus:ring-blue-500 focus:border-[#0B8493] block w-full px-4 py-2">
                            <option selected>Loại đề thi</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </form>

                    <form class="w-full">
                        <select id="countries" class="bg-gray-50 border-2 border-[#0B8493] text-[#0B8493] rounded-full focus:ring-blue-500 focus:border-[#0B8493] block w-full px-4 py-2">
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

        <div class="max-w-[100%] mt-4 px-8 py-6 rounded-2xl bg-white">
            <h2 class="text-center text-xl font-bold text-[#525266] pb-5">Các chuyên đề Tiếng Anh lớp 12</h2>

            <div class="px-8 py-6 rounded-2xl border-2 border-gray-300">
                <div class="flex justify-between">
                    <h2 class="text-2xl font-bold">Chuyên đề 12 thì chủ động trong Tiếng Anh</h2>
                    <span class="bg-[#E2E8F0] px-3 py-1 rounded-full font-semibold" id="countSum"></span>
                </div>
                <div class="flex px-16 py-10 text-white font-semibold" id="productContainer">
                    <div>
                        <div class="timeline relative h-[80px] w-12 border-l-2 border-gray-300">
                            <div class="absolute top-[16px] -left-[26px] rounded-full bg-[#0B8493] w-12 h-12 items-center flex justify-center">1</div>
                        </div>
                        <div class="timeline relative h-[80px] w-12 border-l-2 border-gray-300">
                            <div class="absolute top-[16px] -left-[26px] rounded-full bg-gray-200 w-12 h-12 items-center flex justify-center text-black">2</div>
                        </div>
                        <div class="timeline relative h-[80px] w-12 border-l-2 border-gray-300">
                            <div class="absolute top-[16px] -left-[26px] rounded-full bg-gray-200 w-12 h-12 items-center flex justify-center text-black">3</div>
                        </div>
                        <div class="timeline relative h-[80px] w-12 border-l-2 border-gray-300">
                            <div class="absolute top-[16px] -left-[26px] rounded-full bg-gray-200 w-12 h-12 items-center flex justify-center text-black">4</div>
                        </div>
                        <div class="timeline relative h-[80px] w-12 border-l-2 border-gray-300">
                            <div class="absolute top-[16px] -left-[26px] rounded-full bg-gray-200 w-12 h-12 items-center flex justify-center text-black">5</div>
                        </div>
                        <div class="timeline relative h-[80px] w-12 border-l-2 border-gray-300">
                            <div class="absolute top-[16px] -left-[26px] rounded-full bg-gray-200 w-12 h-12 items-center flex justify-center text-black">6</div>
                        </div>
                        <div class="timeline relative h-[80px] w-12 border-l-2 border-gray-300">
                            <div class="absolute top-[16px] -left-[26px] rounded-full bg-gray-200 w-12 h-12 items-center flex justify-center text-black">7</div>
                        </div><div class="timeline relative h-[80px] w-12 border-l-2 border-gray-300">
                            <div class="absolute top-[16px] -left-[26px] rounded-full bg-gray-200 w-12 h-12 items-center flex justify-center text-black">8</div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="product flex h-[80px] justify-between items-center border-y-2 border-gray-300 w-full">
                            <p class="text-black font-semibold">Thì chủ động đầu tiên trong Tiếng Anh - Hiện Tại Đơn </p>
                            <i class="fa-solid fa-check h-fit px-[9px] py-[8px] bg-[#0B8493] rounded-full text-sm"></i>
                        </div>
                        <div class="product flex h-[80px] justify-between items-center border-b-2 border-gray-300 w-full">
                            <p class="text-black font-semibold">Thì chủ động đầu tiên trong Tiếng Anh - Hiện Tại Đơn </p>
                            <i class="fa-solid fa-check h-fit px-[9px] py-[8px] bg-gray-200 rounded-full text-sm"></i>
                        </div>
                        <div class="product flex h-[80px] justify-between items-center border-b-2 border-gray-300 w-full">
                            <p class="text-black font-semibold">Thì chủ động đầu tiên trong Tiếng Anh - Hiện Tại Đơn </p>
                            <i class="fa-solid fa-check h-fit px-[9px] py-[8px] bg-gray-200 rounded-full text-sm"></i>
                        </div>
                        <div class="product flex h-[80px] justify-between items-center border-b-2 border-gray-300 w-full">
                            <p class="text-black font-semibold">Thì chủ động đầu tiên trong Tiếng Anh - Hiện Tại Đơn </p>
                            <i class="fa-solid fa-check h-fit px-[9px] py-[8px] bg-gray-200 rounded-full text-sm"></i>
                        </div>
                        <div class="product flex h-[80px] justify-between items-center border-b-2 border-gray-300 w-full">
                            <p class="text-black font-semibold">Thì chủ động đầu tiên trong Tiếng Anh - Hiện Tại Đơn </p>
                            <i class="fa-solid fa-check h-fit px-[9px] py-[8px] bg-gray-200 rounded-full text-sm"></i>
                        </div>
                        <div class="product flex h-[80px] justify-between items-center border-b-2 border-gray-300 w-full">
                            <p class="text-black font-semibold">Thì chủ động đầu tiên trong Tiếng Anh - Hiện Tại Đơn </p>
                            <i class="fa-solid fa-check h-fit px-[9px] py-[8px] bg-gray-200 rounded-full text-sm"></i>
                        </div>
                        <div class="product flex h-[80px] justify-between items-center border-b-2 border-gray-300 w-full">
                            <p class="text-black font-semibold">Thì chủ động đầu tiên trong Tiếng Anh - Hiện Tại Đơn </p>
                            <i class="fa-solid fa-check h-fit px-[9px] py-[8px] bg-gray-200 rounded-full text-sm"></i>
                        </div>
                        <div class="product flex h-[80px] justify-between items-center border-b-2 border-gray-300 w-full">
                            <p class="text-black font-semibold">Thì chủ động đầu tiên trong Tiếng Anh - Hiện Tại Đơn </p>
                            <i class="fa-solid fa-check h-fit px-[9px] py-[8px] bg-gray-200 rounded-full text-sm"></i>
                        </div>
                    </div>
                </div>
                <p id="showMoreBtn" class="mt-4 text-center text-[#0B8493] text-lg font-bold cursor-pointer"></p>
            </div>
        </div>
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

        document.addEventListener("DOMContentLoaded", function () {
            const countSum = document.getElementById("countSum")
            const products = document.querySelectorAll(".product");
            const timelines = document.querySelectorAll(".timeline")
            const showMoreBtn = document.getElementById("showMoreBtn");

            countSum.textContent = `${products.length} bài tập`;
            let visibleCount = 3;

            function updateView() {
                let hiddenCount = 0;

                products.forEach((product, index) => {
                    const timeline = timelines[index]; // Lấy phần tử timeline tương ứng

                    if (index < visibleCount) {
                        if (product.classList.contains("hidden") && timeline.classList.contains("hidden")) {
                            product.classList.remove("hidden");
                            product.classList.add("animate-fade-in-scale");

                            timeline.classList.remove("hidden");
                            timeline.classList.add("animate-fade-in-scale");
                        }
                    } else {
                        product.classList.add("hidden");
                        timeline.classList.add("hidden");
                        hiddenCount++;  // Cập nhật số lượng sản phẩm bị ẩn
                    }
                });


                // Cập nhật trạng thái nút Show More
                if (hiddenCount > 0) {
                    showMoreBtn.textContent = `Xem thêm (${hiddenCount}) bài tập ▼`;
                    showMoreBtn.classList.remove("hidden");
                } else {
                    showMoreBtn.classList.add("hidden");
                }
            }

            showMoreBtn.addEventListener("click", function () {
                visibleCount += 3; // Mỗi lần bấm hiện thêm 3 sản phẩm
                updateView();
            });

            updateView(); // Cập nhật giao diện ban đầu
        });
    </script>
    <style>
        /* Animation */
        @keyframes fadeInScale {
            0% { opacity: 0; transform: scale(0.8); }
            100% { opacity: 1; transform: scale(1); }
        }
        .animate-fade-in-scale {
            animation: fadeInScale 0.7s ease-out;
        }
    </style>
@endsection


