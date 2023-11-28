<div>
    <form>
        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
            Adicione novas redes sociais
        </h6>
        <div class="flex flex-wrap">
            <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                        Rede Social
                    </label>
                    <select name="name_social_media" id="name_social_media" wire:model="name_social_media"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                        <option></option>
                        @foreach (\App\Enums\SocialMedia::cases() as $media)
                            <option>{{ $media->value }}</option>
                        @endforeach
                    </select>
                    @error('name_social_media')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="w-full lg:w-9/12 px-4">
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                        Link da sua Rede Social
                    </label>
                    <input type="text" name="social_media_url" id="social_media_url" wire:model="social_media_url"
                        placeholder="https://sua-rede-social.com"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                    @if (session()->has('social_media_url'))
                        <span class="text-red-600 text-sm">{{ session()->get('social_media_url') }}</span><br>
                    @endif
                    @error('social_media_url')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <hr class="mt-6 border-b-1 border-blueGray-300">

        <div class="flex flex-wrap mb-10">
            <div class="w-full lg:w-12/12 px-4 text-right">
                <button
                    class="flex m-auto items-center bg-blueGray-700 text-white hover:bg-blueGray-400 hover:text-blueGray-700 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mt-5"
                    type="button" x-on:click="$wire.save('{{ $company->id }}')">
                    <x-heroicon-o-check class="w-6 h-5 mr-2" />
                    Salvar Rede Social
                </button>
            </div>
        </div>
    </form>

    <hr class="mt-6 border-b-1 border-blueGray-300">


    <div class="relative overflow-x-auto">
        <h6 class="flex items-center text-blueGray-700 text-xl font-bold py-5">
            <x-heroicon-o-globe-alt class="w-6 h-6 mr-3" />
            Redes Sociais Cadastradas
        </h6>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 mb-10">
            <thead class="text-xs text-blueGray-50 uppercase bg-blueGray-700 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Rede Social
                    </th>
                    <th scope="col" class="px-6 py-3">
                        URL
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Ações
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($social_medias as $medias)
                    <tr class="bg-white border-b">
                        <td class="flex items-center px-6 py-4">
                            @php
                                $socialMediaIcons = [
                                    'YouTube' => ['icon' => 'bi-youtube', 'class' => 'w-6 h-6 text-colorYouTube'],
                                    'Instagram' => ['icon' => 'bi-instagram', 'class' => 'w-6 h-6 text-colorInstagram'],
                                    'Facebook' => ['icon' => 'bi-facebook', 'class' => 'w-6 h-6 text-colorFacebook'],
                                    'TikTok' => ['icon' => 'bi-tiktok', 'class' => 'w-6 h-6 text-colorTikTok'],
                                    'Twitter' => ['icon' => 'bi-twitter', 'class' => 'w-6 h-6 text-colorTwitter'],
                                    'Pinterest' => ['icon' => 'bi-pinterest', 'class' => 'w-6 h-6 text-colorPinterest'],
                                    'LinkedIn' => ['icon' => 'bi-linkedin', 'class' => 'w-6 h-6 text-colorLinkedIn'],
                                ];
                            @endphp

                            <span class="mr-2">
                                @if (isset($socialMediaIcons[$medias['name_social_media']]))
                                    @svg($socialMediaIcons[$medias['name_social_media']]['icon'], ['class' => $socialMediaIcons[$medias['name_social_media']]['class']])
                                @endif
                            </span>
                            @php
                                $socialMediaColors = [
                                    'YouTube' => 'text-colorYouTube',
                                    'Instagram' => 'text-colorInstagram',
                                    'Facebook' => 'text-colorFacebook',
                                    'TikTok' => 'text-colorTikTok',
                                    'Twitter' => 'text-colorTwitter',
                                    'Pinterest' => 'text-colorPinterest',
                                    'LinkedIn' => 'text-colorLinkedIn',
                                ];

                                $defaultColorClass = 'text-blueGray600';
                                $socialMediaName = $medias['name_social_media'];
                                $colorClass = $socialMediaColors[$socialMediaName] ?? $defaultColorClass;
                            @endphp

                            <span class="{{ $colorClass }}">{{ $socialMediaName }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <div>
                                <a href="{{ $medias['social_media_url'] }}" target="_blank"
                                    title="{{ $company->corporate_reason }}"
                                    class="hover:underline">{{ $medias['social_media_url'] }}</a>
                            </div>
                        </td>
                        <td class="flex justify-center items-center px-6 py-4">
                            <a href="#" x-on:click="$wire.edit('{{ $medias['id'] }}')"
                                class="flex px-2 py-1 font-light bg-blue-600 text-white rounded-md items-center hover:bg-blue-500">
                                <x-heroicon-o-pencil class="h-3 w-3 mr-2" />

                                Editar
                            </a>
                            <a href="#" x-on:click="$wire.remove('{{ $medias['id'] }}')"
                                class="flex px-2 py-1 font-light bg-red-600 text-white rounded-md items-center hover:bg-red-500 ms-3">
                                <x-heroicon-m-x-mark class="h-3 w-3 mr-2" />

                                Remover
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
