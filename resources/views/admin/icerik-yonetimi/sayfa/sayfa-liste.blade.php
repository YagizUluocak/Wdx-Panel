@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Sayfa Listesi')

@section('content_header')
    <h1>Sayfa Listesi</h1>
@stop

@php
$heads = [
    ['label' => 'ID', 'width' => 5],
    ['label' => 'Resim', 'width' => 15],
    ['label' => 'Başlık'],
    ['label' => 'Durum', 'width' => 10],
    ['label' => 'İşlemler', 'width' => 15],
];

$btnEdit = '<a href="' . url('/admin/sayfa-duzenle') . '" class="btn btn-warning mx-1 shadow btn-sm" title="Edit" >
    <i class="fa fa-lg fa-fw fa-pen"></i>
    </a>';

$btnDelete = '<button class="btn btn-danger mx-1 shadow btn-sm" title="Delete">
        <i class="fa fa-ls fa-fw fa-trash" igroup-size="sm"></i>
    </button>';

@endphp

@section('content')
    <div class="container-fluid">
        <x-adminlte-card>
            <button class="btn btn-primary mb-2">Yeni Sayfa Ekle</button>
            <div class="row">
                <div class="col-12">
                    <x-adminlte-datatable class="text-center" :heads="$heads" id="tablesayfaliste" striped hoverable bordered compressed centered>

                        @if($sayfalar->isempty())
                            <tr style="height: 50px;">
                                <td colspan="5" class="text-center bg-warning">Herhangi Bir Kayıt Bulunamadı.</td>
                            </tr>
                        @else
                            @foreach($sayfalar as $sayfa)
                                <tr>
                                    <td>{{ $sayfa->id }}</td>
                                    <td>
                                        <img src="{{ asset('storage/sayfa/'.$sayfa->resim) }}" class="img-fluid" style="width: 150px; height:100px;">
                                    </td>
                                    <td>{{ $sayfa->baslik }}</td>
                                    <td style="color:{{ $sayfa->durum ? 'rgb(49, 160, 49)' : 'rgb(160, 49, 49)' }}"> {{ $sayfa->durum ? 'Aktif' : 'Pasif' }}</td>
                                    <td>
                                        <a href="{{ route('admin.sayfa.edit', $sayfa->id) }}" class="btn btn-warning mx-1 shadow btn-sm">Düzenle</a>
                                        <button class="btn btn-danger mx-1 shadow btn-sm" title="Delete" onclick="event.preventDefault(); if(confirm('Bu Sayfayı silmek istediğinizden emin misiniz?')) { document.getElementById('delete-form-{{ $sayfa->id }}').submit(); }">
                                            <i class="fa fa-lg fa-fw fa-trash"></i>
                                        </button>
                                        <form id="delete-form-{{ $sayfa->id }}" action="{{ route('admin.sayfa.destroy', $sayfa->id) }}" method="POST" style="display: none;">
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