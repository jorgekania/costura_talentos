<div class="w-3/5 m-auto">
    @if ($professional->provider && is_null($professional->password))
        <div class="flex items-center justify-center my-5">
            <x-heroicon-o-shield-exclamation class="w-24 h-24 text-yellow-500 mr-4"/>
            <h6 class="text-3xl mt-3 mb-6 text-yellow-500 font-bold uppercase">
                Atenção
            </h6>
        </div>

        <div class="flex flex-wrap mb-10 text-primary-blue">
            <p class="mb-5">Você esta conectado através do <span class="uppercase font-extrabold">{{ $professional->provider }}</span> </p>
            <p class="mb-5">Desta forma não é possivel efetuar troca de senha.</p>
            <p class="mb-5">Se ainda quiser criar uma senha para acesso via seu email e esta senha, clique abaixo e enviaremos um senha provisória para <span class="font-extrabold">{{ $professional->email }}</span></p>
            <p class="mb-5">Use seu e-mail e senha provisória para acessar o painel e então modificar a senha de acesso</p>
        </div>

        <div class="flex justify-center mb-10">
            <button
                class="flex items-center bg-blueGray-700 text-white hover:bg-blueGray-400 hover:text-blueGray-700 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mt-5"
                type="button" x-on:click="$wire.generatePassword('{{ $professional->id }}')">
                <x-ri-mail-send-fill class="w-6 h-5 mr-2"/>
                GERAR SENHA PROVISÓRIA
            </button>  
        </div>         
    @else
        
    <form>
        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
            Atualize sua senha de acesso
        </h6>
        <div class="flex flex-wrap">
            <div class="w-full lg:w-12/12 px-4">
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                        Senha Atual
                    </label>
                    <input type="password" name="current_password" id="current_password" wire:model="current_password"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                    @error('current_password')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full lg:w-12/12 px-4">
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                        Nova Senha
                    </label>
                    <input type="password" name="new_password" id="new_password" wire:model="new_password"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                    @error('new_password')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full lg:w-12/12 px-4">
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                        Confirme a Nova Senha
                    </label>
                    <input type="password" name="password_confirmation" id="password_confirmation" wire:model="password_confirmation"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
                    @error('password_confirmation')
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
                    type="button" x-on:click="$wire.save('{{ $professional->id }}')">
                    <x-heroicon-o-check class="w-6 h-5 mr-2"/>
                    Salvar Nova Senha
                </button>
            </div>
        </div>
    </form>
    @endif
</div>
