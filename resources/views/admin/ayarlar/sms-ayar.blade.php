@extends('adminlte::page')

@section('title','Sms Ayarları')


@section('content_header')
<h1>Sms Ayarları</h1>
@stop

@section('content')
<div class="container-fluid">
    <x-adminlte-card>
        <div class="row">
            <div class="col-12">
                <x-adminlte-input name="posturl" label="Post URL" placeholder="Post Url"/>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <x-adminlte-input name="kullaniciadi" label="Kullanıcı Adı" placeholder="Kullanıcı Adı"/>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <x-adminlte-input name="apikey" label="Api Secret Key" placeholder="Api Secret Key"/>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <x-adminlte-input name="baslik" label="Başlık" placeholder="Başlık"/>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <x-adminlte-input name="telefon" label="Mesajın Geleceği Telefon Numarası" placeholder="Gelen Telefon Numarassı"/>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <x-adminlte-button class="mt-4" label="Güncelle" theme="success" icon="fas fa-spinner fa-spin"/>
            </div>
        </div>

    </x-adminlte-card>
</div>
@stop

@section('css')

@stop

@section('js')

@stop