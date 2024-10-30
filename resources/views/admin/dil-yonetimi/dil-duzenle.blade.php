@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)
@section('plugins.Datatables', true)
@section('title', 'Dil Düzenle')

@section('content_header')
    <h1>Dil Düzenle</h1>
@stop

@php
    $heads = [
        ['label' => 'Key' , 'width' => 10],
        'Açıklama',
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
            ['txt1', 'Türkçe'],
            ['txt2', 'İngilizce'],
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
                <x-adminlte-input name="sira" label="Sıra" placeholder="Dil Sırası..."/>
            </div>
        </div>
    
        <div class="row">
            <div class="col-12">
                <x-adminlte-input name="dilAdi" label="Dil Adı" placeholder="Dil Adı..."/>
            </div>
        </div>
    
        <div class="row">
            <div class="col-12">
                <x-adminlte-input name="dilkisaltma" label="Dil Kısaltması(tr,en)" placeholder="Dil Kısaltması..."/>
            </div>
        </div>
    
        <div class="row">
            <div class="col-12">
                <x-adminlte-select name="ulke" label="Ülke" data-placeholder="Ülke Seçiniz...">
                    <option>Yok</option>
                    <option>TLS</option>
                    <option>SSL</option>
                </x-adminlte-select>
            </div>
        </div>
    
        <div class="row">
            <div class="col-12">
                <label for="durum">durum</label>
                <x-adminlte-input-switch name="durum" data-on-color="success" data-off-color="danger" />  
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <label for="anadil">Ana Dil</label>
                <x-adminlte-input-switch name="anadil" data-on-color="success" data-off-color="danger" />  
            </div>
        </div>

        <h4 class="mt-4">Site Önyüz Kelime Düzenle</h4>

        <div class="row mt-4">
            <div class="col-12" style="border:1px solid rgb(167, 167, 167); padding:10px 5px 10px 5px; border-radius:6px;">
                
                <form method="POST">
                    @csrf
                    <x-adminlte-datatable id="table5" :heads="$heads"  theme="light" striped hoverable>
                       
                        <tr>
                            <td>txt1</td>
                            <td>
                                <input type="text" name="txt1" value="Bizimle İletişime Geçin" class="form-control custom-input" style="width: 100%;">
                            </td>
                        </tr>
        
                        <tr>
                            <td>txt2</td>      
                            <td>
                                <input type="text" name="txt2" value="Hızlı Çözümler" class="form-control custom-input" style="width: 100%;">
                            </td>
                        </tr>
                        
                    </x-adminlte-datatable>
                </form>
            </div>
            
        </div>

        <div class="row">
            <div class="col-12">
                <x-adminlte-button class="mt-4" label="Güncelle" theme="success" icon="fas fa-spinner fa-spin"/>
            </div>
        </div>
    
    
    </x-adminlte-card>
</div>
@stop



@section('css')
<style>
.custom-input {
    border: 0px solid #007bff; /* Kenar rengi */
    border-radius: 5px; /* Köşe yuvarlama */
    height: 38px; /* Yükseklik */
    padding: 8px 12px; /* İç boşluk */
    background-color: transparent;
}
.custom-input:focus{
    border: 0px;
    text-decoration: underline;
    text-decoration-style: dashed;
    text-decoration-thickness: 1px;
    text-decoration-color: #007bff;
    background-color: transparent;
}

</style>
@stop

@section('js')

@stop

