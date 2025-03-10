@extends('layouts.web')
@section('title') Cuộc thi @endsection
@section('content')
    <div style="background-image: url('{{ asset('/assets/img/home/bg-contest.png') }}')" class="bg-contain bg-no-repeat">
        <div class="max-w-7xl mx-auto p-4">
            @include('components.breadcrumb',["breadcrumbs" => [
                ["name" => "Cuộc thi", "route" => route('contest.index')],
            ]])
            <div class="container">
                <div class="flex gap-8 items-center my-14 flex-col">
                    <h1 class="text-5xl font-semibold">Tổng hợp cuộc thi</h1>
                    <label class="text-[#525266] text-xl">Phân tách và tổng hợp thành các đề thi có phân chia mức độ từ dễ đến khó, giúp bạn dễ dàng học tập.</label>
                </div>

                <div class="grid grid-cols-2 gap-12 mb-10">
                    @for( $i = 0; $i <= 3; $i++)
                        <div class="duration-500 group relative rounded-2xl border-2 hover:mb-72 max-h-fit border-[#0B8493] hover:cursor-pointer hover:scale-105 hover:shadow-xl z-0">
                            <div class="overflow-hidden rounded-2xl">
                                <img src="{{ asset('/assets/img/home/contest-card-bg.png')}}" alt="">
                            </div>
                            <div class="animate-openup group-hover:flex absolute -bottom-[17rem] inset-x-12 bg-white hidden py-5 px-8 items-center flex-col rounded-lg shadow-[0px_6px_0px_6px_rgba(255,128,64,1)] z-20 gap-5">
                                <h4 class="uppercase bg-[#FF8040] text-white rounded-full px-3 py-2 text-base font-bold">
                                    Cuộc thi tiếng Anh
                                </h4>
                                <h3 class="text-2xl font-bold text-center">
                                    Cuộc thi <span class="capitalize">"Tự tin vươn mình thế giới"</span>
                                </h3>
                                <p class="text-center text-[#525266]">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora reprehenderit iure fugit adipisci iusto odio iste ullam nam accusamus voluptatibus, sit obcaecati aperiam dicta commodi doloribus nulla? Voluptatibus, repudiandae esse!
                                </p>
                                @php
                                    $steps = [
                                        ["number" => 1, "name" => "Đăng ký", "status" => "Done"],
                                        ["number" => 2, "name" => "Diễn ra", "status" => "Active"],
                                        ["number" => 3, "name" => "Kết thúc", "status" => "Inactive"],
                                    ]
                                @endphp
                                <div class="flex gap-5 w-full">
                                    @include('components.progress', ['steps' => $steps])
                                </div>
                                <div class="my-1">
                                    <x-button_animation_1 href="{{ route('contest.detail', 'test') }}" content='Tham gia ngay' class="bg-[#0B8493] w-fit px-10 py-2 rounded-full font-medium group/button-animated relative inline-flex items-center justify-center overflow-hidden text-white hover:cursor-pointer"/>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

        </div>
    </div>

@endsection
