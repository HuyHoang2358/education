@extends('layouts.web')
@section('title', 'Khảo sát')
@section('content')

    <header class="bg-[#124D59] text-white z-50 sticky top-0 transition-transform my-10">
        <div class="container mx-auto flex items-center justify-between px-6 py-[22px]">
            <img src="{{asset('/assets/img/home/LOGO.png')}}" alt="">
            <p class="text-xl font-semibold">Thoát</p>
        </div>
    </header>

    <div class="px-60 h-[750px] flex flex-col items-center">
        <div class="text-center flex flex-col items-center">
            <img class="w-60 h-60" src="{{asset('assets/img/home/cam-1.png')}}" alt="">
            <p class="text-[#0B8493] font-bold text-lg pt-4">Bước 3/4</p>
            <h3 class="text-3xl font-semibold py-2">Bạn có nhu cầu du học không?</h3>
        </div>
        <div class="flex gap-6 mt-10">
            <div class="flex flex-col items-center justify-center bg-white shadow-2xl rounded-xl w-52 h-56 border-2 border-gray-300 hover:border-[#02CFD8] cursor-pointer group">
                <img class="rounded-xl" src="{{asset('assets/img/home/cam-6.png')}}" alt="">
                <p class="text-lg font-semibold text-center py-3 group-hover:text-[#02CFD8]">Có, Tôi đang có <br> nhu cầu du học</p>
            </div>
            <div class="flex flex-col items-center justify-center bg-white shadow-2xl rounded-xl w-52 h-56 border-2 border-gray-300 hover:border-[#02CFD8] cursor-pointer group">
                <img class="rounded-xl" src="{{asset('assets/img/home/cam-7.png')}}" alt="">
                <p class="text-lg font-semibold text-center py-3 group-hover:text-[#02CFD8]">Không, Tôi chưa có<br> nhu cầu du học</p>
            </div>
        </div>
    </div>

    <div class="flex justify-center bg-white py-5 gap-5">
        <a href="khao-sat-second">
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
        <a href="khao-sat-fourth">
            <button
                class="group text-lg font-semibold rounded-full w-fit relative inline-flex h-10 items-center justify-center overflow-hidden px-16 bg-[#0B8493]">
                <div
                    class="inline-flex translate-y-0 items-center justify-center px-6 text-neutral-50 transition duration-500 group-hover:-translate-y-[150%]">
                    Tiếp tục</div>
                <div
                    class="absolute inline-flex h-14 w-full translate-y-[100%] items-center justify-center text-neutral-50 transition duration-500 group-hover:translate-y-0">
                        <span
                            class="absolute h-full w-full translate-y-full skew-y-6 scale-y-0 bg-orange-400 transition duration-500 group-hover:translate-y-0 group-hover:scale-150"></span><span
                        class="z-10">Tiếp tục</span></div>
            </button>
        </a>
    </div>
@endsection


