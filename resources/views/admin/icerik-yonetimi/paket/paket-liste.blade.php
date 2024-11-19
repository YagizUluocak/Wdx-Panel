@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)
@section('plugins.Datatables', true)

@section('title', 'Paket Listesi')

@section('content_header')
    <h1>Paketlerimiz</h1>
@stop

@php
$heads = [
    'ID',
    ['label' => 'Başlık', 'width' => 20],
    ['label' => 'Tutar', 'width' => 20],
    ['label' => 'Durum'],
    ['label' => 'İşlemler'],
];

$btnEdit = '<a href="' . url('/admin/kategori-duzenle') . '" class="btn btn-warning mx-1 shadow btn-sm" title="Edit" >
    <i class="fa fa-lg fa-fw fa-pen"></i>
    </a>';

$btnDelete = '<button class="btn btn-danger mx-1 shadow btn-sm" title="Delete">
        <i class="fa fa-ls fa-fw fa-trash" igroup-size="sm"></i>
    </button>';

$anasayfa = '<x-adminlte-input-switch  name="anasayfa" data-on-color="success" data-off-color="danger"/>';

$durum = '<x-adminlte-input-switch  name="durum" data-on-color="success" data-off-color="danger"/>'
@endphp

@section('content')
    <div class="container-fluid">
        <x-adminlte-card>
            <button class="btn btn-primary mb-2">Yeni Paket Ekle</button>
            <div class="row">
                <div class="col-12">
                    <x-adminlte-datatable class="text-center" :heads="$heads" id="tablepaketliste" striped hoverable bordered compressed centered>
                        
                        @if($paketler->isempty())
                            <tr style="height: 50px;">
                                <td colspan="5" class="text-center bg-danger">Herhangi Bir Kayıt Bulunamadı</td>
                            </tr>
                        @else
                            @foreach ($paketler as $paket)
                                <tr>
                                    <td>{{ $paket->id}}</td>
                                    <td>{{ $paket->baslik }}</td>
                                    <td>{{ $paket->fiyat }}</td>
                                    <td style="color:{{ $paket->durum == 1 ? 'rgb(49,160,49)' : 'rgb(160,49,49)' }}">{{ $paket->durum == 1 ? 'Aktif' : 'Pasif'}}</td>
                                    <td>
                                        <a href="{{ route('admin.paket.edit', $paket->id) }}" class="btn btn-warning mx-1 shadow btn-sm">Düzenle</a>
                                        <button class="btn btn-danger mx-1 shadow btn-sm" title="Delete" onclick="event.preventDefault(); if(confirm('Bu Ürünü silmek istediğinizden emin misiniz?')) { document.getElementById('delete-form-{{ $paket->id }}').submit(); }">
                                            <i class="fa fa-lg fa-fw fa-trash"></i>
                                        </button>
                                        <form id="delete-form-{{ $paket->id }}" action="{{ route('admin.paket.destroy', $paket->id) }}" method="POST" style="display: none;">
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