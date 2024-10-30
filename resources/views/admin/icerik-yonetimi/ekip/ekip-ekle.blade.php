@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Yeni Ekip Üyesi Ekle')

@section('content_header')
    <h1>Yeni Ekip Üyesi Ekle</h1>
@stop

@section('content')

    <div class="container-fluid">
        <x-adminlte-card>
            <form method="POST">

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="adsoyad" label="Ad Soyad" placeholder="Ad Soyad Giriniz." />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="gorev" label="Görev" placeholder="Görev Bilgisi Ekleyin." />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="profilfoto">Profil Fotoğrafı</label>
                        <x-adminlte-input-file name="profilfoto"  placeholder="Kapak Seçiniz.">
                            <x-slot name="prependedSlot">
                                <div class="input-group-text bg-lightblue">
                                    <i class="fas fa-upload"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-file>
                    </div>
                </div>

                <x-adminlte-card title="Sosyal Medya Ayarları" theme="secondary" icon="fas fa-info-circle">
                    <div class="row">
                        <div class="col-6">
                            <x-adminlte-input name="linkedin" label="LinkedIn Sayfa Url" placeholder="LinkedIn">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fa-brands fa-linkedin fa-xl text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>

                        <div class="col-6">
                            <x-adminlte-input name="facebook" label="Facebook Sayfa Url" placeholder="Facebook">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fa-brands fa-facebook fa-xl text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>


                        <div class="col-6">
                            <x-adminlte-input name="twitter" label="Twitter Sayfa Url" placeholder="Twitter">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fa-brands fa-twitter fa-xl text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>

                        <div class="col-6">
                            <x-adminlte-input name="instagram" label="İnstagram Sayfa Url" placeholder="Instagram">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fa-brands fa-instagram fa-xl text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>
                    </div>   
                </x-adminlte-card>

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