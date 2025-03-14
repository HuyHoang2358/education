@extends('layouts.web')
@section('title', 'Đề thi')
@section('content')
    <div class="max-w-7xl mx-auto p-4">
        <!-- BreadCrumb -->
        @include('components.breadcrumb', ['breadcrumbs' => [
            ['name' => 'Đề thi', 'route' => route('exam.index')],
        ]])

        <!-- Title -->
        @include('components.title_page', ['page_title' => 'Đề thi thử tốt nghiệp THPT Quốc Gia', 'page_description' => 'Tổng hợp các đề thi thử tốt nghiệp THPT qua các năm của các trường THPT trên toàn quốc.'])

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
                            <option value="US">2019</option>
                            <option value="CA">2020</option>
                            <option value="FR">2021</option>
                            <option value="DE">2022</option>
                        </select>
                    </form>

                    <form class="w-full">
                        <select id="countries" class="bg-gray-50 border-2 border-[#0B8493] text-[#0B8493] rounded-full focus:ring-blue-500 focus:border-[#0B8493] block w-full px-4 py-2">
                            <option selected>Loại đề thi</option>
                            <option value="US">Trắc nghiệm</option>
                            <option value="CA">Tu Luan</option>
                            <option value="FR">Mix</option>
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

        <!-- Danh sách đề thi -->
        <div class="bg-white p-8 mt-10 rounded-2xl">
            <p class="text-center font-semibold text-gray-500 mb-5 text-xl"> Đề thi thử tốt nghiệp THPT Quốc Gia môn Tiếng Anh</p>

            <div class="p-8 my-8 rounded-2xl border-gray-300 border-2">
                <div class="flex justify-between">
                    <h2 class="text-2xl font-bold">Đề thi thử tốt nghiệp THPT Quốc Gia 2024 môn Tiếng Anh</h2>
                    <span class="bg-[#E2E8F0] px-3 py-1 rounded-full font-semibold" id="countSum"></span>
                </div>

                <div id="productContainer" class="grid grid-cols-3 gap-8 mt-4 p-5">
                    <a href="#" class="product group hover:scale-[1.05] duration-300 ease-in-out">
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
                    <a href="#" class="product group hover:scale-[1.05] duration-300 ease-in-out">
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
                    <a href="#" class="product group hover:scale-[1.05] duration-300 ease-in-out">
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
                    <a href="#" class="product group hover:scale-[1.05] duration-300 ease-in-out hidden">
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
                    <a href="#" class="product group hover:scale-[1.05] duration-300 ease-in-out hidden">
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
                    <a href="#" class="product group hover:scale-[1.05] duration-300 ease-in-out hidden">
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

                <p id="showMoreBtn" class="mt-4 text-center text-[#0B8493] text-lg font-bold cursor-pointer"></p>
            </div>
        </div>
    </div>


    <div class="h-10 w-10">
        <img src="/public/assets/img/cap.jpg" alt="">
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
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
        });

        document.addEventListener("DOMContentLoaded", function () {
            const products = document.querySelectorAll(".product");
            const showMoreBtn = document.getElementById("showMoreBtn");
            const countSum = document.getElementById("countSum")

            countSum.textContent = `${products.length} bài tập`;


            let visibleCount = 3;

            function updateView() {
                let hiddenCount = 0;

                products.forEach((product, index) => {
                    if (index < visibleCount) {
                        if (product.classList.contains("hidden")) {
                            product.classList.remove("hidden");
                            product.classList.add("animate-fade-in-scale")
                        }
                    } else {
                        product.classList.add("hidden");
                        hiddenCount++;
                    }
                });

                // Cập nhật trạng thái nút Show More
                if (hiddenCount > 0) {
                    showMoreBtn.textContent = `Xem thêm (${hiddenCount}) đề ▼`;
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

