<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://www.instagram.com/hmikomisariat.kk/" class="flex items-center space-x-3 rtl:space-x-reverse" target="_blank">
      <img src="{{ asset('image/KK.png') }}" class="h-8" alt="Flowbite Logo" >
    </a>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <a href="login" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-green-800">
        Login
      </a>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="/" class="nav-link block py-2 px-3 rounded-sm md:p-0">Home</a>
        </li>
        <li>
          <a href="/articles" class="nav-link block py-2 px-3 rounded-sm md:p-0">Kajian</a>
        </li>
        <li>
          <a href="/newsFe" class="nav-link block py-2 px-3 rounded-sm md:p-0">Berita</a>
        </li>
        <li>
          <a href="/memberFe" class="nav-link block py-2 px-3 rounded-sm md:p-0">Keanggotaan</a>
        </li>
        <li>
          <a href="#" class="nav-link block py-2 px-3 rounded-sm md:p-0">Tentang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  // Ambil semua link di dalam navbar
  const navLinks = document.querySelectorAll(".nav-link");

  // Dapatkan path URL saat ini
  const currentUrl = window.location.pathname;

  // Loop melalui setiap link dan tambahkan class aktif jika URL cocok
  navLinks.forEach(link => {
    if (link.getAttribute("href") === currentUrl) {
      link.classList.add("text-green-800", "font-bold");
    } else {
      link.classList.add("text-gray-900", "hover:text-green-700", "dark:text-white", "dark:hover:text-green-500");
    }
  });
</script>
