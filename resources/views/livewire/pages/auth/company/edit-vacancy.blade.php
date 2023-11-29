@extends('livewire.pages.auth.company.home')

@section('content-company')
    @php
        $company = Auth::guard('company')->user();
    @endphp
    <section class="py-1">
        <div class="w-full mx-auto">
            <div class="relative flex flex-col min-w-0 break-words w-full rounded-lg bg-blueGray-100 border-0">
                <div class="bg-white mb-0 pb-6 px-4">
                    <div class="text-center flex justify-between items-center">
                        <h6 class="flex items-center text-blueGray-700 text-xl font-bold">
                            <x-bi-pencil-fill class="w-10 h-10 mr-3" />

                            Editar Vaga
                        </h6>
                        <a href="{{ route('company.myVacancies') }}"
                            class="flex m-auto items-center bg-blueGray-700 text-white hover:bg-blueGray-400 hover:text-blueGray-700 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mt-5">
                            <x-heroicon-o-hand-raised class="h-5 w-5 mr-2"/>
                            Minhas Vagas
                        </a>
                    </div>
                </div>
                <div class="flex-auto px-4">
                    <div>
                        <livewire:components.company.form-edit-vacancy :company="$company" />
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
