<x-layoutFe>
    <section class="bg-white dark:bg-gray-900 flex flex-col items-center w-full min-h-screen py-10 px-4 mt-10"> 
        <h1 class="mb-6 text-4xl font-extrabold tracking-tight leading-none text-gray-900 dark:text-white">
          Kajian
        </h1>
        
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
                    <img class="w-8 h-8 rounded-full object-cover" src="{{ asset('storage/' . $article->image) }}" alt="Author photo" />
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
      </section>
      
</x-layoutFe>