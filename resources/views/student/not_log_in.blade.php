@extends('layouts.web')
@section('title') Chưa đăng nhập @endsection
@section('content')
    <div style="background-image: url('{{ asset('/assets/img/home/Decor.png') }}')" class="bg-cover bg-no-repeat w-full pb-24">
        <div class="max-w-7xl mx-auto p-4">
            @include('components.breadcrumb',["breadcrumbs" => [
                ["name" => "Phòng luyện tập", "route" => route('practice_room.index')],
            ]])
        </div>
        <div class="flex justify-center flex-col items-center gap-5">
            <img src="{{ asset('/assets/img/home/travel.png') }}" alt="">
            <div class="text-center">
                <p class="text-2xl font-bold pb-3">Chưa đăng nhập</p>
                <p class="text-xl text-light-gray">Bạn cần đăng nhập để sử dụng tính năng <br> Phòng Luyện Tập bạn nhé!</p>
            </div>
            <a href="{{ route('practice_room.index') }}" type="submit" class="group rounded-full relative inline-flex h-12 items-center justify-center overflow-hidden bg-[#0B8493] px-10 font-medium text-white"><span class="absolute h-0 w-0 rounded-full bg-[#FF8040] transition-all duration-300 group-hover:h-56 group-hover:w-full"></span><span class="relative">Đăng nhập</span></a>
        </div>
    </div>

@endsection
