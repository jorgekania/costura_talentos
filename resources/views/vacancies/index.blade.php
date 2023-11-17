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
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Publicada{{ $vacancie->published_time }}
                            </p>

                            <p
                                class="flex items-center font-bold text-sm text-white text-center p-2 mt-3 rounded-full  bg-primary-blue px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

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
