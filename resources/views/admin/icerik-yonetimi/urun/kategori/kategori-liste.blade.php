@extends('adminlte::page')
@section('plugins.Datatables', true)

@section('title', 'Kategori Listesi')

@section('content_header')
    <h1>Kategori Listesi</h1>
@stop

@php

$heads = [
    ['label' => 'ID', 'width' => 5],
    ['label' => 'Kategori Adı'],
    ['label' => 'Durum', 'width' => 40],
    ['label' => 'İşlemler', 'width' => 25],
];

@endphp


@section('content')

<div class="container-fluid">
    <x-adminlte-card>
        <a href="{{ route('admin.kategori.create') }}" class="btn btn-primary mb-4">Yeni Kategori Ekle</a>
        <div class="row">
            <div class="col-12">
                <x-adminlte-datatable id="tablekategori" :heads="$heads" theme="light" striped hoverable  class="text-center">

                    @foreach($kategoriler as $kategori)
                        <tr>
                            <td>{{ $kategori->id }}</td>
                            <td>{{ $kategori->name }}</td>
                            <td style="color:{{ $kategori->durum ? 'rgb(49, 160, 49)' : 'rgb(160, 49, 49)' }}"> {{ $kategori->durum ? 'Aktif' : 'Pasif' }}</td>
                            <td>
                                <a href="{{ route('admin.kategori.edit', $kategori->id) }}" class="btn btn-warning mx-1 shadow btn-sm">Düzenle</a>
                                <button class="btn btn-danger mx-1 shadow btn-sm" title="Delete" onclick="event.preventDefault(); if(confirm('Bu kategoriyi silmek istediğinizden emin misiniz?')) { document.getElementById('delete-form-{{ $kategori->id }}').submit(); }">
                                    <i class="fa fa-lg fa-fw fa-trash"></i>
                                </button>
                                <form id="delete-form-{{ $kategori->id }}" action="{{ route('admin.kategori.destroy', $kategori->id) }}" method="POST" style="display: none;">
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