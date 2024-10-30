@extends('adminlte::page')
@section('plugins.Datatables', true)

@section('title', 'Kategori Listesi')

@section('content_header')
    <h1>Kategori Listesi</h1>
@stop

@php

$heads = [
    'Id',
    ['label' => 'Kategori Adı', 'width' => 40],
    ['label' => 'Durum', 'width' => 40],
    ['label' => 'İşlemler', 'width' => 70],
];

$btnEdit = '<a href="' . url('/admin/kategori-duzenle') . '" class="btn btn-warning mx-1 shadow" title="Edit">
    <i class="fa fa-lg fa-fw fa-pen"></i>
    </a>';

$btnDelete = '<button class="btn btn-danger mx-1 shadow" title="Delete">
        <i class="fa fa-ls fa-fw fa-trash"></i>
    </button>'
@endphp


@section('content')

<div class="container-fluid">
    <x-adminlte-card>
        <button class="btn btn-primary mb-2">Yeni Ekle</button>
        <div class="row">
            <div class="col-12">
                <x-adminlte-datatable id="tablekategori" :heads="$heads" theme="light" striped hoverable>
                    <tr>
                        <td>1</td>
                        <td>İçecekler</td>
                        <td>Onaylı</td>
                        <td>
                            @php echo $btnEdit @endphp
                            @php echo $btnDelete @endphp
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>İçecekler</td>
                        <td>Onaylı</td>
                        <td>
                            @php echo $btnEdit @endphp
                            @php echo $btnDelete @endphp
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>İçecekler</td>
                        <td>Onaylı</td>
                        <td>
                            @php echo $btnEdit @endphp
                            @php echo $btnDelete @endphp
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>İçecekler</td>
                        <td>Onaylı</td>
                        <td>
                            @php echo $btnEdit @endphp
                            @php echo $btnDelete @endphp
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>İçecekler</td>
                        <td>Onaylı</td>
                        <td>
                            @php echo $btnEdit @endphp
                            @php echo $btnDelete @endphp
                        </td>
                    </tr>
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