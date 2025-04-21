<x-layoutFe>
    <section class="bg-white dark:bg-gray-900 flex flex-col items-center w-full min-h-screen py-10 px-4 mt-10">
        <h1 class="mb-6 text-4xl font-extrabold tracking-tight leading-none text-gray-900 dark:text-white text-center">
          Pengurus
        </h1>
      
        <!-- Baris 1: Ketua Umum -->
        <div class="grid grid-cols-1 place-items-center w-full">
          @include('components.card', ['name' => 'Cahyan', 'position' => 'Ketua Umum'])
        </div>
      
        <!-- Baris 2: Sekum dan Bendum -->
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 gap-1 w-full mt-3 place-items-center">
            @include('components.card', ['name' => 'Ridwan', 'position' => 'Sekretaris Umum'])
            @include('components.card', ['name' => 'Titi', 'position' => 'Bendahara Umum'])
        </div>

      
        <!-- Baris 3: Ketua Bidang -->
        <div class="grid grid-cols-5 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5  w-full mt-6 place-items-center gap-1">
          @include('components.card', ['name' => 'Yon', 'position' => 'Ketua Bidang P3A'])
          @include('components.card', ['name' => 'Fatur', 'position' => 'Ketua Bidang PTKP'])
          @include('components.card', ['name' => 'Alfian', 'position' => 'Ketua Bidang KPP'])
          @include('components.card', ['name' => 'Mia', 'position' => 'Ketua Bidang PP'])
          @include('components.card', ['name' => 'Rahma', 'position' => 'Ketua Bidang KOMDIGI'])
        </div>
      
        <!-- Baris 4: Wakil Ketua Bidang -->
        <div class="grid grid-cols-5 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 w-full mt-6 place-items-center gap-1 mb-10">
          @include('components.card', ['name' => 'Aries', 'position' => 'Wakil Bidang P3A'])
          @include('components.card', ['name' => 'Andika', 'position' => 'Wakil Bidang PTKP'])
          @include('components.card', ['name' => 'Firhanudin', 'position' => 'Wakil Bidang KPP'])
          @include('components.card', ['name' => 'Merlyn', 'position' => 'Wakil Bidang PP'])
          @include('components.card', ['name' => 'Dimas', 'position' => 'Wakil Bidang KOMDIGI'])
        </div>

        <h1 class="mb-10 text-4xl font-extrabold tracking-tight leading-none text-gray-900 dark:text-white mt-10">
            Anggota
          </h1>
          
          <div class="grid grid-cols-12 gap-4 mb-10">
            @include('components.cardMember', ['name' => 'Dimas'])
            @include('components.cardMember', ['name' => 'Calista'])
            @include('components.cardMember', ['name' => 'Sarah'])
            @include('components.cardMember', ['name' => 'Bayu'])
            @include('components.cardMember', ['name' => 'Nina'])
            @include('components.cardMember', ['name' => 'Dimas'])
            @include('components.cardMember', ['name' => 'Calista'])
            @include('components.cardMember', ['name' => 'Sarah'])
            @include('components.cardMember', ['name' => 'Bayu'])
            @include('components.cardMember', ['name' => 'Nina'])
            @include('components.cardMember', ['name' => 'Dimas'])
            @include('components.cardMember', ['name' => 'Calista'])
            @include('components.cardMember', ['name' => 'Sarah'])
            @include('components.cardMember', ['name' => 'Bayu'])
            @include('components.cardMember', ['name' => 'Nina'])
            @include('components.cardMember', ['name' => 'Dimas'])
            @include('components.cardMember', ['name' => 'Calista'])
            @include('components.cardMember', ['name' => 'Sarah'])
            @include('components.cardMember', ['name' => 'Bayu'])
            @include('components.cardMember', ['name' => 'Nina'])
            {{-- Tambahkan lebih banyak anggota sesuai kebutuhan --}}
          </div>
          <h1 class="mb-10 text-4xl font-extrabold tracking-tight leading-none text-gray-900 dark:text-white mt-10">
            Alumni
          </h1>
          
          <div class="grid grid-cols-12 gap-4">
            @include('components.cardMember', ['name' => 'Dimas'])
            @include('components.cardMember', ['name' => 'Calista'])
            @include('components.cardMember', ['name' => 'Sarah'])
            @include('components.cardMember', ['name' => 'Bayu'])
            @include('components.cardMember', ['name' => 'Nina'])
            @include('components.cardMember', ['name' => 'Dimas'])
            @include('components.cardMember', ['name' => 'Calista'])
            @include('components.cardMember', ['name' => 'Sarah'])
            @include('components.cardMember', ['name' => 'Bayu'])
            @include('components.cardMember', ['name' => 'Nina'])
            @include('components.cardMember', ['name' => 'Dimas'])
            @include('components.cardMember', ['name' => 'Calista'])
            @include('components.cardMember', ['name' => 'Sarah'])
            @include('components.cardMember', ['name' => 'Bayu'])
            @include('components.cardMember', ['name' => 'Nina'])
            @include('components.cardMember', ['name' => 'Dimas'])
            @include('components.cardMember', ['name' => 'Calista'])
            @include('components.cardMember', ['name' => 'Sarah'])
            @include('components.cardMember', ['name' => 'Bayu'])
            @include('components.cardMember', ['name' => 'Nina'])
            {{-- Tambahkan lebih banyak anggota sesuai kebutuhan --}}
          </div>
      </section>
  </x-layoutFe>
  