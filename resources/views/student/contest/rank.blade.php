@extends('layouts.web')

@section('contest-rank')
    <div class="max-w-7xl mx-auto p-4">
        <nav class="text-sm mb-4" aria-label="breadcrumb">
            <ol class="list-reset flex text-gray-600">
                <li><a href="/" class="">Trang chủ</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="" class="">Cuộc thi</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="" class="">{{ $slug }}</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="" class="mx-2 text-[#0B8493] font-bold"> Bảng xếp hạng </a></li>
            </ol>
        </nav>

        <div class="container bg-white p-10 rounded-2xl">
            <div class="flex flex-col gap-4">
                <div class="uppercase mb-2 w-fit bg-[#FF8040] text-white rounded-full px-3 py-2 text-base font-bold">
                    Cuộc thi tiếng Anh
                </div>
                <div class="text-4xl font-bold mb-3">
                    Cuộc thi <span class="capitalize">"Tự tin vươn mình thế giới"</span>
                </div>
                <div class="text-[#525266] mb-5">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora reprehenderit iure fugit adipisci
                    iusto odio iste ullam nam accusamus voluptatibus, sit obcaecati aperiam dicta commodi doloribus nulla?
                    Voluptatibus, repudiandae esse!
                </div>
                <div class="flex gap-5 w-full justify-between mb-5">
                    <div class="flex items-center justify-between gap-3 w-full">
                        <div class="step-active bg-[#E6F4FF] text-[#1677FF] py-1 px-2 rounded-full">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <span class="text-nowrap">
                            Đăng ký
                        </span>
                        <div class="h-[1px] bg-[#1677FF] w-full"> </div>
                    </div>
                    <div class="flex items-center justify-between gap-3 w-full">
                        <div class="step-active bg-[#1677FF] font-medium text-white py-1 px-3 rounded-full">
                            2
                        </div>
                        <span class="text-nowrap">
                            Diễn ra
                        </span>
                        <div class="h-[1px] bg-[#D9D9D9] w-full"> </div>
                    </div>
                    <div class="flex items-center justify-between gap-3">
                        <div class="step-active bg-[#D9D9D9] font-medium text-gray-500 py-1 px-3 rounded-full">
                            3
                        </div>
                        <span class="text-nowrap text-gray-500">
                            Kết thúc
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
