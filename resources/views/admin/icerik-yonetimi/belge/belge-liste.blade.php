@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Belge Listesi')

@section('content_header')
    <h1>Belge Listesi</h1>
@stop

@php
$heads = [
    ['label' => 'ID', 'width' => 5],
    ['label' => 'Başlık'],
    ['label' => 'Durum', 'width' => 10],
    ['label' => 'İşlemler', 'width' => 15],
];

$btnEdit = '<a href="' . url('/admin/belge-duzenle') . '" class="btn btn-warning mx-1 shadow btn-sm" title="Edit" >
    <i class="fa fa-lg fa-fw fa-pen"></i>
    </a>';

$btnDelete = '<button class="btn btn-danger mx-1 shadow btn-sm" title="Delete">
        <i class="fa fa-ls fa-fw fa-trash" igroup-size="sm"></i>
    </button>';

@endphp

@section('content')
    <div class="container-fluid">
        <x-adminlte-card>

            <a href="{{ route('admin.belge.create') }}" class="btn btn-primary mb-2" >Yeni Belge Ekle</a>
            <div class="row">
                <div class="col-12">
                    <x-adminlte-datatable class="text-center" :heads="$heads" id="tablebelgeliste" striped hoverable bordered compressed centered>
                        @foreach ($belgeler as $belge)
                        <tr>    
                            <td>{{ $belge->id }}</td>
                            <td>{{ $belge->baslik }}</td>
                            <td style="color:{{ $belge->durum ? 'rgb(49, 160, 49)' : 'rgb(160, 49, 49)' }}"> {{ $belge->durum ? 'Aktif' : 'Pasif' }}</td>
                            <td>
                                <a href="{{ route('admin.belge.edit', $belge->id) }}" class="btn btn-warning mx-1 shadow btn-sm">Düzenle</a>
                                <button class="btn btn-danger mx-1 shadow btn-sm" title="Delete" onclick="event.preventDefault(); if(confirm('Bu belgeyi silmek istediğinizden emin misiniz?')) { document.getElementById('delete-form-{{ $belge->id }}').submit(); }">
                                    <i class="fa fa-lg fa-fw fa-trash"></i>
                                </button>
                                <form id="delete-form-{{ $belge->id }}" action="{{ route('admin.belge.destroy', $belge->id) }}" method="POST" style="display: none;">
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
<script>
    function confirmDelete() {
        return confirm('Bu belgeyi silmek istediğinizden emin misiniz?');
    }
</script>
@stop