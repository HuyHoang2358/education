<header id="sticky-header" class="bg-[#124D59] text-white z-50 sticky top-0 transition-transform">
    <div class="container mx-auto flex items-center justify-between px-6">
        <div class="flex items-center gap-3 my-2">
            <img class="w-[60px] h-[60px] rounded-full border-2 border-white" src="{{asset('/assets/img/home/brand.png')}}" alt="">
            <div>
                <h4 class="text-3xl font-bold tracking-widest">Ôn thi 360</h4>
                <p class="text-sm">Ôn sớm học sâu điểm thi nhất khối</p>
            </div>
        </div>
        <div class="flex items-center gap-8 h-full">

            <a href="{{ route('home') }}" class="{{ Route::currentRouteName() == 'home' ? 'bg-orange-500 text-white font-medium rounded-full py-2 px-3 hover:text-white' : 'relative hover:cursor-pointer group font-medium py-5 hover:text-orange-400' }}">
                Trang chủ
            </a>

            <div class="relative hover:cursor-pointer group hover:text-orange-400 font-medium py-5 px-3">
                <a href="{{route('exam.index')}}">Đề thi<i class="fa-solid fa-chevron-down text-md"></i></a>
                <div class="absolute group-hover:flex left-0 mt-5 hidden bg-white text-black rounded shadow z-50 p-2">
                    <div>
                        <div class="group/item relative">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded w-60">Tuyển sinh lớp 9-10</a>
                            <div class="hidden group-hover/item:grid grid-cols-3 -right-[32rem] -top-2 absolute bg-white shadow rounded p-2">
                                <div class="border-r border-gray-200 px-1">
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded w-40">Lớp 1</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 2</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 3</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 4</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 5</a>
                                </div>
                                <div class="border-r border-gray-200 px-1">
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 6</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 7</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 8</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 9</a>
                                </div>
                                <div class="px-1">
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 10</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 11</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 12</a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Tốt nghiệp THPT Quốc Gia</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Đánh giá năng lực lớp 6</a>
                    </div>
                </div>
            </div>

            <div class="relative hover:cursor-pointer group hover:text-orange-400 font-medium py-5">
                <a href="{{route('practice.index')}}">Luyện tập <i class="fa-solid fa-chevron-down text-md"></i></a>
                <div class="p-2 absolute left-0 mt-5 hidden group-hover:grid grid-cols-3 w-[30rem] bg-white text-black rounded shadow z-50">
                    <div class="border-r border-gray-200 px-1">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 1</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 2</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 3</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 4</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 5</a>
                    </div>
                    <div class="border-r border-gray-200 px-1">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 6</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 7</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 8</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 9</a>
                    </div>
                    <div class="px-1">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 10</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 11</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Lớp 12</a>
                    </div>
                </div>
            </div>

            <a href="{{ route('contest.index') }}" class="{{ Str::startsWith(Route::currentRouteName(), 'contest') ? 'bg-orange-500 text-white font-medium rounded-full py-2 px-3 hover:text-white' : 'relative hover:cursor-pointer group font-medium py-5 hover:text-orange-400' }}">
                Cuộc thi
            </a>

            <a href="{{ route('practice_room.index') }}" class="{{ Str::startsWith(Route::currentRouteName(), 'practice_room') ? 'bg-orange-500 text-white font-medium rounded-full py-2 px-3 hover:text-white' : 'relative hover:cursor-pointer group font-medium py-5 hover:text-orange-400' }}">
                Phòng luyện tập
            </a>

            <div class="relative hover:cursor-pointer group hover:text-orange-400 font-medium py-5">
                Thông tin <i class="fa-solid fa-chevron-down text-md"></i>
                <div class="absolute left-0 mt-5 w-60 hidden group-hover:block bg-white text-black p-2 rounded shadow z-50">
                    <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Về chúng tôi</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">Trình chấm</a>
                    <a href="{{ route('partner.index')}}" class="block px-4 py-2 hover:bg-gray-200 rounded">Đối tác của chúng tôi</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded">FAQ</a>
                </div>
            </div>

            <a href="{{ route('abroad.index') }}" class="{{ Str::startsWith(Route::currentRouteName(), 'abroad') ? 'bg-orange-500 text-white font-medium rounded-full py-2 px-3 hover:text-white' : 'relative hover:cursor-pointer group font-medium py-5 hover:text-orange-400' }}">
                Du học
            </a>
        </div>
        <div class="">
            @if(Auth::check())
            <div class="relative group hover:cursor-pointer transition-colors h-full py-5">
                <a id="account-button" href="#" class="flex group-hover:text-orange-400 gap-2 font-medium items-center">
                    <span>{{ Auth::user()->name }}</span>
                    <span class="mt-1">
                        <i class="text-lg fa-solid fa-circle-user"></i>
                    </span>
                    <div class="absolute right-0 mt-5 w-36 hidden group-hover:block bg-white text-black p-2 rounded shadow z-50">
                        <a href="{{ route('logout') }}" class="block px-4 py-2 hover:bg-gray-200 rounded"><i class="fa-solid fa-arrow-right-from-bracket pr-1"></i>Đăng xuất</a>
                    </div>
                </a>
            </div>
            @else
                <a href="{{ route('login') }}" class="flex hover:text-orange-400 gap-2 font-medium items-center">
                    <span>Đăng nhập</span>
                    <span class="mt-1">
                        <i class="text-lg fa-solid fa-circle-user"></i>
                    </span>
                </a>
            @endif
        </div>
    </div>
</header>
