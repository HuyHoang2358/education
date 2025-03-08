@extends('layouts.web')
@section('title', 'Luyện tập')
@section('content')
    <div class="max-w-7xl mx-auto p-4">
        <!-- Breadcrumb -->
        @include('components.breadcrumb', ['breadcrumbs' => [
            ['name' => 'Trang chủ', 'route' => route('home')],
            ['name' => 'Luyện tập', 'route' => route('practice.index')]
        ]])
        <h1 class="text-[28px] font-bold text-center">Khu vực luyện tập lớp 12</h1>
        <p class="text-[24px] text-center text-gray-600">Phân tách và tổng hợp thành các chuyên đề có phân chia mức độ từ dễ
            đến khó, giúp bạn dễ dàng học tập.</p>

        <!-- Danh sách môn học -->
        <div class="flex justify-center space-x-4 mt-6">
            <div class="p-3 border rounded-lg shadow bg-white text-center">
                <a href="">
                    <img src="{{ asset('/assets/img/exercise/tieng-anh.png') }}" alt="">
                    <p class="font-bold pt-2">Tiếng Anh</p>
                </a>
            </div>
            <div class="p-3 border rounded-lg shadow bg-white text-center">
                <a href="">
                    <img src="{{ asset('/assets/img/exercise/vat-ly.png') }}" alt="">
                    <p class="font-bold pt-2">Vật Lý</p>
                </a>
            </div>
            <div class="p-3 border rounded-lg shadow bg-white text-center">
                <a href="">
                    <img src="{{ asset('/assets/img/exercise/toan.png') }}" alt="">
                    <p class="font-bold pt-2">Toán</p>
                </a>
            </div>
            <div class="p-3 border rounded-lg shadow bg-white text-center">
                <a href="">
                    <img src="{{ asset('/assets/img/exercise/dia-ly.png') }}" alt="">
                    <p class="font-bold pt-2">Địa Lý</p>
                </a>
            </div>
            <div class="p-3 border rounded-lg shadow bg-white text-center">
                <a href="">
                    <img src="{{ asset('/assets/img/exercise/tieng-anh.png') }}" alt="">
                    <p class="font-bold pt-2">Lịch Sử</p>
                </a>
            </div>
            <div class="p-3 border rounded-lg shadow bg-white text-center">
                <a href="">
                    <img src="{{ asset('/assets/img/exercise/tieng-anh.png') }}" alt="">
                    <p class="font-bold pt-2">Sinh Học</p>
                </a>
            </div>
        </div>

        <div class="max-w-[100%] mt-4 p-4 rounded-lg" style="box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.1);">
            <h2 class="text-center text-[16px] font-bold text-[#525266]">Các chuyên đề Tiếng Anh lớp 12</h2>

            @foreach ([['title' => 'Chuyên đề 12 thì chủ động trong Tiếng Anh', 'count' => 21, 'lessons' => ['Thi chủ động đầu tiên trong Tiếng Anh - Hiện Tại Đơn']], ['title' => 'Chuyên đề các động từ bất quy tắc trong Tiếng Anh', 'count' => 17, 'lessons' => ['Quy tắc đầu tiên của động từ bất quy tắc']]] as $topic)
                <div class="bg-white shadow-lg rounded-lg p-5 my-5">
                    <div class="flex justify-between items-center">
                        <h3 class="text-[20px] font-bold">{{ $topic['title'] }}</h3>
                        <span class="bg-gray-200 px-3 py-1 rounded-full text-sm font-bold">{{ $topic['count'] }} bài
                            tập</span>
                    </div>

                    <ul class="mt-3">
                        @foreach ($topic['lessons'] as $index => $lesson)
                            <li class="flex items-center justify-between border rounded-lg p-3 my-2">
                                <span class="flex items-center">
                                    <span
                                        class="w-8 h-8 flex items-center justify-center rounded-full
                                {{ $index == 0 ? 'bg-[#0B8493] text-white' : 'bg-gray-200' }}">
                                        {{ $index + 1 }}
                                    </span>
                                    <span class="ml-3 font-bold">{{ $lesson }}</span>
                                </span>
                                <span class="text-green-500">✔</span>
                            </li>
                        @endforeach
                    </ul>

                    <div class="text-center">
                        <button class="mt-3 text-[#0B8493] font-bold">Xem thêm {{ $topic['count'] - 4 }} bài tập ▼</button>
                    </div>
                </div>
            @endforeach
        </div>
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
    </script>

@endsection
