@extends('admin.layouts.admin')

@section('content')
    <div class="page-header">
        <h3 class="fw-bold mb-3">Danh sách đề thi</h3>
    </div>
    <div class="text-end mb-2">
        <a href="{{ route('exams.create') }}" class="btn btn-secondary">Thêm mới</a>
    </div>
    <div class="card">
        <div class="card-header">Danh sách đề thi</div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tiêu đề</th>
                        <th>Môn học</th>
                        <th>Năm</th>
                        <th>Tỉnh</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($exams as $key => $exam)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $exam->title }}</td>
                            <td>{{ $exam->subject->name }}</td>
                            <td>{{ $exam->year }}</td>
                            <td>{{ $exam->province }}</td>
                            <td>
                                <a href="{{ route('exams.edit', $exam->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                                <form action="{{ route('exams.destroy', $exam->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                                </form>
                                <a href="{{ asset('storage/' . $exam->file) }}" target="_blank"
                                    class="btn btn-info btn-sm">Xem file</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $exams->links() }}
        </div>
    </div>
@endsection
