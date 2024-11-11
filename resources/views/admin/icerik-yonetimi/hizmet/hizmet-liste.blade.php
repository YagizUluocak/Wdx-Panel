@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Hizmet Listesi')

@section('content_header')
    <h1>Hizmet Listesi</h1>
@stop

@php
$heads = [
    ['label' => 'ID', 'width' => 5],
    ['label' => 'Resim', 'width' => 15],
    ['label' => 'Başlık'],
    ['label' => 'Durum', 'width' => 10],
    ['label' => 'İşlemler', 'width' => 15],
];

@endphp

@section('content')
    <div class="container-fluid">
        <x-adminlte-card>
            <button class="btn btn-primary mb-2">Yeni Hizmet Ekle</button>
            <div class="row">
                <div class="col-12">
                    <x-adminlte-datatable class="text-center" :heads="$heads" id="tablehizmetliste" striped hoverable bordered compressed centered>

                        @if($hizmetler->isempty())
                            <tr style="height: 50px;">
                                <td colspan="5" class="text-center bg-warning">Herhangi Bir Kayıt Bulunamadı.</td>
                            </tr>

                        @else
                            @foreach($hizmetler as $hizmet)
                                <tr>
                                    <td>{{ $hizmet->id }}</td>
                                    <td><img src="{{ asset('storage/hizmet/'.$hizmet->resim) }}" class="img-fluid" style="width: 150px; height:100px;"></td>
                                    <td>{{ $hizmet->baslik }}</td>
                                    <td style="color:{{ $hizmet->durum ? 'rgb(49, 160, 49)' : 'rgb(160, 49, 49)' }}"> {{ $hizmet->durum ? 'Aktif' : 'Pasif' }}</td>
                                    <td>
                                        <a href="{{ route('admin.hizmet.edit', $hizmet->id) }}" class="btn btn-warning mx-1 shadow btn-sm">Düzenle</a>
                                        <button class="btn btn-danger mx-1 shadow btn-sm" title="Delete" onclick="event.preventDefault(); if(confirm('Bu Hizmeti silmek istediğinizden emin misiniz?')) { document.getElementById('delete-form-{{ $hizmet->id }}').submit(); }">
                                            <i class="fa fa-lg fa-fw fa-trash"></i>
                                        </button>
                                        <form id="delete-form-{{ $hizmet->id }}" action="{{ route('admin.hizmet.destroy', $hizmet->id) }}" method="POST" style="display: none;">
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