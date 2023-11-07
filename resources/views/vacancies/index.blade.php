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
                    {{ $vacancies->total() }} vagas em todas as áreas!
                @else
                    {{ $vacancies->total() }} vagas para {{ $vacancies[0]->specialization->specialization }}
                @endif
            </h1>

            @foreach ($vacancies as $vacancie)
                @php
                    $publisher = MyDateTime::diffInYearsMonthsDays(now(), $vacancie->created_at);

                    if ($publisher['minutes'] == 0) {
                        $publisherString = ' agora ';
                    } elseif ($publisher['hours'] == 0) {
                        $publisherString = ' à ' . $publisher['minutes'] . ' minutos';
                    } elseif ($publisher['days'] == 0) {
                        $publisherString = ' à ' . $publisher['hours'] . ' horas';
                    } else {
                        $publisherString = ' em ' . MyDateTime::formatDate($vacancie->created_at, 'd/m/Y');
                    }
                @endphp

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
                                <p>{{ MyNumbers::formatCurrency($vacancie->remuneration_value, 'pt_BR', 'R$') }}</p>
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
                                Publicada{{ $publisherString }}
                            </p>

                            <p
                                class="flex items-center font-bold text-sm text-white text-center p-2 mt-3 rounded-full  bg-primary-blue px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002" />
                                </svg>
                                CANDIDATAR-SE
                            </p>
                        </div>

                    </div>
                </a>
            @endforeach
            @include('components.paginate')
        </div>
    </div>
@endsection
