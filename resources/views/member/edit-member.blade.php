<x-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-4xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Anggota</h2>
            <form action="/member/update/{{ $member->id }}" method="POST" enctype="multipart/form-data" class="w-full">
                @csrf
                @method('PUT')

                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mb-4">
                    <div class="sm:col-span-1">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Nama</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $member->name) }}" class="bg-gray-50 border @error('name') border-red-500 @else border-gray-300 @enderror 
                            text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                            dark:bg-gray-700 dark:border-gray-600">
                            @error('name')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                    </div>

                    <div class="sm:col-span-1">
                        <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Nomor Hp</label>
                        <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number', $member->phone_number) }}" class="bg-gray-50 border @error('phone_number') border-red-500 @else border-gray-300 @enderror 
                            text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                            dark:bg-gray-700 dark:border-gray-600">
                            @error('phone_number')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                    </div>

                    <div class="sm:col-span-1">
                        <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                        <select id="gender" name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                                focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="l" {{ old('gender', $member->gender) == 'l' ? 'selected' : '' }}>Laki-Laki</option>
                            <option value="p" {{ old('gender', $member->gender) == 'p' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="date_of_birth" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Tanggal Lahir</label>
                        <input type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth', $member->date_of_birth) }}" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                            dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="sm:col-span-1">
                        <label for="year_of_entering_college" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Tahun Masuk Kuliah</label>
                        <input type="date" id="year_of_entering_college" name="year_of_entering_college" value="{{ old('year_of_entering_college', $member->year_of_entering_college) }}" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                            dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="sm:col-span-1">
                        <label for="year_of_entering_hmi" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Tahun Masuk HMI</label>
                        <input type="date" id="year_of_entering_hmi" name="year_of_entering_hmi" value="{{ old('year_of_entering_hmi', $member->year_of_entering_hmi) }}" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                            dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Alamat</label>
                        <input type="text" id="address" name="address" value="{{ old('address', $member->address) }}" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                            dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Status</label>
                        <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                                focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="pengurus" {{ old('status', $member->status) == 'pengurus' ? 'selected' : '' }}>Pengurus</option>
                            <option value="kader" {{ old('status', $member->status) == 'kader' ? 'selected' : '' }}>Kader</option>
                            <option value="senior" {{ old('status', $member->status) == 'senior' ? 'selected' : '' }}>Senior</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <img id='preview_img' src="{{ asset('storage/' . $member->image) }}" class="h-16 w-16 object-cover rounded-full" alt="Current profile photo" />
                        <label for="image" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Upload Foto</label>
                        <input type="file" id="image" name="image" accept="image/*" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                                focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('image')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-span-full sm:col-span-2 min-w-0">
                    <label for="training" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                        Training yang diikuti
                    </label>
                    <select id="training" name="training[]" multiple="multiple" size="5" 
                        class="js-example-basic-multiple bg-gray-50 border border-gray-300 text-gray-900 text-sm 
                               rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                               dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                               dark:focus:ring-blue-500 dark:focus:border-blue-500">
                         @foreach ($trainings as $training)
                            <option value="{{ $training->id }}" 
                                {{ in_array($training->id, $trainingsFollowedByMember->pluck('training_id')->toArray()) ? 'selected' : '' }}>
                                {{ $training->training_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="sm:col-span-2 mt-3 mb-3">
                    <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Media Sosial</label>
                    <div id="social-container">
                        @foreach ($member->sosmed as $index => $social)
                            <div class="flex space-x-2 mb-2 social-group">
                                <select name="sosmed[${index}][sosmed_id]" class="w-1/3 p-2 border rounded-lg">
                                    @foreach ($platforms as $platform)
                                        <option value="{{ $platform->id }}" {{ $platform->id == $social->sosmed_id ? 'selected' : '' }}>
                                            {{ $platform->platform_name }}
                                        </option>
                                    @endforeach
                                </select>
                                <input type="url" name="sosmed[${index}][link]" value="{{ $social->link }}" class="w-2/3 p-2 border rounded-lg">
                                <button type="button" class="remove-social text-red-600">Hapus</button>
                            </div>
                        @endforeach
                    </div>
                    <button type="button" id="add-social" class="bg-blue-600 text-white px-2 py-1 rounded mt-2">Tambah Media Sosial</button>
                </div>
                            
                <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded-lg cursor-pointer">Simpan</button>
                <a href="{{ url('/member') }}" class="bg-red-500 text-white px-4 py-2 rounded-lg cursor-pointer ml-3">Kembali</a>
        </div>
    </section>
    <script>
       document.getElementById('add-social').addEventListener('click', function () {
            let container = document.getElementById('social-container');
            let index = container.children.length; // Ambil jumlah elemen untuk index baru
            let newDiv = document.createElement('div');
            newDiv.classList.add('flex', 'space-x-2', 'mb-2', 'social-group');
            newDiv.innerHTML = `
                <select name="sosmed[${index}][sosmed_id]" class="w-1/3 p-2 border rounded-lg">
                    @foreach ($platforms as $platform)
                        <option value="{{ $platform->id }}">{{ $platform->platform_name }}</option>
                    @endforeach
                </select>
                <input type="url" name="sosmed[${index}][link]" class="w-2/3 p-2 border rounded-lg">
                <button type="button" class="remove-social text-red-600">Hapus</button>
            `;
            container.appendChild(newDiv);
        });

        document.addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-social')) {
                e.target.parentElement.remove();
            }
        });

    </script>
</x-layout>
