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
            <a class="bg-[#0B8493] uppercase w-fit px-16 py-3 rounded-full text-2xl font-bold border-[3px] border-[#124D59] drop-shadow-[0px_8px_0px_rgba(18,77,89,0.5)] group relative inline-flex h-12 items-center justify-center overflow-hidden text-white hover:cursor-pointer"><span>Ôn tập ngay!</span><div class="w-0 translate-x-[100%] pl-0 opacity-0 transition-all duration-200 group-hover:w-5 group-hover:translate-x-0 group-hover:pl-1 group-hover:opacity-100"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></a>
        </div>
    </div>
</div>
