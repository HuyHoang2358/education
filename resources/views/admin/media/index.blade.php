@extends('admin.layouts.adminApp')
@section('title', 'Quản lý hình ảnh')
@section('breadcrumb')
    <nav aria-label="breadcrumb" class="-intro-x h-[45px] mr-auto">
        <ol class="breadcrumb breadcrumb-light">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Trang quản trị viên</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <a href="{{route('admin.media.image')}}">Quản lý hình ảnh</a>
            </li>
        </ol>
    </nav>
@endsection
@section('content')
    <iframe src="/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
@endsection
