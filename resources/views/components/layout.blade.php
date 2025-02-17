<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    
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
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        let trainingSelect = document.getElementById("training");
        trainingSelect.addEventListener("change", function() {
            console.log("Selected trainings: ", [...this.selectedOptions].map(option => option.value));
        });
    });
    </script>
    
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</html>
