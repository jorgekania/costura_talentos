@extends('layouts.app')

@section('content')
    <div class="flex mt-10">
        <div class="w-1/4 bg-base mr-10 p-3 border border-secondary-blue rounded-md">
            @include('components.vacancy.filters')
        </div>
        <div class="w-3/4">
            <h1 class="text-2xl font-bold mb-5 text-primary-blue text-center">
                @if ($vacancies->total() == 0)
                    Nenhuma vaga disponivel no momento!
                @elseif (request()->segment(1) === 'vagas')
                    {{ $vacancies->total() }} vagas em todas as áreas da moda!
                @else
                    {{ $vacancies->total() }} vagas para {{ $vacancies[0]->specialization->specialization }}
                @endif
            </h1>

            @foreach ($vacancies as $vacancie)
                <a href="{{ route('vacancy', [Str::slug($vacancie->title), $vacancie->id]) }}"
                    class="flex border-t border-primary-blue hover:bg-base cursor-pointer p-5">
                    <div class="w-1/4 mr-5">
                        <img src="{{ Storage::url($vacancie->company->logo) }}" alt="">
                    </div>
                    <div class="w-3/4">
                        <h1 class="text-xl font-bold text-primary-blue mb-5">{{ $vacancie->title }}</h1>
                        <div class="flex text-md">
                            <div class="font-semibold mr-2 text-primary-blue">
                                <p>Empresa:</p>
                                <p>Cargo/Função:</p>
                                <p>Localização:</p>
                                <p>Remuneração:</p>
                                <p>Requerimentos:</p>
                            </div>
                            <div class="text-primary-blue">
                                <p>{{ $vacancie->company->corporate_reason }}</p>
                                <p>{{ $vacancie->specialization->specialization }}</p>
                                <p>{{ $vacancie->company->city }} / {{ $vacancie->company->short_state }}</p>
                                <p>{{ $vacancie->remuneration_value === 0 ? 'a combinar' : MyNumbers::formatCurrency($vacancie->remuneration_value, 'pt_BR', 'R$') }}
                                </p>
                                <p>{{ Str::limit($vacancie->activities_and_responsibilities, 100, '...') }}</p>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <p
                                class="flex items-center font-semibold text-sm text-white text-center p-2 mt-3 rounded-full bg-primary-orange mr-3 px-3">
                                <x-heroicon-o-clock class="w-4 h-4 mr-2" />
                                Publicada{{ $vacancie->published_time }}
                            </p>

                            <p
                                class="flex items-center font-bold text-sm text-white text-center p-2 mt-3 rounded-full  bg-primary-blue px-3">
                                <x-heroicon-o-eye class="w-4 h-4 mr-2" />
                                VER VAGA
                            </p>
                        </div>

                    </div>
                </a>
            @endforeach
            @include('components.paginate')
        </div>
    </div>
@endsection
