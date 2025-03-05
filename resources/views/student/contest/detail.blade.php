@extends('layouts.web')
@section('title') Tự tin vươn mình thế giới @endsection
@section('contest-detail')
    <div class="max-w-7xl mx-auto p-4">
        <!-- Breadcrumbs -->
        @include('component.breadcrumb',["breadcrumbs" => [
                 ["name" => "Cuộc thi", "route" => route('contest.index')],
                 ['name' => 'Tự tin vươn mình thế giới', 'route' => route('contest.detail', 'test')]
             ]])

        <div class="container bg-white p-10 rounded-2xl">
            <div class="flex flex-col gap-4 border-b-2">
                <div class="uppercase mb-2 w-fit bg-[#FF8040] text-white rounded-full px-3 py-2 text-base font-bold">
                    Cuộc thi tiếng Anh
                </div>
                <div class="text-4xl font-bold mb-3">
                    Cuộc thi <span class="capitalize">"Tự tin vươn mình thế giới"</span>
                </div>
                <div class="text-[#525266] mb-5">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora reprehenderit iure fugit adipisci
                    iusto odio iste ullam nam accusamus voluptatibus, sit obcaecati aperiam dicta commodi doloribus nulla?
                    Voluptatibus, repudiandae esse!
                </div>
                <!-- Progress -->
                <div class="flex gap-5 w-full justify-between mb-5">
                    @php
                        $steps = [
                            ["number" => 1, "name" => "Đăng ký", "status" => "Done"],
                            ["number" => 2, "name" => "Diễn ra", "status" => "Active"],
                            ["number" => 3, "name" => "Kết thúc", "status" => "Inactive"],
                        ]
                    @endphp
                    @include('component.progress', ['steps' => $steps])
                </div>
                <div class="flex w-full justify-center gap-5 mb-5">
                    <div class="my-1">
                        <a
                            class="bg-[#0B8493] shadow-md w-fit px-10 py-2 rounded-full font-medium group/item relative inline-flex items-center justify-center overflow-hidden text-white hover:cursor-pointer"><span>Tham
                                gia ngay</span>
                            <div
                                class="w-0 translate-x-[100%] pl-0 opacity-0 transition-all duration-200 group-hover/item:w-5 group-hover/item:translate-x-0 group-hover/item:pl-1 group-hover/item:opacity-100">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                    <path
                                        d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z"
                                        fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                </svg></div>
                        </a>
                    </div>
                    <div class="my-1">
                        <a href="{{ route('contest.detail.rank', $slug) }}"
                            class="bg-transparent shadow-md border border-[#0B8493] w-fit px-6 py-2 rounded-full font-medium group/item relative inline-flex items-center justify-center overflow-hidden text-[#0B8493] hover:cursor-pointer"><span>Xem
                                Bảng Xếp Hạng</span>
                            <div
                                class="w-0 translate-x-[100%] pl-0 opacity-0 transition-all duration-200 group-hover/item:w-5 group-hover/item:translate-x-0 group-hover/item:pl-1 group-hover/item:opacity-100">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                    <path
                                        d="M6.97942 1.25171L6.9585 1.30199L5.58662 4.60039C5.54342 4.70426 5.44573 4.77523 5.3336 4.78422L1.7727 5.0697L1.71841 5.07405L1.38687 5.10063L1.08608 5.12475C0.820085 5.14607 0.712228 5.47802 0.914889 5.65162L1.14406 5.84793L1.39666 6.06431L1.43802 6.09974L4.15105 8.42374C4.23648 8.49692 4.2738 8.61176 4.24769 8.72118L3.41882 12.196L3.40618 12.249L3.32901 12.5725L3.25899 12.866C3.19708 13.1256 3.47945 13.3308 3.70718 13.1917L3.9647 13.0344L4.24854 12.861L4.29502 12.8326L7.34365 10.9705C7.43965 10.9119 7.5604 10.9119 7.6564 10.9705L10.705 12.8326L10.7515 12.861L11.0354 13.0344L11.2929 13.1917C11.5206 13.3308 11.803 13.1256 11.7411 12.866L11.671 12.5725L11.5939 12.249L11.5812 12.196L10.7524 8.72118C10.7263 8.61176 10.7636 8.49692 10.849 8.42374L13.562 6.09974L13.6034 6.06431L13.856 5.84793L14.0852 5.65162C14.2878 5.47802 14.18 5.14607 13.914 5.12475L13.6132 5.10063L13.2816 5.07405L13.2274 5.0697L9.66645 4.78422C9.55432 4.77523 9.45663 4.70426 9.41343 4.60039L8.04155 1.30199L8.02064 1.25171L7.89291 0.944609L7.77702 0.665992C7.67454 0.419604 7.32551 0.419604 7.22303 0.665992L7.10715 0.944609L6.97942 1.25171ZM7.50003 2.60397L6.50994 4.98442C6.32273 5.43453 5.89944 5.74207 5.41351 5.78103L2.84361 5.98705L4.8016 7.66428C5.17183 7.98142 5.33351 8.47903 5.2204 8.95321L4.62221 11.461L6.8224 10.1171C7.23842 9.86302 7.76164 9.86302 8.17766 10.1171L10.3778 11.461L9.77965 8.95321C9.66654 8.47903 9.82822 7.98142 10.1984 7.66428L12.1564 5.98705L9.58654 5.78103C9.10061 5.74207 8.67732 5.43453 8.49011 4.98442L7.50003 2.60397Z"
                                        fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                </svg></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-b-2 py-4">

                <h1 class="text-2xl font-bold uppercase mb-3">Giới thiệu về cuộc thi</h1>

                <p class="leading-relaxed text-[#525266]">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt, nisl vel ultrices convallis,
                    justo magna cursus ligula, non luctus elit tortor ut erat. Curabitur at venenatis justo. Sed bibendum,
                    nulla at varius consectetur, libero quam posuere justo, in fermentum enim erat a orci. Suspendisse non
                    urna justo. Fusce id metus vel felis facilisis fermentum ac sit amet odio. Vivamus ac enim non mauris
                    dapibus tincidunt et nec justo. <br>

                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec ut
                    neque eget elit suscipit fermentum. Cras nec justo ut justo feugiat posuere. Nunc consectetur sapien eu
                    scelerisque tincidunt. Nam vitae lectus eros. Etiam consectetur dolor at nulla lacinia, id consectetur
                    tortor suscipit. Integer malesuada orci at elit pharetra, eget luctus lacus tempor. <br>

                    Mauris at sapien vitae sapien vehicula rhoncus. Vestibulum efficitur dui at augue hendrerit, ut sodales
                    sapien interdum. Nulla a nunc at odio feugiat venenatis. Sed eget nunc erat. Duis ut augue vehicula,
                    feugiat ex sed, dapibus felis. Curabitur luctus nunc at nunc vestibulum, non eleifend risus venenatis.
                    Nunc sed nunc sed odio interdum accumsan id sit amet libero. <br>
                </p>

                <h1 class="text-2xl font-bold uppercase my-3">Cách thức tham gia</h1>

                <p class="leading-relaxed text-[#525266]">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt, nisl vel ultrices convallis,
                    justo magna cursus ligula, non luctus elit tortor ut erat. Curabitur at venenatis justo. Sed bibendum,
                    nulla at varius consectetur, libero quam posuere justo, in fermentum enim erat a orci. Suspendisse non
                    urna justo. Fusce id metus vel felis facilisis fermentum ac sit amet odio. Vivamus ac enim non mauris
                    dapibus tincidunt et nec justo. <br>

                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec ut
                    neque eget elit suscipit fermentum. Cras nec justo ut justo feugiat posuere. Nunc consectetur sapien eu
                    scelerisque tincidunt. Nam vitae lectus eros. Etiam consectetur dolor at nulla lacinia, id consectetur
                    tortor suscipit. Integer malesuada orci at elit pharetra, eget luctus lacus tempor. <br>

                    Mauris at sapien vitae sapien vehicula rhoncus. Vestibulum efficitur dui at augue hendrerit, ut sodales
                    sapien interdum. Nulla a nunc at odio feugiat venenatis. Sed eget nunc erat. Duis ut augue vehicula,
                    feugiat ex sed, dapibus felis. Curabitur luctus nunc at nunc vestibulum, non eleifend risus venenatis.
                    Nunc sed nunc sed odio interdum accumsan id sit amet libero. <br>
                </p>

            </div>

            <div class="flex flex-col gap-3 py-6">

                <h1 class="text-2xl font-bold uppercase mb-3">Hồ sơ đăng ký tham gia</h1>

                <div class="bg-[#EDFAF9] p-8 rounded-2xl">
                    <form action="" method="POST" class="flex flex-col gap-10">

                        <div class="w-full">
                            <label class="block mb-2 text-base font-bold text-[#063140] peer-focus:text-[#FF8040] transition duration-300 ease">
                                Họ và tên
                            </label>
                            <input class="peer focus:border-[#FF8040] w-full bg-transparent placeholder:text-slate-400 text-slate-700 border-b-2 border-[#124D59] py-2 transition duration-300 ease focus:outline-none" placeholder="Nhập họ và tên" />
                        </div>

                        <div class="flex gap-5">
                            <div class="w-full">
                                <label class="peer-focus:text-[#FF8040] block mb-2 text-base font-bold text-[#063140]">
                                    Email
                                </label>
                                <input class="peer w-full bg-transparent placeholder:text-slate-400 text-slate-700 border-b-2 border-[#124D59] py-2 transition duration-300 ease focus:outline-none focus:border-[#FF8040]" placeholder="Nhập email" />
                            </div>
                            <div class="w-full">
                                <div class="relative">
                                    <label class="block mb-2 text-base font-bold text-[#063140]">
                                        Số điện thoại
                                    </label>
                                    <input class="focus:border-[#FF8040] pl-8 w-full bg-transparent placeholder:text-slate-400 text-slate-700 border-b-2 border-[#124D59] py-2 transition duration-300 ease focus:outline-none" placeholder="Nhập số điện thoại" />
                                    <div class="absolute left-0 bottom-3">
                                        <img src="{{ asset('./assets/img/home/Flags.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full">
                            <label class="block mb-2 text-base font-bold text-[#063140]">
                                Ghi chú
                            </label>
                            <textarea class="focus:border-[#FF8040] w-full h-20 bg-transparent placeholder:text-slate-400 text-slate-700 border-b-2 border-[#124D59] py-2 transition duration-300 ease focus:outline-none" placeholder="Bạn có muốn nhắn nhủ điều gì đến chúng tôi không"></textarea>
                        </div>

                        <button type="submit" class="group rounded-full relative inline-flex h-12 items-center justify-center overflow-hidden bg-[#0B8493] px-6 font-medium text-white"><span class="absolute h-0 w-0 rounded-full bg-[#FF8040] transition-all duration-300 group-hover:h-56 group-hover:w-full"></span><span class="relative">Gửi hồ sơ tham gia</span></button>

                    </form>
                </div>

            </div>

        </div>

    </div>
@endsection
