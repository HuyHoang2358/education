@extends('layouts.web')
@section('title')
    Bảng xếp hạng
@endsection
@section('practice_room-rank')
    <div class="max-w-7xl mx-auto p-4">
        <!-- Breadcrumbs -->
        @include('components.breadcrumb', [
            'breadcrumbs' => [
                ['name' => 'Phòng luyện tập', 'route' => route('practice_room.index')],
                ['name' => 'Tiếng Anh lớp 12', 'route' => ''],
                ['name' => 'Bảng xếp hạng', 'route' => route('practice_room.detail.rank', 'test')],
            ],
        ])


        <div class="container bg-white p-10 rounded-2xl">
            <div class="flex flex-col gap-4">
                <div class="uppercase mb-2 w-fit bg-[#FF8040] text-white rounded-full px-3 py-2 text-base font-bold">
                    Mật khẩu: TA1234567
                </div>
                <div class="text-4xl font-bold mb-3">
                    Tiếng Anh 12 12A1
                </div>
                <div class="text-[#525266] mb-5">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora reprehenderit iure fugit adipisci
                    iusto odio iste ullam nam accusamus voluptatibus, sit obcaecati aperiam dicta commodi doloribus nulla?
                    Voluptatibus, repudiandae esse!
                </div>
                <div class="flex justify-center">
                    <a class="group/item bg-[#0B8493] w-fit px-10 py-2 rounded-full font-medium group/button-animated relative inline-flex items-center justify-center overflow-hidden text-white hover:cursor-pointer"
                        href="#">
                        <div
                            class="w-0 translate-x-[100%] pr-0 opacity-0 transition-all duration-200 group-hover/item:w-5 group-hover/item:translate-x-0 group-hover/item:pr-2 group-hover/item:opacity-100">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                <path
                                    d="M6.85355 3.14645C6.65829 2.95118 6.34171 2.95118 6.14645 3.14645L2.14645 7.14645C1.95118 7.34171 1.95118 7.65829 2.14645 7.85355L6.14645 11.8536C6.34171 12.0488 6.65829 12.0488 6.85355 11.8536C7.04882 11.6583 7.04882 11.3417 6.85355 11.1464L3.70711 8H12.5C12.7761 8 13 7.77614 13 7.5C13 7.22386 12.7761 7 12.5 7H3.70711L6.85355 3.85355C7.04882 3.65829 7.04882 3.34171 6.85355 3.14645Z"
                                    fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                                </path>
                            </svg>
                        </div>
                        <span>Quay trở lại</span>
                    </a>
                </div>

            </div>
        </div>

        <div class="container bg-white py-10 rounded-2xl my-6">

            <div class="text-center text-[#FFAA00] text-2xl uppercase font-bold">
                Bảng xếp hạng
            </div>

            <div class="text-center text-2xl font-bold mt-3">
                Thành tích của các học sinh trong lớp
            </div>

            @livewire('practice-room-rank-pagination')

        </div>


    </div>
@endsection
