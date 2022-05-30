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
                    @livewire('chat::selector')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection