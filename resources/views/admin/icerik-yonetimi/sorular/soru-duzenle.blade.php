@extends('adminlte::page')
@section('plugins.BootstrapSwitch', true)

@section('title', 'Soru Düzenle')

@section('content_header')
    <h1>Soru Düzenle</h1>
@stop

@section('content')

    <div class="container-fluid">
        <x-adminlte-card>
            <form method="POST">
                <div class="row">
                    <div class="col-12">
                        <x-adminlte-input name="title" label="Soru Başlık" placeholder="soru Başlığı Giriniz." />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="durum">Durum</label>
                        <x-adminlte-input-switch  name="durum" data-on-color="success" data-off-color="danger"/>
                    </div>
                </div>
        

                <div class="row">
                    <div class="col-12">
                        <label for="sumernote">İçerik</label>
                        <textarea name="summernote" id="summernote" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-adminlte-button class="mt-4" label="Güncelle" theme="success" icon="fas fa-spinner fa-spin"/>
                    </div>
                </div>

            </form>
        </x-adminlte-card>
    </div>



@stop



@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />


<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">

@stop

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/js/fileinput.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
<script>
    $('#summernote').summernote({
      placeholder: 'Hizmet içeriğini Giriniz.',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear', 'fontname']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['codeview', 'help']]
      ],
      fontNames: ['Arial', 'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Tahoma', 'Times New Roman', 'Verdana'],
      fontNamesIgnoreCheck: ['Montserrat', 'Roboto']
    });
</script>


@stop