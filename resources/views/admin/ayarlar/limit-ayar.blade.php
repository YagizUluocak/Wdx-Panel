@extends('adminlte::page')

@section('title','Limit Ayarları')

@section('content_header')
<h1>Kolon Ve Sayfalama Limit Ayarları</h1>
@stop

@section('content')
<x-adminlte-card>
    <div class="container-fluid">
        <div class="row">
            <!-- Belgelerimiz -->
            <div class="col-md-12">           
                <div class="form-group row align-items-center">
                    <!-- 8'lik alan -->
                    <div class="col-7 colon d-flex align-items-center justify-content-between" style="height: 100px;">
                        <label class="col-form-label">📄 Belgelerimiz</label>
                        <div class="radio-group">
                            <input type="radio" id="belge1" name="belgelerimiz" value="1">
                            <label for="belge1">1</label>
                    
                            <input type="radio" id="belge2" name="belgelerimiz" value="2">
                            <label for="belge2">2</label>
                    
                            <input type="radio" id="belge3" name="belgelerimiz" value="3">
                            <label for="belge3">3</label>
                    
                            <input type="radio" id="belge4" name="belgelerimiz" value="4">
                            <label for="belge4">4</label>
                    
                            <input type="radio" id="belge6" name="belgelerimiz" value="6">
                            <label for="belge6">6</label>
                        </div>
                    </div>
                    <!-- 4'lük alan -->
                    <div class="col-4 colon-right">
                        <label class="form-label">Belgelerimiz Sayfasındaki Kayıt Sayısı</label>
                        <input type="number" class="form-control" value="4">
                    </div>
                </div>
            </div>

            <!-- Ekibimiz -->
            <div class="col-md-12">
                <div class="form-group row align-items-center">
                    <div class="col-7 colon d-flex align-items-center justify-content-between" style="height: 100px;">
                        <label class="col-form-label">👥 Ekibimiz</label>
                        <div class="radio-group">
                            <input type="radio" id="ekip1" name="ekibimiz" value="1">
                            <label for="ekip1">1</label>
                            
                            <input type="radio" id="ekip2" name="ekibimiz" value="2">
                            <label for="ekip2">2</label>

                            <input type="radio" id="ekip3" name="ekibimiz" value="3">
                            <label for="ekip3">3</label>

                            <input type="radio" id="ekip4" name="ekibimiz" value="4">
                            <label for="ekip4">4</label>

                            <input type="radio" id="ekip6" name="ekibimiz" value="6">
                            <label for="ekip6">6</label>
                        </div>
                    </div>
                    <div class="col-4 colon-right">
                        <label class="form-label">Ekibimiz Sayfasındaki Kayıt Sayısı</label>
                        <input type="number" class="form-control" value="3">
                    </div>
                </div>
            </div>

            <!-- Referanslar -->
            <div class="col-md-12">
                <div class="form-group row align-items-center">
                    <div class="col-7 colon d-flex align-items-center justify-content-between" style="height: 100px;">
                        <label class="col-form-label">📝 Referanslar</label>
                        <div class="radio-group">
                            <input type="radio" id="ref1" name="referanslar" value="1">
                            <label for="ref1">1</label>
                            
                            <input type="radio" id="ref2" name="referanslar" value="2">
                            <label for="ref2">2</label>

                            <input type="radio" id="ref3" name="referanslar" value="3">
                            <label for="ref3">3</label>

                            <input type="radio" id="ref4" name="referanslar" value="4">
                            <label for="ref4">4</label>

                            <input type="radio" id="ref6" name="referanslar" value="6">
                            <label for="ref6">6</label>
                        </div>
                    </div>
                    <div class="col-4 colon-right ">
                        <label class="form-label">Referans Sayfasındaki Kayıt Sayısı</label>
                        <input type="number" class="form-control" value="12">
                    </div>
                </div>
            </div>

            <!-- Ana Ürünler -->
            <div class="col-md-12">
                <div class="form-group row align-items-center">
                    <div class="col-7 colon d-flex align-items-center justify-content-between" style="height: 100px;">
                        <label class="col-form-label">📦 Ana Ürünler</label>
                        <div class="radio-group">
                            <input type="radio" id="urun1" name="ana_urunler" value="1">
                            <label for="urun1">1</label>
                            
                            <input type="radio" id="urun2" name="ana_urunler" value="2">
                            <label for="urun2">2</label>

                            <input type="radio" id="urun3" name="ana_urunler" value="3">
                            <label for="urun3">3</label>

                            <input type="radio" id="urun4" name="ana_urunler" value="4">
                            <label for="urun4">4</label>

                            <input type="radio" id="urun6" name="ana_urunler" value="6">
                            <label for="urun6">6</label>
                        </div>
                    </div>
                    <div class="col-4 colon-right">
                        <label class="form-label">Ana Ürünler Sayfasındaki Kayıt Sayısı</label>
                        <input type="number" class="form-control" value="12">
                    </div>
                </div>
            </div>
            <x-adminlte-button label="Güncelle" theme="success" icon="fas fa-spinner fa-spin"/>
        </div>
    </div>    
</x-adminlte-card>
@stop

@section('css')
<style>
    .colon{
        border-top:1px solid rgb(230, 228, 228); 
        border-bottom: 1px solid rgb(230, 228, 228);
        height: 100px;
        margin-left: 5px;
    }
    .colon-right{
        border-top:1px solid rgb(230, 228, 228); 
        border-bottom: 1px solid rgb(230, 228, 228);
        height: 100px;
        margin-left: 25px;
        justify-content: center
    }
    .radio-group {
        display: flex;
        justify-content: flex-end;
    }

    .radio-group input[type="radio"] {
        display: none;
    }

    .radio-group label {
        position: relative;
        padding-left: 35px;
        margin-right: 10px;
        margin-top: 8px;
        cursor: pointer;
        font-size: 16px;
        display: inline-block;
    }

    .radio-group label:before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 20px;
        height: 20px;
        border: 2px solid #4CAF50;
        background-color: white;
        border-radius: 50%;
    }

    .radio-group input[type="radio"]:checked + label:before {
        background-color: #4CAF50;
        border-color: #4CAF50;
    }

    .radio-group input[type="radio"]:checked + label:after {
        content: '';
        position: absolute;
        top: 6px;
        left: 6px;
        width: 8px;
        height: 8px;
        background-color: white;
        border-radius: 50%;
    }

    .radio-group label:hover:before {
        background-color: #e6ffe6;
    }

    .form-group {
        margin-bottom: 1.5rem;
        transition: box-shadow 0.8s ease;
        
    }
    .form-group:hover{
        box-shadow: inset 0 0 1000px rgba(0, 0, 0, 0.15);
        transition: 1s;
    }

    .form-control {
        width: 100%;
    }
</style>
@stop

@section('js')
@stop
