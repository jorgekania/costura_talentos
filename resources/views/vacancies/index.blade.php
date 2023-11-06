@extends('layouts.app')

@section('content')
    <div class="flex mt-10">
        <div class="w-1/4 bg-base mr-10 p-3 border border-secondary-blue rounded-md">
            <h1 class="text-2xl font-bold mb-5 text-primary-blue">Filtrar Vagas</h1>
            <h2 class="text-lg font-semibold mb-5 text-primary-blue">Cidade/Estado</h2>
            <h2 class="text-lg font-semibold mb-5 text-primary-blue">Segmento da Moda</h2>
            <h2 class="text-lg font-semibold mb-5 text-primary-blue">Tipo de Remuneração</h2>
            <h2 class="text-lg font-semibold mb-5 text-primary-blue">Valor Remuneração</h2>
        </div>
        <div class="w-3/4">
            <h1 class="text-2xl font-bold mb-5 text-primary-blue">649426 vagas de emprego em todo o Brasil</h1>

            @foreach ($vacancies as $vacancie)
                @php
                    $publisher = MyDateTime::diffInYearsMonthsDays('2023-11-01 01:00:00', $vacancie->created_at);
                    if ($publisher['days'] == 0) {
                        $publisherString = ' à: ' . $publisher['hours'] . ' horas';
                    } else {
                        $publisherString = ' em: ' . MyDateTime::formatDate($vacancie->created_at, 'd/m/Y');
                    }
                @endphp
                <a href="" class="flex border-t border-primary-blue hover:bg-base cursor-pointer p-5">
                    <div class="w-1/4 mr-5">
                        <img src="{{ Storage::url($vacancie->company->logo) }}" alt="">
                    </div>
                    <div class="w-3/4">
                        <h1 class="text-xl font-bold text-primary-blue mb-5">{{ $vacancie->title }}</h1>
                        <p>
                            <span
                                class="font-semibold text-sm mr-2 text-primary-blue">Empresa:</span>{{ $vacancie->company->corporate_reason }}
                        </p>
                        <p>
                            <span
                                class="font-semibold text-sm mr-2 text-primary-blue">Cargo/Função:</span>{{ $vacancie->specialization->specialization }}
                        </p>
                        <p>
                            <span
                                class="font-semibold text-sm mr-2 text-primary-blue">Localização:</span>{{ $vacancie->company->city }}
                            / {{ $vacancie->company->short_state }}
                        </p>
                        <p>
                            <span
                                class="font-semibold text-sm mr-2 text-primary-blue">Remuneração:</span>{{ MyNumbers::formatCurrency($vacancie->remuneration_value, 'pt_BR', 'R$') }}
                        </p>

                        <p class="mt-5">
                            <span
                                class="font-semibold text-sm mr-2 text-primary-blue">Requerimentos:</span>{{ Str::limit($vacancie->activities_and_responsibilities, 100, '...') }}
                        </p>

                        <p class="font-semibold text-sm text-white text-center p-2 rounded-full  bg-primary-orange w-1/3">
                            Publicada{{ $publisherString }}</p>

                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
