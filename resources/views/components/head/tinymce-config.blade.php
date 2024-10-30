
<form method="post">
    <textarea id="myeditorinstance">Hello, World!</textarea>
</form>


  <script src="https://cdn.tiny.cloud/1/dt3h7otnttirru89saqw5cgdd8sriigpfgg0kj6zl9tylxlr/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'code table lists',
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
  });
</script>