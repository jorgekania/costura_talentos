@extends('layouts.app')

@section('content')
    <div class="max-w-screen-xl mt-8 justify-center">
        <div class="bg-banner-recruiter bg-cover bg-no-repeat shadow-[0px_20px_30px_0px_#4a5568]">
            <div class="w-full bg-gray-950/50 backdrop-opacity-50">
                <div class="w-2/3 h-full mx-auto my- items-center text-center py-28">
                    <h1 class="text-4xl font-bold tracking-wider text-white mb-1">Aumente suas chances de contratar</h1>
                    <p class="text-white mb-10">Aqui no <span class="font-extrabold text-primary-orange">Costura
                            Talentos</span> você encontra o profissional da moda certo para seu
                        negócio</p>
                    <a class="bg-primary-orange px-8 py-4 rounded-full text-xl text-white font-bold border border-white hover:bg-hover-orange hover:shadow-[0px_3px_8px_0.24px_#fa972f] uppercase"
                        href="{{ route('company.register') }}">Anúncie Suas Vagas Grátis</a>
                </div>
            </div>
        </div>
        <div class="w-full text-center p-20">
            <h1 class="text-3xl font-extrabold text-primary-blue">Simples, Prático, Rápido e Gratuíto</h1>
            <div class="flex justify-center items-center py-10 space-x-5">
                <div class="w-1/4 p-5 text-center border rounded-lg shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-24 h-24 m-auto text-primary-orange">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                    </svg>
                    <h1 class="font-bold mt-5 uppercase mb-2">cadastre-se</h1>
                    <p>Cadastre seu estabelecimento gratuitamente</p>
                </div>
                <div class="w-1/4 p-5 text-center border rounded-lg shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                        stroke="currentColor" class="w-24 h-24 m-auto text-primary-orange">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                    </svg>
                    <h1 class="font-bold mt-5 uppercase mb-2">Divulgue suas vagas</h1>
                    <p>Anuncie suas vagas e atraia mais cadidatos</p>
                </div>
                <div class="w-1/4 p-5 text-center border rounded-lg shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-24 h-24 m-auto text-primary-orange">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                    <h1 class="font-bold mt-5 uppercase mb-2">Contrate</h1>
                    <p>Escolha seus candidatos e eleve o nível de seus colaboradores</p>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-center items-center text-center">
            <div class="w-1/2">
                <img src="{{ Storage::url('global/brazil-map.png') }}" alt="Encontre candidatos em todas as regiões">
            </div>
            <div class="w-1/2 p-20">
                <h1 class="text-3xl text-primary-blue font-extrabold mb-10">Recrute profissionais da moda em todo o Brasil
                </h1>
                <p class="text-xl font-light">Admitir novos colaboradores para sua empresa nunca foi tão simples, prático e
                    rápido!</p>
                <a href="{{ route('company.register') }}"
                    class="flex justify-center text-md bg-primary-orange hover:bg-hover-orange shadow shadow-gray-500 font-bold text-white py-4 px-6 mt-10 -mb-5 rounded-full my-5  m-auto text-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                    </svg>
                    ANÚNCIE SUAS VAGAS GRÁTIS</a>
            </div>
        </div>
    </div>
@endsection
