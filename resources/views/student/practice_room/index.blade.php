@extends('layouts.web')
@section('title')
    Phòng luyện tập
@endsection
@section('content')
    <div style="background-image: url('{{ asset('/assets/img/home/bg-contest.png') }}')"
        class="bg-contain bg-no-repeat w-full">
        <div class="max-w-7xl mx-auto p-4">
            @include('components.breadcrumb', [
                'breadcrumbs' => [['name' => 'Phòng luyện tập', 'route' => route('practice_room.index')]],
            ])

            <!-- Title -->
            @include('components.title_page', [
                'page_title' => 'Phòng luyện tập',
                'page_description' =>
                    'Tìm kiếm phòng luyện tập của bạn',
            ])

            <div class=" bg-white rounded-2xl px-8 pb-6 mt-16 container">
                <p class="text-start pt-7 pb-5 text-lg font-semibold">Môn học</p>
                @php
                    $subjects = [
                        [
                            'name' => 'Toán',
                            'img' => 'toan',
                        ],
                        [
                            'name' => 'Vật Lý',
                            'img' => 'vat-ly',
                        ],
                        [
                            'name' => 'Hóa Học',
                            'img' => 'hoa-hoc',
                        ],
                        [
                            'name' => 'Ngữ Văn',
                            'img' => 'ngu-van',
                        ],
                        [
                            'name' => 'Lịch Sử',
                            'img' => 'toan',
                        ],
                        [
                            'name' => 'Địa lý',
                            'img' => 'hoa-hoc',
                        ],
                        [
                            'name' => 'Sinh học',
                            'img' => 'ngu-van',
                        ],
                    ];
                @endphp
                <div class="relative mx-20">
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            @foreach ($subjects as $subject)
                                <div class="swiper-slide group">
                                    <div
                                        class="bg-white rounded-lg shadow-md hover:shadow-orange-300 transform duration-300">
                                        <a class="group" href="">
                                            <div class="overflow-hidden	rounded-md">
                                                <img src="{{ asset('/assets/img/home/' . $subject['img'] . '.png') }}"
                                                    alt="{{ $subject['name'] }}"
                                                    class="w-[100%] transform transition-transform duration-300 group-hover:scale-110">
                                            </div>
                                            <h3 class="font-semibold text-lg py-3 text-center group-hover:text-orange-300">
                                                {{ $subject['name'] }}</h3>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination-2 flex justify-center p-5"></div>
                    </div>
                    <div class="inset-y-1/3 -right-16 absolute">
                        <div class="swiper-button-next-unique w-100 h-100 z-50 text-orange-400 px-4 py-2 rounded-full">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                    <div class="inset-y-1/3 -left-16 absolute">
                        <div class="swiper-button-prev-unique w-100 h-100 z-50 text-orange-400 px-4 py-2 rounded-full">
                            <i class="fa-solid fa-chevron-left"></i>
                        </div>
                    </div>
                </div>

                <p class="text-start text-lg font-semibold pb-2">Mục tiêu của bạn</p>
                <div class="flex py-3 gap-3">
                    <button class="aim-ative">Ôn thi Đại Học</button>
                    <button class="aim-not-active hover:aim-ative">Ôn thi Chuyển Cấp</button>
                    <button class="aim-not-active hover:aim-ative">Ôn thi lớp 9 lên 10</button>
                    <button class="aim-not-active hover:aim-ative">Ôn thi HSG</button>
                </div>

                <p class="text-start text-lg font-semibold pb-2">Địa điểm</p>
                <div>
                    <div class="flex gap-5 pt-2">
                        <div class="flex gap-5 basis-4/5 justify-between">
                            <div class="w-full bg-gray-50 border-2 border-[#0B8493] text-[#0B8493] rounded-full overflow-hidden flex relative">
                                <select id="countries" class="bg-transparent focus:outline-none hover:cursor-pointer w-full px-5 pl-5 pr-10" style="appearance: none;">
                                    <option class="w-fit" value="" disabled selected hidden>Tỉnh/Thành phố</option>
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="FR">France</option>
                                    <option value="DE">Germany</option>
                                </select>
                                <i class="fa-solid fa-chevron-down absolute right-3 inset-y-3 pointer-events-none"></i>
                            </div>
    
                            <div class="w-full bg-gray-50 border-2 border-[#0B8493] text-[#0B8493] rounded-full overflow-hidden flex relative">
                                <select id="countries" class="bg-transparent focus:outline-none hover:cursor-pointer w-full px-5 pl-5 pr-10" style="appearance: none;">
                                    <option class="w-fit" value="" disabled selected hidden>Huyện</option>
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="FR">France</option>
                                    <option value="DE">Germany</option>
                                </select>
                                <i class="fa-solid fa-chevron-down absolute right-3 inset-y-3 pointer-events-none"></i>
                            </div>
    
                            <div class="w-full bg-gray-50 border-2 border-[#0B8493] text-[#0B8493] rounded-full overflow-hidden flex relative">
                                <select id="countries" class="bg-transparent focus:outline-none hover:cursor-pointer w-full px-5 pl-5 pr-10" style="appearance: none;">
                                    <option class="w-fit" value="" disabled selected hidden>Trường học</option>
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="FR">France</option>
                                    <option value="DE">Germany</option>
                                </select>
                                <i class="fa-solid fa-chevron-down absolute right-3 inset-y-3 pointer-events-none"></i>
                            </div>
    
                            <div class="w-full bg-gray-50 border-2 border-[#0B8493] text-[#0B8493] rounded-full overflow-hidden flex relative">
                                <select id="countries" class="bg-transparent focus:outline-none hover:cursor-pointer w-full px-5 pl-5 pr-10" style="appearance: none;">
                                    <option class="w-fit" value="" disabled selected hidden>Khối</option>
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="FR">France</option>
                                    <option value="DE">Germany</option>
                                </select>
                                <i class="fa-solid fa-chevron-down absolute right-3 inset-y-3 pointer-events-none"></i>
                            </div>
    
                        </div>
        
                        <button class="group text-xl font-semibold rounded-full w-fit relative inline-flex py-2 items-center justify-center overflow-hidden px-5 bg-[#0B8493] basis-1/5">
                            <div
                                class="inline-flex translate-y-0 items-center justify-center px-6 text-neutral-50 transition duration-500 group-hover:-translate-y-[150%]">
                                Tiến hành lọc</div>
                            <div
                                class="absolute inline-flex py-5 w-full translate-y-[100%] items-center justify-center text-neutral-50 transition duration-500 group-hover:translate-y-0">
                                    <span
                                        class="absolute h-full w-full translate-y-full skew-y-6 scale-y-0 bg-orange-400 transition duration-500 group-hover:translate-y-0 group-hover:scale-150"></span><span
                                    class="z-10">Tiến hành lọc</span></div>
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl px-8 py-6 mt-10 container">
                <div class="text-light-gray flex w-full justify-between">
                    <div>
                        Kết quả tìm kiếm
                    </div>
                    <div>
                        <span class="text-[#0B8493] font-medium">123</span> Phòng Luyện Tập
                    </div>
                </div>

                {{-- <div class="grid grid-cols-2 pt-4 gap-6">
                    <!-- Pratice room card -->
                    @include('components.practice_room_card')
                    @include('components.practice_room_card')
                </div> --}}
                @livewire('practice-room-pagination')
                @include('components.join_room_confirmation')
            </div>

        </div>
        <script src="{{ asset('assets/js/components/practice_room.js') }}"></script>
    </div>

@endsection

