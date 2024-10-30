@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Modül Ayarları')

@section('content_header')
<h1>Modül Ayarları</h1>
@stop

@section('content')

<div class="container-fluid">
    <x-adminlte-card>
        

        <div class="row text-center" style="color: rgb(29, 29, 92)">
            <div class="col-6">
                <h5 class="modulbaslik">Anasayfa Modülleri</h5>
            </div>
            <div class="col-6">
                <h5 class="modulbaslik">Diğer Modüller</h5>
            </div>        
        </div>

        <div class="row">
            <div class="col-6">
                <!-- Slider Üzeri Bilgi -->
                <div class="col-12" style="border: 1px,solid,rgb(193, 191, 191); border-radius:4px;">  
                    <div class="row">
                        <div class="col-8">
                            <div class="col-12">
                                <b style="font-size: 1.3rem;">Slider Üzeri Bilgi</b>
                            </div>
                            <div class="col-12">
                                Anasayfadaki slider üzerindeki bilgi alanını kapatıp açabilirsiniz.
                            </div>
                        </div>
                        <div class="col-4 mt-3 d-flex justify-content-end align-items-center">
                            <x-adminlte-input-switch name="sliderBilgi" data-on-color="success" data-off-color="danger" checked/>          
                        </div>
                    </div>  
                </div>

                <!-- Anasayfa Hakkımızda Alanı -->
                <div class="col-12 mt-3" style="border: 1px,solid,rgb(193, 191, 191); border-radius:4px;">  
                    <div class="row">
                        <div class="col-7">
                            <div class="col-12">
                                <b style="font-size: 1.3rem;">Anasayfa Hakkımızda Alanı</b>
                            </div>
                            <div class="col-12">
                                Anasayfadaki hakkımızda alanını kapatıp açabilirsiniz.
                            </div>
                        </div>
                        <div class="col-5 mt-3 d-flex justify-content-end align-items-center">
                            <x-adminlte-input-switch name="hakkimizda" data-on-color="success" data-off-color="danger" checked/>          
                        </div>
                    </div>  
                </div>

                <!-- Anasayfa Referans Alanı -->
                <div class="col-12 mt-3" style="border: 1px,solid,rgb(193, 191, 191); border-radius:4px;">  
                    <div class="row">
                        <div class="col-7">
                            <div class="col-12">
                                <b style="font-size: 1.3rem;">Anasayfa Referanslar Alanı</b>
                            </div>
                            <div class="col-12">
                                Anasayfadaki Referanslar alanını kapatıp açabilirsiniz.
                            </div>
                        </div>
                        <div class="col-5 mt-3 d-flex justify-content-end align-items-center">
                            <x-adminlte-input-switch name="referans" data-on-color="success" data-off-color="danger" checked/>          
                        </div>
                    </div>  
                </div>

                <!-- Anasayfa Hizmetlerimiz Alanı -->
                <div class="col-12 mt-3" style="border: 1px,solid,rgb(193, 191, 191); border-radius:4px;">  
                    <div class="row">
                        <div class="col-7">
                            <div class="col-12">
                                <b style="font-size: 1.3rem;">Anasayfa Hizmetlerimiz Alanı</b>
                            </div>
                            <div class="col-12">
                                Anasayfadaki Hizmetlerimiz alanını kapatıp açabilirsiniz.
                            </div>
                        </div>
                        <div class="col-5 mt-3 d-flex justify-content-end align-items-center">
                            <x-adminlte-input-switch name="hizmetler" data-on-color="success" data-off-color="danger" checked/>          
                        </div>
                    </div>  
                </div>

                <!-- Anasayfa İstatistik Alanı -->
                <div class="col-12 mt-3" style="border: 1px,solid,rgb(193, 191, 191); border-radius:4px;">  
                    <div class="row">
                        <div class="col-7">
                            <div class="col-12">
                                <b style="font-size: 1.3rem;">Anasayfa İstatistik Alanı</b>
                            </div>
                            <div class="col-12">
                                Anasayfadaki İstatistik alanını kapatıp açabilirsiniz.
                            </div>
                        </div>
                        <div class="col-5 mt-3 d-flex justify-content-end align-items-center">
                            <x-adminlte-input-switch name="istatistik" data-on-color="success" data-off-color="danger" checked/>          
                        </div>
                    </div>  
                </div>

                <!-- Anasayfa Ekibimiz Alanı -->
                <div class="col-12 mt-3" style="border: 1px,solid,rgb(193, 191, 191); border-radius:4px;">  
                    <div class="row">
                        <div class="col-7">
                            <div class="col-12">
                                <b style="font-size: 1.3rem;">Anasayfa Ekibimiz  Alanı</b>
                            </div>
                            <div class="col-12">
                                Anasayfadaki Ekibimiz alanını kapatıp açabilirsiniz.
                            </div>
                        </div>
                        <div class="col-5 mt-3 d-flex justify-content-end align-items-center">
                            <x-adminlte-input-switch name="ekibimiz" data-on-color="success" data-off-color="danger" checked/>          
                        </div>
                    </div>  
                </div>

                <!-- Anasayfa Haberler ve Duyurular Alanı -->
                <div class="col-12 mt-3" style="border: 1px,solid,rgb(193, 191, 191); border-radius:4px;">  
                    <div class="row">
                        <div class="col-7">
                            <div class="col-12">
                                <b style="font-size: 1.3rem;">Anasayfa Haberler ve Duyurular Alanı</b>
                            </div>
                            <div class="col-12">
                                Anasayfadaki Haberler alanını kapatıp açabilirsiniz.
                            </div>
                        </div>
                        <div class="col-5 mt-3 d-flex justify-content-end align-items-center">
                            <x-adminlte-input-switch name="haberler" data-on-color="success" data-off-color="danger" checked/>          
                        </div>
                    </div>  
                </div>

                <!-- Anasayfa Bizimle İletişime Geçin Alanı -->
                <div class="col-12 mt-3" style="border: 1px,solid,rgb(193, 191, 191); border-radius:4px;">  
                    <div class="row">
                        <div class="col-8">
                            <div class="col-12">
                                <b style="font-size: 1.3rem;">Anasayfa Bizimle İletişime Geçin Alanı</b>
                            </div>
                            <div class="col-12">
                                Anasayfadaki Bizimle İletişime Geçin alanını kapatıp açabilirsiniz.
                            </div>
                        </div>
                        <div class="col-4 mt-3 d-flex justify-content-end align-items-center">
                            <x-adminlte-input-switch name="iletisim" data-on-color="success" data-off-color="danger" checked/>          
                        </div>
                    </div>  
                </div>


            </div>

            <div class="col-6">
                <!-- Yükleniyor -->
                <div class="col-12" style="border: 1px,solid,rgb(193, 191, 191); border-radius:4px;">  
                    <div class="row">
                        <div class="col-7">
                            <div class="col-12">
                                <b style="font-size: 1.3rem;">Yükleniyor</b>
                            </div>
                            <div class="col-12">
                                Sitedeki sayfa yükleniyor alanını kapatıp açabilrsiniz.
                            </div>
                        </div>
                        <div class="col-5 mt-3 d-flex justify-content-end align-items-center">
                            <x-adminlte-input-switch name="yukleniyor" data-on-color="success" data-off-color="danger" checked/>          
                        </div>
                    </div>  
                </div>

                <!-- Sosyal Medya Butonları -->
                <div class="col-12 mt-3" style="border: 1px,solid,rgb(193, 191, 191); border-radius:4px;">  
                    <div class="row">
                        <div class="col-7">
                            <div class="col-12">
                                <b style="font-size: 1.3rem;">Sosyal Medya Butonları</b>
                            </div>
                            <div class="col-12">
                                Sitedeki Sosyal Medya Butonlarını kapatıp açabilrsiniz.
                            </div>
                        </div>
                        <div class="col-5 mt-3 d-flex justify-content-end align-items-center">
                            <x-adminlte-input-switch name="sosyalmedya" data-on-color="success" data-off-color="danger" checked/>          
                        </div>
                    </div>  
                </div>

                <!-- Üst Menü Telefon -->
                <div class="col-12 mt-3" style="border: 1px,solid,rgb(193, 191, 191); border-radius:4px;">  
                    <div class="row">
                        <div class="col-7">
                            <div class="col-12">
                                <b style="font-size: 1.3rem;">Üst Menü Telefon</b>
                            </div>
                            <div class="col-12">
                                Sitedeki Üst Menü Telefon alanını kapatıp açabilrsiniz.
                            </div>
                        </div>
                        <div class="col-5 mt-3 d-flex justify-content-end align-items-center">
                            <x-adminlte-input-switch name="telefon" data-on-color="success" data-off-color="danger" checked/>          
                        </div>
                    </div>  
                </div>

                <!-- Slider Üzeri Karartı -->
                <div class="col-12 mt-3" style="border: 1px,solid,rgb(193, 191, 191); border-radius:4px;">  
                    <div class="row">
                        <div class="col-7">
                            <div class="col-12">
                                <b style="font-size: 1.3rem;">Slider Üzeri Karartı</b>
                            </div>
                            <div class="col-12">
                                Sitedeki slider üzerindeki karartı efektini kapatıp açabilirsiniz.
                            </div>
                        </div>
                        <div class="col-5 mt-3 d-flex justify-content-end align-items-center">
                            <x-adminlte-input-switch name="slider" data-on-color="success" data-off-color="danger" checked/>          
                        </div>
                    </div>  
                </div>

                <!-- SSL -->
                <div class="col-12 mt-3" style="border: 1px,solid,rgb(193, 191, 191); border-radius:4px;">  
                    <div class="row">
                        <div class="col-7">
                            <div class="col-12">
                                <b style="font-size: 1.3rem;">SSL</b>
                            </div>
                            <div class="col-12">
                                Sitenizin ssl'li şekilde açılmasını kapatıp açabilrsiniz.
                            </div>
                        </div>
                        <div class="col-5 mt-3 d-flex justify-content-end align-items-center">
                            <x-adminlte-input-switch name="ssl" data-on-color="success" data-off-color="danger" checked/>          
                        </div>
                    </div>  
                </div>

                <!-- Site içi Arama -->
                <div class="col-12 mt-3" style="border: 1px,solid,rgb(193, 191, 191); border-radius:4px;">  
                    <div class="row">
                        <div class="col-7">
                            <div class="col-12">
                                <b style="font-size: 1.3rem;">Site içi Arama</b>
                            </div>
                            <div class="col-12">
                                Site içi arama motorunu kapatıp açabilirsiniz.
                            </div>
                        </div>
                        <div class="col-5 mt-3 d-flex justify-content-end align-items-center">
                            <x-adminlte-input-switch name="arama" data-on-color="success" data-off-color="danger" checked/>          
                        </div>
                    </div>  
                </div>

                <!-- .html uzantı -->
                <div class="col-12 mt-3" style="border: 1px,solid,rgb(193, 191, 191); border-radius:4px;">  
                    <div class="row">
                        <div class="col-7">
                            <div class="col-12">
                                <b style="font-size: 1.3rem;">.html uzantı</b>
                            </div>
                            <div class="col-12">
                                Sitenizin .html uzantılı açılmasını kapatıp açabilrsiniz.
                            </div>
                        </div>
                        <div class="col-5 mt-3 d-flex justify-content-end align-items-center">
                            <x-adminlte-input-switch name="html" data-on-color="success" data-off-color="danger" checked/>          
                        </div>
                    </div>  
                </div>

                <!-- Google reCAPTCHA Modülü -->
                <div class="col-12 mt-3" style="border: 1px,solid,rgb(193, 191, 191); border-radius:4px;">  
                    <div class="row">
                        <div class="col-7">
                            <div class="col-12">
                                <b style="font-size: 1.3rem;">Google reCAPTCHA Modülü</b>
                            </div>
                            <div class="col-12">
                                Sitenizde google recaptcha modülünü kapatıp açabilirsiniz.
                            </div>
                        </div>
                        <div class="col-5 mt-3 d-flex justify-content-end align-items-center">
                            <x-adminlte-input-switch name="recaptcha" data-on-color="success" data-off-color="danger" checked/>          
                        </div>
                    </div>  
                </div>


            </div>
        </div>

        <!-- Site Bakım Modu -->
        <div class="row">
            <div class="col-12">      
                <div class="col-12 mt-3" style="border: 1px,solid,rgb(224, 125, 125); border-radius:4px;">  
                    <div class="row">
                        <div class="col-7">
                            <div class="col-12">
                                <b style="font-size: 1.3rem;">Site Bakım Modu</b>
                            </div>
                            <div class="col-12">
                                Sitenizi bakım moduna alır.
                            </div>
                        </div>
                        <div class="col-5 mt-3 d-flex justify-content-end align-items-center">
                            <x-adminlte-input-switch name="bakim" data-on-color="success" data-off-color="danger" checked/>          
                        </div>
                    </div>  
                </div>
            </div>
        </div>



    </x-adminlte-card>
</div>


@stop

@section('css')

<style>
.modulbaslik{
 font-family:"Cambria, Cochin, Georgia, Times, 'Times New Roman', serif";
 font-size:1.6rem; 
 font-weight:bold;
margin-bottom: 22px;

}
</style>


@stop


@section('js')

@stop