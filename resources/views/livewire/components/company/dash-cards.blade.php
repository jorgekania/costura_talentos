<div class="mt-12">
    <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
            <div
                class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                <x-bi-list-check class="w-6 h-6"/>
            </div>
            <div class="p-4 text-right">
                <p
                    class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                    Vagas Disponibilizadas</p>
                <h4
                    class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                    {{ $availableVacancies }}</h4>
            </div>
        </div>
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
            <div
                class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-pink-600 to-pink-400 text-white shadow-pink-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                <x-ri-user-search-line class="w-6 h-6"/>
            </div>
            <div class="p-4 text-right">
                <p
                    class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                    Vagas Ativas</p>
                <h4
                    class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                    {{ $activeVacancies }}</h4>
            </div>
        </div>
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
            <div
                class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-green-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                <x-heroicon-o-user-plus class="w-6 h-6"/>
            </div>
            <div class="p-4 text-right">
                <p
                    class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                    Candidatos aplicados</p>
                <h4
                    class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                    {{ $appliedCandidates }}</h4>
            </div>
        </div>
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
            <div
                class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-orange-600 to-orange-400 text-white shadow-orange-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                <x-heroicon-o-eye class="w-6 h-6"/>
            </div>
            <div class="p-4 text-right">
                <p
                    class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                    Vizualizaram</p>
                <h4
                    class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                    {{ $viewed }}</h4>
            </div>
        </div>
    </div>                        
</div>
