@extends('layouts.survey')
@section('title', 'Khảo sát')
@section('content')

    <div class="h-screen flex flex-col justify-between">
        <header class="bg-[#124D59] text-white z-50 sticky top-0 transition-transform">
            <div class="container mx-auto flex items-center justify-between px-6 py-[22px]">
                <img src="{{asset('/assets/img/home/LOGO.png')}}" alt="">
                <p class="text-xl font-semibold">Thoát</p>
            </div>
        </header>

        <div class="px-60 h-[750px] flex flex-col items-center">
            <div class="text-center flex flex-col items-center">
                <img class="w-60 h-60" src="{{asset('assets/img/home/cam-1.png')}}" alt="">
                <p class="text-[#0B8493] font-bold text-lg pt-4">Bước 4/4</p>
                <h3 class="text-3xl font-semibold py-2">Đất nước mà bạn muốn du học?</h3>
            </div>
            <div class="relative w-[960px] mt-10">
                <input type="text" class="w-full border-2 border-gray-300 rounded-full px-12 h-[56px] placeholder:text-[#124D59] font-medium text-lg text-[#0B8493] focus:border-[#02CFD8] focus:outline-none" placeholder="Nhập tên đất nước">
                <i class="fa-solid fa-magnifying-glass absolute top-5 left-5 text-[#124D59] text-lg"></i>
            </div>
            <div class="text-lg font-semibold grid grid-cols-3 gap-6 mt-6">
                <div class="flex items-center gap-4 bg-white rounded-2xl border-gray-300 border-2 w-[304px] h-20 px-4 group hover:border-[#02CFD8] duration-500 ease-in-out">
                    <p class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-200 text-gray-600 group-hover:bg-[#0B8493] group-hover:text-white duration-500 ease-in-out">1</p>
                    <p class="group-hover:text-[#0B8493] duration-500 ease-in-out">Singapore</p>
                </div>
                <div class="flex items-center gap-4 bg-white rounded-2xl border-gray-300 border-2 w-[304px] h-20 px-4 group hover:border-[#02CFD8] duration-500 ease-in-out">
                    <p class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-200 text-gray-600 group-hover:bg-[#0B8493] group-hover:text-white duration-500 ease-in-out">2</p>
                    <p class="group-hover:text-[#0B8493] duration-500 ease-in-out">Trung Quốc</p>
                </div>
                <div class="flex items-center gap-4 bg-white rounded-2xl border-gray-300 border-2 w-[304px] h-20 px-4 group hover:border-[#02CFD8] duration-500 ease-in-out">
                    <p class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-200 text-gray-600 group-hover:bg-[#0B8493] group-hover:text-white duration-500 ease-in-out">3</p>
                    <p class="group-hover:text-[#0B8493] duration-500 ease-in-out">Đức</p>
                </div>
                <div class="flex items-center gap-4 bg-white rounded-2xl border-gray-300 border-2 w-[304px] h-20 px-4 group hover:border-[#02CFD8] duration-500 ease-in-out">
                    <p class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-200 text-gray-600 group-hover:bg-[#0B8493] group-hover:text-white duration-500 ease-in-out">4</p>
                    <p class="group-hover:text-[#0B8493] duration-500 ease-in-out">Anh</p>
                </div>
                <div class="flex items-center gap-4 bg-white rounded-2xl border-gray-300 border-2 w-[304px] h-20 px-4 group hover:border-[#02CFD8] duration-500 ease-in-out">
                    <p class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-200 text-gray-600 group-hover:bg-[#0B8493] group-hover:text-white duration-500 ease-in-out">5</p>
                    <p class="group-hover:text-[#0B8493] duration-500 ease-in-out">Nhật bản</p>
                </div>
                <div class="flex items-center gap-4 bg-white rounded-2xl border-gray-300 border-2 w-[304px] h-20 px-4 group hover:border-[#02CFD8] duration-500 ease-in-out">
                    <p class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-200 text-gray-600 group-hover:bg-[#0B8493] group-hover:text-white duration-500 ease-in-out">6</p>
                    <p class="group-hover:text-[#0B8493] duration-500 ease-in-out">Mỹ</p>
                </div>
            </div>
        </div>

        <div class="flex justify-center bg-white py-5 gap-5">
            <a href="khao-sat-third">
                <button
                    class="group text-lg font-semibold rounded-full w-fit relative inline-flex h-10 items-center justify-center overflow-hidden px-16 bg-orange-500">
                    <div
                        class="inline-flex translate-y-0 items-center justify-center px-6 text-neutral-50 transition duration-500 group-hover:-translate-y-[150%]">
                        Quay lại</div>
                    <div
                        class="absolute inline-flex h-14 w-full translate-y-[100%] items-center justify-center text-neutral-50 transition duration-500 group-hover:translate-y-0">
                        <span
                            class="absolute h-full w-full translate-y-full skew-y-6 scale-y-0 bg-[#0B8493] transition duration-500 group-hover:translate-y-0 group-hover:scale-150"></span><span
                            class="z-10">Quay lại</span></div>
                </button>
            </a>
            <button
                class="group text-lg font-semibold rounded-full w-fit relative inline-flex h-10 items-center justify-center overflow-hidden px-16 bg-[#0B8493]">
                <div
                    class="inline-flex translate-y-0 items-center justify-center px-6 text-neutral-50 transition duration-500 group-hover:-translate-y-[150%]">
                    Hoàn tất</div>
                <div
                    class="absolute inline-flex h-14 w-full translate-y-[100%] items-center justify-center text-neutral-50 transition duration-500 group-hover:translate-y-0">
                        <span
                            class="absolute h-full w-full translate-y-full skew-y-6 scale-y-0 bg-orange-400 transition duration-500 group-hover:translate-y-0 group-hover:scale-150"></span><span
                        class="z-10">Hoàn tất</span></div>
            </button>
        </div>
    </div>
@endsection



