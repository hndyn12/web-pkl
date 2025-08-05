<!-- Program Unggulan -->
<section id="programs" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Program Unggulan</h2>
            <div class="w-20 h-1 bg-yellow-400 mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach (\App\Models\Activity::all() as $activity)
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('storage/' . $activity->gambar) }}" alt=""
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $activity->judul }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit(strip_tags($activity->deskripsi), 100) }}</p>
                        <div class="flex justify-between items-center">
                            <span
                                class="text-sm bg-blue-100 text-blue-800 px-3 py-1 rounded-full">{{ $activity->kategori->jenis_kegiatan }}
                            </span>
                            <button class="text-blue-600 hover:text-yellow-400 font-medium">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $slot }}
</section>
