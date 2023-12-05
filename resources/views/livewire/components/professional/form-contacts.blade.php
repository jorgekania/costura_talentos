<div>
    <form>
        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
            Adicione novos telefones de contato
        </h6>
        <div class="flex flex-wrap">
            <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                        Tipo de Telefone
                    </label>
                    <select name="phone_type" id="phone_type" wire:model="phone_type"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                        <option></option>
                        @foreach (\App\Enums\PhoneType::cases() as $phone)
                            <option>{{ $phone->value }}</option>
                        @endforeach
                    </select>
                    @error('phone_type')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                        Número de Telefone
                    </label>
                    <input type="text" name="phone_number" id="phone_number" wire:model="phone_number"
                        x-mask="(99) 9 9999-9999" placeholder="(99) 9 9999-9999"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                    @error('phone_number')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="w-full lg:w-3/12 px-4 my-auto">
                <div class="relative w-full">
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" name="is_main" id="is_main" wire:model="is_main">
                        <div
                            class="w-11 h-6 bg-blueGray-700 peer-focus:outline-none peer-focus:ring-0 peer-focus:ring-primary-orange  rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-blueGray-700 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-primary-orange">
                        </div>
                        <span class="ms-3 uppercase text-blueGray-600 text-xs font-bold">É o principal</span>
                    </label>
                </div>
            </div>
        </div>

        <hr class="mt-6 border-b-1 border-blueGray-300">

        <div class="flex flex-wrap mb-10">
            <div class="w-full lg:w-12/12 px-4 text-right">
                <button
                    class="flex m-auto items-center bg-blueGray-700 text-white hover:bg-blueGray-400 hover:text-blueGray-700 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mt-5"
                    type="button" x-on:click="$wire.save('{{ $professional->id }}')">
                    <x-heroicon-o-check class="w-6 h-5 mr-2" />
                    Salvar Contato
                </button>
            </div>
        </div>
    </form>

    <hr class="mt-6 border-b-1 border-blueGray-300">


    <div class="relative overflow-x-auto">
        <h6 class="flex items-center text-blueGray-700 text-xl font-bold py-5">
            <x-heroicon-o-phone class="w-6 h-6 mr-3"/>

            Telefones Cadastrados
        </h6>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 mb-10">
            <thead class="text-xs text-blueGray-50 uppercase bg-blueGray-700 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Tipo de telefone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Número de telefone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        É o principal
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Ações
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($phones as $phone)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $phone['phone_type'] }}
                        </th>
                        <td class="px-6 py-4">
                            {{ MyNumbers::formatPhoneNumber($phone['phone_number']) }}
                        </td>
                        <td class="px-6 py-4">
                            <div>
                                @if ($phone['is_main'])
                                    <x-heroicon-o-check class="h-6 w-6 text-green-500" />
                                @else
                                    <x-heroicon-m-x-mark class="h-6 w-6 text-red-500" />
                                @endif
                            </div>
                        </td>
                        <td class="flex justify-center items-center px-6 py-4">
                            <a href="#" x-on:click="$wire.edit('{{ $phone['id'] }}')"
                                class="flex px-2 py-1 font-light bg-blue-600 text-white rounded-md items-center hover:bg-blue-500">
                                <x-heroicon-o-pencil class="h-3 w-3 mr-2" />

                                Editar
                            </a>
                            <a href="#" x-on:click="$wire.remove('{{ $phone['id'] }}')"
                                class="flex px-2 py-1 font-light bg-red-600 text-white rounded-md items-center hover:bg-red-500 ms-3">
                                <x-heroicon-m-x-mark class="h3- w-3 mr-2" />

                                Remover
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

