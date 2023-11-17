@extends('layouts.app')

@section('content')
    <div class="flex mt-10">
        <div class="w-1/3 mr-10 py-3">
            <div>
                <h1 class="text-2xl font-bold mb-10 text-primary-blue">Vagas similares:</h1>

                @foreach ($otherVacancies as $vacancie)
                    <a href="{{ route('vacancy', [Str::slug($vacancie->title), $vacancie->id]) }}">
                        <div
                            class="p-3 mb-5 bg-white shadow-md shadow-slate-400 hover:shadow-lg hover:shadow-slate-500 rounded-lg">
                            <div class="flex justify-between items-center mb-3">
                                <p class="w-2/3 text-md text-primary-blue font-bold">{{ $vacancie->title }}</p>
                                <p class="w-1/3 text-xs text-secondary-blue text-right">{{ $vacancie->published_time }}</p>
                            </div>
                            <div class="mb-2">
                                <p class="text-sm font-semibold text-primary-blue">{{ $vacancie->company->corporate_reason }}
                                </p>
                            </div>
                            <div class="flex items-center mb-3 text-xs text-primary-blue">
                                <p class="border-r border-primary-blue pr-3">{{ $vacancie->company->city }} /
                                    {{ $vacancie->company->short_state }}</p>
                                <p class="pl-3 lowercase">por {{ $vacancie->work_where }}</p>
                            </div>
                            <div class="text-sm text-primary-blue mt-5">
                                <p>
                                    <span class="text-sm font-semibold">Breve descrição da vaga:
                                    </span>{{ Str::limit($vacancie->activities_and_responsibilities, 150, '...') }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="w-2/3 py-3">
            <div class="flex justify-between items-center mb-10">
                <p class="w-2/3 text-2xl text-primary-blue font-bold">{{ $vacancy->title }}</p>
                <p class="w-1/3 text-sm text-secondary-blue text-right">{{ $vacancy->published_time }}</p>
            </div>

            <div class="p-5 shadow-md shadow-slate-400 rounded-lg">
                <div class="flex items-center mb-16 text-md text-primary-blue">
                    <div class="w-1/4 mr-5">
                        <img src="{{ Storage::url($vacancy->company->logo) }}" alt="">
                    </div>
                    <div class="w-3/4">
                        <p class="text-lg font-semibold text-primary-blue mb-5">{{ $vacancy->company->corporate_reason }}
                        </p>
                        <p class="mb-1"><span class="font-semibold">Local:</span> {{ $vacancy->company->city }} /
                            {{ $vacancy->company->short_state }}</p>
                        <p class="mb-1"><span class="font-semibold">Remuneração por:</span> {{ $vacancy->work_where }}
                        </p>
                        <p class="mb-1"><span
                                class="font-semibold">Remuneração:</span>{{ $vacancy->remuneration_value === 0 ? 'a combinar' : MyNumbers::formatCurrency($vacancy->remuneration_value, 'pt_BR', 'R$') }}
                        </p>
                        <p class="mb-1"><span class="font-semibold">Mínimo de Experiência:</span>
                            {{ $vacancy->time_experience == 0 ? 'sem experiência' : $vacancy->time_experience }}</p>
                        <p><span class="font-semibold">Tipo de contrato:</span> {{ $vacancy->hiring_regime }}</p>
                    </div>
                </div>
                <div class="flex mb-10 justify-center space-x-10">
                    <a href=""
                        class="flex items-center font-bold text-sm text-white text-center px-4 py-2 mt-3 rounded-full  bg-primary-orange px-">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002" />
                        </svg>
                        CANDIDATAR-ME
                    </a>
                    <a href=""
                        class="flex items-center font-bold text-sm text-white text-center px-4 py-2 mt-3 rounded-full  bg-green-700 px-">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" />
                        </svg>

                        COMPARTILHAR
                    </a>
                </div>

                <div class="text-sm text-primary-blue mb-10">
                    <p class="text-xl font-semibold mb-5 border-l-8 border-primary-blue pl-2">Sobre a empresa</p>
                    <p>{{ $vacancy->company->description }}</p>
                </div>
                <div class="text-sm text-primary-blue mb-10">
                    <p class="text-xl font-semibold mb-5 border-l-8 border-primary-blue pl-2">Diferenciais da Empresa</p>
                    <p>{{ $vacancy->the_company_offers }}</p>
                </div>
                <div class="text-sm text-primary-blue mb-10">
                    <p class="text-xl font-semibold mb-5 border-l-8 border-primary-blue pl-2">A Vaga Requer</p>
                    <p>{{ $vacancy->vacancy_requirements }}</p>
                </div>
                <div class="text-sm text-primary-blue mb-10">
                    <p class="text-xl font-semibold mb-5 border-l-8 border-primary-blue pl-2">Atividades e Responsabilidades
                    </p>
                    <p>{{ $vacancy->activities_and_responsibilities }}</p>
                </div>
                <div class="text-sm text-primary-blue mb-10">
                    <p class="text-xl font-semibold mb-5 border-l-8 border-primary-blue pl-2">Necessário as
                        Seguintes Máquinas</p>
                    @foreach ($vacancy->industrialMachines as $machines)
                        <div class="flex items-center">
                            <div class="w-1/4 mr-5"><img src="{{ Storage::url($machines->image) }}" alt=""></div>
                            <div class="w-2/3">
                                <p class="text-md font-semibold mb-1">{{ $machines->machines }}</p>
                                <p class="mb-3">{{ $machines->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

    </div>
@endsection
