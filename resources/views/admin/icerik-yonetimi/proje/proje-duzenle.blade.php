@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Proje Düzenle')

@section('content_header')
    <h1>Proje Düzenle</h1>
@stop

@section('content')

    <div class="container-fluid">
        <x-adminlte-card>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('success'))
                <div id="success-alert" class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif


            <form method="POST"
            id="projeForm"
            action="{{ route('admin.proje.update', $proje->id) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="name" label="Proje adı" placeholder="Proje adı Giriniz." value="{{ old('name', $proje->name) }}"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="resim">Proje Kapak Görseli</label><br>
                        <img src="{{ asset('storage/proje/kapak/' . $proje->resim)}}" style="width: 250px;">

                        <x-adminlte-input-file name="resim"  placeholder="Proje Kapak Resmi Seçiniz.">
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
                        <label for="durumSwitch">Durum</label>
                        <input type="checkbox" 
                        name="durumSwitch" 
                        id="durumSwitch"
                        data-on-color="success"
                        data-off-color="danger"
                        data-on-text="Aktif"
                        data-off-text="Pasif"
                        data-size="large"
                        {{ $proje->durum == 1 ? 'checked' : '' }}
                        />

                        <input type="hidden" name="durum" id="durum" value="{{ old('durum', $proje->durum) }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-textarea name="spot_metni" label="Spot Metni" rows=5 placeholder="Spot Metni giriniz..." style="resize: none;">{{ old('spot_metni', $proje->spot_metni) }}</x-adminlte-textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="icerik">Proje İçerik</label>
                        <textarea name="icerik" id="summernote" cols="30" rows="10">{{ old('icerik', $proje->icerik) }}</textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mt-4">
                        <x-adminlte-card title="Proje Görselleri" theme="secondary" icon="fas fa-camera">
                            
                            <div class="mb-3">
                                <h5 class="fw-bold">Mevcut Görseller</h5>
                                
                                <div class="row" id="imageGallery">
                                    @foreach($projeResimleri as $resim)

                                        <div class="col-3 mb-4" id="image-{{ $resim->id }}">
                                            <div class="card custom-card">
                                                <img class="card-img-top" src="{{ asset('storage/proje/resimler/' . $resim->resim_adi)}}">

                                                <div class="card-body">
                                                    <button type="button" class="btn btn-danger delete-image-btn" data-image-id="{{ $resim->id }}">
                                                        <i class="fas fa-trash-alt"></i>Sil
                                                    </button>
                                                </div>
                                                
                                            </div>        
                                        </div>

                                    @endforeach
                                </div>
                            </div>

                            <label for="projeresim">Yeni Görsel Ekle</label>
                            <input type="file" class="custom-file-input" id="projeresim" name="projeresim[]" multiple>

                        </x-adminlte-card>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12 mt-4">
                        <x-adminlte-card title="Seo Ayarları" theme="secondary" icon="fas fa-info-circle">
                            <div class="col-12">
                                <label for="description">Description</label>
                                <x-adminlte-textarea name="description" id="description" rows="4" style="width: 100%" style="resize: none;" placeholder="Description Metni Giriniz.">{{ old('description', $proje->description) }}</x-adminlte-textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <x-adminlte-input name="keywords" label="Keywords" placeholder="Keywords Giriniz." value="{{ old('keywords', $proje->keywords) }}" />
                            </div>
                        </x-adminlte-card>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-button class="mt-4" type="submit" label="Güncelle" theme="success" icon="fas fa-spinner fa-spin"/>
                    </div>
                </div>

            </form>
        </x-adminlte-card>
    </div>



@stop



@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

<!-- Text Editör -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">


<!-- Çoklu Resim -->
<style>
    .custom-card {
        border-radius: 12px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        transition: transform 0.3s;
    }

    .custom-card:hover {
        transform: scale(1.05);
    }

    .custom-card img {
        height: 200px;
        object-fit: cover;
        border-bottom: 2px solid #ddd;
    }

    .custom-card .card-body {
        background-color: #f9f9f9;
        padding: 15px;
        text-align: center;
    }

    .custom-card .form-check-input {
        margin-right: 10px;
        transform: scale(1.2);
        accent-color: #ff6b6b;
    }

    .remove-label {
        color: #ff6b6b;
        font-weight: 600;
        cursor: pointer;
    }

    .remove-label:hover {
        color: #e63946;
    }

    .custom-file-input {
        display: inline-block;
        width: 100%;
        height: 45px;
        padding: 10px;
        margin-top: 15px;
        font-size: 14px;
        background-color: #f1f1f1;
        border: 2px dashed #ddd;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s, border-color 0.3s;
    }

    .custom-file-input:hover {
        background-color: #e9ecef;
        border-color: #ccc;
    }
</style>
<!-- Çoklu Resim Son-->




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

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap3/bootstrap-switch.min.js"></script>
<script>
    $(document).ready(function() {
        $("input[name='durumSwitch']").bootstrapSwitch();
    });
</script>


<!-- Text Editör -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>

<!-- Text Editör Son -->


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


<script>

    //Switch Ayarları
    document.getElementById('projeForm').addEventListener('submit', function(e) {
        // Switch input kontrolü
        let switchInput = document.getElementById('durumSwitch');
        let durumInput = document.getElementById('durum');
        
        // Switch açık (on) ise durum değerini 1 yap, değilse 0 yap
        durumInput.value = switchInput.checked ? 1 : 0;
    });

        // Eğer başarı mesajı varsa, yönlendirme işlemini yap
        window.onload = function() {
        if (document.getElementById('success-alert')) {
            setTimeout(function() {
                // 1 saniye sonra yönlendir
                window.location.href = "{{ route('admin.proje.index') }}";
            }, 1200);
        }
    };
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteButtons = document.querySelectorAll('.delete-image-btn');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const imageId = this.getAttribute('data-image-id');
                
                // AJAX isteği ile silme işlemi
                fetch(`/proje/resim-sil/${imageId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Başarıyla silindiyse, ilgili görseli kaldır
                        document.getElementById(`image-${imageId}`).remove();
                    } else {
                        alert('Resim silinemedi.');
                    }
                })
                .catch(error => console.error('Silme hatası:', error));
            });
        });
    });
</script>

@stop