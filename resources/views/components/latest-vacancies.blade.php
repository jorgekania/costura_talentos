<div class="w-full">
    <h1 class="text-3xl text-primary-blue font-bold text-center mb-10">Vagas Recentes</h1>
    <div class="flex flex-wrap -mx-4">
        @foreach ($latestVacancies as $vacancie)
            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                <a href="{{ route('vacancy', [Str::slug($vacancie->title), $vacancie->id]) }}" class="block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative pb-48 overflow-hidden">
                        <img class="absolute inset-0 h-full w-full object-cover"
                            src="{{ Storage::url($vacancie->company->logo) }}" alt="">
                    </div>
                    <div class="p-4">
                        <span
                            class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">{{ $vacancie->specialization->specialization }}</span>
                        <h2 class="mt-2 mb-2 text-primary-blue font-bold">{{ $vacancie->title }}</h2>
                        <p class="text-sm text-sky-900">{{ Str::limit($vacancie->activities_and_responsibilities, 100, '...') }}</p>
                        <div class="mt-3 flex items-center py-4 border-t">
                            <span class="text-sm font-semibold text-primary-blue">R$</span>&nbsp;<span
                                class="font-bold text-xl text-primary-blue">{{ MyNumbers::formatCurrency($vacancie->remuneration_value, 'pt_BR', '') }}</span>&nbsp;<span
                                class="text-sm font-semibold text-primary-blue">/hora</span>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
    <a href="{{ route('vagas') }}"
        class="text-md bg-green-600 hover:bg-green-500 font-bold text-white py-4 px-6 mt-10 -mb-5 rounded-md my-5 block w-1/5 m-auto text-center">VER
        TODAS AS VAGAS</a>
</div>
