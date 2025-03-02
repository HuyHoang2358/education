@extends('admin.layouts.admin')

@section('content')
    <div class="page-header">
        <h3 class="fw-bold mb-3">Thêm danh mục</h3>
    </div>
    <div class="card">
        <div class="card-header">Thêm danh mục</div>
        <div class="card-body">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Tên danh mục</label>
                    <input placeholder="Tên danh mục" type="text" class="form-control" id="name" name="name"
                        required />
                </div>
                <div class="form-group">
                    <label for="type">Loại</label>
                    <select class="form-control" id="type" name="type" required>
                        <option value="class">Lớp</option>
                        <option value="subject">Môn học</option>
                        <option value="sub_subject">Chuyên đề</option>
                        <option value="section">Phần</option>
                        <option value="topic">Chủ đề</option>
                    </select>
                </div>
                <div class="card-action">
                    <button type="submit" class="btn btn-success">Thêm mới</button>
                </div>
            </form>
        </div>
    </div>
@endsection
