<div>
    <div class="row justify-content-right">
        <div class="col-md-12">
            <x-adminlte-button wire:click="menuSelection('Cerita Anak Driver Ojol Raih Beasiswa ke University of British Columbia')"  label="Cerita Anak Driver Ojol Raih Beasiswa ke University of British Columbia" class="btn-sm"/>
        </div>
        <hr>
        @if($menu == 'Cerita Anak Driver Ojol Raih Beasiswa ke University of British Columbia')
            @livewire('news::berita3')
        <div>
    @else
    @endif
</div>

