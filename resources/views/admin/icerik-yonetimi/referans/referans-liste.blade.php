@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)
@section('plugins.Datatables', true)

@section('title', 'Referans Listesi')

@section('content_header')
    <h1>Referans Listesi</h1>
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
            <button class="btn btn-primary mb-2">Yeni Referans Ekle</button>
            <div class="row">
                <div class="col-12">
                    <x-adminlte-datatable class="text-center" :heads="$heads" id="tablereferansliste" striped hoverable bordered compressed centered>

                        @if($referanslar->isempty())
                            <tr>
                                <td colspan="5" class="text-center bg-warning">Herhangi Bir Kayıt Bulunamadı.</td>
                            </tr>


                        @else
                            @foreach ($referanslar as $referans)
                                <tr>
                                    <td>{{ $referans->id }}</td>
                                    <td>
                                        <img src="{{ asset('storage/referans/'.$referans->resim) }}" class="img-fluid" style="width: 150px; height:100px;">
                                    </td>
                                    <td>{{ $referans->baslik }}</td>
                                    <td style="color:{{ $referans->durum ? 'rgb(49, 160, 49)' : 'rgb(160, 49, 49)' }}"> {{ $referans->durum ? 'Aktif' : 'Pasif' }}</td>
                                    <td>
                                        <a href="{{ route('admin.referans.edit', $referans->id) }}" class="btn btn-warning mx-1 shadow btn-sm">Düzenle</a>
                                        <button class="btn btn-danger mx-1 shadow btn-sm" title="Delete" onclick="event.preventDefault(); if(confirm('Bu Referansı silmek istediğinizden emin misiniz?')) { document.getElementById('delete-form-{{ $referans->id }}').submit(); }">
                                            <i class="fa fa-lg fa-fw fa-trash"></i>
                                        </button>
                                        <form id="delete-form-{{ $referans->id }}" action="{{ route('admin.referans.destroy', $referans->id) }}" method="POST" style="display: none;">
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