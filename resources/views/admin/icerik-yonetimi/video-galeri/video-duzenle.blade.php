@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Video Düzenle')

@section('content_header')
    <h1>Video Düzenle</h1>
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


            <form id="videoForm" action="{{ route('admin.video-galeri.update', $videoGaleri->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="baslik" label="Başlık" placeholder="Başlık Bilgisini Giriniz." value="{{ old('baslik', $videoGaleri->baslik) }}" />
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="url" label="Youtube Url" placeholder="Url Adresi Giriniz.." value="{{ old('url', $videoGaleri->url) }}" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="thumbnail">Video Thumbnail Görseli</label><br>
                        <img src="{{ asset('storage/Video/' . $videoGaleri->thumbnail)}}" class="mb-2" style="width: 250px;">
                        <x-adminlte-input-file name="thumbnail"  placeholder="{{ old('thumbnail', $videoGaleri->thumbnail) }}">
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
                        {{ $videoGaleri->durum == 1 ? 'checked' : '' }}
                        />

                        <input type="hidden" name="durum" id="durum" value="{{ old('durum', $videoGaleri->durum) }}">
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



@stop

@section('js')

<!-- Switch -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap3/bootstrap-switch.min.js"></script>
    <script>
        $(document).ready(function() {
            $("input[name='durumSwitch']").bootstrapSwitch();
        });
    </script>
    <script>

            
        document.getElementById('videoForm').addEventListener('submit', function(e) {
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
                    window.location.href = "{{ route('admin.video-galeri.index') }}";
                }, 1200);
            }
        };
    </script>
<!-- Switch Son -->

@stop