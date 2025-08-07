<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Hero Section -->
    <section id="home" class="relative bg-gray-700 text-white py-20">
        <div class="absolute inset-0 overflow-hidden">
            <img src="image\CVM4sJdIsQEq0UCCVMukpOZszIcBFRQGmuYtJ82AzxbQ.webp"
                alt="Kelompok pemuda sedang melakukan aktivitas olahraga lapangan di taman kota dengan latar belakang panorama"
                class="w-full h-full object-cover opacity-20">
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-2xl mx-auto text-center fade-in">
                <h2 class="text-4xl md:text-4xl font-bold mb-4">BIDANG OLAHRAGA DISPORA</h2>
                <p class="text-lg md:text-xl mb-8">Membangun masyarakat sehat dan berprestasi melalui pengembangan
                    olahraga di seluruh lapisan masyarakat.</p>
            </div>
        </div>
    </section>
    <x-fasilitas-olahraga></x-fasilitas-olahraga>
    <x-galeryolahraga></x-galeryolahraga>
    <x-footer></x-footer>
</x-layout>
