@extends('layouts.web')
@section('title', 'Luyện tập')
@section('content')
    <div class="max-w-7xl mx-auto p-4">
        <!-- Breadcrumb -->
        @include('component.breadcrumb', ['breadcrumbs' => [
            ['name' => 'Thông tin', 'route' => route('home')],
            ['name' => 'Đối tác của chúng tôi', 'route' => route('practice.index')]
        ]])
        <h1 class="text-4xl font-semibold text-center pb-3 pt-10">Các đối tác của chúng tôi</h1>
        <p class="text-lg text-center text-gray-600">Các đối tác lớn đã và đang hợp tác cùng chúng tôi.</p>

        <div class="grid grid-cols-3 gap-8 py-6">
            <div class="h-40 w-96 bg-gray-300 rounded-2xl"></div>
            <div class="h-40 w-96 bg-gray-300 rounded-2xl"></div>
            <div class="h-40 w-96 bg-gray-300 rounded-2xl"></div>
            <div class="h-40 w-96 bg-gray-300 rounded-2xl"></div>
            <div class="h-40 w-96 bg-gray-300 rounded-2xl"></div>
            <div class="h-40 w-96 bg-gray-300 rounded-2xl"></div>
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
@endsection


