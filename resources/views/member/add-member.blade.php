<x-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-4xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Anggota</h2>
            <form action="/member/add_member" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mb-4">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Nama</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="bg-gray-50 border @error('name') border-red-500 @else border-gray-300 @enderror 
                            text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                            dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    
                    <div class="sm:col-span-2">
                        <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Nomor Hp</label>
                        <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" class="bg-gray-50 border @error('phone_number') border-red-500 @else border-gray-300 @enderror 
                            text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                            dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    
                    <div class="sm:col-span-2">
                        <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                        <select id="gender" name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                                focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="l" {{ old('gender') == 'l' ? 'selected' : '' }}>Laki-Laki</option>
                            <option value="p" {{ old('gender') == 'p' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    
                    <div class="sm:col-span-2">
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Status</label>
                        <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                                focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="pengurus" {{ old('status') == 'pengurus' ? 'selected' : '' }}>Pengurus</option>
                            <option value="kader" {{ old('status') == 'kader' ? 'selected' : '' }}>Kader</option>
                            <option value="senior" {{ old('status') == 'senior' ? 'selected' : '' }}>Senior</option>
                        </select>
                    </div>
                    
                    <div class="sm:col-span-2">
                        <img id='preview_img' src="{{ asset('storage/members/user.png') }}" class="h-16 w-16 object-cover rounded-full" alt="Current profile photo" />
                        <label for="image" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Upload Foto</label>
                        <input type="file" id="image" name="image" accept="image/*" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                                focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" onchange="loadFile(event)">
                        @error('image')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
        
                <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded-lg cursor-pointer">Simpan</button>
                <a href="{{ url('/member') }}" class="bg-red-500 text-white px-4 py-2 rounded-lg cursor-pointer ml-3">Kembali</a>
            </form>
        </div>
    </section>
</x-layout>