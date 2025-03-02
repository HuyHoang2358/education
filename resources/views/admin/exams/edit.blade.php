@extends('admin.layouts.admin')

@section('content')
    <div class="page-header">
        <h3 class="fw-bold mb-3">Chỉnh sửa đề thi</h3>
    </div>

    <div class="card">
        <div class="card-header">Chỉnh sửa đề thi</div>
        <div class="card-body">
            <form action="{{ route('exams.update', $exam->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Tiêu đề</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ old('title', $exam->title) }}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="subject_id">Môn học</label>
                            <select class="form-control" id="subject_id" name="subject_id" required>
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}"
                                        {{ $exam->subject_id == $subject->id ? 'selected' : '' }}>
                                        {{ $subject->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <label for="file">Tải lên đề thi (PDF)</label>
                    <input type="file" class="form-control" id="file" name="file" accept=".pdf">
                    @if ($exam->file)
                        <div class="mt-2">
                            <strong>File hiện tại:</strong>
                            <a href="{{ asset('storage/' . $exam->file) }}" target="_blank" class="text-primary">
                                Xem file
                            </a>
                        </div>
                    @endif
                </div>

                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="rating">Đánh giá</label>
                            <input type="number" class="form-control" id="rating" name="rating"
                                value="{{ old('rating', $exam->rating) }}" min="0" max="5">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="year">Năm</label>
                            <select class="form-control" id="year" name="year" required>
                                <option value="" disabled>Chọn năm</option>
                                @for ($i = date('Y'); $i >= 2000; $i--)
                                    <option value="{{ $i }}" {{ $exam->year == $i ? 'selected' : '' }}>
                                        {{ $i }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="province">Tỉnh/Thành phố</label>
                            @php
                                $provinces = [
                                    'An Giang',
                                    'Bà Rịa - Vũng Tàu',
                                    'Bắc Giang',
                                    'Bắc Kạn',
                                    'Bạc Liêu',
                                    'Bắc Ninh',
                                    'Bến Tre',
                                    'Bình Định',
                                    'Bình Dương',
                                    'Bình Phước',
                                    'Bình Thuận',
                                    'Cà Mau',
                                    'Cần Thơ',
                                    'Cao Bằng',
                                    'Đà Nẵng',
                                    'Đắk Lắk',
                                    'Đắk Nông',
                                    'Điện Biên',
                                    'Đồng Nai',
                                    'Đồng Tháp',
                                    'Gia Lai',
                                    'Hà Giang',
                                    'Hà Nam',
                                    'Hà Nội',
                                    'Hà Tĩnh',
                                    'Hải Dương',
                                    'Hải Phòng',
                                    'Hậu Giang',
                                    'Hòa Bình',
                                    'Hưng Yên',
                                    'Khánh Hòa',
                                    'Kiên Giang',
                                    'Kon Tum',
                                    'Lai Châu',
                                    'Lâm Đồng',
                                    'Lạng Sơn',
                                    'Lào Cai',
                                    'Long An',
                                    'Nam Định',
                                    'Nghệ An',
                                    'Ninh Bình',
                                    'Ninh Thuận',
                                    'Phú Thọ',
                                    'Phú Yên',
                                    'Quảng Bình',
                                    'Quảng Nam',
                                    'Quảng Ngãi',
                                    'Quảng Ninh',
                                    'Quảng Trị',
                                    'Sóc Trăng',
                                    'Sơn La',
                                    'Tây Ninh',
                                    'Thái Bình',
                                    'Thái Nguyên',
                                    'Thanh Hóa',
                                    'Thừa Thiên Huế',
                                    'Tiền Giang',
                                    'TP. Hồ Chí Minh',
                                    'Trà Vinh',
                                    'Tuyên Quang',
                                    'Vĩnh Long',
                                    'Vĩnh Phúc',
                                    'Yên Bái',
                                ];
                            @endphp
                            <select class="form-control" id="province" name="province" required>
                                <option value="" disabled>Chọn tỉnh/thành phố</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province }}"
                                        {{ $exam->province == $province ? 'selected' : '' }}>
                                        {{ $province }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card-action mt-4 text-end">
                    <button type="submit" class="btn btn-primary me-2">Cập nhật</button>
                    <a href="{{ route('exams.index') }}" class="btn btn-secondary">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
@endsection
