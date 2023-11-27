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
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    Salvar Rede Social
                </button>
            </div>
        </div>
    </form>

    <hr class="mt-6 border-b-1 border-blueGray-300">


    <div class="relative overflow-x-auto">
        <h6 class="flex items-center text-blueGray-700 text-xl font-bold py-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 mr-3">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
            </svg>


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
                                    'YouTube' => 'social_media_icons/youtube-icon.svg',
                                    'Instagram' => 'social_media_icons/instagram-icon.svg',
                                    'Facebook' => 'social_media_icons/facebook-icon.svg',
                                    'TikTok' => 'social_media_icons/tiktok-icon.svg',
                                    'Twitter' => 'social_media_icons/twitter-icon.svg',
                                    'Pinterest' => 'social_media_icons/pinterest-icon.svg',
                                    'LinkedIn' => 'social_media_icons/linkedin-icon.svg',
                                ];
                            @endphp

                            <span class="mr-2">
                                @if (isset($socialMediaIcons[$medias['name_social_media']]))
                                    <img src="{{ Storage::url($socialMediaIcons[$medias['name_social_media']]) }}"
                                        alt="{{ $medias['name_social_media'] }}" class="w-6 h-6">
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
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-3 h-3 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                </svg>

                                Editar
                            </a>
                            <a href="#" x-on:click="$wire.remove('{{ $medias['id'] }}')"
                                class="flex px-2 py-1 font-light bg-red-600 text-white rounded-md items-center hover:bg-red-500 ms-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-3 h-3 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>

                                Remover
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
