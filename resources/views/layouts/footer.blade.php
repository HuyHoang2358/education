<footer class="bg-teal-900 text-white py-8 px-10">
    <div class="grid grid-cols-5 px-32">
        <div>
            <a href="#">
                <div class="h-16 w-56 bg-red-600">
                    logo
                </div>
            </a>
            <ul>
                <li class="text-xl font-bold py-3">Giới thiệu</li>
                <li><a href="#">Tổng quan chung</a></li>
                <li><a href="#">Tổng quan chung</a></li>
            </ul>
        </div>
        <div class="text-center">
            <h4 class="text-xl font-bold">Thông tin</h4>
            <ul class="pt-3 flex flex-col gap-1">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Đề thi</a></li>
                <li><a href="#">Luyện tập</a></li>
                <li><a href="#">Cuộc thi</a></li>
                <li><a href="#">Thông tin</a> </li>
            </ul>
        </div>
        <div>
            <h4 class="text-lg font-bold">Mạng xã hội</h4>
            <div class="text-3xl grid grid-cols-4 gap-3 mr-24 pt-3">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-tiktok"></i></a>
            </div>
        </div>
        <div class="pr-10">
            <h4 class="text-xl font-bold pb-1">Tên công ty</h4>
            <p>Công ty TNHH Tên Công ty</p>
            <h4 class="text-xl font-bold pb-1 pt-2">Trụ sở chính</h4>
            <p>Địa chỉ nhà,tên đường, phuờng, quận, tỉnh</p>
        </div>
        <div class="flex flex-col gap-3">
            <a href="#" class="hover:scale-110">
                <div class="flex gap-2 items-center justify-center py-3 border-2 border-white">
                    <i class="fa-solid fa-user text-lg"></i>
                    <p>Liên hệ</p>
                </div>
            </a>
            <a href="#" class="hover:scale-110">
                <div class="flex gap-2 items-center justify-center py-3 border-2 border-white">
                    <i class="fa-solid fa-mobile-screen text-lg"></i>
                    (+84) 0000000
                </div>
            </a>
            <a href="#" class="hover:scale-110">
                <div class="flex gap-2 items-center justify-center py-3 border-2 border-white">
                    <i class="fa-solid fa-map-location-dot text-lg"></i>
                    <p>Bản đồ và chỉ dẫn</p>
                </div>
            </a>

        </div>
    </div>

    <div class="flex flex-col justify-center mb-16 mt-10">
        <!-- Nút bấm -->
        <div class="w-full flex justify-center">
            <button id="toggleButton" class="w-fit px-2 py-2 bg-white  text-teal-900  rounded-full transition-all duration-300">
                <svg id="arrowIcon" class="w-8 h-8 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
        </div>

        <!-- Nội dung cần ẩn/hiện -->
        <div id="content" class="mt-10 transition-all duration-300 hidden">
            <div class="flex justify-center">
                <p class="border-r-2 border-white w-fit px-3 font-semibold text-lg">Chính sách</p>
                <p class="border-r-2 border-white w-fit px-3 font-semibold text-lg">Chính sách</p>
                <p class="border-r-2 border-white w-fit px-3 font-semibold text-lg">Chính sách</p>
                <p class="border-r-2 border-white w-fit px-3 font-semibold text-lg">Chính sách</p>
                <p class="border-r-2 border-white w-fit px-3 font-semibold text-lg">Chính sách</p>
                <p class="w-fit px-3 font-semibold text-lg">Chính sách</p>
            </div>
        </div>
    </div>


    <!-- Copyright -->
    <div class="text-center border-t border-white mt-6 pt-4 text-sm">
        © TENCONGTY Copyright 2024. All Rights Reserved.
    </div>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const toggleButton = document.getElementById("toggleButton");
        const content = document.getElementById("content");
        const arrowIcon = document.getElementById("arrowIcon");

        toggleButton.addEventListener("click", function () {
            const isHidden = content.classList.contains("hidden");

            if (isHidden) {
                content.classList.remove("hidden");
                setTimeout(() => {
                    content.classList.remove("opacity-0", "scale-95");
                    content.classList.add("opacity-100", "scale-100");
                }, 10);
                arrowIcon.classList.add("rotate-180");
            } else {
                content.classList.remove("opacity-100", "scale-100");
                content.classList.add("opacity-0", "scale-95");
                arrowIcon.classList.remove("rotate-180");

                setTimeout(() => {
                    content.classList.add("hidden");
                }, 300);
            }
        });
    });
</script>
