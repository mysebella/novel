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
        <svg class="text-success" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512"
            height="18px" width="18px" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 512V48C0 21.49 21.49 0 48 0h288c26.51 0 48 21.49 48 48v464L192 400 0 512z"></path>
        </svg>
        <p>Bookmark</p>
    </div>

    <section class="w-full bg-white shadow-sm border-y border-primary border-dashed">
        <ul class="">
            <li
                class="py-3 flex items-center justify-between mb-1 border-b border-gray-100 last:border-b-0 hover:bg-gray-100 px-4">
                <a href="{{ route('detail') }}">
                    <div class="text-blue-500 line-clamp-1 flex gap-2 items-center">
                        Mushoku Tensei - Jobless Reincarnation
                    </div>
                    <p class="text-sm text-black flex gap-2 items-center">Ongoing<span
                            class="block h-1 w-1 rounded-full bg-gray-300"></span>
                        <span class="opacity-50">13 Volume</span>
                    </p>
                </a>
                <form>
                    <button>
                        <svg class="text-danger" stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 448 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z">
                            </path>
                        </svg>
                    </button>
                </form>
            </li>
            <li
                class="py-3 flex items-center justify-between mb-1 border-b border-gray-100 last:border-b-0 hover:bg-gray-100 px-4">
                <a href="{{ route('detail') }}">
                    <div class="text-blue-500 line-clamp-1 flex gap-2 items-center">
                        Mushoku Tensei - Jobless Reincarnation
                    </div>
                    <p class="text-sm text-black flex gap-2 items-center">Ongoing<span
                            class="block h-1 w-1 rounded-full bg-gray-300"></span>
                        <span class="opacity-50">13 Volume</span>
                    </p>
                </a>
                <form>
                    <button>
                        <svg class="text-danger" stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 448 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z">
                            </path>
                        </svg>
                    </button>
                </form>
            </li>
            <li
                class="py-3 flex items-center justify-between mb-1 border-b border-gray-100 last:border-b-0 hover:bg-gray-100 px-4">
                <a href="{{ route('detail') }}">
                    <div class="text-blue-500 line-clamp-1 flex gap-2 items-center">
                        Mushoku Tensei - Jobless Reincarnation
                    </div>
                    <p class="text-sm text-black flex gap-2 items-center">Ongoing<span
                            class="block h-1 w-1 rounded-full bg-gray-300"></span>
                        <span class="opacity-50">13 Volume</span>
                    </p>
                </a>
                <form>
                    <button>
                        <svg class="text-danger" stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 448 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z">
                            </path>
                        </svg>
                    </button>
                </form>
            </li>
            <li
                class="py-3 flex items-center justify-between mb-1 border-b border-gray-100 last:border-b-0 hover:bg-gray-100 px-4">
                <a href="{{ route('detail') }}">
                    <div class="text-blue-500 line-clamp-1 flex gap-2 items-center">
                        Mushoku Tensei - Jobless Reincarnation
                    </div>
                    <p class="text-sm text-black flex gap-2 items-center">Ongoing<span
                            class="block h-1 w-1 rounded-full bg-gray-300"></span>
                        <span class="opacity-50">13 Volume</span>
                    </p>
                </a>
                <form>
                    <button>
                        <svg class="text-danger" stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 448 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z">
                            </path>
                        </svg>
                    </button>
                </form>
            </li>
            <li
                class="py-3 flex items-center justify-between mb-1 border-b border-gray-100 last:border-b-0 hover:bg-gray-100 px-4">
                <a href="{{ route('detail') }}">
                    <div class="text-blue-500 line-clamp-1 flex gap-2 items-center">
                        Mushoku Tensei - Jobless Reincarnation
                    </div>
                    <p class="text-sm text-black flex gap-2 items-center">Ongoing<span
                            class="block h-1 w-1 rounded-full bg-gray-300"></span>
                        <span class="opacity-50">13 Volume</span>
                    </p>
                </a>
                <form>
                    <button>
                        <svg class="text-danger" stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 448 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z">
                            </path>
                        </svg>
                    </button>
                </form>
            </li>
        </ul>
    </section>

    @include('components.ads')

    @include('components.footer')
@endsection
