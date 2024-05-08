<x-filament-widgets::widget>
    <div class="flex justify-between p-1">
        <button wire:click="prev">Anterior</button>
        <button wire:click="next">Siguiente</button>
    </div>
    <x-filament::section 
        class="p-1 bg-cover bg-center rounded-lg" 
        style="background-image: url('{{ Storage::disk('gcs')->url($this->getCurrentNews()->image) }}'); height: 420px;"
        width>
    </x-filament::section>
    <p class="p-1 small">{{ $this->getCurrentNews()->publication_date_at }} - {{ $this->getCurrentNews()->title }}</p>
    <p>{{ $this->getCurrentNews()->body }}</p>
</x-filament-widgets::widget>
