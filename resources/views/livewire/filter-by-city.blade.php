<div>
    <select name="filter-city" id="filter-city"
        class="w-full p-2 rounded-md text-primary-orange bg-transparent italic focus:outline-none"
        wire:model="selectedCity"
        wire:change="cityFiltered">
        <option value="all">Todas</option>
        @foreach ($loadFilterCity as $cities)
            <option value="{{ $cities }}">{{ $cities }}</option>
        @endforeach
    </select>
</div>
