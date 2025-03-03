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
                {{-- <div class="swiper-slide">
                    <img src="{{ asset('/assets/img/home/banner.png') }}" alt="Banner 2" class="w-full rounded-lg shadow-lg">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('/assets/img/home/banner.png') }}" alt="Banner 3"
                        class="w-full rounded-lg shadow-lg">
                </div> --}}
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Mô tả khóa học -->
    <section class="container mx-auto px-6 py-12">
        <h2 class="text-center text-[28px] font-bold">Để thi thử tốt nghiệp THPT Quốc Gia các môn</h2>
        <p class="text-center text-gray-600 mt-2 text-[24px]">Hàng ngàn câu hỏi thử nghiệm giúp bạn làm quen với cấu trúc và
            nội dung
            thi chính thức.</p>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-8">
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
                ];
            @endphp
            @foreach ($subjects as $subject)
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <a href="">
                        <img src="{{ asset('/assets/img/home/' . $subject['img'] . '.png') }}" alt="{{ $subject['name'] }}"
                            class="w-[100%]">
                        <h3 class="font-semibold text-[24px] mt-2">{{ $subject['name'] }}</h3>
                        <p class="text-gray-500 text-lg mt-1">{{ $subject['desc'] }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Thống kê -->
    <section class="text-white text-center relative">
        <img src="{{ asset('/assets/img/home/banner-1.png') }}" alt="Học tập" class="w-[100%] rounded-lg shadow-lg">
    </section>

    <!-- Lợi ích khi ôn luyện -->
    <section class="container mx-auto py-12">
        <div class="text-center">
            <h2 class="text-center text-[28px] font-bold">Lợi ích khi luyện thi cùng chúng tôi</h2>
            <p class="text-[24px]">Vô vàn đề thi thử với đa dạng cấp độ từ dễ đến khó đáp ứng trình độ hiện tại của bạn.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <img src="{{ asset('/assets/img/home/hh.png') }}" alt="Kế hoạch" class="mx-auto">
                <h3 class="font-bold mt-2 text-[26px] text-[#0F1726]">Lập kế hoạch học tập</h3>
                <p class="pt-2 text-[#525266] text-[22px]">Chủ động lập kế hoạch học tập
                    hợp lý khi biết điểm mạnh yếu
                    qua từng bài thi thử và bài luyện.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <img src="{{ asset('/assets/img/home/rr.png') }}" alt="Mục tiêu" class="mx-auto">
                <h3 class="font-bold mt-2 text-[26px]">Mục tiêu rõ ràng</h3>
                <p class="pt-2 text-[#525266] text-[22px]">Mục tiêu học tập rõ ràng với
                    các chủ đề đã được tổng hợp
                    sẵn từ chương trình học mới
                    nhất.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <img src="{{ asset('/assets/img/home/sl.png') }}" alt="Kết quả" class="mx-auto">
                <h3 class="font-bold mt-2 text-[26px]">Theo sát kết quả</h3>
                <p class="pt-2 text-[#525266] text-[22px]">Học từ những sai lầm với những
                    gợi ý thống kê quá trình học chi
                    tiết.</p>
            </div>
        </div>
    </section>

    <!-- Đăng ký tài khoản -->
    <section class="py-12">
        <div class="bg-white rounded-lg container mx-auto" style="box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.1);">
            <div class="grid grid-cols-2 gap-4 place-items-center py-24">
                <img src="{{ asset('/assets/img/home/frame.png') }}" alt="">
                <img src="{{ asset('/assets/img/home/frame-1.png') }}" alt="">
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
                //     delay: 3000, // Tự động chuyển sau 3s
                //     disableOnInteraction: false,
                // },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
        });
    </script>
@endsection
