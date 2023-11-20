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
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 ml-3 animate-pulse">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" />
                </svg>
            </a>
        </div>
        <div class="w-1/3 items-center inline-flex justify-end">
            <img src="{{ Storage::url('global/fashion-header.png') }}" alt="">
        </div>
    </div>
</div>
