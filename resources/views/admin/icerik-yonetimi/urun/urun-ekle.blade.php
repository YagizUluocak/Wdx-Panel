@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Yeni Ürün Ekle')

@section('content_header')
    <h1>Yeni Ürün Ekle</h1>
@stop

@section('content')

    <div class="container-fluid">
        <x-adminlte-card>
            <form method="POST">
                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="name" label="Ürün adı" placeholder="Ürün adı Giriniz." />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="urun_kodu" label="Ürün Kodu" placeholder="Ürün Kodu Giriniz(Opsiyonel)"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="fiyat" label="fiyat" placeholder="Ürün Fiyatı Giriniz." />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-select name="stok" label="Stok Durumu" data-placeholder="Stok Durumu Seçiniz">
                            <option>Stok Var</option>
                            <option>Tükendi</option>
                        </x-adminlte-select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="urunresimkapak">Ürün Kapak Görseli</label>
                        <x-adminlte-input-file name="urunresimkapak"  placeholder="Ürün Kapak Resmi Seçiniz.">
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
                        <label for="anasayfada">Anasayfada Görünsün mü?</label>
                        <x-adminlte-input-switch name="anasayfada" data-on-color="success" data-off-color="danger"/>
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
                        <label for="sumernote">Ürün Açıklaması</label>
                        <textarea name="summernote" id="summernote" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mt-4">
                        <x-adminlte-card title="Ürün Görselleri" theme="secondary" icon="fas fa-camera">
                            <label for="urunresim">Ürün Görselleri Seçiniz</label>
                            <x-adminlte-input id="urunresim" name="urunresim[]" type="file" multiple />    
                        </x-adminlte-card>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12 mt-4">
                        <x-adminlte-card title="Seo Ayarları" theme="secondary" icon="fas fa-info-circle">
                            <div class="col-12">
                                <label for="description">Description</label>
                                <x-adminlte-textarea name="descriptin" id="description" rows="4" style="width: 100%" style="resize: none;" placeholder="Description Metni Giriniz."></x-adminlte-textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <x-adminlte-input name="keywords" label="Keywords" placeholder="Keywords Giriniz." />
                            </div>
                        </x-adminlte-card>
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
<script>
    $("#urunresim").fileinput({
        showUpload: false,
        previewFileType: 'any',
        theme: "fa",
        allowedFileExtensions: ['jpg', 'png', 'gif', 'jpeg', 'webp'],
        maxFileCount: 10,
        browseOnZoneClick: true,
        layoutTemplates: { main1: "{preview}\n<div class='input-group w-100'>{remove}\n{cancel}\n{upload}\n{browse}</div>" }
        
    });
</script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
<script>
    $('#summernote').summernote({
      placeholder: 'Ürün Açıklaması Giriniz',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear', 'fontname']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['codeview', 'help']]
      ],
      fontNames: ['Arial', 'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Tahoma', 'Times New Roman', 'Verdana'],
      fontNamesIgnoreCheck: ['Montserrat', 'Roboto']
    });
</script>


@stop