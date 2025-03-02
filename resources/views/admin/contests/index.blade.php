@extends('admin.layouts.admin')

@section('content')
    <div class="page-header">
        <h3 class="fw-bold mb-3">Danh sách cuộc thi</h3>
    </div>
    <div class="text-end mb-2">
        <a href="{{ route('contests.create') }}" class="btn btn-secondary">Thêm mới</a>
    </div>
    <div class="card">
        <div class="card-header">Danh sách cuộc thi</div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Hình ảnh</th>
                        <th>Tiêu đề</th>
                        <th>Loại</th>
                        <th>Thời gian bắt đầu</th>
                        <th>Thời gian kết thúc</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contests as $key => $contest)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td><img src="{{ asset('storage/' . $contest->image) }}" width="100"></td>
                            <td>{{ $contest->title }}</td>
                            <td>{{ $contest->type }}</td>
                            <td>{{ $contest->start_time }}</td>
                            <td>{{ $contest->end_time }}</td>
                            <td>
                                <a href="{{ route('contests.edit', $contest->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                                <form action="{{ route('contests.destroy', $contest->id) }}" method="POST"
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
            {{ $contests->links() }}
        </div>
    </div>
@endsection
