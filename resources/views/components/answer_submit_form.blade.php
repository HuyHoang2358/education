@if ($type == 'trac-nghiem')
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
                            <p onclick="scrollToQuestion({{ $i }})"
                                class="font-medium hover:text-white transition-all duration-150 ease-in-out py-1 px-[0.65rem] hover:bg-blue-secondary rounded-md">
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
@else
    <!-- Sidebar with question numbers -->
    <!-- Số lượng câu hỏi sẽ do người dùng khởi tạo -->
    <!-- Xây dựng logic để kiểm tra đề trắc nghiệm và tự luận -->
    <form id="questionForm" class="p-4">
        @csrf
        <div class=" bg-white h-fit rounded-lg sticky top-36 shadow-md">
            <h2 class="font-semibold mb-3 text-nowrap text-xl p-4">Bảng câu hỏi</h2>
            <div class="max-h-96 overflow-y-scroll">
                <div id="questionList" class="flex flex-col gap-5 px-6 py-3">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="flex flex-col gap-2">
                            <p id = "answer-number-{{ $i }}"
                                class="rounded-full bg-[#E2E8F0] py-2 px-[0.85rem] hover:cursor-pointer border border-[#E2E8F0] duration-200 ease-out w-fit">
                                {{ $i }}.</p>
                            <!-- Custom File Upload -->
                            <div class="">
                                <div class="flex gap-3 justify-between">
                                    <label id="fileLabel-{{ $i }}" for="fileUpload-{{ $i }}"
                                        class="cursor-pointer flex items-center gap-3 py-3 px-10 bg-[#EDFAF9] border-2 border-[#0B8493] rounded-lg text-[#0B8493] hover:bg-gray-200 transition text-nowrap">
                                        <span class="w-full"><i class="fa-solid fa-arrow-up-from-bracket"></i> Tải tệp lên</span>
                                    </label>
                                    <button type="button" id="delete-button-{{ $i }}" class="text-[#FF5533] hidden" onclick="removeFileUpload({{ $i }}, this)"><i class="fa-solid fa-trash"></i></button>
                                </div>
                                <input type="file" id="fileUpload-{{ $i }}" name="fileUpload"
                                    accept=".zip,.jpg,.jpeg,.png,.gif,.docx,.csv" class="hidden"
                                    onchange="updateFileLabel({{$i}})">
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

@endif
