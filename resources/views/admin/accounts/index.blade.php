@extends('admin.layouts.adminApp')
@section('title', 'Quản lý Tài khoản')
@section('breadcrumb')
    <nav aria-label="breadcrumb" class="-intro-x h-[45px] mr-auto">
        <ol class="breadcrumb breadcrumb-light">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Trang Quản trị viên</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#">Quản lý Tài khoản</a></li>
        </ol>
    </nav>
@endsection

<!-- Define route for delete action -->
{{-- @php($routeDelete = route('role.destroy')) --}}

@section('content')

    <div class="intro-y box">
        <!-- Table title -->
        @include('admin.common.titleTable', [
            'title' => 'Danh sách tài khoản',
            'routeAdd' => route('role.store'),
            'titleButton' => 'Thêm mới tài khoản',
        ])
        <!-- End Table title -->

        <!-- BEGIN: HTML Table Data -->
        @include('admin.common.indexTable', [
            'list' => $users,
            'excludedColumns' => ['id', 'created_at', 'updated_at', 'password', 'google_id', 'facebook_id', 'is_lock', 'role_id'],
            'columnTranslations' => [
                'name' => 'Tên người dùng',
            ],
        ])
    </div>
@endsection