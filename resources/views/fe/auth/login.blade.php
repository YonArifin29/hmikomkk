<x-layoutAuth>
    <div
    class="flex font-poppins items-center justify-center dark:bg-gray-900 min-w-screen min-h-screen"
  >
    <div class="grid gap-8">
      <div
        id="back-div"
        class="bg-gradient-to-r from-green-400 to-green-800 rounded-[26px] m-4 "
      >
        <div
          class="border-[20px] border-transparent rounded-[20px] dark:bg-gray-900 bg-white shadow-lg xl:p-10 2xl:p-10 lg:p-10 md:p-10 sm:p-2 m-2"
        >
          <h1 class="pt-8 pb-6 font-bold text-5xl dark:text-gray-400 text-center cursor-default">
            Login
          </h1>
          <form action="{{ url('login') }}" method="POST" class="space-y-4">
            @csrf
            @method('POST')
            <div>
              <label for="username" class="mb-2 dark:text-gray-400 text-lg">Username</label>
              <input
                id="username"
                class="border dark:bg-indigo-700 dark:text-gray-300 dark:border-gray-700 p-3 shadow-md placeholder:text-base border-gray-300 rounded-lg w-full focus:scale-105 ease-in-out duration-300"
                type="username"
                placeholder="username"
                required
                name="username"
              />
            </div>
            <div>
              <label for="password" class="mb-2 dark:text-gray-400 text-lg">Password</label>
              <input
                id="password"
                class="border dark:bg-indigo-700 dark:text-gray-300 dark:border-gray-700 p-3 mb-2 shadow-md placeholder:text-base border-gray-300 rounded-lg w-full focus:scale-105 ease-in-out duration-300"
                type="password"
                placeholder="Password"
                required
                name="password"
              />
              
            </div>
            @error('error')
              <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
            <button
              class="bg-gradient-to-r from-green-800 to-green-400 shadow-lg mt-6 p-2 text-white rounded-lg w-full hover:scale-105 hover:from-green-400 hover:to-green-800 transition duration-300 ease-in-out"
              type="submit"
            >
              Login
            </button>
          </form>
          <div class="flex flex-col mt-4 items-end justify-end text-sm">
            <h3>
              <span class="cursor-default dark:text-gray-300"></span>
              <a
                class="group text-green-800 transition-all duration-100 ease-in-out"
                href="/"
              >
                <span
                  class="bg-left-bottom ml-1 bg-gradient-to-r from-green-400 to-green-800 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out"
                >
                &laquo; Kembali
                </span>
              </a>
            </h3>
          </div>
      </div>
    </div>
  </div>
</x-layoutAuth>
