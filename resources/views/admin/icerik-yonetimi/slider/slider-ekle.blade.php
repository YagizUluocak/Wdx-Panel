@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Yeni Slider Ekle')

@section('content_header')
    <h1>Yeni Slider Ekle</h1>
@stop

@section('content')

    <div class="container-fluid">
        <x-adminlte-card>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('success'))
                <div id="success-alert" class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif


            <form id="sliderForm" method="POST" action="{{ route('admin.slider.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="baslik" label="Slider Başlık" placeholder="Slider Başlığı Giriniz." />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="resim">Slider Görseli Seçiniz</label>
                        <x-adminlte-input-file name="resim"  placeholder="Slider Görseli Seçiniz">
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
                        <label for="description">Açıklama</label>
                        <x-adminlte-textarea name="description" placeholder="Açıklama Giriniz..." style="resize: none;" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="durumSwitch">Durum</label>
                        <x-adminlte-input-switch 
                            id="durumSwitch" 
                            name="durumSwitch" 
                            data-on-color="success" 
                            data-off-color="danger" 
                            data-on-text="Göster" 
                            data-off-text="Gizle" />         
                    <input type="hidden" name="durum" id="durum">
                    </div>
                </div>
    

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-button class="mt-4" type="submit" label="Kaydet" theme="success" icon="fas fa-spinner fa-spin"/>
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


@stop