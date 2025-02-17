<ul class="space-y-2">
  <li>
    <a
      href="#"
      class="flex items-center p-2 text-base font-medium text-white rounded-lg dark:text-white hover:bg-gray-800 dark:hover:bg-gray-700 group"
    >
    <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
      <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd"/>
    </svg>
    
      <span class="ml-3">Home</span>
    </a>
  </li>
  <li>
    <button
      type="button"
      class="flex items-center p-2 w-full text-base font-medium text-white rounded-lg transition duration-75 group hover:bg-gray-800 dark:text-white dark:hover:bg-gray-700"
      aria-controls="dropdown-pages"
      data-collapse-toggle="dropdown-pages"
    >
    <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
      <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
    </svg>
    
      <span class="flex-1 ml-3 text-left whitespace-nowrap"
        >Kelola Pengguna</span
      >
      <svg
        aria-hidden="true"
        class="w-6 h-6"
        fill="currentColor"
        viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fill-rule="evenodd"
          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
          clip-rule="evenodd"
        ></path>
      </svg>
    </button>
    <ul id="dropdown-pages" class="hidden py-2 space-y-2">
      <li>
        <a
          href="{{ url('/user') }}"
          class="flex items-center p-2 pl-11 w-full text-base font-medium text-white rounded-lg transition duration-75 group hover:bg-gray-800 dark:text-white dark:hover:bg-gray-700"
          >
          </span> Dafrtar Pengguna</a
        >
      </li>
      <li>
        <a
          href="{{ url('/member') }}"
          class="flex items-center p-2 pl-11 w-full text-base font-medium text-white rounded-lg transition duration-75 group hover:bg-gray-800 dark:text-white dark:hover:bg-gray-700"
          >Dafrtar Anggota</a
        >
      </li>
    </ul>
  </li>
  <li>
    <button
      type="button"
      class="flex items-center p-2 w-full text-base font-medium text-white rounded-lg transition duration-75 group hover:bg-gray-800 dark:text-white dark:hover:bg-gray-700"
      aria-controls="dropdown-sales"
      data-collapse-toggle="dropdown-sales"
    >
    <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
      <path d="M20 14h-2.722L11 20.278a5.511 5.511 0 0 1-.9.722H20a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM9 3H4a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V4a1 1 0 0 0-1-1ZM6.5 18.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM19.132 7.9 15.6 4.368a1 1 0 0 0-1.414 0L12 6.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z"/>
    </svg>
    
      <span class="flex-1 ml-3 text-left whitespace-nowrap"
        >Kelola Kajian</span
      >
      <svg
        aria-hidden="true"
        class="w-6 h-6"
        fill="currentColor"
        viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fill-rule="evenodd"
          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
          clip-rule="evenodd"
        ></path>
      </svg>
    </button>
    <ul id="dropdown-sales" class="hidden py-2 space-y-2">
      <li>
        <a
          href="#"
          class="flex items-center p-2 pl-11 w-full text-base font-medium text-white rounded-lg transition duration-75 group hover:bg-gray-800 dark:text-white dark:hover:bg-gray-700"
          >Products</a
        >
      </li>
    </ul>
  </li>
  <li>
    <button
      type="button"
      class="flex items-center p-2 w-full text-base font-medium text-white rounded-lg transition duration-75 group hover:bg-gray-800 dark:text-white dark:hover:bg-gray-700"
      aria-controls="dropdown-authentication"
      data-collapse-toggle="dropdown-authentication"
    >
    <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
      <path fill-rule="evenodd" d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h11.5c.07 0 .14-.007.207-.021.095.014.193.021.293.021h2a2 2 0 0 0 2-2V7a1 1 0 0 0-1-1h-1a1 1 0 1 0 0 2v11h-2V5a2 2 0 0 0-2-2H5Zm7 4a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm-6 4a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM7 6a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H7Zm1 3V8h1v1H8Z" clip-rule="evenodd"/>
    </svg>
    
      <span class="flex-1 ml-3 text-left whitespace-nowrap"
        >Kelola Berita</span
      >
      <svg
        aria-hidden="true"
        class="w-6 h-6"
        fill="currentColor"
        viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fill-rule="evenodd"
          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
          clip-rule="evenodd"
        ></path>
      </svg>
    </button>
    <ul id="dropdown-authentication" class="hidden py-2 space-y-2">
      <li>
        <a
          href="#"
          class="flex items-center p-2 pl-11 w-full text-base font-medium text-white rounded-lg transition duration-75 group hover:bg-gray-800 dark:text-white dark:hover:bg-gray-700"
          >Sign In</a
        >
      </li>
    </ul>
  </li>
  <li>
    <button
      type="button"
      class="flex items-center p-2 w-full text-base font-medium text-white rounded-lg transition duration-75 group hover:bg-gray-800 dark:text-white dark:hover:bg-gray-700"
      aria-controls="dropdown-kategori"
      data-collapse-toggle="dropdown-kategori"
    >
      <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
        <path d="M5.05 3C3.291 3 2.352 5.024 3.51 6.317l5.422 6.059v4.874c0 .472.227.917.613 1.2l3.069 2.25c1.01.742 2.454.036 2.454-1.2v-7.124l5.422-6.059C21.647 5.024 20.708 3 18.95 3H5.05Z"/>
      </svg>
      <span class="flex-1 ml-3 text-left whitespace-nowrap"
        >Kelola Kategori</span
      >
      <svg
        aria-hidden="true"
        class="w-6 h-6"
        fill="currentColor"
        viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fill-rule="evenodd"
          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
          clip-rule="evenodd"
        ></path>
      </svg>
    </button>
    <ul id="dropdown-kategori" class="hidden py-2 space-y-2">
      <li>
        <a
          href="{{ url('/training') }}"
          class="flex items-center p-2 pl-11 w-full text-base font-medium text-white rounded-lg transition duration-75 group hover:bg-gray-800 dark:text-white dark:hover:bg-gray-700"
          >Kategori Training</a
        >
      </li>
      <li>
        <a
          href="{{ url('/user') }}"
          class="flex items-center p-2 pl-11 w-full text-base font-medium text-white rounded-lg transition duration-75 group hover:bg-gray-800 dark:text-white dark:hover:bg-gray-700"
          >Sign In</a
        >
      </li>
    </ul>
  </li>
</ul>