@extends('admin.layouts.adminApp')
@section('title', 'Quản lý Vai trò')
@section('breadcrumb')
    <nav aria-label="breadcrumb" class="-intro-x h-[45px] mr-auto">
        <ol class="breadcrumb breadcrumb-light">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Trang Quản trị viên</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#">Quản lý Vai trò</a></li>
        </ol>
    </nav>
@endsection

<!-- Define route for delete action -->
{{-- @php($routeDelete = route('role.destroy')) --}}

@section('content')

    <div class="intro-y box">
        <!-- Table title -->
        @include('admin.common.titleTable', [
            'title' => 'Danh sách vai trò',
            'routeAdd' => route('role.store'),
            'titleButton' => 'Thêm mới vai trò',
        ])
        <!-- End Table title -->

        <!-- BEGIN: HTML Table Data -->
        @include('admin.common.indexTable', [
            'list' => $roles,
            'excludedColumns' => ['id', 'created_at', 'updated_at'],
            'columnTranslations' => [
                'name' => 'Tên vai trò',
                'description' => 'Mô tả',
            ],
        ])
    </div>
@endsection
