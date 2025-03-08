<div class="grid grid-row-2 text-light-gray border border-[#CBD5E1] p-4 rounded-xl hover:shadow-lg hover:scale-105 transition-transform hover:cursor-pointer">
    <!-- First section -->
    <div class="border-b-2 pb-4 flex justify-between">
        <!-- Room info -->
        <div class="flex flex-col gap-3">
            <div class="flex gap-3">
                <div class="flex gap-2 items-center">
                    <i class="fa-regular fa-user"></i>
                    16 học sinh
                </div>
                <!-- Devider -->
                <div class="w-[1px] h-5 bg-[#CBD5E1]"> </div>
                <div class="flex gap-2 items-center">
                    <i class="fa-solid fa-location-dot"></i>
                    TP. Hồ Chí Minh
                </div>
            </div>
            <!-- Room name and description -->
            <div>
                <div class="text-lg font-bold text-full-black">
                    Tên Phòng 01
                </div>
                <div>
                    <p>Mô tả / Giới thiệu Do giáo viên viết ở đây</p>
                </div>
            </div>
            <!-- Room memebers-->
            <div>
                <p class="text-full-black font-bold">Học viên:</p>
                <div class="relative">
                    <div class="absolute left-[9.75rem] top-3 bg-[#BCEDF4] font-bold px-[0.70rem] py-[0.90rem] text-center rounded-full">
                       +12
                    </div>
                    <div class="absolute left-28 top-3">
                        <x-rank_frame size="45" avatar="/assets/img/home/Avatar.png" rank="3"/>
                    </div>
                    <div class="absolute left-12 top-0">
                        <x-rank_frame size="51" avatar="/assets/img/home/Avatar.png" rank="2"/>
                    </div>
                    <x-rank_frame class="pt-0" size="50" avatar="/assets/img/home/Avatar.png" rank="1"/>
                </div>
            </div>
        </div>
        <!-- Teacher Avatar -->
        <div class="bg-[#F1F5F9] p-4 rounded-xl h-fit flex flex-col items-center">
            <img class="spin-vertical" src="{{ asset('/assets/img/home/teacher.png') }}" alt="">
            <p class="font-bold text-full-black">Mr. Nguyễn Văn A</p>
            <p class="text-sm">Giáo viên Tiếng Anh</p>
        </div>
    </div>
    <!-- Second section -->
    <div class="flex justify-between pt-3 items-center">
        <div class="flex justify-between w-fit gap-3 h-fit">
            <div class="uppercase font-bold flex items-center gap-2 text-[#02CFD8]">
                <i class="fa-solid fa-circle text-xs"></i>
                Không tính phí
            </div>
            <div class="w-[2px] h-5 bg-[#CBD5E1]"> </div>
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-book-open"></i>
                16 buổi
            </div>
        </div>
        <a class="group font-semibold rounded-full relative inline-flex items-center w-10 justify-center overflow-hidden bg-[#0B8493] basis-44 py-3">
            <div
                class="inline-flex text-nowrap translate-y-0 items-center justify-center px-6 text-neutral-50 transition duration-500 group-hover:-translate-y-[150%]">
                Vào phòng</div>
            <div
                class="absolute inline-flex py-5 w-full translate-y-[100%] items-center justify-center text-neutral-50 transition duration-500 group-hover:translate-y-0">
                    <span
                        class="absolute h-full w-full translate-y-full skew-y-6 scale-y-0 bg-orange-400 transition duration-500 group-hover:translate-y-0 group-hover:scale-150"></span><span
                    class="z-10">Vào phòng</span></div>
        </a>
    </div>
</div>