@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)
@section('title', 'Yeni Dil Ekle')

@section('content_header')
    <h1>Yeni Dil Ekle</h1>
@stop

@section('content')

<x-adminlte-card>
    <div class="row">
        <div class="col-12">
            <x-adminlte-input name="sira" label="Sıra" placeholder="Dil Sırası..."/>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <x-adminlte-input name="dilAdi" label="Dil Adı" placeholder="Dil Adı..."/>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <x-adminlte-input name="dilkisaltma" label="Dil Kısaltması(tr,en)" placeholder="Dil Kısaltması..."/>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <x-adminlte-select name="ulke" label="Ülke" data-placeholder="Ülke Seçiniz...">
                <option>Yok</option>
                <option>TLS</option>
                <option>SSL</option>
            </x-adminlte-select>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="durum">durum</label>
            <x-adminlte-input-switch name="durum" data-on-color="success" data-off-color="danger" />  
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <label for="anadil">Ana Dil</label>
            <x-adminlte-input-switch name="anadil" data-on-color="success" data-off-color="danger" />  
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <x-adminlte-button class="mt-4" label="Kaydet" theme="success" icon="fas fa-spinner fa-spin"/>
        </div>
    </div>


</x-adminlte-card>
@stop



@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop