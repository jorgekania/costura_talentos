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
            <div class="mb-8 pb-8 border-b border-dotted border-primary-blue text-primary-blue">
                <p class="flex items-center font-semibold mb-2 text-lg mr-2">
                    <x-bi-envelope class="w-5 h-5 mr-2" />
                    Email
                </p>
                <p class="text-primary-blue"><a href="mailto:{{ $professional->email }} "
                        class="hover:underline">{{ $professional->email }}</a></p>
            </div>

            <div class="mb-8 pb-8 border-b border-dotted border-primary-blue text-primary-blue">
                <p class="flex items-center font-semibold mb-2 text-lg">
                    <x-bi-phone-vibrate class="w-5 h-5 mr-2" />
                    Telefone(s)
                </p>
                <div class="text-sm">
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

            <div class="mb-8 pb-8 border-b border-dotted border-primary-blue text-primary-blue">
                <p class="flex items-center font-semibold mb-4 text-lg">
                    <x-akar-network class="w-5 h-5 mr-2" />
                    Redes Social(is)
                </p>

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


            <div class="mb-8 pb-8 border-b border-dotted border-primary-blue text-primary-blue">
                <p class="flex items-center font-semibold mb-2 text-lg">
                    <x-heroicon-o-map-pin class="w-5 h-5 mr-2" />
                    Localização:
                </p>
                <a href="{{ $professional->url_google_maps }}" title="Localização de: {{ $professional->name }}"
                    target="_blank" class="text-sm hover:underline">{{ $professional->address_professional }}</a>
            </div>

            <div class="mb-8 pb-8 border-b border-dotted border-primary-blue text-primary-blue">
                <p class="flex items-center font-semibold mb-2 text-lg">
                    <x-bi-wifi class="w-5 h-5 mr-2" />
                    Portifólio online:
                </p>
                <a href="{{ $professional->portifolio_url }}" title="Portifólio de: {{ $professional->name }}"
                    target="_blank" class="text-sm hover:underline">
                    {{ $professional->portifolio_url ? '→ Acessar portifólio' : 'Não informado' }}</a>
            </div>

            <div class="mb-8 pb-8 border-b border-dotted border-primary-blue text-primary-blue">
                <p class="flex items-center font-semibold mb-2 text-lg">
                    <x-bi-download class="w-5 h-5 mr-2" />
                    Curriculo:
                </p>
                <a href="{{ $professional->curriculum_url }}" title="Curriculo de: {{ $professional->name }}"
                    target="_blank" class="text-sm hover:underline">
                    {{ $professional->curriculum_url ? '→ Acessar Currículo' : 'Não informado' }}</a>
            </div>
        </div>

        <div class="w-2/3">
            <div>
                <h1 class="font-bold text-primary-blue text-xl mb-3 mt-10 uppercase">Experiências e Habilidades</h1>
                <p>{{ $professional->experience }}</p>

                <h1 class="font-bold text-primary-blue text-xl mb-3 mt-10 uppercase">Tempo de Experiência</h1>
                <p class="lowercase">{{ $professional->time_experience === 0 ? 'menos de 1 ano' : $professional->time_experience }}</p>

                <h1 class="font-bold text-primary-blue text-xl mb-3 mt-10 uppercase">Prefere Trabalhar</h1>
                <p class="lowercase">{{ $professional->prefer_to_work_where }}</p>

                <h1 class="font-bold text-primary-blue text-xl mb-3 mt-10 uppercase">Prefere Regime de contrato</h1>
                <p class="lowercase">{{ $professional->hiring_regime }}</p>

                <h1 class="font-bold text-primary-blue text-xl mb-3 mt-10 uppercase">Prefere receber por</h1>
                <p class="lowercase">{{ $professional->form_of_remuneration }}</p>

                <h1 class="font-bold text-primary-blue text-xl mb-3 mt-10 uppercase">Remuneração esperada</h1>
                <p class="lowercase">{{ $professional->remuneration_value === 0 ? 'a combinar' : $professional->remuneration_value }}</p>
            </div>
        </div>

    </div>
</div>
