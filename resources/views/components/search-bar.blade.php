<div class="flex flex-col text-center items-center">
    <div class="w-3/5">
        <h1 class="text-3xl font-bold text-primary-blue">Oportunidades no mundo da Moda</h1>
        <p class="italic text-md mt-5 text-secondary-blue">
            Tenha acesso a diversas oportunidades para dentro da área da moda. Encontre a vaga para costureira(o),
            estilista, designer têxtil, gerente de moda ou faccionista
        </p>
    </div>
    <div class="w-4/5 mt-10 bg-white">
        <form action="" class="flex h-14 border rounded-md border-secondary-blue">
            <fieldset class="w-1/4 flex justify-between items-center px-2 border-r border-l-secoborder-secondary-blue">
                <input id="profissionals" class="peer/profissionals" type="radio" name="search-type"
                    value="profissionals" checked />
                <label for="profissionals"
                    class="peer-checked/profissionals:text-primary-orange text-secondary-blue">Profissionais</label>

                <input id="vancancies" class="peer/vancancies" type="radio" name="search-type" value="vacancies" />
                <label for="vancancies"
                    class="peer-checked/vancancies:text-primary-orange text-secondary-blue">Vagas</label>

            </fieldset>
            <input type="text" name="search" id="search" placeholder="Buscar Oportunidades"
                class="w-1/2 py-2 px-3 placeholder:text-secondary-blue placeholder:italic focus:outline-none">
            <button class="w-1/4 py-2 px-3 bg-primary-orange hover:bg-hover-orange text-white">Buscar</button>
        </form>
    </div>
</div>
