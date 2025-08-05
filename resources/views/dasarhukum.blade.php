<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section id="contact" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 flex flex-col items-center justify-center min-h-[70vh]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">{{ $title }}</h2>
                <div class="w-20 h-1 bg-yellow-400 mx-auto"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Dokumen hukum yang menjadi dasar pembentukan serta landasan kegiatan
                    Dinas Pemuda dan Olahraga Kabupaten/Kota Anda
                </p>
            </div>
            <!-- Regulation Sections -->
            <div class="flex justify-center w-full">
                <div class="w-full max-w-[800px]">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <div class="bg-orange-600 px-6 py-4">
                            <h2 class="text-xl font-bold text-white flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                Peraturan Daerah
                            </h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-6">
                                <div
                                    class="regulation-card bg-gray-50 p-5 rounded-lg border border-gray-200 transition-all duration-300">
                                    <h3 class="text-lg font-semibold text-blue-700 flex items-center">
                                        <span
                                            class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">PERBUP
                                            TAHUN 2022</span>
                                        Peraturan Bupati Blitar No 116 Tahun 2022
                                    </h3>
                                    <p class="text-gray-600 mt-2 text-left">Tentang Kedudukan, Susunan Organisasi,
                                        Tugas dan Fungsi,
                                        serta tata kerja Dinas Kepemudaan dan Olahraga Kabupaten Blitar</p>
                                    <div class="mt-3 flex items-center justify-start text-sm text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        Diundangkan 20 September 2022
                                    </div>
                                    <div class="mt-3 flex justify-start space-x-3">
                                        <a href="{{ asset('dokumen/PERBUP 116 TAHUN 2022 TENTANG SOTK DINAS KEPEMUDAAN DAN OLAHRAGA.pdf') }}"
                                            class="text-blue-600 hover:text-blue-800 text-sm font-medium inline-flex items-center"
                                            target="_blank" rel="noopener">
                                            Baca Dokumen
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="text-gray-500 hover:text-gray-700 text-sm font-medium inline-flex items-center">
                                            <span class="tooltip-container relative">
                                                Info Singkat
                                                <div class="tooltip">
                                                    UU yang mengatur tentang Dinas Kepemudaan dan Olahraga Kabupaten
                                                    Blitar
                                                </div>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer></x-footer>
</x-layout>
