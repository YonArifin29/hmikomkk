<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    {{-- tinyMCE --}}
    <script src="https://cdn.tiny.cloud/1/p5jji2j85nvmqj8c7q5ptofhjxuhi60fieguqbi4ulsq7yqz/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: 'textarea#content', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'code table lists',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
        height: 500,
      });
    </script>
    {{-- Select 2 --}}
    <!-- Tambahkan jQuery terlebih dahulu -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Kemudian tambahkan Select2 -->
    <link
      href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  </head>
  <body>
    <div class=" bg-gray-50 dark:bg-gray-900">
      {{-- navbar --}}
      <x-navbarFe></x-navbarFe>
      
      {{-- end sidebar  --}}

      {{-- end content --}}
      <main class="">
        {{ $slot }}
      </main>
      {{-- end content --}}
    </div>
    
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('preview_img');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src); // Free memory
            };
        };
    </script>
    <script>
      $(document).ready(function () {
        $(".js-example-basic-multiple").select2();
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    
  </body>
</html>
