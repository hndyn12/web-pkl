<nav class="bg-gray-800 border-b-4 border-orange-500" 
    x-data="{
        isOpen: false, 
        isProfileOpen: false, 
        isBidangOpen: false, 
        isReportOpen: false, 
        isHukumOpen: false, 
        isSubKeuangan: false, 
        isSubKinerja: false, 
        isSubPerencanaan: false 
    }"
    @click.away="isOpen = false; isProfileOpen = false; isBidangOpen = false; isReportOpen = false; isHukumOpen = false; isSubKeuangan = false; isSubKinerja = false; isSubPerencanaan = false"
>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <!-- Desktop Menu -->
                <div class="hidden md:block">
                    <div class="ml-5 flex items-baseline space-x-4">
                        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                        <div>
                            <button id="menu-button"
                                @click="isProfileOpen = !isProfileOpen; isBidangOpen = false; isReportOpen = false; isHukumOpen = false; isSubKeuangan = false; isSubKinerja = false; isSubPerencanaan = false"
                                type="button" aria-expanded="true" aria-haspopup="true"
                                class="{{ request()->is('sekretariat', 'dasarhukum', 'datakepegawaian', 'programunggulan') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} inline-flex w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-sm font-medium">
                                Profil
                                <svg viewBox="0 0 20 20" fill="currentColor" class="-mr-1 size-5 text-gray-400">
                                    <path
                                        d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" fill-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="isProfileOpen" x-transition:enter="transition ease-out duration-100 transform"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75 transform"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95" role="menu" tabindex="-1"
                                aria-labelledby="menu-button" aria-orientation="vertical"
                                class="absolute left-57 z-10 mt-2 w-56 origin-top-left rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-hidden">
                                <div role="none" class="py-1">
                                    <a id="menu-item-0" role="menuitem" href="/sekretariat" tabindex="-1"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-700 hover:text-white">Sekretariat</a>
                                    <a id="menu-item-1" role="menuitem" href="/dasarhukum" tabindex="-1"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-700 hover:text-white">Dasar
                                        Hukum</a>
                                    <a id="menu-item-2" role="menuitem" href="/datakepegawaian" tabindex="-1"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-700 hover:text-white">Data
                                        Kepegawaian</a>
                                    <a id="menu-item-3" role="menuitem" href="/programunggulan" tabindex="-1"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-700 hover:text-white">Program
                                        Kegiatan</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button id="menu-button"
                                @click="isBidangOpen = !isBidangOpen; isProfileOpen = false; isReportOpen = false; isHukumOpen = false; isSubKeuangan = false; isSubKinerja = false; isSubPerencanaan = false"
                                type="button" aria-expanded="true" aria-haspopup="true"
                                class="inline-flex w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                                Bidang
                                <svg viewBox="0 0 20 20" fill="currentColor" class="-mr-1 size-5 text-gray-400">
                                    <path
                                        d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" fill-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="isBidangOpen" x-transition:enter="transition ease-out duration-100 transform"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75 transform"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95" role="menu" tabindex="-1"
                                aria-labelledby="menu-button" aria-orientation="vertical"
                                class="absolute left-80 z-10 mt-2 w-56 origin-top-left rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-hidden">
                                <div role="none" class="py-1">
                                    <a id="menu-item-0" role="menuitem" href="/kepemudaan" tabindex="-1"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-700 hover:text-white">
                                        Kepemudaan</a>
                                    <a id="menu-item-1" role="menuitem" href="/olahraga" tabindex="-1"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-700 hover:text-white">
                                        Olahraga</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button id="menu-button"
                                @click="isReportOpen= !isReportOpen; isProfileOpen = false; isBidangOpen = false; isHukumOpen = false; isSubKeuangan = false; isSubKinerja = false; isSubPerencanaan = false"
                                type="button" aria-expanded="true" aria-haspopup="true"
                                class="inline-flex w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                                Laporan
                                <svg viewBox="0 0 20 20" fill="currentColor" class="-mr-1 size-5 text-gray-400">
                                    <path
                                        d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" fill-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="isReportOpen" x-transition:enter="transition ease-out duration-100 transform"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75 transform"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95" role="menu" tabindex="-1"
                                aria-labelledby="menu-button" aria-orientation="vertical"
                                class="absolute left-103 z-10 mt-2 w-56 origin-top-left rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-hidden">
                                <div role="none" class="py-1">
                                    <div>
                                        <button id="menu-button"
                                            @click="isSubKeuangan = !isSubKeuangan; isHukumOpen = false; isProfileOpen = false; isBidangOpen = false; isSubKinerja = false; isSubPerencanaan = false"
                                            type="button" aria-expanded="true" aria-haspopup="true"
                                            class="{{ text-gray-700 hover:bg-gray-700 hover:text-white inline-flex w-full gap-x-1.5 rounded-md px-3 py-2 text-sm">
                                            Keuangan
                                            <svg width="18" height="24" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                                                    clip-rule="evenodd" fill-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <div x-show="isSubKeuangan"
                                            x-transition:enter="transition ease-out duration-100 transform"
                                            x-transition:enter-start="opacity-0 scale-95"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-75 transform"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-95" role="menu" tabindex="-1"
                                            aria-labelledby="menu-button" aria-orientation="vertical"
                                            class="absolute left-57 top-0 z-10 mt-1 w-56 origin-top-left rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-hidden">
                                            <div role="none" class="py-1">
                                                <a id="menu-item-0" role="menuitem" href="/sekretariat"
                                                    tabindex="-1"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-700 hover:text-white">CALK</a>
                                                <a id="menu-item-1" role="menuitem" href="/dasarhukum"
                                                    tabindex="-1"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-700 hover:text-white">Data
                                                    Aset</a>
                                                <a id="menu-item-2" role="menuitem" href="#" tabindex="-1"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-700 hover:text-white">Realisasi
                                                    Anggaran</a>
                                                <a id="menu-item-3" role="menuitem" href="#" tabindex="-1"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-700 hover:text-white">RKPD</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button id="menu-button"
                                            @click="isSubKinerja = !isSubKinerja; isHukumOpen = false; isProfileOpen = false; isBidangOpen = false; isSubKeuangan = false; isSubPerencanaan = false"
                                            type="button" aria-expanded="true" aria-haspopup="true"
                                            class="{{ text-gray-700 hover:bg-gray-700 hover:text-white inline-flex w-full gap-x-1.5 rounded-md px-3 py-2 text-sm">
                                            Kinerja
                                            <svg width="18" height="24" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                                                    clip-rule="evenodd" fill-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <div x-show="isSubKinerja"
                                            x-transition:enter="transition ease-out duration-100 transform"
                                            x-transition:enter-start="opacity-0 scale-95"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-75 transform"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-95" role="menu" tabindex="-1"
                                            aria-labelledby="menu-button" aria-orientation="vertical"
                                            class="absolute left-57 top-10 z-10 mt-1 w-56 origin-top-left rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-hidden">
                                            <div role="none" class="py-1">
                                                <a id="menu-item-0" role="menuitem" href="/sekretariat"
                                                    tabindex="-1"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-700 hover:text-white">LKPJ</a>
                                                <a id="menu-item-1" role="menuitem" href="/dasarhukum"
                                                    tabindex="-1"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-700 hover:text-white">Sakip</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button id="menu-button"
                                            @click="isSubPerencanaan = !isSubPerencanaan; isHukumOpen = false; isProfileOpen = false; isBidangOpen = false; isSubKeuangan = false; isSubKinerja = false"
                                            type="button" aria-expanded="true" aria-haspopup="true"
                                            class="{{ text-gray-700 hover:bg-gray-700 hover:text-white inline-flex w-full gap-x-1.5 rounded-md px-3 py-2 text-sm">
                                            Perencanaan
                                            <svg width="18" height="24" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                                                    clip-rule="evenodd" fill-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <div x-show="isSubPerencanaan"
                                            x-transition:enter="transition ease-out duration-100 transform"
                                            x-transition:enter-start="opacity-0 scale-95"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-75 transform"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-95" role="menu" tabindex="-1"
                                            aria-labelledby="menu-button" aria-orientation="vertical"
                                            class="absolute left-57 top-20 z-10 mt-1 w-56 origin-top-left rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-hidden">
                                            <div role="none" class="py-1">
                                                <a id="menu-item-0" role="menuitem" href="/sekretariat"
                                                    tabindex="-1"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-700 hover:text-white">Renja</a>
                                                <a id="menu-item-1" role="menuitem" href="/dasarhukum"
                                                    tabindex="-1"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-700 hover:text-white">Renstra</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <x-nav-link href="berita" :active="request()->is('berita')">Berita</x-nav-link>
                        <x-nav-link href="ppid" :active="request()->is('ppid')">PPID</x-nav-link>
                        <div>
                            <button id="menu-button"
                                @click="isHukumOpen = !isHukumOpen; isProfileOpen = false; isBidangOpen = false; isReportOpen = false; isSubKeuangan = false; isSubKinerja = false; isSubPerencanaan = false"
                                type="button" aria-expanded="true" aria-haspopup="true"
                                class="inline-flex w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                                Produk Hukum
                                <svg viewBox="0 0 20 20" fill="currentColor" class="-mr-1 size-5 text-gray-400">
                                    <path
                                        d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" fill-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="isHukumOpen" x-transition:enter="transition ease-out duration-100 transform"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75 transform"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95" role="menu" tabindex="-1"
                                aria-labelledby="menu-button" aria-orientation="vertical"
                                class="absolute left-169 z-10 mt-2 w-56 origin-top-left rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-hidden">
                                <div role="none" class="py-1">
                                    <a id="menu-item-0" role="menuitem" href="#" tabindex="-1"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-700 hover:text-white">Perbup</a>
                                    <a id="menu-item-1" role="menuitem" href="#" tabindex="-1"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-700 hover:text-white">Perda</a>
                                </div>
                            </div>
                        </div>
                        <x-nav-link href="kontakkami" :active="request()->is('kontakkami')">Kontak Kami</x-nav-link>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Hamburger Button -->
        <div class="-mr-2 flex md:hidden">
            <button type="button" aria-controls="mobile-menu" aria-expanded="false"
                class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden"
                @click="isOpen = !isOpen">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                    class="block size-6" x-show="!isOpen">
                    <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                    class="block size-6" x-show="isOpen">
                    <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div id="mobile-menu" class="md:hidden" x-show="isOpen" x-transition>
            <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                <a href="/" aria-current="page"
                    class="block rounded-md {{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 text-base font-medium">Home</a>
                <button @click="isProfileOpen = !isProfileOpen; isBidangOpen = false; isReportOpen = false; isHukumOpen = false;"
                    class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                    Profil
                </button>
                <div x-show="isProfileOpen" class="pl-4" x-transition>
                    <a href="/sekretariat"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Sekretariat</a>
                    <a href="/dasarhukum"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Dasar Hukum</a>
                    <a href="/datakepegawaian"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Data Kepegawaian</a>
                    <a href="/programunggulan"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Program Kegiatan</a>
                </div>
                <button @click="isBidangOpen = !isBidangOpen; isProfileOpen = false; isReportOpen = false; isHukumOpen = false;"
                    class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                    Bidang
                </button>
                <div x-show="isBidangOpen" class="pl-4" x-transition>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Bidang Kepemudaan</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Bidang Olahraga</a>
                </div>
                <button @click="isReportOpen = !isReportOpen; isProfileOpen = false; isBidangOpen = false; isHukumOpen = false;"
                    class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                    Laporan
                </button>
                <div x-show="isReportOpen" class="pl-4" x-transition>
                    <button @click="isSubKeuangan = !isSubKeuangan; isSubKinerja = false; isSubPerencanaan = false;"
                        class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                        Keuangan
                    </button>
                    <div x-show="isSubKeuangan" class="pl-4" x-transition>
                        <a href="/sekretariat"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">CALK</a>
                        <a href="/dasarhukum"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Data Aset</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Realisasi Anggaran</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">RKPD</a>
                    </div>
                    <button @click="isSubKinerja = !isSubKinerja; isSubKeuangan = false; isSubPerencanaan = false;"
                        class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                        Kinerja
                    </button>
                    <div x-show="isSubKinerja" class="pl-4" x-transition>
                        <a href="/sekretariat"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">LKPJ</a>
                        <a href="/dasarhukum"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Sakip</a>
                    </div>
                    <button @click="isSubPerencanaan = !isSubPerencanaan; isSubKeuangan = false; isSubKinerja = false;"
                        class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                        Perencanaan
                    </button>
                    <div x-show="isSubPerencanaan" class="pl-4" x-transition>
                        <a href="/sekretariat"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Renja</a>
                        <a href="/dasarhukum"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Renstra</a>
                    </div>
                </div>
                <button @click="isHukumOpen = !isHukumOpen; isProfileOpen = false; isBidangOpen = false; isReportOpen = false;"
                    class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                    Produk Hukum
                </button>
                <div x-show="isHukumOpen" class="pl-4" x-transition>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Perbup</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Perda</a>
                </div>
                <a href="/berita"
                    class="block rounded-md {{ request()->is('berita') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 text-base font-medium">Berita</a>
                <a href="/ppid"
                    class="block rounded-md {{ request()->is('ppid') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 text-base font-medium">PPID</a>
                <a href="/kontakkami"
                    class="block rounded-md {{ request()->is('kontakkami') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 text-base font-medium">Kontak Kami</a>
            </div>
        </div>
    </div>
</nav>
