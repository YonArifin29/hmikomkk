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
                        <a href="https://www.instagram.com/hmikomisariat.kk/" class="flex items-center mr-6 sm:mr-10 mb-4 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400" target="_blank">
                            <i class="fa-brands fa-square-instagram text-2xl sm:text-4xl"></i>
                            <span class="ml-2 sm:ml-4 text-lg sm:text-2xl font-bold">Instagram</span>                    
                        </a>
                        <a href="https://web.facebook.com/kaka.yakusa.7" class="flex items-center mr-6 sm:mr-10 mb-4 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400" target="_blank">
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
    <section class="bg-white dark:bg-gray-900 flex flex-col items-center w-full min-h-screen relative overflow-hidden pt-10 pb-10">
        <!-- Title Kajian -->
        <h1 class="mb-6 text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold tracking-tight leading-none text-gray-900 dark:text-white text-center">
          Kajian
        </h1>
      
        <!-- Grid Kajian -->
        <div class="grid grid-cols-1 min-[350px]:grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-4 w-full max-w-screen-xl px-4">
          @foreach ($articles as $article)
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
              <a href="{{ url('/article-single/'.$article->id) }}">
                <img class="rounded-t-lg w-full h-32 sm:h-40 md:h-48 object-cover" src="{{ asset('storage/' . $article->image) }}" alt="" />
              </a>
              <div class="p-3 sm:p-4">
                <span class="text-green-600 text-xs sm:text-sm font-semibold uppercase block mb-1">
                    @foreach ($article->categories as $category)
                        {{ $category->category_name }}@if (!$loop->last), @endif
                    @endforeach
                </span>
                  <p class="text-xs">
                    {{ \Carbon\Carbon::parse($article->created_at)->format('d M Y') }}
                  </p>
                <a href="{{ url('/article-single/'.$article->id) }}">
                  <h5 class="mb-2 text-sm sm:text-base md:text-lg font-bold tracking-tight text-gray-900 dark:text-white line-clamp-1">
                    {{ $article->title }}
                  </h5>
                </a>
                <p class="mb-2 text-xs sm:text-sm text-gray-700 dark:text-gray-400 line-clamp-3">
                    {{ $article->content }}
                  </p>                  
                <div class="flex items-center mt-4 space-x-2">
                    <img class="w-8 h-8 rounded-full object-cover" src="{{ asset('image/user.png') }}" alt="Author photo" />
                    <div class="flex items-center justify-between text-sm text-gray-700 dark:text-gray-400 w-full">
                      <p class="text-xs text-gray-900 dark:text-white">
                        {{ $article->author }}
                      </p>
                    </div>
                  </div>
              </div>
            </div>
          @endforeach
        </div>
      
        <!-- Title Berita -->
        <h1 class="mt-12 mb-6 text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold tracking-tight leading-none text-gray-900 dark:text-white text-center">
          Berita
        </h1>
      
        <!-- Grid Berita -->
        <div class="grid grid-cols-1 min-[350px]:grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-4 w-full max-w-screen-xl px-4">
            @foreach ($newses as $news)
              <div class="w-full bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                  <img class="rounded-t-lg w-full h-32 sm:h-40 md:h-48 object-cover" src="{{ asset('storage/' . $news->image) }}" alt="" />
                </a>
                <div class="p-3 sm:p-4">
                  <span class="text-green-600 text-xs sm:text-sm font-semibold uppercase block mb-1">
                      @foreach ($news->categories as $category)
                          {{ $category->category_name }}@if (!$loop->last), @endif
                      @endforeach
                  </span>
                    <p class="text-xs">
                      {{ \Carbon\Carbon::parse($news->created_at)->format('d M Y') }}
                    </p>
                  <a href="#">
                    <h5 class="mb-2 text-sm sm:text-base md:text-lg font-bold tracking-tight text-gray-900 dark:text-white line-clamp-1">
                      {{ $news->title }}
                    </h5>
                  </a>
                  <p class="mb-2 text-xs sm:text-sm text-gray-700 dark:text-gray-400 line-clamp-3">
                      {{ $news->content }}
                    </p>                  
                  <div class="flex items-center mt-4 space-x-2">
                      <img class="w-8 h-8 rounded-full object-cover" src="{{ asset('image/user.png') }}" alt="Author photo" />
                      <div class="flex items-center justify-between text-sm text-gray-700 dark:text-gray-400 w-full">
                        <p class="text-xs text-gray-900 dark:text-white">
                          {{ $news->author }}
                        </p>
                      </div>
                    </div>
                </div>
              </div>
            @endforeach
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
         
      </section>      
</x-layoutFe>