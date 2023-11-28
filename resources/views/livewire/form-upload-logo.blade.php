<div>
    <form class="items-center">
        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
            Atualize sua logo
        </h6>
        <div class="flex flex-wrap my-10 items-center">
            <div class="w-full lg:w-9/12 px-4">
                <div class="flex items-center space-x-6">
                    <div class="shrink-0">
                        @if($logo)
                            <img class="h-36 w-36 object-cover rounded-full"src="{{ $logo->temporaryUrl() }}" />
                        @else
                            <img class="h-36 w-36 object-cover rounded-full"src="{{ Storage::url('company_logos/company-icon.png') }}" />
                        @endif
                    </div>
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                        <span class="sr-only">Escolha sua logo</span>
                        <input type="file" name="logo" id="logo" wire:model="logo"
                            class="
                            border-0
                            file:mr-4 file:py-3 file:px-3
                            file:rounded-full file:border-0
                            file:text-sm file:font-semibold
                            file:bg-white file:text-blueGray-600
                            file:shadow focus:outline-none focus:ring-1 w-full">
                    </label>
                </div>
                @error('logo')
                    <span class="block text-red-600 text-sm text-center">{{ $message }}</span>
                @enderror
            </div>


                <div class="w-full lg:w-3/12 px-4 text-right">
                    <button
                        class="flex m-auto items-center bg-blueGray-700 text-white hover:bg-blueGray-400 hover:text-blueGray-700 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1"
                        type="button" x-on:click="$wire.uploadLogo('{{ $company->id }}')">
                        <x-heroicon-m-arrow-up-tray class="w-6 h-5 mr-2"/>

                        Enviar Logo
                    </button>
                </div>

        </div>
    </form>
</div>
