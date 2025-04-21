<div class="w-full max-w-[90px] sm:max-w-[280px] bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
  <div class="flex flex-col items-center pb-1.5 sm:pb-8 pt-1 sm:pt-5 px-0.5 sm:px-4">
    <img 
      class="w-7 h-7 sm:w-20 sm:h-20 mb-0.5 sm:mb-3 rounded-full shadow-lg mt-0.5 sm:mt-4" 
      src="{{ asset('image/user.png') }}" 
      alt="{{ $name }} image"
    />
    <h5 class="mb-0 text-[8px] sm:text-base font-semibold text-gray-900 dark:text-white text-center leading-tight">
      {{ $name }}
    </h5>
    <span class="text-[7px] sm:text-xs text-gray-500 dark:text-gray-400 text-center leading-tight">
      {{ $position }}
    </span>

    <!-- Hanya muncul di sm ke atas -->
    <div class="hidden sm:flex mt-1 sm:mt-4 space-x-0.5 sm:space-x-2">
      <a 
        href="#" 
        class="px-1 py-[1px] sm:px-3 sm:py-1 text-[7px] sm:text-xs font-medium text-white bg-green-800 rounded hover:bg-green-900 focus:ring-1 focus:outline-none focus:ring-green-500 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
      >Detail</a>
      <a 
        href="https://wa.me/6281355538777" 
        target="_blank"
        class="px-1 py-[1px] sm:px-3 sm:py-1 text-[7px] sm:text-xs font-medium text-gray-700 bg-white border border-gray-300 rounded hover:bg-gray-100 hover:text-green-700 focus:outline-none focus:ring-1 focus:ring-gray-100 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
      >Msg</a>
    </div>

  </div>
</div>
