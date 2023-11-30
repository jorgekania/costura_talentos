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
                            <x-heroicon-o-user class="w-10 h-10 mr-3" />

                            Candidato
                        </h6>
                        <a href="{{ route('company.myCandidates') }}"
                            class="flex m-auto items-center bg-blueGray-700 text-white hover:bg-blueGray-400 hover:text-blueGray-700 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mt-5">
                            <x-heroicon-o-hand-raised class="h-5 w-5 mr-2" />
                            CANDIDATOS
                        </a>
                    </div>
                </div>
                <div class="flex-auto">
                    <livewire:components.company.candidate :company="$company" />
                </div>

            </div>
        </div>
    </section>
@endsection
