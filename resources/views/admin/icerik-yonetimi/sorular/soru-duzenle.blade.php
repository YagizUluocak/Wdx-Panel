@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Soru Düzenle')

@section('content_header')
    <h1>Sık Sorulan Sorular Düzenle</h1>
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

            <form id="soruForm" method="POST" action="{{ route('admin.soru.update', $soru->id) }}">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="baslik" label="Soru Başlık" placeholder="Soru Başlığı Giriniz." value="{{ old('baslik', $soru->baslik) }}" />
                    </div>
                </div>

                <div class="row mt-4">
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
                        {{ $soru->durum == 1 ? 'checked' : '' }}
                        />

                        <input type="hidden" name="durum" id="durum" value="{{ old('durum', $soru->durum) }}">
                    </div>
                </div>
        

                <div class="row mt-4">
                    <div class="col-12">
                        <label for="sumernote">İçerik</label>
                        <textarea name="icerik" id="summernote" cols="30" rows="10">{{ old('icerik', $soru->icerik) }}</textarea>
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

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">

@stop

@section('js')

    <!--Summernote -->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
        <script>
            $('#summernote').summernote({
            placeholder: 'Soru nun içeriğini Giriniz.',
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
    <!--Summernote Son-->

    <!-- Switch -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap3/bootstrap-switch.min.js"></script>
        <script>
            $(document).ready(function() {
                $("input[name='durumSwitch']").bootstrapSwitch();
            });
        </script>
        <script>

                
            document.getElementById('soruForm').addEventListener('submit', function(e) {
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
                        window.location.href = "{{ route('admin.soru.index') }}";
                    }, 900);
                }
            };
        </script>
    <!-- Switch Son -->

@stop