@extends('layouts.app')

@section('content')
    <div class="flex mt-10">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                                    </svg>
                                </a>
                            </div>
                            <div class="flex">
                                <span class="font-semibold mr-2">Telefone(s):</span>
                                @foreach ($vacancy->company->phones as $phones)
                                    <span class="flex text-xs items-center mr-1 py-1 px-2 bg-gray-200 rounded-full">
                                        @if ($phones->phone_type->name === 'WHATSAPP')
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0,0,256,256"
                                                class="w-4 h-4 mr-1">
                                                <g fill="#4b5c75" fill-rule="evenodd" stroke="none" stroke-width="1"
                                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                    font-weight="none" font-size="none" text-anchor="none"
                                                    style="mix-blend-mode: normal">
                                                    <g transform="scale(8,8)">
                                                        <path
                                                            d="M24.50391,7.50391c-2.25781,-2.25781 -5.25781,-3.50391 -8.45312,-3.50391c-6.58594,0 -11.94922,5.35938 -11.94922,11.94531c-0.00391,2.10547 0.54688,4.16016 1.59375,5.97266l-1.69531,6.19141l6.33594,-1.66406c1.74219,0.95313 3.71094,1.45313 5.71094,1.45703h0.00391c6.58594,0 11.94531,-5.35937 11.94922,-11.94922c0,-3.19141 -1.24219,-6.19141 -3.49609,-8.44922zM16.05078,25.88281h-0.00391c-1.78125,0 -3.53125,-0.48047 -5.05469,-1.38281l-0.36328,-0.21484l-3.76172,0.98438l1.00391,-3.66406l-0.23437,-0.375c-0.99609,-1.58203 -1.51953,-3.41016 -1.51953,-5.28516c0,-5.47266 4.45703,-9.92578 9.9375,-9.92578c2.65234,0 5.14453,1.03516 7.01953,2.91016c1.875,1.87891 2.90625,4.37109 2.90625,7.02344c0,5.47656 -4.45703,9.92969 -9.92969,9.92969zM21.49609,18.44531c-0.29687,-0.14844 -1.76562,-0.87109 -2.03906,-0.96875c-0.27344,-0.10156 -0.47266,-0.14844 -0.67187,0.14844c-0.19922,0.30078 -0.76953,0.97266 -0.94531,1.17188c-0.17187,0.19531 -0.34766,0.22266 -0.64453,0.07422c-0.30078,-0.14844 -1.26172,-0.46484 -2.40234,-1.48437c-0.88672,-0.78906 -1.48828,-1.76953 -1.66016,-2.06641c-0.17578,-0.30078 -0.01953,-0.46094 0.12891,-0.60937c0.13672,-0.13281 0.30078,-0.34766 0.44922,-0.52344c0.14844,-0.17187 0.19922,-0.29687 0.30078,-0.49609c0.09766,-0.19922 0.04688,-0.375 -0.02734,-0.52344c-0.07422,-0.14844 -0.67187,-1.62109 -0.92187,-2.21875c-0.24219,-0.58203 -0.48828,-0.5 -0.67187,-0.51172c-0.17187,-0.00781 -0.37109,-0.00781 -0.57031,-0.00781c-0.19922,0 -0.52344,0.07422 -0.79687,0.375c-0.27344,0.29688 -1.04297,1.01953 -1.04297,2.48828c0,1.46875 1.07031,2.89063 1.21875,3.08984c0.14844,0.19531 2.10547,3.21094 5.10156,4.50391c0.71094,0.30859 1.26563,0.49219 1.69922,0.62891c0.71484,0.22656 1.36719,0.19531 1.88281,0.12109c0.57422,-0.08594 1.76563,-0.72266 2.01563,-1.42187c0.24609,-0.69531 0.24609,-1.29297 0.17188,-1.41797c-0.07422,-0.125 -0.27344,-0.19922 -0.57422,-0.35156z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        @elseif ($phones->phone_type->name === 'MOBILE')
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                            </svg>
                                        @elseif ($phones->phone_type->name === 'FIX')
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                            </svg>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                                    </svg>

                                </a>
                            </div>
                        </div>

                        <p class="mb-1"><span class="font-semibold">Remuneração paga por:</span> <span
                                class="lowercase">{{ $vacancy->work_where }}</span>
                        </p>
                        <p class="mb-1"><span class="font-semibold">Remuneração
                                Valor:</span>{{ $vacancy->remuneration_value === 0 ? ' a combinar' : MyNumbers::formatCurrency($vacancy->remuneration_value, 'pt_BR', 'R$') }}
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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                        </svg>
                        Sobre a empresa
                    </p>
                    <p>{{ $vacancy->company->description }}</p>
                </div>
                <div class="text-sm text-primary-blue mb-10">
                    <p class="flex items-center text-xl font-extrabold mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.25 6.087c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.036-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959v0a.64.64 0 01-.657.643 48.39 48.39 0 01-4.163-.3c.186 1.613.293 3.25.315 4.907a.656.656 0 01-.658.663v0c-.355 0-.676-.186-.959-.401a1.647 1.647 0 00-1.003-.349c-1.036 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401v0c.31 0 .555.26.532.57a48.039 48.039 0 01-.642 5.056c1.518.19 3.058.309 4.616.354a.64.64 0 00.657-.643v0c0-.355-.186-.676-.401-.959a1.647 1.647 0 01-.349-1.003c0-1.035 1.008-1.875 2.25-1.875 1.243 0 2.25.84 2.25 1.875 0 .369-.128.713-.349 1.003-.215.283-.4.604-.4.959v0c0 .333.277.599.61.58a48.1 48.1 0 005.427-.63 48.05 48.05 0 00.582-4.717.532.532 0 00-.533-.57v0c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.035 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.37 0 .713.128 1.003.349.283.215.604.401.96.401v0a.656.656 0 00.658-.663 48.422 48.422 0 00-.37-5.36c-1.886.342-3.81.574-5.766.689a.578.578 0 01-.61-.58v0z" />
                        </svg>

                        Diferenciais da Empresa
                    </p>
                    <p>{{ $vacancy->the_company_offers }}</p>
                </div>
                <div class="text-sm text-primary-blue mb-10">
                    <p class="flex items-center text-xl font-extrabold mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                        </svg>

                        A Vaga Requer
                    </p>
                    <p>{{ $vacancy->vacancy_requirements }}</p>
                </div>
                <div class="text-sm text-primary-blue mb-10">
                    <p class="flex items-center text-xl font-extrabold mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                        </svg>
                        Atividades e Responsabilidades
                    </p>
                    <p>{{ $vacancy->activities_and_responsibilities }}</p>
                </div>

                @if (count($vacancy->industrialMachines) > 0)
                    <div class="text-sm text-primary-blue mb-10">
                        <p class="flex items-center text-xl font-extrabold mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-10 h-10 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.795l.75-1.3m7.5-12.99l.75-1.3m-6.063 16.658l.26-1.477m2.605-14.772l.26-1.477m0 17.726l-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205L12 12m6.894 5.785l-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864l-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
                            </svg>

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
