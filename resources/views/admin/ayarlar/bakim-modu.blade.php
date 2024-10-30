@extends('adminlte::page')

@section('plugins.TempusDominusBs4', true)
@section('plugins.BootstrapSwitch', true)

@section('title','Site Bakım Modu')


@section('content_header')
<h1>Site Bakım Modu</h1>
@stop

@section('content')

<div class="container-fluid">

    <x-adminlte-card>
        <div class="row">
            <!--Tarih-->
            <div class="col-6">
                @php
                $config = ['format' => 'DD/MM/YYYY'];
                @endphp
                <x-adminlte-input-date name="idLabel" :config="$config" placeholder="Site Açılış Tarihi" label="Site Açılış Tarihi" >
                    <x-slot name="appendSlot">
                        <x-adminlte-button theme="outline-primary" icon="fas fa-lg fa-birthday-cake"
                            title="Set to Birthday"/>
                    </x-slot>
                </x-adminlte-input-date>
                
                {{-- SM size, restricted to current month and week days --}}
                @php
                $config = [
                    'format' => 'YYYY-MM-DD',
                    'dayViewHeaderFormat' => 'MMM YYYY',
                    'minDate' => "js:moment().startOf('month')",
                    'maxDate' => "js:moment().endOf('month')",
                    'daysOfWeekDisabled' => [0, 6],
                ];
                @endphp
            </div>
            <!--Saat-->
            <div class="col-6">
                 @php
                $config = ['format' => 'LT'];
                @endphp
                <x-adminlte-input-date name="idTimeOnly" :config="$config" placeholder="Site Açılış Saati" label="Site Açılış Zamanı" >
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-clock"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-date>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <x-adminlte-input name="iLabel" label="Başlık" placeholder="Bakım Modu Başlığı"/>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <x-adminlte-textarea style="resize: none;" name="taBasic" label="Açıklama" rows=5 placeholder="Bakım Modu Açıklaması"/>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label for="bakim">Bakım Modu</label>
                <x-adminlte-input-switch name="bakim" data-on-color="success" data-off-color="danger" />  
            </div>
            <x-adminlte-button class="mt-4" label="Güncelle" theme="success" icon="fas fa-spinner fa-spin"/>
        </div>



       

    </x-adminlte-card>



</div>


@stop

@section('css')

@stop

@section('js')

@stop