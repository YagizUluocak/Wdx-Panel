@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)
@section('plugins.Datatables', true)

@section('title', 'E-Katalog Listesi')

@section('content_header')
    <h1>E-Katalog Listesi</h1>
@stop

@php
$heads = [
    ['label' => 'ID', 'width' => 5],
    ['label' => 'Resim', 'width' => 15],
    ['label' => 'Başlık'],
    ['label' => 'Durum', 'width' => 10],
    ['label' => 'İşlemler', 'width' => 15],
];

$btnEdit = '<a href="' . url('/admin/katalog-duzenle') . '" class="btn btn-warning mx-1 shadow btn-sm" title="Edit" >
    <i class="fa fa-lg fa-fw fa-pen"></i>
    </a>';

$btnDelete = '<button class="btn btn-danger mx-1 shadow btn-sm" title="Delete">
        <i class="fa fa-ls fa-fw fa-trash" igroup-size="sm"></i>
    </button>';

@endphp

@section('content')
    <div class="container-fluid">
        <x-adminlte-card>
            <button class="btn btn-primary mb-2">Yeni E-Katalog Ekle</button>
            <div class="row">
                <div class="col-12">
                    <x-adminlte-datatable class="text-center" :heads="$heads" id="tablekatalogliste" striped hoverable bordered compressed centered>

                        @if($kataloglar->isempty())
                            <tr>
                                <td colspan="5" class="text-center bg-warning">Herhangi Bir Kayıt Bulunamadı.</td>
                            </tr>
                        @else
                            @foreach($kataloglar as $katalog)
                                <tr>
                                    <td>{{ $katalog->id }}</td>
                                    <td>
                                        <img src="{{ asset('storage/katalog/resim/'.$katalog->resim) }}" class="img-fluid" style="width: 150px; height:100px;">
                                    </td>
                                    <td>{{ $katalog->baslik }}</td>
                                    <td style="color:{{ $katalog->durum ? 'rgb(49, 160, 49)' : 'rgb(160, 49, 49)' }}"> {{ $katalog->durum ? 'Aktif' : 'Pasif' }}</td>
                                    <td>
                                        <a href="{{ route('admin.katalog.edit', $katalog->id) }}" class="btn btn-warning mx-1 shadow btn-sm">Düzenle</a>
                                        <button class="btn btn-danger mx-1 shadow btn-sm" title="Delete" onclick="event.preventDefault(); if(confirm('Bu Katalogu silmek istediğinizden emin misiniz?')) { document.getElementById('delete-form-{{ $katalog->id }}').submit(); }">
                                            <i class="fa fa-lg fa-fw fa-trash"></i>
                                        </button>
                                        <form id="delete-form-{{ $katalog->id }}" action="{{ route('admin.katalog.destroy', $katalog->id) }}" method="POST" style="display: none;">
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