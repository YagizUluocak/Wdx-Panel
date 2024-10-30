@extends('adminlte::page')

@section('title', 'Anasayfa Modül Sıralama')

@section('content_header')
<h1>Anasayfa Modül Sırası</h1>
@stop

@section('content')

<div class="container-fluid">
    <x-adminlte-card>
        <div class="row">
            <div class="col-12">
                <ul id="sortable-modules" class="list-group">

                    <li class="list-group-item list-item-container" id="item-1">
                        <i class="fas fa-briefcase fa-2x mr-3 icon"></i>
                        <div class="list-item-icerik">
                            <b>Kurumsal Bilgi</b>
                            <p class="m-0 text-gray">Anasayfadaki Hakkımızda Alanı</p>
                        </div>
                    </li>

                    <li class="list-group-item list-item-container" id="item-2">
                        <i class="fas fa-star fa-2x mr-3 icon"></i>
                        <div class="list-item-icerik">
                            <b>Öne Çıkan Ürünler</b>
                            <p class="m-0 text-gray">Anasayfadaki Öne Çıkan Ürünlerimiz</p>
                        </div>
                    </li>

                    <li class="list-group-item list-item-container" id="item-3">
                        <i class="fas fa-hands-helping fa-2x mr-3 icon"></i>
                        <div class="list-item-icerik">
                            <b>Hizmetlerimiz</b>
                            <p class="m-0 text-gray">Anasayfadaki Hizmetlerimiz Alanı</p>
                        </div>
                    </li>

                    <li class="list-group-item list-item-container" id="item-4">
                        <i class="fas fa-award fa-2x mr-3 icon"></i>
                        <div class="list-item-icerik">
                            <b>Neden Biz?</b>
                            <p class="m-0 text-gray">Anasayfadaki Neden Biz Alanı</p>
                        </div>
                    </li>

                    <li class="list-group-item list-item-container" id="item-5">
                        <i class="fas fa-users fa-2x mr-3 icon"></i>
                        <div class="list-item-icerik">
                            <b>Ekibimiz</b>
                            <p class="m-0 text-gray">Anasayfadaki Ekibimiz Alanı</p>
                        </div>
                    </li>

                    <li class="list-group-item list-item-container" id="item-6">
                        <i class="fas fa-box fa-2x mr-3 icon"></i>
                        <div class="list-item-icerik">
                            <b>Paketlerimiz</b>
                            <p class="m-0 text-gray">Anasayfadaki Paketlerimiz Alanı</p>
                        </div>
                    </li>

                    <li class="list-group-item list-item-container" id="item-7">
                        <i class="fas fa-phone-alt fa-2x mr-3 icon"></i>
                        <div class="list-item-icerik">
                            <b>Hemen Arayın</b>
                            <p class="m-0 text-gray">Anasayfadaki Hemen Arayın Alanı</p>
                        </div>
                    </li>
                    
                    <li class="list-group-item list-item-container" id="item-8">
                        <i class="fas fa-lightbulb fa-2x mr-3 icon"></i>
                        <div class="list-item-icerik">
                            <b>Projelerimiz</b>
                            <p class="m-0 text-gray">Anasayfadaki Projelerimiz Alanı</p>
                        </div>
                    </li>

                    <li class="list-group-item list-item-container" id="item-9">
                        <i class="fas fa-newspaper fa-2x mr-3 icon"></i>
                        <div class="list-item-icerik">
                            <b>Haber Ve Duyurular</b>
                            <p class="m-0 text-gray">Anasayfadaki Haberler ve Duyurular Alanı</p>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

    </x-adminlte-card>
    
</div>
@stop

@section('css')
<style>
    .list-item-container{
        display: flex;
        align-items:flex-start;
    }

    .icon{
    align-self: center;
    }

    .list-item-icerik{
    flex: :1;
    }

    .ui-state-highlight {
        height: 2.5em;
        line-height: 2.5em;
        background-color: #f0f0f0;
        border: 1px dashed #ccc;
    }

    #sortable-modules li {
        cursor: grab; /* Sürüklemeye başlamadan önce görünen işaretçi */
    }

    /* Sürükleme sırasında işaretçi */
    #sortable-modules li.ui-sortable-helper {
        cursor: grabbing; /* Sürükleme işlemi sırasında görünen işaretçi */
    }
</style>
@stop

@section('js')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <script>
        $(function() {
        $("#sortable-modules").sortable({
            placeholder: "ui-state-highlight",
            cursor: "move",
            update: function(event, ui) {
                var sortedIDs = $(this).sortable("toArray");
                console.log(sortedIDs); // Bu, sıralanmış ID'leri verecek
                // AJAX ile sıralamayı backend'e gönder
                $.ajax({
                    url: '/update-modules-order',
                    method: 'POST',
                    data: {
                        order: sortedIDs,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        alert('Sıralama güncellendi!');
                    }
                });
            }
        });
        $("#sortable-modules").disableSelection();
    });

</script>

@stop