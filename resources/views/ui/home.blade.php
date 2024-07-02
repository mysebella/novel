@extends('_layout.app-container')

@section('content')
    @include('components.navbar')
    <div class="p-4 flex gap-2" id="auth">
        <a href="{{ route('register') }}" class="w-full">
            <div class="bg-orange shadow-sm w-full p-2 text-center text-gray-50 flex justify-center items-center gap-3">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="12px"
                    width="12px" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z">
                    </path>
                </svg>
                Pendaftaran
            </div>
        </a>
        <a href="" class="w-full">
            <div class="bg-white shadow-sm w-full p-2 text-center text-black/80 flex justify-center items-center gap-3">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" height="14px"
                    width="14px" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M224,104v50.93c0,46.2-36.85,84.55-83,85.06A83.71,83.71,0,0,1,80.6,215.4C58.79,192.33,34.15,136,34.15,136a16,16,0,0,1,6.53-22.23c7.66-4,17.1-.84,21.4,6.62l21,36.44a6.09,6.09,0,0,0,6,3.09l.12,0A8.19,8.19,0,0,0,96,151.74V32a16,16,0,0,1,16.77-16c8.61.4,15.23,7.82,15.23,16.43V104a8,8,0,0,0,8.53,8,8.17,8.17,0,0,0,7.47-8.25V88a16,16,0,0,1,16.77-16c8.61.4,15.23,7.82,15.23,16.43V112a8,8,0,0,0,8.53,8,8.17,8.17,0,0,0,7.47-8.25v-7.28c0-8.61,6.62-16,15.23-16.43A16,16,0,0,1,224,104Z">
                    </path>
                </svg>
                Disclaimer
            </div>
        </a>
    </div>

    @include('components.ads')

    @include('ui.components.news')
    @include('ui.components.update')
    @include('ui.components.ranking')

    @include('components.ads')

    @include('components.footer')
@endsection

@section('javascript')
    <script src="{{ asset('') }}js/home.js"></script>
@endsection
