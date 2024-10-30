@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'E-Katalog Düzenle')

@section('content_header')
    <h1>Katalog Düzenle</h1>
@stop

@section('content')

    <div class="container-fluid">
        <x-adminlte-card>
            <form method="POST">
                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="title" label="Katalog Başlık" placeholder="Katalog Başlığı Giriniz." />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="katalogresimkapak">Listeleme Görseli</label>
                        <x-adminlte-input-file name="katalogresimkapak"  placeholder="Kapak Seçiniz.">
                            <x-slot name="prependedSlot">
                                <div class="input-group-text bg-lightblue">
                                    <i class="fas fa-upload"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-file>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="dosya">Dosya</label>
                        <x-adminlte-input-file name="dosya" placeholder="Dosya Seçiniz.">
                            <x-slot name="prependedSlot">
                                <div class="input-group-text bg-lightblue">
                                    <i class="fas fa-upload"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-file>
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


<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">

@stop

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/js/fileinput.min.js"></script>


@stop