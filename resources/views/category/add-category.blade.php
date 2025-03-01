<x-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-4xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Kategori</h2>
            <form action="{{ url('/category/add_category') }}" method="POST">
                @csrf
                <div class="grid gap-4 sm:grid-cols-1 sm:gap-6 mb-4">
                    <div>
                        <label for="training_name" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                            Nama Kategori
                        </label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                            class="bg-gray-50 border @error('training_name') border-red-500 @else border-gray-300 @enderror 
                            text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                            dark:bg-gray-700 dark:border-gray-600" placeholder="Masukan nama training">
                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded-lg cursor-pointer">Simpan</button>
                <a href="{{ url('/category') }}" class="bg-red-500 text-white px-4 py-2 rounded-lg cursor-pointer ml-3">Kembali</a>
            </form>
        </div>
    </section>
</x-layout>
