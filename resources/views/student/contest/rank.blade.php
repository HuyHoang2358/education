@extends('layouts.web')
@section('title') Bảng xếp hạng @endsection
@section('contest-rank')
    <div class="max-w-7xl mx-auto p-4">
        <!-- Breadcrumbs -->
        @include('component.breadcrumb',["breadcrumbs" => [
                 ["name" => "Cuộc thi", "route" => route('contest.index')],
                 ['name' => 'Tự tin vươn mình thế giới', 'route' => route('contest.detail', 'test')],
                 ['name' => 'Bảng xếp hạng', 'route' => route('contest.detail.rank', 'test')],
             ]])


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
                <!-- Progress -->
                <div class="flex gap-5 w-full justify-between mb-5">
                    @php
                        $steps = [
                            ["number" => 1, "name" => "Đăng ký", "status" => "Done"],
                            ["number" => 2, "name" => "Diễn ra", "status" => "Active"],
                            ["number" => 3, "name" => "Kết thúc", "status" => "Inactive"],
                        ]
                    @endphp
                    @include('component.progress', ['steps' => $steps])
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

            @livewire('ranking-pagination')

        </div>


    </div>
@endsection
