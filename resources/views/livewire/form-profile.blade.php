<form>
    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
        Sobre
    </h6>
    <div class="flex flex-wrap">
        <div class="w-full lg:w-9/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                    Nome da empresa
                </label>
                <input type="text" name="corporate_reason" id="corporate_reason" wire:model="corporate_reason"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                @error('corporate_reason')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="w-full lg:w-3/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                    Tamanho
                </label>
                <select name="company_size" id="company_size" wire:model="company_size"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                    @foreach (\App\Enums\CompanySize::cases() as $size)
                        <option>{{ $size->value }}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                    Email
                </label>
                <input type="email" name="email" id="email" wire:model="email"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                @error('email')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                    web Site
                </label>
                <input type="text" name="website" id="website" wire:model="website"
                    placeholder="http://seusite.com.br"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                @error('website')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    <div class="flex flex-wrap">
        <div class="w-full lg:w-12/12 px-4">
            <div class="relative w-full mb-3" wire:ignore>
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                    Sobre a empresa
                </label>
                <textarea type="text" name="description" id="description" wire:model.lazy="description"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full"
                    rows="5"></textarea>
                </div>
            </div>
            @error('description')
                <span class="relative w-full mb-3 text-red-600 text-sm px-4">{{ $message }}</span>
            @enderror
    </div>

    <hr class="mt-6 border-b-1 border-blueGray-300">

    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
        Localização
    </h6>

    <div class="flex flex-wrap">
        <div class="w-full lg:w-2/12 px-4">
            <div class="relative w-full mb-3">
                <label for="zip_code" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">CEP</label>
                <input type="text" wire:model="zip_code" wire:blur="searchZipCode" name="zip_code" id="zip_code"
                    placeholder="99999-99" x-mask="99.999-999"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                @error('zip_code')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="w-full lg:w-4/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                    Endereço
                </label>
                <input type="text" wire:model="address" name="address" id="address"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                @error('address')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="w-full lg:w-2/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                    Número
                </label>
                <input type="number" wire:model="number" name="number" id="number"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                @error('number')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="w-full lg:w-4/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                    Complemento
                </label>
                <input type="text" wire:model="complement" name="complement" id="complement"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
            </div>
        </div>
        <div class="w-full lg:w-4/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                    Bairro
                </label>
                <input type="text" wire:model="neighborhood" name="neighborhood" id="neighborhood"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                @error('neighborhood')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="w-full lg:w-4/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                    Cidade
                </label>
                <input type="text" wire:model="city" name="city" id="city"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                @error('city')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="w-full lg:w-4/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                    Estado
                </label>
                <select name="state" id="state" wire:model="state"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                    <option value="AC" data-long-state="Acre">Acre</option>
                    <option value="AL" data-long-state="Alagoas">Alagoas</option>
                    <option value="AP" data-long-state="Amapá">Amapá</option>
                    <option value="AM" data-long-state="Amazonas">Amazonas</option>
                    <option value="BA" data-long-state="Bahia">Bahia</option>
                    <option value="CE" data-long-state="Ceará">Ceará</option>
                    <option value="DF" data-long-state="Distrito">Distrito Federal</option>
                    <option value="ES" data-long-state="Espírito">Espírito Santo</option>
                    <option value="GO" data-long-state="Goiás">Goiás</option>
                    <option value="MA" data-long-state="Maranhão">Maranhão</option>
                    <option value="MT" data-long-state="Mato">Mato Grosso</option>
                    <option value="MS" data-long-state="Mato">Mato Grosso do Sul</option>
                    <option value="MG" data-long-state="Minas">Minas Gerais</option>
                    <option value="PA" data-long-state="Pará">Pará</option>
                    <option value="PB" data-long-state="Paraíba">Paraíba</option>
                    <option value="PR" data-long-state="Paraná">Paraná</option>
                    <option value="PE" data-long-state="Pernambuco">Pernambuco</option>
                    <option value="PI" data-long-state="Piauí">Piauí</option>
                    <option value="RJ" data-long-state="Rio">Rio de Janeiro</option>
                    <option value="RN" data-long-state="Rio">Rio Grande do Norte</option>
                    <option value="RS" data-long-state="Rio">Rio Grande do Sul</option>
                    <option value="RO" data-long-state="Rondônia">Rondônia</option>
                    <option value="RR" data-long-state="Roraima">Roraima</option>
                    <option value="SC" data-long-state="Santa">Santa Catarina</option>
                    <option value="SP" data-long-state="São">São Paulo</option>
                    <option value="SE" data-long-state="Sergipe">Sergipe</option>
                    <option value="TO" data-long-state="Tocantins">Tocantins</option>
                </select>
                @error('state')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    <hr class="mt-6 border-b-1 border-blueGray-300">

    <div class="flex flex-wrap mb-10">
        <div class="w-full lg:w-12/12 px-4 text-right">
            <button
                class="flex m-auto items-center bg-blueGray-700 text-white hover:bg-blueGray-400 hover:text-blueGray-700 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mt-5"
                type="button" wire:click="editProfile" >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                </svg>

                Salvar Perfil
            </button>
        </div>
    </div>
</form>

<script>

    window.addEventListener("renderTinymce", () => {
        tinymce.init({
            selector: "textarea#description",
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
                    @this.set('description', editor.getContent());
                });

                // window.addEventListener('renderTinymce', function(event) {
                //     console.log(event.detail[0].description);
                //     editor.setContent(event.detail[0].description);
                // });

            },
        });
    });
</script>
