<form action="{{ route('vacancies.filter') }}" method="POST" id="frm-filter">
    @csrf
    <h1 class="text-2xl font-bold mb-5 text-primary-blue border-b border-primary-blue pb-5">Filtrar vagas por:</h1>

    <!-- FILTRO POR ESPECIALIDADE -->
    <div>
        <h2 class="text-lg font-semibold mb-2 text-primary-blue">Especialidade</h2>
        <div class="w-full bg-white  border rounded-md border-secondary-blue pr-2 mb-5">
            <select name="professional-specializations" id="professional-specializations"
                class="w-full p-2 rounded-md text-primary-orange bg-transparent italic focus:outline-none">
                <option value="all"
                    {{ $selectedFilters['professional-specializations'] === 'all' ? 'selected' : '' }}>Em todas as áreas
                </option>
                @foreach ($filters['filterSpecialization'] as $specialization_slug => $specialization)
                    <option value="{{ $specialization_slug }}"
                        {{ $selectedFilters['professional-specializations'] === $specialization_slug ? 'selected' : '' }}>
                        {{ $specialization }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <!-- FILTRO POR CIDADE/ESTADO -->
    <div>
        <h2 class="text-lg font-semibold mb-2 text-primary-blue">Cidade/Estado</h2>
        <div class="w-full bg-white  border rounded-md border-secondary-blue pr-2 mb-5">
            <select name="filter-city" id="filter-city"
                class="w-full p-2 rounded-md text-primary-orange bg-transparent italic focus:outline-none">
                <option value="all" {{ $selectedFilters['filter-city'] === 'all' ? 'selected' : '' }}>Em todas as
                    cidades</option>
                @foreach ($filters['filterCity'] as $cities)
                    <option value="{{ $cities }}"
                        {{ $selectedFilters['filter-city'] === $cities ? 'selected' : '' }}>{{ $cities }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <!-- FILTRO POR MAQUINAS INDUSTRIAIS -->
    <div>
        <h2 class="text-lg font-semibold mb-2 text-primary-blue">Máquinas Industriais</h2>
        <div class="w-full bg-white  border rounded-md border-secondary-blue pr-2 mb-5">
            <select name="filter-industrial-machine[]" id="filter-industrial-machine" multiple autocomplete="off"
                placeholder="Filtrar por máquinas"
                class="w-full p-2 rounded-md text-primary-orange bg-transparent italic focus:outline-none">
                <option value="all"
                    {{ is_null($selectedFilters['filter-industrial-machine']) ? 'selected' : (in_array('all', $selectedFilters['filter-industrial-machine']) ? 'selected' : '') }}>
                    Em
                    todas as máquinas</option>
                @foreach ($filters['filterIndustrialMachines'] as $id => $machine)
                    <option value="{{ $id }}"
                        {{ !is_null($selectedFilters['filter-industrial-machine']) ? (in_array($id, $selectedFilters['filter-industrial-machine']) ? 'selected' : '') : '' }}>
                        {{ $machine }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <!-- FILTRO POR REGIME DE TRABALHO -->
    <div>
        <h2 class="text-lg font-semibold mb-2 text-primary-blue">Regime de trabalho</h2>
        <div class="w-full bg-white  border rounded-md border-secondary-blue p-2 mb-5">
            @foreach ($filters['filterHiringRegime'] as $key => $hiring)
                <div class="p-2">
                    <div class="flex items-center mr-4 mb-2">
                        <input type="checkbox" id="hiring-regime" name="hiring-regime[]" value="{{ $hiring->value }}"
                            {{ $selectedFilters['hiring-regime'] ? (in_array($hiring->value, $selectedFilters['hiring-regime']) ? 'checked' : '') : '' }}
                            class="opacity-0 absolute h-4 w-4" />
                        <div
                            class="bg-white border-2 rounded-md border-primary-orange w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-primary-orange">
                            <svg class="fill-current hidden w-3 h-3 text-blue-600 pointer-events-none" version="1.1"
                                viewBox="0 0 17 12" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none" fill-rule="evenodd">
                                    <g transform="translate(-9 -11)" fill="#fa972f" fill-rule="nonzero">
                                        <path
                                            d="m25.576 11.414c0.56558 0.55188 0.56558 1.4439 0 1.9961l-9.404 9.176c-0.28213 0.27529-0.65247 0.41385-1.0228 0.41385-0.37034 0-0.74068-0.13855-1.0228-0.41385l-4.7019-4.588c-0.56584-0.55188-0.56584-1.4442 0-1.9961 0.56558-0.55214 1.4798-0.55214 2.0456 0l3.679 3.5899 8.3812-8.1779c0.56558-0.55214 1.4798-0.55214 2.0456 0z" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <label for="hiring-regime"
                            class=" text-primary-orange @if ($hiring->value === 'NEGOCIÁVEL') lowercase first-letter:uppercase @endif ">{{ $hiring->value }}</label>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- FILTRO POR FORMA DE REMUNERAÇÃO -->
    <div>
        <h2 class="text-lg font-semibold mb-2 text-primary-blue">Forma de Remuneração</h2>
        <div class="w-full bg-white  border rounded-md border-secondary-blue p-2 mb-5">
            @foreach ($filters['filterFormOfRemuneration'] as $regime)
                <div class="p-2">
                    <div class="flex items-center mr-4 mb-2">
                        <input type="checkbox" id="form-of-remuneration" name="form-of-remuneration[]"
                            value="{{ $regime->value }}" class="opacity-0 absolute h-4 w-4"
                            {{ $selectedFilters['form-of-remuneration'] ? (in_array($regime->value, $selectedFilters['form-of-remuneration']) ? 'checked' : '') : '' }} />
                        <div
                            class="bg-white border-2 rounded-md border-primary-orange w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-primary-orange">
                            <svg class="fill-current hidden w-3 h-3 text-blue-600 pointer-events-none" version="1.1"
                                viewBox="0 0 17 12" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none" fill-rule="evenodd">
                                    <g transform="translate(-9 -11)" fill="#fa972f" fill-rule="nonzero">
                                        <path
                                            d="m25.576 11.414c0.56558 0.55188 0.56558 1.4439 0 1.9961l-9.404 9.176c-0.28213 0.27529-0.65247 0.41385-1.0228 0.41385-0.37034 0-0.74068-0.13855-1.0228-0.41385l-4.7019-4.588c-0.56584-0.55188-0.56584-1.4442 0-1.9961 0.56558-0.55214 1.4798-0.55214 2.0456 0l3.679 3.5899 8.3812-8.1779c0.56558-0.55214 1.4798-0.55214 2.0456 0z" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <label for="form-of-remuneration"
                            class="select-none cursor-pointer text-primary-orange lowercase first-letter:uppercase">Por
                            {{ $regime->value }}</label>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- FILTRO POR VALORE REMUNERAÇÃO -->
    <div>
        <h2 class="text-lg font-semibold mb-2 text-primary-blue">Valor Remuneração</h2>
        <div class="w-full bg-white  border rounded-md border-secondary-blue p-2 mb-5">
            <div class="flex">
                <div class="mr-2">
                    <label for="remuneration-value-min" class="block text-sm text-primary-orange">Min</label>
                    <div class="flex items-center">
                        {{-- @dd($selectedFilters['remuneration-value-min']) --}}
                        <span
                            class="bg-orange-100 text-orange-500 rounded-l-md border border-r-0 border-primary-orange inline-flex items-center px-2 self-stretch">R$</span>
                        <input type="number" name="remuneration-value-min" id="remuneration-value-min" min="0"
                            placeholder="0" value="{{ $selectedFilters['remuneration-value-min'] }}"
                            class="focus:outline-none text-md placeholder:text-hover-orange placeholder:italic text-primary-orange border border-primary-orange rounded-r-md p-2 w-full">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BOTÃO FILTRAR -->
    <div class="flex justify-end">
        <button type="submit"
            class="flex text-white bg-primary-blue hover:bg-secondary-blue hover:text-black py-2 px-3 rounded-md">
            Filtrar
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" class="w-6 h-6 ml-3">
                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </button>
    </div>
</form>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var select = new TomSelect('#filter-industrial-machine', {
            plugins: ['no_backspace_delete', 'remove_button', 'checkbox_options', 'clear_button'],
            checkbox_options: {
                checkedClassNames: ['ts-checked'],
                uncheckedClassNames: ['ts-unchecked'],
            },
            maxItems: 5
        });

        var isChanging = false;

        select.on('change', function() {
            if (isChanging) {
                return;
            }

            var selectedValues = select.getValue();

            var itemEspecifico = 'all';

            if (selectedValues.length >= select.settings.maxItems) {
                select.close();
            }

            if (selectedValues.includes(itemEspecifico)) {
                isChanging = true;
                select.setValue([itemEspecifico]);
                isChanging = false;
                select.close();
            }
        });
    })
</script>
