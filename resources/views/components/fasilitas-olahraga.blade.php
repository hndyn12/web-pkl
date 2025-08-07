@props(['fasilitas' => \App\Models\Fasilitas::all()])

<section id="programs" class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Fasilitas</h2>
            <div class="w-20 h-1 bg-orange-400 mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach ($fasilitas as $fasilitas)
                <div <div
                    class="bg-white rounded-xl border border-white hover:shadow-lg active:shadow-xl hover:scale-[1.04] transition-all duration-300 overflow-hidden h-full flex flex-col cursor-pointer">

                    <div class="h-48 overflow-hidden flex items-center justify-center bg-gray-100">
                        <img src="{{ asset('storage/' . $fasilitas->gambar) }}" alt=""
                            class="max-h-full max-w-full object-contain">
                    </div>
                    <div class="p-6 flex flex-col justify-between flex-grow">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">
                                {{ $fasilitas->nama_fasilitas }}
                            </h3>
                            <p class="text-gray-600 min-h-[4rem]">
                                {{ Str::limit(strip_tags($fasilitas->lokasi), 100) }}
                            </p>
                            <div class="flex justify-between items-center mt-auto">
                                <a href="{{ $fasilitas->link_maps }}"
                                    class="text-blue-600 hover:text-yellow-400 font-medium">Klik untuk melihat
                                    lokasi</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{ $slot }}
    </div>
</section>
