@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Video Galeri Liste')

@section('content_header')
    <h1>Video Galeri Liste</h1>
@stop

@php
$heads = [
    'ID',
    ['label' => 'Thumbnail', 'width' => 20],
    ['label' => 'Başlık'],
    ['label' => 'Durum'],
    ['label' => 'İşlemler'],
];

$btnEdit = '<a href="' . url('/admin/video-galeri-duzenle') . '" class="btn btn-warning mx-1 shadow btn-sm" title="Edit" >
    <i class="fa fa-lg fa-fw fa-pen"></i>
    </a>';

$btnDelete = '<button class="btn btn-danger mx-1 shadow btn-sm" title="Delete">
        <i class="fa fa-ls fa-fw fa-trash" igroup-size="sm"></i>
    </button>';

$durum = '<x-adminlte-input-switch  name="durum" data-on-color="success" data-off-color="danger"/>'
@endphp

@section('content')
    <div class="container-fluid">
        <x-adminlte-card>
            <button class="btn btn-primary mb-2">Yeni Video Ekle</button>
            <div class="row">
                <div class="col-12">
                    <x-adminlte-datatable class="text-center" :heads="$heads" id="tablevideoliste" striped hoverable bordered compressed centered>
                        <tr>
                            <td>1</td>
                            <td>Resim.jpg</td>
                            <td>Proje 1</td>
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