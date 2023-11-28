@extends('layouts.app')

@section('content')
    <div class="flex max-w-screen-xl mt-20 bg-white">
        <div class="w-1/4 bg-base rounded-lg p-5 mr-5 shadow-lg">
            <div class="w-36 m-auto">
                @php
                    $company = Auth::guard('company')->user();
                    $logoPath = $company->logo;
                @endphp
                <img src="{{ $company->provider && str_contains($company->logo, "https://") ? $company->logo : (Storage::disk('public')->exists($logoPath) ? Storage::url($logoPath) : Storage::url('company_logos/company-icon.png')) }}"
                    alt="{{ $company->corporate_reason }}"
                    class="rounded-full shadow-lg border-4 border-primary-blue h-36 w-36 object-cover">
            </div>
            <p
                class="px-5 py-2 m-auto bg-white text-center mt-5 text-primary-blue font-semibold text-md rounded-full shadow-md">
                {{ $company->corporate_reason }}</p>

            <div class="mt-5 border-t border-primary-blue py-5 space-y-5">
                <a href="{{ route('company.dashboard') }}" class="flex text-primary-blue hover:font-bold items-center"
                    title="Dashboard">
                    <x-heroicon-o-squares-2x2 class="w-6 h-6 mr-3"/>
                    Dashboard</a>

                <a href="{{ route('company.profile') }}" class="flex text-primary-blue hover:font-bold items-center"
                    title="Dashboard">
                    <x-heroicon-o-user class="w-6 h-6 mr-3"/>
                    Perfil</a>

                <a href="{{ route('company.myVacancies') }}" class="flex text-primary-blue hover:font-bold items-center"
                    title="Dashboard">
                    <x-heroicon-o-hand-raised class="w-6 h-6 mr-3"/>
                    Vagas Criadas</a>

                <a href="{{ route('company.addVacancies') }}" class="flex text-primary-blue hover:font-bold items-center"
                    title="Dashboard">
                    <x-heroicon-o-newspaper class="w-6 h-6 mr-3"/>
                    Nova Vagas</a>

                <a href="{{ route('company.logout') }}" class="flex text-red-600  hover:font-bold items-center"
                    title="Dashboard">
                    <x-heroicon-o-arrow-right-on-rectangle class="w-6 h-6 mr-3"/>
                    Sair</a>
            </div>
        </div>
        <div class="w-3/4 rounded-lg shadow-lg shadow-black/20">
            @yield('content-company')
        </div>
    </div>
@endsection
