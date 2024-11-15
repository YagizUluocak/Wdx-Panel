@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Bayi/Şube Listesi')

@section('content_header')
    <h1>Bayi/Şube Listesi</h1>
@stop

@php
$heads = [
    ['label' => 'ID', 'width' => 5],
    ['label' => 'Şube/Firma Adı'],
    ['label' => 'Şehir/İlçe'],
    ['label' => 'Durum', 'width' => 10],
    ['label' => 'İşlemler', 'width' => 15],
];

@endphp

@section('content')
    <div class="container-fluid">
        <x-adminlte-card>
            <button class="btn btn-primary mb-2">Yeni Bayi/Şube Ekle</button>
            <div class="row">
                <div class="col-12">
                    <x-adminlte-datatable class="text-center" :heads="$heads" id="tablebayiliste" striped hoverable bordered compressed centered>

                        @if($subeler->isempty())
                            <tr>
                                <td colspan="5" class="text-center bg-warning">Herhangi Bir Kayıt Bulunamadı.</td>
                            </tr>
                        @else
                            @foreach($subeler as $sube)
                            <tr>
                                <td>{{ $sube->id }}</td>
                                <td>{{ $sube->firma }}</td>
                                <td>{{ $sube->sehir }}</td>
                                <td style="color:{{ $sube->durum ? 'rgb(49, 160, 49)' : 'rgb(160, 49, 49)' }}"> {{ $sube->durum ? 'Aktif' : 'Pasif' }}</td>
                                <td>
                                    <a href="{{ route('admin.sube.edit', $sube->id) }}" class="btn btn-warning mx-1 shadow btn-sm">Düzenle</a>
                                    <button class="btn btn-danger mx-1 shadow btn-sm" title="Delete" onclick="event.preventDefault(); if(confirm('Bu Şubeyi silmek istediğinizden emin misiniz?')) { document.getElementById('delete-form-{{ $sube->id }}').submit(); }">
                                        <i class="fa fa-lg fa-fw fa-trash"></i>
                                    </button>
                                    <form id="delete-form-{{ $sube->id }}" action="{{ route('admin.sube.destroy', $sube->id) }}" method="POST" style="display: none;">
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