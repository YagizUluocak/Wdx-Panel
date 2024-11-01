@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Paket Düzenle')

@section('content_header')
    <h1>Paket Düzenle</h1>
@stop

@section('content')

    <div class="container-fluid">
        <x-adminlte-card>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div id="success-alert" class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form id="paketForm" action="{{ route('admin.paket.update', $paket->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <label for="baslik">Paket Başlığı</label>
                        <x-adminlte-input id="baslik" name="baslik"  placeholder="Paket Başlığı Giriniz." value="{{ old('baslik', $paket->baslik )}}" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input  name="fiyat" label="Fiyat" type="number" placeholder="Paket Fiyatı Giriniz." step="0.01" value="{{ old('fiyat', $paket->fiyat) }}" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-select name="periyod" label="Periyod" data-placeholder="Periyod Seçiniz">
                            <option value="0" {{ (old('periyod', $paket->periyod) == 0) ? 'selected' : '' }}>Tek Sefer</option>
                            <option value="1" {{ (old('periyod', $paket->periyod) == 1) ? 'selected' : '' }}>Haftalık</option>
                            <option value="2" {{ (old('periyod', $paket->periyod) == 2) ? 'selected' : '' }}>Aylık</option>
                            <option value="3" {{ (old('periyod', $paket->periyod) == 3) ? 'selected' : '' }}>Yıllık</option>
                        </x-adminlte-select>
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
                        {{ $paket->durum == 1 ? 'checked' : '' }}
                        />        
                    <input type="hidden" name="durum" id="durum" value="{{ old('durum', $paket->durum) }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-textarea name="spot_metni" label="Spot Metni" rows=5 placeholder="Spot Metni giriniz..." style="resize: none;">{{ old('spot_metni', $paket->spot_metni) }}</x-adminlte-textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                            <x-adminlte-textarea id="summernote" name="icerik" label="İçerik" rows=5 placeholder="Paket'in Özelliklerini Giriniz." style="resize: none;" >{{ old('icerik', $paket->icerik) }}</x-adminlte-textarea>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/js/fileinput.min.js"></script>
    <!-- TextEditor -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
    <script>
        $('#summernote').summernote({
        placeholder: 'Paket Açıklaması Giriniz',
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
    <!-- TextEditor -->


    <!-- Switch -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap3/bootstrap-switch.min.js"></script>
    <script>
        $(document).ready(function() {
            $("input[name='durumSwitch']").bootstrapSwitch();
        });
    </script>
    <script>

        
        document.getElementById('paketForm').addEventListener('submit', function(e) {
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
                    window.location.href = "{{ route('admin.paket.index') }}";
                }, 1200);
            }
        };
    </script>
    <!-- Switch Son -->

@stop