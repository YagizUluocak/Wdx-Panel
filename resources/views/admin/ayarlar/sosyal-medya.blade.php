@extends('adminlte::page')

@section('title', 'Sosyal Medya Ayarları')

@section('content_header')
<h1>Sosyal Medya Ayarları</h1>
@stop

@section('content')
<div class="container-fluid">
    <x-adminlte-card>

        <form action="#" method="POST">
         
            <!--İnstagram-->
            <div class="row">
                <div class="col-12">
                    <x-adminlte-input name="instagram" label="İnstagram Sayfa Url" placeholder="Instagram">
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fa-brands fa-instagram fa-xl text-lightblue"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>
            </div>
            
            <!--Twitter-->
            <div class="row">
                <div class="col-12">
                    <x-adminlte-input name="twitter" label="Twitter Sayfa Url" placeholder="Twitter">
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fa-brands fa-twitter fa-xl text-lightblue"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>
            </div>

            <!--Youtube-->
            <div class="row">
                <div class="col-12">
                    <x-adminlte-input name="youtube" label="Youtube Sayfa Url" placeholder="Youtube">
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fa-brands fa-youtube fa-xl text-danger"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>
            </div>

            <!--Facebook-->
            <div class="row">
                <div class="col-12">
                    <x-adminlte-input name="facebook" label="Youtube Sayfa Url" placeholder="Facebook">
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fa-brands fa-facebook fa-xl text-lightblue"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>
            </div>
            
            <!--LinkedIn-->
            <div class="row">
                <div class="col-12">
                    <x-adminlte-input name="linkedin" label="LinkedIn Sayfa Url" placeholder="LinkedIn">
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fa-brands fa-linkedin fa-xl text-lightblue"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
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