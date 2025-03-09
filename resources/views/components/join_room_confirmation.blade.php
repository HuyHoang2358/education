<!-- Modal -->
<div id="modal" class="fixed hidden inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50" onclick="closeModal(event)">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-[40rem] relative" onclick="event.stopPropagation()">
        <!-- Close Button (X) -->
        <button class="absolute duration-150 text-3xl top-0 right-2 text-gray-500 hover:text-gray-700" onclick="toggleModal()">
            &times;
        </button>

        <h2 class="text-lg font-bold mb-2 text-center text-full-black">Xác nhận vào phòng</h2>
        <h2 class="text-md mb-4 text-center text-light-gray">Hãy xem qua thông tin dưới đây và xác nhận có phải phòng bạn muốn vào không</h2>
        <div class="text-sm mb-4">
            <h1 class="font-bold text-full-black mb-3">Phòng Luyện Tập</h1>
            <div class="p-3 bg-[#F1F5F9] rounded-lg flex justify-between items-center">
                <div class="flex gap-2 justify-between w-full">
                    <p class="font-bold text-md text-nowrap text-blue-secondary">Tiếng Anh 12 12A1</p>
                    <p class="text-nowrap font-medium text-light-gray">Mật khẩu: TA123456</p>
                </div>
            </div>
        </div>
        <div class="text-sm">
            <h1 class="font-bold text-full-black mb-3">Giáo viên</h1>
            @include('components.teacher_information_card')
        </div>
        <div class="flex justify-center space-x-2 px-12">
            <button type="button" class="bg-transparent px-5 py-2 rounded-full font-medium relative inline-flex items-center justify-center border border-light-gray w-full text-full-black hover:cursor-pointer hover:text-blue-secondary hover:border-blue-secondary duration-200" onclick="toggleModal()">Thoát</button>
            <x-button_animation_1 href="{{ route('practice_room.detail', 'test') }}" content='Vào phòng' class="bg-[#0B8493] w-full px-5 py-2 rounded-full font-medium relative inline-flex items-center justify-center overflow-hidden text-white hover:cursor-pointer"/>
        </div>
    </div>
</div>