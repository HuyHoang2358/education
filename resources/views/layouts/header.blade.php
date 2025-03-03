<header class="bg-teal-800 text-white">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <div class="text-2xl font-bold"><a href="{{ route('home') }}" class="text-red-500">LOGO 1</a></div>
        <nav class="flex items-center space-x-6">
            <a href="#" class="bg-orange-500 text-white px-4 py-2 rounded-full">Trang chủ</a>
            <div class="relative group">
                <button class="hover:text-orange-400">Đề thi ▼</button>
                <div class="absolute left-0 hidden group-hover:block bg-white text-black mt-2 w-40 rounded shadow">
                    <a href="#" class="block px-4 py-2 hover:bg-gray-200">Toán</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-200">Văn</a>
                </div>
            </div>
            <div class="relative group">
                <button class="hover:text-orange-400">Luyện tập ▼</button>
                <div class="absolute left-0 hidden group-hover:block bg-white text-black mt-2 w-40 rounded shadow">
                    <a href="#" class="block px-4 py-2 hover:bg-gray-200">Trắc nghiệm</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-200">Tự luận</a>
                </div>
            </div>
            <a href="#" class="hover:text-orange-400">Cuộc thi</a>
            <a href="#" class="hover:text-orange-400">Xếp hạng</a>
            <div class="relative group">
                <button class="hover:text-orange-400">Thông tin ▼</button>
                <div class="absolute left-0 hidden group-hover:block bg-white text-black mt-2 w-40 rounded shadow">
                    <a href="#" class="block px-4 py-2 hover:bg-gray-200">Hướng dẫn</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-200">Liên hệ</a>
                </div>
            </div>
            <a href="#" class="hover:text-orange-400">Du học</a>
        </nav>
        <div class="flex items-center space-x-4">
            <a href="#" class="flex items-center hover:text-orange-400">
                Đăng nhập <span class="ml-2">🔑</span>
            </a>
            <a href="#" class="flex items-center border-l border-white pl-4 hover:text-orange-400">
                VN <span class="ml-2">🌍</span>
            </a>
        </div>
    </div>
</header>
