<div class="border-2 border-[#CBD5E1] rounded-2xl px-4">
    <!-- Toggle button-->
    <div class="toggleButton flex justify-between py-4 hover:cursor-pointer">
        <p class="text-full-black font-medium">Buổi 1: Ngữ pháp cơ bản</p>
        <div class="text-blue-secondary font-medium flex gap-2 items-center"><span class = "buttonContent" num_of_exercise="4">Xem thêm 4 bài tập </span><i
                class="fa-solid fa-chevron-down pointer-events-none chevronIcon"></i></div>
    </div>

    <!-- class sections wrapper -->
    <!-- Sau này thay bằng điều kiện của bài tập -->
    <div class="hidden mb-6">
        @for ($i = 1; $i <= 4; $i++)
            <!-- class sections -->
            <div class="relative flex text-lg font-medium gap-5 items-center group @if($i != 4) hover:cursor-pointer @endif">

                <div class="w-[1.5px] absolute z-0 left-7 bg-[#CBD5E1] h-24"></div>

                <div
                    class="@if ($i == 1) class-section-active @else class-section-not-active @endif z-10 py-3 px-5 text-2xl font-bold rounded-full h-fit border-2 border-white">
                    {{ $i }}
                </div>

                @if($i == 3)
                    <div
                        class="flex justify-between items-center w-full @if ($i == 1) border-y-2 @else border-b-2 @endif h-full border-[#CBD5E1] py-4">
                        <p class="text-full-black group-hover:text-blue-secondary duration-200">Thì chủ động đầu
                            tiên trong tiếng Anh - Hiện tại đơn</p>
                            <div class="class-section-not-active px-[0.85rem] py-2 rounded-full text-lg">
                                <i class="fa-solid fa-check"></i>
                            </div>
                    </div>
                @elseif($i == 4)
                    <div
                    class="flex justify-between items-center w-full @if ($i == 1) border-y-2 @else border-b-2 @endif h-full border-[#CBD5E1] py-4">
                    <p class="text-[#94A3B8] duration-200">Thì chủ động đầu
                        tiên trong tiếng Anh - Hiện tại đơn</p>
                        <div class="class-section-not-active px-[0.85rem] py-2 rounded-full text-lg">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                    </div>
                @else
                    <div
                        class="flex justify-between items-center w-full @if ($i == 1) border-y-2 @else border-b-2 @endif h-full border-[#CBD5E1] py-4">
                        <p class="text-full-black group-hover:text-blue-secondary duration-200">Thì chủ động đầu
                            tiên trong tiếng Anh - Hiện tại đơn</p>
                            <div>
                                <p class="text-sm">Bạn nhận được</p>
                                <div class="flex font-medium text-full-black justify-end gap-1">
                                    340 <img width="26" height="16"
                                        src="{{ asset('/assets/img/home/Flash lime big.png') }}" alt="">
                                </div>
                            </div>
                    </div>
                @endif
            </div>
        @endfor
    </div>
</div>

