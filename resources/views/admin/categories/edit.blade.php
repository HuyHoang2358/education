@extends('admin.layouts.admin')

@section('content')
    <div class="page-header">
        <h3 class="fw-bold mb-3">Sửa danh mục</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Sửa danh mục</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('categories.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Tên danh mục</label>
                            <input placeholder="Tên danh mục" type="text" class="form-control" id="name" name="name"
                                value="{{ $category->name }}" required />
                        </div>
                        <div class="form-group mt-3">
                            <label for="type">Loại danh mục</label>
                            <select name="type" id="type" class="form-control">
                                <option value="class" {{ $category->type == 'class' ? 'selected' : '' }}>Lớp</option>
                                <option value="subject" {{ $category->type == 'subject' ? 'selected' : '' }}>Môn học
                                </option>
                                <option value="sub_subject" {{ $category->type == 'sub_subject' ? 'selected' : '' }}>Chuyên
                                    đề</option>
                                <option value="section" {{ $category->type == 'section' ? 'selected' : '' }}>Phần</option>
                                <option value="topic" {{ $category->type == 'topic' ? 'selected' : '' }}>Chủ đề</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug"
                                value="{{ $category->slug }}" required />
                        </div>
                        <div class="card-action mt-3">
                            <button type="submit" class="btn btn-success">Cập nhật</button>
                            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Quay lại</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
