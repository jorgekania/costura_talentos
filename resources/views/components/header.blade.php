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
                        href="/">SOU EMPRESA</a></li>
                <li class="font-bold text-primary-blue active:text-secondary-blue hover:text-secondary-blue"><a
                        href="/">BLOG</a></li>
                <li class="font-bold text-primary-blue active:text-secondary-blue hover:text-secondary-blue"><a
                        href="/">CONTATO</a></li>
                <ul class="flex h-full items-center justify-between">
                    <li
                        class="text-md text-white font-bold px-3 py-2 mr-4 rounded-md bg-primary-blue hover:bg-secondary-blue hover:text-black">
                        <a href="/">CADASTRE-SE</a>
                    </li>
                    <li
                        class="text-md text-white font-bold px-3 py-2 rounded-md bg-primary-orange hover:bg-hover-orange">
                        <a href="/">ENTRAR</a>
                    </li>
                </ul>
            </ul>
        </div>
    </nav>
    <div id="header" class="flex mt-8 justify-center">
        @if (request()->segment(1) != 'vagas')
            <div class="flex text-center items-center p-5 border-b border-secondary-blue">
                <div class="w-2/3 mr-10">
                    <h1 class="text-3xl font-bold text-primary-blue">Simples, Prático e Rápido</h1>
                    <p class="italic text-md mt-5 text-secondary-blue">
                        Tenha acesso a diversas oportunidades para dentro da área da moda. Encontre a vaga para
                        costureira(o),
                        estilista, designer têxtil, gerente de moda ou faccionista
                    </p>
                    <a href="{{ route('vacancies') }}"
                        class="flex text-md bg-orange-900 hover:bg-orange-800 font-bold text-white py-4 px-6 mt-10 -mb-5 rounded-md my-5 w-1/3 m-auto text-center">VER
                        TODAS AS VAGAS
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 ml-3 animate-pulse">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" />
                        </svg>
                    </a>
                </div>
                <div class="w-1/3 items-center inline-flex justify-end">
                    <img src="{{ Storage::url('global/fashion_header.svg') }}" alt="">
                </div>
            </div>
        @endif
    </div>
</div>
