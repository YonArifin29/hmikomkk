<x-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Kategori</h2>
            <form action="{{ route('category.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <!-- category Name Input -->
                    <div class="">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                            Nama Kategori
                        </label>
                        <input type="text" id="name" name="name" 
                               value="{{ old('name', $category->name) }}"
                               class="bg-gray-50 border @error('name') border-red-500 @else border-gray-300 @enderror 
                               text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                               dark:bg-gray-700 dark:border-gray-600" placeholder="Masukan nama category">
                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded-lg cursor-pointer mt-4">Simpan</button>
                <a href="{{ url('/category') }}" class="bg-red-500 text-white px-4 py-2 rounded-lg cursor-pointer ml-3">Kembali</a>
            </form>
        </div>
    </section>
</x-layout>
