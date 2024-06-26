{{-- Navbar top start --}}
<nav class="bg-white px-4 flex items-center justify-between w-full h-16">
    <div class="" id="logo">
        <p class="font-semibold text-black font-playwrite text-2xl">Kurumi Novel<span
                class="text-2xl text-sky-400">.</span></p>
    </div>
    <div class="flex gap-4">
        <div class="flex text-primary flex-col items-center">
            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                stroke-linejoin="round" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10"></circle>
                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                <line x1="12" y1="17" x2="12.01" y2="17"></line>
            </svg>
            <p class="text-sm">Bantuan</p>
        </div>
        <div class="w-[1px] bg-gray-100 flex-1"></div>
        <a href="{{ route('login') }}" class="flex text-primary flex-col items-center">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="20px"
                width="20px" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path
                    d="M11 7 9.6 8.4l2.6 2.6H2v2h10.2l-2.6 2.6L11 17l5-5-5-5zm9 12h-8v2h8c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-8v2h8v14z">
                </path>
            </svg>
            <p class="text-sm">Masuk</p>
        </a>
    </div>
</nav>
{{-- navbar top end --}}

<nav class="w-full bg-primary flex h-16">
    <div
        class="flex-1 h-16 border-l-[1px] border-gray-50/10 flex justify-center items-center text-white flex-col md:flex-row">
        <svg class="mb-[1px]" stroke="currentColor" fill="currentColor" stroke-width="0" role="img"
            viewBox="0 0 24 24" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M22.018 13.298l-3.919 2.218-3.515-3.493 3.543-3.521 3.891 2.202a1.49 1.49 0 0 1 0 2.594zM1.337.924a1.486 1.486 0 0 0-.112.568v21.017c0 .217.045.419.124.6l11.155-11.087L1.337.924zm12.207 10.065l3.258-3.238L3.45.195a1.466 1.466 0 0 0-.946-.179l11.04 10.973zm0 2.067l-11 10.933c.298.036.612-.016.906-.183l13.324-7.54-3.23-3.21z">
            </path>
        </svg>
        <p class="text-sm mt-1">aplikasi</p>
    </div>
    <a href="{{ route('blog') }}"
        class="flex-1 h-16 border-l-[1px] border-gray-50/10 flex justify-center items-center text-white flex-col md:flex-row">
        <svg class="mb-[1px]" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
            height="20px" width="20px" xmlns="http://www.w3.org/2000/svg">
            <path fill="none" stroke-linejoin="round" stroke-width="32"
                d="M368 415.86V72a24.07 24.07 0 0 0-24-24H72a24.07 24.07 0 0 0-24 24v352a40.12 40.12 0 0 0 40 40h328">
            </path>
            <path fill="none" stroke-linejoin="round" stroke-width="32"
                d="M416 464a48 48 0 0 1-48-48V128h72a24 24 0 0 1 24 24v264a48 48 0 0 1-48 48z"></path>
            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                d="M240 128h64m-64 64h64m-192 64h192m-192 64h192m-192 64h192"></path>
            <path d="M176 208h-64a16 16 0 0 1-16-16v-64a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v64a16 16 0 0 1-16 16z">
            </path>
        </svg>
        <p class="text-sm mt-1">blog</p>
    </a>
    <a href="{{ route('search') }}"
        class="flex-1 h-16 border-l-[1px] border-gray-50/10 flex justify-center items-center text-white flex-col md:flex-row">
        <svg class="mb-[1px]" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
            height="20px" width="20px" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M456.69 421.39 362.6 327.3a173.81 173.81 0 0 0 34.84-104.58C397.44 126.38 319.06 48 222.72 48S48 126.38 48 222.72s78.38 174.72 174.72 174.72A173.81 173.81 0 0 0 327.3 362.6l94.09 94.09a25 25 0 0 0 35.3-35.3zM97.92 222.72a124.8 124.8 0 1 1 124.8 124.8 124.95 124.95 0 0 1-124.8-124.8z">
            </path>
        </svg>
        <p class="text-sm mt-1">cari</p>
    </a>
    <a href="{{ route('bookmark') }}"
        class="flex-1 h-16 border-l-[1px] border-gray-50/10 flex justify-center items-center text-white flex-col md:flex-row">
        <svg class="mb-[1px]" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
            stroke-linecap="round" stroke-linejoin="round" height="20px" width="20px"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
        </svg>
        <p class="text-sm mt-1">bookmark</p>
    </a>
</nav>
