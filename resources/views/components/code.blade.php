@Props([
    'message',
    'letters'
])

<div {{ $attributes->class(['text-center flex flex-wrap gap-7 mt-auto'])  }}>
    @foreach(explode(' ', $message) as $word)
        <div class="word flex gap-x-1">
            @foreach(str_split($word) as $character)
                <div class="">
                    <span class="material-symbols-outlined character !text-4xl">
                        {{ $letters[strtolower($character)] ?? $character }}
                    </span>
                    @if($character !== '')
                        <span class="bg-gray-200 w-12 h-12 block"></span>
                    @endif
                </div>
            @endforeach
        </div>
    @endforeach
</div>


