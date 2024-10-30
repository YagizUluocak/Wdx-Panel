@extends('adminlte::page')

@section('title', 'WDX Panel')

@section('content_header')
    <h4><b>YÖNETİM PANEL</b></h4>
@stop

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <x-adminlte-card title="'Yönetim Paneli' Hakkında Yardımcı Açıklamalar..." theme-mode="full" icon="fas fa-lg fa-info"
            collapsible="collapsed" style="background-color: #48568f; color:white">
            - Yönetim paneli giriş yolunu Site Yönetimi / Genel Ayarlar -> Yönetim Paneli Girişi Link Adresi alanından değişirebilirsiniz.
            Yönetim paneli yolunu değiştirmeniz site güvenliği açısından önemlidir.<br>
            - Şifre Olarak: 123,1234, 123456, 1, admin, user, demo gibi basit düzeyde şifreleri sistem kabul etmemektedir. Şifreniz bu şifrelerden herhangi birisine sahipse panelde hiç bir işlem yapamazsınız.!<br>
            - Not: Yönetim panel giriş linkini Site Yönetimi -> Genel Ayarlar kısmından değiştiriniz.!<br>
            </x-adminlte-card>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-3">
            <div class="col-12">
                <x-custom-callout theme="info" title="Online">
                    <span style="color: grey; font-size:1.2rem;">Tekil Ziyaretçi</span>: <span style="font-size:1.4rem; color:rgb(206, 141, 206)"><b>6</b></span>
                    <x-adminlte-progress theme="grey" value=10 animated/>

                </x-custom-callout>
            </div> 
        </div>
        <div class="col-3">
            <div class="col-12">
                <x-custom-callout theme="info" title="Bugün">
                    <span style="color: grey; font-size:1.2rem;">Gösterim</span>: <span style="font-size:1.4rem; color:rgb(206, 141, 206)"><b>22</b></span>
                    <x-adminlte-progress theme="red" value=20 animated/>

                </x-custom-callout>
            </div>
        </div>
        <div class="col-3">
            <div class="col-12">
                <x-custom-callout theme="info" title="Dün">
                    <span style="color: grey; font-size:1.2rem;">Gösterim</span>: <span style="font-size:1.4rem; color:rgb(206, 141, 206)"><b>30</b></span>
                    <x-adminlte-progress theme="yellow" value=30 animated/>

                </x-custom-callout>
            </div>
        </div>
        <div class="col-3">
            <div class="col-12">
                <x-custom-callout theme="info" title="Bu Ay">
                    <span style="color: grey; font-size:1.2rem;">Gösterim</span>: <span style="font-size:1.4rem; color:rgb(206, 141, 206)"><b>175</b></span>
                    <x-adminlte-progress theme="purple" value=100 animated/>
                </x-custom-callout>
                
            </div>
        </div>
    </div>

    <div class="row mt-4">

        <div class="col-7 scrollable-div"> 
            <div class="flex-container mb-3">   
                <h4 class="text-bold">Bugün Son İşlemler</h4>
                <x-adminlte-button label="Tümünü Sil" theme="danger" icon="fas fa-ban fa-sm"/>
            </div>
            <x-adminlte-card title="Lightblue Card" theme="lightblue" theme-mode="outline" removable>
                A removable card with outline lightblue theme...
            </x-adminlte-card>
            <x-adminlte-card title="Lightblue Card" theme="lightblue" theme-mode="outline" removable>
                A removable card with outline lightblue theme...
            </x-adminlte-card>
            <x-adminlte-card title="Lightblue Card" theme="lightblue" theme-mode="outline" removable>
                A removable card with outline lightblue theme...
            </x-adminlte-card>
            <x-adminlte-card title="Lightblue Card" theme="lightblue" theme-mode="outline" removable>
                A removable card with outline lightblue theme...
            </x-adminlte-card>
        </div>

        <div class="col-4 scrollable-div" style="margin-left:auto;">
            <div class="flex-container mb-3">   
                <h4 class="text-bold">Yaklaşan İşlemler</h4>
            </div>
            <x-adminlte-card title="Lightblue Card" theme="lightblue" theme-mode="outline">
                A removable card with outline lightblue theme...
            </x-adminlte-card>
            <x-adminlte-card title="Lightblue Card" theme="lightblue" theme-mode="outline">
                A removable card with outline lightblue theme...
            </x-adminlte-card>
            <x-adminlte-card title="Lightblue Card" theme="lightblue" theme-mode="outline">
                A removable card with outline lightblue theme...
            </x-adminlte-card>
            <x-adminlte-card title="Lightblue Card" theme="lightblue" theme-mode="outline">
                A removable card with outline lightblue theme...
            </x-adminlte-card>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12 scrollable-div"> 
            <div class="flex-container mb-3">   
                <h4 class="text-bold">Güncellemeler</h4>
            </div>
        </div>
    </div>
</div>



@stop

@section('css')
<style>
    .custom-title-class {
        color: #48568f; /* Your custom color */
        font-size: 1.55rem; /* Example font size */
        font-weight: bold;
    }
    .scrollable-div {
        background-color: white;
        height: 450px; /* Adjust as needed */
        overflow-y: auto;
        padding: 10px; /* Optional */
        box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
        border-radius: 12px;
    }

    /* Scrollbar styling for Webkit browsers */
    .scrollable-div::-webkit-scrollbar {
        width: 12px; /* Adjust width */
    }

    .scrollable-div::-webkit-scrollbar-track {
        background: #f1f1f1; /* Track color */
    }

    .scrollable-div::-webkit-scrollbar-thumb {
        background: #48568f; /* Scrollbar color */
        border-radius: 10px; /* Rounded corners */
    }

    .scrollable-div::-webkit-scrollbar-thumb:hover {
        background: #303b69; /* Hover color */
    }

    .flex-container {
        display: flex;
        justify-content: space-between;
        align-items: center; /* Optional: Align items vertically in the center */
        margin-bottom: 1rem; /* Optional: Adds space below the flex container */
    }
</style>
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop