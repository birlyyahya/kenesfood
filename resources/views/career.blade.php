<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <x-slot name="breadcrumb">
        {{ __('Career') }}
    </x-slot>

    <div class="mx-auto space-y-20 max-w-7xl">
        <div class="grid grid-cols-2 space-x-10">
            <div class="flex flex-col gap-3 py-10">
                <h1 class="text-4xl font-bold tracking-wide text-black">Lets Work With Kenes!</h1>
                <p class="text-lg text-black/70">Kami senang bekerja sama dengan Anda, dan mendapatkan pengalaman baru
                    saat bekerja bersama kami. Dengan kehadiran Anda, kami pasti akan menjadi lebih baik. Hubungi kami
                    melalui email untuk informasi lebih lanjut tentang karir.</p>
                <div class="flex flex-col mt-5 text-lg ">
                    <p>Kirimkan CV/resume atau hubungi </p>
                    <b>Kenes.hrd@gmail.com</b>
                </div>
            </div>
            <img src="{{ asset('storage/banner/karir.png') }}" alt="" class="w-full bg-no-repeat bg-cover">
        </div>
        <div x-data="{ selectedTab: 'apply' }" class="space-y-5 h-[120svh]">
            <div role="tablist" aria-label="tab options" @keydown.right.prevent="$focus.wrap().next()"
                @keydown.left.prevent="$focus.wrap().previous()"
                class="flex justify-center mx-auto overflow-y-hidden border-b border-gray-200 overf low-x-auto w-fit whitespace-nowrap dark:border-gray-700">
                <button @click="selectedTab = 'jobs'" :aria-selected="selectedTab === 'jobs'"
                    :tabindex="selectedTab === 'jobs' ? '0' : '-1'"
                    :class="selectedTab === 'jobs' ? 'border-csprimary text-csprimary border-b-4' :
                        'text-gray-700/70 border-b-4  '"
                    class="inline-flex items-center h-12 px-6 -mb-px text-2xl text-center bg-transparent sm:text-base dark:border-blue-400 dark:text-blue-300 whitespace-nowrap focus:outline-none"
                    type="button" role="tab" aria-controls="tabpaneljobs">
                    Jobs
                </button>
                <button @click="selectedTab = 'apply'" :aria-selected="selectedTab === 'apply'"
                    :tabindex="selectedTab === 'apply' ? '0' : '-1'"
                    :class="selectedTab === 'apply' ? 'border-csprimary text-csprimary border-b-4' :
                        'text-gray-700/70 border-b-4  '"
                    class="inline-flex items-center h-12 px-6 -mb-px text-2xl text-center bg-transparent sm:text-base dark:border-blue-400 dark:text-blue-300 whitespace-nowrap focus:outline-none"
                    type="button" role="tab" aria-controls="tabpanelapply">
                    Apply
                </button>

            </div>
            <div class="px-2 py-4 dark:text-neutral-300">
                <div x-show="selectedTab === 'apply'" id="tabpanelapply" role="tabpanel" aria-label="apply"
                    x-transition.duration.300ms class="space-y-2">
                    <form class="w-4/5 mx-auto">
                        <div class="grid grid-cols-1 gap-6 mt-4 ">
                            <div>
                                <label class="text-gray-700 dark:text-gray-200" for="fullname">Nama Lengkap</label>
                                <input id="fullname" type="text"
                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-400 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                            </div>

                            <div class="grid grid-cols-3 gap-5">
                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="tempatLahir">
                                        Tempat Lahir</label>
                                    <input id="tempatLahir" type="email"
                                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md broder-gray-400 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                </div>
                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="tanggalLahir">
                                        Tanggal Lahir</label>
                                    <input id="tanggalLahir" type="text"
                                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md broder-gray-400 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                </div>

                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="jenisKelamin">Jenis
                                        Kelamin</label>
                                    <select id="jenisKelamin"
                                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md broder-gray-400 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                        <option>Hay</option>
                                        <option>Hay</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-5">
                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Email
                                        Address</label>
                                    <input id="emailAddress" type="email"
                                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md broder-gray-400 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                </div>
                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="telp">Nomor Wa</label>
                                    <input id="telp" type="text"
                                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md broder-gray-400 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                </div>
                            </div>
                            <div>
                                <label class="text-gray-700 dark:text-gray-200" for="jenisKelamin">Jenis Kelamin</label>
                                <input id="jenisKelamin" type="text"
                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md broder-gray-400 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                            </div>
                            <div class="grid grid-cols-2 gap-5">
                                <div>
                                    <label for="file"
                                        class="block text-sm text-gray-500 dark:text-gray-300">Foto Pelamar</label>
                                    <label for="dropzone-file"
                                        class="flex flex-col items-center w-full p-5 mt-2 text-center bg-white border-2 border-gray-300 border-dashed cursor-pointer dark:bg-gray-900 dark:border-gray-700 rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-8 h-8 text-gray-500 dark:text-gray-400">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                        </svg>

                                        <h2 class="mt-1 font-medium tracking-wide text-gray-700 dark:text-gray-200">
                                            3x4 Photo</h2>

                                        <p class="mt-2 text-xs tracking-wide text-gray-500 dark:text-gray-400">Upload or
                                            darg & drop your file PNG, JPG or JPEG. </p>

                                        <input id="dropzone-file" type="file" class="hidden" />
                                    </label>
                                </div>
                                <div>
                                    <label for="file"
                                        class="block text-sm text-gray-500 dark:text-gray-300">CV / Resume</label>
                                    <label for="dropzone-file"
                                        class="flex flex-col items-center w-full p-5 mt-2 text-center bg-white border-2 border-gray-300 border-dashed cursor-pointer dark:bg-gray-900 dark:border-gray-700 rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-8 h-8 text-gray-500 dark:text-gray-400">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                        </svg>

                                        <h2 class="mt-1 font-medium tracking-wide text-gray-700 dark:text-gray-200">
                                            Upload CV</h2>

                                        <p class="mt-2 text-xs tracking-wide text-gray-500 dark:text-gray-400">Upload or
                                            darg & drop your file JPG, PNG, or PDF. </p>
                                        <input id="dropzone-file" type="file" class="hidden" />
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="flex justify-center mt-6">
                            <button
                                class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
                        </div>
                    </form>
                </div>
                <div x-show="selectedTab === 'jobs'" id="tabpaneljobs" role="tabpanel" aria-label="jobs"
                    class="space-y-5" x-transition.duration.300ms>
                    <div class="grid grid-cols-6 gap-5">
                        <img src="{{ asset('storage/banner/jobs.png') }}" alt="" class="w-full h-full">
                        <div class="flex flex-col col-span-4 gap-3">
                            <div class="flex flex-col">
                                <h1 class="text-2xl tracking-wide"><b>Operator produksi</b><span class="text-base"> -
                                        Yogyakarta</span></h1>
                                <p class="text-black/70">Service / Operasional</p>
                            </div>
                            <ul class="flex flex-wrap list-disc list-inside gap-x-8">
                                <li>Pria</li>
                                <li>Minimal Sarjana S1 / Fresh Graduate</li>
                                <li>Menguasai MS Office Min. Exel</li>
                                <li>Bersedia kerja Shift</li>
                                <li>Dapat berkomunikasi dengan baik...</li>
                                <li>Memiliki semangat kerja yang tinggi, dan....</li>
                            </ul>
                            <p class="text-sm text-neutral-600">Friday, 2021-12-31 10:16:44</p>
                        </div>
                        <div class="flex flex-col justify-end">
                            <button
                                class="px-6 py-3 text-base font-medium duration-300 rounded-lg bg-csteritery hover:bg-csorange">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
