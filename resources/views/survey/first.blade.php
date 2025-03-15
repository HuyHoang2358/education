@extends('layouts.survey')
@section('title', 'Khảo sát')
@section('content')

    <div class="h-screen flex flex-col justify-between">
        <header class="bg-[#124D59] text-white z-50 sticky top-0 transition-transform ">
            <div class="container mx-auto flex items-center justify-between px-6 py-[22px]">
                <img src="{{asset('/assets/img/home/LOGO.png')}}" alt="">
                <p class="text-xl font-semibold">Thoát</p>
            </div>
        </header>

        <div class="px-60 h-[750px] flex flex-col items-center ">
            <div class="text-center flex flex-col items-center ">
                <img class="w-60 h-60" src="{{asset('assets/img/home/cam-1.png')}}" alt="">
                <p class="text-[#0B8493] font-bold text-lg pt-4">Bước 1/4</p>
                <h3 class="text-3xl font-semibold py-2">Mừng bạn đến [TEN CONG TY]</h3>
                <p class="text-xl text-gray-600">Hãy cùng chia sẽ cho chúng tôi biết một chút về bạn để chúng tôi có thể phục vụ bạn một cách tốt nhất. Mục tiêu của bạn là gì?</p>
            </div>
            <div class="grid grid-cols-4 gap-10 mt-10">
                <div class="bg-white shadow-2xl rounded-xl w-fit border-2 border-[#0B8493] hover:border-orange-500 cursor-pointer">
                    <img class="rounded-xl" src="{{asset('assets/img/home/cam-2.png')}}" alt="">
                    <p class="text-lg font-semibold text-center py-3">Luyện thi 9 lên 10</p>
                </div>
                <div class="bg-white shadow-2xl rounded-xl w-fit border-2 border-[#0B8493] hover:border-orange-500 cursor-pointer">
                    <img class="rounded-xl" src="{{asset('assets/img/home/cam-3.png')}}" alt="">
                    <p class="text-lg font-semibold text-center py-3">Luyện thi THPT Quốc Gia</p>
                </div>
                <div class="bg-white shadow-2xl rounded-xl w-fit border-2 border-[#0B8493] hover:border-orange-500 cursor-pointer">
                    <img class="rounded-xl" src="{{asset('assets/img/home/cam-4.png')}}" alt="">
                    <p class="text-lg font-semibold text-center py-3">Luyện Thi Học Sinh Giỏi</p>
                </div>
                <div class="bg-white shadow-2xl rounded-xl w-fit border-2 border-[#0B8493] hover:border-orange-500 cursor-pointer">
                    <img class="rounded-xl" src="{{asset('assets/img/home/cam-5.png')}}" alt="">
                    <p class="text-lg font-semibold text-center py-3">Chưa có mục tiêu cụ thể</p>
                </div>
            </div>
        </div>
        <div class="flex justify-center bg-white py-5">
            <a href="khao-sat-second">
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
    </div>
@endsection

