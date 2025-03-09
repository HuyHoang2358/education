@extends('layouts.web')
@section('title')
    Thông tin lớp học
@endsection
@section('practice_room-detail')
    <div class="max-w-7xl mx-auto p-4">
        <!-- Breadcrumbs -->
        @include('components.breadcrumb', [
            'breadcrumbs' => [
                ['name' => 'Phòng luyện tập', 'route' => route('practice_room.index')],
                ['name' => 'Tiếng Anh lớp 12', 'route' => ''],
            ],
        ])


        <div class="relative container bg-white rounded-2xl overflow-hidden">
            <div>
                <img class="w-full" src="{{ asset('/assets/img/home/Bg.png') }}" alt="">
            </div>
            <div class="flex justify-between p-5">
                <div class="ml-40">
                    <p class="font-bold text-xl">Nguyễn Văn A</p>
                    <p class="text-light-gray">"Tiên học lễ, hậu học văn, muốn học giỏi, học cùng Khánh Gia."</p>
                </div>
                <div class="flex gap-6">
                    <div class="flex gap-2">
                        <img src="{{ asset('/assets/img/home/Flash lime big.png') }}" alt="">
                        <div class="text-nowrap">
                            <p class="font-bold text-lg">480</p>
                            <p class="text-light-gray">Điểm exp</p>
                        </div>
                    </div>

                    <div class="flex gap-2">
                        <img class="shimmer" src="{{ asset('/assets/img/home/Cup gold.png') }}" alt="">
                        <div class="text-nowrap">
                            <p class="font-bold text-lg">Top 7</p>
                            <p class="text-light-gray">Rank 07/40</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Lấy khung này tham khảo để làm avatar-->
            <div class="border-white border-4 rounded-full bg-white absolute bottom-3 left-6">
                <div class="relative">
                    <div class="overflow-hidden rounded-full">
                        <img width="120" height="120" src="{{ asset('/assets/img/home/3d heart 2.png') }}"
                            alt="">
                    </div>
                    <button class="bg-black -right-4 opacity-70 rounded-full py-2 px-3 absolute bottom-0 text-white">
                        <i class="fa-solid fa-image"></i>
                    </button>
                </div>
            </div>
            <div class="absolute top-2 right-2 z-10">
                <button class="bg-black opacity-70 rounded-full py-2 px-3 text-white">
                    <i class="fa-solid fa-image"></i>
                </button>
            </div>
        </div>

        <div class="container flex gap-5 my-6">
            <!-- Left section -->
            <div class="bg-white py-10 rounded-2xl p-4 flex flex-col gap-3 text-light-gray w-full">
                <div class="p-6 bg-[#F1F5F9] rounded-2xl flex justify-between items-center">
                    <div class="flex flex-col gap-2">
                        <p class="text-nowrap font-medium">Mật khẩu: TA123456</p>
                        <p class="font-bold text-xl text-nowrap text-full-black">Tiếng Anh 12 12A1</p>
                    </div>
                    <div
                        class="w-fit h-fit bg-gray-50 border-2 border-[#0B8493] text-[#0B8493] rounded-full overflow-hidden flex relative py-1 hover:scale-105 hover:bg-[#0B8493] hover:text-white hover:shadow-md duration-200">
                        <button onclick="toggleModal(true)"
                            class="bg-transparent focus:outline-none hover:cursor-pointer w-full px-5 pl-5 pr-10"
                            style="appearance: none;"> Chọn lớp học
                        </button>
                        <i class="fa-solid fa-chevron-down absolute right-3 inset-y-2 pointer-events-none"></i>
                    </div>
                    @include('components.pratice_room_list_modal')
                </div>
                @include('components.class_exercise')
            </div>

            <!-- Right section -->
            <div class="flex flex-col gap-5 w-fit basis-1/2">
                <!-- Mini ranking board -->
                <div class="bg-white rounded-xl p-5 text-center font-semibold">
                    <p><span class="text-[#0B8493]">Tuyệt vời!</span> Bạn đang xếp thứ 07 trong phòng luyện tập</p>
                    @livewire('practice-room-mini-rank')
                    <div class="mt-4">
                        <x-button_animation_2 href="{{ route('practice_room.detail.rank', 'test') }}" content='Xem bảng xếp hạng' class="bg-transparent shadow-md border border-[#0B8493] w-fit px-6 py-2 rounded-full font-medium relative inline-flex items-center justify-center overflow-hidden text-[#0B8493] hover:cursor-pointer"/>
                    </div>
                </div>
                @include('components.teacher_information_card')
            </div>

        </div>

    </div>
    <script src="{{ asset('assets/js/components/practice_room.js') }}"></script>
@endsection
