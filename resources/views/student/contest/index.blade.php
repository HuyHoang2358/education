@extends('layouts.web')

@section('contest')
    <div style="background-image: url('{{ asset('/assets/img/home/bg-contest.png') }}')" class="h-[1000px] bg-contain bg-no-repeat ">
        <div class="max-w-7xl mx-auto p-4">
            <nav class="text-sm mb-4" aria-label="breadcrumb">
                <ol class="list-reset flex text-gray-600">
                    <li><a href="/" class="">Trang chủ</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li><a href="" class="mx-2 text-[#0B8493] font-bold">Đề thi</a></li>
                </ol>
            </nav>

            <div class="container">
                <div class="flex gap-8 items-center my-14 flex-col">
                    <span class="text-5xl font-semibold">Tổng hợp cuộc thi</span>
                    <span class="text-[#525266] text-xl">Phân tách và tổng hợp thành các đề thi có phân chia mức độ từ dễ đến khó, giúp bạn dễ dàng học tập.</span>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <div class=" group relative rounded-2xl border-2 border-[#0B8493] hover:cursor-pointer hover:scale-105 duration-300 hover:shimmer hover:shadow-xl">
                        <div class="overflow-hidden rounded-2xl">
                            <img src="{{ asset('/assets/img/home/contest-card-bg.png')}}" alt="">
                        </div>
                        <div class="animate-openup group-hover:flex absolute -bottom-[17rem] inset-x-12 bg-white hidden py-5 px-8 items-center flex-col rounded-lg shadow-[0px_6px_0px_6px_rgba(255,128,64,1)] z-20 gap-5">
                            <div class="uppercase bg-[#FF8040] text-white rounded-full px-3 py-2 text-base font-bold">
                                Cuộc thi tiếng Anh
                            </div>
                            <div class="text-2xl font-bold">
                                Cuộc thi <span class="capitalize">"Tự tin vươn mình thế giới"</span>
                            </div>
                            <div class="text-center text-[#525266]">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora reprehenderit iure fugit adipisci iusto odio iste ullam nam accusamus voluptatibus, sit obcaecati aperiam dicta commodi doloribus nulla? Voluptatibus, repudiandae esse!
                            </div>
                            <div class="flex gap-5">
                                <div class="flex items-center justify-between gap-3">
                                    <div class="step-active bg-[#E6F4FF] text-[#1677FF] py-1 px-2 rounded-full">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <span class="text-nowrap">
                                        Đăng ký
                                    </span>
                                    <div class="h-[1px] bg-[#1677FF] w-10"> </div>
                                </div>
                                <div class="flex items-center justify-between gap-3">
                                    <div class="step-active bg-[#1677FF] font-medium text-white py-1 px-3 rounded-full">
                                        2
                                    </div>
                                    <span class="text-nowrap">
                                        Diễn ra
                                    </span>
                                    <div class="h-[1px] bg-[#D9D9D9] w-10"> </div>
                                </div>
                                <div class="flex items-center justify-between gap-3">
                                    <div class="step-active bg-[#D9D9D9] font-medium text-gray-500 py-1 px-3 rounded-full">
                                        3
                                    </div>
                                    <span class="text-nowrap text-gray-500">
                                        Kết thúc
                                    </span>
                                    {{-- <div class="h-[1px] bg-[#D9D9D9] w-10"> </div> --}}
                                </div>
                            </div>
                            <div class="my-1">
                                <a class="bg-[#0B8493] w-fit px-10 py-2 rounded-full font-medium group/item relative inline-flex items-center justify-center overflow-hidden text-white hover:cursor-pointer"><span>Tham gia ngay</span><div class="w-0 translate-x-[100%] pl-0 opacity-0 transition-all duration-200 group-hover/item:w-5 group-hover/item:translate-x-0 group-hover/item:pl-1 group-hover/item:opacity-100"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        
    </script>

@endsection
