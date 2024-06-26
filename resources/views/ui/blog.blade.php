@extends('_layout.app-container')

@section('content')
    <nav class="w-full p-4 border-b border-gray-300 flex items-center bg-white justify-between">
        <div class="flex items-center gap-3">
            <a href="{{ url()->previous() }}">
                <svg class="text-primary" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                    height="24px" width="24px" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48"
                        d="M328 112 184 256l144 144"></path>
                </svg>
            </a>
            <p class="line-clamp-1 w-[80%]">Disimpan</p>
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

    <div class="px-4 text-slate-800 text-lg my-4 flex gap-3 items-center">
        <svg class="mb-[1px] text-primary" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
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
        <p>Semua blog</p>
    </div>

    <section class="w-full bg-white shadow-sm border-y border-primary border-dashed">
        <ul class="">
            <li class="py-3 border-b border-gray-100 last:border-b-0 px-4 hover:bg-gray-100">
                <a href="">
                    <div class="flex gap-3 mb-2 items-center">
                        <p class="bg-danger px-2 text-white text-sm">Berita Penting</p>
                        <p class="opacity-40 text-sm">2005.05.18</p>
                    </div>
                    <p class="text-blue-500 line-clamp-2 text-md">Dicari programmer PHP Laravel berpengalaman dalam
                        pengembangan saas</p>
                </a>
            </li>

            <li class="py-3 border-b border-gray-100 last:border-b-0 px-4 hover:bg-gray-100">
                <a href="">
                    <div class="flex gap-3 mb-2 items-center">
                        <p class="bg-danger px-2 text-white text-sm">Berita Penting</p>
                        <p class="opacity-40 text-sm">2005.05.18</p>
                    </div>
                    <p class="text-blue-500 line-clamp-2 text-md">Dicari seorang translator dari Jepang, Korea, English ke
                        Indonesia</p>
                </a>
            </li>

            <li class="py-3 border-b border-gray-100 last:border-b-0 px-4 hover:bg-gray-100">
                <a href="">
                    <div class="flex gap-3 mb-2 items-center">
                        <p class="bg-danger px-2 text-white text-sm">Berita Penting</p>
                        <p class="opacity-40 text-sm">2005.05.18</p>
                    </div>
                    <p class="text-blue-500 line-clamp-2 text-md">Pengumuman starting server pada tanggal 25 January</p>
                </a>
            </li>
        </ul>
    </section>
    <div class="w-full px-4 my-4">
        <div class="bg-gray-200 h-20 grid place-items-center">
            <p class=" text-gray-600">Space Iklan di persilahkan</p>
        </div>
    </div>
    @include('components.footer')
@endsection
