@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Referans Listesi')

@section('content_header')
    <h1>Referans Listesi</h1>
@stop

@php
$heads = [
    ['label' => 'ID', 'width' => 5],
    ['label' => 'Başlık'],
    ['label' => 'Durum', 'width' => 10],
    ['label' => 'İşlemler', 'width' => 15],
];

$btnEdit = '<a href="' . url('/admin/referans-duzenle') . '" class="btn btn-warning mx-1 shadow btn-sm" title="Edit" >
    <i class="fa fa-lg fa-fw fa-pen"></i>
    </a>';

$btnDelete = '<button class="btn btn-danger mx-1 shadow btn-sm" title="Delete">
        <i class="fa fa-ls fa-fw fa-trash" igroup-size="sm"></i>
    </button>';

@endphp

@section('content')
    <div class="container-fluid">
        <x-adminlte-card>
            <button class="btn btn-primary mb-2">Yeni Referans Ekle</button>
            <div class="row">
                <div class="col-12">
                    <x-adminlte-datatable class="text-center" :heads="$heads" id="tablereferansliste" striped hoverable bordered compressed centered>
                        <tr>
                            <td>1</td>
                            <td>Standart Paket</td>
                            <td style="color: rgb(49, 160, 49)">Aktif</td>
                            </td>
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