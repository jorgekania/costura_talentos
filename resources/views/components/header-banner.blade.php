<div id="header" class="flex mt-8 justify-center">
    <div class="flex text-center items-center p-5 border-b border-secondary-blue">
        <div class="w-2/3 mr-10">
            <h1 class="text-3xl font-bold text-primary-blue">Simples, Prático, Rápido e Gratuíto</h1>
            <p class="italic text-md mt-5 text-secondary-blue">
                Tenha acesso a diversas oportunidades para dentro da área da moda. Encontre a vaga para
                costureira(o),
                estilista, designer têxtil, gerente de moda ou faccionista
            </p>
            <a href="{{ route('vacancies') }}"
                class="flex text-md bg-orange-900 hover:bg-orange-800 font-bold text-white py-4 px-6 mt-10 -mb-5 rounded-md my-5 w-1/3 m-auto text-center">VER
                TODAS AS VAGAS

                <x-heroicon-o-cursor-arrow-ripple class="w-6 h-6 ml-3 animate-pulse"/>
            </a>
        </div>
        <div class="w-1/3 items-center inline-flex justify-end">
            <img src="{{ Storage::url('global/fashion-header.png') }}" alt="">
        </div>
    </div>
</div>
