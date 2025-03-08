<div>
    <table class="table-auto w-full mt-5">
        <tbody>
            @php $rank = ($students->currentPage() - 1) * $students->perPage() @endphp
            @foreach($students as $student)
                @php $rank++ @endphp
                @if($rank == 1)
                    <tr class="group hover:bg-[#EDFAF9] duration-300 hover:cursor-pointer border-y-2 border-dashed">
                        <div>
                            <td class="pt-3">
                                <div class="flex w-full h-full justify-center shimmer items-center">
                                    <img width="30" height="30" src="{{ asset('/assets/img/home/Group1.png') }}" alt="">
                                </div>
                            </td>
                            <td class="relative pb-5">
                                <div class="hidden group-hover:block duration-300 absolute -top-2 left-12 rounded-t-full rounded-r-full rounded-bl-none bg-cyan-200 border-2 border-cyan-600 text-cyan-600 px-3 text-nowrap font-medium">
                                    Bạn cần <span>16</span> điểm để thăng hạng
                                </div>
                                <div class="flex justify-center pt-3">
                                    <x-rank_frame class="shimmer" size="40" avatar="/assets/img/home/Avatar.png" rank="1"/>
                                </div>
                            </td>
                            <td class="pl-4 pt-3 text-[#525266] font-medium">Lương Gia Khánh</td>
                            <td class="pl-4 pt-3 font-bold group-hover:text-cyan-600"> <div class="flex gap-2">800<img src="{{ asset('/assets/img/home/Flash lime.png') }}" alt=""></div></td>
                        </div>
                    </tr>
                @elseif($rank == 2)
                    <tr class="border-y-2 border-dashed group hover:bg-[#EDFAF9] duration-300 hover:cursor-pointer">
                        <div>
                            <td class="pt-3">
                                <div class="flex w-full h-full justify-center shimmer items-center">
                                    <img width="30" height="30" src="{{ asset('/assets/img/home/Group2.png') }}" alt="">
                                </div>
                            </td>
                            <td class="relative group pb-5">
                                <div class="hidden group-hover:block duration-300 absolute -top-2 left-12 rounded-t-full rounded-r-full rounded-bl-none bg-cyan-200 border-2 border-cyan-600 text-cyan-600 px-3 text-nowrap font-medium">
                                    Bạn cần <span>16</span> điểm để thăng hạng
                                </div>
                                <div class="flex justify-center pt-3">
                                    <x-rank_frame size="40" class="shimmer" avatar="/assets/img/home/Avatar.png" rank="2"/>
                                </div>
                            </td>
                            <td class="pl-4 pt-3 text-[#525266] font-medium">Lương Gia Khánh</td>
                            <td class="pl-4 pt-3 font-bold group-hover:text-cyan-600"> <div class="flex gap-2">800<img src="{{ asset('/assets/img/home/Flash lime.png') }}" alt=""></div></td>
                        </div>
                    </tr>
                @elseif($rank == 3)
                    <tr class="border-y-2 border-dashed group hover:bg-[#EDFAF9] duration-300 hover:cursor-pointer">
                        <div>
                            <td class="pt-3">
                                <div class="flex w-full h-full justify-center shimmer items-center">
                                    <img width="20" height="20" src="{{ asset('/assets/img/home/Group3.png') }}" alt="">
                                </div>
                            </td>
                            <td class="relative group pb-4">
                                <div class="hidden group-hover:block duration-300 absolute -top-2 left-12 rounded-t-full rounded-r-full rounded-bl-none bg-cyan-200 border-2 border-cyan-600 text-cyan-600 px-3 text-nowrap font-medium">
                                    Bạn cần <span>16</span> điểm để thăng hạng
                                </div>
                                <div class="flex justify-center pt-6">
                                    <x-rank_frame size="40" class="shimmer" avatar="/assets/img/home/Avatar.png" rank="3"/>
                                </div>
                            </td>
                            <td class="pl-4 pt-3 text-[#525266] font-medium">Lương Gia Khánh</td>
                            <td class="pl-4 pt-3 font-bold group-hover:text-cyan-600"> <div class="flex gap-2">800<img src="{{ asset('/assets/img/home/Flash lime.png') }}" alt=""></div></td>
                        </div>
                    </tr>
                @else
                    <tr class="group hover:bg-[#EDFAF9] duration-300 hover:cursor-pointer border-y-2 border-dashed">
                        <div>
                            <td class="pt-3 text-center text-md font-semibold text-[#525266] group-hover:text-cyan-600">
                                {{ $rank }}
                            </td>
                            <td class="relative pb-5">
                                <div class="hidden group-hover:block duration-300 absolute -top-2 left-12 rounded-t-full rounded-r-full rounded-bl-none bg-cyan-200 border-2 border-cyan-600 text-cyan-600 px-3 text-nowrap font-medium">
                                    Bạn cần <span>16</span> điểm để thăng hạng
                                </div>
                                <div class="flex justify-center pt-6">
                                    <x-rank_frame size="40" avatar="/assets/img/home/Avatar.png" rank="other"/>
                                </div>
                            </td>
                            <td class="pl-4 pt-3 text-[#525266] font-medium">Lương Gia Khánh</td>
                            <td class="pl-4 pt-3 font-bold group-hover:text-cyan-600"> <div class="flex gap-2">800 exp</td>
                        </div>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>

</div>
