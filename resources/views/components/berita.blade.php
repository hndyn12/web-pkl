@props(['news' => \App\Models\News::all()])
<!-- Berita Terkini -->
<section id="programs" class="py-16 bg-white-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Berita</h2>
            <div class="w-20 h-1 bg-yellow-400 mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($news as $item)
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt=""
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <a href="/berita/{{ $item['slug'] }}" class="hover:underline">
                                <span class="text-sm text-gray-500">{{ $item->create_at }}</span>
                                <span
                                    class="text-sm bg-blue-100 text-blue-800 px-2 py-1 rounded">{{ $item->kategori->jenis_kegiatan }}</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $item->judul }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit(strip_tags($item->deskripsi), 100) }}</p>
                        <a href="/berita/{{ $item['slug'] }}" class="text-blue-600 hover:text-blue-800 font-medium">Baca
                            Selengkapnya →</a>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $slot }}
</section>
