<div class="flex flex-col text-center items-center">
    <div class="w-3/5">
        <h1 class="text-3xl font-bold text-primary-blue">Simples, Pratico e Rápido</h1>
        <p class="italic text-md mt-5 text-secondary-blue">
            Tenha acesso a diversas oportunidades para dentro da área da moda. Encontre a vaga para costureira(o),
            estilista, designer têxtil, gerente de moda ou faccionista
        </p>
    </div>
    <div class="w-1/2 mt-10 bg-white  border rounded-md border-secondary-blue">
        <form action="" class="flex relative h-14">

            <select name="professional-specializations" id="professional-specializations"
                class="w-full pl-11 pr-4 py-2 bg-transparent text-primary-orange italic focus:outline-none mr-5" wire:model="selectedSpecialization"
                wire:change="redirectToVacancies">
                <option value="all">Em todas as áreas</option>
                @foreach ($specializations as $specialization_slug => $specialization)
                    <option value="{{ $specialization_slug }}">{{ $specialization }}</option>
                @endforeach
            </select>
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-primary-blue">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
        </form>
    </div>
</div>
