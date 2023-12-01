<div>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 my-10">
            <thead class="text-xs text-blueGray-50 uppercase bg-blueGray-700 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Titulo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Candidatos
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Especialização
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Criado em
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Ações
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vacancies as $vacancy)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-wrap">
                            <a
                                href="{{ route('vacancy', [Str::slug($vacancy['title']), $vacancy['id']]) }}">{{ $vacancy['title'] }}</a>
                        </th>
                        <td class="px-6 py-4">
                            <div>
                                @if ($vacancy['is_active'])
                                    <span
                                        class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full ">Ativo</span>
                                @else
                                    <span
                                        class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full">Inativo</span>
                                @endif
                            </div>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a class="px-4 py-2 mt-2 text-md text-blue-800 bg-blue-100 rounded-lg sm:mt-0 hover:text-blue-900 focus:text-blue-900 hover:bg-blue-300"
                                href="{{ route('company.myCandidates', $vacancy->id ) }}"><span
                                    class="mb-3 bg-blue-800 rounded-full px-2 py-1 text-center object-right-top text-white text-sm mr-1">{{ $vacancy->appliedProfessionals->count() }}</span>Candidatos</a>
                        </td>
                        <td class="px-6 py-4">
                            {{ $vacancy->specialization->specialization }}
                        </td>
                        <td class="px-6 py-4">
                            {{ MyDateTime::formatDate($vacancy['created_at'], 'd/m/Y') }}
                        </td>
                        <td class="flex justify-end items-ceter px-6 py-4">
                            @if ($vacancy['is_active'])
                                <a wire:navigate href="{{ route('company.vacancy.edit', $vacancy->id) }}"
                                    class="flex px-2 py-1 font-light  text-white rounded-md items-center hover:bg-blue-500 {{ !$vacancy['is_active'] ? 'bg-gray-400' : 'bg-blue-600' }} ">
                                    <x-heroicon-o-pencil class="h-3 w-3 mr-2" />
                                    Editar
                                </a>
                            @endif
                            <a href="{{ route('vacancy', [Str::slug($vacancy['title']), $vacancy['id']]) }}"
                                class="flex px-2 py-1 font-light bg-orange-400 text-white rounded-md items-center hover:bg-orange-500 ms-3">
                                <x-heroicon-o-eye class="h3- w-3 mr-2" />

                                Visualizar
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
