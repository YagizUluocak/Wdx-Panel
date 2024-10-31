@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Proje Listesi')

@section('content_header')
    <h1>Projeler</h1>
@stop

@php
$heads = [
    'ID',
    ['label' => 'Proje Görseli', 'width' => 20],
    ['label' => 'Proje Başlık'],
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
            <button class="btn btn-primary mb-2">Yeni Proje Ekle</button>
            <div class="row">
                <div class="col-12">
                    <x-adminlte-datatable class="text-center" :heads="$heads" id="tableprojeliste" striped hoverable bordered compressed centered>

                        @foreach($projeler as $proje)
                            <tr>
                                <td>{{$proje->id}}</td>
                                <td>
                                    <img name="resim" src="{{ asset('storage/proje/kapak/' . $proje->resim)}}" class="img-fluid" style="width: 150px;height:100px;" alt="">
                                </td>
                                <td>{{$proje->name}}</td>
                                <td style="color:{{ $proje->durum ? 'rgb(49, 160, 49)' : 'rgb(160, 49, 49)' }}"> {{ $proje->durum ? 'Aktif' : 'Pasif' }}</td>
                                <td>
                                    <a href="{{ route('admin.proje.edit', $proje->id) }}" class="btn btn-warning mx-1 shadow btn-sm">Düzenle</a>
                                    <button class="btn btn-danger mx-1 shadow btn-sm" title="Delete" onclick="event.preventDefault(); if(confirm('Bu Ürünü silmek istediğinizden emin misiniz?')) { document.getElementById('delete-form-{{ $proje->id }}').submit(); }">
                                        <i class="fa fa-lg fa-fw fa-trash"></i>
                                    </button>
                                    <form id="delete-form-{{ $proje->id }}" action="{{ route('admin.proje.destroy', $proje->id) }}" method="POST" style="display: none;">
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