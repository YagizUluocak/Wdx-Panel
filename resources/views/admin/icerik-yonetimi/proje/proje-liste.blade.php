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
    ['label' => 'Anasayfa'],
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
                    <x-adminlte-datatable class="text-center" :heads="$heads" id="tableurunliste" striped hoverable bordered compressed centered>
                        <tr>
                            <td>1</td>
                            <td>Resim.jpg</td>
                            <td>Proje 1</td>
                            <td>
                                <span style="display: inline-block;">
                                    <x-adminlte-input-switch name="anasayfa" data-on-color="success" data-off-color="danger" igroup-size="sm"/>
                                </span>
                            </td>
                            <td>
                                <span style="display: inline-block;">
                                    <x-adminlte-input-switch name="durum" data-on-color="success" data-off-color="danger" igroup-size="sm"/>
                                </span>
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