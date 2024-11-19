@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)
@section('plugins.Datatables', true)

@section('title', 'Galeri Listesi')

@section('content_header')
    <h1>Galeri Listesi</h1>
@stop

@php
$heads = [
    'ID',
    ['label' => 'Görsel', 'width' => 20],
    ['label' => 'Başlık'],
    ['label' => 'Durum'],
    ['label' => 'İşlemler'],
];

@endphp

@section('content')
    <div class="container-fluid">
        <x-adminlte-card>
            <button class="btn btn-primary mb-2">Yeni Galeri Ekle</button>
            <div class="row">
                <div class="col-12">
                    <x-adminlte-datatable class="text-center" :heads="$heads" id="tablegaleriliste" striped hoverable bordered compressed centered>

                        @if($sliderler->isempty())
                            <tr>
                                <td colspan="5" class="text-center bg-warning">Herhangi Bir Kayıt Bulunamadı.</td>
                            </tr>
                        @else
                            @foreach($galeriler as $galeri)
                            <tr>
                                <td>{{ $galeri->id }}</td>
                                <td><img src="{{ asset('storage/galeri/'.$galeri->resim) }}" class="img-fluid" style="width: 150px; height:100px;"></td>
                                <td>{{ $galeri->baslik }}</td>
                                <td style="color:{{ $galeri->durum ? 'rgb(49, 160, 49)' : 'rgb(160, 49, 49)' }}"> {{ $galeri->durum ? 'Aktif' : 'Pasif' }}</td>
                                <td>
                                    <a href="{{ route('admin.foto-galeri.edit', $galeri->id) }}" class="btn btn-warning mx-1 shadow btn-sm">Düzenle</a>
                                    <button class="btn btn-danger mx-1 shadow btn-sm" title="Delete" onclick="event.preventDefault(); if(confirm('Bu Görseli silmek istediğinizden emin misiniz?')) { document.getElementById('delete-form-{{ $galeri->id }}').submit(); }">
                                        <i class="fa fa-lg fa-fw fa-trash"></i>
                                    </button>
                                    <form id="delete-form-{{ $galeri->id }}" action="{{ route('admin.foto-galeri.destroy', $galeri->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>

                            @endforeach


                        @endif

                    </x-adminlte-datatable>
                </div>
            </div>
        </x-adminlte-card>
    </div>

@stop


@section('css')

@stop


@section('js')

@stop