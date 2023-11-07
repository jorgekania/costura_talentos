<div>
    <nav class="flex w-full h-16 items-start justify-between">
        <a href="/" title="Constura Talentos" class="flex w-64 h-full justify-center items-center bg-cover bg-center" style="background-image: url({{ Storage::url('global/logo-costura-talentos_h_color.png') }})">

        </a>
        <div class="flex w-1/2 justify-end">
            <ul class="flex w-full h-full items-center justify-between">
                <li class="font-bold text-primary-blue active:text-secondary-blue hover:text-secondary-blue"><a
                        href="{{ route('vagas') }}">VAGAS</a></li>
                <li class="font-bold text-primary-blue active:text-secondary-blue hover:text-secondary-blue"><a
                        href="/">SOU EMPRESA</a></li>
                <li class="font-bold text-primary-blue active:text-secondary-blue hover:text-secondary-blue"><a
                        href="/">CONTATO</a></li>
                <ul class="flex h-full items-center justify-between">
                    <li
                        class="text-md text-white font-bold px-3 py-2 mr-4 rounded-md bg-primary-blue hover:bg-secondary-blue">
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
    <div id="search-bar" class="flex border border-secondary-blue bg-base rounded-md mt-8 p-5 justify-center">
        @livewire('search-bar')
    </div>
</div>
