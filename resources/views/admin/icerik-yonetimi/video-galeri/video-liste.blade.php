@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)
@section('plugins.Datatables', true)

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

@endphp

@section('content')
    <div class="container-fluid">
        <x-adminlte-card>


            <button class="btn btn-primary mb-2">Yeni Video Ekle</button>
            <div class="row">
                <div class="col-12">
                    <x-adminlte-datatable class="text-center" :heads="$heads" id="tablevideoliste" striped hoverable bordered compressed centered>

                        @if($sliderler->isempty())
                            <tr>
                                <td colspan="5" class="text-center bg-warning">Herhangi Bir Kayıt Bulunamadı.</td>
                            </tr>
                        @else
                            @foreach($videlar as $video)
                                <tr>
                                    <td>{{ $video->id }}</td>
                                    <td><img src="{{ asset('storage/video/'.$video->thumbnail) }}" class="img-fluid" style="width: 150px; height:100px;"></td>
                                    <td>{{ $video->baslik }}</td>
                                    <td style="color:{{ $video->durum ? 'rgb(49, 160, 49)' : 'rgb(160, 49, 49)' }}"> {{ $video->durum ? 'Aktif' : 'Pasif' }}</td>
                                <td>
                                    <a href="{{ route('admin.video-galeri.edit', $video->id) }}" class="btn btn-warning mx-1 shadow btn-sm">Düzenle</a>
                                    <button class="btn btn-danger mx-1 shadow btn-sm" title="Delete" onclick="event.preventDefault(); if(confirm('Bu Videoyu silmek istediğinizden emin misiniz?')) { document.getElementById('delete-form-{{ $video->id }}').submit(); }">
                                        <i class="fa fa-lg fa-fw fa-trash"></i>
                                    </button>
                                    <form id="delete-form-{{ $video->id }}" action="{{ route('admin.video-galeri.destroy', $video->id) }}" method="POST" style="display: none;">
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