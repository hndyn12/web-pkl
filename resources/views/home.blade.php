<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Hero Section -->
    <section id="home" class="relative bg-gray-700 text-white py-20">
        <div class="absolute inset-0 overflow-hidden">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/653e6dd1-4ac6-4564-b765-f26a85d3692c.png"
                alt="Kelompok pemuda sedang melakukan aktivitas olahraga lapangan di taman kota dengan latar belakang panorama"
                class="w-full h-full object-cover opacity-20">
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-2xl mx-auto text-center fade-in">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Membangun Pemuda Berprestasi dan Berkarakter</h2>
                <p class="text-lg md:text-xl mb-8">Mengembangkan potensi pemuda dan meningkatkan prestasi olahraga daerah
                    melalui berbagai program berkualitas.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#programs"
                        class="bg-white text-gray-600 hover:bg-yellow-500 hover:text-white px-6 py-3 rounded-lg font-medium transition-all shadow-lg">Lihat
                        Program</a>
                    <a href="#contact"
                        class="border-2 border-white hover:bg-yellow-500 hover:text-gray-700 hover:border-yellow-500 px-6 py-3 rounded-lg font-medium transition-all">Hubungi
                        Kami</a>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-white">
        <x-profil class="bg-white"></x-profil>
    </div>

    <x-kepegawaian></x-kepegawaian>

    <x-program-unggulan>
        <x-button-link>Lihat Semua Program</x-button-link>
    </x-program-unggulan>

    <x-berita>
        <div class="mt-12 text-center">
            <a href="/berita"
                class="inline-block border border-gray-600 hover:border-yellow-500 text-gray-600 hover:bg-yellow-400 hover:text-white px-6 py-3 rounded-lg font-medium transition-all shadow-lg">Arsip
                Berita</a>
        </div>
    </x-berita>

    <x-footer></x-footer>

</x-layout>
