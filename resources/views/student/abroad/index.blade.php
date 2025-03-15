@extends('layouts.web')
@section('title', 'Du học')
@section('content')
    <div class="max-w-7xl mx-auto pt-4">
        <!-- Breadcrumb -->
        @include('components.breadcrumb', ['breadcrumbs' => [
            ['name' => 'Du học', 'route' => route('practice.index')]
        ]])
        <h1 class="text-4xl font-semibold text-center pb-5 pt-10">Tư vấn du học</h1>
        <p class="text-lg text-center text-gray-600">Chúng tôi tự tin là người bạn đồng hành đáng tin cậy hỗ trợ toàn diện trên hành trình du học của bạn.</p>
        <div class="flex justify-center my-10">
            <button
                class="group text-xl font-semibold rounded-full w-fit relative inline-flex h-12 items-center justify-center overflow-hidden px-3 bg-[#0B8493]">
                <div
                    class="inline-flex translate-y-0 items-center justify-center px-6 text-neutral-50 transition duration-500 group-hover:-translate-y-[150%]">
                    ĐĂNG KÝ NGAY</div>
                <div
                    class="absolute inline-flex h-14 w-full translate-y-[100%] items-center justify-center text-neutral-50 transition duration-500 group-hover:translate-y-0">
                            <span
                                class="absolute h-full w-full translate-y-full skew-y-6 scale-y-0 bg-orange-400 transition duration-500 group-hover:translate-y-0 group-hover:scale-150"></span><span
                        class="z-10">ĐĂNG KÝ NGAY</span></div>
            </button>
        </div>

        @php
            $subjects = [
                [
                    'name' => 'Tỷ lệ visa cao, đảm bảo an tâm',
                    'img' => '1',
                    'desc' =>
                        'Các trường công lập uy tín, cơ hội đạt được visa du học cao hơn. Đặc biệt, nếu không may trượt visa, sẽ hoàn trả 100% học phí.',
                ],
                [
                    'name' => 'Vững tâm du học cùng gia đình',
                    'img' => '2',
                    'desc' =>
                        'Bố hoặc mẹ được đồng hành cùng con sang nước ngoài với visa du lịch theo diện giám hộ, tạo sự yên tâm và hỗ trợ con trong giai đoạn đầu.',
                ],
                [
                    'name' => 'Cơ hội định cư rộng mở',
                    'img' => '3',
                    'desc' =>
                        'Chương trình du học mở ra cơ hội định cư hấp dẫn, giúp bạn xây dựng một tương lai tươi sáng.',
                ],
                [
                    'name' => 'Tiết kiệm chi phí, tối ưu hóa ngân sách',
                    'img' => '4',
                    'desc' =>
                        'Học phí tại các trường công lập  thường thấp hơn so với trường tư thục, giúp tiết kiệm được một khoản chi phí đáng kể.',
                ],
                [
                    'name' => 'Vững tâm du học cùng gia đình',
                    'img' => '2',
                    'desc' =>
                        'Bố hoặc mẹ được đồng hành cùng con sang nước ngoài với visa du lịch theo diện giám hộ, tạo sự yên tâm và hỗ trợ con trong giai đoạn đầu.',
                ],
            ];
        @endphp
        <div class="relative pt-5 px-10">
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    @foreach ($subjects as $subject)
                        <div class="swiper-slide">
                            <div class="rounded-lg shadow-md hover:shadow-orange-300 transform duration-300">
                                <a class="group" href="">
                                    <div class="overflow-hidden relative">
                                        <img src="{{ asset('/assets/img/abroad/' . $subject['img'] . '.png') }}"
                                             alt="{{ $subject['name'] }}"
                                             class="w-[100%] rounded-tr-xl rounded-bl-xl rounded-tl-[72px] rounded-br-[72px] transform transition-transform duration-300 group-hover:scale-110">
                                        <div class="absolute bottom-0 bg-white m-3 px-3 rounded-br-[3vw] rounded-lg h-[168px] text-center">
                                            <h3 class="font-semibold text-[20px] pt-2">{{ $subject['name'] }}</h3>
                                            <p class="text-gray-500 text-sm pt-2">{{ $subject['desc'] }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination-2 flex justify-center p-5"></div>
            </div>
            <div class="inset-y-1/3 -right-16 absolute pt-5">
                <div
                    class="hover:scale-125 duration-300 swiper-button-next-unique w-100 h-100 text-3xl z-50 bg-white text-orange-400 px-4 py-2 rounded-full">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
            <div class="inset-y-1/3 -left-16 absolute pt-5">
                <div
                    class="hover:scale-125 duration-300  swiper-button-prev-unique w-100 h-100 text-3xl z-50 bg-white text-orange-400 px-4 py-2 rounded-full">
                    <i class="fa-solid fa-chevron-left"></i>
                </div>
            </div>
        </div>

        <div class="flex gap-12 my-10">
            <div class="flex gap-6">
                <div class="w-60">
                    <img class="h-[360px]" src="{{asset('assets/img/abroad/cam-1.png')}}" alt="">
                    <img class="h-60 pt-6" src="{{asset('assets/img/abroad/cam-3.png')}}" alt="">
                </div>
                <div class="w-80">
                    <div class="flex h-[120px] items-center justify-center text-white bg-[#0b8493] gap-3 rounded-xl px-10 mb-6">
                        <span class="text-[54px] font-semibold tracking-wider">11</span>
                        <p class="text-xl">Năm kinh nghiệm tư vấn du học</p>
                    </div>
                    <img src="{{asset('assets/img/abroad/cam-2.png')}}" alt="">
                </div>
            </div>

            <div>
                <h1 class="text-4xl font-semibold pt-12">Chúng tôi hỗ trợ bạn toàn diện trên hành trình du học</h1>
                <p class="text-xl text-gray-600 pt-6">Chúng tôi cam kết đồng hành cùng bạn từ những bước đầu tiên. Từ việc lựa chọn trường, ngành học phù hợp đến thủ tục xin visa, tìm kiếm học bổng và định cư tại đất nước mới, chúng tôi sẽ hỗ trợ bạn mọi lúc mọi nơi.</p>
                <div class="flex gap-8 my-8">
                    <div class="pr-8 border-2 border-gray-300 rounded-xl p-4 flex flex-col gap-5">
                        <div class="flex gap-5 items-center">
                            <img class="w-[46px] h-[46px]" src="{{asset('assets/img/abroad/cam-4.png')}}" alt="">
                            <p class="text-2xl font-bold">Hỗ trợ chuẩn bị du học</p>
                        </div>
                        <div class="flex gap-2">
                            <img class="h-6 w-6" src="{{asset('assets/img/abroad/cam-6.png')}}" alt="">
                            <p class="text-gray-500 font-semibold">Tư vấn trường phù hợp với ngành học mong muốn</p>
                        </div>
                        <div class="flex gap-2">
                            <img class="h-6 w-6" src="{{asset('assets/img/abroad/cam-6.png')}}" alt="">
                            <p class="text-gray-500 font-semibold">Chuẩn bị hồ sơ cần thiết</p>
                        </div>
                    </div>
                    <div class="pr-8 border-2 border-gray-300 rounded-xl p-4 flex flex-col gap-5">
                        <div class="flex gap-5 items-center">
                            <img class="w-[46px] h-[46px]" src="{{asset('assets/img/abroad/cam-5.png')}}" alt="">
                            <p class="text-2xl font-bold">Hỗ trợ trong quá trình du học</p>
                        </div>
                        <div class="flex gap-2">
                            <img class="h-6 w-6" src="{{asset('assets/img/abroad/cam-6.png')}}" alt="">
                            <p class="text-gray-500 font-semibold">Hỗ trợ tìm công việc chuyên ngành tại nước sở tại</p>
                        </div>
                        <div class="flex gap-2">
                            <img class="h-6 w-6" src="{{asset('assets/img/abroad/cam-6.png')}}" alt="">
                            <p class="text-gray-500 font-semibold">Hỗ trợ tìm nhà ở</p>
                        </div>
                    </div>
                </div>
                <button
                    class="group font-semibold rounded-full w-fit relative inline-flex h-10 items-center justify-center overflow-hidden px-8 bg-[#0B8493]">
                    <div
                        class="inline-flex translate-y-0 items-center justify-center px-6 text-neutral-50 transition duration-500 group-hover:-translate-y-[150%]">
                        ĐĂNG KÝ NGAY</div>
                    <div
                        class="absolute inline-flex h-14 w-full translate-y-[100%] items-center justify-center text-neutral-50 transition duration-500 group-hover:translate-y-0">
                        <span
                            class="absolute h-full w-full translate-y-full skew-y-6 scale-y-0 bg-orange-400 transition duration-500 group-hover:translate-y-0 group-hover:scale-150"></span><span
                            class="z-10">ĐĂNG KÝ NGAY</span></div>
                </button>
            </div>
        </div>

        <div style="background-image: url('{{ asset('assets/img/abroad/cam-7.png') }}');" class="bg-cover bg-center h-[528px]">
            <div class="text-white flex flex-col justify-center items-center pt-32">
                <h4 class="text-4xl font-semibold">Các bước để chúng tôi hỗ trợ bạn</h4>
                <p class="text-lg py-10">Hãy thực hiện theo các bước sau đây để chúng tôi có thể hỗ trợ bạn một cách tốt nhất.</p>
                <div class="grid grid-cols-4 gap-20 px-32">
                    <div class="flex flex-col items-center text-center">
                        <div class="relative w-16 h-16">
                            <img class="relative w-16 h-16" src="{{asset('assets/img/abroad/cam-12.png')}}" alt="">
                            <p class="absolute top-[17px] right-[-18px] w-fit px-[11px] py-1 text-sm font-semibold bg-orange-500 border-2 border-white rounded-full">1</p>
                        </div>
                        <div>
                            <h5 class="text-2xl font-semibold pt-6">Đọc kỹ thông tin</h5>
                            <p class="text-sm pt-2">Đọc kỹ các thông tin và dịch vụ mà chúng tôi cung cấp.</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="relative w-16 h-16">
                            <img class="relative w-16 h-16" src="{{asset('assets/img/abroad/cam-9.png')}}" alt="">
                            <p class="absolute top-[17px] right-[-18px] w-fit px-[11px] py-1 text-sm font-semibold bg-orange-500 border-2 border-white rounded-full">1</p>
                        </div>
                        <div>
                            <h5 class="text-2xl font-semibold pt-6">Điền thông tin</h5>
                            <p class="text-sm pt-2">Để lại thông tin liên lạc của bạn để chúng tôi có thể kết nối.</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="relative w-16 h-16">
                            <img class="relative w-16 h-16" src="{{asset('assets/img/abroad/cam-10.png')}}" alt="">
                            <p class="absolute top-[17px] right-[-18px] w-fit px-[11px] py-1 text-sm font-semibold bg-orange-500 border-2 border-white rounded-full">1</p>
                        </div>
                        <div>
                            <h5 class="text-2xl font-semibold pt-6">Nhận cuộc gọi</h5>
                            <p class="text-sm pt-2">Tư vấn viên sẽ gọi đến và sắp xếp lịch hẹn.</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="relative w-16 h-16">
                            <img class="relative w-16 h-16" src="{{asset('assets/img/abroad/cam-11.png')}}" alt="">
                            <p class="absolute top-[17px] right-[-18px] w-fit px-[11px] py-1 text-sm font-semibold bg-orange-500 border-2 border-white rounded-full">1</p>
                        </div>
                        <div>
                            <h5 class="text-2xl font-semibold pt-6">Chuẩn bị hồ sơ</h5>
                            <p class="text-sm pt-2">Chuẩn bị các giấy tờ theo hướng dẫn của tư vấn viên.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-20">
            <div>
                <p class="text-center text-4xl font-semibold py-10"><span class="text-[#0B8493]">Khởi đầu hành trình du học</span> của bạn<br> cùng chúng tôi <span class="text-orange-400">ngay hôm nay</span></p>
            </div>
            <div class="grid grid-cols-2 gap-10">
                <div>
                    <img class="border-2 border-[#0B8493] rounded-2xl w-[600px] h-[578px]" src="{{asset('assets/img/abroad/cam-13.png')}}" alt="">
                </div>
                <div class="p-10 h-fit border-2 border-[#0B8493] rounded-2xl">
                    <p class="text-center text-2xl font-semibold"><span class="text-[#0B8493]">Điền thông tin</span> vào form đăng ký<br> <span class="text-orange-400">và gửi </span>cho chúng tôi</p>
                    <div>
                        <p class="font-semibold pt-4">Họ và tên</p>
                        <div class=" border-b-2 border-black flex items-center relative">
                            <input type="text" placeholder="Nhập họ và tên" class="w-full pt-2 text-[#0B8493] bg-transparent placeholder-gray-500 px-4 py-2 focus:outline-none">
                            <i class="fa-solid fa-user-pen absolute right-3 top-3 text-[#0B8493]"></i>
                        </div>
                    </div>
                    <div>
                        <p class="font-semibold pt-4">Số điện thoại</p>
                        <div class=" border-b-2 border-black flex items-center relative">
                            <input type="text" placeholder="0987654321" class="w-full pt-2 text-[#0B8493] bg-transparent placeholder-gray-500 px-4 py-2 focus:outline-none">
                            <i class="fa-solid fa-phone-volume absolute right-3 top-3 text-[#0B8493]"></i>
                        </div>
                    </div>
                    <div>
                        <p class="font-semibold pt-4">Địa chỉ Email</p>
                        <div class=" border-b-2 border-black flex items-center relative">
                            <input type="text" placeholder="nguyenvan@gmail.com" class="w-full pt-2 text-[#0B8493] bg-transparent placeholder-gray-500 px-4 py-2 focus:outline-none">
                            <i class="fa-solid fa-envelope-open-text absolute right-3 top-3 text-[#0B8493]"></i>
                        </div>
                    </div>
                    <div>
                        <p class="font-semibold pt-4">Lời nhắn gửi</p>
                        <div class="border-b-2 border-black flex items-center relative">
                            <textarea placeholder="Hãy để lại lời nhắn của bạn (Nếu có)." class="w-full pt-2 text-[#0B8493] bg-transparent placeholder-gray-500 px-4 py-2 focus:outline-none"></textarea>
                            <i class="fa-solid fa-paper-plane absolute right-3 top-3 text-[#0B8493]"></i>
                        </div>
                    </div>
                    <button
                        class="group font-semibold rounded-full w-full mt-10 relative inline-flex h-10 items-center justify-center overflow-hidden bg-[#0B8493]">
                        <div
                            class="inline-flex translate-y-0 items-center justify-center px-6 text-neutral-50 transition duration-500 group-hover:-translate-y-[150%]">
                            GỬI THÔNG TIN</div>
                        <div
                            class="absolute inline-flex h-16 w-full translate-y-[100%] items-center justify-center text-neutral-50 transition duration-500 group-hover:translate-y-0">
                        <span
                            class="absolute h-full w-full translate-y-full skew-y-6 scale-y-0 bg-orange-400 transition duration-500 group-hover:translate-y-0 group-hover:scale-150"></span><span
                                class="z-10">GỬI THÔNG TIN</span></div>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/components/main_page_swiper.js') }}"></script>
@endsection

