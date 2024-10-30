@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Kategorü Düzenle')

@section('content_header')
    <h1>Kategorü Düzenle</h1>
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

            <form id="kategoriForm" action="{{ route('admin.kategori.update', $kategori->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input
                        name="name" 
                        label="Kategori Adı" 
                        placeholder="Kategori Adı Giriniz..."
                        value="{{ old('name', $kategori->name)}}"
                        />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="durumSwitch">Durum</label><br>
                        <input type="checkbox" 
                            id="durumSwitch" 
                            name="durumSwitch" 
                            data-on-color="success" 
                            data-off-color="danger" 
                            data-on-text="Aktif" 
                            data-off-text="Pasif" 
                            data-size="large"
                            {{ $kategori->durum == 1 ? 'checked' : '' }} 
                        />
                        <input type="hidden" name="durum" id="durum" value="{{ old('durum', $kategori->durum) }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-button type="submit" class="mt-4" label="Güncelle" theme="success" icon="fas fa-spinner fa-spin" />
                    </div>
                </div>

            </form>
        </x-adminlte-card>
    </div>
@stop


@section('css')

@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/js/fileinput.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap3/bootstrap-switch.min.js"></script>

<script>
    $(document).ready(function() {
        $("input[name='durumSwitch']").bootstrapSwitch();
    });
</script>

<script>
    document.getElementById('kategoriForm').addEventListener('submit', function(e) {
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
                window.location.href = "{{ route('admin.kategori.index') }}";
            }, 1500);
        }
    };
</script>
@stop