<div class="m-auto flex w-full items-center justify-between rounded-xl bg-transparent py-2 px-5 shadow-lg">
    <nav class="flex w-full items-center  items-start justify-between">
        <a href="/" title="Constura Talentos" class="flex w-64 h-16 justify-center items-center bg-cover bg-center"
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
                                            <x-heroicon-o-squares-2x2 class="w-6 h-6 mr-3" />
                                            Dashboard
                                        </a>
                                    </li>
                                    <li class="font-medium">
                                        <a href="{{ route('professional.profile') }}"
                                            class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-primary-blue">
                                            <x-heroicon-o-user class="w-6 h-6 mr-3" />
                                            Perfil
                                        </a>
                                    </li>
                                    <li class="font-medium">
                                        <a href="{{ route('professional.myVacancies') }}"
                                            class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                                            <x-heroicon-o-hand-raised class="w-6 h-6 mr-3"/>
                                            Minhas Vagas
                                        </a>
                                    </li>
                                    <hr class="dark:border-gray-700">
                                    <li class="font-medium">
                                        <a href="{{ route('professional.logout') }}"
                                            class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600">
                                            <x-heroicon-s-arrow-right-on-rectangle class="w-6 h-6 mr-3 text-red-600"/>
                                            Sair
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
