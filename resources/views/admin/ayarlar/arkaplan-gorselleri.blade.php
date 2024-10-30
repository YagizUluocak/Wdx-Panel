@extends('adminlte::page')

@section('title','Arkaplan Görselleri')


@section('content_header')
<h1>Arkaplan Görselleri</h1>
@stop


@section('content')
<x-adminlte-card>

    <div class="row"> 
        <!-- S.S.S-->
        <div class="col-3">
            <div class="input-group d-flex align-items-center">
                <x-adminlte-card title="Sık Sorulan Sorular Arkaplan Görseli">
                <x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-lightblue">
                            <i class="fas fa-upload"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-file>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('images/8ptAya.jpg')}}" style="width: 150px; height: 150px;">
                </div>
                
                </x-adminlte-card>
            </div>
        </div>
        <!--SAYFALAR-->
        <div class="col-3">
            <div class="input-group d-flex align-items-center">
                <x-adminlte-card title="Sayfalar Arkaplan Görseli">
                <x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-lightblue">
                            <i class="fas fa-upload"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-file>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('images/8ptAya.jpg')}}" style="width: 150px; height: 150px;">
                </div>
                </x-adminlte-card>
            </div>
        </div>
        <!--BELGELERİMİZ-->
        <div class="col-3">
            <div class="input-group d-flex align-items-center">
                <x-adminlte-card title="Belgelerimiz Arka Plan">
                <x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-lightblue">
                            <i class="fas fa-upload"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-file>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('images/8ptAya.jpg')}}" style="width: 150px; height: 150px;">
                </div>
                </x-adminlte-card>
            </div>
        </div>
        <!--REFERANSLAR-->
        <div class="col-3">
            <div class="input-group d-flex align-items-center">
                <x-adminlte-card title="Referanslar Arka Plan">
                <x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-lightblue">
                            <i class="fas fa-upload"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-file>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('images/8ptAya.jpg')}}" style="width: 150px; height: 150px;">
                </div>
                </x-adminlte-card>
            </div>
        </div>
    </div>

    <div class="row mt-4"> 
        <!--HİZMETLERİMİZ-->
        <div class="col-3">
            <div class="input-group d-flex align-items-center">
                <x-adminlte-card title="Hizmetlerimiz Arkaplan Görseli">
                <x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-lightblue">
                            <i class="fas fa-upload"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-file>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('images/8ptAya.jpg')}}" style="width: 150px; height: 150px;">
                </div>
                
                </x-adminlte-card>
            </div>
        </div>

        <!--EKİBİMİZ-->
        <div class="col-3">
            <div class="input-group d-flex align-items-center">
                <x-adminlte-card title="Ekibimiz Arkaplan Görseli">
                <x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-lightblue">
                            <i class="fas fa-upload"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-file>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('images/8ptAya.jpg')}}" style="width: 150px; height: 150px;">
                </div>
                </x-adminlte-card>
            </div>
        </div>

        <!--FOTO GALERİ-->
        <div class="col-3">
            <div class="input-group d-flex align-items-center">
                <x-adminlte-card title="Foto Galeri Arka Plan">
                <x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-lightblue">
                            <i class="fas fa-upload"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-file>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('images/8ptAya.jpg')}}" style="width: 150px; height: 150px;">
                </div>
                </x-adminlte-card>
            </div>
        </div>

        <!--VİDEO GALERİ-->
        <div class="col-3">
            <div class="input-group d-flex align-items-center">
                <x-adminlte-card title="Video Galeri Arka Plan">
                <x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-lightblue">
                            <i class="fas fa-upload"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-file>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('images/8ptAya.jpg')}}" style="width: 150px; height: 150px;">
                </div>
                </x-adminlte-card>
            </div>
        </div>
    </div>

    <div class="row mt-4"> 
        <!--BLOG-->
        <div class="col-3">
            <div class="input-group d-flex align-items-center">
                <x-adminlte-card title="Blog Arkaplan Görseli">
                <x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-lightblue">
                            <i class="fas fa-upload"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-file>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('images/8ptAya.jpg')}}" style="width: 150px; height: 150px;">
                </div>
                
                </x-adminlte-card>
            </div>
        </div>

        <!--İLETİŞİM-->
        <div class="col-3">
            <div class="input-group d-flex align-items-center">
                <x-adminlte-card title="İletişim Arkaplan Görseli">
                <x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-lightblue">
                            <i class="fas fa-upload"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-file>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('images/8ptAya.jpg')}}" style="width: 150px; height: 150px;">
                </div>
                </x-adminlte-card>
            </div>
        </div>

        <!--E-KATALOG-->
        <div class="col-3">
            <div class="input-group d-flex align-items-center">
                <x-adminlte-card title="E-Katalog Arka Plan">
                <x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-lightblue">
                            <i class="fas fa-upload"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-file>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('images/8ptAya.jpg')}}" style="width: 150px; height: 150px;">
                </div>
                </x-adminlte-card>
            </div>
        </div>

        <!--ÜRÜNLERİMİZ-->
        <div class="col-3">
            <div class="input-group d-flex align-items-center">
                <x-adminlte-card title="Ürürnler Arka Plan">
                <x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-lightblue">
                            <i class="fas fa-upload"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-file>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('images/8ptAya.jpg')}}" style="width: 150px; height: 150px;">
                </div>
                </x-adminlte-card>
            </div>
        </div>
    </div>
    
    <div class="row mt-4"> 
        <!--PROJELER-->
        <div class="col-4">
            <div class="input-group d-flex align-items-center">
                <x-adminlte-card title="Projeler Arkaplan Görseli">
                <x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-lightblue">
                            <i class="fas fa-upload"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-file>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('images/8ptAya.jpg')}}" style="width: 150px; height: 150px;">
                </div>
                
                </x-adminlte-card>
            </div>
        </div>

        <!--ADMİN PANELİ GİRİŞ-->
        <div class="col-4">
            <div class="input-group d-flex align-items-center">
                <x-adminlte-card title="Admin Paneli Giriş Arkaplan Görseli">
                <x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-lightblue">
                            <i class="fas fa-upload"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-file>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('images/8ptAya.jpg')}}" style="width: 150px; height: 150px;">
                </div>
                </x-adminlte-card>
            </div>
        </div>

        <!--SAYFA BULUNAMADI-->
        <div class="col-4">
            <div class="input-group d-flex align-items-center">
                <x-adminlte-card title="Sayfa Bulunamadı Arka Plan">
                <x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-lightblue">
                            <i class="fas fa-upload"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-file>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('images/8ptAya.jpg')}}" style="width: 150px; height: 150px;">
                </div>
                </x-adminlte-card>
            </div>
        </div>

    </div>



</x-adminlte-card>

@stop



@section('css')

@stop

@section('js')

@stop