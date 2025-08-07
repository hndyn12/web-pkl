@props(['galeries' => \App\Models\Galery::all()])

<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Galeri Kegiatan</h2>
            <div class="w-20 h-1 bg-orange-400 mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($galeries as $galery)
                <div class="gallery-item rounded-lg overflow-hidden shadow-md">
                    <img src="{{ asset('storage/' . $galery->galery_olahraga) }}" alt="Galeri Olahraga"
                        class="w-full h-64 object-cover">
                </div>
            @endforeach
        </div>
    </div>
</section>
