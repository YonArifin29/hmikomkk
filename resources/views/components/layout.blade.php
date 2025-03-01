<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <script src="https://cdn.tiny.cloud/1/p5jji2j85nvmqj8c7q5ptofhjxuhi60fieguqbi4ulsq7yqz/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: 'textarea#content', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'code table lists',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
        height: 500,
      });
    </script>
  </head>
  <body>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
      {{-- navbar --}}
      <x-navbar></x-navbar>
      {{-- navbar --}}

      <!-- Sidebar -->

      <x-sidebar></x-sidebar>
      
      {{-- end sidebar  --}}

      {{-- end content --}}
      <main class="p-4 md:ml-64 h-auto pt-20">
        {{ $slot }}
      </main>
      {{-- end content --}}
    </div>
  </body>
    
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</html>
