@if ($rank < 3)
    <div {{ $attributes->merge(['class' => 'relative flex justify-center align-bottom w-fit']) }}>
        <img width="{{ $size*1.5 }}" height="{{ $size*1.34375 }}" src="{{ asset('/assets/img/home/Frame' . $rank . '.png') }}" alt="">
        <img width="{{ $size }}" height="{{ $size }}" class="absolute self-end" src="{{ asset($avatar) }}" alt="">
    </div>
@elseif($rank == 3)
    <div {{ $attributes->merge(['class' => 'flex justify-center align-bottom w-fit']) }}>
        <div class="border-4 border-amber-900 rounded-full">
            <img width="{{ $size }}" height="{{ $size }}" src="{{ asset($avatar) }}" alt="">
        </div>
    </div>
@else
    <div {{ $attributes->merge(['class' => 'flex justify-center align-bottom w-fit']) }}>
        <div>
            <img width="{{ $size }}" height="{{ $size }}" src="{{ asset($avatar) }}" alt="">
        </div>
    </div>
@endif
