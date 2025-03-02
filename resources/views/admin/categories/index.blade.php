@extends('admin.layouts.admin')

@section('content')
    <div class="page-header">
        <h3 class="fw-bold mb-3">Danh sách danh mục</h3>
    </div>
    <div class="text-end mb-2">
        <a href="{{ route('categories.create') }}" class="btn btn-secondary">Thêm mới</a>
    </div>
    <div class="card">
        <div class="card-header">Danh sách danh mục</div>
        <div class="card-body">
            <form method="GET" action="{{ route('categories.index') }}" class="d-flex mb-3">
                <div class="col-lg-3 me-2">
                    <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Tìm kiếm theo tên">
                </div>
                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên danh mục</th>
                        <th>Loại</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $key => $category)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->type }}</td>
                            <td>
                                <a href="{{ route('categories.edit', $category->id) }}"
                                    class="btn btn-warning btn-sm">Sửa</a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $categories->links() }}
        </div>
    </div>
@endsection
