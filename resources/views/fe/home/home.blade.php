<x-layoutFe>
    <section class="bg-white dark:bg-gray-900 flex items-center w-screen h-dvh relative overflow-hidden overflow-x-hidden">
        <!-- Kotak-kotak sebagai background -->
        <div class="absolute inset-0 pointer-events-none hidden sm:block">
            <div class="grid w-full h-full opacity-30">
                <!-- Kotak-kotak hanya muncul di tablet & desktop -->
                <div class="bg-gray-300 dark:bg-gray-600 w-16 h-16 rounded-lg absolute top-[10%] left-[5%]"></div>
                <div class="bg-gray-400 dark:bg-gray-700 w-20 h-20 rounded-lg absolute top-[30%] left-[20%]"></div>
                <div class="bg-gray-300 dark:bg-gray-600 w-24 h-24 rounded-lg absolute top-[50%] left-[70%]"></div>
                <div class="bg-gray-400 dark:bg-gray-700 w-16 h-16 rounded-lg absolute top-[80%] left-[40%]"></div>
                <div class="bg-gray-300 dark:bg-gray-600 w-20 h-20 rounded-lg absolute top-[65%] left-[10%]"></div>
            </div>
        </div>        
    
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12 flex justify-center items-center relative z-10">
            <div>
                <p class="inline-flex justify-center items-center py-1 px-6 sm:px-10 mb-5 sm:mb-7 text-xs sm:text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" role="alert">
                    <span class="text-base sm:text-lg font-medium">Selamat Datang di Website</span> 
                </p>
    
                <h1 class="mb-4 text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-extrabold tracking-tight leading-none text-gray-900 dark:text-white">
                    Himpunan Mahasiswa Islam<br> Komiariat<br> Komputer Komunikasi
                </h1>
    
                <p class="mb-6 sm:mb-8 text-sm sm:text-lg md:text-xl font-normal text-gray-500 sm:px-10 md:px-16 lg:px-48 dark:text-gray-400">
                    Universitas Subang Cabang Subang
                </p>
    
                <div class="px-4 mx-auto text-center md:max-w-screen-md lg:max-w-screen-xl xl:px-36">
                    <span class="font-semibold text-gray-400 uppercase text-sm sm:text-base">Our Social Media</span>
                    <div class="flex flex-wrap justify-center items-center mt-4 sm:mt-5 text-gray-500 sm:justify-between">
                        <a href="#" class="flex items-center mr-6 sm:mr-10 mb-4 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400">
                            <i class="fa-brands fa-square-instagram text-2xl sm:text-4xl"></i>
                            <span class="ml-2 sm:ml-4 text-lg sm:text-2xl font-bold">Instagram</span>                    
                        </a>
                        <a href="#" class="flex items-center mr-6 sm:mr-10 mb-4 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400">
                            <i class="fa-brands fa-facebook text-2xl sm:text-4xl"></i>
                            <span class="ml-2 sm:ml-4 text-lg sm:text-2xl font-bold">Facebook</span>               
                        </a>  
                        <a href="#" class="flex items-center mr-6 sm:mr-10 mb-4 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400">
                            <i class="fa-brands fa-tiktok text-2xl sm:text-4xl"></i>
                            <span class="ml-2 sm:ml-4 text-lg sm:text-2xl font-bold">TikTok</span>                                         
                        </a>       
                    </div>                                      
                </div> 
            </div>
        </div>
    </section>  
    <section class="bg-white dark:bg-gray-900 flex flex-col items-center w-full min-h-screen relative overflow-hidden overflow-x-hidden pt-10 pb-10">
        <h1 class="mb-6 text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-extrabold tracking-tight leading-none text-gray-900 dark:text-white">
            Kajian
        </h1>
        {{-- <div class="flex flex-wrap justify-center items-start gap-6 w-full px-4 mb-20 bg-yellow-300">
            <div class="w-full max-w-lg bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 relative bg-yellow-300">
                <a href="#">
                    <img class="rounded-t-lg w-full" src="https://images.pexels.com/photos/2286895/pexels-photo-2286895.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
                </a>
                <div class="absolute top-40 left-10  bg-white shadow-lg rounded-t-lg p-5">
                    <div class="flex items-center space-x-3 mb-3">
                        <span class="bg-green-800 text-white text-xs font-medium px-2.5 py-0.5 rounded-xl dark:bg-green-900 dark:text-green-300">
                            12 Jan 2025
                        </span>
                        <span class="flex items-center space-x-1 text-gray-600 dark:text-gray-300">
                            <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"></path>
                            </svg>
                            <p class="text-sm font-medium">by Author</p>
                        </span>
                    </div>
                    <a href="#">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-gray-900">
                            Himpunan Mahasiswa Islam (HMI) Subang Geruduk Gedung DPRD dan Pemda Subang
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper pretium mi, et fringilla ipsum viverra nec. Aenean nec rhoncus velit. Vestibulum congue tellus.
                    </p>
                    <a href="#" class="inline-flex items-center text-sm font-medium text-black dark:text-black">
                        → Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div> --}}
        <div class="flex flex-wrap justify-center items-start gap-6 w-full px-4">
            <div class="w-full max-w-lg bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full" src="https://images.pexels.com/photos/2286895/pexels-photo-2286895.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                    </p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="w-full max-w-lg bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full" src="https://images.pexels.com/photos/2286895/pexels-photo-2286895.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                    </p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="w-full max-w-lg bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full" src="https://images.pexels.com/photos/2286895/pexels-photo-2286895.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                    </p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <h1 class="mb-6 text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-extrabold tracking-tight leading-none text-gray-900 dark:text-white">
            Berita
        </h1>
        <div class="flex flex-wrap justify-center items-start gap-6 w-full px-4">
            <div class="w-full max-w-lg bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full" src="https://images.pexels.com/photos/2286895/pexels-photo-2286895.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                    </p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="w-full max-w-lg bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full" src="https://images.pexels.com/photos/2286895/pexels-photo-2286895.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                    </p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="w-full max-w-lg bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full" src="https://images.pexels.com/photos/2286895/pexels-photo-2286895.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                    </p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-md px-4 py-12 mx-auto text-center">
          <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Dukung Karya Kami ☕
          </h1>
          <p class="mb-6 text-lg font-light text-gray-500 dark:text-gray-400">
            Jika kamu suka dengan apa yang kami buat, bantu kami terus berkarya dengan berdonasi secangkir kopi. Setiap dukunganmu sangat berarti!
          </p>
          <div class="flex justify-center mb-6">
            <img src="https://upload.wikimedia.org/wikipedia/commons/3/31/MM_QRcode.png" alt="QR Code Donasi" class="w-48 h-48 rounded-lg shadow-md" />
          </div>
          <p class="mb-4 text-sm text-gray-500 dark:text-gray-400">Scan barcode di atas untuk donasi via QRIS</p>
          <a href="#" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800">
            Donasi Sekarang
          </a>
        </div>
      </section>      
</x-layoutFe>