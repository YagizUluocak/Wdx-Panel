@extends('adminlte::page')

@section('plugins.BootstrapColorpicker', true)
@section('plugins.Select2', true)

@section('title', 'Genel Ayarlar')

@section('content_header')
    <h1>Genel Ayarlar</h1>
@stop

@section('content')

<div class="container-fluid">
    <x-adminlte-card  title="Logo Ayarları" theme="light" class="renk-cards mt-4">
        <!--Logo-->
        <div class="row">

            <div class="col-4">
                <x-adminlte-card title="Logo Yükle" theme="light" class="renk-cards">
                    <x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
                        <x-slot name="prependSlot">
                            <div class="input-group-text bg-lightblue">
                                <i class="fas fa-upload"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input-file>
                    <div class="text-center">
                        <img  class="img-fluid" src="{{ asset('images/8ptAya.jpg')}}" alt="" style="width: 200px;height:200px;">
                    </div>
                </x-adminlte-card>
            </div>

            <div class="col-4">

                <x-adminlte-card title="Negatif Logo Yükle" theme="light" class="renk-cards">
                    <x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
                        <x-slot name="prependSlot">
                            <div class="input-group-text bg-lightblue">
                                <i class="fas fa-upload"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input-file>
                    <div class="text-center">
                        <img class="img-fluid" src="{{ asset('images/AdminLTELogo.png')}}" alt="" style="width: 200px;height:200px;">
                    </div>
                </x-adminlte-card>

            </div>

            <div class="col-4">

                <x-adminlte-card title="Favicon Yükle" theme="light" class="renk-cards">
                    <x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
                        <x-slot name="prependSlot">
                            <div class="input-group-text bg-lightblue">
                                <i class="fas fa-upload"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input-file>
                    <div class="text-center">
                        <img class="img-fluid" src="{{ asset('images/8ptAya.jpg')}}" alt="" style="width: 200px;height:200px;">
                    </div>
                </x-adminlte-card>

            </div>

        </div>
        <!--Logo End-->

        <!--Renk-->
        <x-adminlte-card  title="Renk Seç" theme="light" class="renk-cards mt-4">
            <div class="row">
                <div class="col-4">
                    <h5><b>1. Renk(Genel Renk)</b></h5>
                        <x-adminlte-input-color name="icAddon" data-color="rgb(50, 100, 150)" data-format='hex' data-horizontal=true>
                            <x-slot name="appendSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-lg fa-square"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-color>

                </div>

                <div class="col-4">
                    <h5><b>2. Renk</b></h5>
                    <x-adminlte-input-color name="icAddon" data-color="rgb(50, 100, 150)" data-format='hex' data-horizontal=true>
                        <x-slot name="appendSlot">
                            <div class="input-group-text">
                                <i class="fas fa-lg fa-square"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input-color>
                </div>

                <div class="col-4">
                    <h5><b>3. Renk</b></h5>
                    <x-adminlte-input-color name="icAddon" data-color="rgb(50, 100, 150)" data-format='hex' data-horizontal=true>
                        <x-slot name="appendSlot">
                            <div class="input-group-text">
                                <i class="fas fa-lg fa-square"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input-color>
                </div>
            </div>
        </x-adminlte-card>
        <!--Renk Sonu-->

        <div class="row">
            <x-adminlte-input name="iLabel" label="Site Url" placeholder="Url Giriniz" fgroup-class="col-md-12" disable-feedback/>
        </div>

        <div class="row">
            <x-adminlte-input name="iLabel" label="Site Title" placeholder="Title Giriniz" fgroup-class="col-md-12" disable-feedback/>
        </div>

        <div class="row">
            <x-adminlte-input name="iLabel" label="Yönetim Panel Giriş Link Adresi" placeholder="Title Giriniz" fgroup-class="col-md-12" disable-feedback/>
        </div>
        @php
            $config = [
                "placeholder" => "Select or add new categories...",
                "allowClear" => true,
                "tags" => true,  // Etiketleme özelliğini aktif eder
                "tokenSeparators" => [',', ' '],  // Virgül ve boşluk ile ayırmayı sağlar
            ];
        @endphp

        <x-adminlte-select2 id="sel2Category" name="sel2Category[]" label="Keywords" igroup-size="sm" :config="$config" multiple>
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-red">
                    <i class="fas fa-tag"></i>
                </div>
            </x-slot>
        </x-adminlte-select2>


        <x-adminlte-textarea name="taDesc" label="Description" rows=5 igroup-size="sm" placeholder="Meta Description Yazısı Giriniz...">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-dark">
                    <i class="fas fa-lg fa-file-alt text-warning"></i>
                </div>
            </x-slot>
        </x-adminlte-textarea>

        <div class="row">
            <x-adminlte-input name="iLabel" label="Copyright Metni" placeholder="Copyright" fgroup-class="col-md-12" disable-feedback/>
        </div>


        
        <x-adminlte-button label="Güncelle" theme="success"/>

    </x-adminlte-card>
</div>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
 <style>
    h5{
        color: #48568f;
    }
    .renk-cards{
        box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
    }
 </style>

@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>


@stop