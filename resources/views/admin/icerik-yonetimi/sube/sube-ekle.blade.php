@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Bayi/Şube Ekle')

@section('content_header')
    <h1>Bayi/Şube Ekle</h1>
@stop

@section('content')

    <div class="container-fluid">
        <x-adminlte-card>
            <form method="POST">

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="name" label="Firma / Şube Adı" placeholder="Firma Ad Bilgisi Giriniz." />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="adres" label="Açık Adres" placeholder="Açık Adres Bilgisini Giriniz." />
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <x-adminlte-input name="telefon" label="Telefon" placeholder="Telefon Bilgisini Giriniz." />
                    </div>
                    <div class="col-4">
                        <x-adminlte-input name="gsm" label="GSM" placeholder="GSM Bilgisini Giriniz." />
                    </div>
                    <div class="col-4">
                        <x-adminlte-input name="email" label="E-Posta" placeholder="E-Posta Bilgisini Giriniz." />
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <x-adminlte-input name="Şehir" label="Şehir" placeholder="Şehir Bilgisini Giriniz." />
                    </div>
                    <div class="col-6">
                        <x-adminlte-input name="İlçe" label="ilce" placeholder="İlçe Bilgisini Giriniz." />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="durum">Durum</label>
                        <x-adminlte-input-switch  name="durum" data-on-color="success" data-off-color="danger"/>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-12">
                        <x-adminlte-button class="mt-4" label="Kaydet" theme="success" icon="fas fa-spinner fa-spin"/>
                    </div>
                </div>

            </form>
        </x-adminlte-card>
    </div>



@stop



@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />


<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">

@stop

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/js/fileinput.min.js"></script>


@stop