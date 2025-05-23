<?php
use Carbon\Carbon;
$icon = [
    'instagram' => '<svg class="w-6 h-6 text-red-400 dark:text-white" aria-hidden="true" 
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                    </svg>',
    'linkedin' => '<svg class="lg:w-6 lg:h-6 w-4 h-4 text-blue-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
                            clip-rule="evenodd" />
                        <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                    </svg>',
    'facebook' =>  '<svg class="lg:w-6 lg:h-6 w-4 h-4 text-blue-700" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                            clip-rule="evenodd" />
                    </svg>',
    'twitter' =>    '<svg class="lg:w-6 lg:h-6 w-4 h-4 text-gray-900" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z" />
                    </svg>',
    'youtube' =>    '<svg class="lg:w-6 lg:h-6 w-4 h-4 text-red-600" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                            clip-rule="evenodd" />
                    </svg>'
];
?>
<x-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-4xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Lihat Anggota</h2>
            <section class="w-full overflow-hidden dark:bg-gray-900">
                <div class="flex flex-col">
                    <!-- Cover Image -->
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw5fHxjb3ZlcnxlbnwwfDB8fHwxNzEwNzQxNzY0fDA&ixlib=rb-4.0.3&q=80&w=1080" alt="User Cover"
                            class="w-full xl:h-[20rem] lg:h-[18rem] md:h-[16rem] sm:h-[14rem] h-[11rem]" />
            
                    <!-- Profile Image -->
                    <div class="sm:w-[80%] w-[90%] mx-auto flex">
                        <img src="{{ asset('storage/' . $member->image) }}" alt="User Profile"
                                class="rounded-md lg:w-[12rem] lg:h-[12rem] md:w-[10rem] md:h-[10rem] sm:w-[8rem] sm:h-[8rem] w-[7rem] h-[7rem] outline outline-2 outline-offset-2 outline-blue-500 relative lg:bottom-[5rem] sm:bottom-[4rem] bottom-[3rem]" />
            
                        <!-- FullName -->
                        <h1
                            class="w-full text-left my-4 sm:mx-4 pl-4 text-gray-800 dark:text-white lg:text-4xl md:text-3xl sm:text-3xl text-xl font-serif">
                            {{ $member->name }}</h1>
            
                    </div>
            
                    <div
                        class="xl:w-[80%] lg:w-[90%] md:w-[90%] sm:w-[92%] w-[90%] mx-auto flex flex-col gap-4 items-center relative lg:-top-8 md:-top-6 -top-4">
                    
            
                        <!-- Detail -->
                        <div class="w-full my-auto py-6 flex flex-col justify-center gap-2">
                            <div class="w-full flex sm:flex-row flex-col gap-2 justify-center">
                                <div class="w-full">
                                    <dl class="text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                                
                                        <div class="flex flex-col py-3">
                                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Tanggal Lahir</dt>
                                            <dd class="text-lg font-semibold">{{ $member->date_of_birth }}</dd>
                                        </div>
                                        <div class="flex flex-col py-3">
                                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Jenis Kelamin</dt>
                                            <dd class="text-lg font-semibold">{{ ($member->gender == 'l') ? 'Laki-Laki' : 'Prempuan'  }}</dd>
                                        </div>
                                        <div class="flex flex-col py-3">
                                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Nomer Hp</dt>
                                            <dd class="text-lg font-semibold">{{ $member->phone_number }}</dd>
                                        </div>
                                        <div class="flex flex-col py-3">
                                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Alamat</dt>
                                            <dd class="text-lg font-semibold">{{ $member->address }}</dd>
                                        </div>
                                    </dl>
                                </div>
                                <div class="w-full">
                                    <dl class="text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                                        <div class="flex flex-col pb-3">
                                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Status</dt>
                                            <dd class="text-lg font-semibold">{{ Str::ucfirst($member->status) }}</dd>
                                        </div>
                                        <div class="flex flex-col pt-3">
                                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Tahun Masuk Kuliah</dt>
                                            <dd class="text-lg font-semibold">{{  Carbon::parse($member->year_of_entering_college)->year; }}</dd>
                                        </div>
                                        <div class="flex flex-col pt-3">
                                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Tahun Masuk HMI</dt>
                                            <dd class="text-lg font-semibold">{{  Carbon::parse($member->year_of_entering_hmi)->year; }}</dd>
                                        </div>
            
                                        <div class="flex flex-col pt-3">
                                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Training yang diikuti</dt>
                                            <dd class="text-lg">
                                                <ul class="list-decimal ml-5">
                                                    @foreach ($trainings as $training)
                                                        @if (in_array($training->id, $trainingsFollowedByMember->pluck('training_id')->toArray()))
                                                            <li>{{ $training->training_name }}</li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </dd>
                                        </div>
                                        
                                    </dl>
                                </div>
                            </div>
                        </div>
            
                        <!-- Social Links -->
                        <div
                            class="fixed right-2 bottom-20 flex flex-col rounded-sm bg-gray-200 text-gray-500 dark:bg-gray-200/80 dark:text-gray-700 hover:text-gray-600 hover:dark:text-gray-400">
                            @foreach ($member->sosmed as $social) 
                                @php
                                    $platform = $platforms->firstWhere('id', $social->sosmed_id);
                                @endphp
                                @if ($platform)
                                    <a href="{{ $social->link }}">
                                        <div class="p-2 hover:text-primary hover:dark:text-primary">
                                            {!! $icon[$platform->platform_name] ?? '' !!}
                                        </div>
                                    </a>
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</x-layout>
