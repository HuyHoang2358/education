@extends('layouts.web')
@section('title', 'Đề thi')
@section('content')

    <div id="timer-sticky-header" class="bg-white flex justify-center py-4 sticky z-20 top-16 transition-transform">
        <div class="container flex justify-between px-3">
            <div class="flex items-center">
                <a class="back-button hover:text-orange-primary duration-200 text-blue-secondary text-lg font-medium" href=""><i class="fa-solid fa-chevron-left"></i>
                    Thoát</a>
            </div>
            <div class="flex text-lg items-center gap-5">
                <div id="countdown-wrapper" class="bg-orange-primary text-white flex items-center py-2 px-3 rounded-lg font-semibold gap-3">
                    <i id="countdown-icon" class="fa-regular fa-clock pt-[0.20rem]"></i>
                    <span id="countdown">45:00</span>
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
            <form id="questionForm" method="POST" action="{{ route('test.score') }}" class="p-4">
                @csrf
                <div class=" bg-white h-fit rounded-lg sticky top-36 shadow-md">
                    <h2 class="font-semibold mb-3 text-nowrap text-xl p-4">Bảng câu hỏi</h2>
                    <div class="max-h-96 overflow-y-scroll">
                        <div id="questionList" class="flex flex-col gap-5 px-6 py-3">
                            @for ($i = 1; $i <= 10; $i++)
                                <div class="flex gap-4 items-center">
                                    <p class="font-medium">{{ $i }}.</p>
                                    <div class="flex font-medium gap-2">
                                        @foreach (['A', 'B', 'C', 'D'] as $option)
                                            <label class="option-box rounded-full bg-[#E2E8F0] py-2 px-4 hover:cursor-pointer hover:bg-[#0B8493] hover:text-white hover:border-[#0B8493] hover:shadow-md border-2 border-[#E2E8F0] active:scale-125 duration-200 ease-out" onclick="selectOption(this)">
                                                <input type="radio" name="answers[{{ $i }}]" value="{{ $option }}" class="hidden">
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

    <script>
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.4.120/pdf.worker.min.js';
        var pdfUrl = "{{ asset('/assets/img/exercise/tailieu.pdf') }}"; // PDF stored in public storage
        var pdfDoc = null;
        var scale = 2;
        var pdfContainer = document.getElementById('pdf-container');

        pdfjsLib.getDocument(pdfUrl).promise.then(function(pdf) {
            pdfDoc = pdf;
            renderAllPages(); // Load first page by default
        });

        function renderAllPages() {
            for (let pageNum = 1; pageNum <= pdfDoc.numPages; pageNum++) {
                renderPage(pageNum);
            }
        }

        function renderPage(pageNumber) {
            pdfDoc.getPage(pageNumber).then(function(page) {
                var viewport = page.getViewport({
                    scale: scale
                });

                // Create a new canvas for each page
                var canvas = document.createElement("canvas");
                canvas.classList.add(`pdf-canvas-${pageNumber}`) // Add a class for styling
                canvas.classList.add(`pdf-canvas-size`);
                pdfContainer.appendChild(canvas);

                var context = canvas.getContext("2d");
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                var renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };
                page.render(renderContext);
            });
        }

        // function scrollToQuestion(questionNumber) {
        //     let found = false; // Track if the question is found

        //     for (let pageNum = 1; pageNum <= pdfDoc.numPages; pageNum++) { 
        //         pdfDoc.getPage(pageNum).then(function(page) {
        //             page.getTextContent().then(function(textContent) {
        //                 let textItems = textContent.items;
        //                 let canvas = document.querySelector(
        //                 `.pdf-canvas-${pageNum}`); // Target the correct canvas
        //                 let ctx = canvas.getContext("2d");

        //                 if(pageNum == 1){
        //                     console.log(textItems);
        //                 }

        //                 for (let i = 0; i < textItems.length; i++) {
        //                     if (textItems[i].str.includes("Question " + questionNumber + ":")) {
        //                         let x = textItems[i].transform[4]; // X Position
        //                         let y = textItems[i].transform[5]; // Y Position

        //                         //console.log(canvas);

        //                         // Scroll to the corresponding page
        //                         canvas.scrollIntoView({
        //                             behavior: "smooth"
        //                         });

        //                         // Highlight the found question
        //                         ctx.fillStyle = "rgba(255, 255, 0, 0.4)";
        //                         ctx.fillRect(x, y - 20, canvas.width - 50, 30); // Highlight area around the text

        //                         console.log(
        //                             `Highlighted "Question ${questionNumber}" on page ${pageNum} at (${x}, ${y})`
        //                             );
        //                         found = true;
        //                         break;
        //                     }
        //                 }
        //             });
        //         });
        //     }

        //     if (!found) {
        //         console.log(`Question ${questionNumber} not found.`);
        //     }
        // }
    </script>

@endsection
