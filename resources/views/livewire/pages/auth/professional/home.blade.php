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
                    <x-heroicon-o-squares-2x2 class="w-6 h-6 mr-3"/>
                    Dashboard</a>

                <a href="{{ route('professional.profile') }}" class="flex text-primary-blue hover:font-bold items-center"
                    title="Dashboard">
                    <x-heroicon-o-user class="w-6 h-6 mr-3"/>
                    Perfil</a>

                <a href="{{ route('professional.myVacancies') }}" class="flex text-primary-blue hover:font-bold items-center"
                    title="Dashboard">
                    <x-heroicon-o-hand-raised class="w-6 h-6 mr-3"/>
                    Minhas Vagas</a>

                <a href="{{ route('professional.logout') }}" class="flex text-red-600  hover:font-bold items-center"
                    title="Dashboard">
                    <x-heroicon-o-arrow-right-on-rectangle class="w-6 h-6 mr-3"/>
                    Sair</a>
            </div>
        </div>
        <div class="w-3/4 border border-secondary-blue p-5 rounded-lg">
            @yield('content-professional')
        </div>
    </div>
@endsection
