@extends('_layout.app-container')

<style>
    #content p {
        margin-bottom: 16px
    }
</style>

@section('content')
    <nav class="w-full p-4 border-b border-gray-300 flex items-center bg-white justify-between">
        <input type="hidden" name="slug" value="{{ $slug }}">
        <div class="flex items-center gap-3">
            <a href="{{ url()->previous() }}">
                <svg class="text-primary" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                    height="24px" width="24px" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48"
                        d="M328 112 184 256l144 144"></path>
                </svg>
            </a>

            <p class="line-clamp-1 w-[80%]" id="navbar-title"></p>
        </div>
        <a href="">
            <svg class="text-primary" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                stroke-linecap="round" stroke-linejoin="round" height="20px" width="20px"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10"></circle>
                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                <line x1="12" y1="17" x2="12.01" y2="17"></line>
            </svg>
        </a>
    </nav>

    {{-- navigation --}}
    <nav class="flex border-b border-gray-300 bg-gray-50 py-2">
        <a href="" class="w-full p-2 border-l border-gray-300 flex-1 text-center flex justify-center">
            <svg class="m-auto opacity-80 rotate-90" stroke="currentColor" fill="currentColor" stroke-width="0"
                viewBox="0 0 24 24" height="16px" width="16px" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z">
                </path>
            </svg>
        </a>
        <div class="w-full p-2 border-l border-gray-300 flex-1 text-center font-semibold text-blue-500" id="current-chapter">200</div>
        <a href="" class=" w-full p-2 border-l border-gray-300 flex-1 text-center flex justify-center">
            <svg class="m-auto opacity-80 -rotate-90" stroke="currentColor" fill="currentColor" stroke-width="0"
                viewBox="0 0 24 24" height="16px" width="16px" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z">
                </path>
            </svg>
        </a>
    </nav>

    <section class="p-4 border-b border-gray-300 bg-white">

        {{-- header --}}
        <div class="flex gap-3 items-center mb-4">
            <p class="bg-success px-2 text-white text-sm" id="status"></p>
            <p class="opacity-40 text-sm" id="date-upload">2005.05.18</p>
        </div>
        <div class="header-chapter p-4 text-center text-slate-900">
            <p class="text-lg font-semibold">Chapter <span id="chapter"></span> - <span id="title"></span></p>
            <p class="text-md opacity-50" id="name-novel"></p>
        </div>

        {{-- gak tau apaan ini bagus aja --}}
        <div class="my-4">
            <svg class="m-auto my-4 opacity-10" stroke="currentColor" fill="currentColor" stroke-width="0"
                viewBox="0 0 24 24" height="16px" width="16px" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z">
                </path>
            </svg>
            <svg class="m-auto my-4 opacity-40" stroke="currentColor" fill="currentColor" stroke-width="0"
                viewBox="0 0 24 24" height="16px" width="16px" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z">
                </path>
            </svg>
            <svg class="m-auto my-4 opacity-70" stroke="currentColor" fill="currentColor" stroke-width="0"
                viewBox="0 0 24 24" height="16px" width="16px" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z">
                </path>
            </svg>
        </div>

        <p>&nbsp;</p>

        {{-- content --}}
        <section class="text-left text-slate-900/80 font-poppins" id="content"></section>

        <div class="flex justify-end">
            <a class="text-blue-500 flex items-center gap-4" href="">
                <svg class="m-auto rotate-180 my-4 opacity-100" stroke="currentColor" fill="currentColor"
                    stroke-width="0" viewBox="0 0 24 24" height="16px" width="16px"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z">
                    </path>
                </svg>
                Kembali ke atas
            </a>
        </div>
    </section>

    <section class="pt-4 px-4 border-b border-gray-300">
        <form>
            <button class="bg-gray-50 text-gray-500 p-3 border border-gray-300">
                Simpan di bookmark
            </button>
        </form>
    </section>

    <footer>
        <section class="p-4 border-b border-gray-300 bg-white">
            <p class="text-center text-lg my-3 text-black/80">Ikuti kami</p>
            <div class="flex justify-center my-6 gap-3">
                <a class="w-12 flex justify-center items-center rounded-full h-12 bg-[#5865F2]">
                    <svg stroke="white" fill="white" stroke-width="0" viewBox="0 0 640 512" height="24px"
                        width="24px" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z">
                        </path>
                    </svg>
                </a>
                <a class="w-12 flex justify-center items-center rounded-full h-12 bg-[#1877F2]">
                    <svg stroke="white" fill="white" stroke-width="0" viewBox="0 0 320 512" height="24px"
                        width="24px" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                        </path>
                    </svg>
                </a>
                <a class="w-12 flex justify-center items-center rounded-full h-12 bg-[#D62976]">
                    <svg stroke="white" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                        stroke-linejoin="round" height="24px" width="24px" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                </a>
            </div>
        </section>

        <section class="w-full py-5 flex justify-center">
            <div class="" id="logo">
                <p class="font-semibold text-slate-900 font-playwrite text-lg">Kurumi Novel</p>
                <p class="text-sm mt-2 text-slate-900 text-center">&copy; 2024 - Kurumi Dev</p>
            </div>
        </section>
    </footer>
@endsection

@section('javascript')
    <script src="{{ asset('') }}js/read.js"></script>
@endsection
