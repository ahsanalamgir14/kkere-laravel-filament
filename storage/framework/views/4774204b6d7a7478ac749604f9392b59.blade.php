    <x-filament::button
            type="submit"
            size="sm"
            wire:loading.attr="disabled"
        >
        <span wire:loading.remove>
            Finish Setup
        </span>
        <span wire:loading>
           Installing... Please wait. (If no response after 3 minutes, reload page and try again)
        </span>
    </x-filament::button>