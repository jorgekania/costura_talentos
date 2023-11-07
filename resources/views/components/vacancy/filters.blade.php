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

<h2 class="text-lg font-semibold mb-2 text-primary-blue">Segmento da Moda</h2>
<div class="w-full bg-white  border rounded-md border-secondary-blue pr-2 mb-5">
</div>

<h2 class="text-lg font-semibold mb-2 text-primary-blue">Tipo de Remuneração</h2>
<div class="w-full bg-white  border rounded-md border-secondary-blue pr-2 mb-5">
</div>

<h2 class="text-lg font-semibold mb-2 text-primary-blue">Valor Remuneração</h2>
<div class="w-full bg-white  border rounded-md border-secondary-blue pr-2 mb-5">
</div>
