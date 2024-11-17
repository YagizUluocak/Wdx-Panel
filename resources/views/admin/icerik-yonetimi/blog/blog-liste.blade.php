@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Blog Listesi')

@section('content_header')
    <h1>Blog Listesi</h1>
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
            <button class="btn btn-primary mb-2">Yeni Blog Ekle</button>
            <div class="row">
                <div class="col-12">
                    <x-adminlte-datatable class="text-center" :heads="$heads" id="tableblogliste" striped hoverable bordered compressed centered>
                        
                        @if($bloglar->isempty())
                            <tr>
                                <td colspan="5" class="text-center bg-warning">Herhangi Bir Kayıt Bulunamadı.</td>
                            </tr>
                        @else
                            @foreach($bloglar as $blog)
                                <td>{{ $blog->id }}</td>
                                <td><img src="{{ asset('storage/blog/'.$blog->resim) }}" class="img-fluid" style="width: 150px; height:100px;"></td>
                                <td>{{ $blog->baslik }}</td>
                                <td style="color:{{ $blog->durum ? 'rgb(49, 160, 49)' : 'rgb(160, 49, 49)' }}"> {{ $blog->durum ? 'Aktif' : 'Pasif' }}</td>
                                <td>
                                    <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-warning mx-1 shadow btn-sm">Düzenle</a>
                                    <button class="btn btn-danger mx-1 shadow btn-sm" title="Delete" onclick="event.preventDefault(); if(confirm('Bu Bloğu silmek istediğinizden emin misiniz?')) { document.getElementById('delete-form-{{ $blog->id }}').submit(); }">
                                        <i class="fa fa-lg fa-fw fa-trash"></i>
                                    </button>
                                    <form id="delete-form-{{ $blog->id }}" action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST" style="display: none;">
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