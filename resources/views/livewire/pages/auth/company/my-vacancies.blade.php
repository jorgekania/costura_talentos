@extends('livewire.pages.auth.company.home')

@section('content-company')
    @php
        $company = Auth::guard('company')->user();
    @endphp
    <section class="py-1" x-data="{ activeTab: '#tabFormProfile', saveActiveTab }" @beforeDomUpdate="saveActiveTab">
        <div class="w-full mx-auto">
            <div class="relative flex flex-col min-w-0 break-words w-full rounded-lg bg-blueGray-100 border-0">
                <div class="bg-white mb-0 pb-6 px-4">
                    <div class="text-center flex justify-between items-center">
                        <h6 class="flex items-center text-blueGray-700 text-xl font-bold">
                            <x-heroicon-o-hand-raised class="w-10 h-10 mr-3" />

                            Vagas Criadas
                        </h6>

                    </div>
                </div>
                <div class="flex-auto px-4" >
                   <h1>teste</h1>
                </div>

            </div>
        </div>
    </section>
@endsection

