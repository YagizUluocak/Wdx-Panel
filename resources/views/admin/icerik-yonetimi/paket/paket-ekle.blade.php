@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Yeni Paket Ekle')

@section('content_header')
    <h1>Yeni Paket Ekle</h1>
@stop

@section('content')

    <div class="container-fluid">
        <x-adminlte-card>
            <form method="POST">
                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="baslik" label="Paket Başlığı" placeholder="Paket Başlığı Giriniz." />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="fiyat" label="Fiyat" placeholder="Paket Fiyatı Giriniz." />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-select name="periyod" label="Periyod" data-placeholder="Periyod Seçiniz">
                            <option>Tek Sefer</option>
                            <option>Haftalık</option>
                            <option>Aylık</option>
                            <option>Yıllık</option>
                        </x-adminlte-select>
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
                        <x-adminlte-textarea name="urun_aciklamasi" label="Spot Metni" rows=5 placeholder="Spot Metni giriniz..." style="resize: none;">
                        </x-adminlte-textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                            <x-adminlte-textarea name="ozellikler" label="Özellikler" rows=5 placeholder="Paket'in Özelliklerini Giriniz." style="resize: none;" ></x-adminlte-textarea>
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

@stop

@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/js/fileinput.min.js"></script>


@stop