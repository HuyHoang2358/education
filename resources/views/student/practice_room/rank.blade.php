@extends('layouts.web')
@section('title') Bảng xếp hạng @endsection
@section('practice_room-rank')
    <div class="max-w-7xl mx-auto p-4">
        <!-- Breadcrumbs -->
        @include('components.breadcrumb',["breadcrumbs" => [
                 ["name" => "Phòng luyện tập", "route" => route('practice_room.index')],
                 ['name' => 'Tiếng Anh lớp 12', 'route' => ''],
                 ['name' => 'Bảng xếp hạng', 'route' => route('practice_room.detail.rank', 'test')],
             ]])


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
