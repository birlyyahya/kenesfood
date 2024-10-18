<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <x-slot name="breadcrumb">
        {{ __('FAQ') }}
    </x-slot>

    <div class="mx-auto mb-32 max-w-7xl h-[100svh]">
        <div x-data="{ activeTab: 1, }" class="grid grid-cols-1">
            <div class="flex flex-col items-start gap-5 tabs">
                <div class="flex flex-col items-start w-full gap-3 py-2">
                    <div class="flex justify-between w-full p-2 border-b-2">
                        <button class="text-lg font-medium tab-header" :class="{ 'active': activeTab === 1 }"
                            @click="activeTab = 1">Apakah
                            Halal?</button>
                        <svg xmlns="http://www.w3.org/2000/svg" class="self-end h-8 duration-300"
                            :class="activeTab == '1' ? 'rotate-90' : ''" viewBox="0 0 12 24">
                            <defs>
                                <path id="weuiArrowOutlined0" fill="black"
                                    d="m7.588 12.43l-1.061 1.06L.748 7.713a.996.996 0 0 1 0-1.413L6.527.52l1.06 1.06l-5.424 5.425z" />
                            </defs>
                            <use fill-rule="evenodd" href="#weuiArrowOutlined0" transform="rotate(-180 5.02 9.505)" />
                        </svg>
                    </div>
                    <div class="tab-contents">
                        <div x-show="activeTab === 1" x-transition.duration.300ms class="tab-content active">
                            <p>Roti Kenes telah mendapatkan Sertifikat Halal dari LPPOM MUI Pusat dengan no. 12160003080621 yang berlaku di seluruh outlet Holland Bakery secara Nasional dengan status SJH "A" (Excellent) selama 2 kali periode audit secara berturut-turut.</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start w-full gap-3 py-2">
                    <div class="flex justify-between w-full p-2 border-b-2">
                        <button role="tab" aria-controls="tab2" class="text-lg font-medium tab-header"
                            :class="{ 'active': activeTab === 2 }" @click="activeTab = 2">Cara
                            Order</button>
                        <svg xmlns="http://www.w3.org/2000/svg" class="self-end h-8 duration-300"
                            :class="activeTab == '2' ? 'rotate-90' : ''" viewBox="0 0 12 24">
                            <defs>
                                <path id="weuiArrowOutlined0" fill="black"
                                    d="m7.588 12.43l-1.061 1.06L.748 7.713a.996.996 0 0 1 0-1.413L6.527.52l1.06 1.06l-5.424 5.425z" />
                            </defs>
                            <use fill-rule="evenodd" href="#weuiArrowOutlined0" transform="rotate(-180 5.02 9.505)" />
                        </svg>
                    </div>
                    <div class="tab-contents">
                        <div x-show="activeTab === 2" x-transition.duration.300ms class="tab-content active">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed, fuga velit omnis nam sequi impedit error voluptatibus accusantium et facere voluptates. Ullam assumenda aut sit harum eos mollitia ratione error.</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start w-full gap-3 py-2">
                    <div class="flex justify-between w-full p-2 border-b-2">
                        <button class="text-lg font-medium tab-header" aria-controls="tab3" role="tab"
                            :class="{ 'active': activeTab === 3 }" @click="activeTab = 3">Bagaimana
                            Cara</button>
                        <svg xmlns="http://www.w3.org/2000/svg" class="self-end h-8 duration-300"
                            :class="activeTab == '3' ? 'rotate-90' : ''" viewBox="0 0 12 24">
                            <defs>
                                <path id="weuiArrowOutlined0" fill="black"
                                    d="m7.588 12.43l-1.061 1.06L.748 7.713a.996.996 0 0 1 0-1.413L6.527.52l1.06 1.06l-5.424 5.425z" />
                            </defs>
                            <use fill-rule="evenodd" href="#weuiArrowOutlined0" transform="rotate(-180 5.02 9.505)" />
                        </svg>
                    </div>
                    <div class="tab-contents">
                        <div x-show="activeTab === 3" x-transition.duration.300ms class="tab-content active">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eum, nihil quas a quod molestiae mollitia quam! Obcaecati, quos maxime.</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start w-full gap-3 py-2">
                    <div class="flex justify-between w-full p-2 border-b-2">
                        <button class="text-lg font-medium tab-header" :class="{ 'active': activeTab === 4 }"
                            @click="activeTab = 4">Metode
                            Pembayaran</button>
                        <svg xmlns="http://www.w3.org/2000/svg" class="self-end h-8 duration-300"
                            :class="activeTab == '4' ? 'rotate-90' : ''" viewBox="0 0 12 24">
                            <defs>
                                <path id="weuiArrowOutlined0" fill="black"
                                    d="m7.588 12.43l-1.061 1.06L.748 7.713a.996.996 0 0 1 0-1.413L6.527.52l1.06 1.06l-5.424 5.425z" />
                            </defs>
                            <use fill-rule="evenodd" href="#weuiArrowOutlined0" transform="rotate(-180 5.02 9.505)" />
                        </svg>
                    </div>
                    <div class="tab-contents">
                        <div x-show="activeTab === 4" x-transition.duration.300ms class="tab-content active">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam, laborum?</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start w-full gap-3 py-2">
                    <div class="flex justify-between w-full p-2 border-b-2">
                        <button class="text-lg font-medium tab-header" :class="{ 'active': activeTab === 5 }"
                            @click="activeTab = 5">Pengiriman
                            /
                            Pengantaran</button>
                        <svg xmlns="http://www.w3.org/2000/svg" class="self-end h-8 duration-300"
                            :class="activeTab == '5' ? 'rotate-90' : ''" viewBox="0 0 12 24">
                            <defs>
                                <path id="weuiArrowOutlined0" fill="black"
                                    d="m7.588 12.43l-1.061 1.06L.748 7.713a.996.996 0 0 1 0-1.413L6.527.52l1.06 1.06l-5.424 5.425z" />
                            </defs>
                            <use fill-rule="evenodd" href="#weuiArrowOutlined0" transform="rotate(-180 5.02 9.505)" />
                        </svg>
                    </div>
                    <div class="tab-contents">
                        <div x-show="activeTab === 5" x-transition.duration.300ms class="tab-content active">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut expedita quis beatae. Adipisci temporibus molestiae ea a ut. Reprehenderit magnam debitis, delectus provident vitae ipsam?</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start w-full gap-3 py-2">
                    <div class="flex justify-between w-full p-2 border-b-2">
                        <button class="text-lg font-medium tab-header" :class="{ 'active': activeTab === 6 }"
                            @click="activeTab = 6">Pickup</button>
                        <svg xmlns="http://www.w3.org/2000/svg" class="self-end h-8 duration-300"
                            :class="activeTab == '6' ? 'rotate-90' : ''" viewBox="0 0 12 24">
                            <defs>
                                <path id="weuiArrowOutlined0" fill="black"
                                    d="m7.588 12.43l-1.061 1.06L.748 7.713a.996.996 0 0 1 0-1.413L6.527.52l1.06 1.06l-5.424 5.425z" />
                            </defs>
                            <use fill-rule="evenodd" href="#weuiArrowOutlined0" transform="rotate(-180 5.02 9.505)" />
                        </svg>
                    </div>
                    <div class="tab-contents">
                        <div x-show="activeTab === 6 " x-transition.duration.300ms class="tab-content active">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus beatae, dolore harum nisi unde culpa magni id exercitationem doloremque sed eius nam dicta officia vero ipsam tempora voluptas perspiciatis dolores praesentium accusantium dolorum sit natus alias. Recusandae, rerum ullam praesentium repudiandae, ex architecto distinctio atque cum reiciendis mollitia a at.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
