@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Popup Mesaj')

@section('content_header')
    <h1>Açılır Mesaj</h1>
@stop

@section('content')
    <div class="container-fluid">
        <x-adminlte-card>
            <div class="row">
                <div class="col-12">

                        <x-adminlte-input-file name="ifPholder" label="Açılır Mesaj Görseli Seçiniz" igroup-size="sm">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-lightblue">
                                    <i class="fas fa-upload"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-file>
                        <div class="text-center">
                            <img  class="img-fluid" src="{{ asset('images/8ptAya.jpg')}}" alt="" style="width: 150px;height:150px;">
                        </div>

                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <x-adminlte-input name="iLabel" label="Mesaj Başlığı" placeholder="Mesaj Başlığı..." fgroup-class="col-md-12" disable-feedback/>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <x-adminlte-input name="iLabel" label="Mesaj Url" placeholder="Mesaj Url..." fgroup-class="col-md-12" disable-feedback/>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <x-custom-checkbox name="Evet" label="Tıklandığında Yeni Sekmede Açılsın mı?" :checked="old('Evet')" />
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <x-label for="username" text="Durum" class="custom-label" />
                    <x-adminlte-input-switch name="iswColor" data-on-color="success" data-off-color="danger" checked/>
                </div>
            </div>


        </x-adminlte-card>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop