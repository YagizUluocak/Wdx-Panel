@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Yeni Ekip Üyesi Ekle')

@section('content_header')
    <h1>Yeni Ekip Üyesi Ekle</h1>
@stop

@section('content')

    <div class="container-fluid">
        <x-adminlte-card>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('success'))
                <div id="success-alert" class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            <form  id="ekipForm" method="POST" action="{{ route('admin.ekip.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="adsoyad" label="Ad Soyad" placeholder="Ad Soyad Giriniz." />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="gorev" label="Görev" placeholder="Görev Bilgisi Ekleyin." />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="resim">Profil Fotoğrafı</label>
                        <x-adminlte-input-file name="resim"  placeholder="Profil Fotoğrafı Seçiniz">
                            <x-slot name="prependedSlot">
                                <div class="input-group-text bg-lightblue">
                                    <i class="fas fa-upload"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-file>
                    </div>
                </div>

                <x-adminlte-card title="Sosyal Medya Ayarları" theme="secondary" icon="fas fa-info-circle">
                    <div class="row">
                        <div class="col-6">
                            <x-adminlte-input name="linkedin" label="LinkedIn Sayfa Url" placeholder="LinkedIn">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fa-brands fa-linkedin fa-xl text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>

                        <div class="col-6">
                            <x-adminlte-input name="facebook" label="Facebook Sayfa Url" placeholder="Facebook">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fa-brands fa-facebook fa-xl text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>


                        <div class="col-6">
                            <x-adminlte-input name="twitter" label="Twitter Sayfa Url" placeholder="Twitter">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fa-brands fa-twitter fa-xl text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>

                        <div class="col-6">
                            <x-adminlte-input name="instagram" label="İnstagram Sayfa Url" placeholder="Instagram">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fa-brands fa-instagram fa-xl text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>
                    </div>   
                </x-adminlte-card>

                <div class="row">
                    <div class="col-12">
                        <label for="durumSwitch">Durum</label>
                        <x-adminlte-input-switch 
                            id="durumSwitch" 
                            name="durumSwitch" 
                            data-on-color="success" 
                            data-off-color="danger" 
                            data-on-text="Göster" 
                            data-off-text="Gizle" />         
                    <input type="hidden" name="durum" id="durum">
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-12">
                        <x-adminlte-button class="mt-4" type="submit" label="Kaydet" theme="success" icon="fas fa-spinner fa-spin"/>
                    </div>
                </div>

            </form>
        </x-adminlte-card>
    </div>



@stop



@section('css')


@stop

@section('js')

<!-- Switch -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap3/bootstrap-switch.min.js"></script>
    <script>
        $(document).ready(function() {
            $("input[name='durumSwitch']").bootstrapSwitch();
        });
    </script>
    <script>

            
        document.getElementById('ekipForm').addEventListener('submit', function(e) {
            // Switch input kontrolü
            let switchInput = document.getElementById('durumSwitch');
            let durumInput = document.getElementById('durum');
            
            // Switch açık (on) ise durum değerini 1 yap, değilse 0 yap
            durumInput.value = switchInput.checked ? 1 : 0;
        });

            // Eğer başarı mesajı varsa, yönlendirme işlemini yap
            window.onload = function() {
            if (document.getElementById('success-alert')) {
                setTimeout(function() {
                    // 1 saniye sonra yönlendir
                    window.location.href = "{{ route('admin.ekip.index') }}";
                }, 1200);
            }
        };
    </script>
<!-- Switch Son -->

@stop