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

            <p class="line-clamp-1 w-[80%]">Action</p>
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

    <div class="px-4 text-slate-800 my-4 flex gap-3 items-center">
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
        <p>Hasil Pencarian</p>
    </div>

    <section>
        <section class="w-full bg-white shadow-sm my-4 border-y border-dashed border-primary">
            <ul class="">
                <li class="py-3 border-b border-gray-100 last:border-b-0 hover:bg-gray-100 px-4">
                    <a href="{{ route('detail') }}">
                        <div class="text-blue-500 line-clamp-1 flex gap-2 items-center">
                            <svg class="mb-1 text-warning" stroke="currentColor" fill="currentColor" stroke-width="0"
                                viewBox="0 0 256 256" height="16px" width="16px" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M239.75,90.81c0,.11,0,.21-.07.32L217,195a16,16,0,0,1-15.72,13H54.71A16,16,0,0,1,39,195L16.32,91.13c0-.11-.05-.21-.07-.32A16,16,0,0,1,44,77.39l33.67,36.29,35.8-80.29a1,1,0,0,0,0-.1,16,16,0,0,1,29.06,0,1,1,0,0,0,0,.1l35.8,80.29L212,77.39a16,16,0,0,1,27.71,13.42Z">
                                </path>
                            </svg>
                            Mushoku Tensei - Jobless Reincarnation
                        </div>
                        <p class="text-sm text-black flex gap-2 items-center">Ongoing<span
                                class="block h-1 w-1 rounded-full bg-gray-300"></span>
                            <span class="opacity-50">13 Volume</span>
                        </p>
                    </a>
                </li>
                <li class="py-3 border-b border-gray-100 last:border-b-0 hover:bg-gray-100 px-4">
                    <a href="{{ route('detail') }}">
                        <div class="text-blue-500 line-clamp-1 flex gap-2 items-center">
                            <svg class="mb-1 text-gray-400" stroke="currentColor" fill="currentColor" stroke-width="0"
                                viewBox="0 0 256 256" height="16px" width="16px" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M239.75,90.81c0,.11,0,.21-.07.32L217,195a16,16,0,0,1-15.72,13H54.71A16,16,0,0,1,39,195L16.32,91.13c0-.11-.05-.21-.07-.32A16,16,0,0,1,44,77.39l33.67,36.29,35.8-80.29a1,1,0,0,0,0-.1,16,16,0,0,1,29.06,0,1,1,0,0,0,0,.1l35.8,80.29L212,77.39a16,16,0,0,1,27.71,13.42Z">
                                </path>
                            </svg>
                            Tensei Shittara slime dattaken
                        </div>
                        <p class="text-sm text-black flex gap-2 items-center">Ongoing<span
                                class="block h-1 w-1 rounded-full bg-gray-300"></span>
                            <span class="opacity-50">25 Volume</span>
                        </p>
                    </a>
                </li>
                <li class="py-3 border-b border-gray-100 last:border-b-0 hover:bg-gray-100 px-4">
                    <a href="{{ route('detail') }}">
                        <div class="text-blue-500 line-clamp-1 flex gap-2 items-center">
                            <svg class="mb-1 text-amber-800" stroke="currentColor" fill="currentColor" stroke-width="0"
                                viewBox="0 0 256 256" height="16px" width="16px" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M239.75,90.81c0,.11,0,.21-.07.32L217,195a16,16,0,0,1-15.72,13H54.71A16,16,0,0,1,39,195L16.32,91.13c0-.11-.05-.21-.07-.32A16,16,0,0,1,44,77.39l33.67,36.29,35.8-80.29a1,1,0,0,0,0-.1,16,16,0,0,1,29.06,0,1,1,0,0,0,0,.1l35.8,80.29L212,77.39a16,16,0,0,1,27.71,13.42Z">
                                </path>
                            </svg>
                            Overload
                        </div>
                        <p class="text-sm text-black flex gap-2 items-center">End<span
                                class="block h-1 w-1 rounded-full bg-gray-300"></span>
                            <span class="opacity-50">13 Volume</span>
                        </p>
                    </a>
                </li>
                <li class="py-3 border-b border-gray-100 last:border-b-0 hover:bg-gray-100 px-4">
                    <a href="{{ route('detail') }}">
                        <div class="text-blue-500 line-clamp-1 flex gap-2 items-center">
                            Sword Art Online
                        </div>
                        <p class="text-sm text-black flex gap-2 items-center">End<span
                                class="block h-1 w-1 rounded-full bg-gray-300"></span>
                            <span class="opacity-50">20 Volume</span>
                        </p>
                    </a>
                </li>
                <li class="py-3 border-b border-gray-100 last:border-b-0 hover:bg-gray-100 px-4">
                    <a href="{{ route('detail') }}">
                        <div class="text-blue-500 line-clamp-1 flex gap-2 items-center">
                            Re:Zero kara Hajimeru Isekai Seikatsu
                        </div>
                        <p class="text-sm text-black flex gap-2 items-center">End<span
                                class="block h-1 w-1 rounded-full bg-gray-300"></span>
                            <span class="opacity-50">18 Volume</span>
                        </p>
                    </a>
                </li>
            </ul>
        </section>
    </section>

    @include('components.footer')
@endsection
