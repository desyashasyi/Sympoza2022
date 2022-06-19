<div>
    <div class="row justify-content-right">
        <div class="col-md-2">
            <x-adminlte-button wire:click="menuSelection('createThread')" theme="success" label="Create Thread" class="btn-sm" icon="fas fa-microscope"/>
        </div>
    </div>
    @if($menu == 'createThread')
        @livewire('chat::thread.create')
    @else
    @endif
</div>
