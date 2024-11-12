@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)
@section('plugins.Datatables', true)
@section('title', 'Soru Listesi')

@section('content_header')
    <h1>Soru Listesi</h1>
@stop

@php
$heads = [
    ['label' => 'ID', 'width' => 5],
    ['label' => 'Soru Başlık'],
    ['label' => 'Durum', 'width' => 10],
    ['label' => 'İşlemler', 'width' => 15],
];


@endphp

@section('content')
    <div class="container-fluid">
        <x-adminlte-card>
            <button class="btn btn-primary mb-2">Yeni Soru Ekle</button>
            <div class="row">
                <div class="col-12">
                    <x-adminlte-datatable class="text-center" :heads="$heads" id="tablesoruliste" striped hoverable bordered compressed centered>

                        @if($sorular->isempty())
                            <tr style="height: 50px;">
                                <td colspan="4" class="text-center bg-warning">Herhangi Bir Kayıt Bulunamadı</td>
                            </tr>
                        @else
                            @foreach($sorular as $soru)
                                <tr>
                                    <td>{{ $soru->id }}</td>
                                    <td>{{ $soru->baslik }}</td>
                                    <td style="color:{{ $soru->durum ? 'rgb(49, 160, 49)' : 'rgb(160, 49, 49)' }}"> {{ $soru->durum ? 'Aktif' : 'Pasif' }}</td>
                                    <td>
                                        <a href="{{ route('admin.soru.edit', $soru->id) }}" class="btn btn-warning mx-1 shadow btn-sm">Düzenle</a>
                                        <button class="btn btn-danger mx-1 shadow btn-sm" title="Delete" onclick="event.preventDefault(); if(confirm('Bu Soruyu silmek istediğinizden emin misiniz?')) { document.getElementById('delete-form-{{ $soru->id }}').submit(); }">
                                            <i class="fa fa-lg fa-fw fa-trash"></i>
                                        </button>
                                        <form id="delete-form-{{ $soru->id }}" action="{{ route('admin.soru.destroy', $soru->id) }}" method="POST" style="display: none;">
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