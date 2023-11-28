<div>
    <h1>Fashion Company Create</h1>

    @if (session()->has('success'))
        <div
            class="relative flex flex-col sm:flex-row sm:items-center bg-gray-200 dark:bg-green-700 shadow rounded-md py-5 pl-6 pr-8 sm:pr-6 mb-3 mt-3">
            <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
                <div class="text-green-500" dark:text-gray-500>
                    <x-bi-check-circle class="w-6 sm:w-5 h-6 sm:h-5"/>
                </div>
                <div class="text-sm font-medium ml-3">Success!.</div>
            </div>
            <div class="text-sm tracking-wide text-gray-500 dark:text-white mt-4 sm:mt-0 sm:ml-4">
                {{ session('success') }}</div>
            <div
                class="absolute sm:relative sm:top-auto sm:right-auto ml-auto right-4 top-4 text-gray-400 hover:text-gray-800 cursor-pointer">
                <x-bi-x-circle-fill class="w-4 h-4" />
            </div>
        </div>
    @endif

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-3">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Empresa
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ações
                    </th>
                </tr>
            </thead>

            @forelse ($companies as $company)
                <tbody wire:key="{{ $company->id }}">
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $company->corporate_reason }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $company->email }}
                        </td>

                        <td class="px-6 py-4">
                            <button class="">
                                <x-bi-pencil class="ml-2 mt-0 w-4 h-4"/>
                            </button>

                            <button class="">
                                <x-bi-trash class="ml-2 mt-0 w-4 h-4"/>
                            </button>
                        </td>
                    </tr>

                </tbody>
            @empty
                <p>Nenhuma empresa para listar</p>
            @endforelse
        </table>
        {{ $companies->links() }}
    </div>
</div>
