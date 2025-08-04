<!-- Tentang Kami -->
<section id="about" class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Tentang Dinas Pemuda dan Olahraga</h2>
            <div class="w-20 h-1 bg-yellow-400 mx-auto"></div>
        </div>

        <div class="flex flex-col md:flex-row items-center gap-8">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/c3e51b29-58bd-480f-9659-c4541ec0f080.png"
                    alt="Gedung kantor Dinas Pemuda dan Olahraga Kabupaten/Kota dengan taman depan yang tertata rapi"
                    class="rounded-lg shadow-xl w-full">
            </div>
            <div class="md:w-1/2">
                <h3 class="text-2xl font-semibold text-gray-800 mb-1">Visi</h3>
                @foreach (\App\Models\Profil::all() as $visi)
                    <p class="text-gray-600 mb-4">{{ $visi->visi }}</p>
                @endforeach
                <h3 class="text-2xl font-semibold text-gray-800 mb-1">Misi</h3>
                <div class="space-y-1">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-1 bg-blue-100 rounded-full p-2 text-blue-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            @foreach (\App\Models\Profil::all() as $misi)
                                <p class="text-gray-600 mb-4">{{ $misi->misi }}</p>
                            @endforeach
                        </div>
                    </div>

</section>
