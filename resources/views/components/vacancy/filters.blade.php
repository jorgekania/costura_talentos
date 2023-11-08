<h1 class="text-2xl font-bold mb-5 text-primary-blue">Filtrar Vagas</h1>

<h2 class="text-lg font-semibold mb-2 text-primary-blue">Cidade/Estado</h2>
<div class="w-full bg-white  border rounded-md border-secondary-blue pr-2 mb-5">
    <select name="filter-city" id="filter-city"
        class="w-full p-2 rounded-md text-primary-orange bg-transparent italic focus:outline-none">
        @foreach ($loadFilterCity as $cities)
            <option value="{{ $cities }}">{{ $cities }}</option>
        @endforeach
    </select>
</div>

<h2 class="text-lg font-semibold mb-2 text-primary-blue">Regime de trabalho</h2>
<div class="w-full bg-white  border rounded-md border-secondary-blue p-2 mb-5">
    <div class="p-2">
        <div class="flex items-center mr-4 mb-2">
            <input type="checkbox" id="hiring-regime-clt" name="hiring-regime-clt" value="CLT"
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
            <label for="hiring-regime-clt" class="select-none cursor-pointer text-primary-orange">CLT</label>
        </div>
    </div>

    <div class="p-2">
        <div class="flex items-center mr-4 mb-2">
            <input type="checkbox" id="hiring-regime-pj" name="hiring-regime-pj" value="CLT"
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
            <label for="hiring-regime-pj" class="select-none cursor-pointer text-primary-orange">PJ</label>
        </div>
    </div>

    <div class="p-2">
        <div class="flex items-center mr-4 mb-2">
            <input type="checkbox" id="hiring-regime-negotiable" name="hiring-regime-negotiable" value="NEGOTIABLE"
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
            <label for="hiring-regime-negotiable"
                class="select-none cursor-pointer text-primary-orange">Negociavel</label>
        </div>
    </div>
</div>

<h2 class="text-lg font-semibold mb-2 text-primary-blue">Forma de Remuneração</h2>
<div class="w-full bg-white  border rounded-md border-secondary-blue p-2 mb-5">
    <div class="p-2">
        <div class="flex items-center mr-4 mb-2">
            <input type="checkbox" id="form-of-remuneration-month" name="form-of-remuneration-month" value="MONTH"
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
            <label for="form-of-remuneration-month" class="select-none cursor-pointer text-primary-orange">Por
                Mês</label>
        </div>
    </div>

    <div class="p-2">
        <div class="flex items-center mr-4 mb-2">
            <input type="checkbox" id="form-of-remuneration-day" name="form-of-remuneration-day" value="DAY"
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
            <label for="form-of-remuneration-day" class="select-none cursor-pointer text-primary-orange">Por
                Dia</label>
        </div>
    </div>

    <div class="p-2">
        <div class="flex items-center mr-4 mb-2">
            <input type="checkbox" id="form-of-remuneration-hour" name="form-of-remuneration-hour" value="HOUR"
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
            <label for="form-of-remuneration-hour" class="select-none cursor-pointer text-primary-orange">Por
                Hora</label>
        </div>
    </div>
</div>

<h2 class="text-lg font-semibold mb-2 text-primary-blue">Valor Remuneração</h2>
<div class="w-full bg-white  border rounded-md border-secondary-blue p-2 mb-5">
    <div class="flex">
        <div class="mr-2 w-1/2">
            <label for="remuneration-value-min" class="block text-sm text-primary-orange">Min</label>
            <div class="flex items-center">
                <span
                    class="bg-orange-100 text-orange-500 rounded-l-md border border-r-0 border-primary-orange inline-flex items-center px-2 self-stretch">R$</span>
                <input type="number" name="remuneration-value-min" id="remuneration-value-min" min="0"
                    placeholder="0"
                    class="focus:outline-none text-md placeholder:text-hover-orange placeholder:italic text-primary-orange border border-primary-orange rounded-r-md p-2 w-full">
            </div>
        </div>

        <div class="w-1/2">
            <label for="remuneration-value-max" class="block text-sm text-primary-orange">Max</label>
            <div class="flex items-center">
                <span
                    class="bg-orange-100 text-orange-500 rounded-l-md border border-r-0 border-primary-orange inline-flex items-center px-2 self-stretch">R$</span>
                <input type="number" name="remuneration-value-max" id="remuneration-value-max" min="0"
                    placeholder="0"
                    class="focus:outline-none text-md placeholder:text-hover-orange placeholder:italic text-primary-orange border border-primary-orange rounded-r-md p-2 w-full">
            </div>
        </div>
    </div>
</div>
