@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Yeni Kategori Ekle')

@section('content_header')
    <h1>Yeni Kategori Ekle</h1>
@stop

@section('content')
    <div class="container-fluid">
        <x-adminlte-card>
            <form method="post">

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="name" label="Kategori Adı" placeholder="Kategori Adı Giriniz..." />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="durum">Durum</label>
                        <x-adminlte-input-switch name="durum" data-on-color="success" data-off-color="danger" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-button class="mt-4" label="Kaydet" theme="success" icon="fas fa-spinner fa-spin" />
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