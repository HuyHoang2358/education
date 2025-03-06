<nav class="flex mb-2 p-2 text-xs md:text-base font-normal text-gray-400" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="{{url('/')}}" class="inline-flex items-center text-main-color-dark hover:text-sub-main-color">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" fill="none"><path fill="#000" fill-opacity=".45" d="M12.94 5.905 7.659.625 7.304.271a.43.43 0 0 0-.607 0L1.06 5.905a.874.874 0 0 0-.257.629.884.884 0 0 0 .887.865h.581v4.453h9.458V7.4h.594a.87.87 0 0 0 .809-.54.87.87 0 0 0-.191-.953Zm-5.174 4.963H6.235v-2.79h1.53v2.79Zm2.979-4.453v4.453H8.641V7.751a.547.547 0 0 0-.547-.547H5.907a.547.547 0 0 0-.547.547v3.117H3.256V6.415H1.943l5.059-5.054.315.315 4.742 4.74h-1.314Z"/></svg>
            </a>
        </li>
        @foreach($breadcrumbs as $breadcrumb)
            @if($loop->index < count($breadcrumbs)-1)
                <li>
                    <div class="flex items-center">
                        <label class="text-gray-500 mr-2">/</label>
                        <a href="{{$breadcrumb['route']}}" class="ms-1 hover:text-main-color-dark">{{$breadcrumb['name']}}</a>
                    </div>
                </li>
            @else
                <li aria-current="page">
                    <div class="flex items-center">
                       <label class="text-gray-500 mr-2">/</label>
                        <a href="{{$breadcrumb['route']}}" class="ms-1 text-black hover:text-[#0B8493]">{{$breadcrumb['name']}}</a>
                    </div>
                </li>
            @endif
        @endforeach
    </ol>
</nav>
