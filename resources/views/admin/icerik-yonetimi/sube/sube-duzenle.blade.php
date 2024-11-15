@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Bayi/Şube Düzenle')

@section('content_header')
    <h1>Bayi/Şube Düzenle</h1>
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

            <form id="subeForm" method="POST" action="{{ route('admin.sube.update', $sube->id) }}">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="firma" label="Firma / Şube Adı" placeholder="Firma Ad Bilgisi Giriniz." value="{{ old('firma', $sube->firma)  }}" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="adres" label="Açık Adres" placeholder="Açık Adres Bilgisini Giriniz." value="{{ old('adres', $sube->adres)  }}" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <x-adminlte-input name="telefon" label="Telefon" placeholder="Telefon Bilgisini Giriniz." value="{{ old('telefon', $sube->telefon)  }}" />
                    </div>
                    <div class="col-4">
                        <x-adminlte-input name="gsm" label="GSM" placeholder="GSM Bilgisini Giriniz." value="{{ old('mail', $sube->gsm)  }}"/>
                    </div>
                    <div class="col-4">
                        <x-adminlte-input name="mail" label="E-Posta" placeholder="E-Posta Bilgisini Giriniz." value="{{ old('mail', $sube->mail)  }}"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <x-adminlte-input name="sehir" label="Şehir" placeholder="Şehir Bilgisini Giriniz." value="{{ old('sehir', $sube->sehir)  }}"/>
                    </div>
                    <div class="col-6">
                        <x-adminlte-input name="ilce" label="ilce" placeholder="İlçe Bilgisini Giriniz." value="{{ old('ilce', $sube->ilce)  }}"/>
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
                        {{ $sube->durum == 1 ? 'checked' : '' }}
                        />

                        <input type="hidden" name="durum" id="durum" value="{{ old('durum', $sube->durum) }}">
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

<!-- Switch -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap3/bootstrap-switch.min.js"></script>
<script>
    $(document).ready(function() {
        $("input[name='durumSwitch']").bootstrapSwitch();
    });
</script>
<script>

        
    document.getElementById('subeForm').addEventListener('submit', function(e) {
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
                window.location.href = "{{ route('admin.sube.index') }}";
            }, 1200);
        }
    };
</script>
<!-- Switch Son -->
@stop