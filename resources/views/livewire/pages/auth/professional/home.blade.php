@extends('layouts.app')

@section('content')
    <div class="flex max-w-screen-xl mt-20 bg-white">
        <div class="w-1/4 bg-base rounded-lg p-5 mr-5">
            <div class="w-1/2 m-auto">
                @php
                    $logoPath = Auth::guard('professional')->user()->avatar;
                @endphp
                <img src="{{ Auth::guard('professional')->user()->provider ? Auth::guard('professional')->user()->avatar : (Storage::disk('public')->exists($logoPath) ? Storage::url($logoPath) : Storage::url('professional_avatars/company-icon.png')) }}"
                    alt="{{ Auth::guard('professional')->user()->corporate_reason }}"
                    class="rounded-full shadow-lg border-4 border-primary-blue">
            </div>
            <p
                class="px-5 py-2 m-auto bg-white text-center mt-5 text-primary-blue font-semibold text-md rounded-full shadow-md">
                {{ Auth::guard('professional')->user()->name }}</p>

            <div class="mt-5 border-t border-primary-blue py-5 space-y-5">
                <a href="{{ route('professional.dashboard') }}" class="flex text-primary-blue hover:font-bold items-center"
                    title="Dashboard">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                    </svg>
                    Dashboard</a>

                <a href="{{ route('professional.profile') }}" class="flex text-primary-blue hover:font-bold items-center"
                    title="Dashboard">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                        </path>
                    </svg>
                    Perfil</a>

                <a href="{{ route('professional.myVacancies') }}" class="flex text-primary-blue hover:font-bold items-center"
                    title="Dashboard">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002" />
                    </svg>

                    Minhas Vagas</a>

                <a href="{{ route('professional.logout') }}" class="flex text-red-600  hover:font-bold items-center"
                    title="Dashboard">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                        </path>
                    </svg>
                    Sair</a>
            </div>
        </div>
        <div class="w-3/4 border border-secondary-blue p-5 rounded-lg">
            @yield('content-professional')
        </div>
    </div>
@endsection
