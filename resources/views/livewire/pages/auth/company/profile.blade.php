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
                            <x-heroicon-o-building-office-2 class="w-10 h-10 mr-3" />
                            Empresa
                        </h6>
                        <div class="-mb-12">
                            <ul class="flex flex-wrap -mb-px" x-init="setActiveTab">
                                <li class="mr-2">
                                    <a href="#"
                                        :class="{
                                            'bg-blueGray-700 text-blueGray-50 hover:border-primary-orange ': activeTab ===
                                            '#tabFormProfile',
                                            'bg-blueGray-400': activeTab !== '#tabFormProfile'
                                        }"
                                        class="inline-block textbluerGray-700 hover:text-blueGray-50 hover:border-t-8 hover:border-blueGray-700 rounded-t-lg py-1 px-4 text-sm font-medium text-center border-transparent border-t-8"
                                        data-active-tab="#tabFormProfile"
                                        x-on:click.prevent="activeTab = '#tabFormProfile'; saveActiveTab(event)">Perfil</a>
                                </li>
                                <li class="mr-2">
                                    <a href="#"
                                        :class="{
                                            'bg-blueGray-700 text-blueGray-50 hover:border-primary-orange ': activeTab ===
                                            '#tabFormUploadLogo',
                                            'bg-blueGray-400': activeTab !== '#tabFormUploadLogo'
                                        }"
                                        class="inline-block textbluerGray-700 hover:text-blueGray-50 hover:border-t-8 hover:border-blueGray-700 rounded-t-lg py-1 px-4 text-sm font-medium text-center border-transparent border-t-8"
                                        data-active-tab="#tabFormUploadLogo"
                                        x-on:click.prevent="activeTab = '#tabFormUploadLogo'; saveActiveTab(event)">Logo</a>
                                </li>
                                <li class="mr-2">
                                    <a href="#"
                                        :class="{
                                            'bg-blueGray-700 text-blueGray-50 hover:border-primary-orange': activeTab ===
                                            '#tabFormContact',
                                            'bg-blueGray-400': activeTab !== '#tabFormContact'
                                        }"
                                        class="inline-block textbluerGray-700 hover:text-blueGray-50 hover:border-t-8 hover:border-blueGray-700 rounded-t-lg py-1 px-4 text-sm font-medium text-center border-transparent border-t-8 active"
                                        data-active-tab="#tabFormContact"
                                        x-on:click.prevent="activeTab = '#tabFormContact'; saveActiveTab(event)">Contatos</a>
                                </li>
                                <li class="mr-2">
                                    <a href="#"
                                        :class="{
                                            'bg-blueGray-700 text-blueGray-50 hover:border-primary-orange': activeTab ===
                                            '#tabFormSocialMedia',
                                            'bg-blueGray-400': activeTab !== '#tabFormSocialMedia'
                                        }"
                                        class="inline-block textbluerGray-700 hover:text-blueGray-50 hover:border-t-8 hover:border-blueGray-700 rounded-t-lg py-1 px-4 text-sm font-medium text-center border-transparent border-t-8"
                                        data-active-tab="#tabFormSocialMedia"
                                        x-on:click.prevent="activeTab = '#tabFormSocialMedia'; saveActiveTab(event)">Redes
                                        Socias</a>
                                </li>
                                <li>
                                    <a href="#"
                                        :class="{
                                            'bg-blueGray-700 text-blueGray-50 hover:border-primary-orange': activeTab ===
                                            '#tabFormPassword',
                                            'bg-blueGray-400': activeTab !== '#tabFormPassword'
                                        }"
                                        class="inline-block textbluerGray-700 hover:text-blueGray-50 hover:border-t-8 hover:border-blueGray-700 rounded-t-lg py-1 px-4 text-sm font-medium text-center border-transparent border-t-8"
                                        data-active-tab="#tabFormPassword"
                                        x-on:click.prevent="activeTab = '#tabFormPassword'; saveActiveTab(event)">Senha</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div x-show="activeTab === '#tabFormProfile'" class="flex-auto px-4" id="formProfile">
                    <livewire:components.company.form-profile :company="$company" />
                </div>

                <div x-show="activeTab === '#tabFormUploadLogo'" class="flex-auto px-4" id="formUploadLogo">
                    <livewire:components.company.form-upload-logo :company="$company" />
                </div>

                <div x-show="activeTab === '#tabFormContact'" class="flex-auto px-4" id="formContact">
                    <livewire:components.company.form-contacts :company="$company" />
                </div>

                <div x-show="activeTab === '#tabFormSocialMedia'" class="flex-auto px-4" id="formSocialMedia">
                    <livewire:components.company.form-social-media :company="$company" />
                </div>

                <div x-show="activeTab === '#tabFormPassword'" class="flex-auto px-4" id="formPassword">
                    <livewire:components.company.form-update-password :company="$company" />
                </div>
            </div>
        </div>
    </section>
@endsection
