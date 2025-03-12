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
            @include('components.answer_submit_form', ['test_type' => $type])
        </div>
    </div>

    <script src="{{ asset('assets/js/components/start_test.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.4.120/pdf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script id="pdf_script" data-pdf-url="{{ asset('/assets/img/exercise/tailieu.pdf') }}" src="{{ asset('assets/js/components/interactive_pdf.js') }}"></script>

    <style>
        .pdf-canvas-size {
            width: 85% !important;
            /* Adjust this percentage to your preferred size */
            height: auto !important;
            /* Maintain aspect ratio */
            display: block;
            /* margin: auto; */
        }
    </style>

@endsection
