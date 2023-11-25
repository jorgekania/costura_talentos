@extends('livewire.pages.auth.company.home')

@section('content-company')
    @php
        $company = Auth::guard('company')->user();
    @endphp
    <section class="py-1" x-data="{ activeTab: 1}">
        <div class="w-full mx-auto">
            <div class="relative flex flex-col min-w-0 break-words w-full rounded-lg bg-blueGray-100 border-0">
                <div class="bg-white mb-0 pb-6 px-4">
                    <div class="text-center flex justify-between items-center">
                        <h6 class="flex items-center text-blueGray-700 text-xl font-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-10 h-10 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                            </svg>
                            Empresa
                        </h6>
                        <div class="-mb-12">
                            <ul class="flex flex-wrap -mb-px">
                                <li class="mr-2">
                                    <a href="#"
                                        :class="{
                                            'bg-blueGray-700 text-blueGray-50 hover:border-primary-orange ': activeTab ===
                                                1,
                                            'bg-blueGray-400': activeTab !== 1
                                        }"
                                        class="inline-block textbluerGray-700 hover:text-blueGray-50 hover:border-t-8 hover:border-blueGray-700 rounded-t-lg py-1 px-4 text-sm font-medium text-center border-transparent border-t-8"
                                        x-on:click="activeTab = 1">Perfil</a>
                                </li>
                                <li class="mr-2">
                                    <a href="#"
                                        :class="{
                                            'bg-blueGray-700 text-blueGray-50 hover:border-primary-orange': activeTab ===
                                                2,
                                            'bg-blueGray-400': activeTab !== 2
                                        }"
                                        class="inline-block textbluerGray-700 hover:text-blueGray-50 hover:border-t-8 hover:border-blueGray-700 rounded-t-lg py-1 px-4 text-sm font-medium text-center border-transparent border-t-8 active"
                                        x-on:click="activeTab = 2">Contatos</a>
                                </li>
                                <li class="mr-2">
                                    <a href="#"
                                        :class="{
                                            'bg-blueGray-700 text-blueGray-50 hover:border-primary-orange': activeTab ===
                                                3,
                                            'bg-blueGray-400': activeTab !== 3
                                        }"
                                        class="inline-block textbluerGray-700 hover:text-blueGray-50 hover:border-t-8 hover:border-blueGray-700 rounded-t-lg py-1 px-4 text-sm font-medium text-center border-transparent border-t-8"
                                        x-on:click="activeTab = 3">Redes Socias</a>
                                </li>
                                <li>
                                    <a href="#"
                                        :class="{
                                            'bg-blueGray-700 text-blueGray-50 hover:border-primary-orange': activeTab ===
                                                4,
                                            'bg-blueGray-400': activeTab !== 4
                                        }"
                                        class="inline-block textbluerGray-700 hover:text-blueGray-50 hover:border-t-8 hover:border-blueGray-700 rounded-t-lg py-1 px-4 text-sm font-medium text-center border-transparent border-t-8"
                                        x-on:click="activeTab = 4">Senha</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div x-show="activeTab === 1" class="flex-auto px-4" id="formProfile">
                    <livewire:form-profile :company="$company" />
                </div>

                <div x-show="activeTab === 2" class="flex-auto px-4" id="formContact">Tab 2</div>

                <div x-show="activeTab === 3" class="flex-auto px-4" id="formSocialMedia">Tab 3</div>

                <div x-show="activeTab === 4" class="flex-auto px-4" id="formPassword">Tab 4</div>
            </div>
        </div>
    </section>
@endsection
