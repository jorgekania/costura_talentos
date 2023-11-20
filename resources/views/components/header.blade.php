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
                <ul class="flex h-full items-center justify-between">
                    <li
                        class="text-md text-white font-bold px-3 py-2 mr-4 rounded-md bg-primary-blue hover:bg-secondary-blue hover:text-black">
                        <a href="{{ route('professional.register') }}">CADASTRE-SE</a>
                    </li>
                    <li
                        class="text-md text-white font-bold px-3 py-2 rounded-md bg-primary-orange hover:bg-hover-orange">
                        <a href="{{ route('professional.login') }}">ENTRAR</a>
                    </li>
                </ul>
            </ul>
        </div>
    </nav>
</div>
