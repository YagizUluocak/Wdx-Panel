@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)
@section('plugins.Datatables', true)
@section('title', 'Ürün Listesi')

@section('content_header')
    <h1>Ürünler</h1>
@stop

@php
$heads = [
    'ID',
    ['label' => 'Ürün Resim'],
    ['label' => 'Ürün Adı'],
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
            <a href="{{ route('admin.urun.create') }}" class="btn btn-primary mb-2" >Yeni Ürün Ekle</a>
            <div class="row">
                <div class="col-12">
                    <x-adminlte-datatable class="text-center" :heads="$heads" id="tableurunliste" striped hoverable bordered compressed centered>
                        @foreach($urunler as $urun)
                            <tr>
                                <td>{{$urun->id}}</td>
                                <td>
                                    <img name="resim" src="{{ asset('storage/urun/kapak/' . $urun->resim)}}" class="img-fluid" style="width: 150px;height:100px;" alt="">
                                </td>
                                <td>{{$urun->name}}</td>
                                <td style="color:{{ $urun->durum ? 'rgb(49, 160, 49)' : 'rgb(160, 49, 49)' }}"> {{ $urun->durum ? 'Aktif' : 'Pasif' }}</td>
                                <td>
                                    <a href="{{ route('admin.urun.edit', $urun->id) }}" class="btn btn-warning mx-1 shadow btn-sm">Düzenle</a>
                                    <button class="btn btn-danger mx-1 shadow btn-sm" title="Delete" onclick="event.preventDefault(); if(confirm('Bu Ürünü silmek istediğinizden emin misiniz?')) { document.getElementById('delete-form-{{ $urun->id }}').submit(); }">
                                        <i class="fa fa-lg fa-fw fa-trash"></i>
                                    </button>
                                    <form id="delete-form-{{ $urun->id }}" action="{{ route('admin.urun.destroy', $urun->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
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