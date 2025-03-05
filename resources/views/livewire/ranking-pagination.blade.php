<div>
    <table class="table-auto w-full mt-5">
        <thead class="shadow-[0px_10px_10px_-3px_rgba(0,0,0,0.15)]">
            <tr>
                <th class="text-center py-5">
                    <div class="border-r-2 w-full">Hạng</div>
                </th>
                <th class="text-center">
                    <div class="border-r-2 w-full">Avatar</div>
                </th>
                <th class="text-start">
                    <div class="border-r-2 w-full pl-3">Họ và tên</div>
                </th>
                <th class="text-start">
                    <div class="border-r-2 w-full pl-3">Điểm số</div>
                </th>
                <th class="text-start pl-3">Tỉnh / thành phố </th>
            </tr>
        </thead>
        <tbody>
            @php $rank = ($students->currentPage() - 1) * $students->perPage() @endphp
            @foreach($students as $student)
                @php $rank++ @endphp
                @if($rank == 1)
                    <tr class="group hover:bg-[#F1FCF3] duration-300 hover:cursor-pointer border-y-2 border-dashed">
                        <div>
                            <td class="pt-5">
                                <div class="flex w-full h-full justify-center shimmer items-center">
                                    <img src="{{ asset('/assets/img/home/Group1.png') }}" alt="">
                                </div>
                            </td>
                            <td class="relative pb-5">
                                <div class="hidden group-hover:block duration-300 absolute -top-2 left-36 rounded-t-full rounded-r-full rounded-bl-none bg-green-200 border-2 border-green-600 text-[#21A642] px-3 text-nowrap font-medium">
                                    Bạn cần <span>16</span> điểm để thăng hạng
                                </div>
                                <div
                                    class="shimmer relative bg-contain flex justify-center align-bottom pt-3">
                                    <img src="{{ asset('/assets/img/home/Frame1.png') }}" alt="">
                                    <img class="absolute self-end" src="{{ asset('/assets/img/home/Avatar.png') }}"
                                        alt="">
                                </div>
                            </td>
                            <td class="pl-4 pt-3 text-[#525266] font-medium">Lương Gia Khánh</td>
                            <td class="pl-4 pt-3 font-bold group-hover:text-green-600">100</td>
                            <td class="pl-4 pt-3 text-[#525266] font-medium">Thái Bình</td>
                        </div>
                    </tr>
                @elseif($rank == 2)
                    <tr class="border-y-2 border-dashed group hover:bg-[#F1FCF3] duration-300 hover:cursor-pointer">
                        <div>
                            <td class="pt-5">
                                <div class="flex w-full h-full justify-center shimmer items-center">
                                    <img src="{{ asset('/assets/img/home/Group2.png') }}" alt="">
                                </div>
                            </td>
                            <td class="relative group pb-5">
                                <div class="hidden group-hover:block duration-300 absolute -top-2 left-36 rounded-t-full rounded-r-full rounded-bl-none bg-green-200 border-2 border-green-600 text-[#21A642] px-3 text-nowrap font-medium">
                                    Bạn cần <span>16</span> điểm để thăng hạng
                                </div>
                                <div
                                    class="shimmer relative bg-contain flex bg-no-repeat bg-center justify-center align-bottom pt-3">
                                    <img src="{{ asset('/assets/img/home/Frame2.png') }}" alt="">
                                    <img class="absolute self-end" src="{{ asset('/assets/img/home/Avatar.png') }}"
                                        alt="">
                                </div>
                            </td>
                            <td class="pl-4 pt-3 text-[#525266] font-medium">Lương Gia Khánh</td>
                            <td class="pl-4 pt-3 font-bold group-hover:text-green-600">100</td>
                            <td class="pl-4 pt-3 text-[#525266] font-medium">Thái Bình</td>
                        </div>
                    </tr>
                @elseif($rank == 3)
                    <tr class="border-y-2 border-dashed group hover:bg-[#F1FCF3] duration-300 hover:cursor-pointer">
                        <div>
                            <td class="pt-3">
                                <div class="flex w-full h-full justify-center shimmer items-center">
                                    <img src="{{ asset('/assets/img/home/Group3.png') }}" alt="">
                                </div>
                            </td>
                            <td class="relative group pb-4">
                                <div class="hidden group-hover:block duration-300 absolute -top-2 left-36 rounded-t-full rounded-r-full rounded-bl-none bg-green-200 border-2 border-green-600 text-[#21A642] px-3 text-nowrap font-medium">
                                    Bạn cần <span>16</span> điểm để thăng hạng
                                </div>
                                <div
                                    class="shimmer bg-contain flex bg-no-repeat bg-center justify-center align-bottom pt-6">
                                    <div class="border-4 border-amber-900 rounded-full">
                                        <img src="{{ asset('/assets/img/home/Avatar.png') }}" alt="">
                                    </div>
                                </div>
                            </td>
                            <td class="pl-4 pt-3 text-[#525266] font-medium">Lương Gia Khánh</td>
                            <td class="pl-4 pt-3 font-bold group-hover:text-green-600">100</td>
                            <td class="pl-4 pt-3 text-[#525266] font-medium">Thái Bình</td>
                        </div>
                    </tr>
                @else
                    <tr class="group hover:bg-[#F1FCF3] duration-300 hover:cursor-pointer border-y-2 border-dashed">
                        <div>
                            <td class="pt-3 text-center text-xl font-semibold text-[#525266] group-hover:text-green-600">
                                {{ $rank }}
                            </td>
                            <td class="relative pb-5">
                                <div class="hidden group-hover:block duration-300 absolute -top-2 left-36 rounded-t-full rounded-r-full rounded-bl-none bg-green-200 border-2 border-green-600 text-[#21A642] px-3 text-nowrap font-medium">
                                    Bạn cần <span>16</span> điểm để thăng hạng
                                </div>
                                <div class="bg-contain flex bg-no-repeat bg-center justify-center align-bottom pt-6">
                                    <div>
                                        <img src="{{ asset('/assets/img/home/Avatar.png') }}" alt="">
                                    </div>
                                </div>
                            </td>
                            <td class="pl-4 pt-3 text-[#525266] font-medium">Lương Gia Khánh</td>
                            <td class="pl-4 pt-3 font-bold group-hover:text-green-600">100</td>
                            <td class="pl-4 pt-3 text-[#525266] font-medium">Thái Bình</td>
                        </div>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>

    <div class="flex w-full justify-center pt-10">
        {{ $students->links() }}
    </div>

</div>
