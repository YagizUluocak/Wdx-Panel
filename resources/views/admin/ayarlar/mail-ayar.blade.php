@extends('adminlte::page')
@section('plugins.Select2', true)

@section('title','Mail Ayarları')

@section('content_header')
<h1>Mail Ayarları</h1>
@stop

@section('content')
<div class="container-fluid">
    <x-adminlte-card>
        <div class="row">
            <div class="col-12">
                <x-adminlte-input name="iLabel" label="SMTP Server" placeholder="SMTP Server"/>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <x-adminlte-input name="iLabel" label="SMTP Port" placeholder="SMTP Port"/>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <x-adminlte-select name="sel2Vehicle" label="Mail Sertifika" data-placeholder="Select an option...">
                <option>Yok</option>
                <option>TLS</option>
                <option>SSL</option>
            </x-adminlte-select>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <x-adminlte-input name="iLabel" label="SMTP Email" placeholder="SMTP Email"/>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <x-adminlte-input name="iLabel" label="SMTP Email Şifre" placeholder="SMTP Email Şifre"/>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <x-adminlte-input name="iLabel" label="Mesajın Geleceği E-Posta" placeholder="Gelen E-Posta Adresi"/>
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