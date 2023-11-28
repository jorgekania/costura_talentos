@extends('layouts.app')

@section('content')
    <div class="max-w-screen-xl mt-8 justify-center">
        <div class="bg-banner-recruiter bg-cover bg-no-repeat shadow-[0px_20px_30px_0px_#4a5568]">
            <div class="w-full bg-gray-950/50 backdrop-opacity-50">
                <div class="w-2/3 h-full mx-auto my- items-center text-center py-28">
                    <h1 class="text-4xl font-bold tracking-wider text-white mb-1">Aumente suas chances de contratar</h1>
                    <p class="text-white mb-10">Aqui no <span class="font-extrabold text-primary-orange">Costura
                            Talentos</span> você encontra o profissional da moda certo para seu
                        negócio</p>
                    <a class="bg-primary-orange px-6 py-3 rounded-full text-lg text-white font-bold border border-white hover:bg-hover-orange hover:shadow-[0px_3px_8px_0.24px_#fa972f] uppercase"
                        href="{{ route('company.login') }}">Anúncie Suas Vagas Grátis</a>
                </div>
            </div>
        </div>
        <div class="w-full text-center p-20">
            <h1 class="text-3xl font-extrabold text-primary-blue">Simples, Prático, Rápido e Gratuíto</h1>
            <div class="flex justify-center items-center py-10 space-x-5">
                <div class="w-1/4 p-5 text-center border rounded-lg shadow-md">
                    <x-heroicon-o-newspaper class="w-24 h-24 m-auto text-primary-orange"/>
                    <h1 class="font-bold mt-5 uppercase mb-2">cadastre-se</h1>
                    <p>Cadastre seu estabelecimento gratuitamente</p>
                </div>
                <div class="w-1/4 p-5 text-center border rounded-lg shadow-md">
                    <x-heroicon-o-megaphone class="w-24 h-24 m-auto text-primary-orange"/>
                    <h1 class="font-bold mt-5 uppercase mb-2">Divulgue suas vagas</h1>
                    <p>Anuncie suas vagas e atraia mais cadidatos</p>
                </div>
                <div class="w-1/4 p-5 text-center border rounded-lg shadow-md">
                    <x-heroicon-o-users class="w-24 h-24 m-auto text-primary-orange"/>
                    <h1 class="font-bold mt-5 uppercase mb-2">Contrate</h1>
                    <p>Escolha seus candidatos e eleve o nível de seus colaboradores</p>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-center items-center text-center">
            <div class="w-1/2">
                <img src="{{ Storage::url('global/brazil-map.png') }}" alt="Encontre candidatos em todas as regiões">
            </div>
            <div class="w-1/2 p-20">
                <h1 class="text-3xl text-primary-blue font-extrabold mb-10">Recrute profissionais da moda em todo o Brasil
                </h1>
                <p class="text-xl font-light">Admitir novos colaboradores para sua empresa nunca foi tão simples, prático e
                    rápido!</p>
                <a href="{{ route('company.login') }}"
                    class="flex justify-center text-md bg-primary-orange hover:bg-hover-orange shadow shadow-gray-500 font-bold text-white py-4 px-6 mt-10 -mb-5 rounded-full my-5  m-auto text-center ">
                    <x-heroicon-o-megaphone class="w-6 h-6 mr-3"/>
                    ANÚNCIE SUAS VAGAS GRÁTIS</a>
            </div>
        </div>
    </div>
@endsection
