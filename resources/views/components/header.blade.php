<div>
    <nav class="flex w-full h-16 items-start justify-between">
        <a href="/" title="Constura Talentos" class="flex w-64 h-full justify-center items-center bg-cover bg-center"
            style="background-image: url({{ Storage::url('global/logo-costura-talentos_h_color.png') }})">

        </a>

        <div class="flex w-1/2 justify-end">
            <ul class="flex w-full h-full items-center justify-between">
                <li class="font-bold text-primary-blue active:text-secondary-blue hover:text-secondary-blue"><a
                        href="{{ route('vacancies') }}">VAGAS</a></li>
                <li class="font-bold text-primary-blue active:text-secondary-blue hover:text-secondary-blue"><a
                        href="{{ route('company.recruiter') }}">SOU EMPRESA</a></li>
                <li class="font-bold text-primary-blue active:text-secondary-blue hover:text-secondary-blue"><a
                        href="/">BLOG</a></li>
                <li class="font-bold text-primary-blue active:text-secondary-blue hover:text-secondary-blue"><a
                        href="/">CONTATO</a></li>

                @auth('professional')
                    @php
                        $avatarPath = Auth::guard('professional')->user()->avatar;
                    @endphp

                    <div x-data="{ open: false }" class="bg-base w-64 shadow flex justify-center items-center rounded-full">
                        <div @click="open = !open" class="relative  border-transparent py-1 w-64"
                            :class="{ 'border-base transform transition duration-300 ': open }"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100">
                            <div class="flex justify-center items-center space-x-3 cursor-pointer">
                                <div class="w-8 h-8 rounded-full overflow-hidden border-2  border-primary-blue">
                                    <img src="{{ Auth::guard('professional')->user()->provider ? Auth::guard('professional')->user()->avatar : (Storage::disk('public')->exists($avatarPath) ? Storage::url($avatarPath) : Storage::url('professional_avatars/user-icon.png')) }}"
                                        alt="" class="w-8 h-8 object-cover">
                                </div>
                                <div class="text-primary-blue font-medium">
                                    <div class="cursor-pointer">{{ Auth::guard('professional')->user()->short_name }}</div>
                                </div>
                            </div>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="absolute w-64 px-5 py-3 bg-base rounded-lg shadow border mt-2">
                                <ul class="space-y-3 text-primary-blue">
                                    <li class="font-medium">
                                        <a href="{{ route('professional.dashboard') }}"
                                            class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-primary-blue">
                                            <div class="mr-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                                                  </svg>

                                            </div> Dashboard
                                        </a>
                                    </li>
                                    <li class="font-medium">
                                        <a href="{{ route('professional.profile') }}"
                                            class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-primary-blue">
                                            <div class="mr-3">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                                    </path>
                                                </svg>
                                            </div> Perfil
                                        </a>
                                    </li>
                                    <li class="font-medium">
                                        <a href="{{ route('professional.myVacancies') }}"
                                            class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                                            <div class="mr-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                                </svg>
                                            </div> Minhas Vagas
                                        </a>
                                    </li>
                                    <hr class="dark:border-gray-700">
                                    <li class="font-medium">
                                        <a href="{{ route('professional.logout') }}"
                                            class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600">
                                            <div class="mr-3 text-red-600">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                                    </path>
                                                </svg>
                                            </div> Sair
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @else
                    <ul class="flex h-full items-center justify-between">
                        <li
                            class="text-md text-white font-bold px-3 py-2 mr-4 rounded-md bg-primary-blue hover:bg-secondary-blue hover:text-black">
                            <a href="{{ route('professional.register') }}">CADASTRE-SE</a>
                        </li>
                        <li
                            class="text-md text-white font-bold px-3 py-2 rounded-md bg-primary-orange hover:bg-hover-orange">
                            <a href="{{ route('professional.index') }}">ENTRAR</a>
                        </li>
                    </ul>
                @endauth
            </ul>
        </div>
    </nav>
</div>
