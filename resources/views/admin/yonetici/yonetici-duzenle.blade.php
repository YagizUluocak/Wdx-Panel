@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Yönetici Düzenle')

@section('content_header')
    <h1>Yönetici Düzenle</h1>
@stop

@section('content')

    <div class="container-fluid">
        <x-adminlte-card>
            <form method="POST">
                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="name" label="Ad Soyad" placeholder="Ad Soyad Giriniz." />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="email" label="E-Mail" placeholder="E-Mail Adresi Giriniz.." />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="sifre" label="Şifre" placeholder="Şifre Giriniz.." />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="sifretekrar" label="Şifre Tekrar" placeholder="Şifre Tekrar Giriniz.." />
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
                        <x-adminlte-button class="mt-4" label="Güncelle" theme="success" icon="fas fa-spinner fa-spin"/>
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