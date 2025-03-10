@foreach($steps as $step)
    <div class="flex items-center justify-between gap-3 {{$loop->index < count($steps)-1 ? 'w-full' : ''}}">
        @if($step['status'] == "Done")
            <div class="step-active bg-[#E6F4FF] text-[#1677FF] py-1 px-2 rounded-full">
                <i class="fa-solid fa-check"></i>
            </div>
        @elseif ($step['status'] == "Active")
            <div class="step-active bg-[#1677FF] font-medium text-white py-1 px-3 rounded-full">
                {{ $step['number'] }}
            </div>
        @else
            <div class="step-active bg-[#D9D9D9] font-medium text-gray-500 py-1 px-3 rounded-full">
                {{ $step['number'] }}
            </div>
        @endif
        <span class="text-nowrap">
                                {{ $step['name'] }}
                            </span>
        @if ($step['status'] == "Done")
            <div class="h-[1px] bg-[#1677FF] w-full"> </div>
        @elseif($step['status'] == "Active")
            <div class="h-[1px] bg-[#D9D9D9] w-full"> </div>
        @endif
    </div>
@endforeach
