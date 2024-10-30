@extends('adminlte::page')

@section('title','Api Ayarları')

@section('content_header')
<h1>Api Ayarları</h1>
@stop


@section('content')
    <x-adminlte-card>

        <form action="" method="POST">

            <!-- Whatsapp -->
            <x-label for="whatsapp" text="Whatsapp Kodu" class="custom-label mt-4" />
            <div id="whatsapp" class="codeblock" name="whatsapp"></div>

            <!-- Analytics -->
            <x-label for="analytics" text="Google Analytics .js Kodu" class="custom-label mt-4" />
            <div id="analytics" class="codeblock" name="analytics"></div>

            <!-- Webmaster -->
            <x-label for="webmaster" text="Webmaster Tools Site Doğrulama Kodu" class="custom-label mt-4" />
            <div id="webmaster" class="codeblock" name="webmaster"></div>

            <!-- Harita -->
            <x-label for="harita" text="İletişim Harita Embed Kodu" class="custom-label mt-4" />
            <div id="harita" class="codeblock" name="harita"></div>

            <!-- Harita -->
            <x-label for="destek" text="Canlı Destek Kodu" class="custom-label mt-4" />
            <div id="destek" class="codeblock" name="destek"></div>

            <!-- Harita -->
            <x-label for="recaptha" text="Google Recaptha Site Anahtar Kodu" class="custom-label mt-4" />
            <div id="recaptha" class="codeblock" name="recaptha"></div>

            <!-- Güncelle -->
            <x-adminlte-button name="guncelle" label="Güncelle" theme="success" icon="fas fa-spinner fa-spin" class="mt-4"/>

        </form>

    </x-adminlte-card>
@stop





@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.min.css" rel="stylesheet" />
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Ace editor for each codeblock div
        ['whatsapp', 'analytics', 'webmaster', 'harita', 'destek', 'recaptha'].forEach(function(id) {
            var editor = ace.edit(id);
            editor.setTheme("ace/theme/cobalt"); // Apply dark theme
            editor.session.setMode("ace/mode/html"); // Set syntax mode
            editor.setOptions({
                maxLines: 50,
                minLines: 15,
                wrap: true,
                autoScrollEditorIntoView: true,
                enableLiveAutocompletion: true
            });

            // When form is submitted, set the value of the hidden input
            document.querySelector('form').addEventListener('submit', function() {
                var codeContent = editor.getValue();
                document.querySelector('#code-hidden-input-' + id).value = codeContent;
            });
        });
    });
</script>
@stop