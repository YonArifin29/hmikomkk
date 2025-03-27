<nav class="bg-background fixed w-full z-20 top-0 start-0 h-55">
    <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-4">
      <span class="flex justify-center items-center">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img 
            src="{{ asset('image/hmi.png') }}" 
            class="mr-3 h-16 w-auto" 
            alt="Komis KK Logo" 
          />
        </a>
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img 
            src="{{ asset('image/kk.png') }}" 
            class="mr-3 h-16 w-auto" 
            alt="Komis KK Logo" 
          />
        </a>
      </span>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <a href="/login" class="text-white border-2 border-white flex items-center justify-center bg-greenLoginButton hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-800 font-bold  text-lg px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-greenLoginButton-700 dark:focus:ring-green-800 w-[150px] h-[57px] rounded-3xl ">Login</a>
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="px-4 py-2 items-center justify-between hidden  md:flex md:w-auto md:order-1 h-[60px] rounded-3xl border-gray-100  bg-gray-50 overflow-hidden font-bold  text-lg " id="navbar-sticky">
      <ul class=" items-center flex flex-col p-4 md:p-0 mt-4 font-medium border  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 ">
        <li>
          <a href="#" class="flex justify-center items-center py-2 px-3 text-white bg-green-700 md:bg-transparen border-gray-100 rounded-3xl w-[110px] h-[50px] hover:bg-green-800" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Kajian</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Berita</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Keanggotaan</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
  