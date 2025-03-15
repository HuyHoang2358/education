@extends('layouts.web')
@section('title', 'Lỗi 404')
@section('content')
    <div class="flex flex-col justify-center relative ">
        <img class=" h-[675px]" src="{{ asset("assets/img/abroad/bg-404.png") }}" alt="">
        <div class="absolute top-20 right-0 text-center flex justify-center flex-col items-center w-full">
            <img class="w-80 h-80" src="{{ asset("assets/img/abroad/404.png") }}" alt="">
            <p class="font-bold text-2xl pt-5">Error 404 - PAGE NOT FOUND!!!</p>
            <button
                class="group font-semibold rounded-full w-fit mt-10 relative inline-flex h-10 items-center justify-center overflow-hidden px-10 bg-[#0B8493]">
                <div
                    class="inline-flex translate-y-0 items-center justify-center px-6 text-neutral-50 transition duration-500 group-hover:-translate-y-[150%]">
                    Quay lại</div>
                <div
                    class="absolute inline-flex h-14 w-full translate-y-[100%] items-center justify-center text-neutral-50 transition duration-500 group-hover:translate-y-0">
                        <span
                            class="absolute h-full w-full translate-y-full skew-y-6 scale-y-0 bg-orange-400 transition duration-500 group-hover:translate-y-0 group-hover:scale-150"></span><span
                        class="z-10">Quay lại</span></div>
            </button>
        </div>
    </div>
@endsection
