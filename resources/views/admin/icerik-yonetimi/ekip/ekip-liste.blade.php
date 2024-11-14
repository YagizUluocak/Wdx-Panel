@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)
@section('plugins.Datatables', true)

@section('title', 'Ekip Listesi')

@section('content_header')
    <h1>Ekip Listesi</h1>
@stop

@php
$heads = [
    ['label' => 'ID', 'width' => 5],
    ['label' => 'Ad Soyad'],
    ['label' => 'Durum', 'width' => 10],
    ['label' => 'İşlemler', 'width' => 15],
];

@endphp

@section('content')
    <div class="container-fluid">
        <x-adminlte-card>
            <button class="btn btn-primary mb-2">Yeni Ekip Üyesi Ekle</button>
            <div class="row">
                <div class="col-12">
                    <x-adminlte-datatable class="text-center" :heads="$heads" id="tableekipliste" striped hoverable bordered compressed centered>

                        @if($ekipler->isempty())
                            <tr>
                                <td colspan="4" class="text-center bg-warning">Herhangi Bir Kayıt Bulunamadı.</td>
                            </tr>
                        @else
                            @foreach($ekipler as $ekip)
                                <td>{{ $ekip->id }}</td>
                                <td>{{ $ekip->adsoyad }}</td>
                                <td style="color:{{ $ekip->durum ? 'rgb(49, 160, 49)' : 'rgb(160, 49, 49)' }}"> {{ $ekip->durum ? 'Aktif' : 'Pasif' }}</td>
                                <td>
                                    <a href="{{ route('admin.ekip.edit', $ekip->id) }}" class="btn btn-warning mx-1 shadow btn-sm">Düzenle</a>
                                    <button class="btn btn-danger mx-1 shadow btn-sm" title="Delete" onclick="event.preventDefault(); if(confirm('Bu ekip üyesini silmek istediğinizden emin misiniz?')) { document.getElementById('delete-form-{{ $ekip->id }}').submit(); }">
                                        <i class="fa fa-lg fa-fw fa-trash"></i>
                                    </button>
                                    <form id="delete-form-{{ $ekip->id }}" action="{{ route('admin.ekip.destroy', $ekip->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
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