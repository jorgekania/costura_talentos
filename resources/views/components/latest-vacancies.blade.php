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
                        <div class="mt-3 flex justify-center items-center py-4 border-t">
                            <span class="flex text-sm font-semibold text-white bg-primary-blue px-3 py-3 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                  </svg>

                                VER VAGA</span>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
    <a href="{{ route('vacancies') }}"
        class="text-md bg-green-600 hover:bg-green-500 font-bold text-white py-4 px-6 mt-10 -mb-5 rounded-md my-5 block w-1/5 m-auto text-center">VER
        TODAS AS VAGAS</a>
</div>
