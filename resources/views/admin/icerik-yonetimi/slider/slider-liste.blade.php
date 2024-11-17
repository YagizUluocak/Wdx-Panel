@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Slider Listesi')

@section('content_header')
    <h1>Slider Listesi</h1>
@stop

@php
$heads = [
    ['label' => 'ID', 'width' => 5],
    ['label' => 'Resim'],
    ['label' => 'Başlık'],
    ['label' => 'Durum', 'width' => 10],
    ['label' => 'İşlemler', 'width' => 15],
];

@endphp

@section('content')
    <div class="container-fluid">
        <x-adminlte-card>
            <button class="btn btn-primary mb-2">Yeni Slider Ekle</button>
            <div class="row">
                <div class="col-12">
                    <x-adminlte-datatable class="text-center" :heads="$heads" id="tablesliderliste" striped hoverable bordered compressed centered>

                        @if($sliderler->isempty())
                        <tr>
                            <td colspan="5" class="text-center bg-warning">Herhangi Bir Kayıt Bulunamadı.</td>
                        </tr>
                        @else
                            @foreach($sliderler as $slider)
                                <td>{{ $slider->id }}</td>
                                <td><img src="{{ asset('storage/slider/'.$slider->resim) }}" class="img-fluid" style="width: 150px; height:100px;"></td>
                                <td>{{ $slider->baslik }}</td>
                                <td style="color:{{ $slider->durum ? 'rgb(49, 160, 49)' : 'rgb(160, 49, 49)' }}"> {{ $slider->durum ? 'Aktif' : 'Pasif' }}</td>
                                <td>
                                    <a href="{{ route('admin.slider.edit', $slider->id) }}" class="btn btn-warning mx-1 shadow btn-sm">Düzenle</a>
                                    <button class="btn btn-danger mx-1 shadow btn-sm" title="Delete" onclick="event.preventDefault(); if(confirm('Bu Slideri silmek istediğinizden emin misiniz?')) { document.getElementById('delete-form-{{ $slider->id }}').submit(); }">
                                        <i class="fa fa-lg fa-fw fa-trash"></i>
                                    </button>
                                    <form id="delete-form-{{ $slider->id }}" action="{{ route('admin.slider.destroy', $slider->id) }}" method="POST" style="display: none;">
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