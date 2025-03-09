<!-- Modal -->
<div id="modal" class="fixed hidden inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50" onclick="closeModal(event)">
    <div class="bg-white p-6 rounded-lg shadow-lg w-fit relative" onclick="event.stopPropagation()">
        <!-- Close Button (X) -->
        <button class="absolute duration-150 text-3xl top-0 right-2 text-gray-500 hover:text-gray-700" onclick="toggleModal()">
            &times;
        </button>

        <h2 class="text-lg font-bold mb-4 text-center text-full-black">Chọn phòng</h2>
        <h2 class="text-md mb-4 text-center text-light-gray">Chọn Phòng Luyện Tập của bạn hoặc nhập mật khẩu để vào</h2>
        <div class="text-sm">
            <h1 class="font-bold text-full-black mb-3">Phòng Luyện Tập của bạn</h1>
            <form>
                <!-- Class room list -->
                <div class="border-2 rounded-lg px-2 pt-5 mb-4">
                    <div class="class-list overflow-scroll px-2 max-h-56 flex flex-col gap-2">
                        @php $current_class_id = 1 @endphp
                        @for($i = 1; $i <= 5; $i++)
                            <!--class selection-->
                            <div class="class-selection flex justify-between group hover:cursor-pointer p-3 rounded-lg">   
                                <div class="class-name flex gap-1 text-full-black font-bold group-hover:text-blue-secondary duration-150">
                                    <input type="radio" value="{{ $i }}" class="w-5 h-5 hover:cursor-pointer text accent-blue-secondary" current_class_id="{{ $current_class_id }}">
                                    <p>Toán 12 12A1</p>
                                </div>
                                <div class="font-medium">
                                    Mật khẩu: TA3123123
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="w-full mb-4">
                    <label class="peer-focus:text-[#FF8040] block text-base font-bold text-[#063140]">
                        Mật khẩu
                    </label>
                    <input class="peer w-full bg-transparent placeholder:text-slate-400 text-slate-700 border-b-2 border-[#124D59] py-2 transition duration-300 ease focus:outline-none focus:border-[#FF8040]" placeholder="Nhập mật khẩu" />
                </div>
                <div class="flex justify-center space-x-2 px-12">
                    <button type="button" class="bg-transparent px-5 py-2 rounded-full font-medium relative inline-flex items-center justify-center border border-light-gray w-full text-full-black hover:cursor-pointer hover:text-blue-secondary hover:border-blue-secondary duration-200" onclick="toggleModal()">Thoát</button>
                    <x-button_animation_1 type="submit" content='Vào phòng' class="bg-[#0B8493] w-full px-5 py-2 rounded-full font-medium relative inline-flex items-center justify-center overflow-hidden text-white hover:cursor-pointer"/>
                </div>
            </form>
        </div>
    </div>
</div>