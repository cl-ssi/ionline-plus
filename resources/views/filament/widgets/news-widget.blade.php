<x-filament-widgets::widget>
    <div class="flex justify-between p-1">
        <div>
            @if ($this->currentIndex > 0)
                <button wire:click="prev">Anterior</button>
            @else
                <div class="invisible">
                    <button disabled>Anterior</button>
                </div>
            @endif
        </div>
        
        <div>
            @if ($this->currentIndex < $this->news->count() - 1)
                <button wire:click="next">Siguiente</button>
            @else
                <div class="invisible">
                    <button disabled>Siguiente</button>
                </div>
            @endif
        </div>
    </div>
    <x-filament::section 
        class="p-1 bg-cover bg-center rounded-lg" 
        style="height: 420px; background-image: url('{{ Storage::url($this->getCurrentNews()->image) }}');">
    </x-filament::section>
    <p class="p-1">{{ $this->getCurrentNews()->publication_date_at }} - {{ $this->getCurrentNews()->title }}</p>
    <p class="p-1">{{ $this->getCurrentNews()->body }}</p>
</x-filament-widgets::widget>
