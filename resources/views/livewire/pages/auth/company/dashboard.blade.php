@extends('livewire.pages.auth.company.home')

@section('content-company')
    @php
        $company = Auth::guard('company')->user();
    @endphp
    <section class="py-1">
        <div class="w-full mx-auto">
            <div class="relative flex flex-col min-w-0 break-words w-full rounded-lg border-0">
                <div class="bg-white mb-0 pb-6 px-4">
                    <div class="text-center flex justify-between items-center">
                        <h6 class="flex items-center text-blueGray-700 text-xl font-bold">
                            <x-bi-window-split class="w-10 h-10 mr-3" />
                            Dashboard
                        </h6>

                    </div>
                </div>
                <!-- CARDS -->
                <div class="flex-auto p-5 bg-blueGray-100">
                    <livewire:components.company.dash-cards :company="$company"/>
                </div>
                
                <div class="flex h-full">
                    <!-- LISTA CANDIDATOS -->
                    <div class="w-1/2 p-5 mt-6 flex-shrink-0">
                        <h1 class="text-xl text-primary-blue font-extrabold border-l-8 border-primary-blue mb-5 py-3 pl-2">Possiveis Candidatos</h1>
                        <livewire:components.company.dash-possibile-candidates :company="$company"/>
                    </div>
    
                    <!-- GRÁFICO -->
                    <div class="w-1/2  p-5 mt-6 flex-grow flex flex-col">
                        <h1 class="text-xl text-primary-blue font-extrabold border-l-8 border-primary-blue mb-5 py-3 pl-2">Candidatos por Regime de Trabalho</h1>
                        <div class="shadow-md rounded-lg flex-grow">
                            <livewire:components.company.dash-pie-chart-candidates-work-regime />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection