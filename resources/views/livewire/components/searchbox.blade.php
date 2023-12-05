<div>
    <div class="w-full lg:w-5/12 px-4">
        <div class="relative w-full mb-3">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                Formação Academica
            </label>
            <input type='text' wire:model="search" wire:keyup="searchResult"
                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-1 w-full">
            @error('corporate_reason')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror

            @if($showResult)
                <ul class="w-full absolute bg-white mt-1 shadow-md">
                    @if(!empty($records))
                        @foreach($records as $record)

                            <li wire:click="fetchAcademicEduicationDetail({{ $record->id }})" class="bg-blueGray-100 p-2 mb-px hover:bg-blueGray-700 hover:text-white hover:cursor-pointer">{{ $record->formation}}</li>

                        @endforeach
                    @endif
                </ul>
            @endif

            <div class="clear-both mt-5"></div>
            <div >
                @if(!empty($empDetails))
                    <div>
                        Formação : {{ $empDetails->formation }}
                    </div>
                @endif
            </div>
        </div>
    </div>        
</div>
