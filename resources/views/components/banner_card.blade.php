<div class="bg-cover flex justify-between px-14 py-16" style="background-image: url('{{ asset('/assets/img/home/banner_blank.jpg') }}')">
    {{-- <img src="{{ asset('/assets/img/home/banner_blank.jpg') }}" alt="Banner 1" class="w-full rounded-lg shadow-lg"> --}}
    <div class="relative">
        <img class="mb-12" src="{{ asset('/assets/img/home/banner_component.png') }}" alt="">
        <img class="animate-bounce absolute bottom-0 right-0" src="{{ asset('/assets/img/home/3d heart 2.png') }}" alt="">
        <img class="absolute bottom-0 left-0" src="{{ asset('/assets/img/home/3d decor 2.png') }}" alt="">
    </div>
    <div class="flex flex-col gap-10 justify-center">
        <div class="title text-7xl text-right uppercase font-black text-white">
            Các sĩ tử ơi! <br> ôn tập ngay thôi
        </div>
        <div class="flex justify-end">
            {{-- <div class="title-2 flex w-fit bg-white p-3 text-[#124D59] text-3xl font-medium border-b-8 border-[#0B8493]">
                Ôn sớm học sâu, điểm thi nhất khối
            </div> --}}
            <button class="group transition-all hover:drop-shadow-[0px_8px_0px_rgba(4,165,182,1)] duration-500 translate-x-0 hover:cursor-default hover:text-white relative text-3xl text-[#124D59] bg-white font-medium z-0 h-14 overflow-hidden overflow-x-hidden px-10 drop-shadow-[0px_8px_0px_rgba(11,132,147,1)]"><span class="relative z-10">Ôn sớm học sâu, điểm thi nhất khối</span><span class="absolute inset-0 overflow-hidden"><span class="absolute left-0 aspect-square w-full origin-center translate-x-full rounded-full bg-[#0B8493] transition-all duration-500 group-hover:-translate-x-0 group-hover:scale-150"></span></span></button>
        </div>
        <div class="flex justify-end">
            <x-button_animation_1 content='Ôn tập ngay' class="bg-[#0B8493] uppercase w-fit px-16 py-3 rounded-full text-2xl font-bold border-[3px] border-[#124D59] drop-shadow-[0px_8px_0px_rgba(18,77,89,0.5)] group/item relative inline-flex h-12 items-center justify-center overflow-hidden text-white hover:cursor-pointer"/>
        </div>
    </div>
</div>
