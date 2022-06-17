<div>
    <div class="row justify-content-right">
        <div class="col-md-2">
            <x-adminlte-button wire:click="menuSelection('addNews')" theme="success" label="Add News" class="btn-sm" icon="fas fa-microscope"/>
        </div>
    </div>
    <hr>
       Tampilkan news title
    <hr>
    @if($menu == 'addNews')
        @livewire('news::create')
        <div>
    @else
    @endif
</div>
</div>
    @if($menu == 'addNews')
        @livewire('news::text')
        <div>
    @else
    @endif
</div>
</div>
    @if($menu == 'addNews')
        @livewire('news::title3')
        <div>
    @else
    @endif
</div>


