@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Yeni Kategori Ekle')

@section('content_header')
    <h1>Yeni Kategori Ekle</h1>
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

            <form id="kategoriForm" action="{{ route('admin.kategori.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="name" label="Kategori Adı" placeholder="Kategori Adı Giriniz..." />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="durumSwitch">Durum</label>
                        <x-adminlte-input-switch id="durumSwitch" name="durumSwitch" data-on-color="success" data-off-color="danger" data-on-text="Göster" data-off-text="Gizle" />
                    <!-- Hidden durum input (JavaScript ile güncellenecek) -->
                    <input type="hidden" name="durum" id="durum">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-button type="submit" class="mt-4" label="Kaydet" theme="success" icon="fas fa-spinner fa-spin" />
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