@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Belge Düzenle')

@section('content_header')
    <h1>Belge Düzenle</h1>
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
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
            <form id="belgeForm" action="{{ route('admin.belge.update', $belge->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input value="{{ old('baslik', $belge->baslik)}} " name="baslik" label="Belge Başlık" placeholder="Belge Başlığı Giriniz." />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="belgeresim">Belge</label><br>
                        <img name="belgeresim" src="{{ asset('storage/belge/' . $belge->belge) }}" class="img-fluid mb-4" style="width: 250px;" alt=""> <br>
                        <input type="file" name="belge" id="belge" class="mb-4"/>
                    </div>
                </div>

                @php

                $goster = $belge->durum;

                @endphp


                <div class="row">
                    <div class="col-12">
                        <label for="durumSwitch">Durum</label><br>
                        <input type="checkbox" 
                            style="height: 40px;line-height: 40px;"
                            id="durumSwitch" 
                            name="durumSwitch" 
                            data-on-color="success" 
                            data-off-color="danger" 
                            data-on-text="Aktif" 
                            data-off-text="Pasif" 
                            data-size="large"
                            {{ $goster == 1 ? 'checked' : '' }} 
                        />
                        <input type="hidden" name="durum" id="durum" value="{{ old('durum', $belge->durum) }}">
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-12">
                        <x-adminlte-button type="submit" class="mt-4" label="Kaydet" theme="success" icon="fas fa-spinner fa-spin"/>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap3/bootstrap-switch.min.js"></script>
<script>
    $(document).ready(function() {
        $("input[name='durumSwitch']").bootstrapSwitch();
    });
</script>
<script>
    document.getElementById('belgeForm').addEventListener('submit', function(e) {
        // Switch input kontrolü
        let switchInput = document.getElementById('durumSwitch');
        let durumInput = document.getElementById('durum');
        
        // Switch açık (on) ise durum değerini 1 yap, değilse 0 yap
        durumInput.value = switchInput.checked ? 1 : 0;
    });
</script>
@stop