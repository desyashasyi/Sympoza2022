<div>
    <form action="chat/isi_pesan" method="post">
        @csrf
        <x-adminlte-input name="NamaPenerima" label="Nama Penerima" placeholder="nama penerima"
        fgroup-class="col-md-6" disable-feedback/>
        <x-adminlte-input name="IsiPsn" label="Isi Pesan" placeholder="isi pesan"
        fgroup-class="col-md-6" disable-feedback/>
        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>
    </form>
</div>

