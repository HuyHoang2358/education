@extends('admin.layouts.adminApp')
@section('title', 'Danh sách tỉnh, thành phố')
@section('breadcrumb')
    <nav aria-label="breadcrumb" class="-intro-x h-[45px] mr-auto">
        <ol class="breadcrumb breadcrumb-light">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Trang Quản trị viên</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#">Danh sách tỉnh, thành phố</a></li>
        </ol>
    </nav>
@endsection

<!-- Define route for delete action -->
{{-- @php($routeDelete = route('role.destroy')) --}}

@section('content')

    <div class="intro-y box">
        <!-- Table title -->
        @include('admin.common.titleTable', [
            'title' => 'Danh sách tỉnh thành',
        ])
        <!-- End Table title -->

        <!-- BEGIN: HTML Table Data -->
        @include('admin.common.indexTable', [
            'list' => $provinces,
            'columnTranslations' => [
                'name' => 'Tên tỉnh thành',
            ],
            'needAction' => false
        ])
    </div>
@endsection
