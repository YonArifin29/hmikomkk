<nav class="bg-white border-b border-gray-200 px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
    <div class="flex flex-wrap justify-between items-center">
      <div class="flex justify-start items-center">
        <button
          data-drawer-target="drawer-navigation"
          data-drawer-toggle="drawer-navigation"
          aria-controls="drawer-navigation"
          class="p-2  mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
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
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"
            ></path>
          </svg>
          <svg
            aria-hidden="true"
            class="hidden w-6 h-6"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"
            ></path>
          </svg>
          <span class="sr-only">Toggle sidebar</span>
        </button>
        <a href="https://www.instagram.com/hmikomisariat.kk/" class="flex items-center justify-between mr-4" target="_blank">
          <img 
              src="{{ asset('image/KK.png') }}"
              class="mr-3 h-8" 
              alt="Komis KK Logo" 
          />
          <span class="self-center font-merriweather font-semibold text-green-800 text-xl  tracking-tight whitespace-nowrap dark:text-white">KOMIS KK BERDAYA</span>
        </a>
      </div>
      <div class="flex items-center lg:order-2">
        <!-- Dropdown menu -->
        <div
          class="hidden overflow-hidden z-50 my-4 max-w-sm text-base list-none bg-white rounded divide-y divide-gray-100 shadow-lg dark:divide-gray-600 dark:bg-gray-700 rounded-xl"
          id="notification-dropdown"
        >
          <div
            class="block py-2 px-4 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-600 dark:text-gray-300"
          >
            Notifications
          </div>
          <div>
            <a
              href="#"
              class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600"
            >
              <div class="flex-shrink-0">
                <img
                  class="w-11 h-11 rounded-full"
                  src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                  alt="Bonnie Green avatar"
                />
                <div
                  class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 rounded-full border border-white bg-primary-700 dark:border-gray-700"
                >
                  <svg
                    aria-hidden="true"
                    class="w-3 h-3 text-white"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"
                    ></path>
                    <path
                      d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"
                    ></path>
                  </svg>
                </div>
              </div>
              <div class="pl-3 w-full">
                <div
                  class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                >
                  New message from
                  <span class="font-semibold text-gray-900 dark:text-white"
                    >Bonnie Green</span
                  >: "Hey, what's up? All set for the presentation?"
                </div>
                <div
                  class="text-xs font-medium text-primary-600 dark:text-primary-500"
                >
                  a few moments ago
                </div>
              </div>
            </a>
            <a
              href="#"
              class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600"
            >
              <div class="flex-shrink-0">
                <img
                  class="w-11 h-11 rounded-full"
                  src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                  alt="Jese Leos avatar"
                />
                <div
                  class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-gray-900 rounded-full border border-white dark:border-gray-700"
                >
                  <svg
                    aria-hidden="true"
                    class="w-3 h-3 text-white"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"
                    ></path>
                  </svg>
                </div>
              </div>
              <div class="pl-3 w-full">
                <div
                  class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                >
                  <span class="font-semibold text-gray-900 dark:text-white"
                    >Jese leos</span
                  >
                  and
                  <span class="font-medium text-gray-900 dark:text-white"
                    >5 others</span
                  >
                  started following you.
                </div>
                <div
                  class="text-xs font-medium text-primary-600 dark:text-primary-500"
                >
                  10 minutes ago
                </div>
              </div>
            </a>
            <a
              href="#"
              class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600"
            >
              <div class="flex-shrink-0">
                <img
                  class="w-11 h-11 rounded-full"
                  src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                  alt="Joseph McFall avatar"
                />
                <div
                  class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-red-600 rounded-full border border-white dark:border-gray-700"
                >
                  <svg
                    aria-hidden="true"
                    class="w-3 h-3 text-white"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
              </div>
              <div class="pl-3 w-full">
                <div
                  class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                >
                  <span class="font-semibold text-gray-900 dark:text-white"
                    >Joseph Mcfall</span
                  >
                  and
                  <span class="font-medium text-gray-900 dark:text-white"
                    >141 others</span
                  >
                  love your story. See it and view more stories.
                </div>
                <div
                  class="text-xs font-medium text-primary-600 dark:text-primary-500"
                >
                  44 minutes ago
                </div>
              </div>
            </a>
            <a
              href="#"
              class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600"
            >
              <div class="flex-shrink-0">
                <img
                  class="w-11 h-11 rounded-full"
                  src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                  alt="Roberta Casas image"
                />
                <div
                  class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-green-400 rounded-full border border-white dark:border-gray-700"
                >
                  <svg
                    aria-hidden="true"
                    class="w-3 h-3 text-white"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
              </div>
              <div class="pl-3 w-full">
                <div
                  class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                >
                  <span class="font-semibold text-gray-900 dark:text-white"
                    >Leslie Livingston</span
                  >
                  mentioned you in a comment:
                  <span
                    class="font-medium text-primary-600 dark:text-primary-500"
                    >@bonnie.green</span
                  >
                  what do you say?
                </div>
                <div
                  class="text-xs font-medium text-primary-600 dark:text-primary-500"
                >
                  1 hour ago
                </div>
              </div>
            </a>
            <a
              href="#"
              class="flex py-3 px-4 hover:bg-gray-100 dark:hover:bg-gray-600"
            >
              <div class="flex-shrink-0">
                <img
                  class="w-11 h-11 rounded-full"
                  src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/robert-brown.png"
                  alt="Robert image"
                />
                <div
                  class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-purple-500 rounded-full border border-white dark:border-gray-700"
                >
                  <svg
                    aria-hidden="true"
                    class="w-3 h-3 text-white"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"
                    ></path>
                  </svg>
                </div>
              </div>
              <div class="pl-3 w-full">
                <div
                  class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                >
                  <span class="font-semibold text-gray-900 dark:text-white"
                    >Robert Brown</span
                  >
                  posted a new video: Glassmorphism - learn how to implement
                  the new design trend.
                </div>
                <div
                  class="text-xs font-medium text-primary-600 dark:text-primary-500"
                >
                  3 hours ago
                </div>
              </div>
            </a>
          </div>
          <a
            href="#"
            class="block py-2 text-md font-medium text-center text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-600 dark:text-white dark:hover:underline"
          >
            <div class="inline-flex items-center">
              <svg
                aria-hidden="true"
                class="mr-2 w-4 h-4 text-gray-500 dark:text-gray-400"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                <path
                  fill-rule="evenodd"
                  d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                  clip-rule="evenodd"
                ></path>
              </svg>
              View all
            </div>
          </a>
        </div>
        <button
          type="button"
          class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
          id="user-menu-button"
          aria-expanded="false"
          data-dropdown-toggle="dropdown"
        >
          <span class="sr-only">Open user menu</span>
          <img
            class="w-8 h-8 rounded-full"
            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gough.png"
            alt="user photo"
          />
        </button>
        <!-- Dropdown menu -->
        <div
          class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 rounded-xl"
          id="dropdown"
        >
          <div class="py-3 px-4">
            <span
              class="block text-sm font-semibold text-gray-900 dark:text-white"
              >{{  session()->get('user', null)['name'] }} | {{  ucfirst(session()->get('user', [])['role'] ?? ''); }}</span
            >
          </div>
          <ul
            class="py-1 text-gray-700 dark:text-gray-300"
            aria-labelledby="dropdown"
          >
            <li>
              <form action="{{ url('logout') }}" method="POST">
                @csrf
                @method('POST')
                <button
                class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >Sign out</button>
                
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>