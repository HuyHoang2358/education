@extends('layouts.web')
@section('title') Tự tin vươn mình thế giới @endsection
@section('contest-detail')
    <div class="max-w-7xl mx-auto p-4">
        <!-- Breadcrumbs -->
        @include('components.breadcrumb',["breadcrumbs" => [
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
                    @include('components.progress', ['steps' => $steps])
                </div>
                <div class="flex w-full justify-center gap-5 mb-5">
                    <div class="my-1">
                        <x-button_animation_1 content='Tham gia ngay' class="bg-[#0B8493] shadow-md w-fit px-10 py-2 rounded-full font-medium group/button-animated relative inline-flex items-center justify-center overflow-hidden text-white hover:cursor-pointer"/>
                    </div>
                    <div class="my-1">
                        <x-button_animation_2 href="{{ route('contest.detail.rank', 'test') }}" content='Xem bảng xếp hạng' class="bg-transparent shadow-md border border-[#0B8493] w-fit px-6 py-2 rounded-full font-medium relative inline-flex items-center justify-center overflow-hidden text-[#0B8493] hover:cursor-pointer"/>
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
