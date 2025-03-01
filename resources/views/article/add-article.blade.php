<x-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-4xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Kajian</h2>
            <form action="/member/add_member" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mb-4">
                    <input type="hidden" name="user_id" value="1" >
                    <div class="sm:col-span-2">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Judul</label>
                        <input type="text" id="title" name="title" value="{{ old('title') }}" class="bg-gray-50 border @error('name') border-red-500 @else border-gray-300 @enderror 
                            text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                            dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                                focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="l" {{ old('category') == 'l' ? 'selected' : '' }}>Laki-Laki</option>
                            <option value="p" {{ old('category') == 'p' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="">
                        <label for="image" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Upload Gambar</label>
                        <input type="file" id="image" name="image" accept="image/*" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                                focus:border-blue-500 block w-full p-2.5 h-11 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('image')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <textarea name="content" id="content">Isi Konten</textarea>
                    </div>
                </div>
        
                <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded-lg cursor-pointer">Simpan</button>
                <a href="{{ url('/article') }}" class="bg-red-500 text-white px-4 py-2 rounded-lg cursor-pointer ml-3">Kembali</a>
            </form>
        </div>
    </section>
</x-layout>