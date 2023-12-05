@extends('livewire.pages.auth.professional.home')

@section('content-professional')
    @php
        $professional = Auth::guard('professional')->user();
    @endphp
    <section class="py-1" x-data="{ activeTabProfessional: '#tabFormProfile', saveActiveTabProfessional }" @beforeDomUpdate="saveActiveTabProfessional">
        <div class="w-full mx-auto">
            <div class="relative flex flex-col min-w-0 break-words w-full rounded-lg bg-blueGray-100 border-0">
                <div class="bg-white mb-0 pb-6 px-4">
                    <div class="text-center flex justify-between items-center">
                        <h6 class="flex items-center text-blueGray-700 text-xl font-bold">
                            <x-heroicon-o-building-office-2 class="w-10 h-10 mr-3" />
                            Seu Perfil
                        </h6>
                        <div class="-mb-12">
                            <ul class="flex flex-wrap -mb-px" x-init="setActiveTabProferssional">
                                <li class="mr-2">
                                    <a href="#"
                                        :class="{
                                            'bg-blueGray-700 text-blueGray-50 hover:border-primary-orange ': activeTabProfessional ===
                                            '#tabFormProfile',
                                            'bg-blueGray-400': activeTabProfessional !== '#tabFormProfile'
                                        }"
                                        class="inline-block textbluerGray-700 hover:text-blueGray-50 hover:border-t-8 hover:border-blueGray-700 rounded-t-lg py-1 px-4 text-sm font-medium text-center border-transparent border-t-8"
                                        data-active-tab="#tabFormProfile"
                                        x-on:click.prevent="activeTabProfessional = '#tabFormProfile'; saveActiveTabProfessional(event)">Perfil</a>
                                </li>
                                <li class="mr-2">
                                    <a href="#"
                                        :class="{
                                            'bg-blueGray-700 text-blueGray-50 hover:border-primary-orange ': activeTabProfessional ===
                                            '#tabFormUploadLogo',
                                            'bg-blueGray-400': activeTabProfessional !== '#tabFormUploadLogo'
                                        }"
                                        class="inline-block textbluerGray-700 hover:text-blueGray-50 hover:border-t-8 hover:border-blueGray-700 rounded-t-lg py-1 px-4 text-sm font-medium text-center border-transparent border-t-8"
                                        data-active-tab="#tabFormUploadLogo"
                                        x-on:click.prevent="activeTabProfessional = '#tabFormUploadLogo'; saveActiveTabProfessional(event)">Avatar</a>
                                </li>
                                <li class="mr-2">
                                    <a href="#"
                                        :class="{
                                            'bg-blueGray-700 text-blueGray-50 hover:border-primary-orange': activeTabProfessional ===
                                            '#tabFormContact',
                                            'bg-blueGray-400': activeTabProfessional !== '#tabFormContact'
                                        }"
                                        class="inline-block textbluerGray-700 hover:text-blueGray-50 hover:border-t-8 hover:border-blueGray-700 rounded-t-lg py-1 px-4 text-sm font-medium text-center border-transparent border-t-8 active"
                                        data-active-tab="#tabFormContact"
                                        x-on:click.prevent="activeTabProfessional = '#tabFormContact'; saveActiveTabProfessional(event)">Contatos</a>
                                </li>
                                <li class="mr-2">
                                    <a href="#"
                                        :class="{
                                            'bg-blueGray-700 text-blueGray-50 hover:border-primary-orange': activeTabProfessional ===
                                            '#tabFormSocialMedia',
                                            'bg-blueGray-400': activeTabProfessional !== '#tabFormSocialMedia'
                                        }"
                                        class="inline-block textbluerGray-700 hover:text-blueGray-50 hover:border-t-8 hover:border-blueGray-700 rounded-t-lg py-1 px-4 text-sm font-medium text-center border-transparent border-t-8"
                                        data-active-tab="#tabFormSocialMedia"
                                        x-on:click.prevent="activeTabProfessional = '#tabFormSocialMedia'; saveActiveTabProfessional(event)">Redes
                                        Socias</a>
                                </li>
                                <li>
                                    <a href="#"
                                        :class="{
                                            'bg-blueGray-700 text-blueGray-50 hover:border-primary-orange': activeTabProfessional ===
                                            '#tabFormPassword',
                                            'bg-blueGray-400': activeTabProfessional !== '#tabFormPassword'
                                        }"
                                        class="inline-block textbluerGray-700 hover:text-blueGray-50 hover:border-t-8 hover:border-blueGray-700 rounded-t-lg py-1 px-4 text-sm font-medium text-center border-transparent border-t-8"
                                        data-active-tab="#tabFormPassword"
                                        x-on:click.prevent="activeTabProfessional = '#tabFormPassword'; saveActiveTabProfessional(event)">Senha</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div x-show="activeTabProfessional === '#tabFormProfile'" class="flex-auto px-4" id="formProfile">
                    <livewire:components.professional.form-profile :professional="$professional" />
                </div>

                <div x-show="activeTabProfessional === '#tabFormUploadLogo'" class="flex-auto px-4" id="formUploadLogo">
                    <livewire:components.professional.form-upload-avatar :professional="$professional" />
                </div>

                <div x-show="activeTabProfessional === '#tabFormContact'" class="flex-auto px-4" id="formContact">
                    <livewire:components.professional.form-contacts :professional="$professional" />
                </div>

                <div x-show="activeTabProfessional === '#tabFormSocialMedia'" class="flex-auto px-4" id="formSocialMedia">
                    <livewire:components.professional.form-social-media :professional="$professional" />
                </div>

                <div x-show="activeTabProfessional === '#tabFormPassword'" class="flex-auto px-4" id="formPassword">
                    <livewire:components.professional.form-update-password :professional="$professional" />
                </div>
            </div>
        </div>
    </section>
@endsection