<div>
    <div class="row justify-content-right">
        <div class="col-md-12">
            <x-adminlte-button wire:click="menuSelection('Luhut Jamin Pasokan dan Harga Minyak Goreng Curah di Pasaran')"  label="Luhut Jamin Pasokan dan Harga Minyak Goreng Curah di Pasaran" class="btn-sm"/>
        </div>
        <hr>
        @if($menu == 'Luhut Jamin Pasokan dan Harga Minyak Goreng Curah di Pasaran')
            @livewire('news::script')
        <div>
    @else
    @endif
</div> 
    
       
       
    

