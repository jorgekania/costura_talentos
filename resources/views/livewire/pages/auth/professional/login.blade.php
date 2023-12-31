@extends('layouts.app')

@section('content')
    <div class="bg-white flex justify-center">
        <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12 border rounded-xl shadow mt-20">
            <div class="flex flex-col items-center">
                <h1 class="text-2xl xl:text-3xl font-extrabold text-primary-blue">
                    Aceso para Candidatos
                </h1>
                <div class="w-full flex-1 mt-16">
                    <p class="text-center mb-3 text-secondary-blue">Conexão Rápida</p>
                    <div class="text-center">
                        @include('components.auth.social-buttons')
                    </div>

                    <div class="my-12 border-b text-center">
                        <div
                            class="leading-none px-2 inline-block text-sm text-secondary-blue tracking-wide font-medium bg-white transform translate-y-1/2">
                            Ou faça login com seu e-mail
                        </div>
                    </div>

                    <div class="mx-auto max-w-xs">
                        @error('email')
                            <span class="text-red-600 font-light mb-5 block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <form action="{{ route('professional.login') }}" method="POST">
                            @csrf
                            <input
                                class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-secondary-blue placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                type="email" name="email" id="email"
                                placeholder="Email" />
                            <input
                                class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-secondary-blue placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                type="password" name="password" id="password" placeholder="Senha" />
                            <button
                                class="mt-5 tracking-wide font-semibold bg-primary-blue text-gray-100 w-full py-4 rounded-lg hover:bg-secondary-blue hover:text-primary-blue transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                <x-heroicon-o-arrow-left-on-rectangle class="w-6 h-6 -ml-2"/>
                                <span class="ml-3">
                                    Entrar
                                </span>
                            </button>
                        </form>
                    </div>
                    <div class="mt-5 text-primary-blue text-center">
                        <p class="font-extrabold">É novo aqui no Costura Talentos?</p>
                        <p> Cadastrar-se como <a href="{{ route('professional.register') }}"
                                title="Cadastre-se como Candidato no Costura Talentos"
                                class="text-primary-orange font-bold hover:underline">Candidato</a> ou <a
                                href="{{ route('company.register') }}" title="Cadastre-se como Empresa no Costura Talentos"
                                class="text-primary-orange font-bold hover:underline">Empresa</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
