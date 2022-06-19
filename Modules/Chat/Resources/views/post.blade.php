@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <b>Chat</b> | All about chat management
                </div>
                <div class="card-body" wire:ignore.self>
                @foreach($users2 as $user2)
                    <p><b>
                    {{$user2->NamaPenerima}}
                </b></p>
                @endforeach
                    <hr>
                @foreach($users as $user)
                    <p>
                    {{$user->IsiPsn}}
                    </p>
                @endforeach
                    <hr>
                    <div>
                        <form action="isi_pesan" method="post">
                        @csrf
                        <x-adminlte-input name="NamaPenerima" label="Nama Penerima" value="{{$user2->NamaPenerima}}"
                        fgroup-class="col-md-6" disable-feedback/>
                        <x-adminlte-input name="IsiPsn" label="Isi Pesan" placeholder="isi pesan"
                        fgroup-class="col-md-6" disable-feedback/>
                        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection