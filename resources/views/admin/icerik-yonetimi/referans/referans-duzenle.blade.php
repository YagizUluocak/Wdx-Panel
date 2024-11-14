@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Referans Düzenle')

@section('content_header')
    <h1>Referans Düzenle</h1>
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


            <form id="referansForm" method="POST" action="{{ route('admin.referans.update', $referans->id) }}" enctype="multipart/form-data" >
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="baslik" label="Referans Başlık" placeholder="soru Başlığı Giriniz." value="{{ old('baslik', $referans->baslik) }}" />
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <label for="resim">Referans Kapak Görseli</label><br>
                        <img src="{{ asset('storage/referans/' . $referans->resim)}}" style="width: 250px;">
                        <x-adminlte-input-file name="resim"  placeholder="Referans Kapak Resmi Seçiniz.">
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
                        <label for="durumSwitch">Durum</label><br>
                        <input type="checkbox" 
                        name="durumSwitch" 
                        id="durumSwitch"
                        data-on-color="success"
                        data-off-color="danger"
                        data-on-text="Aktif"
                        data-off-text="Pasif"
                        data-size="large"
                        {{ $referans->durum == 1 ? 'checked' : '' }}
                        />

                        <input type="hidden" name="durum" id="durum" value="{{ old('durum', $referans->durum) }}">
                    </div>
                </div>
        

                <div class="row">
                    <div class="col-12">
                        <label for="sumernote">İçerik</label>
                        <textarea name="icerik" id="summernote" cols="30" rows="10">{{ old('icerik', $referans->icerik) }}</textarea>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12 mt-4">
                        <x-adminlte-card title="Seo Ayarları" theme="secondary" icon="fas fa-info-circle">
                            <div class="col-12">
                                <label for="description">Description</label>
                                <x-adminlte-textarea name="description" id="description" rows="4" style="width: 100%" style="resize: none;" placeholder="Description Metni Giriniz.">{{ old('description', $referans->description) }}</x-adminlte-textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <x-adminlte-input name="keywords" label="Keywords" placeholder="Keywords Giriniz."  value="{{ old('keywords', $referans->keywords) }}" />
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


<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">

@stop

@section('js')

<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
<script>
    $('#summernote').summernote({
      placeholder: 'Referans içeriğini Giriniz.',
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
<!-- Switch -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap3/bootstrap-switch.min.js"></script>
    <script>
        $(document).ready(function() {
            $("input[name='durumSwitch']").bootstrapSwitch();
        });
    </script>
    <script>

            
        document.getElementById('referansForm').addEventListener('submit', function(e) {
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
                    window.location.href = "{{ route('admin.referans.index') }}";
                }, 1200);
            }
        };
    </script>
<!-- Switch Son -->

@stop