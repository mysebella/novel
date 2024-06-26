@extends('_layout.app-container')

@section('content')
    @include('ui.auth.components.navbar')

    <div class="p-4 border-b border-primary border-dashed">
        <p class="text-slate-800 text-lg">Login</p>
    </div>

    <section class="p-4 bg-white">
        <form>
            <p class="mb-2">Email Address</p>
            <input type="text" name="email" placeholder="Masukan email address"
                class="w-full px-4 py-2 border-2 border-gray-200 outline-primary mb-4" />
            <p class="mb-2">Password</p>
            <input type="text" name="email" placeholder="Masukan password"
                class="w-full px-4 py-2 border-2 border-gray-200 outline-primary mb-4" />
            <a href="" class="block mb-4 text-blue-500">Jika kamu lupa password click disini</a>
            <button class="p-3 bg-blue-500 w-full text-white">Login</button>
        </form>
        <div class="border-b border-black/20 w-full mt-4"></div>
        <a href="{{ route('register') }}" class="p-3 text-center mt-4 bg-orange block w-full text-white">Daftar anggota</a>
    </section>

    @include('components.footer')
@endsection
