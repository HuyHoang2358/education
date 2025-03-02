@extends('admin.layouts.admin')

@section('content')
    <div class="page-header">
        <h3 class="fw-bold mb-3">Thêm cuộc thi</h3>
    </div>
    <div class="card">
        <div class="card-header">Thêm cuộc thi</div>
        <div class="card-body">
            <form action="{{ route('contests.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Hình ảnh</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="title">Tiêu đề</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="description">Mô tả</label>
                    <textarea class="form-control" id="description" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="content">Nội dung</label>
                    <textarea class="form-control" id="content" name="content"></textarea>
                </div>
                <div class="form-group">
                    <label for="type">Loại</label>
                    <input type="text" class="form-control" id="type" name="type" required>
                </div>
                <div class="form-group">
                    <label for="exam_id">Chọn đề thi</label>
                    <select class="form-control" id="exam_id" name="exam_id" required>
                        <option value="">-- Chọn đề thi --</option>
                        @foreach ($exams as $exam)
                            <option value="{{ $exam->id }}">{{ $exam->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="start_time">Thời gian bắt đầu</label>
                    <input type="text" class="form-control" id="start_time" name="start_time"
                        placeholder="Chọn thời gian bắt đầu" required>
                </div>
                <div class="form-group">
                    <label for="end_time">Thời gian kết thúc</label>
                    <input type="text" class="form-control" id="end_time" name="end_time"
                        placeholder="Chọn thời gian kết thúc" required>
                </div>
                <div class="card-action">
                    <button type="submit" class="btn btn-success">Thêm mới</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Kích hoạt Flatpickr cho cả hai input
            flatpickr("#start_time", {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
                time_24hr: true,
            });

            flatpickr("#end_time", {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
                time_24hr: true,
            });
        });
    </script>
@endsection
