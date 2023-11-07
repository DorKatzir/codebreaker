
<div class="my-8 flex flex-col items-center gap-10 flex-1">
    <form class="print:hidden w-full">
        <textarea wire:model.live="message" name="" id="" cols="30" rows="10" class="bg-white/10 py-2 px-3 rounded-xl w-full"></textarea>
        <div class="mt-2 flex justify-end">
            <button type="button" @disabled(!$message) @click="window.print()" class="bg-blue-500 px-4 py-1 rounded-md disabled:bg-gray-300 text-sm font-semibold">Print</button>
        </div>
    </form>

    <x-code :message="$message" :letters="$this->letters" />

    @if($message)
        <x-legend :letters="$this->letters"  />
    @endif
</div>

