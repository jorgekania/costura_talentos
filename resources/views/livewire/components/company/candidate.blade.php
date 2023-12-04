<div class="px-4">
    <div class="flex items-center">
        <div class="rounded-full bg-transparent z-10 w-3/5 shadow-lg">
            <img src="{{ Storage::url($professional->avatar) }}" alt="{{ $professional->name }}" class="rounded-full">
        </div>
        <div class="p-5 bg-base -ml-16 rounded-xl shadow-lg">
            <div class="pl-20">
                <h1 class="text-2xl font-bold text-primary-blue mb-1">{{ $professional->name }}</h1>
                <p class="text-md text-blueGray-600">{{ $specialty->specialization }}</p>
                <p class="text-md text-blueGray-600 italic mt-5">Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit.
                    Quasi tempore, consequatur recusandae in non doloribus sint ex debitis fuga exercitationem pariatur
                    consequuntur, rerum illo iure fugit, sapiente quia suscipit beatae. quia suscipit beatae.quia sus
                </p>
            </div>
        </div>
    </div>
    <div class="flex my-5">
        <div class="w-2/6 bg-base p-3 mr-5 rounded-xl">
            <!-- BLOCO DADOS PAESSOAIS -->
            <div class="mb-10 text-sm">
                <h1 class="text-primary-blue font-extrabold text-xl mb-5 border-l-8 border-primary-blue pl-1">Dados Pessoais</h1>
                <div class="pb-5 text-primary-blue">
                    <p class="flex items-center font-semibold mb-2 mr-2">
                        <x-bi-envelope class="w-5 h-5 mr-2" />
                        Email
                    </p>
                    <p class="text-primary-blue"><a href="mailto:{{ $professional->email }} "
                            class="hover:underline">{{ $professional->email }}</a></p>
                </div>

                <div class="pb-5 text-primary-blue">
                    <p class="flex items-center font-semibold mb-2">
                        <x-bi-phone-vibrate class="w-5 h-5 mr-2" />
                        Telefone(s)
                    </p>
                    <div class">
                        <div class="flex">
                            @if (count($professional->phones) > 0)
                                @foreach ($professional->phones as $phone)
                                    <p>{{ MyNumbers::formatPhoneNumber($phone->phone_number) }}</p>
                                @endforeach
                            @else
                                <p>Não informado</p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="pb-5 text-primary-blue">
                    <p class="flex items-center font-semibold mb-2">
                        <x-heroicon-o-map-pin class="w-5 h-5 mr-2" />
                        Localização:
                    </p>
                    <a href="{{ $professional->url_google_maps }}" title="Localização de: {{ $professional->name }}"
                        target="_blank" class hover:underline">{{ $professional->address_professional }}</a>
                </div>
            </div>

            <!-- BLOCO DADOS PAESSOAIS -->
            <div class="mb-10 text-sm">
                <h1 class="text-primary-blue font-extrabold text-xl mb-5 border-l-8 border-primary-blue pl-1">Redes Sociais</h1>
                <div class="pb-5 text-primary-blue">
                    <div class="flex space-x-2 text-sm">

                        @foreach ($professional->socialMedia as $media)
                            @if ($media->name_social_media->value === 'Facebook')
                                <a href="{{ $media->social_media_url }}" target="_blank"><x-bi-facebook
                                        class="w-5 h-5" /></a>
                            @endif
                            @if ($media->name_social_media->value === 'YouTube')
                                <a href="{{ $media->social_media_url }}" target="_blank"><x-bi-youtube
                                        class="w-5 h-5" /></a>
                            @endif
                            @if ($media->name_social_media->value === 'Instagram')
                                <a href="{{ $media->social_media_url }}" target="_blank"><x-bi-instagram
                                        class="w-5 h-5" /></a>
                            @endif
                            @if ($media->name_social_media->value === 'TikTok')
                                <a href="{{ $media->social_media_url }}" target="_blank"><x-bi-tiktok
                                        class="w-5 h-5" /></a>
                            @endif
                            @if ($media->name_social_media->value === 'Twitter')
                                <a href="{{ $media->social_media_url }}" target="_blank"><x-bi-twitter
                                        class="w-5 h-5" /></a>
                            @endif
                            @if ($media->name_social_media->value === 'Pinterest')
                                <a href="{{ $media->social_media_url }}" target="_blank"><x-bi-pinterest
                                        class="w-5 h-5" /></a>
                            @endif
                            @if ($media->name_social_media->value === 'LinkedIn')
                                <a href="{{ $media->social_media_url }}" target="_blank"><x-bi-linkedin
                                        class="w-5 h-5" /></a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            
            <!-- BLOCO PORTIFÓLIO ONLINE -->
            <div class="mb-10 text-sm">
                <h1 class="text-primary-blue font-extrabold text-xl mb-5 border-l-8 border-primary-blue pl-1">Portifólio online</h1>
                <div class="mb-8 pb-8 text-primary-blue">
                    <a href="{{ $professional->portifolio_url }}" title="Portifólio de: {{ $professional->name }}"
                        target="_blank" class="text-sm hover:underline">
                        {{ $professional->portifolio_url ? '→ Acessar portifólio' : 'Não informado' }}</a>
                </div>
            </div>

            <!-- BLOCO CURRICULO -->
            <div class="mb-10 text-sm">
                <h1 class="text-primary-blue font-extrabold text-xl mb-5 border-l-8 border-primary-blue pl-1">Currículo</h1>
                <div class="mb-8 pb-8 text-primary-blue">
                    <a href="{{ $professional->curriculum_url }}" title="Curriculo de: {{ $professional->name }}"
                        target="_blank" class="text-sm hover:underline">
                        {{ $professional->curriculum_url ? '→ Acessar Currículo' : 'Não informado' }}</a>
                </div>
            </div>

        </div>


        <div class="w-2/3">
            <div>

                <!-- BLOCO RESUMO -->
                <div class="mb-10 text-sm">
                    <h1 class="text-primary-blue font-extrabold text-xl mb-5 border-l-8 border-primary-blue pl-1">Resumo Profissional</h1>
                    <p>{{ $professional->experience }}</p>
                </div>

                <!-- BLOCO FORMAÇÃO ACADÊMICA -->
                <div class="mb-10 text-sm text-primary-blue">
                    <h1 class="font-extrabold text-xl mb-5 border-l-8 border-primary-blue pl-1">Formação Acadêmica</h1>
                    <h2 class="text-lg font-semibold mb-5">{{ $professional->education }}</h2>
                    
                    <div class="grid grid-cols-2 gap-4">
                        @foreach ($professional->academicEducation as $education )
                        <div class="p-5 shadow-md border rounded-lg">
                            <p class="font-semibold mb-2">{{ $education->academicEducation->formation }} | {{ $education->institution_name }}</p>
                            <p>{{ $education->status }} {{ $education->fashion_country_id === 26 ? ' em ' . $education->state : '' }} / {{ $education->countries->country }}</p>
                            <p><span class="font-semibold text-sm">Iniciado em:</span> {{ MyDateTime::formatDate($education->start_date, 'm/Y') }}</p> 
                            
                            @if ($education->status != 'cursando')                        
                                <p><span class="font-semibold text-sm">Finaliza em:</span> {{ MyDateTime::formatDate($education->end_date, 'm/Y') }}</p>
                            @endif
                        </div>          
                        @endforeach
                    </div>
                </div>

                <!-- BLOCO EXPERIÊNCIAS PROFISSIONAIS -->
                <div class="mb-10 text-sm text-primary-blue">
                    <h1 class="font-extrabold text-xl mb-5 border-l-8 border-primary-blue pl-1">Experiências Anteriores</h1>
                   
                    <div class="grid grid-cols-1 gap-4">
                        @foreach ($professional->professionalExperiences as $experience )
                        <div class="p-5 shadow-md border rounded-lg">
                            <p><span class="font-semibold text-sm">Empresa: </span>{{ $experience->company_name }}</p>
                            <p><span class="font-semibold text-sm">Cargo: </span>{{ $experience->position }}</p>
                            <p><span class="font-semibold text-sm">Hierarquia: </span>{{ $experience->hierarchical_level }}</p>
                            <p><span class="font-semibold text-sm">Remuneração: </span>{{ MyNumbers::formatCurrency($experience->remuneration, 'pt_BR', 'R$') }}</p>
                            <p class="{{ $experience->curreent_job ? '' : 'mb-4'}}"><span class="font-semibold text-sm">Iniciou em: </span>{{ MyDateTime::formatDate($experience->start_date, 'm/Y') }}</p>
                            @if ($experience->curreent_job){
                                <p><span class="font-semibold text-sm mb-4">Iniciou em: </span>{{ MyDateTime::formatDate($experience->end_date, 'm/Y') }}</p>
                            }                                
                            @endif

                            <p><span class="font-semibold text-sm block">Resumo das Atividades: </span>{{ $experience->description_activities }}</p>

                        </div>          
                        @endforeach
                    </div>
                </div>

                <!-- BLOCO INFORMAÇÕES COMPLEMENTARES -->
                <div class="mb-10 text-sm text-primary-blue">
                    <h1 class="font-extrabold text-xl mb-5 border-l-8 border-primary-blue pl-1">Informações Complementares</h1>

                    <p><span class="font-semibold text-sm">Tempo de Experiência: </span>{{ $professional->time_experience < 1 ? 'sem experiência' : $professional->time_experience }}</p>
                    <p><span class="font-semibold text-sm">Tipo de habilitação: </span>{{ $professional->type_of_license ?? 'Não possui habilitação' }}</p>
                    <p><span class="font-semibold text-sm">Posui carro?: </span>{{ $professional->owns_a_car ? 'Sim' : 'Não' }}</p>
                    <p><span class="font-semibold text-sm">Tem disponibilidade para viajar?: </span>{{ $professional->availability_to_travel ? 'Sim' : 'Não' }}</p>
                </div>

                <!-- BLOCO OBJETIVOS PROFISSIONAIS -->
                <div class="mb-10 text-sm text-primary-blue">
                    <h1 class="font-extrabold text-xl mb-5 border-l-8 border-primary-blue pl-1">Objetivos Profissionais</h1>

                    <p><span class="font-semibold text-sm">Prefere trabalhar: </span>{{ $professional->prefer_to_work_where }}</p>
                    <p><span class="font-semibold text-sm">Jornada de trabalho: </span>{{ $professional->working_day }}</p>
                    <p><span class="font-semibold text-sm">Prefere regime de trabalho: </span>{{ $professional->hiring_regime }}</p>
                    <p><span class="font-semibold text-sm">Prefere receber por: </span>{{ $professional->form_of_remuneration }}</p>
                    <p><span class="font-semibold text-sm">Remuneração pretendida: </span>{{ MyNumbers::formatCurrency($professional->remuneration_value, 'pt_BR', 'R$') }}</p>
                </div>
            </div>
        </div>

    </div>
</div>
