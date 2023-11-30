@extends('layouts.app')

@section('content')
    <div class="flex mt-10">
        <!-- SIMULAR VACANCIES -->
        <div class="w-1/3 mr-10 py-3">
            <h1
                class="text-xl font-bold text-primary-blue items-center mb-4 bg-base p-3 rounded-md border-l-8 border-primary-orange">
                Vagas similares:</h1>

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

        <!-- VACANCy -->
        <div class="w-2/3 py-3">
            <div class="flex justify-between items-center mb-4 bg-base p-3 rounded-md border-l-8 border-primary-orange">
                <p class="w-2/3 text-xl text-primary-blue font-bold">{{ $vacancy->title }}</p>
                <p class="w-1/3 text-sm text-primary-blue text-right">{{ $vacancy->published_time }}</p>
            </div>

            <div class="p-5 shadow-md shadow-slate-400 rounded-lg">
                <div class="flex items-center mb-16 text-md text-primary-blue">
                    <div class="w-1/4 mr-5">
                        <img src="{{ Storage::url($vacancy->company->logo) }}" alt="">
                    </div>
                    <div class="w-3/4">
                        <p class="text-2xl font-semibold text-primary-blue mb-2">{{ $vacancy->company->corporate_reason }}
                        </p>
                        <div class="mb-5">
                            <div>
                                <span class="font-semibold">Empresa de porte:</span>
                                <span class="lowercase">{{ $vacancy->company->company_size }}</span>
                            </div>
                            <div class="flex">
                                <span class="font-semibold mr-2">Endereço:</span>
                                <a href="{{ $vacancy->company->url_google_maps }}" title="Acessar no Google Maps"
                                    target="_blank" class="flex items-center">{{ $vacancy->company->address_company }}
                                    <x-heroicon-o-link class="w-4 h-4 ml-1" />
                                </a>
                            </div>
                            <div class="flex">
                                <span class="font-semibold mr-2">Telefone(s):</span>
                                @if (count($vacancy->company->phones) === 0)
                                    telefone não informado
                                @endif
                                @foreach ($vacancy->company->phones as $phones)
                                    <span class="flex text-xs items-center mr-1 py-1 px-2 bg-gray-200 rounded-full">
                                        @if ($phones->phone_type->name === 'WHATSAPP')
                                            <x-bi-whatsapp class="w-4 h-4 mr-1" />
                                        @elseif ($phones->phone_type->name === 'MOBILE')
                                            <x-heroicon-o-device-phone-mobile class="w-4 h-4 mr-1" />
                                        @elseif ($phones->phone_type->name === 'FIX')
                                            <x-heroicon-o-phone class="w-4 h-4 mr-1" />
                                        @endif
                                        {{ $phones->formatted_phone_number }}
                                    </span>
                                @endforeach
                            </div>
                            <div>
                                <span class="font-semibold">Email:</span>
                                <span>{{ $vacancy->company->email }}</span>
                            </div>
                            <div class="flex">
                                <span class="font-semibold mr-2">Web Site:</span>
                                <a href="{{ url(Str::startsWith($vacancy->company->website, 'http://') ? $vacancy->company->website : 'http://' . $vacancy->company->website) }}"
                                    target="_blank"
                                    title="Acessar Site da empresa {{ $vacancy->company->corporate_reason }}"
                                    class="flex items-center underline">
                                    {{ $vacancy->company->website }}
                                    <x-heroicon-o-link class="w-4 h-4 ml-1" />
                                </a>
                            </div>
                        </div>

                        <p class="mb-1"><span class="font-semibold">Remuneração paga por:</span> <span
                                class="lowercase">{{ $vacancy->work_where }}</span>
                        </p>
                        <p class="mb-1"><span class="font-semibold">Remuneração
                                Valor:
                            </span>{{ $vacancy->remuneration_value === 0 ? ' a combinar' : MyNumbers::formatCurrency($vacancy->remuneration_value, 'pt_BR', 'R$') }}
                        </p>
                        <p class="mb-1"><span class="font-semibold">Mínimo de Experiência:</span>
                            {{ $vacancy->time_experience == 0 ? 'sem experiência' : $vacancy->time_experience }}</p>
                        <p><span class="font-semibold mr-2">Tipo de contrato:</span><span
                                class="text-sm font-extrabold bg-blue-500 text-white py-1 px-2 rounded-full">{{ $vacancy->hiring_regime }}</span>
                        </p>
                    </div>
                </div>

                @include('components.vacancy.buttons-vacancy')

                <div class="text-sm text-primary-blue mb-10">
                    <p class="flex items-center text-xl font-extrabold mb-5">
                        <x-heroicon-o-building-office class="w-10 h-10 mr-3" />
                        Sobre a empresa
                    </p>
                    <p>{{ $vacancy->company->description }}</p>
                </div>
                <div class="text-sm text-primary-blue mb-10">
                    <p class="flex items-center text-xl font-extrabold mb-5">
                        <x-heroicon-o-puzzle-piece class="w-10 h-10 mr-3" />
                        Diferenciais da Empresa
                    </p>
                    <p>{{ $vacancy->the_company_offers }}</p>
                </div>
                <div class="text-sm text-primary-blue mb-10">
                    <p class="flex items-center text-xl font-extrabold mb-5">
                        <x-heroicon-o-information-circle class="w-10 h-10 mr-3" />
                        A Vaga Requer
                    </p>
                    <p>{!! $vacancy->vacancy_requirements !!}</p>
                </div>
                <div class="text-sm text-primary-blue mb-10">
                    <p class="flex items-center text-xl font-extrabold mb-5">
                        <x-heroicon-o-clipboard-document-check class="w-10 h-10 mr-3" />
                        Atividades e Responsabilidades
                    </p>
                    <p>{!! $vacancy->activities_and_responsibilities !!}</p>
                </div>

                @if (count($vacancy->industrialMachines) > 0)
                    <div class="text-sm text-primary-blue mb-10">
                        <p class="flex items-center text-xl font-extrabold mb-5">
                            <x-heroicon-o-cog class="w-10 h-10 mr-3" />
                            @if ($vacancy->hiring_regime === 'CLT' || $vacancy->hiring_regime === 'PJ')
                                Necessário Experiencia nas Seguintes Máquinas
                            @elseif ($vacancy->hiring_regime === 'FACCIONISTA')
                                Necessário Ter as Seguintes Máquinas
                            @endif
                        </p>
                        @foreach ($vacancy->industrialMachines as $machines)
                            <div class="flex items-center">
                                <div class="w-1/4 mr-5 mb-10">
                                    <img src="{{ Storage::url($machines->image) }}" alt="">
                                    <p class="text-xs italic text-center text-secondary-blue mt-1">a imagem pode variar de
                                        acordo com o fabricante e ano</p>
                                </div>
                                <div class="w-2/3">
                                    <p class="text-md font-semibold mb-1">{{ $machines->machines }}</p>
                                    <p class="mb-3">{{ $machines->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

                @include('components.vacancy.buttons-vacancy')

            </div>
        </div>
    </div>
@endsection
