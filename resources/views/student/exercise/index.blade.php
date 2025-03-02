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

        <!-- Danh sách đề thi -->
        <div class="mt-8 bg-white p-6 rounded-lg" style="box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.1);">
            <div class="flex justify-between">
                <h2 class="text-xl font-bold">Đề thi thử tốt nghiệp THPT Quốc Gia 2024 môn Tiếng Anh</h2>
                <span class="bg-[#E2E8F0] px-2 rounded-full font-bold">20 đề</span>
            </div>
            <div class="grid grid-cols-3 gap-4 mt-4">
                <div class="p-4 border rounded-lg shadow bg-white">
                    <span class="text-sm text-[#0B8493] font-bold">Tiếng Anh</span>
                    <div class="pt-4">
                        <h3 class="font-medium">Đề thi THPT 2024 môn Tiếng Anh trường THPT Lam Sơn</h3>
                        <button class="mt-3 w-full bg-[#0B8493] text-white py-2 rounded-full">Làm bài</button>
                    </div>
                </div>
                <div class="p-4 border rounded-lg shadow bg-white">
                    <span class="text-sm text-[#0B8493] font-bold">Tiếng Anh</span>
                    <div class="pt-4">
                        <h3 class="font-medium">Đề thi THPT 2024 môn Tiếng Anh trường THPT Lam Sơn</h3>
                        <button class="mt-3 w-full bg-[#0B8493] text-white py-2 rounded-full">Làm bài</button>
                    </div>
                </div>
                <div class="p-4 border rounded-lg shadow bg-white">
                    <span class="text-sm text-[#0B8493] font-bold">Tiếng Anh</span>
                    <div class="pt-4">
                        <h3 class="font-medium">Đề thi THPT 2024 môn Tiếng Anh trường THPT Lam Sơn</h3>
                        <button class="mt-3 w-full bg-[#0B8493] text-white py-2 rounded-full">Làm bài</button>
                    </div>
                </div>
            </div>
            <p class="mt-4 text-center text-[#0B8493] font-bold cursor-pointer">Xem thêm 17 đề ▼</p>
        </div>
        <div class="mt-8 bg-white p-6 rounded-lg" style="box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.1);">
            <div class="flex justify-between">
                <h2 class="text-xl font-bold">Đề thi thử tốt nghiệp THPT Quốc Gia 2024 môn Tiếng Anh</h2>
                <span class="bg-[#E2E8F0] px-2 rounded-full font-bold">20 đề</span>
            </div>
            <div class="grid grid-cols-3 gap-4 mt-4">
                <div class="p-4 border rounded-lg shadow bg-white">
                    <span class="text-sm text-[#0B8493] font-bold">Tiếng Anh</span>
                    <div class="pt-4">
                        <h3 class="font-medium">Đề thi THPT 2024 môn Tiếng Anh trường THPT Lam Sơn</h3>
                        <button class="mt-3 w-full bg-[#0B8493] text-white py-2 rounded-full">Làm bài</button>
                    </div>
                </div>
                <div class="p-4 border rounded-lg shadow bg-white">
                    <span class="text-sm text-[#0B8493] font-bold">Tiếng Anh</span>
                    <div class="pt-4">
                        <h3 class="font-medium">Đề thi THPT 2024 môn Tiếng Anh trường THPT Lam Sơn</h3>
                        <button class="mt-3 w-full bg-[#0B8493] text-white py-2 rounded-full">Làm bài</button>
                    </div>
                </div>
                <div class="p-4 border rounded-lg shadow bg-white">
                    <span class="text-sm text-[#0B8493] font-bold">Tiếng Anh</span>
                    <div class="pt-4">
                        <h3 class="font-medium">Đề thi THPT 2024 môn Tiếng Anh trường THPT Lam Sơn</h3>
                        <button class="mt-3 w-full bg-[#0B8493] text-white py-2 rounded-full">Làm bài</button>
                    </div>
                </div>
            </div>
            <p class="mt-4 text-center text-[#0B8493] font-bold cursor-pointer">Xem thêm 17 đề ▼</p>
        </div>
        <div class="mt-8 bg-white p-6 rounded-lg" style="box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.1);">
            <div class="flex justify-between">
                <h2 class="text-xl font-bold">Đề thi thử tốt nghiệp THPT Quốc Gia 2024 môn Tiếng Anh</h2>
                <span class="bg-[#E2E8F0] px-2 rounded-full font-bold">20 đề</span>
            </div>
            <div class="grid grid-cols-3 gap-4 mt-4">
                <div class="p-4 border rounded-lg shadow bg-white">
                    <span class="text-sm text-[#0B8493] font-bold">Tiếng Anh</span>
                    <div class="pt-4">
                        <h3 class="font-medium">Đề thi THPT 2024 môn Tiếng Anh trường THPT Lam Sơn</h3>
                        <button class="mt-3 w-full bg-[#0B8493] text-white py-2 rounded-full">Làm bài</button>
                    </div>
                </div>
                <div class="p-4 border rounded-lg shadow bg-white">
                    <span class="text-sm text-[#0B8493] font-bold">Tiếng Anh</span>
                    <div class="pt-4">
                        <h3 class="font-medium">Đề thi THPT 2024 môn Tiếng Anh trường THPT Lam Sơn</h3>
                        <button class="mt-3 w-full bg-[#0B8493] text-white py-2 rounded-full">Làm bài</button>
                    </div>
                </div>
                <div class="p-4 border rounded-lg shadow bg-white">
                    <span class="text-sm text-[#0B8493] font-bold">Tiếng Anh</span>
                    <div class="pt-4">
                        <h3 class="font-medium">Đề thi THPT 2024 môn Tiếng Anh trường THPT Lam Sơn</h3>
                        <button class="mt-3 w-full bg-[#0B8493] text-white py-2 rounded-full">Làm bài</button>
                    </div>
                </div>
            </div>
            <p class="mt-4 text-center text-[#0B8493] font-bold cursor-pointer">Xem thêm 17 đề ▼</p>
        </div>
    </div>
@endsection
