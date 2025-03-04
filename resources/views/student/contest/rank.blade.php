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

        <div class="container bg-white py-10 rounded-2xl mt-6">

            <div class="text-center text-[#FFAA00] text-2xl uppercase font-bold">
                Vinh danh bảng vàng
            </div>

            <div class="text-center text-2xl font-bold mt-3">
                Cuộc thi "Tự Tin Vươn Mình Thế Giới"
            </div>

            <table class="table-auto w-full mt-5">
                <thead class="shadow-[0px_10px_10px_-3px_rgba(0,0,0,0.15)]">
                    <tr>
                        <th class="text-center py-5">
                            <div class="border-r-2 w-full">Hạng</div>
                        </th>
                        <th class="text-center">
                            <div class="border-r-2 w-full">Avatar</div>
                        </th>
                        <th class="text-start">
                            <div class="border-r-2 w-full pl-3">Họ và tên</div>
                        </th>
                        <th class="text-start">
                            <div class="border-r-2 w-full pl-3">Điểm số</div>
                        </th>
                        <th class="text-start pl-3">Tỉnh thành phố </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="group hover:bg-[#F1FCF3] duration-300 hover:cursor-pointer border-y-2 border-dashed">
                        <div>
                            <td class="pt-5">
                                <div class="flex w-full h-full justify-center shimmer items-center">
                                    <img src="{{ asset('/assets/img/home/Group1.png') }}" alt="">
                                </div>
                            </td>
                            <td class="relative pb-5">
                                <div class="hidden group-hover:block duration-300 absolute -top-2 left-36 rounded-t-full rounded-r-full rounded-bl-none bg-green-200 border-2 border-green-600 text-[#21A642] px-3 text-nowrap font-medium">
                                    Bạn cần <span>16</span> điểm để thăng hạng
                                </div>  
                                <div
                                    class="shimmer relative bg-contain flex justify-center align-bottom pt-3">
                                    <img src="{{ asset('/assets/img/home/Frame1.png') }}" alt="">
                                    <img class="absolute self-end" src="{{ asset('/assets/img/home/Avatar.png') }}"
                                        alt="">
                                </div>
                            </td>
                            <td class="pl-4 pt-3 text-[#525266] font-medium">Lương Gia Khánh</td>
                            <td class="pl-4 pt-3 font-bold group-hover:text-green-600">100</td>
                            <td class="pl-4 pt-3 text-[#525266] font-medium">Thái Bình</td>
                        </div>
                    </tr>
                    <tr class="border-y-2 border-dashed group hover:bg-[#F1FCF3] duration-300 hover:cursor-pointer">
                        <div>
                            <td class="pt-5">
                                <div class="flex w-full h-full justify-center shimmer items-center">
                                    <img src="{{ asset('/assets/img/home/Group2.png') }}" alt="">
                                </div>
                            </td>
                            <td class="relative group pb-5">
                                <div class="hidden group-hover:block duration-300 absolute -top-2 left-36 rounded-t-full rounded-r-full rounded-bl-none bg-green-200 border-2 border-green-600 text-[#21A642] px-3 text-nowrap font-medium">
                                    Bạn cần <span>16</span> điểm để thăng hạng
                                </div> 
                                <div
                                    class="shimmer relative bg-contain flex bg-no-repeat bg-center justify-center align-bottom pt-3">
                                    <img src="{{ asset('/assets/img/home/Frame2.png') }}" alt="">
                                    <img class="absolute self-end" src="{{ asset('/assets/img/home/Avatar.png') }}"
                                        alt="">
                                </div>
                            </td>
                            <td class="pl-4 pt-3 text-[#525266] font-medium">Lương Gia Khánh</td>
                            <td class="pl-4 pt-3 font-bold group-hover:text-green-600">100</td>
                            <td class="pl-4 pt-3 text-[#525266] font-medium">Thái Bình</td>
                        </div>
                    </tr>
                    <tr class="border-y-2 border-dashed group hover:bg-[#F1FCF3] duration-300 hover:cursor-pointer">
                        <div>
                            <td class="pt-3">
                                <div class="flex w-full h-full justify-center shimmer items-center">
                                    <img src="{{ asset('/assets/img/home/Group3.png') }}" alt="">
                                </div>
                            </td>
                            <td class="relative group pb-4">
                                <div class="hidden group-hover:block duration-300 absolute -top-2 left-36 rounded-t-full rounded-r-full rounded-bl-none bg-green-200 border-2 border-green-600 text-[#21A642] px-3 text-nowrap font-medium">
                                    Bạn cần <span>16</span> điểm để thăng hạng
                                </div> 
                                <div
                                    class="shimmer bg-contain flex bg-no-repeat bg-center justify-center align-bottom pt-6">
                                    <div class="border-4 border-amber-900 rounded-full">
                                        <img src="{{ asset('/assets/img/home/Avatar.png') }}" alt="">
                                    </div>
                                </div>
                            </td>
                            <td class="pl-4 pt-3 text-[#525266] font-medium">Lương Gia Khánh</td>
                            <td class="pl-4 pt-3 font-bold group-hover:text-green-600">100</td>
                            <td class="pl-4 pt-3 text-[#525266] font-medium">Thái Bình</td>
                        </div>
                    </tr>
                    <tr class="group hover:bg-[#F1FCF3] duration-300 hover:cursor-pointer border-y-2 border-dashed">
                        <div>
                            <td class="pt-3 text-center text-xl font-semibold text-[#525266] group-hover:text-green-600">
                                4
                            </td>
                            <td class="relative pb-5">
                                <div class="hidden group-hover:block duration-300 absolute -top-2 left-36 rounded-t-full rounded-r-full rounded-bl-none bg-green-200 border-2 border-green-600 text-[#21A642] px-3 text-nowrap font-medium">
                                    Bạn cần <span>16</span> điểm để thăng hạng
                                </div>
                                <div class="bg-contain flex bg-no-repeat bg-center justify-center align-bottom pt-6">
                                    <div>
                                        <img src="{{ asset('/assets/img/home/Avatar.png') }}" alt="">
                                    </div>
                                </div>
                            </td>
                            <td class="pl-4 pt-3 text-[#525266] font-medium">Lương Gia Khánh</td>
                            <td class="pl-4 pt-3 font-bold group-hover:text-green-600">100</td>
                            <td class="pl-4 pt-3 text-[#525266] font-medium">Thái Bình</td>
                        </div>
                    </tr>
                </tbody>
            </table>

        </div>


    </div>
@endsection
