<div>
    @foreach ($candidates as $candidate )    
    <div class="shadow-md rounded-lg">
        <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
            <div class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit">
                @php
                    $avatarPath = $candidate->avatar;
                @endphp
                <img alt="{{ $candidate->name }}" src="{{ $candidate->provider && str_contains($candidate->avatar, 'https://') ? $candidate->avatar : (Storage::disk('public')->exists($avatarPath) ? Storage::url($avatarPath) : Storage::url('professional_avatars/user-icon.png')) }}">
            </div>
            <div class="ml-4 mr-auto">
                <div class="font-medium">{{ $candidate->name }}</div>
                <div class="text-slate-500 text-xs mt-0.5">{{ $candidate->specialization->specialization }}</div>
            </div>

            <a href="{{ route('company.candidate', $candidate->id) }}" class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-green-600 hover:bg-green-500">Ver Currículo</a>                

        </div>
    </div>       
    @endforeach
</div>