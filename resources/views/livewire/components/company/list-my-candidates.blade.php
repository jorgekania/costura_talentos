<div>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 my-10">
            <thead class="text-xs text-blueGray-50 uppercase bg-blueGray-700 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Vaga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Candidato
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aplicado em
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Ações
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vacancies as $vacancy)
                    @foreach ($vacancy->appliedProfessionals as $applied)
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-wrap">
                                <a
                                    href="{{ route('vacancy', [Str::slug($vacancy['title']), $vacancy['id']]) }}">{{ Str::limit($vacancy['title'], 50) }}</a>
                            </th>
                            <td class="px-6 py-4">
                                {{ $applied->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ MyDateTime::formatDate($applied['created_at'], 'd/m/Y') }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('company.candidate', $applied['id']) }}"
                                    class="flex px-2 py-1 font-light bg-orange-400 text-white rounded-md items-center hover:bg-orange-500 ms-3">
                                    <x-heroicon-o-eye class="h3- w-3 mr-2" />

                                    Ver Candidato
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</div>
