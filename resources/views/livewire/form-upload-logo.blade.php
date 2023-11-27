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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                        </svg>

                        Enviar Logo
                    </button>
                </div>

        </div>
    </form>
</div>
