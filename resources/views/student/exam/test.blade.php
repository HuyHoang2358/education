@extends('layouts.web')
@section('title', 'Đề thi')
@section('content')

    <div id="timer-sticky-header" class="bg-white flex justify-center py-4 sticky z-20 top-16 transition-transform">
        <div class="container flex justify-between px-3">
            <div class="flex items-center">
                <a class="back-button hover:text-orange-primary duration-200 text-blue-secondary text-lg font-medium"
                    href=""><i class="fa-solid fa-chevron-left"></i>
                    Thoát</a>
            </div>
            <div class="flex text-lg items-center gap-5">
                <div id="countdown-wrapper"
                    class="bg-orange-primary text-white flex items-center py-2 px-3 rounded-lg font-semibold gap-3">
                    <i id="countdown-icon" class="fa-regular fa-clock pt-[0.20rem]"></i>
                    <span id="countdown">00:00</span>
                </div>
                <p class="font-bold">
                    Đề thi thử THPT 2024 môn Tiếng Anh trường THPT Lam Sơn
                </p>
            </div>
            <button onclick="submitForm('{{ asset('assets/img/home/alert.png') }}')"
                class="group text-md text-neutral-50 font-semibold rounded-full w-fit py-2 items-center justify-center px-5 bg-[#0B8493] hover:bg-orange-primary duration-200 hover:scale-105 hover:shadow-md">
                Nộp bài
            </button>
        </div>
    </div>

    <div class="flex justify-center">
        <div class="flex container justify-center">

            <!-- PDF Viewer -->
            <div id="pdf-container" class="w-fit flex flex-col justify-center items-center py-4 gap-4">

            </div>

            <!-- Sidebar with question numbers -->
            <!-- Số lượng câu hỏi sẽ do người dùng khởi tạo -->
            <form id="questionForm" method="POST" action="{{ route('test.score') }}" class="p-4">
                @csrf
                <div class=" bg-white h-fit rounded-lg sticky top-36 shadow-md">
                    <h2 class="font-semibold mb-3 text-nowrap text-xl p-4">Bảng câu hỏi</h2>
                    <div class="max-h-96 overflow-y-scroll">
                        <div id="questionList" class="flex flex-col gap-5 px-6 py-3">
                            @for ($i = 1; $i <= 50; $i++)
                                <div class="flex gap-4 items-center hover:cursor-pointer">
                                    <p onclick="scrollToQuestion({{ $i }})" class="font-medium hover:text-white transition-all duration-150 ease-in-out py-1 px-[0.65rem] hover:bg-blue-secondary rounded-md">
                                        {{ $i }}.</p>
                                    <div class="flex font-medium gap-2">
                                        @foreach (['A', 'B', 'C', 'D'] as $option)
                                            <label
                                                class="option-box rounded-full bg-[#E2E8F0] py-2 px-4 hover:cursor-pointer hover:bg-[#0B8493] hover:text-white hover:border-[#0B8493] hover:shadow-md border-2 border-[#E2E8F0] active:scale-125 duration-200 ease-out"
                                                onclick="selectOption(this)">
                                                <input type="radio" name="answers[{{ $i }}]"
                                                    value="{{ $option }}" class="hidden">
                                                {{ $option }}
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="p-4 shadow-[0px_-10px_30px_-3px_rgba(0,0,0,0.10)]">
                        <button type="button" onclick="submitForm('{{ asset('assets/img/home/alert.png') }}')"
                            class="group text-md text-neutral-50 font-semibold rounded-full w-full py-2 items-center justify-center px-5 bg-[#0B8493] hover:bg-orange-primary duration-200 hover:scale-105 hover:shadow-md">
                            Nộp bài
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('assets/js/components/start_test.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.4.120/pdf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script id="pdf_script" data-pdf-url="{{ asset('/assets/img/exercise/tailieu.pdf') }}" src="{{ asset('assets/js/components/interactive_pdf.js') }}"></script>

@endsection
