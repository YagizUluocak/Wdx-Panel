@extends('adminlte::page')
@section('plugins.Datatables', true)

@section('title', 'Dil Listesi')

@section('content_header')
    <h1>dil Listesi</h1>
@stop
@php
$heads = [
    'ID',
    ['label' => 'Dil Adı' , 'width' => 80],
    ['label' => 'Bayrak' , 'width' => 10],
    ['label' => 'Ana Dil' , 'width' => 10],
    ['label' => 'Durum' , 'width' => 10],
];

$btnEdit = '<a href="' . url('/admin/dil-duzenle') . '" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </a>';
$btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </button>';
$btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                   <i class="fa fa-lg fa-fw fa-eye"></i>
               </button>';

$config = [
    'data' => [
        [1, 'Türkçe', 'TÜRKİYE', 'Evet','Onaylı', '<nobr>'.$btnEdit.$btnDelete.'</nobr>'],
        [1, 'İngilizce', 'ABD', 'Hayır','Onaylı', '<nobr>'.$btnEdit.$btnDelete.'</nobr>'],
    ],
    'order' => [[1, 'asc']],
    'columns' => [null, null, null, ['orderable' => false]],
];
@endphp

@section('content')
<div class="container-fluid">

        <x-adminlte-card>
            <div class="row">
            <div class="col-12">

                <x-adminlte-datatable id="table6" :heads="$heads"  theme="light" striped hoverable>
                    @foreach($config['data'] as $row)
                    <tr>
                        @foreach($row as $cell)
                        <td>{!! $cell !!}</td>
                        @endforeach
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

