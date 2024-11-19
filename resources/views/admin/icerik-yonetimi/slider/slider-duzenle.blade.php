@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Slider Düzenle')

@section('content_header')
    <h1>Slider Düzenle</h1>
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


            <form id="sliderForm" method="POST" action="{{ route('admin.slider.update', $slider->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="baslik" label="Slider Başlık" placeholder="Slider Başlığı Giriniz." value="{{ old('baslik', $slider->baslik) }}" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="resim">Slider Görseli</label><br>
                        <img src="{{ asset('storage/slider/' . $slider->resim)}}" class="mb-2" style="width: 250px;">
                        <x-adminlte-input-file name="resim"  placeholder="{{ old('resim', $slider->resim) }}">
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
                        <label for="description">Description</label>
                        <x-adminlte-textarea name="description" id="description" rows="4" style="width: 100%" style="resize: none;" placeholder="Description Metni Giriniz.">{{ old('blog', $slider->description) }}</x-adminlte-textarea>
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
                        {{ $slider->durum == 1 ? 'checked' : '' }}
                        />

                        <input type="hidden" name="durum" id="durum" value="{{ old('durum', $slider->durum) }}">
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

            
        document.getElementById('sliderForm').addEventListener('submit', function(e) {
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
                    window.location.href = "{{ route('admin.slider.index') }}";
                }, 1200);
            }
        };
    </script>
<!-- Switch Son -->

@stop