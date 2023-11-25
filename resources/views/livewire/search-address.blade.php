<div class="flex flex-wrap">
    <div class="w-full lg:w-2/12 px-4">
        <div class="relative w-full mb-3">
            <label for="zip_code" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">CEP</label>
            <input type="text" wire:model="zip_code" wire:blur="searchZipCode" name="zip_code" id="zip_code"
                placeholder="99999-99" x-mask="99.999-999"
                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
            @error('zip_code')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="w-full lg:w-4/12 px-4">
        <div class="relative w-full mb-3">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                Endereço
            </label>
            <input type="text" wire:model="address" name="address" id="address"
                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
            @error('address')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="w-full lg:w-2/12 px-4">
        <div class="relative w-full mb-3">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                Número
            </label>
            <input type="number" wire:model="number" name="number" id="number"
                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
            @error('number')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="w-full lg:w-4/12 px-4">
        <div class="relative w-full mb-3">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                Complemento
            </label>
            <input type="text" wire:model="complement" name="complement" id="complement"
                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
        </div>
    </div>
    <div class="w-full lg:w-4/12 px-4">
        <div class="relative w-full mb-3">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                Bairro
            </label>
            <input type="text" wire:model="neighborhood" name="neighborhood" id="neighborhood"
                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
            @error('neighborhood')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="w-full lg:w-4/12 px-4">
        <div class="relative w-full mb-3">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                Cidade
            </label>
            <input type="text" wire:model="city" name="city" id="city"
                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
            @error('city')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="w-full lg:w-4/12 px-4">
        <div class="relative w-full mb-3">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                Estado
            </label>
            @include('livewire.state-select')
            @error('state')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
