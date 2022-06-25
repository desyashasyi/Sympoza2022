<div>
    <div class="row justify-content-right">
        <div class="col-md-2">
            <x-adminlte-button wire:click="menuSelection('addTodo')" theme="success" label="Add Todo" class="btn-sm" icon="fas fa-microscope"/>
        </div>
    </div>
    <hr>
        Tampilkan todo title
    <hr>
    @if($menu == 'addTodo')
        @livewire('todo::create')
    @else
    @endif
</div>
