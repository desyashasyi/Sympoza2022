<div>
    <div class="row justify-content-right">
        <div class="col-md-12">
            <x-adminlte-button wire:click="menuSelection('Calon Jemaah Haji Asal Lamongan Ini Belum Bisa Berangkat Terkendala Visa')"  label="Calon Jemaah Haji Asal Lamongan Ini Belum Bisa Berangkat Terkendala Visa" class="btn-sm"/>
        </div>
        <hr>
        @if($menu == 'Calon Jemaah Haji Asal Lamongan Ini Belum Bisa Berangkat Terkendala Visa')
            @livewire('news::scriptdua')
        <div>
    @else
    @endif
</div>
