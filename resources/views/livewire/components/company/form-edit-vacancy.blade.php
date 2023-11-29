<div>
    <form>
        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
            Editar esta Vaga
        </h6>
        <div class="flex flex-wrap mb-5">
            <div class="w-full lg:w-8/12 px-4">
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                        Titlulo da vaga
                    </label>
                    <input type="text" name="title" id="title" wire:model="title"
                        placeholder="Exemplo: Faccionista com experiência em máquina reta"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                    @error('title')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                        Especialidade
                    </label>
                    <select name="specialization" id="specialization" wire:model="specialization"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                        <option value="">Selecione a especialidade</option>
                        @foreach ($specializations as $specialization)
                            <option value="{{ $specialization->id }}"
                                {{ $current_specialization === $specialization->id ? 'selected' : '' }}>
                                {{ $specialization->specialization }}</option>
                        @endforeach
                    </select>
                    @error('specialization')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

        </div>

        <div class="flex flex-wrap mb-5">

            <div class="w-full lg:w-2/12 px-4">
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                        Experiência
                    </label>
                    <input type="number" wire:model="time_experience" name="time_experience" id="time_experience"
                        placeholder="0"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                    @error('time_experience')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                        Pagamento por
                    </label>
                    <select name="work_where" id="work_where" wire:model="work_where"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                        <option value="MÊS">Selecione a forma</option>
                        @foreach (\App\Enums\FormOfRemuneration::cases() as $item)
                            <option>{{ $item->value }}</option>
                        @endforeach
                    </select>
                    @error('work_where')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                        Valor da remuneração
                    </label>
                    <input type="number" wire:model="remuneration_value" name="remuneration_value" placeholder="0"
                        id="remuneration_value"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                    @error('remuneration_value')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                        Tipo de Contratação
                    </label>
                    <select name="hiring_regime" id="hiring_regime" wire:model="hiring_regime"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                        <option value="">Selecione o periodo</option>
                        @foreach (\App\Enums\HiringRegime::cases() as $item)
                            <option>{{ $item->value }}</option>
                        @endforeach
                    </select>
                    @error('hiring_regime')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="flex flex-wrap mb-5">
            <div class="w-full lg:w-12/12 px-4">
                <div class="relative w-full mb-3" wire:ignore>
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                        Requer Experiência nas seguintes máquinas
                    </label>
                    <select name="machines_selected" id="machines_selected" wire:model="machines_selected" multiple
                        autocomplete="off" placeholder="Escolha as máquinas"
                        class="custom-item custom-option border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                        @foreach ($machines as $machine)
                            <option value="{{ $machine->id }}" @if (in_array($machine->id, array_column($machines_selected, 'industrial_machines_id'))) selected @endif>
                                {{ $machine->machines }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap mb-5">
            <div class="w-full lg:w-12/12 px-4">
                <div class="relative w-full mb-3" wire:ignore>
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                        Atividades e Responsabilidades da vaga
                    </label>
                    <textarea type="text" name="activities_and_responsibilities" id="activities_and_responsibilities"
                        wire:model="activities_and_responsibilities"
                        class="tinyMCESelector border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full"
                        rows="5"></textarea>
                </div>
            </div>
            @error('activities_and_responsibilities')
                <span class="relative w-full mb-3 text-red-600 text-sm px-4">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-wrap mb-5">
            <div class="w-full lg:w-12/12 px-4">
                <div class="relative w-full mb-3" wire:ignore>
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                        A Vaga Requer
                    </label>
                    <textarea type="text" name="vacancy_requirements" id="vacancy_requirements" wire:model="vacancy_requirements"
                        class="tinyMCESelector border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full"
                        rows="5"></textarea>
                </div>
            </div>
            @error('vacancy_requirements')
                <span class="relative w-full mb-3 text-red-600 text-sm px-4">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-wrap mb-5">
            <div class="w-full lg:w-12/12 px-4">
                <div class="relative w-full mb-3" wire:ignore>
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                        Diferenciais que Empresa Oferece
                    </label>
                    <textarea type="text" name="the_company_offers" id="the_company_offers" wire:model="the_company_offers"
                        class="tinyMCESelector border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full"
                        rows="5"></textarea>
                </div>
            </div>
            @error('the_company_offers')
                <span class="relative w-full mb-3 text-red-600 text-sm px-4">{{ $message }}</span>
            @enderror
        </div>

        <hr class="mt-6 border-b-1 border-blueGray-300">

        <div class="flex flex-wrap mb-10">
            <div class="w-full lg:w-12/12 px-4 text-right">
                <button
                    class="flex m-auto items-center bg-blueGray-700 text-white hover:bg-blueGray-400 hover:text-blueGray-700 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mt-5"
                    type="button" x-on:click="$wire.edit('{{ $vacancy_id }}')">
                    <x-heroicon-o-check class="w-6 h-5 mr-2" />
                    editar Vaga
                </button>
            </div>
        </div>
    </form>

    <hr class="mt-6 border-b-1 border-blueGray-300">
</div>

<script>
    window.addEventListener("renderTinymce", () => {
        tinymce.init({
            selector: "textarea.tinyMCESelector",
            language: "pt_BR",
            skin: false,
            content_css: false,
            menubar: false,
            height: 250,
            plugins: "lists advlist link image table media anchor fullscreen preview",
            toolbar: "undo redo | blocks fontfamily fontsize | bold italic underline strikethrough fullscreen preview | align numlist bullist | link table | lineheight outdent indent| forecolor backcolor removeformat  | save print",
            branding: false,
            toolbar_mode: "sliding",
            setup: function(editor) {

                editor.on('init change', function() {
                    editor.save();
                });

                editor.on('change', function(e) {

                    var areaOne = tinymce.get("activities_and_responsibilities")
                        .getContent();
                    var areaTwo = tinymce.get("vacancy_requirements").getContent();
                    var areaThree = tinymce.get("the_company_offers").getContent();

                    @this.set('activities_and_responsibilities', areaOne);
                    @this.set('vacancy_requirements', areaTwo);
                    @this.set('the_company_offers', areaThree);

                });
            },
        });
    });


    var select = new TomSelect('#machines_selected', {
        plugins: ['no_backspace_delete', 'remove_button', 'checkbox_options', 'clear_button'],
        checkbox_options: {
            checkedClassNames: ['ts-checked'],
            uncheckedClassNames: ['ts-unchecked'],
        },
    });

    document.addEventListener('redirectVacancies', function() {

        setTimeout(function() {
            window.location.href = "my-vacancies";
        }, 5000);

    });
</script>
