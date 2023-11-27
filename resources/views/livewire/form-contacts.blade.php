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
                    type="button" x-on:click="$wire.save('{{ $company->id }}')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    Salvar Contato
                </button>
            </div>
        </div>
    </form>

    <hr class="mt-6 border-b-1 border-blueGray-300">


    <div class="relative overflow-x-auto">
        <h6 class="flex items-center text-blueGray-700 text-xl font-bold py-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
              </svg>

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
                                    <svg class="w-3 h-3 text-green-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                @else
                                    <svg class="w-3 h-3 text-red-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                @endif
                            </div>
                        </td>
                        <td class="flex justify-center items-center px-6 py-4">
                            <a href="#" x-on:click="$wire.edit('{{ $phone['id'] }}')"
                                class="flex px-2 py-1 font-light bg-blue-600 text-white rounded-md items-center hover:bg-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-3 h-3 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                </svg>

                                Editar
                            </a>
                            <a href="#" x-on:click="$wire.remove('{{ $phone['id'] }}')"
                                class="flex px-2 py-1 font-light bg-red-600 text-white rounded-md items-center hover:bg-red-500 ms-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-3 h-3 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>

                                Remover
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
