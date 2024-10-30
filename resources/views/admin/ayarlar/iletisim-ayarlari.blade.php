@extends('adminlte::page')

@section('title', 'İletişim Ayarları')

@section('content_header')
<h1>İletişim Ayarları</h1>
@stop

@section('content')

<div class="container-fluid">
    <x-adminlte-card>

        <form action="#" method="POST">

            <!--Firma Adı-->
            <div class="row">
                <div class="col-12">
                    <x-adminlte-input name="iLabel" label="Firma Adı" placeholder="Firma Adını Giriniz..." fgroup-class="col-md-12" disable-feedback/>
                </div>
            </div>
            
            <!--Telefon Numarası-->
            <div class="row">
                <div class="col-12">
                    <x-adminlte-input name="iLabel" label="Telefon Numarası" placeholder="Telefon Numarası Giriniz..." fgroup-class="col-md-12" disable-feedback/>
                </div>
            </div>

            <!--Fax Numarası-->
            <div class="row">
                <div class="col-12">
                    <x-adminlte-input name="iLabel" label="Fax Numarası" placeholder="Fax Numarası Giriniz..." fgroup-class="col-md-12" disable-feedback/>
                </div>
            </div>

            <!--Mail Adresi-->
            <div class="row">
                <div class="col-12">
                    <x-adminlte-input name="iLabel" label="Mail Adresi" placeholder="Mail Adresi Giriniz..." fgroup-class="col-md-12" disable-feedback/>
                </div>
            </div>

            <!--Adres-->
            <div class="row">
                <div class="col-12 ml-2">
                    <x-label for="taBasic" text="Adres" class="custom-label" />
                    <x-adminlte-textarea name="taBasic" placeholder="Adres Giriniz..."/>
                </div>
            </div>

            <!--Güncelle-->
            <div class="row">
                <div class="col-12">
                    <x-adminlte-button name="guncelle" label="Güncelle" theme="success" icon="fas fa-spinner fa-spin" class="mt-4"/>
                </div>
            </div>

        </form>
    </x-adminlte-card>
</div>

@stop

@section('css')

@stop

@section('js')

@stop